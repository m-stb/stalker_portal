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

/* default/Statistics/stat_video/stat_video.js.twig */
class __TwigTemplate_4610abfc2ef7473fa93bc28def65212a90b91d0bc7c6257d2d3ee627a2e05c90 extends \Twig\Template
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
            var visibleCols = \$('#datatable-1 tr:first-of-type th:visible');
            ";
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "stat_to", [], "array") == "all")) {
            // line 5
            echo "                var colNum = (visibleCols.length > 3) ? 3: visibleCols.length - 1;
            ";
        } else {
            // line 7
            echo "                var colNum = visibleCols.length - 1;
            ";
        }
        // line 9
        echo "            
            \$('#datatable-1')
            ";
        // line 11
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "stat_to", [], "array") != "genre")) {
            // line 12
            echo "                    .on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object' && json.data.length > 0) {
                    var dateKey = false, key, date;
                    var possibleDateKeys = ['date', 'last_played'];
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
                                json.data[i][dateKey] = date.toLocaleFormat(dateKey == 'date'? \"%b %d, %Y\": \"%b %d, %Y %H:%M\");
                            }
                        }
                    }
                }
            })
            ";
        }
        // line 34
        echo "                .dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/stat-video-list-json\",
                    \"data\": function (d) {
                        d = dataTableDataPrepare(d);
                        \$('input[id^=\"datepicker_\"]').each(function () {
                            d['filters[' + \$(this).attr(\"id\").replace(\"datepicker_\", \"interval_\") + ']'] = \$(this).val();
                        });
                    }
                },
            ";
        // line 46
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "stat_to", [], "array") != "genre")) {
            // line 47
            echo "            ";
        } else {
            // line 48
            echo "                /*\"serverSide\": false,*/
                \"pageLength\": 100,
            ";
        }
        // line 51
        echo "                \"language\": {
                    \"url\": \"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 54
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 55
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 57
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                
                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"columnDefs\": [
                    {\"searchable\": false, \"targets\": [";
        // line 68
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "stat_to", [], "array") == "all")) {
            echo "4";
        } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "stat_to", [], "array") == "daily")) {
            echo "1";
        } else {
            echo "0, 3";
        }
        echo "]} ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "stat_to", [], "array") == "genre")) {
            echo ",
                    {\"sortable\": false, \"targets\": [0]}
                    ";
        }
        // line 71
        echo "                ]
            }).prev('.dataTables_processing').hide('', function(){
                ";
        // line 73
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "stat_to", [], "array") == "genre")) {
            // line 74
            echo "                    \$(\".dataTables_filter\").hide();
                ";
        }
        // line 76
        echo "            });
        }

        function yelp() {
            \$(document).ready(function () {
                ";
        // line 81
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
        return "default/Statistics/stat_video/stat_video.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 81,  157 => 76,  153 => 74,  151 => 73,  147 => 71,  133 => 68,  120 => 57,  114 => 55,  112 => 54,  107 => 52,  104 => 51,  99 => 48,  96 => 47,  94 => 46,  81 => 38,  75 => 34,  51 => 12,  49 => 11,  45 => 9,  41 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Statistics/stat_video/stat_video.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Statistics/stat_video/stat_video.js.twig");
    }
}
