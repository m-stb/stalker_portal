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

/* default/Admins/resellers_list/resellers_list.twig */
class __TwigTemplate_415dacb6edc952949079191f18cf3a9dfb6d73837f6cc6284a4bfe50b547f3f2 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Admins/resellers_list/resellers_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Admins/resellers_list/resellers_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Resellers") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("resellers list"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Admins/resellers_list/resellers_list.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Admins/resellers_list/resellers_list.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    // line 14
    public function block_footer($context, array $blocks = [])
    {
        // line 15
        echo "    
        ";
        // line 16
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
           
            ";
        // line 19
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Admins/resellers_list/resellers_list.js.twig"), "default/Admins/resellers_list/resellers_list.twig", 19)->display($context);
        // line 20
        echo "
        </script>
        
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-reseller\" class=\"btn btn-action pull-right no_context_menu\" id=\"add_reseller\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add reseller"), "html", null, true);
        echo "</a>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"\">
                <div class=\"box\">
                    ";
        // line 37
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 38
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 40
        echo "                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">
                            <div class=\"\">
                                <div class=\"\">
                                    <div class=\"dataTables_processing\"></div>
                                    <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                                        ";
        // line 46
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 47
            echo "                                        ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                        ";
        }
        // line 49
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
            <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/resellers-save\">
                <div class=\"devoops-modal-inner\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <!-- singer -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"hidden\" name=\"id\" class=\"own_fields\">
                                        <input type=\"text\" required=\"required\" name=\"name\" data-validation=\"required\" class=\"form-control own_fields\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Maximum number of users"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"text\" required=\"required\" name=\"max_users\" class='form-control own_fields'>
                                    </div>
                                    <span class=\"help-inline col-xs-10 col-sm-10\">
                                        <span class=\"small txt-default\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Maximum number of users for current reseller. Set '0' for unlimited number of users."), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"devoops-modal-bottom\">
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                        <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/Admins/resellers_list/resellers_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 105,  203 => 104,  191 => 95,  182 => 89,  170 => 80,  159 => 74,  132 => 49,  126 => 47,  124 => 46,  116 => 40,  110 => 38,  108 => 37,  94 => 30,  89 => 27,  86 => 26,  79 => 20,  77 => 19,  71 => 16,  68 => 15,  65 => 14,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Admins/resellers_list/resellers_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Admins/resellers_list/resellers_list.twig");
    }
}
