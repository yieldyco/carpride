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

/* extension/module/login.twig */
class __TwigTemplate_3519633aff5e4d69f4b5dd1a5a89acb4183b0df9a63bbba15028afb9d7b06e4a extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo ($context["lang"] ?? null);
        echo "\">
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta content=\"";
        // line 7
        echo ($context["description"] ?? null);
        echo "\" name=\"description\" />
        <meta content=\"";
        // line 8
        echo ($context["site_name"] ?? null);
        echo "\" name=\"author\" />
        <!-- Bootstrap Css -->
        <link href=\"view/javascript/login_one/css/bootstrap.min.css\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Icons Css -->
        <link href=\"view/javascript/login_one/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- App Css-->
        <link href=\"view/javascript/login_one/css/app.min.css\" id=\"app-style\" rel=\"stylesheet\" type=\"text/css\" />
        
        <script src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
</head>
    <body>

    <!-- <body data-layout=\"horizontal\"> -->

    <div class=\"authentication-bg min-vh-100\">
        <div class=\"bg-overlay bg-light\"></div>
        <div class=\"container\">
            <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>

            <div class=\"d-flex flex-column min-vh-100 px-3 pt-4\">
                <div class=\"row justify-content-center my-auto\">
                    <div class=\"col-md-8 col-lg-6 col-xl-5\">

                        <div class=\"mb-4 pb-2\">
                            <a href=\"";
        // line 34
        echo ($context["base"] ?? null);
        echo "\" target=\"_blank\" class=\"d-block auth-logo\">
                                <img src=\"/admin/view/image/logo.png\" alt=\"";
        // line 35
        echo ($context["site_name"] ?? null);
        echo "\" height=\"30\" class=\"auth-logo-dark me-start\">
                            </a>
                        </div>

                        <div class=\"card\">
                            <div class=\"card-body p-4\"> 
                                <div class=\"text-center mt-2\">
                                    <h5>Добро пожаловать!</h5>
                                    <p class=\"text-muted\">";
        // line 43
        echo ($context["text_login"] ?? null);
        echo "</p>
                                </div>
                                <div class=\"p-2 mt-4\">
                                    <form action=\"";
        // line 46
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                        ";
        // line 47
        if (($context["error_warning"] ?? null)) {
            // line 48
            echo "                                        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
                                      ";
        }
        // line 50
        echo "                                      ";
        if (($context["success"] ?? null)) {
            // line 51
            echo "                                        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
                                      ";
        }
        // line 53
        echo "                                        <div class=\"mb-3\">
                                            <label class=\"form-label\" for=\"input-username\">";
        // line 54
        echo ($context["entry_username"] ?? null);
        echo "</label>
                                            <div class=\"position-relative input-custom-icon\">
                                                <input type=\"text\"  name=\"username\" value=\"\" class=\"form-control\" id=\"input-username\" placeholder=\"";
        // line 56
        echo ($context["entry_username"] ?? null);
        echo "\">
                                                 <span class=\"bx bx-user\"></span>
                                            </div>
                                        </div>
                
                                        <div class=\"mb-3\">
                                            <div class=\"float-end\">
                                                <a href=\"";
        // line 63
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"text-muted text-decoration-underline\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                                            </div>
                                            <label class=\"form-label\" for=\"input-password\">";
        // line 65
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                            <div class=\"position-relative auth-pass-inputgroup input-custom-icon\">
                                                <span class=\"bx bx-lock-alt\"></span>
                                                <input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" id=\"input-password\" placeholder=\"";
        // line 68
        echo ($context["entry_password"] ?? null);
        echo "\">
                                                <button type=\"button\" class=\"btn btn-link position-absolute h-100 end-0 top-0\" id=\"password-addon\">
                                                    <i class=\"mdi mdi-eye-outline font-size-18 text-muted\"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class=\"mt-3\">
                                            <button class=\"btn btn-primary w-100 waves-effect waves-light\" type=\"submit\">";
        // line 76
        echo ($context["button_login"] ?? null);
        echo "</button>
                                        </div>

                                        ";
        // line 79
        if (($context["redirect"] ?? null)) {
            // line 80
            echo "                                        <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                                      ";
        }
        // line 82
        echo "
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center p-4\">
                            <p>© <script>document.write(new Date().getFullYear())</script> ";
        // line 95
        echo ($context["site_name"] ?? null);
        echo "</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src=\"view/javascript/login_one/js/pass-addon.init.js\"></script>
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "extension/module/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 95,  182 => 82,  176 => 80,  174 => 79,  168 => 76,  157 => 68,  151 => 65,  144 => 63,  134 => 56,  129 => 54,  126 => 53,  120 => 51,  117 => 50,  111 => 48,  109 => 47,  105 => 46,  99 => 43,  88 => 35,  84 => 34,  55 => 8,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/login.twig", "");
    }
}
