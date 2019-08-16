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

/* default/TvChannels/epg/epg.twig */
class __TwigTemplate_c918b6e11a44abe49482b7a039ed628ab3211d0339cbba8c6ac31d6fec3760d1 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/TvChannels/epg/epg.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/TvChannels/epg/epg.twig", 2)->unwrap();
        // line 4
        $context["active"] = "settings";
        // line 5
        $context["title"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("IPTV channels") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("EPG")));
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
        
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/multiselect_transfer/jquery.selso.js\"></script>

        ";
        // line 14
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/TvChannels/epg/epg.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/TvChannels/epg/epg.twig", 15)->display($context);
        // line 16
        echo "
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 21
    public function block_footer($context, array $blocks = [])
    {
        // line 22
        echo "
        ";
        // line 23
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 25
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/TvChannels/epg/epg.js.twig"), "default/TvChannels/epg/epg.twig", 25)->display($context);
        // line 26
        echo "        </script>

";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "    <div id=\"iptv_list\">
        <div class=\"row filters-actions-pannel\">
           <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"pull-right\">
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-epg-item\" class=\"btn btn-action  pull-right no_context_menu\" id=\"add_epg_item\">
                        <i class=\"fa fa-plus\"></i>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add EPG"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"pull-right\">
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/update-epg\" class=\"btn btn-action pull-right main_ajax no_context_menu\" data-id=\"all\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Check updates for all EGP and update it if necessary"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-repeat\"></i>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update EPG"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"pull-right\">
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/update-epg\" class=\"btn btn-action pull-right main_ajax no_context_menu\" data-id=\"all\" data-force=\"1\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Drop EPG for all channels and get the new ones"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-refresh\"></i>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Force update of EPG"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 67
        echo "                <div class=\"box\">
                    ";
        // line 68
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 69
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 71
        echo "                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">
                            <div class=\"dataTables_processing\"></div>
                            <table class=\"table compact table-hover table-datatable\" id=\"datatable-1\">
                                ";
        // line 75
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 76
            echo "                                    ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                ";
        }
        // line 78
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
                    <span></span>
                </div>
                <div class=\"box-icons\">
                    <a class=\"close-link\">
                        <i class=\"fa fa-times\"></i>
                    </a>
                </div>
            </div>
            <form class=\"form-horizontal\" role=\"form\" id=\"epg_form\" action=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-epg-item\">
                <div class=\"devoops-modal-inner\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <!-- name -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label \">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("URL"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <input type=\"hidden\" name=\"id\" id=\"form_id\" class=\"own_fields\" required=\"required\">
                                        <input id=\"form_uri\" class=\"form-control own_fields\" type=\"text\" name=\"uri\"
                                            data-validation=\"required,server\" 
                                            data-validation-url=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/epg-check-uri\"
                                            data-validation-param-name=\"param\"
                                            data-validation-req-params='{\"for_validator\": true }'>
                                        <div class=\"name-check\"></div>
                                    </div>
                                    ";
        // line 124
        echo "                                    <span class=\"help-inline col-xs-12 col-sm-12\">
                                        <span class=\"small txt-default\">http://www.example.com/export/export.xml</span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label \">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Prefix"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <input id=\"form_id_prefix\" class=\"form-control own_fields\" type=\"text\" name=\"id_prefix\" data-validation-optional=\"true\" data-validation=\"server\" 
                                            data-validation-url=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/epg-check-prefix\"
                                            data-validation-param-name=\"prefix\"
                                            data-validation-req-params='{\"for_validator\": true }'>
                                        <div class=\"name-check\"></div>
                                    </div>
                                    ";
        // line 145
        echo "                                    <span class=\"help-inline col-xs-10 col-sm-10\">
                                        <span class=\"small txt-default\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Prefix is necessary to distinguish the EPG source in case, if the following XMLTV ID is stated in several sources"), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label \">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Initial state"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <select class=\"populate placeholder own_fields\" data-validation=\"required\"   name=\"status\" id=\"s2_status\" >
                                            <option value=\"1\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "</option>
                                            <option value=\"0\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label \">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Languages by priority"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-10\" style=\"margin: 7px 0 5px; margin-left: 8% !important\">
                                    <input type=\"hidden\" class=\"own_fields\" name=\"lang_code\" value=\"\">
                                    <fieldset id=\"letters\" class=\"col-sm-12\">
                                        <div class=\"col-sm-5\">
                                            <label class=\"col-sm-12 text-center\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available"), "html", null, true);
        echo "</label>
                                            <select size=\"9\" class=\"left populate placeholder col-sm-12\" multiple=\"multiple\" name=\"s2_lang_code_available\" id=\"s2_lang_code_available\" >
                                                ";
        // line 169
        if ($this->getAttribute(($context["app"] ?? null), "allLanguages", [], "any", true, true)) {
            // line 170
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allLanguages", []));
            foreach ($context['_seq'] as $context["code"] => $context["lang"]) {
                // line 171
                echo "                                                        <option id=\"opt_";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                                                ";
        }
        // line 174
        echo "                                            </select>
                                        </div>
                                        <div class=\"col-sm-2 no-padding\">
                                            <br><br><br>
                                            <button type=\"button\" class=\"add btn btn-block btn-default\"> &gt; </button>
                                            <button type=\"button\" class=\"remove btn btn-block btn-default\"> &lt; </button>
                                            <button type=\"button\" class=\"remove all btn btn-block btn-default\"> &lt;&lt; ";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("all"), "html", null, true);
        echo "</button>
                                        </div>
                                        <div class=\"col-sm-5\">
                                            <label class=\"col-sm-12 text-center\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Selected"), "html", null, true);
        echo "</label>
                                            <select size=\"9\" class=\"right populate placeholder col-sm-12\" multiple=\"multiple\" name=\"s2_lang_code\" id=\"s2_lang_code\" >
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12 text-center\">
                                    <span class=\"small txt-default\">";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The maximum number of languages that can be selected - 5"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"devoops-modal-bottom\">
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                        <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/TvChannels/epg/epg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 199,  361 => 198,  350 => 190,  340 => 183,  334 => 180,  326 => 174,  323 => 173,  310 => 171,  305 => 170,  303 => 169,  298 => 167,  290 => 162,  281 => 156,  277 => 155,  270 => 151,  262 => 146,  259 => 145,  249 => 134,  242 => 130,  234 => 124,  224 => 113,  215 => 107,  204 => 101,  179 => 78,  173 => 76,  171 => 75,  165 => 71,  159 => 69,  157 => 68,  154 => 67,  144 => 45,  136 => 44,  130 => 41,  122 => 40,  116 => 37,  110 => 36,  104 => 32,  101 => 31,  95 => 26,  93 => 25,  88 => 23,  85 => 22,  82 => 21,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  58 => 12,  53 => 10,  50 => 9,  47 => 8,  43 => 1,  41 => 5,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/epg/epg.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/epg/epg.twig");
    }
}
