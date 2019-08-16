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

/* default/Admins/admins_list/admins_list.js.twig */
class __TwigTemplate_d99a8453615a0986b9a7f84d83083cdac78ebbe4df45e6419222b66ba369086f extends \Twig\Template
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
        echo "/*
 this component has templates in .twig file
*/
        var conf = {
            form: '#karaoke_form',
            lang : '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            ignore: [],
            modules: 'logic, security',

            onSuccess: function () {
                var sendData = new Object();
                var form_fields = \$(\"#modalbox_ad input.own_fields:not(:disabled), #gid:not(:disabled)\");
                form_fields.each(function () {
                    if (\$(this).val()) {
                        sendData[\$(this).data('name')] = \$(this).val();
                    }
                });
                ajaxPostSend(\$(\"#modalbox_ad form\").attr('action'), sendData, false, false);
                return false;
            },

            onError: function () {
                return false;
            }
        };

        var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%', placeholder: ''};

        function closeModalBox(){
            \$(\"#modalbox\").hide();
            \$('#modalbox').find('.modal-header-name span').empty();
            \$('#modalbox').find('.devoops-modal-inner').empty();
            \$('#modalbox').find('.devoops-modal-bottom').empty();
        }

        function DemoSelect2() {
            \$('#gid').select2(select2Opt);
            \$(\"#target_group\").select2(select2Opt);
            \$(\"#target_reseller\").select2(select2Opt);
        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var login = json.data[i].login;
                        var group_name = (typeof(json.data[i].group_name) != 'undefined' && json.data[i].group_name)? json.data[i].group_name: '';
                        var allResellers = {};
                        ";
        // line 53
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 54
            echo "                        ";
            if ($this->getAttribute(($context["app"] ?? null), "allResellers", [], "any", true, true)) {
                // line 55
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", [], "array"));
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
                    // line 56
                    echo "                        allResellers['";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", []), "html", null, true);
                    echo "'] = '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", []), "html", null, true);
                    echo "'";
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ",";
                    }
                    // line 57
                    echo "                            ";
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
                // line 58
                echo "                        ";
            }
            // line 59
            echo "
                        var reseller_id = (typeof(json.data[i].reseller_id) != 'undefined' && json.data[i].reseller_id) ? json.data[i].reseller_id: '-';
                        var reseller_name = (typeof(json.data[i].reseller_name) != 'undefined' && json.data[i].reseller_name) ? json.data[i].reseller_name: (typeof (allResellers[reseller_id]) != 'undefined' ? allResellers[reseller_id]: '');
                        ";
        }
        // line 63
        echo "                        var gid = json.data[i].gid;
                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                        <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/admins-list-json' data-id='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                                                        if (login != 'admin') {
                                                            ";
        // line 75
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 76
            echo "                                json.data[i].operations += \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-admin-to-reseller' data-id='\" + id +\"' data-reseller_id='\" + reseller_id + \"'>\\n\\
                                                                    <span>\"+ (reseller_name != '' ? \"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change reseller for current admin"), "html", null, true);
            echo "\": \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Set reseller for current admin"), "html", null, true);
            echo "\") + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                                json.data[i].reseller_name = '<a class=\"main_ajax no_context_menu\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-admin-to-reseller\" data-id=\"' + id + '\" data-reseller_id=\"' + reseller_id + '\">'+ reseller_name +'</a>';
                                                            ";
        }
        // line 83
        echo "                                                            ";
        if (($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", []) == "admin"))) {
            // line 84
            echo "                                json.data[i].operations += \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-admin-to-group' data-id='\" + id +\"' data-group_id='\" + gid + \"'>\\n\\
                                                                    <span>";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change group for current admin"), "html", null, true);
            echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                                                            ";
        }
        // line 90
        echo "                                json.data[i].operations += \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-admin' data-id='\" + id + \"'>\\n\\
                                                                    <span> ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                                                        }
                                json.data[i].operations += \"</ul>\\n\\
                                                    </div>\";
                        json.data[i].login = '<a class=\"main_ajax no_context_menu\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/admins-list-json\" data-id=\"' + id + '\">' + login + '</a>';
                        json.data[i].group_name = '<a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/admins-groups-permissions?id=' + gid + '\">' + group_name + '</a>';
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/admins-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 111
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 112
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 114
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
                    {\"searchable\": false, \"targets\": [-1]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                
                \$.validate(conf);

                \$(document).on('click', \"a.main_ajax:not([href*='move-admin-to-reseller']):not([href*='move-admin-to-group'])\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.closest('div.open').removeClass('open');

                    if( \$this.attr(\"href\").indexOf(\"remove-admin\") !== -1 && !confirm(\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this administrator?"), "html", null, true);
        echo "\") ) {
                        return false;
                    }

                    var sendData = \$this.data();
                    ajaxPostSend(\$this.attr('href'), sendData, false, false);
                    return false;
                });

                \$(\"#modalbox_ad, #modalbox \").on('click', \" button[type='reset']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$.validate();
                    \$(this).closest(\"div[id^='modalbox\").find('form').get(0).reset();
                    \$(this).closest(\"div[id^='modalbox\").hide();
                    return false;
                });

                \$(\"#modalbox_ad button[type='submit']\").on('click', function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    /*
                    var ignore = new Array();
                    if (\$('#adm_id').val() && !\$(\"#adm_pass\").val() && !\$(\"#adm_re_pass\").val()) {
                        ignore.push(\$(\"#adm_pass\").prop('name'));
                        ignore.push(\$(\"#adm_re_pass\").prop('name'));
                    }

                    conf.ignore = ignore;
                    */

                    if (\$(\"#karaoke_form\").isValid({}, conf, true)) {
                        conf.onSuccess();
                    } else {
                        conf.onError();
                    }
                    return false;
                });

                ";
        // line 183
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 184
            echo "                \$(document).on('click', \"#modalbox button[type='submit']\", function (e) {
                    var _this = \$(this);

                    e.stopPropagation();
                    e.preventDefault();
                    var sendData = new Object();
                    var form_fields = _this.closest(\"#modalbox\").find('form').find(\".own_fields:not(:disabled)\");
                    form_fields.each(function () {
                        if (\$(this).val()) {
                            sendData[this.name] = \$(this).val();
                        }
                    });
                    var action = _this.closest(\"#modalbox\").find('form').attr('action');
                    ajaxPostSend(action, sendData, false, false);
                    return false;

                });

                \$(document).on('click', \"#modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function(e){
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();
                    closeModalBox();
                    return false;
                });

                \$(document).on('click', \"a[href*='move-admin-to-reseller']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox\").data('complete', 1);
                    \$('#modalbox .modal-header-name span').text(\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Resellers"), "html", null, true);
            echo "\");
                    var reseller_id = \$(this).data('reseller_id');
                    \$('#modalbox .devoops-modal-inner').html(\$(\"#modal_move_reseller_form_body\").html());
                    \$('#modalbox .devoops-modal-inner input[name=\"id\"]').val(\$(this).data('id'));
                    \$('#modalbox .devoops-modal-inner input[name=\"source_id\"]').val(reseller_id);
                    \$('#target_reseller option').removeAttr('selected');
                    \$('#target_reseller option[value=\"'+ reseller_id +'\"]').attr('selected', 'selected');
                    \$('#modalbox .devoops-modal-bottom').html(\$(\"#modal_move_form_buttons\").html());

                    \$(\"#target_reseller\").select2(select2Opt);

                    \$(\"#modalbox\").show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });
                ";
        }
        // line 232
        echo "
                ";
        // line 233
        if (($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", []) == "admin"))) {
            // line 234
            echo "                \$(document).on('click', \"a[href*='move-admin-to-group']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox\").data('complete', 1);
                    \$('#modalbox .modal-header-name span').text(\"";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Groups"), "html", null, true);
            echo "\");
                    var group_id = \$(this).data('group_id');
                    \$('#modalbox .devoops-modal-inner').html(\$(\"#modal_move_group_form_body\").html());
                    \$('#modalbox .devoops-modal-inner input[name=\"id\"]').val(\$(this).data('id'));
                    \$('#modalbox .devoops-modal-inner input[name=\"source_id\"]').val(group_id);
                    \$('#target_group option').removeAttr('selected');
                    \$('#target_group option[value=\"'+ group_id +'\"]').attr('selected', 'selected');
                    \$('#modalbox .devoops-modal-bottom').html(\$(\"#modal_move_form_buttons\").html());

                    \$(\"#target_group\").select2(select2Opt);

                    \$(\"#modalbox\").show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                ";
        }
        // line 255
        echo "
                \$(\"#add_admin\").on(\"click\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox_ad .modal-header-name span\").text('";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Adding administrator"), "html", null, true);
        echo "');
                    //\$(\"#adm_login\").next('div').removeClass('bg-danger').hide().empty();
                    \$(\"#modalbox_ad input\").prop(\"disabled\", false).removeAttr('disabled').val('');
                    \$(\"#modalbox_ad input[type='hidden']\").attr('disabled', 'disabled').val('');
                    \$(\"#modalbox_ad select[name='gid'] option\").removeAttr('selected');
                    \$('#gid').trigger('change.select2');

                    if (\$(\"#adm_pass\").closest(\".form-group\").children('label').find('span.icon-required').length == 0) {
                        \$(\"#adm_pass\").closest(\".form-group\").children('label').append('<span class=\"icon-required\">*</span>');
                        \$(\"#adm_re_pass\").closest(\".form-group\").children('label').append('<span class=\"icon-required\">*</span>');
                    }

                    clearServerValidator();
                    setDefaultValidationConfig(conf);
                    \$(\"#adm_login\").removeAttr('data-validation-event');
                    \$(\"#adm_pass\").removeAttr('data-validation-optional');
                    \$(\"#adm_re_pass\").attr('data-validation', \"required, confirmation\");
                    \$(\"#adm_re_pass\").removeAttr('data-validation-event');
                    \$.validate(conf);
                    setServerValidationRequestParams();

                    \$('#modalbox_ad button[type=\"submit\"]').removeAttr(\"disabled\");
                    \$(\"#modalbox_ad\").show();
                    return false;
                });

                /*
                \$(document).on('change', '#adm_login', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.next('div').removeClass('bg-danger').hide().empty();
                    \$('#modalbox_ad button[type=\"submit\"]').removeAttr(\"disabled\");
                    
                    // how to validate just 1 field:
                    var isValid;
                    \$this.validate(function(valid, elem){isValid=valid;}, {form: \"#modalbox_ad form\"});

                    if (\$this.val() && isValid ) {
                        ajaxPostSend('";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-admins-login', {login: \$this.val()}, false, false);
                    }
                    return false;
                });*/

                LoadDataTablesScripts(TestTable1);
                LoadSelect2Script(DemoSelect2);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var setAdminsModal = function (data) {
            \$(\"#modalbox_ad .modal-header-name span\").text('";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Editing administrator"), "html", null, true);
        echo "');
            if (data.data.length == 1) {
                var row = data.data[0];
                for (var field_name in row) {
                    \$(\"#modalbox_ad input[name='\" + field_name + \"']\").val(row[field_name]);
                }
                if (typeof(row['gid']) != 'undefined' && row['gid']) {
                    \$(\"#gid option\").removeAttr('selected');
                    \$(\"#gid option\").each(function () {
                        if (\$(this).val().toString() == row['gid'].toString()) {
                            \$(this).attr('selected', 'selected');
                        }
                    })
                }

            }
            \$(\"#modalbox_ad input, #modalbox_ad select\").removeAttr('disabled');
            if (\$(\"#adm_login\").val() == 'admin' ";
        // line 328
        if ($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true)) {
            echo " || \$(\"#adm_login\").val() == \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", [], "array"), "html", null, true);
            echo "\" ";
        }
        echo ") {
                if (";
        // line 329
        if ($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true)) {
            echo " \$(\"#adm_login\").val() == 'admin' && 'admin' != \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", [], "array"), "html", null, true);
            echo "\" ";
        } else {
            echo " 0 ";
        }
        echo ") {
                    JSErrorModalBox({msg: \"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You don't have permission for edit this record"), "html", null, true);
        echo "\"});
                    return false;
                }
                \$(\"#adm_login\").attr('disabled', \"disabled\");
                \$(\"#gid\").attr('disabled', \"disabled\");
                \$('#gid').prepend(\"<option value=0 selected='selected'></option>\");
            } else {
                \$('#gid option[value=\"0\"]').remove();
            }
            \$('#gid').trigger('change.select2');

            clearServerValidator();
            setEditValidationConfig(conf);
            \$(\"#adm_login\").removeAttr('data-validation-event');
            \$(\"#adm_pass\").attr('data-validation-optional','true');
            \$(\"#adm_re_pass\").attr('data-validation', \"confirmation\");
            \$(\"#adm_re_pass\").attr('data-validation-event', \"blur\");
            \$.validate(conf);
            setServerValidationRequestParams();

            //\$(\"#adm_login\").next('div').removeClass('bg-danger').hide().empty();
            \$(\"#adm_pass\").val('').closest(\".form-group\").children('label').find('span.icon-required').remove();
            \$(\"#adm_re_pass\").val('').closest(\".form-group\").children('label').find('span.icon-required').remove();

            \$('#modalbox_ad button[type=\"submit\"]').removeAttr(\"disabled\");
            \$(\"#modalbox_ad\").show();
        };


function setServerValidationRequestParams() {
    var param = {
        'id': \$(\"#adm_id\").val(),
        'for_validator': true,
    };
    \$('#adm_login').attr('data-validation-req-params', JSON.stringify(param) );
}

// drop assigned server-side validator instance to stop reuse:
function clearServerValidator() {
    \$(\"#modalbox_ad\").find(\"[data-validation~='server']\").each( function(){
        this.asyncValidators = null;
    });
}

function setDefaultValidationConfig(conf) {
    conf.ignore = [];
    conf.validateOnBlur = true;
    conf.validateOnEvent = false;
    
    \$(document).off('change', '#adm_login');
}

function setEditValidationConfig(conf) {
    conf.ignore = ['login'];
    conf.validateOnBlur = false;
    conf.validateOnEvent = true;

    \$(document).one('change', '#adm_login', function (e) {
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
        return "default/Admins/admins_list/admins_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 330,  520 => 329,  512 => 328,  492 => 311,  474 => 298,  432 => 259,  426 => 255,  406 => 238,  400 => 234,  398 => 233,  395 => 232,  376 => 216,  342 => 184,  340 => 183,  297 => 143,  266 => 114,  260 => 112,  258 => 111,  253 => 109,  245 => 106,  233 => 99,  227 => 98,  218 => 92,  212 => 91,  209 => 90,  202 => 86,  196 => 85,  193 => 84,  190 => 83,  183 => 81,  175 => 78,  169 => 77,  166 => 76,  164 => 75,  157 => 71,  151 => 70,  142 => 63,  136 => 59,  133 => 58,  119 => 57,  110 => 56,  92 => 55,  89 => 54,  87 => 53,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Admins/admins_list/admins_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Admins/admins_list/admins_list.js.twig");
    }
}
