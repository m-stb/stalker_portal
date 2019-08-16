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

/* default/NewVideoClub/video_categories/video_categories.js.twig */
class __TwigTemplate_623cea790f736bc184429cbc387a0f71641d63bbc23efa372f55d65ae40f8427 extends \Twig\Template
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
    var conf = {
        lang : '";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
        showHelpOnFocus : true,
        validateHiddenInputs: true,
        scrollToTopOnError: false,
        modules: 'security',

        onkeyup: false,
        errorClass: \"error\",

        onError: function () {
            return false;
        }

    };

    function TestTable1() {
        \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
            if (typeof (json.data) == 'object') {
                for (var i in json.data) {
                    var id = json.data[i].id;
                    var num = json.data[i].num;
                    var genre_in_category = parseInt(json.data[i].genre_in_category, 10);
                    var movie_in_category = parseInt(json.data[i].movie_in_category, 10);
                    var censored = json.data[i].censored;
                    json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                    <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                        <i class='pull-right fa fa-cog'></i>\\n\\
                                                    </a>\\n\\
                                                    <ul class='dropdown-menu pull-right'>\\n\\
                                                        <li>\\n\\
                                                            <a class='no_context_menu' href='";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-video-categories' data-categoriesid='\" + id + \"' data-cat-censored='\" + censored + \"' id='edit_video_categories_\" + id + \"'>\\n\\
                                                                <span>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                            </a>\\n\\
                                                        </li>\\n\\
                                                        <li>\\n\\
                                                            <a class='main_ajax no_context_menu' \" + (genre_in_category || movie_in_category ? \"disabled='disabled'\" : \"\") + \" href='";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-video-categories' data-categoriesid='\" + id + \"' data-curr_pos='\" + num + \"'>\\n\\
                                                                <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                            </a>\\n\\
                                                        </li>\\n\\
                                                    </ul>\\n\\
                                                </div>\";
                    var category_name = json.data[i].category_name;

                    json.data[i].censored = censored ? \"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Yes"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No"), "html", null, true);
        echo "\";

                    json.data[i].category_name = \"<a class='no_context_menu' href='";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-video-categories' data-categoriesid='\" + id + \"' data-cat-censored='\" + censored + \"' id='edit_video_categories_\" + id + \"' >\" + category_name + \"</a>\";
                }
            }
        }).dataTable({
            \"processing\": true,
            \"serverSide\": true,
            \"ajax\": {
                \"url\": \"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-categories-list-json\"
            },
            \"language\": {
                \"url\": \"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
            },
            ";
        // line 60
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 61
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
            ";
        }
        // line 63
        echo "            \"lengthMenu\": [-1],
            \"bFilter\": true,
            \"bPaginate\": false,
            \"bInfo\": true,
            \"ordering\": false,
            rowReorder: true, // don't use {selector: 'tr'} or you couldn't access action menu
            \"aoColumnDefs\": [
                { orderable: true, className: 'row-reorder', targets: 0 },
                { className: \"action-menu\", \"targets\": [ -1 ]},
                { \"sortable\": false, \"targets\": [-1]},
                { \"searchable\": false, \"targets\": [-2, -1, 2]}
            ]
        })
        // replaced with table.on('row-reorder', function ( e, diff, edit ) {...})
        /*.rowReordering({  
            iIndexColumn: 0,
            sURL: \"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-categories-reorder\"
        })*/
        .closest('#iptv_list').find('.dataTables_processing').hide('', function(){\$('.dataTables_filter').addClass('invisible');});
    }

    function yelp() {
        \$(document).ready(function () {

            /*
            \$(document).on('change', '#video_category_name', function (e) {
                e.stopPropagation();
                e.preventDefault();
                var _this = \$(this);

                _this.next('div.name-check').html('').hide();
                //\$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");

                if (_this.val().replace(/\\s/ig, '').length) {
                    var sendData = {
                        category_name: _this.val(),
                        id: _this.prev('input[name=\"id\"]').val()
                    };
                    ajaxPostSend('";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-video-categories-name', sendData);
                }
                return false;
            });

            \$(document).on('change', '#video_num', function (e) {
                e.stopPropagation();
                e.preventDefault();
                var _this = \$(this);

                _this.next('div.name-check').html('').hide();
                //\$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");

                _this.validate( {}, conf.lang );

                if ( !_this.hasClass(conf.errorClass) ) {
                    var sendData = {
                        category_num: _this.val(),
                        id: \$('#modalbox').find('input[name=\"id\"]').val()
                    };
                    ajaxPostSend('";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-video-categories-number', sendData);
                }
                return false;
            });*/

            \$(document).on('click', \"a.main_ajax\", function (e) {
                e.stopPropagation();
                e.preventDefault();
                if (\$(this).attr('disabled') && \$(this).attr('href').search('remove-video-categories') != -1) {
                    JSErrorModalBox({msg: \"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can't delete category with movies or genres"), "html", null, true);
        echo "\"});
                } else {
                    ajaxPostSend(\$(this).attr('href'), \$(this).data(), false);
                }
                \$(this).closest('div.open').removeClass('open');
                return false;
            });

            \$(document).on('click', '#add_video_categories, a[id^=\"edit_video_categories_\"]', function (e) {
                e.stopPropagation();
                e.preventDefault();
                openModalBox(\$(this));
                return false
            });

            \$(document).on('click', \"#modalbox button[type='reset'], #modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function (e) {
                if (e.currentTarget != e.target) {
                    return;
                }
                e.stopPropagation();
                e.preventDefault();
                closeModalBox();
                return false;
            });

            \$(document).on('click submit', \"#modalbox button[type='submit'], #modalbox form\", function (e) {
                if (e.currentTarget != e.target) {
                    return;
                }

                if ( \$(\"#modalbox form\").isValid({}, conf, true) ) {
                    var sendData = {
                        id: \$(\"#modalbox input[name='id']\").val(),
                        category_name: \$(\"#modalbox input[name='category_name']\").val(),
                        num: \$(\"#modalbox input[name='num']\").val(),
                        censored: \$(\"#modalbox input[name='censored']\").prop('checked') ? 1: 0
                    };

                    e.stopPropagation();
                    e.preventDefault();
                    ajaxPostSend(\$(\"#modalbox form\").attr('action'), sendData, false);
                    closeModalBox();
                    return false;
                }
            });

            LoadDataTablesScripts(TestTable1);

            var table = \$('#datatable-1').DataTable( );
            table.on( 'row-reorder', function ( e, diff, edit ) {
                /**
                diff - Array of TR dom elements between start position and droped position
                edit.triggerRow - points to the dragable row (triggerRow)
                */
                //var result = 'Reorder started on row: '+edit.triggerRow.data()+'<br>';
                //console.log( edit.triggerRow.data().number );
                //console.log( diff[i] );

                if( diff.length < 2 ){
                    // shutdown table.redraw() for this situation
                    if( table.RowReorder )
                        table.RowReorder.c.update = false;
                    return false;
                }

                var bubbleUp = ( diff[0].oldPosition == edit.triggerRow[0][\"0\"] ) ? true : false;
                var i = bubbleUp ? 1 : diff.length-2;
                
                var sendData = {
                    id: edit.triggerRow.data().RowOrder,
                    toPosition:    bubbleUp ? table.row( diff[1].node ).data().num : table.row( diff[diff.length-2].node ).data().num, 
                    fromPosition:  edit.triggerRow.data().num,
                    target_id: diff[i].node.id, 
                    direction: ( bubbleUp ? 'back' : 'forward' ),
                };
                
                //console.log(sendData);
                //table.RowReorder.c.update = true;
                ajaxPostSend( '";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-categories-reorder', sendData );

                //notty('<span>Done!</span>', 'success');

            } );
        });
    }

    document.addEventListener(\"DOMContentLoaded\", yelp, false);

    var addVideoCategory = function(data){
        JSSuccessModalBox(data);
        \$('#datatable-1').DataTable().ajax.reload();
    };

    var addVideoCategoryError = function(data){
        JSErrorModalBox(data);
    };

    function closeModalBox(){
        \$(\"#modalbox\").hide();
        \$('#modalbox').find('.modal-header-name span').empty();
        \$('#modalbox').find('.devoops-modal-inner').empty();
    }
    
    function openModalBox(obj){
        \$('#modalbox').find('.modal-header-name span').text( obj.data('categoriesid')? '";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit category"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add category"), "html", null, true);
        echo "' );
        if (\$('#modalbox').find('.devoops-modal-inner').find('input').length == 0) {
            \$('#modalbox').find('.devoops-modal-inner').html('\\n\\
                <form class=\"form-horizontal\" role=\"form\">\\n\\
                    <div class=\"box-content\">\\n\\
                        <div class=\"form-group\">\\n\\
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Category"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>\\n\\
                            <div class=\"col-xs-10 col-sm-8\">\\n\\
                                <span class=\"col-xs-8 col-sm-8\">\\n\\
                                    <input id=\"category_id\" type=\"hidden\" name=\"id\">\\n\\
                                    <input id=\"video_category_name\" class=\"own_fields form-control\" type=\"text\" name=\"category_name\"\\n\\
                                        data-validation = \"required, server\" \\n\\
                                        data-validation-url = \"";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-video-categories-name\" >\\n\\
                                    <div class=\"name-check\"></div>\\n\\
                                </span>\\n\\
                            </div>\\n\\
                        </div>\\n\\
                        <div class=\"form-group\">\\n\\
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Order"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>\\n\\
                            <div class=\"col-xs-10 col-sm-8\">\\n\\
                                <span class=\"col-xs-8 col-sm-8\">\\n\\
                                    <input id=\"video_num\" class=\"own_fields form-control\" type=\"text\" name=\"num\" \\n\\
                                    data-validation = \"required, number, server\" \\n\\
                                    data-validation-url = \"";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-video-categories-number\" \\n\\
                                    data-validation-param-name = \"category_num\" >\\n\\
                                    <div class=\"name-check\"></div>\\n\\
                                </span>\\n\\
                            </div>\\n\\
                        </div>\\n\\
                        <div class=\"form-group form-group-checkbox\">\\n\\
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Age restriction"), "html", null, true);
        echo "</label>\\n\\
                            <div class=\"col-xs-10 col-sm-8\">\\n\\
                                <span class=\"col-xs-8 col-sm-8\">\\n\\
                                    <div class=\"checkbox-inline\">\\n\\
                                        <label>\\n\\
                                            <input type=\"checkbox\" class=\"own_fields form-control \" value=\"1\" name=\"censored\" id=\"video_censored\">\\n\\
                                            <i class=\"fa fa-square-o small\"></i>\\n\\
                                        </label>\\n\\
                                    </div>\\n\\
                                    <div class=\"bg-danger\"></div>\\n\\
                                </span>\\n\\
                            </div>\\n\\
                        </div>\\n\\
                    </div>\\n\\
                </form>');
            \$('#modalbox').find('.devoops-modal-bottom').html('\\
                <div class=\"col-xs-12\">\\n\\
                    <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>\\n\\
                    <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\" >";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                </div>');
        }
        
        if (obj.data('categoriesid')) {
            \$('#modalbox').find('.devoops-modal-inner').find('input[type=\"hidden\"]').val(obj.data('categoriesid'));
            \$('#modalbox').find('.devoops-modal-inner').find('input[name=\"category_name\"]').val(obj.closest('tr').find('a:first').text());
            \$('#modalbox').find('.devoops-modal-inner').find('input[name=\"num\"]').val(obj.closest('tr').find('td:first').text());
        }

        // set up validator for the form
        if (obj.data('categoriesid')) {
            clearServerValidator();
            setEditValidationConfig(conf);
            \$(\"#video_category_name, #video_num\").removeAttr('data-validation-event');
            \$.validate(conf);
            setServerValidationRequestParams();
        } else {
            clearServerValidator();
            setDefaultValidationConfig(conf);
            \$(\"#video_category_name, #video_num\").removeAttr('data-validation-event');
            \$.validate(conf);
            setServerValidationRequestParams();
        }

        \$('#modalbox').find('.devoops-modal-inner').find('input[name=\"censored\"]').prop('checked', obj.data('cat-censored') && ('' + obj.data('cat-censored')) == '1');
        \$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");
        \$('#modalbox form').attr('action', obj.attr('href'));
        \$(\"#modalbox\").show();
        obj.closest('div.open').removeClass('open');
    }



function setServerValidationRequestParams() {
    var param = {
        'id': \$(\"#category_id\").val(),
        'for_validator': true,
    };
    \$('#video_category_name, #video_num').attr('data-validation-req-params', JSON.stringify(param) );
}

// drop assigned server-side validator instance to stop reuse:
function clearServerValidator() {
    \$(\"#modalbox\").find(\"[data-validation~='server']\").each( function(){
        this.asyncValidators = null;
    });
}

function setDefaultValidationConfig(conf) {
    conf.ignore = [];
    conf.validateOnBlur = true;
    conf.validateOnEvent = false;
    
    \$(\"#video_category_name, #video_num\").off('change');
}

function setEditValidationConfig(conf) {
    conf.ignore = ['category_name','num'];
    conf.validateOnBlur = false;
    conf.validateOnEvent = true;

    \$(\"#video_category_name, #video_num\").one('change', function (e) {
        var ignore = conf.ignore;
        var index = ignore.indexOf(this.name);
        if( index !== -1 ){
            \$(this).attr('data-validation-event', \"blur\");
            ignore.splice( index, 1 );
            \$.validate(conf);
        }
    });
}
";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_categories/video_categories.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 282,  403 => 281,  383 => 264,  371 => 257,  363 => 252,  352 => 246,  343 => 240,  332 => 234,  301 => 208,  220 => 130,  206 => 121,  181 => 101,  154 => 79,  136 => 63,  130 => 61,  128 => 60,  123 => 58,  115 => 55,  103 => 48,  96 => 46,  86 => 39,  80 => 38,  73 => 34,  67 => 33,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_categories/video_categories.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_categories/video_categories.js.twig");
    }
}
