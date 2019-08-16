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

/* default/Tasks/tasks_list/tasks_list.js.twig */
class __TwigTemplate_7bab4a8ad866b2a14ec9653d22a432759e325fbfeb8c40ce0c76b69c57d854d6 extends \Twig\Template
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
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var state = json.data[i].state;
                        var name = json.data[i].name;
                        var messages = json.data[i].messages;
                        var archived = '' + json.data[i].archived;
                        var actionList = 0;

                        if (!isNaN(parseInt(messages))) {
                            messages = messages + '/' + (json.data[i].not_readed ? json.data[i].not_readed: '0');
                        }

                        json.data[i].messages = '<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/task-detail-";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "task_type", [], "array") == "karaoke")) {
            echo "karaoke";
        } else {
            echo "video";
        }
        echo "?id='+ id + '\">'+ messages +'</a>';
                        json.data[i].name = '<a href=\"";
        // line 32
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
                        
                        var dateOn = new Date(json.data[i]['start_time'] * 1000);
                        json.data[i].start_time = dateOn.toLocaleFormat(\"%b %d, %Y %H:%M\");

                        if ( archived !== '0') {
                            var titleStr = \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("unknown"), "html", null, true);
        echo "\";
                            if (json.data[i].archived_time) {
                                dateOn.setTime(json.data[i].archived_time * 1000)
                                titleStr = dateOn.toLocaleFormat(\"%b %d, %Y\");
                            }
                            json.data[i].archived = \"<span class='monitoring-status skyblue'><i data-toggle='tooltip' class='fa fa-cubes' title='";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Archived"), "html", null, true);
        echo " \" + titleStr + \"'></i></span>\";
                        } else if (state == 1 || state == 2) {
                            json.data[i].archived = \"<span class='main_ajax monitoring-status green'><i data-toggle='tooltip' class='fa fa-flag-checkered' title='";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Ready for send to archive"), "html", null, true);
        echo "'></i></span>\";
                        } else if (state == 3) {
                            json.data[i].archived = \"<span class='main_ajax monitoring-status gold'><i data-toggle='tooltip' class='fa fa-flag' title='";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Must be rejected before sending to archive"), "html", null, true);
        echo "'></i></span>\";
                        } else {
                            json.data[i].archived = \"<span class='main_ajax monitoring-status no-monitoring'><i data-toggle='tooltip' class='fa fa-folder-open-o' title='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("In the work"), "html", null, true);
        echo "'></i></span>\";
                        }

                        json.data[i].status = \"<span class='monitoring-status txt-\" + taskStateColor[json.data[i].status] + \"'>\" + (json.data[i].status == '1' ? '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Ready"), "html", null, true);
        echo "': '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not ready"), "html", null, true);
        echo "') + \"</span>\";

                        json.data[i].media_accessed = \"<i data-toggle='tooltip' class='fa icon icon-eye\" + (json.data[i].media_accessed ? \"' title='";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "\": \"-slash' title='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "\") + \"'></i>\";

                        if (json.data[i].media_status || (!json.data[i].media_url && json.data[i].item_status)) {
                            json.data[i].media_status = \"<i data-toggle='tooltip' class='fa icon icon-archive' title='";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available on storages"), "html", null, true);
        echo "'></i>\";
                        } else if (!json.data[i].media_url) {
                            json.data[i].media_status = \"<i data-toggle='tooltip' class='fa icon icon-banned' title='";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not available on storages"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Check file"), "html", null, true);
        echo "'></i>\";
                        } else {
                            json.data[i].media_status = '';
                        }

                        if (json.data[i].media_url) {
                            json.data[i].media_status += \"<i data-toggle='tooltip' class='fa icon icon-link' title='";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available by custom URL"), "html", null, true);
        echo "'></i>\";
                        }

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\";
                        if (state == 0 ) {
                            json.data[i].operations +=      \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/task-state-change' data-taskid='\" + id + \"' data-apply='ended'>\\n\\
                                                                    <span>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Done"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\";
                            actionList++;
                        }
                        if ((state == 1 || state == 2) && archived == '0') {
                            json.data[i].operations +=      \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/task-state-change' data-taskid='\" + id + \"' data-apply='archived'>\\n\\
                                                                    <span>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Send to archive"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\";
                            actionList++;
                        }
                        if (state == 0 || state == 3) {
                            json.data[i].operations +=     \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/task-state-change' data-taskid='\" + id + \"' data-apply='rejected'>\\n\\
                                                                    <span>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reject"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\";
                            actionList++;
                        }
                        json.data[i].operations +=\"</ul>\\n\\
                                            </div>\";

                        if (actionList == 0) {
                            json.data[i].operations = '';
                        }
                    }
                }
            }).dataTable({
                \"processing\": true,   
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/tasks-list-json\",
                    \"data\": function (d) {
                        d = dataTableDataPrepare(d);
                        d['task_type'] = '";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "task_type", [], "array"), "html", null, true);
        echo "';
                    }
                },
                \"language\": {
                    \"url\": \"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 120
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 121
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 123
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                \"lengthMenu\": [ 10, 25, 50, 100, 200 ],
                \"pageLength\": 200,
                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"order\": [[ 4, \"desc\" ]],
                \"columnDefs\": [
                    { className: \"dt-status dt-nowrap\", \"targets\": [ 3, 4, -2 ] },
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, -2, -3, -4, 1]},
                    {\"sortable\": false, \"targets\": [-1, 1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                \$(document).tooltip({
                    selector: '[data-toggle=\"tooltip\"]',
                    placement: 'top'
                });

                \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var sendData = \$(this).data();
                    sendData['task_type'] = '";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "task_type", [], "array"), "html", null, true);
        echo "';
                    ajaxPostSend(\$(this).attr('href'), sendData, false, false);
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var manageTasks = function (obj) {
            JSSuccessModalBox(obj);
            \$('#datatable-1').DataTable().ajax.reload();
        };

        var manageTasksError = function (obj) {
            JSErrorModalBox(obj);
        };

        var videoinfo = checkSourceKaraoke = function(obj){
            if (obj.media_id) {
                ajaxPostSend(\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/tasks-list-json\", {
                    task_type: '";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "task_type", [], "array"), "html", null, true);
        echo "',
                    media_id : obj.media_id
                });
            }
        };
";
    }

    public function getTemplateName()
    {
        return "default/Tasks/tasks_list/tasks_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 180,  407 => 179,  381 => 156,  346 => 123,  340 => 121,  338 => 120,  333 => 118,  326 => 114,  318 => 111,  298 => 94,  292 => 93,  282 => 86,  276 => 85,  266 => 78,  260 => 77,  247 => 67,  236 => 61,  231 => 59,  223 => 56,  216 => 54,  210 => 51,  205 => 49,  200 => 47,  195 => 45,  187 => 40,  168 => 32,  156 => 31,  140 => 17,  137 => 16,  123 => 15,  112 => 14,  94 => 13,  92 => 12,  88 => 10,  85 => 9,  71 => 8,  56 => 7,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Tasks/tasks_list/tasks_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Tasks/tasks_list/tasks_list.js.twig");
    }
}
