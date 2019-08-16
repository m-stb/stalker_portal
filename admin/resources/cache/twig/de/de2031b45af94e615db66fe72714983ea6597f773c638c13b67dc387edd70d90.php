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

/* default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig */
class __TwigTemplate_cd8b5021708edd6d57b27d2854853518ba4539919fcc4d97f8af4527f3c79317 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("moderators list"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "    
    ";
        // line 8
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
         ";
        // line 10
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/video_moderators_addresses/video_moderators_addresses.css"), "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig", 10)->display($context);
        // line 11
        echo "    </style>

";
    }

    // line 14
    public function block_footer_js($context, array $blocks = [])
    {
        // line 15
        echo "    
        ";
        // line 16
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 17
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig", 17)->display($context);
        // line 18
        echo "
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">
        
";
    }

    // line 23
    public function block_footer($context, array $blocks = [])
    {
        // line 24
        echo "    
        ";
        // line 25
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"./js/jquery.tmpl.min.js\" defer=\"\"></script>
        <script type=\"text/javascript\" defer>
            ";
        // line 28
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/video_moderators_addresses/video_moderators_addresses.js.twig"), "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig", 28)->display($context);
        // line 29
        echo "        </script>

";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "    <div id=\"iptv_list\">
        <div class=\"row filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-video-moderators\" id=\"add_video_moderator\" class=\"btn btn-action pull-right\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add moderator"), "html", null, true);
        echo "</a>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 56
        echo "            <div class=\"box\">
                ";
        // line 57
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 58
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 60
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 64
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 65
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 67
        echo "                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type=\"text/template\" id=\"modal_moderators_inner\">
        <div class=\"box-content\">
            <form id=\"form_\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-video-moderators\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\" col-xs-10 col-sm-8\">
                            <input id=\"form_id\" class=\"form-control own_field\" type=\"hidden\" name=\"id\" value=\"\${id}\">
                            <input id=\"form_name\" class=\"form-control own_field\" type=\"text\" name=\"name\" required=\"required\" value=\"\${name}\"
                                data-validation = \"required\"
                                data-validation-event = \"blur\" >
                            <div class=\"bg-danger\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("MAC address"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <div class=\" col-xs-10 col-sm-8\">
                            <input id=\"form_mac\" class=\"form-control own_field\" type=\"text\" name=\"mac\" required=\"required\" value=\"\${mac}\"
                                data-validation = \"required, custom, server\" 
                                data-validation-url = \"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-moderator-mac\"
                                data-validation-regexp = \"^([0-9a-fA-F]{2}:){5}[0-9a-fA-F]{2}\$\"
                                data-validation-error-msg-custom = \"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enter MAC-address according to the format"), "html", null, true);
        echo "\" >
                            <div class=\"bg-danger\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group form-group-checkbox\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch off advertising"), "html", null, true);
        echo "</label>
                    <div class=\" col-xs-10 col-sm-8\">
                        <div class=\" col-xs-10 col-sm-8\">
                            <div class=\"checkbox-inline\">
                                <label>
                                    <input id=\"form_disable_vclub_ad\" class=\"own_field\" type=\"checkbox\" name=\"disable_vclub_ad\" ";
        // line 111
        echo "{{if disable_vclub_ad}}";
        echo "checked=\"checked\"";
        echo "{{/if}}";
        echo " >
                                    <i class=\"fa fa-square-o small\"></i>
                                </label>
                            </div>
                            <div class=\"bg-danger\"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </script>

";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 111,  215 => 106,  206 => 100,  199 => 98,  191 => 93,  176 => 81,  169 => 79,  155 => 67,  149 => 65,  147 => 64,  141 => 60,  135 => 58,  133 => 57,  130 => 56,  119 => 38,  114 => 35,  111 => 34,  105 => 29,  103 => 28,  97 => 25,  94 => 24,  91 => 23,  84 => 20,  80 => 19,  77 => 18,  75 => 17,  71 => 16,  68 => 15,  65 => 14,  59 => 11,  57 => 10,  52 => 8,  49 => 7,  46 => 6,  42 => 1,  40 => 4,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.twig");
    }
}
