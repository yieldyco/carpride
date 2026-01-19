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

/* oct_deals/template/common/cart.twig */
class __TwigTemplate_f6762e2a79ff8bbb6ca6c54f7b340285597c8b061bf58582b1adee3ef59caebe extends \Twig\Template
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
        if ((array_key_exists("oct_popup_cart_status", $context) && ($context["oct_popup_cart_status"] ?? null))) {
            // line 2
            echo "<button title=\"";
            echo ($context["oct_cart"] ?? null);
            echo "\" id=\"cart\" class=\"ds-header-cart-button button button-transparent position-relative overflow-visible\" type=\"button\" onclick=\"octPopupCart();\">
";
        } else {
            // line 4
            echo "<button title=\"";
            echo ($context["oct_cart"] ?? null);
            echo "\" id=\"cart\" type=\"button\" class=\"ds-header-cart-button button button-transparent position-relative overflow-visible\" onclick=\"location = '";
            echo ($context["cart"] ?? null);
            echo "';\">
";
        }
        // line 6
        echo "    <span class=\"button-icon button-icon-cart\"></span>
    <span class=\"badge rounded-pill position-absolute ds-cart-qty";
        // line 7
        if ((($context["total_products"] ?? null) > 0)) {
            echo " active";
        }
        echo "\">";
        echo ($context["total_products"] ?? null);
        echo "</span>
</button>
<span class=\"d-none\" ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "isbuttoninteractive", [], "any", true, true, false, 9)) {
            echo "data-cart-ids=\"";
            echo ($context["cart_product_ids"] ?? null);
            echo "\"";
        }
        echo " data-cart-text=\"";
        echo ($context["cart_text"] ?? null);
        echo "\" data-cart-text-in=\"";
        echo ($context["cart_text_in"] ?? null);
        echo "\"></span>";
    }

    public function getTemplateName()
    {
        return "oct_deals/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  56 => 7,  53 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/cart.twig", "");
    }
}
