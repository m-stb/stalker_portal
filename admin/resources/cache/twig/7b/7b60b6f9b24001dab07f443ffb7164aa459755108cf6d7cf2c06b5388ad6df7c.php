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

/* default/NewVideoClub/video_logs/video_logs.twig */
class __TwigTemplate_be87549847237b891975f0dae645b6ee39cd2e29a3df9d59f438721bb616917b extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/NewVideoClub/video_logs/video_logs.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/NewVideoClub/video_logs/video_logs.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Activity log"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/NewVideoClub/video_logs/video_logs.twig", 10)->display($context);
        // line 11
        echo "
";
    }

    // line 13
    public function block_footer($context, array $blocks = [])
    {
        // line 14
        echo "    
        ";
        // line 15
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 17
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/video_logs/video_logs.js.twig"), "default/NewVideoClub/video_logs/video_logs.twig", 17)->display($context);
        // line 18
        echo "        </script>
        
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

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "    <div id=\"iptv_list\">
        <div class=\"row row_no_padding\">
            <div class=\"box\">
                ";
        // line 30
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 31
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 33
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table dataTable no-footer table-hover table-datatable\"  id=\"datatable-1\">
                            ";
        // line 37
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 38
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 40
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
        return "default/NewVideoClub/video_logs/video_logs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  114 => 38,  112 => 37,  106 => 33,  100 => 31,  98 => 30,  93 => 27,  90 => 26,  83 => 21,  79 => 20,  75 => 18,  73 => 17,  68 => 15,  65 => 14,  62 => 13,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_logs/video_logs.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_logs/video_logs.twig");
    }
}
