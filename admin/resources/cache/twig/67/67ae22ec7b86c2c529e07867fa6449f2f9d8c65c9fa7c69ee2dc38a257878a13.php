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

/* default/Karaoke/index/index.js.twig */
class __TwigTemplate_a16f989f7a14b35e0316a1795bb8f9fc75a4a6b99af488daea4b75b6b2fc6b26 extends \Twig\Template
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
            errorClass: \"error\",
            ignore: ['.ignore'],
            modules: 'jsconf',
            
            onSuccess: function () {
                var sendData = new Object();
                var lengthObj = 0;
                var form_fields = \$(\"#modalbox_ad input.own_fields:not(:disabled), #modalbox_ad select.own_fields:not(:disabled)\");
                form_fields.each(function () {
                    if (\$(this).val()) {
                        sendData[this.name] = \$(this).val();
                        lengthObj++;
                    }
                });
                if (lengthObj < form_fields.length) {
                    alert('";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You must fill in all fields"), "html", null, true);
        echo "');
                    return false;
                }
                ajaxPostSend(\$(\"#modalbox_ad form\").attr('action'), sendData, false, false);
                return false;
            },
            
            onError: function () {
                var _this = this;
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

        function closeModalBox(){
            \$(\"#modalbox\").hide();
            \$('#modalbox').find('.modal-header-name span').empty();
            \$('#modalbox').find('.devoops-modal-inner').empty();
            \$('#modalbox').find('.devoops-modal-bottom').empty();
        }

        function DemoSelect2() {
            \$('#s2_protocol').select2(select2Opt);
        }

        function checkModalProtocol(){
            var value = \$(\"#s2_protocol\").val();
            var urlGroup = \$(\"#s2_protocol\").closest('div.form-group').next('div.form-group');
            if (value == 'custom') {
                urlGroup.stop(true, true).clearQueue().show().find('input').removeAttr('disabled');
            } else {
                urlGroup.stop(true, true).clearQueue().hide().find('input').attr('disabled', 'disabled');
            }
        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object' && json.data.length >0) {
                    var date;
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var status = parseInt(json.data[i].status, 10);
                        var accessed = json.data[i].accessed;
                        var done  = json.data[i].done;
                        var name = json.data[i].name;
                        json.data[i].rtsp_url = json.data[i].protocol != 'custom'? \"<a class='main_ajax no_context_menu' href='";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-karaoke-source' data-karaokeid='\" + id + \"'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("in storage"), "html", null, true);
        echo "</a>\": (json.data[i].rtsp_url.length > 0 ? json.data[i].rtsp_url.slice(0, 30)+'...':'');

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/karaoke-list-json' data-karaokeid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a \" + ( status == 0 && accessed == 0 && json.data[i].protocol != 'custom' ?\"disabled='disabled'\":\"\") + \" class='main_ajax no_context_menu' href='";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-karaoke-accessed' data-karaokeid='\" + id + \"' data-accessed='\" + accessed + \"'>\\n\\
                                                                    <span>\" + ( accessed == 0 ?\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "\":\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "\") + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-karaoke-source' data-karaokeid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Check file"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-karaoke-done' data-karaokeid='\" + id + \"' data-done='\" + done + \"'>\\n\\
                                                                    <span>\" + ( done != 0 ? \"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel performing of the task"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Confirm performing of the task"), "html", null, true);
        echo "\") + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-karaoke' data-karaokeid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        json.data[i].accessed = accessed != 0 ? \"<i data-toggle='tooltip' class='fa icon icon-eye' title='";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "'></i>\" : \"<i data-toggle='tooltip' class='fa icon icon-eye-slash' title='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "'></i>\";
                        if ( status == 0 && json.data[i].protocol != 'custom') {
                            json.data[i].accessed += \"<i data-toggle='tooltip' class='fa icon icon-\" + ( status ? \"archive' title='";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available on storages"), "html", null, true);
        echo "\" : \"banned' title='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not available on storages"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Check file"), "html", null, true);
        echo "\") + \"'></i>\";
                        }
                        if (json.data[i].protocol == 'custom' && json.data[i].rtsp_url ) {
                            json.data[i].accessed += \"<i data-toggle='tooltip' class='fa icon icon-link' title='";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available by custom URL"), "html", null, true);
        echo "'></i>\";
                        }

                        json.data[i].name = '<a class=\"main_ajax no_context_menu\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/karaoke-list-json\" data-karaokeid=\"' + id + '\">' + name + '</a>';
                        json.data[i].done = '<a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/tasks/task-detail-karaoke?id='+id+'\">№' + id + '</a> ' + ( done != 0 ? '<span class=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Completed"), "html", null, true);
        echo "</span>' : '<span class=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Do not completed"), "html", null, true);
        echo "</span>');

                        date = json.data[i]['added'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['added'] = date.toLocaleFormat(\"%b %d, %Y\");
                        }

                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/karaoke-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                
                //took out from macro
                \"columns\": [
                ";
        // line 151
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
            // line 152
            echo "                    ";
            if (("all" != $this->getAttribute($context["item"], "name", []))) {
                // line 153
                echo "                    {\"data\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\", \"name\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\" ";
                if ( !$this->getAttribute($context["item"], "checked", [])) {
                    echo ", visible: false, className: 'none'";
                }
                echo "}";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ",";
                }
                // line 154
                echo "                    ";
            }
            // line 155
            echo "                ";
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
        // line 156
        echo "                ],

                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"order\": [[ 0, \"asc\" ]],
                \"columnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    { className: \"dt-status\",   \"targets\": [ -2 ] },
                    {\"searchable\": false, \"targets\": [-1, -2, -3, -4]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                \$.validate(conf);

                \$(document).tooltip({
                    selector: '[data-toggle=\"tooltip\"]',
                    placement: 'top'
                });

                \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(this).closest('div.open').removeClass('open');

                    if( \$(this).attr(\"href\").indexOf(\"remove-karaoke\") != -1 && !confirm(\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this karaoke?"), "html", null, true);
        echo "\") ) {
                        return;
                    }
                    
                    var sendData = \$(this).data();
                    ajaxPostSend(\$(this).attr('href'), sendData, false, false);
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

                \$('#s2_protocol').on('change', function(){
                    checkModalProtocol();
                    \$(this).validate(function(valid, elem) {
                        if (valid) {
                            conf.unhighlight(elem, conf.errorClass);
                        } else {
                            conf.highlight(elem, conf.errorClass);
                        }
                    });
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

                \$(\"#add_karaoke\").on(\"click\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$.validate();
                    \$('#karaoke_form').get(0).reset();
                    \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text(\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add"), "html", null, true);
        echo "\");
                    \$(\"#modalbox_ad input\").prop(\"disabled\", false).removeAttr('disabled').val('');
                    \$(\"#modalbox_ad input[type='hidden']\").attr('disabled', 'disabled').val('');
                    \$(\"#modalbox_ad select\").prop(\"disabled\", false).removeAttr('disabled').find('option').prop(\"selected\", false).removeAttr('selected');
                    \$(\"#modalbox_ad select\").trigger('change');
                    checkModalProtocol();
                    \$(\"#modalbox_ad\").show();
                    return false;
                });

                LoadDataTablesScripts(TestTable1);
                LoadSelect2Script(DemoSelect2);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var setKaraokeModal = function (data) {
            \$.validate();
            \$('#karaoke_form').get(0).reset();
            \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text(\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "\");
            if (data.data.length == 1) {
                var row = data.data[0];
                for (var field_name in row) {
                    \$(\"#modalbox_ad [name='\" + field_name + \"']\").val(row[field_name]);
                }
                \$(\"#modalbox_ad select\").trigger('change');
            }
            \$(\"#modalbox_ad input\").removeAttr('disabled');
            checkModalProtocol();
            \$(\"#modalbox_ad\").show();
        };

        var manageKaraoke = function (obj) {
            JSSuccessModalBox(obj);
            \$('#datatable-1').DataTable().ajax.reload();
        };

        var checkSourceKaraoke = function (obj){
            // make updateTableRow first becouse
            // it displays JS notty msg which hide modalbox
            updateTableRow(obj);
            openModal(obj);
        };

        var checkSourceKaraokeError = function(obj){
            JSErrorModalBox(obj);
        };

        var openModal = function (obj){
            var baseInfo = obj.base_info;

            \$('#modalbox').show();
            \$('#modalbox').find('.devoops-modal-bottom').html('\\n\\
                        <div class=\" pull-right no-padding\">\\n\\
                            <a type=\"reset\" class=\"close-link btn btn-default pull-right\" >";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Close"), "html", null, true);
        echo "</a>\\n\\
                        </div>');
            \$('#modalbox').find('.modal-header-name span').text(\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Information about the media source"), "html", null, true);
        echo "\");
            
            if (typeof(baseInfo) == 'string') {
                \$('#modalbox').find('.devoops-modal-inner').append('<div class=\"col-xs-12\"><span>' + baseInfo + '</span></div>');
            } else if (typeof(baseInfo) == 'object') {
                var table = \$('<table class=\"video_info\"></table>').appendTo(\$('#modalbox').find('.devoops-modal-inner'));
                table.append(\"<tr><td>";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Storage"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("File"), "html", null, true);
        echo "</td></tr>\");
                table.wrap('<div class=\"col-xs-12\"></div>');
                \$.each(baseInfo, function(index, value){
                    var trStr = '<tr><td>'+ value.storage_name +'</td><td>'+ value.file +'</td></tr>';
                    table.append(trStr);
                });
            }

        };
";
    }

    public function getTemplateName()
    {
        return "default/Karaoke/index/index.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 310,  486 => 304,  481 => 302,  443 => 267,  420 => 247,  363 => 193,  324 => 156,  310 => 155,  307 => 154,  294 => 153,  291 => 152,  274 => 151,  266 => 146,  258 => 143,  237 => 129,  231 => 128,  225 => 125,  215 => 122,  208 => 120,  200 => 115,  194 => 114,  185 => 110,  179 => 109,  172 => 105,  166 => 104,  157 => 100,  151 => 99,  144 => 95,  138 => 94,  123 => 86,  59 => 25,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Karaoke/index/index.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Karaoke/index/index.js.twig");
    }
}
