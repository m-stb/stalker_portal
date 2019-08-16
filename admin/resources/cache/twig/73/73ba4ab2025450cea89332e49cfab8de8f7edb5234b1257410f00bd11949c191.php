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

/* default/Statistics/stat_abonents/stat_abonents.twig */
class __TwigTemplate_45c2e99374d04b4423340d6432675b98a995018c2546b50d5fafee1808e791d8 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Statistics/stat_abonents/stat_abonents.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Statistics/stat_abonents/stat_abonents.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Statistics") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Subscribers statistic"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Statistics/stat_abonents/stat_abonents.twig", 10)->display($context);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Statistics/stat_abonents/stat_abonents.js.twig"), "default/Statistics/stat_abonents/stat_abonents.twig", 20)->display($context);
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
        echo $context["main_macro"]->getget_filter_button_bar("abon_to", "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allAbonentStat", [], "array"));
        echo "
                ";
        // line 31
        echo $context["main_macro"]->getget_datepicker_double_input();
        echo "
            </div>
        </div>

        <div class=\"row\">
            ";
        // line 36
        if (($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), "abon_to", [], "any", true, true))) {
            // line 37
            echo "                <div class=\"col-xs-10 col-sm-8 col-sm-offset-2 box-name text-center bg-warning\">
                    <span class=\"text_black\">
                        ";
            // line 39
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "abon_to", [], "array") == "anec")) {
                // line 40
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("View is a review of at least one joke"), "html", null, true);
                echo "
                        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 41
($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "abon_to", [], "array") == "video")) {
                // line 42
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("View is a playback of more than 70%% of movie length"), "html", null, true);
                echo "
                        ";
            } else {
                // line 44
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("View is an uninterrupted playback of channel for more than 30 minutes"), "html", null, true);
                echo "
                        ";
            }
            // line 46
            echo "                    </span>
                </div>
            ";
        }
        // line 49
        echo "        </div>

        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 53
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 54
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 56
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 59
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 60
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 62
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
        return "default/Statistics/stat_abonents/stat_abonents.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 62,  163 => 60,  161 => 59,  156 => 56,  150 => 54,  148 => 53,  142 => 49,  137 => 46,  131 => 44,  125 => 42,  123 => 41,  118 => 40,  116 => 39,  112 => 37,  110 => 36,  102 => 31,  98 => 30,  93 => 27,  90 => 26,  84 => 21,  82 => 20,  77 => 18,  74 => 17,  71 => 16,  64 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Statistics/stat_abonents/stat_abonents.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Statistics/stat_abonents/stat_abonents.twig");
    }
}
