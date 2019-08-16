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

/* default/NewVideoClub/add_video/add_video_step_4.twig */
class __TwigTemplate_112ce1e56023f8ea209657afcfb06795aede47e589ab5c7021ad91550e3fc206 extends \Twig\Template
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
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video.twig"), "default/NewVideoClub/add_video/add_video_step_4.twig", 1);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video_step_4.js.twig"), "default/NewVideoClub/add_video/add_video_step_4.twig", 7)->display($context);
        // line 8
        echo "
    </script>

";
    }

    // line 12
    public function block_form_step_by_step($context, array $blocks = [])
    {
        // line 13
        echo "            <h4 class=\"section-header\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Files"), "html", null, true);
        echo "</span></h4>

            <div class=\"row\" id=\"season_button_container\" style=\"display: none\">
                <div class=\"col-xs-6 col-sm-6 col-xs-offset-6 col-sm-offset-6\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <button id=\"update_season\" class=\"btn btn-success col-xs-6 col-sm-4 col-md-5 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 pull-right\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update season data"), "html", null, true);
        echo "</button>
                            <button id=\"add_season_structure\" class=\"btn btn-default col-xs-6 col-sm-4 col-md-5 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 pull-right\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Create season structure"), "html", null, true);
        echo "</button>
                            <button id=\"add_season\" class=\"btn btn-default col-xs-6 col-sm-4 col-md-5 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 pull-right\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add one season"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-12\"><div class=\"box\"></div></div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div id=\"files_container\" data-video_id=\"";
        // line 29
        if ($this->getAttribute(($context["app"] ?? null), "video_id", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "video_id", [], "array"), "html", null, true);
        }
        echo "\"></div>
                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video_step_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  81 => 21,  77 => 20,  73 => 19,  63 => 13,  60 => 12,  53 => 8,  51 => 7,  45 => 4,  42 => 3,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video_step_4.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video_step_4.twig");
    }
}
