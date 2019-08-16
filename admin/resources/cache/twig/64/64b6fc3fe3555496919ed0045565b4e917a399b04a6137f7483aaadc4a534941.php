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

/* default/Karaoke/index/index.twig */
class __TwigTemplate_a04ff6514c7ab31cb5aedb523c1064172277388dc0f05e622a7e94a2ff226a9b extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Karaoke/index/index.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Karaoke/index/index.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Karaoke") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("karaoke list"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Karaoke/index/index.css"), "default/Karaoke/index/index.twig", 10)->display($context);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Karaoke/index/index.twig", 17)->display($context);
        // line 18
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Karaoke/index/index.twig", 18)->display($context);
        // line 19
        echo "
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

    // line 24
    public function block_footer($context, array $blocks = [])
    {
        // line 25
        echo "    
        ";
        // line 26
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 28
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Karaoke/index/index.js.twig"), "default/Karaoke/index/index.twig", 28)->display($context);
        // line 29
        echo "        </script>
        
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 38
        echo $context["main_macro"]->getget_filter("protocol", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Protocol"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allProtocols", [], "array"), 3);
        echo "
                ";
        // line 39
        echo $context["main_macro"]->getget_filter("status", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("State"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allStatus", [], "array"), 3);
        echo "
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-karaoke\" class=\"btn btn-action pull-right no_context_menu\" id=\"add_karaoke\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add composition"), "html", null, true);
        echo "</a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 46
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 47
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 49
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 53
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 54
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 56
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"modalbox_ad\">
        <div class=\"devoops-modal\">
            <div class=\"devoops-modal-header\">
                <div class=\"modal-header-name\">
                    <span></span>
                </div>
                <div class=\"box-icons\">
                    <a class=\"close-link\">
                        <i class=\"fa fa-times\"></i>
                    </a>
                </div>
            </div>
            <form class=\"form-horizontal\" role=\"form\" id=\"karaoke_form\" action=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-karaoke\">
                <div class=\"devoops-modal-inner\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <!-- track name -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label \">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <input type=\"hidden\" name=\"id\" class=\"own_fields\">
                                        <input type=\"text\" name=\"name\"  data-validation=\"required\" class='own_fields form-control'>
                                    </div>
                                </div>
                            </div>

                            <!-- singer -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label \">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Artist"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"text\" name=\"singer\"  data-validation=\"required\" class='form-control own_fields'>
                                    </div>
                                </div>
                            </div>

                            <!-- protocol -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label \">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Protocol"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <select  data-validation=required class=\"populate placeholder own_fields\" name=\"protocol\" id=\"s2_protocol\">
                                            ";
        // line 109
        if ($this->getAttribute(($context["app"] ?? null), "allProtocols", [], "any", true, true)) {
            // line 110
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allProtocols", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["s_item"]) {
                // line 111
                echo "                                                    ";
                if (($this->getAttribute($context["s_item"], "id", []) != "nfs")) {
                    // line 112
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s_item"], "id", []), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s_item"], "title", []), "html", null, true);
                    echo "</option>
                                                    ";
                }
                // line 114
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                            ";
        }
        // line 116
        echo "                                        </select>
                                    </div>
                                    <span class=\"help-inline col-xs-10 col-sm-10\">
                                        <span class=\"small txt-default\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Content delivery type: http or custom url. When selecting HTTP, the file will be stored on the server. A unique title will be generated, which you should then use to rename the file. Custom URL means that you are downloading the file from the network. In this case, you have to indicate a direct link to the file using the format: solution + url."), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>

                            <!-- URL -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label \">RTSP/HTTP URL<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"text\" name=\"rtsp_url\" class='form-control own_fields' data-validation = 'required, custom' data-validation-regexp = '^(\\w+\\s)?\\w+\\:\\/\\/.+\$' data-validation-error-msg-custom = \"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Invalid format links"), "html", null, true);
        echo "\">
                                    </div>
                                    <span class=\"help-inline col-xs-10 col-sm-10\">
                                        <span class=\"small txt-default\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Format solution + URL. Example fmpeg http://anon.nasa.net/download_135_720p.wmv"), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"devoops-modal-bottom\">
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                        <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/Karaoke/index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 142,  296 => 141,  284 => 132,  278 => 129,  265 => 119,  260 => 116,  257 => 115,  251 => 114,  243 => 112,  240 => 111,  235 => 110,  233 => 109,  226 => 105,  213 => 95,  199 => 84,  188 => 78,  164 => 56,  158 => 54,  156 => 53,  150 => 49,  144 => 47,  142 => 46,  129 => 40,  125 => 39,  121 => 38,  116 => 35,  113 => 34,  107 => 29,  105 => 28,  100 => 26,  97 => 25,  94 => 24,  87 => 21,  83 => 20,  80 => 19,  77 => 18,  75 => 17,  71 => 16,  68 => 15,  65 => 14,  59 => 11,  57 => 10,  52 => 8,  49 => 7,  46 => 6,  42 => 1,  40 => 4,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Karaoke/index/index.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Karaoke/index/index.twig");
    }
}
