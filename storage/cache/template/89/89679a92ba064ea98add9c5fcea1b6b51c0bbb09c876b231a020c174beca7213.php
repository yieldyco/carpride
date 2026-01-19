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

/* oct_deals/template/octemplates/module/oct_benefits.twig */
class __TwigTemplate_b80c4b5dd347332f6cde5de6839ed879da301ffed1562d6d0748729f95f77ba8 extends \Twig\Template
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
        if (($context["oct_benefits"] ?? null)) {
            // line 2
            echo "<div id=\"ds-shop-advantages-";
            echo ($context["module"] ?? null);
            echo "\" class=\"row pt-3 g-2 g-md-3 ds-advantages\">
\t";
            // line 3
            $context["key"] = 0;
            // line 4
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_benefits"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_benefit"]) {
                // line 5
                echo "\t";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 6
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, true, false, 6), ($context["language_id"] ?? null), [], "array", true, true, false, 6) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 6)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null))) {
                    // line 7
                    echo "\t\t\t<div class=\"ds-advantages-item\">
\t\t\t\t<div id=\"block";
                    // line 8
                    echo ($context["module"] ?? null);
                    echo "-";
                    echo ($context["key"] ?? null);
                    echo "\" class=\"content-block d-flex flex-row flex-xl-column align-items-center text-xl-center h-100 px-2 px-md-3\">
\t\t\t\t\t<img src=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "icon", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 9)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null);
                    echo "\" width=\"40\" height=\"40\" loading=\"lazy\">
\t\t\t\t\t<div class=\"ds-advantages-item-text d-flex flex-column align-items-start align-items-xl-center ms-2 ms-md-3 ms-xl-0\">
\t\t\t\t\t\t";
                    // line 11
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, true, false, 11), ($context["language_id"] ?? null), [], "array", true, true, false, 11) && (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, false, false, 11)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null))) {
                        // line 12
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, false, false, 12)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null);
                        echo "\" class=\"ds-advantages-item-title mt-xl-3 mb-2 fsz-16 fw-500 dark-text\">";
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 12)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</a>
\t\t\t\t\t\t";
                    } else {
                        // line 14
                        echo "\t\t\t\t\t\t\t<span class=\"ds-advantages-item-title mt-xl-3 mb-2 fsz-16 fw-500 dark-text\">";
                        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 14)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 16
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, true, false, 16), ($context["language_id"] ?? null), [], "array", true, true, false, 16) && (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, false, false, 16)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null))) {
                        // line 17
                        echo "\t\t\t\t\t\t\t<span class=\"ds-advantages-item-text fsz-14 light-text\">";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, false, false, 17)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 19
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<style>
\t\t\t\t";
                    // line 23
                    if (twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_title", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "\t\t\t\t#block";
                        echo ($context["module"] ?? null);
                        echo "-";
                        echo ($context["key"] ?? null);
                        echo " .ds-advantages-item-title {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_title", [], "any", false, false, false, 24);
                        echo ";}
\t\t\t\t";
                    }
                    // line 26
                    echo "
\t\t\t\t";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_text", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "\t\t\t\t#block";
                        echo ($context["module"] ?? null);
                        echo "-";
                        echo ($context["key"] ?? null);
                        echo " .ds-advantages-item-text {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_text", [], "any", false, false, false, 28);
                        echo ";}
\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t</style>
\t\t";
                }
                // line 32
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_benefit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_benefits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  135 => 32,  131 => 30,  121 => 28,  119 => 27,  116 => 26,  106 => 24,  104 => 23,  98 => 19,  92 => 17,  89 => 16,  83 => 14,  75 => 12,  73 => 11,  66 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_benefits.twig", "");
    }
}
