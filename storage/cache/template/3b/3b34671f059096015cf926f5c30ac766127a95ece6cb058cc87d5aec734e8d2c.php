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

/* oct_deals/template/octemplates/menu/oct_menu_horizontal.twig */
class __TwigTemplate_2668df22b1a5d9e4d70189a18d0494aed4c4c525d10204991ec0ae13abd18ca1 extends \Twig\Template
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
            echo "    <ul class=\"ds-menu-maincategories d-flex flex-column flex-xl-row\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_category"]) {
                // line 4
                echo "            <li class=\"ds-menu-maincategories-item d-flex align-items-center py-2 px-3 px-xl-2\">
                ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "                    <span class=\"d-inline-flex align-items-center\">
                        <img class=\"ds-menu-catalog-item-img\" src=\"";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 7);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 7);
                    echo "\" width=\"20\" height=\"20\" decoding=\"async\">
                        ";
                    // line 8
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 8)) {
                        // line 9
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 9);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 9);
                        echo " class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 9);
                        echo "</a>
                        ";
                    } else {
                        // line 11
                        echo "                            <span class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 11);
                        echo "</span>
                        ";
                    }
                    // line 13
                    echo "                    </span>
                ";
                } else {
                    // line 15
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 15)) {
                        // line 16
                        echo "                        <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 16);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 16);
                        echo " class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 16);
                        echo "</a>
                    ";
                    } else {
                        // line 18
                        echo "                        <span class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 18);
                        echo "</span>
                    ";
                    }
                    // line 20
                    echo "                ";
                }
                // line 21
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 21) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 21)) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "sub_links", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                    <span class=\"menu-chevron-icon\"></span>
                ";
                }
                // line 24
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 24) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 24)) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 24) == "standard"))) {
                    // line 25
                    echo "                    <div class=\"ds-menu-catalog";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 25) == "2")) {
                        echo " ds-menu-catalog-wide";
                    }
                    echo "\">
                        ";
                    // line 26
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 26) == "1")) {
                        // line 27
                        echo "                            <div class=\"ds-menu-catalog-inner\">
                                <ul class=\"ds-menu-catalog-items\">
                                    ";
                        // line 29
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 29));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 30
                            echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a href=\"";
                            // line 31
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 31);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 31);
                            echo "</a>
                                            ";
                            // line 32
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 32) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 32))) {
                                // line 33
                                echo "                                                <span class=\"menu-chevron-icon\"></span>
                                                <div class=\"ds-menu-catalog\">
                                                    <div class=\"ds-menu-catalog-inner\">
                                                        <ul class=\"ds-menu-catalog-items\">
                                                            ";
                                // line 37
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 37));
                                foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                    // line 38
                                    echo "                                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                    <a href=\"";
                                    // line 39
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 39);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 39);
                                    echo "</a>
                                                                    ";
                                    // line 40
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 40) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 40))) {
                                        // line 41
                                        echo "                                                                        <span class=\"menu-chevron-icon\"></span>
                                                                        <div class=\"ds-menu-catalog\">
                                                                            <div class=\"ds-menu-catalog-inner\">
                                                                                <ul class=\"ds-menu-catalog-items\">
                                                                                    ";
                                        // line 45
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 45));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 46
                                            echo "                                                                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                            <a href=\"";
                                            // line 47
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 47);
                                            echo "\">
                                                                                                ";
                                            // line 48
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 48);
                                            echo "
                                                                                            </a>
                                                                                        </li>
                                                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 52
                                        echo "                                                                                    ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 52)) {
                                            // line 53
                                            echo "                                                                                        <li class=\"ds-menu-list-landings\">
                                                                                            <ul>
                                                                                                ";
                                            // line 55
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 55));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 56
                                                echo "                                                                                                    ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 56))) {
                                                    // line 57
                                                    echo "                                                                                                    <li class=\"d-flex flex-column \">
                                                                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                                    // line 58
                                                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 58)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</span>
                                                                                                        ";
                                                    // line 59
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 59));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 60
                                                        echo "                                                                                                        <a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["page_link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 60);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["page_link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 60);
                                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["page_link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 60);
                                                        echo "</a>
                                                                                                        ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 62
                                                    echo "                                                                                                    </li>
                                                                                                    ";
                                                }
                                                // line 64
                                                echo "                                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 65
                                            echo "                                                                                            </ul>
                                                                                        </li>
                                                                                    ";
                                        }
                                        // line 68
                                        echo "                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    ";
                                    }
                                    // line 72
                                    echo "                                                                </li>
                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 74
                                echo "                                                            ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 74)) {
                                    // line 75
                                    echo "                                                                <li class=\"ds-menu-list-landings\">
                                                                    <ul>
                                                                        ";
                                    // line 77
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 77));
                                    foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                        // line 78
                                        echo "                                                                            ";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 78))) {
                                            // line 79
                                            echo "                                                                            <li class=\"d-flex flex-column\">
                                                                                <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                            // line 80
                                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 80)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                            echo "</span>
                                                                                ";
                                            // line 81
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 81));
                                            foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                // line 82
                                                echo "                                                                                <a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["page_link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 82);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["page_link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 82);
                                                echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["page_link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 82);
                                                echo "</a>
                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 84
                                            echo "                                                                            </li>
                                                                            ";
                                        }
                                        // line 86
                                        echo "                                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 87
                                    echo "                                                                    </ul>
                                                                </li>
                                                            ";
                                }
                                // line 90
                                echo "                                                        </ul>
                                                    </div>
                                            </div>
                                            ";
                            }
                            // line 94
                            echo "                                        </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 96
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 96)) {
                            // line 97
                            echo "                                        <li class=\"ds-menu-list-landings\">
                                            <ul>
                                                ";
                            // line 99
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 99));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 100
                                echo "                                                    ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 100))) {
                                    // line 101
                                    echo "                                                    <li class=\"d-flex flex-column\">
                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                    // line 102
                                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 102)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                        ";
                                    // line 103
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 103));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 104
                                        echo "                                                        <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["page_link"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 104);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["page_link"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 104);
                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["page_link"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 104);
                                        echo "</a>
                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 106
                                    echo "                                                    </li>
                                                    ";
                                }
                                // line 108
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 109
                            echo "                                            </ul>
                                        </li>
                                    ";
                        }
                        // line 112
                        echo "                                </ul>
                            </div>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 114
$context["oct_category"], "view", [], "any", false, false, false, 114) == "2")) {
                        // line 115
                        echo "                            <div class=\"ds-megamenu-child-wrapper\">
                                <div class=\"ds-megamenu-child-title fw-700 fsz-20 dark-text mb-4\">";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 116);
                        echo "</div>
                                <div class=\"d-flex\">
                                    <div class=\"ds-megamenu-children flex-grow-1 flex-column flex-xl-row\">
                                        ";
                        // line 119
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 119)) {
                            // line 120
                            echo "                                            <div class=\"ds-megamenu-children-item\">
                                                ";
                            // line 121
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 121));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 122
                                echo "                                                    ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 122))) {
                                    // line 123
                                    echo "                                                        <span class=\"ds-megamenu-children-title fw-700\">";
                                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 123)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                        <ul class=\"list-unstyled fsz-14\">
                                                            ";
                                    // line 125
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 125));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 126
                                        echo "                                                            <li>
                                                                <a href=\"";
                                        // line 127
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["page_link"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 127);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["page_link"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 127);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["page_link"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 127);
                                        echo "</a>
                                                            </li>
                                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 130
                                    echo "                                                        </ul>
                                                    ";
                                }
                                // line 132
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 133
                            echo "                                            </div>
                                        ";
                        }
                        // line 135
                        echo "                                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 135)) {
                            // line 136
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 136));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 137
                                echo "                                                <div class=\"ds-megamenu-children-item\">
                                                    <a href=\"";
                                // line 138
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 138);
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 138);
                                echo "\" class=\"ds-megamenu-children-title fw-700\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 138);
                                echo "</a>
                                                    ";
                                // line 139
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 139)) {
                                    // line 140
                                    echo "                                                        <ul class=\"list-unstyled fsz-14\">
                                                            ";
                                    // line 141
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 141));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                        // line 142
                                        echo "                                                            <li>
                                                                <a href=\"";
                                        // line 143
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 143);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 143);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 143);
                                        echo "</a>
                                                            </li>
                                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 146
                                    echo "                                                        </ul>
                                                    ";
                                }
                                // line 148
                                echo "                                                </div>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 150
                            echo "                                        ";
                        }
                        // line 151
                        echo "                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    // line 155
                    echo "                    </div>
                ";
                }
                // line 157
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 157) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 157) == "category"))) {
                    // line 158
                    echo "                    <div class=\"ds-menu-maincategories-dropdown position-absolute";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 158) == "1")) {
                        echo " ds-menu-maincategories-dropdown-narrow";
                    }
                    echo "\">
                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                <span class=\"menu-back-icon\"></span>
                                ";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 162);
                    echo "
                            </div>
                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                <span class=\"menu-close-icon\"></span>
                            </button>
                        </div>
                        <!-- 1 = menu list, 2 = menu grid -->
                        ";
                    // line 169
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 169) == "1")) {
                        // line 170
                        echo "                            <div class=\"ds-menu-catalog-inner\">
                                <ul class=\"ds-menu-catalog-items\">
                                    ";
                        // line 172
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 172));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 173
                            echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a href=\"";
                            // line 174
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 174);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 174);
                            echo "</a>
                                            ";
                            // line 175
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 175) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 175))) {
                                // line 176
                                echo "                                                <span class=\"menu-chevron-icon\"></span>
                                                <div class=\"ds-menu-catalog\">
                                                    <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                        <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                                            <span class=\"menu-back-icon\"></span>
                                                            ";
                                // line 181
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 181);
                                echo "
                                                        </div>
                                                        <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                            <span class=\"menu-close-icon\"></span>
                                                        </button>
                                                    </div>
                                                    <div class=\"ds-menu-catalog-inner\">
                                                        <ul class=\"ds-menu-catalog-items\">
                                                            ";
                                // line 189
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 189));
                                foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                    // line 190
                                    echo "                                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                    <a href=\"";
                                    // line 191
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 191);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 191);
                                    echo "</a>
                                                                    ";
                                    // line 192
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 192) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 192))) {
                                        // line 193
                                        echo "                                                                        <span class=\"menu-chevron-icon\"></span>
                                                                        <div class=\"ds-menu-catalog\">
                                                                            <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                                                <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\"
                                                                                    data-sidebar=\"catalogback\">
                                                                                    <span class=\"menu-back-icon\"></span>
                                                                                    ";
                                        // line 199
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 199);
                                        echo "
                                                                                </div>
                                                                                <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                                                    <span class=\"menu-close-icon\"></span>
                                                                                </button>
                                                                            </div>
                                                                            <div class=\"ds-menu-catalog-inner\">
                                                                                <ul class=\"ds-menu-catalog-items\">
                                                                                    ";
                                        // line 207
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 207));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 208
                                            echo "                                                                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                            <a href=\"";
                                            // line 209
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 209);
                                            echo "\" class=\"flex-grow-1\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 209);
                                            echo "</a>
                                                                                        </li>
                                                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 212
                                        echo "                                                                                    ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 212)) {
                                            // line 213
                                            echo "                                                                                        <li class=\"ds-menu-list-landings\">
                                                                                            <ul>
                                                                                                ";
                                            // line 215
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 215));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 216
                                                echo "                                                                                                    ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 216))) {
                                                    // line 217
                                                    echo "                                                                                                    <li class=\"d-flex flex-column \">
                                                                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                                    // line 218
                                                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 218)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</span>
                                                                                                        ";
                                                    // line 219
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 219));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 220
                                                        echo "                                                                                                        <a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["page_link"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 220);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["page_link"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 220);
                                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["page_link"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 220);
                                                        echo "</a>
                                                                                                        ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 222
                                                    echo "                                                                                                    </li>
                                                                                                    ";
                                                }
                                                // line 224
                                                echo "                                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 225
                                            echo "                                                                                            </ul>
                                                                                        </li>
                                                                                    ";
                                        }
                                        // line 228
                                        echo "                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    ";
                                    }
                                    // line 232
                                    echo "                                                                </li>
                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 234
                                echo "                                                            ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 234)) {
                                    // line 235
                                    echo "                                                                <li class=\"ds-menu-list-landings\">
                                                                    <ul>
                                                                        ";
                                    // line 237
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 237));
                                    foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                        // line 238
                                        echo "                                                                            ";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 238))) {
                                            // line 239
                                            echo "                                                                            <li class=\"d-flex flex-column\">
                                                                                <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                            // line 240
                                            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 240)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["language_id"] ?? null)] ?? null) : null);
                                            echo "</span>
                                                                                ";
                                            // line 241
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 241));
                                            foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                // line 242
                                                echo "                                                                                <a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["page_link"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 242);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["page_link"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 242);
                                                echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["page_link"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 242);
                                                echo "</a>
                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 244
                                            echo "                                                                            </li>
                                                                            ";
                                        }
                                        // line 246
                                        echo "                                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 247
                                    echo "                                                                    </ul>
                                                                </li>
                                                            ";
                                }
                                // line 250
                                echo "                                                        </ul>
                                                    </div>
                                                </div>
                                            ";
                            }
                            // line 254
                            echo "                                        </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 256
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 256)) {
                            // line 257
                            echo "                                        <li class=\"ds-menu-list-landings\">
                                            <ul>
                                                ";
                            // line 259
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 259));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 260
                                echo "                                                    ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 260))) {
                                    // line 261
                                    echo "                                                    <li class=\"d-flex flex-column\">
                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                    // line 262
                                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 262)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                        ";
                                    // line 263
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 263));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 264
                                        echo "                                                        <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["page_link"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 264);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["page_link"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 264);
                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["page_link"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 264);
                                        echo "</a>
                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 266
                                    echo "                                                    </li>
                                                    ";
                                }
                                // line 268
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 269
                            echo "                                            </ul>
                                        </li>
                                    ";
                        }
                        // line 272
                        echo "                                </ul>
                            </div>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 274
$context["oct_category"], "view", [], "any", false, false, false, 274) == "2")) {
                        // line 275
                        echo "                            <div class=\"ds-megamenu-child-wrapper\">
                                <div class=\"d-flex flex-column flex-xl-row p-3\">
                                    ";
                        // line 277
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 277)) {
                            // line 278
                            echo "                                        <div class=\"col-xl-3 p-3 p-xl-0\">
                                            ";
                            // line 279
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 279));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_pages"]) {
                                // line 280
                                echo "                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["oct_pages"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 281
                                    echo "                                                    <ul class=\"ds-menu-list-landings dark-text mb-4 pe-xl-3\">
                                                        <li class=\"d-flex flex-column\">
                                                            ";
                                    // line 283
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 283))) {
                                        // line 284
                                        echo "                                                                <span class=\"ds-megamenu-children-title fw-700\">";
                                        echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 284)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                                                ";
                                        // line 285
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 285));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 286
                                            echo "                                                                    <a class=\"ds-menu-list-landings-link fsz-14\" href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["page_link"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 286);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["page_link"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 286);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["page_link"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 286);
                                            echo "</a>
                                                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 288
                                        echo "                                                            ";
                                    }
                                    // line 289
                                    echo "                                                        </li>
                                                    </ul>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 292
                                echo "                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_pages'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 293
                            echo "                                        </div>
                                    ";
                        }
                        // line 295
                        echo "                                    <div class=\"ds-megamenu-children flex-grow-1 d-flex flex-wrap dark-text px-3 px-xl-0\">
                                        ";
                        // line 296
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 296)) {
                            // line 297
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 297));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 298
                                echo "                                                <div class=\"ds-megamenu-children-item\">
                                                    ";
                                // line 299
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 299)) {
                                    // line 300
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 300);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 300);
                                    echo "\" class=\"ds-megamenu-children-title fw-600 mb-2 d-flex align-items-center mb-3\">
                                                            ";
                                    // line 301
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 301)) {
                                        // line 302
                                        echo "                                                                <img class=\"me-3\" src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 302);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 302);
                                        echo "\" width=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 302);
                                        echo "\" height=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 302);
                                        echo "\" loading=\"lazy\" />
                                                            ";
                                    }
                                    // line 304
                                    echo "                                                            <span class=\"fsz-14\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 304);
                                    echo "</span>
                                                        </a>
                                                    ";
                                } else {
                                    // line 307
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 307);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 307);
                                    echo "\" class=\"ds-megamenu-children-title fw-600 mb-3 d-block\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 307);
                                    echo "</a>
                                                    ";
                                }
                                // line 309
                                echo "                                                    ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 309)) {
                                    // line 310
                                    echo "                                                        <ul class=\"list-unstyled fsz-14\">
                                                            ";
                                    // line 311
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 311));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                        // line 312
                                        echo "                                                                <li class=\"my-1\">
                                                                    <a href=\"";
                                        // line 313
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 313);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 313);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 313);
                                        echo "</a>
                                                                </li>
                                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 316
                                    echo "                                                        </ul>
                                                    ";
                                }
                                // line 318
                                echo "                                                </div>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 320
                            echo "                                        ";
                        }
                        // line 321
                        echo "                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    // line 325
                    echo "                    </div>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 326
$context["oct_category"], "children", [], "any", false, false, false, 326) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 326) == "oct_blogcategory"))) {
                    // line 327
                    echo "                    <div class=\"ds-menu-maincategories-dropdown position-absolute ds-menu-maincategories-dropdown-narrow ds-menu-maincategories-dropdown-blog\">
                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                <span class=\"menu-back-icon\"></span>
                                ";
                    // line 331
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 331);
                    echo "
                            </div>
                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                <span class=\"menu-close-icon\"></span>
                            </button>
                        </div>
                        <div class=\"ds-menu-catalog-inner\">
                            <ul class=\"ds-menu-catalog-items\">
                                ";
                    // line 339
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 339));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 340
                        echo "                                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                        <a href=\"";
                        // line 341
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 341);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 341);
                        echo "</a>
                                        ";
                        // line 342
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 342)) {
                            // line 343
                            echo "                                            <span class=\"menu-chevron-icon\"></span>
                                            <div class=\"ds-menu-catalog\">
                                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                                        <span class=\"menu-back-icon\"></span>
                                                        ";
                            // line 348
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 348);
                            echo "
                                                    </div>
                                                    <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                        <span class=\"menu-close-icon\"></span>
                                                    </button>
                                                </div>
                                                <div class=\"ds-menu-catalog-inner\">
                                                    <ul class=\"ds-menu-catalog-items\">
                                                        ";
                            // line 356
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 356));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 357
                                echo "                                                            <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                <a class=\"flex-grow-1\" href=\"";
                                // line 358
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 358);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 358);
                                echo "</a>
                                                                ";
                                // line 359
                                if (twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 359)) {
                                    // line 360
                                    echo "                                                                    <span class=\"menu-chevron-icon\"></span>
                                                                    <div class=\"ds-menu-catalog\">
                                                                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\"
                                                                                data-sidebar=\"catalogback\">
                                                                                <span class=\"menu-back-icon\"></span>
                                                                                ";
                                    // line 366
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 366);
                                    echo "
                                                                            </div>
                                                                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                                                <span class=\"menu-close-icon\"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"ds-menu-catalog-inner\">
                                                                            <ul class=\"ds-menu-catalog-items\">
                                                                                ";
                                    // line 374
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 374));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch2"]) {
                                        // line 375
                                        echo "                                                                                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                        <a class=\"flex-grow-1\" href=\"";
                                        // line 376
                                        echo twig_get_attribute($this->env, $this->source, $context["ch2"], "href", [], "any", false, false, false, 376);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch2"], "name", [], "any", false, false, false, 376);
                                        echo "</a>
                                                                                    </li>
                                                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 379
                                    echo "                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                ";
                                }
                                // line 383
                                echo "                                                            </li>
                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 385
                            echo "                                                    </ul>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 389
                        echo "                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 391
                    echo "                            </ul>
                        </div>
                    </div>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 394
$context["oct_category"], "type", [], "any", false, false, false, 394) == "link")) {
                    // line 395
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "sub_links", [], "any", false, false, false, 395)) {
                        // line 396
                        echo "                        <div class=\"ds-menu-maincategories-dropdown position-absolute ds-menu-maincategories-dropdown-narrow ds-menu-maincategories-dropdown-link\">
                            <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                    <span class=\"menu-back-icon\"></span>
                                    ";
                        // line 400
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 400);
                        echo "
                                </div>
                                <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                    <span class=\"menu-close-icon\"></span>
                                </button>
                            </div>
                            <div class=\"ds-menu-catalog-inner\">
                                <ul class=\"ds-menu-catalog-items\">
                                    ";
                        // line 408
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "sub_links", [], "any", false, false, false, 408));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                            // line 409
                            echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a href=\"";
                            // line 410
                            echo twig_get_attribute($this->env, $this->source, $context["sub"], "href", [], "any", false, false, false, 410);
                            echo "\" ";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 410);
                            echo ">
                                                ";
                            // line 411
                            echo twig_get_attribute($this->env, $this->source, $context["sub"], "title", [], "any", false, false, false, 411);
                            echo "
                                            </a>
                                        </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 415
                        echo "                                </ul>
                            </div>
                        </div>
                    ";
                    }
                    // line 419
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 419) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 419) == "manufacturer"))) {
                    // line 420
                    echo "                    <div class=\"ds-menu-maincategories-dropdown position-absolute";
                    if ( !twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 420)) {
                        echo " ds-menu-maincategories-dropdown-narrow";
                    }
                    echo "\">
                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                <span class=\"menu-back-icon\"></span>
                                ";
                    // line 424
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 424);
                    echo "
                            </div>
                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                <span class=\"menu-close-icon\"></span>
                            </button>
                        </div>
                        <div class=\"";
                    // line 430
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 430)) {
                        echo "ds-megamenu-child-wrapper";
                    } else {
                        echo "ds-menu-catalog-inner";
                    }
                    echo "\">
                            ";
                    // line 431
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 431)) {
                        // line 432
                        echo "                                <div class=\"ds-megamenu-children ds-megamenu-children-manufacturers flex-grow-1 d-flex flex-wrap flex-column flex-xl-row dark-text p-xl-3\">
                                    ";
                        // line 433
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 433));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 434
                            echo "                                        <div class=\"ds-megamenu-children-item text-xl-center p-3\">
                                            <a href=\"";
                            // line 435
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 435);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 435);
                            echo "\" class=\"ds-megamenu-children-title fw-700 d-flex flex-xl-column align-items-center px-3 py-2 p-xl-0\">
                                                ";
                            // line 436
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 436)) {
                                // line 437
                                echo "                                                    <img class=\"my-xl-2 me-3 mx-xl-auto\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 437);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 437);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 437);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 437);
                                echo "\" loading=\"lazy\" />
                                                ";
                            }
                            // line 439
                            echo "                                                <span class=\"flex-grow-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 439);
                            echo "</span>
                                            </a>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 443
                        echo "                                </div>
                            ";
                    } else {
                        // line 445
                        echo "                                <ul class=\"ds-menu-catalog-items\">
                                    ";
                        // line 446
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 446));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 447
                            echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a class=\"flex-grow-1\" href=\"";
                            // line 448
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 448);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 448);
                            echo "</a>
                                        </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 451
                        echo "                                </ul>
                            ";
                    }
                    // line 453
                    echo "                        </div>
                    </div>
                ";
                }
                // line 456
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "    </ul>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            requestAnimationFrame(function() {
                horizontalMenu();
            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/menu/oct_menu_horizontal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1284 => 458,  1277 => 456,  1272 => 453,  1268 => 451,  1257 => 448,  1254 => 447,  1250 => 446,  1247 => 445,  1243 => 443,  1232 => 439,  1220 => 437,  1218 => 436,  1212 => 435,  1209 => 434,  1205 => 433,  1202 => 432,  1200 => 431,  1192 => 430,  1183 => 424,  1173 => 420,  1170 => 419,  1164 => 415,  1154 => 411,  1148 => 410,  1145 => 409,  1141 => 408,  1130 => 400,  1124 => 396,  1121 => 395,  1119 => 394,  1114 => 391,  1107 => 389,  1101 => 385,  1094 => 383,  1088 => 379,  1077 => 376,  1074 => 375,  1070 => 374,  1059 => 366,  1051 => 360,  1049 => 359,  1043 => 358,  1040 => 357,  1036 => 356,  1025 => 348,  1018 => 343,  1016 => 342,  1010 => 341,  1007 => 340,  1003 => 339,  992 => 331,  986 => 327,  984 => 326,  981 => 325,  975 => 321,  972 => 320,  965 => 318,  961 => 316,  948 => 313,  945 => 312,  941 => 311,  938 => 310,  935 => 309,  925 => 307,  918 => 304,  906 => 302,  904 => 301,  897 => 300,  895 => 299,  892 => 298,  887 => 297,  885 => 296,  882 => 295,  878 => 293,  872 => 292,  864 => 289,  861 => 288,  848 => 286,  844 => 285,  839 => 284,  837 => 283,  833 => 281,  828 => 280,  824 => 279,  821 => 278,  819 => 277,  815 => 275,  813 => 274,  809 => 272,  804 => 269,  798 => 268,  794 => 266,  781 => 264,  777 => 263,  773 => 262,  770 => 261,  767 => 260,  763 => 259,  759 => 257,  756 => 256,  749 => 254,  743 => 250,  738 => 247,  732 => 246,  728 => 244,  715 => 242,  711 => 241,  707 => 240,  704 => 239,  701 => 238,  697 => 237,  693 => 235,  690 => 234,  683 => 232,  677 => 228,  672 => 225,  666 => 224,  662 => 222,  649 => 220,  645 => 219,  641 => 218,  638 => 217,  635 => 216,  631 => 215,  627 => 213,  624 => 212,  613 => 209,  610 => 208,  606 => 207,  595 => 199,  587 => 193,  585 => 192,  579 => 191,  576 => 190,  572 => 189,  561 => 181,  554 => 176,  552 => 175,  546 => 174,  543 => 173,  539 => 172,  535 => 170,  533 => 169,  523 => 162,  513 => 158,  510 => 157,  506 => 155,  500 => 151,  497 => 150,  490 => 148,  486 => 146,  473 => 143,  470 => 142,  466 => 141,  463 => 140,  461 => 139,  453 => 138,  450 => 137,  445 => 136,  442 => 135,  438 => 133,  432 => 132,  428 => 130,  415 => 127,  412 => 126,  408 => 125,  402 => 123,  399 => 122,  395 => 121,  392 => 120,  390 => 119,  384 => 116,  381 => 115,  379 => 114,  375 => 112,  370 => 109,  364 => 108,  360 => 106,  347 => 104,  343 => 103,  339 => 102,  336 => 101,  333 => 100,  329 => 99,  325 => 97,  322 => 96,  315 => 94,  309 => 90,  304 => 87,  298 => 86,  294 => 84,  281 => 82,  277 => 81,  273 => 80,  270 => 79,  267 => 78,  263 => 77,  259 => 75,  256 => 74,  249 => 72,  243 => 68,  238 => 65,  232 => 64,  228 => 62,  215 => 60,  211 => 59,  207 => 58,  204 => 57,  201 => 56,  197 => 55,  193 => 53,  190 => 52,  180 => 48,  176 => 47,  173 => 46,  169 => 45,  163 => 41,  161 => 40,  155 => 39,  152 => 38,  148 => 37,  142 => 33,  140 => 32,  134 => 31,  131 => 30,  127 => 29,  123 => 27,  121 => 26,  114 => 25,  111 => 24,  107 => 22,  104 => 21,  101 => 20,  95 => 18,  85 => 16,  82 => 15,  78 => 13,  72 => 11,  62 => 9,  60 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/menu/oct_menu_horizontal.twig", "");
    }
}
