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

/* oct_deals/template/common/menu.twig */
class __TwigTemplate_12af53260deddc820adb23cb389e82ad0e0a3bc84f432484f1259d3902a2d826 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t<button type=\"button\" class=\"ds-header-catalog-button button button-outline button-outline-primary button-large br-7 ms-3 d-none d-xl-flex\">
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
\t<div class=\"ds-menu-catalog ds-menu-main-catalog\">
\t\t<div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
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
\t\t<nav class=\"ds-menu-catalog-inner\">
\t\t\t<ul class=\"ds-menu-catalog-items br-4\">
\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "\t\t\t\t\t<li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
\t\t\t\t\t\t";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["category"], "oct_image", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                            <span class=\"d-inline-flex align-items-center\">
                                <img class=\"ds-menu-catalog-item-img\" src=\"";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "oct_image", [], "any", false, false, false, 25);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
                    echo "\" width=\"20\" height=\"20\" decoding=\"async\">
\t\t\t\t\t\t\t\t";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "                                \t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "target", [], "any", false, false, false, 27);
                        echo "  class=\"ds-menu-maincategories-item-title fsz-14 dark-text ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"ds-menu-maincategories-item-title fsz-14 dark-text ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 31
                    echo "                            </span>
                        ";
                } else {
                    // line 33
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "                                \t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "target", [], "any", false, false, false, 34);
                        echo "  class=\"ds-menu-maincategories-item-title fsz-14 dark-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"ds-menu-maincategories-item-title fsz-14 dark-text ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 38
                    echo "                        ";
                }
                // line 39
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 39) || twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 39))) {
                    // line 40
                    echo "\t\t\t\t\t\t\t<svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
\t\t\t\t\t\t\t\t\tfill=\"#003459\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"ds-menu-catalog\">
\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-back-icon\"></span>
\t\t\t\t\t\t\t\t\t\t";
                    // line 48
                    echo ($context["oct_menu_catalog"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-close-icon\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog-inner\">
\t\t\t\t\t\t\t\t\t <ul class=\"ds-menu-catalog-items\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 56
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 56)) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 59
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 59));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 60
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 60))) {
                                // line 61
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                // line 62
                                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 62)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 63
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 63));
                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                    // line 64
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["page_link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 64);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["page_link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 64);
                                    echo "\" class=\"ds-menu-list-landings-link fsz-12\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["page_link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 64);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 66
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 68
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 74
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 74);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 74);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 75
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 75) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 75))) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#003459\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-back-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 84
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 84);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-close-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ds-menu-catalog-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 92
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 92));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 93
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 94
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 94);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 94);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 95
                                if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 95) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 95))) {
                                    // line 96
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#003459\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-back-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 104
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 104);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-close-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ds-menu-catalog-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 112
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 112));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                        // line 113
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 114
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 114);
                                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 115
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 115);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 119
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 119)) {
                                        // line 120
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 122
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 122));
                                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                            // line 123
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 123))) {
                                                // line 124
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                                // line 125
                                                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 125)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 126
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 126));
                                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                    // line 127
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["page_link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 127);
                                                    echo "\" title=\"";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["page_link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 127);
                                                    echo "\" class=\"ds-menu-list-landings-link fsz-12\">";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["page_link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 127);
                                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 129
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 131
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 132
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 135
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 139
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 141
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 141)) {
                                // line 142
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 144
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 144));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 145
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 145))) {
                                        // line 146
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                        // line 147
                                        echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 147)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 148
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 148));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 149
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["page_link"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 149);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["page_link"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 149);
                                            echo "\" class=\"ds-menu-list-landings-link fsz-12\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["page_link"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 149);
                                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 151
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 153
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 154
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "\t\t\t</ul>
\t\t</nav>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 169,  436 => 167,  430 => 163,  423 => 161,  417 => 157,  412 => 154,  406 => 153,  402 => 151,  389 => 149,  385 => 148,  381 => 147,  378 => 146,  375 => 145,  371 => 144,  367 => 142,  364 => 141,  357 => 139,  351 => 135,  346 => 132,  340 => 131,  336 => 129,  323 => 127,  319 => 126,  315 => 125,  312 => 124,  309 => 123,  305 => 122,  301 => 120,  298 => 119,  288 => 115,  284 => 114,  281 => 113,  277 => 112,  266 => 104,  256 => 96,  254 => 95,  248 => 94,  245 => 93,  241 => 92,  230 => 84,  220 => 76,  218 => 75,  212 => 74,  209 => 73,  204 => 72,  199 => 69,  193 => 68,  189 => 66,  176 => 64,  172 => 63,  168 => 62,  165 => 61,  162 => 60,  158 => 59,  154 => 57,  152 => 56,  141 => 48,  131 => 40,  128 => 39,  125 => 38,  119 => 36,  109 => 34,  106 => 33,  102 => 31,  96 => 29,  86 => 27,  84 => 26,  78 => 25,  75 => 24,  73 => 23,  70 => 22,  66 => 21,  55 => 13,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/menu.twig", "");
    }
}
