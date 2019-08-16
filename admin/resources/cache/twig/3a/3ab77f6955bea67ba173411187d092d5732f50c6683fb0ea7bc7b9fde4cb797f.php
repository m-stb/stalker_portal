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

/* default/Events/event_scheduler/event_scheduler.js.twig */
class __TwigTemplate_fc6d89a23854715f2358773f20c17136003c85f0b06c661a884ab4c0f477bb01 extends \Twig\Template
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
        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object' && json.data.length >0) {
                    var date;
                    for (var i in json.data) {

                        var state = json.data[i].state;

                        json.data[i].recipient = '<a class=\"main_ajax no_context_menu\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/event-scheduler-list-json\" data-id=\"' + json.data[i].id  + '\">'+ json.data[i].recipient +'</a>';

                        json.data[i].periodic = json.data[i].periodic == '0' ? '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("One-time event"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("For a period"), "html", null, true);
        echo "';
                        json.data[i].state = json.data[i].state != '0' ? '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Scheduled"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Stopped"), "html", null, true);
        echo "';

                        date = json.data[i]['date_begin'];
                        if (!isNaN(parseInt(date, 10)) && date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['date_begin'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }
                        date = json.data[i]['date_end'];
                        if (!isNaN(parseInt(date, 10)) && date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['date_end'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }

                        date = json.data[i]['next_run'];
                        if (!isNaN(parseInt(date, 10)) && date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['next_run'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }

                        date = json.data[i]['last_run'];
                        if (!isNaN(parseInt(date, 10)) && date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['last_run'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }

                        json.data[i].operations = '<div class=\"col-xs-3 col-sm-8 ddd\">\\n\\
                                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">\\n\\
                                                            <i class=\"pull-right fa fa-cog\"></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class=\"dropdown-menu pull-right\">\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/event-scheduler-list-json\" data-id=\"' + json.data[i].id  + '\">\\n\\
                                                                    <span>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/scheduler-toggle-state\" data-id=\"' + json.data[i].id  + '\" data-state=\"' + state  + '\">\\n\\
                                                                    <span>' + ( state != '0' ? \"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Stop it"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Start it"), "html", null, true);
        echo "\") + '</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/scheduler-remove\" data-id=\"' + json.data[i].id  + '\">\\n\\
                                                                    <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>';

                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/event-scheduler-list-json\",
                    \"data\": function (d) {

                        d = dataTableDataPrepare(d);

                        \$('input[id^=\"datepicker_\"]').each(function () {
                            d['filters[' + \$(this).attr(\"id\").replace(\"datepicker_\", \"date_\") + ']'] = \$(this).val();
                        });
                    }
                },
                \"language\": {
                    \"url\": \"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 80
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 81
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 83
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                \"aoColumnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [0, -1]}
                ]
            }).prev('.dataTables_processing').hide('', function(){
                \$('.dataTables_filter').addClass('invisible');
            });
        }

        function yelp() {
            \$(document).ready(function () {
                window.stateSaveReject = true;
                LoadDataTablesScripts(TestTable1);

                    ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datepicker_js_script", [0 => "notMinDate"], "method"), "html", null, true);
        echo "
                    datePickerOpt.onClose = function(){};
                    datePickerOpt.minDate = new Date();
                    \$.extend( datePickerOpt, {
                        showOn: \"both\",
                        showAnim: \"slideDown\",
                        buttonImage: \"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/calendar.gif\",
                        buttonImageOnly: true,
                        buttonText: \"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select date"), "html", null, true);
        echo "\"
                    });
                    \$(\"#date_begin, #date_end\").datepicker(datePickerOpt);
                    eventsMenuHandlers();

                    \$(document).on('reset', 'form', function(){
                       \$(\"input[type='hidden']\", \$(this)).val('');
                       \$('textarea', this).each(function(){
                           this.value = this.defaultValue;
                       })
                    });

                    \$(document).on('click', '#add_events', function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        \$(\"#modalbox_ad .devoops-modal-header span\").text(\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add event into the schedule"), "html", null, true);
        echo "\");
                        \$(\"#modalbox_ad form\").get(0).reset();
                        \$(\"#modalbox_ad form input[name='id']\").val(''); // hidden inputs are not dropped on form.reset()
                        \$(\"#modalbox_ad\").find(\"select[id^='s2_']\").trigger('change.select2');
                        \$(\"#s2_schedule_type\").trigger('change');
                        \$(\"#modalbox_ad\").show().find('input, select, textarea').removeAttr('disabled');
                        checkFields('#s2_user_list_type', e);
                        checkFields('#' + \$('#s2_user_list_type').val(), e);
                        checkFields('#s2_event', e);
                        checkFields('#s2_schedule_type', e);
                        checkFields('#s2_repeating_interval', e);
                        checkFields('#date_type_day input', e);
                        setEventTTL();
                        //DemoSelect2();
                        return false;
                    });

                    \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        \$(\"#modalbox\").data('complete', 0);
                        var sendData = \$(this).data();
                        ajaxPostSend(\$(this).attr('href'), sendData, false, false, true);
                        \$(this).closest('div.open').removeClass('open');
                        return false;
                    });

                });
            }
            document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var fillModalForm = function(data){
            JScloseModalBox();
            \$(\"#modalbox_ad .devoops-modal-header span\").text(\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit event on the schedule"), "html", null, true);
        echo "\");

            if (data.data && data.data.length) {
                var getData = data.data[0];
                \$(\"#modalbox_ad\").show().find('input, select, textarea').removeAttr('disabled').each(function(){
                    var getField = \$(this).prop('name').replace('[]', '');
                    if (getField && typeof(getData[getField]) != 'undefined') {
                        \$(this).removeAttr('disabled');
                        var getValue = getData[getField];
                        if (\$(this).prop('tagName').toLowerCase() == 'select') {
                            \$(this).find('option').removeAttr('selected').each(function(){
                                if (\$(this).val() == getValue) {
                                    \$(this).prop('selected', true);
                                }
                            });
                            //\$(this).select2({minimumResultsForSearch: -1});
                            if (getField == 'filter_set' || getField == 'event'){
                                \$(this).change();
                            }
                        } else if (\$(this).prop('tagName').toLowerCase() == 'input' && (\$(this).prop('type').toLowerCase()=='radio' || \$(this).prop('type').toLowerCase()=='checkbox')) {
                            \$(this).prop('checked', \$(this).val() == getValue || (getValue instanceof Array && getValue.indexOf(\$(this).val()) !== -1));
                        } else if (\$(this).prop('tagName').toLowerCase() == 'textarea'){
                            \$(this).val(getValue);
                        } else {
                            if (\$(this).hasClass('hasDatepicker')) {
                                var newDate = parseInt(getValue, 10);
                                \$(this).datepicker(\"setDate\", !isNaN(newDate) && newDate > 0 ? new Date(parseInt(getValue, 10) * 1000) : null );
                            } else {
                                \$(this).val(getValue);
                            }
                        }
                    }
                });
            } else {
                \$(\"#modalbox_ad\").find('input, select, textarea').removeAttr('disabled');
            }

            checkFields('#s2_user_list_type');
            checkFields('#s2_event');
            checkFields('#s2_schedule_type');
            checkFields('#s2_repeating_interval');
            checkFields('#date_type_day input');

            \$(\"#modalbox_ad\").find(\"select[id^='s2_']\").trigger('change.select2');
            \$(\"#modalbox_ad\").show();
            return false;
        };

        var fillModalFormError = function(data){
            JSErrorModalBox(data);
        }
";
    }

    public function getTemplateName()
    {
        return "default/Events/event_scheduler/event_scheduler.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 157,  220 => 124,  202 => 109,  197 => 107,  188 => 101,  168 => 83,  162 => 81,  160 => 80,  155 => 78,  139 => 67,  124 => 55,  118 => 54,  109 => 50,  103 => 49,  96 => 45,  90 => 44,  54 => 13,  48 => 12,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Events/event_scheduler/event_scheduler.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Events/event_scheduler/event_scheduler.js.twig");
    }
}
