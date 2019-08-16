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

/* default/NewVideoClub/watched_settings/watched_settings.twig */
class __TwigTemplate_ef65b2df84a062bf8ca861c2732723666923f3afc659c640b3fdc492326e0168 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/NewVideoClub/watched_settings/watched_settings.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Watched"));
        // line 3
        $context["active_alias"] = "watched-settings";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_footer($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
       
        ";
        // line 11
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/watched_settings/watched_settings.js.twig"), "default/NewVideoClub/watched_settings/watched_settings.twig", 11)->display($context);
        // line 12
        echo "
    </script>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "
    <div id=\"add_channel\" style=\"padding-top: 0\">
        ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", [])) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "action_alias", []))), "attr" => ["class" => "form-horizontal", "role" => "form", "id" => "form_"]]);
        echo "
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-content\">
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\"form-group\">
                                <h4 class=\"section-header\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "history_option", []), 'label');
        echo "</h4>
                                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "history_option", []));
        foreach ($context['_seq'] as $context["_key"] => $context["choiceFormView"]) {
            // line 28
            echo "                                    <div class=\"radio\">
                                        <label>
                                            ";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["choiceFormView"], 'widget');
            echo "
                                            ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["choiceFormView"], "vars", []), "label", []), "html", null, true);
            echo "
                                            <i class=\"fa \"></i>
                                        </label>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choiceFormView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            </div>
                        </div>
                        <div class=\"col-sm-12\"></div>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\"form-group\">
                                <h4 class=\"section-header\">";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "not_ended_history_size", []), 'label');
        echo "</h4>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "not_ended_history_size", []));
        foreach ($context['_seq'] as $context["_key"] => $context["choiceFormView"]) {
            // line 43
            echo "                                    <div class=\"radio\">
                                        <label>
                                            ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["choiceFormView"], 'widget');
            echo "
                                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["choiceFormView"], "vars", []), "label", []), "html", null, true);
            echo "
                                            <i class=\"fa \"></i>
                                        </label>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choiceFormView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            </div>
                        </div>
                        <div class=\"col-sm-12\"></div>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "save", []), 'widget', ["label" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "attr" => ["class" => "btn btn-success green"]]);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"display: none;\">
            ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'rest');
        echo "
        </div>
        ";
        // line 66
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/watched_settings/watched_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 66,  159 => 64,  148 => 56,  141 => 51,  130 => 46,  126 => 45,  122 => 43,  118 => 42,  114 => 41,  107 => 36,  96 => 31,  92 => 30,  88 => 28,  84 => 27,  80 => 26,  70 => 19,  66 => 17,  63 => 16,  57 => 12,  55 => 11,  47 => 7,  44 => 6,  40 => 1,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/watched_settings/watched_settings.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/watched_settings/watched_settings.twig");
    }
}
