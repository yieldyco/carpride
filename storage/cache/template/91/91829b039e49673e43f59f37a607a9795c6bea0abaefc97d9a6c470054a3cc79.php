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

/* catalog/product_list.twig */
class __TwigTemplate_9bd5a25ce8093bdf4a2a1a6b788aa6d3b9a0f300a27ae5e1327f5a9f19021b36 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 21
        if ( !($context["ape_f_license"] ?? null)) {
            // line 22
            echo "                <div class=\"container-fluid\">
                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 23
            echo ($context["ape_f_error_license_text"] ?? null);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                    <div class=\"well well-sm\" style=\"background: #ffffee;\">
                        Market: ";
            // line 27
            echo ($context["ape_f_market"] ?? null);
            echo "<br />
                        ";
            // line 28
            echo ($context["ape_f_order_number_text"] ?? null);
            echo "<br />
                        Host: ";
            // line 29
            echo ($context["ape_f_host"] ?? null);
            echo "<br />
                        IP: ";
            // line 30
            echo ($context["ape_f_ip"] ?? null);
            echo "<br />
                        <hr />
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"ape-f-input-license-key\">";
            // line 33
            echo ($context["ape_f_input_license_text"] ?? null);
            echo ":</label>
                            <input type=\"text\" name=\"ape_f_input_license_key\" value=\"";
            // line 34
            echo ($context["ape_f_input_license_key"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["ape_f_input_license_text"] ?? null);
            echo "\" id=\"ape-f-input-license-key\" class=\"form-control\" />
                        </div>
                        <button type=\"button\" onClick=\"aL();\" class=\"btn btn-success\">";
            // line 36
            echo ($context["ape_f_input_license_button"] ?? null);
            echo "</button>
                    </div>
                </div>
                ";
        }
        // line 40
        echo "                ";
        if (($context["apf_error"] ?? null)) {
            // line 41
            echo "                <div class=\"container-fluid\">
                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 42
            echo ($context["apf_error"] ?? null);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                ";
        }
        // line 46
        echo "            <!-- Admin Product Editor and extended Filter -->
            
  <div class=\"container-fluid\">";
        // line 48
        if (($context["error_warning"] ?? null)) {
            // line 49
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 53
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 54
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 58
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 62
        echo ($context["text_filter"] ?? null);
        echo "</h3>

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 65
        if (($context["ape_f_license"] ?? null)) {
            // line 66
            echo "                <span><a href=\"";
            echo ($context["clear"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_clear"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i></a></span>
                <div style=\"position:absolute;right:3px;top:3px;\">
                    <button type=\"button\" id=\"button-filter-setting\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo ($context["button_setting"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog fw\"></i> <span class=\"hidden-md\">";
            echo ($context["button_setting"] ?? null);
            echo "</span></button>
                </div>
                ";
        }
        // line 71
        echo "            <!-- Admin Product Editor and extended Filter -->
            
          </div>
          <div class=\"panel-body\">

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 77
        if (($context["ape_f_license"] ?? null)) {
            // line 78
            echo "                <div id=\"panel-setting\" class=\"panel panel-info\" style=\"display:none;border-radius:3px;\">
                    <div class=\"panel-heading\" style=\"color:#31708f;background-color:#d9edf7;border-color:#bce8f1;\"><i class=\"fa fa-cog fw\"></i> ";
            // line 79
            echo ($context["button_setting"] ?? null);
            echo " <button type=\"button\" id=\"button-filter-setting-close\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_close"] ?? null);
            echo "\" class=\"btn btn-info\" style=\"position:absolute;right:3px;top:3px;\"><i class=\"fa fa-times\"></i></button></div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <input data-key=\"column_left\" ";
            // line 82
            if ( !twig_get_attribute($this->env, $this->source, ($context["apf_settings"] ?? null), "column_left", [], "any", false, false, false, 82)) {
                echo " checked ";
            }
            echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
            echo ($context["text_menu_hide"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_menu_hide"] ?? null);
            echo "\" data-onstyle=\"left-menu\" data-offstyle=\"default\" data-width=\"100%\">
                        </div>
                        <div class=\"form-group\">
                            <input data-key=\"column_right\" ";
            // line 85
            if ( !twig_get_attribute($this->env, $this->source, ($context["apf_settings"] ?? null), "column_right", [], "any", false, false, false, 85)) {
                echo " checked ";
            }
            echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
            echo ($context["text_filter_hide"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_filter_hide"] ?? null);
            echo "\" data-onstyle=\"filter\" data-offstyle=\"default\" data-width=\"100%\">
                        </div>
                        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["apf_settings"] ?? null), "columns", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 88
                echo "                            ";
                if (($context["key"] == "product_id")) {
                    // line 89
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 90
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"#ID\" data-off=\"#ID\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 93
                echo "                            ";
                if (($context["key"] == "image")) {
                    // line 94
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 95
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_image"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_image"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 98
                echo "                            ";
                if (($context["key"] == "name")) {
                    // line 99
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 100
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_name"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_name"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 103
                echo "                            ";
                if (($context["key"] == "model")) {
                    // line 104
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 105
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_model"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_model"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 108
                echo "                            ";
                if (($context["key"] == "sku")) {
                    // line 109
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 110
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_sku"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_sku"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 113
                echo "                            ";
                if (($context["key"] == "manufacturer")) {
                    // line 114
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 115
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_manufacturer"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_manufacturer"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 118
                echo "                            ";
                if (($context["key"] == "category")) {
                    // line 119
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 120
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_category"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_category"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 123
                echo "                            ";
                if (($context["key"] == "price")) {
                    // line 124
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 125
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 128
                echo "                            ";
                if (($context["key"] == "quantity")) {
                    // line 129
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 130
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 133
                echo "                            ";
                if (($context["key"] == "status")) {
                    // line 134
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 135
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_status"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_status"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 138
                echo "                            ";
                if (($context["key"] == "action")) {
                    // line 139
                    echo "                                <div class=\"form-group\">
                                    <input data-key=\"";
                    // line 140
                    echo $context["key"];
                    echo "\" ";
                    if ($context["value"]) {
                        echo " checked ";
                    }
                    echo " type=\"checkbox\" class=\"status-toggle\" data-toggle=\"toggle\" data-on=\"";
                    echo ($context["entry_action"] ?? null);
                    echo "\" data-off=\"";
                    echo ($context["entry_action"] ?? null);
                    echo "\" data-onstyle=\"info\" data-offstyle=\"default\" data-width=\"100%\">
                                </div>
                            ";
                }
                // line 143
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                    </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-product-id\">Product ID</label>
                  <input type=\"text\" name=\"filter_product_id\" value=\"";
            // line 148
            echo ($context["filter_product_id"] ?? null);
            echo "\" placeholder=\"Product ID\" id=\"input-product-id\" class=\"form-control\" />
                </div>
                ";
        }
        // line 151
        echo "            <!-- Admin Product Editor and extended Filter -->
            
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 154
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 155
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 158
        echo ($context["entry_model"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 159
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 163
        if (($context["ape_f_license"] ?? null)) {
            // line 164
            echo "                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-sku\">";
            // line 165
            echo ($context["entry_sku"] ?? null);
            echo "</label>
                  <input type=\"text\" name=\"filter_sku\" value=\"";
            // line 166
            echo ($context["filter_sku"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_sku"] ?? null);
            echo "\" id=\"input-sku\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-manufacturer\">";
            // line 169
            echo ($context["entry_manufacturer"] ?? null);
            echo "</label>
                  <select name=\"filter_manufacturer\" id=\"input-manufacturer\" data-live-search=\"true\" multiple data-actions-box=\"true\" data-selected-text-format=\"count > 4\">
                    ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 172
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 172);
                echo "\">&nbsp;&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 172);
                echo "&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                  </select>
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-category\">";
            // line 177
            echo ($context["entry_category"] ?? null);
            echo "</label>
                  <select name=\"filter_category\" id=\"input-category\" data-live-search=\"true\" multiple data-actions-box=\"true\" data-selected-text-format=\"count > 4\">
                    ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 180
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 180);
                echo "\">&nbsp;&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 180);
                echo "&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                  </select>
                </div>
                ";
        }
        // line 185
        echo "            <!-- Admin Product Editor and extended Filter -->
            
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
        // line 188
        echo ($context["entry_price"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 189
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 192
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 193
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 197
        if (($context["ape_f_license"] ?? null)) {
            // line 198
            echo "                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-filter-image\">";
            // line 199
            echo ($context["entry_image"] ?? null);
            echo "</label>
                  <select name=\"filter_image\" id=\"input-filter-image\" class=\"form-control\">
                    <option value=\"\"></option>
                      ";
            // line 202
            if ((($context["filter_image"] ?? null) == "1")) {
                // line 203
                echo "                    <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                      ";
            } else {
                // line 205
                echo "                    <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                      ";
            }
            // line 207
            echo "                      ";
            if ((($context["filter_image"] ?? null) == "0")) {
                // line 208
                echo "                    <option value=\"0\" selected=\"selected\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                      ";
            } else {
                // line 210
                echo "                    <option value=\"0\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                      ";
            }
            // line 212
            echo "                  </select>
                </div>
                ";
        }
        // line 215
        echo "            <!-- Admin Product Editor and extended Filter -->
            
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 218
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                
                
                  
                

                  ";
        // line 227
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 228
            echo "
                
                
                  
                
                
                <option value=\"1\" selected=\"selected\">";
            // line 234
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 242
            echo "
                
                
                  
                
                
                <option value=\"1\">";
            // line 248
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 256
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 257
            echo "
                
                
                  
                
                
                <option value=\"0\" selected=\"selected\">";
            // line 263
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 271
            echo "
                
                
                  
                
                
                <option value=\"0\">";
            // line 277
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 285
        echo "

              
              
                
              
              
              </select>
            </div>
            <div class=\"form-group text-right\">

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 297
        if (($context["ape_f_license"] ?? null)) {
            // line 298
            echo "                <a href=\"";
            echo ($context["clear"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_clear"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</a>
                ";
        }
        // line 300
        echo "            <!-- Admin Product Editor and extended Filter -->
            
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 302
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 310
        echo ($context["text_list"] ?? null);
        echo "</h3>

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 313
        if (($context["ape_f_license"] ?? null)) {
            // line 314
            echo "                <div style=\"position:absolute;right:3px;top:3px;\" ";
            if ( !($context["filtered"] ?? null)) {
                echo " class=\"hidden\" ";
            }
            echo ">
                    <label class=\"hidden-md hidden-sm hidden-xs\" style=\"color:#dd3520;float:left;text-align:right;margin-right:15px;width:230px;\">";
            // line 315
            echo ($context["help_enable_disable"] ?? null);
            echo ":</label>
                    <button onclick=\"if (confirm('";
            // line 316
            echo ($context["text_confirm"] ?? null);
            echo "')) { \$(this).attr('data-click', 'true'); \$('#button-filter').click() } else { false; }\" type=\"button\" id=\"button-status-enable-all\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_enable_disable"] ?? null);
            echo ".\" class=\"btn btn-success\"><i class=\"fa fa-power-off fa-rotate-180\"></i> <span class=\"hidden-xs\">";
            echo ($context["button_enable_all"] ?? null);
            echo "</span></button>
                    <button onclick=\"if (confirm('";
            // line 317
            echo ($context["text_confirm"] ?? null);
            echo "')) { \$(this).attr('data-click', 'true'); \$('#button-filter').click() } else { false; }\" type=\"button\" id=\"button-status-disable-all\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_enable_disable"] ?? null);
            echo ".\" class=\"btn btn-danger\"><i class=\"fa fa-power-off\"></i> <span class=\"hidden-xs\">";
            echo ($context["button_disable_all"] ?? null);
            echo "</span></button>
                </div>
                ";
        }
        // line 320
        echo "            <!-- Admin Product Editor and extended Filter -->
            
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 324
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 332
        if (($context["ape_f_license"] ?? null)) {
            // line 333
            echo "                <td class=\"text-left\">";
            if ((($context["sort"] ?? null) == "p.product_id")) {
                echo " <a href=\"";
                echo ($context["sort_product_id"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">#ID</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_product_id"] ?? null);
                echo "\">#ID</a> ";
            }
            echo "</td>
                ";
        }
        // line 335
        echo "            <!-- Admin Product Editor and extended Filter -->
            
                      <td class=\"text-center\">";
        // line 337
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 338
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 339
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>

            <!-- Admin Product Editor and extended Filter -->
                ";
        // line 342
        if (($context["ape_f_license"] ?? null)) {
            // line 343
            echo "                <td class=\"text-left\">";
            if ((($context["sort"] ?? null) == "p.sku")) {
                echo " <a href=\"";
                echo ($context["sort_sku"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_sku"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_sku"] ?? null);
                echo "\">";
                echo ($context["entry_sku"] ?? null);
                echo "</a> ";
            }
            echo "</td>
                <td class=\"text-left\">";
            // line 344
            if ((($context["sort"] ?? null) == "m.name")) {
                echo " <a href=\"";
                echo ($context["sort_manufacturer"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_manufacturer"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_manufacturer"] ?? null);
                echo "\">";
                echo ($context["entry_manufacturer"] ?? null);
                echo "</a> ";
            }
            echo "</td>
                <td class=\"text-left\">";
            // line 345
            echo ($context["entry_category"] ?? null);
            echo "</td>
                ";
        }
        // line 347
        echo "            <!-- Admin Product Editor and extended Filter -->
            
                      <td class=\"text-right\">";
        // line 349
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 350
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 351
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 352
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 357
        if (($context["products"] ?? null)) {
            // line 358
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 359
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 360
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 360), ($context["selected"] ?? null))) {
                    // line 361
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 361);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 363
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 363);
                    echo "\" />
                      ";
                }
                // line 364
                echo "</td>

            <!-- Admin Product Editor and extended Filter -->
                ";
                // line 367
                if (($context["ape_f_license"] ?? null)) {
                    // line 368
                    echo "                <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 368);
                    echo "</td>
                ";
                }
                // line 370
                echo "            <!-- Admin Product Editor and extended Filter -->
            
                    <td class=\"text-center\">";
                // line 372
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 372)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 372);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 372);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " 
            <!-- Admin Product Editor and extended Filter -->
                <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                // line 375
                echo "                ";
                if (($context["ape_f_license"] ?? null)) {
                    // line 376
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 376)) {
                        // line 377
                        echo "                        <div class=\"product-images\">
                        ";
                        // line 378
                        $context["i"] = 0;
                        // line 379
                        echo "                        ";
                        $context["count_images"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 379));
                        // line 380
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 380));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 381
                            echo "                            ";
                            if (((($context["count_images"] ?? null) <= 3) && (($context["i"] ?? null) < 3))) {
                                // line 382
                                echo "                                <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 382);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 382);
                                echo "\" class=\"img-thumbnail\" />&nbsp;
                            ";
                            } elseif (((                            // line 383
($context["count_images"] ?? null) > 3) && (($context["i"] ?? null) < 2))) {
                                // line 384
                                echo "                                <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 384);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 384);
                                echo "\" class=\"img-thumbnail\" />&nbsp;
                            ";
                            }
                            // line 386
                            echo "                            ";
                            $context["i"] = (($context["i"] ?? null) + 1);
                            // line 387
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 388
                        echo "                        ";
                        if ((($context["count_images"] ?? null) > 3)) {
                            // line 389
                            echo "                            <a class=\"btn btn-xs btn-default disabled\">..";
                            echo (($context["count_images"] ?? null) - 2);
                            echo "</a>
                        ";
                        }
                        // line 391
                        echo "                        </div>
                    ";
                    }
                    // line 393
                    echo "                ";
                }
                // line 394
                echo "                </td>
            <!-- Admin Product Editor and extended Filter -->
            
                    <td class=\"text-left\">";
                // line 397
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 397);
                echo "</td>
                    <td class=\"text-left\">";
                // line 398
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 398);
                echo "</td>

            <!-- Admin Product Editor and extended Filter -->
                ";
                // line 401
                if (($context["ape_f_license"] ?? null)) {
                    // line 402
                    echo "                <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 402);
                    echo "</td>
                <td class=\"text-left\">
                  ";
                    // line 404
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                        // line 405
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 405) == twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer_id", [], "any", false, false, false, 405)) && twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 405))) {
                            // line 406
                            echo "                        ";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 406);
                            echo "
                    ";
                        }
                        // line 408
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 409
                    echo "                </td>
                <td class=\"text-left\">
                    ";
                    // line 411
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "seo_pro", [], "any", false, false, false, 411) && twig_get_attribute($this->env, $this->source, $context["product"], "main_category", [], "any", false, false, false, 411))) {
                        // line 412
                        echo "                        <div><span class=\"category-level-up\">↸</span>&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "main_category_name", [], "any", false, false, false, 412);
                        echo "</div>
                    ";
                    }
                    // line 414
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 415
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "seo_pro", [], "any", false, false, false, 415)) {
                            // line 416
                            echo "                            ";
                            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 416), twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 416)) && (twig_get_attribute($this->env, $this->source, $context["product"], "main_category", [], "any", false, false, false, 416) != twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 416)))) {
                                // line 417
                                echo "                                <span class=\"category-level-down\">↴</span>&nbsp;";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 417);
                                echo "<br>
                            ";
                            }
                            // line 419
                            echo "                        ";
                        } else {
                            // line 420
                            echo "                            ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 420), twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 420))) {
                                // line 421
                                echo "                                <span class=\"category-level-down\">↴</span>&nbsp;";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 421);
                                echo "<br>
                            ";
                            }
                            // line 423
                            echo "                        ";
                        }
                        // line 424
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 425
                    echo "                </td>
                ";
                }
                // line 427
                echo "            <!-- Admin Product Editor and extended Filter -->
            
                    <td class=\"text-right\">";
                // line 429
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 429)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 429);
                    echo "</span><br/>
                      <div class=\"text-danger\">";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 430);
                    echo "</div>
                      ";
                } else {
                    // line 432
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 432);
                    echo "
                      ";
                }
                // line 433
                echo "</td>
                    <td class=\"text-right\">";
                // line 434
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 434) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 434);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 434) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 434);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 434);
                    echo "</span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 435
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 435);
                echo "<span data-status=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status_", [], "any", false, false, false, 435);
                echo "\"></span></td>
                    <td class=\"text-right\">
            ";
                // line 438
                echo "            ";
                if (($context["ape_f_license"] ?? null)) {
                    // line 439
                    echo "            <div class=\"btn-group\" style=\"width:80px\">
                ";
                    // line 440
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "status_", [], "any", false, false, false, 440)) {
                        // line 441
                        echo "                <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 441);
                        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_view"] ?? null);
                        echo "\" class=\"btn btn-info btn-action-view\"><i class=\"fa fa-eye\"></i></a>
                ";
                    } else {
                        // line 443
                        echo "                <a data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 443);
                        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_view"] ?? null);
                        echo "\" class=\"btn btn-default btn-action-view\" disabled><i class=\"fa fa-eye-slash\"></i></a>
                ";
                    }
                    // line 445
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 445);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
            </div>
            ";
                } else {
                    // line 448
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 448);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
            ";
                }
                // line 450
                echo "            ";
                // line 451
                echo "            </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "                  ";
        } else {
            // line 455
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"11\">";
            // line 456
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 459
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 465
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 466
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--

            // Admin Product Editor and extended Filter add Eye
            \$(document).ready(function() {
                \$(\"#form-product\").on( \"change\", '.status-toggle', function() {
                    var btn_action_view = \$(this).closest('tr').find('.btn-action-view');
                        if (\$(this).prop('checked') == true) {
                            btn_action_view.attr({
                                href: btn_action_view.attr('data-href'),
                            }).removeAttr('data-href').attr('class', 'btn btn-info btn-action-view').removeAttr('disabled').find('i').attr('class', 'fa fa-eye');
                        } else {
                            btn_action_view.attr({
                                'data-href': btn_action_view.attr('href'),
                            }).removeAttr('href').attr('class', 'btn btn-default btn-action-view').attr('disabled', true).find('i').attr('class', 'fa fa-eye-slash');
                        }
                });
            });
            // Admin Product Editor and extended Filter add Eye
            

            // Admin Product Editor and extended Filter

                // ocStore
                \$('input[name=\\'filter_category\\']').closest('.form-group').remove();
                \$('input[name=\\'filter_manufacturer_id\\']').closest('.form-group').remove();
                // ocStore

                \$('#button-filter').on('click', function(event) {
            // Admin Product Editor and extended Filter
            
\tvar url = '';

            // Admin Product Editor and extended Filter
                \$('input[name=\\'filter_category\\']').closest('.form-group').remove();

                ";
        // line 508
        if (($context["ape_f_license"] ?? null)) {
            // line 509
            echo "                if (\$('#button-status-enable-all').attr('data-click') == 'true') {
                    url += '&status_enable=1'
                }
                if (\$('#button-status-disable-all').attr('data-click') == 'true') {
                    url += '&status_disable=1'
                }
                var filter_product_id = \$('input[name=\\'filter_product_id\\']').val();
                if (filter_product_id) {
                    url += '&filter_product_id=' + encodeURIComponent(filter_product_id);
                }
                var filter_sku = \$('input[name=\\'filter_sku\\']').val();
                if (filter_sku) {
                    url += '&filter_sku=' + encodeURIComponent(filter_sku);
                }
                var filter_manufacturer = \$('select[name=\\'filter_manufacturer\\']').val();
                if (filter_manufacturer !== null) {
                    url += '&filter_manufacturer=' + encodeURIComponent(filter_manufacturer);
                }
                var filter_category = \$('select[name=\\'filter_category\\']').val();

                if (filter_category !== null) {
                    url += '&filter_category=' + encodeURIComponent(filter_category);
                }
                var filter_image = \$('select[name=\\'filter_image\\']').val();
                if (filter_image !== '') {
                    url += '&filter_image=' + encodeURIComponent(filter_image);
                }
                ";
        }
        // line 537
        echo "            // Admin Product Editor and extended Filter
            

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}

\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 570
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 582
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});


            // Admin Product Editor and extended Filter
                \$('input[name=\\'filter_product_id\\']').autocomplete({
                    'source': function(request, response) {
                        \$.ajax({
                            url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 604
        echo ($context["user_token"] ?? null);
        echo "&filter_product_id=' +  encodeURIComponent(request),
                            dataType: 'json',
                            success: function(json) {
                                response(\$.map(json, function(item) {
                                    return {
                                        label: item['product_id'],
                                        value: item['product_id']
                                    }
                                }));
                            }
                        });
                    },
                    'select': function(item) {
                        \$('input[name=\\'filter_product_id\\']').val(item['label']);
                    }
                });

                \$('input[name=\\'filter_sku\\']').autocomplete({
                    'source': function(request, response) {
                        \$.ajax({
                            url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 624
        echo ($context["user_token"] ?? null);
        echo "&filter_sku=' +  encodeURIComponent(request),
                            dataType: 'json',
                            success: function(json) {
                                response(\$.map(json, function(item) {
                                    if (item['sku']) {
                                        return {
                                            label: item['sku'],
                                            value: item['product_id']
                                        }
                                    }
                                }));
                            }
                        });
                    },
                    'select': function(item) {
                        \$('input[name=\\'filter_sku\\']').val(item['label']);
                    }
                });

                \$('#input-category').selectpicker({
                    iconBase: 'fa',
                    tickIcon: 'fa-check',
                    width: '100%'
                });

                \$('#input-category').selectpicker('val', [";
        // line 649
        echo ($context["filter_category"] ?? null);
        echo "]);

                \$('#input-manufacturer').selectpicker({
                    iconBase: 'fa',
                    tickIcon: 'fa-check',
                    width: '100%'
                });

                \$('#input-manufacturer').selectpicker('val', [";
        // line 657
        echo ($context["filter_manufacturer"] ?? null);
        echo "]);


                var apf_settings = ";
        // line 660
        echo json_encode(($context["apf_settings"] ?? null));
        echo ";

                var languages = ";
        // line 662
        echo json_encode(($context["languages"] ?? null));
        echo ";

                var manufacturers = ";
        // line 664
        echo json_encode(($context["manufacturers"] ?? null));
        echo ";
                var categories = ";
        // line 665
        echo json_encode(($context["categories"] ?? null));
        echo ";

                var entry_name = '";
        // line 667
        echo ($context["entry_name"] ?? null);
        echo "';
                var entry_manufacturer = '";
        // line 668
        echo ($context["entry_manufacturer"] ?? null);
        echo "';
                var entry_category = '";
        // line 669
        echo ($context["entry_category"] ?? null);
        echo "';
                var entry_main_category = '";
        // line 670
        if ( !twig_test_empty(($context["entry_main_category"] ?? null))) {
            echo " ";
            echo ($context["entry_main_category"] ?? null);
            echo " ";
        }
        echo "';
                var help_category = '";
        // line 671
        echo ($context["help_category"] ?? null);
        echo "';
                var text_none  = '";
        // line 672
        echo ($context["text_none"] ?? null);
        echo "';
                var text_select_all = '";
        // line 673
        echo ($context["text_select_all"] ?? null);
        echo "';
                var text_unselect_all = '";
        // line 674
        echo ($context["text_unselect_all"] ?? null);
        echo "';

                var tab_image = '";
        // line 676
        echo ($context["tab_image"] ?? null);
        echo "';
                var entry_image = '";
        // line 677
        echo ($context["entry_image"] ?? null);
        echo "';
                var entry_additional_image = '";
        // line 678
        echo ($context["entry_additional_image"] ?? null);
        echo "';
                var entry_sort_order = '";
        // line 679
        echo ($context["entry_sort_order"] ?? null);
        echo "';
                var placeholder = '";
        // line 680
        echo ($context["placeholder"] ?? null);
        echo "';
                var button_image_add = '";
        // line 681
        echo ($context["button_image_add"] ?? null);
        echo "';
                var button_remove = '";
        // line 682
        echo ($context["button_remove"] ?? null);
        echo "';
                var button_cancel = '";
        // line 683
        echo ($context["button_cancel"] ?? null);
        echo "';
                var button_save = '";
        // line 684
        echo ($context["button_save"] ?? null);
        echo "';

                var text_disabled = '";
        // line 686
        echo ($context["text_disabled"] ?? null);
        echo "';
            // Admin Product Editor and extended Filter
            
\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 692
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 709
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1712 => 709,  1692 => 692,  1683 => 686,  1678 => 684,  1674 => 683,  1670 => 682,  1666 => 681,  1662 => 680,  1658 => 679,  1654 => 678,  1650 => 677,  1646 => 676,  1641 => 674,  1637 => 673,  1633 => 672,  1629 => 671,  1621 => 670,  1617 => 669,  1613 => 668,  1609 => 667,  1604 => 665,  1600 => 664,  1595 => 662,  1590 => 660,  1584 => 657,  1573 => 649,  1545 => 624,  1522 => 604,  1497 => 582,  1482 => 570,  1447 => 537,  1417 => 509,  1415 => 508,  1370 => 466,  1366 => 465,  1358 => 459,  1352 => 456,  1349 => 455,  1346 => 454,  1338 => 451,  1336 => 450,  1328 => 448,  1319 => 445,  1311 => 443,  1303 => 441,  1301 => 440,  1298 => 439,  1295 => 438,  1288 => 435,  1272 => 434,  1269 => 433,  1263 => 432,  1258 => 430,  1252 => 429,  1248 => 427,  1244 => 425,  1238 => 424,  1235 => 423,  1229 => 421,  1226 => 420,  1223 => 419,  1217 => 417,  1214 => 416,  1211 => 415,  1206 => 414,  1200 => 412,  1198 => 411,  1194 => 409,  1188 => 408,  1182 => 406,  1179 => 405,  1175 => 404,  1169 => 402,  1167 => 401,  1161 => 398,  1157 => 397,  1152 => 394,  1149 => 393,  1145 => 391,  1139 => 389,  1136 => 388,  1130 => 387,  1127 => 386,  1119 => 384,  1117 => 383,  1110 => 382,  1107 => 381,  1102 => 380,  1099 => 379,  1097 => 378,  1094 => 377,  1091 => 376,  1088 => 375,  1076 => 372,  1072 => 370,  1066 => 368,  1064 => 367,  1059 => 364,  1053 => 363,  1047 => 361,  1045 => 360,  1042 => 359,  1037 => 358,  1035 => 357,  1027 => 352,  1009 => 351,  991 => 350,  973 => 349,  969 => 347,  964 => 345,  946 => 344,  927 => 343,  925 => 342,  905 => 339,  887 => 338,  883 => 337,  879 => 335,  863 => 333,  861 => 332,  850 => 324,  844 => 320,  834 => 317,  826 => 316,  822 => 315,  815 => 314,  813 => 313,  807 => 310,  796 => 302,  792 => 300,  782 => 298,  780 => 297,  766 => 285,  755 => 277,  747 => 271,  736 => 263,  728 => 257,  725 => 256,  714 => 248,  706 => 242,  695 => 234,  687 => 228,  685 => 227,  673 => 218,  668 => 215,  663 => 212,  657 => 210,  651 => 208,  648 => 207,  642 => 205,  636 => 203,  634 => 202,  628 => 199,  625 => 198,  623 => 197,  614 => 193,  610 => 192,  602 => 189,  598 => 188,  593 => 185,  588 => 182,  577 => 180,  573 => 179,  568 => 177,  563 => 174,  552 => 172,  548 => 171,  543 => 169,  535 => 166,  531 => 165,  528 => 164,  526 => 163,  517 => 159,  513 => 158,  505 => 155,  501 => 154,  496 => 151,  490 => 148,  484 => 144,  478 => 143,  464 => 140,  461 => 139,  458 => 138,  444 => 135,  441 => 134,  438 => 133,  424 => 130,  421 => 129,  418 => 128,  404 => 125,  401 => 124,  398 => 123,  384 => 120,  381 => 119,  378 => 118,  364 => 115,  361 => 114,  358 => 113,  344 => 110,  341 => 109,  338 => 108,  324 => 105,  321 => 104,  318 => 103,  304 => 100,  301 => 99,  298 => 98,  284 => 95,  281 => 94,  278 => 93,  268 => 90,  265 => 89,  262 => 88,  258 => 87,  247 => 85,  235 => 82,  227 => 79,  224 => 78,  222 => 77,  214 => 71,  206 => 68,  198 => 66,  196 => 65,  190 => 62,  184 => 58,  176 => 54,  173 => 53,  165 => 49,  163 => 48,  159 => 46,  152 => 42,  149 => 41,  146 => 40,  139 => 36,  132 => 34,  128 => 33,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  103 => 23,  100 => 22,  98 => 21,  91 => 16,  80 => 14,  76 => 13,  71 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
