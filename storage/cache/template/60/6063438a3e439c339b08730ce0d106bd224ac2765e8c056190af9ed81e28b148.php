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

/* oct_deals/template/octemplates/menu/oct_menu.twig */
class __TwigTemplate_8c6f76b145fa85ae0f6ac7c1a8caef18c5c36f8914acaca55b90f70cf2a565e4 extends \Twig\Template
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
        if (($context["oct_menu"] ?? null)) {
            // line 2
            echo "    <button type=\"button\" class=\"ds-header-catalog-button button button-outline button-outline-primary button-large br-7 ms-3 d-none d-xl-flex\">
        <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path
                d=\"M14.25 17.75C12.183 17.75 10.5 16.068 10.5 14C10.5 11.932 12.183 10.25 14.25 10.25C16.317 10.25 18 11.932 18 14C18 16.068 16.317 17.75 14.25 17.75ZM14.25 11.75C13.01 11.75 12 12.759 12 14C12 15.241 13.01 16.25 14.25 16.25C15.49 16.25 16.5 15.241 16.5 14C16.5 12.759 15.49 11.75 14.25 11.75ZM15.75 7.75H12.75C11.341 7.75 10.5 6.909 10.5 5.5V2.5C10.5 1.091 11.341 0.25 12.75 0.25H15.75C17.159 0.25 18 1.091 18 2.5V5.5C18 6.909 17.159 7.75 15.75 7.75ZM12.75 1.75C12.161 1.75 12 1.911 12 2.5V5.5C12 6.089 12.161 6.25 12.75 6.25H15.75C16.339 6.25 16.5 6.089 16.5 5.5V2.5C16.5 1.911 16.339 1.75 15.75 1.75H12.75ZM5.75 7.75H2.75C1.341 7.75 0.5 6.909 0.5 5.5V2.5C0.5 1.091 1.341 0.25 2.75 0.25H5.75C7.159 0.25 8 1.091 8 2.5V5.5C8 6.909 7.159 7.75 5.75 7.75ZM2.75 1.75C2.161 1.75 2 1.911 2 2.5V5.5C2 6.089 2.161 6.25 2.75 6.25H5.75C6.339 6.25 6.5 6.089 6.5 5.5V2.5C6.5 1.911 6.339 1.75 5.75 1.75H2.75ZM5.75 17.75H2.75C1.341 17.75 0.5 16.909 0.5 15.5V12.5C0.5 11.091 1.341 10.25 2.75 10.25H5.75C7.159 10.25 8 11.091 8 12.5V15.5C8 16.909 7.159 17.75 5.75 17.75ZM2.75 11.75C2.161 11.75 2 11.911 2 12.5V15.5C2 16.089 2.161 16.25 2.75 16.25H5.75C6.339 16.25 6.5 16.089 6.5 15.5V12.5C6.5 11.911 6.339 11.75 5.75 11.75H2.75Z\"
                fill=\"#00A8E8\"></path>
        </svg>
        <span class=\"button-text fsz-14\">";
            // line 8
            echo ($context["oct_menu_catalog"] ?? null);
            echo "</span>
    </button>
    <div class=\"ds-menu-catalog ds-menu-main-catalog\">
        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t<div class=\"fw-700 dark-text fsz-16\">
\t\t\t\t";
            // line 13
            echo ($context["oct_menu_catalog"] ?? null);
            echo "
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t<span class=\"menu-close-icon\"></span>
\t\t\t</button>
\t\t</div>
        <nav class=\"ds-menu-catalog-inner\">
            <ul class=\"ds-menu-catalog-items br-4\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_category"]) {
                // line 22
                echo "                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                            <span class=\"d-inline-flex align-items-center\">
                                <img class=\"ds-menu-catalog-item-img\" src=\"";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 25);
                    echo "\" alt=\"\" width=\"20\" height=\"20\" loading=\"lazy\">
                                ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "                                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 27);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 27);
                        echo " class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 27);
                        echo "</a>
                                ";
                    } else {
                        // line 29
                        echo "                                    <span class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 29);
                        echo "</span>
                                ";
                    }
                    // line 31
                    echo "                            </span>
                        ";
                } else {
                    // line 33
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "                                <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 34);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 34);
                        echo " class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 34);
                        echo "</a>
                            ";
                    } else {
                        // line 36
                        echo "                                <span class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 36);
                        echo "</span>
                            ";
                    }
                    // line 38
                    echo "                        ";
                }
                // line 39
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 39) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 39)) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "sub_links", [], "any", false, false, false, 39))) {
                    // line 40
                    echo "                            <span class=\"menu-chevron-icon\"></span>
                        ";
                }
                // line 42
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 42) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 42)) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 42) == "standard"))) {
                    // line 43
                    echo "                            <div class=\"ds-menu-catalog";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 43) == "2")) {
                        echo " ds-menu-catalog-wide";
                    }
                    echo "\">
                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                        <span class=\"menu-back-icon\"></span>
                                        ";
                    // line 47
                    echo ($context["oct_menu_catalog"] ?? null);
                    echo "
                                    </div>
                                    <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                        <span class=\"menu-close-icon\"></span>
                                    </button>
                                </div>
                                <div class=\"ds-menu-catalog-inner\">
                                    ";
                    // line 54
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 54) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 54) == "2"))) {
                        // line 55
                        echo "                                        <div class=\"col-xl-3 p-3 p-xl-0\">
                                            ";
                        // line 56
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 56));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 57
                            echo "                                                <ul class=\"ds-menu-list-landings p-3 py-xl-0 ps-xl-0\">
                                                    ";
                            // line 58
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 58))) {
                                // line 59
                                echo "                                                    <li class=\"d-flex flex-column mb-3\">
                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2 pb-2\">";
                                // line 60
                                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 60)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
                                                        ";
                                // line 61
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 61));
                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                    // line 62
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["page_link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 62);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["page_link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 62);
                                    echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["page_link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 62);
                                    echo "</a>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 64
                                echo "                                                    </li>
                                                    ";
                            }
                            // line 66
                            echo "                                                </ul>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "                                        </div>
                                    ";
                    }
                    // line 70
                    echo "                                    <ul class=\"ds-menu-catalog-items\">
                                        ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 71));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 72
                        echo "                                            <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                <a href=\"";
                        // line 73
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 73);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 73);
                        echo "\" class=\"d-flex align-items-center\">
                                                    ";
                        // line 74
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 74);
                        echo "
                                                </a>
                                                ";
                        // line 76
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 76) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 76))) {
                            // line 77
                            echo "                                                    <span class=\"menu-chevron-icon";
                            if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 77) == "2")) {
                                echo " d-xl-none";
                            }
                            echo "\"></span>
                                                    <div class=\"ds-menu-catalog\">
                                                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                                                <span class=\"menu-back-icon\"></span>
                                                                ";
                            // line 82
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 82);
                            echo "
                                                            </div>
                                                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                                <span class=\"menu-close-icon\"></span>
                                                            </button>
                                                        </div>
                                                        <div class=\"ds-menu-catalog-inner\">
                                                            <ul class=\"ds-menu-catalog-items\">
                                                                ";
                            // line 90
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 90));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 91
                                echo "                                                                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                        <a href=\"";
                                // line 92
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 92);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 92);
                                echo "</a>
                                                                        ";
                                // line 93
                                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 93) == "1")) {
                                    // line 94
                                    echo "                                                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 94) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 94))) {
                                        // line 95
                                        echo "                                                                                <span class=\"menu-chevron-icon";
                                        if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 95) == "2")) {
                                            echo " d-xl-none";
                                        }
                                        echo "\"></span>
                                                                                <div class=\"ds-menu-catalog\">
                                                                                    <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                                                        <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\"
                                                                                            data-sidebar=\"catalogback\">
                                                                                            <span class=\"menu-back-icon\"></span>
                                                                                            ";
                                        // line 101
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 101);
                                        echo "
                                                                                        </div>
                                                                                        <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                                                            <span class=\"menu-close-icon\"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class=\"ds-menu-catalog-inner\">
                                                                                        <ul class=\"ds-menu-catalog-items\">
                                                                                            ";
                                        // line 109
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 109));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 110
                                            echo "                                                                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                                    <a href=\"";
                                            // line 111
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 111);
                                            echo "\" class=\"flex-grow-1\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 111);
                                            echo "</a>
                                                                                                </li>
                                                                                            ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 114
                                        echo "                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            ";
                                    }
                                    // line 118
                                    echo "                                                                        ";
                                }
                                // line 119
                                echo "                                                                    </li>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 121
                            echo "                                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 121) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 121) == "1"))) {
                                // line 122
                                echo "                                                                    <li class=\"ds-menu-list-landings\">
                                                                        <ul>
                                                                            ";
                                // line 124
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 124));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 125
                                    echo "                                                                                ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 125))) {
                                        // line 126
                                        echo "                                                                                <li class=\"d-flex flex-column\">
                                                                                    <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                        // line 127
                                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 127)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                                                                    ";
                                        // line 128
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 128));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 129
                                            echo "                                                                                    <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["page_link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 129);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["page_link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 129);
                                            echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["page_link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 129);
                                            echo "</a>
                                                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 131
                                        echo "                                                                                </li>
                                                                                ";
                                    }
                                    // line 133
                                    echo "                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 134
                                echo "                                                                        </ul>
                                                                    </li>
                                                                ";
                            }
                            // line 137
                            echo "                                                            </ul>
                                                            ";
                            // line 138
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 138) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 138) == "2"))) {
                                // line 139
                                echo "                                                                <ul class=\"ds-menu-list-landings p-3 p-xl-0\">
                                                                    ";
                                // line 140
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 140));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 141
                                    echo "                                                                        ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 141))) {
                                        // line 142
                                        echo "                                                                        <li class=\"d-flex flex-column\">
                                                                            <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                        // line 143
                                        echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 143)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                                                            ";
                                        // line 144
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 144));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 145
                                            echo "                                                                            <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["page_link"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 145);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["page_link"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 145);
                                            echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["page_link"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 145);
                                            echo "</a>
                                                                            ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 147
                                        echo "                                                                        </li>
                                                                        ";
                                    }
                                    // line 149
                                    echo "                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 150
                                echo "                                                                </ul>
                                                            ";
                            }
                            // line 152
                            echo "                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 155
                        echo "                                            </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 157) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 157) == "1"))) {
                        // line 158
                        echo "                                            <li class=\"ds-menu-list-landings\">
                                                <ul>
                                                    ";
                        // line 160
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 160));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 161
                            echo "                                                        ";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 161))) {
                                // line 162
                                echo "                                                        <li class=\"d-flex flex-column\">
                                                            <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                // line 163
                                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 163)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
                                                            ";
                                // line 164
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 164));
                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                    // line 165
                                    echo "                                                            <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["page_link"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 165);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["page_link"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 165);
                                    echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["page_link"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 165);
                                    echo "</a>
                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 167
                                echo "                                                        </li>
                                                        ";
                            }
                            // line 169
                            echo "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 170
                        echo "                                                </ul>
                                            </li>
                                        ";
                    }
                    // line 173
                    echo "                                    </ul>
                                </div>
                            </div>
                        ";
                }
                // line 177
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 177) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 177) == "category"))) {
                    // line 178
                    echo "                        <!-- 1 = menu list, 2 = menu grid -->
                            <div class=\"ds-menu-catalog";
                    // line 179
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 179) == "2")) {
                        echo " ds-menu-catalog-wide";
                    }
                    echo "\">
                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                        <span class=\"menu-back-icon\"></span>
                                        ";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 183);
                    echo "
                                    </div>
                                    <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                        <span class=\"menu-close-icon\"></span>
                                    </button>
                                </div>
                                <div class=\"ds-menu-catalog-inner\">
                                    ";
                    // line 190
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 190) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 190) == "2"))) {
                        // line 191
                        echo "                                        <div class=\"col-xl-3 p-3 p-xl-0\">
                                            ";
                        // line 192
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 192));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_pages"]) {
                            // line 193
                            echo "                                                 ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["oct_pages"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 194
                                echo "                                                    <ul class=\"ds-menu-list-landings dark-text mb-4 pe-xl-3\">
                                                        <li class=\"d-flex flex-column\">
                                                            ";
                                // line 196
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 196))) {
                                    // line 197
                                    echo "                                                                <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 197)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                                ";
                                    // line 198
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 198));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 199
                                        echo "                                                                    <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["page_link"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 199);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["page_link"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 199);
                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["page_link"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 199);
                                        echo "</a>
                                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 201
                                    echo "                                                            ";
                                }
                                // line 202
                                echo "                                                        </li>
                                                    </ul>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 205
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_pages'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 206
                        echo "                                        </div>
                                    ";
                    }
                    // line 208
                    echo "                                    <ul class=\"ds-menu-catalog-items\">
                                        ";
                    // line 209
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 209));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 210
                        echo "                                            <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                    <a href=\"";
                        // line 211
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 211);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 211);
                        echo "\" class=\"d-flex align-items-center\">
                                                        ";
                        // line 212
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 212)) {
                            // line 213
                            echo "                                                            <img class=\"me-3\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 213);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 213);
                            echo "\" width=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 213);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 213);
                            echo "\" loading=\"lazy\" />
                                                        ";
                        }
                        // line 215
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 215);
                        echo "
                                                    </a>
                                                ";
                        // line 217
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 217) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 217))) {
                            // line 218
                            echo "                                                    <span class=\"menu-chevron-icon";
                            if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 218) == "2")) {
                                echo " d-xl-none";
                            }
                            echo "\"></span>
                                                    <div class=\"ds-menu-catalog\">
                                                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                                                <span class=\"menu-back-icon\"></span>
                                                                ";
                            // line 223
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 223);
                            echo "
                                                            </div>
                                                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                                <span class=\"menu-close-icon\"></span>
                                                            </button>
                                                        </div>
                                                        <div class=\"ds-menu-catalog-inner\">
                                                            <ul class=\"ds-menu-catalog-items\">
                                                                ";
                            // line 231
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 231));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 232
                                echo "                                                                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                        <a href=\"";
                                // line 233
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 233);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 233);
                                echo "</a>
                                                                        ";
                                // line 234
                                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 234) == "1")) {
                                    // line 235
                                    echo "                                                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 235) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 235))) {
                                        // line 236
                                        echo "                                                                                <span class=\"menu-chevron-icon";
                                        if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 236) == "2")) {
                                            echo " d-xl-none";
                                        }
                                        echo "\"></span>
                                                                                <div class=\"ds-menu-catalog\">
                                                                                    <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                                                        <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\"
                                                                                            data-sidebar=\"catalogback\">
                                                                                            <span class=\"menu-back-icon\"></span>
                                                                                            ";
                                        // line 242
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 242);
                                        echo "
                                                                                        </div>
                                                                                        <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                                                            <span class=\"menu-close-icon\"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class=\"ds-menu-catalog-inner\">
                                                                                        <ul class=\"ds-menu-catalog-items\">
                                                                                            ";
                                        // line 250
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 250));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 251
                                            echo "                                                                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                                    <a href=\"";
                                            // line 252
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 252);
                                            echo "\" class=\"flex-grow-1\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 252);
                                            echo "</a>
                                                                                                </li>
                                                                                            ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 255
                                        echo "                                                                                            ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 255)) {
                                            // line 256
                                            echo "                                                                                                <li class=\"ds-menu-list-landings\">
                                                                                                    <ul>
                                                                                                        ";
                                            // line 258
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 258));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 259
                                                echo "                                                                                                            ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 259))) {
                                                    // line 260
                                                    echo "                                                                                                            <li class=\"d-flex flex-column\">
                                                                                                                <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                                    // line 261
                                                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 261)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</span>
                                                                                                                ";
                                                    // line 262
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 262));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 263
                                                        echo "                                                                                                                <a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["page_link"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 263);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["page_link"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 263);
                                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["page_link"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 263);
                                                        echo "</a>
                                                                                                                ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 265
                                                    echo "                                                                                                            </li>
                                                                                                            ";
                                                }
                                                // line 267
                                                echo "                                                                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 268
                                            echo "                                                                                                    </ul>
                                                                                                </li>
                                                                                            ";
                                        }
                                        // line 271
                                        echo "                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            ";
                                    }
                                    // line 275
                                    echo "                                                                        ";
                                }
                                // line 276
                                echo "                                                                    </li>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 278
                            echo "                                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 278) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 278) == "1"))) {
                                // line 279
                                echo "                                                                    <li class=\"ds-menu-list-landings\">
                                                                        <ul>
                                                                            ";
                                // line 281
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 281));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 282
                                    echo "                                                                                ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 282))) {
                                        // line 283
                                        echo "                                                                                <li class=\"d-flex flex-column mb-4\">
                                                                                    <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                        // line 284
                                        echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 284)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                                                                    ";
                                        // line 285
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 285));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 286
                                            echo "                                                                                    <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["page_link"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 286);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["page_link"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 286);
                                            echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["page_link"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 286);
                                            echo "</a>
                                                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 288
                                        echo "                                                                                </li>
                                                                                ";
                                    }
                                    // line 290
                                    echo "                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 291
                                echo "                                                                        </ul>
                                                                    </li>
                                                                ";
                            }
                            // line 294
                            echo "                                                            </ul>
                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 298
                        echo "                                            </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 300
                    echo "                                    </ul>
                                </div>
                            </div>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 303
$context["oct_category"], "type", [], "any", false, false, false, 303) == "link")) {
                    // line 304
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "sub_links", [], "any", false, false, false, 304)) {
                        // line 305
                        echo "                                <div class=\"ds-menu-catalog\">
                                    <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                        <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                            <span class=\"menu-back-icon\"></span>
                                            ";
                        // line 309
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 309);
                        echo "
                                        </div>
                                        <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                            <span class=\"menu-close-icon\"></span>
                                        </button>
                                    </div>
                                    <div class=\"ds-menu-catalog-inner\">
                                        <ul class=\"ds-menu-catalog-items\">
                                            ";
                        // line 317
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "sub_links", [], "any", false, false, false, 317));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                            // line 318
                            echo "                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                    <a href=\"";
                            // line 319
                            echo twig_get_attribute($this->env, $this->source, $context["sub"], "href", [], "any", false, false, false, 319);
                            echo "\" ";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 319);
                            echo ">
                                                        ";
                            // line 320
                            echo twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 320);
                            echo "
                                                    </a>
                                                </li>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 324
                        echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                    }
                    // line 328
                    echo "                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 328) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 328) == "oct_blogcategory"))) {
                    // line 329
                    echo "                            <div class=\"ds-menu-catalog\">
                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                        <span class=\"menu-back-icon\"></span>
                                        ";
                    // line 333
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 333);
                    echo "
                                    </div>
                                    <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                        <span class=\"menu-close-icon\"></span>
                                    </button>
                                </div>
                                <div class=\"ds-menu-catalog-inner\">
                                    <ul class=\"ds-menu-catalog-items\">
                                        ";
                    // line 341
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 341));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 342
                        echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a href=\"";
                        // line 343
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 343);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 343);
                        echo "</a>
                                            ";
                        // line 344
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 344)) {
                            // line 345
                            echo "                                                <span class=\"menu-chevron-icon\"></span>
                                                <div class=\"ds-menu-catalog\">
                                                    <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                        <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                                            <span class=\"menu-back-icon\"></span>
                                                            ";
                            // line 350
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 350);
                            echo "
                                                        </div>
                                                        <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                            <span class=\"menu-close-icon\"></span>
                                                        </button>
                                                    </div>
                                                    <div class=\"ds-menu-catalog-inner\">
                                                        <ul class=\"ds-menu-catalog-items\">
                                                            ";
                            // line 358
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 358));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 359
                                echo "                                                            <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                <a href=\"";
                                // line 360
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 360);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 360);
                                echo "</a>
                                                            </li>
                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 363
                            echo "                                                        </ul>
                                                    </div>
                                                </div>
                                            ";
                        }
                        // line 367
                        echo "                                        </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 369
                    echo "                                    </ul>
                                </div>
                            </div>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 372
$context["oct_category"], "children", [], "any", false, false, false, 372) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 372) == "manufacturer"))) {
                    // line 373
                    echo "                            <div class=\"ds-menu-catalog";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 373)) {
                        echo " ds-menu-catalog-wide";
                    }
                    echo "\">
                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                        <span class=\"menu-back-icon\"></span>
                                        ";
                    // line 377
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 377);
                    echo "
                                    </div>
                                    <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                        <span class=\"menu-close-icon\"></span>
                                    </button>
                                </div>
                                ";
                    // line 383
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 383)) {
                        // line 384
                        echo "                                    <div class=\"ds-megamenu-children ds-megamenu-children-manufacturers flex-grow-1 d-flex flex-wrap flex-column flex-xl-row dark-text gap-xl-3\">
                                        ";
                        // line 385
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 385));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 386
                            echo "                                            <div class=\"ds-megamenu-children-item text-xl-center\">
                                                <a href=\"";
                            // line 387
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 387);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 387);
                            echo "\" class=\"ds-megamenu-children-title fw-700 d-flex flex-xl-column align-items-center px-3 py-2 p-xl-2 fsz-14\">
                                                    ";
                            // line 388
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 388)) {
                                // line 389
                                echo "                                                        <img class=\"my-xl-2 me-3 mx-xl-auto\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 389);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 389);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 389);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 389);
                                echo "\" loading=\"lazy\" />
                                                    ";
                            }
                            // line 391
                            echo "                                                    <span class=\"flex-grow-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 391);
                            echo "</span>
                                                </a>
                                            </div>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 395
                        echo "                                    </div>
                                ";
                    } else {
                        // line 397
                        echo "                                    <div class=\"ds-menu-catalog-inner\">
                                        <ul class=\"ds-menu-catalog-items\">
                                            ";
                        // line 399
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 399));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 400
                            echo "                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                    <a href=\"";
                            // line 401
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 401);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 401);
                            echo "</a>
                                                </li>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 404
                        echo "                                        </ul>
                                    </div>
                                ";
                    }
                    // line 407
                    echo "                            </div>
                        ";
                }
                // line 409
                echo "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 411
            echo "            </ul>
        </nav>
    </div>
";
        } else {
            // line 415
            echo "    <div id=\"mobileMenuBox\" class=\"ds-menu-catalog ds-menu-main-catalog d-xl-none\">
        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t<div class=\"fw-700 dark-text fsz-16\">
\t\t\t\t";
            // line 418
            echo ($context["oct_menu_catalog"] ?? null);
            echo "
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t<span class=\"menu-close-icon\"></span>
\t\t\t</button>
\t\t</div>
        <nav class=\"ds-menu-catalog-inner\">
            <ul class=\"ds-menu-catalog-items br-4\">
            
            </ul>
        </nav>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/menu/oct_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1110 => 418,  1105 => 415,  1099 => 411,  1092 => 409,  1088 => 407,  1083 => 404,  1072 => 401,  1069 => 400,  1065 => 399,  1061 => 397,  1057 => 395,  1046 => 391,  1034 => 389,  1032 => 388,  1026 => 387,  1023 => 386,  1019 => 385,  1016 => 384,  1014 => 383,  1005 => 377,  995 => 373,  993 => 372,  988 => 369,  981 => 367,  975 => 363,  964 => 360,  961 => 359,  957 => 358,  946 => 350,  939 => 345,  937 => 344,  931 => 343,  928 => 342,  924 => 341,  913 => 333,  907 => 329,  904 => 328,  898 => 324,  888 => 320,  882 => 319,  879 => 318,  875 => 317,  864 => 309,  858 => 305,  855 => 304,  853 => 303,  848 => 300,  841 => 298,  835 => 294,  830 => 291,  824 => 290,  820 => 288,  807 => 286,  803 => 285,  799 => 284,  796 => 283,  793 => 282,  789 => 281,  785 => 279,  782 => 278,  775 => 276,  772 => 275,  766 => 271,  761 => 268,  755 => 267,  751 => 265,  738 => 263,  734 => 262,  730 => 261,  727 => 260,  724 => 259,  720 => 258,  716 => 256,  713 => 255,  702 => 252,  699 => 251,  695 => 250,  684 => 242,  672 => 236,  669 => 235,  667 => 234,  661 => 233,  658 => 232,  654 => 231,  643 => 223,  632 => 218,  630 => 217,  624 => 215,  612 => 213,  610 => 212,  604 => 211,  601 => 210,  597 => 209,  594 => 208,  590 => 206,  584 => 205,  576 => 202,  573 => 201,  560 => 199,  556 => 198,  551 => 197,  549 => 196,  545 => 194,  540 => 193,  536 => 192,  533 => 191,  531 => 190,  521 => 183,  512 => 179,  509 => 178,  506 => 177,  500 => 173,  495 => 170,  489 => 169,  485 => 167,  472 => 165,  468 => 164,  464 => 163,  461 => 162,  458 => 161,  454 => 160,  450 => 158,  447 => 157,  440 => 155,  435 => 152,  431 => 150,  425 => 149,  421 => 147,  408 => 145,  404 => 144,  400 => 143,  397 => 142,  394 => 141,  390 => 140,  387 => 139,  385 => 138,  382 => 137,  377 => 134,  371 => 133,  367 => 131,  354 => 129,  350 => 128,  346 => 127,  343 => 126,  340 => 125,  336 => 124,  332 => 122,  329 => 121,  322 => 119,  319 => 118,  313 => 114,  302 => 111,  299 => 110,  295 => 109,  284 => 101,  272 => 95,  269 => 94,  267 => 93,  261 => 92,  258 => 91,  254 => 90,  243 => 82,  232 => 77,  230 => 76,  225 => 74,  219 => 73,  216 => 72,  212 => 71,  209 => 70,  205 => 68,  198 => 66,  194 => 64,  181 => 62,  177 => 61,  173 => 60,  170 => 59,  168 => 58,  165 => 57,  161 => 56,  158 => 55,  156 => 54,  146 => 47,  136 => 43,  133 => 42,  129 => 40,  126 => 39,  123 => 38,  117 => 36,  107 => 34,  104 => 33,  100 => 31,  94 => 29,  84 => 27,  82 => 26,  78 => 25,  75 => 24,  73 => 23,  70 => 22,  66 => 21,  55 => 13,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/menu/oct_menu.twig", "");
    }
}
