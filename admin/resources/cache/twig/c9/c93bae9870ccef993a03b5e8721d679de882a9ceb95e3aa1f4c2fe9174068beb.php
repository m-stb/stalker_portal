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

/* default/basic_templates/langMenuList.twig */
class __TwigTemplate_1cc3c62bca5c83f1a51a0c69a34e3c9920d83e80a6904634de358e041638c3d3 extends \Twig\Template
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
        // line 1
        if ($this->getAttribute(($context["app"] ?? null), "allowed_locales", [], "any", true, true)) {
            // line 2
            echo "    <div class=\"dropdown\">
        <a id=\"dropdown2\" data-toggle=\"dropdown\" href=\"#\"><span class=\"lang-lg\" lang=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", []), "html", null, true);
            echo "\"></span></a>
        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdown2\" id=\"allowed_locales\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allowed_locales", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 6
                echo "                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\" data-locale=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"><span class=\"lang-lg\" lang=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, $context["item"], 0, 2), "html", null, true);
                echo "\"></span>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/basic_templates/langMenuList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  44 => 6,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/langMenuList.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/langMenuList.twig");
    }
}
