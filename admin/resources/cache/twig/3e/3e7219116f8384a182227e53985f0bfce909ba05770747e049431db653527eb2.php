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

/* default/Settings/themes/themes.twig */
class __TwigTemplate_e03add76d5a998013697faefe8b18955f898f93b36813e23b8b95d161349b2b2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'footer' => [$this, 'block_footer'],
            'footer_js' => [$this, 'block_footer_js'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Settings/themes/themes.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Settings/themes/themes.twig", 2)->unwrap();
        // line 4
        $context["active"] = "settings";
        // line 5
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Settings") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("appearance"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        ";
        // line 11
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Settings/themes/themes.css"), "default/Settings/themes/themes.twig", 11)->display($context);
        // line 12
        echo "    </style>

";
    }

    // line 16
    public function block_footer($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    <script type=\"text/javascript\" defer>
       
        ";
        // line 21
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Settings/themes/themes.js.twig"), "default/Settings/themes/themes.twig", 21)->display($context);
        // line 22
        echo "
    </script>
";
    }

    // line 26
    public function block_footer_js($context, array $blocks = [])
    {
        // line 27
        echo "
    ";
        // line 28
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    ";
        // line 29
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Settings/themes/themes.twig", 29)->display($context);
        // line 30
        echo "    ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Settings/themes/themes.twig", 30)->display($context);
        // line 31
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/js/jquery.tmpl.min.js\" defer=\"\"></script>

    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
    <link  href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/fancybox/jquery.fancybox.js\"></script>

";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        // line 43
        echo "    <div id=\"iptv_list\">
        <div class=\"row\">
            <div class=\"box\">
                <h4 class=\"section-header\"><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Default theme"), "html", null, true);
        echo "</span></h4>
                <div class=\"box-content\">
                    <div class=\"col-sm-10\">
                        <form name=\"form\" method=\"post\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", [])), "html", null, true);
        echo "/set-current-theme\" class=\"form-horizontal has-validation-callback no-margin\" role=\"form\" id=\"form_\" novalidate=\"0\">

                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label text-right no-padding-left\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("MAG Set-Top Box"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-3 no-padding-left\">
                                    <select name=\"default\" id=\"theme_default\">
                                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allData", [], "array"));
        foreach ($context['_seq'] as $context["key"] => $context["theme"]) {
            // line 56
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", []), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($context["theme"], "default", [])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "type_name", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", []), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label text-right no-padding-left\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Other platforms"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-3 no-padding-left\">
                                    <select name=\"default_launcher\" id=\"theme_default_launcher\">
                                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allData", [], "array"));
        foreach ($context['_seq'] as $context["key"] => $context["theme"]) {
            if ( !("classic" == $this->getAttribute($context["theme"], "type", []))) {
                // line 67
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "alias", []), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["theme"], "default_launcher", [])) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "type_name", []), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", []), "html", null, true);
                echo "</option>
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label text-right no-padding-left\">&nbsp;</label>
                                <div class=\"col-md-3 no-padding-left\">
                                    <button class=\"btn btn-success\" >";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <h4 class=\"section-header\"><span>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit themes"), "html", null, true);
        echo "</span></h4>
                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <table class=\"table dataTable table-hover table-datatable compact\" id=\"datatable-1\">
                            ";
        // line 92
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 93
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 95
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 106
        echo "        <script type=\"text/template\" id=\"item_coll_operations\">
            <div class='col-xs-3 col-sm-8'>
                ";
        // line 108
        echo "{{if type!=='classic' }}";
        echo "
                    <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>
                        <i class='pull-right fa fa-cog'></i>
                    </a>
                    <ul class='dropdown-menu pull-right'>
                        <li>
                            <a href=\"";
        // line 114
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []);
        echo "/";
        echo $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []);
        echo "/themes-edit?id=\${id}\">
                                <span>";
        // line 115
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit");
        echo "</span>
                            </a>
                        </li>
                        <li>
                            <a class='main_ajax no_context_menu' href=\"";
        // line 119
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []);
        echo "/";
        echo $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []);
        echo "/themes-reset-to-default\" data-id=\"\${id}\">
                                <span>";
        // line 120
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Restore initial theme");
        echo "</span>
                            </a>
                        </li>
                    </ul>
                ";
        // line 124
        echo "{{/if}}";
        echo "
            </div>
        </script>

        <script type=\"text/template\" id=\"item_coll_devices\">
            <div>
                ";
        // line 130
        echo "{{each( index, value ) devices}}";
        echo "
                <div class=\"pull-left themes-list supported-devices device-\${value}\">
                    <img src=\"";
        // line 132
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []);
        echo "/img/launcherpreview/\${value}.png\">
                    ";
        // line 133
        echo "{{if type==='classic' }}";
        echo "
                    <span class=\"platform-name\">\${\$item.deviceTitles['mag']}</span>
                    ";
        // line 135
        echo "{{else}}";
        echo "
                    <span class=\"platform-name\">\${\$item.deviceTitles[value]}</span>
                    ";
        // line 137
        echo "{{/if}}";
        echo "
                </div>
                ";
        // line 139
        echo "{{/each}}";
        echo "
            </div>
        </script>

        <script type=\"text/template\" id=\"item_coll_name\">
            ";
        // line 144
        echo "{{if type==='classic' }}";
        echo "
                <span>\${name}</span>
            ";
        // line 146
        echo "{{else}}";
        echo "
                <a href='";
        // line 147
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []);
        echo "/";
        echo $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []);
        echo "/themes-edit?id=\${id}'>\${name}</a>
            ";
        // line 148
        echo "{{/if}}";
        echo "
        </script>

        <script type=\"text/template\" id=\"item_coll_type\">
            <span>\${type_name}</span>
        </script>

        <script type=\"text/template\" id=\"item_coll_preview\">
            <div class=\"fancybox\">
                ";
        // line 157
        echo "{{if type=='classic' }}";
        echo "
                    <div class=\"launcher-preview\">
                        <a class=\" classic-theme\" rel=\"theme_\${id}\" href=\"\${preview}\" title=\"\${name}\">
                            <img src=\"\${preview}\" alt=\"\"/>
                        </a>
                    </div>
                ";
        // line 163
        echo "{{else}}";
        echo "
                    <div class=\"launcher-preview fancybox-preview\" title=\"\${name}\">

                        ";
        // line 166
        echo "{{each( res, path ) bg }}";
        echo "
                        <div class=\"res-\${res}\">
                            <img id=\"launcher_bg_\${res}\" class=\"launcher-bg\" src=\"";
        // line 168
        echo "{{if path}}";
        echo "\${path}";
        echo "{{else}}";
        echo "\${original_bg[res]}";
        echo "{{/if}}";
        echo "\" alt=\"\"/>
                            ";
        // line 169
        echo "{{if logo && logo[res]}}";
        echo "
                            <img id=\"launcher_logo_\${res}\" class=\"launcher-logo align-\${logo.align}\" src=\"\${logo[res]}\" alt=\"\"/>
                            ";
        // line 171
        echo "{{/if}}";
        echo "
                        </div>
                        ";
        // line 173
        echo "{{/each}}";
        echo "
                        <img class=\"launcher-bg-screen\" src=\"\${preview}\" alt=\"\" title=\"\${name}\" />

                    </div>
                ";
        // line 177
        echo "{{/if}}";
        echo "
            </div>
        </script>
    ";
        // line 181
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/Settings/themes/themes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 181,  411 => 177,  404 => 173,  399 => 171,  394 => 169,  386 => 168,  381 => 166,  375 => 163,  366 => 157,  354 => 148,  348 => 147,  344 => 146,  339 => 144,  331 => 139,  326 => 137,  321 => 135,  316 => 133,  312 => 132,  307 => 130,  298 => 124,  291 => 120,  285 => 119,  278 => 115,  272 => 114,  263 => 108,  259 => 106,  247 => 95,  241 => 93,  239 => 92,  232 => 88,  217 => 76,  208 => 69,  190 => 67,  185 => 66,  179 => 63,  172 => 58,  155 => 56,  151 => 55,  145 => 52,  139 => 49,  133 => 46,  128 => 43,  125 => 42,  118 => 37,  113 => 35,  109 => 34,  104 => 32,  101 => 31,  98 => 30,  96 => 29,  92 => 28,  89 => 27,  86 => 26,  80 => 22,  78 => 21,  70 => 17,  67 => 16,  61 => 12,  59 => 11,  54 => 9,  51 => 8,  48 => 7,  44 => 1,  42 => 5,  40 => 4,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Settings/themes/themes.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Settings/themes/themes.twig");
    }
}
