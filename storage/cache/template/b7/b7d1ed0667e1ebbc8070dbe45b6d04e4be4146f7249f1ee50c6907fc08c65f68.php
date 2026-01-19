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

/* catalog/product_form.twig */
class __TwigTemplate_2bef6c92c5a8d897229a631c3bc55b3f959b9d53cac9bde49f81d8f5895f101f extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">

<!-- quicksave -->
\t  ";
        // line 8
        if (($context["pidqs"] ?? null)) {
            // line 9
            echo "\t  <button id=\"qsave\" style=\"margin: 0 10px;\" data-toggle=\"tooltip\" title=\"Quick Save\" class=\"btn btn-warning\"><i class=\"fa fa-save\"></i></button>
\t  ";
        }
        // line 11
        echo "<!-- quicksave end -->
\t\t\t
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 14
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_data"] ?? null);
        echo "</a></li>

\t\t\t";
        // line 38
        if ((array_key_exists("oct_product_tabs_status", $context) && ($context["oct_product_tabs_status"] ?? null))) {
            // line 39
            echo "\t\t\t\t<li><a href=\"#tab-extra_tabs\" data-toggle=\"tab\">";
            echo ($context["tab_extra_tabs"] ?? null);
            echo "</a></li>
\t        ";
        }
        // line 41
        echo "\t\t\t
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
             
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 48
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 49
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 50
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 51
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 57
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 57);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 57);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 57);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 57);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 61
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\">
                    
\t\t\t<div class=\"form-group ";
            // line 63
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_seo_title_data"] ?? null), "product", [], "any", false, true, false, 63), "title_empty", [], "any", true, true, false, 63) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 63), "title_empty", [], "any", false, false, false, 63))) {
                echo "required";
            }
            echo "\">
\t\t\t
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null), "name", [], "any", false, false, false, 67)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\" class=\"form-control\"/>
                        ";
            // line 68
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null)) {
                // line 69
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 70
            echo " </div>
                    </div>

\t\t\t\t\t\t\t\t\t<!-- SEO Tags Generator : Preview . begin -->
                  ";
            // line 74
            if (($context["stg_status"] ?? null)) {
                // line 75
                echo "                  <div style=\"border: 2px dashed #ccc; padding: 15px;\">
                    <h4>";
                // line 76
                echo ($context["text_stg_preview"] ?? null);
                echo "</h4>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" style=\"padding-top: 0;\">";
                // line 78
                echo ($context["entry_meta_title"] ?? null);
                echo ":</label>
                      <div class=\"col-sm-10\">
                        ";
                // line 80
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["stg_preview"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[(($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["language"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["meta_title"] ?? null) : null);
                echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" style=\"padding-top: 0;\">";
                // line 84
                echo ($context["entry_meta_description"] ?? null);
                echo ":</label>
                      <div class=\"col-sm-10\">
                        ";
                // line 86
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["stg_preview"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[(($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["language"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["meta_description"] ?? null) : null);
                echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" style=\"padding-top: 0;\">";
                // line 90
                echo ($context["entry_meta_keyword"] ?? null);
                echo ":</label>
                      <div class=\"col-sm-10\">
                        ";
                // line 92
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["stg_preview"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[(($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["meta_keyword"] ?? null) : null);
                echo "
                      </div>
                    </div>
                    ";
                // line 95
                if (array_key_exists("entry_meta_h1", $context)) {
                    // line 96
                    echo "                    ";
                    // line 97
                    echo "                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" style=\"padding-top: 0;\">";
                    // line 98
                    echo ($context["entry_meta_h1"] ?? null);
                    echo ":</label>
                      <div class=\"col-sm-10\">
                        ";
                    // line 100
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["stg_preview"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[(($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["language"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["meta_h1"] ?? null) : null);
                    echo "
                      </div>
                    </div>
                    ";
                }
                // line 104
                echo "                    ";
                if (array_key_exists("entry_h1", $context)) {
                    // line 105
                    echo "                    ";
                    // line 106
                    echo "                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" style=\"padding-top: 0;\">";
                    // line 107
                    echo ($context["entry_h1"] ?? null);
                    echo ":</label>
                      <div class=\"col-sm-10\">
                        ";
                    // line 109
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["stg_preview"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[(($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["h1"] ?? null) : null);
                    echo "
                      </div>
                    </div>
                    ";
                }
                // line 113
                echo "                  </div>
                  ";
            }
            // line 115
            echo "                  <!-- SEO Tags Generator : Preview . end -->

                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["code"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["product_description"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["product_description"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null), "description", [], "any", false, false, false, 120)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    
\t\t\t<div class=\"form-group ";
            // line 124
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_seo_title_data"] ?? null), "product", [], "any", false, true, false, 124), "title_empty", [], "any", true, true, false, 124) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 124), "title_empty", [], "any", false, false, false, 124))) {
                echo "required";
            }
            echo "\">
\t\t\t
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["product_description"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_description"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128)] ?? null) : null), "meta_title", [], "any", false, false, false, 128)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128);
            echo "\" class=\"form-control\"/>
                        ";
            // line 129
            if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_meta_title"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129)] ?? null) : null)) {
                // line 130
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_meta_title"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 131
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
            echo "\" class=\"form-control\">";
            echo (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["product_description"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["product_description"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136)] ?? null) : null), "meta_description", [], "any", false, false, false, 136)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142);
            echo "\" class=\"form-control\">";
            echo (((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["product_description"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["product_description"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 142)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
            echo "][tag]\" value=\"";
            echo (((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["product_description"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["product_description"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148)] ?? null) : null), "tag", [], "any", false, false, false, 148)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
            echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "</div>
                <!-- SEO Tags Generator . begin -->
                ";
        // line 154
        if (($context["stg_status"] ?? null)) {
            // line 155
            echo "                <div style=\"border: 2px dashed #ccc; padding: 15px 30px;\">
                  <div class=\"form-group\">
                    <div class=\"col-sm-2\">
                      ";
            // line 158
            echo ($context["text_product_explain_stg_no_auto"] ?? null);
            echo "
                    </div>
                    <div class=\"col-sm-10\">
                      <label class=\"control-label form-check-label\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"stg_not_use\" value=\"1\" ";
            // line 162
            echo ((($context["stg_not_use_auto"] ?? null)) ? ("checked=\"checked\"") : (""));
            echo " />
                        &nbsp; ";
            // line 163
            echo ($context["entry_product_meta_stg_no_auto"] ?? null);
            echo " <span data-toggle=\"tooltip\" title=\"";
            echo ($context["entry_product_meta_stg_no_auto_help"] ?? null);
            echo "\"></span>
                      </label>
                    </div>
                  </div>
                </div>
                ";
        }
        // line 169
        echo "                <!-- SEO Tags Generator . end -->
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              
\t\t\t<div class=\"form-group ";
        // line 173
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_seo_title_data"] ?? null), "product", [], "any", false, true, false, 173), "title_empty", [], "any", true, true, false, 173) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 173), "title_empty", [], "any", false, false, false, 173))) {
            echo "required";
        }
        echo "\">

\t\t\t";
        // line 175
        if ( !twig_test_empty(($context["product_oct_stickers"] ?? null))) {
            // line 176
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 177
            echo ($context["enter_oct_product_stickers"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_oct_stickers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["product_oct_sticker"]) {
                // line 181
                echo "\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers[";
                // line 183
                echo $context["key"];
                echo "]\" value=\"";
                echo $context["key"];
                echo "\" ";
                if (twig_in_filter($context["key"], twig_get_array_keys_filter(($context["oct_stickers"] ?? null)))) {
                    echo "checked=\"checked\"";
                }
                echo " /> ";
                echo $context["product_oct_sticker"];
                echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['product_oct_sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 191
        echo "\t\t\t
\t\t\t
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 193
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 196
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
\t\t
                  ";
        // line 198
        if (($context["error_model"] ?? null)) {
            // line 199
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 200
        echo "</div>
                

 \t\t\t\t<div class=\"col-sm-1 text-right\">
\t\t\t\t\t<a type=\"button\"  title=\"Показать/Скрыть - Дополнительные поля \" class=\"btn btn-info \" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#pcollapse\"><i class=\"fa fa-arrows-v\"></i></a>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  
              <div class=\"collapse\" id=\"pcollapse\">
\t\t\t  <div class=\"form-group\">
\t\t
\t\t\t   <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 211
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
\t\t
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 214
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 218
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 220
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 224
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 226
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 230
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 232
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 236
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 238
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 242
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 244
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>

\t\t\t  </div>
\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 251
        echo ($context["entry_location"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 253
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 257
        echo ($context["entry_price"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 259
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 263
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 266
        echo ($context["text_none"] ?? null);
        echo "</option>


                    ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 270
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 270) == ($context["tax_class_id"] ?? null))) {
                // line 271
                echo "

                        <option value=\"";
                // line 273
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 273);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 273);
                echo "</option>


                      ";
            } else {
                // line 277
                echo "

                        <option value=\"";
                // line 279
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 279);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 279);
                echo "</option>


                      ";
            }
            // line 283
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 290
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 292
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 296
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 298
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 302
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 307
        if (($context["subtract"] ?? null)) {
            // line 308
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 310
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 311
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 315
            echo "

                      <option value=\"1\">";
            // line 317
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 318
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        }
        // line 322
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 328
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 334
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 334) == ($context["stock_status_id"] ?? null))) {
                // line 335
                echo "

                        <option value=\"";
                // line 337
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 337);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 337);
                echo "</option>


                      ";
            } else {
                // line 341
                echo "

                        <option value=\"";
                // line 343
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 343);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 343);
                echo "</option>


                      ";
            }
            // line 347
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 354
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 356
        if (($context["shipping"] ?? null)) {
            // line 357
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 358
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 360
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 361
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 362
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 363
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 364
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 366
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 367
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 368
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 372
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 375
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 381
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 385
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 388
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 391
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 397
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 403
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 403) == ($context["length_class_id"] ?? null))) {
                // line 404
                echo "

                        <option value=\"";
                // line 406
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 406);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 406);
                echo "</option>


                      ";
            } else {
                // line 410
                echo "

                        <option value=\"";
                // line 412
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 412);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 412);
                echo "</option>


                      ";
            }
            // line 416
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 423
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 425
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 429
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 435
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 435) == ($context["weight_class_id"] ?? null))) {
                // line 436
                echo "

                        <option value=\"";
                // line 438
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 438);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 438);
                echo "</option>


                      ";
            } else {
                // line 442
                echo "

                        <option value=\"";
                // line 444
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 444);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 444);
                echo "</option>


                      ";
            }
            // line 448
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 455
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 460
        if (($context["status"] ?? null)) {
            // line 461
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 463
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 464
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 468
            echo "

                      <option value=\"1\">";
            // line 470
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 471
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 475
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 481
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 483
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">

\t\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"select-main_category_id\"><span data-toggle=\"tooltip\" title=\"";
        // line 490
        echo ($context["help_main_category"] ?? null);
        echo "\">";
        echo ($context["entry_main_category"] ?? null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t<select name=\"main_category_id\" class=\"form-control\">
\t\t\t\t<option value=\"0\" selected=\"selected\">";
        // line 493
        echo ($context["text_none"] ?? null);
        echo "</option>
\t\t\t\t";
        // line 494
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 495
            echo "\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 495) == ($context["main_category_id"] ?? null))) {
                // line 496
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 496);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 496);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 498
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 498);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 498);
                echo "</option>
\t\t\t\t  ";
            }
            // line 500
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 501
        echo "\t\t\t</select>
\t\t\t</div>
\t\t\t</div>
        
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 506
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 508
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 512
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>

\t\t\t\t";
        // line 526
        echo "\t\t\t\t<div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 528
        $context["class"] = "odd";
        // line 529
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 530
            echo "                  ";
            if ((($context["class"] ?? null) == "even")) {
                // line 531
                echo "                  \t";
                $context["class"] = "odd";
                // line 532
                echo "                  ";
            } else {
                // line 533
                echo "                  \t";
                $context["class"] = "even";
                // line 534
                echo "                  ";
            }
            // line 535
            echo "                  <div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
                    ";
            // line 536
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 536), ($context["product_category"] ?? null))) {
                // line 537
                echo "                    <label>
                    <input type=\"checkbox\" name=\"product_category[]\" value=\"";
                // line 538
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 538);
                echo "\" checked=\"checked\" />
                    &nbsp;";
                // line 539
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 539);
                echo "
                \t</label>
                    ";
            } else {
                // line 542
                echo "                    <label>
                    <input type=\"checkbox\" name=\"product_category[]\" value=\"";
                // line 543
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 543);
                echo "\" />
                    &nbsp;";
                // line 544
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 544);
                echo "
                    </label>
\t\t\t\t\t";
            }
            // line 546
            echo " 
                  </div>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        echo "                </div>
               </div>
\t\t\t
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 554
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 556
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 557
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 558
            echo "                      <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 558);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 558);
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 559
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 559);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 561
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 565
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 567
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 568
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 569
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 569), ($context["product_store"] ?? null))) {
                // line 570
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 570);
                echo "\" checked=\"checked\"/>
                            ";
                // line 571
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 571);
                echo "
                          ";
            } else {
                // line 573
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 573);
                echo "\"/>
                            ";
                // line 574
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 574);
                echo "
                          ";
            }
            // line 575
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 577
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 581
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 583
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 585
            echo "                      <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 585);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 585);
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 586
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 586);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 588
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 592
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 594
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 595
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 596
            echo "                      <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 596);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 596);
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 597
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 597);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">

                <!-- /*attribute_text_select*/ -->
                ";
        // line 607
        if (($context["status_attribute_text"] ?? null)) {
            // line 608
            echo "                    ";
            echo ($context["status_attribute_text"] ?? null);
            echo "
                <div id=\"parent_blok\"><div id=\"loader_img\"></div><div id=\"popup_save\"></div><div id=\"modal_window\"></div></div>
                <div id=\"error_warning\"></div><div id=\"ssuu\"></div>
                <div id=\"choose_gather\" class=\"group_bloc\">
                    <table class=\"max_width table-responsive\">
                        <thead>
                            <tr>
                                <td id=\"blok_gather\"><label class=\"control_label\">";
            // line 615
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["text_legend"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["legend"] ?? null) : null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["choose_gather"] ?? null) : null);
            echo "</label><div id=\"blok_add_new_gather\" class=\"add_value\"><span id=\"add_new_gather\" data-toggle=\"tooltip\" title=\"";
            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["text_legend"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["button"] ?? null) : null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["add_new_gather"] ?? null) : null);
            echo "\" class=\"label label-success\"><i class=\"fa fa-plus-circle\"></i></span></div></td>
                                <td class=\"max_width\">
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 618
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["text_legend"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["legend"] ?? null) : null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["gather_name"] ?? null) : null);
            echo " ";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["text_legend"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["help"] ?? null) : null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["autocomplete"] ?? null) : null);
            echo "\" autocomplete=\"off\" name=\"attribute_gather_name\" value=\"\" />
                                        <input id=\"attribute_gather_id\" type=\"hidden\" name=\"attribute_gather_id\" value=\"\" />
                                        <div class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default clear_pole\"><i class=\"fa fa-times\"></i></button></div>
                                    </div>
                                </td>
                                <td class=\"uprav\"><button type=\"button\" onclick=\"addGather()\" data-toggle=\"tooltip\" title=\"";
            // line 623
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["text_legend"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["button"] ?? null) : null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["add_gather"] ?? null) : null);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-arrow-circle-down\"></i>&nbsp;&nbsp;<i class=\"fa fa-plus-circle\"></i></button></td>
                                <td class=\"uprav\"><button type=\"button\" onclick=\"\$('#attribute_text tbody').empty();\$('#ssuu').empty();\$('#error_warning').empty();\" data-toggle=\"tooltip\" title=\"";
            // line 624
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["text_legend"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["button"] ?? null) : null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["clear_poles"] ?? null) : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <table id=\"attribute_text\" class=\"table table-bordered\">
                    <thead>
                        <tr>
                          <td class=\"text-left\">";
            // line 632
            echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["text_legend"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["legend"] ?? null) : null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["attribute"] ?? null) : null);
            echo "<span class=\"help_text\">";
            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["text_legend"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["help"] ?? null) : null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["autocomplete"] ?? null) : null);
            echo "</span></td>
                          <td class=\"text-left\">";
            // line 633
            echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["text_legend"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["legend"] ?? null) : null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["text"] ?? null) : null);
            echo "<span class=\"help_text\">";
            echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["text_legend"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["help"] ?? null) : null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["autocomplete"] ?? null) : null);
            echo "</span></td>
                          <td class=\"text-center add_pole uprav\"><button type=\"button\" onclick=\"addPole(0);\" data-toggle=\"tooltip\" title=\"";
            // line 634
            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["text_legend"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["button"] ?? null) : null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["add"] ?? null) : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 638
            $context["row_attrb"] = 0;
            // line 639
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_texts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pole"]) {
                // line 640
                echo "                        <tr id=\"row_attrb_";
                echo ($context["row_attrb"] ?? null);
                echo "\" class=\"main_row\">
                            <td class=\"attrb main_attrib\">
                                ";
                // line 642
                if ((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["pole"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["name_group"] ?? null) : null)) {
                    // line 643
                    echo "                                <div class=\"name_group\">";
                    echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["pole"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["name_group"] ?? null) : null);
                    echo "</div>
                                ";
                }
                // line 645
                echo "                                <div class=\"input-group\"><input type=\"text\" autocomplete=\"off\" name=\"attribute_text[";
                echo ($context["row_attrb"] ?? null);
                echo "][name]\" value=\"";
                echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["pole"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["name"] ?? null) : null);
                echo "\" class=\"form-control attrb_temp\" /><div class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default clear_pole_main\"><i class=\"fa fa-times\"></i></button></div></div>
                                <input type=\"hidden\" name=\"attribute_text[";
                // line 646
                echo ($context["row_attrb"] ?? null);
                echo "][attribute_id]\" value=\"";
                echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["pole"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["attribute_id"] ?? null) : null);
                echo "\" class=\"main_attrib_id\" />
                                ";
                // line 647
                if ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["error_attribute_text"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[($context["row_attrb"] ?? null)] ?? null) : null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["attribute_id"] ?? null) : null)) {
                    // line 648
                    echo "                                    <div class=\"error_text\">";
                    echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["error_attribute_text"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[($context["row_attrb"] ?? null)] ?? null) : null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["attribute_id"] ?? null) : null);
                    echo "</div>
                                ";
                }
                // line 650
                echo "                            </td>
                            <td class=\"attrb text_attrib\">
                                <div class=\"add_value\"><span data-toggle=\"tooltip\" title=\"";
                // line 652
                echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["text_legend"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["button"] ?? null) : null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["add_new_value"] ?? null) : null);
                echo "\" class=\"label label-primary add_new_value\"><i class=\"fa fa-plus-circle\"></i></span></div>
                                <div class=\"input-group\"><input type=\"text\" id=\"text_temp";
                // line 653
                echo ($context["row_attrb"] ?? null);
                echo "\" value=\"\" class=\"form-control text_temp\" /><div class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default clear_pole\"><i class=\"fa fa-times\"></i></button></div></div>
                                ";
                // line 654
                if ((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["error_attribute_text"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[($context["row_attrb"] ?? null)] ?? null) : null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["text"] ?? null) : null)) {
                    // line 655
                    echo "                                    <div id=\"error_text";
                    echo ($context["row_attrb"] ?? null);
                    echo "\" class=\"error_text\">";
                    echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["error_attribute_text"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[($context["row_attrb"] ?? null)] ?? null) : null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["text"] ?? null) : null);
                    echo "</div>
                                ";
                }
                // line 657
                echo "                                <div id=\"attrb_text_";
                echo ($context["row_attrb"] ?? null);
                echo "\" class=\"imt_textarea scrolis\">
                                    ";
                // line 658
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["pole"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["param"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 659
                    echo "                                        ";
                    if ((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["val"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["text_id"] ?? null) : null)) {
                        // line 660
                        echo "                                    <div id=\"row_attrb_";
                        echo ($context["row_attrb"] ?? null);
                        echo "_";
                        echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["val"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["text_id"] ?? null) : null);
                        echo "\">
                                        <i class=\"fa fa-minus-circle curs_point color_red\"></i> ";
                        // line 661
                        echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["val"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["text"] ?? null) : null);
                        echo "
                                        <input type=\"hidden\" name=\"attribute_text[";
                        // line 662
                        echo ($context["row_attrb"] ?? null);
                        echo "][param][]\" value=\"";
                        echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["val"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["text_id"] ?? null) : null);
                        echo "\" />
                                    </div>
                                        ";
                    }
                    // line 665
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 666
                echo "                                </div>
                            </td>
                            <td>
                                <button type=\"button\" onclick=\"\$('#row_attrb_";
                // line 669
                echo ($context["row_attrb"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["text_legend"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["button"] ?? null) : null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["remove"] ?? null) : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                            </td>
                        </tr>
                            ";
                // line 672
                $context["row_attrb"] = (($context["row_attrb"] ?? null) + 1);
                // line 673
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pole'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 674
            echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"2\"></td><td class=\"text-center add_pole\"><button type=\"button\" onclick=\"addPole(1);\" data-toggle=\"tooltip\" title=\"";
            // line 677
            echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["text_legend"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["button"] ?? null) : null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["add"] ?? null) : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <input type=\"hidden\" name=\"attribute_text_empty\" />
                <div id=\"go_top\">^</div>
                <script> var row_attrb = ";
            // line 683
            echo ($context["row_attrb"] ?? null);
            echo "; </script>
                ";
            // line 684
            echo ($context["js_for_product"] ?? null);
            echo "
                ";
        }
        // line 686
        echo "                <!-- /*end attribute_text_select*/ -->
\t\t
\t\t\t";
        // line 688
        if ((($context["atpresets_installed"] ?? null) == 1)) {
            // line 689
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<select name=\"attemplate\" id=\"attemplate\" class=\"form-control\" onchange=\"if (\$(this).find(':selected').val()<0) {\$('#attemmplate_button_add').prop('disabled','disabled');\$('#attemmplate_button_replace').prop('disabled','disabled');} else {\$('#attemmplate_button_add').removeAttr('disabled');\$('#attemmplate_button_replace').removeAttr('disabled');}\">
\t\t\t\t\t<option value=\"-1\"></option>\t\t\t\t\t\t\t\t
\t\t\t\t\t";
            // line 693
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attemplates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attemplate"]) {
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"";
                // line 694
                echo twig_get_attribute($this->env, $this->source, $context["attemplate"], "attemplate_id", [], "any", false, false, false, 694);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["attemplate"], "name", [], "any", false, false, false, 694);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attemplate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 696
            echo "\t\t\t\t  </select>
\t\t\t\t\t<script>

\t\t\t\t\t</script>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<button id=\"attemmplate_button_add\" disabled=\"disabled\" data-loading-text=\"";
            // line 702
            echo ($context["text_loading"] ?? null);
            echo "\" type=\"button\" onclick=\"update_attributes(\$('#attemplate').val(),1);\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_attemplate_add"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_attemplate_add"] ?? null);
            echo "</button>
\t\t\t\t\t<button id=\"attemmplate_button_replace\" disabled=\"disabled\" data-loading-text=\"";
            // line 703
            echo ($context["text_loading"] ?? null);
            echo "\" type=\"button\" onclick=\"update_attributes(\$('#attemplate').val(),2);\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_attemplate_replace"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_attemplate_replace"] ?? null);
            echo "</button>
\t\t\t\t\t<button id=\"attemmplate_button_default\" data-loading-text=\"";
            // line 704
            echo ($context["text_loading"] ?? null);
            echo "\" type=\"button\" onclick=\"update_attributes(\$('#attemplate').val(),0);\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_attemplate_default"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_attemplate_default"] ?? null);
            echo "</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<select name=\"attribute_group_id\" id=\"attgroup\" class=\"form-control\" onchange=\"if (\$(this).find(':selected').val()>0) {update_attributes(\$('#attgroup').val(),3);}\">
\t\t\t\t\t<option value=\"-1\">";
            // line 708
            echo ($context["text_add_group"] ?? null);
            echo "</option>\t\t\t\t\t\t\t\t
\t\t\t\t\t";
            // line 709
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attgroups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attgroup"]) {
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"";
                // line 710
                echo twig_get_attribute($this->env, $this->source, $context["attgroup"], "attribute_group_id", [], "any", false, false, false, 710);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["attgroup"], "name", [], "any", false, false, false, 710);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 712
            echo "\t\t\t\t  </select>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t<div class=\"col-sm-2\" id=\"new_attemplate_name\">
\t\t\t\t\t<input type=\"text\" name=\"new_attemplate_name\" value=\"\" placeholder=\"";
            // line 715
            echo ($context["text_new_attemplate_name"] ?? null);
            echo "\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<button id=\"attemmplate_button_save\" data-loading-text=\"";
            // line 718
            echo ($context["text_loading"] ?? null);
            echo "\" type=\"button\" onclick=\"save_attemplate();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_save_attemplate"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_save_attemplate"] ?? null);
            echo "</button>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t";
        }
        // line 722
        echo "\t\t\t
            
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 727
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 728
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 734
        $context["attribute_row"] = 0;
        // line 735
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 736
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 737
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 737);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> \t\t
\t\t\t\t\t\t<input type=\"hidden\" name=\"product_attribute[";
            // line 738
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 738);
            echo "\" />\t\t\t
\t\t\t\t\t\t";
            // line 739
            if ((($context["atpresets_installed"] ?? null) == 1)) {
                // line 740
                echo "\t\t\t\t\t\t\t";
                if ((($context["atpresets_selecttype"] ?? null) == 0)) {
                    // line 741
                    echo "\t\t\t\t\t\t\t\t<br><div class=\"test\"><input type=\"text\" name=\"product_attribute[";
                    echo ($context["attribute_row"] ?? null);
                    echo "][preset]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "preset_esc", [], "any", false, false, false, 741);
                    echo "\" placeholder=\"";
                    echo ($context["text_preset_value"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_attribute[";
                    // line 742
                    echo ($context["attribute_row"] ?? null);
                    echo "][preset_id][]\" value=\"";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_attribute"], "preset_id", [], "any", false, false, false, 742)) == 1)) {
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_attribute"], "preset_id", [], "any", false, false, false, 742), 0, [], "any", false, false, false, 742);
                    }
                    echo "\" /></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 745
                    echo "\t\t\t\t\t\t\t\t<br><div>
\t\t\t\t\t\t\t\t\t";
                    // line 746
                    if ((($context["atpresets_allow_multiple"] ?? null) == 1)) {
                        // line 747
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"allow_multiple";
                        // line 748
                        echo ($context["attribute_row"] ?? null);
                        echo "\" name=\"product_attribute[";
                        echo ($context["attribute_row"] ?? null);
                        echo "][allow_multiple]\"
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 749
                        if ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["product_attribute"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["allow_multiple"] ?? null) : null)) {
                            echo "checked=\"checked\"";
                        }
                        // line 750
                        echo "\t\t\t\t\t\t\t\t\t\t\tonchange=\"changeSelectionMode(";
                        echo ($context["attribute_row"] ?? null);
                        echo ");\"/>
\t\t\t\t\t\t\t\t\t\t<label for=\"allow_multiple";
                        // line 751
                        echo ($context["attribute_row"] ?? null);
                        echo "\">";
                        echo ($context["text_allow_multiple"] ?? null);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 754
                    echo "\t\t\t\t\t\t\t\t\t<select ";
                    if (twig_get_attribute($this->env, $this->source, $context["product_attribute"], "allow_multiple", [], "any", false, false, false, 754)) {
                        echo "multiple style=\"height:200px\"";
                    }
                    echo " alt=\"";
                    echo ($context["attribute_row"] ?? null);
                    echo "\" name=\"product_attribute[";
                    echo ($context["attribute_row"] ?? null);
                    echo "][preset_id][]\" id=\"input-preset";
                    echo ($context["attribute_row"] ?? null);
                    echo "\" class=\"form-control\" onchange=\"select_preset(this);\" onfocus=\"check_attribute(this);\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option value=\"-1\"></option>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 756
                    $context["current_att"] = 0;
                    // line 757
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["all_presets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["preset"]) {
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                        // line 758
                        if ((($context["current_att"] ?? null) != twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 758))) {
                            $context["current_att"] = twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 758);
                            // line 759
                            echo "\t\t\t\t\t\t\t\t\t\t<option color=\"red\" class=\"att";
                            echo ($context["attribute_row"] ?? null);
                            echo " att";
                            echo ($context["attribute_row"] ?? null);
                            echo "-";
                            echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["preset"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["attribute_id"] ?? null) : null);
                            echo "\" value=\"0\" disabled=\"disabled\" style=\"color:red\">";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_name", [], "any", false, false, false, 759);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 760
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                        // line 761
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["preset"], "preset_id", [], "any", false, false, false, 761), twig_get_attribute($this->env, $this->source, $context["product_attribute"], "preset_id", [], "any", false, false, false, 761))) {
                            // line 762
                            echo "\t\t\t\t\t\t\t\t\t\t<option alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 762);
                            echo "\" class=\"pre";
                            echo ($context["attribute_row"] ?? null);
                            echo " pre";
                            echo ($context["attribute_row"] ?? null);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 762);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "preset_id", [], "any", false, false, false, 762);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "text_esc", [], "any", false, false, false, 762);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 764
                            echo "\t\t\t\t\t\t\t\t\t\t<option alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 764);
                            echo "\" class=\"pre";
                            echo ($context["attribute_row"] ?? null);
                            echo " pre";
                            echo ($context["attribute_row"] ?? null);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 764);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "preset_id", [], "any", false, false, false, 764);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "text_esc", [], "any", false, false, false, 764);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 766
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 767
                    echo "\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t<script>

\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('.att";
                    // line 771
                    echo ($context["attribute_row"] ?? null);
                    echo "').hide();
\t\t\t\t\t\t\t\t\t\$('.pre";
                    // line 772
                    echo ($context["attribute_row"] ?? null);
                    echo "').hide();
\t\t\t\t\t\t\t\t\t\$('.pre";
                    // line 773
                    echo ($context["attribute_row"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 773);
                    echo "').show();
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 776
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 777
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t
                        <td class=\"text-left\">";
            // line 781
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 782
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 782);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 782);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 782);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 782);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 782)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 782)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 782)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 782)] ?? null) : null), "text", [], "any", false, false, false, 782)) : (""));
                echo "</textarea>

\t\t\t\t";
                // line 784
                if (((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1) && (($context["atpresets_installed"] ?? null) == 1))) {
                    // line 785
                    echo "\t\t\t\t<span onclick=\"copy_values(";
                    echo ($context["attribute_row"] ?? null);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 785);
                    echo ");\" class=\"input-group-addon\" style=\"cursor:pointer;cursor:hand;\" title=\"";
                    echo ($context["text_copy_value"] ?? null);
                    echo "\">
\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\" style=\"font-size: large;\"></i>
\t\t\t\t</span>
\t\t\t\t";
                }
                // line 789
                echo "\t\t\t
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 791
            echo "</td>
                        
\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#attribute-row";
            // line 794
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button><br>
\t\t\t\t\t\t\t";
            // line 795
            if ((($context["atpresets_installed"] ?? null) == 1)) {
                // line 796
                echo "\t\t\t\t\t\t\t<button type=\"button\" onclick=\"add_preset(";
                echo ($context["attribute_row"] ?? null);
                echo ")\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_new_preset"] ?? null);
                echo "\" class=\"btn btn-primary\" style=\"margin-top:20px;\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t\t\t";
            }
            // line 798
            echo "\t\t\t\t\t\t</td>
\t\t\t
                      </tr>
                      ";
            // line 801
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 802
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 803
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 808
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

\t\t\t";
        // line 815
        if ((array_key_exists("oct_product_tabs_status", $context) && ($context["oct_product_tabs_status"] ?? null))) {
            // line 816
            echo "\t        <div class=\"tab-pane\" id=\"tab-extra_tabs\">
\t          <div class=\"col-sm-2\">
\t            <ul class=\"nav nav-pills nav-stacked\" id=\"extra_tabs\">
\t              ";
            // line 819
            $context["extra_tab_row"] = 0;
            // line 820
            echo "\t              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_product_extra_tab"]) {
                // line 821
                echo "\t              <li><a href=\"#tab-extra_tabs";
                echo ($context["extra_tab_row"] ?? null);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-extra_tabs";
                echo ($context["extra_tab_row"] ?? null);
                echo "\\']').parent().remove(); \$('#tab-extra_tabs";
                echo ($context["extra_tab_row"] ?? null);
                echo "').remove(); \$('#extra_tabs a:first').tab('show');\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["oct_product_extra_tab"], "title", [], "any", false, false, false, 821);
                echo "</a></li>
\t              ";
                // line 822
                $context["extra_tab_row"] = (($context["extra_tab_row"] ?? null) + 1);
                // line 823
                echo "\t              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_product_extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 824
            echo "\t              <li>
\t                <input type=\"text\" name=\"extra_tabs\" value=\"\" placeholder=\"";
            // line 825
            echo ($context["entry_extra_tab"] ?? null);
            echo "\" id=\"input-extra_tabs\" class=\"form-control\" />
\t              </li>
\t            </ul>
\t          </div>
\t          <div class=\"col-sm-10\">
\t            <div class=\"tab-content\">
\t              ";
            // line 831
            $context["extra_tab_row"] = 0;
            // line 832
            echo "\t              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_product_extra_tab"]) {
                // line 833
                echo "\t              <div class=\"tab-pane\" id=\"tab-extra_tabs";
                echo ($context["extra_tab_row"] ?? null);
                echo "\">
\t                <input type=\"hidden\" name=\"oct_product_extra_tab[";
                // line 834
                echo ($context["extra_tab_row"] ?? null);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_product_extra_tab"], "title", [], "any", false, false, false, 834);
                echo "\" />
\t                <input type=\"hidden\" name=\"oct_product_extra_tab[";
                // line 835
                echo ($context["extra_tab_row"] ?? null);
                echo "][extra_tab_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_product_extra_tab"], "extra_tab_id", [], "any", false, false, false, 835);
                echo "\" />
\t                <ul class=\"nav nav-tabs\" id=\"extra_tab_description_div";
                // line 836
                echo ($context["extra_tab_row"] ?? null);
                echo "\">
\t                  ";
                // line 837
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 838
                    echo "\t                  <li><a href=\"#extra_tab_description";
                    echo ($context["extra_tab_row"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 838);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 838);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 838);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 838);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 838);
                    echo "</a></li>
\t                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 840
                echo "\t                </ul>
\t                <div class=\"tab-content\">
\t                  ";
                // line 842
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 843
                    echo "\t                  <div class=\"tab-pane\" id=\"extra_tab_description";
                    echo ($context["extra_tab_row"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 843);
                    echo "\">
\t                    <textarea id=\"extra_tab_description_textarea";
                    // line 844
                    echo ($context["extra_tab_row"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 844);
                    echo "\" name=\"oct_product_extra_tab[";
                    echo ($context["extra_tab_row"] ?? null);
                    echo "][oct_product_extra_tab_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 844);
                    echo "][text]\" placeholder=\"";
                    echo ($context["entry_text"] ?? null);
                    echo "\" data-toggle=\"summernote\" data-lang=\"";
                    echo ($context["summernote"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_product_extra_tab"], "oct_product_extra_tab_description", [], "array", false, true, false, 844), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 844), [], "array", true, true, false, 844)) ? ((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["oct_product_extra_tab"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["oct_product_extra_tab_description"] ?? null) : null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 844)] ?? null) : null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["text"] ?? null) : null)) : (""));
                    echo "</textarea>
\t                  </div>
\t                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 847
                echo "\t                </div>
\t              </div>
\t              ";
                // line 849
                $context["extra_tab_row"] = (($context["extra_tab_row"] ?? null) + 1);
                // line 850
                echo "\t              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_product_extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 851
            echo "\t            </div>
\t          </div>
\t        </div>
\t        <script>
\t          var extra_tab_row = ";
            // line 855
            echo ($context["extra_tab_row"] ?? null);
            echo ";

\t          \$('input[name=\\'extra_tabs\\']').autocomplete({
\t            'source': function(request, response) {
\t              \$.ajax({
\t                url: 'index.php?route=octemplates/module/oct_product_tabs/autocomplete&user_token=";
            // line 860
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t                dataType: 'json',
\t                \tcache: false,
\t                success: function(json) {
\t                  response(\$.map(json, function(item) {
\t                    return {
\t                      label: item['title'],
\t                      value: item['extra_tab_id']
\t                    }
\t                  }));
\t                }
\t              });
\t            },
\t            'select': function(item) {
\t              html  = '<div class=\"tab-pane\" id=\"tab-extra_tabs'+extra_tab_row+'\">';
\t                html  += '<input type=\"hidden\" name=\"oct_product_extra_tab['+extra_tab_row+'][title]\" value=\"'+item['label']+'\" />';
\t                html  += '<input type=\"hidden\" name=\"oct_product_extra_tab['+extra_tab_row+'][extra_tab_id]\" value=\"'+item['value']+'\" />';
\t                html  += '<ul class=\"nav nav-tabs\" id=\"extra_tab_description_div'+extra_tab_row+'\">';
\t                  ";
            // line 878
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 879
                echo "\t                  html  += '<li><a href=\"#extra_tab_description'+extra_tab_row+'";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 879);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 879);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 879);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 879);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 879);
                echo "</a></li>';
\t                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 881
            echo "\t                html  += '</ul>';
\t                html  += '<div class=\"tab-content\">';
\t                  ";
            // line 883
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 884
                echo "\t                  html  += '<div class=\"tab-pane\" id=\"extra_tab_description'+extra_tab_row+'";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 884);
                echo "\">';
\t                    html  += '<textarea name=\"oct_product_extra_tab['+extra_tab_row+'][oct_product_extra_tab_description][";
                // line 885
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 885);
                echo "][text]\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" data-toggle=\"summernote\" data-lang=\"";
                echo ($context["summernote"] ?? null);
                echo "\" class=\"form-control\" id=\"extra_tab_description_textarea'+extra_tab_row+'";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 885);
                echo "\"></textarea>';
\t                  html  += '</div>';
\t                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 888
            echo "\t                html  += '</div>';
\t              html  += '</div>';

\t              \$('#tab-extra_tabs .col-sm-10 > .tab-content').append(html);

\t              \$('#extra_tabs > li:last-child').before('<li><a href=\"#tab-extra_tabs' + extra_tab_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-extra_tabs' + extra_tab_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-extra_tabs' + extra_tab_row + '\\').remove(); \$(\\'#extra_tabs a:first\\').tab(\\'show\\')\"></i> ' + item['label'] + '</li>');

\t              \$('#extra_tabs a[href=\\'#tab-extra_tabs' + extra_tab_row + '\\']').tab('show');

\t              \$('#extra_tab_description_div'+extra_tab_row).tab('show');

\t              \$('#extra_tab_description_div'+extra_tab_row+' a:first').trigger('click');

\t              extra_tab_row++;

\t\t\t\t  \$('[data-toggle=\\'summernote\\']').each(function() {
\t\t\t\t\tvar element = this;

\t\t\t\t\t\$(element).summernote({
\t\t\t\t\t\tlang: \$(this).attr('data-lang'),
\t\t\t\t\t\tdisableDragAndDrop: true,
\t\t\t\t\t\theight: 300,
\t\t\t\t\t\temptyPara: '',
\t\t\t\t\t\tcodemirror: { // codemirror options
\t\t\t\t\t\t\tmode: 'text/html',
\t\t\t\t\t\t\thtmlMode: true,
\t\t\t\t\t\t\tlineNumbers: true,
\t\t\t\t\t\t\ttheme: 'monokai'
\t\t\t\t\t\t},
\t\t\t\t\t\tfontsize: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '24', '30', '36', '48' , '64'],
\t\t\t\t\t\ttoolbar: [
\t\t\t\t\t\t\t['style', ['style']],
\t\t\t\t\t\t\t['font', ['bold', 'underline', 'clear']],
\t\t\t\t\t\t\t['fontname', ['fontname']],
\t\t\t\t\t\t\t['fontsize', ['fontsize']],
\t\t\t\t\t\t\t['color', ['color']],
\t\t\t\t\t\t\t['para', ['ul', 'ol', 'paragraph']],
\t\t\t\t\t\t\t['table', ['table']],
\t\t\t\t\t\t\t['insert', ['link', 'image', 'video']],
\t\t\t\t\t\t\t['view', ['fullscreen', 'codeview', 'help']]
\t\t\t\t\t\t],
\t\t\t\t\t\tpopover: {
\t\t\t           \t\timage: [
\t\t\t\t\t\t\t\t['custom', ['imageAttributes']],
\t\t\t\t\t\t\t\t['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
\t\t\t\t\t\t\t\t['float', ['floatLeft', 'floatRight', 'floatNone']],
\t\t\t\t\t\t\t\t['remove', ['removeMedia']]
\t\t\t\t\t\t\t],
\t\t\t\t\t\t},
\t\t\t\t\t\tbuttons: {
\t\t\t    \t\t\timage: function() {
\t\t\t\t\t\t\t\tvar ui = \$.summernote.ui;

\t\t\t\t\t\t\t\t// create button
\t\t\t\t\t\t\t\tvar button = ui.button({
\t\t\t\t\t\t\t\t\tcontents: '<i class=\"note-icon-picture\" />',
\t\t\t\t\t\t\t\t\ttooltip: \$.summernote.lang[\$.summernote.options.lang].image.image,
\t\t\t\t\t\t\t\t\tclick: function () {
\t\t\t\t\t\t\t\t\t\t\$('#modal-image').remove();

\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=common/filemanager&user_token=' + getURLVar('user_token'),
\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-image i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-image').prop('disabled', true);
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-image i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-image').prop('disabled', false);
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\t\t\t\$('body').append('<div id=\"modal-image\" class=\"modal\">' + html + '</div>');

\t\t\t\t\t\t\t\t\t\t\t\t\$('#modal-image').modal('show');

\t\t\t\t\t\t\t\t\t\t\t\t\$('#modal-image').delegate('a.thumbnail', 'click', function(e) {
\t\t\t\t\t\t\t\t\t\t\t\t\te.preventDefault();

\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).summernote('insertImage', \$(this).attr('href'));

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#modal-image').modal('hide');
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\treturn button.render();
\t\t\t\t\t\t\t}
\t\t\t  \t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t            }
\t          });

\t          \$('#extra_tabs a:first').tab('show');

\t          ";
            // line 986
            $context["extra_tab_row"] = 0;
            // line 987
            echo "\t          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_product_extra_tab"]) {
                // line 988
                echo "\t\t\t  \t\$('#extra_tab_description_div";
                echo ($context["extra_tab_row"] ?? null);
                echo " a:first').tab('show');

\t          \t";
                // line 990
                $context["extra_tab_row"] = (($context["extra_tab_row"] ?? null) + 1);
                // line 991
                echo "\t          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_product_extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 992
            echo "
\t          </script>
\t        ";
        }
        // line 995
        echo "\t\t\t
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 1000
        $context["option_row"] = 0;
        // line 1001
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 1002
            echo "                      <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1002);
            echo "</a></li>
                      ";
            // line 1003
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 1004
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1005
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 1006
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 1011
        $context["option_row"] = 0;
        // line 1012
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 1013
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 1014
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 1015
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 1015);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1015);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1015);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1015);
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 1017
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 1019
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                              ";
            // line 1022
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 1022)) {
                // line 1023
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 1025
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\">";
                // line 1026
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            } else {
                // line 1030
                echo "

                                <option value=\"1\">";
                // line 1032
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 1033
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            }
            // line 1037
            echo "

                            </select>
                          </div>
                        </div>
                        ";
            // line 1042
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1042) == "text")) {
                // line 1043
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1044
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 1046
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1046);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 1050
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1050) == "textarea")) {
                // line 1051
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1052
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 1054
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1054);
                echo "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 1058
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1058) == "file")) {
                // line 1059
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1060
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 1062
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1062);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 1066
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1066) == "date")) {
                // line 1067
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1068
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 1071
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1071);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 1077
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1077) == "time")) {
                // line 1078
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1079
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 1082
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1082);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 1088
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1088) == "datetime")) {
                // line 1089
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1090
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 1093
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1093);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 1099
            echo "                        ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1099) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1099) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1099) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1099) == "image"))) {
                // line 1100
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 1101
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 1104
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
\t\t\t\t  <td class=\"text-left\">";
                // line 1105
                echo ($context["entry_optsku"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 1106
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 1107
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 1108
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 1109
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 1110
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 1116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 1116));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 1117
                    echo "                                  <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 1118
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 1121
                    if ((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["option_values"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1121)] ?? null) : null)) {
                        // line 1122
                        echo "
                                          ";
                        // line 1123
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = ($context["option_values"] ?? null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1123)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 1124
                            echo "
                                            ";
                            // line 1125
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1125) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 1125))) {
                                // line 1126
                                echo "

                                              <option value=\"";
                                // line 1128
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1128);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1128);
                                echo "</option>


                                            ";
                            } else {
                                // line 1132
                                echo "

                                              <option value=\"";
                                // line 1134
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1134);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1134);
                                echo "</option>


                                            ";
                            }
                            // line 1138
                            echo "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1139
                        echo "                                        ";
                    }
                    // line 1140
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 1142
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 1142);
                    echo "\"/></td>
\t\t\t\t    <td class=\"text-left\"><input type=\"text\" name=\"product_option[";
                    // line 1143
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][optsku]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "optsku", [], "any", false, false, false, 1143);
                    echo "\" placeholder=\"";
                    echo ($context["entry_optsku"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 1144
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1144);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 1145
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                        ";
                    // line 1148
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1148)) {
                        // line 1149
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 1151
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 1152
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    } else {
                        // line 1156
                        echo "

                                          <option value=\"1\">";
                        // line 1158
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 1159
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    }
                    // line 1163
                    echo "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 1166
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control\">


                                        ";
                    // line 1169
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1169) == "+")) {
                        // line 1170
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 1176
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 1182
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1182) == "-")) {
                        // line 1183
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 1189
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 1195
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 1197
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1197);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 1198
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 1201
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1201) == "+")) {
                        // line 1202
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 1208
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 1214
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1214) == "-")) {
                        // line 1215
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 1221
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 1227
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 1229
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1229);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 1230
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 1233
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1233) == "+")) {
                        // line 1234
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 1240
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 1246
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1246) == "-")) {
                        // line 1247
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 1253
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 1259
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 1261
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1261);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 1262
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  ";
                    // line 1264
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 1265
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1266
                echo "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"7\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 1271
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 1276
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                            ";
                // line 1279
                if ((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["option_values"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1279)] ?? null) : null)) {
                    // line 1280
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = ($context["option_values"] ?? null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1280)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1281
                        echo "

                                <option value=\"";
                        // line 1283
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1283);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1283);
                        echo "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1287
                    echo "                            ";
                }
                // line 1288
                echo "

                          </select>
                        ";
            }
            // line 1291
            echo " </div>
                      ";
            // line 1292
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 1293
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1302
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1303
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1309
        $context["recurring_row"] = 0;
        // line 1310
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 1311
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1312
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                            ";
            // line 1315
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1316
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1316) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 1316))) {
                    // line 1317
                    echo "

                                <option value=\"";
                    // line 1319
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1319);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1319);
                    echo "</option>


                              ";
                } else {
                    // line 1323
                    echo "

                                <option value=\"";
                    // line 1325
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1325);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1325);
                    echo "</option>


                              ";
                }
                // line 1329
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1330
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1333
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 1336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1337
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1337) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 1337))) {
                    // line 1338
                    echo "

                                <option value=\"";
                    // line 1340
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1340);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1340);
                    echo "</option>


                              ";
                } else {
                    // line 1344
                    echo "

                                <option value=\"";
                    // line 1346
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1346);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1346);
                    echo "</option>


                              ";
                }
                // line 1350
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1351
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 1354
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1356
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 1357
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1358
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 1363
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1374
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1375
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1376
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1377
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1378
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1379
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1385
        $context["discount_row"] = 0;
        // line 1386
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1387
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 1388
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1389
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1390
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1390) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1390))) {
                    // line 1391
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1391);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1391);
                    echo "</option>
                              ";
                } else {
                    // line 1393
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1393);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1393);
                    echo "</option>
                              ";
                }
                // line 1395
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1396
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1397
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1397);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1398
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1398);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1399
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1399);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1402
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1402);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1408
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1408);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 1412
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1414
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1415
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1416
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"7\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 1421
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1432
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1433
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1434
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1435
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1436
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1442
        $context["special_row"] = 0;
        // line 1443
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1444
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 1445
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 1448
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1449
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1449) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1449))) {
                    // line 1450
                    echo "

                                <option value=\"";
                    // line 1452
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1452);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1452);
                    echo "</option>


                              ";
                } else {
                    // line 1456
                    echo "

                                <option value=\"";
                    // line 1458
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1458);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1458);
                    echo "</option>


                              ";
                }
                // line 1462
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1463
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1466
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1466);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1467
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1467);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1470
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1470);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1476
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1476);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1480
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1482
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1483
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1484
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1489
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1500
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1505
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1514
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>

\t\t\t\t\t";
        // line 1516
        if ((array_key_exists("oct_product_main_image_option_status", $context) && ($context["oct_product_main_image_option_status"] ?? null))) {
            // line 1517
            echo "                      <td class=\"text-left\">";
            echo ($context["entry_option_value"] ?? null);
            echo "</td>
\t\t\t\t\t";
        }
        // line 1519
        echo "\t\t\t
                      <td class=\"text-right\">";
        // line 1520
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1526
        $context["image_row"] = 0;
        // line 1527
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1528
            echo "                      <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1529
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1529);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1529);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/></td>

\t        ";
            // line 1531
            if ((array_key_exists("oct_product_main_image_option_status", $context) && ($context["oct_product_main_image_option_status"] ?? null))) {
                // line 1532
                echo "\t          <td class=\"text-right\">
            ";
                // line 1533
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                    // line 1534
                    echo "                ";
                    if ((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1534) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1534) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1534) == "checkbox"))) {
                        // line 1535
                        echo "\t                <div class=\"col-sm-6 col-md-6 col-lg-6\">
\t                  <div class=\"well well-sm\" style=\"height: 130px; overflow: auto;text-align:left;margin-bottom:4px;\">
\t                    ";
                        // line 1537
                        if ((($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["option_values"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1537)] ?? null) : null)) {
                            // line 1538
                            echo "                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = ($context["option_values"] ?? null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1538)] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 1539
                                echo "\t                        <label>
\t\t\t\t\t\t  \t";
                                // line 1540
                                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1540), twig_get_attribute($this->env, $this->source, $context["product_image"], "image_by_option", [], "any", false, false, false, 1540))) {
                                    // line 1541
                                    echo "\t                          <input type=\"checkbox\" name=\"product_image[";
                                    echo ($context["image_row"] ?? null);
                                    echo "][image_by_option][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1541);
                                    echo "\" checked=\"checked\"/> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1541);
                                    echo " > ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1541);
                                    echo "</label>
\t                        ";
                                } else {
                                    // line 1543
                                    echo "\t                          <input type=\"checkbox\" name=\"product_image[";
                                    echo ($context["image_row"] ?? null);
                                    echo "][image_by_option][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1543);
                                    echo "\" /> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1543);
                                    echo " > ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1543);
                                    echo "</label>
\t                        ";
                                }
                                // line 1545
                                echo "\t                        <br/>
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1547
                            echo "\t                    ";
                        }
                        // line 1548
                        echo "\t                  </div>
\t                </div>
\t              ";
                    }
                    // line 1551
                    echo "\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1552
                echo "\t          </td>
\t        ";
            }
            // line 1554
            echo "\t\t\t
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1555
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1555);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1556
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1558
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1559
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1560
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>

\t\t\t<td></td>
\t\t\t
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1568
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1576
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1578
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1585
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1586
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1592
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1593
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1593);
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1594
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1594);
            echo "][points]\" value=\"";
            echo (((($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["product_reward"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1594)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["product_reward"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1594)] ?? null) : null), "points", [], "any", false, false, false, 1594)) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1597
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1603
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1608
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1609
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1613
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1614
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1615
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1615);
            echo "</td>
                        <td class=\"text-left\">";
            // line 1616
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1617
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1617);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1617);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1617);
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1617);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1617);
                echo "]\" value=\"";
                if ((($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = ($context["product_seo_url"] ?? null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1617)] ?? null) : null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1617)] ?? null) : null)) {
                    echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["product_seo_url"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1617)] ?? null) : null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1617)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1619
                if ((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = ($context["error_keyword"] ?? null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1619)] ?? null) : null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1619)] ?? null) : null)) {
                    // line 1620
                    echo "                              <div class=\"text-danger\">";
                    echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["error_keyword"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1620)] ?? null) : null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1620)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 1622
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1625
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1635
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1636
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1641
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1642
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1642);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1643
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1643);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 1647
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1648
                echo "                              ";
                if (((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = ($context["product_layout"] ?? null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1648)] ?? null) : null) && ((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["product_layout"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1648)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1648)))) {
                    // line 1649
                    echo "

                                <option value=\"";
                    // line 1651
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1651);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1651);
                    echo "</option>


                              ";
                } else {
                    // line 1655
                    echo "

                                <option value=\"";
                    // line 1657
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1657);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1657);
                    echo "</option>


                              ";
                }
                // line 1661
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1662
            echo "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1667
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1690
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1695
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1717
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1746
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1775
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1804
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>

";
        // line 1830
        if ((($context["atpresets_installed"] ?? null) == 1)) {
            // line 1831
            echo "<script type=\"text/javascript\"><!--
function addPresetField(attribute_row) {

\t";
            // line 1834
            if ((($context["atpresets_selecttype"] ?? null) == 0)) {
                // line 1835
                echo "\t\thtml  = '<br><div class=\"test\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][preset]\" value=\"\" placeholder=\"";
                echo ($context["text_preset_value"] ?? null);
                echo "\" class=\"form-control\" />';
\t\thtml += '<input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][preset_id][]\" value=\"\" /></div>';
\t";
            } else {
                // line 1838
                echo "\t\thtml = '<br><div>';
\t\t";
                // line 1839
                if ((($context["atpresets_allow_multiple"] ?? null) == 1)) {
                    // line 1840
                    echo "\t\t
\t\thtml += '\t<input type=\"checkbox\" id=\"allow_multiple' + attribute_row + '\" name=\"product_attribute[' + attribute_row + '][allow_multiple]\"';
\t\thtml += '\t\tonchange=\"changeSelectionMode('+attribute_row+')\"/>';
\t\thtml += '\t<label for=\"allow_multiple' + attribute_row + '\">";
                    // line 1843
                    echo ($context["text_allow_multiple"] ?? null);
                    echo "</label>'; 
\t\t\t
\t\t";
                }
                // line 1845
                echo "\t
\t\thtml += '<br><select alt=\"' + attribute_row + '\" name=\"product_attribute[' + attribute_row + '][preset_id][]\" id=\"input-preset' + attribute_row + '\" class=\"form-control\" onchange=\"select_preset(this);\"  onfocus=\"check_attribute(this);\">';
\t\thtml += '<option value=\"-1\"></option>';
\t\t\t";
                // line 1848
                $context["current_att"] = 0;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["all_presets"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["preset"]) {
                    // line 1849
                    echo "\t\t\t\t
\t\t\t\t";
                    // line 1850
                    if ((($context["current_att"] ?? null) != twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1850))) {
                        $context["current_att"] = twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1850);
                        // line 1851
                        echo "\t\t\t\thtml += '<option class=\"att' + attribute_row + ' att' + attribute_row + '-";
                        echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1851);
                        echo "\" value=\"0\" disabled=\"disabled\" style=\"color:red\">";
                        echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_name_esc", [], "any", false, false, false, 1851);
                        echo "</option>';
\t\t\t\t";
                    }
                    // line 1853
                    echo "\t\t\t\thtml += '<option alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1853);
                    echo "\" class=\"pre' + attribute_row + ' pre' + attribute_row + '-";
                    echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1853);
                    echo "\" value=\"";
                    echo (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = $context["preset"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["preset_id"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["preset"], "text_esc2", [], "any", false, false, false, 1853);
                    echo "</option>';
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1855
                echo "\t\thtml  += '  </select></div>';
\t\t\t\t\t\t\t\t
\t";
            }
            // line 1857
            echo "\t
\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').parent().append(html);

\t";
            // line 1860
            if ((($context["atpresets_allow_multiple"] ?? null) == 1)) {
                echo "\t
\t\taddMultiSelectFunctionality(attribute_row);
\t";
            }
            // line 1863
            echo "\t
\t";
            // line 1864
            if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                // line 1865
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1866
                    echo "\t\thtml  = '\t<span onclick=\"copy_values(' + attribute_row + ',";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1866);
                    echo ")\" class=\"input-group-addon\" style=\"cursor:pointer;cursor:hand;\" title=\"";
                    echo ($context["text_copy_value"] ?? null);
                    echo "\">';
\t\thtml += '\t\t<i class=\"fa fa-ellipsis-v\" style=\"font-size: large;\"></i>';
\t\thtml += '\t</span>';
\t\t
\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    // line 1870
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1870);
                    echo "][text]\\']').before(html);
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1872
                echo "\t";
            }
            // line 1873
            echo "\t
\t";
            // line 1874
            if ((($context["atpresets_selecttype"] ?? null) == 0)) {
                // line 1875
                echo "\t\tpresetautocomplete(attribute_row);
\t";
            }
            // line 1877
            echo "}
//--></script>
<script type=\"text/javascript\"><!--
function update_attributes(attemplate_id, option) {

\t\$.ajax({ 
\t\turl: 'index.php?route=extension/module/attemplate/update_attributes&user_token=";
            // line 1883
            echo ($context["user_token"] ?? null);
            echo "&attemplate_id=' + attemplate_id + '&option=' + option + '&product_id=' + ";
            echo ($context["product_id"] ?? null);
            echo ",
\t\ttype: 'post',
\t\tdata: \$('#tab-attribute select, #tab-attribute input, #tab-attribute textarea').serialize(),\t\t
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\tif (option == 1)
\t\t\t\t\$('#attemmplate_button_add').button('loading');
\t\t\telse if (option == 2)
\t\t\t\t\$('#attemmplate_button_replace').button('loading');
\t\t\telse if (option == 0)
\t\t\t\t\$('#attemmplate_button_default').button('loading');
\t\t\telse {
\t\t\t\t\$('#attgroup option[value=\"-1\"]').prop('selected', true);
\t\t\t\t\$('#attgroup option[value=\"-1\"]').text('";
            // line 1896
            echo ($context["text_loading"] ?? null);
            echo "');
\t\t\t}
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#attemmplate_button_add').button('reset');
\t\t\t\$('#attemmplate_button_replace').button('reset');
\t\t\t\$('#attemmplate_button_default').button('reset');\t\t

\t\t},\t\t\t\t
\t\tsuccess: function(json) {
\t\t\t\$('tr[id^=\\'attribute-row\\']').remove();
\t\t\tif (option == 3) {
\t\t\t\t\$('#attgroup option[value=\"-1\"]').html('";
            // line 1908
            echo ($context["text_add_group"] ?? null);
            echo "');
\t\t\t}\t\t\t\t
\t\t\tattribute_row = 0;
\t\t\tfor (var key in json['product_attributes']) {
\t\t\t\taddAttribute();
\t\t\t\tattribute_row = attribute_row -1;
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(json['product_attributes'][key]['name']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(json['product_attributes'][key]['attribute_id']);
\t\t\t\tif ('1' in json['product_attributes'][key]['product_attribute_description']) {
\t\t\t\t\t";
            // line 1917
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1918
                echo "\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1918);
                echo "][text]\\']').val(json['product_attributes'][key]['product_attribute_description'][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1918);
                echo "]['text']);
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1920
            echo "\t\t\t\t}
\t\t\t\tif (json['product_attributes'][key]['allow_multiple']) {
\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][allow_multiple]\\']').prop('checked','checked');
\t\t\t\t\tchangeSelectionMode(attribute_row);
\t\t\t\t}
\t\t\t\tif ('1' in json['product_attributes'][key]['preset_id']) {
\t\t\t\t\tfor (var preset_key in json['product_attributes'][key]['preset_id']) {
\t\t\t\t\t\tif (json['product_attributes'][key]['preset_id'][preset_key] > 0)
\t\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\'] option[value=\"'+json['product_attributes'][key]['preset_id'][preset_key]+'\"]').prop('selected', true);
\t\t\t\t\t}\t\t\t
\t\t\t\t} else {\t
\t\t\t\t\tif (json['product_attributes'][key]['preset_id'][0] >0) {
\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\'] option[value=\"'+json['product_attributes'][key]['preset_id'][0]+'\"]').prop('selected', true);
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(json['product_attributes'][key]['preset_id'][0]);\t\t
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$('.att' + attribute_row).hide();
\t\t\t\t\$('.pre' + attribute_row).hide();
\t\t\t\t\$('.pre' + attribute_row + '-' + json['product_attributes'][key]['attribute_id']).show();\t\t\t\t\t\t

\t\t\t\t";
            // line 1940
            if ((($context["atpresets_selecttype"] ?? null) == 0)) {
                // line 1941
                echo "\t\t\t\t\tpresetautocomplete(attribute_row);
\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val(json['product_attributes'][key]['preset']);
\t\t\t\t";
            }
            // line 1943
            echo "\t\t\t\t
\t\t\t\t

\t\t\t\tattribute_row = attribute_row +1;
\t\t\t}
\t\t}\t\t\t\t\t\t
\t});\t
}


function save_attemplate() {

\t\$.ajax({ 
\t\turl: 'index.php?route=extension/module/attemplate/save_attemplate&user_token=";
            // line 1956
            echo ($context["user_token"] ?? null);
            echo "',
\t\ttype: 'post',
\t\tdata: \$('#tab-attribute select, #tab-attribute input, #tab-attribute textarea, input[name=\"new_attemplate_name\"]').serialize(),\t\t
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#attemmplate_button_save').button('loading');
\t\t\t\$('.alert').remove();
\t\t\t\$('#new_attemplate_name .text-danger').remove();\t\t\t
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#attemmplate_button_save').button('reset');
\t\t},\t\t
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\tvar html = '<div class=\"text-danger\">' + json['error'] + '</div>';
\t\t\t\t\$('input[name=\"new_attemplate_name\"]').after(html);
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t}\t\t\t\t\t\t
\t});\t
}
//--></script>
<script type=\"text/javascript\"><!--
function copy_values(attribute_row, language_id){
\tvar new_value = \$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][' + language_id + '][text]\\']').val();
\t\$('textarea[name^=\\'product_attribute[' + attribute_row + '][product_attribute_description]\\']').val(new_value);
}

function add_preset(attribute_row) {
\tvar attribute_id = \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val();
\tvar texts = {
\t\t";
            // line 1990
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1991
                echo "\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1991);
                echo ":\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1991);
                echo "][text]\\']').val(),
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1992
            echo "\t
\t};
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/atpresets/insert&user_token=";
            // line 1995
            echo ($context["user_token"] ?? null);
            echo "',
\t\ttype: 'post',
\t\tdata: {attribute_id,texts},
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tif (json['preset_id']!=0) {
\t\t\t\t";
            // line 2001
            if ((($context["atpresets_selecttype"] ?? null) == 0)) {
                // line 2002
                echo "\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(json['preset_id']);
\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val(json['preset_decoded']);
\t\t\t\t";
            } else {
                // line 2005
                echo "\t\t\t\t\tif (json['new_added']==1) {
\t\t\t\t\t\tif (!\$('.att' + attribute_row + '-' + attribute_id).length)
\t\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').append('<option color=\"red\" class=\"att' + attribute_row + ' att' + attribute_row + '-' + attribute_id + '\" value=\"0\" disabled=\"disabled\" style=\"color:red;display:none;\">'+\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val()+'</option>');
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.att' + attribute_row + '-' + attribute_id).after('<option alt=\"'+attribute_id+'\" class=\"pre' + attribute_row + ' pre' + attribute_row + '-' + attribute_id + '\" value=\"'+json['preset_id']+'\">'+json['preset']+'</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(json['preset_id']);
\t\t\t\t\t";
                // line 2012
                if ((($context["atpresets_allow_multiple"] ?? null) == 1)) {
                    echo "\t
\t\t\t\t\t\taddMultiSelectFunctionality(attribute_row);
\t\t\t\t\t";
                }
                // line 2014
                echo "\t\t\t\t\t
\t\t\t\t";
            }
            // line 2016
            echo "\t\t\t}\t\t
\t\t\talert(json['message']);
\t\t},
\t\terror: function(json) {
\t\t\talert('";
            // line 2020
            echo ($context["text_new_preset_error"] ?? null);
            echo "');
\t\t}
\t});
}
//--></script>
<script type=\"text/javascript\"><!--
";
            // line 2026
            if ((($context["atpresets_selecttype"] ?? null) == 0)) {
                // line 2027
                echo "function presetautocomplete(attribute_row) {

\tvar attribute_id = \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val();
\t\$('#attribute-row'+attribute_row+' .test ul').remove();
\tif (attribute_id != '') {
\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/atpresets/autocomplete&user_token=";
                // line 2035
                echo ($context["user_token"] ?? null);
                echo "&filter_name=' +  encodeURIComponent(request) + '&attribute_id=' + attribute_id,
\t\t\t\t\tdataType: 'json',\t\t\t
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item.not_decoded_text,
\t\t\t\t\t\t\t\tlabel_decoded: item.text,\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvalues: item.texts,
\t\t\t\t\t\t\t\tvalue: item.preset_id\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\t'select': function(item) {
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val(item['label_decoded']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(item['value']);
\t\t\t\tvar key;
\t\t\t\tfor (key in item['values']) {
\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][' + key + '][text]\\']').val(item['values'][key]); 
\t\t\t\t}
\t\t\t}
\t\t});
\t
\t} else {
\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/atpresets/autocomplete&user_token=";
                // line 2063
                echo ($context["user_token"] ?? null);
                echo "&filter_name=' +  encodeURIComponent(request) + '&attribute_id=' + attribute_id,
\t\t\t\t\tdataType: 'json',\t\t\t
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tcategory: item.attribute_name,
\t\t\t\t\t\t\t\tattribute_id: item.attribute_id,
\t\t\t\t\t\t\t\tlabel: item.not_decoded_text,
\t\t\t\t\t\t\t\tlabel_decoded: item.text,
\t\t\t\t\t\t\t\tvalues: item.texts,
\t\t\t\t\t\t\t\tvalue: item.preset_id\t\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val(item['label_decoded']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(item['value']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['category']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['attribute_id']);\t\t\t\t
\t\t\t\tvar key;
\t\t\t\tfor (key in item['values']) {
\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][' + key + '][text]\\']').val(item['values'][key]); 
\t\t\t\t}
\t\t\t\tpresetautocomplete(attribute_row);
\t\t\t}
\t\t});\t
\t}
}

\$('#attribute tbody tr').each(function(index, element) {
\tpresetautocomplete(index);
});
";
            } else {
                // line 2099
                echo "function select_preset(select_node) {
\tvar att_row = \$(select_node).attr('alt');
\tvar preset_id = \$(select_node).find(\":selected\").val();
\tvar attribute_id = \$(select_node).find(\":selected\").attr('alt');
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/atpresets/getPresetTexts&user_token=";
                // line 2105
                echo ($context["user_token"] ?? null);
                echo "&preset_id=' + preset_id,
\t\tdataType: 'json',\t\t\t
\t\tsuccess: function(json) {
\t\t\t\$('input[name=\\'product_attribute[' + att_row + '][name]\\']').val(\$('.att' + att_row + '-' + attribute_id).text());
\t\t\t\$('input[name=\\'product_attribute[' + att_row + '][attribute_id]\\']').val(attribute_id);\t
\t\t\t\t
\t\t\t";
                // line 2111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 2112
                    echo "\t\t\t\t\$('textarea[name=\\'product_attribute[' + att_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2112);
                    echo "][text]\\']').val(json['texts'][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2112);
                    echo "]); 
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2114
                echo "\t\t\tif (preset_id != -1) {
\t\t\t\t\$('.att' + att_row).hide();
\t\t\t\t\$('.pre' + att_row).hide();
\t\t\t\t\$('.pre' + att_row + '-' + attribute_id).show();\t\t\t
\t\t\t} else {
\t\t\t\t\$('.att' + att_row).show();
\t\t\t\t\$('.pre' + att_row).show();\t\t\t
\t\t\t}
\t\t\t\t
\t\t}
\t});\t

}

function check_attribute(select_node) {
\tvar att_row = \$(select_node).attr('alt');
\tvar att_text = \$('input[name=\\'product_attribute[' + att_row + '][name]\\']').val();
\t
\tif (att_text=='') {
\t\t\$('.att' + att_row).show();
\t\t\$('.pre' + att_row).show();\t
\t\t\$('input[name=\\'product_attribute[' + att_row + '][attribute_id]\\']').val('');
\t\t\$('select[name=\\'product_attribute[' + att_row + '][preset_id][]\\']').val(-1);
\t}
}

function changeSelectionMode(attribute_row) {
\tif (!\$('#allow_multiple' + attribute_row ).is(':checked')) {
\t\t\$('#input-preset' + attribute_row).css('height','auto');
\t\t\$('#input-preset' + attribute_row).removeAttr('multiple');
\t\t\$('#attribute-row'+attribute_row+' textarea').attr('readonly', false);\t\t
\t\t
\t\t";
                // line 2146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 2147
                    echo "\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2147);
                    echo "][text]\\']').val(''); 
\t\t\tvar new_value";
                    // line 2148
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2148);
                    echo " = ''; 
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2150
                echo "\t\t
\t\tvar ids = '';
\t\t\$('#input-preset' + attribute_row + ' option').each(function(index) {
\t\t\tif (\$(this).prop('selected')) {
\t\t\t\tids += '_'+\$(this).val();\t\t
\t\t\t}
\t\t\tif (\$(this).val() == -1) {
\t\t\t\t\$(this).prop('selected', false);\t\t
\t\t\t}\t\t\t
\t\t});
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/atpresets/getManyPresetsTexts&user_token=";
                // line 2161
                echo ($context["user_token"] ?? null);
                echo "&preset_id=' + ids,
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tif (json) {
\t\t\t\t\t";
                // line 2165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 2166
                    echo "
\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    // line 2167
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2167);
                    echo "][text]\\']').val(json[";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2167);
                    echo "]);
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2168
                echo "\t
\t\t\t\t} else {
\t\t\t\t\t";
                // line 2170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 2171
                    echo "\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2171);
                    echo "][text]\\']').val('');
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2172
                echo "\t\t\t
\t\t\t\t}
\t\t\t}
\t\t});\t\t\t
\t} else  {
\t\t\$('#input-preset' + attribute_row).attr('multiple','multiple');
\t\t\$('#input-preset' + attribute_row).css('height','200px');
\t\t\$('#attribute-row'+attribute_row+' textarea').attr('readonly', true);
\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\'] option[value=\"-1\"]').prop('selected', false);
\t}
}

function addMultiSelectFunctionality(attribute_row) {
\$('#input-preset' + attribute_row + ' option').unbind( \"mousedown\");
\$('#input-preset' + attribute_row + ' option').mousedown(function(e) {
if (\$('input[name=\"product_attribute[' + attribute_row + '][allow_multiple]\"]').is(':checked')) {
    e.preventDefault();
\tif (\$(this).val() != -1) {
\t\t\$(this).prop('selected', !\$(this).prop('selected'));

\t\tif (\$(this).prop('selected')) {
\t\t\tvar attribute_id = \$(this).attr('alt');
\t\t\tif (\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val() != attribute_id) {
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(\$('.att' + attribute_row + '-' + attribute_id).text());
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(attribute_id);\t
\t\t\t\t\$('.att' + attribute_row).hide();
\t\t\t\t\$('.pre' + attribute_row).hide();
\t\t\t\t\$('.pre' + attribute_row + '-' + attribute_id).show();\t\t\t\t\t
\t\t\t}
\t\t}
\t\t";
                // line 2202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 2203
                    echo "\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2203);
                    echo "][text]\\']').val(''); 
\t\t\tvar new_value";
                    // line 2204
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2204);
                    echo " = ''; 
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2205
                echo "\t\t\t
\t\tvar ids = '';
\t\t\$('#input-preset' + attribute_row + ' option').each(function(index) {
\t\t\tif (\$(this).prop('selected')) {
\t\t\t\tids += '_'+\$(this).val();\t\t
\t\t\t}
\t\t});
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/atpresets/getManyPresetsTexts&user_token=";
                // line 2213
                echo ($context["user_token"] ?? null);
                echo "&preset_id=' + ids,
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tif (json) {
\t\t\t\t\t";
                // line 2217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 2218
                    echo "
\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    // line 2219
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2219);
                    echo "][text]\\']').val(json[";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2219);
                    echo "]);
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2220
                echo "\t
\t\t\t\t} else {
\t\t\t\t\t";
                // line 2222
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 2223
                    echo "\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2223);
                    echo "][text]\\']').val('');
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2224
                echo "\t\t\t
\t\t\t\t}
\t\t\t}
\t\t});\t\t\t\t
\t} else {
\t\t\$(this).prop('selected', false);
\t}
}
\treturn false;
});\t
}

";
                // line 2236
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (($context["attribute_row"] ?? null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 2237
                    echo "addMultiSelectFunctionality(";
                    echo $context["i"];
                    echo ");
if (\$('#allow_multiple";
                    // line 2238
                    echo $context["i"];
                    echo "').attr(\"checked\"))
\t\$('#attribute-row";
                    // line 2239
                    echo $context["i"];
                    echo " textarea').attr('readonly', true);
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 2242
            echo "//--></script>
";
        }
        // line 2244
        echo "
\t\t\t
  <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 2247
        echo ($context["attribute_row"] ?? null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 2251
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 2253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2254
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2254);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2254);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2254);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2254);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2256
        echo "\t  html += '  </td>';
\t  
\t\t\t";
        // line 2258
        if ((($context["atpresets_installed"] ?? null) == 1)) {
            // line 2259
            echo "\t\t\t\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button><br><button type=\"button\" onclick=\"add_preset(' + attribute_row + ')\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_new_preset"] ?? null);
            echo "\" class=\"btn btn-primary\" style=\"margin-top:20px;\"><i class=\"fa fa-save\"></i></button></td>';
\t\t\t";
        } else {
            // line 2261
            echo "\t\t\t\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t";
        }
        // line 2263
        echo "\t\t\t
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);


\t\t\t\t";
        // line 2269
        if ((($context["atpresets_installed"] ?? null) == 1)) {
            // line 2270
            echo "\t\t\t\t\taddPresetField(attribute_row);
\t\t\t\t";
        }
        // line 2272
        echo "\t\t\t
\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 2282
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {

\t\t\t\t";
        // line 2286
        if ((($context["atpresets_installed"] ?? null) == 1)) {
            // line 2287
            echo "\t\t\t\t\t";
            if ((($context["atpresets_selecttype"] ?? null) == 0)) {
                // line 2288
                echo "\t\t\t\t\t\tif (encodeURIComponent(request)=='') {
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val('');
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"blur\");
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"focus\");
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"keydown\");\t\t\t\t\t
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val('');
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(0);\t\t\t
\t\t\t\t\t\t\tpresetautocomplete(attribute_row);\t\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t";
            } else {
                // line 2298
                echo "\t\t\t\t\t\tif (encodeURIComponent(request)=='') {
\t\t\t\t\t\t\t\$('.att' + attribute_row).show();
\t\t\t\t\t\t\t\$('.pre' + attribute_row).show();
\t\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(-1);\t\t\t\t\t\t\t
\t\t\t\t\t\t}\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 2304
            echo "\t\t\t\t";
        }
        // line 2305
        echo "\t\t\t
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \t\t\t
\t\t\tif (item['value'] != \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val()) {\t\t\t\t
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);\t\t\t
\t\t\t\t";
        // line 2321
        if ((($context["atpresets_installed"] ?? null) == 1)) {
            // line 2322
            echo "\t\t\t\t\t";
            if ((($context["atpresets_selecttype"] ?? null) == 0)) {
                // line 2323
                echo "\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"blur\");
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"focus\");
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"keydown\");\t\t\t\t\t
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id]\\']').val(0);\t\t\t
\t\t\t\t\t\tpresetautocomplete(attribute_row);
\t\t\t\t\t";
            } else {
                // line 2330
                echo "\t\t\t\t\t\t\$('.att' + attribute_row).hide();
\t\t\t\t\t\t\$('.pre' + attribute_row).hide();
\t\t\t\t\t\t\$('.pre' + attribute_row + '-' + item['value']).show();\t
\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(-1);\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 2335
            echo "\t\t\t\t";
        }
        // line 2336
        echo "\t\t\t}
\t\t\t
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 2347
        echo ($context["option_row"] ?? null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 2352
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 2375
        echo ($context["entry_required"] ?? null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 2377
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 2378
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2384
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2385
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2391
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 2392
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2398
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2399
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2405
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2406
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2412
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2413
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2419
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2420
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 2429
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2430
        echo ($context["entry_optsku"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2431
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 2432
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2433
        echo ($context["entry_price"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2434
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2435
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"7\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 2444
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 2472
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 2477
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 2482
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 2492
        echo ($context["option_value_row"] ?? null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][optsku]\" value=\"\" placeholder=\"";
        // line 2499
        echo ($context["entry_optsku"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2500
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 2502
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 2503
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 2509
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 2514
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 2519
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 2520
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 2531
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 2536
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2537
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2537);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2537), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2539
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2540
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2541
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2542
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2543
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2544
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2545
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 2559
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 2564
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2565
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2565);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2565), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2567
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2568
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2569
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2570
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2571
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2572
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 2578
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 2587
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2591
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';

\t\t\t\thtml += '";
        // line 2593
        if ((array_key_exists("oct_product_main_image_option_status", $context) && ($context["oct_product_main_image_option_status"] ?? null))) {
            echo "';
\t\t\t\thtml += '  <td class=\"text-right\">';
\t\t\t\thtml += '  ";
            // line 2595
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                echo "';
\t\t\t\thtml += '  ";
                // line 2596
                if ((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 2596) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 2596) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 2596) == "checkbox"))) {
                    echo "';
\t\t\t\thtml += '    <div class=\"col-sm-6 col-md-6 col-lg-6\">';
\t\t\t\thtml += '      <div class=\"well well-sm\" style=\"height: 130px; overflow: auto;text-align:left;margin-bottom:4px;\">';
\t\t\t\thtml += '            ";
                    // line 2599
                    if ((($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["option_values"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 2599)] ?? null) : null)) {
                        echo "';
\t\t\t\thtml += '              ";
                        // line 2600
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["option_values"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 2600)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            echo "';
\t\t\t\thtml += '            <label><input type=\"checkbox\" name=\"product_image[' + image_row + '][image_by_option][]\" value=\"";
                            // line 2601
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 2601);
                            echo "\" /> ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 2601), "js");
                            echo " &gt; ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 2601), "js");
                            echo "</label><br/>';
\t\t\t\thtml += '            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 2602
                        echo "';
\t\t\t\thtml += '          ";
                    }
                    // line 2603
                    echo "';
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '    </div>';
\t\t\t\thtml += '    ";
                }
                // line 2606
                echo "';
\t\t\t\thtml += '  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2607
            echo "';
\t\t\t\thtml += '  </td>';
\t\t\t\thtml += '";
        }
        // line 2609
        echo "';
\t\t\t
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2611
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2612
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 2622
        echo ($context["recurring_row"] ?? null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 2628
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2629
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2629);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2629);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2631
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 2635
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2636
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2636);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2636);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2638
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2641
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 2653
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 2658
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 2663
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>

<script type=\"text/javascript\"><!--
//quicksave
\$(\"#qsave\").on(\"click\",function(){for(var e=\$(\".note-editor\").length,r=0;e>r;r++){var t=\$(\".note-editor\").eq(r).parent().children(\"textarea\").attr(\"id\");if(\"function\"==typeof \$().code)var a=\$(\"#\"+t).code();else a=\$(\"#\"+t).summernote(\"code\");\$(\"#\"+t).html(a)}\$(\"textarea\").each(function(){var t,a=\$(this).attr(\"id\");\"undefined\"!=typeof CKEDITOR&&void 0!==CKEDITOR.instances[a]&&(t=CKEDITOR.instances[a].getData(),\$(\"#\"+a).html(t))});\$.ajax({type:\"post\",data:\$(\"form\").serialize(),url:\"index.php?route=catalog/product/qsave&user_token=";
        // line 2676
        echo ($context["user_token"] ?? null);
        echo "&product_id=";
        echo ($context["pidqs"] ?? null);
        echo "\",dataType:\"json\",beforeSend:function(){\$(\"#qsave\").prop(\"disabled\",!0)},complete:function(){\$(\"#qsave\").prop(\"disabled\",!1)},success:function(e){if(\$(\".alert\").remove(),\$(\".text-danger\").remove(),\$(\"div\").removeClass(\"has-error\"),e.error){if(html='<div class=\"alert alert-danger\">',html+=\" \"+e.error.warning+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></br>',e.error.name){var t=\"\";for(r in e.error.name){var a=\$(\"#input-name\"+r);\$(a).after('<div class=\"text-danger\">'+e.error.name[r]+\"</div>\"),\$(a).parent().addClass(\"has-error\"),t='</br><i class=\"fa fa-exclamation-circle\"></i> '+e.error.name[r]}html+=t}if(e.error.meta_title){t=\"\";for(r in e.error.meta_title){a=\$(\"#input-meta-title\"+r);\$(a).after('<div class=\"text-danger\">'+e.error.meta_title[r]+\"</div>\"),\$(a).parent().addClass(\"has-error\"),t='</br><i class=\"fa fa-exclamation-circle\"></i> '+e.error.meta_title[r]}html+=t}if(e.error.model&&(\$(\"#input-model\").after('<div class=\"text-danger\">'+e.error.model+\"</div>\"),\$(\"#input-model\").parent().addClass(\"has-error\"),html+='</br><i class=\"fa fa-exclamation-circle\"></i> '+e.error.model),e.error.keyword){t=\"\";for(s in e.error.keyword)for(r in e.error.keyword[s]){a=\$('[name=\"product_seo_url['+s+\"][\"+r+']\"]');\$(a).parent().after('<div class=\"text-danger\">'+e.error.keyword[s][r]+\"</div>\"),\$(a).parent(\".input-group\").addClass(\"has-error\"),t='</br><i class=\"fa fa-exclamation-circle\"></i> '+e.error.keyword[s][r],html+=t}}html+=\" </div>\",\$(\"#content > .container-fluid\").prepend(html)}e.success&&\$(\"#content > .container-fluid\").prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> '+e.success+'  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>')},error:function(e,r,t){alert(t+\"\\r\\n\"+e.statusText+\"\\r\\n\"+e.responseText)}})});
//quicksave end
//--></script>
\t\t\t
";
        // line 2680
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5844 => 2680,  5835 => 2676,  5819 => 2663,  5811 => 2658,  5803 => 2653,  5788 => 2641,  5783 => 2638,  5772 => 2636,  5768 => 2635,  5762 => 2631,  5751 => 2629,  5747 => 2628,  5738 => 2622,  5725 => 2612,  5721 => 2611,  5717 => 2609,  5712 => 2607,  5705 => 2606,  5699 => 2603,  5695 => 2602,  5683 => 2601,  5677 => 2600,  5673 => 2599,  5667 => 2596,  5661 => 2595,  5656 => 2593,  5649 => 2591,  5642 => 2587,  5630 => 2578,  5621 => 2572,  5617 => 2571,  5613 => 2570,  5609 => 2569,  5605 => 2568,  5602 => 2567,  5591 => 2565,  5587 => 2564,  5579 => 2559,  5562 => 2545,  5558 => 2544,  5554 => 2543,  5550 => 2542,  5546 => 2541,  5542 => 2540,  5539 => 2539,  5528 => 2537,  5524 => 2536,  5516 => 2531,  5502 => 2520,  5498 => 2519,  5490 => 2514,  5482 => 2509,  5473 => 2503,  5469 => 2502,  5464 => 2500,  5460 => 2499,  5450 => 2492,  5437 => 2482,  5429 => 2477,  5421 => 2472,  5390 => 2444,  5378 => 2435,  5374 => 2434,  5370 => 2433,  5366 => 2432,  5362 => 2431,  5358 => 2430,  5354 => 2429,  5342 => 2420,  5338 => 2419,  5329 => 2413,  5325 => 2412,  5316 => 2406,  5312 => 2405,  5303 => 2399,  5299 => 2398,  5290 => 2392,  5286 => 2391,  5277 => 2385,  5273 => 2384,  5264 => 2378,  5260 => 2377,  5255 => 2375,  5229 => 2352,  5221 => 2347,  5208 => 2336,  5205 => 2335,  5198 => 2330,  5189 => 2323,  5186 => 2322,  5184 => 2321,  5166 => 2305,  5163 => 2304,  5155 => 2298,  5143 => 2288,  5140 => 2287,  5138 => 2286,  5131 => 2282,  5119 => 2272,  5115 => 2270,  5113 => 2269,  5105 => 2263,  5099 => 2261,  5091 => 2259,  5089 => 2258,  5085 => 2256,  5068 => 2254,  5064 => 2253,  5059 => 2251,  5052 => 2247,  5047 => 2244,  5043 => 2242,  5034 => 2239,  5030 => 2238,  5025 => 2237,  5021 => 2236,  5007 => 2224,  4998 => 2223,  4994 => 2222,  4990 => 2220,  4980 => 2219,  4977 => 2218,  4973 => 2217,  4966 => 2213,  4956 => 2205,  4948 => 2204,  4943 => 2203,  4939 => 2202,  4907 => 2172,  4898 => 2171,  4894 => 2170,  4890 => 2168,  4880 => 2167,  4877 => 2166,  4873 => 2165,  4866 => 2161,  4853 => 2150,  4845 => 2148,  4840 => 2147,  4836 => 2146,  4802 => 2114,  4791 => 2112,  4787 => 2111,  4778 => 2105,  4770 => 2099,  4731 => 2063,  4700 => 2035,  4690 => 2027,  4688 => 2026,  4679 => 2020,  4673 => 2016,  4669 => 2014,  4663 => 2012,  4654 => 2005,  4649 => 2002,  4647 => 2001,  4638 => 1995,  4633 => 1992,  4622 => 1991,  4618 => 1990,  4581 => 1956,  4566 => 1943,  4561 => 1941,  4559 => 1940,  4537 => 1920,  4526 => 1918,  4522 => 1917,  4510 => 1908,  4495 => 1896,  4477 => 1883,  4469 => 1877,  4465 => 1875,  4463 => 1874,  4460 => 1873,  4457 => 1872,  4449 => 1870,  4439 => 1866,  4434 => 1865,  4432 => 1864,  4429 => 1863,  4423 => 1860,  4418 => 1857,  4413 => 1855,  4398 => 1853,  4390 => 1851,  4387 => 1850,  4384 => 1849,  4379 => 1848,  4374 => 1845,  4368 => 1843,  4363 => 1840,  4361 => 1839,  4358 => 1838,  4351 => 1835,  4349 => 1834,  4344 => 1831,  4342 => 1830,  4313 => 1804,  4281 => 1775,  4249 => 1746,  4217 => 1717,  4192 => 1695,  4184 => 1690,  4159 => 1667,  4149 => 1662,  4143 => 1661,  4134 => 1657,  4130 => 1655,  4121 => 1651,  4117 => 1649,  4114 => 1648,  4110 => 1647,  4103 => 1643,  4099 => 1642,  4096 => 1641,  4092 => 1640,  4085 => 1636,  4081 => 1635,  4069 => 1625,  4056 => 1622,  4050 => 1620,  4048 => 1619,  4028 => 1617,  4024 => 1616,  4020 => 1615,  4017 => 1614,  4013 => 1613,  4006 => 1609,  4002 => 1608,  3994 => 1603,  3986 => 1597,  3975 => 1594,  3971 => 1593,  3968 => 1592,  3964 => 1591,  3956 => 1586,  3952 => 1585,  3940 => 1578,  3933 => 1576,  3922 => 1568,  3912 => 1560,  3906 => 1559,  3904 => 1558,  3897 => 1556,  3889 => 1555,  3886 => 1554,  3882 => 1552,  3876 => 1551,  3871 => 1548,  3868 => 1547,  3861 => 1545,  3849 => 1543,  3837 => 1541,  3835 => 1540,  3832 => 1539,  3827 => 1538,  3825 => 1537,  3821 => 1535,  3818 => 1534,  3814 => 1533,  3811 => 1532,  3809 => 1531,  3794 => 1529,  3789 => 1528,  3784 => 1527,  3782 => 1526,  3773 => 1520,  3770 => 1519,  3764 => 1517,  3762 => 1516,  3757 => 1514,  3741 => 1505,  3733 => 1500,  3719 => 1489,  3712 => 1484,  3706 => 1483,  3704 => 1482,  3697 => 1480,  3686 => 1476,  3673 => 1470,  3663 => 1467,  3655 => 1466,  3650 => 1463,  3644 => 1462,  3635 => 1458,  3631 => 1456,  3622 => 1452,  3618 => 1450,  3615 => 1449,  3611 => 1448,  3605 => 1445,  3600 => 1444,  3595 => 1443,  3593 => 1442,  3584 => 1436,  3580 => 1435,  3576 => 1434,  3572 => 1433,  3568 => 1432,  3554 => 1421,  3547 => 1416,  3541 => 1415,  3539 => 1414,  3532 => 1412,  3521 => 1408,  3508 => 1402,  3498 => 1399,  3490 => 1398,  3482 => 1397,  3479 => 1396,  3473 => 1395,  3465 => 1393,  3457 => 1391,  3454 => 1390,  3450 => 1389,  3446 => 1388,  3441 => 1387,  3436 => 1386,  3434 => 1385,  3425 => 1379,  3421 => 1378,  3417 => 1377,  3413 => 1376,  3409 => 1375,  3405 => 1374,  3391 => 1363,  3384 => 1358,  3378 => 1357,  3376 => 1356,  3369 => 1354,  3364 => 1351,  3358 => 1350,  3349 => 1346,  3345 => 1344,  3336 => 1340,  3332 => 1338,  3329 => 1337,  3325 => 1336,  3319 => 1333,  3314 => 1330,  3308 => 1329,  3299 => 1325,  3295 => 1323,  3286 => 1319,  3282 => 1317,  3279 => 1316,  3275 => 1315,  3269 => 1312,  3264 => 1311,  3259 => 1310,  3257 => 1309,  3248 => 1303,  3244 => 1302,  3228 => 1293,  3226 => 1292,  3223 => 1291,  3217 => 1288,  3214 => 1287,  3202 => 1283,  3198 => 1281,  3193 => 1280,  3191 => 1279,  3185 => 1276,  3175 => 1271,  3168 => 1266,  3162 => 1265,  3160 => 1264,  3153 => 1262,  3143 => 1261,  3139 => 1259,  3131 => 1253,  3123 => 1247,  3120 => 1246,  3112 => 1240,  3104 => 1234,  3102 => 1233,  3094 => 1230,  3084 => 1229,  3080 => 1227,  3072 => 1221,  3064 => 1215,  3061 => 1214,  3053 => 1208,  3045 => 1202,  3043 => 1201,  3035 => 1198,  3025 => 1197,  3021 => 1195,  3013 => 1189,  3005 => 1183,  3002 => 1182,  2994 => 1176,  2986 => 1170,  2984 => 1169,  2976 => 1166,  2971 => 1163,  2964 => 1159,  2960 => 1158,  2956 => 1156,  2949 => 1152,  2945 => 1151,  2941 => 1149,  2939 => 1148,  2931 => 1145,  2921 => 1144,  2911 => 1143,  2903 => 1142,  2899 => 1140,  2896 => 1139,  2890 => 1138,  2881 => 1134,  2877 => 1132,  2868 => 1128,  2864 => 1126,  2862 => 1125,  2859 => 1124,  2855 => 1123,  2852 => 1122,  2850 => 1121,  2842 => 1118,  2837 => 1117,  2833 => 1116,  2824 => 1110,  2820 => 1109,  2816 => 1108,  2812 => 1107,  2808 => 1106,  2804 => 1105,  2800 => 1104,  2794 => 1101,  2791 => 1100,  2788 => 1099,  2773 => 1093,  2765 => 1090,  2762 => 1089,  2759 => 1088,  2744 => 1082,  2736 => 1079,  2733 => 1078,  2730 => 1077,  2715 => 1071,  2707 => 1068,  2704 => 1067,  2701 => 1066,  2688 => 1062,  2681 => 1060,  2678 => 1059,  2675 => 1058,  2662 => 1054,  2655 => 1052,  2652 => 1051,  2649 => 1050,  2636 => 1046,  2629 => 1044,  2626 => 1043,  2624 => 1042,  2617 => 1037,  2610 => 1033,  2606 => 1032,  2602 => 1030,  2595 => 1026,  2591 => 1025,  2587 => 1023,  2585 => 1022,  2577 => 1019,  2570 => 1017,  2551 => 1015,  2546 => 1014,  2541 => 1013,  2538 => 1012,  2536 => 1011,  2528 => 1006,  2525 => 1005,  2519 => 1004,  2517 => 1003,  2506 => 1002,  2501 => 1001,  2499 => 1000,  2492 => 995,  2487 => 992,  2481 => 991,  2479 => 990,  2473 => 988,  2468 => 987,  2466 => 986,  2366 => 888,  2351 => 885,  2346 => 884,  2342 => 883,  2338 => 881,  2321 => 879,  2317 => 878,  2296 => 860,  2288 => 855,  2282 => 851,  2276 => 850,  2274 => 849,  2270 => 847,  2250 => 844,  2244 => 843,  2240 => 842,  2236 => 840,  2218 => 838,  2214 => 837,  2210 => 836,  2204 => 835,  2198 => 834,  2193 => 833,  2188 => 832,  2186 => 831,  2177 => 825,  2174 => 824,  2168 => 823,  2166 => 822,  2155 => 821,  2150 => 820,  2148 => 819,  2143 => 816,  2141 => 815,  2131 => 808,  2124 => 803,  2118 => 802,  2116 => 801,  2111 => 798,  2103 => 796,  2101 => 795,  2095 => 794,  2090 => 791,  2082 => 789,  2070 => 785,  2068 => 784,  2050 => 782,  2046 => 781,  2040 => 777,  2036 => 776,  2027 => 773,  2023 => 772,  2019 => 771,  2013 => 767,  2007 => 766,  1991 => 764,  1975 => 762,  1973 => 761,  1970 => 760,  1958 => 759,  1955 => 758,  1948 => 757,  1946 => 756,  1932 => 754,  1924 => 751,  1919 => 750,  1915 => 749,  1909 => 748,  1906 => 747,  1904 => 746,  1901 => 745,  1891 => 742,  1882 => 741,  1879 => 740,  1877 => 739,  1871 => 738,  1863 => 737,  1858 => 736,  1853 => 735,  1851 => 734,  1842 => 728,  1838 => 727,  1831 => 722,  1820 => 718,  1814 => 715,  1809 => 712,  1799 => 710,  1793 => 709,  1789 => 708,  1778 => 704,  1770 => 703,  1762 => 702,  1754 => 696,  1744 => 694,  1738 => 693,  1732 => 689,  1730 => 688,  1726 => 686,  1721 => 684,  1717 => 683,  1708 => 677,  1703 => 674,  1697 => 673,  1695 => 672,  1687 => 669,  1682 => 666,  1676 => 665,  1668 => 662,  1664 => 661,  1657 => 660,  1654 => 659,  1650 => 658,  1645 => 657,  1637 => 655,  1635 => 654,  1631 => 653,  1627 => 652,  1623 => 650,  1617 => 648,  1615 => 647,  1609 => 646,  1602 => 645,  1596 => 643,  1594 => 642,  1588 => 640,  1583 => 639,  1581 => 638,  1574 => 634,  1568 => 633,  1562 => 632,  1551 => 624,  1547 => 623,  1537 => 618,  1529 => 615,  1518 => 608,  1516 => 607,  1506 => 599,  1497 => 597,  1490 => 596,  1486 => 595,  1482 => 594,  1475 => 592,  1469 => 588,  1460 => 586,  1453 => 585,  1449 => 584,  1445 => 583,  1438 => 581,  1432 => 577,  1424 => 575,  1419 => 574,  1414 => 573,  1409 => 571,  1404 => 570,  1402 => 569,  1399 => 568,  1395 => 567,  1390 => 565,  1384 => 561,  1375 => 559,  1368 => 558,  1364 => 557,  1360 => 556,  1353 => 554,  1346 => 549,  1338 => 546,  1332 => 544,  1328 => 543,  1325 => 542,  1319 => 539,  1315 => 538,  1312 => 537,  1310 => 536,  1305 => 535,  1302 => 534,  1299 => 533,  1296 => 532,  1293 => 531,  1290 => 530,  1285 => 529,  1283 => 528,  1279 => 526,  1272 => 512,  1261 => 508,  1254 => 506,  1247 => 501,  1241 => 500,  1233 => 498,  1225 => 496,  1222 => 495,  1218 => 494,  1214 => 493,  1206 => 490,  1194 => 483,  1189 => 481,  1181 => 475,  1174 => 471,  1170 => 470,  1166 => 468,  1159 => 464,  1155 => 463,  1151 => 461,  1149 => 460,  1141 => 455,  1133 => 449,  1127 => 448,  1118 => 444,  1114 => 442,  1105 => 438,  1101 => 436,  1098 => 435,  1094 => 434,  1086 => 429,  1077 => 425,  1072 => 423,  1064 => 417,  1058 => 416,  1049 => 412,  1045 => 410,  1036 => 406,  1032 => 404,  1029 => 403,  1025 => 402,  1017 => 397,  1006 => 391,  998 => 388,  990 => 385,  983 => 381,  972 => 375,  966 => 372,  960 => 368,  955 => 367,  952 => 366,  947 => 364,  944 => 363,  941 => 362,  936 => 361,  933 => 360,  928 => 358,  925 => 357,  923 => 356,  918 => 354,  910 => 348,  904 => 347,  895 => 343,  891 => 341,  882 => 337,  878 => 335,  875 => 334,  871 => 333,  861 => 328,  853 => 322,  846 => 318,  842 => 317,  838 => 315,  831 => 311,  827 => 310,  823 => 308,  821 => 307,  813 => 302,  804 => 298,  797 => 296,  788 => 292,  783 => 290,  775 => 284,  769 => 283,  760 => 279,  756 => 277,  747 => 273,  743 => 271,  740 => 270,  736 => 269,  730 => 266,  724 => 263,  715 => 259,  710 => 257,  701 => 253,  696 => 251,  684 => 244,  677 => 242,  668 => 238,  661 => 236,  652 => 232,  645 => 230,  636 => 226,  629 => 224,  620 => 220,  613 => 218,  604 => 214,  596 => 211,  583 => 200,  577 => 199,  575 => 198,  568 => 196,  562 => 193,  558 => 191,  552 => 187,  534 => 183,  530 => 181,  526 => 180,  520 => 177,  517 => 176,  515 => 175,  508 => 173,  502 => 169,  491 => 163,  487 => 162,  480 => 158,  475 => 155,  473 => 154,  469 => 152,  452 => 148,  443 => 146,  430 => 142,  423 => 140,  410 => 136,  403 => 134,  398 => 131,  392 => 130,  390 => 129,  380 => 128,  373 => 126,  366 => 124,  351 => 120,  344 => 118,  339 => 115,  335 => 113,  328 => 109,  323 => 107,  320 => 106,  318 => 105,  315 => 104,  308 => 100,  303 => 98,  300 => 97,  298 => 96,  296 => 95,  290 => 92,  285 => 90,  278 => 86,  273 => 84,  266 => 80,  261 => 78,  256 => 76,  253 => 75,  251 => 74,  245 => 70,  239 => 69,  237 => 68,  227 => 67,  220 => 65,  213 => 63,  207 => 61,  203 => 60,  200 => 59,  183 => 57,  179 => 56,  171 => 51,  167 => 50,  163 => 49,  159 => 48,  155 => 47,  151 => 46,  146 => 44,  142 => 43,  138 => 42,  135 => 41,  129 => 39,  127 => 38,  122 => 36,  118 => 35,  113 => 33,  107 => 30,  103 => 28,  95 => 24,  93 => 23,  88 => 20,  77 => 18,  73 => 17,  68 => 15,  62 => 14,  58 => 13,  54 => 11,  50 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
