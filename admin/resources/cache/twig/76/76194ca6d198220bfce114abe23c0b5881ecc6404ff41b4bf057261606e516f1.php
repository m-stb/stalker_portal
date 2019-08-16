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

/* default/Karaoke/index/index.css */
class __TwigTemplate_ff8829802d01ce15f4c68d6ebc16a87c7d8da98e323bf631d3382ad78e2561b0 extends \Twig\Template
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

.dataTable i.fa-circle {
    color: #424242;
    font-size: 9px;
}

.dataTable i.fa-calendar,
.dataTable i.fa-eye-slash {
    color: #aaa;
}

.dataTable i.fa-eye,
.dataTable i.fa-archive {
    color: #525252;
}

.dataTable i.fa-calendar,
.dataTable i.fa-eye,
.dataTable i.fa-eye-slash,
.dataTable i.fa-banned,
.dataTable i.fa-link,
.dataTable i.fa-archive{
    font-size: 17px;
}

.dataTable i.icon{
    float: left; /* hack makes v-align work !*/
    width: 20px;
    height: 23px;
    margin: auto 6px;
    background: no-repeat center center transparent;
}

.dataTable i.icon-calendar{
    background-image: url(./img/videoclub_status_icons/calendar.png);
    /*background-position-y: 3px;*/
}
.dataTable i.icon-eye{
    background-image: url(./img/videoclub_status_icons/eye.png);
}
.dataTable i.icon-eye-slash{
    background-image: url(./img/videoclub_status_icons/eye-no-active.png);
}
.dataTable i.icon-banned{
    background-image: url(./img/videoclub_status_icons/banned.png);
}
.dataTable i.icon-link{
    background-image: url(./img/videoclub_status_icons/link.png);
}
.dataTable i.icon-archive{
    background-image: url(./img/videoclub_status_icons/archive.png);
}



table.dataTable tbody .dt-status{
    line-height: 100%;
    overflow: visible;
    vertical-align: middle !important;
}

table.dataTable tbody .dt-status .tooltip-inner{
    padding: 3px 8px;
    white-space: normal;
}";
    }

    public function getTemplateName()
    {
        return "default/Karaoke/index/index.css";
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
        return new Source("", "default/Karaoke/index/index.css", "/var/www/html/stalker_portal/admin/resources/views/default/Karaoke/index/index.css");
    }
}
