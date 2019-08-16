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

/* default/Statistics/stat_abonents/stat_abonents.js.twig */
class __TwigTemplate_4ac7c2c35ab3ad21b754119b4e031fede7b98575c9f0c2e2234f5d20210eb472 extends \Twig\Template
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
                if (typeof (json.data) == 'object' && json.data.length >0) {
                    var dateKey = false, key, date;
                    var possibleDateKeys = ['readed'];
                    for (var num in possibleDateKeys) {
                        key = possibleDateKeys[num];
                        if (typeof(json.data[0][key]) != 'undefined') {
                            dateKey = key;
                        }
                    }
                    if (dateKey) {
                        for (var i in json.data) {
                            date = json.data[i][dateKey];
                            if (date > 0) {
                                date = new Date(date * 1000);
                                json.data[i][dateKey] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                            }
                        }
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/stat-abonents-list-json\",
                    \"data\": function (d) {
                        d = dataTableDataPrepare(d);

                        \$('input[id^=\"datepicker_\"]').each(function () {
                            d['filters[' + \$(this).attr(\"id\").replace(\"datepicker_\", \"interval_\") + ']'] = \$(this).val();
                        });
                    }
                },
                \"language\": {
                    \"url\": \"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 39
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 40
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 42
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                
                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
\t\t\t\t\"columnDefs\": [{\"searchable\": false, \"targets\": [2]}]
            });
        }

        function yelp() {
            \$(document).ready(function () {
                ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datepicker_js_script", [], "method"), "html", null, true);
        echo "
                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/Statistics/stat_abonents/stat_abonents.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 58,  86 => 42,  80 => 40,  78 => 39,  73 => 37,  58 => 27,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Statistics/stat_abonents/stat_abonents.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Statistics/stat_abonents/stat_abonents.js.twig");
    }
}
