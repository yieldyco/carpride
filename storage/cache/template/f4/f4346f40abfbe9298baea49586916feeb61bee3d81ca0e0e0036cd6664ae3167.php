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

/* oct_deals/template/common/maintenance.twig */
class __TwigTemplate_bbf1632ec4c1952d4f1abf4db6372a6912cc3642a169be075d3323f20bf6f777 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"ru\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"ru\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"ru\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body>
<div id=\"common-maintenance\" class=\"container-xl\">
  <div class=\"row\">
    <div class=\"col-12\">
\t    <div class=\"content-block\">
\t    \t";
        // line 19
        echo ($context["message"] ?? null);
        echo "
\t    </div>
    </div>
  </div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "oct_deals/template/common/maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/maintenance.twig", "");
    }
}
