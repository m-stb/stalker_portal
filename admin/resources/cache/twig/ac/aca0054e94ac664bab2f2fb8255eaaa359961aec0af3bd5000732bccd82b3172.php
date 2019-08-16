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

/* default/NewVideoClub/add_video/add_video_step_1.twig */
class __TwigTemplate_d6b991cb0ebd71523b5638d4fa184b37909edf6eb1a6fe9434b7ca3eb7c88560 extends \Twig\Template
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
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video.twig"), "default/NewVideoClub/add_video/add_video_step_1.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_footer_steps_js($context, array $blocks = [])
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("footer_steps_js", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        ";
        // line 8
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video_step_1.js.twig"), "default/NewVideoClub/add_video/add_video_step_1.twig", 8)->display($context);
        // line 9
        echo "
    </script>

";
    }

    // line 14
    public function block_form_step_by_step($context, array $blocks = [])
    {
        // line 15
        echo "                <h4 class=\"section-header\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Basic"), "html", null, true);
        echo "</span></h4>
                ";
        // line 33
        echo "                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-8 col-lg-8\" style=\"max-width: 790px;\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-11\">
                                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "id", []), 'widget');
        echo "
                                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "rating_count_kinopoisk", []), 'widget');
        echo "
                                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "rating_imdb", []), 'widget');
        echo "
                                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "rating_count_imdb", []), 'widget');
        echo "
                                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "name", []), 'widget', ["attr" => ["class" => "form-control", "data-validation" => "required"]]);
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "name", []), 'errors');
        echo "
                                    </div>

                                    <i class=\"i-hint\"
                                        title=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can use letters, digits and symbols from the list: ! @ # \$ % ^ & * ( ) _ - + : ; , ."), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>

                                    ";
        // line 58
        echo "                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Original title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-11\">
                                        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "o_name", []), 'widget', ["attr" => ["class" => "form-control", "data-oldvalue" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "o_name", []), "vars", []), "value", []), "data-validation" => "required"]]);
        echo "
                                        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "o_name", []), 'errors');
        echo "
                                        <div>
                                            <a href=\"\" id=\"kinopoisk_url\"></a>
                                        </div>
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title on the native language. Autocomplete is available"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Autocomplete"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-11\" id=\"autocomplete_button_container\">
                                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []));
        foreach ($context['_seq'] as $context["_key"] => $context["providerChild"]) {
            // line 83
            echo "                                        <div class=\"radio-inline\">
                                            <label>
                                                ";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["providerChild"], 'widget');
            echo "
                                                <i class=\"fa fa-dot-circle-o\"></i>
                                                ";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["providerChild"], 'label', ["attr" => ["for" => $this->getAttribute($this->getAttribute($context["providerChild"], "vars", []), "id", [])]]);
            echo "
                                            </label>
                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['providerChild'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                        <button class=\"btn btn-default col-xs-offset-1\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Autocomplete"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \" for=\"form_autocomplete_provider\">";
        // line 97
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) == "tmdb"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TMDB ID"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Kinopoisk ID"), "html", null, true);
        }
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-11\">
                                        ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "kinopoisk_id", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "kinopoisk_id", []), 'errors');
        echo "
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 104
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "autocomplete_provider", []), "vars", []), "value", []) == "tmdb"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("ID of movie on the TMDB"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("ID of movie on the Kinopoisk"), "html", null, true);
        }
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xs-12 col-sm-12\">
                            <div class=\"separator\"></div>
                        </div>

                        <div class=\"col-xs-12 col-sm-8 col-lg-8\" style=\"max-width: 790px;\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Category"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "category_id", []), 'widget', ["attr" => ["class" => "populate placeholder", "data-validation" => "required"]]);
        echo "
                                        ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "category_id", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Genre"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-11\">
                                        ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cat_genre_id", []), 'widget', ["attr" => ["class" => "populate placeholder", "data-validation" => "required"]]);
        echo "
                                        ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cat_genre_id", []), 'errors');
        echo "
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can choose up to 4 genres"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Type"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "is_series", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
        echo "
                                        ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "is_series", []), 'errors');
        echo "
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Type Serial adds seasons and episodes structure"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label uniseries\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Year"), "html", null, true);
        echo "</label>
                                <label class=\"col-sm-2 control-label \">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Period of showing "), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "year", []), 'widget', ["attr" => ["class" => "form-control pull-left", "data-validation" => "compare_number", "data-validation-compare-element" => "#form_year_end", "data-validation-compare-operation" => "<=", "data-validation-regexp" => "^\\d{4}\$", "data-validation-optional" => "true"]]);
        echo "
                                        ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "year_end", []), 'widget', ["attr" => ["class" => "form-control  pull-left add-video-year", "data-validation" => "compare_number", "data-validation-compare-element" => "#form_year", "data-validation-compare-operation" => ">=", "data-validation-regexp" => "^(?:\\d{4})\$", "data-validation-optional" => "true", "disabled" => "disabled"]]);
        echo "
                                        ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "year", []), 'errors');
        echo "
                                        ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "year_end", []), 'errors');
        echo "
                                    </div>
                                    <i class=\"i-hint uniseries\"
                                       title=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Year of the film creation Example: 2014"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                    <i class=\"i-hint\"
                                       title=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The period of showing of the episodes on TV"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                    ";
        // line 178
        echo "                                </div>
                            </div>

                            <div class=\"form-group form-group-checkbox\">
                                <label class=\"col-sm-2 control-label \">";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Parent control"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-7\">
                                    <div class=\" col-xs-10 col-sm-11\">
                                        <div class=\"checkbox-inline\">
                                            <label>
                                                ";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "censored", []), 'widget');
        echo "
                                                <i class=\"fa fa-square-o small\"></i>
                                            </label>
                                        </div>
                                        <i class=\"i-hint\"
                                            title=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Adds the restriction for movie access (password set in the \"Parental advisory\"). Default password 0000"), "html", null, true);
        echo "\" >
                                            <img class=\"i-hint-sign\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                        </i>
                                        ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "censored", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video_step_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 195,  387 => 193,  383 => 192,  375 => 187,  367 => 182,  361 => 178,  356 => 170,  352 => 169,  346 => 166,  342 => 165,  336 => 162,  332 => 161,  328 => 160,  324 => 159,  318 => 156,  314 => 155,  305 => 149,  301 => 148,  295 => 145,  291 => 144,  285 => 141,  276 => 135,  272 => 134,  266 => 131,  262 => 130,  256 => 127,  247 => 121,  243 => 120,  237 => 117,  222 => 105,  214 => 104,  208 => 101,  204 => 100,  194 => 97,  184 => 91,  174 => 87,  169 => 85,  165 => 83,  161 => 82,  155 => 79,  146 => 73,  142 => 72,  133 => 66,  129 => 65,  123 => 62,  117 => 58,  111 => 50,  107 => 49,  100 => 45,  96 => 44,  92 => 43,  88 => 42,  84 => 41,  80 => 40,  74 => 37,  68 => 33,  63 => 15,  60 => 14,  53 => 9,  51 => 8,  45 => 5,  42 => 4,  39 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video_step_1.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video_step_1.twig");
    }
}
