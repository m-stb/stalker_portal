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

/* default/basic_templates/css.twig */
class __TwigTemplate_565d2a32570a201ea93cf8ca7b97ce6985dd09dea36002f2abd8e9a64ef1303e extends \Twig\Template
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
        // line 29
        echo "
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/bootstrap/bootstrap.css\" rel=\"stylesheet\">
        ";
        // line 32
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/select2/select2.css\" rel=\"stylesheet\">
        
        <link href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/css/jquery.dataTables.css\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/css/countries_flags/flag-icon.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/css/countries_flags/docs.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/css/jquery.fileupload.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/css/jquery.fileupload-ui.css\" rel=\"stylesheet\">
        <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css\" rel=\"stylesheet\">
        <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                        <script src=\"//getbootstrap.com/docs-assets/js/html5shiv.js\"></script>
                        <script src=\"//getbootstrap.com/docs-assets/js/respond.min.js\"></script>
        <![endif]-->

        ";
        // line 50
        echo "        <link href=\"//blueimp.github.io/Gallery/css/blueimp-gallery.min.css\" rel=\"stylesheet\">

        <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/css/style.css?ver=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        if (((0 && $this->getAttribute(($context["app"] ?? null), "current_version", [], "any", true, true)) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"))) {
            echo "?ver=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "current_version", [], "array"), "html", null, true);
        }
        echo "\" rel=\"stylesheet\">
";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 52,  76 => 50,  64 => 40,  60 => 39,  56 => 38,  52 => 37,  48 => 36,  42 => 33,  37 => 32,  33 => 30,  30 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/css.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/css.twig");
    }
}
