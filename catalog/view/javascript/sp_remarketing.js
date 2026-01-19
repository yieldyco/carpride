function remarketingLog(message) {
    console.log('%c%s', 'color: #167d4b; font-weight: bold;', message);
}

function remarketingAddToCart(json) {
	const heading = document.title || 'other'; 
	if (!json?.remarketing || Array.isArray(json.remarketing) && json.remarketing.length === 0) { remarketingLog('No remarketing data'); return; } 
	const { remarketing } = json; 
	if (remarketing?.ads_event && typeof gtag !== 'undefined') { gtag('event', 'add_to_cart', remarketing.ads_event); if (remarketing?.ads_conversion) { gtag('event', 'conversion', remarketing.ads_conversion); } }
	if (remarketing?.fb_pixel_event && typeof fbq !== 'undefined') { fbq('track', 'AddToCart', remarketing.fb_pixel_event, {eventID: remarketing.event_id}); }
	if (remarketing?.tiktok_event && typeof ttq !== 'undefined') { ttq.track('AddToCart', remarketing.tiktok_event, {eventID: remarketing.event_id}); }
	if (remarketing?.snapchat_event && typeof snaptr !== 'undefined') {	snaptr('track', 'ADD_CART', remarketing.snapchat_event); }
	if (remarketing?.ga4_datalayer) { window.dataLayer = window.dataLayer || []; dataLayer.push({ ecommerce: null }); remarketing.ga4_datalayer.ecommerce.items[0].item_list_name = heading; dataLayer.push(remarketing.ga4_datalayer); }
	if (remarketing?.ga4_event && typeof gtag !== 'undefined') { remarketing.ga4_event.items[0].item_list_name = heading; gtag('event', 'add_to_cart', remarketing.ga4_event); }
	if (remarketing?.esputnik_event && typeof eS !== 'undefined') {	eS('sendEvent', 'StatusCart', remarketing.esputnik_event); }
	if (remarketing?.uet_event) { window.uetq = window.uetq || []; window.uetq.push('event', 'add_to_cart', remarketing.uet_event);	}
	if (typeof events_cart_add !== 'undefined') { events_cart_add(); }
	remarketingLog('add_to_cart');
}	  

function remarketingRemoveFromCart(json) {
	const heading = document.title || 'other';
	if (!json?.remarketing || (Array.isArray(json.remarketing) && json.remarketing.length === 0)) {	remarketingLog('No remarketing data'); return; }
	const { remarketing } = json;
	if (remarketing?.ga4_datalayer) { window.dataLayer = window.dataLayer || []; dataLayer.push({ ecommerce: null }); remarketing.ga4_datalayer.ecommerce.items[0].item_list_name = heading; dataLayer.push(remarketing.ga4_datalayer); }
	if (remarketing?.ga4_event && typeof gtag !== 'undefined') { remarketing.ga4_event.items[0].item_list_name = heading; gtag('event', 'remove_from_cart', remarketing.ga4_event); }
	if (remarketing?.esputnik_event && typeof eS !== 'undefined') {	eS('sendEvent', 'StatusCart', remarketing.esputnik_event); }
	remarketingLog('remove_from_cart');
}

function remarketingRemoveFromSimpleCart(cart_product_id, quantity) {
	if (cart_product_id && quantity) fetch('index.php?route=common/remarketing/removeProduct', {method: 'POST', headers: {'Content-Type': 'application/x-www-form-urlencoded'}, body: 'product_id=' + encodeURIComponent(cart_product_id) + '&quantity=' + encodeURIComponent(quantity)}).then(r => r.json()).then(json => typeof remarketingRemoveFromCart === 'function' && remarketingRemoveFromCart(json));
}

function sendWishList(json) {
	const heading = document.title || 'other';
	if (!json?.remarketing || Array.isArray(json.remarketing) && json.remarketing.length === 0) { remarketingLog('No remarketing data'); return; } 
	const { remarketing } = json; 
	if (remarketing?.fb_pixel_event && typeof fbq !== 'undefined') { fbq('track', 'AddToWishlist', remarketing.fb_pixel_event, {eventID: remarketing.event_id}); }
	if (remarketing?.tiktok_event && typeof ttq !== 'undefined') { ttq.track('AddToWishlist', remarketing.tiktok_event, {eventID: remarketing.event_id}); }
	if (remarketing?.snapchat_event && typeof snaptr !== 'undefined') {	snaptr('track', 'ADD_TO_WISHLIST', remarketing.snapchat_event); }
	if (remarketing?.ga4_datalayer) { window.dataLayer = window.dataLayer || []; dataLayer.push({ ecommerce: null }); remarketing.ga4_datalayer.ecommerce.items[0].item_list_name = heading; dataLayer.push(remarketing.ga4_datalayer); }
	if (remarketing?.ga4_event && typeof gtag !== 'undefined') { remarketing.ga4_event.items[0].item_list_name = heading; gtag('event', 'add_to_wishlist', remarketing.ga4_event); }
	if (remarketing?.esputnik_event && typeof eS !== 'undefined') {	eS('sendEvent', 'AddToWishlist', remarketing.esputnik_event); }
	if (typeof events_wishlist === 'function') { events_wishlist(); }
	remarketingLog('wishlist');
}

function sendCompare(json) {
	const heading = document.title || 'other';
	if (!json?.remarketing || Array.isArray(json.remarketing) && json.remarketing.length === 0) { remarketingLog('No remarketing data'); return; } 
	const { remarketing } = json; 
	if (remarketing?.fb_pixel_event && typeof fbq !== 'undefined') { fbq('trackCustom', 'Compare', remarketing.fb_pixel_event, {eventID: remarketing.event_id}); }
	if (remarketing?.ga4_datalayer) { window.dataLayer = window.dataLayer || []; dataLayer.push({ ecommerce: null }); remarketing.ga4_datalayer.ecommerce.items[0].item_list_name = heading; dataLayer.push(remarketing.ga4_datalayer); }
	if (remarketing?.ga4_event && typeof gtag !== 'undefined') { remarketing.ga4_event.items[0].item_list_name = heading; gtag('event', 'add_to_compare', remarketing.ga4_event); }
	remarketingLog('compare');
}

function remarketingCallback(json) {
	const heading = document.title || 'other';
	if (!json?.remarketing || Array.isArray(json.remarketing) && json.remarketing.length === 0) { remarketingLog('No remarketing data'); return; } 
	const { remarketing } = json; 
	if (remarketing?.fb_status && typeof fbq !== 'undefined') { fbq('track', 'Contact'); }
	if (remarketing?.tiktok_status && typeof ttq !== 'undefined') { ttq.track('Contact'); }
	if (remarketing?.ga4_event && typeof gtag !== 'undefined') { gtag('event', 'callback', remarketing.ga4_event); }
	if (remarketing?.ga4_datalayer) { window.dataLayer = window.dataLayer || []; dataLayer.push({ ecommerce: null }); dataLayer.push(remarketing.ga4_datalayer); }
	remarketingLog('callback');
} 

function remarketingFoundCheaper(json) {
	const heading = document.title || 'other';
	if (!json?.remarketing || Array.isArray(json.remarketing) && json.remarketing.length === 0) { remarketingLog('No remarketing data'); return; } 
	const { remarketing } = json; 
	if (remarketing?.fb_status && typeof fbq !== 'undefined') { fbq('track', 'Contact'); }
	if (remarketing?.tiktok_status && typeof ttq !== 'undefined') { ttq.track('Contact'); }
	if (remarketing?.ga4_event && typeof gtag !== 'undefined') { gtag('event', 'found_cheaper', remarketing.ga4_event); }
	if (remarketing?.ga4_datalayer) { window.dataLayer = window.dataLayer || []; dataLayer.push({ ecommerce: null }); dataLayer.push(remarketing.ga4_datalayer); }
	remarketingLog('found_cheaper');
} 
  
function remarketingNewsletter(json) {
	if (json['success'] || (json['output'] && typeof(json['error']) === 'undefined')) {
		remarketingLog('newsletter');
		window.dataLayer = window.dataLayer || []; dataLayer.push({'event': 'ga4_newsletter'})
		if (typeof gtag != 'undefined') { gtag('event', 'newsletter'); }
		if (typeof snaptr != 'undefined') { snaptr('track', 'SIGN_UP'); }
	}
} 

function remarketingTelephoneClick() {
	remarketingLog('telephone_click');
	window.dataLayer = window.dataLayer || []; dataLayer.push({'event': 'ga4_telephone_click'});
	if (typeof gtag != 'undefined') { gtag('event', 'telephone_click'); }
	if (typeof fbq != 'undefined') { fbq('track', 'Contact'); }
	if (typeof ttq != 'undefined') { ttq.track('Contact'); }
} 

function remarketingMailClick() {
	remarketingLog('mail_click');
	window.dataLayer = window.dataLayer || []; dataLayer.push({'event': 'ga4_mail_click'});
	if (typeof gtag != 'undefined') { gtag('event', 'mail_click'); }
	if (typeof fbq != 'undefined') { fbq('track', 'Contact'); }
	if (typeof ttq != 'undefined') { ttq.track('Contact'); }
} 

function remarketingTgClick() {
	remarketingLog('tg_click');
	window.dataLayer = window.dataLayer || []; dataLayer.push({'event': 'ga4_tg_click'});
	if (typeof gtag != 'undefined') { gtag('event', 'tg_click'); }
	if (typeof fbq != 'undefined') { fbq('track', 'Contact'); }
	if (typeof ttq != 'undefined') { ttq.track('Contact'); } 
} 

function remarketingQuickOrder(json) { 
	if (!json?.remarketing) { remarketingLog('No remarketing data'); return; }
	const { remarketing } = json; 
	if (remarketing?.ec_data) { window.enhanced_conversion_data = remarketing.ec_data; typeof gtag !== 'undefined' && gtag('set', 'user_data', remarketing.ec_data); }
	if (remarketing?.ads_event && typeof gtag !== 'undefined') { gtag('event', 'purchase', remarketing.ads_event)};
	if (remarketing?.ads_conversion && typeof gtag !== 'undefined') { gtag('event', 'conversion', remarketing.ads_conversion)}; 
	if (remarketing?.reviews_event) { const s = document.createElement('script'); s.src = 'https://apis.google.com/js/platform.js?onload=renderOptIn'; s.async = true; document.head.appendChild(s); window.renderOptIn = () => window.gapi.load('surveyoptin', () => window.gapi.surveyoptin.render(remarketing.reviews_event)); }
	if (remarketing?.ga4_datalayer) { window.dataLayer = window.dataLayer || []; dataLayer.push({ ecommerce: null }); dataLayer.push(remarketing.client_data); dataLayer.push(remarketing.ga4_datalayer); }
	if (remarketing?.ga4_event && typeof gtag !== 'undefined') { gtag('event', remarketing.ga4_event_name, remarketing.ga4_event); }
	if (remarketing?.fb_event && typeof fbq !== 'undefined') { fbq('track', 'Purchase', remarketing.fb_event, {eventID: remarketing.fb_event_id}); if (remarketing?.fb_lead_event) fbq('track', 'Lead', remarketing.fb_lead_event, {eventID: remarketing.fb_lead_event_id}); }
	if (remarketing?.tiktok_event && typeof ttq !== 'undefined') { ttq.identify({phone_number : remarketing.telephone }); ttq.track('Purchase', remarketing.tiktok_event, {eventID: remarketing.tiktok_event_id}); }
	if (remarketing?.snapchat_event && typeof snaptr !== 'undefined') { snaptr('track', 'PURCHASE', remarketing.snapchat_event); }
	if (remarketing?.esputnik_event && typeof eS !== 'undefined') { eS('sendEvent', 'PurchasedItems', remarketing.esputnik_event); }
	if (remarketing?.uet_event) { window.uetq = window.uetq || []; window.uetq.push('event', 'purchase', remarketing.uet_event); }
	if (typeof quickPurchase === 'function') {
		quickPurchase(remarketing.order_id, remarketing.default_total, remarketing.email, remarketing.telephone);
	}
	remarketingLog('quick_order');
}
	
function decodePostParams(str) {
    return (str || document.location.search).replace(/(^\?)/,'').split("&").map(function(n){return n = n.split("="),this[n[0]] = n[1],this}.bind({}))[0];
}

function remarketingClick(e) {
	const href = e.currentTarget.getAttribute('href');
	if (href.startsWith('tel:') && typeof remarketingTelephoneClick === 'function') {
		remarketingTelephoneClick();
	} else if (href.startsWith('mailto:') && typeof remarketingMailClick === 'function') {
		remarketingMailClick();
	} else if (href.includes('t.me') && typeof remarketingTgClick === 'function') {
		remarketingTgClick();
    }
}

function remarketingClickHandler(e) {
	e.addEventListener('click', () => {
		const item_id = e.querySelector('.remarketing_cart_button')?.getAttribute('data-product_id') || '';
		const headers = Array.from(document.querySelectorAll('h1, h2, h3, .sc-module-header, .title-module > span, .rm-column-title, .fm-column-title, .us-module-column-box .panel-heading')).reverse();
		const header = headers.find(el => el.compareDocumentPosition(e) & Node.DOCUMENT_POSITION_FOLLOWING);
		localStorage.setItem('remarketing_product_id', item_id);
		localStorage.setItem('remarketing_heading', header?.textContent.trim() || '');
	});
} 

function remarketingAjaxSuccess(xhr, settings) {
	const cartRoutes = [
		'checkout/cart/add',
		'extension/module/technics/technicscart/fastadd2cart',
		'checkout/cart/add&oct_dirrect_add=1',
		'extension/module/frametheme/ft_cart/add',
		'extension/basel/basel_features/add_to_cart',
		'extension/soconfig/cart/add'
	];

	if (cartRoutes.some(url => settings.url.includes(url))) {
		if (settings.type === 'POST' && xhr.responseJSON?.remarketing) {
			if (typeof remarketingAddToCart === 'function') {
				remarketingAddToCart(xhr.responseJSON);
			}
		}
	}

	if (settings.url.includes('checkout/cart/remove') || settings.url.includes('status_cart') || settings.url.includes('statusCart') || settings.url.includes('extension/soconfig/cart/remove')) {
		if (xhr.responseJSON?.remarketing) {
			if (typeof remarketingRemoveFromCart === 'function') {
				remarketingRemoveFromCart(xhr.responseJSON);
			}
		}
	}

	if (settings.url.includes('account/wishlist/add')) {
		if (xhr.responseJSON?.remarketing) {
			if (typeof sendWishList === 'function') {
				sendWishList(xhr.responseJSON);
			}
		}
	}

	if (settings.url.includes('product/compare/add')) {
		if (xhr.responseJSON?.remarketing) {
			if (typeof sendCompare === 'function') {
				sendCompare(xhr.responseJSON);
			}
		}
	}

	if (settings.url.includes('oct_popup_call_phone/send') || settings.url.includes('_callback') || settings.url.includes('callback/write')) {
		if (xhr.responseJSON?.remarketing) {
			if (typeof remarketingCallback === 'function') {
				remarketingCallback(xhr.responseJSON);
			}
		}
	}

	if (settings.url.includes('footer/addToNewsletter') || settings.url.includes('oct_subscribe/makeSubscribe')) {
		if (xhr.responseJSON) {
			if (typeof remarketingNewsletter === 'function') {
				remarketingNewsletter(xhr.responseJSON);
			}
		}
	}

	if (settings.url.includes('found_cheaper_product_confirm') || settings.url.includes('module/oct_popup_found_cheaper/send')) {
		if (xhr.responseJSON?.remarketing) {
			if (typeof remarketingFoundCheaper === 'function') {
				remarketingFoundCheaper(xhr.responseJSON);
			}
		}
	}

	if (settings.url.includes('oct_product_faq/write')) {
		if (xhr.responseJSON?.success) {
			window.dataLayer = window.dataLayer || []; dataLayer.push({ event: 'ga4_product_faq' });
			if (typeof gtag !== 'undefined') { gtag('event', 'product_faq'); }
		}
	}

	if (settings.url.includes('product/product/write')) {
		if (xhr.responseJSON?.success) {
			window.dataLayer = window.dataLayer || []; dataLayer.push({ event: 'ga4_product_review' });
			if (typeof gtag !== 'undefined') { gtag('event', 'product_review'); }
		}
	}

	if (settings.url.includes('oct_sreview_reviews/write')) {
		if (xhr.responseJSON?.success) {
			window.dataLayer = window.dataLayer || []; dataLayer.push({ event: 'ga4_store_review' });
			if (typeof gtag !== 'undefined') { gtag('event', 'store_review'); } 
		}
	}

	const quickOrderRoutes = [
		'extension/module/luxshop_newfastordercart',
		'extension/module/luxshop_newfastorder',
		'extension/module/cyber_newfastordercart',
		'extension/module/cyber_newfastorder',
		'extension/module/chameleon_newfastorder/addFastOrder',
		'extension/module/newfastorder',
		'extension/module/newfastordercart',
		'extension/module/upstore_newfastorder/addFastOrder',
		'extension/module/uni_quick_order/add'
	];

	if (quickOrderRoutes.some(url => settings.url.includes(url))) {
		if (settings.type === 'POST' && xhr.responseJSON?.remarketing) { 
			if (typeof remarketingQuickOrder === 'function') {
				remarketingQuickOrder(xhr.responseJSON);
			}
		}
	}

	if (settings.url.includes('checkout/simplecheckout&group=0')) {
		const simple_data = decodePostParams(decodeURI(settings.data));
		if (simple_data.remove !== 'undefined' && simple_data.remove !== '') {
			const quantity_key = 'quantity[' + simple_data.remove + ']';
			const quantity = simple_data[quantity_key];
			if (cart_products?.[simple_data.remove]) {
				const cart_product_id = cart_products[simple_data.remove]['product_id'];
				if (typeof remarketingRemoveFromSimpleCart === 'function') {
					remarketingRemoveFromSimpleCart(cart_product_id, quantity);
				}
			}
		}
	}

	if (settings.url.includes('checkout/simplecheckout/prevent_delete')) {
		if (typeof fbq !== 'undefined' && typeof facebook_payment_data !== 'undefined') {
			fbq('track', 'AddPaymentInfo', facebook_payment_data);
		}
		if (typeof ttq !== 'undefined' && typeof tiktok_payment_data !== 'undefined') {
			ttq.track('AddPaymentInfo', tiktok_payment_data); 
		}
		if (typeof gtag !== 'undefined' && typeof ga4_payment_data !== 'undefined') {
			gtag('event', 'add_payment_info', ga4_payment_data);
		}
	}
}

document.addEventListener('DOMContentLoaded', function() {
	remarketingLog('sp remarketing 8.1.32002.61952 start');
	document.querySelectorAll("[onclick*='cart.add'], [onclick*='get_revpopup_cart'], [onclick*='addToCart'], [onclick*='get_oct_popup_add_to_cart']").forEach(function(e) {
		e.classList.add('remarketing_cart_button'); const product_id = e.getAttribute('onclick').match(/[0-9]+/)[0]; e.setAttribute('data-product_id', product_id);
	});  
	document.querySelectorAll('a[href^="tel:"], a[href^="mailto:"], a[href*="t.me"]').forEach(function(e) { e.addEventListener('click', remarketingClick); });
	document.querySelectorAll('.product-thumb, .fm-module-item, .rm-module-item, .sc-module-item, .us-module-item, .ds-module-item').forEach(remarketingClickHandler);
	const originalOpen = XMLHttpRequest.prototype.open;
	const originalSend = XMLHttpRequest.prototype.send;

	XMLHttpRequest.prototype.open = function(method, url, async, user, password) {
		this._method = method;
		this._url = url;
		return originalOpen.apply(this, arguments);
	};

	XMLHttpRequest.prototype.send = function(body) {
		const xhr = this;

		this.addEventListener('load', function() {
			if (xhr.readyState === 4 && xhr.status >= 200 && xhr.status < 300) {
				let responseJSON;
				try {
					responseJSON = JSON.parse(xhr.responseText);
				} catch (e) {
					return;
				}

				const settings = {
					url: xhr._url || '',
					type: xhr._method || 'GET',
					data: body || ''
				};

				remarketingAjaxSuccess({ responseJSON }, settings);
			}
		});

		return originalSend.apply(this, arguments);
	};

	const originalFetch = window.fetch;
	window.fetch = function(input, init = {}) {
		const method = (init.method || 'GET').toUpperCase();
		const url = typeof input === 'string' ? input : input.url;
		const body = init.body || '';

		return originalFetch(input, init).then(response => {
			const clone = response.clone();
			return clone.text().then(text => {
				let responseJSON;
				try {
					responseJSON = JSON.parse(text);
				} catch (e) {
					return response;
				}

				const settings = {
					url: url,
					type: method,
					data: body
				};

				remarketingAjaxSuccess({ responseJSON }, settings);
				return response;
			});
		});
	};
	/* 8.1.32002.61952 */
});