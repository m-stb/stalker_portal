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

/* default/NewVideoClub/watched_settings/watched_settings.js.twig */
class __TwigTemplate_3aabe750d3bf39e5af50703b86be344fb67888ad7cd775bc9df8223813dd6873 extends \Twig\Template
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

    function yelp() {
        \$(document).ready(function () {

            \$(\"#form_save\").on('click', function (e) {
                e.stopPropagation();
                e.preventDefault();

                ajaxPostSend('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans(((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", [])) . "/watched-settings-save")), "html", null, true);
        echo "', \$(\"#form_\").serializeArray());

                return false;
            });
            checkDisabled();
            \$(\"input[name='form[history_option]']\").on('change', function(){
                checkDisabled();
            })

        });
    }

    function checkDisabled(){
        var historyDisabled = \$(\"input[name='form[history_option]']:checked\").val() == '0_0';
        \$(\"input[name='form[not_ended_history_size]']\").attr('disabled', historyDisabled).parent('label')[historyDisabled? 'addClass': 'removeClass']('disabled_opacity');
    }
    document.addEventListener(\"DOMContentLoaded\", yelp, false);

";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/watched_settings/watched_settings.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/watched_settings/watched_settings.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/watched_settings/watched_settings.js.twig");
    }
}
