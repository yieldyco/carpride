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

/* default/template/extension/module/filter_vier/ajax_btn/ajax_btn_default.twig */
class __TwigTemplate_8480b119005807d0d580840598eb33f9a33d064556885da03fde98bbeb9dbfc0 extends \Twig\Template
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
        // line 3
        $context["cls_icon_awesome"] = ((($context["icon_awesome"] ?? null)) ? (($context["icon_awesome"] ?? null)) : ("fv-icon_ajax_btn_clear"));
        // line 4
        if (($context["auto_updata_page_ajax"] ?? null)) {
            // line 5
            echo "<div class=\"fv-ajax_block_fixed fv-one_btn_clear\">
    <div class=\"fv-ajax_block_wrapper\">
        <span class=\"fv-ajax_item fv-ajax_btn fv-ajax_btn_clear fv_clear_all_filter\">";
            // line 7
            echo ((($context["legend_clear_choice"] ?? null)) ? (($context["legend_clear_choice"] ?? null)) : ("Reset"));
            echo "</span>
    </div>
</div>
";
        } else {
            // line 11
            echo "<div class=\"fv-ajax_block_fixed\">
    <div class=\"fv-ajax_block_wrapper\">
        <span class=\"fv-ajax_item fv-ajax_txt\">";
            // line 13
            echo ($context["legend_aj_bloc_txt"] ?? null);
            echo "</span>
        <span class=\"fv-ajax_item fv-ajax_total_prod\">";
            // line 14
            echo ($context["ajx_total_prod"] ?? null);
            echo "</span>
        <span class=\"fv-ajax_item fv-ajax_btn fv-ajax_btn_apply fv_apply_all_filter\">";
            // line 15
            echo ((($context["legend_aj_bloc_btn"] ?? null)) ? (($context["legend_aj_bloc_btn"] ?? null)) : ("Show"));
            echo "</span>
        <span class=\"fv-ajax_item fv-ajax_btn fv-ajax_btn_clear fv_clear_all_filter fv-icon\"><i class=\"";
            // line 16
            echo ($context["cls_icon_awesome"] ?? null);
            echo "\"></i></span>
    </div>
</div>
<div class=\"fv-ajax_block_modal\">
    <div class=\"fv-ajax_block_wrapper\">
        <span class=\"fv-ajax_item fv-ajax_txt\">";
            // line 21
            echo ($context["legend_aj_bloc_txt"] ?? null);
            echo "</span>
        <span class=\"fv-ajax_item fv-ajax_total_prod\">";
            // line 22
            echo ($context["ajx_total_prod"] ?? null);
            echo "</span>
        <span class=\"fv-ajax_item fv-ajax_btn fv-ajax_btn_apply fv_apply_all_filter\">";
            // line 23
            echo ((($context["legend_aj_bloc_btn"] ?? null)) ? (($context["legend_aj_bloc_btn"] ?? null)) : ("Show"));
            echo "</span>
        <span class=\"fv-ajax_item fv-ajax_btn fv-ajax_btn_clear fv_clear_all_filter fv-icon\"><i class=\"";
            // line 24
            echo ($context["cls_icon_awesome"] ?? null);
            echo "\"></i></span>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter_vier/ajax_btn/ajax_btn_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  84 => 23,  80 => 22,  76 => 21,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 11,  45 => 7,  41 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter_vier/ajax_btn/ajax_btn_default.twig", "");
    }
}
