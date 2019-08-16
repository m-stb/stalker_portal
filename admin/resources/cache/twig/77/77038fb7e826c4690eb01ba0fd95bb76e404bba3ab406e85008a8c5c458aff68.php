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

/* default/Tariffs/service_packages/service_packages.js.twig */
class __TwigTemplate_d8d0eb6e511584f72d795b593e34393f085b28683e4b1d713e956ed576151559 extends \Twig\Template
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
                        var all_services = json.data[i].all_services;

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
        echo "/edit-service-package?id=\" + id + \"'>\\n\\
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
        echo "/remove-service-package' data-packageid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        if (json.data[i].type != 'module') {
                            json.data[i].all_services = all_services != 0 ? \"<span class=''>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("complete"), "html", null, true);
        echo "</span>\" : \"<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Optional"), "html", null, true);
        echo "</span>\";
                        } else {
                            json.data[i].all_services = '';
                        }

                        var name = json.data[i].name;

                        json.data[i].name = '<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-service-package?id=' + id + '\" >' + name + '</a>';
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/service-packages-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 46
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 47
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 49
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"aoColumnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, -2, -4]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.closest('div.open').removeClass('open');

                    if( \$this.attr(\"href\").indexOf(\"remove-service-package\") !== -1 && !confirm(\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this service package?"), "html", null, true);
        echo "\") ) {
                        return false;
                    }

                    ajaxPostSend(\$this.attr('href'), \$this.data(), false);
                    return false;
                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/Tariffs/service_packages/service_packages.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 75,  119 => 49,  113 => 47,  111 => 46,  106 => 44,  98 => 41,  86 => 34,  74 => 27,  65 => 21,  59 => 20,  52 => 16,  46 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Tariffs/service_packages/service_packages.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Tariffs/service_packages/service_packages.js.twig");
    }
}
