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

/* default/NewVideoClub/video_schedule/video_schedule.js.twig */
class __TwigTemplate_f5a8176c4d40df235b6419285dfcf94ddbd09ec97842742a0f27069812e3aba4 extends \Twig\Template
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
            var date, id, name, curr_on_date, videoid, taskid, video_on_date = new Date().toLocaleFormat(\"%d-%m-%Y\");
            for (var i in json.data) {
                id = json.data[i].id;
                name = json.data[i].name;
                videoid = json.data[i].video_id;
                taskid = json.data[i].task_id;

                date = json.data[i]['task_added'];
                if (date > 0) {
                    date = new Date(date * 1000);
                    json.data[i]['task_added'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                }

                date = json.data[i]['task_date_on'];
                if (date > 0) {
                    date = new Date(date);
                    json.data[i]['task_date_on'] = \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("scheduled on"), "html", null, true);
        echo " \" + date.toLocaleFormat(\"%d-%m-%y\");
                    curr_on_date = date.toLocaleFormat(\"%d-%m-%y\");
                }

                json.data[i]['name'] = '<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-video?id='+videoid+'\" data-fieldname=\"name\">'+name+'</a>';

                json.data[i].operations = '<div class=\"col-xs-3 col-sm-8 ddd\">\\n\\
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">\\n\\
                                                    <i class=\"pull-right fa fa-cog\"></i>\\n\\
                                                </a>\\n\\
                                                <ul class=\"dropdown-menu pull-right\">\\n\\
                                                    <li>\\n\\
                                                        <a class=\"main_ajax no_context_menu\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/enable-video\" data-shedulepage=\"1\" data-videoid=\"'+videoid+'\" data-taskid=\"'+taskid+'\" data-publish_on=\"'+date.toLocaleFormat(\"%d-%m-%Y\")+'\" data-video_on_date=\"'+video_on_date+'\" data-curr_on_date=\"'+curr_on_date+'\" data-rowid = \"' + json.data[i].RowOrder +'\">\\n\\
                                                            <span>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                    <li>\\n\\
                                                        <a class=\"main_ajax no_context_menu\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/enable-video\" data-shedulepage=\"1\" data-videoid=\"'+videoid+'\" data-video_on_date=\"'+video_on_date+'\" data-waiting=\"1\"  data-rowid = \"' + json.data[i].RowOrder +'\">\\n\\
                                                            <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish now"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                    <li>\\n\\
                                                        <a class=\"main_ajax no_context_menu\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-tasks\" data-taskid=\"'+taskid+'\"  data-rowid = \"' + json.data[i].RowOrder +'\">\\n\\
                                                            <span>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove schedule"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                </ul>\\n\\
                                            </div>';

            }
        }
    }).dataTable( {
        \"processing\": true,
        \"serverSide\": true,
        \"ajax\": {
            \"url\": \"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-schedule-list-json\"
        },
        \"language\": {
            \"url\": \"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
        },

        //from macro
        \"columns\": [
            // be sure to change col indexes at aoColumnDefs if added
            { \"data\": null, defaultContent: \"\", orderable: false, /*visible: true,*/ className: 'w-1p select-checkbox'},
            ";
        // line 66
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
            // line 67
            echo "            ";
            if (("all" != $this->getAttribute($context["item"], "name", []))) {
                // line 68
                echo "            {\"data\": \"";
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
                // line 69
                echo "            ";
            }
            // line 70
            echo "            ";
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
        // line 71
        echo "        ],

        \"scrollCollapse\": true,
        \"bFilter\": true,
        \"bPaginate\": true,
        \"bInfo\":     true,
        \"bSort\" : true,
        \"lengthChange\": true,

        fixedHeader: {
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
         { \"orderable\": false, \"targets\": [ -1 ] },
         { \"searchable\": false, \"targets\": [ -1 ] },
         { \"width\": \"10%\", \"targets\": [ 0, 3, 4, 5 ] },
         //{ \"width\": \"25%\", \"targets\": [ 1, 2 ] },
         { className: \"action-menu\", \"targets\": [ -1 ] }
         ],*/

        \"order\": [[ 1, \"asc\" ]],

        \"aoColumnDefs\": [
            { \"orderable\": false, \"targets\": [ -1 ] },
            { \"searchable\": false, \"targets\": [ -1 ] },
            { \"width\": \"10%\", \"targets\": [ 1, 4, 5, 6 ] },
            //{ \"width\": \"25%\", \"targets\": [ 2, 3 ] },
            { className: \"dt-nowrap\", \"targets\": [ 1, -3 ] },
            { className: \"action-menu\", \"targets\": [ -1 ] }
        ],


        \"buttons\": [

            // Publish buttons
            {
                text: '<i class=\"fa fa-calendar\"></i> ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit schedule"), "html", null, true);
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

            // Publish Now button
            {
                text: '<i class=\"fa fa-calendar-check-o\"></i> ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish now"), "html", null, true);
        echo "',
                action: function ( e, dt, node, config ) {

                    if( \$(this).hasClass('disabled') )
                        return false;

                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();

                    var sendData = {};
                    var today = new Date().toLocaleFormat(\"%d-%m-%Y\");
                    var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace(/dTRow_/g, \"\" );

                    sendData.group_key = \"videoid\";
                    sendData.videoid = ids;
                    sendData.video_on_date = today;
                    sendData.shedulepage = 1;

                    if ((sendData.videoid).search(',') != -1){
                        sendData.videoid = JSON.stringify(sendData.videoid.split(','));
                    }

                    ajaxPostSend( \"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/enable-video\", sendData, false, false, true);

                    resetTableButtons();
                    setGroupSelectState( \"none\" );
                }
            },

            // Remove button
            {
                text: '<i class=\"fa fa-trash\"></i> ";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove schedule"), "html", null, true);
        echo "',
                action: function ( e, dt, node, config ) {

                    if( \$(this).hasClass('disabled') )
                        return false;

                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();

                    var sendData = {};
                    var tr = dt.rows({ selected: true });

                    var example = dt.rows({ selected: true }).data().toArray();
                    var values = \$.map(example, function (item) {
                        return item.task_id;
                    });

                    var ids = values.toString();

                    sendData.group_key = \"taskid\";
                    sendData.taskid = ids;

                    if ((sendData.taskid).search(',') != -1){
                        sendData.taskid = JSON.stringify(sendData.taskid.split(','));
                    }

                    ajaxPostSend( \"";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-tasks\", sendData, false, false, true);
                    resetTableButtons();
                    setGroupSelectState( \"none\" );

                    return false;
                }
            }
        ]

    }).prev('.dataTables_processing').hide('');
}

function yelp() {
    \$(document).ready(function () {

        LoadDataTablesScripts(TestTable1);

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

            if (_this.data('curr_on_date') && !_this.data('waiting')) {
                setEnableDatePicker(_this);
                return false;
            }

            ajaxPostSend(\$(this).attr('href'), \$(this).data(), false, false);
            _this.closest('div.open').removeClass('open');
            return false;
        });

        \$(document).on('click', \"#apply_enable_date\", function(e){
            e.stopPropagation();
            e.preventDefault();

            var link = \$(\"a[data-videoid='\" + \$(\"#modalbox input[name='link_id']\").val() + \"'][href*='enable']\");
            link.data('video_on_date', \$(\"#modalbox input[name='video_on_date']\").val());

            if (\$(\"#modalbox input[name='empty_confirm']\").length !=0) {
                link.data('empty_confirm', 1);
            }

            link.trigger('click');

            return false;
        });

        // Group action for publish Date
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
                sendData.shedulepage = 1;

                if ((sendData.videoid).search(',') != -1){
                    sendData.videoid = JSON.stringify(sendData.videoid.split(','));
                }

                ajaxPostSend( \"";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/enable-video\", sendData);
            }

            return false;
        });

    });
}

document.addEventListener(\"DOMContentLoaded\", yelp, false);

var removeTasks = function (obj) {
    \$('#datatable-1').DataTable().row( \$(obj).closest('tr') ).remove().draw();
};

function setEnableDatePicker(obj) {
    var isGroupAction = !obj.hasClass(\"main_ajax\");
    var table = \$(\"#datatable-1\").DataTable();

    if( isGroupAction ) {
        obj = \$(\"a.main_ajax[data-taskid][data-videoid='\" +table.rows({ selected: true }).data().toArray()[0].video_id+ \"']\")
    }

    \$('#modalbox').find('.modal-header-name span').text('";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Schedule"), "html", null, true);
        echo "');

    \$('#modalbox').find('.devoops-modal-bottom').html('<div class=\"pull-right no-padding\">&nbsp;</div>\\n\\
                    <div class=\"pull-right no-padding\">\\n\\
                        <input type=\"submit\" id=\"apply_enable_date'+(isGroupAction? '_group':'')+'\" class=\"btn btn-success  pull-right\" value=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "\" />\\n\\
                        <button type=\"reset\" id=\"reset_enable_date\" class=\"btn btn-default pull-right\" >";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                    </div>');

    if ( !isGroupAction || table.rows({ selected: true }).count() == 1 )
    {
        \$('#modalbox').find('.devoops-modal-inner').html('\\n\\
            <div class=\"box-content\">\\n\\
                <form class=\"form-horizontal\" role=\"form\">\\n\\
                    <div class=\"form-group\">\\n\\
                        <div class=\"col-xs-10 col-sm-12\">\\n\\
                            <span class=\"col-xs-8 col-sm-12\">\\n\\
                                <input type=\"hidden\" name=\"link_id\" value=\"' + obj.data('videoid') + '\">\\n\\
                                <input type=\"text\" id=\"video_on_date\" class=\"form-control own_fields datepicker-field\" data-date-format=\"dd-mm-yy\" name=\"video_on_date\" value=\"'+obj.data('publish_on')+'\">\\n\\
                                <div class=\"datepicker-inline\" data-date-format=\"dd-mm-yy\"></div>\\n\\
                                <div class=\"bg-danger\"></div>\\n\\
                            </span>\\n\\
                        </div>\\n\\
                    </div>\\n\\
                </form>\\n\\
            </div>');

        \$(\".datepicker-inline\").datepicker({
                language    : 'ru',
                dateFormat  : 'dd-mm-yy',  // actual format is dd-mm-yyyy don't change to -yy becouse server will parse date as yy-mm-dd when save
                defaultDate : \$(\"input[name=video_on_date]\").val(),
                firstDay    : 1,
                minDate     : new Date(),
                //altField    : \"input#video_on_date\",
                //altFormat   : \"dd-mm-yy\",
                currentText : '";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Today"), "html", null, true);
        echo "',
                dayNamesMin : [
                    '";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
        echo "',
                    '";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
        echo "',
                    '";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
        echo "',
                    '";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
        echo "',
                    '";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
        echo "',
                    '";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
        echo "',
                    '";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
        echo "'
                ],
                dayNames    : [
                    '";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sunday"), "html", null, true);
        echo "',
                    '";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Monday"), "html", null, true);
        echo "',
                    '";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tuesday"), "html", null, true);
        echo "',
                    '";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wednesday"), "html", null, true);
        echo "',
                    '";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thursday"), "html", null, true);
        echo "',
                    '";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Friday"), "html", null, true);
        echo "',
                    '";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Saturday"), "html", null, true);
        echo "'
                ],
                monthNames  : [
                    '";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
        echo "',
                    '";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
        echo "',
                    '";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
        echo "',
                    '";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
        echo "',
                    '";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
        echo "',
                    '";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
        echo "',
                    '";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
        echo "',
                    '";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
        echo "',
                    '";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
        echo "',
                    '";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
        echo "',
                    '";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
        echo "',
                    '";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
        echo "'
                ],
                onSelect    : function(dateText){
                    \$(\"input[name=video_on_date]\").val( dateText );
                }
            }
        );

        // Put back dafault action of Today button click
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
            }
            this._notifyChange(inst);
            this._adjustDate(target);
        };

    } else {

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

        \$(\".datepicker-inline\").datepicker({
                language    : 'ru',
                dateFormat  : 'dd-mm-yy',
                firstDay    : 1,
                minDate     : new Date(),
                altField    : \"input#video_on_date\",
                altFormat   : \"MM d, yy\",
                currentText : '";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Today"), "html", null, true);
        echo "',
                dayNamesMin : [
                    '";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
        echo "',
                    '";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
        echo "',
                    '";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
        echo "',
                    '";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
        echo "',
                    '";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
        echo "',
                    '";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
        echo "',
                    '";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
        echo "'
                ],
                dayNames    : [
                    '";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sunday"), "html", null, true);
        echo "',
                    '";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Monday"), "html", null, true);
        echo "',
                    '";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tuesday"), "html", null, true);
        echo "',
                    '";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wednesday"), "html", null, true);
        echo "',
                    '";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thursday"), "html", null, true);
        echo "',
                    '";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Friday"), "html", null, true);
        echo "',
                    '";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Saturday"), "html", null, true);
        echo "'
                ],
                monthNames  : [
                    '";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
        echo "',
                    '";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
        echo "',
                    '";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
        echo "',
                    '";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
        echo "',
                    '";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
        echo "',
                    '";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
        echo "',
                    '";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
        echo "',
                    '";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
        echo "',
                    '";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
        echo "',
                    '";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
        echo "',
                    '";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
        echo "',
                    '";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
        echo "'
                ],
                onSelect    : function(dateText){
                    \$(\"input[name=video_on_date]\").val( \$(this).val() );
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
        };

        // clear input assigned to Datepicker
        \$(\"input#video_on_date\").val(\"\");
        // remove visual select of today in calendar
        \$(\".ui-datepicker-today .ui-state-active\").removeClass(\"ui-state-active\")

    }

    \$(\"input[name=video_on_date]\")
        .on(\"change\",function(){
            \$('.datepicker-inline').datepicker(\"setDate\", \$(this).val() );
        })
        .on(\"keyup\",function(e){
            e.preventDefault();
            e.stopPropagation();

            if( e.keyCode == 13 ){
                \$(\"#apply_enable_date\").click();
                return false;
            }

            \$('.datepicker-inline').datepicker(\"setDate\", \$(this).val() );
        });

    // prevent submiting form on Enter press at text field
    \$(window).keydown(function(event){
        if(event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });

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

function closeModalBox(){
    \$(\"#modalbox\").hide().removeClass();
    \$(\".datepicker-inline\").datepicker( \"destroy\" );
    \$('#modalbox').find('.modal-header-name span').empty();
    \$('#modalbox').find('.devoops-modal-inner').empty();
    \$('#modalbox').find('.devoops-modal-bottom').empty();
}

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
        return "default/NewVideoClub/video_schedule/video_schedule.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  821 => 513,  817 => 512,  813 => 511,  809 => 510,  805 => 509,  801 => 508,  797 => 507,  793 => 506,  789 => 505,  785 => 504,  781 => 503,  777 => 502,  771 => 499,  767 => 498,  763 => 497,  759 => 496,  755 => 495,  751 => 494,  747 => 493,  741 => 490,  737 => 489,  733 => 488,  729 => 487,  725 => 486,  721 => 485,  717 => 484,  712 => 482,  656 => 429,  652 => 428,  648 => 427,  644 => 426,  640 => 425,  636 => 424,  632 => 423,  628 => 422,  624 => 421,  620 => 420,  616 => 419,  612 => 418,  606 => 415,  602 => 414,  598 => 413,  594 => 412,  590 => 411,  586 => 410,  582 => 409,  576 => 406,  572 => 405,  568 => 404,  564 => 403,  560 => 402,  556 => 401,  552 => 400,  547 => 398,  515 => 369,  511 => 368,  504 => 364,  476 => 341,  326 => 196,  296 => 169,  282 => 160,  256 => 137,  235 => 119,  185 => 71,  171 => 70,  168 => 69,  155 => 68,  152 => 67,  135 => 66,  125 => 59,  117 => 56,  102 => 44,  96 => 43,  89 => 39,  83 => 38,  76 => 34,  70 => 33,  59 => 25,  52 => 21,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_schedule/video_schedule.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_schedule/video_schedule.js.twig");
    }
}
