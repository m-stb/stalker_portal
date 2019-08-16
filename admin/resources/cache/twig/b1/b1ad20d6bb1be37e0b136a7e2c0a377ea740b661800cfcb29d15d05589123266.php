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

/* default/Admins/admins_list/admins_list.twig */
class __TwigTemplate_d8c698317ca747e46f610c8da4880f0982f94226a538806bedb311b2bc29e730 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Admins/admins_list/admins_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Admins/admins_list/admins_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Administrators") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("administrators list"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_footer_js($context, array $blocks = [])
    {
        // line 8
        echo "    
        ";
        // line 9
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 10
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Admins/admins_list/admins_list.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Admins/admins_list/admins_list.twig", 11)->display($context);
        // line 12
        echo "
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        // line 18
        echo "    
        ";
        // line 19
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
           
            ";
        // line 22
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Admins/admins_list/admins_list.js.twig"), "default/Admins/admins_list/admins_list.twig", 22)->display($context);
        // line 23
        echo "
        </script>
        
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-admin\" class=\"btn btn-action pull-right no_context_menu\" id=\"add_admin\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add administrator"), "html", null, true);
        echo "</a>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"\">
                <div class=\"box\">
                    ";
        // line 40
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 41
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 43
        echo "                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">
                            <div class=\"\">
                                <div class=\"\">
                                    <div class=\"dataTables_processing\"></div>
                                    <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                                        ";
        // line 49
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 50
            echo "                                        ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                        ";
        }
        // line 52
        echo "                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"modalbox_ad\">
        <div class=\"devoops-modal\">
            <div class=\"devoops-modal-header\">
                <div class=\"modal-header-name\">
                    <span></span>
                </div>
                <div class=\"box-icons\">
                    <a class=\"close-link\">
                        <i class=\"fa fa-times\"></i>
                    </a>
                </div>
            </div>
            <form class=\"form-horizontal\" role=\"form\" id=\"karaoke_form\" action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-admin\">
                <div class=\"devoops-modal-inner\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <!-- Login -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Login"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"hidden\" name=\"id\" id=\"adm_id\" class=\"own_fields\" data-name=\"id\">
                                        <input  id=\"adm_login\" class=\"form-control own_fields with-error-space\" type=\"text\" name=\"login\" data-name=\"login\" required=\"required\" 
                                            data-validation = \"required, custom, server\"
                                            data-validation-regexp = \"^[A-Za-z0-9_]+\$\"
                                            data-validation-error-msg-custom = \"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Invalid login name"), "html", null, true);
        echo "\"
                                            data-validation-url = \"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-admins-login\"
                                            >
                                        <div class=\"name-check\" style=\"display: none;\"></div>
                                    </div>
                                    <span class=\"help-inline col-xs-12 col-sm-10\">
                                        <span class=\"small txt-default\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Should be unique"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can use letters, digits and _"), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>
                            <!-- Group -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Group"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <select class=\"populate placeholder own_fields\" name=\"gid\" data-name=\"gid\" id=\"gid\" required=\"required\">
                                            ";
        // line 106
        if ($this->getAttribute(($context["app"] ?? null), "allAdminGroups", [], "any", true, true)) {
            // line 107
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allAdminGroups", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 108
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                            ";
        }
        // line 111
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Password -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Password"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input id=\"adm_pass\" class=\"form-control own_fields\" type=\"password\" name=\"pass_confirmation\" data-name=\"pass\"
                                            data-validation=\"required\" >
                                    </div>
                                </div>
                            </div>
                            <!-- Password confirm -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Repeat the password"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input id=\"adm_re_pass\" class=\"form-control own_fields\" type=\"password\" name=\"pass\" data-name=\"re_pass\"
                                            data-validation = \"confirmation\"
                                            data-validation-confirm = \"pass_confirmation\"
                                            data-validation-error-msg-confirmation = \"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Passwords do not match"), "html", null, true);
        echo "\"
                                            >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"devoops-modal-bottom\">
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                        <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    

    ";
        // line 153
        echo "
    <script type=\"text/template\" id=\"modal_move_reseller_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/move-admin-to-reseller\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reseller name"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-10\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"id\" value=\"\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"source_id\" value=\"\">
                            <select class=\"own_fields\" name=\"target_id\" id=\"target_reseller\">
                                ";
        // line 165
        echo "                                    ";
        if ($this->getAttribute(($context["app"] ?? null), "allResellers", [], "any", true, true)) {
            // line 166
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 167
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
            // line 169
            echo "                                    ";
        }
        // line 170
        echo "                                ";
        // line 171
        echo "                            </select>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>
    
    ";
        // line 179
        if (($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", []) == "admin"))) {
            // line 180
            echo "    <script type=\"text/template\" id=\"modal_move_group_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-admin-to-group\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Group"), "html", null, true);
            echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-10\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"id\" value=\"\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"source_id\" value=\"\">
                            <select class=\"own_fields\" name=\"target_id\" id=\"target_group\">
                                ";
            // line 190
            if ($this->getAttribute(($context["app"] ?? null), "allGroups", [], "any", true, true)) {
                // line 191
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allGroups", []));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 192
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", []), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", []), "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                                ";
            }
            // line 195
            echo "                            </select>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>
    ";
        }
        // line 203
        echo "
    <script type=\"text/template\" id=\"modal_move_form_buttons\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Move"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

";
    }

    public function getTemplateName()
    {
        return "default/Admins/admins_list/admins_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 207,  413 => 206,  408 => 203,  398 => 195,  395 => 194,  384 => 192,  379 => 191,  377 => 190,  368 => 184,  361 => 182,  357 => 180,  355 => 179,  345 => 171,  343 => 170,  340 => 169,  329 => 167,  324 => 166,  321 => 165,  312 => 158,  305 => 156,  300 => 153,  289 => 144,  285 => 143,  272 => 133,  263 => 127,  250 => 117,  242 => 111,  239 => 110,  228 => 108,  223 => 107,  221 => 106,  214 => 102,  203 => 96,  193 => 91,  189 => 90,  179 => 83,  168 => 77,  141 => 52,  135 => 50,  133 => 49,  125 => 43,  119 => 41,  117 => 40,  103 => 33,  98 => 30,  95 => 29,  88 => 23,  86 => 22,  80 => 19,  77 => 18,  74 => 17,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Admins/admins_list/admins_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Admins/admins_list/admins_list.twig");
    }
}
