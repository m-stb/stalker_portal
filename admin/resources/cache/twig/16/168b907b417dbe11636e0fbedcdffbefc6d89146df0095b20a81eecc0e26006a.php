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

/* default/Users/users_consoles_report/users_consoles_report.twig */
class __TwigTemplate_87fadadc17bbf0929fbf9b1961466cc41a92f51aecdeadacfd7de7f5cb7cfffd extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Users/users_consoles_report/users_consoles_report.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Users/users_consoles_report/users_consoles_report.twig", 2)->unwrap();
        // line 4
        $context["title"] = ((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Users") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("STB statuses report ")) . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "now_time", []));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Users/users_consoles_report/users_consoles_report.twig", 10)->display($context);
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

        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/js/buttons.print.min.js\"></script>

        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 21
    public function block_footer($context, array $blocks = [])
    {
        // line 22
        echo "    
        ";
        // line 23
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 25
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Users/users_consoles_report/users_consoles_report.js.twig"), "default/Users/users_consoles_report/users_consoles_report.twig", 25)->display($context);
        // line 26
        echo "        </script>
        
";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "    <style type=\"text/css\">
        @media print{
            #datatable-1{
                max-width: 180mm;
            }
            #datatable-1 th, #datatable-1 td{
                max-width: 60mm;
            }
        }
    </style>
    <div id=\"iptv_list\">
        <div class=\"row row_no_padding\">
            <div class=\"box\">
\t\t\t\t\t";
        // line 45
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 46
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 47
        echo "\t
                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"\" id=\"table_container\">
                            <div class=\"dataTables_processing\"></div>
                            <table class=\"table dataTable table-hover table-datatable\" id=\"datatable-1\">
                                ";
        // line 53
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 54
            echo "                                    ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                ";
        }
        // line 56
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
        return "default/Users/users_consoles_report/users_consoles_report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 56,  140 => 54,  138 => 53,  130 => 47,  124 => 46,  122 => 45,  107 => 32,  104 => 31,  98 => 26,  96 => 25,  91 => 23,  88 => 22,  85 => 21,  78 => 18,  73 => 16,  69 => 15,  64 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/users_consoles_report/users_consoles_report.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/users_consoles_report/users_consoles_report.twig");
    }
}
