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

/* default/basic_templates/userNotificationInfo.twig */
class __TwigTemplate_b6aeadf13b5c98268eba88efcacbe1d81a43aad98aac7358a571868f8849f504 extends \Twig\Template
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
        echo "\t<a href=\"#\" id=\"index_note_list\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Notifications"), "html", null, true);
        echo "\">
\t    <i class=\"fa fa-bell\"></i>
\t    <span class=\"hidden-xs badge red\">";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_info", [], "array"), "notification_count", [], "array")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_info", [], "array"), "notification_count", [], "array"), "html", null, true);
        }
        echo "</span>
\t</a>
";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/userNotificationInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/userNotificationInfo.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/userNotificationInfo.twig");
    }
}
