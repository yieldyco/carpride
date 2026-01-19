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

/* default/template/extension/module/filter_vier/sample/items_title.twig */
class __TwigTemplate_30707ace196c895d24067cb3ec657cf5d391c1a3f4edbe70f6ddbdbb760954b1 extends \Twig\Template
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
        echo "<div class=\"fv-items_title\">
    <div class=\"fv-items_head\">
        <span class=\"fv-items_name\">";
        // line 3
        echo ($context["text_title"] ?? null);
        echo "</span>
        <span class=\"fv-icon fv-icon_items\">";
        // line 4
        echo ($context["html_icon_items"] ?? null);
        echo "</span>
        <span class=\"fv-icon fv-icon_items_action fv_clear_filter\" title=\"";
        // line 5
        echo ($context["legend_clears"] ?? null);
        echo "\"><span class=\"fv-icon_close\"></span></span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter_vier/sample/items_title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter_vier/sample/items_title.twig", "/var/www/carpride.com.ua/catalog/view/theme/default/template/extension/module/filter_vier/sample/items_title.twig");
    }
}
