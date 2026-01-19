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

/* oct_deals/template/agootemplates/record/langmark.twig */
class __TwigTemplate_6ce2b1cb9941bc006e03d2cff0bec5f0d39e1209d4cc3fcdda30e2e0df47f866 extends \Twig\Template
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
\t<div class=\"ds-switcher d-flex align-items-center py-2 br-7\"  id=\"form-language\">
\t\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 5
                echo "\t\t        <button  class=\"br-7 d-flex align-items-center justify-content-center language-select";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null))) {
                    echo " active";
                }
                echo "\" name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 5);
                echo "\" onclick=\"window.location = '";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "url", [], "any", false, false, false, 5);
                echo "'\">
\t\t\t\t";
                // line 6
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["language"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null);
                echo "
\t\t\t</button>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 10
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/agootemplates/record/langmark.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  69 => 9,  60 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/agootemplates/record/langmark.twig", "");
    }
}
