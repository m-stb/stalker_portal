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

/* default/LicenseKeys/license_keys_list/license_keys_list.js.twig */
class __TwigTemplate_f1f9ef91ea4d9e7e6997bc80f909cbb5b4c6158deb9bc83934f7011639ce2d99 extends \Twig\Template
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
function initFileUploader(){
    \$('#fileupload').fileupload({
        url: '";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/upload-key-file',
        type: 'POST',
        autoUpload: true,
        multipart: true,
        acceptFileTypes: /(\\.|\\/)(csv)\$/i,
        maxFileSize: 1000000,
        maxNumberOfFiles: 1
    }).bind('fileuploaddone', function (e, data) {
        var response;
        if (data && data.jqXHR && data.jqXHR.status && data.jqXHR.status == 200 && data.jqXHR.responseJSON) {
            response = data.jqXHR.responseJSON;
        } else {
            JSErrorModalBox();
            return false;
        }
        if (response.success) {
            ajaxSuccess(response, false);
        }
        return false;
    }).bind('fileuploadfail', function (e, data) {
        if (data && data.jqXHR && data.jqXHR.status && data.jqXHR.responseJSON) {
            JSErrorModalBox(data.jqXHR.responseJSON);
        } else {
            JSErrorModalBox();
        }
    });
    return true;
}

function TestTable1() {
    \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
        if (typeof (json.data) == 'object') {
            for (var i in json.data) {
                json.data[i] = rowDataPrepare(json.data[i]);
            }
        }
    }).dataTable({
        \"processing\": true,
        \"serverSide\": true,
        \"ajax\" : {
            \"url\" : \"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/license-keys-list-json\"
        },
        \"language\": {
            \"url\": \"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
        },

        \"bFilter\": true,
        \"lengthChange\": true,
        \"bPaginate\": true,
        \"bInfo\": true,

        \"fixedHeader\": {
            header: true,
            headerOffset: \$('header.navbar').height()
        },
        
        select: {
            style:    'multi',
            selector: 'td.select-checkbox'
        },
        rowId: \"RowOrder\", // required to restore selected rows on reload
        \"sDom\": \"<'clearfix'<'pull-right'fAV><'button-place'B>>rt<'row-fluid'<'col-md-4 no-padding'i><'col-md-8 no-padding'pl>>\",

        \"order\": [[ 1, \"desc\" ]],
        \"columns\": [
            { \"data\": null, defaultContent: \"\", orderable: false, /*visible: true,*/ className: 'w-1p select-checkbox'},
        ";
        // line 70
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
            // line 71
            echo "            ";
            if (("all" != $this->getAttribute($context["item"], "name", []))) {
                // line 72
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
                // line 73
                echo "            ";
            }
            // line 74
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
        // line 75
        echo "        ],

        \"aoColumnDefs\": [
            {\"searchable\": false, \"targets\": [ 0, -1, -5 ]},
            {\"sortable\": false, \"targets\": [ 0, -1 ]},
            {\"className\": \"dt-status\", \"targets\": 5 }
        ],


        // remove column.visible from stateSave 
        // the DT was applying the column visibility setting from stateSave after dropdown filter
        \"stateSaveParams\": function (settings, data) {
                                data.columns.forEach(
                                    function(item) {
                                        item.visible = null;
                                        delete item.visible;
                                });
                            },


        \"buttons\": [
            
            // Switch on/off
            {   
                extend: 'collection',
                // params are described here:
                // https://datatables.net/reference/button/collection
                text: '<i class=\"fa fa-toggle-on\"></i> ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch on/off"), "html", null, true);
        echo " <i class=\"fa fa-caret-down\"></i>',
                autoClose: true,
                background: true,
                //backgroundClassName: \"dt-button-background\",
                fade: 0, // speed 
                buttons: [
                    {
                        text: '";
        // line 109
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
                            sendData.action = \"active\";

                            if ((sendData.id).search(',') != -1){
                                sendData.id = JSON.stringify(sendData.id.split(','));
                            }

                            ajaxPostSend( \"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-key-status\", sendData, false, false, true);
                            
                        }
                    },
                    {
                        text: '";
        // line 130
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
                            sendData.action = \"block\";

                            if ((sendData.id).search(',') != -1){
                                sendData.id = JSON.stringify(sendData.id.split(','));
                            }

                            ajaxPostSend( \"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-key-status\", sendData, false, false, true);

                        }
                    }
                ]
            }
        ]
    }).prev('.dataTables_processing').hide(50);
}

function yelp() {
    \$(document).ready(function () {

        LoadDataTablesScripts(TestTable1);

        if (typeof (loadFileUploadScripts) != 'function' || !loadFileUploadScripts(initFileUploader)){
            JSErrorModalBox({msg: \"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cannot load File Upload plugin"), "html", null, true);
        echo "\"})
        }

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



        \$(document).on('click', \"a.main_ajax:not([disabled])\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            var _this = this;
            \$(\"#modalbox\").data('complete', 0);
            var sendData = \$(_this).data();
            ajaxPostSend(\$(_this).attr('href'), sendData, false );
            \$(this).closest('div.open').removeClass('open');
            return false;
        });

        \$(document).on('change', \".mswitch input\", function(e){
            ajaxPostSend('";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-key-status', \$(this).data() );
        });

    });
}

document.addEventListener(\"DOMContentLoaded\", yelp, false);

function rowDataPrepare(item){

    if (item['added'] != 0) {
        var dateOn = new Date(item['added']);
        item['added'] = dateOn.toLocaleFormat(\"%b %d, %Y\").replace(\" \", \"&nbsp;\");
    }
    item.user_id = item.user_id.toString() !== '0' ? \"<a href='";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/users/edit-users?id=\" + item.user_id + \"'>\" + item.user_id + \"</a>\": '-';
    item.action = '<div class=\"mswitch\">\\n\\
                      <input type=\"checkbox\" id=\"key_'+ item.id +'\" name=\"status\" readonly=\"readonly\" class=\"form-control\" ' + ( item.action !== 'active' ? 'checked=\"checked\"' : '' ) + ' data-id=\"' + item.id + '\" data-action=\"'+ item.action +'\" ' + ( item.action == 'ignore' ? 'disabled=\"disabled\"': '') + '>\\n\\
                      <label class=\"label-success\" title=\"' + ( item.action !== 'active' ? \"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Active"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Blocked"), "html", null, true);
        echo "\" ) + '\" for=\"key_'+ item.id +'\"></label>\\n\\
                   </div>';
    var status_classes = {
        'activated' : 'skyblue',
        'manually_entered': 'green',
        'not_activated': 'no-monitoring',
        'blocked': 'red'
    }
    item.status = '<span class=\"monitoring-status ' + (status_classes[item.status_flag] ? status_classes[item.status_flag]: '') + ' nowrap\">' +item.status +'</span>';
    ";
        // line 282
        echo "    var key_types = {
        ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allKeyTypes", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 284
            echo "            ";
            echo $this->getAttribute($context["row"], "id", []);
            echo ": '";
            echo $this->getAttribute($context["row"], "title", []);
            echo "'";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo ",";
            }
            // line 285
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "    }
    ";
        // line 288
        echo "    item.key_type = key_types[item.key_type] || item.key_type;
    return item;
}


function initTableButtons() { 
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
}";
    }

    public function getTemplateName()
    {
        return "default/LicenseKeys/license_keys_list/license_keys_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 288,  450 => 286,  436 => 285,  427 => 284,  410 => 283,  407 => 282,  393 => 272,  387 => 269,  368 => 255,  272 => 162,  251 => 146,  232 => 130,  222 => 125,  203 => 109,  193 => 102,  164 => 75,  150 => 74,  147 => 73,  134 => 72,  131 => 71,  114 => 70,  88 => 47,  80 => 44,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/LicenseKeys/license_keys_list/license_keys_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/LicenseKeys/license_keys_list/license_keys_list.js.twig");
    }
}
