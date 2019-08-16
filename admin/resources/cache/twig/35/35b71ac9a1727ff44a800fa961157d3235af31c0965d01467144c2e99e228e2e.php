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

/* default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.js.twig */
class __TwigTemplate_cdb5462b2f04e2d53fc4337cd174917c13fc72e64b761ab9a6ef0c34d7b018de extends \Twig\Template
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
            modules: 'jsconf',

            onSuccess: function () {
                var sendData = new Object();
                \$(\"#modalbox_ad input.own_fields:not(:disabled), #modalbox_ad select.own_fields:not(:disabled)\").each(function () {
                    sendData[this.name] = \$(this).val();
                });

                ajaxPostSend(\$(\"#modalbox_ad form\").attr('action'), sendData, false, false);
                return false;
            },

            onError: function () {
                return false;
            }
        };

        function DemoSelect2() {
            \$('#s2_zone').select2(select2Opt);
        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var status = json.data[i].status;

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-server-status' data-id='\" + id + \"' data-status='\" + status + \"'>\\n\\
                                                                    <span>\" + (status == 1 ? \"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch off"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch on"), "html", null, true);
        echo "\") +\"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/broadcast-servers-list-json' data-id='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-server' data-id='\" + id + \"'>\\n\\
                                                                    <span> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        //json.data[i].status = '<span ' + ( status == 1 ? 'class=\"\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("On"), "html", null, true);
        echo "': '>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Off"), "html", null, true);
        echo "') +'</span>';
                        json.data[i].status = '\\
                           <div class=\"mswitch\">\\
                                <input type=\"checkbox\" \\
                                       id=\"brcastsrv_status_'+ json.data[i].id +'\"\\
                                       name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                       ' + ( json.data[i].status != 0 ? 'checked=\"checked\"' : '' ) +'\\
                                       data-id=\"' + json.data[i].id + '\"\\
                                       data-status=\"' + json.data[i].status +'\">\\
                                <label class=\"label-success\" \\
                                       title=\"' + ( json.data[i].status != 0 ? \"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched on"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched off"), "html", null, true);
        echo "\" ) + '\" \\
                                       for=\"brcastsrv_status_'+ json.data[i].id +'\"></label>\\
                            </div>';

                        json.data[i].stream_zone_name = json.data[i].stream_zone_name && json.data[i].stream_zone_name.length ? json.data[i].stream_zone_name : '";
        // line 75
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "default_zone", [], "array")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Using default zone"), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "default_zone", [], "array"), "name", [], "array"), "html", null, true);
            echo "\"";
        }
        echo "';
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/broadcast-servers-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 87
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 88
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 90
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
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                \$.validate(conf);
                \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var sendData = \$(this).data();
                    ajaxPostSend(\$(this).attr('href'), sendData, false, false);
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('change', \".mswitch input\", function(e){
                    ajaxPostSend('";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-server-status', \$(this).data() );
                });
                
                \$(\"#form_reset\").on('click', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(this).closest('form').get(0).reset();
                    \$('#s2_zone option').removeAttr('selected');
                    \$('#s2_zone option:first').prop('selected', 'selected');
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
                
                \$(document).on('click', \"#modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function(e){
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();
                    \$(\"#form_reset\").trigger('click');
                    return false;
                });
                
                \$(\"#add_server\").on(\"click\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$.validate();
                    \$('#karaoke_form').get(0).reset();
                    \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add server"), "html", null, true);
        echo "');
                    \$(\"#modalbox_ad input\").prop(\"disabled\", false).removeAttr('disabled').val('');
                    \$(\"#modalbox_ad input[type='hidden']\").attr('disabled', 'disabled').val('');
                    \$(\"#modalbox_ad select\").prop(\"disabled\", false).removeAttr('disabled').find('option').removeAttr('selected');
                    \$('#s2_zone option:first').prop('selected', 'selected');
                    \$(\"#modalbox_ad\").show();

                    return false;
                });
                                
                LoadSelect2Script(DemoSelect2);
                LoadDataTablesScripts(TestTable1);

                \$('#modalbox_ad form .i-hint').tooltip({
                    animation: true,
                    placement: \"left\"
                });
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var setServerModal = function (data) {
            \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "');
            if (data.data.length == 1) {
                var row = data.data[0];
                for (var field_name in row) {
                    \$(\"#modalbox_ad input[name='\" + field_name + \"']\").val(row[field_name]);
                }
                \$(\"#modalbox_ad select option\").removeAttr('selected');
                \$(\"#modalbox_ad select option\").each(function () {
                    if (\$(this).val().toString() == data.data[0]['stream_zone'].toString()) {
                        \$(this).prop('selected', 'selected');
                    }
                });
            }
            DemoSelect2();
            \$(\"#modalbox_ad input\").removeAttr('disabled');
            \$(\"#karaoke_form\").isValid({}, conf, true);
            \$(\"#modalbox_ad\").show();
        };

        var setServerModalError = function(data){
            JSErrorModalBox(data);
        };
";
    }

    public function getTemplateName()
    {
        return "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 184,  259 => 161,  214 => 121,  181 => 90,  175 => 88,  173 => 87,  168 => 85,  160 => 82,  145 => 75,  136 => 71,  121 => 61,  113 => 56,  107 => 55,  100 => 51,  94 => 50,  85 => 46,  79 => 45,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.js.twig");
    }
}
