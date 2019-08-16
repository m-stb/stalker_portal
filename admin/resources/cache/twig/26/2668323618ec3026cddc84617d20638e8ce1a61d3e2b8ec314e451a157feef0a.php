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

/* default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.css */
class __TwigTemplate_1b1ce63c41ba2c40e6a2d458f712f37d8629283f2359de8f77a47165a5436204 extends \Twig\Template
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

table.dataTable tbody td.dt-center {
    padding: 2px 10px 2px 10px;
}
";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.css";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.css", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.css");
    }
}
