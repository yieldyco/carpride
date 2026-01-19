$(document).ready(function () {

  // use default autocomplete script if not defined ss_autocomplete
  if ($.fn.ss_autocomplete === undefined) {
    $.fn.ss_autocomplete = $.fn.autocomplete;
  }

  if (window.search_element === undefined) {
    search_element = '#search input[name="search"]';
  } else {
    search_element = window.search_element;
  }
  
  $(search_element).ss_autocomplete({
    delay: 500,
    ajax_loading: false,
    source: function (request, response) {
      if (request === '') {
        this.hide();
        return false;
      }

      const category_id = this.category_id || 0;

      let url = 'index.php?route=extension/module/search_suggestion/ajax&keyword=' + encodeURIComponent(request)
      if (category_id) {
        url += '&category_id=' + category_id
      } 

      const self = this

      $.ajax({
        url: url,
        dataType: 'json',
        beforeSend: function() {
          $('.tooltip').remove();
        },  
        success: function (json) {
          response($.map(json, function (item) {

            const elements = {
              left: [],
              center: [],
              right: []
            }

            let more = false;

            $.each(item['fields'], function (field_name, field) {
              if (field != undefined && field[field_name] !== undefined && field[field_name]) {

                if (field_name == 'more') {
                  more = true
                }

                var field_html = '';
                var class_name = '';

                if (field_name == 'image') {
                  let title = ''
                  if(item['title'] != undefined && item['title']) {
                    title = ' title="' + item['title'] + '" data-toggle="tooltip" data-placement="top" '
                    // title = ' title="' + item['name'] + '" '
                  }
                  field_html = '<img src="' + field[field_name] + '" ' + title + ' />';
                } else if (field_name == 'price') {
                  if (field.special) {
                    field_html = '<span class="price-old">' + field.price + '</span><span class="price-new">' + field.special + '</span>';
                  } else {
                    field_html = '<span class="price-base">' + field.price + '</span>';
                  }
                } else if (field_name == 'stock') {
                  if (field.class != undefined) {
                    class_name = field.class;
                  }
                  field_html = field[field_name];

                } else {
                  field_html = field[field_name];
                }

                if (field.label != undefined && field.label.show != undefined && field.label.show) {
                  field_html = '<span class="label">' + field.label.label + '</span>' + field_html;
                }
                if (field.location != undefined && field.location == 'inline') {
                  field_html = '<span class="' + field_name + ' ' + class_name  + '">' + field_html + '</span>';
                } else {
                  field_html = '<div class="' + field_name + ' ' + class_name  + '">' + field_html + '</div>';
                }

                const column = field.column || 'center'

                elements[column].push({sort: field.sort, html: field_html});
              }
            });
            
            $.each(Object.keys(elements), function (index, column) {
              elements[column].sort(function (a, b) {
                return a.sort - b.sort
              });  
            });
            
            // implode
            const elements_html = {
              left: '',
              center: '',
              right: ''
            }

            $.each(Object.keys(elements), function (index, column) {
              $.each(elements[column], function (index, element) {
                if (element != undefined) {
                  elements_html[column] = elements_html[column] + element.html;
                }
              });  
            });
            
            let columns_html = ''
            $.each(Object.keys(elements_html), function (index, column) {
              if (elements_html[column].length > 0) {
                columns_html = columns_html + '<div class="' + column + '">' + elements_html[column] + '</div>';
              } 
            });            
            
            if (item['type'] != undefined) {
              item_type = item['type'];
            } else {
              item_type = '';
            }

            const classes = []

            if (item['inline'] != undefined && item['inline']) {
              classes.push('inline')
            }              
            if (item['active'] != undefined && item['active']) {
              classes.push('active')
            }              
            if (more) {
              classes.push('more')
            }

            columns_html = '<div class="search-suggestion ' + item_type + '">' + columns_html + '</div>';            

            return {
              label: columns_html,
              value: item['href'],
              class: classes.join(' '),
              ajax: item['ajax'] || 0,
              category_id: item['category_id'] || 0,
              keyword: item['keyword'] || ''
            };
          }));
        },
        complete: function() {
          self.focus()
          self.category_id = 0
          self.ajax_loading = false
        }
      });
    },
    select: function (item) {
      if (item['keyword']) {

        $(this).val(item['keyword']);
        this.ajax_loading = true;
        this.request();

      } else if (item['value'] !== '') {
        if (!item['ajax']) {
          location.href = item['value'];
        } else {

          this.category_id = item['category_id']
          this.ajax_loading = true

          this.request()
        }
      }
      return false;
    },

    // focus: function (event, ui) {
    //   return true;
    // }
  });

  // Voice search integration for search suggestion
  (function setupSearchSuggestionVoice() {

    if (!window.ss_voice_enabled) {
      return;
    }

    var NativeSpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!NativeSpeechRecognition) {
      $('.ss-voice-search-button').remove();
      $('.search-wrapper').removeClass('ss-voice-search-enabled');
      return;
    }

    var recognizing = false;
    var recognitionTimeout = null;
    var recognitionInstance = new NativeSpeechRecognition();

    recognitionInstance.interimResults = true;
    recognitionInstance.continuous = true;

    // Detect language from cookie `language`, fallback to ru-RU
    function getCookieValue(name) {
      var match = document.cookie.match(new RegExp('(?:^|; )' + name.replace(/([.$?*|{}()\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'));
      return match ? decodeURIComponent(match[1]) : undefined;
    }

    var langCode = getCookieValue('language');
    if (langCode) {
      var langParts = langCode.split('-');
      if (langParts.length === 2) {
        langCode = langParts[0].toLowerCase() + '-' + langParts[1].toUpperCase();
      }
    } else {
      langCode = 'ru-RU';
    }
    recognitionInstance.lang = langCode;

    function beginTimeout() {
      clearTimeout(recognitionTimeout);
      recognitionTimeout = setTimeout(function () {
        if (recognizing) {
          recognitionInstance.stop();
        }
      }, 30000); // 30 seconds safety timeout
    }

    function clearRecognitionTimeout() {
      clearTimeout(recognitionTimeout);
      recognitionTimeout = null;
    }

    // Helper: find closest search wrapper for clicked microphone
    function getSearchInputFromButton($button) {
      var $wrapper = $button.closest('.search-wrapper');
      if ($wrapper.length) {
        return $wrapper.find('input[name="search"]');
      }
      // Fallback to global selector if wrapper not found
      return $(search_element).first();
    }

    var activeSearchInput = null;
    var autoRequestPending = false;

    recognitionInstance.onstart = function () {
      recognizing = true;
      beginTimeout();
      $(document).trigger('ss_voice_start');
    };

    recognitionInstance.onend = function () {
      recognizing = false;
      clearRecognitionTimeout();
      $(document).trigger('ss_voice_end');
    };

    recognitionInstance.onerror = function (event) {
      // Log to console for debugging; do not break UI
      if (window.console && console.error) {
        console.error('Search suggestion voice error:', event);
      }
    };

    recognitionInstance.onresult = function (event) {
      if (!activeSearchInput || !activeSearchInput.length) {
        return;
      }

      var finalText = '';
      var interimText = '';

      for (var i = event.resultIndex; i < event.results.length; i++) {
        var result = event.results[i];
        if (result.isFinal) {
          finalText += result[0].transcript + ' ';
        } else {
          interimText += result[0].transcript;
        }
      }

      finalText = $.trim(finalText);
      interimText = $.trim(interimText);

      var textToUse = finalText || interimText;
      if (textToUse) {
        activeSearchInput.val(textToUse);
      }

      // When we receive a final hypothesis, trigger suggestions once
      if (event.results[event.resultIndex].isFinal) {
        autoRequestPending = true;

        // Give browser a small delay to update input value, then trigger autocomplete
        setTimeout(function () {
          if (!activeSearchInput || !activeSearchInput.length) {
            return;
          }

          // Access underlying autocomplete instance
          var inputEl = activeSearchInput.get(0);
          if (inputEl && typeof inputEl.request === 'function') {
            inputEl.request();
          } else {
            // Fallback: trigger keyup to let existing handlers fire
            activeSearchInput.trigger('keyup');
          }
        }, 200);

        beginTimeout();
      }
    };

    function toggleVoiceRecognition($button) {
      if (recognizing) {
        recognitionInstance.stop();
        return;
      }

      activeSearchInput = getSearchInputFromButton($button);
      if (!activeSearchInput.length) {
        return;
      }

      autoRequestPending = false;
      activeSearchInput.val('');

      try {
        recognitionInstance.start();
      } catch (e) {
        // Some browsers throw if start is called multiple times quickly
        if (window.console && console.warn) {
          console.warn('Search suggestion voice start failed:', e);
        }
      }
    }

    $(document).on('click', '.ss-voice-search-button', function (e) {
      e.preventDefault();
      e.stopPropagation();
      toggleVoiceRecognition($(this));
    });

    // Optional: CSS hook for active state
    $(document).on('ss_voice_start', function () {
      $('.ss-voice-search-button').addClass('ss-voice-active');
    });

    $(document).on('ss_voice_end', function () {
      $('.ss-voice-search-button').removeClass('ss-voice-active');
    });
  
    // detach the standard search handler from the microphone button,
    // which is attached in catalog/view/javascript/common.js
    (function detachVoiceButtonFromCoreSearch() {
      //  Waiting for the standard scripts initialization to complete
      setTimeout(function () {
        $(search_element).each(function () {
          var $input = $(this);
          var $wrapper = $input.closest('.search-wrapper');
          $wrapper.find('.ss-voice-search-button').each(function () {
            var $btn = $(this);
            // Remove click handlers attached directly to this button
            $btn.off('click');
          });
        });
      }, 0);
    })();
  })();
});