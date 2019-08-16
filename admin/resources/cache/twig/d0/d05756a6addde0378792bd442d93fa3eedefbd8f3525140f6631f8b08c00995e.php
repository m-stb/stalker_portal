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

/* default/Admins/admins_groups/admins_groups.twig */
class __TwigTemplate_6704263d2294368cfd33d8ca1ce56b0c5d12c6ed6776ad9dec88986fda82b3d0 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Admins/admins_groups/admins_groups.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Admins/admins_groups/admins_groups.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Administrators") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("groups list"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_footer_js($context, array $blocks = [])
    {
        // line 7
        echo "    
        ";
        // line 8
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 9
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Admins/admins_groups/admins_groups.twig", 9)->display($context);
        // line 10
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Admins/admins_groups/admins_groups.twig", 10)->display($context);
        // line 11
        echo "
";
    }

    // line 14
    public function block_footer($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\" defer>
       
        ";
        // line 19
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Admins/admins_groups/admins_groups.js.twig"), "default/Admins/admins_groups/admins_groups.twig", 19)->display($context);
        // line 20
        echo "
    </script>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        // line 26
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-admins-group\" class=\"btn btn-action pull-right no_context_menu\" id=\"add_group\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add group"), "html", null, true);
        echo "</a>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\" \">
                <div class=\"box\">
                    ";
        // line 36
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 37
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 39
        echo "                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">
                            <div class=\" \">
                                <div class=\" \">
                                    <div class=\"dataTables_processing\"></div>
                                    <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                                        ";
        // line 45
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 46
            echo "                                        ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                        ";
        }
        // line 48
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
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-admins-group\">
                <div class=\"devoops-modal-inner\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Group name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"hidden\" name=\"id\" id=\"adm_id\" class=\"own_fields\">
                                        <input id=\"adm_name\" class=\"form-control own_fields\" type=\"text\" name=\"name\" required=\"required\"
                                            data-validation = \"required, server\"
                                            data-validation-url = \"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-admins-group-name\" >
                                        <div class=\"name-check\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"devoops-modal-bottom\">
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                        <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
    ";
        // line 104
        echo "
    <script type=\"text/template\" id=\"modal_move_reseller_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/move-admin-group-to-reseller\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reseller name"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\"col-xs-12 col-sm-10\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"id\" value=\"\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"source_id\" value=\"\">
                            <select class=\"own_fields\" name=\"target_id\" id=\"target_reseller\">
                                ";
        // line 116
        echo "                                    ";
        if ($this->getAttribute(($context["app"] ?? null), "allResellers", [], "any", true, true)) {
            // line 117
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 118
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
            // line 120
            echo "                                    ";
        }
        // line 121
        echo "                                ";
        // line 122
        echo "                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </script>

    ";
        // line 130
        if (($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", []) == "admin"))) {
            // line 131
            echo "    <script type=\"text/template\" id=\"modal_move_group_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-all-admin-to-group\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Group"), "html", null, true);
            echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\"col-xs-12 col-sm-10\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"source_id\" value=\"\">
                            <select class=\"own_fields\" name=\"target_id\" id=\"target_group\">
                                ";
            // line 140
            if ($this->getAttribute(($context["app"] ?? null), "allGroups", [], "any", true, true)) {
                // line 141
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allGroups", []));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 142
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
                // line 144
                echo "                                ";
            }
            // line 145
            echo "                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </script>
    ";
        }
        // line 153
        echo "
    <script type=\"text/template\" id=\"modal_move_form_buttons\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Move"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/Admins/admins_groups/admins_groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 157,  318 => 156,  313 => 153,  303 => 145,  300 => 144,  289 => 142,  284 => 141,  282 => 140,  274 => 135,  267 => 133,  263 => 131,  261 => 130,  251 => 122,  249 => 121,  246 => 120,  235 => 118,  230 => 117,  227 => 116,  218 => 109,  211 => 107,  206 => 104,  195 => 95,  191 => 94,  176 => 84,  167 => 78,  157 => 73,  130 => 48,  124 => 46,  122 => 45,  114 => 39,  108 => 37,  106 => 36,  92 => 29,  87 => 26,  84 => 25,  78 => 20,  76 => 19,  68 => 15,  65 => 14,  60 => 11,  57 => 10,  55 => 9,  51 => 8,  48 => 7,  45 => 6,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Admins/admins_groups/admins_groups.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Admins/admins_groups/admins_groups.twig");
    }
}
