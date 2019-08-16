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

/* default/Storages/storages_list/storages_list.js.twig */
class __TwigTemplate_cdaa9ca1cff515aba38577b4f4d64ef11caffcac745424fa304dc0070c1a9b31 extends \Twig\Template
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
        var select2OptPH = {
            minimumResultsForSearch: -1,
            dropdownAutoWidth: false,
            width: '100%',
            allowDuplicates: false,
            placeholder : {
                id: \"-1\",
                text: \"\",
                selected: 'selected'
            }
        };

        var conf = {
            form: '#modal_form',
            lang : '";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            modules: 'jsconf, logic',

            onSuccess: function () {
                var sendData = {};

                \$(this.form).find('input, select').each(function () {
                    sendData[\$(this).attr('name')] = \$(this).is(':checkbox') ? (\$(this).is(':checked') ? 1 : 0) : \$(this).val();
                });
                JScloseModalBox();
                ajaxPostSend(\$(this.form).attr('action'), sendData, false, false, true);
                return false;
            },

            onError: function () {
                return false;
            }
        };

        function DemoSelect2() {
            \$('#form_stream_server_type').select2(select2OptPH);
        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-storages-status' data-id='\"+ id +\"' data-status='\"+ json.data[i].status +\"'>\\n\\
                                                                    <span>\" + (json.data[i].status == 1? \"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch off"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch on"), "html", null, true);
        echo "\") + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/reset-cache' data-id='\"+ id +\"'>\\n\\
                                                                    <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Clean the cache"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-storage' data-id='\"+ id +\"'>\\n\\
                                                                    <span>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-storage' data-id='\" + id + \"' data-tasks='\" + json.data[i].tasks + \"' data-storage_name='\" + json.data[i].storage_name + \"' >\\n\\
                                                                    <span> ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";

                        json.data[i].status = '\\
                           <div class=\"mswitch\">\\
                                <input type=\"checkbox\" \\
                                       id=\"storage_status_'+ json.data[i].id +'\"\\
                                       name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                       ' + ( json.data[i].status != 0 ? 'checked=\"checked\"' : '' ) +'\\
                                       data-id=\"' + json.data[i].id + '\"\\
                                       data-status=\"' + json.data[i].status +'\">\\
                                <label class=\"label-success\" \\
                                       title=\"' + ( json.data[i].status != 0 ? \"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched on"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched off"), "html", null, true);
        echo "\" ) + '\" \\
                                       for=\"storage_status_'+ json.data[i].id +'\"></label>\\
                            </div>';

                        json.data[i].storage_name = \"<a class='main_ajax no_context_menu' href='";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-storage' data-id='\"+ id +\"'><span>\"+json.data[i].storage_name+\"</span></a>\";
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/storages-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 101
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 102
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 104
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"columnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, -2]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide();
        }

        function yelp() {
            \$(document).ready(function () {
                \$.validate(conf);

                LoadSelect2Script(DemoSelect2);

                \$(document).on('change', \".mswitch input\", function(e){
                    ajaxPostSend('";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-storages-status', \$(this).data() );
                });

                \$(document).on('change', '#form_stream_server_type', function(e){
                    var val = \$(this, 'option[selected]').val() ? true: false;
                    \$('#form_stream_server_port, #form_stream_server_app').prop('disabled', !val).closest('.form-group')[val? 'show': 'hide']('fast');
                });

                \$(document).on('change', '#form_dvr_type', function(e){
                    var val = \$(this, 'option[selected]').val() ? true: false;
                    \$('#form_fake_tv_archive').prop('disabled', !val).closest('.form-group')[val? 'show': 'hide']('fast');
                    var sendData = {
                        id: \$(\"#modal_form input[name*='id']\").val(),
                        storage_name: \$(\"#modal_form input[name*='storage_name']\").val(),
                        dvr_type: \$(this, 'option[selected]').val()
                    };
                    if (sendData.id) {
                        ajaxPostSend('";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-linked-channels', sendData);
                    }
                });

                \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    var sendData = \$(this).data();
                    if (\$(this).attr('href').search('refresh-cache') !== -1) {
                        JSshowModalBox();
                    } else if (\$(this).attr('href').search('remove-storage') !== -1 && \$(this).data('tasks') == 1 && !confirm(\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->transchoice("Storage \"{strg}\" has linked channels", 1, ["\"{strg}\"" => "#strgnm#"]), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->transchoice("Are you sure you want to delete storage %s?", 1, ["%s" => "#strgnm#"]), "html", null, true);
        echo "\".replace(/#strgnm#/gi, '\"' + \$(this).data('storage_name') + '\"'))) {
                        return false;
                    } else {
                        \$(\"#modalbox\").data('complete', 0);
                    }
                    ajaxPostSend(\$(this).attr('href'), sendData, false, false, true);
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('click', '#add_storage', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    showAdModalBox({storage: {title: '";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add storage"), "html", null, true);
        echo "'}});
                    return false;
                });

                \$(document).on('click', '#save_button', function(e){
                    e.stopPropagation();
                    e.preventDefault();

                    if (\$(conf.form).isValid({}, conf, true)) {
                        conf.onSuccess();
                    } else {
                        conf.onError();
                    }
                    return false;
                });
                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        function showAdModalBox(data){
            \$(\"#modalbox\").data('complete', 1);
            \$(\"#modalbox .modal-header-name span\").text(data.storage.title);
            \$(\"#modalbox .devoops-modal-inner\").html(\$('#save_storage_form').tmpl(data.storage));
            \$(\"#modalbox .devoops-modal-bottom\").html(\$('#save_storage_form_button').html());

            \$(\"select\", conf.form).each(function(){
                var objKey = \$(this).attr('id').replace('form_', '');
                if (data.storage[objKey]) {
                    \$(this).val(data.storage[objKey]);//.trigger('change');
                }
            });

            \$(\"input[type='checkbox']\", conf.form).each(function(){
                var objKey = \$(this).attr('id').replace('form_', '');
                if (data.storage[objKey]) {
                    \$(this).attr('checked', (data.storage[objKey] + '') === '1');
                }
            });

            \$(\"#modalbox select\").select2(select2OptPH);

            \$.validate(conf);
            \$(\"#additional_information\").hide('fast');
            \$(\"#modalbox\").show();
        }

        function checkLinkedChannelsResult(data){
            if (data && data.msg) {
                notty(data.msg, 'warning');
            }
        }";
    }

    public function getTemplateName()
    {
        return "default/Storages/storages_list/storages_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 170,  260 => 157,  244 => 146,  222 => 129,  195 => 104,  189 => 102,  187 => 101,  182 => 99,  174 => 96,  162 => 89,  153 => 85,  135 => 70,  129 => 69,  122 => 65,  116 => 64,  109 => 60,  103 => 59,  94 => 55,  88 => 54,  47 => 16,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Storages/storages_list/storages_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Storages/storages_list/storages_list.js.twig");
    }
}
