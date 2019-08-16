<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/Users/users_list/users_list.twig */
class __TwigTemplate_6734c37b6935a6b6a560fb85e6ae3f0b9ef7715e46d5496f5a4c7e42c297de40 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Users/users_list/users_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macros"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro2.twig"), "default/Users/users_list/users_list.twig", 2)->unwrap();
        // line 3
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Users/users_list/users_list.twig", 3)->unwrap();
        // line 5
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Users") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("list of users"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        ";
        // line 11
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Users/users_list/users_list.css"), "default/Users/users_list/users_list.twig", 11)->display($context);
        // line 12
        echo "    </style>

";
    }

    // line 15
    public function block_footer_js($context, array $blocks = [])
    {
        // line 16
        echo "    
        ";
        // line 17
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 18
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Users/users_list/users_list.twig", 18)->display($context);
        // line 19
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Users/users_list/users_list.twig", 19)->display($context);
        // line 20
        echo "
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 25
    public function block_footer($context, array $blocks = [])
    {
        // line 26
        echo "        
        ";
        // line 27
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        ";
        // line 28
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/basic_templates/events_menu.twig"), "default/Users/users_list/users_list.twig", 28)->display($context);
        // line 29
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 31
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Users/users_list/users_list.js.twig"), "default/Users/users_list/users_list.twig", 31)->display($context);
        // line 32
        echo "        </script>

";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        // line 38
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 41
        if ($this->getAttribute(($context["app"] ?? null), "filters_set", [], "any", true, true)) {
            // line 42
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters_set", []));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 43
                echo "                        ";
                if (($this->getAttribute($context["filter"], "default", []) == "1")) {
                    // line 44
                    echo "                            ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["filter"], "values_set", [])) != 0)) {
                        // line 45
                        echo "                                ";
                        echo $context["main_macro"]->getget_filter_value_set_input($this->getAttribute($context["filter"], "text_id", []), $this->getAttribute($context["filter"], "title", []), "value", "title", $this->getAttribute($context["filter"], "values_set", []), 1);
                        echo "
                            ";
                    } elseif (($this->getAttribute(                    // line 46
$context["filter"], "type", []) == "STRING")) {
                        // line 47
                        echo "                                ";
                        echo $context["main_macro"]->getget_filter_string_input($this->getAttribute($context["filter"], "text_id", []), $this->getAttribute($context["filter"], "title", []), "value", "title", $this->getAttribute($context["filter"], "values_set", []), 1);
                        echo "
                            ";
                    } elseif (($this->getAttribute(                    // line 48
$context["filter"], "type", []) == "DATETIME")) {
                        // line 49
                        echo "                                ";
                        echo $context["main_macro"]->getget_filter_datetime_input($this->getAttribute($context["filter"], "text_id", []), $this->getAttribute($context["filter"], "title", []), "value", "title", $this->getAttribute($context["filter"], "values_set", []), 1);
                        echo "
                            ";
                    }
                    // line 51
                    echo "                        ";
                }
                // line 52
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                ";
        }
        // line 54
        echo "                ";
        if ($this->getAttribute(($context["app"] ?? null), "filters_template", [], "any", true, true)) {
            // line 55
            echo "                    ";
            echo $context["main_macros"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters_template", [], "array"), "filter_param", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add parametr"), 6, 1, "true");
            echo "
                ";
        }
        // line 57
        echo "                <a id=\"apply_filter_button\" href=\"#\" class=\"btn btn-success no_context_menu\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Apply filter"), "html", null, true);
        echo "</a>
                <a id=\"form_filter_button\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-filter\" class=\"btn btn-default no_context_menu\" data-filter_set_id=\"";
        if ($this->getAttribute(($context["app"] ?? null), "filter_set", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filter_set", []), "id", []), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save filter"), "html", null, true);
        echo "</a>

                <a id=\"add_button\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-users\" class=\"btn btn-action pull-right\" ";
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "resellerUserLimit", [])) {
            echo "style=\"display: none;\"";
        }
        echo "><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add user"), "html", null, true);
        echo "</a>
                <span id=\"limit_message\" class=\"btn btn-default pull-right\" ";
        // line 61
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "resellerUserLimit", [])) {
            echo "style=\"display: none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Limit of number of the users has been reached"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"filter_block\">
                ";
        // line 64
        if ($this->getAttribute(($context["app"] ?? null), "filters_set", [], "any", true, true)) {
            // line 65
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters_set", []));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 66
                echo "                        ";
                if (($this->getAttribute($context["filter"], "default", []) == "0")) {
                    // line 67
                    echo "                            ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["filter"], "values_set", [])) != 0)) {
                        // line 68
                        echo "                                ";
                        echo $context["main_macro"]->getget_filter_value_set_input($this->getAttribute($context["filter"], "text_id", []), $this->getAttribute($context["filter"], "title", []), "value", "title", $this->getAttribute($context["filter"], "values_set", []), 0);
                        echo "
                            ";
                    } elseif (($this->getAttribute(                    // line 69
$context["filter"], "type", []) == "STRING")) {
                        // line 70
                        echo "                                ";
                        echo $context["main_macro"]->getget_filter_string_input($this->getAttribute($context["filter"], "text_id", []), $this->getAttribute($context["filter"], "title", []), "value", "title", $this->getAttribute($context["filter"], "values_set", []), 0);
                        echo "
                            ";
                    } elseif (($this->getAttribute(                    // line 71
$context["filter"], "type", []) == "DATETIME")) {
                        // line 72
                        echo "                                ";
                        echo $context["main_macro"]->getget_filter_datetime_input($this->getAttribute($context["filter"], "text_id", []), $this->getAttribute($context["filter"], "title", []), "value", "title", $this->getAttribute($context["filter"], "values_set", []), 0);
                        echo "
                            ";
                    }
                    // line 74
                    echo "                        ";
                }
                // line 75
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                ";
        }
        // line 77
        echo "            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 82
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 83
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 85
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 89
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 90
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 92
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type=\"text/template\" id=\"save_filter_template\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-filter\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-10\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"filter_set[id]\" value=\"\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"filter_set[admin_id]\" value=\"\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"filter_set[filter_set]\" value=\"\">
                            <input type=\"text\" class=\"own_fields form-control\" name=\"filter_set[title]\" value=\"\" data-validation=\"required\">
                        </span>
                    </div>
                </div>
                <div class=\"form-group form-group-checkbox\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("For all"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-10\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" class=\"own_fields\" name=\"filter_set[for_all]\">
                                    <i class=\"fa fa-square-o small\"></i>
                                </label>
                            </div>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Description"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-10\">
                            <textarea class=\"own_fields form-control\" name=\"filter_set[description]\"></textarea>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_form_button_template\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

    ";
        // line 149
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 150
            echo "    <script type=\"text/template\" id=\"move_user_to_reseller_template\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-user-to-reseller\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reseller name"), "html", null, true);
            echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-10\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"id\" value=\"\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"source_id\" value=\"\">
                            <select class=\"own_fields\" name=\"target_id\" id=\"target_reseller\">
                                ";
            // line 161
            echo "                                    ";
            if ($this->getAttribute(($context["app"] ?? null), "allResellers", [], "any", true, true)) {
                // line 162
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", []));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 163
                    echo "                                            <option value=\"";
                    echo $this->getAttribute($context["row"], "id", []);
                    echo "\" >";
                    echo (($this->getAttribute($context["row"], "name", [])) ? ($this->getAttribute($context["row"], "name", [])) : ("&nbsp;"));
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                                    ";
            }
            // line 166
            echo "                                ";
            // line 167
            echo "                            </select>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>
    ";
        }
        // line 175
        echo "
    ";
        // line 176
        if (($this->getAttribute(($context["app"] ?? null), "enableBilling", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enableBilling", []))) {
            // line 177
            echo "    <script type=\"text/template\" id=\"expire_date_template\">
        <form class='form-horizontal' role='form' action='";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/set-expire-billing-date'>
            <input type='hidden' class='own_fields' name='setaction' value='set'>
            <input type='hidden' class='own_fields' name='userid' value=''>
            <input type='text' readonly='readonly' class='datepicker col-sm-11 own_fields' style='margin-left: 15px;' data-date-format='dd-mm-yy' name='expire_date' id='expire_date_datepicker'>
        </form>
    </script>
    ";
        }
        // line 185
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/Users/users_list/users_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 185,  439 => 178,  436 => 177,  434 => 176,  431 => 175,  421 => 167,  419 => 166,  416 => 165,  405 => 163,  400 => 162,  397 => 161,  388 => 154,  381 => 152,  377 => 150,  375 => 149,  368 => 145,  364 => 144,  348 => 131,  332 => 118,  318 => 107,  311 => 105,  296 => 92,  290 => 90,  288 => 89,  282 => 85,  276 => 83,  274 => 82,  267 => 77,  264 => 76,  258 => 75,  255 => 74,  249 => 72,  247 => 71,  242 => 70,  240 => 69,  235 => 68,  232 => 67,  229 => 66,  224 => 65,  222 => 64,  212 => 61,  200 => 60,  187 => 58,  182 => 57,  176 => 55,  173 => 54,  170 => 53,  164 => 52,  161 => 51,  155 => 49,  153 => 48,  148 => 47,  146 => 46,  141 => 45,  138 => 44,  135 => 43,  130 => 42,  128 => 41,  123 => 38,  120 => 37,  114 => 32,  112 => 31,  108 => 29,  106 => 28,  102 => 27,  99 => 26,  96 => 25,  89 => 22,  85 => 21,  82 => 20,  79 => 19,  77 => 18,  73 => 17,  70 => 16,  67 => 15,  61 => 12,  59 => 11,  54 => 9,  51 => 8,  48 => 7,  44 => 1,  42 => 5,  40 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/users_list/users_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/users_list/users_list.twig");
    }
}
