<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* oct_deals/template/common/search.twig */
class __TwigTemplate_4f3f4d8d5262d56e78f19a6ad6876d5ccf7339b716a85f05666b35f9a5aa97ec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form id=\"search\" class=\"ds-header-search align-items-center ps-0 ps-md-3\">
\t<button type=\"button\" class=\"ds-header-search-close button button-transparent d-md-none\" aria-label=\"Close search\">
\t\t<svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path d=\"M1 1L13 13M1 13L13 1\" stroke=\"#D84040\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t</svg>
\t</button>
\t<input id=\"searchInput\" type=\"text\" name=\"search\" value=\"";
        // line 7
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["search_input_header_text"] ?? null);
        echo "\" class=\"form-control fsz-12 br-7\">
\t<button type=\"button\" aria-label=\"Search\" id=\"ds-search-button\" class=\"ds-header-search-button button button-transparent\">
\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"
\t\t\txmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path
\t\t\t\td=\"M19.2802 18.47L15.4392 14.629C16.7232 13.106 17.5002 11.143 17.5002 9C17.5002 4.175 13.5752 0.25 8.75021 0.25C3.92521 0.25 0.000213623 4.175 0.000213623 9C0.000213623 13.825 3.92521 17.75 8.75021 17.75C10.8932 17.75 12.8562 16.973 14.3792 15.689L18.2202 19.53C18.3662 19.676 18.5582 19.75 18.7502 19.75C18.9422 19.75 19.1342 19.677 19.2802 19.53C19.5732 19.238 19.5732 18.763 19.2802 18.47ZM1.50021 9C1.50021 5.002 4.75221 1.75 8.75021 1.75C12.7482 1.75 16.0002 5.002 16.0002 9C16.0002 12.998 12.7482 16.25 8.75021 16.25C4.75221 16.25 1.50021 12.998 1.50021 9Z\"
\t\t\t\tfill=\"#00171F\" />
\t\t</svg>
\t</button>
\t";
        // line 16
        if (($context["oct_live_search_status"] ?? null)) {
            // line 17
            echo "\t\t<div id=\"ds_livesearch\" class=\"ds-livesearch\">
\t\t\t<div class=\"ds-livesearch-inner\"></div>
\t\t</div>
\t";
        }
        // line 21
        echo "</form>

";
        // line 23
        if (($context["oct_live_search_status"] ?? null)) {
            // line 24
            echo "\t<script>
\t\tfunction clearLiveSearch() {
\t\t\t\$('#overlay').removeClass('active');
\t\t\t\$('#overlay').removeClass('transparent');
\t\t\t\$('#ds_livesearch').removeClass('expanded');
\t\t\t\$('.ds-livesearch-inner').html('');
\t\t\t\$('#searchInput').val('').removeClass('active');
\t\t\t\$('body').removeClass('no-scroll');
\t\t}

\t\t\$(document).ready(function() {
\t\t\topenMobileSearch();

\t\t\tlet timer, delay = ";
            // line 37
            echo ($context["delay_setting"] ?? null);
            echo ";

\t\t\t\$('#searchInput').keyup(function(event) {
\t\t\t\tswitch(event.keyCode) {
\t\t\t\t\tcase 37:
\t\t\t\t\tcase 39:
\t\t\t\t\tcase 38:
\t\t\t\t\tcase 40:
\t\t\t\t\t\treturn;
\t\t\t\t\tcase 27:
\t\t\t\t\t\tclearLiveSearch();
\t\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tclearTimeout(timer);

\t\t\t\ttimer = setTimeout(function() {
\t\t\t\t\tlet value = \$('#search input[name=\\'search\\']').val();
\t\t\t\t\tconst overlay = document.getElementById('overlay');

\t\t\t\t\tif (value.length >= ";
            // line 57
            echo ($context["count_symbol"] ?? null);
            echo ") {
\t\t\t\t\t\tlet key = encodeURIComponent(value);
\t\t\t\t\t\toctsearch.search(key, 'desktop');
\t\t\t\t\t} else if (value.length === 0) {
\t\t\t\t\t\tclearLiveSearch();
\t\t\t\t\t}

\t\t\t\t\toverlay.addEventListener('click', (e) => {
\t\t\t\t\t\tconst target = e.target;
\t\t\t\t\t\ttarget.classList.remove('active');
\t\t\t\t\t\tclearLiveSearch();
\t\t\t\t\t});

\t\t\t\t}, delay );
\t\t\t});
\t\t});

\t\tvar octsearch = {
\t\t\t'search': function(key, type) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=octemplates/module/oct_live_search',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdata: 'key=' + key,
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcache: false,
\t\t\t\t\tbeforeSend: function() {

\t\t\t\t\t\t\$('#ds_livesearch').addClass('expanded');
\t\t\t\t\t\tlet loader = document.createElement('div');

\t\t\t\t\t\tloader.classList.add('spinner-border');
\t\t\t\t\t\tloader.setAttribute('role', 'status');
\t\t\t\t\t\tloader.innerHTML = '<span class=\"visually-hidden\">Loading...</span>';
\t\t\t\t\t\t\$('#search').append(loader);
\t\t\t\t\t\t\$('body').addClass('no-scroll');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\t\$('.ds-livesearch-inner').html(data);
\t\t\t\t\t\t\$('#searchInput, #overlay').addClass('active');
\t\t\t\t\t\t\$('#overlay').addClass('transparent');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#search .spinner-border').remove();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t</script>
";
        } else {
            // line 106
            echo "\t<script>
\t\t\$(document).ready(function() {
\t\t\topenMobileSearch();
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 106,  111 => 57,  88 => 37,  73 => 24,  71 => 23,  67 => 21,  61 => 17,  59 => 16,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/search.twig", "");
    }
}
