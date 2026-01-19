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

/* default/template/extension/module/filter_vier/mobile_btn/mobile_btn_mini.twig */
class __TwigTemplate_0ed8cd73ceb1a254e6244be90032b556f1f7ca1a340998faef36ae97f31e64df extends \Twig\Template
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
        // line 2
        $context["icon_label_filter"] = ((($context["icon_awesome"] ?? null)) ? (($context["icon_awesome"] ?? null)) : (""));
        // line 3
        if (( !($context["icon_label_filter"] ?? null) &&  !($context["name_filter"] ?? null))) {
            // line 4
            echo "    ";
            $context["icon_label_filter"] = "fa fa-filter";
        }
        // line 7
        echo "<div class=\"fv-mobile_btn_mini_box\">
    <span class=\"fv-mobile_btn_mini fv_mobile_close_switch\">
        ";
        // line 9
        if (($context["icon_label_filter"] ?? null)) {
            // line 10
            echo "        <span class=\"fv-icon fv-icon_mobile\">
            <i class=\"";
            // line 11
            echo ($context["icon_label_filter"] ?? null);
            echo "\" aria-hidden=\"true\"></i>
        </span>
        ";
        }
        // line 14
        echo "        ";
        if (($context["name_filter"] ?? null)) {
            // line 15
            echo "        <span class=\"fv-mobile_btn_mini_name\">";
            echo ($context["name_filter"] ?? null);
            echo "</span>
        ";
        }
        // line 17
        echo "        <span class=\"fv-mobile_btn_footer\"></span>
    </span>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter_vier/mobile_btn/mobile_btn_mini.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  63 => 15,  60 => 14,  54 => 11,  51 => 10,  49 => 9,  45 => 7,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter_vier/mobile_btn/mobile_btn_mini.twig", "");
    }
}
