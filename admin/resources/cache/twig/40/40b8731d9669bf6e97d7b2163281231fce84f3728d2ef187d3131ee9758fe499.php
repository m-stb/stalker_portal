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

/* default/Statistics/stat_video/stat_video.twig */
class __TwigTemplate_23704cdab4527332b4117d0fb025e1c665a3056371368aad4e0e84e6febe44aa extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Statistics/stat_video/stat_video.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Statistics/stat_video/stat_video.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Statistics") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("movie statistics"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Statistics/stat_video/stat_video.twig", 10)->display($context);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Statistics/stat_video/stat_video.js.twig"), "default/Statistics/stat_video/stat_video.twig", 20)->display($context);
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
        echo $context["main_macro"]->getget_filter_button_bar("stat_to", "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allVideoStat", [], "array"));
        echo "
                ";
        // line 31
        if (((($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "any", false, true), "stat_to", [], "any", true, true)) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", []), "stat_to", []) != "genre")) ||  !$this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true))) {
            // line 32
            echo "                ";
            echo $context["main_macro"]->getget_datepicker_double_input();
            echo "
                ";
        }
        // line 34
        echo "            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 39
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 40
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 42
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"\">
                            <div class=\"\">
                                <div class=\"dataTables_processing\"></div>
                                <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                                    ";
        // line 48
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 49
            echo "                                        ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                    ";
        }
        // line 51
        echo "                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
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
        return "default/Statistics/stat_video/stat_video.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  135 => 49,  133 => 48,  125 => 42,  119 => 40,  117 => 39,  110 => 34,  104 => 32,  102 => 31,  98 => 30,  93 => 27,  90 => 26,  84 => 21,  82 => 20,  77 => 18,  74 => 17,  71 => 16,  64 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Statistics/stat_video/stat_video.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Statistics/stat_video/stat_video.twig");
    }
}
