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

/* default/Events/message_templates/message_templates.twig */
class __TwigTemplate_6d2070e4e9f7c821cc64ad094b9811c7b4aa416b28eafa0c11a04acd8dd61e70 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Events/message_templates/message_templates.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Events/message_templates/message_templates.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Events") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("list of filters of users"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Events/message_templates/message_templates.twig", 10)->display($context);
        // line 11
        echo "
";
    }

    // line 13
    public function block_footer($context, array $blocks = [])
    {
        // line 14
        echo "    
        ";
        // line 15
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 17
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Events/message_templates/message_templates.js.twig"), "default/Events/message_templates/message_templates.twig", 17)->display($context);
        // line 18
        echo "        </script>
        
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        // line 24
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 27
        echo $context["main_macro"]->getget_filter("admin_id", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Author"), "id", "login", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allAdmins", [], "array"), 2);
        echo "
                <div class=\"pull-right\">
                    <a href=\"#\" class=\"btn btn-action pull-right no_context_menu\" id=\"msg_tpl_create\"><i class=\"fa fa-plus\"></i>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Create new message template"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 35
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 36
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 38
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 42
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 43
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 45
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 57
        echo "
    <script type=\"text/template\" id=\"modal_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" id=\"save_message_template\" role=\"form\" action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-message-template\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Template name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-6\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"msg_tpl[id]\" value=\"\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"msg_tpl[admin_id]\" value=\"";
        // line 66
        if ($this->getAttribute(($context["app"] ?? null), "user_id", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_id", []), "html", null, true);
        }
        echo "\">
                            <input type=\"text\" class=\"own_fields form-control\" name=\"msg_tpl[title]\" value=\"\" data-validation=\"required\">
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Header"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-6\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"text\" class=\"own_fields form-control\" name=\"msg_tpl[header]\" value=\"\" data-validation=\"required\">
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Text"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-6\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <textarea class=\"own_fields form-control\" name=\"msg_tpl[body]\" data-validation=\"required\" ></textarea>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("URL"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-6\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"text\" class=\"own_fields form-control\" name=\"msg_tpl[url]\" value=\"\">
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_form_buttons\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/Events/message_templates/message_templates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 102,  206 => 101,  190 => 88,  179 => 80,  168 => 72,  157 => 66,  150 => 62,  143 => 60,  138 => 57,  125 => 45,  119 => 43,  117 => 42,  111 => 38,  105 => 36,  103 => 35,  94 => 29,  89 => 27,  84 => 24,  81 => 23,  75 => 18,  73 => 17,  68 => 15,  65 => 14,  62 => 13,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Events/message_templates/message_templates.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Events/message_templates/message_templates.twig");
    }
}
