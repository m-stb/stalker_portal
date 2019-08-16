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

/* default/AudioClub/audio_artists/audio_artists.js.twig */
class __TwigTemplate_aa6358b72cf1a922dec8a1cadaaccecbdb20dc8d19b7e8eca8c62fb4b1d8e043 extends \Twig\Template
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
        echo "        var conf = {
            lang : '";
        // line 2
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
                        var albums_count = json.data[i].albums_count;
                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='no_context_menu' href='";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-audio-artists' data-artistsid='\" + id + \"' id='edit_audio_artists_\" + id + \"'>\\n\\
                                                                    <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='remove-audio-artists no_context_menu' href='#' \" + (albums_count != \"0\" ? \"disabled='disabled' warning_msg='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("First, remove all the albums of this performer"), "html", null, true);
        echo "'\" : \"\") + \" data-artistsid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        var name = json.data[i].name;
                        json.data[i].name = '<a class=\"no_context_menu\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-audio-artists\" data-artistsid=\"' + id + '\" id=\"edit_audio_artists_' + id + '\">' + name + '</a>';
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/audio-artists-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },

                ";
        // line 54
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 55
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 57
        echo "                
                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"aoColumnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-2, -1]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                /*
                \$(document).on('change', '#audio_artists_name', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = \$(this);

                    //_this.val(_this.val().replace(/^\\s+/ig, '').replace(/\\s{2}\$/, ' '));
                    _this.next('div.name-check').html('').hide();
                    \$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");

                    if ( \$(\"#form\").isValid({}, conf, true) && _this.val().replace(/\\s/ig, '').length) {
                        var sendData = {
                            id: _this.prev('input[name=\"id\"]').val(),
                            name: _this.val()
                        };
                        ajaxPostSend('";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-audio-artists-name', sendData);
                    }
                    return false;
                });*/

                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = this;
                    var sendData = \$(_this).data();
                    \$(\"#modalbox\").data('complete', 0);

                    if (\$(_this).attr(\"disabled\")) {
                        JSErrorModalBox({msg: \"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Action is not available"), "html", null, true);
        echo "! \" + (\$(_this).attr('warning_msg') ? \$(_this).attr('warning_msg') : '')});
                    } else {
                        ajaxPostSend(\$(_this).attr('href'), sendData, false );
                    }
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('click', '#add_audio_artists, a[id^=\"edit_audio_artists_\"]', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    openModalBox(\$(this));
                    return false;
                });

                \$(document).on('click', \"#modalbox button[type='reset'], #modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function (e) {
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();
                    return false;
                });

                \$(document).on('click submit', \"#modalbox button[type='submit'], #modalbox form\", function (e) {
\t\t\t
                    if (e.currentTarget != e.target) {
                        return;
                    }

                    if (\$(\"#form\").isValid({}, conf, true)) {
                        var sendData = {
                            id: \$(\"#modalbox input[type='hidden']\").val(),
                            name: \$(\"#modalbox input[type='text']\").val()
                        };
                        e.stopPropagation();
                        e.preventDefault();
                        ajaxPostSend(\$(\"#modalbox form\").attr('action'), sendData, false);
                        JScloseModalBox();
                        return false;
                    }
                });

                \$(document).on('click', \"a.remove-audio-artists\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    var _this = this;
                    if (\$(_this).attr(\"disabled\")) {
                        JSErrorModalBox({msg: \"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Action is not available"), "html", null, true);
        echo "! \" + (\$(_this).attr('warning_msg') ? \$(_this).attr('warning_msg') : '')});
                        return false;
                    }
                    JScloseModalBox();
                    \$('#modalbox').find('.modal-header-name span').addClass('txt-danger').text('";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Warning"), "html", null, true);
        echo "' + '!');
                    \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_del_body\").text());
                    \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_del_buttons\").text());

                    \$('#del_artist_btn').data(\$(_this).data());

                    \$('#modalbox').show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                // stop sending Form on Enter press:
                \$(document).on('keyup keypress', 'form input[type=\"text\"]', function(e) {
                    if(e.which == 13) {
                        e.preventDefault();
                        e.stopPropagation();
                        return false;
                    }
                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var addAudioArtist = function(data){
            JSSuccessModalBox(data);
            \$('#datatable-1').DataTable().ajax.reload();
        };

        /*
        var closeModalBox = function(){
            \$(\"#modalbox\").hide();
            \$('#modalbox .i-hint').tooltip(\"destroy\");
            \$('#modalbox').find('.modal-header-name span').empty();
            \$('#modalbox').find('.devoops-modal-inner').empty();
            \$('#modalbox').find('.devoops-modal-bottom').empty();
        };
        */

        function openModalBox(obj){
            \$('#modalbox').find('.modal-header-name span').removeClass(\"txt-danger\").text( obj.data('artistsid')? '";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit artist"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add artist"), "html", null, true);
        echo "' );

            // fill with template if #modalbox has another content
            if (\$('#modalbox').find('.devoops-modal-inner').find('input').length == 0) {
                \$('#modalbox').find('.devoops-modal-inner').html('\\n\\
                    <div class=\"box-content\">\\n\\
                        <form class=\"form-horizontal\" id=\"form\" role=\"form\">\\n\\
                            <div class=\"form-group\">\\n\\
                                <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Artist"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>\\n\\
                                <div class=\"col-xs-10 col-sm-8\">\\n\\
                                    <span class=\"col-xs-8 col-sm-8\">\\n\\
                                        <input id=\"artist_id\" type=\"hidden\" name=\"id\">\\n\\
                                        <input id=\"audio_artists_name\" class=\"form-control own_fields\" type=\"text\" name=\"name\" \\n\\
                                            data-validation = \"required, server\" \\n\\
                                            data-validation-url = \"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-audio-artists-name\" >\\n\\
                                        <div class=\"name-check\"></div>\\n\\
                                    </span>\\n\\
                                </div>\\n\\
                            </div>\\n\\
                        </form>\\n\\
                    </div>');
                \$('#modalbox').find('.devoops-modal-bottom').html('\\
                    <div class=\"col-xs-12\">\\n\\
                        <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>\\n\\
                        <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                    </div>');
            } else {
                // just clear the values when the popup is reopened:
                \$('#modalbox form').get(0).reset();
                \$('#modalbox form div.name-check').html('').hide();
                \$('#modalbox').find('.devoops-modal-inner').find('input').val('');
            }

            if (obj.data('artistsid')) {
                \$('#modalbox').find('.devoops-modal-inner').find('input[name=\"id\"]').val(obj.data('artistsid'));
                \$('#modalbox').find('.devoops-modal-inner').find('input[name=\"name\"]').val(obj.closest('tr').find('td:first a').text());
            }

            // set up validator for the form
            if (obj.data('artistsid')) {
                clearServerValidator();
                setEditValidationConfig(conf);
                \$(\"#audio_artists_name\").removeAttr('data-validation-event');
                \$.validate(conf);
                setServerValidationRequestParams();
            } else {
                clearServerValidator();
                setDefaultValidationConfig(conf);
                \$(\"#audio_artists_name\").removeAttr('data-validation-event');
                \$.validate(conf);
                setServerValidationRequestParams();
            }

            \$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");
            \$('#modalbox form').attr('action', obj.attr('href'));
            \$(\"#modalbox\").show();
            obj.closest('div.open').removeClass('open');
        }


function setServerValidationRequestParams() {
    var param = {
        'id': \$(\"#artist_id\").val(),
        'for_validator': true,
    };
    \$('#audio_artists_name').attr('data-validation-req-params', JSON.stringify(param) );
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
    
    \$(document).off('change', '#audio_artists_name');
}

function setEditValidationConfig(conf) {
    conf.ignore = ['name'];
    conf.validateOnBlur = false;
    conf.validateOnEvent = true;

    \$(document).one('change', '#audio_artists_name', function (e) {
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
        return "default/AudioClub/audio_artists/audio_artists.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 227,  321 => 226,  307 => 217,  298 => 211,  285 => 203,  240 => 161,  233 => 157,  180 => 107,  162 => 94,  123 => 57,  117 => 55,  115 => 54,  109 => 51,  101 => 48,  89 => 41,  80 => 35,  76 => 34,  69 => 30,  63 => 29,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/AudioClub/audio_artists/audio_artists.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/AudioClub/audio_artists/audio_artists.js.twig");
    }
}
