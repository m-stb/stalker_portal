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

/* default/Events/event_scheduler/event_scheduler.twig */
class __TwigTemplate_a1df9632ddf75d9aafd0a21b6e2e351b7080e028f07e59a26dd333fab9650a8c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/layout.twig"), "default/Events/event_scheduler/event_scheduler.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Events/event_scheduler/event_scheduler.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Events") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("list of scheduled events "));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_footer_js($context, array $blocks = [])
    {
        // line 8
        echo "    
        ";
        // line 9
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 10
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Events/event_scheduler/event_scheduler.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Events/event_scheduler/event_scheduler.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    // line 15
    public function block_footer($context, array $blocks = [])
    {
        // line 16
        echo "        
        ";
        // line 17
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        ";
        // line 18
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/basic_templates/scheduler_events_menu.twig"), "default/Events/event_scheduler/event_scheduler.twig", 18)->display($context);
        // line 19
        echo "        
        <script type=\"text/javascript\" defer>
            ";
        // line 21
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Events/event_scheduler/event_scheduler.js.twig"), "default/Events/event_scheduler/event_scheduler.twig", 21)->display($context);
        // line 22
        echo "        </script>

";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        echo " 
    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 31
        echo $context["main_macro"]->getget_datepicker_double_input(3, 6);
        echo "
                ";
        // line 32
        echo $context["main_macro"]->getget_filter("type", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Type"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "scheduleType", [], "array"), 5, 9);
        echo "
                ";
        // line 33
        echo $context["main_macro"]->getget_filter("state", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("State"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "scheduleState", [], "array"), 5, 9);
        echo "

                <a id=\"add_events\" href=\"#\" class=\"btn btn-action pull-right no_context_menu\"><i class=\"fa fa-plus\"></i>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add event"), "html", null, true);
        echo "</a>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 41
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 42
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 44
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 48
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 49
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 51
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
        return "default/Events/event_scheduler/event_scheduler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  135 => 49,  133 => 48,  127 => 44,  121 => 42,  119 => 41,  110 => 35,  105 => 33,  101 => 32,  97 => 31,  89 => 27,  83 => 22,  81 => 21,  77 => 19,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Events/event_scheduler/event_scheduler.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Events/event_scheduler/event_scheduler.twig");
    }
}
