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

/* oct_deals/template/octemplates/module/oct_slideshow_plus.twig */
class __TwigTemplate_388f4bf51b9c8833cb93f2016554aa1ce26fa15cd0611800c08653803ff2506c extends \Twig\Template
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
        if (($context["oct_slideshows_plus"] ?? null)) {
            // line 2
            echo "\t<div class=\"ds-slideshow mt-3";
            if (($context["slider_with_megamenu"] ?? null)) {
                echo " menu-active";
            }
            if (($context["paginations_status"] ?? null)) {
                echo " with-pagination";
            }
            echo "\">
\t\t<div id=\"slideshow-plus-";
            // line 3
            echo ($context["module"] ?? null);
            echo "\" class=\"ds-slideshow-items swiper position-relative";
            if ((($context["slider_type"] ?? null) == 1)) {
                echo " ds-slideshow-items-vertical";
            }
            echo "\">
\t\t\t";
            // line 4
            $context["key"] = 0;
            // line 5
            echo "\t\t\t<div class=\"swiper-wrapper mb-5";
            if ((($context["slider_type"] ?? null) == 1)) {
                echo " swiper-wrapper-grid";
            }
            echo "\">
\t\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_slideshows_plus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item_slide"]) {
                // line 7
                echo "\t\t\t\t\t";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 8
                echo "\t\t\t\t\t<div class=\"";
                if ( !($context["full_img"] ?? null)) {
                    echo "ds-slideshow-item br-7 content-block content-border d-flex flex-column align-items-center align-self-stretch ds-slideshow-plus-item_";
                    echo ($context["key"] ?? null);
                } else {
                    echo "ds-slideshow-item-full-img";
                }
                if ((($context["slider_type"] ?? null) == 1)) {
                    echo " ds-slideshow-item-vertical";
                }
                echo " swiper-slide\">
\t\t\t\t\t\t";
                // line 9
                if ((($context["full_img"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item_slide"], "mobile_image", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "\t\t\t\t\t\t\t<div class=\"ds-slideshow-plus-item-fullimg h-100\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "link", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 11);
                    echo "\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source srcset=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "mobile_image", [], "any", false, false, false, 13);
                    echo "\" media=\"(max-width: 767px)\">
\t\t\t\t\t\t\t\t\t\t<source srcset=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image", [], "any", false, false, false, 14);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid br-4\" src=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image", [], "any", false, false, false, 15);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 15);
                    echo "\" ";
                    if (array_key_exists("oct_isMobile", $context)) {
                        echo "width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "mobile_width", [], "any", false, false, false, 15);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "mobile_height", [], "any", false, false, false, 15);
                        echo "\"";
                    } else {
                        echo "width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_width", [], "any", false, false, false, 15);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_height", [], "any", false, false, false, 15);
                        echo "\"";
                    }
                    if ((($context["key"] ?? null) > 1)) {
                        echo " loading=\"lazy\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t\t";
                    if ((($context["slider_type"] ?? null) == 1)) {
                        // line 21
                        echo "\t\t\t\t\t\t\t\t<div class=\"ds-slideshow-item-title fsz-24 fw-700 mb-4\">";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 21);
                        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"ds-slideshow-item-text fsz-20 mb-4\">";
                        // line 22
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "description", [], "any", false, false, false, 22);
                        echo "</div>
\t\t\t\t\t\t\t\t<a class=\"mt-auto\" href=\"";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "link", [], "any", false, false, false, 23);
                        echo "\" aria-label=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button", [], "any", false, false, false, 23);
                        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image", [], "any", false, false, false, 24);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 24);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_width", [], "any", false, false, false, 24);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_height", [], "any", false, false, false, 24);
                        echo "\"";
                        if ((($context["key"] ?? null) > 1)) {
                            echo " loading=\"lazy\"";
                        }
                        echo " class=\"mt-auto\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "link", [], "any", false, false, false, 27);
                        echo "\" class=\"button button-outline button-outline-primary br-7\">
\t\t\t\t\t\t\t\t\t\t<span class=\"button-text\">";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button", [], "any", false, false, false, 28);
                        echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t<div class=\"w-100 h-100 d-flex flex-column flex-sm-row justify-content-between gap-4\">
\t\t\t\t\t\t\t\t\t<div class=\"ds-slideshow-item-horizontal ds-slideshow-item-info d-flex flex-column gap-4 order-1 order-sm-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ds-slideshow-item-title fsz-24 fw-700\">";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 34);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ds-slideshow-item-text fsz-20\">";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "description", [], "any", false, false, false, 35);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 37
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "link", [], "any", false, false, false, 37);
                        echo "\" class=\"button button-outline button-outline-primary br-7\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"button-text\">";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button", [], "any", false, false, false, 38);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "link", [], "any", false, false, false, 42);
                        echo "\" aria-label=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button", [], "any", false, false, false, 42);
                        echo "\" class=\"order-0 order-sm-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image", [], "any", false, false, false, 43);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 43);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_width", [], "any", false, false, false, 43);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_height", [], "any", false, false, false, 43);
                        echo "\"";
                        if ((($context["key"] ?? null) > 1)) {
                            echo " loading=\"lazy\"";
                        }
                        echo " class=\"d-block mx-auto\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 47
                    echo "\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t";
                    // line 48
                    if (twig_get_attribute($this->env, $this->source, $context["item_slide"], "background_color", [], "any", false, false, false, 48)) {
                        // line 49
                        echo "\t\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .ds-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " {background-color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "background_color", [], "any", false, false, false, 49);
                        echo ";}
\t\t\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item_slide"], "title_color", [], "any", false, false, false, 51)) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .ds-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .ds-slideshow-item-title {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title_color", [], "any", false, false, false, 52);
                        echo ";}
\t\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item_slide"], "text_color", [], "any", false, false, false, 54)) {
                        // line 55
                        echo "\t\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .ds-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .ds-slideshow-item-text {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "text_color", [], "any", false, false, false, 55);
                        echo ";}
\t\t\t\t\t\t\t\t";
                    }
                    // line 57
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_color", [], "any", false, false, false, 57) && twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background", [], "any", false, false, false, 57))) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .ds-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .button {border-color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background", [], "any", false, false, false, 58);
                        echo ";}
\t\t\t\t\t\t\t\t#slideshow-plus-";
                        // line 59
                        echo ($context["module"] ?? null);
                        echo " .ds-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .button {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_color", [], "any", false, false, false, 59);
                        echo ";}
\t\t\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_color_hover", [], "any", false, false, false, 61) && twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background_hover", [], "any", false, false, false, 61))) {
                        // line 62
                        echo "\t\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .ds-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .button:hover {background-color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background_hover", [], "any", false, false, false, 62);
                        echo "; border-color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background_hover", [], "any", false, false, false, 62);
                        echo ";}
\t\t\t\t\t\t\t\t#slideshow-plus-";
                        // line 63
                        echo ($context["module"] ?? null);
                        echo " .ds-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .button:hover {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_color_hover", [], "any", false, false, false, 63);
                        echo ";}
\t\t\t\t\t\t\t\t";
                    }
                    // line 65
                    echo "\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t</div>
\t\t\t";
            // line 70
            if (($context["paginations_status"] ?? null)) {
                // line 71
                echo "\t\t\t\t<div class=\"swiper-pagination swiper-pagination-";
                echo ($context["module"] ?? null);
                echo "\"></div>
\t\t\t";
            }
            // line 73
            echo "\t\t\t";
            if (($context["arrows_status"] ?? null)) {
                // line 74
                echo "\t\t\t\t<div class=\"swiper-button-prev swiper-button-prev-";
                echo ($context["module"] ?? null);
                echo " button button-secondary button-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center py-3 px-1\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"4\" height=\"6\" viewBox=\"0 0 4 6\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M0.263207 2.99938C0.263207 2.87814 0.309287 2.75688 0.402114 2.66468L2.92803 0.138767C3.11305 -0.0462558 3.41303 -0.0462558 3.59805 0.138767C3.78307 0.323791 3.78307 0.623765 3.59805 0.808788L1.40684 3L3.59805 5.19121C3.78307 5.37624 3.78307 5.67621 3.59805 5.86123C3.41303 6.04626 3.11305 6.04626 2.92803 5.86123L0.402114 3.33532C0.309287 3.24186 0.263207 3.12063 0.263207 2.99938Z\" fill=\"#003459\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-button-next swiper-button-next-";
                // line 79
                echo ($context["module"] ?? null);
                echo " button button-secondary button-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center py-3 px-1\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"4\" height=\"6\" viewBox=\"0 0 4 6\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M0.263207 2.99938C0.263207 2.87814 0.309287 2.75688 0.402114 2.66468L2.92803 0.138767C3.11305 -0.0462558 3.41303 -0.0462558 3.59805 0.138767C3.78307 0.323791 3.78307 0.623765 3.59805 0.808788L1.40684 3L3.59805 5.19121C3.78307 5.37624 3.78307 5.67621 3.59805 5.86123C3.41303 6.04626 3.11305 6.04626 2.92803 5.86123L0.402114 3.33532C0.309287 3.24186 0.263207 3.12063 0.263207 2.99938Z\" fill=\"#003459\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t";
            }
            // line 85
            echo "\t\t</div>
\t\t<script>
\t\t\t";
            // line 87
            if ((($context["full_img"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["item_slide"] ?? null), "mobile_image", [], "any", false, false, false, 87))) {
                // line 88
                echo "\t\t\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t\t\t\t";
                // line 89
                if (($context["slider_with_megamenu"] ?? null)) {
                    // line 90
                    echo "\t\t\t\t\t\tif (window.innerWidth >= 1200) {
\t\t\t\t\t\t\tslideshowPlus();
\t\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 94
                echo "
\t\t\t\t\tvar dsSlideshowPlusSwiper = new Swiper('#slideshow-plus-";
                // line 95
                echo ($context["module"] ?? null);
                echo "', {
\t\t\t\t\t\tslidesPerView: 1,
\t\t\t\t\t\tspaceBetween: 0,
\t\t\t\t\t\tloop: true,
\t\t\t\t\t\t";
                // line 99
                if (($context["autoplay_status"] ?? null)) {
                    // line 100
                    echo "\t\t\t\t\t\t\tautoplay: {
\t\t\t\t\t\t\t\tdelay: 5000,
\t\t\t\t\t\t\t\tdisableOnInteraction: false,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t";
                if (($context["paginations_status"] ?? null)) {
                    // line 106
                    echo "\t\t\t\t\t\t\tpagination: {
\t\t\t\t\t\t\t\tel: '.swiper-pagination-";
                    // line 107
                    echo ($context["module"] ?? null);
                    echo "',
\t\t\t\t\t\t\t\tclickable: true,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t";
                if (($context["arrows_status"] ?? null)) {
                    // line 112
                    echo "\t\t\t\t\t\t\tnavigation: {
\t\t\t\t\t\t\t\tnextEl: '.swiper-button-next-";
                    // line 113
                    echo ($context["module"] ?? null);
                    echo "',
\t\t\t\t\t\t\t\tprevEl: '.swiper-button-prev-";
                    // line 114
                    echo ($context["module"] ?? null);
                    echo "',
\t\t\t\t\t\t\t},
\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t});
\t\t\t\t});
\t\t\t";
            } else {
                // line 120
                echo "\t\t\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t\t\t\t";
                // line 121
                if (($context["slider_with_megamenu"] ?? null)) {
                    // line 122
                    echo "\t\t\t\t\t\tif (window.innerWidth >= 1200) {
\t\t\t\t\t\t\tslideshowPlus();
\t\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 126
                echo "
\t\t\t\t\tvar dsSlideshowPlusSwiper = new Swiper('#slideshow-plus-";
                // line 127
                echo ($context["module"] ?? null);
                echo "', {
\t\t\t\t\t\tslidesPerView: ";
                // line 128
                if ((($context["slider_type"] ?? null) == 1)) {
                    echo "1.2";
                } else {
                    echo "1";
                }
                echo ",
\t\t\t\t\t\tbreakpoints: {
\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 131
                if ((($context["slider_type"] ?? null) == 1)) {
                    echo "3.3";
                } else {
                    echo "1";
                }
                echo ",
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t1024: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 134
                if ((($context["slider_type"] ?? null) == 1)) {
                    echo "2.5";
                } else {
                    echo "1";
                }
                echo ",
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 137
                if ((($context["slider_type"] ?? null) == 1)) {
                    echo "1.2";
                } else {
                    echo "1";
                }
                echo ",
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\tspaceBetween: ";
                // line 140
                if ((($context["slider_type"] ?? null) == 1)) {
                    echo "16";
                } else {
                    echo "0";
                }
                echo ",
\t\t\t\t\t\tloop: true,
\t\t\t\t\t\t";
                // line 142
                if (($context["autoplay_status"] ?? null)) {
                    // line 143
                    echo "\t\t\t\t\t\t\tautoplay: {
\t\t\t\t\t\t\t\tdelay: 5000,
\t\t\t\t\t\t\t\tdisableOnInteraction: false,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t\t";
                if (($context["paginations_status"] ?? null)) {
                    // line 149
                    echo "\t\t\t\t\t\t\tpagination: {
\t\t\t\t\t\t\t\tel: '.swiper-pagination-";
                    // line 150
                    echo ($context["module"] ?? null);
                    echo "',
\t\t\t\t\t\t\t\tclickable: true,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t";
                }
                // line 154
                echo "\t\t\t\t\t\t";
                if (($context["arrows_status"] ?? null)) {
                    // line 155
                    echo "\t\t\t\t\t\t\tnavigation: {
\t\t\t\t\t\t\t\tnextEl: '.swiper-button-next-";
                    // line 156
                    echo ($context["module"] ?? null);
                    echo "',
\t\t\t\t\t\t\t\tprevEl: '.swiper-button-prev-";
                    // line 157
                    echo ($context["module"] ?? null);
                    echo "',
\t\t\t\t\t\t\t},
\t\t\t\t\t\t";
                }
                // line 160
                echo "\t\t\t\t\t});
\t\t\t\t});
\t\t\t";
            }
            // line 163
            echo "\t\t</script>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_slideshow_plus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 163,  528 => 160,  522 => 157,  518 => 156,  515 => 155,  512 => 154,  505 => 150,  502 => 149,  499 => 148,  492 => 143,  490 => 142,  481 => 140,  471 => 137,  461 => 134,  451 => 131,  441 => 128,  437 => 127,  434 => 126,  428 => 122,  426 => 121,  423 => 120,  418 => 117,  412 => 114,  408 => 113,  405 => 112,  402 => 111,  395 => 107,  392 => 106,  389 => 105,  382 => 100,  380 => 99,  373 => 95,  370 => 94,  364 => 90,  362 => 89,  359 => 88,  357 => 87,  353 => 85,  344 => 79,  335 => 74,  332 => 73,  326 => 71,  324 => 70,  321 => 69,  314 => 67,  310 => 65,  301 => 63,  290 => 62,  287 => 61,  278 => 59,  269 => 58,  266 => 57,  256 => 55,  253 => 54,  243 => 52,  240 => 51,  230 => 49,  228 => 48,  225 => 47,  208 => 43,  202 => 42,  195 => 38,  191 => 37,  186 => 35,  182 => 34,  178 => 32,  171 => 28,  167 => 27,  151 => 24,  145 => 23,  141 => 22,  136 => 21,  133 => 20,  106 => 15,  102 => 14,  98 => 13,  91 => 11,  88 => 10,  86 => 9,  73 => 8,  70 => 7,  66 => 6,  59 => 5,  57 => 4,  49 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_slideshow_plus.twig", "");
    }
}
