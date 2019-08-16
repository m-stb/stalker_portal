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

/* default/NewVideoClub/add_video/add_video_step_3.twig */
class __TwigTemplate_7aa7ccc1e545dc08ee293ee499877ac4b31fd2a0c5124da45fa715e44c1eac26 extends \Twig\Template
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
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video.twig"), "default/NewVideoClub/add_video/add_video_step_3.twig", 1);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video_step_3.js.twig"), "default/NewVideoClub/add_video/add_video_step_3.twig", 7)->display($context);
        // line 8
        echo "
    </script>

";
    }

    // line 12
    public function block_form_step_by_step($context, array $blocks = [])
    {
        // line 13
        echo "                <h4 class=\"section-header\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Screenshots"), "html", null, true);
        echo "</span></h4>
                ";
        // line 31
        echo "                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6\">
                            <div class=\"form-group\">
                                <div class=\" col-xs-6 col-sm-6 col-sm-offset-2 no-padding\">
                                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_big", []), 'widget');
        echo "
                                    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_id", []), 'widget');
        echo "
                                    <div id=\"cover_container\" data-id=\"";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_id", []), "vars", []), "value", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_id", []), "vars", []), "value", []), "html", null, true);
        } else {
            echo "new";
        }
        echo "\" data-file_num=\"0\">
                                        <input type=\"file\" name=\"files\" style=\"opacity: 0;\" multiple>
                                    </div>
                                    <img class=\"img-rounded channel-logo\" src=\"";
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_id", []), "vars", []), "value", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "curr_cover_dir", [], "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_id", []), "vars", []), "value", []), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "cover_ext", [], "array"), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_big", []), "vars", []), "value", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_big", []), "vars", []), "value", []), "html", null, true);
        }
        echo "\" alt=\"\">
                                    <a id=\"delete_cover\" class=\"no_context_menu\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/delete-cover\" data-cover_id=\"";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_id", []), "vars", []), "value", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cover_id", []), "vars", []), "value", []), "html", null, true);
        }
        echo "\">
                                        <span class=\"txt-primary\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete cover"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                                <div class=\" col-xs-6 col-sm-6 col-sm-offset-2 no-padding\" style=\"line-height: 22px;\"><br></div>

                                <div class=\" col-xs-6 col-sm-6 col-sm-offset-2 \" id=\"fileupload_episodes\">
                                    <ul class=\"video_episodes\">
                                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 51
            echo "                                            ";
            if (($this->getAttribute(($context["app"] ?? null), "videoImages", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "videoImages", [], "any", false, true), $context["key"], [], "any", true, true))) {
                // line 52
                echo "                                        <li class=\"col-xs-4 col-sm-4\">
                                            <div id=\"video_episodes_";
                // line 53
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoImages", []), $context["key"], [], "array"), "id", []), "html", null, true);
                echo "\" data-file_num=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                                <input type=\"file\" name=\"files\" style=\"opacity: 0;\" multiple>
                                            </div>
                                            <img class=\"img-rounded\" src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoImages", []), $context["key"], [], "array"), "curr_cover_dir", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoImages", []), $context["key"], [], "array"), "name", []), "html", null, true);
                echo "\" alt=\"\">
                                            <div class=\"clear_video_episodes\"></div>
                                        </li>
                                            ";
            } else {
                // line 60
                echo "                                        <li class=\"col-xs-4 col-sm-4\">
                                            <div id=\"video_episodes_";
                // line 61
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-id=\"new\" data-file_num=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                                <input type=\"file\" name=\"files\" style=\"opacity: 0;\" multiple>
                                            </div>
                                            <img class=\"img-rounded\" src=\"\" alt=\"\">
                                            <div class=\"clear_video_episodes\"></div>
                                        </li>
                                            ";
            }
            // line 68
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                    </ul>
                                </div>

                                <div class=\" col-xs-6 col-sm-6 col-sm-offset-2 no-padding\">
                                    <span class=\"txt-default\">
                                        ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available formats - jpg, jpeg, png. Maximum file size - 1MB."), "html", null, true);
        echo "
                                    </span>
                                    <span class=\"txt-default\">
                                        ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("For cover recommended portrait orientation picture (aspect ratio 3:4)."), "html", null, true);
        echo "
                                    </span>
                                    <span class=\"txt-default\">
                                        ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("For screenshots recommended landscape orientation picture (aspect ratio 4:3)"), "html", null, true);
        echo "
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video_step_3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 80,  187 => 77,  181 => 74,  174 => 69,  168 => 68,  156 => 61,  153 => 60,  144 => 56,  134 => 53,  131 => 52,  128 => 51,  124 => 50,  114 => 43,  104 => 42,  93 => 41,  83 => 38,  79 => 37,  75 => 36,  68 => 31,  63 => 13,  60 => 12,  53 => 8,  51 => 7,  45 => 4,  42 => 3,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video_step_3.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video_step_3.twig");
    }
}
