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

/* oct_deals/template/product/compare.twig */
class __TwigTemplate_646355763179d8bd02af11fbf0bc6606298ba900bb3d63920752d765cf3d923c extends \Twig\Template
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
<div id=\"product-compare\" class=\"container-fluid container-xl flex-grow-1\">
\t<nav aria-label=\"breadcrumb\">
\t\t<ul class=\"breadcrumb ds-breadcrumb fsz-12\">
\t\t";
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
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6)) {
                // line 7
                echo "\t\t\t\t<li class=\"breadcrumb-item ds-breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</li>
\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t<li class=\"breadcrumb-item ds-breadcrumb-item\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</a></li>
\t\t\t";
            }
            // line 11
            echo "\t\t";
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
        echo "\t\t</ul>
    </nav>
    <main>
        <div class=\"row\">
            <div class=\"col-12 ds-page-title pb-3\">
                <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
        </div>
        <div class=\"content-top-box\">";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "</div>
        ";
        // line 21
        if (($context["success"] ?? null)) {
            // line 22
            echo "            <script>
                scNotify('success', '";
            // line 23
            echo ($context["success"] ?? null);
            echo "');
            </script>
        ";
        }
        // line 26
        echo "        <divclass=\"row g-3\">
            ";
        // line 27
        echo ($context["column_left"] ?? null);
        echo "
            ";
        // line 28
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 29
            echo "                ";
            $context["class"] = "col-xl-6 is-cols";
            // line 30
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 31
            echo "                ";
            $context["class"] = "col-xl-9";
            // line 32
            echo "            ";
        } else {
            // line 33
            echo "                ";
            $context["class"] = "col-xl-12 no-col";
            // line 34
            echo "            ";
        }
        // line 35
        echo "            <div id=\"content\"  class=\"";
        echo ($context["class"] ?? null);
        echo "\">
                <div class=\"content-block fsz-14 p-0 overflow-hidden\">
                    ";
        // line 37
        if (($context["products"] ?? null)) {
            // line 38
            echo "                        <div class=\"table-responsive\">
                            <table class=\"table ds-table-compare\">
                                <tbody>
                                    <tr class=\"ds-table-compare-head\">
                                        <td class=\"fw-700\">";
            // line 42
            echo ($context["text_name"] ?? null);
            echo "</td>
                                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "                                            <td class=\"ds-table-product-name text-center\">
                                                <a href=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
                echo "\" class=\"fw-500 secondary-text\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
                echo "</a>
                                            </td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                    </tr>
                                    <tr class=\"ds-table-compare-img\">
                                        <td class=\"align-middle\">";
            // line 50
            echo ($context["text_image"] ?? null);
            echo "</td>
                                        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 52
                echo "                                            <td class=\"text-center\">
                                                ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                                                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                    echo "\"/>
                                                ";
                }
                // line 56
                echo "                                            </td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                    </tr>
                                    <tr class=\"ds-table-compare-price\">
                                        <td>";
            // line 60
            echo ($context["text_price"] ?? null);
            echo "</td>
                                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 62
                echo "                                            <td class=\"ds-module-price text-center\">
                                                ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "                                                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64)) {
                        // line 65
                        echo "                                                        <span class=\"fw-700 fsz-16 secondary-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65);
                        echo "</span>
                                                    ";
                    } else {
                        // line 67
                        echo "                                                        <span class=\"text-decoration-line-through fsz-12 light-text me-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67);
                        echo "</span>
                                                        <span class=\"fw-700 fsz-16 secondary-text\">";
                        // line 68
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 68);
                        echo "</span>
                                                    ";
                    }
                    // line 70
                    echo "                                                ";
                }
                // line 71
                echo "                                            </td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                    </tr>
                                    <tr class=\"ds-table-compare-model\">
                                        <td>";
            // line 75
            echo ($context["text_model"] ?? null);
            echo "</td>
                                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 77
                echo "                                            <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 77);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                    </tr>
                                    <tr class=\"ds-table-compare-producer\">
                                        <td>";
            // line 81
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
                                        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                echo "                                            <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 83);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                                    </tr>
                                    <tr class=\"ds-table-compare-available\">
                                        <td>";
            // line 87
            echo ($context["text_availability"] ?? null);
            echo "</td>
                                        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "                                            <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 89);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                                    </tr>
                                    ";
            // line 92
            if (($context["review_status"] ?? null)) {
                // line 93
                echo "                                        <tr class=\"ds-table-compare-rating\">
                                            <td class=\"align-middle\">";
                // line 94
                echo ($context["text_rating"] ?? null);
                echo "</td>
                                            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 96
                    echo "                                                <td class=\"text-center\">
                                                    <div class=\"ds-module-rating d-inline-flex align-items-center justify-content-center mb-1 br-4\">
                                                        <div class=\"ds-module-rating-stars d-flex align-items-center\">
                                                            ";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 100
                        echo "                                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 100) < $context["i"])) {
                            // line 101
                            echo "                                                                    <span class=\"ds-module-rating-star\"></span>
                                                                ";
                        } else {
                            // line 103
                            echo "                                                                    <span class=\"ds-module-rating-star ds-module-rating-star-is\"></span>
                                                                ";
                        }
                        // line 105
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "                                                        </div>
                                                    </div>
                                                    <div class=\"fsz-12 light-text\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 108);
                    echo "</div>
                                                </td>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                                        </tr>
                                    ";
            }
            // line 113
            echo "                                    <tr class=\"ds-table-compare-weight\">
                                        <td>";
            // line 114
            echo ($context["text_weight"] ?? null);
            echo "</td>
                                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 116
                echo "                                            <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 116);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                    </tr>
                                    <tr class=\"ds-table-compare-sizes\">
                                        <td>";
            // line 120
            echo ($context["text_dimension"] ?? null);
            echo "</td>
                                        ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 122
                echo "                                            <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 122);
                echo "
                                                x
                                                ";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 124);
                echo "
                                                x
                                                ";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 126);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                    </tr>
                                    ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 130
                echo "                                        <tr>
                                            <td class=\"ds-table-compare-title\" colspan=\"";
                // line 131
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\">
                                                <strong>";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 132);
                echo "</strong>
                                            </td>
                                        </tr>
                                        ";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 135));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 136
                    echo "                                            <tr>
                                                <td>";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 137);
                    echo "</td>
                                                ";
                    // line 138
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 139
                        echo "                                                    ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 139)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 140
                            echo "                                                        <td class=\"text-center\">
                                                            ";
                            // line 141
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 141)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
                                                    ";
                        } else {
                            // line 143
                            echo "                                                        <td></td>
                                                    ";
                        }
                        // line 145
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                                    <tr class=\"ds-table-compare-btn\">
                                        <td></td>
                                        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 152
                echo "                                            <td class=\"text-center\">
                                                <div class=\"d-inline-flex flex-column align-items-stretch\">
                                                    ";
                // line 154
                if (twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 154)) {
                    // line 155
                    echo "                                                        <button type=\"button\" aria-label=\"To cart\" class=\"button button-outline button-outline-primary br-7 mb-3 fsz-12 ds-module-cart-btn\"/>
                                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                <path
                                                                    d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                                    fill=\"#00A8E8\"></path>
                                                            </svg>
                                                            <span class=\"button-text\">";
                    // line 161
                    echo ($context["button_cart"] ?? null);
                    echo "</span>
                                                        </button>
                                                    ";
                } else {
                    // line 164
                    echo "                                                        ";
                    if ((($context["oct_stock_notifier_status"] ?? null) && ($context["oct_stock_notifier_status"] ?? null))) {
                        // line 165
                        echo "                                                            <button type=\"button\" onclick=\"octStockNotifier('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 165);
                        echo "');\" aria-label=\"Notice\" class=\"button button-outline button-outline-primary br-8 fsz-12 w-100 mb-3\">";
                        echo ($context["button_oct_stock_notifier"] ?? null);
                        echo "</button>
                                                        ";
                    }
                    // line 167
                    echo "                                                    ";
                }
                // line 168
                echo "                                                    <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 168);
                echo "\" />
                                                    <a href=\"";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 169);
                echo "\" class=\"button button-danger br-7 d-inline-flex fsz-12 text-decoration-none\">";
                echo ($context["button_remove"] ?? null);
                echo "</a>
        \t                                    </div>
                                            </td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 178
            echo "                       <div class=\"p-3\">
                            <p class=\"fw-500 dark-text\">";
            // line 179
            echo ($context["text_empty"] ?? null);
            echo "</p>
                            <div class=\"buttons mt-3\">
                                <a href=\"";
            // line 181
            echo ($context["continue"] ?? null);
            echo "\" class=\"button button-primary br-7 d-inline-flex\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
                            </div>
                       </div>
                    ";
        }
        // line 185
        echo "            </div>
            ";
        // line 186
        echo ($context["column_right"] ?? null);
        echo "
        </div>
        ";
        // line 188
        echo ($context["content_bottom"] ?? null);
        echo "
    </main>
</div>
";
        // line 191
        if (($context["remarketing_code"] ?? null)) {
            echo ($context["remarketing_code"] ?? null);
        }
        // line 192
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_deals/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 192,  602 => 191,  596 => 188,  591 => 186,  588 => 185,  579 => 181,  574 => 179,  571 => 178,  564 => 173,  552 => 169,  547 => 168,  544 => 167,  536 => 165,  533 => 164,  527 => 161,  519 => 155,  517 => 154,  513 => 152,  509 => 151,  505 => 149,  499 => 148,  492 => 146,  486 => 145,  482 => 143,  477 => 141,  474 => 140,  471 => 139,  467 => 138,  463 => 137,  460 => 136,  456 => 135,  450 => 132,  446 => 131,  443 => 130,  439 => 129,  436 => 128,  428 => 126,  423 => 124,  417 => 122,  413 => 121,  409 => 120,  405 => 118,  396 => 116,  392 => 115,  388 => 114,  385 => 113,  381 => 111,  372 => 108,  368 => 106,  362 => 105,  358 => 103,  354 => 101,  351 => 100,  347 => 99,  342 => 96,  338 => 95,  334 => 94,  331 => 93,  329 => 92,  326 => 91,  317 => 89,  313 => 88,  309 => 87,  305 => 85,  296 => 83,  292 => 82,  288 => 81,  284 => 79,  275 => 77,  271 => 76,  267 => 75,  263 => 73,  256 => 71,  253 => 70,  248 => 68,  243 => 67,  237 => 65,  234 => 64,  232 => 63,  229 => 62,  225 => 61,  221 => 60,  217 => 58,  210 => 56,  200 => 54,  198 => 53,  195 => 52,  191 => 51,  187 => 50,  183 => 48,  172 => 45,  169 => 44,  165 => 43,  161 => 42,  155 => 38,  153 => 37,  147 => 35,  144 => 34,  141 => 33,  138 => 32,  135 => 31,  132 => 30,  129 => 29,  127 => 28,  123 => 27,  120 => 26,  114 => 23,  111 => 22,  109 => 21,  105 => 20,  99 => 17,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/product/compare.twig", "");
    }
}
