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

/* default/Tasks/tasks_list/tasks_list.twig */
class __TwigTemplate_a5fa4b7df8abc9e0cb93c13972373d8b42eb3b58c662f4557c7f7eeef533958d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Tasks/tasks_list/tasks_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Tasks/tasks_list/tasks_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = ((((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tasks") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("tasks list in section")) . "\"") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "task_type_title", [])) . "\"");
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "
    ";
        // line 8
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        ";
        // line 10
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Tasks/tasks_list/task_list.css"), "default/Tasks/tasks_list/tasks_list.twig", 10)->display($context);
        // line 11
        echo "    </style>

";
    }

    // line 15
    public function block_footer_js($context, array $blocks = [])
    {
        // line 16
        echo "    
        ";
        // line 17
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 18
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Tasks/tasks_list/tasks_list.twig", 18)->display($context);
        // line 19
        echo "
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 24
    public function block_footer($context, array $blocks = [])
    {
        // line 25
        echo "    
        ";
        // line 26
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 28
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Tasks/tasks_list/tasks_list.js.twig"), "default/Tasks/tasks_list/tasks_list.twig", 28)->display($context);
        // line 29
        echo "        </script>
        
";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        // line 34
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    ";
        // line 37
        echo $context["main_macro"]->getget_filter("task_type", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Task type"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskType", [], "array"), 3, 6, 1);
        echo "
                    ";
        // line 38
        echo $context["main_macro"]->getget_filter("state", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("State"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskState", [], "array"), 3, 6);
        echo "
                    ";
        // line 39
        echo $context["main_macro"]->getget_filter("status", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskStatus", [], "array"), 3, 6);
        echo "
                    ";
        // line 40
        echo $context["main_macro"]->getget_filter("archive", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Archive"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskArchive", [], "array"), 3, 6);
        echo "
                    ";
        // line 41
        echo $context["main_macro"]->getget_filter("to_user", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Assigned to"), "id", "login", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskAdmin", [], "array"), 3, 6);
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 47
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 48
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 50
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 54
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 55
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 57
        echo "                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/Tasks/tasks_list/tasks_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  159 => 55,  157 => 54,  151 => 50,  145 => 48,  143 => 47,  134 => 41,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  113 => 34,  110 => 33,  104 => 29,  102 => 28,  97 => 26,  94 => 25,  91 => 24,  84 => 21,  80 => 20,  77 => 19,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  59 => 11,  57 => 10,  52 => 8,  49 => 7,  46 => 6,  42 => 1,  40 => 4,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Tasks/tasks_list/tasks_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Tasks/tasks_list/tasks_list.twig");
    }
}
