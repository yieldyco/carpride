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

/* oct_deals/template/octemplates/module/oct_live_search.twig */
class __TwigTemplate_08c01f242b8457b353bdc26b9f9f3493aa34a0aac10933b152b9a81a4cdfba5a extends \Twig\Template
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
        if (($context["query_corrected"] ?? null)) {
            // line 2
            echo "\t<p class=\"mb-2 dark-text fw-400 fsz-14\">";
            echo ($context["text_corrected_search"] ?? null);
            echo "</p>
";
        }
        // line 4
        echo "
";
        // line 5
        if ( !twig_test_empty(($context["manufacturers"] ?? null))) {
            // line 6
            echo "\t<p class=\"fsz-16 fw-500 dark-text\">";
            echo ($context["founded_manufacturers"] ?? null);
            echo "</p>
\t<div class=\"ds-livesearch-items-box row mb-3 g-2\">
\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 9
                echo "\t\t\t<div class=\"ds-livesearch-categories-item\">
\t\t\t\t<a class=\"content-block d-flex flex-column align-items-center justify-content-center p-2 h-100\" href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                echo "\">
\t\t\t\t\t";
                // line 11
                if (($context["manufacturer_image"] ?? null)) {
                    // line 12
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 12);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                    echo "\" width=\"60\" height=\"60\" />
\t\t\t\t\t\t<span class=\"ds-subcategories-title dark-text fw-500 fsz-12 text-center lh-sm mt-2\">";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t<span class=\"ds-subcategories-title dark-text fw-500 fsz-12 text-center lh-sm\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t</a>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t</div>
";
        }
        // line 22
        echo "
";
        // line 23
        if ( !twig_test_empty(($context["direct_categories"] ?? null))) {
            // line 24
            echo "\t<p class=\"fsz-16 fw-500 dark-text\">";
            echo ($context["founded_categories"] ?? null);
            echo "</p>
\t<div class=\"ds-livesearch-items-box row mb-3 g-2\">
\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["direct_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 27
                echo "\t\t\t<div class=\"ds-livesearch-categories-item\">
\t\t\t\t<a class=\"content-block d-flex flex-column align-items-center justify-content-center p-2 h-100\" href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
                echo "\">
\t\t\t\t\t";
                // line 29
                if (($context["category_image"] ?? null)) {
                    // line 30
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 30);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "\" width=\"60\" height=\"60\" />
\t\t\t\t\t\t<span class=\"ds-subcategories-title dark-text fw-500 fsz-12 text-center lh-sm mt-2\">";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t\t\t<span class=\"ds-subcategories-title dark-text fw-500 fsz-12 text-center lh-sm\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t</a>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t</div>
";
        }
        // line 40
        echo "
";
        // line 41
        if ( !twig_test_empty(($context["product_categories"] ?? null))) {
            // line 42
            echo "\t<p class=\"fsz-16 fw-500 dark-text\">";
            echo ($context["founded_in_categories"] ?? null);
            echo "</p>
\t<div class=\"ds-livesearch-items-box row mb-3 g-2\">
\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 45
                echo "\t\t\t<div class=\"ds-livesearch-categories-item\">
\t\t\t\t<a class=\"content-block d-flex flex-column align-items-center justify-content-center p-2 h-100\" href=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 46);
                echo "\">
\t\t\t\t\t";
                // line 47
                if (($context["category_image"] ?? null)) {
                    // line 48
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 48);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                    echo "\" width=\"60\" height=\"60\" />
\t\t\t\t\t\t<span class=\"ds-subcategories-title dark-text fw-500 fsz-12 text-center lh-sm mt-2\">";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t\t\t<span class=\"ds-subcategories-title dark-text fw-500 fsz-12 text-center lh-sm\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 51);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t</a>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t</div>
";
        }
        // line 58
        echo "
";
        // line 59
        if ( !twig_test_empty(($context["products"] ?? null))) {
            // line 60
            echo "\t<p class=\"fsz-16 fw-500 dark-text\">";
            echo ($context["founded_products"] ?? null);
            echo "</p>
\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 62
                echo "\t\t<div class=\"ds-livesearch-item p-3 d-flex br-4 content-border\">
\t\t\t\t<div class=\"ds-livesearch-item-img d-flex flex-column align-items-center justify-content-between pe-3 align-self-stretch\">
\t\t\t\t\t<a href=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 64);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                echo "\" width=\"62\" height=\"62\" /></a>
\t\t\t\t\t<div class=\"ds-livesearch-item-sticker p-1 w-100 fsz-10 mt-auto d-flex align-items-center justify-content-center ";
                // line 65
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 65) <= 0)) {
                    echo "red";
                } else {
                    echo "green";
                }
                echo "-bg\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 65);
                echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ds-livesearch-item-info d-flex flex-column justify-content-between\">
\t\t\t\t\t<div class=\"ds-livesearch-item-info-top mb-3\">
\t\t\t\t\t\t<a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 69);
                echo "\" class=\"ds-livesearch-item-title fsz-14 dark-text fw-500 d-inline-block mb-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
                echo "</a>
\t\t\t\t\t\t";
                // line 70
                if ((($context["model_setting"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 70))) {
                    // line 71
                    echo "\t\t\t\t\t\t\t<div class=\"ds-livesearch-item-code light-text fsz-12\"><span>";
                    echo ($context["oct_live_search_model"] ?? null);
                    echo "</span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 71);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t\t\t";
                if ((($context["sku_setting"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 73))) {
                    // line 74
                    echo "\t\t\t\t\t\t\t<div class=\"ds-livesearch-item-code light-text fsz-12\"><span>";
                    echo ($context["oct_live_search_sku"] ?? null);
                    echo "</span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 74);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 77
                if (($context["price_setting"] ?? null)) {
                    // line 78
                    echo "\t\t\t\t\t<div class=\"ds-livesearch-item-price mt-auto\">
\t\t\t\t\t\t";
                    // line 79
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79)) {
                        // line 80
                        echo "\t\t\t\t\t\t\t<div class=\"ds-price-old light-text text-decoration-line-through fsz-14 mb-1\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                        echo "</div>
\t\t\t\t\t\t\t<div class=\"ds-price-new dark-text fw-700 fsz-18\">";
                        // line 81
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81);
                        echo "</div>
\t\t\t\t\t\t";
                    } else {
                        // line 83
                        echo "\t\t\t\t\t\t\t<div class=\"ds-price-new dark-text fw-700 fsz-18\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 83);
                        echo "</div>
\t\t\t\t\t\t";
                    }
                    // line 85
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 91
        echo "
";
        // line 92
        if ((((twig_test_empty(($context["direct_categories"] ?? null)) && twig_test_empty(($context["product_categories"] ?? null))) && twig_test_empty(($context["manufacturers"] ?? null))) && twig_test_empty(($context["products"] ?? null)))) {
            // line 93
            echo "\t<div class=\"dark-text fw-500 fsz-14\">
\t\t";
            // line 94
            echo ($context["oct_live_search_result_empty"] ?? null);
            echo "
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_live_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 94,  317 => 93,  315 => 92,  312 => 91,  303 => 87,  299 => 85,  293 => 83,  288 => 81,  283 => 80,  281 => 79,  278 => 78,  276 => 77,  273 => 76,  265 => 74,  262 => 73,  254 => 71,  252 => 70,  246 => 69,  233 => 65,  225 => 64,  221 => 62,  217 => 61,  212 => 60,  210 => 59,  207 => 58,  203 => 56,  195 => 53,  189 => 51,  184 => 49,  177 => 48,  175 => 47,  171 => 46,  168 => 45,  164 => 44,  158 => 42,  156 => 41,  153 => 40,  149 => 38,  141 => 35,  135 => 33,  130 => 31,  123 => 30,  121 => 29,  117 => 28,  114 => 27,  110 => 26,  104 => 24,  102 => 23,  99 => 22,  95 => 20,  87 => 17,  81 => 15,  76 => 13,  69 => 12,  67 => 11,  63 => 10,  60 => 9,  56 => 8,  50 => 6,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_live_search.twig", "");
    }
}
