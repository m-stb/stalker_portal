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

/* default/BroadcastServers/broadcast_zone_list/broadcast_zone_list.js.twig */
class __TwigTemplate_781b834256bdfa2335c98aacbbfce933b024545ede39d9e1ad002af092209798 extends \Twig\Template
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

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a href='";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-zone?id=\" + id + \"'>\\n\\
                                                                    <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-zone' data-id='\" + id + \"'>\\n\\
                                                                    <span> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        
                        json.data[i].name = \"<a href='";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-zone?id=\" + id + \"'>\" +json.data[i].name+ \"</a>\";

                        if (json.data[i].default_flag == 1) {
                            json.data[i].default_flag = '<i class=\"fa fa-check\"></i>';
                        } else {
                            json.data[i].default_flag = \"&nbsp;\"
                        }
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/broadcast-zone-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 44
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 45
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 47
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"columnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, -2, -3]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide();
        }

        function yelp() {
            \$(document).ready(function () {
                \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var sendData = \$(this).data();
                    ajaxPostSend(\$(this).attr('href'), sendData, false, false);
                    \$(this).closest('div.open').removeClass('open');
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
        return "default/BroadcastServers/broadcast_zone_list/broadcast_zone_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  106 => 45,  104 => 44,  99 => 42,  91 => 39,  73 => 26,  64 => 20,  58 => 19,  51 => 15,  45 => 14,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/BroadcastServers/broadcast_zone_list/broadcast_zone_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/BroadcastServers/broadcast_zone_list/broadcast_zone_list.js.twig");
    }
}
