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

/* oct_deals/template/octemplates/module/oct_popup_purchase_byoneclick.twig */
class __TwigTemplate_9a2484c58d067e1031c54bd85d15dc8859fef3b9c3951404e6ea6ba1d1add5f7 extends \Twig\Template
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
        if ((array_key_exists("oct_byoneclick_status", $context) && ($context["oct_byoneclick_status"] ?? null))) {
            // line 2
            echo "<div class=\"ds-buy-one-click d-flex flex-column flex-xxl-row align-items-xxl-center justify-content-xxl-end\">
\t<span class=\"dark-text fsz-14 fw-500 me-xxl-2\">";
            // line 3
            echo ($context["oct_product_oneclick"] ?? null);
            echo "</span>
\t<form action=\"javascript:;\" id=\"oct_purchase_byoneclick_form";
            // line 4
            echo ($context["oct_byoneclick_page"] ?? null);
            echo "\" method=\"post\">
\t\t<div class=\"input-group mt-2 mt-xxl-0 align-items-stretch\">
\t\t\t<input type=\"tel\" name=\"telephone\" placeholder=\"";
            // line 6
            echo ($context["oct_product_oneclick_placeholder"] ?? null);
            echo "\" id=\"one_click_input\" class=\"one_click_input form-control br-7 py-1\" inputmode=\"tel\">
\t\t\t";
            // line 7
            if ((array_key_exists("oct_byoneclick_product_id", $context) && ($context["oct_byoneclick_product_id"] ?? null))) {
                // line 8
                echo "\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
                echo ($context["oct_byoneclick_product_id"] ?? null);
                echo "\" />
\t\t\t";
            }
            // line 10
            echo "\t\t\t<input type=\"hidden\" name=\"oct_byoneclick\" value=\"1\" />
\t\t\t";
            // line 11
            if ((array_key_exists("oct_cart_in", $context) && ($context["oct_cart_in"] ?? null))) {
                // line 12
                echo "\t\t\t<input type=\"hidden\" name=\"oct_cart_in\" value=\"1\" />
\t\t\t";
            }
            // line 14
            echo "\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button class=\"button button-outline button-outline-primary ds-buy-one-click-btn py-2 px-4 ds-product-one-click-btn\" type=\"button\" aria-label=\"Send\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"17\" viewBox=\"0 0 16 17\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M11.7349 16.3449C11.3583 16.3449 10.9793 16.2941 10.6052 16.1915C5.54826 14.8034 1.54302 10.8014 0.154075 5.74692C-0.161781 4.59753 0.0112814 3.39973 0.642994 2.37587C1.27717 1.34708 2.31995 0.621836 3.5038 0.384739C4.28565 0.228041 5.06995 0.57754 5.46949 1.25191L6.75177 3.41695C7.37446 4.46871 7.06506 5.82402 6.04694 6.50085L5.11917 7.11781C5.98634 8.89891 7.4449 10.3609 9.2178 11.2272L9.84312 10.2944C10.5232 9.27795 11.8793 8.97357 12.9303 9.59953L15.0986 10.8925C15.7697 11.2928 16.1175 12.0755 15.9641 12.841C15.7278 14.0248 15.0018 15.0675 13.9738 15.7017C13.283 16.1275 12.5143 16.3449 11.7349 16.3449ZM3.88035 1.57596C3.84015 1.57596 3.79915 1.58008 3.75978 1.58828C2.89507 1.76139 2.14686 2.28233 1.69154 3.02151C1.24113 3.75168 1.11723 4.60409 1.34202 5.42039C2.61611 10.059 6.2907 13.7311 10.9309 15.0044C11.7472 15.2284 12.5987 15.1036 13.3272 14.6541C14.0656 14.1987 14.5875 13.4489 14.7573 12.5989C14.8082 12.3438 14.6925 12.0821 14.4685 11.9492L12.3001 10.6562C11.8095 10.365 11.1803 10.5077 10.8652 10.9795L9.95047 12.3454C9.78639 12.5899 9.46983 12.6834 9.20238 12.5702C6.77151 11.5546 4.79432 9.57164 3.7762 7.13176C3.66298 6.85938 3.75885 6.54599 4.00333 6.38273L5.36614 5.47617C5.83869 5.16196 5.98222 4.53271 5.69262 4.04457L4.41033 1.87951C4.29794 1.68836 4.09448 1.57596 3.88035 1.57596ZM10.3541 10.6365H10.3623H10.3541ZM12.7177 6.7035C12.7177 5.0069 11.337 3.62698 9.64122 3.62698C9.30157 3.62698 9.02592 3.90264 9.02592 4.24228C9.02592 4.58193 9.30157 4.85759 9.64122 4.85759C10.6585 4.85759 11.4871 5.68538 11.4871 6.7035C11.4871 7.04315 11.7628 7.31881 12.1024 7.31881C12.4421 7.31881 12.7177 7.04315 12.7177 6.7035ZM15.179 6.7035C15.179 3.64995 12.6948 1.16576 9.64122 1.16576C9.30157 1.16576 9.02592 1.44142 9.02592 1.78107C9.02592 2.12071 9.30157 2.39637 9.64122 2.39637C12.0163 2.39637 13.9484 4.32843 13.9484 6.7035C13.9484 7.04315 14.224 7.31881 14.5637 7.31881C14.9033 7.31881 15.179 7.04315 15.179 6.7035Z\" fill=\"#F8FBFD\"></path>
\t\t\t\t\t</svg>
\t\t\t\t\t<span class=\"button-text ms-2 fsz-12 fw-400\">";
            // line 19
            echo ($context["oct_product_oneclickbuy"] ?? null);
            echo "</span>
\t\t\t\t</button>
\t\t\t</span>
\t\t</div>
\t</form>
</div>
";
            // line 25
            if ((array_key_exists("oct_byoneclick_mask", $context) && ($context["oct_byoneclick_mask"] ?? null))) {
                // line 26
                echo "<script>
\$('#oct_purchase_byoneclick_form";
                // line 27
                echo ($context["oct_byoneclick_page"] ?? null);
                echo " .one_click_input').inputmask({
\tmask: '";
                // line 28
                echo ($context["oct_byoneclick_mask"] ?? null);
                echo "',
\tclearMaskOnLostFocus: false
});
</script>
";
            }
            // line 33
            echo "<script>
\$(\"#one_click_input\").on(\"change paste keyup\", function() {
\t\$(this).removeClass('error_style');
});
\$('#oct_purchase_byoneclick_form";
            // line 37
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .ds-product-one-click-btn').on('click', function() {
\t\$.ajax({
        type: 'post',
        dataType: 'json',
        url: 'index.php?route=octemplates/module/oct_popup_purchase/makeorder',
        cache: false,
        data: \$('#oct_purchase_byoneclick_form";
            // line 43
            echo ($context["oct_byoneclick_page"] ?? null);
            echo "').serialize(),
        beforeSend: function() {
\t\t\tmasked('body', true);

\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 47
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .ds-product-one-click-btn').data('original-content', \$('#oct_purchase_byoneclick_form";
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .ds-product-one-click-btn').html());
\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 48
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .ds-product-one-click-btn').html('<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>').prop('disabled', true);
\t\t},
        complete: function() {
\t\t\tmasked('body', false);

\t\t\tsetTimeout(function () {
\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 54
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .ds-product-one-click-btn').html(\$('#oct_purchase_byoneclick_form";
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .ds-product-one-click-btn').data('original-content')).prop('disabled', false);
\t\t\t}, 600);
        },
        success: function(json) {
\t        if (json['error']) {
\t\t\t\tlet errorOption = '';

\t\t\t\t\$.each(json['error'], function(i, val) {
\t\t\t\t\tif (val) {
\t\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 63
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " [name=\"' + i + '\"]').addClass('error_style');
\t\t\t\t\t\terrorOption += '<div class=\"alert-text-item\">' + val + '</div>';
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tscNotify('danger', errorOption);
\t\t\t} else {
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$(this).attr( \"disabled\", \"disabled\" );
remarketingQuickOrder?.(json);remarketing_order_sent = true;
\t\t\t\t\tsuccessOption = `<div class=\"alert-text-item text-center\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"224\" height=\"170\" viewBox=\"0 0 224 170\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<g filter=\"url(#filter0_d_1701_4211)\">
\t\t\t\t\t\t\t\t\t\t\t<circle cx=\"112\" cy=\"85\" r=\"46.5642\" fill=\"url(#paint0_linear_1701_4211)\"/>
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M106.503 98.1417L96 87.6385L100.786 82.852L106.503 88.5856L123.214 71.8584L128 76.6448L106.503 98.1417Z\" fill=\"#F8FBFD\"/>
\t\t\t\t\t\t\t\t\t\t\t<rect x=\"174.04\" y=\"99.954\" width=\"6.60913\" height=\"6.60913\" transform=\"rotate(30 174.04 99.954)\" fill=\"url(#paint1_linear_1701_4211)\"/>
\t\t\t\t\t\t\t\t\t\t\t<rect x=\"179.764\" y=\"74.054\" width=\"2.70734\" height=\"2.70734\" transform=\"rotate(-14.459 179.764 74.054)\" fill=\"url(#paint2_linear_1701_4211)\"/>
\t\t\t\t\t\t\t\t\t\t\t<rect x=\"57.5212\" y=\"54.1715\" width=\"2.70734\" height=\"2.70734\" transform=\"rotate(15 57.5212 54.1715)\" fill=\"url(#paint3_linear_1701_4211)\"/>
\t\t\t\t\t\t\t\t\t\t\t<circle cx=\"156.001\" cy=\"49.0761\" r=\"3\" fill=\"url(#paint4_linear_1701_4211)\"/>
\t\t\t\t\t\t\t\t\t\t\t<circle cx=\"53.6396\" cy=\"120.059\" r=\"3\" fill=\"url(#paint5_linear_1701_4211)\"/>
\t\t\t\t\t\t\t\t\t\t\t<circle cx=\"136.792\" cy=\"134.346\" r=\"1.86084\" fill=\"url(#paint6_linear_1701_4211)\"/>
\t\t\t\t\t\t\t\t\t\t\t<circle cx=\"50.6398\" cy=\"87.004\" r=\"0.698364\" fill=\"url(#paint7_linear_1701_4211)\"/>
\t\t\t\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t\t\t<filter id=\"filter0_d_1701_4211\" x=\"46.4358\" y=\"23.4358\" width=\"131.128\" height=\"131.128\" filterUnits=\"userSpaceOnUse\" color-interpolation-filters=\"sRGB\">
\t\t\t\t\t\t\t\t\t\t\t<feFlood flood-opacity=\"0\" result=\"BackgroundImageFix\"/>
\t\t\t\t\t\t\t\t\t\t\t<feColorMatrix in=\"SourceAlpha\" type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0\" result=\"hardAlpha\"/>
\t\t\t\t\t\t\t\t\t\t\t<feOffset dy=\"4\"/>
\t\t\t\t\t\t\t\t\t\t\t<feGaussianBlur stdDeviation=\"9.5\"/>
\t\t\t\t\t\t\t\t\t\t\t<feComposite in2=\"hardAlpha\" operator=\"out\"/>
\t\t\t\t\t\t\t\t\t\t\t<feColorMatrix type=\"matrix\" values=\"0 0 0 0 0.283797 0 0 0 0 0.62711 0 0 0 0 0.318128 0 0 0 0.46 0\"/>
\t\t\t\t\t\t\t\t\t\t\t<feBlend mode=\"normal\" in2=\"BackgroundImageFix\" result=\"effect1_dropShadow_1701_4211\"/>
\t\t\t\t\t\t\t\t\t\t\t<feBlend mode=\"normal\" in=\"SourceGraphic\" in2=\"effect1_dropShadow_1701_4211\" result=\"shape\"/>
\t\t\t\t\t\t\t\t\t\t\t</filter>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint0_linear_1701_4211\" x1=\"93.2285\" y1=\"48.6499\" x2=\"125.072\" y2=\"127.959\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#69B570\"/>
\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#2F993A\"/>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint1_linear_1701_4211\" x1=\"177.345\" y1=\"99.954\" x2=\"177.345\" y2=\"106.563\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#42A24B\"/>
\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#4CBC56\"/>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint2_linear_1701_4211\" x1=\"181.118\" y1=\"74.054\" x2=\"181.118\" y2=\"76.7613\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#42A24B\"/>
\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#4CBC56\"/>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint3_linear_1701_4211\" x1=\"58.8749\" y1=\"54.1715\" x2=\"58.8749\" y2=\"56.8788\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#42A24B\"/>
\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#4CBC56\"/>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint4_linear_1701_4211\" x1=\"156.001\" y1=\"46.0761\" x2=\"156.001\" y2=\"52.0761\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#42A24B\"/>
\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#4CBC56\"/>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint5_linear_1701_4211\" x1=\"53.6396\" y1=\"117.059\" x2=\"53.6396\" y2=\"123.059\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#42A24B\"/>
\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#4CBC56\"/>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint6_linear_1701_4211\" x1=\"136.792\" y1=\"132.485\" x2=\"136.792\" y2=\"136.207\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#42A24B\"/>
\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#4CBC56\"/>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint7_linear_1701_4211\" x1=\"50.6398\" y1=\"86.3056\" x2=\"50.6398\" y2=\"87.7024\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#42A24B\"/>
\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#4CBC56\"/>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\${json['success']}
\t\t\t\t\t\t\t\t\t</div>`;

\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 134
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " #one_click_input').val('');
\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 135
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " #one_click_input').removeClass('error_style');
\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 136
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .ds-product-one-click-btn').prop('disabled', true);

\t\t\t\t\t";
            // line 138
            if ((array_key_exists("oct_cart_in", $context) && ($context["oct_cart_in"] ?? null))) {
                // line 139
                echo "\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\t\$('#cart .ds-cart-qty').html(0).removeClass('active');
\t\t\t\t\t\t}, 100);

\t\t\t\t\t\t";
                // line 143
                if ((array_key_exists("oct_cart_page", $context) && ($context["oct_cart_page"] ?? null))) {
                    // line 144
                    echo "\t\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\t\tdocument.location.reload(true);
\t\t\t\t\t\t\t}, 3000);
\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t";
            }
            // line 149
            echo "
\t\t\t\t\t";
            // line 150
            if ((array_key_exists("oct_analytics_google_ecommerce", $context) &&  !twig_test_empty(($context["oct_analytics_google_ecommerce"] ?? null)))) {
                // line 151
                echo "\t\t            if (typeof gtag != 'undefined' && json['ecommerce']) {
\t\t                gtag('event', 'purchase', json['ecommerce']);
\t\t            }
\t\t            ";
            }
            // line 155
            echo "
\t\t\t\t\tlet cartIdsHolder = document.querySelector(\"[data-cart-ids]\");

\t\t\t\t\tif (cartIdsHolder) {
\t\t\t\t\t\tcartIdsHolder.dataset.cartIds = '';
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tsetCartBtnAdded(updateOk = true);

\t\t\t\t\t";
            // line 164
            if ((array_key_exists("isPopup", $context) && ($context["isPopup"] ?? null))) {
                // line 165
                echo "\t\t\t\t\t\toctPopupCart(successOption);
\t\t\t\t\t";
            } else {
                // line 167
                echo "\t\t\t\t\t\tlet successModal = `
\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"oct-modal\" tabindex=\"-1\" aria-labelledby=\"oct-modal\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header p-0 pb-4\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title fsz-20 fw-700 d-flex align-items-center justify-content-between\" id=\"oct-modal\">";
                // line 172
                echo ($context["oct_product_oneclickbuy_success_title"] ?? null);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"13\" viewBox=\"0 0 12 13\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.8029 11.5725C12.0633 11.8329 12.0633 12.2551 11.8029 12.5155C11.6731 12.6453 11.5025 12.7111 11.3319 12.7111C11.1612 12.7111 10.9906 12.6462 10.8608 12.5155L5.99911 7.65384L1.13743 12.5155C1.00766 12.6453 0.837017 12.7111 0.666369 12.7111C0.495722 12.7111 0.325075 12.6462 0.195312 12.5155C-0.0651039 12.2551 -0.0651039 11.8329 0.195312 11.5725L5.057 6.71085L0.195312 1.8492C-0.0651039 1.58878 -0.0651039 1.16657 0.195312 0.906158C0.455727 0.645742 0.877907 0.645742 1.13832 0.906158L6.00001 5.76787L10.8617 0.906158C11.1221 0.645742 11.5443 0.645742 11.8047 0.906158C12.0651 1.16657 12.0651 1.58878 11.8047 1.8492L6.943 6.71085L11.8029 11.5725Z\" fill=\"#00A8E8\" />
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\${successOption}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t`;

\t\t\t\t\t\t\$('body').append(successModal);

\t\t\t\t\t\tlet modal = new bootstrap.Modal(document.getElementById('oct-modal'), {
\t\t\t\t\t\t\tkeyboard: false
\t\t\t\t\t\t}),
\t\t\t\t\t\t\tmodalQuickView = document.getElementById('quickViewModal');

\t\t\t\t\t\tif (modalQuickView) {
\t\t\t\t\t\t\tlet quickViewModalInstance = bootstrap.Modal.getInstance(modalQuickView) || new bootstrap.Modal(modalQuickView);
\t\t\t\t\t\t\tquickViewModalInstance.hide();
\t\t\t\t\t\t}
\t\t\t\t\t\tmodal.show();

\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\tmodal.hide();
\t\t\t\t\t\t\t\$('#oct-modal').remove();
\t\t\t\t\t\t}, 5000);

\t\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
                // line 205
                echo ($context["oct_byoneclick_page"] ?? null);
                echo "').trigger('reset');
\t\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t}
\t\t\t}
        }
    });
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_popup_purchase_byoneclick.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 207,  333 => 205,  297 => 172,  290 => 167,  286 => 165,  284 => 164,  273 => 155,  267 => 151,  265 => 150,  262 => 149,  259 => 148,  253 => 144,  251 => 143,  245 => 139,  243 => 138,  238 => 136,  234 => 135,  230 => 134,  156 => 63,  142 => 54,  133 => 48,  127 => 47,  120 => 43,  111 => 37,  105 => 33,  97 => 28,  93 => 27,  90 => 26,  88 => 25,  79 => 19,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  57 => 8,  55 => 7,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_popup_purchase_byoneclick.twig", "");
    }
}
