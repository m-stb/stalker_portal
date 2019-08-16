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

/* default/Events/events/events.twig */
class __TwigTemplate_11f6b487c4d4ff7d51ae330d083bf587698b30d1d30520963ad677d967793230 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Events/events/events.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Events/events/events.twig", 2)->unwrap();
        // line 4
        $context["title"] = "events";
        // line 5
        $context["title"] = ((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Events") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("list of events ")) . (($this->getAttribute(($context["app"] ?? null), "currentUser", [], "any", true, true)) ? (((((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("user") . " - ") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "currentUser", []), "name", [])) . "(") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "currentUser", []), "mac", [])) . ")")) : ("")));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_footer_js($context, array $blocks = [])
    {
        // line 9
        echo "    
        ";
        // line 10
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 11
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Events/events/events.twig", 11)->display($context);
        // line 12
        echo "
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        // line 18
        echo "    
        ";
        // line 19
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        ";
        // line 20
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/events_menu.twig"), "default/Events/events/events.twig", 20)->display($context);
        // line 21
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 23
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Events/events/events.js.twig"), "default/Events/events/events.twig", 23)->display($context);
        // line 24
        echo "        </script>
        
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        echo " 
    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 33
        echo $context["main_macro"]->getget_filter("event", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Event"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allEvent", [], "array"));
        echo "
                ";
        // line 34
        echo $context["main_macro"]->getget_filter("sended", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delivery status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "sendedStatus", [], "array"), 5, 9);
        echo "
                ";
        // line 35
        echo $context["main_macro"]->getget_filter("ended", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Receipt status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "receivingStatus", [], "array"), 5, 9);
        echo "

                <a id=\"add_events\" href=\"#\" class=\"btn btn-action pull-right no_context_menu\"><i class=\"fa fa-plus\"></i>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Create new event"), "html", null, true);
        echo "</a>

                ";
        // line 39
        if ($this->getAttribute(($context["app"] ?? null), "currentUser", [], "any", true, true)) {
            // line 40
            echo "                    <a id=\"clean_events\" href=\"#\" class=\"btn btn-action pull-right no_context_menu\" data-uid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "currentUser", []), "uid", []), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Clean"), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 42
            echo "                    <a id=\"clean_events\" href=\"#\" class=\"btn btn-action pull-right no_context_menu\" data-uid=\"all\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete all events from the list"), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Clean all"), "html", null, true);
            echo "</a>
                ";
        }
        // line 44
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 49
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 50
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 52
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 56
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 57
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 59
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
        return "default/Events/events/events.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  164 => 57,  162 => 56,  156 => 52,  150 => 50,  148 => 49,  141 => 44,  133 => 42,  125 => 40,  123 => 39,  118 => 37,  113 => 35,  109 => 34,  105 => 33,  97 => 29,  91 => 24,  89 => 23,  85 => 21,  83 => 20,  79 => 19,  76 => 18,  73 => 17,  66 => 14,  62 => 13,  59 => 12,  57 => 11,  53 => 10,  50 => 9,  47 => 8,  43 => 1,  41 => 5,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Events/events/events.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Events/events/events.twig");
    }
}
