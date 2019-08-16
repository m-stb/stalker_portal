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

/* default/NewVideoClub/video_list/video_list.js.twig */
class __TwigTemplate_d25f2a708a286bdf9d7ab0b6963e76630b74a922271c241959809dbef9092c18 extends \Twig\Template
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
    if (typeof (conf) === 'undefined') {
        var conf = {
            form: 'form_'
        }
    }

    function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                    if (typeof (json.data) == 'object' && json.data.length >0) {
                        for (var i in json.data) {
                            var id = json.data[i].id;
                            var name = json.data[i].name;
                            var status = json.data[i].status;
                            var accessed = json.data[i].accessed;
                            var path = json.data[i].path;
                            var tasks = json.data[i].tasks;

                            json.data[i].path = \"<a href='";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-video?step=4&id=\"+ id +\"' data-fieldname='path'>\"+ json.data[i].path +\"</a>\";

                            json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                            <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                                <i class='pull-right fa fa-cog'></i>\\n\\
                                                            </a>\\n\\
                                                            <ul class='dropdown-menu pull-right'>\\n\\
                                                                <li>\\n\\
                                                                    <a href='";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-video?id=\"+id+\"'>\\n\\
                                                                        <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                    </a>\\n\\
                                                                </li>\\n\\
                                                                <li>\\n\\
                                                                    <a class='main_ajax no_context_menu' href='";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/\" + (accessed!=0 ?\"disable\":\"enable\")+\"-video' data-videoid='\"+id+\"'>\\n\\
                                                                        <span>\" + ( accessed ? \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "\") + \"</span>\\n\\
                                                                    </a>\\n\\
                                                                </li>\\n\\
                                                                <li>\\n\\
                                                                    <a class='main_ajax no_context_menu' href='";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/create-tasks' data-videoid='\"+id+\"'>\\n\\
                                                                        <span>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Create task"), "html", null, true);
        echo "</span>\\n\\
                                                                    </a>\\n\\
                                                                </li>\\n\\
                                                                <li>\\n\\
                                                                    <a class='main_ajax no_context_menu' href='";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-info' data-videoid='\" + id + \"'>\\n\\
                                                                        <span>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Check file"), "html", null, true);
        echo "</span>\\n\\
                                                                    </a>\\n\\
                                                                </li>\\n\";
                            if (json.data[i].complaints) {
                                json.data[i].operations +=      \"<li>\\n\\
                                                                    <a class='main_ajax no_context_menu' href='";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/reset-video-claims' data-videoid='\"+id+\"'>\\n\\
                                                                        <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset media-claims"), "html", null, true);
        echo "</span>\\n\\
                                                                    </a>\\n\\
                                                                </li>\\n\";
                            }
                            json.data[i].operations +=       \"<li>\\n\\
                                                                    <a href='";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-logs?video_id=\"+id+\"'>\\n\\
                                                                        <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Activity log"), "html", null, true);
        echo "</span>\\n\\
                                                                    </a>\\n\\
                                                                </li>\\n\\
                                                                <li>\\n\\
                                                                    <a class='main_ajax no_context_menu' href='";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-video' data-videoid='\"+id+\"' data-videoname='\"+name+\"'>\\n\\
                                                                        <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove"), "html", null, true);
        echo "</span>\\n\\
                                                                    </a>\\n\\
                                                                </li>\\n\\
                                                            </ul>\\n\\
                                                        </div>\";

                            if (json.data[i]['added'] != 0) {
                                var dateOn = new Date(json.data[i]['added']);
                                json.data[i]['added'] = dateOn.toLocaleFormat(\"%b %d, %Y\").replace(\" \", \"&nbsp;\");
                            }

                            json.data[i].name = (\"<a href='";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-video?id=\" + id + \"' data-fieldname='name'>\" + json.data[i].name + \"</a>\");

                            json.data[i].is_series = json.data[i].is_series ? '<i class=\"fa fa-circle\"></i>': \"\";

                            json.data[i].cat_genre = '<div class=\"nowrap flexible\"><span class=\"\" title=\"' +json.data[i].cat_genre+ '\">' +json.data[i].cat_genre+ '</span></div>';


                            var taskStr = '';
                            var msgClass = '';
                            var taskStatus = '';
                            if (typeof(tasks) == 'object' && tasks.length > 0) {
                                var itemCounter = tasks.length - 1;
                                for (var num in tasks) {
                                    var endDate = new Date(tasks[num]['end_time']);
                                    taskStatus = \"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Open"), "html", null, true);
        echo "\";

                                    if (tasks[num]['ended'] || tasks[num]['rejected'] ) {
                                        msgClass += \" line-through \";
                                        if (tasks[num]['rejected'] ) {
                                            msgClass += \" txt-warning \";
                                            taskStatus = \"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Rejected"), "html", null, true);
        echo "\";
                                        } else if (tasks[num]['ended'] != 0 ) {
                                            taskStatus = \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Done"), "html", null, true);
        echo "\";
                                        }
                                    } else if (tasks[num]['expired']){
                                        msgClass += \" txt-danger \";
                                        taskStatus = \"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Expired"), "html", null, true);
        echo "\";
                                    }

                                    taskStr += '<a title=\"'+ taskStatus+ '\" class=\"' + msgClass + '\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/tasks/task-detail-video?id=' + tasks[num]['id']+ '\">№' + tasks[num]['id'] + (!(tasks[num]['ended'] || tasks[num]['rejected']) && tasks[num]['end_time'] ? ' (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("ending"), "html", null, true);
        echo " ' + endDate.toLocaleFormat(\"%d-%m-%Y\") + ')': '') + '</a>' + (num != itemCounter?', ': '');
                                    msgClass = '';
                                }
                            } else {
                                //taskStr = \"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No tasks"), "html", null, true);
        echo "\";
                                taskStr = \"-\";
                            }
                            json.data[i].tasks = taskStr;

                            json.data[i].complaints = '';
                            if (json.data[i].video_counter) {
                                json.data[i].complaints += (\" ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("video"), "html", null, true);
        echo " - \" + json.data[i].video_counter);
                            }

                            if (json.data[i].sound_counter) {
                                json.data[i].complaints += (\" ";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("sound"), "html", null, true);
        echo " - \" + json.data[i].sound_counter);
                            }
                            if (!json.data[i].complaints) {
                                json.data[i].complaints = \"0\"
                            }

                            if (json.data[i]['task_date_on'] != 0) {
                                var dateOn = new Date(json.data[i]['task_date_on']);
                            }
                            json.data[i].accessed = (accessed != 0 ? \"<i data-toggle='tooltip' class='fa icon icon-eye' title='";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "'></i>\" : ((typeof(json.data[i].task_id) != 'undefined' && json.data[i].task_id) ? \"<i data-toggle='tooltip' class='fa icon icon-calendar' title='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Scheduled"), "html", null, true);
        echo " \" +dateOn.toLocaleFormat(\"%b %d, %Y\")+ \"'></i>\" : \"<i data-toggle='tooltip' class='fa icon icon-eye-slash' title='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "'></i>\"));

                            if (json.data[i].media_status || (!json.data[i].media_url && json.data[i].status)) {
                                json.data[i].accessed += \"<i data-toggle='tooltip' class='fa icon icon-archive' title='";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available on storages"), "html", null, true);
        echo "'></i>\";
                            } else if (!json.data[i].media_url) {
                                json.data[i].accessed += \"<i data-toggle='tooltip' class='fa icon icon-banned' title='";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not available on storages"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Check file"), "html", null, true);
        echo "'></i>\";
                            }

                            if (json.data[i].media_url) {
                                json.data[i].accessed += \"<i data-toggle='tooltip' class='fa icon icon-link' title='";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available by custom URL"), "html", null, true);
        echo "'></i>\";
                            }

                        }
                    }
                }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },

                //from macro
                \"columns\": [
                    // be sure to change col indexes at aoColumnDefs if added
                    { \"data\": null, defaultContent: \"\", orderable: false, /*visible: true,*/ className: 'w-1p select-checkbox'},
                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
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
            // line 153
            echo "                    ";
            if (("all" != $this->getAttribute($context["item"], "name", []))) {
                // line 154
                echo "                    {\"data\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\", \"name\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\" ";
                if ( !$this->getAttribute($context["item"], "checked", [])) {
                    echo ", visible: false, className: 'none'";
                }
                echo "}";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ",";
                }
                // line 155
                echo "                    ";
            }
            // line 156
            echo "                ";
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
        // line 157
        echo "                ],

                \"scrollCollapse\": true,
                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\":     true,
                \"order\": [[ 1, \"desc\" ]],
                \"bSort\" : true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                \"select\": {
                    style:    'multi',
                    selector: 'td.select-checkbox'
                },
                \"rowId\": \"RowOrder\", // required to restore selected rows on reload

                // modify the sDom
                \"sDom\": \"<'clearfix'<'pull-right'fAV><'button-place'B>>rt<'row-fluid'<'col-md-4 no-padding'i><'col-md-8 no-padding'pl>>\",

                /* Before shift:
                \"aoColumnDefs\": [
                    { \"targets\": [ -1 , 6], \"orderable\": false},
                    { \"searchable\": false, \"targets\": [ 4, 5, 6, 7, 8, 9, 10, 11, -3, -2, -1 ] },
                    { \"width\": \"10%\", \"targets\": [ 1, 2, 3, 6, 8, -2] },
                    { className: \"dt-center\",    \"targets\": [ 5 ] },
                    { className: \"vc-cat_genre\", \"targets\": [ 6 ] },
                    { className: \"dt-status\",   \"targets\": [ -2 ] },
                    { className: \"action-menu\", \"targets\": [ -1 ] }
                ]
                */

                \"aoColumnDefs\": [
                    //{ \"targets\": [ 7, -1 ], \"orderable\": false },
                    { \"searchable\": false, \"targets\": [ 0, 5, 6, 7, 8, 9, 10, 11, 12, -3, -2, -1 ] },
                    { \"sortable\": false, \"targets\": [ 0, 7, -2, -1 ] },
                    { \"width\": \"10%\", \"targets\": [ 2, 3, 4, 7, 9, -2 ] },
                    { className: \"dt-center\",    \"targets\": [ 6 ] },
                    { className: \"vc-cat_genre\", \"targets\": [ 7 ] },
                    { className: \"dt-status dt-nowrap\",   \"targets\": [ -2 ] },
                    { className: \"action-menu\", \"targets\": [ -1 ] }
                ],


                \"buttons\": [

                    // Publish buttons
                    {
                        extend: 'collection',
                        text: '<i class=\"fa fa-calendar\"></i> ";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publishing"), "html", null, true);
        echo " <i class=\"fa fa-caret-down\"></i>',
                        autoClose: true,
                        background: true,
                        fade: 0,
                        buttons: [
                            {
                                text: '";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "',
                                action: function ( e, dt, node, config ) {
                                    if( \$(this).hasClass('disabled') ){
                                        return false;
                                    }

                                    e.stopPropagation();
                                    e.preventDefault();
                                    JScloseModalBox();

                                    // call popup window
                                    setEnableDatePicker( node );

                                }
                            },
                            {
                                text: '";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "',
                                action: function ( e, dt, node, config ) {
                                    var sendData = {};
                                    var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace(/dTRow_/g, \"\" );

                                    sendData.group_key = \"videoid\";
                                    sendData.videoid = ids;

                                    if ((sendData.videoid).search(',') != -1){
                                        sendData.videoid = JSON.stringify(sendData.videoid.split(','));
                                    }

                                    ajaxPostSend( \"";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/disable-video\", sendData, false, false, true);

                                }
                            }
                        ]
                    },

                    // Drop Сomplaints button
                    {
                        text: '<i class=\"fa fa-thumbs-down\"></i> ";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Drop сomplaints"), "html", null, true);
        echo "',
                        action: function ( e, dt, node, config ) {

                            if( \$(this).hasClass('disabled') )
                                return false;

                            e.stopPropagation();
                            e.preventDefault();
                            JScloseModalBox();

                            var sendData = {};
                            var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace(/dTRow_/g, \"\" );

                            sendData.group_key = \"videoid\";
                            sendData.videoid = ids;

                            if ((sendData.videoid).search(',') != -1){
                                sendData.videoid = JSON.stringify(sendData.videoid.split(','));
                            }

                            ajaxPostSend( \"";
        // line 272
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/reset-video-claims\", sendData, false, false, true);

                        }
                    },

                    // Delete button
                    {
                        text: '<i class=\"fa fa-trash\"></i> ";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "',
                        action: function ( e, dt, node, config ) {

                            if( \$(this).hasClass('disabled') )
                                return false;

                            e.stopPropagation();
                            e.preventDefault();
                            JScloseModalBox();

                            var tr = dt.rows( { selected: true } );
                            var sendData = {};
                            var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace(/dTRow_/g, \"\" );

                            if( confirm( \"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Are you sure you want to delete"), "html", null, true);
        echo " \" +tr.count()+ \" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("video"), "html", null, true);
        echo "?\") ) {
                                sendData.group_key = \"videoid\";
                                sendData.videoid = ids;

                                if ((sendData.videoid).search(',') != -1){
                                    sendData.videoid = JSON.stringify(sendData.videoid.split(','));
                                }

                                ajaxPostSend( \"";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-video\", sendData, false, false, true);
                                resetTableButtons();
                                setGroupSelectState( \"none\" );
                            }
                            return false;
                        }
                    }
                ]

            }).prev('.dataTables_processing').hide();
        }

    function DemoSelect2() {
        \$('#s2_video_moderators').select2({minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'});
    }

    function yelp() {
        \$(document).ready(function () {
            
            LoadDataTablesScripts(TestTable1);
            LoadSelect2Script(DemoSelect2);

            \$(document).tooltip({
                selector: '[data-toggle=\"tooltip\"]',
                placement: 'top'
            });

            var table = \$('#datatable-1').DataTable();

            table
                .on( 'select', function ( e, dt, type, indexes ) {

                    var rows = dt.rows( { selected: true } ).count();
                    
                    \$(\".dt-buttons .dt-button\").show().removeClass( \"disabled\" );

                    if ( rows == dt.rows().count() ){
                        setGroupSelectState( \"all\" );
                    } else {
                        setGroupSelectState( \"some\" );
                    }

                } )
                .on( 'deselect', function ( e, dt, type, indexes ) {

                    var rows = dt.rows( { selected: true } ).count();
                    
                    if ( rows >= 1 ) {
                        \$(\".dt-buttons .dt-button\").show().removeClass( \"disabled\" );
                        setGroupSelectState( \"some\" );
                    } else if ( rows == 0 ) {
                        setGroupSelectState( \"none\" );
                        resetTableButtons();
                    }

                } )

                // expand Processing width for overflow table
                .on( 'processing.dt', function ( e, settings, processing ) {
                    \$(settings.aanFeatures.r).css( 'width', \$(settings.aanFeatures.t).width() );
                } );

                // reset Buttons on Paging reload 
                \$('#datatable-1').on( 'page.dt', function () {
                    resetTableButtons( );
                    setGroupSelectState( \"none\" );
                } );

                // Reinit group actions Table Buttons
                \$('#datatable-1').on( 'draw.dt', function ( e, settings ) {
                    if( table.rows( { selected: true } ).ids().length == 0 ) {
                        resetTableButtons(); 
                        setGroupSelectState('none');
                    }
                } );


            // Select dropdowns 
            \$( \"#select_all\" ).click( function(e){
                if( !\$(this).hasClass(\"disabled\") ) {
                    table.rows().select();
                }
            });

            \$( \"#select_none\" ).click( function(e){
                if( !\$(this).hasClass(\"disabled\") ) {
                    table.rows().deselect();
                }
            });

            \$( \"#select_inverse\" ).click( function(e){
                if( !\$(this).hasClass(\"disabled\") ) {
                    var rowsSelected = table.rows( { selected: true } );
                    table.rows().select();
                    rowsSelected.deselect();
                }
            });

            // Disable annoying message on disabled buttons
            \$(document).off('click', \"a[disabled], a.disabled\");

            setTimeout( initTableButtons, 200 );

            
            \$(document).on('click', \"a.main_ajax\", function (e) {
                e.stopPropagation();
                e.preventDefault();
                var _this = \$(this);
                \$(_this).closest('.open').removeClass('open');

                if( \$(this).attr(\"href\").indexOf(\"remove-video\") != -1 && !confirm(\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete video"), "html", null, true);
        echo " \\\"\" +\$(this).data(\"videoname\")+ \"\\\"?\") ) {
                    return;
                }

                if (_this.attr('href').search(\"enable\") != -1 && !_this.data('video_on_date')) {
                    setEnableDatePicker(_this);
                    return false;
                }

                if (_this.attr('href').search(\"create-tasks\") != -1 && !_this.data('sendData')) {
                    showTaskForm(_this);
                    return false;
                }
                ajaxPostSend(\$(this).attr('href'), \$(this).data(), false, false);

                return false;
            });

            \$(document).on('click', \"#apply_enable_date\", function(e){
                e.stopPropagation();
                e.preventDefault();

                // single Publishing
                var link = \$(\"a[data-videoid='\" + \$(\"#modalbox input[name='link_id']\").val() + \"'][href*='enable']\");
                link.data('video_on_date', \$(\"#modalbox input[name='video_on_date']\").val());
                
                // some outdated code
                if (\$(\"#modalbox input[name='empty_confirm']\").length !=0) {
                    link.data('empty_confirm', 1);
                }

                link.trigger('click');

                return false;
            });

            \$(document).on('click', \"#apply_enable_date_group\", function(e){
                e.stopPropagation();
                e.preventDefault();

                // group Publishing
                if( \$(\"#modalbox input[name='video_on_date']\").val() != '' && table.rows({ selected: true }) ){ 

                    var sendData = {};
                    var ids = table.rows( { selected: true } ).ids().toArray().toString().replace(/dTRow_/g, \"\" );
                
                    sendData.group_key = \"videoid\";
                    sendData.videoid = ids;
                    sendData.video_on_date = \$(\"#modalbox input[name='video_on_date']\").val();

                    if ((sendData.videoid).search(',') != -1){
                        sendData.videoid = JSON.stringify(sendData.videoid.split(','));
                    }

                    ajaxPostSend( \"";
        // line 465
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/enable-video\", sendData);
                }

                return false;
            });

            \$(document).on('click', \"#reset_enable_date, #modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function(e){
                if (e.currentTarget != e.target) {
                    return;
                }
                e.stopPropagation();
                e.preventDefault();
                \$(\"div[id*='datepicker']\").hide().remove();
                closeModalBox();
                return false;
            });
            
            \$(document).on('click', \"#modalbox_ad button[type='submit']\", function (e) {
                var sendData = {
                    id: \$(\"#modalbox_ad input[name='id']\").val(),
                    to_usr: \$(\"#modalbox_ad select\").val(),
                    comment: \$(\"#modalbox_ad textarea\").val()
                };
                
                e.stopPropagation();
                e.preventDefault();
                var linkObj = \$(\"a[data-videoid='\" + \$(\"#modalbox_ad input[type='hidden']\").val() + \"'][href*='create']\");
                
                linkObj.data('sendData', sendData).click();
                return false;
            });

            \$(document).off('click', \"#modalbox_ad a.close-link, #modalbox_ad a.close-link .fa-times, #modalbox_ad, #modalbox_ad button[type='reset']\");
            \$(document).on('click', \"#modalbox_ad a.close-link, #modalbox_ad a.close-link .fa-times, #modalbox_ad, #modalbox_ad button[type='reset']\", function (e) {
                if (e.target != e.currentTarget) {
                    return;
                }
                e.stopPropagation();
                e.preventDefault();
                \$(\"#modalbox_ad\").hide();

                \$(\"input, select, textarea\", \"#modalbox_ad\").val('');
                \$(\"#modalbox_ad select\").select2('destroy');
                \$(\"#modalbox_ad form\").get(0).reset();
                DemoSelect2();
                return false;
            })
        });
    }

    document.addEventListener(\"DOMContentLoaded\", yelp, false);

    var setMD5 = function(){
        \$(\"#modalbox a[href\$='get-md5']\").replaceWith('<span class=\"txt-success\"> &nbsp; ";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("counting"), "html", null, true);
        echo " &nbsp; </span>');
    };

    var setMD5Error = function(obj){
        if (obj.error) {
            \$(\"#modalbox a[href\$='get-md5']\").replaceWith('<span class=\"txt-danger\"> &nbsp;' + obj.error + '&nbsp; </span>');
        }
    };

    var videoinfo = function (obj){
        closeModalBox();
        \$('#modalbox').show();
        \$('#modalbox').find('.modal-header-name span').text(obj.title);
        var baseInfo = obj.base_info;
        if (typeof(baseInfo) == 'string') {
            \$('#modalbox').find('.devoops-modal-inner').append('<div class=\"col-xs-12\"><span>' + baseInfo + '</span></div>');
        } else if (typeof(baseInfo) == 'object') {
            var table = \$('<table class=\"video_info\"></table>').appendTo(\$('#modalbox').find('.devoops-modal-inner'));
            table.append('<tr><td>";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Server"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Catalogue"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Episodes"), "html", null, true);
        echo "</td><td>&nbsp;</td></tr>');
            table.wrap('<div class=\"col-xs-12\"></div>');
            \$.each(baseInfo, function(index, value){
                var trStr = '<tr><td>'+ value.storage_name +'</td><td>'+ value.path +'</td><td>'+ value.series +'</td>';
                    trStr += '<td><a class=\"main_ajax no_context_menu\" href=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-md5\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Calculate MD5 checksum"), "html", null, true);
        echo "</a></td></tr>';
                table.append(trStr);
                table.find('a').data('storage_name', value.storage_name);
                table.find('a').data('media_name', value.path);
                if (value.files.length > 0 ) {
                    var filesStr = '';
                    var md5Str = '';
                    \$.each(value.files, function(f_index, f_value){
                        filesStr = '<span class=\"video_file_name\">' + f_value.name + '</span>';
                        md5Str = '<span class=\"video_file_name\">' + f_value.md5 + '</span>';
                        table.append('<tr><td colspan=\"3\">' + filesStr + '</td><td >' + md5Str + '</td></tr>');
                    });
                }
            });
        }
    };

    function closeModalBox(){
        \$(\"#modalbox\").hide().removeClass(\"modal-schedule\");
        \$(\".datepicker-inline\").datepicker( \"destroy\" );
        \$('#modalbox').find('.modal-header-name span').empty();
        \$('#modalbox').find('.devoops-modal-inner').empty();
        \$('#modalbox').find('.devoops-modal-bottom').empty();
    }

    function setEnableDatePicker(obj){
        \$('#modalbox').find('.modal-header-name span').text('";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "');

        \$('#modalbox').find('.devoops-modal-inner').html('\\n\\
                <div class=\"box-content\">\\n\\
                    <form class=\"form-horizontal\" role=\"form\">\\n\\
                        <div class=\"form-group\">\\n\\
                            <div class=\"col-xs-10 col-sm-12\">\\n\\
                                <span class=\"col-xs-8 col-sm-12\">\\n\\
                                   <input type=\"hidden\" name=\"link_id\" value=\"' + obj.data('videoid') + '\">\\n\\
                                   <input type=\"hidden\" data-date-format=\"dd-mm-yy\" name=\"video_on_date\">\\n\\
                                   <input type=\"text\" id=\"video_on_date\" class=\"form-control own_fields datepicker-field\" data-date-format=\"dd-mm-yy\" readonly=\"readonly\">\\n\\
                                   <div class=\"datepicker-inline\" data-date-format=\"dd-mm-yy\"></div>\\n\\
                                    <div class=\"bg-danger\"></div>\\n\\
                                </span>\\n\\
                            </div>\\n\\
                        </div>\\n\\
                    </form>\\n\\
                </div>');
\t\t\t\t

\t\t\$('#modalbox').find('.devoops-modal-bottom').html('<div class=\"pull-right no-padding\">&nbsp;</div>\\n\\
                        <div class=\"pull-right no-padding\">\\n\\
                            <button type=\"submit\" id=\"apply_enable_date'+(obj.hasClass(\"main_ajax\") ? '':'_group')+'\" class=\"btn btn-success  pull-right\">";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "</button>\\n\\
                            <button type=\"reset\" id=\"reset_enable_date\" class=\"btn btn-default pull-right\" >";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                        </div>');
   

        \$(\".datepicker-inline\").datepicker({
                language    : 'ru',
                dateFormat  : 'dd-mm-yy',
                firstDay    : 1,
                minDate     : new Date(),
                altField    : \"input#video_on_date\",
                altFormat   : \"MM d, yy\",
                currentText : '";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Today"), "html", null, true);
        echo "', // Today button text
                dayNamesMin : [
                    '";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
        echo "',
                    '";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
        echo "',
                    '";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
        echo "',
                    '";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
        echo "',
                    '";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
        echo "',
                    '";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
        echo "',
                    '";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
        echo "'
                ],
                dayNames    : [
                    '";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sunday"), "html", null, true);
        echo "',
                    '";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Monday"), "html", null, true);
        echo "',
                    '";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tuesday"), "html", null, true);
        echo "',
                    '";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wednesday"), "html", null, true);
        echo "',
                    '";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thursday"), "html", null, true);
        echo "',
                    '";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Friday"), "html", null, true);
        echo "',
                    '";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Saturday"), "html", null, true);
        echo "'
                ],
                monthNames  : [
                    '";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
        echo "',
                    '";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
        echo "',
                    '";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
        echo "',
                    '";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
        echo "',
                    '";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
        echo "',
                    '";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
        echo "',
                    '";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
        echo "',
                    '";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
        echo "',
                    '";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
        echo "',
                    '";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
        echo "',
                    '";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
        echo "',
                    '";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
        echo "'
                ],
                onSelect    : function(dateText){
                                \$(\"input[name=video_on_date]\").val( \$(this).val() );
                                //alert(dateText);
                            }
            }
        );

        // Rewrite the default behavior of Today Button to select current day
        // https://stackoverflow.com/a/7613795/4704856
        \$.datepicker._gotoToday = function(id) {
            var target = \$(id);
            var inst = this._getInst(target[0]);
            if (this._get(inst, 'gotoCurrent') && inst.currentDay) {
                    inst.selectedDay = inst.currentDay;
                    inst.drawMonth = inst.selectedMonth = inst.currentMonth;
                    inst.drawYear = inst.selectedYear = inst.currentYear;
            }
            else {
                    var date = new Date();
                    inst.selectedDay = date.getDate();
                    inst.drawMonth = inst.selectedMonth = date.getMonth();
                    inst.drawYear = inst.selectedYear = date.getFullYear();
                    // the below two lines are new
                    this._setDateDatepicker(target, date);
                    this._selectDate(id, this._getDateDatepicker(target));
            }
            this._notifyChange(inst);
            this._adjustDate(target);
        }

        // clear input assigned to Datepicker
        \$(\"input#video_on_date\").val(\"\");
        // remove visual select of today in calendar
        \$(\".ui-datepicker-today .ui-state-active\").removeClass(\"ui-state-active\")

        // ?? this will be removed in future
        \$(\"div[id*='datepicker']\").addClass('dp_white');
        
        // close context menu before displaying modalbox
        \$(obj).closest('div.open').removeClass('open');
        
        // show modal box
        \$('#modalbox').addClass(\"modal-schedule\").show();
    }

    function initTableButtons() { 
        //\$(\".dataTables_wrapper .dt-buttons .dt-button\").hide();
        \$(\".dt-group-select-dropdown\").prependTo( \$(\".dataTables_wrapper .dt-buttons\").first() );

        resetTableButtons();
    }

    function resetTableButtons() { 
        \$(\".dt-buttons .dt-button\").not(\".dt-group-select-dropdown .dt-button\").addClass( \"disabled\" ).hide();
    }

    function setGroupSelectState(state) {
        if ( typeof state != \"string\" ){
            return;
        }

        \$(\".dt-group-select-dropdown\").removeClass( \"all none some\" ).addClass( state );
        
        \$(\"#select_all, #select_none, #select_inverse\").removeClass( \"disabled\" );
            
            switch( state ) {
        
        case \"none\": \$(\"#select_none, #select_inverse\").addClass( \"disabled\" );
                     break;

        case \"all\":  \$(\"#select_all\").addClass( \"disabled\" );
                     break;
        }
    }


    function showTaskForm(obj){
        var showName = \$(obj).closest('tr').find('a[data-fieldname=\"name\"]').text();
        \$('#modalbox_ad').find('input[type=\"hidden\"]').val(\$(obj).data('videoid')).next().text(showName);
        \$('#modalbox_ad').show();
        \$('#modalbox_ad textarea').focus();
        \$(obj).closest('div.open').removeClass('open');
    }
    
    function hideTaskForm(obj){
        
        \$('#modalbox_ad').find('input[type=\"hidden\"]').val('').next().text('');
        \$('#modalbox_ad').find('textarea').val('');
        \$('#modalbox_ad').hide();
        \$(obj).closest('div.open').removeClass('open');
    }

    // some old code
    function publishWarning(obj){
        var sendData = {
            empty_confirm: 1
        };
        \$(\"#modalbox form input\").each(function(){
            sendData[\$(this).attr('name')] = \$(this).val();
        });

        \$(\"#modalbox form\").empty();
        var field;
        for (var name in sendData) {
            field = \$('<input/>').appendTo(\"#modalbox form\");
            field.prop({type: 'hidden', name: name, value: sendData[name]});
        }
        if (obj && obj.msg) {
            field = \$('<span/>').appendTo(\"#modalbox form\");
            field.addClass('col-sm-11').text(obj.msg);
        }

        \$(obj).removeData('video_on_date').removeData('empty_confirm');
    }
";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_list/video_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  976 => 631,  972 => 630,  968 => 629,  964 => 628,  960 => 627,  956 => 626,  952 => 625,  948 => 624,  944 => 623,  940 => 622,  936 => 621,  932 => 620,  926 => 617,  922 => 616,  918 => 615,  914 => 614,  910 => 613,  906 => 612,  902 => 611,  896 => 608,  892 => 607,  888 => 606,  884 => 605,  880 => 604,  876 => 603,  872 => 602,  867 => 600,  853 => 589,  849 => 588,  824 => 566,  791 => 540,  780 => 536,  759 => 518,  701 => 465,  644 => 411,  529 => 301,  516 => 293,  499 => 279,  487 => 272,  464 => 252,  450 => 243,  435 => 231,  416 => 215,  407 => 209,  353 => 157,  339 => 156,  336 => 155,  323 => 154,  320 => 153,  303 => 152,  293 => 145,  285 => 142,  273 => 133,  264 => 129,  259 => 127,  249 => 124,  237 => 115,  230 => 111,  220 => 104,  211 => 100,  205 => 97,  198 => 93,  193 => 91,  184 => 85,  165 => 71,  151 => 60,  145 => 59,  138 => 55,  132 => 54,  124 => 49,  118 => 48,  110 => 43,  104 => 42,  97 => 38,  91 => 37,  82 => 33,  76 => 32,  69 => 28,  63 => 27,  50 => 19,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_list/video_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_list/video_list.js.twig");
    }
}
