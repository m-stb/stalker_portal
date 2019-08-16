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

/* default/Index/index/index.twig */
class __TwigTemplate_6ec70b4ee412f75f7d00605c5ab3028f79c9c06f44e3d97c9daaf9399bd196c7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'footer_js' => [$this, 'block_footer_js'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Index/index/index.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mainpage") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Dashboard"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_footer_js($context, array $blocks = [])
    {
        // line 7
        echo "        ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 8
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Index/index/index.twig", 8)->display($context);
        // line 9
        echo "
        <script src='//www.google.com/jsapi?autoload={\"modules\":[{\"name\":\"visualization\",\"version\":\"1\",\"packages\":[\"corechart\"],\"callback\":\"load_page_data\"}]}'></script>

        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/flot/jquery.flot.js\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/flot/jquery.flot.time.js\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/flot/jquery.flot.navigate.js\"></script>

";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "    <div id=\"iptv_list\" class=\"dashboard\">
        <div class=\"row  filters-actions-pannel\">
           <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <button type=\"button\" class=\"btn btn-success  pull-right\" id=\"auto-update-button\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Auto-update within 59 seconds"), "html", null, true);
        echo "</button>
            </div>
        </div>
        <div class=\"row\">
            <br>
            <div class=\"col-xs-12 col-sm-5\">
                <div class=\"box\">
                    <a class=\"collapse-link\">
                        <div class=\"box-header\">
                            <div class=\"box-name\">
                                <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Statistisc"), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"circle-button box-icons\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </div>
                            <div class=\"no-move\"></div>
                        </div>
                    </a>
                    <div class=\"box-content\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            <thead>
                            <tr>
                                <th data-filter=\"category\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Category"), "html", null, true);
        echo "</th>
                                <th data-filter=\"number\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Number"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 51
        if (($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", false, true), "datatable-1", [], "any", true, true))) {
            // line 52
            echo "                            ";
            // line 53
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatables", []), "datatable-1", [], "array"), "data", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 54
                echo "                                    <tr>
                                        <td>";
                // line 55
                echo $this->getAttribute($context["item"], "category", []);
                echo "</td>
                                        <td>";
                // line 56
                echo $this->getAttribute($context["item"], "number", []);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                            ";
            // line 60
            echo "                            ";
        }
        // line 61
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            ";
        // line 66
        if ((($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", false, true), "datatable-2", [], "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", false, true), "datatable-2", [], "array", false, true), "data", [], "any", true, true))) {
            // line 67
            echo "            <div class=\"col-xs-12 col-sm-7\">
                <div class=\"box\">
                    <a class=\"collapse-link\">
                        <div class=\"box-header\">
                            <div class=\"box-name\">
                                <span>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Storages (measured in the number of the current session)"), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"circle-button box-icons\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </div>
                            <div class=\"no-move\"></div>
                        </div>
                    </a>
                    <div class=\"box-content\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-2\">
                            <thead>
                            <tr>
                                <th data-filter=\"storage\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Storage name"), "html", null, true);
            echo "</th>
                                <th data-filter=\"video\">";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club"), "html", null, true);
            echo "</th>
                                <th data-filter=\"tv_archive\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tv archive"), "html", null, true);
            echo "</th>
                                <th data-filter=\"timeshift\">";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Timeshift"), "html", null, true);
            echo "</th>
                                <th data-filter=\"loading\">";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Loading"), "html", null, true);
            echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                                ";
            // line 94
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatables", []), "datatable-2", [], "array"), "data", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "                                    <tr>
                                        <td>";
                // line 96
                echo $this->getAttribute($context["item"], "storage", []);
                echo "</td>
                                        <td>";
                // line 97
                echo $this->getAttribute($context["item"], "video", []);
                echo "</td>
                                        <td>";
                // line 98
                echo $this->getAttribute($context["item"], "tv_archive", []);
                echo "</td>
                                        <td>";
                // line 99
                echo $this->getAttribute($context["item"], "timeshift", []);
                echo "</td>
                                        <td>";
                // line 100
                echo $this->getAttribute($context["item"], "loading", []);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                                ";
            // line 104
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            ";
        }
        // line 110
        echo "            ";
        if ((($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", false, true), "datatable-3", [], "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", false, true), "datatable-3", [], "array", false, true), "data", [], "any", true, true))) {
            // line 111
            echo "            <div class=\"col-xs-12 col-sm-5\">
                <div class=\"box\">  <a class=\"collapse-link\">
                    <div class=\"box-header\">
                        <div class=\"box-name\">
                            <span>";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Streaming servers"), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"circle-button box-icons\">
                                <i class=\"fa fa-chevron-up\"></i>
                        </div>
                        <div class=\"no-move\"></div>
                    </div> </a>
                    <div class=\"box-content\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-3\">
                            <thead>
                            <tr>
                                <th data-filter=\"server\">";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Server name"), "html", null, true);
            echo "</th>
                                <th data-filter=\"sessions\">";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Number of sessions"), "html", null, true);
            echo "</th>
                                <th data-filter=\"loading\">";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Loading"), "html", null, true);
            echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                                ";
            // line 134
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatables", []), "datatable-3", [], "array"), "data", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 135
                echo "                                    <tr>
                                        <td>";
                // line 136
                echo $this->getAttribute($context["item"], "server", []);
                echo "</td>
                                        <td>";
                // line 137
                echo $this->getAttribute($context["item"], "sessions", []);
                echo "</td>
                                        <td>";
                // line 138
                echo $this->getAttribute($context["item"], "loading", []);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                                ";
            // line 142
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            ";
        }
        // line 148
        echo "        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-8\">
                <div class=\"box\"><a class=\"collapse-link\">
                    <div class=\"box-header\">
                        <div class=\"box-name\">
                            <span>";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Users activity"), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"circle-button box-icons\">
                                <i class=\"fa fa-chevron-up\"></i>
                        </div>
                        <div class=\"no-move\"></div>
                    </div> </a>
                    <div class=\"box-content\" style=\"padding: 5px 0 5px 5px;\">
                        <div id=\"visit-plot\" style=\"min-height: 300px; left: 10px;\"> </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 col-sm-4\">
                <div class=\"box\">  <a class=\"collapse-link\">
                    <div class=\"box-header\">
                        <div class=\"box-name\">
                            <span>";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Popularity of services"), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"circle-button box-icons\">
                                <i class=\"fa fa-chevron-up\"></i>
                        </div>
                        <div class=\"no-move\"></div>
                    </div> </a>
                    <div class=\"box-content\">
                        <div id=\"google-chart-1\" style=\"min-height: 300px;\"> </div>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\" defer>
        var google = {};
        var updateTimerInterval = null;

        // Draw all test xCharts
        function DrawAllxCharts(data) {
            //  Chart 1
            var chart1_data = [
                [\"Element\", \"\", { role: \"style\" }, {type: 'string', role: 'tooltip', 'p': {'html': true}}],
                ['";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tv"), "html", null, true);
        echo "', data.tv.sessions, \"#8FBE7B\", '<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Total sessions"), "html", null, true);
        echo ": <b>'+data.tv.sessions+'</b></span> <br/> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Popularity"), "html", null, true);
        echo ": <b>'+data.tv.percent+'%</b></span>'],
                ['";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Radio"), "html", null, true);
        echo "', data.radio.sessions, \"#F4D165\", '<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Total sessions"), "html", null, true);
        echo ": <b>'+data.radio.sessions+'</b></span> <br/> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Popularity"), "html", null, true);
        echo ": <b>'+data.radio.percent+'%</b></span>'],
                ['";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video"), "html", null, true);
        echo "', data.video.sessions, \"#D94040\", '<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Total sessions"), "html", null, true);
        echo ": <b>'+data.video.sessions+'</b></span> <br/> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Popularity"), "html", null, true);
        echo ": <b>'+data.video.percent+'%</b></span>'],
                ['";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Audio"), "html", null, true);
        echo "', data.audio.sessions, \"#467EAF\", '<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Total sessions"), "html", null, true);
        echo ": <b>'+data.audio.sessions+'</b></span> <br/> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Popularity"), "html", null, true);
        echo ": <b>'+data.audio.percent+'%</b></span>'],
                ['";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Karaoke"), "html", null, true);
        echo "', data.karaoke.sessions, \"#C27BA0\", '<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Total sessions"), "html", null, true);
        echo ": <b>'+data.karaoke.sessions+'</b></span> <br/> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Popularity"), "html", null, true);
        echo ": <b>'+data.karaoke.percent+'%</b></span>']
            ];

            var chart1_options = {
                tooltip: {isHtml: true},
                backgroundColor: '#FFFFFF',
                chartArea: {width: '75%', height: '80%'},
                bar: {groupWidth: \"95%\"},
                vAxis: {
                    /*ticks: [0, data.all_sessions * , 20, 30, 40, 50],*/
                    viewWindow: {min: 0, max: data.all_sessions}
                },
                legend: { position: \"none\" }
            };
            if (typeof (google) == 'undefined') {
                google = window['google'];
            }
            var chart1_element = 'google-chart-1';
            var chart1_type = google.visualization.ColumnChart;
            drawGoogleChart(chart1_data, chart1_options, chart1_element, chart1_type);
        }

        function drawGoogleChart(chart_data, chart_options, element, chart_type) {
            if (typeof (google) == 'undefined') {
                google = window['google'];
            }
            // Function for visualize Google Chart
            var data = google.visualization.arrayToDataTable(chart_data);
            var chart = new chart_type(document.getElementById(element));
            chart.draw(data, chart_options);
        }

        function load_page_data(){
            if (typeof (window['google']) == 'undefined') {
                window['google'] = google;
            }
            \$.ajax({
                dataType: 'json',
                type: 'post',
                url: '";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/index/index-datatable4-list-json',
                async: false,
                success: function(data){
                    if(data && data.data){
                        DrawAllxCharts(data.data);
                    }
                }
            });
        }

        function TestTable1() {
            \$.extend( \$.fn.dataTable.defaults, {
                \"searching\": false,
                \"ordering\": false,
                \"processing\": true,
                \"serverSide\": true,
                \"bAutoWidth\": false,
                \"bFilter\": false,
                \"bPaginate\": false,
                \"bInfo\": false,
                \"bJQueryUI\": true,
                'iDisplayLength': 5,
                'bLengthChange': false,
                \"language\": {
                    \"url\": \"";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                }
            } );

            ";
        // line 266
        if ($this->getAttribute(($context["app"] ?? null), "datatables", [], "any", true, true)) {
            // line 267
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatables", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 268
                echo "                    ";
                if ($this->getAttribute($context["item"], "data", [], "any", true, true)) {
                    // line 269
                    echo "            \$('#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "datatableID", []), "html", null, true);
                    echo "').on('xhr.dt', function (e, settings, json) {
                /*console.log(json);*/
            }).dataTable({
                \"ajax\": {
                    \"url\": \"";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                    echo "/index/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "json_action_alias", []), "html", null, true);
                    echo "\",
                    \"data\": function (d) {}
                },
                \"deferLoading\": ";
                    // line 276
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["item"], "data", [])), "html", null, true);
                    echo ",
                ";
                    // line 277
                    if (twig_length_filter($this->env, $this->getAttribute($context["item"], "data", []))) {
                        // line 278
                        echo "                \"columns\": [
                    ";
                        // line 279
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "data", []), 0, []));
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
                        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                            // line 280
                            echo "                    {\"data\": \"";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\"}";
                            if ( !$this->getAttribute($context["loop"], "last", [])) {
                                echo ", ";
                            }
                            // line 281
                            echo "                    ";
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
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 282
                        echo "                ],
                ";
                    }
                    // line 284
                    echo "                \"aoColumnDefs\": [
                    /*{\"width\": '20%', \"targets\": [-3]}*/
                ]
            }).prev('.dataTables_processing').hide('');
            \$('#";
                    // line 288
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "datatableID", []), "html", null, true);
                    echo "').DataTable().ajax.reload();
            /*\$('#";
                    // line 289
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "datatableID", []), "html", null, true);
                    echo "').DataTable().order([0, 'desc']).draw();*/
                    ";
                }
                // line 291
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "            ";
        }
        // line 293
        echo "        }

        function DrawFlot(){

            var d = [[0]];

            \$.ajax({
                dataType: 'json',
                type: 'post',
                url: '";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/index/index-datatable5-list-json',
                async: false,
                success: function(data){
                    if(data && data.data && data.data.length){
                        d = data.data;
                    }
                }
            });

            // first correct the timestamps - they are recorded as the daily
            // midnights in UTC+0100, but Flot always displays dates in UTC
            // so we have to add one hour to hit the midnights in the plot
            var x = new Date();
            var utcOffset = (-x.getTimezoneOffset()) * 60 *1000;
            for (var i = 0; i < d.length; ++i) {
                d[i][0] = (d[i][0] * 1000 + utcOffset);
            }

            var options = {
                xaxis: {
                    mode: \"time\",
                    tickLength: 5,
                    position: 'bottom',
                    min: d[d.length > 48 ? d.length - 48 : 0][0],
                    dayNames : [
                        '";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
        echo "',
                        '";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
        echo "',
                        '";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
        echo "',
                        '";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
        echo "',
                        '";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
        echo "',
                        '";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
        echo "',
                        '";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
        echo "'
                    ],
                    monthNames  : [
                        '";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
        echo "',
                        '";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
        echo "',
                        '";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
        echo "',
                        '";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
        echo "',
                        '";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
        echo "',
                        '";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
        echo "',
                        '";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
        echo "',
                        '";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
        echo "',
                        '";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
        echo "',
                        '";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
        echo "',
                        '";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
        echo "',
                        '";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
        echo "'
                    ]
                },
                yaxis: {
                    zoomRange: false,
                    panRange: false,
                    position: 'left'
                },
                grid: {
                    markings: weekendAreas,
                    borderColor: '#dddddd'
                },
                zoom: {
                    interactive: true
                },
                pan: {
                    interactive: true
                }
            };

            var plot = \$.plot(\"#visit-plot\", [d], options);

        }

        // helper for returning the weekends in a period

        function weekendAreas(axes) {

            var markings = [],
                    d = new Date(axes.xaxis.min);

            // go to the first Saturday

            d.setUTCDate(d.getUTCDate() - ((d.getUTCDay() + 1) % 7))
            d.setUTCSeconds(0);
            d.setUTCMinutes(0);
            d.setUTCHours(0);

            var i = d.getTime();

            // when we don't set yaxis, the rectangle automatically
            // extends to infinity upwards and downwards

            do {
                markings.push({xaxis: {from: i, to: i + 2 * 24 * 60 * 60 * 1000}});
                i += 7 * 24 * 60 * 60 * 1000;
            } while (i < axes.xaxis.max);

            return markings;
        }

        function updateStatisticsButton(){
            \$('#auto-update-button').text(\$('#auto-update-button').text().replace(/\\d{1,2}/ig, '0'));
            updateTimer();
        }

        function updateStatistics(){
            var currText = \$(\"#auto-update-button\").text();
            \$(\"#auto-update-button\").text(\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Processing"), "html", null, true);
        echo "...\");
            var currTable = new \$.fn.dataTable.Api( '.table-datatable' );
            currTable.ajax.reload();
            DrawFlot();
            load_page_data();
            \$(\"#auto-update-button\").text(currText);
        }

        function updateTimer(){
            if (updateTimerInterval) {
                clearInterval(updateTimerInterval);
            }
            updateTimerInterval = setInterval(function(){
                var regExp = /\\d{1,2}/i;
                var curTime = regExp.exec(\$('#auto-update-button').text());
                if (isNaN(curTime)) {
                    curTime = 60;
                }
                if (curTime <= 1 || curTime >= 60) {
                    updateStatistics();
                    \$('#auto-update-button').text(\$('#auto-update-button').text().replace(/\\d{1,2}/ig, 59));
                    return;
                } else {
                    curTime = parseInt(curTime, 10);
                }
                \$('#auto-update-button').text(\$('#auto-update-button').text().replace(/\\d{1,2}/ig, curTime - 1));
            }, 1000)
        }

        function yelp() {
            \$(document).ready(function () {

                \$(\"#content, #main\").css(\"background-color\", \"#f2f2f2\");

                LoadDataTablesScripts(TestTable1);

                \$(document).on('hide', '.dataTables_processing', function(e){
                    \$(\".dataTables_wrapper > div.row-fluid\").hide();
                });
                \$('#datatable-1 > thead').hide();

                DrawFlot();

                updateTimer();
                \$(document).on('click', '#auto-update-button', function(){
                    updateStatisticsButton();
                });
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/Index/index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  764 => 405,  703 => 347,  699 => 346,  695 => 345,  691 => 344,  687 => 343,  683 => 342,  679 => 341,  675 => 340,  671 => 339,  667 => 338,  663 => 337,  659 => 336,  653 => 333,  649 => 332,  645 => 331,  641 => 330,  637 => 329,  633 => 328,  629 => 327,  601 => 302,  590 => 293,  587 => 292,  581 => 291,  576 => 289,  572 => 288,  566 => 284,  562 => 282,  548 => 281,  541 => 280,  524 => 279,  521 => 278,  519 => 277,  515 => 276,  507 => 273,  499 => 269,  496 => 268,  491 => 267,  489 => 266,  482 => 262,  455 => 238,  409 => 199,  401 => 198,  393 => 197,  385 => 196,  377 => 195,  349 => 170,  330 => 154,  322 => 148,  314 => 142,  312 => 141,  303 => 138,  299 => 137,  295 => 136,  292 => 135,  287 => 134,  280 => 129,  276 => 128,  272 => 127,  257 => 115,  251 => 111,  248 => 110,  240 => 104,  238 => 103,  229 => 100,  225 => 99,  221 => 98,  217 => 97,  213 => 96,  210 => 95,  205 => 94,  198 => 89,  194 => 88,  190 => 87,  186 => 86,  182 => 85,  166 => 72,  159 => 67,  157 => 66,  150 => 61,  147 => 60,  145 => 59,  136 => 56,  132 => 55,  129 => 54,  124 => 53,  122 => 52,  120 => 51,  113 => 47,  109 => 46,  93 => 33,  80 => 23,  75 => 20,  72 => 19,  65 => 14,  61 => 13,  57 => 12,  52 => 9,  50 => 8,  45 => 7,  42 => 6,  38 => 1,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Index/index/index.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Index/index/index.twig");
    }
}
