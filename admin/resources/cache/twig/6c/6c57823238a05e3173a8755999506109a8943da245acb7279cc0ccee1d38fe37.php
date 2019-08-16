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

/* default/NewVideoClub/video_advertise/video_advertise.twig */
class __TwigTemplate_35f76294310bc4664013702da7710016510720da296fe5fd15fbd39447c003a1 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/NewVideoClub/video_advertise/video_advertise.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/NewVideoClub/video_advertise/video_advertise.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("advertising list"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_footer_js($context, array $blocks = [])
    {
        // line 8
        echo "    
        ";
        // line 9
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 10
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/NewVideoClub/video_advertise/video_advertise.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/NewVideoClub/video_advertise/video_advertise.twig", 11)->display($context);
        // line 12
        echo "
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        // line 18
        echo "    
        ";
        // line 19
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"./js/jquery.tmpl.min.js\" defer=\"\"></script>
        <script type=\"text/javascript\" defer>
            ";
        // line 22
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/video_advertise/video_advertise.js.twig"), "default/NewVideoClub/video_advertise/video_advertise.twig", 22)->display($context);
        // line 23
        echo "        </script>

";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "    <div id=\"iptv_list\">
        <div class=\"row filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-video-ads\" id=\"add_video_ads\" class=\"btn btn-action pull-right\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add commercial"), "html", null, true);
        echo "</a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 37
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 38
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 40
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 44
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 45
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 47
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type=\"text/template\" id=\"modal_video_ads_inner\">
        <div class=\"box\">
            <div class=\"box-content\">
            <form id=\"form_\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-video-ads\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\" col-xs-10 col-sm-10\">
                            <input type=\"hidden\" id=\"form_id\" name=\"id\" class=\"form-control own_field\" value=\"\${id}\">
                            <input type=\"text\" id=\"form_title\" name=\"title\" class=\"form-control own_field\" data-validation=\"required\" value=\"\${title}\" required=\"required\">
                            <div class=\"bg-danger\"></div>
                        </div>
                        <i class=\"i-hint\"
                            title=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can use letters, digits"), "html", null, true);
        echo "\" >
                            <img class=\"i-hint-sign\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                        </i>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Address"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\" col-xs-10 col-sm-10\">
                            <input type=\"text\" id=\"form_url\" name=\"url\" required=\"required\" class=\"form-control own_field\" data-validation=\"required\" value=\"\${url}\">
                            <div class=\"bg-danger\"></div>
                        </div>
                        <i class=\"i-hint\"
                            title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Format: solution+URL. Example: ffmpeg http://example_of_link"), "html", null, true);
        echo "\" >
                            <img class=\"i-hint-sign\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                        </i>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Weight"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\" col-xs-10 col-sm-10\">
                            <input type=\"text\" id=\"form_weight\" name=\"weight\" required=\"required\" class=\"form-control valid own_field\" data-validation=\"required\" value=\"\${weight}\">
                            <div class=\"bg-danger\"></div>
                        </div>
                        <i class=\"i-hint\"
                            title=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Display frequency rate"), "html", null, true);
        echo "\" >
                            <img class=\"i-hint-sign\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                        </i>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Forbidden for categories"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\" col-xs-10 col-sm-10\">
                            <select id=\"form_denied_categories\" name=\"denied_categories\" class=\"populate placeholder own_field\" multiple=\"multiple\">
                                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "video_categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 111
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_name", []), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                            </select>
                            <div class=\"bg-danger\"></div>
                        </div>
                        <i class=\"i-hint\"
                            title=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Show categories that won't see the advertising"), "html", null, true);
        echo "\" >
                            <img class=\"i-hint-sign\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                        </i>
                    </div>
                </div>
                
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Necessary to see"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\" col-xs-10 col-sm-10\">
                            <select id=\"form_must_watch\" name=\"must_watch\" class=\"populate placeholder own_field\">
                                <option value=\"all\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All"), "html", null, true);
        echo "</option>
                                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_merge(range(90, 10, 10), [0 => 5, 1 => 0]));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 130
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "%</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                            </select>

                            <div id=\"slider\" class=\"pull-left\">
                                 <div id=\"slider-handle\" class=\"ui-slider-handle\"></div>
                            </div>

                            <i class=\"i-hint\"
                                title=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Percentage of the total length of video that user has to watch to skip commercials."), "html", null, true);
        echo "\" >
                                <img class=\"i-hint-sign\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                            </i>

                            <div class=\"bg-danger\"></div>
                        </div>
                    </div>
                </div>

                ";
        // line 154
        echo "            </form>
            </div>
        </div>
    </script>

";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_advertise/video_advertise.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 154,  309 => 140,  305 => 139,  296 => 132,  285 => 130,  281 => 129,  277 => 128,  270 => 124,  261 => 118,  257 => 117,  251 => 113,  240 => 111,  236 => 110,  229 => 106,  220 => 100,  216 => 99,  206 => 92,  197 => 86,  193 => 85,  183 => 78,  174 => 72,  170 => 71,  159 => 63,  152 => 61,  136 => 47,  130 => 45,  128 => 44,  122 => 40,  116 => 38,  114 => 37,  102 => 32,  97 => 29,  94 => 28,  88 => 23,  86 => 22,  80 => 19,  77 => 18,  74 => 17,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_advertise/video_advertise.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_advertise/video_advertise.twig");
    }
}
