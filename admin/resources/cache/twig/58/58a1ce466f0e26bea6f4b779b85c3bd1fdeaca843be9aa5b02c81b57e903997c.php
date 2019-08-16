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

/* default/NewVideoClub/video_logs/video_logs.js.twig */
class __TwigTemplate_7cbae619a934383280ae9074dde127d905d99e8cbe3c9a94751517b569253b23 extends \Twig\Template
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
                        date = json.data[i]['actiontime'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['actiontime'] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                        }
                        json.data[i]['action'] = json.data[i]['action'].ucfirst();
                    }
                }
            }).dataTable({
            \"processing\": true,
            \"serverSide\": true,
            \"ajax\": {
                \"url\": \"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-logs-json\",
                \"data\": function ( d ) {
                    var RegExp = /video_id=(\\d+)/;
                    if (video_id = RegExp.exec(window.location.href)) {
                        d.video_id = video_id[1];
                    }
                }
            },
            \"language\": {
                \"url\": \"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
            },

            ";
        // line 31
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 32
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
            ";
        }
        // line 34
        echo "            
            \"bFilter\": true,
            \"bPaginate\": true,
            \"lengthChange\": true,
\t\t\t\"scrollCollapse\": true,
            \"bInfo\":     true,

            fixedHeader: {
                header: true,
                headerOffset: \$('header.navbar').height()
            },
            
            \"order\": [[ 1, \"desc\" ]],
            \"aoColumnDefs\": [ 
                { \"searchable\": false, \"targets\": [1, 4 ] }
            ]
        }).prev('.dataTables_processing').hide('');
    }

    function yelp() {
        \$(document).ready(function () {
            LoadDataTablesScripts(TestTable1);
        });
    }

    document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_logs/video_logs.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 34,  72 => 32,  70 => 31,  64 => 28,  50 => 19,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_logs/video_logs.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_logs/video_logs.js.twig");
    }
}
