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

/* default/NewVideoClub/video_schedule/video_schedule.twig */
class __TwigTemplate_fd28de814ef558d94af88ff704526feba80c58ee2fd364770c47ec999439bfe8 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/NewVideoClub/video_schedule/video_schedule.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/NewVideoClub/video_schedule/video_schedule.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("schedule"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/NewVideoClub/video_schedule/video_schedule.twig", 10)->display($context);
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
        echo "/plugins/datatables/extensions/Select/js/dataTables.select.js\"></script>

    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/js/dataTables.buttons.js\"></script>
    <link  href=\"";
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/video_schedule/video_schedule.js.twig"), "default/NewVideoClub/video_schedule/video_schedule.twig", 25)->display($context);
        // line 26
        echo "    </script>

";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "
    <div id=\"iptv_list\">
        <div class=\"row filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"></div>
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

                        <div class=\"dt-buttons\">
                            <div class=\"dt-group-select-dropdown pull-left--\">
                                <a href=\"#\" class=\"dropdown-toggle btn-- dt-button\" data-toggle=\"dropdown\">
                                    <span><i class=\"fa \"></i>&nbsp;</span>
                                    <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu pull-left\">
                                    <li>
                                        <div id=\"select_none\">
                                            ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Undo selection"), "html", null, true);
        echo "
                                        </div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div id=\"select_all\">
                                            ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select all"), "html", null, true);
        echo "
                                        </div>
                                    </li>
                                    <li>
                                        <div id=\"select_inverse\">
                                            ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Inverse selection"), "html", null, true);
        echo "
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 74
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 75
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"), "\000");
            echo "
                            ";
        }
        // line 77
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
        return "default/NewVideoClub/video_schedule/video_schedule.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 77,  169 => 75,  167 => 74,  155 => 65,  147 => 60,  138 => 54,  124 => 42,  118 => 40,  116 => 39,  107 => 32,  104 => 31,  98 => 26,  96 => 25,  91 => 23,  88 => 22,  85 => 21,  78 => 18,  74 => 17,  69 => 15,  64 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_schedule/video_schedule.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_schedule/video_schedule.twig");
    }
}
