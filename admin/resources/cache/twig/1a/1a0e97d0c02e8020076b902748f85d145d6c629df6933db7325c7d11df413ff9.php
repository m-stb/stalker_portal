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

/* default/Tasks/tasks_report/tasks_report.js.twig */
class __TwigTemplate_56c66ab4efa2eaca6a55be127fdd8eb00311ff8bc8b03aa3c95e345b68fadadd extends \Twig\Template
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
                var taskState={
                ";
        // line 5
        if ($this->getAttribute(($context["app"] ?? null), "taskState", [], "any", true, true)) {
            // line 6
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskState", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 7
                echo "                        ";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo "'";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "':'";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                    echo "',";
                } else {
                    echo "'";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "':'";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                    echo "'";
                }
                // line 8
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "                ";
        }
        // line 10
        echo "                };
                var taskStateColor=[
                ";
        // line 12
        if ($this->getAttribute(($context["app"] ?? null), "taskStateColor", [], "any", true, true)) {
            // line 13
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskStateColor", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "                        ";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo "'";
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "',";
                } else {
                    echo "'";
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "'";
                }
                // line 15
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                ";
        }
        // line 17
        echo "                ];
                if (typeof (json.data) == 'object'&& json.data.length >0) {
                    var date;
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var state = json.data[i].state;
                        var name = json.data[i].name;
                        json.data[i].name = '<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/task-detail-";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "task_type", [], "array") == "karaoke")) {
            echo "karaoke";
        } else {
            echo "video";
        }
        echo "?id='+ id + '\">' + name + '</a>';
                        
                        json.data[i].state = '<span class=\"txt-' + taskStateColor[state] + '\">'+taskState[state]+'</span>';
                        if (json.data[i].archived != '0'){
                            json.data[i].state += '<br><span class=\"bg-' + taskStateColor[4] + '\">'+taskState[4]+'</span>';
                        }
                        date = json.data[i]['start_time'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['start_time'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }
                        date = json.data[i]['end_time'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['end_time'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }
                    }
                }
                if(typeof(json.videotime != 'undefined') && json.videotime!=-1) {
                    \$('#videoduration').text(\$('#videoduration').text().replace(/\\d+/ig, (json.videotime ? json.videotime: '0')));
                }
                
            }).dataTable({
                \"processing\": true,   
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/tasks-report-json\",
                    \"data\": function (d) {
                        var table = \$('#datatable-1').DataTable();
                        var DT_qString = table.ajax.url();
                        if (DT_qString.indexOf(\"?\") == -1){
                            d = dataTableDataPrepare(d);
                        }
                        d['task_type'] = '";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "task_type", [], "array"), "html", null, true);
        echo "';

                        \$('input[id^=\"datepicker_\"]').each(function () {
                            d['filters[' + \$(this).attr(\"id\").replace(\"datepicker_\", \"interval_\") + ']'] = \$(this).val();
                        });
                    }
                },
                \"language\": {
                    \"url\": \"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 67
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 68
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 70
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },

                \"order\": [[ 0, \"desc\" ]],
                \"columnDefs\": [

                    {\"searchable\": false, \"targets\": [-1, 1, 2, 3]},
                    {\"sortable\": false, \"targets\": [1]}
                ]
            });
        }

        function yelp() {
            \$(document).ready(function () {
                var dayNamesMin = [
                    '";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
        echo "',
                    '";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
        echo "',
                    '";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
        echo "',
                    '";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
        echo "',
                    '";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
        echo "',
                    '";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
        echo "',
                    '";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
        echo "'
                ];
                var monthNames  = [
                    '";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
        echo "',
                    '";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
        echo "',
                    '";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
        echo "',
                    '";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
        echo "',
                    '";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
        echo "',
                    '";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
        echo "',
                    '";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
        echo "',
                    '";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
        echo "',
                    '";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
        echo "',
                    '";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
        echo "',
                    '";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
        echo "',
                    '";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
        echo "'
                ];

                \$(\"#datepicker_from\").datepicker({
                    numberOfMonths: 1,
                    language: 'ru',
                    dateFormat: 'dd/mm/yy',
                    dayNamesMin: dayNamesMin,
                    monthNames: monthNames,
                    onClose: function (selectedDate) {
                        \$(\"#datepicker_to\").datepicker(\"option\", \"minDate\", selectedDate);
                        \$('#datatable-1').DataTable().ajax.reload();
                    }
                });

                \$(\"#datepicker_to\").datepicker({
                    numberOfMonths: 1,
                    language: 'ru',
                    dateFormat: 'dd/mm/yy',
                    dayNamesMin: dayNamesMin,
                    monthNames: monthNames,
                    onClose: function (selectedDate) {
                        \$(\"#datepicker_from\").datepicker(\"option\", \"maxDate\", selectedDate);
                        \$('#datatable-1').DataTable().ajax.reload();
                    }
                });

                \$(\"#iptv_list\").on('click', 'div[data-tvfilter] ul a', function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    setActiveFilter(this);
                    var qString = '';
                    \$(\"#iptv_list div[data-tvfilter] ul a.active\").each(function(){
                        qString = getURLFilterString(this, qString).split(\"?\").splice(-1)[0] || '';
                        console.log(qString);
                    });
                    var table = \$('#datatable-1').DataTable();
                    var DT_qString = table.ajax.url();
                    DT_qString = DT_qString.replace(/\\??filters[^&]+&?/ig, '');
                    console.log(DT_qString);
                    table.ajax.url(DT_qString + '?' + qString);
                    table.ajax.reload();

                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/Tasks/tasks_report/tasks_report.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 112,  316 => 111,  312 => 110,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  292 => 105,  288 => 104,  284 => 103,  280 => 102,  276 => 101,  270 => 98,  266 => 97,  262 => 96,  258 => 95,  254 => 94,  250 => 93,  246 => 92,  222 => 70,  216 => 68,  214 => 67,  209 => 65,  198 => 57,  186 => 50,  149 => 24,  140 => 17,  137 => 16,  123 => 15,  112 => 14,  94 => 13,  92 => 12,  88 => 10,  85 => 9,  71 => 8,  56 => 7,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Tasks/tasks_report/tasks_report.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Tasks/tasks_report/tasks_report.js.twig");
    }
}
