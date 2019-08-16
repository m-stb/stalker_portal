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

/* default/Users/users_list/users_list.css */
class __TwigTemplate_a9b38ec6b31dadd7e5c7e28936890d1dacb14935f35fb0bc5026e6b59d08532e extends \Twig\Template
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
        echo "#s2_event.error + .select2 + .help-block.form-error {
    padding-bottom: 10px;
}

div.separator {
    clear: both;
    margin: 10px 30px 15px;
    border-bottom: 1px solid #ccc;
}

#iptv_list .filters-actions-pannel .filter_s.attribute_set {
\tmargin-right: 12px;
}";
    }

    public function getTemplateName()
    {
        return "default/Users/users_list/users_list.css";
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
        return new Source("", "default/Users/users_list/users_list.css", "/var/www/html/stalker_portal/admin/resources/views/default/Users/users_list/users_list.css");
    }
}
