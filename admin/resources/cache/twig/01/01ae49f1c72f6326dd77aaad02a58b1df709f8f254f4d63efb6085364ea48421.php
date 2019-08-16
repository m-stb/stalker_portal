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

/* default/basic_templates/frgHeader/frgHeader.twig */
class __TwigTemplate_15720e39256a8b4ee58fc9e10b06f6d4680400337902156ad2f269dd196d279e extends \Twig\Template
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
        echo "<!--Start Header-->

<div id=\"modalbox\">
    <div class=\"devoops-modal\">
        <div class=\"devoops-modal-header\">
            <div class=\"modal-header-name\">
                <span>Basic table</span>
            </div>
            <div class=\"box-icons\">
                <a class=\"close-link\">
                    <i class=\"fa fa-times\"></i>
                </a>
            </div>
        </div>
        <div class=\"devoops-modal-inner\">
        </div>
        <div class=\"devoops-modal-bottom\">
        </div>
    </div>
</div>

<header class=\"navbar\">
    <div class=\"container-fluid expanded-panel\">
        <div class=\"row\">
            <div id=\"logo\" class=\"col-xs-2 col-sm-2\">
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/\"><img src=\"img/m-logo.png\"></a>
                <div class=\"pull-right menu-btn btn6\" data-menu=\"6\">
\t\t\t        <div class=\"icon\"></div>
\t\t\t    </div>
            </div>
           <div id=\"top-panel\" class=\"pull-right  col-xs-10 col-sm-10\">
                
                <div id=\"breadcrumb\" class=\"pull-left\">
                    ";
        // line 35
        echo $this->env->getExtension('nymo\Twig\Extension\BreadCrumbExtension')->renderBreadCrumbs();
        echo "
                </div>

                <div class=\"row pull-right \">
\t\t\t\t\t<div  class=\"col-sm-12 no-padding\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav panel-menu page-head-elements\">
\t\t\t\t\t\t\t<li class=\"tile-lang-menu\">
                                ";
        // line 42
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/basic_templates/langMenuList.twig"), "default/basic_templates/frgHeader/frgHeader.twig", 42)->display($context);
        // line 43
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 47
        echo "                            ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_info", []), "login", []) == "admin")) {
            // line 48
            echo "\t\t\t\t\t\t\t<li id=\"userNotificationInfo\" class=\"dropdown\">
                                ";
            // line 49
            $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/basic_templates/userNotificationInfo.twig"), "default/basic_templates/frgHeader/frgHeader.twig", 49)->display($context);
            // line 50
            echo "\t\t\t\t\t\t\t</li>
                            ";
        }
        // line 52
        echo "\t\t\t\t\t\t\t<li class=\"dropdown dropup-user\">
                                ";
        // line 53
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/basic_templates/userProfileInfo.twig"), "default/basic_templates/frgHeader/frgHeader.twig", 53)->display($context);
        // line 54
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>
    </div>
</header>

<!--End Header-->";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/frgHeader/frgHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 54,  98 => 53,  95 => 52,  91 => 50,  89 => 49,  86 => 48,  83 => 47,  80 => 43,  78 => 42,  68 => 35,  57 => 27,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/frgHeader/frgHeader.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/frgHeader/frgHeader.twig");
    }
}
