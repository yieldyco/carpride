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

/* oct_deals/template/common/footer.twig */
class __TwigTemplate_a5877dc1229c1c24d23671979c9b8223b100dc4968dbfb18fd74377dbee2c6ac extends \Twig\Template
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
        echo "<footer class=\"ds-footer mt-3 pb-4\">
\t<div class=\"container-xl\">
\t\t<div class=\"ds-footer-top row align-items-center pt-4 py-md-4 mb-md-4\">
\t\t\t<div class=\"col-md-4 col-xl-6\">
\t\t\t\t";
        // line 5
        if (($context["logo"] ?? null)) {
            // line 6
            echo "\t\t\t\t\t";
            if ((array_key_exists("oct_home", $context) && ($context["oct_home"] ?? null))) {
                // line 7
                echo "\t\t\t\t\t\t<span><img class=\"ds-footer-logo d-block mx-auto mb-3 m-md-0\" src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" ";
                if ((array_key_exists("logo_width", $context) && ($context["logo_width"] ?? null))) {
                    echo " width=\"";
                    echo ($context["logo_width"] ?? null);
                    echo "\" ";
                }
                echo " ";
                if ((array_key_exists("logo_height", $context) && ($context["logo_height"] ?? null))) {
                    echo " height=\"";
                    echo ($context["logo_height"] ?? null);
                    echo "\" ";
                }
                echo "/></span>
\t\t\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t\t\t<a href=\"";
                echo ($context["home"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<img class=\"ds-footer-logo d-block mx-auto mb-3 m-md-0\" src=\"";
                // line 10
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" ";
                if ((array_key_exists("logo_width", $context) && ($context["logo_width"] ?? null))) {
                    echo " width=\"";
                    echo ($context["logo_width"] ?? null);
                    echo "\" ";
                }
                echo " ";
                if ((array_key_exists("logo_height", $context) && ($context["logo_height"] ?? null))) {
                    echo " height=\"";
                    echo ($context["logo_height"] ?? null);
                    echo "\" ";
                }
                echo "/>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t";
        }
        // line 14
        echo "\t\t\t</div>
\t\t\t";
        // line 15
        if (array_key_exists("oct_subscribe", $context)) {
            // line 16
            echo "\t\t\t\t";
            echo ($context["oct_subscribe"] ?? null);
            echo "
\t\t\t";
        }
        // line 18
        echo "\t\t</div>
\t\t<div class=\"ds-footer-contacts row\">
\t\t\t<div class=\"col-md-6 col-lg-5 order-0\">
                <div class=\"d-flex flex-column flex-md-row\">
\t\t\t\t\t";
        // line 22
        if (((array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null))) || (array_key_exists("oct_contact_opens", $context) &&  !twig_test_empty(($context["oct_contact_opens"] ?? null))))) {
            // line 23
            echo "\t\t\t\t\t\t<div class=\"ds-footer-phones-shedule d-flex flex-md-column justify-content-between justify-content-md-start\">
\t\t\t\t\t\t\t";
            // line 24
            if ((array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null)))) {
                // line 25
                echo "\t\t\t\t\t\t\t\t<div class=\"ds-footer-item mb-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"ds-footer-item-title d-flex align-items-center fw-500 dark-text mb-2\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"me-2\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\td=\"M11.7349 15.9987C11.3583 15.9987 10.9793 15.9479 10.6052 15.8453C5.54826 14.4572 1.54302 10.4552 0.154075 5.40073C-0.161781 4.25134 0.0112814 3.05354 0.642994 2.02967C1.27717 1.00088 2.31995 0.275644 3.5038 0.0385471C4.28565 -0.11815 5.06995 0.231348 5.46949 0.905722L6.75177 3.07075C7.37446 4.12251 7.06506 5.47783 6.04694 6.15466L5.11917 6.77162C5.98634 8.55272 7.4449 10.0147 9.2178 10.881L9.84312 9.94824C10.5232 8.93176 11.8793 8.62737 12.9303 9.25334L15.0986 10.5463C15.7697 10.9467 16.1175 11.7293 15.9641 12.4948C15.7278 13.6786 15.0018 14.7213 13.9738 15.3555C13.283 15.7813 12.5143 15.9987 11.7349 15.9987ZM3.88035 1.22977C3.84015 1.22977 3.79915 1.23389 3.75978 1.24209C2.89507 1.4152 2.14686 1.93614 1.69154 2.67532C1.24113 3.40548 1.11723 4.25789 1.34202 5.0742C2.61611 9.71277 6.2907 13.3849 10.9309 14.6582C11.7472 14.8822 12.5987 14.7575 13.3272 14.3079C14.0656 13.8525 14.5875 13.1027 14.7573 12.2528C14.8082 11.9976 14.6925 11.7359 14.4685 11.603L12.3001 10.31C11.8095 10.0188 11.1803 10.1615 10.8652 10.6333L9.95047 11.9993C9.78639 12.2437 9.46983 12.3372 9.20238 12.224C6.77151 11.2084 4.79432 9.22545 3.7762 6.78556C3.66298 6.51319 3.75885 6.1998 4.00333 6.03654L5.36614 5.12998C5.83869 4.81577 5.98222 4.18652 5.69262 3.69838L4.41033 1.53332C4.29794 1.34216 4.09448 1.22977 3.88035 1.22977ZM10.3541 10.2903H10.3623H10.3541ZM12.7177 6.35731C12.7177 4.66071 11.337 3.28079 9.64122 3.28079C9.30157 3.28079 9.02592 3.55644 9.02592 3.89609C9.02592 4.23574 9.30157 4.5114 9.64122 4.5114C10.6585 4.5114 11.4871 5.33919 11.4871 6.35731C11.4871 6.69696 11.7628 6.97261 12.1024 6.97261C12.4421 6.97261 12.7177 6.69696 12.7177 6.35731ZM15.179 6.35731C15.179 3.30376 12.6948 0.81957 9.64122 0.81957C9.30157 0.81957 9.02592 1.09523 9.02592 1.43487C9.02592 1.77452 9.30157 2.05018 9.64122 2.05018C12.0163 2.05018 13.9484 3.98223 13.9484 6.35731C13.9484 6.69696 14.224 6.97261 14.5637 6.97261C14.9033 6.97261 15.179 6.69696 15.179 6.35731Z\"
\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#00171F\" />
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t";
                // line 32
                echo ($context["oct_telephones"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled fsz-14\">
\t\t\t\t\t\t\t\t\t\t";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_contact_telephones"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_telephone"]) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"mb-1\"><a href=\"tel:";
                    echo twig_replace_filter($context["oct_contact_telephone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                    echo "\" class=\"blue-link\">";
                    echo $context["oct_contact_telephone"];
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_telephone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("oct_contact_opens", $context) &&  !twig_test_empty(($context["oct_contact_opens"] ?? null)))) {
                // line 42
                echo "\t\t\t\t\t\t\t\t<div class=\"ds-footer-item ms-md-0\">
\t\t\t\t\t\t\t\t\t<div class=\"ds-footer-item-title d-flex align-items-center fw-500 dark-text mb-2\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"me-2\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\td=\"M8 0C3.58847 0 0 3.58847 0 8C0 12.4115 3.58847 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58847 12.4115 0 8 0ZM8 14.8837C4.20391 14.8837 1.11628 11.7961 1.11628 8C1.11628 4.20391 4.20391 1.11628 8 1.11628C11.7961 1.11628 14.8837 4.20391 14.8837 8C14.8837 11.7961 11.7961 14.8837 8 14.8837ZM10.627 9.83812C10.845 10.0562 10.845 10.4097 10.627 10.6277C10.5183 10.7364 10.3754 10.7914 10.2326 10.7914C10.0897 10.7914 9.94677 10.7371 9.83812 10.6277L7.60556 8.39517C7.50063 8.29024 7.44186 8.14808 7.44186 8.00073V4.2798C7.44186 3.9717 7.69191 3.72166 8 3.72166C8.30809 3.72166 8.55814 3.9717 8.55814 4.2798V7.76926L10.627 9.83812Z\"
\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#00171F\" />
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t";
                // line 49
                echo ($context["oct_working_hours"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"fsz-14 light-text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_contact_opens"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_open"]) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo $context["oct_contact_open"];
                    echo "<br>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_open'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 60
        echo "                    <div class=\"ds-footer-address d-flex flex-column align-items-start ms-md-5 ms-xxl-6\">
\t\t\t\t\t\t";
        // line 61
        if ((array_key_exists("main_address", $context) && ($context["main_address"] ?? null))) {
            // line 62
            echo "\t\t\t\t\t\t\t<div class=\"ds-footer-item my-4 mt-md-0\">
\t\t\t\t\t\t\t\t<div class=\"ds-footer-item-title d-flex align-items-center fw-500 dark-text mb-2\">
\t\t\t\t\t\t\t\t\t<svg class=\"me-2\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M7.17949 0C3.22051 0 0 3.22051 0 7.17949C0 11.3789 3.85394 13.9241 6.4041 15.6086L6.83815 15.8966C6.94154 15.9656 7.06051 16 7.17949 16C7.29846 16 7.41744 15.9656 7.52082 15.8966L7.95488 15.6086C10.505 13.9241 14.359 11.3789 14.359 7.17949C14.359 3.22051 11.1385 0 7.17949 0ZM7.27713 14.5813L7.17949 14.6462L7.08184 14.5813C4.6121 12.9502 1.23077 10.7167 1.23077 7.17949C1.23077 3.89908 3.89908 1.23077 7.17949 1.23077C10.4599 1.23077 13.1282 3.89908 13.1282 7.17949C13.1282 10.7167 9.74605 12.951 7.27713 14.5813ZM7.17949 4.51282C5.70913 4.51282 4.51282 5.70913 4.51282 7.17949C4.51282 8.64985 5.70913 9.84615 7.17949 9.84615C8.64985 9.84615 9.84615 8.64985 9.84615 7.17949C9.84615 5.70913 8.64985 4.51282 7.17949 4.51282ZM7.17949 8.61539C6.38769 8.61539 5.74359 7.97128 5.74359 7.17949C5.74359 6.38769 6.38769 5.74359 7.17949 5.74359C7.97128 5.74359 8.61539 6.38769 8.61539 7.17949C8.61539 7.97128 7.97128 8.61539 7.17949 8.61539Z\"
\t\t\t\t\t\t\t\t\t\t\tfill=\"#00171F\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
            // line 69
            echo ($context["oct_our_address"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"fsz-14 secondary-text ds-footer-item-address\">";
            // line 71
            echo ($context["main_address"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_email", [], "any", true, true, false, 74) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_email", [], "any", false, false, false, 74))) {
            // line 75
            echo "\t\t\t\t\t\t\t<div class=\"ds-footer-item ms-0\">
\t\t\t\t\t\t\t\t<div class=\"ds-footer-item-title d-flex align-items-center fw-500 dark-text mb-1\">
\t\t\t\t\t\t\t\t\t<svg class=\"me-2\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M8 0C3.58892 0 0 3.58892 0 8C0 12.4111 3.58892 16 8 16C8.33969 16 8.61539 15.7243 8.61539 15.3846C8.61539 15.0449 8.33969 14.7692 8 14.7692C4.26749 14.7692 1.23077 11.7325 1.23077 8C1.23077 4.26749 4.26749 1.23077 8 1.23077C11.7325 1.23077 14.7692 4.26749 14.7692 8C14.7692 9.34564 13.8552 10.6667 12.9231 10.6667C12.0509 10.6667 11.4872 9.94215 11.4872 8.82051V5.12821C11.4872 4.78851 11.2115 4.51282 10.8718 4.51282C10.5321 4.51282 10.2564 4.78851 10.2564 5.12821V5.36368C9.64677 4.84102 8.86482 4.51282 8 4.51282C6.07672 4.51282 4.51282 6.07672 4.51282 8C4.51282 9.92328 6.07672 11.4872 8 11.4872C9.01908 11.4872 9.92895 11.04 10.5673 10.3409C11.0448 11.3945 12.0041 11.8974 12.9231 11.8974C14.7364 11.8974 16 9.84369 16 8C16 3.58892 12.4111 0 8 0ZM8 10.2564C6.75528 10.2564 5.74359 9.2439 5.74359 8C5.74359 6.7561 6.75528 5.74359 8 5.74359C9.24472 5.74359 10.2564 6.7561 10.2564 8C10.2564 9.2439 9.24472 10.2564 8 10.2564Z\"
\t\t\t\t\t\t\t\t\t\t\tfill=\"#00171F\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\tE-mail
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"mailto:";
            // line 84
            echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_email", [], "any", false, false, false, 84);
            echo "\" class=\"fsz-14 blue-link\">";
            echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_email", [], "any", false, false, false, 84);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 87
        echo "                        <a href=\"";
        echo ($context["contact_link"] ?? null);
        echo "\" class=\"ds-footer-contacts-button button button-outline button-outline-primary br-7 mt-4\">
                            <span class=\"button-text fsz-14 fw-400\">";
        // line 88
        echo ($context["oct_go_to_contacts"] ?? null);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
\t\t\t<div class=\"col-md-6 col-lg-4 mt-md-4 pt-md-4 mt-lg-0 pt-lg-0 ds-footer-bordered ds-footer-bordered-links order-2 order-lg-1\">
                <div class=\"ds-footer-links d-flex\">
\t\t\t\t\t";
        // line 95
        if ((array_key_exists("categories", $context) && ($context["categories"] ?? null))) {
            // line 96
            echo "\t\t\t\t\t\t<div class=\"ds-footer-item ds-footer-categories\">
\t\t\t\t\t\t\t<div class=\"ds-footer-item-title d-flex align-items-center fw-500 dark-text mb-2\">
\t\t\t\t\t\t\t\t<svg class=\"me-2\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" fill=\"none\"
\t\t\t\t\t\t\t\t\txmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M11.2821 1.64103H11.0605C10.9809 0.612103 10.3147 0 9.23077 0H5.12821C4.04431 0 3.37807 0.612103 3.29848 1.64103H3.07692C1.09292 1.64103 0 2.73395 0 4.71795V12.9231C0 14.9071 1.09292 16 3.07692 16H11.2821C13.2661 16 14.359 14.9071 14.359 12.9231V4.71795C14.359 2.73395 13.2661 1.64103 11.2821 1.64103ZM4.51282 1.84615C4.51282 1.36287 4.64492 1.23077 5.12821 1.23077H9.23077C9.71405 1.23077 9.84615 1.36287 9.84615 1.84615V2.66667C9.84615 3.14995 9.71405 3.28205 9.23077 3.28205H5.12821C4.64492 3.28205 4.51282 3.14995 4.51282 2.66667V1.84615ZM13.1282 12.9231C13.1282 14.217 12.576 14.7692 11.2821 14.7692H3.07692C1.78297 14.7692 1.23077 14.217 1.23077 12.9231V4.71795C1.23077 3.424 1.78297 2.87179 3.07692 2.87179H3.29848C3.37807 3.90072 4.04431 4.51282 5.12821 4.51282H9.23077C10.3147 4.51282 10.9809 3.90072 11.0605 2.87179H11.2821C12.576 2.87179 13.1282 3.424 13.1282 4.71795V12.9231ZM11.0769 8C11.0769 8.33969 10.8012 8.61539 10.4615 8.61539H6.35897C6.01928 8.61539 5.74359 8.33969 5.74359 8C5.74359 7.66031 6.01928 7.38462 6.35897 7.38462H10.4615C10.8012 7.38462 11.0769 7.66031 11.0769 8ZM11.0769 11.2821C11.0769 11.6217 10.8012 11.8974 10.4615 11.8974H6.35897C6.01928 11.8974 5.74359 11.6217 5.74359 11.2821C5.74359 10.9424 6.01928 10.6667 6.35897 10.6667H10.4615C10.8012 10.6667 11.0769 10.9424 11.0769 11.2821ZM4.51282 8C4.51282 8.33969 4.23713 8.61539 3.89744 8.61539C3.55774 8.61539 3.28205 8.33969 3.28205 8C3.28205 7.66031 3.55774 7.38462 3.89744 7.38462C4.23713 7.38462 4.51282 7.66031 4.51282 8ZM4.51282 11.2821C4.51282 11.6217 4.23713 11.8974 3.89744 11.8974C3.55774 11.8974 3.28205 11.6217 3.28205 11.2821C3.28205 10.9424 3.55774 10.6667 3.89744 10.6667C4.23713 10.6667 4.51282 10.9424 4.51282 11.2821Z\"
\t\t\t\t\t\t\t\t\t\tfill=\"#00171F\" />
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t";
            // line 104
            echo ($context["oct_footer_category"] ?? null);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled fsz-14 secondary-text mt-3\">
\t\t\t\t\t\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 109);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 109);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 109);
                echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t";
        if (($context["informations"] ?? null)) {
            // line 116
            echo "                    <div class=\"ds-footer-item ds-footer-info ms-md-5 ms-xxl-6\">
                        <div class=\"ds-footer-item-title d-flex align-items-center fw-500 dark-text mb-2\">
                            <svg class=\"me-2\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\">
                                <path
                                    d=\"M8 16C3.58847 16 0 12.4115 0 8C0 3.58847 3.58847 0 8 0C12.4115 0 16 3.58847 16 8C16 12.4115 12.4115 16 8 16ZM8 1.11628C4.20391 1.11628 1.11628 4.20391 1.11628 8C1.11628 11.7961 4.20391 14.8837 8 14.8837C11.7961 14.8837 14.8837 11.7961 14.8837 8C14.8837 4.20391 11.7961 1.11628 8 1.11628ZM8.55814 11.3488V7.94713C8.55814 7.63904 8.30809 7.38899 8 7.38899C7.69191 7.38899 7.44186 7.63904 7.44186 7.94713V11.3488C7.44186 11.6569 7.69191 11.907 8 11.907C8.30809 11.907 8.55814 11.6569 8.55814 11.3488ZM8.75908 5.39535C8.75908 4.98456 8.42643 4.65116 8.0149 4.65116H8.00745C7.59666 4.65116 7.2669 4.98456 7.2669 5.39535C7.2669 5.80614 7.60411 6.13953 8.0149 6.13953C8.42569 6.13953 8.75908 5.80614 8.75908 5.39535Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 124
            echo ($context["text_information"] ?? null);
            echo "
                        </div>
                        <ul class=\"list-unstyled fsz-14 secondary-text mt-3\">
\t\t\t\t\t\t\t";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 128
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 129);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 129);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 129);
                echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                        </ul>
                    </div>
\t\t\t\t\t";
        }
        // line 135
        echo "                </div>
                <button type=\"button\" class=\"button button-primary br-7 d-sm-none w-100\" data-sidebar=\"catalog\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <g>
                            <rect x=\"1.42857\" y=\"1.42859\" width=\"7.14286\" height=\"7.14286\" rx=\"2\" stroke=\"#FDFDFD\"></rect>
                            <rect x=\"11.4286\" y=\"11.1858\" width=\"7.14286\" height=\"7.14286\" rx=\"2\" stroke=\"#FDFDFD\"></rect>
                            <rect x=\"1.42857\" y=\"11.4286\" width=\"7.14286\" height=\"7.14286\" rx=\"2\" stroke=\"#FDFDFD\"></rect>
                            <rect x=\"11.4286\" y=\"1.30725\" width=\"7.14286\" height=\"7.14286\" rx=\"2\" stroke=\"#FDFDFD\"></rect>
                        </g>
                    </svg>
                    <span class=\"button-text\">";
        // line 145
        echo ($context["oct_menu_catalog"] ?? null);
        echo "</span>
                </button>
            </div>
\t\t\t<div class=\"col-md-6 col-lg-3 order-1 order-lg-2\">
                <div class=\"ds-footer-socials\">
                    <div class=\"ds-footer-item-title d-flex align-items-center justify-content-md-center justify-content-lg-start fw-500 dark-text mb-3\">
                        <svg class=\"me-2\" width=\"14\" height=\"16\" viewBox=\"0 0 14 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path
                                d=\"M13.0062 10.3994L7.20028 5.37356C6.64186 4.88905 5.86992 4.77408 5.19653 5.08614C4.52314 5.3982 4.10431 6.04695 4.10431 6.79425V14.4561C4.10431 15.1049 4.49846 15.6715 5.09794 15.9015C5.2786 15.9672 5.46752 16 5.64818 16C6.08343 16 6.494 15.8193 6.79785 15.4826L8.5963 13.4625C8.79339 13.2407 9.07259 13.1176 9.36001 13.1176H11.9961C12.6449 13.1176 13.2197 12.7234 13.4414 12.1075C13.6714 11.4998 13.4989 10.8264 13.0062 10.3994ZM12.2917 11.6804C12.2671 11.7379 12.1932 11.8857 11.9961 11.8857H9.36001C8.71947 11.8857 8.10357 12.165 7.66833 12.6413L5.86988 14.6614C5.73848 14.8092 5.58247 14.7682 5.52498 14.7436C5.4675 14.7189 5.31968 14.645 5.31968 14.4479V6.78604C5.31968 6.40007 5.60712 6.24404 5.69746 6.20298C5.74673 6.18656 5.84524 6.1455 5.97664 6.1455C6.10803 6.1455 6.24764 6.17834 6.38724 6.30153L12.1932 11.3273C12.341 11.4587 12.3082 11.6147 12.2835 11.6722L12.2917 11.6804ZM7.12635 3.67366C6.98674 3.3616 7.11813 3.00027 7.42197 2.85245L8.90836 2.16263C9.21221 2.02303 9.58175 2.15442 9.72957 2.45827C9.86917 2.77033 9.73779 3.13166 9.43394 3.27948L7.94756 3.96929C7.86544 4.01035 7.7751 4.02678 7.68477 4.02678C7.45483 4.02678 7.23311 3.89538 7.12635 3.67366ZM4.712 2.19548L4.85981 0.561277C4.89265 0.224581 5.20471 -0.0299932 5.52498 0.0028551C5.86168 0.0357034 6.11625 0.331338 6.0834 0.668034L5.93559 2.30224C5.91095 2.62251 5.63995 2.86066 5.31968 2.86066C5.30326 2.86066 5.28683 2.86066 5.26219 2.86066C4.9255 2.82781 4.67093 2.53218 4.70377 2.19548H4.712ZM3.0778 2.95921C3.35701 3.1563 3.4227 3.54226 3.22561 3.81326C3.10243 3.98572 2.91355 4.07605 2.71646 4.07605C2.59328 4.07605 2.47011 4.0432 2.36335 3.96108L1.01656 3.01669C0.737345 2.8196 0.671654 2.43363 0.868744 2.16263C1.06583 1.88342 1.45178 1.81773 1.72278 2.01482L3.06958 2.95921H3.0778ZM2.65897 5.75953C2.79858 6.07159 2.6672 6.43292 2.36335 6.58074L0.876964 7.27055C0.794843 7.31161 0.704504 7.32804 0.614171 7.32804C0.384233 7.32804 0.162513 7.19664 0.0557554 6.97492C-0.08385 6.66286 0.0475313 6.30153 0.351379 6.15371L1.83776 5.46389C2.14161 5.32429 2.51116 5.45568 2.65897 5.75953Z\"
                                fill=\"#00171F\" />
                        </svg>
                        ";
        // line 156
        echo ($context["oct_footer_social_tex"] ?? null);
        echo "
                    </div>
                    <div class=\"d-flex justify-content-md-center justify-content-lg-start\">
\t\t\t\t\t\t";
        // line 159
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "socials", [], "any", true, true, false, 159) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "socials", [], "any", false, false, false, 159)))) {
            // line 160
            echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled fsz-14 secondary-text ds-footer-item\">
\t\t\t\t\t\t\t\t";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "socials", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t<li><a rel=\"noopener noreferrer\" href=\"";
                echo ((((twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 162) == "#") || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 162)))) ? ("javascript:;") : (twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 162)));
                echo "\" class=\"d-inline-flex align-items-center text-decoration-none ds-footer-socials-item-";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 162), ["fa " => "", "fab " => "", "far " => "", "fas " => ""]);
                echo " d-flex align-items-center justify-content-center\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<i class=\"";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 163);
                echo " ds-footer-item-icon me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["social"], "title", [], "any", false, false, false, 164);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 169
        echo "                        <ul class=\"list-unstyled fsz-14 secondary-text ds-footer-item ms-md-5 ms-xxl-6\">
\t\t\t\t\t\t\t";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_telegram", [], "any", true, true, false, 170) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_telegram", [], "any", false, false, false, 170))) {
            // line 171
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://t.me/";
            // line 172
            echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_telegram", [], "any", false, false, false, 172);
            echo "\" class=\"d-inline-flex align-items-center\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ds-footer-item-icon  me-2\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"18\" viewBox=\"0 0 20 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M19.9463 1.58813C19.9155 1.43966 19.8438 0.98366 19.4338 0.633699C18.9931 0.262527 18.4397 0.241317 18.2757 0.251922C17.5173 0.262527 16.6563 0.559466 11.6548 2.72286C10.015 3.43339 6.6738 4.92869 1.74403 7.16632C0.985598 7.48447 0.114429 7.95107 0.011939 8.77825C-0.131547 9.9766 1.04709 10.3584 2.00025 10.6765L2.3692 10.7932C3.10713 11.0477 4.46001 11.4613 5.22868 11.4825C5.95637 11.5037 6.70453 11.2174 7.52445 10.6341C8.75434 9.77511 9.76901 9.06459 10.6197 8.47072C10.4864 8.59798 10.3634 8.72524 10.261 8.82068C9.8305 9.24488 9.52303 9.54182 9.46153 9.60545C9.33855 9.74331 9.20531 9.87057 9.08233 9.99782C8.51863 10.5599 7.94468 11.1431 8.01642 11.9809C8.08816 12.7763 8.74409 13.3065 9.2258 13.6353C9.92273 14.1125 10.4864 14.5155 11.0399 14.9079C11.6343 15.3321 12.239 15.7563 13.0179 16.2865C13.2127 16.4138 13.3869 16.5517 13.5714 16.6789C14.2786 17.2092 15.0165 17.75 15.9697 17.75C16.0517 17.75 16.1234 17.75 16.2054 17.7394C16.8613 17.6758 17.712 17.1985 18.0502 15.2791C18.5934 12.2567 19.7208 5.40591 19.9873 2.51077C20.018 2.18202 19.9873 1.78964 19.9565 1.59875L19.9463 1.58813ZM18.4499 2.35169C18.1937 5.17259 17.056 12.087 16.5333 14.9927C16.3694 15.9366 16.1029 16.1487 16.0619 16.1593C15.6007 16.1911 15.1497 15.8941 14.4631 15.3851C14.2683 15.2472 14.0736 15.0988 13.8686 14.9503C13.0999 14.4307 12.5055 14.0065 11.9213 13.5823C11.3576 13.1793 10.7939 12.7869 10.0867 12.2991C9.65625 12.0021 9.57427 11.8431 9.55377 11.8431C9.59477 11.6946 9.93298 11.3552 10.1585 11.1325C10.2917 10.9947 10.4352 10.8568 10.5787 10.6978C10.6402 10.6235 10.9271 10.3584 11.3166 9.97661C15.3342 6.09522 15.3752 5.91493 15.447 5.56497C15.5085 5.25743 15.4675 4.79082 15.1292 4.49388C14.7398 4.12271 14.2478 4.22875 14.0941 4.27117C13.8686 4.32419 13.7354 4.35602 6.66354 9.31911C6.13059 9.70089 5.6899 9.91298 5.26969 9.88117C4.86998 9.88117 3.9373 9.63725 2.85091 9.26608L2.4717 9.13883C2.24622 9.0646 1.97974 8.97974 1.76451 8.89491C1.8875 8.82067 2.072 8.73583 2.32823 8.62978C2.32823 8.62978 2.33846 8.62978 2.34871 8.62978C7.27849 6.40276 10.5992 4.90747 12.239 4.19694C16.5231 2.34109 17.7735 1.86386 18.2962 1.85326C18.2962 1.85326 18.4089 1.86387 18.4192 1.86387C18.4397 1.98052 18.4499 2.21383 18.4397 2.3623L18.4499 2.35169Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#2CA5E0\" />
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tTelegram
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_viber", [], "any", true, true, false, 184) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_viber", [], "any", false, false, false, 184))) {
            // line 185
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"viber://chat?number=+";
            // line 186
            echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_viber", [], "any", false, false, false, 186);
            echo "\" class=\"d-none d-xl-inline-flex align-items-center\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ds-footer-item-icon  me-2\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"22\" viewBox=\"0 0 20 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M5.92284 4.50942C5.73022 4.48139 5.53381 4.52016 5.3663 4.61928H5.35179C4.96314 4.84729 4.61283 5.13437 4.31435 5.47224C4.06562 5.75932 3.93088 6.04951 3.89565 6.32934C3.87492 6.49516 3.88943 6.66306 3.93814 6.82163L3.95679 6.83199C4.23662 7.65386 4.60143 8.44463 5.04709 9.18876C5.62172 10.234 6.32886 11.2006 7.15097 12.0648L7.17585 12.1L7.21523 12.129L7.23907 12.157L7.26809 12.1819C8.13527 13.0065 9.10419 13.717 10.1514 14.2961C11.3484 14.948 12.0749 15.2558 12.5112 15.3844V15.3906C12.6387 15.43 12.7548 15.4476 12.8719 15.4476C13.2435 15.4201 13.5952 15.2691 13.871 15.0185C14.2078 14.72 14.4928 14.3687 14.7146 13.978V13.9707C14.9229 13.5769 14.8525 13.2058 14.5519 12.954C13.9482 12.4265 13.2954 11.958 12.6024 11.5549C12.1381 11.303 11.6666 11.4554 11.4759 11.7103L11.0686 12.2244C10.8592 12.4793 10.4799 12.4441 10.4799 12.4441L10.4695 12.4503C7.63912 11.7279 6.88358 8.8623 6.88358 8.8623C6.88358 8.8623 6.84835 8.47261 7.11056 8.27362L7.62046 7.86321C7.86505 7.66422 8.03502 7.1937 7.77281 6.72939C7.37236 6.03579 6.90477 5.38319 6.37679 4.78096C6.26163 4.63923 6.10013 4.5427 5.92077 4.50839L5.92284 4.50942ZM10.7058 3.26367C10.5684 3.26367 10.4366 3.31827 10.3394 3.41545C10.2422 3.51263 10.1876 3.64444 10.1876 3.78187C10.1876 3.91931 10.2422 4.05111 10.3394 4.14829C10.4366 4.24547 10.5684 4.30007 10.7058 4.30007C12.0158 4.30007 13.1041 4.7281 13.9653 5.54893C14.4078 5.99769 14.753 6.52937 14.9789 7.11182C15.2059 7.69531 15.3095 8.31819 15.2826 8.9421C15.2768 9.07954 15.3259 9.21364 15.419 9.3149C15.512 9.41616 15.6416 9.47629 15.779 9.48207C15.9164 9.48784 16.0505 9.43878 16.1518 9.34568C16.2531 9.25258 16.3132 9.12306 16.319 8.98563C16.3511 8.21816 16.2237 7.45237 15.9448 6.73664C15.6647 6.01752 15.24 5.36354 14.697 4.81516L14.6866 4.8048C13.6181 3.78394 12.2666 3.26367 10.7058 3.26367Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#871A93\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M10.6696 4.96832C10.5321 4.96832 10.4003 5.02292 10.3031 5.1201C10.206 5.21728 10.1514 5.34909 10.1514 5.48652C10.1514 5.62396 10.206 5.75576 10.3031 5.85294C10.4003 5.95012 10.5321 6.00472 10.6696 6.00472H10.6872C11.6324 6.07209 12.3205 6.38715 12.8025 6.90432C13.2968 7.43702 13.5528 8.09928 13.5331 8.91804C13.53 9.05547 13.5815 9.18854 13.6765 9.28795C13.7714 9.38737 13.902 9.445 14.0394 9.44816C14.1769 9.45132 14.3099 9.39975 14.4093 9.30481C14.5087 9.20986 14.5664 9.07931 14.5695 8.94188C14.5944 7.86713 14.2483 6.93955 13.5622 6.19956V6.19749C12.8605 5.44506 11.8977 5.04709 10.739 4.96936L10.7214 4.96729L10.6696 4.96832Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#871A93\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M10.6498 6.70464C10.5805 6.69852 10.5106 6.70644 10.4444 6.72792C10.3781 6.7494 10.3169 6.78401 10.2644 6.82967C10.2118 6.87533 10.169 6.93112 10.1385 6.99369C10.108 7.05627 10.0904 7.12435 10.0868 7.19387C10.0831 7.2634 10.0936 7.33294 10.1174 7.39835C10.1413 7.46375 10.178 7.52368 10.2256 7.57456C10.2731 7.62544 10.3304 7.66622 10.394 7.69446C10.4576 7.72271 10.5263 7.73785 10.5959 7.73897C11.0291 7.76177 11.3058 7.89236 11.48 8.06751C11.6551 8.24369 11.7857 8.52663 11.8095 8.96917C11.8108 9.03872 11.8261 9.10729 11.8545 9.1708C11.8828 9.23431 11.9237 9.29146 11.9746 9.33885C12.0255 9.38624 12.0854 9.42289 12.1508 9.44663C12.2162 9.47036 12.2857 9.4807 12.3551 9.47701C12.4246 9.47332 12.4926 9.45569 12.5551 9.42516C12.6176 9.39463 12.6733 9.35184 12.7189 9.29932C12.7645 9.24681 12.7991 9.18565 12.8205 9.11949C12.842 9.05333 12.8499 8.98353 12.8439 8.91424C12.8107 8.29241 12.6159 7.74311 12.2168 7.33892C11.8158 6.93472 11.2696 6.73781 10.6498 6.70464Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#871A93\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M4.99214 0.55289C8.29003 -0.184297 11.71 -0.184297 15.0079 0.55289L15.3592 0.63062C16.3233 0.846139 17.2087 1.32472 17.9171 2.0132C18.6256 2.70167 19.1292 3.57308 19.3722 4.53059C20.2093 7.82933 20.2093 11.2849 19.3722 14.5837C19.1292 15.5412 18.6256 16.4126 17.9171 17.101C17.2087 17.7895 16.3233 18.2681 15.3592 18.4836L15.0069 18.5614C12.9413 19.0233 10.8219 19.1973 8.70866 19.0785L5.9591 21.5389C5.85544 21.6317 5.72876 21.695 5.5923 21.7222C5.45584 21.7493 5.31459 21.7394 5.1833 21.6933C5.052 21.6472 4.93548 21.5668 4.84589 21.4603C4.7563 21.3539 4.69692 21.2253 4.67396 21.0881L4.21898 18.3707C3.34652 18.0992 2.55827 17.6085 1.92955 16.9455C1.30083 16.2825 0.852653 15.4693 0.627861 14.5837C-0.209287 11.2849 -0.209287 7.82933 0.627861 4.53059C0.870813 3.57308 1.37448 2.70167 2.0829 2.0132C2.79131 1.32472 3.67674 0.846139 4.6408 0.63062L4.99214 0.55289ZM14.669 2.06914C11.5943 1.38181 8.40575 1.38181 5.33104 2.06914L4.97866 2.14791C4.29539 2.30094 3.66789 2.64036 3.16587 3.12848C2.66385 3.6166 2.30694 4.23431 2.13478 4.91302C1.36133 7.96078 1.36133 11.1535 2.13478 14.2012C2.30702 14.8801 2.66409 15.4979 3.1663 15.986C3.66852 16.4741 4.29623 16.8135 4.9797 16.9663L5.07298 16.9871C5.22387 17.0208 5.36127 17.0988 5.46761 17.211C5.57395 17.3233 5.64439 17.4647 5.66994 17.6172L5.97464 19.4392L7.91478 17.7032C7.99226 17.6337 8.08291 17.5804 8.18137 17.5466C8.27982 17.5128 8.38406 17.4991 8.48791 17.5063C10.5597 17.6533 12.6419 17.4979 14.669 17.0451L15.0203 16.9663C15.7038 16.8135 16.3315 16.4741 16.8337 15.986C17.3359 15.4979 17.693 14.8801 17.8652 14.2012C18.6384 11.1542 18.6384 7.96107 17.8652 4.91302C17.693 4.23418 17.3359 3.61637 16.8337 3.12824C16.3315 2.64011 15.7038 2.30077 15.0203 2.14791L14.669 2.06914Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#871A93\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tViber
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"viber://add?number=";
            // line 207
            echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_viber", [], "any", false, false, false, 207);
            echo "\" class=\"d-inline-flex align-items-center d-xl-none\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ds-footer-item-icon  me-2\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"22\" viewBox=\"0 0 20 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M5.92284 4.50942C5.73022 4.48139 5.53381 4.52016 5.3663 4.61928H5.35179C4.96314 4.84729 4.61283 5.13437 4.31435 5.47224C4.06562 5.75932 3.93088 6.04951 3.89565 6.32934C3.87492 6.49516 3.88943 6.66306 3.93814 6.82163L3.95679 6.83199C4.23662 7.65386 4.60143 8.44463 5.04709 9.18876C5.62172 10.234 6.32886 11.2006 7.15097 12.0648L7.17585 12.1L7.21523 12.129L7.23907 12.157L7.26809 12.1819C8.13527 13.0065 9.10419 13.717 10.1514 14.2961C11.3484 14.948 12.0749 15.2558 12.5112 15.3844V15.3906C12.6387 15.43 12.7548 15.4476 12.8719 15.4476C13.2435 15.4201 13.5952 15.2691 13.871 15.0185C14.2078 14.72 14.4928 14.3687 14.7146 13.978V13.9707C14.9229 13.5769 14.8525 13.2058 14.5519 12.954C13.9482 12.4265 13.2954 11.958 12.6024 11.5549C12.1381 11.303 11.6666 11.4554 11.4759 11.7103L11.0686 12.2244C10.8592 12.4793 10.4799 12.4441 10.4799 12.4441L10.4695 12.4503C7.63912 11.7279 6.88358 8.8623 6.88358 8.8623C6.88358 8.8623 6.84835 8.47261 7.11056 8.27362L7.62046 7.86321C7.86505 7.66422 8.03502 7.1937 7.77281 6.72939C7.37236 6.03579 6.90477 5.38319 6.37679 4.78096C6.26163 4.63923 6.10013 4.5427 5.92077 4.50839L5.92284 4.50942ZM10.7058 3.26367C10.5684 3.26367 10.4366 3.31827 10.3394 3.41545C10.2422 3.51263 10.1876 3.64444 10.1876 3.78187C10.1876 3.91931 10.2422 4.05111 10.3394 4.14829C10.4366 4.24547 10.5684 4.30007 10.7058 4.30007C12.0158 4.30007 13.1041 4.7281 13.9653 5.54893C14.4078 5.99769 14.753 6.52937 14.9789 7.11182C15.2059 7.69531 15.3095 8.31819 15.2826 8.9421C15.2768 9.07954 15.3259 9.21364 15.419 9.3149C15.512 9.41616 15.6416 9.47629 15.779 9.48207C15.9164 9.48784 16.0505 9.43878 16.1518 9.34568C16.2531 9.25258 16.3132 9.12306 16.319 8.98563C16.3511 8.21816 16.2237 7.45237 15.9448 6.73664C15.6647 6.01752 15.24 5.36354 14.697 4.81516L14.6866 4.8048C13.6181 3.78394 12.2666 3.26367 10.7058 3.26367Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#871A93\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M10.6696 4.96832C10.5321 4.96832 10.4003 5.02292 10.3031 5.1201C10.206 5.21728 10.1514 5.34909 10.1514 5.48652C10.1514 5.62396 10.206 5.75576 10.3031 5.85294C10.4003 5.95012 10.5321 6.00472 10.6696 6.00472H10.6872C11.6324 6.07209 12.3205 6.38715 12.8025 6.90432C13.2968 7.43702 13.5528 8.09928 13.5331 8.91804C13.53 9.05547 13.5815 9.18854 13.6765 9.28795C13.7714 9.38737 13.902 9.445 14.0394 9.44816C14.1769 9.45132 14.3099 9.39975 14.4093 9.30481C14.5087 9.20986 14.5664 9.07931 14.5695 8.94188C14.5944 7.86713 14.2483 6.93955 13.5622 6.19956V6.19749C12.8605 5.44506 11.8977 5.04709 10.739 4.96936L10.7214 4.96729L10.6696 4.96832Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#871A93\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M10.6498 6.70464C10.5805 6.69852 10.5106 6.70644 10.4444 6.72792C10.3781 6.7494 10.3169 6.78401 10.2644 6.82967C10.2118 6.87533 10.169 6.93112 10.1385 6.99369C10.108 7.05627 10.0904 7.12435 10.0868 7.19387C10.0831 7.2634 10.0936 7.33294 10.1174 7.39835C10.1413 7.46375 10.178 7.52368 10.2256 7.57456C10.2731 7.62544 10.3304 7.66622 10.394 7.69446C10.4576 7.72271 10.5263 7.73785 10.5959 7.73897C11.0291 7.76177 11.3058 7.89236 11.48 8.06751C11.6551 8.24369 11.7857 8.52663 11.8095 8.96917C11.8108 9.03872 11.8261 9.10729 11.8545 9.1708C11.8828 9.23431 11.9237 9.29146 11.9746 9.33885C12.0255 9.38624 12.0854 9.42289 12.1508 9.44663C12.2162 9.47036 12.2857 9.4807 12.3551 9.47701C12.4246 9.47332 12.4926 9.45569 12.5551 9.42516C12.6176 9.39463 12.6733 9.35184 12.7189 9.29932C12.7645 9.24681 12.7991 9.18565 12.8205 9.11949C12.842 9.05333 12.8499 8.98353 12.8439 8.91424C12.8107 8.29241 12.6159 7.74311 12.2168 7.33892C11.8158 6.93472 11.2696 6.73781 10.6498 6.70464Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#871A93\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M4.99214 0.55289C8.29003 -0.184297 11.71 -0.184297 15.0079 0.55289L15.3592 0.63062C16.3233 0.846139 17.2087 1.32472 17.9171 2.0132C18.6256 2.70167 19.1292 3.57308 19.3722 4.53059C20.2093 7.82933 20.2093 11.2849 19.3722 14.5837C19.1292 15.5412 18.6256 16.4126 17.9171 17.101C17.2087 17.7895 16.3233 18.2681 15.3592 18.4836L15.0069 18.5614C12.9413 19.0233 10.8219 19.1973 8.70866 19.0785L5.9591 21.5389C5.85544 21.6317 5.72876 21.695 5.5923 21.7222C5.45584 21.7493 5.31459 21.7394 5.1833 21.6933C5.052 21.6472 4.93548 21.5668 4.84589 21.4603C4.7563 21.3539 4.69692 21.2253 4.67396 21.0881L4.21898 18.3707C3.34652 18.0992 2.55827 17.6085 1.92955 16.9455C1.30083 16.2825 0.852653 15.4693 0.627861 14.5837C-0.209287 11.2849 -0.209287 7.82933 0.627861 4.53059C0.870813 3.57308 1.37448 2.70167 2.0829 2.0132C2.79131 1.32472 3.67674 0.846139 4.6408 0.63062L4.99214 0.55289ZM14.669 2.06914C11.5943 1.38181 8.40575 1.38181 5.33104 2.06914L4.97866 2.14791C4.29539 2.30094 3.66789 2.64036 3.16587 3.12848C2.66385 3.6166 2.30694 4.23431 2.13478 4.91302C1.36133 7.96078 1.36133 11.1535 2.13478 14.2012C2.30702 14.8801 2.66409 15.4979 3.1663 15.986C3.66852 16.4741 4.29623 16.8135 4.9797 16.9663L5.07298 16.9871C5.22387 17.0208 5.36127 17.0988 5.46761 17.211C5.57395 17.3233 5.64439 17.4647 5.66994 17.6172L5.97464 19.4392L7.91478 17.7032C7.99226 17.6337 8.08291 17.5804 8.18137 17.5466C8.27982 17.5128 8.38406 17.4991 8.48791 17.5063C10.5597 17.6533 12.6419 17.4979 14.669 17.0451L15.0203 16.9663C15.7038 16.8135 16.3315 16.4741 16.8337 15.986C17.3359 15.4979 17.693 14.8801 17.8652 14.2012C18.6384 11.1542 18.6384 7.96107 17.8652 4.91302C17.693 4.23418 17.3359 3.61637 16.8337 3.12824C16.3315 2.64011 15.7038 2.30077 15.0203 2.14791L14.669 2.06914Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#871A93\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tViber
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 230
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_whatsapp", [], "any", true, true, false, 230) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 230))) {
            // line 231
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=";
            // line 232
            echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 232);
            echo "\" class=\"d-inline-flex align-items-center\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ds-footer-item-icon  me-2\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M10.1714 0.737305C4.748 0.737305 0.342769 5.14255 0.342769 10.5659C0.342769 12.2192 0.766167 13.8421 1.55246 15.2938L0 20.7373L5.44357 19.1849C6.89518 19.9813 8.51816 20.3946 10.1714 20.3946C15.5948 20.3946 20 15.9893 20 10.5659C20 5.14255 15.5948 0.737305 10.1714 0.737305ZM10.1714 18.8825C8.67945 18.8825 7.21774 18.4792 5.92742 17.7232L5.64519 17.5518L2.19763 18.5397L3.18551 15.0922L3.02419 14.8099C2.25806 13.5297 1.85486 12.0579 1.85486 10.5659C1.85486 5.97924 5.5847 2.2494 10.1714 2.2494C14.7581 2.2494 18.4879 5.97924 18.4879 10.5659C18.4879 15.1526 14.7581 18.8825 10.1714 18.8825ZM15.1814 12.8442C15.2419 12.945 15.242 13.449 15.0403 14.0337C14.8287 14.6284 13.8206 15.1728 13.3669 15.2232C12.9133 15.2736 12.4899 15.4349 10.3931 14.6083C7.87297 13.6002 6.27019 10.9994 6.14922 10.8381C6.02825 10.6768 5.14116 9.48731 5.14116 8.25747C5.14116 7.02764 5.77622 6.43287 6.00808 6.17077C6.23993 5.91876 6.51215 5.85828 6.67343 5.85828C6.84481 5.85828 7.00608 5.85827 7.15729 5.86835C7.32866 5.86835 7.53026 5.86835 7.71171 6.29174C7.93348 6.78569 8.40727 8.01553 8.46776 8.12642C8.52824 8.24739 8.56858 8.39859 8.48794 8.55988C8.39721 8.72117 8.35689 8.83206 8.23592 8.97319C8.11495 9.11432 7.97383 9.29578 7.86294 9.40667C7.73189 9.52764 7.61088 9.65868 7.75201 9.9107C7.90322 10.1526 8.39716 10.9792 9.13305 11.6345C10.0806 12.4913 10.877 12.7534 11.1291 12.8744C11.371 12.9954 11.5222 12.9752 11.6633 12.8139C11.8145 12.6526 12.2883 12.0881 12.4496 11.8361C12.6109 11.5942 12.7722 11.6345 13.004 11.7151C13.2359 11.7958 14.4456 12.4107 14.6976 12.5317C14.9395 12.6627 15.1109 12.7232 15.1714 12.824L15.1814 12.8442Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#43A047\" />
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tWhatsapp
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 244
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_messenger", [], "any", true, true, false, 244) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_messenger", [], "any", false, false, false, 244))) {
            // line 245
            echo "                            <li>
                                <a href=\"https://m.me/";
            // line 246
            echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_messenger", [], "any", false, false, false, 246);
            echo "\" class=\"d-inline-flex align-items-center\" target=\"_blank\" rel=\"noopener noreferrer\">
                                    <span class=\"ds-footer-item-icon  me-2\">
                                        <svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M10 0.747555C4.29744 0.747555 0 4.93217 0 10.4706C0 13.2911 1.11796 15.845 3.14873 17.6399L3.2 19.2809C3.23076 20.0912 3.89743 20.7373 4.70769 20.7373C4.71795 20.7373 4.73847 20.7373 4.74872 20.7373C4.94359 20.7373 5.1282 20.686 5.31281 20.6142L7.12822 19.804C8.0513 20.0604 9.02564 20.1835 10 20.1835C15.7026 20.1835 20 15.9988 20 10.4604C20 4.92192 15.7026 0.737305 10 0.737305V0.747555ZM10 18.6553C9.15897 18.6553 8.3282 18.5424 7.5282 18.327C7.18974 18.2347 6.83075 18.2655 6.52306 18.4091L4.73846 19.2399L4.68719 17.6091C4.68719 17.1988 4.49229 16.7988 4.1846 16.5219C2.48204 14.9937 1.53846 12.8501 1.53846 10.4706C1.53846 5.80396 5.17949 2.28602 10 2.28602C14.8205 2.28602 18.4615 5.80396 18.4615 10.4706C18.4615 15.1373 14.8205 18.6553 10 18.6553ZM15.5692 8.35781L12.841 12.7373C12.4308 13.3937 11.5692 13.5988 10.9231 13.1783C10.8923 13.1578 10.8615 13.1373 10.8308 13.1168L8.66668 11.4655C8.47181 11.3117 8.19486 11.3117 7.99999 11.4655L5.07694 13.7219C4.68719 14.0193 4.17435 13.5476 4.44101 13.1271L7.16922 8.73729C7.57948 8.08088 8.44101 7.87576 9.08716 8.29627C9.11793 8.31679 9.14873 8.3373 9.1795 8.35781L11.3436 10.0091C11.5385 10.1629 11.8154 10.1629 12.0102 10.0091L14.9333 7.75269C15.3231 7.45525 15.8359 7.92705 15.5692 8.34756V8.35781Z\"
                                                fill=\"#0084FF\" />
                                        </svg>
                                    </span>
                                    Messenger
                                </a>
                            </li>
\t\t\t\t\t\t\t";
        }
        // line 258
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_teams", [], "any", true, true, false, 258) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_teams", [], "any", false, false, false, 258))) {
            // line 259
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://teams.microsoft.com/l/chat/0/0?users=";
            // line 260
            echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_teams", [], "any", false, false, false, 260);
            echo "\" class=\"d-inline-flex align-items-center\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ds-footer-item-icon me-2\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.8 8.2V6.4C15.8 3.5 13.5 1.2 10.6 1.2H6.4C3.5 1.2 1.2 3.5 1.2 6.4V10.6C1.2 13.5 3.5 15.8 6.4 15.8H8.2V17.6C8.2 18.9 9.3 20 10.6 20H17.6C18.9 20 20 18.9 20 17.6V10.6C20 9.3 18.9 8.2 17.6 8.2H15.8ZM6.4 13.6C4.7 13.6 3.4 12.3 3.4 10.6V6.4C3.4 4.7 4.7 3.4 6.4 3.4H10.6C12.3 3.4 13.6 4.7 13.6 6.4V8.2H10.6C9.3 8.2 8.2 9.3 8.2 10.6V13.6H6.4ZM17.8 17.6C17.8 17.7 17.7 17.8 17.6 17.8H10.6C10.5 17.8 10.4 17.7 10.4 17.6V10.6C10.4 10.5 10.5 10.4 10.6 10.4H17.6C17.7 10.4 17.8 10.5 17.8 10.6V17.6Z\" fill=\"#6264A7\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tMicrosoft Teams
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 270
        echo "                        </ul>
                    </div>
                </div>
            </div>
\t\t\t<div class=\"col-md-6 col-lg-12 mt-md-4 pt-md-4 ds-footer-bordered order-3 d-flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center\">
\t\t\t\t<div class=\"ds-footer-payments d-flex align-items-center justify-content-center\">\t\t\t\t
\t\t\t\t\t";
        // line 276
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 276), "privat24", [], "any", true, true, false, 276) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 276), "privat24", [], "any", false, false, false, 276))) {
            // line 277
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 278
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/privat24.svg\" alt=\"Privat 24\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 281
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 281), "monoplata", [], "any", true, true, false, 281) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 281), "monoplata", [], "any", false, false, false, 281))) {
            // line 282
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 283
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/monoplata.svg\" alt=\"Mono plata\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 285
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 286
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 286), "wayforpay", [], "any", true, true, false, 286) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 286), "wayforpay", [], "any", false, false, false, 286))) {
            // line 287
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 288
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/wayforpay.svg\" alt=\"Wayforpay\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 291
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 291), "lp", [], "any", true, true, false, 291) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 291), "lp", [], "any", false, false, false, 291))) {
            // line 292
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 293
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/liqpay.svg\" alt=\"LiqPay\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 296
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 296), "visa", [], "any", true, true, false, 296) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 296), "visa", [], "any", false, false, false, 296))) {
            // line 297
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 298
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/visa.svg\" alt=\"Visa\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 301
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 301), "mc", [], "any", true, true, false, 301) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 301), "mc", [], "any", false, false, false, 301))) {
            // line 302
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 303
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/mastercard.svg\" alt=\"Mastercard\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 306
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 306), "maestro", [], "any", true, true, false, 306) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 306), "maestro", [], "any", false, false, false, 306))) {
            // line 307
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 308
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/maestro.svg\" alt=\"Maestro\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 311
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 311), "pp", [], "any", true, true, false, 311) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 311), "pp", [], "any", false, false, false, 311))) {
            // line 312
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 313
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/paypal.svg\" alt=\"PayPal\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 316
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 316), "skrill", [], "any", true, true, false, 316) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 316), "skrill", [], "any", false, false, false, 316))) {
            // line 317
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 318
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/skrill.svg\" alt=\"Skrill\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 321
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, true, false, 321), "interkassa", [], "any", true, true, false, 321) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 321), "interkassa", [], "any", false, false, false, 321))) {
            // line 322
            echo "\t\t\t\t\t\t<div class=\"ds-footer-payments-item br-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 323
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/images/payments/interkassa.svg\" alt=\"Interkassa\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 326
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oct_customer_payments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_customer"]) {
            // line 327
            echo "\t\t\t\t\t<div class=\"ds-footer-payments-item ds-footer-payments-item-custom br-4\">
\t\t\t\t\t\t<img src=\"";
            // line 328
            echo $context["payment_customer"];
            echo "\" alt=\"Payment icon\" width=\"50\" height=\"30\" loading=\"lazy\">
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                </div>
                <div class=\"ds-footer-copyrights fsz-14 light-text text-center pt-4 pt-lg-0\">
                    ";
        // line 333
        echo ($context["powered"] ?? null);
        echo "
                </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 339
        if ((array_key_exists("oct_feedback_data", $context) && ($context["oct_feedback_data"] ?? null))) {
            // line 340
            echo "\t<div id=\"ds_fixed_contact_substrate\"></div>
\t<div id=\"ds_fixed_contact_button\" class=\"d-flex align-items-center justify-content-center ds_fixed_contact_button\">
\t\t<div class=\"ds-fixed-contact-pulsation\"></div>
\t\t<div class=\"ds-fixed-contact-icon text-center align-items-center justify-content-center\">
\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t<span class=\"ds-fixed-contact-text d-none\">";
            // line 345
            echo ($context["oct_feedback_text"] ?? null);
            echo "</span>
\t\t</div>
\t\t<div class=\"ds-fixed-contact-dropdown d-flex flex-column align-items-start\">
\t\t\t";
            // line 348
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_messenger", [], "any", true, true, false, 348) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_messenger", [], "any", false, false, false, 348)) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_messenger", [], "any", true, true, false, 348) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_messenger", [], "any", false, false, false, 348)))) {
                // line 349
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://m.me/";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_messenger", [], "any", false, false, false, 349);
                echo "\" target=\"_blank\" class=\"ds-fixed-contact-item d-flex align-items-center\"><span class=\"ds-fixed-contact-item-icon ds-fixed-contact-messenger d-flex align-items-center justify-content-center\"><i class=\"fab fa-facebook-messenger\"></i></span><span>Messenger</span></a>
\t\t\t";
            }
            // line 351
            echo "
\t\t\t";
            // line 352
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_viber", [], "any", true, true, false, 352) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_viber", [], "any", false, false, false, 352)) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_viber", [], "any", true, true, false, 352) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_viber", [], "any", false, false, false, 352)))) {
                // line 353
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"viber://chat?number=+";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_viber", [], "any", false, false, false, 353);
                echo "\" target=\"_blank\" class=\"ds-fixed-contact-item d-none d-xl-flex align-items-center ds-fixed-contact-viber-desktop\"><span class=\"ds-fixed-contact-item-icon ds-fixed-contact-viber d-flex align-items-center justify-content-center\"><i class=\"fab fa-viber\"></i></span><span>Viber</span></a>
\t\t\t<a rel=\"noopener noreferrer\" href=\"viber://add?number=";
                // line 354
                echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_viber", [], "any", false, false, false, 354);
                echo "\" target=\"_blank\" class=\"ds-fixed-contact-item d-flex d-xl-none align-items-center ds-fixed-contact-viber-mobile\"><span class=\"ds-fixed-contact-item-icon ds-fixed-contact-viber d-flex align-items-center justify-content-center\"><i class=\"fab fa-viber\"></i></span><span>Viber</span></a>
\t\t\t";
            }
            // line 356
            echo "
\t\t\t";
            // line 357
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_telegram", [], "any", true, true, false, 357) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_telegram", [], "any", false, false, false, 357)) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_telegram", [], "any", true, true, false, 357) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_telegram", [], "any", false, false, false, 357)))) {
                // line 358
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://t.me/";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_telegram", [], "any", false, false, false, 358);
                echo "\" target=\"_blank\" class=\"ds-fixed-contact-item d-flex align-items-center\"><span class=\"ds-fixed-contact-item-icon ds-fixed-contact-telegram d-flex align-items-center justify-content-center\"><i class=\"fab fa-telegram\"></i></span><span>Telegram</span></a>
\t\t\t";
            }
            // line 360
            echo "
\t\t\t";
            // line 361
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_teams", [], "any", true, true, false, 361) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_teams", [], "any", false, false, false, 361)) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_teams", [], "any", true, true, false, 361) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_teams", [], "any", false, false, false, 361)))) {
                // line 362
                echo "\t\t\t\t<a rel=\"noopener noreferrer\" href=\"https://teams.microsoft.com/l/chat/0/0?users=";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_teams", [], "any", false, false, false, 362);
                echo "\" class=\"ds-fixed-contact-item d-flex align-items-center\" target=\"_blank\">
\t\t\t\t\t<span class=\"ds-fixed-contact-item-icon ds-fixed-contact-teams d-flex align-items-center justify-content-center\" style=\"background-color: #6264A7;\">
\t\t\t\t\t\t<svg width=\"16\" height=\"16\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M15.8 8.2V6.4C15.8 3.5 13.5 1.2 10.6 1.2H6.4C3.5 1.2 1.2 3.5 1.2 6.4V10.6C1.2 13.5 3.5 15.8 6.4 15.8H8.2V17.6C8.2 18.9 9.3 20 10.6 20H17.6C18.9 20 20 18.9 20 17.6V10.6C20 9.3 18.9 8.2 17.6 8.2H15.8ZM6.4 13.6C4.7 13.6 3.4 12.3 3.4 10.6V6.4C3.4 4.7 4.7 3.4 6.4 3.4H10.6C12.3 3.4 13.6 4.7 13.6 6.4V8.2H10.6C9.3 8.2 8.2 9.3 8.2 10.6V13.6H6.4ZM17.8 17.6C17.8 17.7 17.7 17.8 17.6 17.8H10.6C10.5 17.8 10.4 17.7 10.4 17.6V10.6C10.4 10.5 10.5 10.4 10.6 10.4H17.6C17.7 10.4 17.8 10.5 17.8 10.6V17.6Z\" fill=\"white\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span>Microsoft Teams</span>
\t\t\t\t</a>
\t\t\t";
            }
            // line 371
            echo "
\t\t\t";
            // line 372
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_whatsapp", [], "any", true, true, false, 372) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_whatsapp", [], "any", false, false, false, 372)) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_whatsapp", [], "any", true, true, false, 372) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 372)))) {
                // line 373
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://api.whatsapp.com/send?phone=";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 373);
                echo "\" target=\"_blank\" class=\"ds-fixed-contact-item d-flex align-items-center\"><span class=\"ds-fixed-contact-item-icon ds-fixed-contact-whatsapp d-flex align-items-center justify-content-center\"><i class=\"fab fa-whatsapp\"></i></span><span>WhatsApp</span></a>
\t\t\t";
            }
            // line 375
            echo "
\t\t\t";
            // line 376
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_email", [], "any", true, true, false, 376) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_email", [], "any", false, false, false, 376)) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_email", [], "any", true, true, false, 376) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_email", [], "any", false, false, false, 376)))) {
                // line 377
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"mailto:";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_email", [], "any", false, false, false, 377);
                echo "\" class=\"ds-fixed-contact-item d-flex align-items-center\"><span class=\"ds-fixed-contact-item-icon ds-fixed-contact-email d-flex align-items-center justify-content-center\"><i class=\"far fa-envelope\"></i></span><span>";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_email", [], "any", false, false, false, 377);
                echo "</span></a>
\t\t\t";
            }
            // line 379
            echo "
\t\t\t";
            // line 380
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_callback", [], "any", true, true, false, 380) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_callback", [], "any", false, false, false, 380)) && (array_key_exists("oct_popup_call_phone_status", $context) && ($context["oct_popup_call_phone_status"] ?? null)))) {
                // line 381
                echo "\t\t\t<div id=\"uptocall-mini\" onclick=\"octPopupCallPhone()\" class=\"ds-fixed-contact-item d-flex align-items-center\"><span class=\"ds-fixed-contact-item-icon ds-fixed-contact-call d-flex align-items-center justify-content-center\"><i class=\"fas fa-phone\"></i></span><span>";
                echo ($context["oct_call_phone"] ?? null);
                echo "</span></div>
\t\t\t";
            }
            // line 383
            echo "
\t\t\t";
            // line 384
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_contact_link", [], "any", true, true, false, 384) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_contact_link", [], "any", false, false, false, 384))) {
                // line 385
                echo "\t\t\t<a href=\"";
                echo ($context["contact"] ?? null);
                echo "\" class=\"ds-fixed-contact-item d-flex align-items-center\"><span class=\"ds-fixed-contact-item-icon ds-fixed-contact-contacts d-flex align-items-center justify-content-center\"><i class=\"fas fa-address-book\"></i></span><span>";
                echo ($context["oct_feedback_text"] ?? null);
                echo "</span></a>
\t\t\t";
            }
            // line 387
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 390
        echo "</footer>
";
        // line 391
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "footer_totop", [], "any", true, true, false, 391) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "footer_totop", [], "any", false, false, false, 391))) {
            // line 392
            echo "\t<button id=\"back-top\" class=\"rounded-circle p-0 m-0\" type=\"button\">
\t\t<svg width=\"48\" height=\"48\">
\t\t\t<circle cx=\"24\" cy=\"24\" r=\"22\" stroke=\"#ddd\" stroke-width=\"3\" fill=\"transparent\" />
\t\t\t<circle class=\"progress-ring__circle\" cx=\"24\" cy=\"24\" r=\"22\" stroke=\"var(--ds-primary-color)\" stroke-width=\"3\" fill=\"transparent\" stroke-dasharray=\"138.2\" stroke-dashoffset=\"138.2\" />
\t\t</svg>
\t\t<i class=\"fas fa-chevron-up fsz-12\"></i>
\t</button>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\tscrollToTopButton();
\t\t});
\t</script>
";
        }
        // line 405
        echo "<div id=\"overlay\"></div>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\tconst ratingContainers = document.querySelectorAll('.ds-module-rating-stars');

\t\tratingContainers.forEach(container => {
\t\t\tconst rating = parseFloat(container.getAttribute('data-rating'));
\t\t\tupdateRating(container, rating);
\t\t});
\t});
</script>
";
        // line 416
        if ((array_key_exists("oct_subscribe_status", $context) && ($context["oct_subscribe_status"] ?? null))) {
            // line 417
            echo "<script>
\$(function() {
\tif (getOCTCookie('oct_subscribe') == 'undefined') {
\t\tsetTimeout(function(){
\t\t\toctPopupSubscribe();
\t\t}, ";
            // line 422
            echo ((twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "seconds", [], "any", false, false, false, 422)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "seconds", [], "any", false, false, false, 422)) : ("10000"));
            echo ");

\t\tconst date = new Date('";
            // line 424
            echo ($context["oct_subscribe_day_now"] ?? null);
            echo "'.replace(/-/g, \"/\"));
\t\tdate.setTime(date.getTime() + (";
            // line 425
            echo ((twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "expire", [], "any", false, false, false, 425)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "expire", [], "any", false, false, false, 425)) : ("1"));
            echo " * 24 * 60 * 60 * 1000));
\t\tdocument.cookie = 'oct_subscribe=1; path=/; expires=' + date.toUTCString();
\t}
});
</script>
";
        }
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 432
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        echo "<div class=\"modal-holder\"></div>
";
        // line 435
        if ((array_key_exists("oct_analytics_targets", $context) &&  !twig_test_empty(($context["oct_analytics_targets"] ?? null)))) {
            // line 436
            echo "\t<script>
\t";
            // line 437
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_analytics_targets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
                // line 438
                echo "\t \t\$('body').on('click', '";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["target"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["atribute"] ?? null) : null);
                echo "', function() {
\t\t    ";
                // line 439
                if ((twig_get_attribute($this->env, $this->source, $context["target"], "google", [], "array", true, true, false, 439) && (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["target"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["google"] ?? null) : null))) {
                    // line 440
                    echo "\t\t\tgtag('event', '";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["target"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["action"] ?? null) : null);
                    echo "', {
\t\t\t  'event_category' : '";
                    // line 441
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["target"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["category"] ?? null) : null);
                    echo "'
\t\t\t});
\t\t    ";
                }
                // line 444
                echo "\t\t});
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 446
            echo "\t</script>
";
        }
        // line 448
        if (((array_key_exists("oct_policy_value", $context) &&  !twig_test_empty(($context["oct_policy_value"] ?? null))) && ($context["oct_policy_value"] ?? null))) {
            // line 449
            echo "<script>
function get_oct_policy() {
\t\$.ajax({
\t\turl: \"index.php?route=octemplates/main/oct_functions/getOctPolicy\",
\t\ttype: \"post\",
\t\tdataType: \"json\",
\t\tcache: false,
\t\tsuccess: function(t) {
\t\t\tif (t['text_oct_policy']) {
\t\t\t\tvar html = '<div id=\"oct-policy\" class=\"fixed-bottom py-4\"><div class=\"container\"><div class=\"row\"><div class=\"col-lg-12\"><div class=\"content-block-p24 d-flex align-items-center justify-content-between flex-column flex-md-row\"><div class=\"oct-policy-text dark-text fsz-14 mb-3 mb-md-0 me-md-4\">'+ t['text_oct_policy'] +'</div><button type=\"button\" id=\"oct-policy-btn\" class=\"button button-outline button-outline-primary button-small py-2 px-3 br-4\">'+ t['oct_policy_accept'] +'</button></div></div></div></div></div>';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#oct-policy-btn').on('click', function () {
\t\t\t\t\t\$('#oct-policy').addClass('hidden');
\t\t\t\t\tconst date = new Date(t['oct_policy_day_now'].replace(/-/g, \"/\"));
\t\t\t\t\tdate.setTime(date.getTime() + (t['oct_max_day'] * 24 * 60 * 60 * 1000));
\t\t\t\t\tdocument.cookie = t['oct_policy_value']+'=1; path=/; expires=' + date.toUTCString();
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(e, t, i) {
\t\t\tconsole.log(\"error get_oct_policy\");
\t\t}
\t});
}

\$(function() {
\tif (getOCTCookie('";
            // line 477
            echo ($context["oct_policy_value"] ?? null);
            echo "') == 'undefined') {
\t\tget_oct_policy();
\t}
});
</script>
";
        }
        // line 483
        if ((array_key_exists("oct_jscode", $context) && ($context["oct_jscode"] ?? null))) {
            // line 484
            echo "\t<script>
\t";
            // line 485
            echo ($context["oct_jscode"] ?? null);
            echo "
\t</script>
";
        }
        // line 488
        echo "<script async src=\"";
        echo ($context["base"] ?? null);
        echo "catalog/view/theme/oct_deals/js/oct-fonts.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 489
        echo ($context["base"] ?? null);
        echo "catalog/view/theme/oct_deals/stylesheet/all.css\"";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "minify", [], "any", true, true, false, 489)) {
            echo " media=\"print\" onload=\"this.media='all'\"";
        } else {
            echo " media=\"all\"";
        }
        echo ">
";
        // line 490
        if (($context["footer_swiper"] ?? null)) {
            // line 491
            echo "<script src=\"";
            echo ($context["base"] ?? null);
            echo "catalog/view/theme/oct_deals/js/swiper/swiper.min.js\" defer></script>
";
        }
        // line 493
        if (($context["remarketing_footer"] ?? null)) {
            echo ($context["remarketing_footer"] ?? null);
        }
        // line 494
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "oct_deals/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1027 => 494,  1023 => 493,  1017 => 491,  1015 => 490,  1005 => 489,  1000 => 488,  994 => 485,  991 => 484,  989 => 483,  980 => 477,  950 => 449,  948 => 448,  944 => 446,  937 => 444,  931 => 441,  926 => 440,  924 => 439,  919 => 438,  915 => 437,  912 => 436,  910 => 435,  907 => 434,  898 => 432,  894 => 431,  885 => 425,  881 => 424,  876 => 422,  869 => 417,  867 => 416,  854 => 405,  839 => 392,  837 => 391,  834 => 390,  829 => 387,  821 => 385,  819 => 384,  816 => 383,  810 => 381,  808 => 380,  805 => 379,  797 => 377,  795 => 376,  792 => 375,  786 => 373,  784 => 372,  781 => 371,  768 => 362,  766 => 361,  763 => 360,  757 => 358,  755 => 357,  752 => 356,  747 => 354,  742 => 353,  740 => 352,  737 => 351,  731 => 349,  729 => 348,  723 => 345,  716 => 340,  714 => 339,  705 => 333,  701 => 331,  692 => 328,  689 => 327,  684 => 326,  678 => 323,  675 => 322,  672 => 321,  666 => 318,  663 => 317,  660 => 316,  654 => 313,  651 => 312,  648 => 311,  642 => 308,  639 => 307,  636 => 306,  630 => 303,  627 => 302,  624 => 301,  618 => 298,  615 => 297,  612 => 296,  606 => 293,  603 => 292,  600 => 291,  594 => 288,  591 => 287,  589 => 286,  586 => 285,  580 => 283,  577 => 282,  574 => 281,  568 => 278,  565 => 277,  563 => 276,  555 => 270,  542 => 260,  539 => 259,  536 => 258,  521 => 246,  518 => 245,  515 => 244,  500 => 232,  497 => 231,  494 => 230,  468 => 207,  444 => 186,  441 => 185,  438 => 184,  423 => 172,  420 => 171,  418 => 170,  415 => 169,  411 => 167,  402 => 164,  398 => 163,  391 => 162,  387 => 161,  384 => 160,  382 => 159,  376 => 156,  362 => 145,  350 => 135,  345 => 132,  332 => 129,  329 => 128,  325 => 127,  319 => 124,  309 => 116,  306 => 115,  301 => 112,  288 => 109,  285 => 108,  281 => 107,  275 => 104,  265 => 96,  263 => 95,  253 => 88,  248 => 87,  240 => 84,  229 => 75,  226 => 74,  220 => 71,  215 => 69,  206 => 62,  204 => 61,  201 => 60,  197 => 58,  192 => 55,  183 => 53,  179 => 52,  173 => 49,  164 => 42,  161 => 41,  156 => 38,  145 => 36,  141 => 35,  135 => 32,  126 => 25,  124 => 24,  121 => 23,  119 => 22,  113 => 18,  107 => 16,  105 => 15,  102 => 14,  99 => 13,  77 => 10,  70 => 9,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/footer.twig", "");
    }
}
