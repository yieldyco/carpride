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

/* common/login.twig */
class __TwigTemplate_59427449fafaeae5f26b6819f9d833d1ae96ce3a78b9b96d3f8435a536b2455d extends \Twig\Template
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
<html lang=\"ru\">
    <head>
        <meta charset=\"utf-8\" />
        <title>Авторизация</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta content=\"\" name=\"description\" />
        <meta content=\"CARPRIDE\" name=\"author\" />
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
                            <a href=\"\" target=\"_blank\" class=\"d-block auth-logo\">
                                <img src=\"/admin/view/image/logo.png\" alt=\"CARPRIDE\" height=\"30\" class=\"auth-logo-dark me-start\">
                            </a>
                        </div>

                        <div class=\"card\">
                            <div class=\"card-body p-4\"> 
                                <div class=\"text-center mt-2\">
                                    <h5>Добро пожаловать!</h5>
                                    <p class=\"text-muted\">Введите логин и пароль</p>
                                </div>
                                <div class=\"p-2 mt-4\">
                                    <form action=\"https://carpride.com.ua/admin/index.php?route=common/login\" method=\"post\" enctype=\"multipart/form-data\">
                                                                                                                      <div class=\"mb-3\">
                                            <label class=\"form-label\" for=\"input-username\">Логин</label>
                                            <div class=\"position-relative input-custom-icon\">
                                                <input type=\"text\"  name=\"username\" value=\"\" class=\"form-control\" id=\"input-username\" placeholder=\"Логин\">
                                                 <span class=\"bx bx-user\"></span>
                                            </div>
                                        </div>
                
                                        <div class=\"mb-3\">
                                            <div class=\"float-end\">
                                                <a href=\"\" class=\"text-muted text-decoration-underline\">Забыли пароль?</a>
                                            </div>
                                            <label class=\"form-label\" for=\"input-password\">Пароль</label>
                                            <div class=\"position-relative auth-pass-inputgroup input-custom-icon\">
                                                <span class=\"bx bx-lock-alt\"></span>
                                                <input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" id=\"input-password\" placeholder=\"Пароль\">
                                                <button type=\"button\" class=\"btn btn-link position-absolute h-100 end-0 top-0\" id=\"password-addon\">
                                                    <i class=\"mdi mdi-eye-outline font-size-18 text-muted\"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class=\"mt-3\">
                                            <button class=\"btn btn-primary w-100 waves-effect waves-light\" type=\"submit\">Войти</button>
                                        </div>

                                                                                <input type=\"hidden\" name=\"redirect\" value=\"https://carpride.com.ua/admin/index.php?route=common/login\"/>
                                      
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center p-4\">
                            <p>© <script>document.write(new Date().getFullYear())</script> CARPRIDE</p>
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
        return "common/login.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/login.twig", "");
    }
}
