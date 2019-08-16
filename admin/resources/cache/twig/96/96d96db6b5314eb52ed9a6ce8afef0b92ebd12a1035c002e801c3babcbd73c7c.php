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

/* default/TvChannels/epg/epg.js.twig */
class __TwigTemplate_091201cd233109b877951e27e84ff1bd40e35eb889058eede10429ba363177ce extends \Twig\Template
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
            form: '#epg_form',
            lang : '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            errorClass: \"error\",
            validateOnBlur: false,
            validateOnEvent: true,
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            modules: 'jsconf,security',

            onSuccess: function () {
                var sendData = new Object();
                var arr = [];
                \$(\"#s2_lang_code option\").each(function(){
                    arr.push(\$(this).val());
                });
                \$(\"input[name='lang_code']\").val(arr.join(','));
                var form_fields = \$(\"#modalbox_ad input.own_fields:not(:disabled), #s2_status\");
                form_fields.each(function () {
                    sendData[this.name] = \$(this).val();
                });

                ajaxPostSend(\$(\"#modalbox_ad form\").attr('action'), sendData, false, false);
                return false;
            },
            onError: function () {
                var _this = this;
                \$(_this.form + \" select[data-validation]\").each(function(){
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
            \$('#s2_status').select2(select2Opt);

        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object' && json.data.length >0) {
                    var date;
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var status = json.data[i].status;
                        //json.data[i].status = (status == 1 ?\"<span class='txt-success'>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "</span>\":\"<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "</span>\");
                        json.data[i].status = '\\
                            <div class=\"mswitch\">\\
                                <input type=\"checkbox\" \\
                                       id=\"epg_publish_'+ json.data[i].id +'\"\\
                                       name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                       ' + ( json.data[i].status ? 'checked=\"checked\"' : '' ) +'\\
                                       data-id=\"' + json.data[i].id + '\"\\
                                       data-status=\"' + status + '\"\\
                                       value=\"' + ( json.data[i].status ? 'on' : 'off' ) +'\">\\
                                <label class=\"label-success\" \\
                                       title=\"' + ( json.data[i].status ? \"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "\" ) + '\" \\
                                       for=\"epg_publish_'+ json.data[i].id +'\"></label>\\
                            </div>';

                        json.data[i].operations = \"\\
                                <div class='col-xs-3 col-sm-8'>\\n\\
                                    <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                        <i class='pull-right fa fa-cog'></i>\\n\\
                                    </a>\\n\\
                                    <ul class='dropdown-menu pull-right'>\\n\\
                                        <li>\\n\\
                                            <a class='main_ajax no_context_menu' href='";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/epg-list-json' data-id='\" + id + \"'>\\n\\
                                                <span>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                            </a>\\n\\
                                        </li>\\n\\
                                        <li>\\n\\
                                            <a class='main_ajax no_context_menu' \\
                                                href='";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-epg-item-status' \\
                                                data-id='\" + id + \"' data-status='\" + status + \"'>\\n\\
                                                <span>\" + (status == 1? '<span>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "</span>':'<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "</span>') + \"</span>\\n\\
                                            </a>\\n\\
                                        </li>\\n\\
                                        <li>\\n\\
                                            <a class='main_ajax no_context_menu' href='";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-epg-item' data-id='\" + id + \"'>\\n\\
                                                <span> ";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                            </a>\\n\\
                                        </li>\\n\\
                                    </ul>\\n\\
                                </div>\";
                        date = json.data[i]['updated'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['updated'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/epg-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                
                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                fixedHeader: {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },

                ";
        // line 131
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 132
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 134
        echo "                
                \"columnDefs\": [
                    {className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, -2, -3]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                LoadDataTablesScripts(TestTable1);
                LoadSelect2Script(DemoSelect2);
                
                \$.validate(conf);

                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    
                    if( \$(this).attr(\"href\").indexOf(\"remove-epg\") != -1 && !confirm(\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove this EPG"), "html", null, true);
        echo "?\") ) {
                        \$(this).closest('div.open').removeClass('open');
                        return;
                    }

                    \$(\"#modalbox\").data('complete', 0);
                    var sendData = \$(this).data();
                    ajaxPostSend(\$(this).attr('href'), sendData, false, false);
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(\"#form_reset\").on('click', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(this).closest('form').get(0).reset();
                    return false;
                });

                \$(\"#modalbox_ad button[type='submit']\").on('click', function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    if (\$(\"#epg_form\").isValid({}, conf, true)) {
                        conf.onSuccess();
                    } else {
                        conf.onError();
                    }
                    return false;
                });

                \$(\"#add_epg_item\").on(\"click\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    closeModalBox();
                    \$('#epg_form').get(0).reset();

                    \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add EPG"), "html", null, true);
        echo "');
                    \$(\"#modalbox_ad .own_fields\").prop(\"disabled\", false).removeAttr('disabled').val('');
                    /*\$(\"#modalbox_ad input[type='hidden']:not(.not_disabled)\").attr('disabled', 'disabled').val('');*/
                    \$(\"#form_id\").attr('disabled', 'disabled').val('');

                    // setup the default state:
                    \$('#s2_status').val(\$('#s2_status option:first').val());
                    \$(\"#s2_status\").trigger(\"change\");
                    //\$('#s2_status').select2(\"val\",\"\");

                    // put back the form validator default behaviour configuration
                    clearServerValidator();
                    setDefaultValidationConfig(conf);
                    \$(\"#form_uri, #form_id_prefix\").removeAttr('data-validation-event');
                    \$.validate(conf);
                    setServerValidationRequestParams();

                    \$('button.remove.all').click();
                    \$('#s2_lang_code_available option.old').removeClass('old').addClass('new');
                    //\$('#form_uri').next('div.name-check').html('').hide();
                    //\$('#form_id_prefix').next('div.name-check').html('').hide();
                    \$('#epg_form').find('[type=\"submit\"]').prop('disabled', false);
                    \$(\"#modalbox_ad\").show();
                    //        \$(this).closest('.form-group').find('tbody tr:hidden').show();
                    return false;
                });

                /*
                \$(document).on('change', '#form_uri', function (e) {
                    var _this = \$(this);
                    _this.next('div.name-check').html('').hide();
                    _this.closest('form').find('[type=\"submit\"]').prop('disabled', false);

                    _this.validate( {form: '#epg_form'}, conf.lang );
                    if( !_this.hasClass(conf.errorClass) && _this.val() ) {
                        ajaxPostSend(\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/epg-check-uri\", {param: _this.val(), epgid: \$('#form_id').val()});
                    }
                });

                \$(document).on('change', '#form_id_prefix', function(e){
                    var _this = \$(this);
                    _this.next('div.name-check').html('').hide();
                    _this.closest('form').find('[type=\"submit\"]').prop('disabled', false);

                    if (_this.val()) {
                        ajaxPostSend(\"";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/epg-check-prefix\", {epg_id: \$(\"#form_id\").val(), prefix: _this.val()});
                    }
                });*/

                /* use this code if your select accept an empty value
                \$(document).on('change', '#s2_status', function () {
                    \$(this).validate(function(valid, elem) {
                        if (valid) {
                            conf.unhighlight(elem, conf.errorClass);
                        } else {
                            conf.highlight(elem, conf.errorClass);
                        }
                    });
                });
                */

                \$(document).on('change', \".mswitch input\", function(e){
                    ajaxPostSend('";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-epg-item-status', \$(this).data() );
                });

                \$('button.add').click(resetAddOption);
                \$(document).on('dblclick', '#s2_lang_code_available option', resetAddOption);

            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var resetAddOption = function(){
            if ( \$('#s2_lang_code option').length > 5) {
                JSErrorModalBox({msg: \"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Max count of languages 5"), "html", null, true);
        echo "\"});
                var lastOption;
                while(\$('#s2_lang_code option').length > 5){
                    lastOption = \$('#s2_lang_code option:last-of-type');
                    \$('#s2_lang_code_available').append(lastOption);
                    \$('#s2_lang_code_available').sortBoxes();
                }
            }
        };

        var setEPGModal = function (data) {
            closeModalBox();
            \$('#epg_form').get(0).reset();

            \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit EPG"), "html", null, true);
        echo "');
            //\$('#form_uri').next('div.name-check').html('').hide();
            //\$('#form_id_prefix').next('div.name-check').html('').hide();
            \$('#epg_form').find('[type=\"submit\"]').prop('disabled', false);

            if (data.data.length == 1) {
                var row = data.data[0];
                for (var field_name in row) {
                    \$(\"#modalbox_ad .own_fields[name='\" + field_name + \"']\").val(row[field_name]);
                }
                // let the Select2 know that value was changed
                \$(\"#s2_status\").trigger(\"change\");
            }
            \$(\"#modalbox_ad input\").removeAttr('disabled');

            clearServerValidator();
            setEditValidationConfig(conf);
            \$(\"#form_uri, #form_id_prefix\").removeAttr('data-validation-event');
            \$.validate(conf);
            setServerValidationRequestParams();

            \$('#s2_lang_code_available').append(\$('#s2_lang_code option'));
            \$('#s2_lang_code').empty();
            \$('#s2_lang_code_available').sortBoxes();
            if (data.data[0]['lang_code']) {

                \$('#s2_lang_code_available option.old').removeClass('old').addClass('new');
                \$(data.data[0]['lang_code'].split(',')).each(function (num, item) {
                    /*\$('#s2_lang_code option[value=\"' + item + '\"]');*/
                    \$('#s2_lang_code').append(\$('#s2_lang_code_available option[value=\"' + item + '\"]'));
                    \$('#s2_lang_code_available option[value=\"' + item + '\"]').remove();
                });
            }
            \$('#s2_lang_code_available').sortBoxes();
            \$(\"#modalbox_ad\").show();
        };

        var manageEPG = function (obj) {
            \$(\"#modalbox_ad\").click();
            JSSuccessModalBox(obj);
            \$('#datatable-1').DataTable().ajax.reload();
        };

        var manageEPGError = function (obj) {
            JSErrorModalBox(obj);
        };

        function closeModalBox(){
            JScloseModalBox();
        }

        var errAction = function(){
            JSErrorModalBox({msg: '<span>";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Failed"), "html", null, true);
        echo "!</span>'});
        };


// drop assigned server-side validator instance to stop reuse:
function clearServerValidator() {
    \$(\"#modalbox_ad\").find(\"[data-validation~='server']\").each( function(){
        this.asyncValidators = null;
    });
}

function setServerValidationRequestParams() {
    var epg_id = \$(\"#form_id\").val();
    var param = {
        'for_validator': true 
    };
    \$('#form_uri'      ).attr('data-validation-req-params', JSON.stringify( \$.extend({}, param, {'epgid': epg_id}) ));
    \$('#form_id_prefix').attr('data-validation-req-params', JSON.stringify( \$.extend({}, param, {'epg_id': epg_id}) ));
}

function setDefaultValidationConfig(conf) {
    conf.ignore = [];
    conf.validateOnBlur = true;
    conf.validateOnEvent = false;

    \$(\"#form_uri, #form_id_prefix\").off('change');
}

function setEditValidationConfig(conf) {
    conf.ignore = ['uri','id_prefix'];
    conf.validateOnBlur = false;
    conf.validateOnEvent = true;

    \$(\"#form_uri, #form_id_prefix\").one('change', function (e) {
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
        return "default/TvChannels/epg/epg.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 333,  390 => 281,  373 => 267,  355 => 254,  333 => 237,  318 => 227,  280 => 192,  240 => 155,  217 => 134,  211 => 132,  209 => 131,  193 => 118,  185 => 115,  166 => 99,  160 => 98,  151 => 94,  144 => 92,  136 => 87,  130 => 86,  114 => 75,  98 => 64,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/epg/epg.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/epg/epg.js.twig");
    }
}
