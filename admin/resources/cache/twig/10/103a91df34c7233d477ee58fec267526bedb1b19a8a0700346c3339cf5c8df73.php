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

/* default/TvChannels/iptv_list/iptv_list.js.twig */
class __TwigTemplate_6244b5dee021f53bbc54afd9efb12469bbc7b0eb034593f6a46f971e845a1ddb extends \Twig\Template
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

var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'};

function DemoSelect2() {
    \$('#s2_channel').select2(select2Opt);
}

function TestTable1() {
    \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
        if (typeof (json.data) == 'object') {
            for (var i in json.data) {
                var status = json.data[i].status;
                var claimsCount = json.data[i].sound_counter + json.data[i].video_counter + json.data[i].no_epg + json.data[i].wrong_epg;
                json.data[i].logo = '<img class=\"img-rounded- channel-logo '+ (json.data[i].logo ? \"\": \"no-logo\" )+'\" src=\"' + ( json.data[i].logo ? json.data[i].logo + \"?\" + \$.random(100000) : '";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/icon-channel-no-logo.svg') + '\" alt=\"\">';
                json.data[i].name = '<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-channel?id=' + json.data[i].id + '\">' + json.data[i].name + '</a>';
                // for demo:
                // change data output from time<br>status to status:title=time
                var temp = json.data[i].monitoring_status.split(\"<br>\");
                json.data[i].monitoring_status = temp[1] ? temp[1].replace( '<span', '<span title=\"'+ temp[0] +'\"' ) : temp[0] ;

                json.data[i].languages = '<div class=\"nowrap'+ (json.data[i].languages.indexOf(',') != -1 ?\" flexible\" : \"\") +'\"><span class=\"\">' +json.data[i].languages+ '</span></div>';
                json.data[i].cmd = '<div class=\"nowrap\"><span class=\"\" title=\"' +json.data[i].cmd+ '\">' +json.data[i].cmd+ '</span></div>';

                json.data[i].tv_archive_type = ( json.data[i].tv_archive_type ? '<img class=\"icon-tv-archive\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/icon-timeshift.svg\" alt=\"'+json.data[i].tv_archive_type+'\" title=\"'+json.data[i].tv_archive_type+'\">' : \"-\" /*'<span class=\"fa fa-circle-thin\"></span>'*/ );
                json.data[i].status = '\\
                       <div class=\"mswitch\">\\
                            <input type=\"checkbox\" \\
                                   id=\"channel_status_'+ json.data[i].id +'\"\\
                                   name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                   ' + ( json.data[i].status ? 'checked=\"checked\"' : '' ) +'\\
                                   data-id=\"' + json.data[i].id + '\"\\
                                   value=\"' + ( json.data[i].status ? 'on' : 'off' ) +'\">\\
                            <label class=\"label-success\" \\
                                   title=\"' + ( json.data[i].status ? \"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "\" ) + '\" \\
                                   for=\"channel_status_'+ json.data[i].id +'\"></label>\\
                        </div>\\
                        ';

                if (claimsCount) {
                    json.data[i].claims = [json.data[i].video_counter, json.data[i].sound_counter, json.data[i].no_epg, json.data[i].wrong_epg].join('/');
                } else {
                    json.data[i].claims = \"-/-/-/-\";
                }
                json.data[i].operations = '<div class=\"col-xs-3 col-sm-8 ddd\">\\n\\
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">\\n\\
                                                    <i class=\"pull-right fa fa-cog\"></i>\\n\\
                                                </a>\\n\\
                                                <ul class=\"dropdown-menu pull-right\">\\n\\
                                                    <li>\\n\\
                                                        <a class=\"\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-channel?id=' + json.data[i].id  + '\">\\n\\
                                                            <span>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                    <li>\\n\\
                                                        <a class=\"main_ajax no_context_menu\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-channel-epg-item\" data-id=\"' + json.data[i].id  + '\">\\n\\
                                                            <span>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Manage EPG"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                    <li>\\n\\
                                                        <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/move-channel?channel_id=' + json.data[i].id  + '\">\\n\\
                                                            <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Move"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                    '+ (claimsCount ? '\\
                                                    <li>\\n\\
                                                        <a class=\"main_ajax no_context_menu\" ' + (claimsCount ? '': 'disabled=\"disabled\"') + ' href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/itv-reset-claims\" data-media_id=\"' + json.data[i].id  + '\" data-media_type=\"' + json.data[i].media_type  + '\">\\n\\
                                                            <span>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset media-claims"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n' : '' ) + '\\
                                                    <li>\\n\\
                                                        <a class=\"main_ajax no_context_menu\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/' + (status ? 'disable' : 'enable') + '-channel\" data-id=\"' + json.data[i].id  + '\">\\n\\
                                                            <span>' + (status ? \"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "\") + '</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                    <li>\\n\\
                                                        <a class=\"main_ajax no_context_menu\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-channel\" data-id=\"' + json.data[i].id  + '\">\\n\\
                                                            <span>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                </ul>\\n\\
                                            </div>';

            }
        }
    }).dataTable({
        \"processing\": true,
        \"serverSide\": true,
        \"ajax\": {
            \"url\": \"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/iptv-list-json\"
        },
        \"language\": {
            \"url\": \"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
        },
        \"bFilter\": true,
        \"lengthChange\": true,
        \"bPaginate\": true,
        \"bInfo\":     true,

        fixedHeader: {
            header: true,
            headerOffset: \$('header.navbar').height()
        },
\t\tselect: {
            style:    'multi',
            selector: 'td.select-checkbox'
        },
        rowId: \"RowOrder\", // required to restore selected rows on reload
        //\"pagingType\": \"full_numbers\",
        
        // modify the sDom param from dataTables.bootstrap.js
        \"sDom\": \"<'clearfix'<'pull-right'fAV><'button-place'B>>rt<'row-fluid'<'col-md-4 no-padding'i><'col-md-8 no-padding'pl>>\",
        bAutoWidth: false,
        
        //from macro
        \"columns\": [
            // be sure to change col indexes at aoColumnDefs if added
            { \"data\": null, defaultContent: \"\", orderable: false, /*visible: true,*/ className: 'w-1p select-checkbox'},
        ";
        // line 119
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
            // line 120
            echo "            ";
            if (("all" != $this->getAttribute($context["item"], "name", []))) {
                // line 121
                echo "            {\"data\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\", /**/ \"name\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\" ";
                if ( !$this->getAttribute($context["item"], "checked", [])) {
                    echo ", visible: false, className: 'none'";
                }
                echo "}";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ",";
                }
                // line 122
                echo "            ";
            }
            // line 123
            echo "        ";
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
        // line 124
        echo "        ],

        /* Before shift: 
        \"aoColumnDefs\": [ 
            { \"targets\": [ -1 ], \"sortable\": false},
            { \"searchable\": false, \"targets\": [ 2, 4, 5, 8, 9, 10, 11] },
            { \"sortable\": false, \"targets\": [8, 11] },
            { className: \"w-1p dt-center\",  \"targets\": [ 1 ] },
            //{ className: 'dt-right', orderable: false, targets: [0] },
            { className: \"w-1p dt-right\",  \"targets\": [ 2 ] },
            //{ className: \"dt-nowrap\", \"targets\": [ 3, 6 ] },
            { className: \"dt-center\", \"targets\": [ 7 ] },
            { className: \"dt-status\", \"targets\": [ -3 ] },
            { className: \"action-menu\", \"targets\": [ -1 ] }
        ]*/

        \"order\": [[ 2, \"asc\" ]], // set the Dafault oder column. works OK when table state is saved and loaded
        \"aoColumnDefs\": [ 
            //{ \"targets\": [ -1 ], \"sortable\": false },
            { \"searchable\": false, \"targets\": [ 0, 3, 5, 6, 8, 10, 11, 12, -1 ] },
            { \"sortable\": false, \"targets\": [ 0, 6, 10, -1 ] },
            { className: \"w-1p dt--center\",  \"targets\": [ 1 ] },
            { className: \"w-1p dt--right\",  \"targets\": [ 2 ] },
            { className: \"tv-lang\", \"targets\": [ 6 ] },
            { className: \"dt-center\", \"targets\": [ 8 ] },
            { className: \"dt-status\", \"targets\": [ -3 ] },
            { className: \"action-menu\", \"targets\": [ -1 ] }
        ],


        // remove column.visible from stateSave 
        // the DT was applying the column visibility setting from stateSave after dropdown filter
        \"stateSaveParams\": function (settings, data) {
                                
                                data.columns.forEach(
                                    function(item) {
                                        item.visible = null;
                                        delete item.visible;
                                });
                                //console.log( data.columns );
                            },


        \"buttons\": [
            
            // Ganre button
            {
                //text: '<i class=\"fa fa-th-list fa-tag-\"></i> ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change genre"), "html", null, true);
        echo "',
                text: '<i class=\"fa fa-th-list fa-tag-\"></i> ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Genre"), "html", null, true);
        echo "',
                action: function ( e, dt, node, config ) {
                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();
                    \$('#modalbox').find('.modal-header-name').html(\"<span class='text-default'>";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change tv-genre"), "html", null, true);
        echo "</span>\");
                    \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#change_channel_genre_template\").html());
                    \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_form_button_template\").html());
                    \$('#tv_genre_id').select2(select2Opt);

                    // if parameter \"rowId\": not set use this:
                    //console.log( dt.rows( { selected: true } ).data().toArray().map( function(tr) { return tr.RowOrder.replace(\"dTRow_\",\"\") }).toString() );
                    var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace(/dTRow_/g,\"\");
                    \$('#modalbox').find('.devoops-modal-inner').find(\"input[name='id']\").val( ids );
                    \$(\"#group_action_form\").attr('action', \"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/change-channel-genre\" );

                    \$('#modalbox').show();
                }
            },

            // Language button
            {
                //text: '<i class=\"fa fa-language\"></i> ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change language"), "html", null, true);
        echo "',
                text: '<i class=\"fa fa-language\"></i> ";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Language"), "html", null, true);
        echo "',
                action: function ( e, dt, node, config ) {
                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();
                    \$('#modalbox').find('.modal-header-name').html(\"<span class='text-default'>";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change language"), "html", null, true);
        echo "</span>\");
                    \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#change_channel_language_template\").html());
                    \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_form_button_template\").html());
                    \$('#s2_languages').select2(select2Opt);

                    // if parameter \"rowId\": not set use this:
                    //console.log( dt.rows( { selected: true } ).data().toArray().map( function(tr) { return tr.RowOrder.replace(\"dTRow_\",\"\") }).toString() );
                    var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace( /dTRow_/g, \"\" );
                    \$('#modalbox').find('.devoops-modal-inner').find(\"input[name='id']\").val( ids );
                    \$(\"#group_action_form\").attr('action', \"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/change-channel-language\" );

                    \$('#modalbox').show();
                }
            },
            
            // Switch on/off
            {   
                extend: 'collection',
                // params are described here:
                // https://datatables.net/reference/button/collection
                text: '<i class=\"fa fa-toggle-on\"></i> ";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch on/off"), "html", null, true);
        echo " <i class=\"fa fa-caret-down\"></i>',
                autoClose: true,
                background: true,
                //backgroundClassName: \"dt-button-background\",
                fade: 0, // speed 
                buttons: [
                    {
                        text: '";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch on"), "html", null, true);
        echo "',
                        action: function ( e, dt, node, config ) {
                            e.stopPropagation();
                            e.preventDefault();
                            JScloseModalBox();
                            
                            var sendData = {};
                            var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace(/dTRow_/g, \"\" );
                            sendData.group_key = \"id\";
                            sendData.id = ids;

                            if ((sendData.id).search(',') != -1){
                                sendData.id = JSON.stringify(sendData.id.split(','));
                            }

                            ajaxPostSend( \"";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/enable-channel\", sendData, false, false, true);
                            
                        }
                    },
                    {
                        text: '";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch off"), "html", null, true);
        echo "',
                        action: function ( e, dt, node, config ) {
                            e.stopPropagation();
                            e.preventDefault();
                            JScloseModalBox();

                            var sendData = {};
                            var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace( /dTRow_/g, \"\" );
                            sendData.group_key = \"id\";
                            sendData.id = ids;

                            if ((sendData.id).search(',') != -1){
                                sendData.id = JSON.stringify(sendData.id.split(','));
                            }

                            ajaxPostSend( \"";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/disable-channel\", sendData, false, false, true);

                        }
                    }
                ]
            },

            // Delete button
            {
                //text: '<i class=\"fa fa-trash fa-trash-o-\"></i> ";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete channel"), "html", null, true);
        echo "',
                text: '<i class=\"fa fa-trash fa-trash-o-\"></i> ";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "',
                //titleAttr: \"Yes! We have title !\",
                //className: 'dt-button-delete',
                action: function ( e, dt, node, config ) {
                    
                    if( \$(this).hasClass('disabled') )
                        return false;
                    
                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();

                    var tr = dt.rows( { selected: true } )
                    var sendData = {};
                    var ids = dt.rows( { selected: true } ).ids().toArray().toString().replace(/dTRow_/g, \"\" );
                    
                    if( confirm(\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Are you sure you want to delete"), "html", null, true);
        echo " \" +tr.count()+ \" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("channel(s)"), "html", null, true);
        echo " ?\\n";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Undo this action will be impossible"), "html", null, true);
        echo "!\") ) {
                        /*
                        dt.rows( { selected: true } ).remove();
                        dt.ajax.reload();
                        resetTableButtons();
                        */
                        sendData.group_key = \"id\";
                        sendData.id = ids;

                        if ((sendData.id).search(',') != -1){
                            sendData.id = JSON.stringify(sendData.id.split(','));
                        }

                        ajaxPostSend( \"";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-channel\", sendData, false, false, true);
                        resetTableButtons();
                        setGroupSelectState( \"none\" );
                    }
                    return false;
                }
            }
        ]
    }).prev('.dataTables_processing').hide('');
}

function yelp() {
    \$(document).ready(function () {

        LoadDataTablesScripts(TestTable1);
        LoadSelect2Script(DemoSelect2);
        

        var table = \$('#datatable-1').DataTable();
        // for this task
        // see https://datatables.net/extensions/buttons/examples/api/enable.html
        table
            .on( 'select', function ( e, dt, type, indexes ) {
                //var rowData = table.rows( indexes ).data().toArray();
                //events.prepend( '<div><b>'+type+' selection</b> - '+JSON.stringify( rowData )+'</div>' );

                var rows = dt.rows( { selected: true } ).count();
                
                \$(\".dt-buttons .dt-button\").show().removeClass( \"disabled\" );

                if ( rows == dt.rows().count() ){
                    setGroupSelectState( \"all\" );
                } else {
                    setGroupSelectState( \"some\" );
                }
                /*
                if ( rows == 1 ) {
                    \$(\".dt-buttons .dt-button\").removeClass( \"disabled\" );
                } else {
                    \$(\".dt-buttons .dt-button\").addClass( \"disabled\" );
                    \$(\".dt-buttons .dt-button-delete\").removeClass( \"disabled\" );
                }
                */
            } )
            .on( 'deselect', function ( e, dt, type, indexes ) {
                //var rowData = table.rows( indexes ).data().toArray();
                //events.prepend( '<div><b>'+type+' <i>de</i>selection</b> - '+JSON.stringify( rowData )+'</div>' );

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

        \$(document).on('change', \".mswitch input\", function(e){
            //value = ( json.data[i].status ? 'on' : 'off' )
            var status = \$(this).attr( 'value' ) == 'on' ? true : false;
            //var msg = \"Канал \"+ \$(this).data().id +\": \"+ (status ? 'Отключен':'Включен' );
            ajaxPostSend('";
        // line 412
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/' + (status ? 'disable' : 'enable') + '-channel', \$(this).data() );
        });


        \$(\".datepicker\").datepicker({
            language    : '";
        // line 417
        if (($this->getAttribute(($context["app"] ?? null), "locale", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "locale", [], "array")) == 2))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "locale", [], "array"), "html", null, true);
        } else {
            echo "en";
        }
        echo "',
            dateFormat  : 'dd-mm-yy',
            firstDay    : 1,
            showOn: \"both\",
            showAnim: \"slideDown\",
            buttonImage: \"";
        // line 422
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/calendar.gif\",
            buttonImageOnly: true,
            buttonText: \"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select date"), "html", null, true);
        echo "\",

            dayNamesMin : [
                '";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
        echo "',
                '";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
        echo "',
                '";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
        echo "',
                '";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
        echo "',
                '";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
        echo "',
                '";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
        echo "',
                '";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
        echo "'
            ],
            monthNames  : [
                '";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
        echo "',
                '";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
        echo "',
                '";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
        echo "',
                '";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
        echo "',
                '";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
        echo "',
                '";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
        echo "',
                '";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
        echo "',
                '";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
        echo "',
                '";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
        echo "',
                '";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
        echo "',
                '";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
        echo "',
                '";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
        echo "'
            ]
        });

        \$(document).on('click', \"a.main_ajax\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            ajaxPostSend(\$(this).attr('href'), \$(this).data());
            \$(this).closest('div.open').removeClass('open');
            return false;
        });

        \$(document).on('change', \"#s2_channel\", function(e){
            ajaxPostSend(\"";
        // line 460
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-channel-epg-item?id=\" + \$(this).val(), {});
        });

        \$(document).on('click', \"#get_epg_button\", function(e){
            e.stopPropagation();
            e.preventDefault();
            if (\$(\"#s2_channel\").val()) {
                ajaxPostSend(\"";
        // line 467
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-channel-epg-item?id=\" + \$(\"#s2_channel\").val(), {epg_date : \$(\"#epg_date\").val()});
            } else {
                JSErrorModalBox({msg: \"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel not selected"), "html", null, true);
        echo "\"})
            }
        });

        \$(\"#modalbox_ad\").on('click', \"button[type='submit']\", function(e){
            var sendData = {id:0, epg_data:'', epg_body: ''};
            sendData.id = \$(\"#s2_channel\").val();
            sendData.epg_date = \$(\"#epg_date\").val();
            sendData.epg_body = \$(\"#epg_body\").val();
            ajaxPostSend(\$('#epg_form').attr('action'), sendData);
        });

        \$(document).on('click', '#restart_archives_button', function(e){
            e.stopPropagation();
            e.preventDefault();
            JSshowModalBox();
            ajaxPostSend(\$(this).attr('href'), {}, false, false, true);
            return false;
        });

        \$(\"#datatable-1\").on('click', \"a[href\$='itv-reset-claims']\", function(e){
            e.stopPropagation();
            e.preventDefault();
            if (\$(this).attr(\"disabled\")) {
                JSErrorModalBox({msg: \"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("This action is unavailable"), "html", null, true);
        echo "\"})
            } else {
                \$(this).closest('.open').removeClass(\"open\");
                \$(\"#modalbox\").data('complete', 1);
                \$('#modalbox').find('.devoops-modal-header').html(\"\\n\\
                            <div class='row'>\\n\\
                                <div class='col-xs-10 col-sm-10'>\\n\\
                                    <span class='text-default'>";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset claims counter"), "html", null, true);
        echo "</span>\\n\\
                                </div>\\n\\
                            </div>\");
                \$('#modalbox').find('.devoops-modal-inner').html(\"\\n\\
                            <div class='row'>\\n\\
                                <div class='col-xs-10 col-sm-10'>\\n\\
                                    <span>";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Do you really want to reset claims counter?"), "html", null, true);
        echo "</span>\\n\\
                                </div>\\n\\
                            </div>\");
                \$('#modalbox').find('.devoops-modal-bottom').html(\"\\n\\
                            <div class='col-xs-10 col-sm-6 pull-right'>\\n\\
                                <button type='submit' id='reset_claims_counter' class='btn btn-success col-sm-5 pull-right'>";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset"), "html", null, true);
        echo "</button>\\n\\
                                <button type='reset' class='btn btn-default col-sm-5 pull-left' >";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                            </div>\");
                \$(\"#reset_claims_counter\").data(\$(this).data());
                \$('#modalbox').show();
            }
            return false;
        });

        \$(document).on('click', '#reset_claims_counter', function(e){
            \$('#modalbox').hide();

            ajaxPostSend(\"";
        // line 523
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/itv-reset-claims\", { media_id: \$(this).data(\"media_id\"), media_type: \$(this).data(\"media_type\")}, false, false);
        });

        \$(document).on('click', '#save_channel', function(e){
            e.stopPropagation();
            e.preventDefault();
            var sendData = {};
            \$(\"input, select\", \"#modalbox\").filter('.own_fields').each(function(){
                sendData[\$(this).attr('name')] = \$(this).val();
            });

            if (('' + sendData.id).search(',') != -1){
                sendData.id = JSON.stringify(sendData.id.split(','));
            }

            JScloseModalBox();
            ajaxPostSend(\$(\"#group_action_form\").attr('action'), sendData, false, false, true);
        });
    });
}

document.addEventListener(\"DOMContentLoaded\", yelp, false);

function showModalBox(data){
    fillEPGForm(data);
    \$(\"#modalbox_ad\").show();
}

function fillEPGForm(data){
    \$('#s2_channel option[value=\"'+data.ch_id+'\"]').prop('selected', 'selected');
    \$('#s2_channel').select2(select2Opt);
    \$(\"#epg_date\").removeAttr('disabled').datepicker( \"setDate\", data.epg_date);
    \$(\"#epg_body\").val(data.epg_body);
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

var saveEPGSuccess = function(){
    JSSuccessModalBox();
};

var saveEPGSuccessError = function(){
    JSErrorModalBox();
};

var restartArchive = function(data){
    \$(\"#modalbox\").data('complete', 1);
    \$('#modalbox').find('.devoops-modal-inner').html('<span>";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Done"), "html", null, true);
        echo "! ' + (data.msg ? data.msg : '') +  '</span>');
};

var restartArchiveError = function(data){
    \$('#modalbox').find('.devoops-modal-inner').html('<span>";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Error"), "html", null, true);
        echo "! ' + (data.error? data.error: '') +  '</span>');
    \$(\"#modalbox\").data('complete', 1);
};
";
    }

    public function getTemplateName()
    {
        return "default/TvChannels/iptv_list/iptv_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  929 => 601,  922 => 597,  843 => 523,  829 => 512,  825 => 511,  817 => 506,  808 => 500,  798 => 493,  771 => 469,  764 => 467,  752 => 460,  736 => 447,  732 => 446,  728 => 445,  724 => 444,  720 => 443,  716 => 442,  712 => 441,  708 => 440,  704 => 439,  700 => 438,  696 => 437,  692 => 436,  686 => 433,  682 => 432,  678 => 431,  674 => 430,  670 => 429,  666 => 428,  662 => 427,  656 => 424,  651 => 422,  639 => 417,  629 => 412,  513 => 301,  493 => 288,  474 => 272,  470 => 271,  456 => 262,  438 => 247,  428 => 242,  410 => 227,  400 => 220,  384 => 209,  372 => 200,  364 => 195,  360 => 194,  347 => 186,  335 => 177,  327 => 172,  323 => 171,  274 => 124,  260 => 123,  257 => 122,  244 => 121,  241 => 120,  224 => 119,  195 => 93,  187 => 90,  172 => 78,  166 => 77,  157 => 73,  151 => 72,  144 => 68,  138 => 67,  130 => 62,  124 => 61,  117 => 57,  111 => 56,  104 => 52,  98 => 51,  77 => 35,  64 => 25,  50 => 16,  46 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/iptv_list/iptv_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/iptv_list/iptv_list.js.twig");
    }
}
