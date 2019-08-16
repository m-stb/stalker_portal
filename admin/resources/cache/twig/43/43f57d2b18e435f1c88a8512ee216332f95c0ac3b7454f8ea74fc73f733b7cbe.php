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

/* default/basic_templates/scripts-datatables.twig */
class __TwigTemplate_c296b717d61b2dd4aab6b85b4a11c7955305a324bd2ee24104a35ca29ef55612 extends \Twig\Template
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
        <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/jquery.dataTables.js\"></script>
";
        // line 8
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/dataTables.bootstrap.js?";
        if (((0 && $this->getAttribute(($context["app"] ?? null), "current_version", [], "any", true, true)) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"))) {
            echo "?ver=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"), "html", null, true);
        }
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/scripts-datatables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/scripts-datatables.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/scripts-datatables.twig");
    }
}
