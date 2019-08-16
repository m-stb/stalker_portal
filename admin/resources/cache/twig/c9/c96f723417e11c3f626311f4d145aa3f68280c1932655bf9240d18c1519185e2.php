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

/* default/Tasks/tasks_list/task_list.css */
class __TwigTemplate_281bc585ae500d94109f8aa1d874afe946f98d7756ad2d441d0d4c53c0b196ac extends \Twig\Template
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

.dataTable i.fa-archive,
.dataTable i.fa-eye-slash {
    color: #aaa;
}

.dataTable i.fa-archive,
.dataTable i.fa-eye {
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
    width: 20px;
    height: 23px;
    background: no-repeat center center transparent;
    margin: auto 6px;
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

.dt-status .monitoring-status {
\tmargin-left: 2px;
}

.dt-status .red{
    border: none;
}

html[lang=en] div.dt-button-collection {
    width: 109px;
}

html[lang=ru] div.dt-button-collection {
    width: 119px;
}

table.dataTable tbody .dt-status{
    overflow: visible;
}

table.dataTable tbody .dt-status .tooltip-inner{
    padding: 3px 8px;
    white-space: normal;
}";
    }

    public function getTemplateName()
    {
        return "default/Tasks/tasks_list/task_list.css";
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
        return new Source("", "default/Tasks/tasks_list/task_list.css", "/var/www/html/stalker_portal/admin/resources/views/default/Tasks/tasks_list/task_list.css");
    }
}
