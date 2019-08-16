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

/* default/Admins/admins_groups/admins_groups.js.twig */
class __TwigTemplate_34a3b91cf0d97e2e8f29d2841f6d59de7eef0ef53582abd88902a118eb2e6233 extends \Twig\Template
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
            form: '#karaoke_form',
            lang : '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            modules: 'security',

            onSuccess: function () {
                var sendData = new Object();
                var lengthObj = 0;
                var form_fields = \$(\"#modalbox_ad input.own_fields:not(:disabled)\");
                form_fields.each(function () {
                    if (\$(this).val()) {
                        sendData[this.name] = \$(this).val();
                    }
                });
                ajaxPostSend(\$(\"#modalbox_ad form\").attr('action'), sendData, false, false);
                return false;

            },

            onError: function () {
                return false;
            }
        };

        function DemoSelect2() {
            \$.fn.select2.defaults.set('dropdownAutoWidth', 'false');
            \$.fn.select2.defaults.set('width', '100%');
            \$('#target_reseller').select2(select2Opt);
            \$('#target_group').select2(select2Opt);
        }

        function closeModalBox(){
            \$(\"#modalbox\").hide();
            \$('#modalbox').find('.modal-header-name span').empty();
            \$('#modalbox').find('.devoops-modal-inner').empty();
            \$('#modalbox').find('.devoops-modal-bottom').empty();
        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var name = json.data[i].name;
                        ";
        // line 51
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 52
            echo "                        var reseller_name = json.data[i].reseller_name ? json.data[i].reseller_name : '';
                        var reseller_id = json.data[i].reseller_id ? json.data[i].reseller_id : '-';
                        ";
        }
        // line 55
        echo "
                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\";
                        ";
        // line 61
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 62
            echo "                        json.data[i].operations         += \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-admin-group-to-reseller' data-id='\"+id+\"' data-reseller_id='\"+reseller_id+\"'>\\n\\
                                                                    <span>\" + (reseller_name != '' ? \"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change reseller for current group of admin"), "html", null, true);
            echo "\": \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Set reseller for current group of admin"), "html", null, true);
            echo "\") + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                        json.data[i].reseller_name = '<a class=\"main_ajax no_context_menu\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-admin-group-to-reseller\" data-id=\"'+id+'\" data-reseller_id=\"'+reseller_id+'\">'+reseller_name+'</a>';
                        ";
        }
        // line 69
        echo "                        ";
        if (($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", []) == "admin"))) {
            // line 70
            echo "                        json.data[i].operations         += \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-all-admin-to-group' data-group_id='\" + id + \"'>\\n\\
                                                                    <span>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Move all admins to another group"), "html", null, true);
            echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                        ";
        }
        // line 76
        echo "                        json.data[i].operations         += \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/admins-groups-list-json' data-id='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a href='";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/admins-groups-permissions?id=\" + id + \"'>\\n\\
                                                                    <span>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Permissions"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-admins-group' data-id='\" + id + \"'>\\n\\
                                                                    <span> ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        json.data[i].name = '<a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/admins-groups-permissions?id=' + id + '\">' + name + '</a>';
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/admins-groups-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 105
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 106
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 108
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                \"columnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, 2]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () { 
                
                \$.validate(conf);

                \$(document).on('click', \"a.main_ajax:not([href*='move-admin-group-to-reseller']):not([href*='move-all-admin-to-group'])\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.closest('div.open').removeClass('open');

                    if( \$this.attr(\"href\").indexOf(\"remove-admins-group\") !== -1 && !confirm(\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this administrators group?"), "html", null, true);
        echo "\") ) {
                        return false;
                    }

                    var sendData = \$this.data();
                    ajaxPostSend(\$this.attr('href'), sendData, false, false);
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
                    if (\$(\"#karaoke_form\").isValid({}, conf, true)) {
                        conf.onSuccess();
                    } else {
                        conf.onError();
                    }
                    return false;
                });

                \$(\"#add_group\").on(\"click\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$('#modalbox_ad form').get(0).reset();
                    \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add group"), "html", null, true);
        echo "');
                    \$(\"#modalbox_ad input\").prop(\"disabled\", false).removeAttr('disabled').val('');
                    //\$(\"#adm_name\").next('div').removeClass('bg-danger').hide().empty();
                    //\$(\"#modalbox_ad input[type='hidden']\").attr('disabled', 'disabled').val('');
                    \$('#modalbox_ad button[type=\"submit\"]').removeAttr(\"disabled\");

                    clearServerValidator();
                    setDefaultValidationConfig(conf);
                    \$(\"#adm_name\").removeAttr('data-validation-event');
                    \$.validate(conf);
                    setServerValidationRequestParams();

                    \$(\"#modalbox_ad\").show();
                    return false;
                });

                /*
                \$(document).on('change', '#adm_name', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = \$(this);
                    _this.next('div').removeClass('bg-danger').hide().empty();
                    \$('#modalbox_ad button[type=\"submit\"]').removeAttr(\"disabled\");
                    if (_this.val()) {
                        ajaxPostSend('";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-admins-group-name', {name: _this.val()}, false, false);
                    }
                    return false;
                });*/

                ";
        // line 191
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 192
            echo "
                \$(document).on('click', \"#modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function(e){
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();
                    closeModalBox();
                    return false;
                });

                \$(document).on('click', \"a[href*='move-admin-group-to-reseller']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox\").data('complete', 1);
                    \$('#modalbox').find('.modal-header-name span').text(\"";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Resellers"), "html", null, true);
            echo "\");
                    var reseller_id = \$(this).data('reseller_id');
                    \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_move_reseller_form_body\").html());
                    \$('#modalbox').find('.devoops-modal-inner').find(\"input[name='id']\").val(\$(this).data('id'));
                    \$('#modalbox').find('.devoops-modal-inner').find(\"input[name='source_id']\").val(reseller_id);
                    \$('#target_reseller option').removeAttr('selected');
                    \$('#target_reseller option[value=\"'+ reseller_id +'\"]').attr('selected', 'selected');
                    \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_move_form_buttons\").html());

                    \$(\"#target_reseller\").select2(select2Opt);

                    \$(\"#modalbox\").show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('click', \"#modalbox button[type='submit']\", function (e) {
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

                ";
        }
        // line 242
        echo "
                ";
        // line 243
        if (($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", []) == "admin"))) {
            // line 244
            echo "                \$(document).on('click', \"a[href*='move-all-admin-to-group']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox\").data('complete', 1);
                    \$('#modalbox').find('.modal-header-name span').text(\"";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Groups"), "html", null, true);
            echo "\");
                    var group_id = \$(this).data('group_id');
                    \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_move_group_form_body\").html());
                    \$('#modalbox').find('.devoops-modal-inner').find(\"input[name='source_id']\").val(group_id);
                    \$('#target_group option').removeAttr('selected');
                    \$('#target_group option[value=\"'+ group_id +'\"]').attr('selected', 'selected');
                    \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_move_form_buttons\").html());

                    \$(\"#target_group\").select2(select2Opt);

                    \$(\"#modalbox\").show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                ";
        }
        // line 264
        echo "
                LoadSelect2Script(DemoSelect2);
                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
        
        var setAdminsGroupsModal = function (data) { 
            \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit group"), "html", null, true);
        echo "');
            \$('#modalbox_ad form').get(0).reset();
            
            // fillFormData(data);
            if (data.data.length == 1) {
                var row = data.data[0];
                for (var field_name in row) {
                    \$(\"#modalbox_ad input[name='\" + field_name + \"']\").val(row[field_name]);
                }
            }

            clearServerValidator();
            setEditValidationConfig(conf);
            \$(\"#adm_name\").removeAttr('data-validation-event');
            \$.validate(conf);
            setServerValidationRequestParams();

            \$(\"#modalbox_ad input\").removeAttr('disabled');
            //\$(\"#adm_name\").next('div').removeClass('bg-danger').hide().empty();
            \$('#modalbox_ad button[type=\"submit\"]').removeAttr(\"disabled\");
            \$(\"#modalbox_ad\").show();
        };

        function setServerValidationRequestParams() {
            var param = {
                'id': \$(\"#adm_id\").val(),
                'for_validator': true,
            };
            \$('#adm_name').attr('data-validation-req-params', JSON.stringify(param) );
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
            
            \$(document).off('change', '#adm_name');
        }

        function setEditValidationConfig(conf) {
            conf.ignore = ['name'];
            conf.validateOnBlur = false;
            conf.validateOnEvent = true;

            \$(document).one('change', '#adm_name', function (e) {
                var ignore = conf.ignore;
                var index = ignore.indexOf(this.name);
                if( index !== -1 ){
                    \$(this).attr('data-validation-event', \"blur\");
                    ignore.splice( index, 1 );
                    \$.validate(conf);
                }
            });
        }

        var manageAdminGroupsList = function (obj) {
            JSSuccessModalBox(obj);
            \$(\"#modalbox_ad\").click();
            \$('#datatable-1').DataTable().ajax.reload();
        };

        var manageAdminGroupsListError = function (obj) {
            JSErrorModalBox(obj);
            \$(\"#modalbox_ad\").click();
        };


        ";
        // line 347
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 348
            echo "
        var manageGroupsResellerList = function (obj) {
            JSSuccessModalBox(obj);
            \$('#datatable-1').DataTable().ajax.reload();
        };

        var manageGroupsResellerListError = function (obj) {
            JSErrorModalBox(obj);
        };

        ";
        }
    }

    public function getTemplateName()
    {
        return "default/Admins/admins_groups/admins_groups.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 348,  492 => 347,  415 => 273,  404 => 264,  385 => 248,  379 => 244,  377 => 243,  374 => 242,  336 => 207,  319 => 192,  317 => 191,  307 => 186,  280 => 162,  246 => 131,  221 => 108,  215 => 106,  213 => 105,  208 => 103,  200 => 100,  188 => 93,  180 => 88,  174 => 87,  167 => 83,  161 => 82,  154 => 78,  148 => 77,  145 => 76,  138 => 72,  132 => 71,  129 => 70,  126 => 69,  119 => 67,  111 => 64,  105 => 63,  102 => 62,  100 => 61,  92 => 55,  87 => 52,  85 => 51,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Admins/admins_groups/admins_groups.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Admins/admins_groups/admins_groups.js.twig");
    }
}
