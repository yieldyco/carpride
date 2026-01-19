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

/* oct_deals/template/octemplates/module/oct_products_modules.twig */
class __TwigTemplate_ad1574f705b8737cad855c411deafe40096bd9733d85c359a0b8dfb083651cb2 extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "    ";
            if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                // line 3
                echo "        <div class=\"content-block overflow-hidden position-relative\">
            <div class=\"ds-column-title pb-3 mb-3 fw-500 dark-text\">
                ";
                // line 5
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    // line 6
                    echo "                    <a href=\"";
                    echo ($context["link"] ?? null);
                    echo "\">
                        ";
                    // line 7
                    echo ($context["heading_title"] ?? null);
                    echo "
                    </a>
                ";
                } else {
                    // line 10
                    echo "                    ";
                    echo ($context["heading_title"] ?? null);
                    echo "
                ";
                }
                // line 12
                echo "            </div>
            <div id=\"ds-column-";
                // line 13
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "\" class=\"ds-column-products swiper\">
                <div class=\"swiper-wrapper\">
                    ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 16
                    echo "                        <div class=\"ds-module-item swiper-slide\">
                            <div class=\"h-100 d-flex flex-column";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 17)) {
                        echo " ds-no-stock";
                    }
                    echo "\">
                                <div class=\"ds-module-img d-flex flex-column\">
                                    <div class=\"ds-module-img-box position-relative\">
                                        <div class=\"ds-module-stickers d-flex flex-wrap\">
                                            ";
                    // line 21
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 21))) {
                        // line 22
                        echo "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                            // line 23
                            echo "                                                    ";
                            if (( !twig_test_empty($context["oct_sticker"]) &&  !twig_test_iterable($context["oct_sticker"]))) {
                                // line 24
                                echo "                                                        <div class=\"ds-module-sticker br-12 fw-500 ds-module-sticker-";
                                echo $context["key"];
                                echo "\">
                                                            ";
                                // line 25
                                echo $context["oct_sticker"];
                                echo "
                                                        </div>
                                                    ";
                            }
                            // line 28
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "                                            ";
                    }
                    // line 30
                    echo "                                        </div>
                                        <div class=\"ds-module-buttons position-absolute d-flex flex-column br-8\">
                                            ";
                    // line 32
                    if (($context["oct_popup_view_status"] ?? null)) {
                        // line 33
                        echo "                                            <button type=\"button\" aria-label=\"Quick view\" class=\"ds-module-button ds-module-button-viewed align-self-stretch p-0\" title=\"";
                        echo ($context["oct_popup_view"] ?? null);
                        echo "\" onclick=\"octPopUpView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 33);
                        echo "')\">
                                                <svg width=\"15\" height=\"11\" viewBox=\"0 0 15 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path d=\"M14.6037 4.17854C13.5937 2.61796 11.3268 0 7.5 0C3.67322 0 1.40629 2.61796 0.396332 4.17854C-0.132111 4.99325 -0.132111 6.00604 0.396332 6.82146C1.40629 8.38204 3.67322 11 7.5 11C11.3268 11 13.5937 8.38204 14.6037 6.82146C15.1321 6.00604 15.1321 4.99396 14.6037 4.17854ZM13.6136 6.275C12.729 7.64184 10.7576 9.93548 7.5 9.93548C4.24243 9.93548 2.27096 7.64255 1.38638 6.275C1.07716 5.79667 1.07716 5.20263 1.38638 4.72431C2.27096 3.35747 4.24243 1.06382 7.5 1.06382C10.7576 1.06382 12.729 3.35676 13.6136 4.72431C13.9236 5.20334 13.9236 5.79667 13.6136 6.275ZM7.5 2.48387C5.69699 2.48387 4.23089 3.83723 4.23089 5.5C4.23089 7.16277 5.69699 8.51613 7.5 8.51613C9.30301 8.51613 10.7691 7.16277 10.7691 5.5C10.7691 3.83723 9.30301 2.48387 7.5 2.48387ZM7.5 7.45161C6.33312 7.45161 5.38469 6.57658 5.38469 5.5C5.38469 4.42342 6.33312 3.54839 7.5 3.54839C8.66688 3.54839 9.61531 4.42342 9.61531 5.5C9.61531 6.57658 8.66688 7.45161 7.5 7.45161Z\"
                                                        fill=\"#00171F\" />
                                                </svg>
                                            </button>
                                            ";
                    }
                    // line 40
                    echo "                                            <button type=\"button\" aria-label=\"Wishlist\" class=\"ds-module-button ds-module-button-wishlist align-self-stretch p-0 ds-wishlist-btn\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                    echo "');\">
                                                <svg width=\"15\" height=\"13\" viewBox=\"0 0 15 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <g>
                                                        <path d=\"M7.49998 12.5C7.42931 12.5 7.35862 12.4853 7.29262 12.4553C7.07462 12.3559 1.94398 9.97662 1.12132 5.73929C0.803317 4.09996 1.12265 2.50062 1.97532 1.46195C2.66532 0.620615 3.65729 0.173271 4.84462 0.167271C4.85062 0.167271 4.85662 0.167271 4.86196 0.167271C6.21662 0.167271 7.04266 0.938623 7.49933 1.59529C7.95799 0.935957 8.79062 0.161271 10.1539 0.167271C11.342 0.173271 12.3346 0.620615 13.0253 1.46195C13.8766 2.49995 14.1953 4.09928 13.8766 5.73994C13.0553 9.97728 7.92395 12.3573 7.70595 12.456C7.64129 12.4853 7.57065 12.5 7.49998 12.5ZM4.86131 1.16662C4.85731 1.16662 4.854 1.16662 4.85 1.16662C3.95799 1.17062 3.25134 1.48327 2.74868 2.09594C2.08268 2.90727 1.842 4.19795 2.10333 5.54862C2.74 8.83128 6.56198 10.9646 7.49998 11.4433C8.43798 10.9646 12.26 8.83128 12.896 5.54862C13.1586 4.19728 12.918 2.90661 12.2533 2.09594C11.7506 1.48394 11.044 1.17194 10.15 1.16727C10.146 1.16727 10.142 1.16727 10.1387 1.16727C8.55732 1.16727 7.99669 2.75196 7.97402 2.81929C7.90469 3.02129 7.71396 3.1586 7.50063 3.1586C7.4993 3.1586 7.49861 3.1586 7.49794 3.1586C7.28394 3.15794 7.09329 3.02128 7.02529 2.81795C7.00329 2.75128 6.44197 1.16662 4.86131 1.16662Z\"
                                                            fill=\"#00171F\" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <button type=\"button\" aria-label=\"Compare\" class=\"ds-module-button ds-module-button-compare align-self-stretch p-0 ds-compare-btn\" title=\"";
                    // line 48
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 48);
                    echo "');\">
                                                <svg width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <g>
                                                        <path
                                                            d=\"M14 7.0001V9.0001C14 10.3788 12.878 11.5001 11.5 11.5001H2.70736L3.854 12.6467C4.04934 12.8421 4.04934 13.1588 3.854 13.3541C3.75667 13.4514 3.62865 13.5007 3.50065 13.5007C3.37265 13.5007 3.24463 13.4521 3.1473 13.3541L1.1473 11.3541C1.1013 11.3081 1.06472 11.2528 1.03939 11.1915C0.988721 11.0695 0.988721 10.9315 1.03939 10.8095C1.06472 10.7482 1.1013 10.6927 1.1473 10.6467L3.1473 8.64674C3.34263 8.45141 3.65932 8.45141 3.85466 8.64674C4.04999 8.84208 4.04999 9.15877 3.85466 9.3541L2.70801 10.5007H11.5C12.3267 10.5007 13 9.82808 13 9.00075V7.00075C13 6.72475 13.224 6.50075 13.5 6.50075C13.776 6.50075 14 6.7241 14 7.0001ZM1.5 7.5001C1.776 7.5001 2 7.2761 2 7.0001V5.0001C2 4.17276 2.67333 3.5001 3.5 3.5001H12.2926L11.146 4.64674C10.9507 4.84208 10.9507 5.15877 11.146 5.3541C11.2433 5.45143 11.3713 5.50075 11.4993 5.50075C11.6273 5.50075 11.7554 5.4521 11.8527 5.3541L13.8527 3.3541C13.8987 3.3081 13.9353 3.25284 13.9606 3.1915C14.0113 3.0695 14.0113 2.9315 13.9606 2.8095C13.9353 2.74817 13.8987 2.69274 13.8527 2.64674L11.8527 0.646744C11.6574 0.451411 11.3407 0.451411 11.1453 0.646744C10.95 0.842077 10.95 1.15877 11.1453 1.3541L12.292 2.50075H3.5C2.122 2.50075 1 3.62208 1 5.00075V7.00075C1 7.27608 1.224 7.5001 1.5 7.5001Z\"
                                                            fill=\"#00171F\" />
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                        <a href=\"";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
                    echo "\" class=\"d-block mx-auto\">
                                            <img src=\"";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 59);
                    echo "\" class=\"d-block mx-auto\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 59);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 59);
                    echo "\" loading=\"lazy\" />
                                        </a>
                                    </div>
                                </div>
                                <div class=\"ds-module-caption d-flex flex-column h-100\">
                                    <a href=\"";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
                    echo "\" class=\"ds-module-title fw-500 dark-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                    echo "</a>
                                    ";
                    // line 65
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 65))) {
                        // line 66
                        echo "                                        <div class=\"ds-module-stickers ds-module-sticker-images d-flex align-items-center\">
                                            ";
                        // line 67
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 67));
                        foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                            // line 68
                            echo "                                                ";
                            if (( !twig_test_empty($context["oct_sticker"]) && twig_test_iterable($context["oct_sticker"]))) {
                                // line 69
                                echo "                                                        <span class=\"ds-module-sticker-image\"><img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 69);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 69);
                                echo "\" data-bs-html=\"true\" data-bs-placement=\"top\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 69);
                                echo "\" data-bs-content=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 69);
                                echo "\" width=\"20\" height=\"20\" loading=\"lazy\"/></span>
                                                ";
                            }
                            // line 71
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                                        </div>
                                    ";
                    }
                    // line 74
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", true, true, false, 74) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 74))) {
                        // line 75
                        echo "                                        <div class=\"ds-module-code light-text\">";
                        echo ($context["oct_view_model_cat"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 75);
                        echo "</div>
                                    ";
                    }
                    // line 77
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "                                        <div class=\"ds-module-stock green-text\">";
                        echo ($context["oct_product_stock"] ?? null);
                        echo "</div>
                                    ";
                    }
                    // line 80
                    echo "                                    ";
                    if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 80) === false)) {
                        // line 81
                        echo "                                        <div class=\"ds-module-rating d-flex align-items-center\">
                                            <div class=\"ds-module-rating-stars d-flex align-items-center me-2\" data-rating=\"";
                        // line 82
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 82);
                        echo "\">
                                                ";
                        // line 83
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 84
                            echo "                                                    <span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 86
                        echo "                                            </div>
                                            <div class=\"ds-module-reviews d-flex align-items-center\">
                                                <svg width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <g>
                                                        <path
                                                            d=\"M1.88345 11.5383C1.82835 11.5383 1.77318 11.5276 1.72036 11.506C1.5613 11.4401 1.45741 11.2844 1.45741 11.1123V2.5916C1.45741 1.21806 2.21405 0.461426 3.58759 0.461426H10.4042C11.7777 0.461426 12.5343 1.21806 12.5343 2.5916V7.70403C12.5343 9.07757 11.7777 9.83421 10.4042 9.83421H3.76427L2.18508 11.4134C2.10329 11.4952 1.99422 11.5383 1.88345 11.5383ZM3.58759 1.3135C2.69178 1.3135 2.30948 1.69579 2.30948 2.5916V10.0836L3.28651 9.10653C3.3666 9.02644 3.47455 8.98158 3.58759 8.98158H10.4042C11.3 8.98158 11.6823 8.59929 11.6823 7.70347V2.59105C11.6823 1.69524 11.3 1.31294 10.4042 1.31294H3.58759V1.3135ZM9.6941 4.01172C9.6941 3.77655 9.50323 3.58569 9.26806 3.58569H4.72369C4.48851 3.58569 4.29765 3.77655 4.29765 4.01172C4.29765 4.24689 4.48851 4.43776 4.72369 4.43776H9.26806C9.50323 4.43776 9.6941 4.24689 9.6941 4.01172ZM7.98996 6.28391C7.98996 6.04874 7.79909 5.85788 7.56392 5.85788H4.72369C4.48851 5.85788 4.29765 6.04874 4.29765 6.28391C4.29765 6.51908 4.48851 6.70995 4.72369 6.70995H7.56392C7.79909 6.70995 7.98996 6.51908 7.98996 6.28391Z\"
                                                            fill=\"#9CA3AF\" />
                                                    </g>
                                                </svg>
                                                <span class=\"dark-text fsz-10\">";
                        // line 95
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 95);
                        echo "</span>
                                            </div>
                                        </div>
                                    ";
                    }
                    // line 99
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99)) {
                        // line 100
                        echo "                                    <div class=\"ds-module-price mt-auto\">
                                        ";
                        // line 101
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 101)) {
                            // line 102
                            echo "                                        <div class=\"price-tax fw-300 fsz-12 light-text mb-1\">
                                            ";
                            // line 103
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 103);
                            echo "
                                        </div>
                                        ";
                        }
                        // line 106
                        echo "                                        ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 106)) {
                            // line 107
                            echo "                                            <div class=\"ds-price-new fsz-20 fw-700 dark-text\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 107);
                            echo "</div>
                                        ";
                        } else {
                            // line 109
                            echo "                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"ds-price-old fsz-12 light-text text-decoration-line-through fw-500\">";
                            // line 110
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 110);
                            echo "</div>
                                                ";
                            // line 111
                            if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 111))) {
                                // line 112
                                echo "                                                    <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 112);
                                echo "</div>
                                                ";
                            }
                            // line 114
                            echo "                                            </div>
                                            <div class=\"ds-price-new fsz-20 fw-700 red-text\">";
                            // line 115
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 115);
                            echo "</div>
                                        ";
                        }
                        // line 117
                        echo "                                    </div>
                                    ";
                    }
                    // line 119
                    echo "                                    <div class=\"ds-module-cart d-flex align-items-center justify-content-between";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", false, false, false, 119)) {
                        echo " position-relative";
                    }
                    echo "\">
                                        ";
                    // line 120
                    if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 120)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 120))) {
                        // line 121
                        echo "                                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 121) ||  !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 121))) {
                            // line 122
                            echo "                                            <div class=\"ds-module-quantity";
                            if ((($context["quantity_show"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", true, true, false, 122) && twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", false, false, false, 122)))) {
                                echo " d-flex";
                            } else {
                                echo " d-none";
                            }
                            echo " align-items-center justify-content-center br-8\">
                                                <button type=\"button\" aria-label=\"Minus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center ds-minus\">
                                                    <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <g>
                                                            <path
                                                                d=\"M3.33333 7.5L12.6667 7.5C12.9427 7.5 13.1667 7.724 13.1667 8C13.1667 8.276 12.9427 8.5 12.6667 8.5L3.33333 8.5C3.05733 8.5 2.83333 8.276 2.83333 8C2.83333 7.724 3.05733 7.5 3.33333 7.5Z\"
                                                                fill=\"#25314C\" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
                            // line 132
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 132)) {
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 132);
                            } else {
                                echo "1";
                            }
                            echo "\" aria-label=\"Quantity\" inputmode=\"numeric\">
                                                <button type=\"button\" aria-label=\"Plus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center ds-plus\">
                                                    <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <g>
                                                            <path
                                                                d=\"M2.83341 8.00009C2.83341 7.72409 3.05741 7.50009 3.33341 7.50009L7.50008 7.50009L7.50008 3.33342C7.50008 3.05742 7.72408 2.83342 8.00008 2.83342C8.27608 2.83342 8.50008 3.05742 8.50008 3.33342L8.50008 7.50009L12.6667 7.50008C12.9427 7.50008 13.1667 7.72408 13.1667 8.00008C13.1667 8.27608 12.9427 8.50008 12.6667 8.50008L8.50008 8.50009L8.50008 12.6668C8.50008 12.9428 8.27608 13.1668 8.00008 13.1668C7.72408 13.1668 7.50008 12.9428 7.50008 12.6668L7.50008 8.50009L3.33342 8.50009C3.05742 8.50009 2.83342 8.27609 2.83341 8.00009Z\"
                                                                fill=\"#25314C\" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                            ";
                        }
                        // line 144
                        echo "                                            ";
                        if ((($context["quantity_show"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", true, true, false, 144) && twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", false, false, false, 144)))) {
                            // line 145
                            echo "                                                <button type=\"button\" aria-label=\"To cart\" class=\"button button-outline button-outline-primary br-8 fsz-12 ds-module-cart-btn\">
                                                    <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path
                                                            d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                            fill=\"#00A8E8\" />
                                                    </svg>
                                                    <span class=\"button-text\">";
                            // line 151
                            echo ($context["button_cart"] ?? null);
                            echo "</span>
                                                </button>
                                            ";
                        } else {
                            // line 154
                            echo "                                                <button type=\"button\" aria-label=\"To cart\" class=\"button button-outline button-outline-primary br-8 fsz-12 ds-module-cart-btn ms-0 position-absolute bottom-0 end-0\">
                                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path
                                                        d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                        fill=\"#00A8E8\" />
                                                </svg>
                                                <span class=\"button-text\">";
                            // line 160
                            echo ($context["button_cart"] ?? null);
                            echo "</span>
                                            </button>
                                            ";
                        }
                        // line 163
                        echo "                                        ";
                    }
                    // line 164
                    echo "                                        <input type=\"hidden\" name=\"product_id\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 164);
                    echo "\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "                </div>
                <div class=\"swiper-button-prev swiper-button-prev-";
                // line 171
                echo ($context["module"] ?? null);
                echo " button button-secondary button-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center py-3 px-1\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"4\" height=\"6\" viewBox=\"0 0 4 6\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M0.263207 2.99938C0.263207 2.87814 0.309287 2.75688 0.402114 2.66468L2.92803 0.138767C3.11305 -0.0462558 3.41303 -0.0462558 3.59805 0.138767C3.78307 0.323791 3.78307 0.623765 3.59805 0.808788L1.40684 3L3.59805 5.19121C3.78307 5.37624 3.78307 5.67621 3.59805 5.86123C3.41303 6.04626 3.11305 6.04626 2.92803 5.86123L0.402114 3.33532C0.309287 3.24186 0.263207 3.12063 0.263207 2.99938Z\" fill=\"#003459\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-button-next swiper-button-next-";
                // line 176
                echo ($context["module"] ?? null);
                echo " button button-secondary button-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center py-3 px-1\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"4\" height=\"6\" viewBox=\"0 0 4 6\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M3.73679 3.00062C3.73679 3.12186 3.69071 3.24312 3.59789 3.33532L1.07197 5.86123C0.886949 6.04626 0.586974 6.04626 0.401951 5.86123C0.216928 5.67621 0.216928 5.37623 0.401951 5.19121L2.59316 3L0.401951 0.808788C0.216928 0.623765 0.216928 0.32379 0.401951 0.138767C0.586974 -0.0462565 0.886949 -0.0462565 1.07197 0.138767L3.59789 2.66468C3.69071 2.75814 3.73679 2.87937 3.73679 3.00062Z\" fill=\"#003459\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
            </div>
            <script>
                window.addEventListener('DOMContentLoaded', () => {
                    var columnModulesSwiper = new Swiper('#ds-column-";
                // line 184
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "', {
                        slidesPerView: 1,
                        spaceBetween: 0,
                        loop: true,
                        navigation: {
                            nextEl: '.swiper-button-next-";
                // line 189
                echo ($context["module"] ?? null);
                echo "',
                            prevEl: '.swiper-button-prev-";
                // line 190
                echo ($context["module"] ?? null);
                echo "',
                        },
                    });
                });
            </script>
        </div>
    ";
            } else {
                // line 197
                echo "        <div class=\"py-3 fw-500 dark-text fsz-20\">
            ";
                // line 198
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    echo "<a href=\"";
                    echo ($context["link"] ?? null);
                    echo "\">";
                }
                // line 199
                echo "                ";
                echo ($context["heading_title"] ?? null);
                echo "
            ";
                // line 200
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    echo "</a>";
                }
                // line 201
                echo "        </div>
        <div id=\"ds-";
                // line 202
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "\" class=\"row g-2 g-md-3 mb-3 ds-module\"";
                if ((($context["show_type"] ?? null) == "")) {
                    echo " data-type=\"split\"";
                }
                if ((($context["show_type"] ?? null) == "width-100")) {
                    echo " data-type=\"width100\"";
                }
                if ((($context["show_type"] ?? null) == "width-50")) {
                    echo " data-type=\"width50\"";
                }
                if ((($context["show_type"] ?? null) == "width-infinity")) {
                    echo " data-type=\"carousel\"";
                }
                if ((($context["show_type"] ?? null) == "width-minimal")) {
                    echo " data-type=\"minimal\"";
                }
                echo ">
            ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 204
                    echo "            <div class=\"ds-module-item ds-module-col\">
                <div class=\"content-block h-100 d-flex flex-column";
                    // line 205
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 205)) {
                        echo " ds-no-stock";
                    }
                    echo "\">
                    <div class=\"ds-module-img d-flex flex-column\">
                        <div class=\"ds-module-stickers d-flex flex-wrap\">
                            ";
                    // line 208
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 208))) {
                        // line 209
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 209));
                        foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                            // line 210
                            echo "                                    ";
                            if (( !twig_test_empty($context["oct_sticker"]) &&  !twig_test_iterable($context["oct_sticker"]))) {
                                // line 211
                                echo "                                        <div class=\"ds-module-sticker br-12 fw-500 ds-module-sticker-";
                                echo $context["key"];
                                echo "\">
                                            ";
                                // line 212
                                echo $context["oct_sticker"];
                                echo "
                                        </div>
                                    ";
                            }
                            // line 215
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 216
                        echo "                            ";
                    }
                    // line 217
                    echo "                        </div>
                        <div class=\"ds-module-img-box position-relative\">
                            <div class=\"ds-module-buttons position-absolute d-flex flex-column br-8\">
                                ";
                    // line 220
                    if (($context["oct_popup_view_status"] ?? null)) {
                        // line 221
                        echo "                                <button type=\"button\" aria-label=\"Quick view\" class=\"ds-module-button ds-module-button-viewed align-self-stretch p-0\" title=\"";
                        echo ($context["oct_popup_view"] ?? null);
                        echo "\" onclick=\"octPopUpView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 221);
                        echo "')\">
                                    <svg width=\"15\" height=\"11\" viewBox=\"0 0 15 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M14.6037 4.17854C13.5937 2.61796 11.3268 0 7.5 0C3.67322 0 1.40629 2.61796 0.396332 4.17854C-0.132111 4.99325 -0.132111 6.00604 0.396332 6.82146C1.40629 8.38204 3.67322 11 7.5 11C11.3268 11 13.5937 8.38204 14.6037 6.82146C15.1321 6.00604 15.1321 4.99396 14.6037 4.17854ZM13.6136 6.275C12.729 7.64184 10.7576 9.93548 7.5 9.93548C4.24243 9.93548 2.27096 7.64255 1.38638 6.275C1.07716 5.79667 1.07716 5.20263 1.38638 4.72431C2.27096 3.35747 4.24243 1.06382 7.5 1.06382C10.7576 1.06382 12.729 3.35676 13.6136 4.72431C13.9236 5.20334 13.9236 5.79667 13.6136 6.275ZM7.5 2.48387C5.69699 2.48387 4.23089 3.83723 4.23089 5.5C4.23089 7.16277 5.69699 8.51613 7.5 8.51613C9.30301 8.51613 10.7691 7.16277 10.7691 5.5C10.7691 3.83723 9.30301 2.48387 7.5 2.48387ZM7.5 7.45161C6.33312 7.45161 5.38469 6.57658 5.38469 5.5C5.38469 4.42342 6.33312 3.54839 7.5 3.54839C8.66688 3.54839 9.61531 4.42342 9.61531 5.5C9.61531 6.57658 8.66688 7.45161 7.5 7.45161Z\"
                                            fill=\"#00171F\" />
                                    </svg>
                                </button>
                                ";
                    }
                    // line 228
                    echo "                                <button type=\"button\" aria-label=\"Wishlist\" class=\"ds-module-button ds-module-button-wishlist align-self-stretch p-0 ds-wishlist-btn\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 228);
                    echo "');\">
                                    <svg width=\"15\" height=\"13\" viewBox=\"0 0 15 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <g>
                                            <path d=\"M7.49998 12.5C7.42931 12.5 7.35862 12.4853 7.29262 12.4553C7.07462 12.3559 1.94398 9.97662 1.12132 5.73929C0.803317 4.09996 1.12265 2.50062 1.97532 1.46195C2.66532 0.620615 3.65729 0.173271 4.84462 0.167271C4.85062 0.167271 4.85662 0.167271 4.86196 0.167271C6.21662 0.167271 7.04266 0.938623 7.49933 1.59529C7.95799 0.935957 8.79062 0.161271 10.1539 0.167271C11.342 0.173271 12.3346 0.620615 13.0253 1.46195C13.8766 2.49995 14.1953 4.09928 13.8766 5.73994C13.0553 9.97728 7.92395 12.3573 7.70595 12.456C7.64129 12.4853 7.57065 12.5 7.49998 12.5ZM4.86131 1.16662C4.85731 1.16662 4.854 1.16662 4.85 1.16662C3.95799 1.17062 3.25134 1.48327 2.74868 2.09594C2.08268 2.90727 1.842 4.19795 2.10333 5.54862C2.74 8.83128 6.56198 10.9646 7.49998 11.4433C8.43798 10.9646 12.26 8.83128 12.896 5.54862C13.1586 4.19728 12.918 2.90661 12.2533 2.09594C11.7506 1.48394 11.044 1.17194 10.15 1.16727C10.146 1.16727 10.142 1.16727 10.1387 1.16727C8.55732 1.16727 7.99669 2.75196 7.97402 2.81929C7.90469 3.02129 7.71396 3.1586 7.50063 3.1586C7.4993 3.1586 7.49861 3.1586 7.49794 3.1586C7.28394 3.15794 7.09329 3.02128 7.02529 2.81795C7.00329 2.75128 6.44197 1.16662 4.86131 1.16662Z\"
                                                fill=\"#00171F\" />
                                        </g>
                                    </svg>
                                </button>
                                <button type=\"button\" aria-label=\"Compare\" class=\"ds-module-button ds-module-button-compare align-self-stretch p-0 ds-compare-btn\" title=\"";
                    // line 236
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 236);
                    echo "');\">
                                    <svg width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <g>
                                            <path
                                                d=\"M14 7.0001V9.0001C14 10.3788 12.878 11.5001 11.5 11.5001H2.70736L3.854 12.6467C4.04934 12.8421 4.04934 13.1588 3.854 13.3541C3.75667 13.4514 3.62865 13.5007 3.50065 13.5007C3.37265 13.5007 3.24463 13.4521 3.1473 13.3541L1.1473 11.3541C1.1013 11.3081 1.06472 11.2528 1.03939 11.1915C0.988721 11.0695 0.988721 10.9315 1.03939 10.8095C1.06472 10.7482 1.1013 10.6927 1.1473 10.6467L3.1473 8.64674C3.34263 8.45141 3.65932 8.45141 3.85466 8.64674C4.04999 8.84208 4.04999 9.15877 3.85466 9.3541L2.70801 10.5007H11.5C12.3267 10.5007 13 9.82808 13 9.00075V7.00075C13 6.72475 13.224 6.50075 13.5 6.50075C13.776 6.50075 14 6.7241 14 7.0001ZM1.5 7.5001C1.776 7.5001 2 7.2761 2 7.0001V5.0001C2 4.17276 2.67333 3.5001 3.5 3.5001H12.2926L11.146 4.64674C10.9507 4.84208 10.9507 5.15877 11.146 5.3541C11.2433 5.45143 11.3713 5.50075 11.4993 5.50075C11.6273 5.50075 11.7554 5.4521 11.8527 5.3541L13.8527 3.3541C13.8987 3.3081 13.9353 3.25284 13.9606 3.1915C14.0113 3.0695 14.0113 2.9315 13.9606 2.8095C13.9353 2.74817 13.8987 2.69274 13.8527 2.64674L11.8527 0.646744C11.6574 0.451411 11.3407 0.451411 11.1453 0.646744C10.95 0.842077 10.95 1.15877 11.1453 1.3541L12.292 2.50075H3.5C2.122 2.50075 1 3.62208 1 5.00075V7.00075C1 7.27608 1.224 7.5001 1.5 7.5001Z\"
                                                fill=\"#00171F\" />
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <a href=\"";
                    // line 246
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 246);
                    echo "\" class=\"d-block mx-auto\">
                                <img src=\"";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 247);
                    echo "\" class=\"d-block mx-auto\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 247);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 247);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 247);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 247);
                    echo "\" loading=\"lazy\" />
                            </a>
                        </div>
                    </div>
                    <div class=\"ds-module-caption d-flex flex-column h-100\">
                        <a href=\"";
                    // line 252
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 252);
                    echo "\" class=\"ds-module-title fw-500 dark-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 252);
                    echo "</a>
                        ";
                    // line 253
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 253))) {
                        // line 254
                        echo "                            <div class=\"ds-module-stickers ds-module-sticker-images d-flex align-items-center\">
                                ";
                        // line 255
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 255));
                        foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                            // line 256
                            echo "                                    ";
                            if (( !twig_test_empty($context["oct_sticker"]) && twig_test_iterable($context["oct_sticker"]))) {
                                // line 257
                                echo "                                            <span class=\"ds-module-sticker-image\"><img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 257);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 257);
                                echo "\" data-bs-html=\"true\" data-bs-placement=\"top\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 257);
                                echo "\" data-bs-content=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 257);
                                echo "\" width=\"20\" height=\"20\" loading=\"lazy\"/></span>
                                    ";
                            }
                            // line 259
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 260
                        echo "                            </div>
                        ";
                    }
                    // line 262
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", true, true, false, 262) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 262))) {
                        // line 263
                        echo "                            <div class=\"ds-module-code light-text\">";
                        echo ($context["oct_view_model_cat"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 263);
                        echo "</div>
                        ";
                    }
                    // line 265
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 265)) {
                        // line 266
                        echo "                            <div class=\"ds-module-stock green-text\">";
                        echo ($context["oct_product_stock"] ?? null);
                        echo "</div>
                        ";
                    } else {
                        // line 268
                        echo "                            <div class=\"ds-module-stock\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 268);
                        echo "</div>
                        ";
                    }
                    // line 270
                    echo "                        ";
                    if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 270) === false)) {
                        // line 271
                        echo "                            <div class=\"ds-module-rating d-flex align-items-center\">
                                <div class=\"ds-module-rating-stars d-flex align-items-center me-2\" data-rating=\"";
                        // line 272
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 272);
                        echo "\">
                                    ";
                        // line 273
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 274
                            echo "                                        <span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 276
                        echo "                                </div>
                                <div class=\"ds-module-reviews d-flex align-items-center\">
                                    <svg width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <g>
                                            <path
                                                d=\"M1.88345 11.5383C1.82835 11.5383 1.77318 11.5276 1.72036 11.506C1.5613 11.4401 1.45741 11.2844 1.45741 11.1123V2.5916C1.45741 1.21806 2.21405 0.461426 3.58759 0.461426H10.4042C11.7777 0.461426 12.5343 1.21806 12.5343 2.5916V7.70403C12.5343 9.07757 11.7777 9.83421 10.4042 9.83421H3.76427L2.18508 11.4134C2.10329 11.4952 1.99422 11.5383 1.88345 11.5383ZM3.58759 1.3135C2.69178 1.3135 2.30948 1.69579 2.30948 2.5916V10.0836L3.28651 9.10653C3.3666 9.02644 3.47455 8.98158 3.58759 8.98158H10.4042C11.3 8.98158 11.6823 8.59929 11.6823 7.70347V2.59105C11.6823 1.69524 11.3 1.31294 10.4042 1.31294H3.58759V1.3135ZM9.6941 4.01172C9.6941 3.77655 9.50323 3.58569 9.26806 3.58569H4.72369C4.48851 3.58569 4.29765 3.77655 4.29765 4.01172C4.29765 4.24689 4.48851 4.43776 4.72369 4.43776H9.26806C9.50323 4.43776 9.6941 4.24689 9.6941 4.01172ZM7.98996 6.28391C7.98996 6.04874 7.79909 5.85788 7.56392 5.85788H4.72369C4.48851 5.85788 4.29765 6.04874 4.29765 6.28391C4.29765 6.51908 4.48851 6.70995 4.72369 6.70995H7.56392C7.79909 6.70995 7.98996 6.51908 7.98996 6.28391Z\"
                                                fill=\"#9CA3AF\" />
                                        </g>
                                    </svg>
                                    <span class=\"dark-text fsz-10\">";
                        // line 285
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 285);
                        echo "</span>
                                </div>
                            </div>
                        ";
                    }
                    // line 289
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 289)) {
                        // line 290
                        echo "                        <div class=\"ds-module-price mt-auto\">
                            ";
                        // line 291
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 291)) {
                            // line 292
                            echo "                            <div class=\"price-tax fw-300 fsz-12 light-text mb-1\">
                                ";
                            // line 293
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 293);
                            echo "
                            </div>
                            ";
                        }
                        // line 296
                        echo "                            ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 296)) {
                            // line 297
                            echo "                                <div class=\"ds-price-new fsz-20 fw-700 dark-text\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 297);
                            echo "</div>
                            ";
                        } else {
                            // line 299
                            echo "                                <div class=\"d-flex align-items-center\">
                                    <div class=\"ds-price-old fsz-12 light-text text-decoration-line-through fw-500\">";
                            // line 300
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 300);
                            echo "</div>
                                    ";
                            // line 301
                            if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 301))) {
                                // line 302
                                echo "                                        <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 302);
                                echo "</div>
                                    ";
                            }
                            // line 304
                            echo "                                </div>
                                <div class=\"ds-price-new fsz-20 fw-700 red-text\">";
                            // line 305
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 305);
                            echo "</div>
                            ";
                        }
                        // line 307
                        echo "                        </div>
                        ";
                    }
                    // line 309
                    echo "                        <div class=\"ds-module-cart d-flex align-items-center justify-content-between";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", false, false, false, 309)) {
                        echo " position-relative";
                    }
                    echo "\">
                            ";
                    // line 310
                    if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 310)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 310))) {
                        // line 311
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 311) ||  !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 311))) {
                            // line 312
                            echo "                                <div class=\"ds-module-quantity";
                            if ((($context["quantity_show"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", true, true, false, 312) && twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", false, false, false, 312)))) {
                                echo " d-flex";
                            } else {
                                echo " d-none";
                            }
                            echo " align-items-center justify-content-center br-8\">
                                    <button type=\"button\" aria-label=\"Minus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center ds-minus\">
                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <g>
                                                <path
                                                    d=\"M3.33333 7.5L12.6667 7.5C12.9427 7.5 13.1667 7.724 13.1667 8C13.1667 8.276 12.9427 8.5 12.6667 8.5L3.33333 8.5C3.05733 8.5 2.83333 8.276 2.83333 8C2.83333 7.724 3.05733 7.5 3.33333 7.5Z\"
                                                    fill=\"#25314C\" />
                                            </g>
                                        </svg>
                                    </button>
                                    <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
                            // line 322
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 322)) {
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 322);
                            } else {
                                echo "1";
                            }
                            echo "\" />
                                    <button type=\"button\" aria-label=\"Plus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center ds-plus\">
                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <g>
                                                <path
                                                    d=\"M2.83341 8.00009C2.83341 7.72409 3.05741 7.50009 3.33341 7.50009L7.50008 7.50009L7.50008 3.33342C7.50008 3.05742 7.72408 2.83342 8.00008 2.83342C8.27608 2.83342 8.50008 3.05742 8.50008 3.33342L8.50008 7.50009L12.6667 7.50008C12.9427 7.50008 13.1667 7.72408 13.1667 8.00008C13.1667 8.27608 12.9427 8.50008 12.6667 8.50008L8.50008 8.50009L8.50008 12.6668C8.50008 12.9428 8.27608 13.1668 8.00008 13.1668C7.72408 13.1668 7.50008 12.9428 7.50008 12.6668L7.50008 8.50009L3.33342 8.50009C3.05742 8.50009 2.83342 8.27609 2.83341 8.00009Z\"
                                                    fill=\"#25314C\" />
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                ";
                        }
                        // line 334
                        echo "                                ";
                        if ((($context["quantity_show"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", true, true, false, 334) && twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", false, false, false, 334)))) {
                            // line 335
                            echo "                                    <button type=\"button\" aria-label=\"To cart\" class=\"button button-outline button-outline-primary br-8 fsz-12 ds-module-cart-btn\">
                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                fill=\"#00A8E8\" />
                                        </svg>
                                        <span class=\"button-text\">";
                            // line 341
                            echo ($context["button_cart"] ?? null);
                            echo "</span>
                                    </button>
                                ";
                        } else {
                            // line 344
                            echo "                                    <button type=\"button\" aria-label=\"To cart\" class=\"button button-outline button-outline-primary br-8 fsz-12 ds-module-cart-btn ms-0 position-absolute bottom-0 end-0\">
                                    <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path
                                            d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                            fill=\"#00A8E8\" />
                                    </svg>
                                    <span class=\"button-text\">";
                            // line 350
                            echo ($context["button_cart"] ?? null);
                            echo "</span>
                                </button>
                                ";
                        }
                        // line 353
                        echo "                            ";
                    }
                    // line 354
                    echo "                            <input type=\"hidden\" name=\"product_id\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 354);
                    echo "\" />
                        </div>
                    </div>
                    ";
                    // line 357
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", true, true, false, 357) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 357))) {
                        // line 358
                        echo "                        <div class=\"ds-module-item-attr p-3 fsz-10 dark-text d-none d-md-block\">
                            ";
                        // line 359
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 359));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 360
                            echo "                            <div class=\"ds-module-item-attr-item\">
                                <span class=\"fw-500\">";
                            // line 361
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 361);
                            echo ":</span> ";
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 361);
                            echo "
                            </div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 364
                        echo "                        </div>
                    ";
                    }
                    // line 366
                    echo "                </div>
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 369
                echo "        </div>
        ";
                // line 370
                if (((array_key_exists("show_more", $context) && ($context["show_more"] ?? null)) && (($context["show_type"] ?? null) != "width-infinity"))) {
                    // line 371
                    echo "            <div class=\"ds-module-showmore d-flex justify-content-center pb-3\">
                <div class=\"oct-load-more-button-wrapper w-100 d-flex align-items-center justify-content-center\">
                    <input type=\"hidden\" id=\"more_";
                    // line 373
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" name=\"more_";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" value=\"";
                    echo ($context["page"] ?? null);
                    echo "\">
                    <button id=\"btn_";
                    // line 374
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" class=\"button button-primary br-7\">
                    <svg width=\"21\" height=\"21\" viewBox=\"0 0 21 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <g>
                        <path d=\"M18.5717 11.2539C18.1234 15.3722 14.6533 18.478 10.5 18.478C7.66917 18.478 5.08667 17.0022 3.625 14.6747V17.0197C3.625 17.3647 3.345 17.6447 3 17.6447C2.655 17.6447 2.375 17.3647 2.375 17.0197V12.853C2.375 12.508 2.655 12.228 3 12.228H7.16667C7.51167 12.228 7.79167 12.508 7.79167 12.853C7.79167 13.198 7.51167 13.478 7.16667 13.478H4.3916C5.54993 15.7497 7.8975 17.228 10.5 17.228C14.0142 17.228 16.9492 14.6013 17.3292 11.1188C17.3659 10.7746 17.6775 10.5288 18.0175 10.5646C18.3617 10.6021 18.6084 10.9106 18.5717 11.2539ZM18 3.06136C17.655 3.06136 17.375 3.34136 17.375 3.68636V6.03133C15.9133 3.70383 13.3308 2.22803 10.5 2.22803C6.3475 2.22803 2.87747 5.33382 2.4283 9.45215C2.3908 9.79548 2.63836 10.1039 2.98169 10.1414C3.00419 10.1439 3.02755 10.1447 3.05005 10.1447C3.36505 10.1447 3.6358 9.90724 3.66996 9.58724C4.04996 6.10474 6.98585 3.47803 10.4992 3.47803C13.1025 3.47803 15.4493 4.95636 16.6076 7.22803H13.8333C13.4883 7.22803 13.2083 7.50803 13.2083 7.85303C13.2083 8.19803 13.4883 8.47803 13.8333 8.47803H18C18.345 8.47803 18.625 8.19803 18.625 7.85303V3.68636C18.625 3.34136 18.345 3.06136 18 3.06136Z\" fill=\"#FFFFFF\" />
                        </g>
                    </svg>
                    <span class=\"button-text\">";
                    // line 380
                    echo ($context["oct_show_more"] ?? null);
                    echo "</span>
                    </button>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    document.getElementById('more_";
                    // line 386
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "').value = 1;

                    const btn = document.getElementById('btn_";
                    // line 388
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "');

                    btn.addEventListener('click', () => {
                        octShowMoreModule(
                        '";
                    // line 392
                    echo ($context["module_id"] ?? null);
                    echo "',
                        true,
                        'btn_";
                    // line 394
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "',
                        'ds-";
                    // line 395
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "',
                        'more_";
                    // line 396
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "',
                        '";
                    // line 397
                    echo ($context["oct_path"] ?? null);
                    echo "'
                        );
                    });
                    
                    ";
                    // line 401
                    if ((array_key_exists("infinite_scroll", $context) && ($context["infinite_scroll"] ?? null))) {
                        // line 402
                        echo "                    
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            btn.click();
                        }
                        });
                    }, {
                        root: null,
                        rootMargin: '0px',
                        threshold: 0.5
                    });

                    observer.observe(btn);
                    
                    ";
                    }
                    // line 418
                    echo "                });
            </script>
        ";
                }
                // line 421
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_products_modules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1039 => 421,  1034 => 418,  1016 => 402,  1014 => 401,  1007 => 397,  1001 => 396,  995 => 395,  989 => 394,  984 => 392,  975 => 388,  968 => 386,  959 => 380,  948 => 374,  936 => 373,  932 => 371,  930 => 370,  927 => 369,  919 => 366,  915 => 364,  904 => 361,  901 => 360,  897 => 359,  894 => 358,  892 => 357,  885 => 354,  882 => 353,  876 => 350,  868 => 344,  862 => 341,  854 => 335,  851 => 334,  832 => 322,  814 => 312,  811 => 311,  809 => 310,  802 => 309,  798 => 307,  793 => 305,  790 => 304,  784 => 302,  782 => 301,  778 => 300,  775 => 299,  769 => 297,  766 => 296,  758 => 293,  755 => 292,  753 => 291,  750 => 290,  747 => 289,  740 => 285,  729 => 276,  722 => 274,  718 => 273,  714 => 272,  711 => 271,  708 => 270,  702 => 268,  696 => 266,  693 => 265,  685 => 263,  682 => 262,  678 => 260,  672 => 259,  660 => 257,  657 => 256,  653 => 255,  650 => 254,  648 => 253,  642 => 252,  626 => 247,  622 => 246,  607 => 236,  593 => 228,  580 => 221,  578 => 220,  573 => 217,  570 => 216,  564 => 215,  558 => 212,  553 => 211,  550 => 210,  545 => 209,  543 => 208,  535 => 205,  532 => 204,  528 => 203,  506 => 202,  503 => 201,  499 => 200,  494 => 199,  488 => 198,  485 => 197,  475 => 190,  471 => 189,  461 => 184,  450 => 176,  442 => 171,  439 => 170,  426 => 164,  423 => 163,  417 => 160,  409 => 154,  403 => 151,  395 => 145,  392 => 144,  373 => 132,  355 => 122,  352 => 121,  350 => 120,  343 => 119,  339 => 117,  334 => 115,  331 => 114,  325 => 112,  323 => 111,  319 => 110,  316 => 109,  310 => 107,  307 => 106,  299 => 103,  296 => 102,  294 => 101,  291 => 100,  288 => 99,  281 => 95,  270 => 86,  263 => 84,  259 => 83,  255 => 82,  252 => 81,  249 => 80,  243 => 78,  240 => 77,  232 => 75,  229 => 74,  225 => 72,  219 => 71,  207 => 69,  204 => 68,  200 => 67,  197 => 66,  195 => 65,  189 => 64,  173 => 59,  169 => 58,  154 => 48,  140 => 40,  127 => 33,  125 => 32,  121 => 30,  118 => 29,  112 => 28,  106 => 25,  101 => 24,  98 => 23,  93 => 22,  91 => 21,  82 => 17,  79 => 16,  75 => 15,  68 => 13,  65 => 12,  59 => 10,  53 => 7,  48 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_products_modules.twig", "");
    }
}
