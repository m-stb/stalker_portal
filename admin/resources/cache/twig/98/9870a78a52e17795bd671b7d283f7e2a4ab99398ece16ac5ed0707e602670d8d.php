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

/* default/Tasks/tasks_report/tasks_report.twig */
class __TwigTemplate_19682c20d9a64f93d34ae01a060502f8dca56eb6a062d44e803fb01576796862 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Tasks/tasks_report/tasks_report.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Tasks/tasks_report/tasks_report.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tasks") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Report"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Tasks/tasks_report/tasks_report.twig", 10)->display($context);
        // line 11
        echo "
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 16
    public function block_footer($context, array $blocks = [])
    {
        // line 17
        echo "    
        ";
        // line 18
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 20
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Tasks/tasks_report/tasks_report.js.twig"), "default/Tasks/tasks_report/tasks_report.twig", 20)->display($context);
        // line 21
        echo "        </script>
        
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 30
        echo $context["main_macro"]->getget_filter("state", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("State"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskState", [], "array"), 2, 8);
        echo "
                ";
        // line 31
        echo $context["main_macro"]->getget_filter("task_type", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Type"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "taskType", [], "array"), 2, 8, 1);
        echo "
                ";
        // line 32
        echo $context["main_macro"]->getget_filter("video_quality", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Quality"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoQuality", [], "array"), 2, 8);
        echo "
                <div class=\"col-xs-6 col-sm-10 col-md-6 col-lg-5 filter no-padding\" data-tvfilter=\"time_period\">
                    <div class=\"col-sm-1 tfilter\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Closed"), "html", null, true);
        echo ":
                    </div>
                    <div class=\"col-sm-3 filter no-padding leftbordercircle\" data-tvfilter=\"time_period\">
                        <input class=\"col-xs-12 col-sm-12 filter\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("from"), "html", null, true);
        echo "\" type=\"text\" id=\"datepicker_from\" name=\"interval_from\" value=\"";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), "interval_from", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "interval_from", [], "array"), "html", null, true);
        }
        echo "\">
                    </div>
                    <div class=\"col-sm-3 filter no-padding\" data-tvfilter=\"time_period\">
                        <input class=\"col-xs-12 col-sm-12 filter\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("to"), "html", null, true);
        echo "\" type=\"text\" id=\"datepicker_to\" name=\"interval_to\" value=\"";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), "interval_to", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "interval_to", [], "array"), "html", null, true);
        }
        echo "\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-10 col-sm-8 col-sm-offset-2 box-name text-center bg-warning\">
                <span class=\"text_black\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Report is formed due to done and rejected tasks"), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 52
        if ($this->getAttribute(($context["app"] ?? null), "allVideoDuration", [], "any", true, true)) {
            // line 53
            echo "                <div class=\" text-center\" style=\"z-index: 100;\">
                    <h4 id=\"videoduration\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Summary length, min"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allVideoDuration", [], "array"), "html", null, true);
            echo "</h4>
                </div>
            ";
        }
        // line 57
        echo "        </div>
        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 60
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 61
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 63
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 66
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 67
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 69
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
        return "default/Tasks/tasks_report/tasks_report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 69,  182 => 67,  180 => 66,  175 => 63,  169 => 61,  167 => 60,  162 => 57,  154 => 54,  151 => 53,  149 => 52,  142 => 48,  128 => 41,  118 => 38,  112 => 35,  106 => 32,  102 => 31,  98 => 30,  93 => 27,  90 => 26,  84 => 21,  82 => 20,  77 => 18,  74 => 17,  71 => 16,  64 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Tasks/tasks_report/tasks_report.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Tasks/tasks_report/tasks_report.twig");
    }
}
