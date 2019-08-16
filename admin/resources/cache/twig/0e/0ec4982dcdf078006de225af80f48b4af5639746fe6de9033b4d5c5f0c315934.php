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

/* default/TvChannels/iptv_list/iptv_list.twig */
class __TwigTemplate_c4a165bf1efb3094f009f0e99905eccf0b433fb508b8af1f976f5710e94c5a0e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/TvChannels/iptv_list/iptv_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/TvChannels/iptv_list/iptv_list.twig", 2)->unwrap();
        // line 4
        $context["active"] = "tv-channels";
        // line 5
        $context["title"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("IPTV channels") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("channels list")));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_footer_js($context, array $blocks = [])
    {
        // line 9
        echo "    
        ";
        // line 10
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 11
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/TvChannels/iptv_list/iptv_list.twig", 11)->display($context);
        // line 12
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/TvChannels/iptv_list/iptv_list.twig", 12)->display($context);
        // line 13
        echo "
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Select/js/dataTables.select.js\"></script>
        
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/js/dataTables.buttons.js\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/js/buttons.colVis.js\"></script>
        <link  href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 24
    public function block_footer($context, array $blocks = [])
    {
        // line 25
        echo "        
        ";
        // line 26
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 28
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/TvChannels/iptv_list/iptv_list.js.twig"), "default/TvChannels/iptv_list/iptv_list.twig", 28)->display($context);
        // line 29
        echo "        </script>
        
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "    <div id=\"iptv_list\">
        <div class=\"row filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 38
        echo $context["main_macro"]->getget_filter("tv_genre_id", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Genre"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allGenres", [], "array"), 2);
        echo "
                ";
        // line 39
        echo $context["main_macro"]->getget_filter("languages", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Languages"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allLanguages", [], "array"), 2);
        echo "
                ";
        // line 40
        echo $context["main_macro"]->getget_filter("tv_archive_type", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Archive"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allArchive", [], "array"), 2);
        echo "
                ";
        // line 41
        echo $context["main_macro"]->getget_filter("status_id", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allStatus", [], "array"), 2);
        echo "
                ";
        // line 42
        echo $context["main_macro"]->getget_filter("monitoring_status", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Monitoring status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allMonitoringStatus", [], "array"), 2);
        echo "
                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-channel\" class=\"btn btn-action pull-right\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add a channel"), "html", null, true);
        echo "</a>
                <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/restart-all-archives\" class=\"btn btn-action pull-right no_context_menu\" id=\"restart_archives_button\"><i class=\"fa fa-repeat\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Restart all TV archives"), "html", null, true);
        echo "</a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"\">
                <div class=\"box\">
                    ";
        // line 51
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 52
            echo "                        ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 54
        echo "                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">
                            <div class=\"dt-buttons\">

                                <div class=\"dt-group-select-dropdown pull-left\">
                                    <a href=\"#\" class=\"dropdown-toggle btn-- dt-button\" data-toggle=\"dropdown\">                    
                                        <span><i class=\"fa \"></i>&nbsp;</span>
                                        <i class=\"fa fa-caret-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li>
                                            <div id=\"select_none\">
                                                ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Undo selection"), "html", null, true);
        echo "
                                            </div>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li>
                                            <div id=\"select_all\">
                                                ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select all"), "html", null, true);
        echo "
                                                ";
        // line 74
        echo "                                            </div>
                                        </li>
                                        <li>
                                            <div id=\"select_inverse\">
                                                 ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Inverse selection"), "html", null, true);
        echo "
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"dataTables_processing\"></div>
                            <table class=\"table table-hover table-datatable compact\" id=\"datatable-1\">
                                ";
        // line 87
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 88
            echo "                                    ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"), "\000");
            echo "
                                ";
        }
        // line 90
        echo "                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"modalbox_ad\">
        <div class=\"devoops-modal\">
            <div class=\"devoops-modal-header\">
                <div class=\"modal-header-name\">
                    <span>EPG</span>
                </div>
                <div class=\"box-icons\">
                    <a class=\"close-link\">
                        <i class=\"fa fa-times\"></i>
                    </a>
                </div>
            </div>
            <div class=\"devoops-modal-inner\">
                <div class=\"box\">
                    <div class=\"box-content\">
                        <form class=\"form-horizontal\" role=\"form\" id=\"epg_form\" action=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-channel-epg-item\">
                            <!-- name -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <select class=\"populate placeholder own_fields\" name=\"ch_id\" id=\"s2_channel\" >
                                            ";
        // line 122
        if ($this->getAttribute(($context["app"] ?? null), "allChannels", [], "any", true, true)) {
            // line 123
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allChannels", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 124
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                                            ";
        }
        // line 127
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Date"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <div class=\"col-sm-6 no-padding-left\">
                                            <input type='text' class='form-control own_fields datepicker' data-date-format='dd-mm-yy' name='epg_date' id=\"epg_date\" readonly=\"readonly\">
                                        </div>
                                        <button class=\"btn btn-success col-sm-5 pull-right\" id=\"get_epg_button\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Show EPG"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">EPG</label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <textarea name=\"epg\" id=\"epg_body\" class='own_fields form-control' rows=\"18\"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class=\"devoops-modal-bottom\">
                <div class=\"col-xs-12\">
                    <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                    <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\" >";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/template\" id=\"change_channel_genre_template\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"\" id=\"group_action_form\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Choose genre"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-8\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"group_key\" value=\"id\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"id\" value=\"\">
                            <select class=\"own_fields\" name=\"tv_genre_id\" id=\"tv_genre_id\">
                                <option value=\"-1\" >&nbsp;</option>
                                ";
        // line 176
        echo "                                    ";
        if ($this->getAttribute(($context["app"] ?? null), "allGenres", [], "any", true, true)) {
            // line 177
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allGenres", []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 178
                echo "                                            <option value=\"";
                echo $this->getAttribute($context["row"], "id", []);
                echo "\" >";
                echo (($this->getAttribute($context["row"], "title", [])) ? ($this->getAttribute($context["row"], "title", [])) : ("&nbsp;"));
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                                    ";
        }
        // line 181
        echo "                                ";
        // line 182
        echo "                            </select>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_form_button_template\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" id=\"save_channel\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Apply"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\" >";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

    <script type=\"text/template\" id=\"change_channel_language_template\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"\" id=\"group_action_form\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Choose language"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-8\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"group_key\" value=\"id\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"id\" value=\"\">
                            <select class=\"own_fields\" name=\"languages\" id=\"s2_languages\" multiple=\"multiple\">
                                ";
        // line 208
        echo "                                    ";
        if ($this->getAttribute(($context["app"] ?? null), "allLanguages", [], "any", true, true)) {
            // line 209
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allLanguages", []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 210
                echo "                                            <option value=\"";
                echo $this->getAttribute($context["row"], "id", []);
                echo "\" >";
                echo (($this->getAttribute($context["row"], "title", [])) ? ($this->getAttribute($context["row"], "title", [])) : ("&nbsp;"));
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                                    ";
        }
        // line 213
        echo "                                ";
        // line 214
        echo "                            </select>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

";
    }

    public function getTemplateName()
    {
        return "default/TvChannels/iptv_list/iptv_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 214,  434 => 213,  431 => 212,  420 => 210,  415 => 209,  412 => 208,  403 => 201,  392 => 193,  388 => 192,  376 => 182,  374 => 181,  371 => 180,  360 => 178,  355 => 177,  352 => 176,  342 => 168,  329 => 158,  325 => 157,  303 => 138,  294 => 132,  287 => 127,  284 => 126,  273 => 124,  268 => 123,  266 => 122,  259 => 118,  251 => 115,  224 => 90,  218 => 88,  216 => 87,  204 => 78,  198 => 74,  194 => 72,  185 => 66,  171 => 54,  165 => 52,  163 => 51,  149 => 44,  141 => 43,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  116 => 35,  113 => 34,  107 => 29,  105 => 28,  100 => 26,  97 => 25,  94 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  65 => 14,  62 => 13,  59 => 12,  57 => 11,  53 => 10,  50 => 9,  47 => 8,  43 => 1,  41 => 5,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/iptv_list/iptv_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/iptv_list/iptv_list.twig");
    }
}
