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

/* oct_deals/template/common/currency.twig */
class __TwigTemplate_89459c4c00dc739024a18b95bb306eae2aa95d5d2ad6acbb8a73fb246ed59233 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "    <div id=\"currency\" class=\"curency\">
    <div class=\"ds-dropdown-title dark-text fsz-14 fw-500\">";
            // line 3
            echo ($context["oct_sidebar_currency"] ?? null);
            echo ":</div>
        <form action=\"";
            // line 4
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\" class=\"ds-switcher d-flex align-items-center py-2 br-7\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "            <button type=\"button\" class=\"br-7 d-flex align-items-center justify-content-center currency-select";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    echo " active";
                }
                echo "\" name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6);
                echo "\">
                ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    echo "
                ";
                } else {
                    // line 10
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 10);
                    echo "
                ";
                }
                // line 12
                echo "            </button>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            <input type=\"hidden\" name=\"code\" value=\"\" />
            <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 15
            echo ($context["redirect"] ?? null);
            echo "\" />
        </form>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  84 => 14,  77 => 12,  71 => 10,  65 => 8,  63 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/currency.twig", "");
    }
}
