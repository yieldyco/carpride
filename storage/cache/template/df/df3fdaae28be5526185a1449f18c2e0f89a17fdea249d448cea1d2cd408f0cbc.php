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

/* oct_deals/template/product/product.twig */
class __TwigTemplate_f546c58ed78874b77d47a01bb02f087342b3dd57a76ab513bca27e8cd540d256 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-product\" class=\"container-fluid container-xl flex-grow-1\">
 \t<nav aria-label=\"breadcrumb\">
        <ul class=\"breadcrumb ds-breadcrumb fsz-12\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6)) {
                // line 7
                echo "                <li class=\"breadcrumb-item ds-breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</li>
            ";
            } else {
                // line 9
                echo "                <li class=\"breadcrumb-item ds-breadcrumb-item\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</a></li>
            ";
            }
            // line 11
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </nav>
    ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "micro", [], "any", true, true, false, 14) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "micro", [], "any", false, false, false, 14))) {
            // line 15
            echo "    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"BreadcrumbList\",
        \"itemListElement\":
        [
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 22
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                ";
                } else {
                    // line 24
                    echo "                {
                    \"@type\": \"ListItem\",
                    \"position\": ";
                    // line 26
                    echo (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26) - 1);
                    echo ",
                    \"item\":
                    {
                        \"@id\": \"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
                    echo "\",
                        \"name\": \"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 30);
                    echo "\"
                    }
                }";
                    // line 32
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 32)) {
                        echo ",";
                    }
                    // line 33
                    echo "                ";
                }
                // line 34
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ]
    }
    </script>
    ";
        }
        // line 39
        echo "    <main>
        <div class=\"row\">
            <div class=\"col-12 ds-page-title pb-3\">
                <h1>";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
        </div>
        <div class=\"content-top-box\">";
        // line 45
        echo ($context["content_top"] ?? null);
        echo "</div>
        <div class=\"d-flex justify-content-between align-items-start align-items-md-center secondary-text fsz-14\">
            <div class=\"ds-product-top-info d-flex flex-column flex-md-row align-items-md-center\">
                ";
        // line 48
        if (($context["manufacturer"] ?? null)) {
            // line 49
            echo "                    
\t\t\t\t<!-- производитель скрыт -->
\t\t\t
                ";
        }
        // line 53
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_model", [], "any", true, true, false, 53) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_model", [], "any", false, false, false, 53) == "on"))) {
            // line 54
            echo "                    <span>";
            echo ($context["text_model"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["model"] ?? null);
            echo "</span></span>
                ";
        }
        // line 56
        echo "                ";
        if ((($context["oct_product_sku_show"] ?? null) && ($context["sku"] ?? null))) {
            // line 57
            echo "                    <span>";
            echo ($context["text_sku"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["sku"] ?? null);
            echo "</span></span>
                ";
        }
        // line 59
        echo "                ";
        if ((($context["oct_product_upc_show"] ?? null) && ($context["upc"] ?? null))) {
            // line 60
            echo "                    <span>";
            echo ($context["text_upc"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["upc"] ?? null);
            echo "</span></span>
                ";
        }
        // line 62
        echo "                ";
        if ((($context["oct_product_ean_show"] ?? null) && ($context["ean"] ?? null))) {
            // line 63
            echo "                    <span>";
            echo ($context["text_ean"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["ean"] ?? null);
            echo "</span></span>
                ";
        }
        // line 65
        echo "                ";
        if ((($context["oct_product_jan_show"] ?? null) && ($context["jan"] ?? null))) {
            // line 66
            echo "                    <span>";
            echo ($context["text_jan"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["jan"] ?? null);
            echo "</span></span>
                ";
        }
        // line 68
        echo "                ";
        if ((($context["oct_product_isbn_show"] ?? null) && ($context["isbn"] ?? null))) {
            // line 69
            echo "                    <span>";
            echo ($context["text_isbn"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["isbn"] ?? null);
            echo "</span></span>
                ";
        }
        // line 71
        echo "                ";
        if ((($context["oct_product_mpn_show"] ?? null) && ($context["mpn"] ?? null))) {
            // line 72
            echo "                    <span>";
            echo ($context["text_mpn"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["mpn"] ?? null);
            echo "</span></span>
                ";
        }
        // line 74
        echo "            </div>
            ";
        // line 75
        if (($context["review_status"] ?? null)) {
            // line 76
            echo "                <div class=\"ds-module-rating d-flex align-items-center\">
                    <div class=\"ds-module-rating-stars d-flex align-items-center me-2\" data-rating=\"";
            // line 77
            echo ($context["oct_rating"] ?? null);
            echo "\">
                        ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 79
                echo "                            <span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </div>
                    <div class=\"ds-module-reviews d-flex align-items-center\">
                        <svg width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g>
                                <path d=\"M1.88345 11.5383C1.82835 11.5383 1.77318 11.5276 1.72036 11.506C1.5613 11.4401 1.45741 11.2844 1.45741 11.1123V2.5916C1.45741 1.21806 2.21405 0.461426 3.58759 0.461426H10.4042C11.7777 0.461426 12.5343 1.21806 12.5343 2.5916V7.70403C12.5343 9.07757 11.7777 9.83421 10.4042 9.83421H3.76427L2.18508 11.4134C2.10329 11.4952 1.99422 11.5383 1.88345 11.5383ZM3.58759 1.3135C2.69178 1.3135 2.30948 1.69579 2.30948 2.5916V10.0836L3.28651 9.10653C3.3666 9.02644 3.47455 8.98158 3.58759 8.98158H10.4042C11.3 8.98158 11.6823 8.59929 11.6823 7.70347V2.59105C11.6823 1.69524 11.3 1.31294 10.4042 1.31294H3.58759V1.3135ZM9.6941 4.01172C9.6941 3.77655 9.50323 3.58569 9.26806 3.58569H4.72369C4.48851 3.58569 4.29765 3.77655 4.29765 4.01172C4.29765 4.24689 4.48851 4.43776 4.72369 4.43776H9.26806C9.50323 4.43776 9.6941 4.24689 9.6941 4.01172ZM7.98996 6.28391C7.98996 6.04874 7.79909 5.85788 7.56392 5.85788H4.72369C4.48851 5.85788 4.29765 6.04874 4.29765 6.28391C4.29765 6.51908 4.48851 6.70995 4.72369 6.70995H7.56392C7.79909 6.70995 7.98996 6.51908 7.98996 6.28391Z\" fill=\"#9CA3AF\"></path>
                            </g>
                        </svg>
                        <span class=\"blue-link ds-scroll-to-reviews\">";
            // line 88
            echo ($context["total_reviews"] ?? null);
            echo "</span>
                    </div>
                </div>
            ";
        }
        // line 92
        echo "        </div>
        <div class=\"ds-product-tabs sticky-top mt-3\">
            <div class=\"container-fluid container-xl\">
                <div id=\"oct-tabs\" class=\"ds-product-tabs-box d-flex align-items-stretch w-100\">
                    <div data-tab-target=\".ds-product-tab-main-content\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4 active\">
                        ";
        // line 97
        echo ($context["oct_product_maintab"] ?? null);
        echo "
                    </div>
                    ";
        // line 99
        if (($context["description"] ?? null)) {
            // line 100
            echo "                    <div data-tab-target=\".ds-product-description\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 101
            echo ($context["oct_product_description"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 104
        echo "                    ";
        if (($context["attribute_groups"] ?? null)) {
            // line 105
            echo "                    <div data-tab-target=\".ds-product-attributes\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 106
            echo ($context["tab_attribute"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 109
        echo "                    ";
        if (($context["review_status"] ?? null)) {
            // line 110
            echo "                    <div data-tab-target=\".ds-product-reviews\" class=\"ds-product-tabs-item ds-product-review-toggle d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 111
            echo ($context["oct_product_tab_reviews"] ?? null);
            echo "
                        <span class=\"ds-product-tabs-badge d-grid fsz-10 ms-2\">";
            // line 112
            echo ($context["total_reviews"] ?? null);
            echo "</span>
                    </div>
                    ";
        }
        // line 115
        echo "                    ";
        if (($context["oct_product_faq"] ?? null)) {
            // line 116
            echo "                    <div data-tab-target=\".ds-product-faq\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 117
            echo ($context["tab_oct_faq"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 120
        echo "                    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", true, true, false, 120) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 120)) && (twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", true, true, false, 120) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 120)))) {
            // line 121
            echo "                    <div data-tab-target=\".ds-product-dop_tab\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 122
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 122);
            echo "
                    </div>
                    ";
        }
        // line 125
        echo "                    ";
        if (($context["oct_product_extra_tabs"] ?? null)) {
            // line 126
            echo "                        ";
            $context["key"] = 0;
            // line 127
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra_tab"]) {
                // line 128
                echo "                            ";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 129
                echo "                            <div data-tab-target=\".ds-product_extra_tab-";
                echo ($context["key"] ?? null);
                echo "\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                                ";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "title", [], "any", false, false, false, 130);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                    ";
        }
        // line 134
        echo "                    ";
        if (($context["products"] ?? null)) {
            // line 135
            echo "                        <div data-tab-target=\"#ds-related-products_0\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                            ";
            // line 136
            echo ($context["oct_related_products"] ?? null);
            echo "
                        </div>
                    ";
        }
        // line 139
        echo "                </div>
                <script>
                    window.addEventListener('DOMContentLoaded', () => {
                        octProductTabs();
                    });
                </script>
            </div>
        </div>

        <div id=\"content\" class=\"ds-product-tab-main-content ds-product-tab-content\">
            <div class=\"ds-product-main-content content-block no-shadow d-flex flex-column flex-md-row p-xl-4 py-xl-0\">
                <div id=\"productImages\" class=\"ds-product-images position-relative pe-md-3 pe-xl-4 me-md-3 me-xl-4\">
                    <div class=\"sticky-md-top ds-sticky-column z-3 pt-xl-4 pb-3\">
                        ";
        // line 152
        if (($context["oct_product_stickers"] ?? null)) {
            // line 153
            echo "                            <div class=\"ds-product-stickers d-flex align-items-center justify-content-between mb-3\">
                                <div class=\"ds-module-stickers ds-module-sticker-images d-flex align-items-center flex-wrap\">
                                    ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_stickers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                // line 156
                echo "                                        ";
                if (( !twig_test_empty($context["oct_sticker"]) && twig_test_iterable($context["oct_sticker"]))) {
                    // line 157
                    echo "                                            <span class=\"ds-module-sticker-image\">
                                                <img src=\"";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 158);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 158);
                    echo "\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 158);
                    echo "\" data-bs-content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 158);
                    echo "\" width=\"20\" height=\"20\" />
                                            </span>
                                        ";
                } else {
                    // line 161
                    echo "                                            <div class=\"ds-module-sticker br-12 fw-500 ds-module-sticker-";
                    echo $context["key"];
                    echo "\">
                                                ";
                    // line 162
                    echo $context["oct_sticker"];
                    echo "
                                            </div>
                                        ";
                }
                // line 165
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "                                </div>
                            </div>
                        ";
        }
        // line 169
        echo "                        ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 170
            echo "                            <div class=\"position-relative pb-1\">
                                ";
            // line 171
            if (($context["images"] ?? null)) {
                // line 172
                echo "                                    <div class=\"ds-product-images-additional d-none d-xl-flex position-absolute br-4 overflow-hidden\">
                                        <div class=\"swiper ds-product-images-additional-swiper br-4\">
                                            <div class=\"button button-light br-4 p-0 swiper-slider-btn swiper-slider-btn-prev\">
                                                <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"8\" viewBox=\"0 0 5 8\" fill=\"none\">
                                                    <path d=\"M0.498016 3.94727C0.498016 3.76808 0.563326 3.58886 0.69332 3.45237L3.35986 0.652529C3.62052 0.378844 4.04187 0.378844 4.30253 0.652529C4.56318 0.926214 4.56318 1.36863 4.30253 1.64232L2.10732 3.94727L4.30253 6.25221C4.56318 6.5259 4.56318 6.96832 4.30253 7.242C4.04187 7.51569 3.62052 7.51569 3.35986 7.242L0.69332 4.44216C0.563326 4.30567 0.498016 4.12646 0.498016 3.94727Z\" fill=\"#00171F\"/>
                                                </svg>
                                            </div>
                                            <div class=\"swiper-wrapper\">
                                                ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 181
                    echo "                                                    ";
                    $context["i"] = ($context["key"] + 1);
                    // line 182
                    echo "                                                    <div class=\"swiper-slide overflow-hidden\">
                                                        <span class=\"ds-product-images-additional-item d-block\" data-href=\"";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 183);
                    echo "\">
                                                            <img src=\"";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 184);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "images_width", [], "any", false, false, false, 184);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "images_height", [], "any", false, false, false, 184);
                    echo "\" />
                                                        </span>
                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "                                            </div>
                                            <div class=\"button button-light br-4 p-0 swiper-slider-btn swiper-slider-btn-next\">
                                                <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"8\" viewBox=\"0 0 5 8\" fill=\"none\">
                                                    <path d=\"M4.49802 3.94727C4.49802 4.12646 4.43271 4.30567 4.30271 4.44216L1.63617 7.242C1.37552 7.51569 0.954162 7.51569 0.693507 7.242C0.432853 6.96832 0.432853 6.5259 0.693507 6.25221L2.88872 3.94727L0.693507 1.64232C0.432853 1.36863 0.432853 0.926214 0.693507 0.652529C0.954162 0.378845 1.37552 0.378845 1.63617 0.652529L4.30271 3.45237C4.43271 3.58886 4.49802 3.76808 4.49802 3.94727Z\" fill=\"#00171F\"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            // line 197
            echo "                                ";
            if (($context["thumb"] ?? null)) {
                // line 198
                echo "                                    ";
                $context["totalSlides"] = (1 + twig_length_filter($this->env, ($context["images"] ?? null)));
                // line 199
                echo "                                    <div class=\"ds-product-images-main";
                if ((($context["totalSlides"] ?? null) > 1)) {
                    echo " ds-product-images-main--multiple";
                }
                echo "\">
                                        <div";
                // line 200
                if ((($context["totalSlides"] ?? null) == 1)) {
                    echo " data-fancybox=\"gallery\" data-src=\"";
                    echo ($context["popup"] ?? null);
                    echo "\"";
                }
                echo " class=\"slider-placeholder";
                if ((($context["totalSlides"] ?? null) == 1)) {
                    echo " oct-gallery";
                }
                echo "\">
                                            <img src=\"";
                // line 201
                echo ($context["thumb"] ?? null);
                echo "\" class=\"mx-auto br-4\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo ($context["thumb_width"] ?? null);
                echo "\" height=\"";
                echo ($context["thumb_height"] ?? null);
                echo "\" fetchpriority=\"high\" />
                                        </div>
                                        ";
                // line 203
                if ((($context["totalSlides"] ?? null) > 1)) {
                    // line 204
                    echo "                                            <div class=\"swiper ds-product-images-main-swiper\" style=\"display:none;\">
                                                <div class=\"swiper-wrapper mb-5 mb-xl-0\">
                                                    <div class=\"ds-product-images-slide swiper-slide\">
                                                        <span data-fancybox=\"gallery\" data-src=\"";
                    // line 207
                    echo ($context["popup"] ?? null);
                    echo "\" class=\"oct-gallery d-block\">
                                                            <img src=\"";
                    // line 208
                    echo ($context["thumb"] ?? null);
                    echo "\" class=\"d-block mx-auto br-4\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo ($context["thumb_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["thumb_height"] ?? null);
                    echo "\" loading=\"lazy\" />
                                                        </span>
                                                    </div>
                                                    ";
                    // line 211
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                        // line 212
                        echo "                                                        ";
                        $context["i"] = ($context["key"] + 1);
                        // line 213
                        echo "                                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 213) > 0)) {
                            // line 214
                            echo "                                                            <div class=\"ds-product-images-slide swiper-slide\">
                                                                <span data-fancybox=\"gallery\" data-src=\"";
                            // line 215
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup_fancy", [], "any", false, false, false, 215);
                            echo "\" class=\"oct-gallery d-block\">
                                                                    <img src=\"";
                            // line 216
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 216);
                            echo "\" class=\"d-block mx-auto br-4\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" width=\"";
                            echo ($context["thumb_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["thumb_height"] ?? null);
                            echo "\" loading=\"lazy\" />
                                                                </span>
                                                            </div>
                                                        ";
                        }
                        // line 220
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 221
                    echo "                                                </div>
                                                <div class=\"swiper-pagination\"></div>
                                            </div>
                                        ";
                }
                // line 225
                echo "                                    </div>
                                ";
            }
            // line 227
            echo "                            </div>
                            <script>

                                window.addEventListener('DOMContentLoaded', () => {

                                    function sliderProducts() {
                                        var sliderProducts = \$('.ds-product-images-main .oct-gallery');

                                        sliderProducts.on('click', function(e) {
                                            e.preventDefault();

                                            var totalSlides = \$(this).parents('.ds-product-images-main').find('.ds-product-images-slide').length,
                                            dataIndex = \$(this).parents('.ds-product-images-slide').data('swiper-slide-index');

                                            \$.fancybox.open(sliderProducts, {backFocus: false, hideScrollbar: false, loop : true}, dataIndex);

                                            return false;
                                        });

                                        var additionalImagesCount = \$('.ds-product-images-additional .swiper-slide').length;

                                        if (additionalImagesCount < 6) {
                                            \$('.ds-product-images-additional .swiper-slider-btn').hide();
                                        }

                                        \$(document).on('click', '.ds-product-images-additional .swiper-slider-btn-next', function(){
                                            mainImagesSwiper.slideNext();
                                        });

                                        \$(document).on('click', '.ds-product-images-additional .swiper-slider-btn-prev', function(){
                                            mainImagesSwiper.slidePrev();
                                        });
                                    }

                                    const updatePaginationBullets = (swiper) => {
                                        if (!swiper.pagination || !swiper.pagination.el) {
                                            return;
                                        }

                                        const isMobile = window.matchMedia('(max-width: 767px)').matches;
                                        const bullets = swiper.pagination.el.querySelectorAll('.swiper-pagination-bullet');
                                        
                                        if (!isMobile || bullets.length <= 5) {
                                            bullets.forEach(bullet => {
                                                bullet.style.display = 'inline-block';
                                            });
                                            return;
                                        }

                                        const totalSlides = swiper.slides.length;
                                        const activeIndex = swiper.realIndex;
                                        const visibleBulletsCount = 5;
                                        const half = Math.floor(visibleBulletsCount / 2);

                                        let start = activeIndex - half;
                                        let end = activeIndex + half;

                                        if (activeIndex < half + 1) {
                                            start = 0;
                                            end = visibleBulletsCount - 1;
                                        } else if (activeIndex >= totalSlides - (half + 1)) {
                                            start = totalSlides - visibleBulletsCount;
                                            end = totalSlides - 1;
                                        }
                                        
                                        bullets.forEach((bullet, index) => {
                                            if (index >= start && index <= end) {
                                                bullet.style.display = 'inline-block';
                                            } else {
                                                bullet.style.display = 'none';
                                            }
                                        });
                                    };

                                    sliderProducts();

                                    ";
            // line 303
            if (($context["images"] ?? null)) {
                // line 304
                echo "                                        var additionalImagesSwiper = new Swiper(\".ds-product-images-additional-swiper\", {
                                            direction: 'vertical',
                                            slidesPerView: 6,
                                            slideToClickedSlide: true,
                                            spaceBetween: 16,
                                            speed: 500,
                                            breakpoints: {
                                                1200: {
                                                    navigation: {
                                                        nextEl: '.swiper-slider-btn-next',
                                                        prevEl: '.swiper-slider-btn-prev',
                                                        enabled: true
                                                    }
                                                }
                                            }
                                        });

                                        const mainImagePlaceholder = document.querySelector('.slider-placeholder');
                                        const mainImageSwiperContainer = document.querySelector('.ds-product-images-main-swiper');

                                        let mainImagesSwiper;

                                        function initMainSwiper() {
                                            mainImagesSwiper = new Swiper('.ds-product-images-main-swiper', {
                                                loop: true,
                                                spaceBetween: 0,
                                                slidesPerView: 1,
                                                slideToClickedSlide: true,
                                                speed: 500,
                                                pagination: {
                                                    el: '.swiper-pagination',
                                                    clickable: true,
                                                },
                                                navigation: {
                                                    enabled: false
                                                },
                                                thumbs: {
                                                    swiper: additionalImagesSwiper,
                                                },
                                                breakpoints: {
                                                    1200: {
                                                        pagination: {
                                                            enabled: false
                                                        }
                                                    }
                                                },
                                                on: {
                                                    init: updatePaginationBullets,
                                                    slideChange: updatePaginationBullets,
                                                    slideChangeTransitionEnd: updatePaginationBullets,
                                                },
                                            });
                                        }

                                        mainImagePlaceholder.remove();
                                        mainImageSwiperContainer.style.display = 'block';

                                        requestAnimationFrame(() => {
                                            initMainSwiper();
                                        });

                                    ";
            } else {
                // line 366
                echo "                                        var mainImagesSwiper = new Swiper('.ds-product-images-main-swiper', {
                                            spaceBetween: 0,
                                            slidesPerView: 1,
                                            pagination: {
                                                enabled: false
                                            },
                                            navigation: {
                                                enabled: false
                                            }
                                        });
                                    ";
            }
            // line 377
            echo "
                                    ";
            // line 378
            if ((array_key_exists("oct_product_main_image_option_status", $context) && ($context["oct_product_main_image_option_status"] ?? null))) {
                // line 379
                echo "                                        \$(document).on('change', '#ds-product-options .radio', function() {
                                            const additionalPhotos = document.querySelector('.ds-product-images-additional');

                                            if (!additionalPhotos) {
                                                return;
                                            }

                                            \$.ajax({
                                                url: 'index.php?route=product/product/getPImages&product_id=";
                // line 387
                echo ($context["product_id"] ?? null);
                echo "',
                                                type: 'post',
                                                data: \$('#ds-product-options input[type=\\'radio\\']:checked'),
                                                dataType: 'json',
                                                success: function(json) {
                                                    if (json['images']) {
                                                        \$('.ds-product-images-main').addClass('updating');

                                                        let mainSlides = [];
                                                        let thumbSlides = [];
                                                        
                                                        const obj = JSON.parse(JSON.stringify(json['images']));
                                                        
                                                        Object.keys(obj).forEach(el => {
                                                            const popupImage = obj[el].popup,
                                                                thumbImage = obj[el].thumb,
                                                                sliderImage = obj[el].thumb_slider,
                                                                width = obj[el].width,
                                                                height = obj[el].height,
                                                                thumbHeight = obj[el].thumb_height,
                                                                thumbWidth = obj[el].thumb_width;
                                                            
                                                            if (typeof additionalImagesSwiper !== 'undefined') {
                                                                thumbSlides.push(`
                                                                    <span class=\"ds-product-images-additional-item swiper-slide d-block\" href=\"\${thumbImage}\" data-href=\"\${thumbImage}\">
                                                                        <img src=\"\${thumbImage}\" width=\"\${thumbWidth}\" height=\"\${thumbHeight}\" />
                                                                    </span>
                                                                `);
                                                            }       
                                                            
                                                            mainSlides.push(`
                                                                <div class=\"ds-product-images-slide swiper-slide ds-product-images-slide-opt\">
                                                                    <span data-fancybox=\"gallery\" data-src=\"\${popupImage}\" class=\"oct-gallery d-block\">
                                                                        <img src=\"\${sliderImage}\" width=\"\${width}\" height=\"\${height}\" class=\"d-block mx-auto br-4\" />
                                                                    </span>
                                                                </div>
                                                            `);
                                                        });

                                                        \$.fancybox.destroy();
                                                        
                                                        setTimeout(function() {
                                                            mainImagesSwiper.removeAllSlides();
                                                            mainSlides.forEach(function(slideHTML) {
                                                                mainImagesSwiper.appendSlide(slideHTML);
                                                            });
                                                            mainImagesSwiper.update();
                                                            
                                                            if (typeof additionalImagesSwiper !== 'undefined') {
                                                                additionalImagesSwiper.removeAllSlides();
                                                                thumbSlides.forEach(function(slideHTML) {
                                                                    additionalImagesSwiper.appendSlide(slideHTML);
                                                                });
                                                                additionalImagesSwiper.update();

                                                                var additionalImagesCount = \$('.ds-product-images-additional .swiper-slide').length;

                                                                if (additionalImagesCount < 6) {
                                                                    \$('.ds-product-images-additional .swiper-slider-btn').hide();
                                                                } else {
                                                                    \$('.ds-product-images-additional .swiper-slider-btn').show();
                                                                }
                                                            }
                                                            
                                                            \$('.ds-product-images-main').removeClass('updating');
                                                            
                                                            ";
                // line 453
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_zoom", [], "any", true, true, false, 453) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_zoom", [], "any", false, false, false, 453))) {
                    // line 454
                    echo "                                                                \$(\".oct-gallery\").zoom();
                                                            ";
                }
                // line 456
                echo "                                                            
                                                            \$(document).on('click', '.ds-product-images-slide .oct-gallery', function(e) {
                                                                e.preventDefault();
                                                                \$.fancybox.destroy();

                                                                const \$slide = \$(this).closest('.ds-product-images-slide-opt');
                                                                const \$allSlides = \$('.ds-product-images-slide-opt:not(.swiper-slide-duplicate)');
                                                                const slideIndex = \$(this).parents('.ds-product-images-slide-opt').data('swiper-slide-index');

                                                                \$.fancybox.open(
                                                                    \$allSlides.find('.oct-gallery'),
                                                                    { backFocus: false, hideScrollbar: false, loop: true },
                                                                    slideIndex
                                                                );
                                                            });
                                                        }, 200);
                                                    }
                                                }
                                            });
                                        });
                                    ";
            }
            // line 477
            echo "
                                    stickyColumn();
                                });
                            </script>
                        ";
        }
        // line 482
        echo "                    </div>
                </div>
                <div id=\"product\" class=\"ds-product-main pt-xl-4\">
                    ";
        // line 485
        if (($context["official_rep_block"] ?? null)) {
            // line 486
            echo "                        <div class=\"oct-official-representative mb-3 d-flex align-items-center gap-3 content-block no-shadow br-6\">
                            ";
            // line 487
            if (($context["official_rep_logo"] ?? null)) {
                // line 488
                echo "                            <a href=\"";
                echo ($context["official_rep_link"] ?? null);
                echo "\" class=\"official-rep-logo-link text-decoration-none\" title=\"";
                echo ($context["manufacturer"] ?? null);
                echo "\">
                                <img src=\"";
                // line 489
                echo ($context["official_rep_logo"] ?? null);
                echo "\"
                                    alt=\"";
                // line 490
                echo ($context["manufacturer"] ?? null);
                echo "\"
                                    width=\"";
                // line 491
                echo ($context["official_rep_logo_width"] ?? null);
                echo "\" 
                                    height=\"";
                // line 492
                echo ($context["official_rep_logo_height"] ?? null);
                echo "\" 
                                    class=\"img-responsive official-rep-logo\"/>
                            </a>
                            ";
            }
            // line 496
            echo "                            <div class=\"official-rep-text dark-text fsz-14\">
                                ";
            // line 497
            echo ($context["official_rep_block"] ?? null);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 501
        echo "                    <div class=\"d-flex align-items-stretch justify-content-between mb-3\">
                        <div class=\"ds-product-main-stock d-flex align-items-center justify-content-center ";
        // line 502
        if (($context["out_of_stock"] ?? null)) {
            echo "red";
        } else {
            echo "green";
        }
        echo "-text fw-500 br-7\">
                            ";
        // line 503
        if ( !($context["out_of_stock"] ?? null)) {
            // line 504
            echo "                                <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" fill=\"none\">
                                    <path
                                        d=\"M5 -0.00305176C2.24279 -0.00305176 0 2.2402 0 4.99695C0 7.75369 2.24279 9.99695 5 9.99695C7.75721 9.99695 10 7.75369 10 4.99695C10 2.2402 7.75721 -0.00305176 5 -0.00305176ZM5 9.29927C2.62744 9.29927 0.697674 7.36951 0.697674 4.99695C0.697674 2.62439 2.62744 0.694623 5 0.694623C7.37256 0.694623 9.30233 2.62439 9.30233 4.99695C9.30233 7.36951 7.37256 9.29927 5 9.29927ZM6.87442 3.66485C7.0107 3.80113 7.0107 4.02207 6.87442 4.15835L4.70372 6.32905C4.63582 6.39696 4.54652 6.43136 4.45721 6.43136C4.36791 6.43136 4.27861 6.39742 4.2107 6.32905L3.12558 5.24393C2.9893 5.10765 2.9893 4.8867 3.12558 4.75042C3.26186 4.61414 3.48279 4.61414 3.61907 4.75042L4.45768 5.58905L6.3814 3.66533C6.51768 3.52905 6.73814 3.52904 6.87442 3.66485Z\"
                                        fill=\"#59AA45\" />
                                </svg>
                            ";
        }
        // line 510
        echo "                            ";
        if ((($context["oct_stock_display"] ?? null) &&  !($context["out_of_stock"] ?? null))) {
            echo " ";
            echo ($context["oct_product_config_stock_display"] ?? null);
            echo " ";
        }
        echo ($context["stock"] ?? null);
        echo "
                        </div>
                        <div class=\"ds-product-wishlist-compare d-flex align-items-center\">
                            <button type=\"button\" class=\"ds-product-wishlist br-7 button button-light ds-wishlist-btn\" onclick=\"wishlist.add('";
        // line 513
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" aria-label=\"Wishlist button\">
                                <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"13\" viewBox=\"0 0 14 13\" fill=\"none\">
                                    <path d=\"M6.99998 12.497C6.92932 12.497 6.85863 12.4823 6.79263 12.4523C6.57463 12.353 1.44399 9.97363 0.621322 5.7363C0.303322 4.09697 0.622659 2.49762 1.47533 1.45896C2.16533 0.617625 3.1573 0.17028 4.34463 0.16428C4.35063 0.16428 4.35663 0.16428 4.36196 0.16428C5.71663 0.16428 6.54267 0.935633 6.99933 1.5923C7.458 0.932966 8.29062 0.15828 9.65396 0.16428C10.842 0.17028 11.8346 0.617625 12.5253 1.45896C13.3766 2.49696 13.6953 4.09629 13.3766 5.73695C12.5553 9.97429 7.42396 12.3543 7.20596 12.453C7.14129 12.4823 7.07065 12.497 6.99998 12.497ZM4.36131 1.16363C4.35731 1.16363 4.354 1.16363 4.35 1.16363C3.458 1.16763 2.75135 1.48028 2.24868 2.09295C1.58268 2.90428 1.342 4.19496 1.60334 5.54563C2.24 8.82829 6.06198 10.9616 6.99998 11.4403C7.93798 10.9616 11.76 8.82829 12.396 5.54563C12.6586 4.19429 12.418 2.90362 11.7533 2.09295C11.2507 1.48095 10.544 1.16895 9.64997 1.16428C9.64597 1.16428 9.64199 1.16428 9.63866 1.16428C8.05732 1.16428 7.49669 2.74897 7.47402 2.8163C7.40469 3.0183 7.21397 3.15561 7.00064 3.15561C6.9993 3.15561 6.99862 3.15561 6.99795 3.15561C6.78395 3.15495 6.59329 3.01829 6.52529 2.81496C6.50329 2.74829 5.94198 1.16363 4.36131 1.16363Z\" fill=\"#00171F\" />
                                </svg>
                            </button>
                            <button type=\"button\" class=\"ds-product-compare br-7 button button-light ds-compare-btn\" onclick=\"compare.add('";
        // line 518
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\" aria-label=\"Compare button\">
                                <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\">
                                    <path d=\"M13.5 6.99698V8.99698C13.5 10.3757 12.378 11.497 11 11.497H2.20736L3.354 12.6436C3.54934 12.839 3.54934 13.1557 3.354 13.351C3.25667 13.4483 3.12865 13.4976 3.00065 13.4976C2.87265 13.4976 2.74463 13.449 2.6473 13.351L0.647298 11.351C0.601298 11.305 0.564721 11.2497 0.539388 11.1884C0.488721 11.0664 0.488721 10.9284 0.539388 10.8064C0.564721 10.7451 0.601298 10.6896 0.647298 10.6436L2.6473 8.64363C2.84263 8.4483 3.15932 8.4483 3.35466 8.64363C3.54999 8.83897 3.54999 9.15565 3.35466 9.35099L2.20801 10.4976H11C11.8267 10.4976 12.5 9.82497 12.5 8.99764V6.99764C12.5 6.72164 12.724 6.49764 13 6.49764C13.276 6.49764 13.5 6.72098 13.5 6.99698ZM1 7.49698C1.276 7.49698 1.5 7.27298 1.5 6.99698V4.99698C1.5 4.16965 2.17333 3.49698 3 3.49698H11.7926L10.646 4.64363C10.4507 4.83896 10.4507 5.15565 10.646 5.35099C10.7433 5.44832 10.8713 5.49764 10.9993 5.49764C11.1273 5.49764 11.2554 5.44899 11.3527 5.35099L13.3527 3.35099C13.3987 3.30499 13.4353 3.24972 13.4606 3.18839C13.5113 3.06639 13.5113 2.92839 13.4606 2.80639C13.4353 2.74506 13.3987 2.68963 13.3527 2.64363L11.3527 0.643631C11.1574 0.448298 10.8407 0.448298 10.6453 0.643631C10.45 0.838965 10.45 1.15565 10.6453 1.35099L11.792 2.49764H3C1.622 2.49764 0.5 3.61897 0.5 4.99764V6.99764C0.5 7.27297 0.724 7.49698 1 7.49698Z\" fill=\"#00171F\" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    ";
        // line 525
        if (($context["price"] ?? null)) {
            // line 526
            echo "                        <div class=\"ds-product-main-price\">
                            ";
            // line 527
            if ( !($context["special"] ?? null)) {
                // line 528
                echo "                                <div class=\"ds-price-new fsz-24 fw-700 dark-text\">";
                echo ($context["price"] ?? null);
                echo "</div>
                            ";
            } else {
                // line 530
                echo "                                <div class=\"w-100 d-flex flex-column flex-sm-row align-items-stretch justify-content-between\">
                                    <div class=\"ds-product-main-price-info\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"ds-price-old light-text text-decoration-line-through fw-500\">";
                // line 533
                echo ($context["price"] ?? null);
                echo "</div>
                                            ";
                // line 534
                if (($context["oct_sticker_you_save"] ?? null)) {
                    // line 535
                    echo "                                                <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                    echo ($context["you_save"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 537
                echo "                                        </div>
                                        <div class=\"ds-price-new fsz-24 fw-700 red-text\">";
                // line 538
                echo ($context["special"] ?? null);
                echo "</div>
                                        <div class=\"ds-product-price-discount fsz-12 mt-1\">";
                // line 539
                echo ($context["oct_product_you_save"] ?? null);
                echo " <span id=\"main-product-you-save\">";
                echo ($context["you_save_price"] ?? null);
                echo "</span></div>
                                    </div>
                                    ";
                // line 541
                if (($context["product_timer"] ?? null)) {
                    // line 542
                    echo "                                        <div class=\"ds-product-timer d-inline-flex flex-column p-2 p-md-3 br-7 my-3 my-sm-0 text-center\">
                                            <div class=\"ds-product-timer-text dark-text fw-500 fsz-12\">";
                    // line 543
                    echo ($context["oct_product_timer"] ?? null);
                    echo "</div>
                                            <div class=\"ds-product-timer-inner d-inline-flex align-items-start justify-content-center\">
                                                <div class=\"d-flex flex-column align-items-center\">
                                                    <div id=\"ds-timer-days\" class=\"ds-product-timer-number red-text fw-600\"></div>
                                                    <span class=\"dark-text fsz-10\">";
                    // line 547
                    echo ($context["oct_product_timer_days"] ?? null);
                    echo "</span>
                                                </div>
                                                <div class=\"ds-product-timer-delimiter animated secondary-text\">:</div>
                                                <div class=\"d-flex flex-column align-items-center\">
                                                    <div id=\"ds-timer-hours\" class=\"ds-product-timer-number red-text fw-600\"></div>
                                                    <span class=\"dark-text fsz-10\">";
                    // line 552
                    echo ($context["oct_product_timer_hours"] ?? null);
                    echo "</span>
                                                </div>
                                                <div class=\"ds-product-timer-delimiter animated secondary-text\">:</div>
                                                <div class=\"d-flex flex-column align-items-center\">
                                                    <div id=\"ds-timer-minutes\" class=\"ds-product-timer-number red-text fw-600\"></div>
                                                    <span class=\"dark-text fsz-10\">";
                    // line 557
                    echo ($context["oct_product_timer_minutes"] ?? null);
                    echo "</span>
                                                </div>
                                                <div class=\"ds-product-timer-delimiter animated secondary-text\">:</div>
                                                <div class=\"d-flex flex-column align-items-center\">
                                                    <div id=\"ds-timer-seconds\" class=\"ds-product-timer-number red-text fw-600\"></div>
                                                    <span class=\"dark-text fsz-10\">";
                    // line 562
                    echo ($context["oct_product_timer_seconds"] ?? null);
                    echo "</span>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 567
                echo "                                </div>
                            ";
            }
            // line 569
            echo "                            ";
            if (((array_key_exists("oct_popup_found_cheaper_status", $context) && (($context["oct_popup_found_cheaper_status"] ?? null) == "on")) && ($context["can_buy"] ?? null))) {
                // line 570
                echo "                                <span class=\"ds-product-found-cheaper blue-link fsz-12\" onclick=\"octPopupFoundCheaper('";
                echo ($context["product_id"] ?? null);
                echo "');\">";
                echo ($context["oct_product_cheaper"] ?? null);
                echo "</span>
                            ";
            }
            // line 572
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 573
                echo "                                <div class=\"price-tax fsz-10 fw-300 mt-1\">";
                echo ($context["text_tax"] ?? null);
                echo "
                                    <span>";
                // line 574
                echo ($context["tax"] ?? null);
                echo "</span>
                                </div>
                            ";
            }
            // line 577
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 578
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 579
                    echo "                                    <div class=\"ds-product-price-discount fsz-12 mt-1\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 579);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 579);
                    echo "</div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 581
                echo "                            ";
            }
            // line 582
            echo "                            ";
            if ((($context["minimum"] ?? null) > 1)) {
                // line 583
                echo "                                <div class=\"ds-product-option-minquant fsz-14 mt-1\">";
                echo ($context["text_minimum"] ?? null);
                echo "</div>
                            ";
            }
            // line 585
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 586
                echo "                                <div class=\"ds-product-option-bonus fsz-12 mt-1\">";
                echo ($context["text_points"] ?? null);
                echo "
                                    ";
                // line 587
                echo ($context["points"] ?? null);
                echo "</div>
                                ";
                // line 588
                if (($context["reward"] ?? null)) {
                    // line 589
                    echo "                                    <div class=\"ds-product-option-bonus fsz-12 mt-1\">";
                    echo ($context["text_reward"] ?? null);
                    echo "
                                        ";
                    // line 590
                    echo ($context["reward"] ?? null);
                    echo "</div>
                                ";
                }
                // line 592
                echo "                            ";
            }
            // line 593
            echo "                            ";
            if (($context["recurrings"] ?? null)) {
                // line 594
                echo "                                <div class=\"form-group d-flex flex-column flex-md-row align-items-md-center\">
                                    <div class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\">";
                // line 595
                echo ($context["text_payment_recurring"] ?? null);
                echo "
                                        <span class=\"required\"> *</span></div>
                                    <div class=\"form-group\">
                                        <select name=\"recurring_id\" class=\"form-select form-control\">
                                            <option value=\"\">";
                // line 599
                echo ($context["text_select"] ?? null);
                echo "</option>
                                            ";
                // line 600
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 601
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 601);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 601);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 603
                echo "                                        </select>
                                        <div class=\"help-block\" id=\"recurring-description\"></div>
                                    </div>
                                </div>
                            ";
            }
            // line 608
            echo "                        </div>
                    ";
        }
        // line 610
        echo "                    ";
        if (($context["can_buy"] ?? null)) {
            // line 611
            echo "                        <div class=\"ds-product-main-actions ds-product-actions-middle br-7 content-block no-shadow p-3 p-md-4 my-3 my-md-4 d-flex flex-column g-3 g-md-4\">
                            ";
            // line 612
            if (($context["options"] ?? null)) {
                // line 613
                echo "                                <div id=\"ds-product-options\" class=\"ds-product-options mb-3 mb-md-4 pb-3 pb-md-4\">
                                    ";
                // line 614
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 615
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 615) == "select")) {
                        // line 616
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 617
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 617);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 617);
                        echo "
                                                    ";
                        // line 618
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 618)) {
                            // line 619
                            echo "                                                        <span class=\"required option-required\"> *</span>
                                                    ";
                        }
                        // line 621
                        echo "                                                </label>
                                                <select name=\"option[";
                        // line 622
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 622);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 622);
                        echo "\" class=\"form-select form-control\">
                                                    <option value=\"\">";
                        // line 623
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                                                    ";
                        // line 624
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 624));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 625
                            echo "                                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 625);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 625);
                            echo "
                                                            ";
                            // line 626
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 626)) {
                                // line 627
                                echo "                                                                (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 627);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 627);
                                echo ")
                                                            ";
                            }
                            // line 629
                            echo "                                                        </option>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 631
                        echo "                                                </select>
                                            </div>
                                        ";
                    }
                    // line 634
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 634) == "radio")) {
                        // line 635
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\">";
                        // line 636
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 636);
                        echo "
                                                    ";
                        // line 637
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 637)) {
                            // line 638
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 639
                        echo "                                                </label>
                                                <div id=\"input-option";
                        // line 640
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 640);
                        echo "\" class=\"options-box d-flex flex-wrap\">
                                                    ";
                        // line 641
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 641));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 642
                            echo "                                                        <div class=\"radio\">
                                                            <label
                                                                data-bs-toggle=\"tooltip\"
                                                                data-bs-placement=\"top\"
                                                                class=\"option optid-";
                            // line 646
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 646);
                            echo " not-selected";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 646)) {
                                echo " radio-img";
                            } else {
                                echo " ds-radio";
                            }
                            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 646), ($context["allowed_options_ids"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 646) == 1))) {
                                echo " auto-choose";
                            }
                            echo "\"
                                                                title=\"";
                            // line 647
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 647);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 647)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 647);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 647);
                            }
                            echo "\">
                                                                <input type=\"radio\" name=\"option[";
                            // line 648
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 648);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 648);
                            echo "\" class=\"input-radio\"/>
                                                                ";
                            // line 649
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 649)) {
                                // line 650
                                echo "                                                                    <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 650);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 650);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 650)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 650);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 650);
                                    echo " ";
                                }
                                echo "\" width=\"50\" height=\"50\" loading=\"lazy\" />
                                                                ";
                            } else {
                                // line 652
                                echo "                                                                    ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 652);
                                echo "
                                                                ";
                            }
                            // line 654
                            echo "                                                            </label>
                                                            <script>
                                                                \$(document).ready(function() {
                                                                    \$(document).on('click', 'label.optid-";
                            // line 657
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 657);
                            echo "', function(event) {
                                                                        \$('label.optid-";
                            // line 658
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 658);
                            echo "').removeClass('selected').addClass('not-selected');
                                                                        \$(this).removeClass('not-selected').addClass('selected');
                                                                    });
                                                                });
                                                            </script>
                                                        </div>
                                                    ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 665
                        echo "                                                </div>
                                            </div>
                                        ";
                    }
                    // line 668
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 668) == "checkbox")) {
                        // line 669
                        echo "                                            <div class=\"form-checkbox-group\">
                                                <div class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\">";
                        // line 670
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 670);
                        echo "
                                                    ";
                        // line 671
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 671)) {
                            // line 672
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 673
                        echo "                                                </div>
                                                <div id=\"input-option";
                        // line 674
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 674);
                        echo "\">
                                                    ";
                        // line 675
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 675));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 676
                            echo "                                                        <div class=\"form-check\">
                                                            <label class=\"form-check-label d-flex align-items-center\">
                                                                ";
                            // line 678
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 678)) {
                                echo "<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 678);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 678);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 678)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 678);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 678);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" width=\"50\" height=\"50\" loading=\"lazy\" />";
                            }
                            // line 679
                            echo "                                                                <input type=\"checkbox\" id=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 679);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 679);
                            echo "]\" name=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 679);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 679);
                            echo "\" class=\"form-check-input\"/>
                                                                ";
                            // line 680
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 680);
                            echo "
                                                                ";
                            // line 681
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 681)) {
                                // line 682
                                echo "                                                                    (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 682);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 682);
                                echo ")
                                                                ";
                            }
                            // line 684
                            echo "                                                            </label>
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 687
                        echo "                                                </div>
                                            </div>
                                        ";
                    }
                    // line 690
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 690) == "text")) {
                        // line 691
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 692
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 692);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 692);
                        echo "
                                                    ";
                        // line 693
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 693)) {
                            // line 694
                            echo "                                                        <span class=\"required option-required\"> *</span>
                                                    ";
                        }
                        // line 696
                        echo "                                                </label>
                                                <input type=\"text\" name=\"option[";
                        // line 697
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 697);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 697);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 697);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 697);
                        echo "\" class=\"form-control\" inputmode=\"text\">
                                            </div>
                                        ";
                    }
                    // line 700
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 700) == "textarea")) {
                        // line 701
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 702
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 702);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 702);
                        echo "
                                                    ";
                        // line 703
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 703)) {
                            // line 704
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 705
                        echo "                                                </label>
                                                <textarea name=\"option[";
                        // line 706
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 706);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 706);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 706);
                        echo "\" class=\"form-control\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 706);
                        echo "</textarea>
                                            </div>
                                        ";
                    }
                    // line 709
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 709) == "file")) {
                        // line 710
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2 d-block\">";
                        // line 711
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 711);
                        echo "
                                                    ";
                        // line 712
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 712)) {
                            // line 713
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 714
                        echo "                                                </label>
                                                <button type=\"button\" id=\"button-upload";
                        // line 715
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 715);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"button button-outline button-outline-primary br-7\">
                                                    <i class=\"fa fa-upload me-2\"></i>
                                                    ";
                        // line 717
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                                                <input type=\"hidden\" name=\"option[";
                        // line 718
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 718);
                        echo "]\" value=\"\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 718);
                        echo "\"/>
                                            </div>
                                        ";
                    }
                    // line 721
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 721) == "date")) {
                        // line 722
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 723
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 723);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 723);
                        echo "
                                                    ";
                        // line 724
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 724)) {
                            // line 725
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 726
                        echo "                                                </label>
                                                <div class=\"input-group date\">
                                                    <input type=\"date\" name=\"option[";
                        // line 728
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 728);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 728);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 728);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 732
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 732) == "datetime")) {
                        // line 733
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 734
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 734);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 734);
                        echo "
                                                    ";
                        // line 735
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 735)) {
                            // line 736
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 737
                        echo "                                                </label>
                                                <div class=\"input-group datetime\">
                                                    <input type=\"datetime-local\" name=\"option[";
                        // line 739
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 739);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 739);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 739);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 743
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 743) == "time")) {
                        // line 744
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 745
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 745);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 745);
                        echo "
                                                    ";
                        // line 746
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 746)) {
                            // line 747
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 748
                        echo "                                                </label>
                                                <div class=\"input-group time\">
                                                    <input type=\"time\" name=\"option[";
                        // line 750
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 750);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 750);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 750);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 754
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 755
                echo "                                </div>
                            ";
            }
            // line 757
            echo "                            <div class=\"ds-product-main-buttons d-flex\">
                                <div class=\"ds-product-main-cart d-flex align-items-stretch justify-content-between\">
                                    <div class=\"ds-module-quantity d-flex align-items-center justify-content-center br-8 me-3";
            // line 759
            if ( !($context["product_quantity_show"] ?? null)) {
                echo " d-none";
            }
            echo "\">
                                        <button type=\"button\" aria-label=\"Minus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center\" onclick=\"updateValueProduct(true, false, false);\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <g>
                                                    <path
                                                        d=\"M3.33333 7.5L12.6667 7.5C12.9427 7.5 13.1667 7.724 13.1667 8C13.1667 8.276 12.9427 8.5 12.6667 8.5L3.33333 8.5C3.05733 8.5 2.83333 8.276 2.83333 8C2.83333 7.724 3.05733 7.5 3.33333 7.5Z\"
                                                        fill=\"#25314C\"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 769
            echo ($context["minimum"] ?? null);
            echo "\" id=\"input-quantity\" aria-label=\"Quantity\" inputmode=\"numeric\">
                                        <button type=\"button\" aria-label=\"Plus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center\" onclick=\"updateValueProduct(false, true, false);\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <g>
                                                    <path
                                                        d=\"M2.83341 8.00009C2.83341 7.72409 3.05741 7.50009 3.33341 7.50009L7.50008 7.50009L7.50008 3.33342C7.50008 3.05742 7.72408 2.83342 8.00008 2.83342C8.27608 2.83342 8.50008 3.05742 8.50008 3.33342L8.50008 7.50009L12.6667 7.50008C12.9427 7.50008 13.1667 7.72408 13.1667 8.00008C13.1667 8.27608 12.9427 8.50008 12.6667 8.50008L8.50008 8.50009L8.50008 12.6668C8.50008 12.9428 8.27608 13.1668 8.00008 13.1668C7.72408 13.1668 7.50008 12.9428 7.50008 12.6668L7.50008 8.50009L3.33342 8.50009C3.05742 8.50009 2.83342 8.27609 2.83341 8.00009Z\"
                                                        fill=\"#25314C\"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <input id=\"oct-product-id\" type=\"hidden\" name=\"product_id\" value=\"";
            // line 779
            echo ($context["product_id"] ?? null);
            echo "\"/>
                                        <input type=\"hidden\" id=\"min-product-quantity\" value=\"";
            // line 780
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
                                        <input type=\"hidden\" id=\"max-product-quantity\" value=\"";
            // line 781
            echo ($context["max_quantity"] ?? null);
            echo "\" name=\"max_quantity\">
                                    </div>
                                    <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 783
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"ds-product-main-cart-button button button-primary br-7 fsz-14 fw-500 flex-grow-1\">
                                        <svg class=\"me-1\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                fill=\"#FFF\"></path>
                                        </svg>
                                        <span class=\"button-text d-inline\">";
            // line 789
            echo ($context["button_cart"] ?? null);
            echo "</span>
                                    </button>
                                </div>
                                ";
            // line 792
            if ((array_key_exists("oct_popup_purchase_status", $context) && ($context["can_buy"] ?? null))) {
                // line 793
                echo "                                    <button type=\"button\" class=\"ds-product-fast-order-button button button-outline button-outline-primary br-7 fsz-12\" onclick=\"octPopPurchase('";
                echo ($context["product_id"] ?? null);
                echo "')\">
                                        <span class=\"button-text\">";
                // line 794
                echo ($context["oct_product_quickbuy"] ?? null);
                echo "</span>
                                    </button>
                                ";
            }
            // line 797
            echo "                            </div>
                        </div>
                        ";
            // line 799
            echo ($context["oct_byoneclick"] ?? null);
            echo "
                    ";
        } else {
            // line 800
            echo "   
                        ";
            // line 801
            if ((array_key_exists("oct_stock_notifier_status", $context) &&  !twig_test_empty(($context["oct_stock_notifier_status"] ?? null)))) {
                // line 802
                echo "                            <div class=\"pt-3\">
                                <button onclick=\"octStockNotifier('";
                // line 803
                echo ($context["product_id"] ?? null);
                echo "');\" type=\"button\" class=\"button button-primary br-7 ds-stock-notifier-btn\">
                                    <span class=\"button-text\">";
                // line 804
                echo ($context["oct_stock_notifier_text"] ?? null);
                echo "</span>
                                </button>
                            </div>
                        ";
            }
            // line 808
            echo "                    ";
        }
        // line 809
        echo "                    ";
        if ((array_key_exists("product_js_button", $context) && ($context["product_js_button"] ?? null))) {
            // line 810
            echo "                        <div class=\"ds-product-social-buttons mt-3\">";
            echo ($context["product_js_button"] ?? null);
            echo "</div>
                    ";
        }
        // line 812
        echo "                    ";
        if (($context["oct_attributs"] ?? null)) {
            // line 813
            echo "                        <div class=\"ds-product-main-attributes dark-text fsz-14 fw-300 mt-4 pt-3 d-flex flex-wrap\">
                            ";
            // line 814
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_attributs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 815
                echo "                                <div class=\"ds-product-main-attributes-item br-4 py-1 px-2\">
                                    ";
                // line 816
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 816);
                echo ":<span class=\"fsz-12 fw-500 ps-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 816);
                echo "</span>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 819
            echo "                        </div>
                    ";
        }
        // line 821
        echo "                    ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_advantage", [], "any", true, true, false, 821) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_advantage", [], "any", false, false, false, 821) == "on")) && (array_key_exists("oct_product_advantages", $context) &&  !twig_test_empty(($context["oct_product_advantages"] ?? null)))) || ((array_key_exists("oct_product_delivery", $context) &&  !twig_test_empty(($context["oct_product_delivery"] ?? null))) || (array_key_exists("oct_product_payment", $context) &&  !twig_test_empty(($context["oct_product_payment"] ?? null)))))) {
            // line 822
            echo "                    <div class=\"ds-product-advantages content-block no-shadow d-flex flex-column px-3 px-md-0 px-xl-3 py-0 py-md-3 py-xl-0 mb-xl-4 mt-3\">
                        <!-- Product advantages delivery -->
                        ";
            // line 824
            if ((array_key_exists("oct_product_delivery", $context) &&  !twig_test_empty(($context["oct_product_delivery"] ?? null)))) {
                // line 825
                echo "                            <div class=\"ds-product-advantages-item px-md-3 px-lg-4 pt-3 px-xl-0\">
                                <div class=\"dark-text fw-500 fsz-16\">";
                // line 826
                echo ($context["oct_product_delivery_text"] ?? null);
                echo "</div>
                                ";
                // line 827
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_product_delivery"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["delivery_item"]) {
                    // line 828
                    echo "                                    <div class=\"ds-product-advantages-item-text d-flex align-items-center justify-content-between gap-2 py-3\">
                                        <div class=\"d-flex align-items-center gap-2\">
                                            <img class=\"ds-product-advantages-item-text-img\" src=\"";
                    // line 830
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "image", [], "any", false, false, false, 830);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "title", [], "any", false, false, false, 830);
                    echo "\" width=\"20\" height=\"20\"/>
                                            <div class=\"d-flex flex-column fsz-12\">
                                                <span class=\"secondary-text\">";
                    // line 832
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "title", [], "any", false, false, false, 832);
                    echo "</span>
                                                <span>";
                    // line 833
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "delivery_time", [], "any", false, false, false, 833);
                    echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"ds-product-advantages-item-text-price d-flex align-items-center justify-content-end gap-2\">
                                            <span class=\"dark-text text-end fsz-10\">";
                    // line 837
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "price", [], "any", false, false, false, 837);
                    echo "</span>
                                            ";
                    // line 838
                    if (twig_get_attribute($this->env, $this->source, $context["delivery_item"], "link", [], "any", false, false, false, 838)) {
                        // line 839
                        echo "                                                <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "link", [], "any", false, false, false, 839);
                        echo "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"button no-btn p-0\" aria-label=\"Dilivery link\">
                                                    <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"17\" viewBox=\"0 0 16 17\" fill=\"none\">
                                                        <path d=\"M8 16.3529C3.58847 16.3529 0 12.7644 0 8.35291C0 3.94137 3.58847 0.352905 8 0.352905C12.4115 0.352905 16 3.94137 16 8.35291C16 12.7644 12.4115 16.3529 8 16.3529ZM8 1.46918C4.20391 1.46918 1.11628 4.55681 1.11628 8.35291C1.11628 12.149 4.20391 15.2366 8 15.2366C11.7961 15.2366 14.8837 12.149 14.8837 8.35291C14.8837 4.55681 11.7961 1.46918 8 1.46918ZM8.55814 11.7017V8.30003C8.55814 7.99194 8.30809 7.7419 8 7.7419C7.69191 7.7419 7.44186 7.99194 7.44186 8.30003V11.7017C7.44186 12.0098 7.69191 12.2599 8 12.2599C8.30809 12.2599 8.55814 12.0098 8.55814 11.7017ZM8.75908 5.74825C8.75908 5.33746 8.42643 5.00407 8.0149 5.00407H8.00745C7.59666 5.00407 7.2669 5.33746 7.2669 5.74825C7.2669 6.15904 7.60411 6.49244 8.0149 6.49244C8.42569 6.49244 8.75908 6.15904 8.75908 5.74825Z\" fill=\"#00171F\"/>
                                                    </svg>
                                                </a>
                                            ";
                    }
                    // line 845
                    echo "                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 848
                echo "                            </div>
                        ";
            }
            // line 850
            echo "                        <!-- Product advantages payments -->
                        ";
            // line 851
            if ((array_key_exists("oct_product_payment", $context) &&  !twig_test_empty(($context["oct_product_payment"] ?? null)))) {
                // line 852
                echo "                            <div class=\"ds-product-advantages-item px-md-3 px-lg-4 pt-3 px-xl-0\">
                                <div class=\"dark-text fw-500 fsz-16 mb-3\">";
                // line 853
                echo ($context["oct_product_payment_text"] ?? null);
                echo "</div>
                                <div class=\"ds-product-advantages-payments d-flex flex-wrap align-items-stretch gap-2 mb-3\">
                                    ";
                // line 855
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_product_payment"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_item"]) {
                    // line 856
                    echo "                                        <div class=\"ds-product-advantages-payments-item ds-product-main-attributes-item d-inline-flex align-items-center br-4 py-1 px-2\">
                                            ";
                    // line 857
                    if (twig_get_attribute($this->env, $this->source, $context["payment_item"], "image", [], "any", false, false, false, 857)) {
                        // line 858
                        echo "                                                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_item"], "image", [], "any", false, false, false, 858);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_item"], "title", [], "any", false, false, false, 858);
                        echo "\" width=\"20\" height=\"20\" loading=\"lazy\"/>
                                            ";
                    }
                    // line 860
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["payment_item"], "title", [], "any", false, false, false, 860)) {
                        // line 861
                        echo "                                                <span class=\"fw-300 fsz-12 dark-text ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_item"], "title", [], "any", false, false, false, 861);
                        echo "</span>
                                            ";
                    }
                    // line 862
                    echo "  
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 865
                echo "                                </div>
                            </div>
                        ";
            }
            // line 868
            echo "                        <!-- End of product advantages--> 
                        ";
            // line 869
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_advantages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
                // line 870
                echo "                            <div class=\"ds-product-advantages-item d-flex align-items-center px-3 px-lg-4 py-xl-3 px-xl-3\">
                                <img src=\"";
                // line 871
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 871);
                echo "\" alt=\"\" width=\"50\" height=\"50\" loading=\"lazy\" />
                                <div class=\"ds-product-advantages-item-text px-3 py-3 py-md-0\">
                                    <a href=\"";
                // line 873
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "link", [], "any", false, false, false, 873);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 873) && twig_get_attribute($this->env, $this->source, $context["advantage"], "popup", [], "any", false, false, false, 873))) {
                    echo " data-rel=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 873);
                    echo "\" ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["advantage"], "link", [], "any", false, false, false, 873) != "javascript:;")) {
                    echo " target=\"_blank\" ";
                }
                echo " class=\"dark-text fw-500 fsz-14";
                if (twig_get_attribute($this->env, $this->source, $context["advantage"], "popup", [], "any", false, false, false, 873)) {
                    echo " agree";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "title", [], "any", false, false, false, 873);
                echo "</a>
                                    <div class=\"light-text fsz-12 mt-2\">";
                // line 874
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "text", [], "any", false, false, false, 874);
                echo "</div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 878
            echo "                    </div>
                ";
        }
        // line 880
        echo "                </div>
            </div>
            ";
        // line 882
        if ((array_key_exists("product_sets", $context) && ($context["product_sets"] ?? null))) {
            // line 883
            echo "                ";
            echo ($context["product_sets"] ?? null);
            echo "
            ";
        }
        // line 885
        echo "        </div>
        <div class=\"row d-flex pt-3 g-3\">
            <div class=\"col-xl-3 order-0 order-xl-1 d-none d-xl-block\">
                <div class=\"ds-product-block sticky-md-top ds-module-col\">
                    <div class=\"content-block d-none d-xl-flex flex-column\">
                        <div class=\"ds-module-img d-flex flex-column\">
                            <div class=\"ds-module-img-box position-relative\">
                                <div class=\"ds-module-buttons position-absolute d-flex flex-column br-8\">
                                    <button type=\"button\" class=\"ds-module-button ds-module-button-wishlist align-self-stretch p-0 ds-wishlist-btn\" onclick=\"wishlist.add('";
        // line 893
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" aria-label=\"Wishlist button\">
                                        <svg width=\"15\" height=\"13\" viewBox=\"0 0 15 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <g>
                                                <path
                                                    d=\"M7.49998 12.5C7.42931 12.5 7.35862 12.4853 7.29262 12.4553C7.07462 12.3559 1.94398 9.97662 1.12132 5.73929C0.803317 4.09996 1.12265 2.50062 1.97532 1.46195C2.66532 0.620615 3.65729 0.173271 4.84462 0.167271C4.85062 0.167271 4.85662 0.167271 4.86196 0.167271C6.21662 0.167271 7.04266 0.938623 7.49933 1.59529C7.95799 0.935957 8.79062 0.161271 10.1539 0.167271C11.342 0.173271 12.3346 0.620615 13.0253 1.46195C13.8766 2.49995 14.1953 4.09928 13.8766 5.73994C13.0553 9.97728 7.92395 12.3573 7.70595 12.456C7.64129 12.4853 7.57065 12.5 7.49998 12.5ZM4.86131 1.16662C4.85731 1.16662 4.854 1.16662 4.85 1.16662C3.95799 1.17062 3.25134 1.48327 2.74868 2.09594C2.08268 2.90727 1.842 4.19795 2.10333 5.54862C2.74 8.83128 6.56198 10.9646 7.49998 11.4433C8.43798 10.9646 12.26 8.83128 12.896 5.54862C13.1586 4.19728 12.918 2.90661 12.2533 2.09594C11.7506 1.48394 11.044 1.17194 10.15 1.16727C10.146 1.16727 10.142 1.16727 10.1387 1.16727C8.55732 1.16727 7.99669 2.75196 7.97402 2.81929C7.90469 3.02129 7.71396 3.1586 7.50063 3.1586C7.4993 3.1586 7.49861 3.1586 7.49794 3.1586C7.28394 3.15794 7.09329 3.02128 7.02529 2.81795C7.00329 2.75128 6.44197 1.16662 4.86131 1.16662Z\"
                                                    fill=\"#00171F\"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <button type=\"button\" class=\"ds-module-button ds-module-button-compare align-self-stretch p-0 ds-compare-btn\" onclick=\"compare.add('";
        // line 902
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\" aria-label=\"Compare button\">
                                        <svg width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <g>
                                                <path
                                                    d=\"M14 7.0001V9.0001C14 10.3788 12.878 11.5001 11.5 11.5001H2.70736L3.854 12.6467C4.04934 12.8421 4.04934 13.1588 3.854 13.3541C3.75667 13.4514 3.62865 13.5007 3.50065 13.5007C3.37265 13.5007 3.24463 13.4521 3.1473 13.3541L1.1473 11.3541C1.1013 11.3081 1.06472 11.2528 1.03939 11.1915C0.988721 11.0695 0.988721 10.9315 1.03939 10.8095C1.06472 10.7482 1.1013 10.6927 1.1473 10.6467L3.1473 8.64674C3.34263 8.45141 3.65932 8.45141 3.85466 8.64674C4.04999 8.84208 4.04999 9.15877 3.85466 9.3541L2.70801 10.5007H11.5C12.3267 10.5007 13 9.82808 13 9.00075V7.00075C13 6.72475 13.224 6.50075 13.5 6.50075C13.776 6.50075 14 6.7241 14 7.0001ZM1.5 7.5001C1.776 7.5001 2 7.2761 2 7.0001V5.0001C2 4.17276 2.67333 3.5001 3.5 3.5001H12.2926L11.146 4.64674C10.9507 4.84208 10.9507 5.15877 11.146 5.3541C11.2433 5.45143 11.3713 5.50075 11.4993 5.50075C11.6273 5.50075 11.7554 5.4521 11.8527 5.3541L13.8527 3.3541C13.8987 3.3081 13.9353 3.25284 13.9606 3.1915C14.0113 3.0695 14.0113 2.9315 13.9606 2.8095C13.9353 2.74817 13.8987 2.69274 13.8527 2.64674L11.8527 0.646744C11.6574 0.451411 11.3407 0.451411 11.1453 0.646744C10.95 0.842077 10.95 1.15877 11.1453 1.3541L12.292 2.50075H3.5C2.122 2.50075 1 3.62208 1 5.00075V7.00075C1 7.27608 1.224 7.5001 1.5 7.5001Z\"
                                                    fill=\"#00171F\"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                ";
        // line 912
        if (($context["thumb"] ?? null)) {
            // line 913
            echo "                                    <img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"\" width=\"210\" height=\"210\" loading=\"lazy\" class=\"d-block mx-auto\">
                                ";
        }
        // line 915
        echo "                            </div>
                        </div>
                        <div class=\"ds-module-caption d-flex flex-column h-100\">
                            <div class=\"ds-module-title fsz-14 fw-500 dark-text mt-3\">";
        // line 918
        echo ($context["heading_title"] ?? null);
        echo "</div>
                            ";
        // line 919
        if (($context["price"] ?? null)) {
            // line 920
            echo "                                <div class=\"ds-module-price mt-3\">
                                    ";
            // line 921
            if ( !($context["special"] ?? null)) {
                // line 922
                echo "                                        <div class=\"ds-price-new fsz-18 fw-700 dark-text\">";
                echo ($context["price"] ?? null);
                echo "</div>
                                    ";
            } else {
                // line 924
                echo "                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"ds-price-old fsz-12 light-text text-decoration-line-through fw-500\">";
                // line 925
                echo ($context["price"] ?? null);
                echo "</div>
                                            ";
                // line 926
                if ((($context["oct_sticker_you_save"] ?? null) && ($context["you_save"] ?? null))) {
                    // line 927
                    echo "                                                <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                    echo ($context["you_save"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 929
                echo "                                        </div>
                                        <div class=\"ds-price-new fsz-18 fw-700 red-text\">";
                // line 930
                echo ($context["special"] ?? null);
                echo "</div>
                                    ";
            }
            // line 932
            echo "                                </div>
                            ";
        }
        // line 934
        echo "                            ";
        if (($context["can_buy"] ?? null)) {
            // line 935
            echo "                                <div class=\"ds-module-cart d-flex align-items-center justify-content-between\">
                                    <div class=\"ds-module-quantity d-flex align-items-center justify-content-center br-8";
            // line 936
            if ( !($context["product_quantity_show"] ?? null)) {
                echo " d-none";
            }
            echo "\">
                                        <button type=\"button\" aria-label=\"Minus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center ds-minus\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <g>
                                                    <path
                                                        d=\"M3.33333 7.5L12.6667 7.5C12.9427 7.5 13.1667 7.724 13.1667 8C13.1667 8.276 12.9427 8.5 12.6667 8.5L3.33333 8.5C3.05733 8.5 2.83333 8.276 2.83333 8C2.83333 7.724 3.05733 7.5 3.33333 7.5Z\"
                                                        fill=\"#25314C\"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 946
            echo ($context["minimum"] ?? null);
            echo "\" aria-label=\"Quantity\" inputmode=\"numeric\">
                                        <button type=\"button\" aria-label=\"Plus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center ds-plus\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <g>
                                                    <path
                                                        d=\"M2.83341 8.00009C2.83341 7.72409 3.05741 7.50009 3.33341 7.50009L7.50008 7.50009L7.50008 3.33342C7.50008 3.05742 7.72408 2.83342 8.00008 2.83342C8.27608 2.83342 8.50008 3.05742 8.50008 3.33342L8.50008 7.50009L12.6667 7.50008C12.9427 7.50008 13.1667 7.72408 13.1667 8.00008C13.1667 8.27608 12.9427 8.50008 12.6667 8.50008L8.50008 8.50009L8.50008 12.6668C8.50008 12.9428 8.27608 13.1668 8.00008 13.1668C7.72408 13.1668 7.50008 12.9428 7.50008 12.6668L7.50008 8.50009L3.33342 8.50009C3.05742 8.50009 2.83342 8.27609 2.83341 8.00009Z\"
                                                        fill=\"#25314C\"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 956
            echo ($context["product_id"] ?? null);
            echo "\">
                                        <input type=\"hidden\" class=\"min-qty\" value=\"";
            // line 957
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
                                    </div>
                                    <button type=\"button\" class=\"button button-outline button-outline-primary br-8 fsz-12 ds-product-fixed-cart-btn\" aria-label=\"To cart\">
                                        <svg class=\"me-1\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                fill=\"#00A8E8\"></path>
                                        </svg>
                                        <span class=\"button-text d-inline\">";
            // line 965
            echo ($context["button_cart"] ?? null);
            echo "</span>
                                    </button>
                                </div>
                            ";
        }
        // line 969
        echo "                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            stickyProduct();
                        });
                    </script>
                </div>
            </div>
            <div class=\"col-xl-9 order-1 order-xl-0\">
                ";
        // line 979
        if (($context["bought_together_products"] ?? null)) {
            // line 980
            echo "                    ";
            echo ($context["bought_together_products"] ?? null);
            echo "
                ";
        }
        // line 982
        echo "                ";
        if (($context["description"] ?? null)) {
            // line 983
            echo "                    <div class=\"ds-product-description ds-product-tab-content content-block no-shadow p-xl-4\">
                        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\">
                                <path
                                    d=\"M10 20.3529C4.48558 20.3529 0 15.8673 0 10.3529C0 4.83849 4.48558 0.352905 10 0.352905C15.5144 0.352905 20 4.83849 20 10.3529C20 15.8673 15.5144 20.3529 10 20.3529ZM10 1.74825C5.25488 1.74825 1.39535 5.60779 1.39535 10.3529C1.39535 15.098 5.25488 18.9576 10 18.9576C14.7451 18.9576 18.6047 15.098 18.6047 10.3529C18.6047 5.60779 14.7451 1.74825 10 1.74825ZM10.6977 14.539V10.2868C10.6977 9.9017 10.3851 9.58914 10 9.58914C9.61488 9.58914 9.30233 9.9017 9.30233 10.2868V14.539C9.30233 14.9241 9.61488 15.2366 10 15.2366C10.3851 15.2366 10.6977 14.9241 10.6977 14.539ZM10.9489 7.09709C10.9489 6.5836 10.533 6.16686 10.0186 6.16686H10.0093C9.49582 6.16686 9.08362 6.5836 9.08362 7.09709C9.08362 7.61058 9.50513 8.02732 10.0186 8.02732C10.5321 8.02732 10.9489 7.61058 10.9489 7.09709Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 990
            echo ($context["oct_product_description"] ?? null);
            echo "
                        </div>
                        <div class=\"ds-product-tab-content-text secondary-text fw-300\">
                            ";
            // line 993
            echo ($context["description"] ?? null);
            echo "
                            ";
            // line 994
            if (($context["tags"] ?? null)) {
                // line 995
                echo "                                <p class=\"ds-product-tags\">";
                echo ($context["text_oct_tags"] ?? null);
                echo "
                                    ";
                // line 996
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 997
                    echo "                                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 997);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 997);
                    echo "</a>";
                    if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                        echo ",";
                    }
                    // line 998
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 999
                echo "                                </p>
                            ";
            }
            // line 1001
            echo "                        </div>
                    </div>
                ";
        }
        // line 1004
        echo "                ";
        if (($context["attribute_groups"] ?? null)) {
            // line 1005
            echo "                    <div class=\"ds-product-attributes ds-product-tab-content content-block no-shadow p-xl-4\">
                        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\">
                                <path
                                    d=\"M14.75 8.84631H6.75C6.336 8.84631 6 8.51031 6 8.09631C6 7.68231 6.336 7.34631 6.75 7.34631H14.75C15.164 7.34631 15.5 7.68231 15.5 8.09631C15.5 8.51031 15.164 8.84631 14.75 8.84631ZM15.5 11.0963C15.5 10.6823 15.164 10.3463 14.75 10.3463H6.75C6.336 10.3463 6 10.6823 6 11.0963C6 11.5103 6.336 11.8463 6.75 11.8463H14.75C15.164 11.8463 15.5 11.5103 15.5 11.0963ZM11.5 14.0963C11.5 13.6823 11.164 13.3463 10.75 13.3463H6.75C6.336 13.3463 6 13.6823 6 14.0963C6 14.5103 6.336 14.8463 6.75 14.8463H10.75C11.164 14.8463 11.5 14.5103 11.5 14.0963ZM21.5 11.0963C21.5 5.16831 16.678 0.346313 10.75 0.346313C4.822 0.346313 0 5.16831 0 11.0963C0 17.0243 4.822 21.8463 10.75 21.8463C16.678 21.8463 21.5 17.0243 21.5 11.0963ZM20 11.0963C20 16.1973 15.851 20.3463 10.75 20.3463C5.649 20.3463 1.5 16.1973 1.5 11.0963C1.5 5.99531 5.649 1.84631 10.75 1.84631C15.851 1.84631 20 5.99531 20 11.0963Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 1012
            echo ($context["oct_product_attributes_tab"] ?? null);
            echo "
                        </div>
                        <div class=\"ds-product-attributes-items dark-text fsz-14 w-100\">
                            ";
            // line 1015
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 1016
                echo "                                <div class=\"ds-product-content-attributes-list\">
                                    <div class=\"ds-product-content-attributes-list-title fw-500\">";
                // line 1017
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 1017);
                echo "</div>
                                    ";
                // line 1018
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 1018));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 1019
                    echo "                                        <div class=\"ds-product-attributes-item d-flex br-2\">
                                            <div class=\"secondary-text\">
                                                <span>";
                    // line 1021
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 1021);
                    echo "</span>
                                            </div>
                                            <span>";
                    // line 1023
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 1023);
                    echo "</span>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1026
                echo "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1028
            echo "                        </div>
                    </div>
                ";
        }
        // line 1031
        echo "                ";
        if (($context["review_status"] ?? null)) {
            // line 1032
            echo "                    <div class=\"ds-product-reviews ds-product-tab-content content-block no-shadow p-xl-4\">
                        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"23\" viewBox=\"0 0 22 23\" fill=\"none\">
                                <path
                                    d=\"M10.75 22.3463C4.822 22.3463 0 17.5233 0 11.5963C0 5.66931 4.822 0.846313 10.75 0.846313C16.678 0.846313 21.5 5.66931 21.5 11.5963C21.5 17.5233 16.678 22.3463 10.75 22.3463ZM10.75 2.34631C5.649 2.34631 1.5 6.49531 1.5 11.5963C1.5 16.6973 5.649 20.8463 10.75 20.8463C15.851 20.8463 20 16.6973 20 11.5963C20 6.49531 15.851 2.34631 10.75 2.34631ZM13.446 17.0963C13.232 17.0963 13.017 17.0443 12.819 16.9403L10.75 15.8513L8.68298 16.9393C8.22598 17.1793 7.68299 17.1403 7.26599 16.8373C6.84799 16.5333 6.64198 16.0273 6.72998 15.5173L7.125 13.2123L5.396 11.5253C5.037 11.1753 4.90994 10.6603 5.06494 10.1833C5.21994 9.70629 5.62497 9.36533 6.12097 9.29333L8.51001 8.94531L9.54395 6.84729C9.77295 6.38329 10.234 6.09631 10.751 6.09631C11.268 6.09631 11.73 6.38433 11.958 6.84833L12.9919 8.94629L15.382 9.29431C15.877 9.36631 16.281 9.70733 16.437 10.1843C16.592 10.6613 16.465 11.1763 16.106 11.5263L14.377 13.2133L14.7729 15.5203C14.8599 16.0303 14.654 16.5363 14.236 16.8393C13.999 17.0093 13.724 17.0963 13.446 17.0963ZM10.75 14.3253C10.959 14.3253 11.168 14.3753 11.358 14.4763L13.24 15.4673L12.881 13.3683C12.808 12.9433 12.948 12.5103 13.257 12.2093L14.78 10.7223L12.674 10.4163C12.248 10.3543 11.881 10.0863 11.691 9.69934L10.751 7.7923L9.81104 9.70032C9.62104 10.0863 9.253 10.3543 8.828 10.4163L6.72205 10.7223L8.245 12.2093C8.554 12.5093 8.69397 12.9433 8.62097 13.3683L8.26196 15.4663L10.144 14.4753C10.332 14.3753 10.541 14.3253 10.75 14.3253ZM15.165 10.7783H15.175H15.165ZM10.611 7.51031C10.611 7.51131 10.611 7.51131 10.611 7.51031C10.611 7.51131 10.611 7.51131 10.611 7.51031Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 1039
            echo ($context["tab_review_view"] ?? null);
            echo "
                        </div>
                        <div class=\"ds-product-reviews-top pb-3 mb-3 d-flex flex-column justify-content-center justify-content-md-start align-items-md-start\">
                            ";
            // line 1042
            if (($context["oct_rating"] ?? null)) {
                // line 1043
                echo "                                <div class=\"d-flex flex-column flex-md-row justify-content-between w-100\">
                                    <div class=\"ds-product-rating d-flex flex-column align-items-center pt-md-3\">
                                        <div class=\"fsz-14 fw-500 secondary-text mb-2\">";
                // line 1045
                echo ($context["tab_review_c"] ?? null);
                echo "</div>
                                        <div class=\"fsz-36 fw-700 dark-text mb-2\">";
                // line 1046
                echo ($context["oct_rating"] ?? null);
                echo "</div>
                                        <div class=\"ds-module-rating-stars d-flex align-items-center mb-2\" data-rating=\"";
                // line 1047
                echo ($context["oct_rating"] ?? null);
                echo "\">
                                            ";
                // line 1048
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 1049
                    echo "                                                <span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1051
                echo "                                        </div>
                                        <div class=\"light-text fsz-14\">";
                // line 1052
                echo ($context["text_total_reviews"] ?? null);
                echo " ";
                echo ($context["total_reviews"] ?? null);
                echo "</div>
                                    </div>
                                    <div class=\"ds-product-reviews-rating d-flex flex-column align-items-end flex-md-grow-1\">
                                        ";
                // line 1055
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_raiting_stats"] ?? null));
                foreach ($context['_seq'] as $context["oct_key"] => $context["oct_raiting_stat"]) {
                    // line 1056
                    echo "                                            <div class=\"ds-product-reviews-rating-item d-flex align-items-center justify-content-center px-2 py-1 br-4 secondary-text fsz-14\">
                                                <div class=\"ds-product-reviews-rating-item-stars d-flex align-items-center\">
                                                    ";
                    // line 1058
                    echo $context["oct_key"];
                    echo "
                                                    <svg class=\"ms-1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
                                                        <path d=\"M6.64043 0.418447L7.93511 3.18342C8.03245 3.39166 8.22045 3.53568 8.43845 3.56886L11.4271 4.02624C11.9751 4.11024 12.1938 4.82179 11.7971 5.2298L9.63645 7.44984C9.47845 7.6122 9.40641 7.84584 9.44374 8.07525L9.93772 11.1134C10.0377 11.7297 9.4264 12.1998 8.9024 11.9097L6.31044 10.4732C6.11577 10.3652 5.88375 10.3652 5.68975 10.4732L3.09974 11.9082C2.57508 12.1991 1.96172 11.7282 2.06239 11.1106L2.55645 8.07525C2.59378 7.84584 2.52174 7.6122 2.36374 7.44984L0.203097 5.2298C-0.194236 4.82179 0.0243849 4.11024 0.573052 4.02624L3.56174 3.56886C3.77907 3.53568 3.96708 3.39166 4.06508 3.18342L5.35975 0.418447C5.62042 -0.142738 6.37777 -0.142738 6.64043 0.418447Z\" fill=\"#FBC756\" />
                                                    </svg>
                                                </div>
                                                <div class=\"ds-product-reviews-rating-item-line br-6 w-100\">
                                                    <span class=\"ds-product-reviews-rating-item-line-value\" style=\"width: ";
                    // line 1064
                    echo twig_get_attribute($this->env, $this->source, $context["oct_raiting_stat"], "raiting", [], "any", false, false, false, 1064);
                    echo "%;\"></span>
                                                </div>
                                                <div class=\"ds-product-reviews-rating-item-qty\">";
                    // line 1066
                    echo twig_get_attribute($this->env, $this->source, $context["oct_raiting_stat"], "sum", [], "any", false, false, false, 1066);
                    echo "</div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['oct_key'], $context['oct_raiting_stat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1069
                echo "                                    </div>
                                </div>
                            ";
            } else {
                // line 1072
                echo "                                <p class=\"light-text fw-300 fsz-14 text-center text-sm-start\">";
                echo ($context["text_no_reviews"] ?? null);
                echo "</p>
                            ";
            }
            // line 1074
            echo "                            ";
            if (($context["review_guest"] ?? null)) {
                // line 1075
                echo "                                <button type=\"button\" class=\"button button-outline button-outline-primary br-7 mt-3 px-5 fw-400 mx-auto mx-md-0 fsz-12\" data-bs-toggle=\"modal\" data-bs-target=\"#reviewModal\">";
                echo ($context["tab_review_add"] ?? null);
                echo "</button>
                                <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-labelledby=\"reviewModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-dialog-centered\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header p-0 pb-4\">
                                                <h5 class=\"modal-title fsz-20 fw-700 d-flex align-items-center justify-content-between\" id=\"reviewModalLabel\">";
                // line 1080
                echo ($context["text_write"] ?? null);
                echo "</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"13\" viewBox=\"0 0 12 13\" fill=\"none\">
                                                        <path d=\"M11.8029 11.5725C12.0633 11.8329 12.0633 12.2551 11.8029 12.5155C11.6731 12.6453 11.5025 12.7111 11.3319 12.7111C11.1612 12.7111 10.9906 12.6462 10.8608 12.5155L5.99911 7.65384L1.13743 12.5155C1.00766 12.6453 0.837017 12.7111 0.666369 12.7111C0.495722 12.7111 0.325075 12.6462 0.195312 12.5155C-0.0651039 12.2551 -0.0651039 11.8329 0.195312 11.5725L5.057 6.71085L0.195312 1.8492C-0.0651039 1.58878 -0.0651039 1.16657 0.195312 0.906158C0.455727 0.645742 0.877907 0.645742 1.13832 0.906158L6.00001 5.76787L10.8617 0.906158C11.1221 0.645742 11.5443 0.645742 11.8047 0.906158C12.0651 1.16657 12.0651 1.58878 11.8047 1.8492L6.943 6.71085L11.8029 11.5725Z\" fill=\"#00A8E8\" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class=\"modal-body p-0 pt-4\">
                                                <form id=\"popup_review_form\">
                                                    <div class=\"d-flex\">
                                                        <div class=\"modal-body-product-img p-2 br-7 overflow-hidden me-1 flex-grow-1\">
                                                            <img src=\"";
                // line 1091
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"150\" height=\"150\" loading=\"lazy\">
                                                        </div>
                                                        <div class=\"modal-body-product-info ps-3 dark-text flex-grow-1 d-flex flex-column\">
                                                            <div class=\"modal-body-product-title fw-500 mb-3\">";
                // line 1094
                echo ($context["heading_title"] ?? null);
                echo "</div>
                                                            <div class=\"fw-500 dark-text\">";
                // line 1095
                echo ($context["text_oct_review"] ?? null);
                echo "</div>
                                                            <div class=\"ds-module-rating-stars d-flex align-items-center mt-2\">
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"1\" checked/></label>
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"2\" checked/></label>
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"3\" checked/></label>
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"4\" checked/></label>
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"5\" checked/></label>
                                                            </div>
                                                            <script>
                                                                window.addEventListener('DOMContentLoaded', () => {
                                                                    reviewsRating('#popup_review_form');
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class=\"input-group my-4\">
                                                        <span class=\"input-group-text\" id=\"reviewUsernameIcon\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"17\" viewBox=\"0 0 14 17\" fill=\"none\">
                                                                <path
                                                                    d=\"M7.00726 7.47837C5.1217 7.47837 3.58848 5.94434 3.58848 4.05959C3.58848 2.17483 5.1217 0.640808 7.00726 0.640808C8.89282 0.640808 10.426 2.17483 10.426 4.05959C10.426 5.94434 8.89282 7.47837 7.00726 7.47837ZM7.00726 1.84744C5.78696 1.84744 4.79511 2.83928 4.79511 4.05959C4.79511 5.27989 5.78696 6.27174 7.00726 6.27174C8.22756 6.27174 9.21941 5.27989 9.21941 4.05959C9.21941 2.83928 8.22676 1.84744 7.00726 1.84744ZM13.2342 15.7237V13.3257C13.2342 11.1852 12.0228 8.685 8.60883 8.685H5.39115C1.9772 8.685 0.765747 11.1844 0.765747 13.3257V15.7237C0.765747 16.0567 1.03603 16.327 1.36906 16.327C1.70209 16.327 1.97238 16.0567 1.97238 15.7237V13.3257C1.97238 12.5205 2.21933 9.89162 5.39115 9.89162H8.60883C11.7807 9.89162 12.0276 12.5197 12.0276 13.3257V15.7237C12.0276 16.0567 12.2979 16.327 12.6309 16.327C12.964 16.327 13.2342 16.0567 13.2342 15.7237Z\"
                                                                    fill=\"#00171F\"></path>
                                                            </svg>
                                                        </span>
                                                        <input type=\"text\" name=\"name\" class=\"form-control\" id=\"inputReviewName\" placeholder=\"";
                // line 1118
                echo ($context["entry_name"] ?? null);
                echo "\" inputmode=\"text\" aria-label=\"Username\" aria-describedby=\"reviewUsernameIcon\">
                                                    </div>
                                                    <div class=\"form-group pb-4\">
                                                        <textarea id=\"inputReviewComment\" name=\"text\" class=\"form-control\" placeholder=\"";
                // line 1121
                echo ($context["oct_product_yourreview"] ?? null);
                echo "\" rows=\"7\"></textarea>
                                                    </div>
                                                     <div class=\"form-group pb-4\">
                                                        <textarea name=\"positive_text\" cols=\"60\" rows=\"3\" placeholder=\"";
                // line 1124
                echo ($context["oct_product_inputpluces"] ?? null);
                echo "\" id=\"input-positive-text\" class=\"form-control\">";
                echo ($context["positive_text"] ?? null);
                echo "</textarea>
                                                    </div>
                                                    <div class=\"form-group pb-4\">
                                                        <textarea name=\"negative_text\" cols=\"60\" rows=\"3\" placeholder=\"";
                // line 1127
                echo ($context["oct_product_inputpminuses"] ?? null);
                echo "\" id=\"input-negative-text\" class=\"form-control\">";
                echo ($context["negatoct_product_inputpminusesive_text"] ?? null);
                echo "</textarea>
                                                    </div>
                                                    ";
                // line 1129
                if (($context["captcha"] ?? null)) {
                    // line 1130
                    echo "                                                        <div class=\"form-group pb-4\">
                                                            ";
                    // line 1131
                    echo ($context["captcha"] ?? null);
                    echo "
                                                        </div>
                                                    ";
                }
                // line 1134
                echo "                                                    <button type=\"button\" id=\"button-review\" class=\"button button-primary br-7 w-100\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 1141
            echo "                        </div>
                        <div id=\"review\" class=\"ds-product-reviews-content\">
                            ";
            // line 1143
            if ( !twig_test_empty(($context["oct_p_reviews"] ?? null))) {
                // line 1144
                echo "                                ";
                echo ($context["oct_p_reviews"] ?? null);
                echo "
                            ";
            }
            // line 1146
            echo "                        </div>
                    </div>
                ";
        }
        // line 1149
        echo "                ";
        if ((array_key_exists("oct_product_faq", $context) && ($context["oct_product_faq"] ?? null))) {
            // line 1150
            echo "                    ";
            echo ($context["oct_product_faq"] ?? null);
            echo "
                ";
        }
        // line 1152
        echo "                ";
        if (((twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", true, true, false, 1152) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 1152)) && (twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", true, true, false, 1152) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 1152)))) {
            // line 1153
            echo "                    <div id=\"product_dop_tab\" class=\"ds-product-dop_tab ds-product-tab-content content-block no-shadow p-xl-4\">
                        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\">
                                <path
                                    d=\"M10 20.3529C4.48558 20.3529 0 15.8673 0 10.3529C0 4.83849 4.48558 0.352905 10 0.352905C15.5144 0.352905 20 4.83849 20 10.3529C20 15.8673 15.5144 20.3529 10 20.3529ZM10 1.74825C5.25488 1.74825 1.39535 5.60779 1.39535 10.3529C1.39535 15.098 5.25488 18.9576 10 18.9576C14.7451 18.9576 18.6047 15.098 18.6047 10.3529C18.6047 5.60779 14.7451 1.74825 10 1.74825ZM10.6977 14.539V10.2868C10.6977 9.9017 10.3851 9.58914 10 9.58914C9.61488 9.58914 9.30233 9.9017 9.30233 10.2868V14.539C9.30233 14.9241 9.61488 15.2366 10 15.2366C10.3851 15.2366 10.6977 14.9241 10.6977 14.539ZM10.9489 7.09709C10.9489 6.5836 10.533 6.16686 10.0186 6.16686H10.0093C9.49582 6.16686 9.08362 6.5836 9.08362 7.09709C9.08362 7.61058 9.50513 8.02732 10.0186 8.02732C10.5321 8.02732 10.9489 7.61058 10.9489 7.09709Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 1160
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 1160);
            echo "
                        </div>
                        <div class=\"ds-product-tab-content-text secondary-text fw-300\">";
            // line 1162
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 1162);
            echo "</div>
                    </div>
                ";
        }
        // line 1165
        echo "                ";
        if (($context["oct_product_extra_tabs"] ?? null)) {
            // line 1166
            echo "                    ";
            $context["key"] = 0;
            // line 1167
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra_tab"]) {
                // line 1168
                echo "                        ";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 1169
                echo "                            <div class=\"ds-product_extra_tab-";
                echo ($context["key"] ?? null);
                echo " ds-product-tab-content content-block no-shadow p-xl-4\">
                                <div class=\"ds-product-content-title d-flex align-items-center\">
                                    <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                                        <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\">
                                            <path
                                                d=\"M10 20.3529C4.48558 20.3529 0 15.8673 0 10.3529C0 4.83849 4.48558 0.352905 10 0.352905C15.5144 0.352905 20 4.83849 20 10.3529C20 15.8673 15.5144 20.3529 10 20.3529ZM10 1.74825C5.25488 1.74825 1.39535 5.60779 1.39535 10.3529C1.39535 15.098 5.25488 18.9576 10 18.9576C14.7451 18.9576 18.6047 15.098 18.6047 10.3529C18.6047 5.60779 14.7451 1.74825 10 1.74825ZM10.6977 14.539V10.2868C10.6977 9.9017 10.3851 9.58914 10 9.58914C9.61488 9.58914 9.30233 9.9017 9.30233 10.2868V14.539C9.30233 14.9241 9.61488 15.2366 10 15.2366C10.3851 15.2366 10.6977 14.9241 10.6977 14.539ZM10.9489 7.09709C10.9489 6.5836 10.533 6.16686 10.0186 6.16686H10.0093C9.49582 6.16686 9.08362 6.5836 9.08362 7.09709C9.08362 7.61058 9.50513 8.02732 10.0186 8.02732C10.5321 8.02732 10.9489 7.61058 10.9489 7.09709Z\"
                                                fill=\"#00171F\" />
                                        </svg>
                                        ";
                // line 1177
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "title", [], "any", false, false, false, 1177);
                echo "
                                    </div>
                                </div>
                                <div class=\"ds-product-tab-content-text secondary-text fw-300\">";
                // line 1180
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "text", [], "any", false, false, false, 1180);
                echo "</div>
                            </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1183
            echo "                ";
        }
        // line 1184
        echo "            </div>
        </div>
    
    ";
        // line 1187
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "micro", [], "any", true, true, false, 1187) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "micro", [], "any", false, false, false, 1187))) {
            // line 1188
            echo "        <script type=\"application/ld+json\">
            {
            \"@context\": \"https://schema.org\",
            \"@type\": \"Product\",
            \"url\": \"";
            // line 1192
            echo ($context["share"] ?? null);
            echo "\",
            \"category\": \"";
            // line 1193
            echo ($context["oct_product_categories"] ?? null);
            echo "\",
            \"image\": \"";
            // line 1194
            echo ($context["thumb"] ?? null);
            echo "\",
            ";
            // line 1195
            if (($context["manufacturer"] ?? null)) {
                // line 1196
                echo "            \"brand\": {
                \"@type\": \"Brand\",
                \"name\": \"";
                // line 1198
                echo twig_escape_filter($this->env, ($context["manufacturer"] ?? null), "html");
                echo "\"
            },
            \"manufacturer\": \"";
                // line 1200
                echo twig_escape_filter($this->env, ($context["manufacturer"] ?? null), "html");
                echo "\",
            ";
            }
            // line 1202
            echo "            \"model\": \"";
            echo twig_escape_filter($this->env, ($context["model"] ?? null), "html");
            echo "\",
            \"productID\": \"";
            // line 1203
            echo ($context["product_id"] ?? null);
            echo "\",
            ";
            // line 1204
            if ((array_key_exists("upc", $context) && ($context["upc"] ?? null))) {
                // line 1205
                echo "            \"gtin12\": \"";
                echo ($context["upc"] ?? null);
                echo "\",
            ";
            }
            // line 1207
            echo "            ";
            if ((array_key_exists("ean", $context) && ($context["ean"] ?? null))) {
                // line 1208
                echo "            \"gtin\": \"";
                echo ($context["ean"] ?? null);
                echo "\",
            ";
            }
            // line 1210
            echo "            ";
            if ((array_key_exists("mpn", $context) && ($context["mpn"] ?? null))) {
                // line 1211
                echo "            \"mpn\": \"";
                echo twig_escape_filter($this->env, ($context["mpn"] ?? null), "html");
                echo "\",
            ";
            }
            // line 1213
            echo "            ";
            if ((array_key_exists("sku", $context) && ($context["sku"] ?? null))) {
                // line 1214
                echo "            \"sku\": \"";
                echo twig_escape_filter($this->env, ($context["sku"] ?? null), "html");
                echo "\",
            ";
            }
            // line 1216
            echo "            ";
            if (($context["rating"] ?? null)) {
                // line 1217
                echo "            \"aggregateRating\": {
                \"@type\": \"AggregateRating\",
                \"ratingValue\": \"";
                // line 1219
                echo ($context["rating"] ?? null);
                echo "\",
                \"ratingCount\": \"";
                // line 1220
                echo ($context["total_reviews"] ?? null);
                echo "\",
                \"reviewCount\": \"";
                // line 1221
                echo ($context["total_reviews"] ?? null);
                echo "\",
                \"bestRating\": \"5\",
                \"worstRating\": \"1\"
            },
            ";
            }
            // line 1226
            echo "            \"description\": \"";
            echo twig_escape_filter($this->env, ($context["oct_description_microdata"] ?? null), "html");
            echo "\",
            \"name\": \"";
            // line 1227
            echo twig_escape_filter($this->env, ($context["oct_micro_heading_title"] ?? null), "html");
            echo "\",
            \"offers\": {
                \"@type\": \"Offer\",
                \"url\": \"";
            // line 1230
            echo ($context["share"] ?? null);
            echo "\",
                ";
            // line 1231
            if (($context["oct_special_microdata"] ?? null)) {
                // line 1232
                echo "                ";
                $context["special_date"] = twig_date_modify_filter($this->env, "now", "+30 day");
                // line 1233
                echo "                \"priceValidUntil\": \"";
                echo twig_date_format_filter($this->env, ($context["special_date"] ?? null), "Y-m-d");
                echo "\",
                ";
            } else {
                // line 1235
                echo "                \"priceValidUntil\": \"";
                echo twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+60 days"), "Y-m-d");
                echo "\",
                ";
            }
            // line 1237
            echo "                ";
            if (($context["out_of_stock"] ?? null)) {
                // line 1238
                echo "                \"availability\": \"https://schema.org/OutOfStock\",
                ";
            } else {
                // line 1240
                echo "                \"availability\": \"https://schema.org/InStock\",
                ";
            }
            // line 1242
            echo "                \"price\": \"";
            if ( !($context["oct_special_microdata"] ?? null)) {
                echo ($context["oct_price_microdata"] ?? null);
            } else {
                echo ($context["oct_special_microdata"] ?? null);
            }
            echo "\",
                \"priceCurrency\": \"";
            // line 1243
            echo ($context["oct_price_currency"] ?? null);
            echo "\",
                \"itemCondition\": \"https://schema.org/NewCondition\",
                \"seller\": {
                \"@type\": \"Organization\",
                \"name\": \"";
            // line 1247
            echo twig_escape_filter($this->env, ($context["config_name"] ?? null), "html");
            echo "\"
                },
                ";
            // line 1249
            if (($context["oct_shipping_cost"] ?? null)) {
                // line 1250
                echo "                \"shippingDetails\": {
                \"@type\": \"OfferShippingDetails\",
                \"shippingRate\": {
                    \"@type\": \"MonetaryAmount\",
                    \"value\": \"";
                // line 1254
                echo ($context["oct_shipping_cost"] ?? null);
                echo "\",
                    \"currency\": \"";
                // line 1255
                echo ($context["oct_price_currency"] ?? null);
                echo "\"
                },
                ";
                // line 1257
                if ((array_key_exists("oct_area_served", $context) && ($context["oct_area_served"] ?? null))) {
                    // line 1258
                    echo "                \"shippingDestination\": [
                    ";
                    // line 1259
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["oct_area_served"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        // line 1260
                        echo "                    {
                    \"@type\": \"DefinedRegion\",
                    \"addressCountry\": \"";
                        // line 1262
                        echo $context["country"];
                        echo "\"
                    }";
                        // line 1263
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1263)) {
                            echo ",";
                        }
                        // line 1264
                        echo "                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1265
                    echo "                ],
                ";
                }
                // line 1267
                echo "                \"deliveryTime\": {
                    \"@type\": \"ShippingDeliveryTime\",
                    \"handlingTime\": {
                    \"@type\": \"QuantitativeValue\",
                    \"minValue\": 0,
                    \"maxValue\": ";
                // line 1272
                echo ($context["oct_processing_time"] ?? null);
                echo ",
                    \"unitCode\": \"DAY\"
                    },
                    \"transitTime\": {
                    \"@type\": \"QuantitativeValue\",
                    \"minValue\": 1,
                    \"maxValue\": ";
                // line 1278
                echo ($context["oct_delivery_time"] ?? null);
                echo ",
                    \"unitCode\": \"DAY\"
                    }
                }
                },
                ";
            }
            // line 1284
            echo "                \"hasMerchantReturnPolicy\": {
                \"@type\": \"MerchantReturnPolicy\",
                \"applicableCountry\": \"UA\",
                \"returnPolicyCategory\": \"https://schema.org/MerchantReturnFiniteReturnWindow\",
                \"merchantReturnDays\": ";
            // line 1288
            echo ($context["oct_return_time"] ?? null);
            echo ",
                \"returnMethod\": \"https://schema.org/ReturnByMail\",
                \"returnFees\": \"https://schema.org/FreeReturn\",
                \"refundType\": \"https://schema.org/FullRefund\"
                }
            }";
            // line 1293
            if (((($context["rating"] ?? null) && array_key_exists("oct_reviews_all", $context)) && ($context["oct_reviews_all"] ?? null))) {
                echo ",
            \"review\": [
                ";
                // line 1295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_reviews_all"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["rew_one"]) {
                    // line 1296
                    echo "                {
                \"@type\": \"Review\",
                \"author\": {
                    \"@type\": \"Person\",
                    \"name\": \"";
                    // line 1300
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rew_one"], "author", [], "any", false, false, false, 1300), "html");
                    echo "\"
                },
                \"datePublished\": \"";
                    // line 1302
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "date_added", [], "any", false, false, false, 1302);
                    echo "\",
                \"description\": \"";
                    // line 1303
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rew_one"], "text", [], "any", false, false, false, 1303), "html");
                    echo "\",
                \"reviewRating\": {
                    \"@type\": \"Rating\",
                    \"bestRating\": \"5\",
                    \"ratingValue\": \"";
                    // line 1307
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "rating", [], "any", false, false, false, 1307);
                    echo "\",
                    \"worstRating\": \"1\"
                }
                }";
                    // line 1310
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1310)) {
                        echo ",";
                    }
                    // line 1311
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rew_one'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1312
                echo "            ]
            ";
            }
            // line 1314
            echo "            }
        </script>
    ";
        }
        // line 1317
        echo "    </main>
    ";
        // line 1318
        if (($context["products"] ?? null)) {
            // line 1319
            echo "        ";
            echo ($context["products"] ?? null);
            echo "
    ";
        }
        // line 1321
        echo "    ";
        if (($context["oct_related_articles"] ?? null)) {
            // line 1322
            echo "        <div id=\"ds-related-article\" class=\"row mt-3 mt-md-0 py-3 p-md-0 pt-xl-3 g-3 g-xl-4 ds-module\">
            <div class=\"fw-500 dark-text fsz-20 mt-0 mt-md-3 mb-2 mb-md-0\">";
            // line 1323
            echo ($context["oct_product_related_articles"] ?? null);
            echo "</div>
            ";
            // line 1324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_related_articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 1325
                echo "                <div class=\"ds-last-news-item\">
\t\t\t\t\t<div class=\"content-block d-flex flex-sm-column p-2 p-md-3 h-100\">
\t\t\t\t\t\t<a href=\"";
                // line 1327
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 1327);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 1327);
                echo "\" class=\"me-2 me-sm-0\">
\t\t\t\t\t\t\t<img src=\"";
                // line 1328
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 1328);
                echo "\" class=\"img-fluid w-md-100\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 1328);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 1328);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 1328);
                echo "\" loading=\"lazy\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"ds-last-news-item-info mt-sm-3 w-100 h-100 d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"";
                // line 1331
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 1331);
                echo "\" class=\"ds-last-news-item-title d-inline-block dark-text fsz-16 fw-500 mb-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 1331);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between light-text fsz-12 mt-auto\">
\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-category d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"14\" height=\"13\" viewBox=\"0 0 14 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M11.3077 12.3535H2.69231C0.956308 12.3535 0 11.4401 0 9.78209V2.92494C0 1.26689 0.956308 0.353516 2.69231 0.353516H5.5641C5.70697 0.353516 5.84412 0.407688 5.94464 0.504374L7.94056 2.41066H11.3077C13.0437 2.41066 14 3.32403 14 4.98209V9.78209C14 11.4401 13.0437 12.3535 11.3077 12.3535ZM2.69231 1.38209C1.5601 1.38209 1.07692 1.84357 1.07692 2.92494V9.78209C1.07692 10.8635 1.5601 11.3249 2.69231 11.3249H11.3077C12.4399 11.3249 12.9231 10.8635 12.9231 9.78209V4.98209C12.9231 3.90072 12.4399 3.43923 11.3077 3.43923H7.71795C7.57508 3.43923 7.43793 3.38506 7.33742 3.28837L5.3415 1.38209H2.69231Z\"
\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
                // line 1339
                $context["key"] = 0;
                // line 1340
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 1340));
                foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                    // line 1341
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["key"] = (($context["key"] ?? null) + 1);
                    // line 1342
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo $context["blog_category_name"];
                    if ((($context["key"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 1342)))) {
                        echo ",";
                    }
                    // line 1343
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1344
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-date d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\"
\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
                // line 1351
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 1351);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1358
            echo "        </div>
    ";
        }
        // line 1360
        echo "    ";
        echo ($context["content_bottom"] ?? null);
        echo "
</div>

<script>
    // product timer
    ";
        // line 1365
        if (($context["product_timer"] ?? null)) {
            // line 1366
            echo "        function timerSpecial(id, deadline) {
            const addZero = (num) => {
                if (num <= 9) {
                    return '0' + num;
                } else {
                    return num;
                }
            };

            const getTimeRemaining = (endtime) => {
                const t = Date.parse(endtime) - Date.parse(new Date()),
                    seconds = Math.floor((t / 1000) % 60),
                    minutes = Math.floor((t / 1000 / 60) % 60),
                    hours = Math.floor((t / (1000 * 60 * 60)) % 24),
                    days = Math.floor((t / (1000 * 60 * 60 * 24)));

                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            };

            const setClock = (selector, endtime) => {
                const timer = document.querySelector(selector),
                    days = timer.querySelector('#ds-timer-days'),
                    hours = timer.querySelector('#ds-timer-hours'),
                    minutes = timer.querySelector('#ds-timer-minutes'),
                    seconds = timer.querySelector('#ds-timer-seconds'),
                    timeInterval = setInterval(updateClock, 1000);

                updateClock();

                function updateClock() {
                    const t = getTimeRemaining(endtime);

                    days.textContent = addZero(t.days);
                    hours.textContent = addZero(t.hours);
                    minutes.textContent = addZero(t.minutes);
                    seconds.textContent = addZero(t.seconds);

                    if (t.total <= 0) {
                        days.textContent = \"00\";
                        hours.textContent = \"00\";
                        minutes.textContent = \"00\";
                        seconds.textContent = \"00\";

                        clearInterval(timeInterval);
                    }
                }
            };

            setClock(id, deadline);
        }
        
        ";
            // line 1423
            if (($context["end_date_today"] ?? null)) {
                // line 1424
                echo "            timerSpecial('.ds-product-timer', '";
                echo ($context["special_date_end"] ?? null);
                echo "T23:59:59');
        ";
            } else {
                // line 1426
                echo "            timerSpecial('.ds-product-timer', '";
                echo ($context["special_date_end"] ?? null);
                echo "T00:00:00');
        ";
            }
            // line 1428
            echo "
    ";
        }
        // line 1430
        echo "
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
</script>
<script>
    \$('body').on('click', '#button-cart, .ds-product-fixed-cart-btn', function(){
        let data;

        if (this.classList.contains('ds-product-fixed-cart-btn')) {
            data = \$('.ds-product-block input[type=\\'text\\'], .ds-product-block input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea, #product input[type=\\'date\\'], #product input[type=\\'datetime-local\\'], #product input[type=\\'time\\']');
        } else {
            data = \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea, #product input[type=\\'date\\'], #product input[type=\\'datetime-local\\'], #product input[type=\\'time\\']');
        }

        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: data,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                \$('#button-cart, .ds-product-fixed-cart-btn').data('original-content', \$('#button-cart, .ds-product-fixed-cart-btn').html());
                \$('#button-cart, .ds-product-fixed-cart-btn').html('<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>').prop('disabled', true);
            },
            complete: function() {
                setTimeout(function () {
                    \$('#button-cart, .ds-product-fixed-cart-btn').html('<i class=\"fas fa-check fsz-18\"></i>').prop('disabled', true);
                }, 1000);

                setTimeout(function () {
                    \$('#button-cart, .ds-product-fixed-cart-btn').html(\$('#button-cart, .ds-product-fixed-cart-btn').data('original-content')).prop('disabled', false);
                }, 1200);
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        let errorOption = '';
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger fsz-14 fw-500 mb-4\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.parent().after('<div class=\"text-danger fsz-14 fw-500 mb-4\">' + json['error']['option'][i] + '</div>');
                            }
                            errorOption += '<div class=\"alert-text-item\">' + json['error']['option'][i] + '</div>';
                        }
                        scNotify('danger', errorOption);
                        
                        const headerHeight = document.querySelector('header').offsetHeight,
                        tabsHeight = document.getElementById('oct-tabs').offsetHeight;

                        scrollToElement('.ds-product-actions-middle', null, -headerHeight - tabsHeight - 42);
                        \$('.ds-product-fixed-cart-btn').removeClass('added');
                        return;
                    }

                    if (json['error']['error_warning']) {
                        scNotify('danger', json['error']['error_warning']);
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    if (json['isPopup']) {
                        octPopupCart();
                    } else {
                        scNotify('success', json['success']);
                    }

                    let cartIdsHolder = document.querySelector(\"[data-cart-ids]\");

                    if (json.oct_cart_ids && json.oct_cart_ids.length > 0 && cartIdsHolder) {
                        cartIdsHolder.dataset.cartIds = json.oct_cart_ids;
                        setTimeout(function () {
                            setCartBtnAdded();
                        }, 1201);
                    }

                    // Need to set timeout otherwise it wont update the total
                    setTimeout(function() {
                        \$('#cart .ds-cart-qty').addClass('active').html(json['total_products']);
                    }, 100);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
</script>
<script>
    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
</script>
<script>
    \$('#review').delegate('.pagination a', 'click', function(e) {
        const headerHeight = document.querySelector('header').offsetHeight,
        tabsHeight = document.getElementById('oct-tabs').offsetHeight;

        e.preventDefault();
        \$('#review').load(this.href);
        scrollToElement('.ds-product-reviews-content', null, -headerHeight - tabsHeight - 42);
    });

    \$(\"#inputReviewName, #inputReviewComment\").on(\"change paste keyup\", function() {
        \$(this).removeClass('error_style');
    });

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 1616
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            cache: false,
            data: \$('#popup_review_form').serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    let errorOption = '';

                    \$.each(json['error'], function(i, val) {
                        \$('#reviewModal [name=\"' + i + '\"]').addClass('error_style');
                        errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                    });

                    scNotify('danger', errorOption);
                }

                if (json['success']) {
                    scNotify('success', json['success']);
                    \$('#reviewModal').modal('hide');
                    \$('#popup_review_form input[name=\\'name\\']').val('');
                    \$('#popup_review_form textarea[name=\\'text\\']').val('');
                    \$('#reviewModal .rm-module-rating-star-is').removeClass('rm-module-rating-star-is');
                }
            }
        });
    });

    \$('#input-quantity').on('change', function(e) {
        updateValueProduct(false, false, true);
    });

    function updateValueProduct(minus, plus, manual) {
        let use_minimum_step = ";
        // line 1657
        echo (($context["use_minimum_step"]) ?? (0));
        echo ";
        let current = parseInt(\$('#input-quantity').val()) || 0;
        let currentMinimum = parseInt(\$('#min-product-quantity').val()) || 1;
        let max = parseInt(\$('#max-product-quantity').val()) || 0;

        if (max === 0) return;

        let newValue = current;
        let step = use_minimum_step ? currentMinimum : 1;

        if (minus) {
            newValue = current - step;
            if (use_minimum_step && newValue < currentMinimum) {
                newValue = currentMinimum;
            } else if (!use_minimum_step && newValue < 1) {
                newValue = 1;
            }
        }

        if (plus) {
            newValue = current + step;
            if (max && newValue > max) {
                newValue = max;
            }
        }

        if (manual) {
            if (use_minimum_step) {
                if (current < currentMinimum) {
                    newValue = currentMinimum;
                } else {
                    let remainder = current % currentMinimum;
                    if (remainder !== 0) {
                        newValue = current - remainder + currentMinimum;
                    }
                }
            } else {
                if (current < 1) {
                    newValue = 1;
                }
            }
        }

        if (max && newValue > max) {
            if (use_minimum_step) {
                newValue = Math.floor(max / currentMinimum) * currentMinimum;
                if (newValue < currentMinimum) {
                    newValue = currentMinimum;
                }
            } else {
                newValue = max;
            }
        }

        \$('#input-quantity').val(newValue);
        updateProductPrice();
    }

    \$('#ds-product-options input, #ds-product-options select').on('change', function() {
        updateProductPrice();
    });

    ";
        // line 1719
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_zoom", [], "any", true, true, false, 1719) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_zoom", [], "any", false, false, false, 1719))) {
            // line 1720
            echo "    \$(document).ready(function() {
        \$(\".oct-gallery\").zoom();
    });
    ";
        }
        // line 1724
        echo "
    function updateProductPrice() {
        let priceOld = document.querySelector('#product .ds-price-old');
        let priceNew = document.querySelector('#product .ds-price-new');
        let youSave = document.querySelector('#main-product-you-save');

        \$.ajax({
            type: 'post',
            url: 'index.php?route=octemplates/main/oct_functions/updatePrices',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\']:not(\"#oct_purchase_byoneclick_form_product input\"), #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select'),
            dataType: 'json',
            cache: false,
            success: function(json) {
                ";
        // line 1737
        if (($context["special"] ?? null)) {
            // line 1738
            echo "                    animatePrice(json['price'], priceOld);
                    animatePrice(json['special'], priceNew);
                ";
        } else {
            // line 1741
            echo "                    animatePrice(json['price'], priceNew);
                ";
        }
        // line 1743
        echo "
                ";
        // line 1744
        if ((($context["oct_sticker_you_save"] ?? null) && ($context["you_save"] ?? null))) {
            // line 1745
            echo "                    animatePrice(json['you_save_price'], youSave);
                ";
        }
        // line 1747
        echo "
                ";
        // line 1748
        if (($context["tax"] ?? null)) {
            // line 1749
            echo "                    \$('.price-tax > span').html(json['tax']);
                ";
        }
        // line 1751
        echo "            }
        });
    }
    ";
        // line 1754
        if ((($context["minimum"] ?? null) > 1)) {
            // line 1755
            echo "        updateProductPrice();
    ";
        }
        // line 1757
        echo "</script>
";
        // line 1758
        if ((array_key_exists("oct_popup_purchase_status", $context) && ($context["can_buy"] ?? null))) {
            // line 1759
            echo "    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const productElement = document.getElementById('product-product');

            if (productElement) {
                document.body.classList.add('body-product');
            }

            showProductButtons();
        });
    </script>
    <div class=\"ds-product-fixed-btns position-fixed d-md-none pt-3 px-3\">
        <div class=\"d-flex align-items-center justify-content-between\">
            ";
            // line 1772
            if ( !($context["special"] ?? null)) {
                // line 1773
                echo "                <div class=\"ds-price-new fsz-20 fw-700 dark-text\">";
                echo ($context["price"] ?? null);
                echo "</div>
            ";
            } else {
                // line 1775
                echo "                <div class=\"d-flex flex-column\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"ds-price-old light-text text-decoration-line-through fw-500 fsz-12\">";
                // line 1777
                echo ($context["price"] ?? null);
                echo "</div>
                        ";
                // line 1778
                if (($context["oct_sticker_you_save"] ?? null)) {
                    // line 1779
                    echo "                            <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                    echo ($context["you_save"] ?? null);
                    echo "</div>
                        ";
                }
                // line 1781
                echo "                    </div>
                    <div class=\"ds-price-new fsz-20 fw-700 red-text lh-1\">";
                // line 1782
                echo ($context["special"] ?? null);
                echo "</div>
                </div>
            ";
            }
            // line 1785
            echo "            <div class=\"ds-module-quantity\" hidden>
                <input type=\"hidden\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 1786
            echo ($context["minimum"] ?? null);
            echo "\" id=\"fixed-input-quantity\"/>
                <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 1787
            echo ($context["product_id"] ?? null);
            echo "\"/>
                <input type=\"hidden\" id=\"fixed-min-product-quantity\" value=\"";
            // line 1788
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
            </div>
            <button type=\"button\" class=\"button button-primary small br-7 fsz-12 ds-product-fixed-cart-btn\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\" fill=\"#FFF\"></path>
                </svg>
                <span class=\"button-text\">";
            // line 1794
            echo ($context["button_cart"] ?? null);
            echo "</span>
            </button>
        </div>
    </div>
";
        }
        // line 1799
        if (($context["remarketing_code"] ?? null)) {
            echo ($context["remarketing_code"] ?? null);
        }
        // line 1800
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_deals/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3709 => 1800,  3705 => 1799,  3697 => 1794,  3688 => 1788,  3684 => 1787,  3680 => 1786,  3677 => 1785,  3671 => 1782,  3668 => 1781,  3662 => 1779,  3660 => 1778,  3656 => 1777,  3652 => 1775,  3646 => 1773,  3644 => 1772,  3629 => 1759,  3627 => 1758,  3624 => 1757,  3620 => 1755,  3618 => 1754,  3613 => 1751,  3609 => 1749,  3607 => 1748,  3604 => 1747,  3600 => 1745,  3598 => 1744,  3595 => 1743,  3591 => 1741,  3586 => 1738,  3584 => 1737,  3569 => 1724,  3563 => 1720,  3561 => 1719,  3496 => 1657,  3452 => 1616,  3264 => 1430,  3260 => 1428,  3254 => 1426,  3248 => 1424,  3246 => 1423,  3187 => 1366,  3185 => 1365,  3176 => 1360,  3172 => 1358,  3159 => 1351,  3150 => 1344,  3144 => 1343,  3138 => 1342,  3135 => 1341,  3130 => 1340,  3128 => 1339,  3115 => 1331,  3103 => 1328,  3097 => 1327,  3093 => 1325,  3089 => 1324,  3085 => 1323,  3082 => 1322,  3079 => 1321,  3073 => 1319,  3071 => 1318,  3068 => 1317,  3063 => 1314,  3059 => 1312,  3045 => 1311,  3041 => 1310,  3035 => 1307,  3028 => 1303,  3024 => 1302,  3019 => 1300,  3013 => 1296,  2996 => 1295,  2991 => 1293,  2983 => 1288,  2977 => 1284,  2968 => 1278,  2959 => 1272,  2952 => 1267,  2948 => 1265,  2934 => 1264,  2930 => 1263,  2926 => 1262,  2922 => 1260,  2905 => 1259,  2902 => 1258,  2900 => 1257,  2895 => 1255,  2891 => 1254,  2885 => 1250,  2883 => 1249,  2878 => 1247,  2871 => 1243,  2862 => 1242,  2858 => 1240,  2854 => 1238,  2851 => 1237,  2845 => 1235,  2839 => 1233,  2836 => 1232,  2834 => 1231,  2830 => 1230,  2824 => 1227,  2819 => 1226,  2811 => 1221,  2807 => 1220,  2803 => 1219,  2799 => 1217,  2796 => 1216,  2790 => 1214,  2787 => 1213,  2781 => 1211,  2778 => 1210,  2772 => 1208,  2769 => 1207,  2763 => 1205,  2761 => 1204,  2757 => 1203,  2752 => 1202,  2747 => 1200,  2742 => 1198,  2738 => 1196,  2736 => 1195,  2732 => 1194,  2728 => 1193,  2724 => 1192,  2718 => 1188,  2716 => 1187,  2711 => 1184,  2708 => 1183,  2699 => 1180,  2693 => 1177,  2681 => 1169,  2678 => 1168,  2673 => 1167,  2670 => 1166,  2667 => 1165,  2661 => 1162,  2656 => 1160,  2647 => 1153,  2644 => 1152,  2638 => 1150,  2635 => 1149,  2630 => 1146,  2624 => 1144,  2622 => 1143,  2618 => 1141,  2607 => 1134,  2601 => 1131,  2598 => 1130,  2596 => 1129,  2589 => 1127,  2581 => 1124,  2575 => 1121,  2569 => 1118,  2543 => 1095,  2539 => 1094,  2531 => 1091,  2517 => 1080,  2508 => 1075,  2505 => 1074,  2499 => 1072,  2494 => 1069,  2485 => 1066,  2480 => 1064,  2471 => 1058,  2467 => 1056,  2463 => 1055,  2455 => 1052,  2452 => 1051,  2445 => 1049,  2441 => 1048,  2437 => 1047,  2433 => 1046,  2429 => 1045,  2425 => 1043,  2423 => 1042,  2417 => 1039,  2408 => 1032,  2405 => 1031,  2400 => 1028,  2393 => 1026,  2384 => 1023,  2379 => 1021,  2375 => 1019,  2371 => 1018,  2367 => 1017,  2364 => 1016,  2360 => 1015,  2354 => 1012,  2345 => 1005,  2342 => 1004,  2337 => 1001,  2333 => 999,  2327 => 998,  2318 => 997,  2314 => 996,  2309 => 995,  2307 => 994,  2303 => 993,  2297 => 990,  2288 => 983,  2285 => 982,  2279 => 980,  2277 => 979,  2265 => 969,  2258 => 965,  2247 => 957,  2243 => 956,  2230 => 946,  2215 => 936,  2212 => 935,  2209 => 934,  2205 => 932,  2200 => 930,  2197 => 929,  2191 => 927,  2189 => 926,  2185 => 925,  2182 => 924,  2176 => 922,  2174 => 921,  2171 => 920,  2169 => 919,  2165 => 918,  2160 => 915,  2154 => 913,  2152 => 912,  2137 => 902,  2123 => 893,  2113 => 885,  2107 => 883,  2105 => 882,  2101 => 880,  2097 => 878,  2087 => 874,  2069 => 873,  2064 => 871,  2061 => 870,  2057 => 869,  2054 => 868,  2049 => 865,  2041 => 862,  2035 => 861,  2032 => 860,  2024 => 858,  2022 => 857,  2019 => 856,  2015 => 855,  2010 => 853,  2007 => 852,  2005 => 851,  2002 => 850,  1998 => 848,  1990 => 845,  1980 => 839,  1978 => 838,  1974 => 837,  1967 => 833,  1963 => 832,  1956 => 830,  1952 => 828,  1948 => 827,  1944 => 826,  1941 => 825,  1939 => 824,  1935 => 822,  1932 => 821,  1928 => 819,  1917 => 816,  1914 => 815,  1910 => 814,  1907 => 813,  1904 => 812,  1898 => 810,  1895 => 809,  1892 => 808,  1885 => 804,  1881 => 803,  1878 => 802,  1876 => 801,  1873 => 800,  1868 => 799,  1864 => 797,  1858 => 794,  1853 => 793,  1851 => 792,  1845 => 789,  1836 => 783,  1831 => 781,  1827 => 780,  1823 => 779,  1810 => 769,  1795 => 759,  1791 => 757,  1787 => 755,  1781 => 754,  1770 => 750,  1766 => 748,  1763 => 747,  1761 => 746,  1755 => 745,  1752 => 744,  1749 => 743,  1738 => 739,  1734 => 737,  1731 => 736,  1729 => 735,  1723 => 734,  1720 => 733,  1717 => 732,  1706 => 728,  1702 => 726,  1699 => 725,  1697 => 724,  1691 => 723,  1688 => 722,  1685 => 721,  1677 => 718,  1673 => 717,  1666 => 715,  1663 => 714,  1660 => 713,  1658 => 712,  1654 => 711,  1651 => 710,  1648 => 709,  1636 => 706,  1633 => 705,  1630 => 704,  1628 => 703,  1622 => 702,  1619 => 701,  1616 => 700,  1604 => 697,  1601 => 696,  1597 => 694,  1595 => 693,  1589 => 692,  1586 => 691,  1583 => 690,  1578 => 687,  1570 => 684,  1563 => 682,  1561 => 681,  1557 => 680,  1546 => 679,  1530 => 678,  1526 => 676,  1522 => 675,  1518 => 674,  1515 => 673,  1512 => 672,  1510 => 671,  1506 => 670,  1503 => 669,  1500 => 668,  1495 => 665,  1474 => 658,  1470 => 657,  1465 => 654,  1459 => 652,  1443 => 650,  1441 => 649,  1435 => 648,  1426 => 647,  1413 => 646,  1407 => 642,  1390 => 641,  1386 => 640,  1383 => 639,  1380 => 638,  1378 => 637,  1374 => 636,  1371 => 635,  1368 => 634,  1363 => 631,  1356 => 629,  1349 => 627,  1347 => 626,  1340 => 625,  1336 => 624,  1332 => 623,  1326 => 622,  1323 => 621,  1319 => 619,  1317 => 618,  1311 => 617,  1308 => 616,  1305 => 615,  1301 => 614,  1298 => 613,  1296 => 612,  1293 => 611,  1290 => 610,  1286 => 608,  1279 => 603,  1268 => 601,  1264 => 600,  1260 => 599,  1253 => 595,  1250 => 594,  1247 => 593,  1244 => 592,  1239 => 590,  1234 => 589,  1232 => 588,  1228 => 587,  1223 => 586,  1220 => 585,  1214 => 583,  1211 => 582,  1208 => 581,  1197 => 579,  1192 => 578,  1189 => 577,  1183 => 574,  1178 => 573,  1175 => 572,  1167 => 570,  1164 => 569,  1160 => 567,  1152 => 562,  1144 => 557,  1136 => 552,  1128 => 547,  1121 => 543,  1118 => 542,  1116 => 541,  1109 => 539,  1105 => 538,  1102 => 537,  1096 => 535,  1094 => 534,  1090 => 533,  1085 => 530,  1079 => 528,  1077 => 527,  1074 => 526,  1072 => 525,  1060 => 518,  1050 => 513,  1038 => 510,  1030 => 504,  1028 => 503,  1020 => 502,  1017 => 501,  1010 => 497,  1007 => 496,  1000 => 492,  996 => 491,  992 => 490,  988 => 489,  981 => 488,  979 => 487,  976 => 486,  974 => 485,  969 => 482,  962 => 477,  939 => 456,  935 => 454,  933 => 453,  864 => 387,  854 => 379,  852 => 378,  849 => 377,  836 => 366,  772 => 304,  770 => 303,  692 => 227,  688 => 225,  682 => 221,  668 => 220,  653 => 216,  649 => 215,  646 => 214,  643 => 213,  640 => 212,  623 => 211,  609 => 208,  605 => 207,  600 => 204,  598 => 203,  585 => 201,  573 => 200,  566 => 199,  563 => 198,  560 => 197,  549 => 188,  531 => 184,  527 => 183,  524 => 182,  521 => 181,  517 => 180,  507 => 172,  505 => 171,  502 => 170,  499 => 169,  494 => 166,  488 => 165,  482 => 162,  477 => 161,  465 => 158,  462 => 157,  459 => 156,  455 => 155,  451 => 153,  449 => 152,  434 => 139,  428 => 136,  425 => 135,  422 => 134,  419 => 133,  410 => 130,  405 => 129,  402 => 128,  397 => 127,  394 => 126,  391 => 125,  385 => 122,  382 => 121,  379 => 120,  373 => 117,  370 => 116,  367 => 115,  361 => 112,  357 => 111,  354 => 110,  351 => 109,  345 => 106,  342 => 105,  339 => 104,  333 => 101,  330 => 100,  328 => 99,  323 => 97,  316 => 92,  309 => 88,  300 => 81,  293 => 79,  289 => 78,  285 => 77,  282 => 76,  280 => 75,  277 => 74,  269 => 72,  266 => 71,  258 => 69,  255 => 68,  247 => 66,  244 => 65,  236 => 63,  233 => 62,  225 => 60,  222 => 59,  214 => 57,  211 => 56,  203 => 54,  200 => 53,  194 => 49,  192 => 48,  186 => 45,  180 => 42,  175 => 39,  169 => 35,  155 => 34,  152 => 33,  148 => 32,  143 => 30,  139 => 29,  133 => 26,  129 => 24,  126 => 23,  123 => 22,  106 => 21,  98 => 15,  96 => 14,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/product/product.twig", "");
    }
}
