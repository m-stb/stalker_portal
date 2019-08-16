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

/* default/Users/support_info/support_info.twig */
class __TwigTemplate_e341835c0d72c188302921dca48ca6e897e91e5fced6087791a694bbf506ac6a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'footer_js' => [$this, 'block_footer_js'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Users/support_info/support_info.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Users/support_info/support_info.twig", 2)->unwrap();
        // line 3
        $context["title"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Users") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Support info")));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Users/support_info/support_info.twig", 9)->display($context);
        // line 10
        echo "
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "    <div id=\"add_channel\">
        <form id=\"support_info_form\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-support-info\">
            <div class=\"row row_no_padding\">
                <div class=\"box\">
                    <div class=\"box-content\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Language"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <select id=\"form_lang\" name=\"form[lang]\" class=\"form-control\">
                                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "support_langs", [], "array"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 27
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "\" ";
            if (($context["val"] == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", [], "array"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                        </select>
                                    </div>
                                    <span class=\"help-inline col-xs-12 col-sm-12\">
                                        <span class=\"small txt-default\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Choose language for support info"), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Support info"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <textarea id=\"form_content\" name=\"form[content]\" class=\"form-control\" rows=\"10\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "def_lang_info", [], "array"), "content", [], "array"), "html", null, true);
        echo "</textarea>
                                    </div>
                                    <span class=\"help-inline col-xs-12 col-sm-12\">
                                        <span class=\"small txt-default\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Allowed to use html-tags"), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">&nbsp;</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\"col-xs-10 col-sm-10\">
                                        <button type=\"submit\" id=\"form_save\" name=\"form[save]\" class=\"btn btn-success green pull-right\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type=\"text/javascript\" defer>

        var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'};

        function DemoSelect2() {
            \$(\"#form_lang\").select2(select2Opt);
        }

        function yelp() {
            \$(document).ready(function () {

                LoadSelect2Script(DemoSelect2);

                \$(document).on('submit', '#support_info_form', function(e){
                    e.stopPropagation();
                    e.preventDefault();

                    var  sendData = {
                        lang: \$('#form_lang').val(),
                        content: \$.trim(\$('#form_content').val())
                    };

                    ajaxPostSend(\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-support-content\", sendData, false, false);
                });

                \$(document).on('change', '#form_lang', function(e){

                    ajaxPostSend(\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-support-content\", {'lang' : \$(this).val()}, false, false);

                });


            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var setSupportContent = function(data){
            \$(\"#form_content\").val((data && data.data && data.data.content) ? data.data.content: '');
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "default/Users/support_info/support_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 88,  175 => 83,  140 => 51,  129 => 43,  123 => 40,  117 => 37,  109 => 32,  104 => 29,  89 => 27,  85 => 26,  78 => 22,  67 => 16,  64 => 15,  61 => 14,  56 => 10,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  40 => 1,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/support_info/support_info.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/support_info/support_info.twig");
    }
}
