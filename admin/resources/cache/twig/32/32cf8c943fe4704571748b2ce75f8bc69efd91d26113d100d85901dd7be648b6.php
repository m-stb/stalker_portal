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

/* default/basic_templates/userProfileInfo.twig */
class __TwigTemplate_6793fe4802cfa441980508b67ecc144120a19457a3e0914142e1f5823388754e extends \Twig\Template
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
        echo "    <a id=\"dropdown3\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("User profile"), "html", null, true);
        echo "\"
       href=\"#\">
        <i class=\"fa fa-user\"></i>
        <i class=\"fa fa-caret-down pull-right\"></i>
    </a>
    <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdown3\">
        <div class=\"inner\">
            <span class=\"auth-user-name\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_info", [], "array"), "login", [], "array"), "html", null, true);
        echo "</span><br>
            <span class=\"auth-user-group\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Administrator"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"auth-user-logout\">
            <a id=\"auth_user_auth_user_logout\"
               href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/auth-user/auth-user-logout\">
                <i class=\"fa fa-sign-out\"></i>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Logout"), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/userProfileInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 14,  45 => 10,  41 => 9,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/userProfileInfo.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/userProfileInfo.twig");
    }
}
