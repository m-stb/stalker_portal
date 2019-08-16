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

/* default/Users/users_consoles_report/users_consoles_report.js.twig */
class __TwigTemplate_eecdcbc077d25439d89c4398aa527bc467f328582f59c0ffa3feb96d6aab5806 extends \Twig\Template
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
                        var status = json.data[i].status;
                        var mac = json.data[i].mac;
                        var id = json.data[i].id;
                        json.data[i].mac = '<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-users?id='+ id +'\" >'+ mac +'</a>';
                        json.data[i].status = (status != 0 ? \"<span class=''>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("off"), "html", null, true);
        echo "</span>\" : \"<span class=''>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("on"), "html", null, true);
        echo "</span>\");
                        date = json.data[i]['last_change_status'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['last_change_status'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"dom\": \"<'row-fluid'<'pull-right'fAV><'button-place'B>>rt<'row-fluid'<'span6'i><'span6'pl>>\",
                buttons: [
                    {
                        extend: 'print',
                        text: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Print"), "html", null, true);
        echo "\",
                        /*message: \"<h3>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("STB statuses report"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d.m.Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i:s"), "html", null, true);
        echo ")</h3>\",*/
                        autoPrint: false
                    }
                ],
                /* replaced with Buttons[] above
                \"dom\": 'T<\"clear\">lfrtip',
                \"oTableTools\": {
                    \"sSwfPath\":        \"plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf\",
                    \"aButtons\": [
                        {
                        \"sExtends\": \"print\",
                        \"bShowAll\": true,
                        \"sMessage\": \"<h3>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("STB statuses report"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d.m.Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i:s"), "html", null, true);
        echo ")</h3>\",
                        \"sButtonText\": \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Print"), "html", null, true);
        echo "\"
                        }]
                },
                */
                \"ajax\": {
                    \"url\": \"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/users-consoles-report-json\",
                    \"data\": function (d) {
                        d.print = false;
                    }
                },
                \"language\": {
                    \"url\": \"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 53
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 54
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 56
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"aoColumnDefs\": [
                    {\"searchable\": false, \"targets\": [0, -2]},
                    {\"sortable\": false, \"targets\": [0]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                
                \$('head').append('<link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/css/dataTables.tableTools.css\" type=\"text/css\" rel=\"stylesheet\" />');
                \$(document).on('click', '.btn.DTTT_button_print', function(){
                    \$(\"#table_container\").removeClass('col-sm-offset-2');";
        // line 79
        echo "                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/Users/users_consoles_report/users_consoles_report.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 79,  152 => 76,  130 => 56,  124 => 54,  122 => 53,  117 => 51,  106 => 45,  98 => 40,  90 => 39,  71 => 27,  67 => 26,  47 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/users_consoles_report/users_consoles_report.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/users_consoles_report/users_consoles_report.js.twig");
    }
}
