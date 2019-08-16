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

/* default/NewVideoClub/add_video/add_video_step_2.twig */
class __TwigTemplate_ec5a399116faaea695fa3e2d21878f271b14ebca31316f2be12fb87299a9d763 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'footer_steps_js' => [$this, 'block_footer_steps_js'],
            'form_step_by_step' => [$this, 'block_form_step_by_step'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video.twig"), "default/NewVideoClub/add_video/add_video_step_2.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_footer_steps_js($context, array $blocks = [])
    {
        // line 3
        echo "
    ";
        // line 4
        $this->displayParentBlock("footer_steps_js", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        ";
        // line 7
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video_step_2.js.twig"), "default/NewVideoClub/add_video/add_video_step_2.twig", 7)->display($context);
        // line 8
        echo "
    </script>

";
    }

    // line 12
    public function block_form_step_by_step($context, array $blocks = [])
    {
        // line 13
        echo "                <h4 class=\"section-header\">
                        <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Movie information"), "html", null, true);
        echo "</span>
                </h4>
                ";
        // line 37
        echo "                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-8 col-lg-8\" style=\"max-width: 790px;\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Original title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-9 col-sm-11\">
                                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "o_name", []), 'widget', ["attr" => ["class" => "form-control", "data-oldvalue" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "o_name", []), "vars", []), "value", []), "data-validation" => "required"]]);
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "o_name", []), 'errors');
        echo "
                                        <div>
                                            <a href=\"\" id=\"kinopoisk_url\"></a>
                                        </div>
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title on the native language. Autocomplete is available"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) == "tmdb"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TMDB ID"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Kinopoisk ID"), "html", null, true);
        }
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-9 col-sm-11\">
                                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), 'widget');
        echo "
                                        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "kinopoisk_id", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "kinopoisk_id", []), 'errors');
        echo "
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 65
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) == "tmdb"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("ID of movie on the TMDB"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("ID of movie on the Kinopoisk"), "html", null, true);
        }
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) == "tmdb"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TMDB rating"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Kinopoisk rating"), "html", null, true);
        }
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\"col-xs-9 col-sm-11 col-md-11 col-lg-11\">
                                        ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "rating_kinopoisk", []), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly"]]);
        echo "
                                        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "rating_kinopoisk", []), 'errors');
        echo "
                                    </div>
                                    <div class=\" col-xs-3 col-sm-1 no-padding\">
                                        <button class=\"btn btn-default btn-app-mini btn-circle\" type=\"button\" id=\"update_rating_kinopoisk\"><i class=\"fa fa-refresh\"></i></button>
                                    </div>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 82
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) == "tmdb"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Film rating on the TMDB. Autocomplete only"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Film rating on the Kinopoisk. Autocomplete only"), "html", null, true);
        }
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label uniseries\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Length"), "html", null, true);
        echo "</label>
                                <label class=\"col-sm-2 control-label \">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Approximate duration"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-9 col-sm-11\">
                                        ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "time", []), 'widget', ["attr" => ["class" => "form-control", "data-validation" => "number", "data-validation-optional" => "true"]]);
        echo "
                                        ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "time", []), 'errors');
        echo "
                                    </div>
                                    <i class=\"i-hint uniseries\"
                                        title=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Film length in minutes Example: 102"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Approximate duration(format)  of episode of serial on minutes. Example: 24"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                    ";
        // line 108
        echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Country"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-9 col-sm-11\">
                                        ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "country", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "country", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Director"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-9 col-sm-11\">
                                        ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "director", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "director", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Actors"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-9 col-sm-11\">
                                        ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "actors", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "actors", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Movie description"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-9 col-sm-11\">
                                        ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "description", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "description", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Comments"), "html", null, true);
        echo ":</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-9 col-sm-11\">
                                        ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "comments", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "comments", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("MPAA rating"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-5 col-sm-5\">
                                        ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "rating_mpaa", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
        echo "
                                        ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "rating_mpaa", []), 'errors');
        echo "
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("MPAA age restriction"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Age restriction"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-5 col-sm-5\">
                                        ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "age", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
        echo "
                                        ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "age", []), 'errors');
        echo "
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Recommended viewer age"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    ";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video_step_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 177,  365 => 176,  359 => 173,  355 => 172,  349 => 169,  341 => 164,  337 => 163,  331 => 160,  327 => 159,  321 => 156,  313 => 151,  309 => 150,  303 => 147,  295 => 142,  291 => 141,  285 => 138,  277 => 133,  273 => 132,  267 => 129,  259 => 124,  255 => 123,  249 => 120,  241 => 115,  237 => 114,  231 => 111,  226 => 108,  221 => 100,  217 => 99,  211 => 96,  207 => 95,  201 => 92,  197 => 91,  191 => 88,  187 => 87,  180 => 83,  172 => 82,  162 => 75,  158 => 74,  148 => 71,  140 => 66,  132 => 65,  126 => 62,  122 => 61,  118 => 60,  108 => 57,  100 => 52,  96 => 51,  87 => 45,  83 => 44,  77 => 41,  71 => 37,  66 => 14,  63 => 13,  60 => 12,  53 => 8,  51 => 7,  45 => 4,  42 => 3,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video_step_2.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video_step_2.twig");
    }
}
