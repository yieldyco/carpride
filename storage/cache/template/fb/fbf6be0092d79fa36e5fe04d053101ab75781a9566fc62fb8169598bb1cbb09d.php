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

/* oct_deals/template/octemplates/blog/oct_blogcategory.twig */
class __TwigTemplate_2e3837b377e493bfb10ef0886fcfce680c9b4de0d112a6a7f70e1db975594098 extends \Twig\Template
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
<div class=\"container-fluid container-xl flex-grow-1\">
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
        echo "\t<main>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 ds-page-title pb-3\">
\t\t\t\t<h1>";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content-top-box\">";
        // line 45
        echo ($context["content_top"] ?? null);
        echo "</div>
\t\t<div class=\"ds-blog-category row g-3\">
\t\t\t";
        // line 47
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t";
        // line 48
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 49
            echo "\t\t\t\t";
            $context["class"] = "col-xl-6";
            // line 50
            echo "\t\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 51
            echo "\t\t\t\t";
            $context["class"] = "col-xl-9";
            // line 52
            echo "\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t";
            $context["class"] = "col-xl-12";
            // line 54
            echo "\t\t\t";
        }
        // line 55
        echo "\t\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t";
        // line 56
        if (($context["articles"] ?? null)) {
            // line 57
            echo "\t\t\t\t\t<div class=\"row g-2 g-md-3 ds-last-news\">
\t\t\t\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 59
                echo "\t\t\t\t\t\t\t<div class=\"ds-last-news-item\">
\t\t\t\t\t\t\t\t<div class=\"content-block d-flex flex-sm-column p-2 p-md-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 61);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 61);
                echo "\" class=\"me-2 me-sm-0\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 62);
                echo "\" class=\"img-fluid w-md-100\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 62);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 62);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 62);
                echo "\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 62)) {
                    echo " loading=\"lazy\"";
                }
                echo " />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-info mt-sm-3 w-100 h-100 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<a class=\"ds-last-news-item-title d-inline-block dark-text fsz-16 fw-500 mb-3\" href=\"";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 65);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 65);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between light-text fsz-12 mt-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-category d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"14\" height=\"13\" viewBox=\"0 0 14 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M11.3077 12.3535H2.69231C0.956308 12.3535 0 11.4401 0 9.78209V2.92494C0 1.26689 0.956308 0.353516 2.69231 0.353516H5.5641C5.70697 0.353516 5.84412 0.407688 5.94464 0.504374L7.94056 2.41066H11.3077C13.0437 2.41066 14 3.32403 14 4.98209V9.78209C14 11.4401 13.0437 12.3535 11.3077 12.3535ZM2.69231 1.38209C1.5601 1.38209 1.07692 1.84357 1.07692 2.92494V9.78209C1.07692 10.8635 1.5601 11.3249 2.69231 11.3249H11.3077C12.4399 11.3249 12.9231 10.8635 12.9231 9.78209V4.98209C12.9231 3.90072 12.4399 3.43923 11.3077 3.43923H7.71795C7.57508 3.43923 7.43793 3.38506 7.33742 3.28837L5.3415 1.38209H2.69231Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 73));
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
                foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo $context["blog_category_name"];
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 75
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 75)) {
                        echo ", ";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-date d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 84);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 92
            if (strip_tags(($context["pagination"] ?? null))) {
                // line 93
                echo "\t\t\t\t\t\t<div class=\"pt-3 pt-md-4\">
\t\t\t\t\t\t\t";
                // line 94
                echo ($context["pagination"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t";
        } else {
            // line 98
            echo "\t\t\t\t\t<div class=\"content-block\">
\t\t\t\t\t\t<p class=\"mb-3 fw-500\">";
            // line 99
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t\t<a href=\"";
            // line 100
            echo ($context["continue"] ?? null);
            echo "\" class=\"button button-primary br-7 d-inline-flex\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 103
        echo "\t\t\t</div>
\t\t\t";
        // line 104
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 106
        echo ($context["content_bottom"] ?? null);
        echo "
\t</main>
</div>
";
        // line 109
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/blog/oct_blogcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 109,  391 => 106,  386 => 104,  383 => 103,  375 => 100,  371 => 99,  368 => 98,  365 => 97,  359 => 94,  356 => 93,  354 => 92,  351 => 91,  330 => 84,  321 => 77,  307 => 76,  303 => 75,  298 => 74,  281 => 73,  268 => 65,  252 => 62,  246 => 61,  242 => 59,  225 => 58,  222 => 57,  220 => 56,  215 => 55,  212 => 54,  209 => 53,  206 => 52,  203 => 51,  200 => 50,  197 => 49,  195 => 48,  191 => 47,  186 => 45,  180 => 42,  175 => 39,  169 => 35,  155 => 34,  152 => 33,  148 => 32,  143 => 30,  139 => 29,  133 => 26,  129 => 24,  126 => 23,  123 => 22,  106 => 21,  98 => 15,  96 => 14,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/blog/oct_blogcategory.twig", "");
    }
}
