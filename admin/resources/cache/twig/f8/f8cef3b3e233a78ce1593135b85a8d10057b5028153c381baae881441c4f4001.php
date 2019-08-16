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

/* default/NewVideoClub/video_genres/video_genres.js.twig */
class __TwigTemplate_20af50a2ddceb09cf1e879dfbb3d8e82650185997afe42d8f037bed5b3671173 extends \Twig\Template
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

var conf = {
    lang : '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
    form : '#modalbox form',
    showHelpOnFocus : true,
    validateHiddenInputs: true,
    scrollToTopOnError: false,
    validationRuleAttribute : 'data-validation',
    modules: 'jsconf',
    onkeyup: false,
    errorClass: \"error\",

    onError: function () {
        var _this = this;
        console.log( this );

        \$(_this.form + \" select\").each(function(){

            if (\$(this).hasClass(_this.errorClass)) {
                _this.highlight(this, _this.errorClass);
            } else {
                _this.unhighlight(this, _this.errorClass);
            }
        });
        return false;
    },

    highlight: function (element, errorClass, validClass) {
        if (!\$(element).parent().children().find('.selection').children().hasClass(errorClass)) {
            \$(element).parent().children().find('.selection').children().addClass(errorClass);
        }
    },
    unhighlight: function (element, errorClass, validClass) {
        \$(element).parent().children().find('.selection').children().removeClass(errorClass);
    }
};

function DemoSelect2() {
    \$('#category_id').select2(select2Opt);
}

function TestTable1() {
    \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
        if (typeof (json.data) == 'object') {
            for (var i in json.data) {
                var id = json.data[i].id;
                var movie_in_genre = parseInt(json.data[i].movie_in_genre, 10);
                json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                    <i class='pull-right fa fa-cog'></i>\\n\\
                                                </a>\\n\\
                                                <ul class='dropdown-menu pull-right'>\\n\\
                                                    <li>\\n\\
                                                        <a href='";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-genres-list-json' class='main_ajax no_context_menu' data-id='\" + id + \"' id='edit_video_genres_\" + id + \"'>\\n\\
                                                            <span>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                    <li>\\n\\
                                                        <a class='main_ajax no_context_menu' \" + (movie_in_genre ? \"disabled='disabled'\" : \"\") + \" href='";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-video-genres' data-genresid='\" + id + \"'>\\n\\
                                                            <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\\n\\
                                                </ul>\\n\\
                                            </div>\";
                var title = json.data[i].title;

                json.data[i].title = \"<a href='";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-genres-list-json' class='main_ajax no_context_menu' data-id='\" + id + \"' id='edit_video_genres_\" + id + \"'>\" + title + \"</a>\";
            }
        }
    }).dataTable({
        \"processing\": true,
        \"serverSide\": true,
        \"ajax\": {
            \"url\": \"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-genres-list-json\"
        },
        \"language\": {
            \"url\": \"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
        },
        
        ";
        // line 82
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 83
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
        ";
        }
        // line 85
        echo "                
        \"scrollCollapse\": true,
        \"bFilter\": true,
        \"bPaginate\": true,
        \"lengthChange\": true,
        \"bInfo\": true,

        fixedHeader: {
            header: true,
            headerOffset: \$('header.navbar').height()
        },

        \"aoColumnDefs\": [
            { className: \"action-menu\", \"targets\": [ -1 ]},
            { \"sortable\": false, \"targets\": [-1, 1, 2]},
            { \"searchable\": false, \"targets\": [-2, -1, 1, 2]}
        ]
    }).prev('.dataTables_processing').hide('');
}

function yelp() {
    \$(document).ready(function () {

        \$.validate(conf);

        \$(document).on('click', \"a.main_ajax\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            if (\$(this).attr('disabled') && \$(this).attr('href').search('remove-video-genres') != -1) {
                JSErrorModalBox({msg: \"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can't delete genre with movies"), "html", null, true);
        echo "\"});
            } else {
                ajaxPostSend(\$(this).attr('href'), \$(this).data(), false);
            }
            \$(this).closest('div.open').removeClass('open');
            return false;
        });

        \$(document).on('click', '#add_video_genres', function (e) {
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

            e.stopPropagation();
            e.preventDefault();

            if ( \$(\"#modalbox form\").isValid({}, conf, true) && \$.trim(\$(\"#modalbox input[name='title']\").val()) ) {
                var sendData = {
                    id: \$(\"#modalbox input[name='id']\").val(),
                    title: \$(\"#modalbox input[name='title']\").val(),
                    category_alias: \$(\"#category_id\").val()
                };
                ajaxPostSend(\$(\"#modalbox form\").attr('action'), sendData, false);
            } else {
                conf.onError();
            }
            return false;
        });


        \$(document).on('change', '#category_id', function () {
            \$(this).validate(function(valid, elem) {
                if (valid) {
                    conf.unhighlight(elem, conf.errorClass);
                } else {
                    conf.highlight(elem, conf.errorClass);
                }
            } );
        });

        LoadDataTablesScripts(TestTable1);
        // useless - no select at this point:
        //LoadSelect2Script(DemoSelect2);

    });
}

document.addEventListener(\"DOMContentLoaded\", yelp, false);

function closeModalBox(){
    \$(\"#modalbox\").hide();
    \$('#category_id').select2(\"destroy\");
    \$('#modalbox').find('.modal-header-name span').empty();
    \$('#modalbox').find('.devoops-modal-inner').empty();
}

function openModalBox(obj){
    \$('#modalbox').find('.modal-header-name span').text( (obj.data instanceof Array) ? '";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit genre"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add genre"), "html", null, true);
        echo "' );

    if (\$('#modalbox').find('.devoops-modal-inner').find('input').length == 0) {
        \$('#modalbox').find('.devoops-modal-inner').html('\\n\\
            <form class=\"form-horizontal\" role=\"form\">\\n\\
                <div class=\"box-content\">\\n\\
                    <div class=\"form-group\">\\n\\
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Genre"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>\\n\\
                        <div class=\"col-xs-10 col-sm-8\">\\n\\
                            <span class=\"col-xs-8 col-sm-8\">\\n\\
                                <input type=\"hidden\" name=\"id\">\\n\\
                                <input type=\"text\" class=\"own_fields form-control \" name=\"title\"  data-validation=\"required\"  id=\"genre_title\">\\n\\
                                <div class=\"name-check\"></div>\\n\\
                            </span>\\n\\
                        </div>\\n\\
                    </div>\\n\\
                    <div class=\"form-group\">\\n\\
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Category"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>\\n\\
                        <div class=\"col-xs-10 col-sm-8\">\\n\\
                            <span class=\"col-xs-8 col-sm-8\">\\n\\
                                <select name=\"category_alias\" class=\"populate placeholder\"  data-validation=\"required\"  id=\"category_id\">\\n\\
                                ";
        // line 209
        if ($this->getAttribute(($context["app"] ?? null), "allCategories", [], "any", true, true)) {
            // line 210
            echo "                                    <option>&nbsp;</option>\\n\\
                                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allCategories", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cat_item"]) {
                // line 212
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat_item"], "category_alias", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat_item"], "category_name", []), "html", null, true);
                echo "</option>\\n\\
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                                ";
        }
        // line 215
        echo "                                </select>\\n\\
                            </span>\\n\\
                        </div>\\n\\
                    </div>\\n\\
                </div>\\n\\
            </form>');
        \$('#modalbox').find('.devoops-modal-bottom').html('\\
            <div class=\"col-xs-12\">\\n\\
                <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>\\n\\
                <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\" >";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
            </div>');

        \$('#category_id').select2(select2Opt);
        \$.validate(conf);
    }
    /* Don't use this code to empty select2
    \$('#category_id').select2(\"val\", \"\");
    becouse of
    'onchange' #category_id
    reinitialize select2 instead
    */

    if (obj.data instanceof Array) {
        \$('#modalbox').find('.devoops-modal-inner input[name=\"id\"]').val(obj.data[0].id);
        \$('#modalbox').find('.devoops-modal-inner input[name=\"title\"]').val(obj.data[0].title);
        \$('#category_id option[value=\"' + obj.data[0].category_alias + '\"]').prop('selected', 'selected');
        \$(\"#category_id\").trigger(\"change\");
    } else {
        \$('#modalbox').find('.devoops-modal-inner *[name]').val('');
        \$('#category_id option').prop('selected', false).removeAttr('selected');
        \$('#category_id').select2(select2Opt);
    }


    \$('#modalbox .name-check').html('').hide();
    \$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");
    \$('#modalbox form').attr('action', \"";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-video-genres\");
    \$(\"#modalbox\").show();
    \$(obj).closest('div.open').removeClass('open');
}
";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_genres/video_genres.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 251,  330 => 224,  326 => 223,  316 => 215,  313 => 214,  302 => 212,  298 => 211,  295 => 210,  293 => 209,  286 => 205,  273 => 195,  261 => 188,  184 => 114,  153 => 85,  147 => 83,  145 => 82,  139 => 79,  131 => 76,  119 => 69,  109 => 62,  103 => 61,  96 => 57,  90 => 56,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_genres/video_genres.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_genres/video_genres.js.twig");
    }
}
