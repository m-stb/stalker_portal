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

/* default/Events/events/events.js.twig */
class __TwigTemplate_0bc76379c5c1da8ae1c9d1ecafc6d6a5eeebee2eee991a7fc4fbc1887bc53480 extends \Twig\Template
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
                        var uid = json.data[i].uid;
                        var mac = json.data[i].mac;
                        json.data[i].mac = '<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "?uid=' + uid + '\" >' + mac + '</a>';
                        json.data[i].msg = '<div class=\"event_message\">' + json.data[i].msg + '</div>';
                        json.data[i].sended = json.data[i].sended != '0' ? '<span class=\"\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delivered"), "html", null, true);
        echo "</span>' : '<span class=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not delivered"), "html", null, true);
        echo "</span>';
                        json.data[i].ended = json.data[i].ended != '0' ? '<span class=\"\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Received"), "html", null, true);
        echo "</span>' : '<span class=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not received"), "html", null, true);
        echo "</span>';
                        date = json.data[i]['addtime'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['addtime'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }
                        date = json.data[i]['eventtime'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['eventtime'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/events-list-json\",
                    \"data\": function (d) {
                        d = dataTableDataPrepare(d);

                        \$('input[id^=\"filter_\"]').each(function () {
                            d['filters[' + \$(this).attr(\"id\").replace(\"filter_\", \"\") + ']'] = \$(this).val();
                        });
                    }
                },
                \"language\": {
                    \"url\": \"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 41
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 42
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 44
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },

                \"aoColumnDefs\": [
                    {\"searchable\": false, \"targets\": [1, 2, 4, 6, 8, 9]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                LoadDataTablesScripts(TestTable1);

                eventsMenuHandlers();

                \$(document).on('click', '#add_events', function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    //\$(\"#modalbox_ad form\").get(0).reset();
                    //\$(\"#s2_msg_pattern\").trigger('change');

                    \$(\"#modalbox_ad form\").get(0).reset();
                    \$(\"#modalbox_ad\").find(\"select[id^='s2_']\").trigger('change.select2'); // update all select2 appearence after form reset
                    \$(\"#modalbox_ad\").show().find('input, select, textarea').removeAttr('disabled');
                    checkFields('#s2_user_list_type', e);
                    checkFields('#s2_event', e);
                    setEventTTL();

                    return false;
                });

                \$(document).on('click', \"#clean_events\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var conf_msg = \"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete all events from the list"), "html", null, true);
        echo "?\";
                    
                    if( confirm( conf_msg ) ){
                        ajaxPostSend(\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/clean-events\", {uid: \$(this).data('uid')});
                    }
                    return false;
                });

            });
        }
        
        document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/Events/events/events.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 89,  149 => 86,  105 => 44,  99 => 42,  97 => 41,  92 => 39,  77 => 29,  55 => 12,  49 => 11,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Events/events/events.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Events/events/events.js.twig");
    }
}
