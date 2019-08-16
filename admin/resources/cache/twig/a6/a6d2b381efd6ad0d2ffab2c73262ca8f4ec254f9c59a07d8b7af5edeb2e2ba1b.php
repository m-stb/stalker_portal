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

/* default/Tariffs/subscribe_log/subscribe_log.twig */
class __TwigTemplate_d27555fbfeaa8899237cf87c30ae1ac092898d7c85f3306385a877cb071a7844 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Tariffs/subscribe_log/subscribe_log.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Tariffs/subscribe_log/subscribe_log.twig", 2)->unwrap();
        // line 4
        $context["title"] = ($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Subscribe log") . (($this->getAttribute(($context["app"] ?? null), "currentUser", [], "any", true, true)) ? (((((((": " . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Log of user")) . " ") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "currentUser", []), "name", [])) . " (") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "currentUser", []), "mac", [])) . ")")) : ("")));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Tariffs/subscribe_log/subscribe_log.twig", 10)->display($context);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Tariffs/subscribe_log/subscribe_log.js.twig"), "default/Tariffs/subscribe_log/subscribe_log.twig", 20)->display($context);
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
        echo $context["main_macro"]->getget_filter("state", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("State"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allPackageStates", [], "array"));
        echo "
                ";
        // line 31
        echo $context["main_macro"]->getget_filter("initiator", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Initiator"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allInitiatorRoles", [], "array"));
        echo "
                ";
        // line 32
        echo $context["main_macro"]->getget_filter("package", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Package name"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allPackageNames", [], "array"));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\" \">
                <div class=\"box\">
                    ";
        // line 39
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 40
            echo "                        ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 42
        echo "                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">
                            <div class=\"dataTables_processing\"></div>
                            <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                                ";
        // line 46
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 47
            echo "                                    ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                ";
        }
        // line 49
        echo "                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/Tariffs/subscribe_log/subscribe_log.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  132 => 47,  130 => 46,  124 => 42,  118 => 40,  116 => 39,  106 => 32,  102 => 31,  98 => 30,  93 => 27,  90 => 26,  84 => 21,  82 => 20,  77 => 18,  74 => 17,  71 => 16,  64 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Tariffs/subscribe_log/subscribe_log.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Tariffs/subscribe_log/subscribe_log.twig");
    }
}
