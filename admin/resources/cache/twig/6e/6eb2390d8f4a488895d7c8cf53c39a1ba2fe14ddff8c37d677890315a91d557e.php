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

/* default/basic_templates/footer_js.twig */
class __TwigTemplate_055de0507fe8abd1fd1ded3a1e849422fcbf42fe40277f3875f08a05a52f77f5 extends \Twig\Template
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
        echo "
";
        // line 3
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src=\"//code.jquery.com/jquery.js\"></script>-->
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery/jquery-2.1.0.min.js\"></script>
\t\t <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/noty/packaged/jquery.noty.packaged.js\"></script>
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/js/jquery.cookies.2.2.0.js\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-ui/jquery-ui.js\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/scrollTo/jquery.scrollTo.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/bootstrap/bootstrap.min.js\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "relativePath", []), "html", null, true);
        echo "c/version.js";
        if (($this->getAttribute(($context["app"] ?? null), "current_version", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"))) {
            echo "?ver=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"), "html", null, true);
        }
        echo "\"></script>
        <!-- All functions for this theme + document.ready processing -->
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/form-validator/jquery.form-validator.min.js\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/js/devoops.js";
        if (($this->getAttribute(($context["app"] ?? null), "current_version", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"))) {
            echo "?ver=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"), "html", null, true);
        }
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/notiFeed/notiFeed.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/footer_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  76 => 15,  72 => 14,  62 => 12,  58 => 11,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/footer_js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/footer_js.twig");
    }
}
