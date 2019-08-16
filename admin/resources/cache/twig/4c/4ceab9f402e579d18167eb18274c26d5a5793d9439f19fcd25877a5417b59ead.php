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

/* default/basic_templates/meta.twig */
class __TwigTemplate_82bdb9c6decd602e9860ad7ceb754d0a66e9a1a9d59cf4a9334c7da901773bd8 extends \Twig\Template
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
        // line 2
        echo "
        <meta name=\"description\" content=\"description\">
        <meta name=\"author\" content=\"Stalker\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <base href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/\" />
        <link rel=\"icon\" href=\"favicon.ico";
        // line 7
        if (($this->getAttribute(($context["app"] ?? null), "current_version", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"))) {
            echo "?ver=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"), "html", null, true);
        }
        echo "\" type=\"image/x-icon\" />";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/meta.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/meta.twig");
    }
}
