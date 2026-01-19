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

/* oct_deals/template/common/language.twig */
class __TwigTemplate_21b69b87b148290064e4d77f887751dfa4bddf9ae0dcd00994dca60b935fc603 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "<div id=\"language\">
\t<div class=\"ds-dropdown-title dark-text fsz-14 fw-500\">";
            // line 3
            echo ($context["oct_sidebar_language"] ?? null);
            echo ":</div>
\t<form action=\"";
            // line 4
            echo ($context["action"] ?? null);
            echo "\" class=\"ds-switcher d-flex align-items-center py-2 br-7\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "\t\t<button type=\"button\" class=\"br-7 d-flex align-items-center justify-content-center language-select";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    echo " active";
                }
                echo "\" name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 6);
                echo "\">
\t\t\t";
                // line 7
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null))) {
                    // line 8
                    echo "\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "store_url", [], "any", false, false, false, 8);
                    echo "catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    echo "\" class=\"me-1\" width=\"12\" height=\"10\" loading=\"lazy\" />
\t\t\t";
                }
                // line 10
                echo "\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "oct_template_code", [], "any", false, false, false, 10);
                echo "
\t\t</button>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 14
            echo ($context["redirect"] ?? null);
            echo "\" />
\t</form>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 14,  91 => 13,  81 => 10,  67 => 8,  65 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/language.twig", "");
    }
}
