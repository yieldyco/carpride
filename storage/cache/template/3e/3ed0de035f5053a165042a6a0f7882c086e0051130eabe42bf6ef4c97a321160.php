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

/* octemplates/theme/oct_deals.twig */
class __TwigTemplate_e56097fed2c30e631feffe191d0f947c0a2270cda6d31699a24ba28cd23ec5f6 extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t";
        // line 6
        if (($context["update"] ?? null)) {
            // line 7
            echo "\t\t\t\t<a href=\"";
            echo ($context["update"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t";
            if ((array_key_exists("quick_start", $context) && ($context["quick_start"] ?? null))) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo ($context["quick_start"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"Quick Start\" class=\"btn btn-danger\"><i class=\"fa fa-quora\"></i></a>
\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t<a href=\"";
            echo ($context["clear_modification"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_refresh"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t<button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
            // line 13
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
            // line 14
            echo ($context["cache_delete"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_clear_cache"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t";
            // line 15
            if ((twig_length_filter($this->env, ($context["stores"] ?? null)) > 1)) {
                // line 16
                echo "\t\t\t\t<div class=\"dropdown\" style=\"display:inline-block;\">
\t\t\t\t\t<a href=\"javascript:;\" data-toggle=\"dropdown\" title=\"";
                // line 17
                echo ($context["button_multistore"] ?? null);
                echo "\" class=\"dropdown-toggle btn btn-info\"><i class=\"fas fa-store\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 20
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 20);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t<a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 31
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 31);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 37
        if (($context["error_warning"] ?? null)) {
            // line 38
            echo "\t\t<script>
\t\t\tusNotify('warning', '";
            // line 39
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t</script>
\t\t";
        }
        // line 42
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 43
            echo "\t    <script>
\t\t\tusNotify('success', '";
            // line 44
            echo ($context["success"] ?? null);
            echo "');
\t\t</script>
\t    ";
        }
        // line 47
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 49
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t\t<div class=\"pull-right oct-version\">v.<span>";
        // line 50
        echo ($context["theme_oct_deals_version"] ?? null);
        echo "</span></div>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 53
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-cog fw\"></i> ";
        // line 55
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-image\" data-toggle=\"tab\"><i class=\"fa fa-picture-o fw\"></i> ";
        // line 56
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-widgets\" data-toggle=\"tab\"><i class=\"fa fa-cog fw\"></i> ";
        // line 57
        echo ($context["tab_widgets"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-seo_title\" data-toggle=\"tab\"><i class=\"fa fa-info fw\"></i> ";
        // line 58
        echo ($context["text_seo_title"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-help\" data-toggle=\"tab\"><i class=\"fas fa-info-circle\"></i> ";
        // line 59
        echo ($context["tab_help"] ?? null);
        echo "</a></li>
\t\t            </ul>
\t\t            <div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active row\" id=\"tab-general\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 65
        echo ($context["text_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-header\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-up fw\"></i> ";
        // line 66
        echo ($context["tab_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-down fw\"></i> ";
        // line 67
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-contacts\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-users fw\"></i> ";
        // line 68
        echo ($context["tab_contacts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-bars fw\"></i> ";
        // line 69
        echo ($context["tab_menu"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-category\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-folder-open fw\"></i> ";
        // line 70
        echo ($context["tab_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-product\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-tv fw\"></i> ";
        // line 71
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-orders\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"far fa-check-circle fw\"></i> ";
        // line 72
        echo ($context["tab_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-microdata\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-code fw\"></i> ";
        // line 73
        echo ($context["tab_microdata"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"code_mir\" href=\"#tab-css_js\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 74
        echo ($context["tab_css_js"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings-main\" data-toggle=\"tab\">";
        // line 81
        echo ($context["tab_main_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-optimization\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 82
        echo ($context["text_optimization"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-settings-colors\" data-toggle=\"tab\">";
        // line 83
        echo ($context["text_main_color_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings-main\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 88
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_directory\" value=\"";
        // line 89
        echo ($context["theme_oct_deals_directory"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"theme_oct_deals_status\">";
        // line 91
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_status\" ";
        // line 94
        if (($context["theme_oct_deals_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"theme_oct_deals_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"theme_oct_deals_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-license\">";
        // line 106
        echo ($context["entry_license"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-license\" name=\"theme_oct_deals_license\" value=\"";
        // line 108
        echo ($context["theme_oct_deals_license"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 109
        if (($context["error_license"] ?? null)) {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 112
            echo ($context["error_license"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"theme_oct_deals_font\">";
        // line 119
        echo ($context["entry_font"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[font]\" id=\"theme_oct_deals_font\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 122) == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">Ubuntu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 123) == 1)) {
            echo " selected=\"selected\"";
        }
        echo ">Roboto</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\"";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 124) == 2)) {
            echo " selected=\"selected\"";
        }
        echo ">Open Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\"";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 125) == 3)) {
            echo " selected=\"selected\"";
        }
        echo ">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\"";
        // line 126
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 126) == 4)) {
            echo " selected=\"selected\"";
        }
        echo ">Inter</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\"";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 127) == 5)) {
            echo " selected=\"selected\"";
        }
        echo ">Fira Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\"";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 128) == 6)) {
            echo " selected=\"selected\"";
        }
        echo ">Rubik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\"";
        // line 129
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 129) == 7)) {
            echo " selected=\"selected\"";
        }
        echo ">Noto Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\"";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 130) == 8)) {
            echo " selected=\"selected\"";
        }
        echo ">Raleway</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\"";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 131) == 9)) {
            echo " selected=\"selected\"";
        }
        echo ">Nunito</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"theme_oct_deals_width\">";
        // line 136
        echo ($context["entry_width_front"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[width]\" id=\"theme_oct_deals_width\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 139
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "width", [], "any", false, false, false, 139) == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_width_0"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "width", [], "any", false, false, false, 140) == 1)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_width_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\"";
        // line 141
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "width", [], "any", false, false, false, 141) == 2)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_width_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-theme\">";
        // line 146
        echo ($context["entry_dark_theme"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[dark_theme]\" ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "dark_theme", [], "any", false, false, false, 149)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-dark-theme\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-dark-theme\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme\">";
        // line 161
        echo ($context["entry_theme"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[theme]\" id=\"input-theme\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"light\"";
        // line 164
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "theme", [], "any", false, false, false, 164) == "light")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_theme_light"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"dark\"";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "theme", [], "any", false, false, false, 165) == "dark")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_theme_dark"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-open_graph\">";
        // line 170
        echo ($context["entry_open_graph"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[open_graph]\" ";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "open_graph", [], "any", false, false, false, 173)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-open_graph\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-open_graph\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-no_quantity_grayscale\">";
        // line 185
        echo ($context["entry_no_quantity_grayscale"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_no_quantity_grayscale\" ";
        // line 188
        if (($context["theme_oct_deals_no_quantity_grayscale"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-no_quantity_grayscale\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-no_quantity_grayscale\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-compare\">";
        // line 200
        echo ($context["entry_header_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_colors[compare]\" ";
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "compare", [], "any", false, false, false, 203)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-compare\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-compare\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-wishlist\">";
        // line 215
        echo ($context["entry_header_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_colors[wishlist]\" ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "wishlist", [], "any", false, false, false, 218)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-wishlist\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-wishlist\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-oct-popup-options\">";
        // line 230
        echo ($context["entry_oct_popup_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[oct_popup_options]\" ";
        // line 233
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "oct_popup_options", [], "any", false, false, false, 233)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-oct-popup-options\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-oct-popup-options\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-isbuttoninteractive\">";
        // line 245
        echo ($context["entry_isbuttoninteractive"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[isbuttoninteractive]\" ";
        // line 248
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "isbuttoninteractive", [], "any", false, false, false, 248)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-isbuttoninteractive\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-isbuttoninteractive\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use-minimum-step\">";
        // line 260
        echo ($context["entry_use_minimum_step"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[use_minimum_step]\" ";
        // line 263
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "use_minimum_step", [], "any", false, false, false, 263)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-use-minimum-step\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-use-minimum-step\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-phone-regex\">";
        // line 275
        echo ($context["entry_phone_regex"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-phone-regex\" name=\"theme_oct_deals_data[phone_regex]\" value=\"";
        // line 277
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "phone_regex", [], "any", false, false, false, 277);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
        // line 280
        echo ($context["help_phone_regex"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-bought_together\">";
        // line 284
        echo ($context["entry_bought_together"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[bought_together]\" ";
        // line 287
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "bought_together", [], "any", false, false, false, 287)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-bought_together\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-bought_together\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"all_bought_together_settings\" ";
        // line 298
        if ( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "bought_together", [], "any", true, true, false, 298)) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme_oct_deals_data_bought_together_cron\">";
        // line 300
        echo ($context["text_bought_together_cron"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-theme_oct_deals_data_bought_together_cron\" name=\"theme_oct_deals_data_bought_together_cron\" value=\"";
        // line 302
        echo (((array_key_exists("theme_oct_deals_data_bought_together_cron", $context) && ($context["theme_oct_deals_data_bought_together_cron"] ?? null))) ? (($context["theme_oct_deals_data_bought_together_cron"] ?? null)) : (""));
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_bought_together_cron"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 303
        if ( !($context["bought_together_cron_url"] ?? null)) {
            echo "<span class=\"help-block\">";
            echo ($context["help_bought_together"] ?? null);
            echo "</span>";
        }
        // line 304
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 306
        if (($context["bought_together_cron_url"] ?? null)) {
            // line 307
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme_oct_deals_data_bought_together_cron\">";
            // line 308
            echo ($context["text_bought_together_cron_url"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"/usr/bin/wget -O - -q -t 1 '";
            // line 312
            echo ($context["bought_together_cron_url"] ?? null);
            echo "'\" id=\"input-cron\" class=\"form-control\" readonly>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"clipboard-button\" class=\"btn btn-info\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 314
            echo ($context["text_copy"] ?? null);
            echo "\" onclick=\"copyToClipboard('input-cron');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-files-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
            // line 320
            echo ($context["help_bought_together_cron"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme_oct_deals_data_bought_together_cron\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"btn_mass_generate_bought_together\" type=\"button\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 328
            echo ($context["text_button_generate"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#btn_mass_generate_bought_together').click(function(){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar \$btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$btn.prop('disabled', true).html('<i class=\"fa fa-spinner fa-spin\"></i> ";
            // line 335
            echo ($context["text_generating"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: '";
            // line 338
            echo ($context["bought_together_cron_url"] ?? null);
            echo "',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'GET',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function(response){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (response.error) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('danger', response.error);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('success', '";
            // line 345
            echo ($context["text_generated"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\terror: function(){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('danger', '";
            // line 349
            echo ($context["text_generated_failed"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcomplete: function(){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$btn.prop('disabled', false).html('";
            // line 352
            echo ($context["text_button_generate"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 358
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-optimization\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 364
        echo ($context["text_optimization"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-minify\">";
        // line 366
        echo ($context["entry_minify"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[minify]\" ";
        // line 369
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "minify", [], "any", false, false, false, 369)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-minify\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-minify\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-webp\">";
        // line 381
        echo ($context["entry_webp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_webp\" ";
        // line 384
        if (($context["theme_oct_deals_webp"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-webp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-webp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer-scripts\">";
        // line 396
        echo ($context["entry_footer_scripts"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_scripts]\" ";
        // line 399
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_scripts", [], "any", false, false, false, 399)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer-scripts\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer-scripts\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 411
        echo ($context["entry_preload_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-preload_images\">";
        // line 413
        echo ($context["entry_preload_images"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[preload_images]\" ";
        // line 416
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "preload_images", [], "any", false, false, false, 416)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-preload_images\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-preload_images\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings-colors\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"color-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab-main-colors\">";
        // line 433
        echo ($context["text_main_colors"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab-light-theme\">";
        // line 436
        echo ($context["text_light_theme"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab-dark-theme\">";
        // line 439
        echo ($context["text_dark_theme"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-main-colors\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 446
        echo ($context["text_main_colors"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-main-color\">";
        // line 449
        echo ($context["entry_main_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[main_color]\" value=\"";
        // line 451
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_color", [], "any", true, true, false, 451) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_color", [], "any", false, false, false, 451))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_color", [], "any", false, false, false, 451);
        } else {
            echo "rgb(0, 168, 232)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_main_color"] ?? null);
        echo "\" id=\"input-main-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-main-link-color\">";
        // line 455
        echo ($context["entry_main_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[main_link_color]\" value=\"";
        // line 457
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_link_color", [], "any", true, true, false, 457) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_link_color", [], "any", false, false, false, 457))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_link_color", [], "any", false, false, false, 457);
        } else {
            echo "rgb(0, 168, 232)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_main_link_color"] ?? null);
        echo "\" id=\"input-main-link-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-link-hover-color\">";
        // line 461
        echo ($context["entry_link_hover_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[link_hover_color]\" value=\"";
        // line 463
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "link_hover_color", [], "any", true, true, false, 463) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "link_hover_color", [], "any", false, false, false, 463))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "link_hover_color", [], "any", false, false, false, 463);
        } else {
            echo "rgb(0, 168, 232)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_link_hover_color"] ?? null);
        echo "\" id=\"input-link-hover-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-special-price-color\">";
        // line 467
        echo ($context["entry_special_price_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[special_price_color]\" value=\"";
        // line 469
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "special_price_color", [], "any", true, true, false, 469) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "special_price_color", [], "any", false, false, false, 469))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "special_price_color", [], "any", false, false, false, 469);
        } else {
            echo "rgb(213, 56, 61)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_special_price_color"] ?? null);
        echo "\" id=\"input-special-price-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-interactive-color\">";
        // line 473
        echo ($context["entry_interactive_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[interactive_color]\" value=\"";
        // line 475
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "interactive_color", [], "any", true, true, false, 475) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "interactive_color", [], "any", false, false, false, 475))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "interactive_color", [], "any", false, false, false, 475);
        } else {
            echo "rgb(82, 187, 56)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_interactive_color"] ?? null);
        echo "\" id=\"input-interactive-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-light-theme\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 484
        echo ($context["text_light_theme"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-light-background-color\">";
        // line 487
        echo ($context["entry_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[light_background_color]\" value=\"";
        // line 489
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_background_color", [], "any", true, true, false, 489) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_background_color", [], "any", false, false, false, 489))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_background_color", [], "any", false, false, false, 489);
        } else {
            echo "rgb(248, 251, 253)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_background_color"] ?? null);
        echo "\" id=\"input-light-background-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-light-primary-text-color\">";
        // line 493
        echo ($context["entry_primary_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[light_primary_text_color]\" value=\"";
        // line 495
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_primary_text_color", [], "any", true, true, false, 495) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_primary_text_color", [], "any", false, false, false, 495))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_primary_text_color", [], "any", false, false, false, 495);
        } else {
            echo "rgb(0, 23, 31)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_primary_text_color"] ?? null);
        echo "\" id=\"input-light-primary-text-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-light-secondary-text-color\">";
        // line 499
        echo ($context["entry_secondary_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[light_secondary_text_color]\" value=\"";
        // line 501
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_secondary_text_color", [], "any", true, true, false, 501) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_secondary_text_color", [], "any", false, false, false, 501))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_secondary_text_color", [], "any", false, false, false, 501);
        } else {
            echo "rgb(0, 52, 89)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_secondary_text_color"] ?? null);
        echo "\" id=\"input-light-secondary-text-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-light-header-background-color\">";
        // line 505
        echo ($context["entry_header_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[light_header_background_color]\" value=\"";
        // line 507
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_header_background_color", [], "any", true, true, false, 507) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_header_background_color", [], "any", false, false, false, 507))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_header_background_color", [], "any", false, false, false, 507);
        } else {
            echo "rgb(255, 255, 255)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_header_background_color"] ?? null);
        echo "\" id=\"input-light-header-background-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-light-footer-background-color\">";
        // line 511
        echo ($context["entry_footer_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[light_footer_background_color]\" value=\"";
        // line 513
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_background_color", [], "any", true, true, false, 513) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_background_color", [], "any", false, false, false, 513))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_background_color", [], "any", false, false, false, 513);
        } else {
            echo "rgb(255, 255, 255)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_footer_background_color"] ?? null);
        echo "\" id=\"input-light-footer-background-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-light-footer-text-color\">";
        // line 517
        echo ($context["entry_footer_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[light_footer_text_color]\" value=\"";
        // line 519
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_text_color", [], "any", true, true, false, 519) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_text_color", [], "any", false, false, false, 519))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_text_color", [], "any", false, false, false, 519);
        } else {
            echo "rgb(0, 52, 89)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_footer_text_color"] ?? null);
        echo "\" id=\"input-light-footer-text-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-light-footer-title-color\">";
        // line 523
        echo ($context["entry_footer_title_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[light_footer_title_color]\" value=\"";
        // line 525
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_title_color", [], "any", true, true, false, 525) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_title_color", [], "any", false, false, false, 525))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "light_footer_title_color", [], "any", false, false, false, 525);
        } else {
            echo "rgb(0, 23, 31)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_footer_title_color"] ?? null);
        echo "\" id=\"input-light-footer-title-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-dark-theme\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 534
        echo ($context["text_dark_theme"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color-content\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-logo\">";
        // line 538
        echo ($context["logo_dark_placeholder"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 541
        echo ($context["logo_dark_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["logo_dark_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[logo_dark]\" value=\"";
        // line 543
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "logo_dark", [], "any", false, false, false, 543);
        echo "\" id=\"input-logo_dark\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-background-color\">";
        // line 547
        echo ($context["entry_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[dark_background_color]\" value=\"";
        // line 549
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_background_color", [], "any", true, true, false, 549) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_background_color", [], "any", false, false, false, 549))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_background_color", [], "any", false, false, false, 549);
        } else {
            echo "rgb(27, 27, 27)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_background_color"] ?? null);
        echo "\" id=\"input-dark-background-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-primary-text-color\">";
        // line 553
        echo ($context["entry_primary_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[dark_primary_text_color]\" value=\"";
        // line 555
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_primary_text_color", [], "any", true, true, false, 555) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_primary_text_color", [], "any", false, false, false, 555))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_primary_text_color", [], "any", false, false, false, 555);
        } else {
            echo "rgb(248, 252, 255)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_primary_text_color"] ?? null);
        echo "\" id=\"input-dark-primary-text-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-secondary-text-color\">";
        // line 559
        echo ($context["entry_secondary_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[dark_secondary_text_color]\" value=\"";
        // line 561
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_secondary_text_color", [], "any", true, true, false, 561) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_secondary_text_color", [], "any", false, false, false, 561))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_secondary_text_color", [], "any", false, false, false, 561);
        } else {
            echo "rgb(144, 144, 144)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_secondary_text_color"] ?? null);
        echo "\" id=\"input-dark-secondary-text-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-header-background-color\">";
        // line 565
        echo ($context["entry_header_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[dark_header_background_color]\" value=\"";
        // line 567
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_header_background_color", [], "any", true, true, false, 567) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_header_background_color", [], "any", false, false, false, 567))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_header_background_color", [], "any", false, false, false, 567);
        } else {
            echo "rgb(20, 20, 20)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_header_background_color"] ?? null);
        echo "\" id=\"input-dark-header-background-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-footer-background-color\">";
        // line 571
        echo ($context["entry_footer_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[dark_footer_background_color]\" value=\"";
        // line 573
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_background_color", [], "any", true, true, false, 573) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_background_color", [], "any", false, false, false, 573))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_background_color", [], "any", false, false, false, 573);
        } else {
            echo "rgb(20, 20, 20)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_footer_background_color"] ?? null);
        echo "\" id=\"input-dark-footer-background-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-footer-text-color\">";
        // line 577
        echo ($context["entry_footer_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[dark_footer_text_color]\" value=\"";
        // line 579
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_text_color", [], "any", true, true, false, 579) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_text_color", [], "any", false, false, false, 579))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_text_color", [], "any", false, false, false, 579);
        } else {
            echo "rgb(144, 144, 144)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_footer_text_color"] ?? null);
        echo "\" id=\"input-dark-footer-text-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-footer-title-color\">";
        // line 583
        echo ($context["entry_footer_title_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[dark_footer_title_color]\" value=\"";
        // line 585
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_title_color", [], "any", true, true, false, 585) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_title_color", [], "any", false, false, false, 585))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "dark_footer_title_color", [], "any", false, false, false, 585);
        } else {
            echo "rgb(248, 252, 255)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_footer_title_color"] ?? null);
        echo "\" id=\"input-dark-footer-title-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-header\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 597
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-header_account\">";
        // line 599
        echo ($context["entry_header_account"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[header_account]\" ";
        // line 602
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "header_account", [], "any", false, false, false, 602)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_account\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_account\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-header_lang\">";
        // line 614
        echo ($context["entry_header_lang"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[header_lang]\" ";
        // line 617
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "header_lang", [], "any", false, false, false, 617)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_lang\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_lang\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-header_cur\">";
        // line 629
        echo ($context["entry_header_cur"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[header_cur]\" ";
        // line 632
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "header_cur", [], "any", false, false, false, 632)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_cur\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_cur\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-footer-settings\" data-toggle=\"tab\">";
        // line 647
        echo ($context["tab_main_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-payments-settings\" data-toggle=\"tab\">";
        // line 648
        echo ($context["text_paymant_systems"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t                    \t<div class=\"tab-pane active\" id=\"tab-footer-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_totop\">";
        // line 654
        echo ($context["entry_footer_totop"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_totop]\" ";
        // line 657
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_totop", [], "any", false, false, false, 657)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_totop\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_totop\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_subscribe\">";
        // line 669
        echo ($context["entry_footer_subscribe"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_subscribe]\" ";
        // line 672
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_subscribe", [], "any", false, false, false, 672)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_subscribe\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_subscribe\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-payments-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 687
        echo ($context["text_paymant_systems"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payments_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_privat24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/privat24.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][privat24]\" ";
        // line 695
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 695), "privat24", [], "any", false, false, false, 695)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_privat24\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_privat24\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_monoplata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/monoplata.svg\" width=\"80\" height=\"50\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][monoplata]\" ";
        // line 712
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 712), "monoplata", [], "any", false, false, false, 712)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_monoplata\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_monoplata\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_wayforpay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/wayforpay.svg\" width=\"80\" height=\"50\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][wayforpay]\" ";
        // line 729
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 729), "wayforpay", [], "any", false, false, false, 729)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_wayforpay\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_wayforpay\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_lp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/liqpay.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][lp]\" ";
        // line 746
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 746), "lp", [], "any", false, false, false, 746)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_lp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_lp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_visa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/visa.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][visa]\" ";
        // line 763
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 763), "visa", [], "any", false, false, false, 763)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_visa\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_visa\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_mc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/mastercard.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][mc]\" ";
        // line 780
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 780), "mc", [], "any", false, false, false, 780)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_mc\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_mc\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_maestro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/maestro.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][maestro]\" ";
        // line 797
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 797), "maestro", [], "any", false, false, false, 797)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_maestro\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_maestro\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_pp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/paypal.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][pp]\" ";
        // line 814
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 814), "pp", [], "any", false, false, false, 814)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_pp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_pp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_skrill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/skrill.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][skrill]\" ";
        // line 831
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 831), "skrill", [], "any", false, false, false, 831)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_skrill\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_skrill\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_interkassa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/interkassa.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][interkassa]\" ";
        // line 848
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 848), "interkassa", [], "any", false, false, false, 848)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_interkassa\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_interkassa\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 859
        $context["payment_row"] = 0;
        // line 860
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 860), "customers", [], "any", false, false, false, 860));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 861
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payments-row-";
            echo ($context["payment_row"] ?? null);
            echo "\" class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btnr\" href=\"javascript:;\" onclick=\"\$('#payments-row-";
            // line 862
            echo ($context["payment_row"] ?? null);
            echo "').remove()\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_customers_";
            // line 863
            echo ($context["payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
            // line 864
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "thumb_image", [], "any", false, false, false, 864);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 865
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "image", [], "any", false, false, false, 865);
            echo "\" name=\"theme_oct_deals_data[payments][customers][";
            echo ($context["payment_row"] ?? null);
            echo "][image]\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][customers][";
            // line 869
            echo ($context["payment_row"] ?? null);
            echo "][status]\" ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 869), "customers", [], "any", false, false, false, 869)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["payment_row"] ?? null)] ?? null) : null), "status", [], "any", false, false, false, 869)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-payments_customers_";
            echo ($context["payment_row"] ?? null);
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_customers_";
            // line 870
            echo ($context["payment_row"] ?? null);
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 880
            $context["payment_row"] = (($context["payment_row"] ?? null) + 1);
            // line 881
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 882
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"add_new_block\" class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_block_in\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addPayment();\" data-toggle=\"tooltip\" title=\"";
        // line 884
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contacts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-contacts-settings\" data-toggle=\"tab\">";
        // line 894
        echo ($context["tab_contacts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-contacts-page\" data-toggle=\"tab\">";
        // line 895
        echo ($context["tab_contacts_page"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-locations-settings\" data-toggle=\"tab\">";
        // line 896
        echo ($context["text_locations"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-socials-settings\" data-toggle=\"tab\">";
        // line 897
        echo ($context["text_socials"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t                    \t<div class=\"tab-pane active\" id=\"tab-contacts-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 902
        echo ($context["tab_contacts"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_address\">";
        // line 904
        echo ($context["entry_contact_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"address-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 907
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 908
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#address-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 908);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 908);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 908);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 908);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 908);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 910
        echo "\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t                        \t";
        // line 912
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 913
            echo "\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"address-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 913);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_address\" name=\"theme_oct_deals_data[contact_address][";
            // line 914
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 914);
            echo "]\" rows=\"5\" class=\"form-control\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_address", [], "any", false, false, false, 914)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 914)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 917
        echo "\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_telephone\">";
        // line 921
        echo ($context["entry_contact_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_telephone\" name=\"theme_oct_deals_data[contact_telephone]\" rows=\"5\" class=\"form-control\">";
        // line 923
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_telephone", [], "any", false, false, false, 923);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_open\">";
        // line 927
        echo ($context["entry_contact_open"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"open-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 930
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 931
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#open-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 931);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 931);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 931);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 931);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 931);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 933
        echo "\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t                        \t";
        // line 935
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 936
            echo "\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"open-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 936);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_address\" name=\"theme_oct_deals_data[contact_open][";
            // line 937
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 937);
            echo "]\" rows=\"5\" class=\"form-control\">";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_open", [], "any", false, false, false, 937)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 937)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 940
        echo "\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_map\">";
        // line 944
        echo ($context["entry_contact_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_map\" name=\"theme_oct_deals_data[contact_map]\" rows=\"5\" class=\"form-control\">";
        // line 946
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_map", [], "any", false, false, false, 946);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_image\">";
        // line 950
        echo ($context["entry_location_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_image\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 953
        echo ($context["contact_image_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["contact_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
                  \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[contact_image]\" value=\"";
        // line 955
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_image", [], "any", false, false, false, 955);
        echo "\" id=\"input-contact_image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_email\">";
        // line 959
        echo ($context["entry_contact_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"contact_email\" name=\"theme_oct_deals_data[contact_email]\" value=\"";
        // line 961
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_email", [], "any", false, false, false, 961);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_teams\">";
        // line 965
        echo ($context["entry_contact_teams"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_teams\" name=\"theme_oct_deals_data[contact_teams]\" value=\"";
        // line 967
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_teams", [], "any", false, false, false, 967);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_whatsapp\">";
        // line 971
        echo ($context["entry_contact_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_whatsapp\" name=\"theme_oct_deals_data[contact_whatsapp]\" value=\"";
        // line 973
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 973);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_viber\">";
        // line 977
        echo ($context["entry_contact_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_viber\" name=\"theme_oct_deals_data[contact_viber]\" value=\"";
        // line 979
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_viber", [], "any", false, false, false, 979);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_telegram\">";
        // line 983
        echo ($context["entry_contact_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_telegram\" name=\"theme_oct_deals_data[contact_telegram]\" value=\"";
        // line 985
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_telegram", [], "any", false, false, false, 985);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_messenger\">";
        // line 989
        echo ($context["entry_contact_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_messenger\" name=\"theme_oct_deals_data[contact_messenger]\" value=\"";
        // line 991
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_messenger", [], "any", false, false, false, 991);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contacts-page\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 998
        echo ($context["tab_contacts_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_address\">";
        // line 1000
        echo ($context["entry_contact_view_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_address]\" ";
        // line 1003
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_address", [], "any", false, false, false, 1003)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_address\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_address\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_phone\">";
        // line 1015
        echo ($context["entry_contact_view_phone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_phone]\" ";
        // line 1018
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_phone", [], "any", false, false, false, 1018)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_phone\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_phone\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_time\">";
        // line 1030
        echo ($context["entry_contact_view_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_time]\" ";
        // line 1033
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_time", [], "any", false, false, false, 1033)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_time\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_time\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_map\">";
        // line 1045
        echo ($context["entry_contact_view_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_map]\" ";
        // line 1048
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_map", [], "any", false, false, false, 1048)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_map\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_map\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_socials\">";
        // line 1060
        echo ($context["entry_contact_view_socials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_socials]\" ";
        // line 1063
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_socials", [], "any", false, false, false, 1063)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_socials\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_socials\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_locations\">";
        // line 1075
        echo ($context["entry_contact_view_locations"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_locations]\" ";
        // line 1078
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_locations", [], "any", false, false, false, 1078)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_locations\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_locations\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-locations-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1093
        echo ($context["text_locations"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"site_locations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1096
        $context["location_id"] = 1;
        // line 1097
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["oct_locations"] ?? null)) {
            // line 1098
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_location"]) {
                // line 1099
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"locations-";
                echo ($context["location_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> ";
                // line 1101
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "title", [], "any", false, false, false, 1101);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#locations-";
                // line 1102
                echo ($context["location_id"] ?? null);
                echo "').remove();return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1108
                echo ($context["text_locations_descr"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs location-block\" id=\"locations-language-";
                // line 1109
                echo ($context["location_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1111
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#locations-language";
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1111);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1111);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1111);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1111);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1111);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1113
                echo "\t\t\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t                        \t";
                // line 1115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1116
                    echo "\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"locations-language";
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1116);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_title";
                    // line 1118
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1118);
                    echo "\">";
                    echo ($context["entry_location_title"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"descr_title";
                    // line 1120
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1120);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1120);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1120)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1120)] ?? null) : null), "title", [], "any", false, false, false, 1120);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_address";
                    // line 1124
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1124);
                    echo "\">";
                    echo ($context["entry_location_address"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descr_address";
                    // line 1126
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1126);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1126);
                    echo "][address]\" rows=\"5\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1126)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1126)] ?? null) : null), "address", [], "any", false, false, false, 1126);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_open";
                    // line 1130
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1130);
                    echo "\">";
                    echo ($context["entry_contact_open"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descr_open";
                    // line 1132
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1132);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1132);
                    echo "][open]\" rows=\"5\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1132)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1132)] ?? null) : null), "open", [], "any", false, false, false, 1132);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1137
                echo "\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1140
                echo ($context["text_locations_info"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_phone";
                // line 1142
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_contact_telephone"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"location_phone";
                // line 1144
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][phone]\" rows=\"5\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "phone", [], "any", false, false, false, 1144);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_map";
                // line 1148
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_contact_map"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"location_map";
                // line 1150
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][map]\" rows=\"5\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "map", [], "any", false, false, false, 1150);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_link";
                // line 1154
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"location_link";
                // line 1156
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "link", [], "any", false, false, false, 1156);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_image";
                // line 1160
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_location_image";
                // line 1162
                echo ($context["location_id"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 1163
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "thumb", [], "any", false, false, false, 1163);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["contact_placeholder"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t                  \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_locations[";
                // line 1165
                echo ($context["location_id"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "image", [], "any", false, false, false, 1165);
                echo "\" id=\"input-contact_location_image";
                echo ($context["location_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_sort";
                // line 1169
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"location_sort";
                // line 1171
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][sort]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "sort", [], "any", false, false, false, 1171);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1177
                $context["location_id"] = (($context["location_id"] ?? null) + 1);
                // line 1178
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1179
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1180
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"empty_locations\">";
            echo ($context["text_locations_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1182
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-primary\" id=\"locations_add\" onclick=\"addNewLocation();\">";
        // line 1184
        echo ($context["text_add_location"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <div class=\"tab-pane\" id=\"tab-socials-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1189
        echo ($context["text_socials"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1193
        $context["social_row"] = 0;
        // line 1194
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "socials", [], "any", false, false, false, 1194));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 1195
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"social-row";
            echo ($context["social_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<button onClick=\"fontIcons('social_icone-";
            // line 1199
            echo ($context["social_row"] ?? null);
            echo "', 'social_input_icone-";
            echo ($context["social_row"] ?? null);
            echo "');\" class=\"btn btn-default social_icone\" type=\"button\"><i id=\"social_icone-";
            echo ($context["social_row"] ?? null);
            echo "\" class=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 1199);
            echo "\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_deals_data[socials][";
            // line 1200
            echo ($context["social_row"] ?? null);
            echo "][icone]\" id=\"social_input_icone-";
            echo ($context["social_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 1200);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <input type=\"text\" name=\"theme_oct_deals_data[socials][";
            // line 1202
            echo ($context["social_row"] ?? null);
            echo "][title]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "title", [], "any", false, false, false, 1202);
            echo "\" placeholder=\"";
            echo ($context["entry_social_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[socials][";
            // line 1206
            echo ($context["social_row"] ?? null);
            echo "][link]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 1206);
            echo "\" placeholder=\"";
            echo ($context["entry_social_link"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#social-row";
            // line 1208
            echo ($context["social_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1210
            $context["social_row"] = (($context["social_row"] ?? null) + 1);
            // line 1211
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1212
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addSocial();\" data-toggle=\"tooltip\" title=\"";
        // line 1216
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-main-menu\" data-toggle=\"tab\">";
        // line 1227
        echo ($context["text_megamenu_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-header-menu\" data-toggle=\"tab\">";
        // line 1228
        echo ($context["tab_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer-menu\" data-toggle=\"tab\">";
        // line 1229
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-main-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1234
        echo ($context["text_megamenu_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-megamenu_status\">";
        // line 1236
        echo ($context["text_megamenu_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[megamenu][status]\" ";
        // line 1239
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1239), "status", [], "any", false, false, false, 1239)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-megamenu_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-megamenu_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language-megamenu\">
\t\t\t\t\t\t\t\t                      ";
        // line 1251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1252
            echo "\t\t\t\t\t\t\t\t                      <li><a href=\"#language-megamenu";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1252);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1252);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1252);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1252);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1252);
            echo "</a></li>
\t\t\t\t\t\t\t\t                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1254
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t                        ";
        // line 1256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1257
            echo "\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"language-megamenu";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1257);
            echo "\">
\t\t\t\t\t\t\t\t                                <div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dtitle";
            // line 1259
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1259);
            echo "\">";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[megamenu][dtitle][";
            // line 1261
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1261);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, true, false, 1261), "dtitle", [], "any", false, true, false, 1261), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1261), [], "array", true, true, false, 1261)) ? ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1261), "dtitle", [], "any", false, false, false, 1261)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1261)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "\" id=\"input-dtitle";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1261);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1266
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_megamenu_categories\">";
        // line 1268
        echo ($context["entry_megamenu_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[megamenu][dcategories]\" ";
        // line 1271
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1271), "dcategories", [], "any", false, false, false, 1271)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_megamenu_categories_limit\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 1283
        echo ($context["help_megamenu_categories_limit"] ?? null);
        echo "\">";
        echo ($context["entry_megamenu_categories_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[megamenu][limit]\" value=\"";
        // line 1285
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1285), "limit", [], "any", false, false, false, 1285);
        echo "\" placeholder=\"";
        echo ($context["entry_megamenu_categories_limit"] ?? null);
        echo "\" id=\"oct_megamenu_categories_limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1289
        echo ($context["entry_menu_cat_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[megamenu][view]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1292
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1292), "view", [], "any", false, false, false, 1292) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_cat_view_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1293
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1293), "view", [], "any", false, false, false, 1293) == "2")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_cat_view_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1298
        echo ($context["entry_menu_sort_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[megamenu][sort]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1301
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1301), "sort", [], "any", false, false, false, 1301) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1302
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1302), "sort", [], "any", false, false, false, 1302) == "2")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 1303
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1303), "sort", [], "any", false, false, false, 1303) == "3")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 1304
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1304), "sort", [], "any", false, false, false, 1304) == "4")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_4"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_megamenu_categories_icon\">";
        // line 1309
        echo ($context["entry_megamenu_categories_icon"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[megamenu][icon]\" ";
        // line 1312
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1312), "icon", [], "any", false, false, false, 1312)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories_icon\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories_icon\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_megamenu_categories_page\">";
        // line 1324
        echo ($context["entry_megamenu_categories_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[megamenu][page]\" ";
        // line 1327
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1327), "page", [], "any", false, false, false, 1327)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1340
        echo ($context["text_megamenu_items"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"megamenu_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1342
        $context["menu_id"] = 1000;
        // line 1343
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["oct_megamenu"] ?? null)) {
            // line 1344
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_megamenu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_menu"]) {
                // line 1345
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"megamenu-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1345);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <span><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> ";
                // line 1347
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "title", [], "any", false, false, false, 1347);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#megamenu-";
                // line 1348
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1348);
                echo "').remove();return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs main_menu_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_general";
                // line 1354
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1354);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_general"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_language";
                // line 1355
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1355);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_language"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_links";
                // line 1356
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1356);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_links"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_general";
                // line 1359
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1359);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1361
                echo ($context["text_menu_type"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_megamenu[";
                // line 1363
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1363);
                echo "][type]\" class=\"form-control menu_type\" id=\"menu_type-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1363);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
                // line 1364
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1364) == "")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"category\" ";
                // line 1365
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1365) == "category")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_1"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"manufacturer\" ";
                // line 1366
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1366) == "manufacturer")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_2"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"oct_blogcategory\" ";
                // line 1367
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1367) == "oct_blogcategory")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_3"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"link\" ";
                // line 1368
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1368) == "link")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_4"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_megamenu[";
                // line 1372
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1372);
                echo "][setting]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1372);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1374
                echo ($context["text_menu_display_option"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_megamenu[";
                // line 1376
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1376);
                echo "][display_option]\" class=\"form-control menu_display_option\" id=\"menu_display_option-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1376);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
                // line 1377
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "display_option", [], "any", false, false, false, 1377) == "")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_display_option_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"vertical\" ";
                // line 1378
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "display_option", [], "any", false, false, false, 1378) == "vertical")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_display_option_1"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"horizontal\" ";
                // line 1379
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "display_option", [], "any", false, false, false, 1379) == "horizontal")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_display_option_2"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"menu_settings-";
                // line 1383
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1383);
                echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_language";
                // line 1385
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1385);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1386
                echo ($context["tab_menu_language"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs menu_lang_block\" id=\"menu_item_language";
                // line 1387
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1387);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1388
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1389
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#menu_item_language";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1389);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1389);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1389);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1389);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1389);
                    echo "\" />  ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1389);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1391
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1393
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1394
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"menu_item_language";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1394);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1394);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                    // line 1396
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1396);
                    echo "\">";
                    echo ($context["entry_menu_title"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[";
                    // line 1398
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1398);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1398);
                    echo "][title]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, true, false, 1398), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1398), [], "array", true, true, false, 1398)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, false, false, 1398)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1398)] ?? null) : null), "title", [], "any", false, false, false, 1398)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_menu_title"] ?? null);
                    echo "\" id=\"input-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1398);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
                    // line 1402
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1402);
                    echo "\">";
                    echo ($context["entry_menu_link"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[";
                    // line 1404
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1404);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1404);
                    echo "][link]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, true, false, 1404), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1404), [], "array", true, true, false, 1404)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, false, false, 1404)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1404)] ?? null) : null), "link", [], "any", false, false, false, 1404)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_menu_link"] ?? null);
                    echo "\" id=\"input-link";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1404);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1409
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_links";
                // line 1411
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1411);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1413
                echo ($context["entry_menu_store"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1416
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 1417
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1419
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1419), twig_get_attribute($this->env, $this->source, $context["oct_menu"], "stories", [], "any", false, false, false, 1419))) {
                        // line 1420
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1420);
                        echo "][stories][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1420);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1421
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["store"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 1423
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1423);
                        echo "][stories][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1423);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1424
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["store"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1426
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1429
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-priority\">";
                // line 1433
                echo ($context["entry_menu_customers"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1436
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 1437
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1439
                    if (twig_in_filter(0, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "customers", [], "any", false, false, false, 1439))) {
                        // line 1440
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1440);
                        echo "][customers][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1440);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1441
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["customer_group"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 1443
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1443), twig_get_attribute($this->env, $this->source, $context["oct_menu"], "customers", [], "any", false, false, false, 1443))) {
                            // line 1444
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1444);
                            echo "][customers][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1444);
                            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 1445
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["customer_group"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 1447
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1447);
                            echo "][customers][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1447);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 1448
                            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["customer_group"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 1450
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1451
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1454
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1461
                $context["menu_id"] = (($context["menu_id"] ?? null) + 1);
                // line 1462
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1463
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1464
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"empty_locations\">";
            echo ($context["text_menuitems_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1466
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-primary\" id=\"menuitem_add\" onclick=\"addNewMenuItem();\">";
        // line 1468
        echo ($context["text_add_menuitem"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-header-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1474
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label mb-3\" for=\"input-header_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1476
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"header_advantages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1482
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1483
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1487
        $context["header_advantages_row"] = 0;
        // line 1488
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "header_links", [], "any", false, false, false, 1488));
        foreach ($context['_seq'] as $context["_key"] => $context["header_link"]) {
            // line 1489
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"header_advantage-row";
            echo ($context["header_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"header_advantage_link\" value=\"\" placeholder=\"";
            // line 1492
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"header_advantage-";
            echo ($context["header_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1495
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1496
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 1498
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1498);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1498);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1498);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[header_links][";
                // line 1500
                echo ($context["header_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1500);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["header_link"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1500)] ?? null) : null), "title", [], "any", false, false, false, 1500);
                echo "\" id=\"header_advantages_row-title-";
                echo ($context["header_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1500);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1503
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1505
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1506
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 1508
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1508);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1508);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1508);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[header_links][";
                // line 1510
                echo ($context["header_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1510);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["header_link"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1510)] ?? null) : null), "link", [], "any", false, false, false, 1510);
                echo "\" id=\"header_advantages_row-href-";
                echo ($context["header_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1510);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1513
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#header_advantage-row";
            // line 1516
            echo ($context["header_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1519
            $context["header_advantages_row"] = (($context["header_advantages_row"] ?? null) + 1);
            // line 1520
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1521
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addHeaderAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1525
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1536
        echo ($context["tab_footer"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label mb-3\" for=\"input-footer_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1537
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"footer_advantages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1543
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1544
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1548
        $context["footer_advantages_row"] = 0;
        // line 1549
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_links", [], "any", false, false, false, 1549));
        foreach ($context['_seq'] as $context["_key"] => $context["footer_link"]) {
            // line 1550
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"footer_advantage-row";
            echo ($context["footer_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"footer_advantage_link\" value=\"\" placeholder=\"";
            // line 1553
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"footer_advantage-";
            echo ($context["footer_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1556
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1557
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 1559
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1559);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1559);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1559);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[footer_links][";
                // line 1561
                echo ($context["footer_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1561);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["footer_link"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1561)] ?? null) : null), "title", [], "any", false, false, false, 1561);
                echo "\" id=\"footer_advantages_row-title-";
                echo ($context["footer_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1561);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1564
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1566
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1567
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 1569
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1569);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1569);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1569);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[footer_links][";
                // line 1571
                echo ($context["footer_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1571);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["footer_link"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1571)] ?? null) : null), "link", [], "any", false, false, false, 1571);
                echo "\" id=\"footer_advantages_row-href-";
                echo ($context["footer_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1571);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1574
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#footer_advantage-row";
            // line 1577
            echo ($context["footer_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1580
            $context["footer_advantages_row"] = (($context["footer_advantages_row"] ?? null) + 1);
            // line 1581
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1582
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addFooterAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1586
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_contact\">";
        // line 1593
        echo ($context["entry_footer_link_contact"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_contact]\" ";
        // line 1596
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_contact", [], "any", false, false, false, 1596)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_contact\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_contact\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_return\">";
        // line 1608
        echo ($context["entry_footer_link_return"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_return]\" ";
        // line 1611
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_return", [], "any", false, false, false, 1611)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_return\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_return\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_sitemap\">";
        // line 1623
        echo ($context["entry_footer_link_sitemap"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_sitemap]\" ";
        // line 1626
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_sitemap", [], "any", false, false, false, 1626)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_sitemap\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_sitemap\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_man\">";
        // line 1638
        echo ($context["entry_footer_link_man"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_man]\" ";
        // line 1641
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_man", [], "any", false, false, false, 1641)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_man\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_man\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_cert\">";
        // line 1653
        echo ($context["entry_footer_link_cert"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_cert]\" ";
        // line 1656
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_cert", [], "any", false, false, false, 1656)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_cert\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_cert\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_specials\">";
        // line 1668
        echo ($context["entry_footer_link_specials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_specials]\" ";
        // line 1671
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_specials", [], "any", false, false, false, 1671)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_specials\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_specials\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 1683
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_category_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 1685
        echo ($context["entry_footer_category_links"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1687
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1688
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1688);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1688);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[footer_category_links][]\" value=\"";
            // line 1689
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1689);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1692
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-category\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1701
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_subcategory_photo\">";
        // line 1703
        echo ($context["entry_category_subcategory_photo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_subcategory_photo]\" ";
        // line 1706
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_subcategory_photo", [], "any", false, false, false, 1706)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_subcategory_photo\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_subcategory_photo\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-no_quantity_last\">";
        // line 1718
        echo ($context["entry_no_quantity_last"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_no_quantity_last\" ";
        // line 1721
        if (($context["theme_oct_deals_no_quantity_last"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-no_quantity_last\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-no_quantity_last\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_model\">";
        // line 1733
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_model\" ";
        // line 1736
        if (($context["theme_oct_deals_data_model"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-atributes_category\">";
        // line 1748
        echo ($context["text_atributes"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_atributes\" ";
        // line 1751
        if (($context["theme_oct_deals_data_atributes"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-atributes_category\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-atributes_category\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-atributes_category_limit\">";
        // line 1763
        echo ($context["text_atributes_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-atributes_category_limit\" name=\"theme_oct_deals_data_cat_atr_limit\" value=\"";
        // line 1765
        echo ($context["theme_oct_deals_data_cat_atr_limit"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_atributes_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_view_sort_oder\">";
        // line 1769
        echo ($context["entry_category_view_sort_oder"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_view_sort_oder]\" ";
        // line 1772
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 1772)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_sort_oder\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_sort_oder\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_view_quantity\">";
        // line 1784
        echo ($context["entry_category_view_quantity"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_view_quantity]\" ";
        // line 1787
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 1787)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_quantity\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_quantity\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_show_more\">";
        // line 1799
        echo ($context["entry_category_show_more"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_show_more]\" ";
        // line 1802
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_show_more", [], "any", false, false, false, 1802)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_show_more\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_show_more\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_infinite_scroll\">";
        // line 1814
        echo ($context["entry_category_infinite_scroll"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_infinite_scroll]\" ";
        // line 1817
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_infinite_scroll", [], "any", false, false, false, 1817)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_infinite_scroll\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_infinite_scroll\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"select-category_show_type\">";
        // line 1829
        echo ($context["entry_category_show_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-category_show_type\" name=\"theme_oct_deals_data[category_show_type]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
        // line 1832
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 1832) == "")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_deff"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"width-100\" ";
        // line 1833
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 1833) == "width-100")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_100"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"width-50\" ";
        // line 1834
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 1834) == "width-50")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_50"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label mb-3\" for=\"input-category_view_sort_oder\">";
        // line 1839
        echo ($context["entry_category_sorts"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 1844
        echo ($context["col_status_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 1845
        echo ($context["col_status_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 1846
        echo ($context["col_status_deff"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.sort_order-ASC\" ";
        // line 1852
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1852) && twig_in_filter("p.sort_order-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1852)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_sort_order-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1855
        echo ($context["text_p_sort_order_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.sort_order-ASC\" ";
        // line 1858
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1858) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1858) == "p.sort_order-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.sort_order-DESC\" ";
        // line 1863
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1863) && twig_in_filter("p.sort_order-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1863)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_sort_order-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1866
        echo ($context["text_p_sort_order_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.sort_order-DESC\" ";
        // line 1869
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1869) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1869) == "p.sort_order-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"pd.name-ASC\" ";
        // line 1874
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1874) && twig_in_filter("pd.name-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1874)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-pd_name-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1877
        echo ($context["text_pd_name_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"pd.name-ASC\" ";
        // line 1880
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1880) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1880) == "pd.name-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"pd.name-DESC\" ";
        // line 1885
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1885) && twig_in_filter("pd.name-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1885)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-pd_name-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1888
        echo ($context["text_pd_name_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"pd.name-DESC\" ";
        // line 1891
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1891) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1891) == "pd.name-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.price-ASC\" ";
        // line 1896
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1896) && twig_in_filter("p.price-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1896)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_price-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1899
        echo ($context["text_p_price_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.price-ASC\" ";
        // line 1902
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1902) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1902) == "p.price-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.price-DESC\" ";
        // line 1907
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1907) && twig_in_filter("p.price-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1907)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_price-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1910
        echo ($context["text_p_price_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.price-DESC\" ";
        // line 1913
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1913) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1913) == "p.price-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.model-ASC\" ";
        // line 1918
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1918) && twig_in_filter("p.model-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1918)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_model-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1921
        echo ($context["text_p_model_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.model-ASC\" ";
        // line 1924
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1924) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1924) == "p.model-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.model-DESC\" ";
        // line 1929
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1929) && twig_in_filter("p.model-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1929)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_model-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1932
        echo ($context["text_p_model_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.model-DESC\" ";
        // line 1935
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1935) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1935) == "p.model-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.quantity-ASC\" ";
        // line 1940
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1940) && twig_in_filter("p.quantity-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1940)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_quantity-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1943
        echo ($context["text_p_quantity_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.quantity-ASC\" ";
        // line 1946
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1946) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1946) == "p.quantity-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.quantity-DESC\" ";
        // line 1951
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1951) && twig_in_filter("p.quantity-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1951)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_quantity-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1954
        echo ($context["text_p_quantity_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.quantity-DESC\" ";
        // line 1957
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1957) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1957) == "p.quantity-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.viewed-ASC\" ";
        // line 1962
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1962) && twig_in_filter("p.viewed-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1962)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_viewed-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1965
        echo ($context["text_p_viewed_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.viewed-ASC\" ";
        // line 1968
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1968) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1968) == "p.viewed-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.viewed-DESC\" ";
        // line 1973
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1973) && twig_in_filter("p.viewed-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1973)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_viewed-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1976
        echo ($context["text_p_viewed_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.viewed-DESC\" ";
        // line 1979
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1979) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1979) == "p.viewed-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.date_added-ASC\" ";
        // line 1984
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1984) && twig_in_filter("p.date_added-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1984)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_date_added-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1987
        echo ($context["text_p_date_added_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.date_added-ASC\" ";
        // line 1990
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1990) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1990) == "p.date_added-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.date_added-DESC\" ";
        // line 1995
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1995) && twig_in_filter("p.date_added-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1995)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_date_added-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1998
        echo ($context["text_p_date_added_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.date_added-DESC\" ";
        // line 2001
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2001) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2001) == "p.date_added-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"rating-ASC\" ";
        // line 2006
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 2006) && twig_in_filter("rating-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 2006)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-rating-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2009
        echo ($context["text_rating_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"rating-ASC\" ";
        // line 2012
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2012) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2012) == "rating-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"rating-DESC\" ";
        // line 2017
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 2017) && twig_in_filter("rating-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 2017)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-rating-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2020
        echo ($context["text_rating_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"rating-DESC\" ";
        // line 2023
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2023) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2023) == "rating-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"\$(this).prev().find(':checkbox').attr('checked', true);\">";
        // line 2028
        echo ($context["text_all_select"] ?? null);
        echo "</a> / <a href=\"javascript:;\" onclick=\"\$(this).prev().prev().find(':checkbox').attr('checked', false);\">";
        echo ($context["text_remove_select"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t    <legend>";
        // line 2033
        echo ($context["text_product_limits"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0 required\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 2035
        echo ($context["help_product_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_product_limit\" value=\"";
        // line 2037
        echo ($context["theme_oct_deals_product_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_limit"] ?? null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2038
        if (($context["error_product_limit"] ?? null)) {
            // line 2039
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2041
            echo ($context["error_product_limit"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2045
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0 required\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 2048
        echo ($context["help_product_description_length"] ?? null);
        echo "\">";
        echo ($context["entry_product_description_length"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_product_description_length\" value=\"";
        // line 2050
        echo ($context["theme_oct_deals_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2051
        if (($context["error_product_description_length"] ?? null)) {
            // line 2052
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2054
            echo ($context["error_product_description_length"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2058
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2062
        echo ($context["text_categoty_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_desc_in_page\">";
        // line 2064
        echo ($context["entry_category_desc_in_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_desc_in_page]\" ";
        // line 2067
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_desc_in_page", [], "any", false, false, false, 2067)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_desc_in_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_desc_in_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"select-category_desc_position\">";
        // line 2079
        echo ($context["entry_category_desc_position"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-category_desc_position\" name=\"theme_oct_deals_data[category_desc_position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"top\" ";
        // line 2082
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_desc_position", [], "any", false, false, false, 2082) == "top")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_desc_position_top"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bottom\" ";
        // line 2083
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_desc_position", [], "any", false, false, false, 2083) == "bottom")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_desc_position_bottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_desc_up\">";
        // line 2088
        echo ($context["entry_category_desc_up"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_desc_up]\" ";
        // line 2091
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_desc_up", [], "any", false, false, false, 2091)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_desc_up\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_desc_up\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_page_number\">";
        // line 2103
        echo ($context["entry_category_page_number"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_page_number]\" ";
        // line 2106
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_page_number", [], "any", false, false, false, 2106)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_page_number\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_page_number\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_view_subcats\">";
        // line 2118
        echo ($context["entry_category_view_subcats"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_view_subcats]\" ";
        // line 2121
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_view_subcats", [], "any", false, false, false, 2121)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_subcats\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_subcats\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_subcat_products\">";
        // line 2133
        echo ($context["entry_category_subcat_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_subcat_products]\" ";
        // line 2136
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_subcat_products", [], "any", false, false, false, 2136)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_subcat_products\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_subcat_products\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_cat_image\">";
        // line 2148
        echo ($context["entry_category_cat_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_cat_image]\" ";
        // line 2151
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_cat_image", [], "any", false, false, false, 2151)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_cat_image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_cat_image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_cat_image\">";
        // line 2163
        echo ($context["entry_category_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_page]\" ";
        // line 2166
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_page", [], "any", false, false, false, 2166)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2179
        echo ($context["text_manufacture_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-man_logo\">";
        // line 2181
        echo ($context["entry_man_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[man_logo]\" ";
        // line 2184
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "man_logo", [], "any", false, false, false, 2184)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-man_logo\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-man_logo\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2199
        echo ($context["tab_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_model\">";
        // line 2201
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_model]\" ";
        // line 2204
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_model", [], "any", false, false, false, 2204)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 2215
        if (($context["hasblog"] ?? null)) {
            // line 2216
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_blog_related\">";
            // line 2217
            echo ($context["entry_product_blog_related"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_blog_related]\" ";
            // line 2220
            if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_blog_related", [], "any", false, false, false, 2220)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-product_blog_related\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_blog_related\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2232
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_atributes\">";
        // line 2233
        echo ($context["entry_product_atributes"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_atributes]\" ";
        // line 2236
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_atributes", [], "any", false, false, false, 2236)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_atributes\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_atributes\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-atributes_product_limit\">";
        // line 2248
        echo ($context["text_atributes_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-atributes_product_limit\" name=\"theme_oct_deals_data_pr_atr_limit\" value=\"";
        // line 2250
        echo ($context["theme_oct_deals_data_pr_atr_limit"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_atributes_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme_oct_deals_data_pr_reviews_limit\">";
        // line 2254
        echo ($context["text_reviews_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-theme_oct_deals_data_pr_reviews_limit\" name=\"theme_oct_deals_data_pr_reviews_limit\" value=\"";
        // line 2256
        echo (((array_key_exists("theme_oct_deals_data_pr_reviews_limit", $context) && ($context["theme_oct_deals_data_pr_reviews_limit"] ?? null))) ? (($context["theme_oct_deals_data_pr_reviews_limit"] ?? null)) : (20));
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_reviews_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_zoom\">";
        // line 2260
        echo ($context["entry_product_zoom"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_zoom]\" ";
        // line 2263
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_zoom", [], "any", false, false, false, 2263)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_zoom\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_zoom\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_faq\">";
        // line 2275
        echo ($context["entry_product_faq"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_faq]\" ";
        // line 2278
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_faq", [], "any", false, false, false, 2278)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_faq\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_faq\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_timer\">";
        // line 2290
        echo ($context["entry_product_timer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_timer]\" ";
        // line 2293
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_timer", [], "any", false, false, false, 2293)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_timer\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_timer\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme_oct_deals_data_timer_enddate\">";
        // line 2305
        echo ($context["text_timer_enddate"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-theme_oct_deals_data_timer_enddate\" name=\"theme_oct_deals_data_timer_enddate\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   value=\"";
        // line 2308
        echo (((array_key_exists("theme_oct_deals_data_timer_enddate", $context) && ($context["theme_oct_deals_data_timer_enddate"] ?? null))) ? (($context["theme_oct_deals_data_timer_enddate"] ?? null)) : (""));
        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   placeholder=\"";
        // line 2310
        echo ($context["text_timer_enddate"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   title=\"yyyy-mm-dd\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
        // line 2312
        echo ($context["text_timer_enddate_help"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sets\">";
        // line 2316
        echo ($context["entry_product_sets"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_sets]\" ";
        // line 2319
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_sets", [], "any", false, false, false, 2319)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product-sets\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product-sets\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_quantity_show\">";
        // line 2331
        echo ($context["entry_product_quantity_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_quantity_show]\" ";
        // line 2334
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_quantity_show", [], "any", false, false, false, 2334)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_quantity_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_quantity_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_sku_show\">";
        // line 2346
        echo ($context["entry_product_sku_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_sku_show]\" ";
        // line 2349
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_sku_show", [], "any", false, false, false, 2349)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_sku_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_sku_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_upc_show\">";
        // line 2361
        echo ($context["entry_product_upc_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_upc_show]\" ";
        // line 2364
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_upc_show", [], "any", false, false, false, 2364)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_upc_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_upc_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_ean_show\">";
        // line 2376
        echo ($context["entry_product_ean_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_ean_show]\" ";
        // line 2379
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_ean_show", [], "any", false, false, false, 2379)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_ean_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_ean_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_jan_show\">";
        // line 2391
        echo ($context["entry_product_jan_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_jan_show]\" ";
        // line 2394
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_jan_show", [], "any", false, false, false, 2394)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_jan_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_jan_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_isbn_show\">";
        // line 2406
        echo ($context["entry_product_isbn_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_isbn_show]\" ";
        // line 2409
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_isbn_show", [], "any", false, false, false, 2409)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_isbn_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_isbn_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_mpn_show\">";
        // line 2421
        echo ($context["entry_product_mpn_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_mpn_show]\" ";
        // line 2424
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_mpn_show", [], "any", false, false, false, 2424)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_mpn_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_mpn_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_dop_tab\">";
        // line 2436
        echo ($context["entry_product_dop_tab"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_dop_tab]\" ";
        // line 2439
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab", [], "any", false, false, false, 2439)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_dop_tab\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_dop_tab\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"product_dop_tabs_text\" class=\"form-group mx-0\"";
        // line 2450
        if (( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab", [], "any", true, true, false, 2450) || (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab", [], "any", true, true, false, 2450) &&  !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab", [], "any", false, false, false, 2450)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label mb-3\" for=\"input-product_dop_tab_ttt\">";
        // line 2451
        echo ($context["entry_product_dop_tab_ttt"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"product_dop_tab-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2454
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2455
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#product_dop_tab-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2455);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2455);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2455);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2455);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2455);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2457
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t                        \t";
        // line 2459
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2460
            echo "\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"product_dop_tab-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2460);
            echo "\">
\t\t\t\t\t\t\t                            \t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t                            \t\t<input type=\"text\" name=\"theme_oct_deals_data[product_dop_tab_title][";
            // line 2462
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2462);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab_title", [], "any", false, true, false, 2462), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2462), [], "array", true, true, false, 2462)) ? ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab_title", [], "any", false, false, false, 2462)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2462)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_product_dop_tab_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t                            \t</div>
\t\t\t\t\t\t\t                            \t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"product_dop_tab";
            // line 2465
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2465);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_deals_data[product_dop_tab_text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2465);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab_text", [], "any", false, true, false, 2465), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2465), [], "array", true, true, false, 2465)) ? ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab_text", [], "any", false, false, false, 2465)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2465)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t                            \t</div>
\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2469
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_js_button\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 2473
        echo ($context["help_product_js_button"] ?? null);
        echo "\">";
        echo ($context["entry_product_js_button"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" name=\"theme_oct_deals_data[product_js_button]\" placeholder=\"";
        // line 2475
        echo ($context["entry_product_js_button"] ?? null);
        echo "\" id=\"input-product_js_button\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_js_button", [], "any", false, false, false, 2475);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- official_rep -->
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2481
        echo ($context["tab_official_rep"] ?? null);
        echo "</legend>

\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"official-rep-table\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"table table-bordered table-striped\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:85%;\">";
        // line 2487
        echo ($context["entry_rep_title"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:15%;\" class=\"text-left\">";
        // line 2488
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2493
        $context["rep_row"] = 0;
        // line 2494
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["official_rep"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 2495
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"rep-head-";
            echo ($context["rep_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_data[official_rep][";
            // line 2498
            echo ($context["rep_row"] ?? null);
            echo "][title]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 2499
            echo twig_get_attribute($this->env, $this->source, $context["block"], "title", [], "any", false, false, false, 2499);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"white-space:nowrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#rep-body-";
            // line 2504
            echo ($context["rep_row"] ?? null);
            echo "').slideToggle();\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#rep-head-";
            // line 2508
            echo ($context["rep_row"] ?? null);
            echo ",#rep-body-";
            echo ($context["rep_row"] ?? null);
            echo "').remove();\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"rep-body-";
            // line 2514
            echo ($context["rep_row"] ?? null);
            echo "\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-horizontal pt-3\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label text-right\">";
            // line 2519
            echo ($context["entry_rep_all"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_data[official_rep][";
            // line 2522
            echo ($context["rep_row"] ?? null);
            echo "][all_manu]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"1\" ";
            // line 2523
            echo ((twig_get_attribute($this->env, $this->source, $context["block"], "all_manu", [], "any", false, false, false, 2523)) ? ("checked") : (""));
            echo "/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block style=\"margin-top: 5px;\"> ";
            // line 2527
            echo ($context["help_rep_all"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label text-right\">";
            // line 2532
            echo ($context["entry_rep_logo"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_data[official_rep][";
            // line 2535
            echo ($context["rep_row"] ?? null);
            echo "][logo]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"1\" ";
            // line 2536
            echo ((twig_get_attribute($this->env, $this->source, $context["block"], "logo", [], "any", false, false, false, 2536)) ? ("checked") : (""));
            echo "/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block style=\"margin-top: 5px;\"> ";
            // line 2540
            echo ($context["help_rep_logo"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label text-right\">";
            // line 2545
            echo ($context["entry_rep_manuf"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"rep-manu-ac-";
            // line 2548
            echo ($context["rep_row"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" autocomplete=\"off\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 2550
            echo ($context["entry_rep_manuf"] ?? null);
            echo "\"/>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"rep-manu-selected-";
            // line 2552
            echo ($context["rep_row"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"rep-manu-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2554
            if (twig_get_attribute($this->env, $this->source, $context["block"], "manufacturers", [], "any", false, false, false, 2554)) {
                // line 2555
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["block"], "manufacturers", [], "any", false, false, false, 2555));
                foreach ($context['_seq'] as $context["_key"] => $context["m_id"]) {
                    // line 2556
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rep-manu-badge\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 2557
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["official_rep_manuf"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[$context["m_id"]] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle text-danger\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$(this).parent().remove();\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_data[official_rep][";
                    // line 2561
                    echo ($context["rep_row"] ?? null);
                    echo "][manufacturers][]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 2562
                    echo $context["m_id"];
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m_id'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2565
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 2566
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block style=\"margin-top: 5px;\"> ";
            // line 2570
            echo ($context["help_rep_manuf"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label text-right\">";
            // line 2575
            echo ($context["entry_rep_descr"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2578
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2579
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2579)) ? ("active") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#rep-desc";
                // line 2580
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 2580);
                echo "-";
                echo ($context["rep_row"] ?? null);
                echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 2581
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 2581);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 2581);
                echo ".png\"/> ";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 2581);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2585
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2588
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2589
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"rep-desc";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 2589);
                echo "-";
                echo ($context["rep_row"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane ";
                // line 2590
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2590)) ? ("active") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_deals_data[official_rep][";
                // line 2591
                echo ($context["rep_row"] ?? null);
                echo "][description][";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 2591);
                echo "]\" class=\"form-control summernote\" rows=\"4\">";
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, $context["block"], "description", [], "any", false, false, false, 2591)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 2591)] ?? null) : null);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2594
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2602
            $context["rep_row"] = (($context["rep_row"] ?? null) + 1);
            // line 2603
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2604
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\" class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addOfficialRep();\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i> ";
        // line 2610
        echo ($context["button_add_rep"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\tlet official_rep_row = ";
        // line 2620
        echo ($context["rep_row"] ?? null);
        echo ";

\t\t\t\t\t\t\t\t\t\t\tconst repTpl = r => `
\t\t\t\t\t\t\t\t\t\t\t<tr id=\"rep-head-\${r}\">
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_data[official_rep][\${r}][title]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 2627
        echo ($context["entry_rep_title"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"white-space:nowrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#rep-body-\${r}').slideToggle();\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#rep-head-\${r},#rep-body-\${r}').remove();\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr id=\"rep-body-\${r}\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-horizontal pt-3\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label text-right\">";
        // line 2647
        echo ($context["entry_rep_all"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_data[official_rep][\${r}][all_manu]\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block style=\"margin-top: 5px;\"> ";
        // line 2654
        echo ($context["help_rep_all"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label text-right\">";
        // line 2659
        echo ($context["entry_rep_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_data[official_rep][\${r}][logo]\" value=\"1\" checked/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block style=\"margin-top: 5px;\"> ";
        // line 2666
        echo ($context["help_rep_logo"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label text-right\">";
        // line 2671
        echo ($context["entry_rep_manuf"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"rep-manu-ac-\${r}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" autocomplete=\"off\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 2675
        echo ($context["entry_rep_manuf"] ?? null);
        echo "\"/>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"rep-manu-selected-\${r}\" class=\"rep-manu-wrapper\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block style=\"margin-top: 5px;\"> ";
        // line 2681
        echo ($context["help_rep_manuf"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label text-right\">";
        // line 2686
        echo ($context["entry_rep_descr"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2689
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 2690
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2690)) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#rep-desc";
            // line 2691
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 2691);
            echo "-\${r}\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 2692
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 2692);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 2692);
            echo ".png\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 2692);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2696
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\" style=\"max-width: 100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2699
        $context["rep_desc"] = twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "official_rep", [], "any", false, false, false, 2699)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["r"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 2699);
        // line 2700
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !array_key_exists("rep_desc", $context)) {
            echo " ";
            $context["rep_desc"] = [];
            echo " ";
        }
        // line 2701
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 2702
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"rep-desc";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 2702);
            echo "-\${r}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane ";
            // line 2703
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2703)) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_deals_data[official_rep][\${r}][description][";
            // line 2704
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 2704);
            echo "]\" class=\"form-control summernote\" data-toggle=\"summernote\" rows=\"4\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2707
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>`;

\t\t\t\t\t\t\t\t\t\t\tfunction addOfficialRep(){
\t\t\t\t\t\t\t\t\t\t\t\t\$('#official-rep-table tbody').append(repTpl(official_rep_row));
\t\t\t\t\t\t\t\t\t\t\t\tbindManuAutocomplete(official_rep_row);
\t\t\t\t\t\t\t\t\t\t\t\tofficial_rep_row++;
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tfunction bindManuAutocomplete(row){
\t\t\t\t\t\t\t\t\t\t\t\$('#rep-manu-ac-'+row).autocomplete({
\t\t\t\t\t\t\t\t\t\t\t\tsource(request,response){
\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\turl:'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 2725
        echo ($context["user_token"] ?? null);
        echo "&filter_name='+encodeURIComponent(request),
\t\t\t\t\t\t\t\t\t\t\t\t\tdataType:'json',
\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess(json){
\t\t\t\t\t\t\t\t\t\t\t\t\tresponse(\$.map(json,item=>({label:item.name,value:item.manufacturer_id})));
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tselect(item){ 

\t\t\t\t\t\t\t\t\t\t\t\tif (\$('#rep-manu-selected-'+row+' input[value=\"'+item.value+'\"]').length){
\t\t\t\t\t\t\t\t\t\t\t\t\treturn false; 
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\$('#rep-manu-selected-'+row).append(
\t\t\t\t\t\t\t\t\t\t\t\t\t'<div class=\"rep-manu-badge\">'+item.label+
\t\t\t\t\t\t\t\t\t\t\t\t\t' <i class=\"fa fa-minus-circle text-danger\" onclick=\"\$(this).parent().remove();\"></i>'+
\t\t\t\t\t\t\t\t\t\t\t\t\t'<input type=\"hidden\" name=\"theme_oct_deals_data[official_rep]['+row+'][manufacturers][]\" value=\"'+item.value+'\"/>'+
\t\t\t\t\t\t\t\t\t\t\t\t\t'</div>'
\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t\tthis.value='';
\t\t\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tfor(let i=0;i<official_rep_row;i++){ bindManuAutocomplete(i); }

\t\t\t\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t\t.rep-manu-wrapper{padding:6px 0;}
\t\t\t\t\t\t\t\t\t\t\t.rep-manu-badge{
\t\t\t\t\t\t\t\t\t\t\tdisplay:inline-block;margin:2px 4px 2px 0;padding:4px 10px;
\t\t\t\t\t\t\t\t\t\t\tbackground:#eef9ff;border:1px solid #b6dfff;border-radius:16px;
\t\t\t\t\t\t\t\t\t\t\tfont-size:13px;line-height:20px;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t.rep-manu-badge i{margin-left:4px;cursor:pointer;}
\t\t\t\t\t\t\t\t\t\t\t</style>\t

\t\t\t\t\t\t\t\t\t\t\t<!-- delivery_section -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2767
        echo ($context["text_delivery_section"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"delivery-blocks\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2769
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_delivery", [], "any", false, false, false, 2769));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product_delivery"]) {
            // line 2770
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["delivery_row"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 2770);
            // line 2771
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"delivery-block\" style=\"background: #f9f9f9; border-radius: 10px;\" id=\"delivery-block-";
            echo ($context["delivery_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-delivery-image";
            // line 2774
            echo ($context["delivery_row"] ?? null);
            echo "\">";
            echo ($context["text_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"delivery-block-thumb-image";
            // line 2776
            echo ($context["delivery_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 2777
            echo twig_get_attribute($this->env, $this->source, $context["product_delivery"], "image_cached", [], "any", false, false, false, 2777);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" width=\"50\" height=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[product_delivery][";
            // line 2779
            echo ($context["delivery_row"] ?? null);
            echo "][image]\" id=\"input-product-delivery-image";
            echo ($context["delivery_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_delivery"], "image", [], "any", false, false, false, 2779);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"delivery-language-tabs-";
            // line 2782
            echo ($context["delivery_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2783
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2784
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2784)) {
                    echo " class=\"active\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#delivery-language-";
                // line 2785
                echo ($context["delivery_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2785);
                echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 2786
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2786);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2786);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2786);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 2787
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2787);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2791
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2793
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2794
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2794)) {
                    echo " active";
                }
                echo "\" id=\"delivery-language-";
                echo ($context["delivery_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2794);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                // line 2796
                echo ($context["delivery_row"] ?? null);
                echo "\">";
                echo ($context["text_title"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][";
                // line 2797
                echo ($context["delivery_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2797);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["product_delivery"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2797)] ?? null) : null), "title", [], "any", false, false, false, 2797);
                echo "\" placeholder=\"";
                echo ($context["text_title"] ?? null);
                echo "\" id=\"input-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2797);
                echo ($context["delivery_row"] ?? null);
                echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-price";
                // line 2800
                echo ($context["delivery_row"] ?? null);
                echo "\">";
                echo ($context["text_price"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][";
                // line 2801
                echo ($context["delivery_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2801);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["product_delivery"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2801)] ?? null) : null), "price", [], "any", false, false, false, 2801);
                echo "\" placeholder=\"";
                echo ($context["text_price"] ?? null);
                echo "\" id=\"input-price";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2801);
                echo ($context["delivery_row"] ?? null);
                echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-delivery-time";
                // line 2804
                echo ($context["delivery_row"] ?? null);
                echo "\">";
                echo ($context["text_delivery_time"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[product_delivery][";
                // line 2806
                echo ($context["delivery_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2806);
                echo "][delivery_time]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["product_delivery"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2806)] ?? null) : null), "delivery_time", [], "any", false, false, false, 2806);
                echo "\" placeholder=\"";
                echo ($context["text_delivery_time"] ?? null);
                echo "\" id=\"input-delivery-time";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2806);
                echo ($context["delivery_row"] ?? null);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
                // line 2810
                echo ($context["delivery_row"] ?? null);
                echo "\">";
                echo ($context["text_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][";
                // line 2811
                echo ($context["delivery_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2811);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["product_delivery"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2811)] ?? null) : null), "link", [], "any", false, false, false, 2811);
                echo "\" placeholder=\"";
                echo ($context["text_link"] ?? null);
                echo "\" id=\"input-link";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2811);
                echo ($context["delivery_row"] ?? null);
                echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2815
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order";
            // line 2817
            echo ($context["delivery_row"] ?? null);
            echo "\">";
            echo ($context["text_sort_order"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"number\" name=\"theme_oct_deals_data[product_delivery][";
            // line 2818
            echo ($context["delivery_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_delivery"], "sort_order", [], "any", false, false, false, 2818);
            echo "\" placeholder=\"";
            echo ($context["text_sort_order"] ?? null);
            echo "\" id=\"input-sort-order";
            echo ($context["delivery_row"] ?? null);
            echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#delivery-block-";
            // line 2823
            echo ($context["delivery_row"] ?? null);
            echo "').remove();\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"border: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_delivery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2832
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"add-delivery\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        // line 2834
        echo ($context["button_add_delivery"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- payment_section -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2839
        echo ($context["text_payment_section"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payment-blocks\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2841
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_payment", [], "any", false, false, false, 2841));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product_payment"]) {
            // line 2842
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["payment_row"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 2842);
            // line 2843
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-block\" style=\"background: #f9f9f9; border-radius: 10px;\" id=\"payment-block-";
            echo ($context["payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-payment-image";
            // line 2846
            echo ($context["payment_row"] ?? null);
            echo "\">";
            echo ($context["text_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"payment-block-thumb-image";
            // line 2848
            echo ($context["payment_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 2849
            echo twig_get_attribute($this->env, $this->source, $context["product_payment"], "image_cached", [], "any", false, false, false, 2849);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" width=\"50\" height=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[product_payment][";
            // line 2851
            echo ($context["payment_row"] ?? null);
            echo "][image]\" id=\"input-product-payment-image";
            echo ($context["payment_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_payment"], "image", [], "any", false, false, false, 2851);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"payment-language-tabs-";
            // line 2854
            echo ($context["payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2855
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2856
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2856)) {
                    echo " class=\"active\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#payment-language-";
                // line 2857
                echo ($context["payment_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2857);
                echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 2858
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2858);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2858);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2858);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 2859
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2859);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2863
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2865
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2866
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2866)) {
                    echo " active";
                }
                echo "\" id=\"payment-language-";
                echo ($context["payment_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2866);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                // line 2868
                echo ($context["payment_row"] ?? null);
                echo "\">";
                echo ($context["text_title"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_payment][";
                // line 2869
                echo ($context["payment_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2869);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["product_payment"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2869)] ?? null) : null), "title", [], "any", false, false, false, 2869);
                echo "\" placeholder=\"";
                echo ($context["text_title"] ?? null);
                echo "\" id=\"input-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2869);
                echo ($context["payment_row"] ?? null);
                echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2873
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order";
            // line 2875
            echo ($context["payment_row"] ?? null);
            echo "\">";
            echo ($context["text_sort_order"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"number\" name=\"theme_oct_deals_data[product_payment][";
            // line 2876
            echo ($context["payment_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_payment"], "sort_order", [], "any", false, false, false, 2876);
            echo "\" placeholder=\"";
            echo ($context["text_sort_order"] ?? null);
            echo "\" id=\"input-sort-order";
            echo ($context["payment_row"] ?? null);
            echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#payment-block-";
            // line 2881
            echo ($context["payment_row"] ?? null);
            echo "').remove();\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"border: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2890
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"add-payment\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2894
        echo ($context["button_add_payment"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2896
        echo ($context["entry_product_garantii"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_advantage\">";
        // line 2898
        echo ($context["entry_product_advantages"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_advantage]\" ";
        // line 2901
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantage", [], "any", false, false, false, 2901)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_advantage\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_advantage\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"product_advantages\" class=\"form-group mx-0\"";
        // line 2912
        if (( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantage", [], "any", true, true, false, 2912) || (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantage", [], "any", true, true, false, 2912) &&  !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantage", [], "any", false, false, false, 2912)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\" style=\"padding-bottom: 16px;\"><b>";
        // line 2913
        echo ($context["advantage_help_text"] ?? null);
        echo "</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2919
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2920
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2926
        $context["advantages_row"] = 0;
        // line 2927
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantages", [], "any", false, false, false, 2927));
        foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
            // line 2928
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"advantage-row";
            echo ($context["advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"advantages_icone-";
            // line 2932
            echo ($context["advantages_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"/image/";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 2932);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"Select Icon\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_deals_data[product_advantages][";
            // line 2933
            echo ($context["advantages_row"] ?? null);
            echo "][icone]\" id=\"advantages_input_icone-";
            echo ($context["advantages_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 2933);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_deals_data[product_advantages][";
            // line 2934
            echo ($context["advantages_row"] ?? null);
            echo "][information_id]\" id=\"advantages_id-";
            echo ($context["advantages_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 2934);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"advantage_link\" value=\"\" placeholder=\"";
            // line 2940
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"advantage_link-";
            echo ($context["advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2943
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2944
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2946
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2946);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2946);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2946);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[product_advantages][";
                // line 2948
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2948);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["advantage"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2948)] ?? null) : null), "title", [], "any", false, false, false, 2948);
                echo "\" id=\"advantage-title-";
                echo ($context["advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2948);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2951
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2953
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2954
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2956
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2956);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2956);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2956);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[product_advantages][";
                // line 2958
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2958);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["advantage"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2958)] ?? null) : null), "link", [], "any", false, false, false, 2958);
                echo "\" id=\"advantage-href-";
                echo ($context["advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2958);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2961
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2964
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2965
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2967
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2967);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2967);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2967);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_deals_data[product_advantages][";
                // line 2969
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2969);
                echo "][text]\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["advantage"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2969)] ?? null) : null), "text", [], "any", false, false, false, 2969);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2972
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\" for=\"input-product_advantage_popup-";
            // line 2974
            echo ($context["advantages_row"] ?? null);
            echo "\">";
            echo ($context["entry_product_advantage_popup"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_advantages][";
            // line 2977
            echo ($context["advantages_row"] ?? null);
            echo "][popup]\" ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantages", [], "any", false, false, false, 2977)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[($context["advantages_row"] ?? null)] ?? null) : null), "popup", [], "any", false, false, false, 2977)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-product_advantage_popup-";
            echo ($context["advantages_row"] ?? null);
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_advantage_popup-";
            // line 2978
            echo ($context["advantages_row"] ?? null);
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row";
            // line 2989
            echo ($context["advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2992
            $context["advantages_row"] = (($context["advantages_row"] ?? null) + 1);
            // line 2993
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2994
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 2998
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-orders\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3008
        echo ($context["tab_order"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"theme_oct_deals_data_osucsess_status\">";
        // line 3010
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_osucsess[status]\" ";
        // line 3013
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "status", [], "any", false, false, false, 3013)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"theme_oct_deals_data_osucsess_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"theme_oct_deals_data_osucsess_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3026
        echo ($context["text_order_register_account"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3028
        echo ($context["entry_order_register_dop"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"order_register_account-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3033
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3034
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#order_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3034);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3034);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3034);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3034);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3034);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3036
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3039
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3040
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"order_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3040);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 3043
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_osucsess[reg][title][";
            // line 3044
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3044);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "reg", [], "any", false, true, false, 3044), "title", [], "any", false, true, false, 3044), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3044), [], "array", true, true, false, 3044)) ? ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "reg", [], "any", false, false, false, 3044), "title", [], "any", false, false, false, 3044)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3044)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"order_register_account";
            // line 3048
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3048);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_deals_data_osucsess[reg][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3048);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "reg", [], "any", false, true, false, 3048), "text", [], "any", false, true, false, 3048), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3048), [], "array", true, true, false, 3048)) ? ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "reg", [], "any", false, false, false, 3048), "text", [], "any", false, false, false, 3048)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3048)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3052
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3056
        echo ($context["text_order_no_register_account"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3058
        echo ($context["entry_order_no_register_dop"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"order_no_register_account-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3063
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3064
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#order_no_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3064);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3064);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3064);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3064);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3064);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3066
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3069
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3070
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"order_no_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3070);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 3073
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_osucsess[noreg][title][";
            // line 3074
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3074);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "noreg", [], "any", false, true, false, 3074), "title", [], "any", false, true, false, 3074), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3074), [], "array", true, true, false, 3074)) ? ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "noreg", [], "any", false, false, false, 3074), "title", [], "any", false, false, false, 3074)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3074)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"order_no_register_account";
            // line 3078
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3078);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_deals_data_osucsess[noreg][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3078);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "noreg", [], "any", false, true, false, 3078), "text", [], "any", false, true, false, 3078), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3078), [], "array", true, true, false, 3078)) ? ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "noreg", [], "any", false, false, false, 3078), "text", [], "any", false, false, false, 3078)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3078)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3082
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-microdata\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-micro\">";
        // line 3088
        echo ($context["entry_micro"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[micro]\" ";
        // line 3091
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "micro", [], "any", false, false, false, 3091)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-micro\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-micro\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"org-fields\" class=\"org-wrapper\" style=\"";
        // line 3102
        echo ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "micro", [], "any", false, false, false, 3102)) ? ("") : ("display: none;"));
        echo "border: 2px dashed #a8d8ea; border-radius: 8px; padding: 20px; margin: 15px 0; background-color: #f7fcff;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-country\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"microdata-header col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-code\"></i> ";
        // line 3106
        echo ($context["text_microdata_settings"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">";
        // line 3107
        echo ($context["help_microdata"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 3110
        $context["o"] = ((array_key_exists("theme_oct_deals_org_data", $context)) ? (_twig_default_filter(($context["theme_oct_deals_org_data"] ?? null), [])) : ([]));
        // line 3111
        echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-type\">";
        // line 3113
        echo ($context["entry_org_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_org_data[type]\" id=\"input-type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["org_data_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 3117
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["type"], "value", [], "any", false, false, false, 3117);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "type", [], "any", false, false, false, 3117) == twig_get_attribute($this->env, $this->source, $context["type"], "value", [], "any", false, false, false, 3117))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["type"], "text", [], "any", false, false, false, 3117);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3119
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3120
        echo ($context["help_org_type"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-country\">";
        // line 3124
        echo ($context["entry_country"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[country]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-country\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3129
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "country", [], "any", true, true, false, 3129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "country", [], "any", false, false, false, 3129), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3131
        echo ($context["help_country"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-city\">";
        // line 3135
        echo ($context["entry_city"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[city]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-city\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3140
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "city", [], "any", true, true, false, 3140)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "city", [], "any", false, false, false, 3140), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3142
        echo ($context["help_city"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-address\">";
        // line 3146
        echo ($context["entry_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[address]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-address\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3151
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "address", [], "any", true, true, false, 3151)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "address", [], "any", false, false, false, 3151), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3153
        echo ($context["help_address"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-latitude\">";
        // line 3157
        echo ($context["entry_latitude"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[latitude]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-latitude\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3162
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "latitude", [], "any", true, true, false, 3162)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "latitude", [], "any", false, false, false, 3162), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3164
        echo ($context["help_latitude"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"input-longitude\">";
        // line 3166
        echo ($context["entry_longitude"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[longitude]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-longitude\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3171
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "longitude", [], "any", true, true, false, 3171)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "longitude", [], "any", false, false, false, 3171), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3173
        echo ($context["help_longitude"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-postal\">";
        // line 3177
        echo ($context["entry_postal_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[postal_code]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-postal\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3182
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "postal_code", [], "any", true, true, false, 3182)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "postal_code", [], "any", false, false, false, 3182), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3184
        echo ($context["help_postal_code"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-legal\">";
        // line 3188
        echo ($context["entry_legal_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[legal_name]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-legal\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3193
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "legal_name", [], "any", true, true, false, 3193)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "legal_name", [], "any", false, false, false, 3193), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3195
        echo ($context["help_legal_name"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-founded\">";
        // line 3199
        echo ($context["entry_founding_date"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[founding_date]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-founded\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3204
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "founding_date", [], "any", true, true, false, 3204)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "founding_date", [], "any", false, false, false, 3204), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3206
        echo ($context["help_founding_date"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-area\">";
        // line 3210
        echo ($context["entry_area_served"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[area_served]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-area\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3215
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "area_served", [], "any", true, true, false, 3215)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "area_served", [], "any", false, false, false, 3215), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3217
        echo ($context["help_service_area"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-shipping_cost\">";
        // line 3221
        echo ($context["entry_shipping_cost"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[shipping_cost]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-shipping_cost\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3226
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "shipping_cost", [], "any", true, true, false, 3226)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "shipping_cost", [], "any", false, false, false, 3226), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3228
        echo ($context["help_delivery_cost"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-price_range\">";
        // line 3232
        echo ($context["entry_price_range"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[price_range]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-price_range\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3237
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "price_range", [], "any", true, true, false, 3237)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "price_range", [], "any", false, false, false, 3237), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3239
        echo ($context["help_price_range"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-currenciesAccepted\">";
        // line 3243
        echo ($context["entry_currencies_accepted"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[currencies_accepted]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-currenciesAccepted\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3248
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "currencies_accepted", [], "any", true, true, false, 3248)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "currencies_accepted", [], "any", false, false, false, 3248), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3250
        echo ($context["help_currencies_accepted"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-paymentAccepted\">";
        // line 3254
        echo ($context["entry_payment_accepted"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[payment_accepted]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-paymentAccepted\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3259
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "payment_accepted", [], "any", true, true, false, 3259)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "payment_accepted", [], "any", false, false, false, 3259), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3261
        echo ($context["help_payment_accepted"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-processing_time\">";
        // line 3265
        echo ($context["entry_processing_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[processing_time]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-processing_time\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3270
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "processing_time", [], "any", true, true, false, 3270)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "processing_time", [], "any", false, false, false, 3270), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3272
        echo ($context["help_processing_time"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-delivery_time\">";
        // line 3276
        echo ($context["entry_delivery_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[delivery_time]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-delivery_time\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3281
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "delivery_time", [], "any", true, true, false, 3281)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "delivery_time", [], "any", false, false, false, 3281), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3283
        echo ($context["help_delivery_time"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-return_time\">";
        // line 3287
        echo ($context["entry_return_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"theme_oct_deals_org_data[return_time]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-return_time\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 3292
        echo ((twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "return_time", [], "any", true, true, false, 3292)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "return_time", [], "any", false, false, false, 3292), "")) : (""));
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3294
        echo ($context["help_return_period"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-css_js\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3301
        echo ($context["tab_css_js"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-css_code\">";
        // line 3303
        echo ($context["entry_css_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"css_code\" name=\"theme_oct_deals_css_code\" rows=\"15\" class=\"form-control\">";
        // line 3305
        echo ($context["theme_oct_deals_css_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-js_code\">";
        // line 3309
        echo ($context["entry_js_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"js_code\" name=\"theme_oct_deals_js_code\" rows=\"15\" class=\"form-control\">";
        // line 3311
        echo ($context["theme_oct_deals_js_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-image\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 3321
        echo ($context["text_image"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-logo-width\">";
        // line 3323
        echo ($context["entry_image_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_logo_width\" value=\"";
        // line 3328
        echo ($context["theme_oct_deals_image_logo_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-logo-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_logo_height\" value=\"";
        // line 3334
        echo ($context["theme_oct_deals_image_logo_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3339
        if (($context["error_image_category"] ?? null)) {
            // line 3340
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3342
            echo ($context["error_image_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3346
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 3349
        echo ($context["entry_image_sub_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_sub_category_width\" value=\"";
        // line 3354
        echo ($context["theme_oct_deals_image_sub_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_sub_category_height\" value=\"";
        // line 3360
        echo ($context["theme_oct_deals_image_sub_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3365
        if (($context["error_image_category"] ?? null)) {
            // line 3366
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3368
            echo ($context["error_image_sub_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3372
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 3375
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_category_width\" value=\"";
        // line 3380
        echo ($context["theme_oct_deals_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_category_height\" value=\"";
        // line 3386
        echo ($context["theme_oct_deals_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3391
        if (($context["error_image_category"] ?? null)) {
            // line 3392
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3394
            echo ($context["error_image_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3398
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 3401
        echo ($context["entry_image_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_manufacturer_width\" value=\"";
        // line 3406
        echo ($context["theme_oct_deals_image_manufacturer_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_manufacturer_height\" value=\"";
        // line 3412
        echo ($context["theme_oct_deals_image_manufacturer_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3417
        if (($context["error_image_category"] ?? null)) {
            // line 3418
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3420
            echo ($context["error_image_manufacturer"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3424
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 3427
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_thumb_width\" value=\"";
        // line 3432
        echo ($context["theme_oct_deals_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_image_popup_width\" value=\"";
        // line 3433
        echo ($context["theme_oct_deals_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_thumb_height\" value=\"";
        // line 3439
        echo ($context["theme_oct_deals_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_image_popup_height\" value=\"";
        // line 3440
        echo ($context["theme_oct_deals_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3445
        if (($context["error_image_thumb"] ?? null)) {
            // line 3446
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3448
            echo ($context["error_image_thumb"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3452
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 3455
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_popup_width\" value=\"";
        // line 3460
        echo ($context["theme_oct_deals_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_popup_height\" value=\"";
        // line 3466
        echo ($context["theme_oct_deals_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3471
        if (($context["error_image_popup"] ?? null)) {
            // line 3472
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3474
            echo ($context["error_image_thumb"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3478
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 3481
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_product_width\" value=\"";
        // line 3486
        echo ($context["theme_oct_deals_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_product_height\" value=\"";
        // line 3492
        echo ($context["theme_oct_deals_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3497
        if (($context["error_image_product"] ?? null)) {
            // line 3498
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3500
            echo ($context["error_image_product"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3504
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 3507
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_additional_width\" value=\"";
        // line 3512
        echo ($context["theme_oct_deals_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_additional_height\" value=\"";
        // line 3518
        echo ($context["theme_oct_deals_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3523
        if (($context["error_image_additional"] ?? null)) {
            // line 3524
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3526
            echo ($context["error_image_additional"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3530
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 3533
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_related_width\" value=\"";
        // line 3538
        echo ($context["theme_oct_deals_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_related_height\" value=\"";
        // line 3544
        echo ($context["theme_oct_deals_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3549
        if (($context["error_image_related"] ?? null)) {
            // line 3550
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3552
            echo ($context["error_image_related"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3556
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 3559
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_compare_width\" value=\"";
        // line 3564
        echo ($context["theme_oct_deals_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_compare_height\" value=\"";
        // line 3570
        echo ($context["theme_oct_deals_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3575
        if (($context["error_image_compare"] ?? null)) {
            // line 3576
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3578
            echo ($context["error_image_compare"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3582
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 3585
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_wishlist_width\" value=\"";
        // line 3590
        echo ($context["theme_oct_deals_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_wishlist_height\" value=\"";
        // line 3596
        echo ($context["theme_oct_deals_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3601
        if (($context["error_image_wishlist"] ?? null)) {
            // line 3602
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3604
            echo ($context["error_image_wishlist"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3608
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 3611
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_cart_width\" value=\"";
        // line 3616
        echo ($context["theme_oct_deals_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_cart_height\" value=\"";
        // line 3622
        echo ($context["theme_oct_deals_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3627
        if (($context["error_image_cart"] ?? null)) {
            // line 3628
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3630
            echo ($context["error_image_cart"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3634
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 3637
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_location_width\" value=\"";
        // line 3642
        echo ($context["theme_oct_deals_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_location_height\" value=\"";
        // line 3648
        echo ($context["theme_oct_deals_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3653
        if (($context["error_image_location"] ?? null)) {
            // line 3654
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3656
            echo ($context["error_image_location"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3660
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-widgets\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"widgets\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-popup_cart\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-up fw\"></i> ";
        // line 3667
        echo ($context["text_popup_cart"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-live_search\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-search fw\"></i> ";
        // line 3668
        echo ($context["text_live_search"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-feedback\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-phone-square fw\"></i> ";
        // line 3669
        echo ($context["text_feedback"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-alert\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-bell fw\"></i> ";
        // line 3670
        echo ($context["text_alert"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-popup_cart\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3677
        echo ($context["text_popup_cart"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-status\">";
        // line 3679
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_popup_cart_status\" ";
        // line 3682
        if (($context["theme_oct_deals_popup_cart_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-is\">";
        // line 3694
        echo ($context["entry_popup_is"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_isPopup\" ";
        // line 3697
        if (($context["theme_oct_deals_isPopup"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-is\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-is\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_status\">";
        // line 3709
        echo ($context["entry_free_shipping_from"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_free_shipping_from\" value=\"";
        // line 3711
        echo ($context["theme_oct_deals_popup_free_shipping_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_free_shipping_from"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_status\">";
        // line 3715
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_minimum_order_amount\" value=\"";
        // line 3717
        echo ($context["theme_oct_deals_popup_minimum_order_amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3720
        echo ($context["entry_recommend_cart"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-recommend\">";
        // line 3722
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_popup_cart_recommend_status\" ";
        // line 3725
        if (($context["theme_oct_deals_popup_cart_recommend_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-recommend\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-recommend\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"recomended_hidden\" ";
        // line 3736
        if ( !($context["theme_oct_deals_popup_cart_recommend_status"] ?? null)) {
            echo " style=\"display:none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-autorelated-status\">";
        // line 3738
        echo ($context["entry_autorelated_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_popup_cart_autorelated_status\" ";
        // line 3741
        if (($context["theme_oct_deals_popup_cart_autorelated_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-autorelated-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-autorelated-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-relatedbysales-status\">";
        // line 3753
        echo ($context["entry_relatedbysales_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_popup_cart_relatedbysales_status\" ";
        // line 3756
        if (($context["theme_oct_deals_popup_cart_relatedbysales_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-relatedbysales-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-relatedbysales-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-related\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 3769
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_recommended_products"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_cart_recommend_products\" value=\"\" placeholder=\"";
        // line 3772
        echo ($context["entry_recommended_products"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3774
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 3775
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 3775);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i onclick=\"deleteProduct(";
            // line 3776
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 3776);
            echo ");\" class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3777
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 3777);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_popup_cart_recommend_products[]\" value=\"";
            // line 3778
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 3778);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3781
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_image_size\">";
        // line 3785
        echo ($context["entry_recommended_image_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_cart_recommend_width\" value=\"";
        // line 3789
        echo ($context["theme_oct_deals_popup_cart_recommend_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"recommended_image_width\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_cart_recommend_height\" value=\"";
        // line 3792
        echo ($context["theme_oct_deals_popup_cart_recommend_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"recommended_image_height\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"recommended_poducts_texts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3799
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3800
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#recommended-block-tab-";
            // line 3801
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3801);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3801);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3801);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3801);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3802
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3802);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3805
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3807
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3808
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 3808)) {
                echo "active";
            }
            echo "\" id=\"recommended-block-tab-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3808);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_title";
            // line 3810
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3810);
            echo "\">";
            echo ($context["entry_recommended_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_cart_data[recommended_poducts][title][";
            // line 3812
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3812);
            echo "]\" value=\"";
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_popup_cart_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 3812), "title", [], "any", false, false, false, 3812)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3812)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_recommended_title"] ?? null);
            echo "\" id=\"recommended_title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3812);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3817
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-alert\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3823
        echo ($context["text_alert"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_status\">";
        // line 3825
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_alert_status\" ";
        // line 3828
        if (($context["theme_oct_deals_alert_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_products\">";
        // line 3840
        echo ($context["entry_show_alert_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_alert_data[products]\" ";
        // line 3843
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_alert_data"] ?? null), "products", [], "any", false, false, false, 3843)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_products\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_products\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_orders\">";
        // line 3855
        echo ($context["entry_show_alert_orders"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_alert_data[orders]\" ";
        // line 3858
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_alert_data"] ?? null), "orders", [], "any", false, false, false, 3858)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_orders\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_orders\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_oct_modules\">";
        // line 3870
        echo ($context["entry_show_alert_octemplates"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_alert_data[oct_modules]\" ";
        // line 3873
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_alert_data"] ?? null), "oct_modules", [], "any", false, false, false, 3873)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_oct_modules\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_oct_modules\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-feedback\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3888
        echo ($context["text_feedback"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback-status\">";
        // line 3890
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_status\" ";
        // line 3893
        if (($context["theme_oct_deals_feedback_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_messenger\">";
        // line 3905
        echo ($context["entry_show_feedback_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_messenger]\" ";
        // line 3908
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_messenger", [], "any", false, false, false, 3908)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_messenger\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_messenger\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_viber\">";
        // line 3920
        echo ($context["entry_show_feedback_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_viber]\" ";
        // line 3923
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_viber", [], "any", false, false, false, 3923)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_viber\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_viber\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_telegram\">";
        // line 3935
        echo ($context["entry_show_feedback_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_telegram]\" ";
        // line 3938
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_telegram", [], "any", false, false, false, 3938)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_telegram\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_telegram\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_teams\">";
        // line 3950
        echo ($context["entry_show_feedback_teams"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_teams]\" ";
        // line 3953
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_teams", [], "any", false, false, false, 3953)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_teams\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_teams\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_whatsapp\">";
        // line 3965
        echo ($context["entry_show_feedback_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_whatsapp]\" ";
        // line 3968
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_whatsapp", [], "any", false, false, false, 3968)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_whatsapp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_whatsapp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_email\">";
        // line 3980
        echo ($context["entry_show_feedback_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_email]\" ";
        // line 3983
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_email", [], "any", false, false, false, 3983)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_email\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_email\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_callback\">";
        // line 3995
        echo ($context["entry_show_feedback_callback"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_callback]\" ";
        // line 3998
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_callback", [], "any", false, false, false, 3998)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_callback\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_callback\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_contact_link\">";
        // line 4010
        echo ($context["entry_show_feedback_contact_link"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_contact_link]\" ";
        // line 4013
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_contact_link", [], "any", false, false, false, 4013)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_contact_link\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_contact_link\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-live_search\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 4028
        echo ($context["text_live_search"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_status\">";
        // line 4030
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_status\" ";
        // line 4033
        if (($context["theme_oct_deals_live_search_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4042
        echo ($context["entry_show_live_search_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_fallback\">";
        // line 4046
        echo ($context["entry_show_live_search_fallback"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[search_fallback]\" ";
        // line 4049
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "search_fallback", [], "any", false, false, false, 4049)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_fallback\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_fallback\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4058
        echo ($context["entry_show_live_search_fallback_help"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_category\">";
        // line 4062
        echo ($context["entry_live_search_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[category]\" ";
        // line 4065
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "category", [], "any", false, false, false, 4065)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_category\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_category\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4074
        echo ($context["entry_show_live_search_category"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_found_in_categories\">";
        // line 4078
        echo ($context["entry_live_search_found_in_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[found_in_categories]\" ";
        // line 4081
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "found_in_categories", [], "any", false, false, false, 4081)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_found_in_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_found_in_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4090
        echo ($context["entry_show_live_search_found_in_categories"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_category_image\">";
        // line 4094
        echo ($context["entry_live_search_category_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[category_images]\" ";
        // line 4097
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "category_images", [], "any", false, false, false, 4097)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_category_image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_category_image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4106
        echo ($context["entry_show_live_search_category_images"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_manufacturer\">";
        // line 4110
        echo ($context["entry_live_search_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[manufacturer]\" ";
        // line 4113
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "manufacturer", [], "any", false, false, false, 4113)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_manufacturer\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_manufacturer\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4122
        echo ($context["entry_show_live_search_manufacturer"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_manufacturer_image\">";
        // line 4126
        echo ($context["entry_live_search_manufacturer_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[manufacturer_images]\" ";
        // line 4129
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "manufacturer_images", [], "any", false, false, false, 4129)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_manufacturer_image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_manufacturer_image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4138
        echo ($context["entry_show_live_search_manufacturer_images"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_price\">";
        // line 4142
        echo ($context["entry_show_live_price"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[price]\" ";
        // line 4145
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "price", [], "any", false, false, false, 4145)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_price\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_price\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4154
        echo ($context["entry_show_live_search_price"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_model\">";
        // line 4158
        echo ($context["entry_show_live_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[model]\" ";
        // line 4161
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "model", [], "any", false, false, false, 4161)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4170
        echo ($context["entry_show_live_search_model"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_sku\">";
        // line 4174
        echo ($context["entry_show_live_sku"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[sku]\" ";
        // line 4177
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "sku", [], "any", false, false, false, 4177)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_sku\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_sku\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4186
        echo ($context["entry_show_live_search_sku"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-show_live_descr\">";
        // line 4190
        echo ($context["entry_show_live_descr"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[description]\" ";
        // line 4193
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "description", [], "any", false, false, false, 4193)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-show_live_descr\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-show_live_descr\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4202
        echo ($context["entry_show_live_search_description"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_tags\">";
        // line 4206
        echo ($context["entry_show_live_tags"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[tags]\" ";
        // line 4209
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "tags", [], "any", false, false, false, 4209)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_tags\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_tags\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4218
        echo ($context["entry_show_live_search_tags"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_delay\">";
        // line 4222
        echo ($context["entry_live_search_delay"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[delay]\" value=\"";
        // line 4224
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "delay", [], "any", false, false, false, 4224);
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_delay"] ?? null);
        echo "\" id=\"input-live_search_delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4225
        echo ($context["entry_show_live_search_delay"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_count_symbol\">";
        // line 4229
        echo ($context["entry_live_search_symbols"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[count_symbol]\" value=\"";
        // line 4231
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "count_symbol", [], "any", false, false, false, 4231);
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_symbols"] ?? null);
        echo "\" id=\"input-live_search_count_symbol\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4232
        echo ($context["entry_show_live_search_count_symbol"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_count_subresults\">";
        // line 4236
        echo ($context["entry_live_search_results"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[count_subresults]\" value=\"";
        // line 4238
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "count_subresults", [], "any", true, true, false, 4238) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "count_subresults", [], "any", false, false, false, 4238))) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "count_subresults", [], "any", false, false, false, 4238)) : (4));
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_results"] ?? null);
        echo "\" id=\"input-live_search_count_subresults\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4239
        echo ($context["entry_show_live_search_count_subresults"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_search_fallback_start\">";
        // line 4243
        echo ($context["entry_live_search_fallback_start"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[search_fallback_start]\" value=\"";
        // line 4245
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "search_fallback_start", [], "any", true, true, false, 4245) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "search_fallback_start", [], "any", false, false, false, 4245))) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "search_fallback_start", [], "any", false, false, false, 4245)) : (4));
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_fallback_start"] ?? null);
        echo "\" id=\"input-live_search_search_fallback_start\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4246
        echo ($context["entry_show_live_search_search_fallback_start"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_limit_products\">";
        // line 4250
        echo ($context["entry_live_search_limit_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[limit_products]\" value=\"";
        // line 4252
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_products", [], "any", true, true, false, 4252) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_products", [], "any", false, false, false, 4252))) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_products", [], "any", false, false, false, 4252)) : (8));
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_limit_products"] ?? null);
        echo "\" id=\"input-live_search_limit_products\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4253
        echo ($context["entry_show_live_search_limit_products"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_limit_entities\">";
        // line 4257
        echo ($context["entry_live_search_limit_entities"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[limit_entities]\" value=\"";
        // line 4259
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_entities", [], "any", true, true, false, 4259) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_entities", [], "any", false, false, false, 4259))) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_entities", [], "any", false, false, false, 4259)) : (12));
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_limit_entities"] ?? null);
        echo "\" id=\"input-live_search_limit_entities\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 4260
        echo ($context["entry_show_live_search_limit_entities"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-seo_titles\" data-toggle=\"tab\"  aria-expanded=\"true\">SEO Titles</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_urls\" data-toggle=\"tab\"  aria-expanded=\"true\">";
        // line 4272
        echo ($context["text_seo_url"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_home\" data-toggle=\"tab\"  aria-expanded=\"true\">Home page (title/description/OG-image)</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-seo_titles\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO Titles</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_title_status\">";
        // line 4282
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_status\" ";
        // line 4285
        if (($context["theme_oct_deals_seo_title_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin-left:0;margin-right:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"seo_title-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-seo_title-product\" data-toggle=\"tab\">";
        // line 4298
        echo ($context["text_seo_title_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_title-category\" data-toggle=\"tab\">";
        // line 4299
        echo ($context["text_seo_title_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_title-manufacturer\" data-toggle=\"tab\">";
        // line 4300
        echo ($context["text_seo_title_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-seo_title-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_title_status\">";
        // line 4307
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[product][title_status]\" ";
        // line 4310
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 4310), "title_status", [], "any", false, false, false, 4310)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_title_empty\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 4324
        echo ($context["help_seo_title_empty"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[product][title_empty]\" ";
        // line 4327
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 4327), "title_empty", [], "any", false, false, false, 4327)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_title_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_title_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4340
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4343
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4345
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4345);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4345);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4345);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[product][title][";
            // line 4347
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4347);
            echo "]\" value=\"";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 4347), "title", [], "any", false, false, false, 4347)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4347)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4350
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4351
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[price]<br />[model]<br />[sku]<br />[store]<br />[category]<br />[manufacturer]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_description_status\">";
        // line 4357
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[product][description_status]\" ";
        // line 4360
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 4360), "description_status", [], "any", false, false, false, 4360)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_description_empty\">";
        // line 4374
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[product][description_empty]\" ";
        // line 4377
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 4377), "description_empty", [], "any", false, false, false, 4377)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_description_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_description_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4390
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 4392
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4393
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4395
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4395);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4395);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4395);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[product][description][";
            // line 4397
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4397);
            echo "]\" value=\"";
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 4397), "description", [], "any", false, false, false, 4397)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4397)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4400
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4401
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[price]<br />[model]<br />[sku]<br />[store]<br />[category]<br />[manufacturer]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_title_status\">";
        // line 4409
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[category][title_status]\" ";
        // line 4412
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 4412), "title_status", [], "any", false, false, false, 4412)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_title_empty\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 4426
        echo ($context["help_seo_title_empty"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[category][title_empty]\" ";
        // line 4429
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 4429), "title_empty", [], "any", false, false, false, 4429)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_title_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_title_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4442
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4445
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4447
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4447);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4447);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4447);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[category][title][";
            // line 4449
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4449);
            echo "]\" value=\"";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 4449), "title", [], "any", false, false, false, 4449)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4449)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4452
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4453
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_description_status\">";
        // line 4459
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[category][description_status]\" ";
        // line 4462
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 4462), "description_status", [], "any", false, false, false, 4462)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_description_empty\">";
        // line 4476
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[category][description_empty]\" ";
        // line 4479
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 4479), "description_empty", [], "any", false, false, false, 4479)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_description_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_description_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4492
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 4494
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4495
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4497
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4497);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4497);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4497);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[category][description][";
            // line 4499
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4499);
            echo "]\" value=\"";
            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 4499), "description", [], "any", false, false, false, 4499)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4499)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4502
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4503
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title-manufacturer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_manufacturer_title_status\">";
        // line 4510
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[manufacturer][title_status]\" ";
        // line 4513
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 4513), "title_status", [], "any", false, false, false, 4513)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_manufacturer_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_manufacturer_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4525
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4527
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4528
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4530
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4530);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4530);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4530);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[manufacturer][title][";
            // line 4532
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4532);
            echo "]\" value=\"";
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 4532), "title", [], "any", false, false, false, 4532)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4532)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4535
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4536
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_manufacturer_description_status\">";
        // line 4541
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[manufacturer][description_status]\" ";
        // line 4544
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 4544), "description_status", [], "any", false, false, false, 4544)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_manufacturer_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_manufacturer_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4556
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 4558
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4559
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4561
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4561);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4561);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4561);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[manufacturer][description][";
            // line 4563
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4563);
            echo "]\" value=\"";
            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 4563), "description", [], "any", false, false, false, 4563)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4563)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4566
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4567
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_urls\">
\t\t\t\t\t\t\t\t\t\t<fildset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO URL</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group text_seo_url_danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4581
        echo ($context["text_seo_url_danger"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_status\">";
        // line 4586
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_url_status\" ";
        // line 4589
        if (($context["theme_oct_deals_seo_url_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_url_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_url_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_status\">";
        // line 4601
        echo ($context["entry_seo_url_lang_prefix"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4603
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4604
            echo "\t\t\t\t\t\t\t                    \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4606
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4606);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4606);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4606);
            echo "\" />
\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[lang_prefix][";
            // line 4608
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4608);
            echo "]\" value=\"";
            echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "lang_prefix", [], "any", false, false, false, 4608)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4608)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4611
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fildset>
\t\t\t\t\t\t\t\t\t\t<fildset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 4615
        echo ($context["entry_seo_url_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_product\">";
        // line 4617
        echo ($context["entry_seo_url_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[product]\" value=\"";
        // line 4619
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "product", [], "any", false, false, false, 4619);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4621
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[model]<br />[sku]<br />[brand]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_category\">";
        // line 4626
        echo ($context["entry_seo_url_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[category]\" value=\"";
        // line 4628
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "category", [], "any", false, false, false, 4628);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4630
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_manufacturer\">";
        // line 4635
        echo ($context["entry_seo_url_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[manufacturer]\" value=\"";
        // line 4637
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "manufacturer", [], "any", false, false, false, 4637);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4639
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_information\">";
        // line 4644
        echo ($context["entry_seo_url_information"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[information]\" value=\"";
        // line 4646
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "information", [], "any", false, false, false, 4646);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4648
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_blog_category\">";
        // line 4653
        echo ($context["entry_seo_url_blog_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[blog_category]\" value=\"";
        // line 4655
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "blog_category", [], "any", false, false, false, 4655);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4657
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_blog_article\">";
        // line 4662
        echo ($context["entry_seo_url_blog_article"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[blog_article]\" value=\"";
        // line 4664
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "blog_article", [], "any", false, false, false, 4664);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4666
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fildset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_home\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO Home page (title/description)</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_home_status\">";
        // line 4676
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_home_status\" ";
        // line 4679
        if (($context["theme_oct_deals_seo_home_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_home_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_home_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4693
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4695
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4696
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4698
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4698);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4698);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4698);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_home_data[title][";
            // line 4700
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4700);
            echo "]\" value=\"";
            echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_data"] ?? null), "title", [], "any", false, false, false, 4700)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4700)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4703
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4707
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 4709
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4710
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\" style=\"margin-bottom: 12px;\" >
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4712
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4712);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4712);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4712);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_deals_seo_home_data[description][";
            // line 4714
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4714);
            echo "]\" class=\"form-control\" />";
            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_data"] ?? null), "description", [], "any", false, false, false, 4714)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4714)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4717
        echo "\t\t\t\t\t\t\t\t                            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<legend>Home page Open Graph main image</legend>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"oct_abandoned_cart\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_home_image_status\">";
        // line 4726
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_home_image_status\" ";
        // line 4729
        if (($context["theme_oct_deals_seo_home_image_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_home_image_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_home_image_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4743
        echo ($context["entry_og_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4746
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4746);
            echo "
\t\t\t\t\t\t\t\t                            <div class=\"input-group\" style=\"margin-bottom: 12px;\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4749
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4749);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4749);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4749);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"home-images-data-";
            // line 4751
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4751);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-placeholder=\"";
            // line 4752
            echo ($context["thumb"] ?? null);
            echo "\" src=\"";
            if ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4752)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4752)] ?? null) : null)) {
                echo "/image/";
                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4752)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4752)] ?? null) : null);
            } else {
                echo ($context["thumb"] ?? null);
            }
            echo "\" alt=\"\" title=\"\" width=\"100\" height=\"100\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"home-image-data-";
            // line 4754
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4754);
            echo "\" type=\"hidden\" name=\"theme_oct_deals_seo_home_image_data[image][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4754);
            echo "]\" value=\"";
            if ((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4754)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4754)] ?? null) : null)) {
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4754)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4754)] ?? null) : null);
            }
            echo "\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4757
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-help\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 4769
        echo ($context["tab_help"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t";
        // line 4771
        echo ($context["entry_help_text"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_version\" value=\"";
        // line 4774
        echo ($context["theme_oct_deals_version"] ?? null);
        echo "\" />
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
(function(\$){
\t\$('body').on('change', '#input-micro', function() {
\t\t\$('#org-fields').css('display', this.checked ? 'block' : 'none');
\t});
})(jQuery);

\$('input[name=\\'advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4790
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'advantage_link\\']').val('');
\t\t\$('#advantages_id-' + in_id[1]).val(item.value);

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4815
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'header_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4824
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'header_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#header_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4846
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#header_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'footer_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4855
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'footer_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#footer_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4877
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#footer_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'mobile_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4886
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'mobile_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#mobile_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4908
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#mobile_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 4918
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append(`<div id=\"product-category\${ item['value'] }\"><i class=\"fa fa-minus-circle\"></i> \${ item['label'] }<input type=\"hidden\" name=\"theme_oct_deals_data[footer_category_links][]\" value=\"\${ item['value'] }\" /></div>`);
\t}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

\$(\".spectrum\").spectrum({
\tpreferredFormat: \"rgb\",
\tshowInitial: true,
\tshowInput: true,
\tshowAlpha: true,
\tshowPalette: true,
\tpalette: [[\"red\", \"rgba(0, 255, 0, .5)\", \"rgb(0, 0, 255)\"]]
});
</script>
<script>
const codemirror = CodeMirror.fromTextArea(document.getElementById('css_code'), {
\tmode : 'css',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true
});

const codemirror2 = CodeMirror.fromTextArea(document.getElementById('js_code'), {
\tmode : 'javascript',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true
});

\$('a#code_mir').on('shown.bs.tab', function () {
\t\$('.CodeMirror').each(function(i, el){
\t\tel.CodeMirror.refresh();
\t});
});

\$('#input-product_dop_tab').change(function() {
    let \$input = \$(this);

    if (\$input.is(\":checked\")) {
        \$(\"#product_dop_tabs_text\").slideDown('slow');
    } else {
        \$(\"#product_dop_tabs_text\").slideUp('slow');
    }
});

\$('#input-product_advantage').change(function() {
    let \$input = \$(this);

    if (\$input.is(\":checked\")) {
        \$(\"#product_advantages\").slideDown('slow');
    } else {
        \$(\"#product_advantages\").slideUp('slow');
    }
});

\$('#address-language a:first,#language-megamenu a:first,#language_mobile a:first,#open-language a:first,#contact_view_html-language a:first,#product_dop_tab-language a:first,#order_register_account-language a:first,#order_no_register_account-language a:first').tab('show');
</script>
<script>
let social_row = ";
        // line 4999
        echo ($context["social_row"] ?? null);
        echo ";

function addSocial() {
\tconst html = `
\t<tr id=\"social-row\${ social_row }\">
\t\t<td class=\"left\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button onClick=\"fontIcons('social_icone-\${ social_row }', 'social_input_icone-\${ social_row }');\" class=\"btn btn-default\" type=\"button\"><i id=\"social_icone-\${ social_row }\" class=\"fas fa-asterisk\"></i></button>
\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[socials][\${ social_row }][icone]\" id=\"social_input_icone-\${ social_row }\" value=\"\" />
\t\t\t\t</span>
\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[socials][\${ social_row }][title]\" value=\"\" placeholder=\"";
        // line 5010
        echo ($context["entry_social_title"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t</div>
\t\t</td>
\t\t<td class=\"left\">
\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[socials][\${ social_row }][link]\" value=\"\" placeholder=\"";
        // line 5014
        echo ($context["entry_social_link"] ?? null);
        echo "\" class=\"form-control\" />
\t\t</td>
\t\t<td class=\"left\">
\t\t\t<a onclick=\"\$('#social-row\${ social_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 5017
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t</td>
\t</tr>
\t`;

\t\$('#tab-socials-settings table tbody').append(html);

\tsocial_row++;
}
</script>
<script>
let header_advantages_row = ";
        // line 5028
        echo ($context["header_advantages_row"] ?? null);
        echo ";

function addHeaderAdvantage() {
\tconst html = `
\t<tr id=\"header_advantage-row\${ header_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"header_advantage_link\" value=\"\" placeholder=\"";
        // line 5035
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ header_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 5038
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5039
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 5041
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5041);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5041);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5041);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[header_links][\${ header_advantages_row }][";
            // line 5043
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5043);
            echo "][title]\" value=\"\" id=\"header_advantage-title-\${ header_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5043);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5046
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 5048
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5049
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 5051
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5051);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5051);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5051);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[header_links][\${ header_advantages_row }][";
            // line 5053
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5053);
            echo "][link]\" value=\"\" id=\"header_advantage-href-\${ header_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5053);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5056
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#header_advantage-row\${ header_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 5059
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#header_advantages table tbody').append(html);

\theader_advantages_row++;

\t\$('input[name=\\'header_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 5071
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'header_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#header_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 5095
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#header_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let footer_advantages_row = ";
        // line 5103
        echo ($context["footer_advantages_row"] ?? null);
        echo ";

function addFooterAdvantage() {
\tconst html = `
\t<tr id=\"footer_advantage-row\${ footer_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"footer_advantage_link\" value=\"\" placeholder=\"";
        // line 5110
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ footer_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 5113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5114
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 5116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5116);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5116);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5116);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[footer_links][\${ footer_advantages_row }][";
            // line 5118
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5118);
            echo "][title]\" value=\"\" id=\"footer_advantage-title-\${ footer_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5118);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5121
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 5123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5124
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 5126
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5126);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5126);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5126);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[footer_links][\${ footer_advantages_row }][";
            // line 5128
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5128);
            echo "][link]\" value=\"\" id=\"footer_advantage-href-\${ footer_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5128);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5131
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#footer_advantage-row\${ footer_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 5134
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#footer_advantages table tbody').append(html);

\tfooter_advantages_row++;

\t\$('input[name=\\'footer_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 5146
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'footer_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#footer_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 5170
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#footer_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let advantages_row = ";
        // line 5178
        echo ($context["advantages_row"] ?? null);
        echo ";

function addAdvantage() {
\tconst html = `
\t<tr id=\"advantage-row\${ advantages_row }\">
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<div class=\"input-group\">
\t            <span class=\"input-group-btn\">
\t\t\t\t\t<a href=\"\" id=\"advantages_icone-\${ advantages_row }\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 5186
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"Select Icon\" /></a>
\t            \t<input type=\"hidden\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][icone]\" id=\"advantages_input_icone-\${ advantages_row }\" value=\"\" />
\t            \t<input type=\"hidden\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][information_id]\" id=\"advantages_id-\${ advantages_row }\" value=\"\" />
\t            </span>
\t       </div>
\t\t</td>
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"advantage_link\" value=\"\" placeholder=\"";
        // line 5194
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 5197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5198
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 5200
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5200);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5200);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5200);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][";
            // line 5202
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5202);
            echo "][title]\" value=\"\" id=\"advantage-title-\${ advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5202);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5205
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 5207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5208
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 5210
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5210);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5210);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5210);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][";
            // line 5212
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5212);
            echo "][link]\" value=\"\" id=\"advantage-href-\${ advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5212);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5215
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\">
\t\t\t";
        // line 5218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5219
            echo "\t\t\t<div class=\"input-group\">
\t            <span class=\"input-group-addon\">
\t            \t<img src=\"language/";
            // line 5221
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5221);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5221);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5221);
            echo "\" />
\t            </span>
\t\t\t\t<textarea name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][";
            // line 5223
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5223);
            echo "][text]\" class=\"form-control\"></textarea>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5226
        echo "\t\t</td>
\t\t<td class=\"text-left\" style=\"width:10%;\">
\t\t\t<label class=\"col-sm-12\" for=\"input-product_advantage_popup-\${ advantages_row }\">";
        // line 5228
        echo ($context["entry_product_advantage_popup"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][popup]\" id=\"input-product_advantage_popup-\${ advantages_row }\" tabindex=\"1\">
\t\t\t\t\t<label for=\"input-product_advantage_popup-\${ advantages_row }\"></label>
\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row\${ advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 5243
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#product_advantages table tbody').append(html);

\tadvantages_row++;

\t\$('input[name=\\'advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 5255
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'advantage_link\\']').val('');

\t\t\t\$('#advantages_id-' + in_id[1]).val(item.value);

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 5281
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let payment_row = ";
        // line 5289
        echo ($context["payment_row"] ?? null);
        echo ";

function addPayment(){
\tconst html = `
\t<div id=\"payments-row-\${ payment_row }\" class=\"col-sm-2 payments\">
\t\t<a href=\"javascript:;\" onclick=\"\$('#payments-row-\${ payment_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 5294
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btnr\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_customers_\${ payment_row }\">
\t\t\t<a href=\"\" id=\"thumb-image\${ payment_row }\" data-toggle=\"image\">
\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 5297
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t</a>
\t\t\t<input type=\"hidden\" value=\"\" name=\"theme_oct_deals_data[payments][customers][\${ payment_row }][image]\" id=\"input-image\${ payment_row }\" />
\t\t</label>
\t\t<div class=\"col-sm-6\">
\t\t\t<div class=\"toggle-group\">
\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][customers][\${ payment_row }][status]\" id=\"input-payments_customers_\${ payment_row }\" tabindex=\"1\">
\t\t\t\t<label for=\"input-payments_customers_\${ payment_row }\"></label>
\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t`;

\t\$(\"#add_new_block\").before(html);

\tpayment_row++;
}
</script>

<script>
\$(document).delegate('[id^=megamenu-] .panel-heading', 'click', function() {
\tlet id_menu = \$(this).parent().attr('id');
\tlet m_id = id_menu.split('-');

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getMenu&user_token=";
        // line 5328
        echo ($context["user_token"] ?? null);
        echo "&menu_id=' + m_id[1],
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tif (data.length > 1) {
\t\t\t\t\$('#menu_settings-'+ m_id[1]).html(data);
\t\t\t}
\t\t}
\t});

\t\$(this).siblings('.panel-body').find('.main_menu_block a:first').tab('show');
\t\$(this).siblings('.panel-body').find('.menu_lang_block a:first').tab('show');
\t\$(this).siblings('.panel-body').toggle();
});

\$(document).delegate('.menu_type', 'change', function() {
\tlet m_id = \$(this).attr(\"id\").split('-');
\tlet val = \$(this).val();

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getMenu&user_token=";
        // line 5349
        echo ($context["user_token"] ?? null);
        echo "&type='+ val +'&menu_id=' + m_id[1],
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tif (data.length > 1) {
\t\t\t\t\$('#menu_settings-'+ m_id[1]).html(data);
\t\t\t}
\t\t}
\t});
});

let menu_id = ";
        // line 5361
        echo ($context["menu_id"] ?? null);
        echo ";

function updateSubLinkTitle(subLinkId, title) {
  var headerSpan = \$('#sub-link-' + subLinkId + ' .panel-heading span');
  if (title.trim()) {
    headerSpan.html('<i class=\"fa fa-link\" aria-hidden=\"true\"></i> ' + title);
  } else {
    headerSpan.html('<i class=\"fa fa-link\" aria-hidden=\"true\"></i> ";
        // line 5368
        echo ($context["text_sub_link"] ?? null);
        echo "');
  }
}

function addSubLink(menu_id) {
\tconst sub_link_id = Date.now();
\tconst config_language_id = '";
        // line 5374
        echo ($context["config_language_id"] ?? null);
        echo "';
\t
\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getSubLinks&user_token=' + getURLVar('user_token'),
\t\ttype: 'get',
\t\tdata: {
\t\t\tmenu_id: menu_id,
\t\t\tsub_link_id: sub_link_id,
\t\t\tconfig_language_id: config_language_id
\t\t},
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('#sub-links-container-' + menu_id).prepend(html);
\t\t\t\$('#sub-link-' + sub_link_id + ' .nav-tabs li:first-child a').tab('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function removeSubLink(sub_link_id) {
\tif (confirm('";
        // line 5396
        echo ($context["text_confirm_delete"] ?? null);
        echo "')) {
\t\t\$('#sub-link-' + sub_link_id).remove();
\t}
}

function addNewMenuItem() {
\tconst html = `
\t\t<div class=\"panel panel-default\" id=\"megamenu-\${ menu_id }\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<span><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> New Menu Item</span>
\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#megamenu-\${ menu_id }').remove();return false;\">
\t\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul class=\"nav nav-tabs main_menu_block\">
\t\t\t\t\t<li><a href=\"#tab-menu_general\${ menu_id }\" data-toggle=\"tab\">";
        // line 5412
        echo ($context["tab_menu_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-menu_language\${ menu_id }\" data-toggle=\"tab\">";
        // line 5413
        echo ($context["tab_menu_language"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-menu_links\${ menu_id }\" data-toggle=\"tab\">";
        // line 5414
        echo ($context["tab_menu_links"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_general\${ menu_id }\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 5419
        echo ($context["text_menu_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"oct_megamenu[\${ menu_id }][type]\" class=\"form-control menu_type\" id=\"menu_type-\${ menu_id }\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">";
        // line 5422
        echo ($context["text_menu_select"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"category\">";
        // line 5423
        echo ($context["text_menu_type_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"manufacturer\">";
        // line 5424
        echo ($context["text_menu_type_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"oct_blogcategory\">";
        // line 5425
        echo ($context["text_menu_type_3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"link\">";
        // line 5426
        echo ($context["text_menu_type_4"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 5431
        echo ($context["text_menu_display_option"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"oct_megamenu[\${ menu_id }][display_option]\" class=\"form-control menu_display_option\" id=\"menu_display_option-\${ menu_id }\">
\t\t\t\t\t\t\t\t\t<option value=\"\" ";
        // line 5434
        echo (((twig_get_attribute($this->env, $this->source, ($context["oct_menu"] ?? null), "display_option", [], "any", false, false, false, 5434) == "")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_menu_display_option_select"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"vertical\" ";
        // line 5435
        echo (((twig_get_attribute($this->env, $this->source, ($context["oct_menu"] ?? null), "display_option", [], "any", false, false, false, 5435) == "vertical")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_menu_display_option_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"horizontal\" ";
        // line 5436
        echo (((twig_get_attribute($this->env, $this->source, ($context["oct_menu"] ?? null), "display_option", [], "any", false, false, false, 5436) == "horizontal")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_menu_display_option_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"menu_settings-\${ menu_id }\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_language\${ menu_id }\">
\t\t\t\t\t\t<legend>";
        // line 5443
        echo ($context["tab_menu_language"] ?? null);
        echo "</legend>
\t\t\t\t\t\t<ul class=\"nav nav-tabs menu_lang_block\" id=\"menu_item_language\${ menu_id }\">
\t\t\t\t\t\t\t";
        // line 5445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5446
            echo "\t\t\t\t\t\t\t<li><a href=\"#menu_item_language\${ menu_id }_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5446);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5446);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5446);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5446);
            echo "\" />  ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5446);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5448
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t";
        // line 5450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5451
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"menu_item_language\${ menu_id }_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5451);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 5453
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5453);
            echo "\">";
            echo ($context["entry_menu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[\${ menu_id }][description][";
            // line 5455
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5455);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_menu_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5455);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
            // line 5459
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5459);
            echo "\">";
            echo ($context["entry_menu_link"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[\${ menu_id }][description][";
            // line 5461
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5461);
            echo "][link]\" value=\"\" placeholder=\"";
            echo ($context["entry_menu_link"] ?? null);
            echo "\" id=\"input-link";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5461);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5466
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_links\${ menu_id }\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 5470
        echo ($context["entry_menu_store"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t";
        // line 5473
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 5474
            echo "\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"oct_megamenu[\${ menu_id }][stories][]\" value=\"";
            // line 5476
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 5476);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 5477
            echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["store"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5481
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-priority\">";
        // line 5485
        echo ($context["entry_menu_customers"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t";
        // line 5488
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 5489
            echo "\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[\${ menu_id }][customers][]\" value=\"";
            // line 5491
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 5491);
            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 5492
            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["customer_group"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5496
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t`;

\t\$('#megamenu_block .empty_locations').hide();
\t\$(\"#megamenu_block\").append(html);

\tmenu_id++;
}\t

\t\$('#add-payment').on('click', function () {
\t\tlet paymentIndex = \$('#payment-blocks .payment-block').length;
\t\tlet html = '';

\t\tif (!paymentIndex) paymentIndex = 0;

\t\tlet paymentBlockHtml = `
\t\t<div class=\"payment-block\" style=\"background: #f9f9f9; border-radius: 10px;\" id=\"payment-block-\${paymentIndex}\">
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-payment-image\${paymentIndex}\">";
        // line 5521
        echo ($context["text_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<a href=\"\" id=\"payment-block-thumb-image\${ paymentIndex }\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 5524
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" width=\"50\"height=\"50\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[product_payment][\${paymentIndex}][image]\" id=\"input-product-payment-image\${paymentIndex}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"nav nav-tabs\" id=\"payment-language-tabs-\${paymentIndex}\">
\t\t\t\t";
        // line 5531
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5532
            echo "\t\t\t\t\t<li";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5532)) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t<a href=\"#payment-language-\${paymentIndex}-";
            // line 5533
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5533);
            echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t<img src=\"language/";
            // line 5534
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5534);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5534);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5534);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5534);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5538
        echo "\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 5541
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5542
            echo "\t\t\t\t\t<div class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5542)) {
                echo " active";
            }
            echo "\" id=\"payment-language-\${paymentIndex}-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5542);
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title\${paymentIndex}\">";
            // line 5544
            echo ($context["text_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_payment][\${paymentIndex}][";
            // line 5545
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5545);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["text_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5545);
            echo "\${paymentIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5549
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\${paymentIndex}\">";
        // line 5551
        echo ($context["text_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"number\" name=\"theme_oct_deals_data[product_payment][\${paymentIndex}][sort_order]\" value=\"0\" placeholder=\"";
        // line 5552
        echo ($context["text_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\${paymentIndex}\" class=\"form-control\" /></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"button\" onclick=\"\$('#payment-block-\${paymentIndex}').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<hr style=\"border: 0;\">
\t\t</div>
\t\t`;

\t\t\$('#payment-blocks').append(paymentBlockHtml);\t
\t});

\t\$('#add-delivery').on('click', function () {
\t\tlet deliveryIndex = \$('#delivery-blocks .delivery-block').length;
\t\tlet html = '';

\t\tif (!deliveryIndex) deliveryIndex = 0;

\t\tlet deliveryBlockHtml = `
\t\t<div class=\"delivery-block\" style=\"background: #f9f9f9; border-radius: 10px;\" id=\"delivery-block-\${deliveryIndex}\">
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-delivery-image\${deliveryIndex}\">";
        // line 5579
        echo ($context["text_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<a href=\"\" id=\"delivery-block-thumb-image\${ deliveryIndex }\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 5582
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" width=\"50\"height=\"50\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][image]\" id=\"input-product-delivery-image\${deliveryIndex}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"nav nav-tabs\" id=\"delivery-language-tabs-\${deliveryIndex}\">
\t\t\t\t";
        // line 5589
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5590
            echo "\t\t\t\t\t<li";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5590)) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t<a href=\"#delivery-language-\${deliveryIndex}-";
            // line 5591
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5591);
            echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t<img src=\"language/";
            // line 5592
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5592);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5592);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5592);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5592);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5596
        echo "\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 5599
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5600
            echo "\t\t\t\t\t<div class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5600)) {
                echo " active";
            }
            echo "\" id=\"delivery-language-\${deliveryIndex}-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5600);
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title\${deliveryIndex}\">";
            // line 5602
            echo ($context["text_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][";
            // line 5603
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5603);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["text_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5603);
            echo "\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-price\${deliveryIndex}\">";
            // line 5606
            echo ($context["text_price"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][";
            // line 5607
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5607);
            echo "][price]\" value=\"\" placeholder=\"";
            echo ($context["text_price"] ?? null);
            echo "\" id=\"input-price";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5607);
            echo "\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-delivery_time\${deliveryIndex}\">";
            // line 5610
            echo ($context["text_delivery_time"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][";
            // line 5611
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5611);
            echo "][delivery_time]\" value=\"\" placeholder=\"";
            echo ($context["text_delivery_time"] ?? null);
            echo "\" id=\"input-delivery_time";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5611);
            echo "\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link\${deliveryIndex}\">";
            // line 5614
            echo ($context["text_link"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][";
            // line 5615
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5615);
            echo "][link]\" value=\"\" placeholder=\"";
            echo ($context["text_link"] ?? null);
            echo "\" id=\"input-link";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5615);
            echo "\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5619
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\${deliveryIndex}\">";
        // line 5621
        echo ($context["text_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"number\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][sort_order]\" value=\"0\" placeholder=\"";
        // line 5622
        echo ($context["text_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"button\" onclick=\"\$('#delivery-block-\${deliveryIndex}').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<hr style=\"border: 0;\">
\t\t</div>
\t\t`;

\t\t\$('#delivery-blocks').append(deliveryBlockHtml);\t
\t});

\$(document).delegate('[id^=locations-] .panel-heading', 'click', function() {
\t\$(this).siblings('.panel-body').find('.location-block a:first').tab('show');
\t\$(this).siblings('.panel-body').toggle();
});

function deleteProduct(product_id) {
\t\$('#product-related' + product_id).remove();
}

let location_id = ";
        // line 5648
        echo ($context["location_id"] ?? null);
        echo ";

function addNewLocation() {
\tconst html = `
\t<div class=\"panel panel-default\" id=\"locations-\${ location_id }\">
\t\t<div class=\"panel-heading\">
\t\t\t<span><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> Title</span>
\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#locations-\${ location_id }').remove();return false;\">
\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<fieldset>
\t\t\t\t<legend>";
        // line 5661
        echo ($context["text_locations_descr"] ?? null);
        echo "</legend>
\t\t\t\t<ul class=\"nav nav-tabs location-block\" id=\"locations-language-\${ location_id }\">
\t\t\t\t\t";
        // line 5663
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5664
            echo "\t\t\t\t\t\t<li><a href=\"#locations-language\${ location_id }-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5664);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5664);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5664);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5664);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5664);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5666
        echo "\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 5668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5669
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"locations-language\${ location_id }-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5669);
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_title\${ location_id }-";
            // line 5671
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5671);
            echo "\">";
            echo ($context["entry_location_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"descr_title\${ location_id }-";
            // line 5673
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5673);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5673);
            echo "][title]\" value=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_address\${ location_id }-";
            // line 5677
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5677);
            echo "\">";
            echo ($context["entry_location_address"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea id=\"descr_address\${ location_id }-";
            // line 5679
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5679);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5679);
            echo "][address]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_open\${ location_id }-";
            // line 5683
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5683);
            echo "\">";
            echo ($context["entry_contact_open"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea id=\"descr_open\${ location_id }-";
            // line 5685
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5685);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 5685);
            echo "][open]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5690
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset>
\t\t\t\t<legend>";
        // line 5693
        echo ($context["text_locations_info"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_phone\">";
        // line 5695
        echo ($context["entry_contact_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea id=\"location_phone\" name=\"oct_locations[\${ location_id }][phone]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_map\${ location_id }\">";
        // line 5701
        echo ($context["entry_contact_map"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea id=\"location_map\${ location_id }\" name=\"oct_locations[\${ location_id }][map]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_link\${ location_id }\">";
        // line 5707
        echo ($context["entry_location_link"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" id=\"location_link\${ location_id }\" name=\"oct_locations[\${ location_id }][link]\" value=\"\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_image\${ location_id }\">";
        // line 5713
        echo ($context["entry_location_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_location_image\${ location_id }\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 5716
        echo ($context["contact_placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["contact_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_locations[\${ location_id }][image]\" value=\"\" id=\"input-contact_location_image\${ location_id }\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_sort\${ location_id }\">";
        // line 5722
        echo ($context["entry_location_sort"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"number\" id=\"location_sort\${ location_id }\" name=\"oct_locations[\${ location_id }][sort]\" value=\"0\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t`;

\t\$(\"#site_locations\").append(html);

\tlocation_id++;
}
</script>

<script>
\$(document).ready(function() {
    \$('#recommended_poducts_texts a:first').tab('show');

\t\$('#input-popupcart-recommend').on('change', function() {
\t\t\$('.recomended_hidden').toggle();
\t});

\t\$('input[name=\\'theme_oct_deals_popup_cart_recommend_products\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 5749
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\\'related\\']').val('');

\t\t\t\$('#product-related' + item['value']).remove();

\t\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i onclick=\"deleteProduct(' + item['value'] + ');\" class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"theme_oct_deals_popup_cart_recommend_products[]\" value=\"' + item['value'] + '\" /></div>');
\t\t}
\t});

\t\$('#input-bought_together').change(function() {
\t\tvar \$input = \$(this);

\t\tif (\$input.is(\":checked\")) {
\t\t\t\$(\"#all_bought_together_settings\").slideDown('slow');
\t\t} else {
\t\t\t\$(\"#all_bought_together_settings\").slideUp('slow');
\t\t}
\t});
});

document.addEventListener('DOMContentLoaded', function() {
    var dateInput = document.getElementById('input-theme_oct_deals_data_timer_enddate');
    if(dateInput) {
        dateInput.addEventListener('change', function() {
            validateDate(this);
        });
    }
});

function validateDate(input) {
\tvar pattern = /^\\d{4}\\-\\d{2}\\-\\d{2}\$/;
\tif (!pattern.test(input.value)) {
\t\tusNotify('warning', '";
        // line 5793
        echo ($context["error_date_format"] ?? null);
        echo "');
\t\tinput.focus();
\t}
}

function copyToClipboard(inputId) {
\tvar copyText = document.getElementById(inputId);
\tcopyText.select();
\tcopyText.setSelectionRange(0, 99999); 

\ttry {
\t\tvar successful = document.execCommand('copy');
\t\tif (successful) {
\t\t\tusNotify('success', '";
        // line 5806
        echo ($context["text_copy_success"] ?? null);
        echo "');
\t\t} else {
\t\t\tusNotify('danger', '";
        // line 5808
        echo ($context["text_copy_failed"] ?? null);
        echo "');
\t\t}
\t} catch (err) {
\t\tusNotify('danger', '";
        // line 5811
        echo ($context["text_copy_failed"] ?? null);
        echo "');
\t}
}

function fontIcons(icone_id, input_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/theme/oct_deals/getIcons&user_token=";
        // line 5817
        echo ($context["user_token"] ?? null);
        echo "&icone_id=' + icone_id + '&input_id=' + input_id,
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tconst html = `
\t\t\t<div id=\"modal-icons\" class=\"modal\">
\t\t\t  <div class=\"modal-dialog\" style=\"width:55%;\">
\t\t\t    <div class=\"modal-content\">
\t\t\t      <div class=\"modal-header\">
\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t        <h4 class=\"modal-title\">Font Awesome Icons</h4>
\t\t\t      </div>
\t\t\t      <div class=\"modal-body\">\${ data }</div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t`;

\t\t\t\$('body').append(html);

\t\t\t\$('#modal-icons').modal('show');
\t\t}
\t});
}
</script>
";
        // line 5843
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "octemplates/theme/oct_deals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11878 => 5843,  11849 => 5817,  11840 => 5811,  11834 => 5808,  11829 => 5806,  11813 => 5793,  11766 => 5749,  11736 => 5722,  11725 => 5716,  11719 => 5713,  11710 => 5707,  11701 => 5701,  11692 => 5695,  11687 => 5693,  11682 => 5690,  11669 => 5685,  11662 => 5683,  11653 => 5679,  11646 => 5677,  11637 => 5673,  11630 => 5671,  11624 => 5669,  11620 => 5668,  11616 => 5666,  11599 => 5664,  11595 => 5663,  11590 => 5661,  11574 => 5648,  11545 => 5622,  11541 => 5621,  11537 => 5619,  11515 => 5615,  11511 => 5614,  11501 => 5611,  11497 => 5610,  11487 => 5607,  11483 => 5606,  11473 => 5603,  11469 => 5602,  11459 => 5600,  11442 => 5599,  11437 => 5596,  11413 => 5592,  11409 => 5591,  11402 => 5590,  11385 => 5589,  11373 => 5582,  11367 => 5579,  11337 => 5552,  11333 => 5551,  11329 => 5549,  11307 => 5545,  11303 => 5544,  11293 => 5542,  11276 => 5541,  11271 => 5538,  11247 => 5534,  11243 => 5533,  11236 => 5532,  11219 => 5531,  11207 => 5524,  11201 => 5521,  11174 => 5496,  11164 => 5492,  11160 => 5491,  11156 => 5489,  11152 => 5488,  11146 => 5485,  11140 => 5481,  11130 => 5477,  11126 => 5476,  11122 => 5474,  11118 => 5473,  11112 => 5470,  11106 => 5466,  11091 => 5461,  11084 => 5459,  11073 => 5455,  11066 => 5453,  11060 => 5451,  11056 => 5450,  11052 => 5448,  11035 => 5446,  11031 => 5445,  11026 => 5443,  11014 => 5436,  11008 => 5435,  11002 => 5434,  10996 => 5431,  10988 => 5426,  10984 => 5425,  10980 => 5424,  10976 => 5423,  10972 => 5422,  10966 => 5419,  10958 => 5414,  10954 => 5413,  10950 => 5412,  10931 => 5396,  10906 => 5374,  10897 => 5368,  10887 => 5361,  10872 => 5349,  10848 => 5328,  10812 => 5297,  10806 => 5294,  10798 => 5289,  10787 => 5281,  10758 => 5255,  10743 => 5243,  10725 => 5228,  10721 => 5226,  10712 => 5223,  10703 => 5221,  10699 => 5219,  10695 => 5218,  10690 => 5215,  10679 => 5212,  10670 => 5210,  10666 => 5208,  10662 => 5207,  10658 => 5205,  10647 => 5202,  10638 => 5200,  10634 => 5198,  10630 => 5197,  10624 => 5194,  10613 => 5186,  10602 => 5178,  10591 => 5170,  10564 => 5146,  10549 => 5134,  10544 => 5131,  10533 => 5128,  10524 => 5126,  10520 => 5124,  10516 => 5123,  10512 => 5121,  10501 => 5118,  10492 => 5116,  10488 => 5114,  10484 => 5113,  10478 => 5110,  10468 => 5103,  10457 => 5095,  10430 => 5071,  10415 => 5059,  10410 => 5056,  10399 => 5053,  10390 => 5051,  10386 => 5049,  10382 => 5048,  10378 => 5046,  10367 => 5043,  10358 => 5041,  10354 => 5039,  10350 => 5038,  10344 => 5035,  10334 => 5028,  10320 => 5017,  10314 => 5014,  10307 => 5010,  10293 => 4999,  10209 => 4918,  10196 => 4908,  10171 => 4886,  10159 => 4877,  10134 => 4855,  10122 => 4846,  10097 => 4824,  10085 => 4815,  10057 => 4790,  10038 => 4774,  10032 => 4771,  10027 => 4769,  10013 => 4757,  9998 => 4754,  9986 => 4752,  9982 => 4751,  9973 => 4749,  9966 => 4746,  9962 => 4745,  9957 => 4743,  9938 => 4729,  9932 => 4726,  9921 => 4717,  9910 => 4714,  9901 => 4712,  9897 => 4710,  9893 => 4709,  9888 => 4707,  9882 => 4703,  9871 => 4700,  9862 => 4698,  9858 => 4696,  9854 => 4695,  9849 => 4693,  9830 => 4679,  9824 => 4676,  9811 => 4666,  9806 => 4664,  9801 => 4662,  9793 => 4657,  9788 => 4655,  9783 => 4653,  9775 => 4648,  9770 => 4646,  9765 => 4644,  9757 => 4639,  9752 => 4637,  9747 => 4635,  9739 => 4630,  9734 => 4628,  9729 => 4626,  9721 => 4621,  9716 => 4619,  9711 => 4617,  9706 => 4615,  9700 => 4611,  9689 => 4608,  9680 => 4606,  9676 => 4604,  9672 => 4603,  9667 => 4601,  9650 => 4589,  9644 => 4586,  9636 => 4581,  9619 => 4567,  9616 => 4566,  9605 => 4563,  9596 => 4561,  9592 => 4559,  9588 => 4558,  9583 => 4556,  9566 => 4544,  9560 => 4541,  9552 => 4536,  9549 => 4535,  9538 => 4532,  9529 => 4530,  9525 => 4528,  9521 => 4527,  9516 => 4525,  9499 => 4513,  9493 => 4510,  9483 => 4503,  9480 => 4502,  9469 => 4499,  9460 => 4497,  9456 => 4495,  9452 => 4494,  9447 => 4492,  9429 => 4479,  9423 => 4476,  9404 => 4462,  9398 => 4459,  9389 => 4453,  9386 => 4452,  9375 => 4449,  9366 => 4447,  9362 => 4445,  9358 => 4444,  9353 => 4442,  9335 => 4429,  9327 => 4426,  9308 => 4412,  9302 => 4409,  9291 => 4401,  9288 => 4400,  9277 => 4397,  9268 => 4395,  9264 => 4393,  9260 => 4392,  9255 => 4390,  9237 => 4377,  9231 => 4374,  9212 => 4360,  9206 => 4357,  9197 => 4351,  9194 => 4350,  9183 => 4347,  9174 => 4345,  9170 => 4343,  9166 => 4342,  9161 => 4340,  9143 => 4327,  9135 => 4324,  9116 => 4310,  9110 => 4307,  9100 => 4300,  9096 => 4299,  9092 => 4298,  9074 => 4285,  9068 => 4282,  9055 => 4272,  9040 => 4260,  9034 => 4259,  9029 => 4257,  9022 => 4253,  9016 => 4252,  9011 => 4250,  9004 => 4246,  8998 => 4245,  8993 => 4243,  8986 => 4239,  8980 => 4238,  8975 => 4236,  8968 => 4232,  8962 => 4231,  8957 => 4229,  8950 => 4225,  8944 => 4224,  8939 => 4222,  8932 => 4218,  8918 => 4209,  8912 => 4206,  8905 => 4202,  8891 => 4193,  8885 => 4190,  8878 => 4186,  8864 => 4177,  8858 => 4174,  8851 => 4170,  8837 => 4161,  8831 => 4158,  8824 => 4154,  8810 => 4145,  8804 => 4142,  8797 => 4138,  8783 => 4129,  8777 => 4126,  8770 => 4122,  8756 => 4113,  8750 => 4110,  8743 => 4106,  8729 => 4097,  8723 => 4094,  8716 => 4090,  8702 => 4081,  8696 => 4078,  8689 => 4074,  8675 => 4065,  8669 => 4062,  8662 => 4058,  8648 => 4049,  8642 => 4046,  8635 => 4042,  8621 => 4033,  8615 => 4030,  8610 => 4028,  8590 => 4013,  8584 => 4010,  8567 => 3998,  8561 => 3995,  8544 => 3983,  8538 => 3980,  8521 => 3968,  8515 => 3965,  8498 => 3953,  8492 => 3950,  8475 => 3938,  8469 => 3935,  8452 => 3923,  8446 => 3920,  8429 => 3908,  8423 => 3905,  8406 => 3893,  8400 => 3890,  8395 => 3888,  8375 => 3873,  8369 => 3870,  8352 => 3858,  8346 => 3855,  8329 => 3843,  8323 => 3840,  8306 => 3828,  8300 => 3825,  8295 => 3823,  8287 => 3817,  8262 => 3812,  8255 => 3810,  8245 => 3808,  8228 => 3807,  8224 => 3805,  8215 => 3802,  8205 => 3801,  8202 => 3800,  8198 => 3799,  8186 => 3792,  8178 => 3789,  8171 => 3785,  8165 => 3781,  8156 => 3778,  8152 => 3777,  8148 => 3776,  8143 => 3775,  8139 => 3774,  8134 => 3772,  8126 => 3769,  8108 => 3756,  8102 => 3753,  8085 => 3741,  8079 => 3738,  8072 => 3736,  8056 => 3725,  8050 => 3722,  8045 => 3720,  8037 => 3717,  8032 => 3715,  8023 => 3711,  8018 => 3709,  8001 => 3697,  7995 => 3694,  7978 => 3682,  7972 => 3679,  7967 => 3677,  7957 => 3670,  7953 => 3669,  7949 => 3668,  7945 => 3667,  7936 => 3660,  7929 => 3656,  7925 => 3654,  7923 => 3653,  7913 => 3648,  7902 => 3642,  7894 => 3637,  7889 => 3634,  7882 => 3630,  7878 => 3628,  7876 => 3627,  7866 => 3622,  7855 => 3616,  7847 => 3611,  7842 => 3608,  7835 => 3604,  7831 => 3602,  7829 => 3601,  7819 => 3596,  7808 => 3590,  7800 => 3585,  7795 => 3582,  7788 => 3578,  7784 => 3576,  7782 => 3575,  7772 => 3570,  7761 => 3564,  7753 => 3559,  7748 => 3556,  7741 => 3552,  7737 => 3550,  7735 => 3549,  7725 => 3544,  7714 => 3538,  7706 => 3533,  7701 => 3530,  7694 => 3526,  7690 => 3524,  7688 => 3523,  7678 => 3518,  7667 => 3512,  7659 => 3507,  7654 => 3504,  7647 => 3500,  7643 => 3498,  7641 => 3497,  7631 => 3492,  7620 => 3486,  7612 => 3481,  7607 => 3478,  7600 => 3474,  7596 => 3472,  7594 => 3471,  7584 => 3466,  7573 => 3460,  7565 => 3455,  7560 => 3452,  7553 => 3448,  7549 => 3446,  7547 => 3445,  7537 => 3440,  7531 => 3439,  7520 => 3433,  7514 => 3432,  7506 => 3427,  7501 => 3424,  7494 => 3420,  7490 => 3418,  7488 => 3417,  7478 => 3412,  7467 => 3406,  7459 => 3401,  7454 => 3398,  7447 => 3394,  7443 => 3392,  7441 => 3391,  7431 => 3386,  7420 => 3380,  7412 => 3375,  7407 => 3372,  7400 => 3368,  7396 => 3366,  7394 => 3365,  7384 => 3360,  7373 => 3354,  7365 => 3349,  7360 => 3346,  7353 => 3342,  7349 => 3340,  7347 => 3339,  7337 => 3334,  7326 => 3328,  7318 => 3323,  7313 => 3321,  7300 => 3311,  7295 => 3309,  7288 => 3305,  7283 => 3303,  7278 => 3301,  7268 => 3294,  7263 => 3292,  7255 => 3287,  7248 => 3283,  7243 => 3281,  7235 => 3276,  7228 => 3272,  7223 => 3270,  7215 => 3265,  7208 => 3261,  7203 => 3259,  7195 => 3254,  7188 => 3250,  7183 => 3248,  7175 => 3243,  7168 => 3239,  7163 => 3237,  7155 => 3232,  7148 => 3228,  7143 => 3226,  7135 => 3221,  7128 => 3217,  7123 => 3215,  7115 => 3210,  7108 => 3206,  7103 => 3204,  7095 => 3199,  7088 => 3195,  7083 => 3193,  7075 => 3188,  7068 => 3184,  7063 => 3182,  7055 => 3177,  7048 => 3173,  7043 => 3171,  7035 => 3166,  7030 => 3164,  7025 => 3162,  7017 => 3157,  7010 => 3153,  7005 => 3151,  6997 => 3146,  6990 => 3142,  6985 => 3140,  6977 => 3135,  6970 => 3131,  6965 => 3129,  6957 => 3124,  6950 => 3120,  6947 => 3119,  6932 => 3117,  6928 => 3116,  6922 => 3113,  6918 => 3111,  6916 => 3110,  6910 => 3107,  6906 => 3106,  6899 => 3102,  6883 => 3091,  6877 => 3088,  6869 => 3082,  6851 => 3078,  6840 => 3074,  6836 => 3073,  6829 => 3070,  6825 => 3069,  6820 => 3066,  6803 => 3064,  6799 => 3063,  6791 => 3058,  6786 => 3056,  6780 => 3052,  6762 => 3048,  6751 => 3044,  6747 => 3043,  6740 => 3040,  6736 => 3039,  6731 => 3036,  6714 => 3034,  6710 => 3033,  6702 => 3028,  6697 => 3026,  6679 => 3013,  6673 => 3010,  6668 => 3008,  6655 => 2998,  6649 => 2994,  6643 => 2993,  6641 => 2992,  6633 => 2989,  6619 => 2978,  6609 => 2977,  6601 => 2974,  6597 => 2972,  6584 => 2969,  6575 => 2967,  6571 => 2965,  6567 => 2964,  6562 => 2961,  6546 => 2958,  6537 => 2956,  6533 => 2954,  6529 => 2953,  6525 => 2951,  6509 => 2948,  6500 => 2946,  6496 => 2944,  6492 => 2943,  6484 => 2940,  6471 => 2934,  6463 => 2933,  6457 => 2932,  6449 => 2928,  6444 => 2927,  6442 => 2926,  6433 => 2920,  6429 => 2919,  6420 => 2913,  6414 => 2912,  6398 => 2901,  6392 => 2898,  6387 => 2896,  6382 => 2894,  6376 => 2890,  6353 => 2881,  6339 => 2876,  6333 => 2875,  6329 => 2873,  6302 => 2869,  6296 => 2868,  6284 => 2866,  6267 => 2865,  6263 => 2863,  6245 => 2859,  6237 => 2858,  6231 => 2857,  6224 => 2856,  6207 => 2855,  6203 => 2854,  6193 => 2851,  6186 => 2849,  6182 => 2848,  6175 => 2846,  6168 => 2843,  6165 => 2842,  6148 => 2841,  6143 => 2839,  6135 => 2834,  6131 => 2832,  6108 => 2823,  6094 => 2818,  6088 => 2817,  6084 => 2815,  6057 => 2811,  6051 => 2810,  6035 => 2806,  6028 => 2804,  6013 => 2801,  6007 => 2800,  5992 => 2797,  5986 => 2796,  5974 => 2794,  5957 => 2793,  5953 => 2791,  5935 => 2787,  5927 => 2786,  5921 => 2785,  5914 => 2784,  5897 => 2783,  5893 => 2782,  5883 => 2779,  5876 => 2777,  5872 => 2776,  5865 => 2774,  5858 => 2771,  5855 => 2770,  5838 => 2769,  5833 => 2767,  5788 => 2725,  5768 => 2707,  5751 => 2704,  5745 => 2703,  5740 => 2702,  5722 => 2701,  5715 => 2700,  5713 => 2699,  5708 => 2696,  5686 => 2692,  5682 => 2691,  5675 => 2690,  5658 => 2689,  5652 => 2686,  5644 => 2681,  5635 => 2675,  5628 => 2671,  5620 => 2666,  5610 => 2659,  5602 => 2654,  5592 => 2647,  5569 => 2627,  5559 => 2620,  5546 => 2610,  5538 => 2604,  5524 => 2603,  5522 => 2602,  5512 => 2594,  5491 => 2591,  5487 => 2590,  5480 => 2589,  5463 => 2588,  5458 => 2585,  5436 => 2581,  5430 => 2580,  5425 => 2579,  5408 => 2578,  5402 => 2575,  5394 => 2570,  5388 => 2566,  5385 => 2565,  5376 => 2562,  5372 => 2561,  5365 => 2557,  5362 => 2556,  5357 => 2555,  5355 => 2554,  5350 => 2552,  5345 => 2550,  5340 => 2548,  5334 => 2545,  5326 => 2540,  5319 => 2536,  5315 => 2535,  5309 => 2532,  5301 => 2527,  5294 => 2523,  5290 => 2522,  5284 => 2519,  5276 => 2514,  5265 => 2508,  5258 => 2504,  5250 => 2499,  5246 => 2498,  5239 => 2495,  5221 => 2494,  5219 => 2493,  5211 => 2488,  5207 => 2487,  5198 => 2481,  5187 => 2475,  5180 => 2473,  5174 => 2469,  5156 => 2465,  5146 => 2462,  5140 => 2460,  5136 => 2459,  5132 => 2457,  5115 => 2455,  5111 => 2454,  5105 => 2451,  5099 => 2450,  5083 => 2439,  5077 => 2436,  5060 => 2424,  5054 => 2421,  5037 => 2409,  5031 => 2406,  5014 => 2394,  5008 => 2391,  4991 => 2379,  4985 => 2376,  4968 => 2364,  4962 => 2361,  4945 => 2349,  4939 => 2346,  4922 => 2334,  4916 => 2331,  4899 => 2319,  4893 => 2316,  4886 => 2312,  4881 => 2310,  4876 => 2308,  4870 => 2305,  4853 => 2293,  4847 => 2290,  4830 => 2278,  4824 => 2275,  4807 => 2263,  4801 => 2260,  4792 => 2256,  4787 => 2254,  4778 => 2250,  4773 => 2248,  4756 => 2236,  4750 => 2233,  4747 => 2232,  4730 => 2220,  4724 => 2217,  4721 => 2216,  4719 => 2215,  4703 => 2204,  4697 => 2201,  4692 => 2199,  4672 => 2184,  4666 => 2181,  4661 => 2179,  4643 => 2166,  4637 => 2163,  4620 => 2151,  4614 => 2148,  4597 => 2136,  4591 => 2133,  4574 => 2121,  4568 => 2118,  4551 => 2106,  4545 => 2103,  4528 => 2091,  4522 => 2088,  4510 => 2083,  4502 => 2082,  4496 => 2079,  4479 => 2067,  4473 => 2064,  4468 => 2062,  4462 => 2058,  4455 => 2054,  4451 => 2052,  4449 => 2051,  4443 => 2050,  4436 => 2048,  4431 => 2045,  4424 => 2041,  4420 => 2039,  4418 => 2038,  4412 => 2037,  4405 => 2035,  4400 => 2033,  4390 => 2028,  4380 => 2023,  4374 => 2020,  4366 => 2017,  4356 => 2012,  4350 => 2009,  4342 => 2006,  4332 => 2001,  4326 => 1998,  4318 => 1995,  4308 => 1990,  4302 => 1987,  4294 => 1984,  4284 => 1979,  4278 => 1976,  4270 => 1973,  4260 => 1968,  4254 => 1965,  4246 => 1962,  4236 => 1957,  4230 => 1954,  4222 => 1951,  4212 => 1946,  4206 => 1943,  4198 => 1940,  4188 => 1935,  4182 => 1932,  4174 => 1929,  4164 => 1924,  4158 => 1921,  4150 => 1918,  4140 => 1913,  4134 => 1910,  4126 => 1907,  4116 => 1902,  4110 => 1899,  4102 => 1896,  4092 => 1891,  4086 => 1888,  4078 => 1885,  4068 => 1880,  4062 => 1877,  4054 => 1874,  4044 => 1869,  4038 => 1866,  4030 => 1863,  4020 => 1858,  4014 => 1855,  4006 => 1852,  3997 => 1846,  3993 => 1845,  3989 => 1844,  3981 => 1839,  3969 => 1834,  3961 => 1833,  3953 => 1832,  3947 => 1829,  3930 => 1817,  3924 => 1814,  3907 => 1802,  3901 => 1799,  3884 => 1787,  3878 => 1784,  3861 => 1772,  3855 => 1769,  3846 => 1765,  3841 => 1763,  3824 => 1751,  3818 => 1748,  3801 => 1736,  3795 => 1733,  3778 => 1721,  3772 => 1718,  3755 => 1706,  3749 => 1703,  3744 => 1701,  3733 => 1692,  3724 => 1689,  3717 => 1688,  3713 => 1687,  3708 => 1685,  3701 => 1683,  3684 => 1671,  3678 => 1668,  3661 => 1656,  3655 => 1653,  3638 => 1641,  3632 => 1638,  3615 => 1626,  3609 => 1623,  3592 => 1611,  3586 => 1608,  3569 => 1596,  3563 => 1593,  3553 => 1586,  3547 => 1582,  3541 => 1581,  3539 => 1580,  3531 => 1577,  3526 => 1574,  3510 => 1571,  3501 => 1569,  3497 => 1567,  3493 => 1566,  3489 => 1564,  3473 => 1561,  3464 => 1559,  3460 => 1557,  3456 => 1556,  3448 => 1553,  3441 => 1550,  3436 => 1549,  3434 => 1548,  3427 => 1544,  3423 => 1543,  3412 => 1537,  3408 => 1536,  3394 => 1525,  3388 => 1521,  3382 => 1520,  3380 => 1519,  3372 => 1516,  3367 => 1513,  3351 => 1510,  3342 => 1508,  3338 => 1506,  3334 => 1505,  3330 => 1503,  3314 => 1500,  3305 => 1498,  3301 => 1496,  3297 => 1495,  3289 => 1492,  3282 => 1489,  3277 => 1488,  3275 => 1487,  3268 => 1483,  3264 => 1482,  3253 => 1476,  3248 => 1474,  3239 => 1468,  3235 => 1466,  3229 => 1464,  3226 => 1463,  3220 => 1462,  3218 => 1461,  3209 => 1454,  3201 => 1451,  3198 => 1450,  3193 => 1448,  3186 => 1447,  3181 => 1445,  3174 => 1444,  3171 => 1443,  3166 => 1441,  3159 => 1440,  3157 => 1439,  3153 => 1437,  3149 => 1436,  3143 => 1433,  3137 => 1429,  3129 => 1426,  3124 => 1424,  3117 => 1423,  3112 => 1421,  3105 => 1420,  3103 => 1419,  3099 => 1417,  3095 => 1416,  3089 => 1413,  3084 => 1411,  3080 => 1409,  3061 => 1404,  3054 => 1402,  3039 => 1398,  3032 => 1396,  3024 => 1394,  3020 => 1393,  3016 => 1391,  2997 => 1389,  2993 => 1388,  2989 => 1387,  2985 => 1386,  2981 => 1385,  2976 => 1383,  2967 => 1379,  2961 => 1378,  2955 => 1377,  2949 => 1376,  2944 => 1374,  2937 => 1372,  2928 => 1368,  2922 => 1367,  2916 => 1366,  2910 => 1365,  2904 => 1364,  2898 => 1363,  2893 => 1361,  2888 => 1359,  2880 => 1356,  2874 => 1355,  2868 => 1354,  2859 => 1348,  2855 => 1347,  2849 => 1345,  2844 => 1344,  2841 => 1343,  2839 => 1342,  2834 => 1340,  2816 => 1327,  2810 => 1324,  2793 => 1312,  2787 => 1309,  2777 => 1304,  2771 => 1303,  2765 => 1302,  2759 => 1301,  2753 => 1298,  2743 => 1293,  2737 => 1292,  2731 => 1289,  2722 => 1285,  2715 => 1283,  2698 => 1271,  2692 => 1268,  2688 => 1266,  2671 => 1261,  2664 => 1259,  2658 => 1257,  2654 => 1256,  2650 => 1254,  2633 => 1252,  2629 => 1251,  2612 => 1239,  2606 => 1236,  2601 => 1234,  2593 => 1229,  2589 => 1228,  2585 => 1227,  2571 => 1216,  2565 => 1212,  2559 => 1211,  2557 => 1210,  2550 => 1208,  2541 => 1206,  2530 => 1202,  2521 => 1200,  2511 => 1199,  2503 => 1195,  2498 => 1194,  2496 => 1193,  2489 => 1189,  2481 => 1184,  2477 => 1182,  2471 => 1180,  2468 => 1179,  2462 => 1178,  2460 => 1177,  2447 => 1171,  2440 => 1169,  2429 => 1165,  2422 => 1163,  2418 => 1162,  2411 => 1160,  2400 => 1156,  2393 => 1154,  2382 => 1150,  2375 => 1148,  2364 => 1144,  2357 => 1142,  2352 => 1140,  2347 => 1137,  2328 => 1132,  2319 => 1130,  2304 => 1126,  2295 => 1124,  2280 => 1120,  2271 => 1118,  2263 => 1116,  2259 => 1115,  2255 => 1113,  2236 => 1111,  2232 => 1110,  2228 => 1109,  2224 => 1108,  2215 => 1102,  2211 => 1101,  2205 => 1099,  2200 => 1098,  2197 => 1097,  2195 => 1096,  2189 => 1093,  2169 => 1078,  2163 => 1075,  2146 => 1063,  2140 => 1060,  2123 => 1048,  2117 => 1045,  2100 => 1033,  2094 => 1030,  2077 => 1018,  2071 => 1015,  2054 => 1003,  2048 => 1000,  2043 => 998,  2033 => 991,  2028 => 989,  2021 => 985,  2016 => 983,  2009 => 979,  2004 => 977,  1997 => 973,  1992 => 971,  1985 => 967,  1980 => 965,  1973 => 961,  1968 => 959,  1961 => 955,  1954 => 953,  1948 => 950,  1941 => 946,  1936 => 944,  1930 => 940,  1919 => 937,  1914 => 936,  1910 => 935,  1906 => 933,  1889 => 931,  1885 => 930,  1879 => 927,  1872 => 923,  1867 => 921,  1861 => 917,  1850 => 914,  1845 => 913,  1841 => 912,  1837 => 910,  1820 => 908,  1816 => 907,  1810 => 904,  1805 => 902,  1797 => 897,  1793 => 896,  1789 => 895,  1785 => 894,  1772 => 884,  1768 => 882,  1762 => 881,  1760 => 880,  1747 => 870,  1737 => 869,  1728 => 865,  1724 => 864,  1720 => 863,  1716 => 862,  1711 => 861,  1706 => 860,  1704 => 859,  1688 => 848,  1666 => 831,  1644 => 814,  1622 => 797,  1600 => 780,  1578 => 763,  1556 => 746,  1534 => 729,  1512 => 712,  1490 => 695,  1479 => 687,  1459 => 672,  1453 => 669,  1436 => 657,  1430 => 654,  1421 => 648,  1417 => 647,  1397 => 632,  1391 => 629,  1374 => 617,  1368 => 614,  1351 => 602,  1345 => 599,  1340 => 597,  1319 => 585,  1314 => 583,  1301 => 579,  1296 => 577,  1283 => 573,  1278 => 571,  1265 => 567,  1260 => 565,  1247 => 561,  1242 => 559,  1229 => 555,  1224 => 553,  1211 => 549,  1206 => 547,  1199 => 543,  1192 => 541,  1186 => 538,  1179 => 534,  1161 => 525,  1156 => 523,  1143 => 519,  1138 => 517,  1125 => 513,  1120 => 511,  1107 => 507,  1102 => 505,  1089 => 501,  1084 => 499,  1071 => 495,  1066 => 493,  1053 => 489,  1048 => 487,  1042 => 484,  1024 => 475,  1019 => 473,  1006 => 469,  1001 => 467,  988 => 463,  983 => 461,  970 => 457,  965 => 455,  952 => 451,  947 => 449,  941 => 446,  931 => 439,  925 => 436,  919 => 433,  897 => 416,  891 => 413,  886 => 411,  869 => 399,  863 => 396,  846 => 384,  840 => 381,  823 => 369,  817 => 366,  812 => 364,  804 => 358,  795 => 352,  789 => 349,  782 => 345,  772 => 338,  766 => 335,  756 => 328,  745 => 320,  736 => 314,  731 => 312,  724 => 308,  721 => 307,  719 => 306,  715 => 304,  709 => 303,  703 => 302,  698 => 300,  691 => 298,  675 => 287,  669 => 284,  662 => 280,  656 => 277,  651 => 275,  634 => 263,  628 => 260,  611 => 248,  605 => 245,  588 => 233,  582 => 230,  565 => 218,  559 => 215,  542 => 203,  536 => 200,  519 => 188,  513 => 185,  496 => 173,  490 => 170,  478 => 165,  470 => 164,  464 => 161,  447 => 149,  441 => 146,  429 => 141,  421 => 140,  413 => 139,  407 => 136,  397 => 131,  391 => 130,  385 => 129,  379 => 128,  373 => 127,  367 => 126,  361 => 125,  355 => 124,  349 => 123,  343 => 122,  337 => 119,  332 => 116,  325 => 112,  321 => 110,  319 => 109,  315 => 108,  310 => 106,  293 => 94,  287 => 91,  282 => 89,  278 => 88,  270 => 83,  266 => 82,  262 => 81,  252 => 74,  248 => 73,  244 => 72,  240 => 71,  236 => 70,  232 => 69,  228 => 68,  224 => 67,  220 => 66,  216 => 65,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  191 => 55,  186 => 53,  180 => 50,  176 => 49,  172 => 47,  166 => 44,  163 => 43,  160 => 42,  154 => 39,  151 => 38,  149 => 37,  143 => 33,  132 => 31,  128 => 30,  123 => 28,  115 => 26,  112 => 25,  107 => 22,  96 => 20,  92 => 19,  87 => 17,  84 => 16,  82 => 15,  76 => 14,  72 => 13,  65 => 12,  59 => 10,  56 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/theme/oct_deals.twig", "");
    }
}
