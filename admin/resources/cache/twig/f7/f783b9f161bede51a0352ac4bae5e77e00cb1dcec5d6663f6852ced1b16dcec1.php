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

/* default/AudioClub/audio_albums/audio_albums.twig */
class __TwigTemplate_700c0bf98e6864e8eef30d391ae182854112b61fbe95f591e175a455b76dc8df extends \Twig\Template
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
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/layout.twig"), "default/AudioClub/audio_albums/audio_albums.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/AudioClub/audio_albums/audio_albums.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Audio club") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("albums list"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/AudioClub/audio_albums/audio_albums.twig", 10)->display($context);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/AudioClub/audio_albums/audio_albums.js.twig"), "default/AudioClub/audio_albums/audio_albums.twig", 20)->display($context);
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
        echo $context["main_macro"]->getget_filter("status_id", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allStatus", [], "array"), 2);
        echo "
                    ";
        // line 31
        echo $context["main_macro"]->getget_filter("year", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Year"), "name", "name", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allAudioYears", [], "array"), 2);
        echo "
                    ";
        // line 32
        echo $context["main_macro"]->getget_filter("country", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Country"), "name", "name", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allCountries", [], "array"), 3);
        echo "
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-audio-albums\" class=\"btn btn-action pull-right no_context_menu\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add album"), "html", null, true);
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


    <script type=\"text/template\" id=\"modal_del_body\">
        <div class=\"col-md-12\">
            <span class=\"col-md-12 txt-default\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Do you really want delete this album and all compositions?"), "html", null, true);
        echo "</span>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_del_buttons\">
        <div class=\"col-xs-12\">
            <a id=\"del_album_btn\" type=\"button\" class=\"main_ajax btn btn-danger col-sm-2 pull-right no_context_menu\" href='";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-audio-albums'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</a>
            <button type=\"reset\" class=\"btn btn-default col-sm-2 pull-right\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>
    
";
    }

    public function getTemplateName()
    {
        return "default/AudioClub/audio_albums/audio_albums.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 68,  168 => 67,  159 => 61,  144 => 48,  138 => 46,  136 => 45,  130 => 41,  124 => 39,  122 => 38,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  93 => 27,  90 => 26,  84 => 21,  82 => 20,  77 => 18,  74 => 17,  71 => 16,  64 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/AudioClub/audio_albums/audio_albums.twig", "/var/www/html/stalker_portal/admin/resources/views/default/AudioClub/audio_albums/audio_albums.twig");
    }
}
