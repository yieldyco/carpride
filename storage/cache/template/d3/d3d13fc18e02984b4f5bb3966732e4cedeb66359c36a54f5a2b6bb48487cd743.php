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

/* oct_deals/template/product/category.twig */
class __TwigTemplate_4eb0b7484d82f11d559e06317ed97d1be1332e2c976107836adc2dc0f356ff55 extends \Twig\Template
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
    <div id=\"product-category\" class=\"container-fluid container-xl flex-grow-1\">
    <nav aria-label=\"breadcrumb\">
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
            echo "        <script type=\"application/ld+json\">
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
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                    ";
                } else {
                    // line 24
                    echo "                    {
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
                    echo "                    ";
                }
                // line 34
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ]
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

<div id=\"category-mobile-search-anchor\" class=\"d-xl-none w-100 mb-3\"></div>

        <div class=\"row g-3 ds-category\">

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const DESKTOP_QUERY = window.matchMedia('(min-width: 1200px)'); // xl и шире
                    const colLeft  = document.getElementById('column-left');
                    const mobileAnchor = document.getElementById('category-mobile-search-anchor');
                    if (!colLeft || !mobileAnchor) return;

                    let box = document.querySelector('.ds-category-scoped-search');
                    if (!box) {
                        box = document.createElement('div');
                        box.className = 'content-block p-3 mb-3 ds-category-scoped-search';
                        box.innerHTML =
                            '<div class=\"fw-700 dark-text fsz-14 mb-2\" style=\"letter-spacing:.2px;\">";
        // line 63
        echo ($context["form_search_cat"] ?? null);
        echo "</div>' +
                            '<form action=\"product/search\" method=\"get\" class=\"d-flex gap-2\">' +
                            '<input type=\"hidden\" name=\"route\" value=\"product/search\">' +
                            '<input type=\"hidden\" name=\"category_id\" value=\"";
        // line 66
        echo ($context["category_id"] ?? null);
        echo "\">' +
                            '<input type=\"hidden\" name=\"sub_category\" value=\"false\">' +
                            '<input type=\"text\" name=\"search\" class=\"form-control br-7\" placeholder=\"";
        // line 68
        echo ($context["form_search_cat_i"] ?? null);
        echo "\">' +
                            '<button type=\"submit\" class=\"button button-primary br-7 px-3\">' +
                            '<span class=\"button-text\">";
        // line 70
        echo ((array_key_exists("button_search", $context)) ? (($context["button_search"] ?? null)) : ("Знайти"));
        echo "</span>' +
                            '</button>' +
                            '</form>' +
                            '<div class=\"light-text fsz-11 mt-2\">";
        // line 73
        echo ($context["form_search_cat_f"] ?? null);
        echo "</div>';
                        document.body.appendChild(box);
                    }

                    function placeBox() {
                        if (DESKTOP_QUERY.matches) {
                            // Десктоп: в левую колонку, сверху
                            if (colLeft.firstElementChild !== box) colLeft.prepend(box);
                        } else {
                            // Мобилка: под заголовок/над сортировкой
                            if (mobileAnchor.nextElementSibling !== box) mobileAnchor.after(box);
                        }
                    }

                    placeBox();

                    DESKTOP_QUERY.addEventListener('change', placeBox);
                });
            </script>

            <style>
                .ds-category-scoped-search .form-control { height: 40px; }
                .ds-category-scoped-search .button { height: 40px; }

                @media (max-width: 1199.98px) {
                    #category-mobile-search-anchor + .ds-category-scoped-search { margin-top: .25rem; }
                }
            </style>

            ";
        // line 102
        echo ($context["column_left"] ?? null);
        echo "
            ";
        // line 103
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 104
            echo "                ";
            $context["class"] = "col-xl-6 is-cols";
            // line 105
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 106
            echo "                ";
            $context["class"] = "col-xl-9";
            // line 107
            echo "            ";
        } else {
            // line 108
            echo "                ";
            $context["class"] = "col-xl-12 no-col";
            // line 109
            echo "            ";
        }
        // line 110
        echo "            <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
                ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_desc_position", [], "any", true, true, false, 111) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_desc_position", [], "any", false, false, false, 111) == "top"))) {
            // line 112
            echo "                    ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 113
                echo "                        <div class=\"ds-category-description content-block d-flex flex-column flex-md-row mb-3\">
                            ";
                // line 114
                if (($context["thumb"] ?? null)) {
                    // line 115
                    echo "                                <div class=\"ds-category-description-img\">
                                    <img src=\"";
                    // line 116
                    echo ($context["thumb"] ?? null);
                    echo "\" class=\"d-block mx-auto\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo ($context["cat_image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["cat_image_height"] ?? null);
                    echo "\" />
                                </div>
                            ";
                }
                // line 119
                echo "                            ";
                if (($context["description"] ?? null)) {
                    // line 120
                    echo "                                <div id=\"ds-category-description\"";
                    if (($context["thumb"] ?? null)) {
                        echo " class=\"pt-3 pt-md-0 ps-md-3\"";
                    }
                    echo ">
                                    <div class=\"ds-category-description-text secondary-text fw-300\">
                                        ";
                    // line 122
                    echo ($context["description"] ?? null);
                    echo "
                                        ";
                    // line 123
                    if ((array_key_exists("categories_page", $context) &&  !twig_test_empty(($context["categories_page"] ?? null)))) {
                        // line 124
                        echo "                                            <div class=\"ds-category-categories_page-text mt-3\">
                                                <ul class=\"category-landing-links list-unstyled ps-0\">
                                                ";
                        // line 126
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["categories_page"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 127
                            echo "                                                    ";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 127))) {
                                // line 128
                                echo "                                                    <li class=\"category-landing-links-item\">
                                                        <span class=\"category-landing-links-item-title\">";
                                // line 129
                                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 129)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
                                                        ";
                                // line 130
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 130));
                                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                                    // line 131
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 131);
                                    echo "\" class=\"blue-link d-flex-inline align-items-center\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 131);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 131);
                                    echo "</a>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 133
                                echo "                                                    </li>
                                                    ";
                            }
                            // line 135
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 136
                        echo "                                                </ul>
                                            </div>
                                        ";
                    }
                    // line 139
                    echo "                                    </div>
                                    <!-- if button enabled -->
                                    ";
                    // line 141
                    if ((((twig_length_filter($this->env, ($context["description"] ?? null)) > 700) && (($context["categories"] ?? null) || ($context["products"] ?? null))) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_desc_up", [], "any", true, true, false, 141))) {
                        // line 142
                        echo "                                        <div class=\"mt-3\">
                                            <span class=\"ds-category-description-text-toggle text-decoration-underline fsz-14 fw-400 dark-text\">
                                                ";
                        // line 144
                        echo ($context["oct_expand"] ?? null);
                        echo "
                                                <svg class=\"ms-1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"6\" height=\"4\" viewBox=\"0 0 6 4\" fill=\"none\">
                                                    <path
                                                        d=\"M2.99938 3.85142C2.87814 3.85142 2.75688 3.80534 2.66468 3.71251L0.138767 1.1866C-0.0462558 1.00157 -0.0462558 0.701598 0.138767 0.516575C0.323791 0.331552 0.623765 0.331552 0.808788 0.516575L3 2.70779L5.19121 0.516575C5.37624 0.331552 5.67621 0.331552 5.86123 0.516575C6.04626 0.701598 6.04626 1.00157 5.86123 1.1866L3.33532 3.71251C3.24186 3.80534 3.12063 3.85142 2.99938 3.85142Z\"
                                                        fill=\"#00171F\" />
                                                </svg>
                                            </span>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function () {
                                                    toggleCategoryDescription();
                                                });
                                            </script>
                                        </div>
                                    ";
                    } else {
                        // line 158
                        echo "                                        <style>
                                            .ds-category-description-text {
                                                max-height: none !important;
                                            }
                                        </style>
                                    ";
                    }
                    // line 164
                    echo "                                    <!-- end if -->
                                </div>
                            ";
                }
                // line 167
                echo "                        </div>
                    ";
            }
            // line 169
            echo "                ";
        }
        // line 170
        echo "                ";
        if (($context["categories"] ?? null)) {
            // line 171
            echo "                    <div class=\"ds-subcategories row mb-3 g-2\">
                        ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 173
                echo "                            <div class=\"ds-subcategories-item\">
                                <a href=\"";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 174);
                echo "\" class=\"content-block d-flex flex-column align-items-center p-2 h-100";
                if ( !twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_subcategory_photo", [], "any", false, false, false, 174)) {
                    echo " justify-content-center";
                }
                echo "\">
                                    ";
                // line 175
                if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_subcategory_photo", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "                                        <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 176);
                    echo "\" alt=\"\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 176);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "width", [], "any", false, false, false, 176);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "height", [], "any", false, false, false, 176);
                    echo "\">
                                        <span class=\"ds-subcategories-title dark-text fw-500 fsz-12 lh-sm\">";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 177);
                    echo "</span>
                                    ";
                } else {
                    // line 179
                    echo "                                        <span class=\"ds-subcategories-title dark-text fw-500 fsz-14 align-self-center\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 179);
                    echo "</span>
                                    ";
                }
                // line 181
                echo "                                </a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                    </div>
                ";
        }
        // line 186
        echo "                <!-- Filter button here -->
                ";
        // line 198
        echo "                ";
        if (($context["products"] ?? null)) {
            // line 199
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_view_sort_oder", [], "any", true, true, false, 199) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 199) || (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 199) == "on")))) {
                // line 200
                echo "                        <div class=\"ds-category-sort d-flex justify-content-between content-block mb-3\">
                            <div class=\"ds-category-sort-limit d-flex align-items-center flex-grow-1 justify-content-between justify-content-md-start\">
                                <div class=\"ds-category-sort-title fw-700 dark-text d-none d-md-block flex-grow-1 flex-md-grow-0\">";
                // line 202
                echo ($context["text_sort"] ?? null);
                echo "</div>
                                <select id=\"input-sort\" class=\"ds-category-sort-select form-select fsz-10 br-7 light-text fw-500 me-2\" onchange=\"location = this.value;\" aria-label=\"Sort select\">
                                    ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 205
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 205) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 206
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 206);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 206);
                        echo "</option>
                                        ";
                    } else {
                        // line 208
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 208);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 208);
                        echo "</option>
                                        ";
                    }
                    // line 210
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "                                </select>
                                <select id=\"input-limit\" class=\"ds-category-limit-select form-select fsz-10 br-7 light-text fw-500\" onchange=\"location = this.value;\" aria-label=\"Limit select\">
                                    ";
                // line 213
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 214
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 214) == ($context["limit"] ?? null))) {
                        // line 215
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 215);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 215);
                        echo "</option>
                                        ";
                    } else {
                        // line 217
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 217);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 217);
                        echo "</option>
                                        ";
                    }
                    // line 219
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "                                </select>
                            </div>
                            <div class=\"ds-category-appearance btn-group d-none d-md-flex br-7 align-items-center\">
                                <button type=\"button\" aria-label=\"Grid view\" id=\"grid-view\" class=\"ds-category-appearance-btn br-4 border-0 p-0 active\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 223
                echo ($context["button_grid"] ?? null);
                echo "\" data-bs-original-title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\">
                                    <svg width=\"12\" height=\"13\" viewBox=\"0 0 12 13\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\">
                                        <path
                                            d=\"M1.69231 3.88462C0.758769 3.88462 0 3.12585 0 2.19231C0 1.25877 0.758769 0.5 1.69231 0.5C2.62585 0.5 3.38462 1.25877 3.38462 2.19231C3.38462 3.12585 2.62585 3.88462 1.69231 3.88462ZM1.69231 1.42308C1.26831 1.42308 0.923077 1.76831 0.923077 2.19231C0.923077 2.61631 1.26831 2.96154 1.69231 2.96154C2.11631 2.96154 2.46154 2.61631 2.46154 2.19231C2.46154 1.76831 2.11631 1.42308 1.69231 1.42308ZM6 3.88462C5.06646 3.88462 4.30769 3.12585 4.30769 2.19231C4.30769 1.25877 5.06646 0.5 6 0.5C6.93354 0.5 7.69231 1.25877 7.69231 2.19231C7.69231 3.12585 6.93354 3.88462 6 3.88462ZM6 1.42308C5.576 1.42308 5.23077 1.76831 5.23077 2.19231C5.23077 2.61631 5.576 2.96154 6 2.96154C6.424 2.96154 6.76923 2.61631 6.76923 2.19231C6.76923 1.76831 6.424 1.42308 6 1.42308ZM10.3077 3.88462C9.37415 3.88462 8.61539 3.12585 8.61539 2.19231C8.61539 1.25877 9.37415 0.5 10.3077 0.5C11.2412 0.5 12 1.25877 12 2.19231C12 3.12585 11.2412 3.88462 10.3077 3.88462ZM10.3077 1.42308C9.88369 1.42308 9.53846 1.76831 9.53846 2.19231C9.53846 2.61631 9.88369 2.96154 10.3077 2.96154C10.7317 2.96154 11.0769 2.61631 11.0769 2.19231C11.0769 1.76831 10.7317 1.42308 10.3077 1.42308ZM1.69231 8.19231C0.758769 8.19231 0 7.43354 0 6.5C0 5.56646 0.758769 4.80769 1.69231 4.80769C2.62585 4.80769 3.38462 5.56646 3.38462 6.5C3.38462 7.43354 2.62585 8.19231 1.69231 8.19231ZM1.69231 5.73077C1.26831 5.73077 0.923077 6.076 0.923077 6.5C0.923077 6.924 1.26831 7.26923 1.69231 7.26923C2.11631 7.26923 2.46154 6.924 2.46154 6.5C2.46154 6.076 2.11631 5.73077 1.69231 5.73077ZM6 8.19231C5.06646 8.19231 4.30769 7.43354 4.30769 6.5C4.30769 5.56646 5.06646 4.80769 6 4.80769C6.93354 4.80769 7.69231 5.56646 7.69231 6.5C7.69231 7.43354 6.93354 8.19231 6 8.19231ZM6 5.73077C5.576 5.73077 5.23077 6.076 5.23077 6.5C5.23077 6.924 5.576 7.26923 6 7.26923C6.424 7.26923 6.76923 6.924 6.76923 6.5C6.76923 6.076 6.424 5.73077 6 5.73077ZM10.3077 8.19231C9.37415 8.19231 8.61539 7.43354 8.61539 6.5C8.61539 5.56646 9.37415 4.80769 10.3077 4.80769C11.2412 4.80769 12 5.56646 12 6.5C12 7.43354 11.2412 8.19231 10.3077 8.19231ZM10.3077 5.73077C9.88369 5.73077 9.53846 6.076 9.53846 6.5C9.53846 6.924 9.88369 7.26923 10.3077 7.26923C10.7317 7.26923 11.0769 6.924 11.0769 6.5C11.0769 6.076 10.7317 5.73077 10.3077 5.73077ZM1.69231 12.5C0.758769 12.5 0 11.7412 0 10.8077C0 9.87415 0.758769 9.11539 1.69231 9.11539C2.62585 9.11539 3.38462 9.87415 3.38462 10.8077C3.38462 11.7412 2.62585 12.5 1.69231 12.5ZM1.69231 10.0385C1.26831 10.0385 0.923077 10.3837 0.923077 10.8077C0.923077 11.2317 1.26831 11.5769 1.69231 11.5769C2.11631 11.5769 2.46154 11.2317 2.46154 10.8077C2.46154 10.3837 2.11631 10.0385 1.69231 10.0385ZM6 12.5C5.06646 12.5 4.30769 11.7412 4.30769 10.8077C4.30769 9.87415 5.06646 9.11539 6 9.11539C6.93354 9.11539 7.69231 9.87415 7.69231 10.8077C7.69231 11.7412 6.93354 12.5 6 12.5ZM6 10.0385C5.576 10.0385 5.23077 10.3837 5.23077 10.8077C5.23077 11.2317 5.576 11.5769 6 11.5769C6.424 11.5769 6.76923 11.2317 6.76923 10.8077C6.76923 10.3837 6.424 10.0385 6 10.0385ZM10.3077 12.5C9.37415 12.5 8.61539 11.7412 8.61539 10.8077C8.61539 9.87415 9.37415 9.11539 10.3077 9.11539C11.2412 9.11539 12 9.87415 12 10.8077C12 11.7412 11.2412 12.5 10.3077 12.5ZM10.3077 10.0385C9.88369 10.0385 9.53846 10.3837 9.53846 10.8077C9.53846 11.2317 9.88369 11.5769 10.3077 11.5769C10.7317 11.5769 11.0769 11.2317 11.0769 10.8077C11.0769 10.3837 10.7317 10.0385 10.3077 10.0385Z\"
                                            fill=\"#9CA3AF\" />
                                    </svg>
                                </button>
                                <button type=\"button\" aria-label=\"List view\" id=\"list-view\" class=\"ds-category-appearance-btn br-4 border-0 p-0\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 231
                echo ($context["button_list"] ?? null);
                echo "\" data-bs-original-title=\"";
                echo ($context["button_list"] ?? null);
                echo "\">
                                    <svg width=\"12\" height=\"11\" viewBox=\"0 0 12 11\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\">
                                        <path
                                            d=\"M4.30769 1.5C4.30769 1.24523 4.51446 1.03846 4.76923 1.03846H11.5385C11.7932 1.03846 12 1.24523 12 1.5C12 1.75477 11.7932 1.96154 11.5385 1.96154H4.76923C4.51446 1.96154 4.30769 1.75477 4.30769 1.5ZM11.5385 5.03846H4.76923C4.51446 5.03846 4.30769 5.24523 4.30769 5.5C4.30769 5.75477 4.51446 5.96154 4.76923 5.96154H11.5385C11.7932 5.96154 12 5.75477 12 5.5C12 5.24523 11.7932 5.03846 11.5385 5.03846ZM11.5385 9.03846H4.76923C4.51446 9.03846 4.30769 9.24523 4.30769 9.5C4.30769 9.75477 4.51446 9.96154 4.76923 9.96154H11.5385C11.7932 9.96154 12 9.75477 12 9.5C12 9.24523 11.7932 9.03846 11.5385 9.03846ZM2.76923 1.5C2.76923 2.26369 2.14831 2.88462 1.38462 2.88462C0.620923 2.88462 0 2.26369 0 1.5C0 0.73631 0.620923 0.115387 1.38462 0.115387C2.14831 0.115387 2.76923 0.73631 2.76923 1.5ZM1.84615 1.5C1.84615 1.24523 1.63938 1.03846 1.38462 1.03846C1.12985 1.03846 0.923077 1.24523 0.923077 1.5C0.923077 1.75477 1.12985 1.96154 1.38462 1.96154C1.63938 1.96154 1.84615 1.75477 1.84615 1.5ZM2.76923 5.5C2.76923 6.26369 2.14831 6.88462 1.38462 6.88462C0.620923 6.88462 0 6.26369 0 5.5C0 4.73631 0.620923 4.11539 1.38462 4.11539C2.14831 4.11539 2.76923 4.73631 2.76923 5.5ZM1.84615 5.5C1.84615 5.24523 1.63938 5.03846 1.38462 5.03846C1.12985 5.03846 0.923077 5.24523 0.923077 5.5C0.923077 5.75477 1.12985 5.96154 1.38462 5.96154C1.63938 5.96154 1.84615 5.75477 1.84615 5.5ZM2.76923 9.5C2.76923 10.2637 2.14831 10.8846 1.38462 10.8846C0.620923 10.8846 0 10.2637 0 9.5C0 8.73631 0.620923 8.11539 1.38462 8.11539C2.14831 8.11539 2.76923 8.73631 2.76923 9.5ZM1.84615 9.5C1.84615 9.24523 1.63938 9.03846 1.38462 9.03846C1.12985 9.03846 0.923077 9.24523 0.923077 9.5C0.923077 9.75477 1.12985 9.96154 1.38462 9.96154C1.63938 9.96154 1.84615 9.75477 1.84615 9.5Z\"
                                            fill=\"#9CA3AF\" />
                                    </svg>
                                </button>
                                <button type=\"button\" aria-label=\"Price view\" id=\"price-view\" class=\"ds-category-appearance-btn br-4 border-0 p-0\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 239
                echo ($context["oct_pricelist"] ?? null);
                echo "\" data-bs-original-title=\"";
                echo ($context["oct_pricelist"] ?? null);
                echo "\">
                                    <svg width=\"12\" height=\"9\" viewBox=\"0 0 12 9\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\">
                                        <path
                                            d=\"M0 0.807699C0 0.55293 0.206769 0.346161 0.461538 0.346161H11.5385C11.7932 0.346161 12 0.55293 12 0.807699C12 1.06247 11.7932 1.26924 11.5385 1.26924H0.461538C0.206769 1.26924 0 1.06247 0 0.807699ZM11.5385 4.03847H0.461538C0.206769 4.03847 0 4.24524 0 4.50001C0 4.75478 0.206769 4.96155 0.461538 4.96155H11.5385C11.7932 4.96155 12 4.75478 12 4.50001C12 4.24524 11.7932 4.03847 11.5385 4.03847ZM11.5385 7.73078H0.461538C0.206769 7.73078 0 7.93755 0 8.19232C0 8.44708 0.206769 8.65385 0.461538 8.65385H11.5385C11.7932 8.65385 12 8.44708 12 8.19232C12 7.93755 11.7932 7.73078 11.5385 7.73078Z\"
                                            fill=\"#9CA3AF\" />
                                    </svg>
                                </button>
                            </div>
                            <script>
                                window.addEventListener('DOMContentLoaded', () => {
                                    switchCategoryDisplay();
                                });
                            </script>
                        </div>
                    ";
            }
            // line 255
            echo "                    <div class=\"row g-2 g-md-3 ds-module ds-category-products\"
                        ";
            // line 256
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 256) == "")) {
                echo " data-type=\"split\"";
            }
            // line 257
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 257) == "width-100")) {
                echo " data-type=\"width100\"";
            }
            // line 258
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 258) == "width-50")) {
                echo " data-type=\"width50\"";
            }
            // line 259
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 259) == "width-minimal")) {
                echo " data-type=\"minimal\"";
            }
            echo ">
                        ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 261
                echo "                            <div class=\"ds-module-item product-layout product-grid col-sm-6 col-md-4 col-lg-3 ds-module-col\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 261);
                echo "\">
                                <div class=\"content-block h-100 d-flex flex-column position-relative";
                // line 262
                if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 262)) {
                    echo " ds-no-stock";
                }
                echo "\">
                                    <div class=\"ds-module-img d-flex flex-column\">
                                        <div class=\"ds-module-stickers d-flex flex-wrap\">
                                            ";
                // line 265
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 265))) {
                    // line 266
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 266));
                    foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                        // line 267
                        echo "                                                    ";
                        if (( !twig_test_empty($context["oct_sticker"]) &&  !twig_test_iterable($context["oct_sticker"]))) {
                            // line 268
                            echo "                                                        <div class=\"ds-module-sticker br-12 fw-500 ds-module-sticker-";
                            echo $context["key"];
                            echo "\">
                                                            ";
                            // line 269
                            echo $context["oct_sticker"];
                            echo "
                                                        </div>
                                                    ";
                        }
                        // line 272
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 273
                    echo "                                            ";
                }
                // line 274
                echo "                                        </div>
                                        <div class=\"ds-module-img-box position-relative\">
                                            <div class=\"ds-module-buttons position-absolute d-flex flex-column br-8\">
                                                ";
                // line 277
                if (($context["oct_popup_view_status"] ?? null)) {
                    // line 278
                    echo "                                                <button type=\"button\" aria-label=\"Quick view\" class=\"ds-module-button ds-module-button-viewed align-self-stretch p-0\" title=\"";
                    echo ($context["oct_popup_view"] ?? null);
                    echo "\" onclick=\"octPopUpView('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 278);
                    echo "')\">
                                                    <svg width=\"15\" height=\"11\" viewBox=\"0 0 15 11\" fill=\"none\"
                                                        xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path
                                                            d=\"M14.6037 4.17854C13.5937 2.61796 11.3268 0 7.5 0C3.67322 0 1.40629 2.61796 0.396332 4.17854C-0.132111 4.99325 -0.132111 6.00604 0.396332 6.82146C1.40629 8.38204 3.67322 11 7.5 11C11.3268 11 13.5937 8.38204 14.6037 6.82146C15.1321 6.00604 15.1321 4.99396 14.6037 4.17854ZM13.6136 6.275C12.729 7.64184 10.7576 9.93548 7.5 9.93548C4.24243 9.93548 2.27096 7.64255 1.38638 6.275C1.07716 5.79667 1.07716 5.20263 1.38638 4.72431C2.27096 3.35747 4.24243 1.06382 7.5 1.06382C10.7576 1.06382 12.729 3.35676 13.6136 4.72431C13.9236 5.20334 13.9236 5.79667 13.6136 6.275ZM7.5 2.48387C5.69699 2.48387 4.23089 3.83723 4.23089 5.5C4.23089 7.16277 5.69699 8.51613 7.5 8.51613C9.30301 8.51613 10.7691 7.16277 10.7691 5.5C10.7691 3.83723 9.30301 2.48387 7.5 2.48387ZM7.5 7.45161C6.33312 7.45161 5.38469 6.57658 5.38469 5.5C5.38469 4.42342 6.33312 3.54839 7.5 3.54839C8.66688 3.54839 9.61531 4.42342 9.61531 5.5C9.61531 6.57658 8.66688 7.45161 7.5 7.45161Z\"
                                                            fill=\"#00171F\" />
                                                    </svg>
                                                </button>
                                                ";
                }
                // line 287
                echo "                                                <button type=\"button\" aria-label=\"Wishlist\" class=\"ds-module-button ds-module-button-wishlist align-self-stretch p-0 ds-wishlist-btn\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 287);
                echo "');\">
                                                    <svg width=\"15\" height=\"13\" viewBox=\"0 0 15 13\" fill=\"none\"
                                                        xmlns=\"http://www.w3.org/2000/svg\">
                                                        <g>
                                                            <path
                                                                d=\"M7.49998 12.5C7.42931 12.5 7.35862 12.4853 7.29262 12.4553C7.07462 12.3559 1.94398 9.97662 1.12132 5.73929C0.803317 4.09996 1.12265 2.50062 1.97532 1.46195C2.66532 0.620615 3.65729 0.173271 4.84462 0.167271C4.85062 0.167271 4.85662 0.167271 4.86196 0.167271C6.21662 0.167271 7.04266 0.938623 7.49933 1.59529C7.95799 0.935957 8.79062 0.161271 10.1539 0.167271C11.342 0.173271 12.3346 0.620615 13.0253 1.46195C13.8766 2.49995 14.1953 4.09928 13.8766 5.73994C13.0553 9.97728 7.92395 12.3573 7.70595 12.456C7.64129 12.4853 7.57065 12.5 7.49998 12.5ZM4.86131 1.16662C4.85731 1.16662 4.854 1.16662 4.85 1.16662C3.95799 1.17062 3.25134 1.48327 2.74868 2.09594C2.08268 2.90727 1.842 4.19795 2.10333 5.54862C2.74 8.83128 6.56198 10.9646 7.49998 11.4433C8.43798 10.9646 12.26 8.83128 12.896 5.54862C13.1586 4.19728 12.918 2.90661 12.2533 2.09594C11.7506 1.48394 11.044 1.17194 10.15 1.16727C10.146 1.16727 10.142 1.16727 10.1387 1.16727C8.55732 1.16727 7.99669 2.75196 7.97402 2.81929C7.90469 3.02129 7.71396 3.1586 7.50063 3.1586C7.4993 3.1586 7.49861 3.1586 7.49794 3.1586C7.28394 3.15794 7.09329 3.02128 7.02529 2.81795C7.00329 2.75128 6.44197 1.16662 4.86131 1.16662Z\"
                                                                fill=\"#00171F\" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <button type=\"button\" aria-label=\"Compare\" class=\"ds-module-button ds-module-button-compare align-self-stretch p-0 ds-compare-btn\" title=\"";
                // line 297
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 297);
                echo "');\">
                                                    <svg width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\"
                                                        xmlns=\"http://www.w3.org/2000/svg\">
                                                        <g>
                                                            <path
                                                                d=\"M14 7.0001V9.0001C14 10.3788 12.878 11.5001 11.5 11.5001H2.70736L3.854 12.6467C4.04934 12.8421 4.04934 13.1588 3.854 13.3541C3.75667 13.4514 3.62865 13.5007 3.50065 13.5007C3.37265 13.5007 3.24463 13.4521 3.1473 13.3541L1.1473 11.3541C1.1013 11.3081 1.06472 11.2528 1.03939 11.1915C0.988721 11.0695 0.988721 10.9315 1.03939 10.8095C1.06472 10.7482 1.1013 10.6927 1.1473 10.6467L3.1473 8.64674C3.34263 8.45141 3.65932 8.45141 3.85466 8.64674C4.04999 8.84208 4.04999 9.15877 3.85466 9.3541L2.70801 10.5007H11.5C12.3267 10.5007 13 9.82808 13 9.00075V7.00075C13 6.72475 13.224 6.50075 13.5 6.50075C13.776 6.50075 14 6.7241 14 7.0001ZM1.5 7.5001C1.776 7.5001 2 7.2761 2 7.0001V5.0001C2 4.17276 2.67333 3.5001 3.5 3.5001H12.2926L11.146 4.64674C10.9507 4.84208 10.9507 5.15877 11.146 5.3541C11.2433 5.45143 11.3713 5.50075 11.4993 5.50075C11.6273 5.50075 11.7554 5.4521 11.8527 5.3541L13.8527 3.3541C13.8987 3.3081 13.9353 3.25284 13.9606 3.1915C14.0113 3.0695 14.0113 2.9315 13.9606 2.8095C13.9353 2.74817 13.8987 2.69274 13.8527 2.64674L11.8527 0.646744C11.6574 0.451411 11.3407 0.451411 11.1453 0.646744C10.95 0.842077 10.95 1.15877 11.1453 1.3541L12.292 2.50075H3.5C2.122 2.50075 1 3.62208 1 5.00075V7.00075C1 7.27608 1.224 7.5001 1.5 7.5001Z\"
                                                                fill=\"#00171F\" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                            <a href=\"";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 308);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 308);
                echo "\">
                                                <img src=\"";
                // line 309
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 309);
                echo "\" class=\"d-block mx-auto\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 309);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 309);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 309);
                echo "\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 309)) {
                    echo " loading=\"lazy\"";
                }
                echo "/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"ds-module-caption d-flex flex-column h-100\">
                                        <div class=\"ds-category-item-info\">
                                            <a href=\"";
                // line 315
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 315);
                echo "\" class=\"ds-module-title fw-500 dark-text\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 315);
                echo "</a>
                                            ";
                // line 316
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 316))) {
                    // line 317
                    echo "                                                <div class=\"ds-module-stickers ds-module-sticker-images d-flex align-items-center\">
                                                    ";
                    // line 318
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 318));
                    foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                        // line 319
                        echo "                                                        ";
                        if (( !twig_test_empty($context["oct_sticker"]) && twig_test_iterable($context["oct_sticker"]))) {
                            // line 320
                            echo "                                                                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 320);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 320);
                            echo "\" data-bs-html=\"true\" data-bs-placement=\"top\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 320);
                            echo "\" data-bs-content=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 320);
                            echo "\" width=\"20\" height=\"20\"/>
                                                        ";
                        }
                        // line 322
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 323
                    echo "                                                </div>
                                            ";
                }
                // line 325
                echo "                                            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 325))) {
                    // line 326
                    echo "                                                <div class=\"ds-module-code light-text\">";
                    echo ($context["oct_view_model_cat"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 326);
                    echo "</div>
                                            ";
                }
                // line 328
                echo "                                            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 328)) {
                    // line 329
                    echo "                                                <div class=\"ds-module-stock green-text\">";
                    echo ($context["oct_product_stock"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 331
                echo "                                        </div>
                                        <div class=\"ds-category-item-rating mt-auto\">
                                            ";
                // line 333
                if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 333) === false)) {
                    // line 334
                    echo "                                                <div class=\"ds-module-rating d-flex align-items-center\">
                                                    <div class=\"ds-module-rating-stars d-flex align-items-center me-2\">
                                                        ";
                    // line 336
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 337
                        echo "                                                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 337) < $context["i"])) {
                            // line 338
                            echo "                                                                <span class=\"ds-module-rating-star\"></span>
                                                            ";
                        } else {
                            // line 340
                            echo "                                                                <span class=\"ds-module-rating-star ds-module-rating-star-is\"></span>
                                                            ";
                        }
                        // line 342
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 343
                    echo "                                                    </div>
                                                    <div class=\"ds-module-reviews d-flex align-items-center\">
                                                        <svg width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <g>
                                                                <path
                                                                    d=\"M1.88345 11.5383C1.82835 11.5383 1.77318 11.5276 1.72036 11.506C1.5613 11.4401 1.45741 11.2844 1.45741 11.1123V2.5916C1.45741 1.21806 2.21405 0.461426 3.58759 0.461426H10.4042C11.7777 0.461426 12.5343 1.21806 12.5343 2.5916V7.70403C12.5343 9.07757 11.7777 9.83421 10.4042 9.83421H3.76427L2.18508 11.4134C2.10329 11.4952 1.99422 11.5383 1.88345 11.5383ZM3.58759 1.3135C2.69178 1.3135 2.30948 1.69579 2.30948 2.5916V10.0836L3.28651 9.10653C3.3666 9.02644 3.47455 8.98158 3.58759 8.98158H10.4042C11.3 8.98158 11.6823 8.59929 11.6823 7.70347V2.59105C11.6823 1.69524 11.3 1.31294 10.4042 1.31294H3.58759V1.3135ZM9.6941 4.01172C9.6941 3.77655 9.50323 3.58569 9.26806 3.58569H4.72369C4.48851 3.58569 4.29765 3.77655 4.29765 4.01172C4.29765 4.24689 4.48851 4.43776 4.72369 4.43776H9.26806C9.50323 4.43776 9.6941 4.24689 9.6941 4.01172ZM7.98996 6.28391C7.98996 6.04874 7.79909 5.85788 7.56392 5.85788H4.72369C4.48851 5.85788 4.29765 6.04874 4.29765 6.28391C4.29765 6.51908 4.48851 6.70995 4.72369 6.70995H7.56392C7.79909 6.70995 7.98996 6.51908 7.98996 6.28391Z\"
                                                                    fill=\"#9CA3AF\" />
                                                            </g>
                                                        </svg>
                                                        <span class=\"dark-text fsz-10\">";
                    // line 352
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 352);
                    echo "</span>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 356
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 356)) {
                    // line 357
                    echo "                                                <div class=\"ds-module-price\">
                                                    ";
                    // line 358
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 358)) {
                        // line 359
                        echo "                                                    <div class=\"price-tax fw-300 fsz-12 light-text\">
                                                        ";
                        // line 360
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 360);
                        echo "
                                                    </div>
                                                    ";
                    }
                    // line 363
                    echo "                                                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 363)) {
                        // line 364
                        echo "                                                        <div class=\"ds-price-new fsz-20 fw-700 dark-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 364);
                        echo "</div>
                                                    ";
                    } else {
                        // line 366
                        echo "                                                        <div class=\"d-flex align-items-center\">
                                                            <div class=\"ds-price-old fsz-12 light-text text-decoration-line-through fw-500\">";
                        // line 367
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 367);
                        echo "</div>
                                                            ";
                        // line 368
                        if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 368))) {
                            // line 369
                            echo "                                                                <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 369);
                            echo "</div>
                                                            ";
                        }
                        // line 371
                        echo "                                                        </div>
                                                        <div class=\"ds-price-new fsz-20 fw-700 red-text\">";
                        // line 372
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 372);
                        echo "</div>
                                                    ";
                    }
                    // line 374
                    echo "                                                </div>
                                            ";
                }
                // line 376
                echo "                                        </div>
                                        <div class=\"ds-module-cart d-flex align-items-center justify-content-between";
                // line 377
                if ( !twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 377)) {
                    echo " position-relative";
                }
                echo "\">
                                            ";
                // line 378
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 378)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 378))) {
                    // line 379
                    echo "                                                ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_view_quantity", [], "any", true, true, false, 379) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 379)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 379)))) {
                        // line 380
                        echo "                                                    <div class=\"ds-module-quantity d-flex align-items-center justify-content-center br-8\">
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
                        // line 390
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 390)) {
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 390);
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
                                                    <button type=\"button\" aria-label=\"To cart\" class=\"button button-outline button-outline-primary br-8 fsz-12 ds-module-cart-btn\">
                                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <path
                                                                d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                                fill=\"#00A8E8\" />
                                                        </svg>
                                                        <span class=\"button-text\">";
                        // line 408
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 408) &&  !twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 408))) ? (twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 408)) : (($context["button_cart"] ?? null)));
                        echo "</span>
                                                    </button>
                                                ";
                    } else {
                        // line 411
                        echo "                                                    <button type=\"button\" aria-label=\"To cart\" class=\"button button-outline button-outline-primary br-8 fsz-12 ds-category-cart-btn ms-0 position-absolute bottom-0 end-0\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 411);
                        echo "', 1, 0, this);\">
                                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <path
                                                                d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                                fill=\"#00A8E8\" />
                                                        </svg>
                                                        <span class=\"button-text\">";
                        // line 417
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 417) &&  !twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 417))) ? (twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 417)) : (($context["button_cart"] ?? null)));
                        echo "</span>
                                                    </button>
                                                ";
                    }
                    // line 420
                    echo "                                            ";
                } else {
                    // line 421
                    echo "                                                ";
                    if ((($context["oct_stock_notifier_status"] ?? null) && ($context["oct_stock_notifier_status"] ?? null))) {
                        // line 422
                        echo "                                                    <button type=\"button\" onclick=\"octStockNotifier('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 422);
                        echo "');\" aria-label=\"Notice\" class=\"button button-outline button-outline-primary br-8 fsz-12 w-100\">";
                        echo ($context["button_oct_stock_notifier"] ?? null);
                        echo "</button>
                                                ";
                    }
                    // line 424
                    echo "                                            ";
                }
                // line 425
                echo "                                            <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 425);
                echo "\" />
                                        </div>
                                    </div>
                                    ";
                // line 428
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", true, true, false, 428) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 428))) {
                    // line 429
                    echo "                                        <div class=\"ds-module-attributes fsz-12 dark-text d-none d-md-block\">
                                            ";
                    // line 430
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 430));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 431
                        echo "                                            <div class=\"ds-module-attributes-item d-flex\">
                                                <span class=\"light-text\">";
                        // line 432
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 432);
                        echo ":</span> <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 432);
                        echo "</span>
                                            </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 435
                    echo "                                        </div>
                                    ";
                }
                // line 437
                echo "                                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 440
            echo "                    </div>
                    ";
            // line 441
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_show_more", [], "any", true, true, false, 441) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_show_more", [], "any", false, false, false, 441)) && ($context["pagination"] ?? null))) {
                // line 442
                echo "                        <div class=\"ds-module-showmore d-flex justify-content-center pt-3 oct-load-more\">
                            <button class=\"button button-primary br-7 oct-load-more-button\">
                                <svg width=\"21\" height=\"21\" viewBox=\"0 0 21 21\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\">
                                    <g>
                                        <path
                                            d=\"M18.5717 11.2539C18.1234 15.3722 14.6533 18.478 10.5 18.478C7.66917 18.478 5.08667 17.0022 3.625 14.6747V17.0197C3.625 17.3647 3.345 17.6447 3 17.6447C2.655 17.6447 2.375 17.3647 2.375 17.0197V12.853C2.375 12.508 2.655 12.228 3 12.228H7.16667C7.51167 12.228 7.79167 12.508 7.79167 12.853C7.79167 13.198 7.51167 13.478 7.16667 13.478H4.3916C5.54993 15.7497 7.8975 17.228 10.5 17.228C14.0142 17.228 16.9492 14.6013 17.3292 11.1188C17.3659 10.7746 17.6775 10.5288 18.0175 10.5646C18.3617 10.6021 18.6084 10.9106 18.5717 11.2539ZM18 3.06136C17.655 3.06136 17.375 3.34136 17.375 3.68636V6.03133C15.9133 3.70383 13.3308 2.22803 10.5 2.22803C6.3475 2.22803 2.87747 5.33382 2.4283 9.45215C2.3908 9.79548 2.63836 10.1039 2.98169 10.1414C3.00419 10.1439 3.02755 10.1447 3.05005 10.1447C3.36505 10.1447 3.6358 9.90724 3.66996 9.58724C4.04996 6.10474 6.98585 3.47803 10.4992 3.47803C13.1025 3.47803 15.4493 4.95636 16.6076 7.22803H13.8333C13.4883 7.22803 13.2083 7.50803 13.2083 7.85303C13.2083 8.19803 13.4883 8.47803 13.8333 8.47803H18C18.345 8.47803 18.625 8.19803 18.625 7.85303V3.68636C18.625 3.34136 18.345 3.06136 18 3.06136Z\"
                                            fill=\"#FFFFFF\" />
                                    </g>
                                </svg>
                                <span class=\"button-text\">";
                // line 452
                echo ($context["oct_show_more"] ?? null);
                echo "</span>
                            </button>
                        </div>
                        ";
                // line 455
                echo ($context["pagination"] ?? null);
                echo "
                        <script>
                            window.addEventListener('DOMContentLoaded', () => {
                                let scShowMoreBtn = document.querySelector('.oct-load-more-button');
                                octCheckPagination();

                                scShowMoreBtn.addEventListener('click', () => {
                                    octLoadMore(0);
                                });

                                ";
                // line 465
                if ((array_key_exists("oct_infinite_scroll_status", $context) && ($context["oct_infinite_scroll_status"] ?? null))) {
                    // line 466
                    echo "
                                let hasClicked = false;

                                const observerCallback = entries => {
                                    entries.forEach(entry => {
                                    if (entry.isIntersecting && !hasClicked) {
                                        hasClicked = true;
                                        scShowMoreBtn.click();
                                    } else if (!entry.isIntersecting) {
                                        hasClicked = false;
                                    }
                                    });
                                };

                                const observerOptions = {
                                    root: null,
                                    rootMargin: '0px',
                                    threshold: 0.5
                                };
                                
                                const observer = new IntersectionObserver(observerCallback, observerOptions);
                                observer.observe(scShowMoreBtn);

                                ";
                }
                // line 490
                echo "                            });
                        </script>
                    ";
            } else {
                // line 493
                echo "                        ";
                echo ($context["pagination"] ?? null);
                echo "
                    ";
            }
            // line 495
            echo "                ";
        } else {
            // line 496
            echo "                    <div class=\"content-block\">
                        <p class=\"fw-500 dark-text\">";
            // line 497
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        <a href=\"";
            // line 498
            echo ($context["continue"] ?? null);
            echo "\" class=\"button button-primary mt-3 br-7 d-inline-flex\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
                    </div>
                ";
        }
        // line 501
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_desc_position", [], "any", true, true, false, 501) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_desc_position", [], "any", false, false, false, 501) == "bottom"))) {
            // line 502
            echo "                    ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 503
                echo "                        <div class=\"ds-category-description content-block d-flex flex-column flex-md-row";
                if ( !($context["pagination"] ?? null)) {
                    echo " mt-3";
                }
                echo "\">
                            ";
                // line 504
                if (($context["thumb"] ?? null)) {
                    // line 505
                    echo "                                <div class=\"ds-category-description-img\">
                                    <img src=\"";
                    // line 506
                    echo ($context["thumb"] ?? null);
                    echo "\" class=\"d-block mx-auto\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo ($context["cat_image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["cat_image_height"] ?? null);
                    echo "\" loading=\"lazy\" />
                                </div>
                            ";
                }
                // line 509
                echo "                            ";
                if (($context["description"] ?? null)) {
                    // line 510
                    echo "                                <div id=\"ds-category-description\"";
                    if (($context["thumb"] ?? null)) {
                        echo " class=\"pt-3 pt-md-0 ps-md-3\"";
                    }
                    echo ">
                                    <div class=\"ds-category-description-text secondary-text fw-300\">
                                        ";
                    // line 512
                    echo ($context["description"] ?? null);
                    echo "
                                        ";
                    // line 513
                    if ((array_key_exists("categories_page", $context) &&  !twig_test_empty(($context["categories_page"] ?? null)))) {
                        // line 514
                        echo "                                            <div class=\"ds-category-categories_page-text mt-3\">
                                                <ul class=\"category-landing-links list-unstyled ps-0\">
                                                ";
                        // line 516
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["categories_page"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 517
                            echo "                                                    ";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 517))) {
                                // line 518
                                echo "                                                    <li class=\"category-landing-links-item\">
                                                        <span class=\"category-landing-links-item-title\">";
                                // line 519
                                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 519)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
                                                        ";
                                // line 520
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 520));
                                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                                    // line 521
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 521);
                                    echo "\" class=\"blue-link d-flex-inline align-items-center\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 521);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 521);
                                    echo "</a>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 523
                                echo "                                                    </li>
                                                    ";
                            }
                            // line 525
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 526
                        echo "                                                </ul>
                                            </div>
                                        ";
                    }
                    // line 529
                    echo "                                    </div>
                                    <!-- if button enabled -->
                                    ";
                    // line 531
                    if ((((twig_length_filter($this->env, ($context["description"] ?? null)) > 700) && (($context["categories"] ?? null) || ($context["products"] ?? null))) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "category_desc_up", [], "any", true, true, false, 531))) {
                        // line 532
                        echo "                                        <div class=\"mt-3\">
                                            <span class=\"ds-category-description-text-toggle text-decoration-underline fsz-14 fw-400 dark-text\">
                                                ";
                        // line 534
                        echo ($context["oct_expand"] ?? null);
                        echo "
                                                <svg class=\"ms-1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"6\" height=\"4\" viewBox=\"0 0 6 4\" fill=\"none\">
                                                    <path
                                                        d=\"M2.99938 3.85142C2.87814 3.85142 2.75688 3.80534 2.66468 3.71251L0.138767 1.1866C-0.0462558 1.00157 -0.0462558 0.701598 0.138767 0.516575C0.323791 0.331552 0.623765 0.331552 0.808788 0.516575L3 2.70779L5.19121 0.516575C5.37624 0.331552 5.67621 0.331552 5.86123 0.516575C6.04626 0.701598 6.04626 1.00157 5.86123 1.1866L3.33532 3.71251C3.24186 3.80534 3.12063 3.85142 2.99938 3.85142Z\"
                                                        fill=\"#00171F\" />
                                                </svg>
                                            </span>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function () {
                                                    toggleCategoryDescription();
                                                });
                                            </script>
                                        </div>
                                    ";
                    } else {
                        // line 548
                        echo "                                        <style>
                                            .ds-category-description-text {
                                                max-height: none !important;
                                            }
                                        </style>
                                    ";
                    }
                    // line 554
                    echo "                                    <!-- end if -->
                                </div>
                            ";
                }
                // line 557
                echo "                        </div>
 
      <!-- /*hand_links_fv-all.2.4*/ -->
      ";
                // line 560
                if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["hand_links_fv"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["hand_links_fv_js"] ?? null) : null)) {
                    // line 561
                    echo "        <script src=\"";
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["hand_links_fv"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["hand_links_fv_js"] ?? null) : null);
                    echo "\"></script>
      ";
                }
                // line 563
                echo "      ";
                $context["layout_hl"] = "top";
                // line 564
                echo "      ";
                if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["hand_links_fv"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["layout_hl"] ?? null)] ?? null) : null)) {
                    // line 565
                    echo "        ";
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["hand_links_fv"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["layout_hl"] ?? null)] ?? null) : null);
                    echo "
      ";
                }
                // line 566
                echo " 
      <!-- /*end hand_links_fv*/ -->
\t\t\t
                    ";
            }
            // line 570
            echo "                ";
        }
        // line 571
        echo "            </div>
            ";
        // line 572
        echo ($context["column_right"] ?? null);
        echo "
        </div>
        ";
        // line 574
        echo ($context["content_bottom"] ?? null);
        echo "
    </main>
</div>
";
        // line 577
        if (($context["remarketing_code"] ?? null)) {
            echo ($context["remarketing_code"] ?? null);
        }
        // line 578
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_deals/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1371 => 578,  1367 => 577,  1361 => 574,  1356 => 572,  1353 => 571,  1350 => 570,  1344 => 566,  1338 => 565,  1335 => 564,  1332 => 563,  1326 => 561,  1324 => 560,  1319 => 557,  1314 => 554,  1306 => 548,  1289 => 534,  1285 => 532,  1283 => 531,  1279 => 529,  1274 => 526,  1268 => 525,  1264 => 523,  1251 => 521,  1247 => 520,  1243 => 519,  1240 => 518,  1237 => 517,  1233 => 516,  1229 => 514,  1227 => 513,  1223 => 512,  1215 => 510,  1212 => 509,  1198 => 506,  1195 => 505,  1193 => 504,  1186 => 503,  1183 => 502,  1180 => 501,  1172 => 498,  1168 => 497,  1165 => 496,  1162 => 495,  1156 => 493,  1151 => 490,  1125 => 466,  1123 => 465,  1110 => 455,  1104 => 452,  1092 => 442,  1090 => 441,  1087 => 440,  1071 => 437,  1067 => 435,  1056 => 432,  1053 => 431,  1049 => 430,  1046 => 429,  1044 => 428,  1037 => 425,  1034 => 424,  1026 => 422,  1023 => 421,  1020 => 420,  1014 => 417,  1004 => 411,  998 => 408,  973 => 390,  961 => 380,  958 => 379,  956 => 378,  950 => 377,  947 => 376,  943 => 374,  938 => 372,  935 => 371,  929 => 369,  927 => 368,  923 => 367,  920 => 366,  914 => 364,  911 => 363,  903 => 360,  900 => 359,  898 => 358,  895 => 357,  892 => 356,  885 => 352,  874 => 343,  868 => 342,  864 => 340,  860 => 338,  857 => 337,  853 => 336,  849 => 334,  847 => 333,  843 => 331,  837 => 329,  834 => 328,  826 => 326,  823 => 325,  819 => 323,  813 => 322,  801 => 320,  798 => 319,  794 => 318,  791 => 317,  789 => 316,  783 => 315,  764 => 309,  758 => 308,  742 => 297,  726 => 287,  711 => 278,  709 => 277,  704 => 274,  701 => 273,  695 => 272,  689 => 269,  684 => 268,  681 => 267,  676 => 266,  674 => 265,  666 => 262,  661 => 261,  644 => 260,  637 => 259,  632 => 258,  627 => 257,  623 => 256,  620 => 255,  599 => 239,  586 => 231,  573 => 223,  568 => 220,  562 => 219,  554 => 217,  546 => 215,  543 => 214,  539 => 213,  535 => 211,  529 => 210,  521 => 208,  513 => 206,  510 => 205,  506 => 204,  501 => 202,  497 => 200,  494 => 199,  491 => 198,  488 => 186,  484 => 184,  476 => 181,  470 => 179,  465 => 177,  454 => 176,  452 => 175,  444 => 174,  441 => 173,  437 => 172,  434 => 171,  431 => 170,  428 => 169,  424 => 167,  419 => 164,  411 => 158,  394 => 144,  390 => 142,  388 => 141,  384 => 139,  379 => 136,  373 => 135,  369 => 133,  356 => 131,  352 => 130,  348 => 129,  345 => 128,  342 => 127,  338 => 126,  334 => 124,  332 => 123,  328 => 122,  320 => 120,  317 => 119,  303 => 116,  300 => 115,  298 => 114,  295 => 113,  292 => 112,  290 => 111,  285 => 110,  282 => 109,  279 => 108,  276 => 107,  273 => 106,  270 => 105,  267 => 104,  265 => 103,  261 => 102,  229 => 73,  223 => 70,  218 => 68,  213 => 66,  207 => 63,  186 => 45,  180 => 42,  175 => 39,  169 => 35,  155 => 34,  152 => 33,  148 => 32,  143 => 30,  139 => 29,  133 => 26,  129 => 24,  126 => 23,  123 => 22,  106 => 21,  98 => 15,  96 => 14,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/product/category.twig", "");
    }
}
