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

/* default/ApplicationCatalog/application_list/application_list.twig */
class __TwigTemplate_cbbdbe1cec8871c1826854fc2edae3de3dfb9bf54ea71504a1fd2bd4c121d45d extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/ApplicationCatalog/application_list/application_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/ApplicationCatalog/application_list/application_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Applications") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("applications catalog"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/ApplicationCatalog/application_list/application_list.twig", 10)->display($context);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/ApplicationCatalog/application_list/application_list.js.twig"), "default/ApplicationCatalog/application_list/application_list.twig", 17)->display($context);
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
                <a id=\"add_apps\" href=\"#\" class=\"btn btn-action pull-right no_context_menu\"><i class=\"fa fa-plus\"></i>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add application by URL"), "html", null, true);
        echo "</a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 32
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 33
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 35
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 39
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 40
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 42
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 54
        echo "
    <script type=\"text/template\" id=\"modal_get_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" id=\"form_\" role=\"form\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/application-get-data-from-repo\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("URL"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"text\" class=\"own_fields form-control error-befor-hint\" name=\"apps[url]\" value=\"\" id=\"apps_url\" data-validation=required>
                        </span>
                        <span class=\"help-inline col-xs-12 col-sm-12\">
                            <span class=\"small txt-default\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enter URL to the application repository"), "html", null, true);
        echo "</span>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_get_form_buttons\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Next"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_save_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" id=\"form_\" action=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/application-add\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("URL"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"text\" class=\"own_fields form-control\" name=\"apps[url]\" id=\"apps_url\" value=\"\" readonly=\"readonly\">
                        </span>
                        <span class=\"help-inline col-xs-12 col-sm-12\">
                            <span class=\"small txt-default\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enter URL to the application repository"), "html", null, true);
        echo "</span>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Application"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"apps[name]\" id=\"apps_name\" value=\"\" readonly=\"readonly\">
                            <h5></h5>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Version"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"apps[current_version]\" value=\"\" id=\"apps_version\" readonly=\"readonly\" disabled=\"disabled\">
                            <h5></h5>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("About app"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <textarea class=\"own_fields form-control\" name=\"apps[description]\" id=\"apps_description\" readonly=\"readonly\" rows=\"10\" disabled=\"disabled\"></textarea>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_save_form_buttons\">
        <div class=\"pull-left no-padding\">
            <button type=\"reset\" class=\"btn btn-default pull-left\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
        <div class=\"pull-right no-padding\">
            <button type=\"submit\" class=\"btn btn-success pull-right\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
            <button type=\"button\" id=\"add_apps_back\" class=\"btn btn-success pull-right\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Back"), "html", null, true);
        echo "</button>
        </div>
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/ApplicationCatalog/application_list/application_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 130,  249 => 129,  243 => 126,  227 => 113,  215 => 104,  203 => 95,  195 => 90,  186 => 84,  179 => 82,  170 => 76,  166 => 75,  153 => 65,  144 => 59,  137 => 57,  132 => 54,  119 => 42,  113 => 40,  111 => 39,  105 => 35,  99 => 33,  97 => 32,  89 => 27,  84 => 24,  81 => 23,  75 => 18,  73 => 17,  68 => 15,  65 => 14,  62 => 13,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/ApplicationCatalog/application_list/application_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/ApplicationCatalog/application_list/application_list.twig");
    }
}
