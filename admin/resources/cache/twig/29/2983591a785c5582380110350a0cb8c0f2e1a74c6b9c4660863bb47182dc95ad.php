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

/* default/NewVideoClub/video_genres/video_genres.twig */
class __TwigTemplate_76beb80d3ea06d16dc4bc61c4cdfd93540ebab60c8f7fdf90b33033c09f0318b extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/NewVideoClub/video_genres/video_genres.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/NewVideoClub/video_genres/video_genres.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("genres list"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/NewVideoClub/video_genres/video_genres.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/NewVideoClub/video_genres/video_genres.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    // line 14
    public function block_footer($context, array $blocks = [])
    {
        // line 15
        echo "
        ";
        // line 16
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 18
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/video_genres/video_genres.js.twig"), "default/NewVideoClub/video_genres/video_genres.twig", 18)->display($context);
        // line 19
        echo "        </script>

        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "    <div id=\"iptv_list\">
        <div class=\"row filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 31
        echo $context["main_macro"]->getget_filter("category_id", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Category"), "id", "category_name", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allCategories", [], "array"), 2);
        echo "
                <a href=\"#\" class=\"btn btn-action pull-right no_context_menu\" id=\"add_video_genres\"><i class=\"fa fa-plus\"></i>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add genre"), "html", null, true);
        echo "</a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 38
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 39
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 41
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 45
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 46
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 48
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
        return "default/NewVideoClub/video_genres/video_genres.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 48,  130 => 46,  128 => 45,  122 => 41,  116 => 39,  114 => 38,  105 => 32,  101 => 31,  96 => 28,  93 => 27,  86 => 22,  82 => 21,  78 => 19,  76 => 18,  71 => 16,  68 => 15,  65 => 14,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_genres/video_genres.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_genres/video_genres.twig");
    }
}
