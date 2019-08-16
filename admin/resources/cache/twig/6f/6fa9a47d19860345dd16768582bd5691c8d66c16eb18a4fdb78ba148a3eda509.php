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

/* default/Radio/index/index.js.twig */
class __TwigTemplate_932a6e6b4a42b02785f325b25de819d0f7cb76f41fcfc5b3587aa3ce9f274423 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var status = json.data[i].status;

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a href='";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-radio?id=\" + id + \"'>\\n\\
                                                                    <span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-radio' data-radioid='\" + id + \"' data-radiostatus='\" + status + \"'>\\n\\
                                                                    <span>\" + (status != 0 ? \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "\") + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-radio' data-radioid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        
                        //json.data[i].status = status != 0 ? \"<span class='txt-success'>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "</span>\" : \"<span class='txt-danger'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "</span>\";
                        json.data[i].status = '\\
                           <div class=\"mswitch\">\\
                                <input type=\"checkbox\" \\
                                       id=\"rad_status_'+ json.data[i].id +'\"\\
                                       name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                       ' + ( json.data[i].status != 0 ? 'checked=\"checked\"' : '' ) +'\\
                                       data-radioid=\"' + json.data[i].id + '\"\\
                                       data-radiostatus=\"' + json.data[i].status +'\">\\
                                <label class=\"label-success\" \\
                                       title=\"' + ( json.data[i].status != 0 ? \"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "\" ) + '\" \\
                                       for=\"rad_status_'+ json.data[i].id +'\"></label>\\
                            </div>';

                        json.data[i].volume_correction *= 5;
                        var name = json.data[i].name;

                        json.data[i].name = '<a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-radio?id=' + id + '\" >' + name + '</a>';
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/radio-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                
                ";
        // line 62
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 63
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 65
        echo "
                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"aoColumnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, -2, -3, -4]},
                    {\"sortable\": false, \"targets\": [-1]},
                    {className: \"data-filter-status\", \"targets\": [-3]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                
                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = \$(this);
                    _this.closest('div.open').removeClass('open');

                    if( \$(this).attr(\"href\").indexOf(\"remove-radio\") != -1 && !confirm(\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this radio?"), "html", null, true);
        echo "\") ) {
                        return;
                    }

                    ajaxPostSend(\$(this).attr('href'), \$(this).data(), false, false);
                    return false;
                });

                \$(document).on('change', \".mswitch input\", function(e){
                    ajaxPostSend('";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-radio', \$(this).data() );
                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/Radio/index/index.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 103,  181 => 94,  150 => 65,  144 => 63,  142 => 62,  136 => 59,  128 => 56,  116 => 49,  104 => 42,  89 => 32,  80 => 26,  74 => 25,  65 => 21,  59 => 20,  52 => 16,  46 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Radio/index/index.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Radio/index/index.js.twig");
    }
}
