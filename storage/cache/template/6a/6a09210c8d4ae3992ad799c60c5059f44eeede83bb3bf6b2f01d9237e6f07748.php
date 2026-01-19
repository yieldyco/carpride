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

/* default/template/extension/module/filter_vier/sample/slider.twig */
class __TwigTemplate_ad7eb8902505ea4b1482f1e520ffb2c73b2757d5abc78980db60654a45f68c75 extends \Twig\Template
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
        echo "<div class=\"fv-items_list_body\">
    <div class=\"fv-box_item fv-item_slider\" data-box_item=\"";
        // line 2
        echo ($context["data_box_item"] ?? null);
        echo "\">
        ";
        // line 3
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["input_slider"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["pz"] ?? null)] ?? null) : null)) {
            // line 4
            echo "        <div class=\"fv-box_slider fv-box_input\">
            <div class=\"fv-box_input_slider fv-box_flex";
            // line 5
            if (((($context["pz"] ?? null) == "prs") && (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["datas"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["prs_symbol"] ?? null) : null))) {
                echo " fv-currenc_symbol";
            }
            echo "\">
                <div class=\"fv-flex_cell\"><input class=\"fv-input_slider fv-input_from form-control\" type=\"text\" value=\"\" autocomplete=\"off\" placeholder=\"\"/></div>
                ";
            // line 7
            if ((($context["pz"] ?? null) == "prs")) {
                // line 8
                echo "                <div class=\"fv-flex_cell fv-symbol_currenc\"><span class=\"fv-symbol_prs\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["datas"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["prs_symbol"] ?? null) : null);
                echo "</span></div>
                ";
            }
            // line 10
            echo "                <div class=\"fv-flex_cell fv-symbol_separat\"><span class=\"fv-symbol_slider\"></span></div>
                <div class=\"fv-flex_cell\"><input class=\"fv-input_slider fv-input_to form-control\" type=\"text\" value=\"\" autocomplete=\"off\" placeholder=\"\"/></div>
            </div>
        </div>
        ";
        }
        // line 15
        echo "        <div class=\"fv-box_slider fv-box_grid\">
            <div class=\"fv-box_grid_slider\">
                <input type=\"hidden\" style=\"display: none;\" id=\"";
        // line 17
        echo ($context["init_slider"] ?? null);
        echo "\" class=\"fv-init_slider\" value=\"\" />
                <span class=\"fv-item_label fv-slider ";
        // line 18
        echo ($context["action"] ?? null);
        echo "\" data-item_name=\"";
        echo ($context["pz"] ?? null);
        echo "[";
        echo ($context["main_id"] ?? null);
        echo "]\" data-item_value=\"\"></span>
            </div>
        </div>
        ";
        // line 21
        if (($context["no_ajax_filter"] ?? null)) {
            // line 22
            echo "        <div class=\"fv-box_slider fv-box_footer\">
            <div class=\"fv-box_footer_slider fv-box_flex\">
                <div class=\"fv-flex_cell\"><span class=\"fv-btn fv-btn_css fv-button_slider\">";
            // line 24
            echo ($context["legend_apply"] ?? null);
            echo "</span></div>
            </div>
        </div>
        ";
        }
        // line 28
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter_vier/sample/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  95 => 24,  91 => 22,  89 => 21,  79 => 18,  75 => 17,  71 => 15,  64 => 10,  58 => 8,  56 => 7,  49 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter_vier/sample/slider.twig", "/var/www/carpride.com.ua/catalog/view/theme/default/template/extension/module/filter_vier/sample/slider.twig");
    }
}
