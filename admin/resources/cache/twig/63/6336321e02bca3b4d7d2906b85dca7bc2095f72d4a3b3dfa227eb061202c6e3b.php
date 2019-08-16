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

/* default/TvChannels/m3u_import/m3u_import.twig */
class __TwigTemplate_bc2ec52d088a720852b00a252b96766c7a9fdc0fa651f8026821dc29b62100ac extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/TvChannels/m3u_import/m3u_import.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/TvChannels/m3u_import/m3u_import.twig", 2)->unwrap();
        // line 4
        $context["title"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("IPTV channels") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Import from m3u")));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/TvChannels/m3u_import/m3u_import.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/file-uploader-scripts.twig"), "default/TvChannels/m3u_import/m3u_import.twig", 11)->display($context);
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
        <script type=\"text/javascript\" src=\"./js/jquery.tmpl.min.js\" defer=\"\"></script>
        <script type=\"text/javascript\" defer>
           
            ";
        // line 20
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/TvChannels/m3u_import/m3u_import.js.twig"), "default/TvChannels/m3u_import/m3u_import.twig", 20)->display($context);
        // line 21
        echo "
        </script>
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "    <div id=\"iptv_list\">
        <div class=\"row\">
            <div class=\"box\">
                <div class=\"box-content\" id=\"add_channel_base\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <div class=\"form-group\">
                            <div class=\"col-xs-5 col-sm-5\">
                                <div id=\"fileupload\" class=\"pull-left\">
                                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                    <div class=\"fileupload-buttonbar\">
                                        <div class=\"fileupload-buttons\">
                                            <!-- The fileinput-button span is used to style the file input field as button -->
                                            <span class=\"fileinput-button btn btn-action\">
                                                <span><i class=\"fa fa-plus\"></i>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add a file"), "html", null, true);
        echo "</span>
                                                <input type=\"file\" name=\"files\" style=\"opacity: 0;\">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-5 col-sm-5 pull-right\">
                                <button id=\"save_channels\"  class=\"btn btn-action hidden pull-right\"><i class=\"fa fa-check\"></i>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save channels"), "html", null, true);
        echo "</button>
                                <button id=\"clean_channels\" class=\"btn btn-action hidden pull-right\"><i class=\"fa fa-close\"></i>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Clean all"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\" style=\"display: none;\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-content\">
                        <h4 class=\"text-danger center\" id=\"warning_message\"></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding\" id=\"channels_container\">

            </div>
        </div>
    </div>

    
    <script type=\"text/template\" id=\"channel-template\" >
        <div class=\"box\" style=\"display: none;\" id=\"channel_item_\${item_number}\">
            <div class=\"box-content\">
                <form id=\"channel_form_\${item_number}\" class=\"channel_form\" enctype=\"multipart/form-data\">
                    <div class=\"row no-margin\">
                        
                        <div class=\"m3u-logo-box\">
                            <div class=\"form-group m3u_logo_container\">
                                <img src=\"\${logo}\" alt=\"\">
                                <div class=\"clear_m3u_logo\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete logo"), "html", null, true);
        echo "\"></div>
                                
                                <div id=\"m3u_logo_\${item_number}\" class=\"fileupload\" data-file_num=\"\${item_number}\">
                                    <input class=\"own_field\" id=\"file_logo_\${item_number}\" type=\"hidden\" name=\"logo\" value=\"\${logo}\">
                                    <input type=\"file\" name=\"files\" style=\"opacity: 0;\" multiple=\"\">
                                </div>
                                
                            </div>
                            <span class=\"small txt-default\">\${logo_name}</span>
                        </div>

                        <div class=\"container-box\">

                        <div class=\"col-xs-1 no-padding-right no-padding-left\">
                            <div class=\"form-group\">
                                <span class=\"help-inline\">
                                    <span class=\" txt-default\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel number"), "html", null, true);
        echo "</span>
                                </span>
                                <div class=\"\">
                                    <input type=\"text\" name=\"number\" class=\"form-control own_field\" data-validation=\"required\"  value=\"\${number}\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-5 no-padding-right no-padding-left\">
                            <div class=\"col-xs-6 no-padding-right\">
                                <div class=\"form-group\">
                                    <span class=\"help-inline\">
                                        <span class=\" txt-default\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel name"), "html", null, true);
        echo "</span>
                                    </span>
                                    <div class=\"\">
                                        <input type=\"text\" class=\"form-control own_field\" name=\"name\" data-validation=\"required\" value=\"\${name}\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6 no-padding-right\">
                                <div class=\"form-group\">
                                    <span class=\"help-inline\">
                                        <span class=\" txt-default\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Streaming links"), "html", null, true);
        echo "</span>
                                    </span>
                                    <div class=\"\">
                                        <input type=\"text\" class=\"form-control own_field\" name=\"cmd\" data-validation=\"required\" value=\"\${cmd}\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-3 no-padding-right no-padding-left\">
                            <div class=\"col-xs-7 no-padding-right\">
                                <div class=\"form-group\">
                                    <span class=\"help-inline\">
                                        <span class=\" txt-default\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Genre"), "html", null, true);
        echo "</span>
                                        ";
        // line 135
        echo "{{if genre}}";
        echo "
                                        <span class=\" txt-default\">(";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("from file"), "html", null, true);
        echo ": \"\${genre}\")</span>
                                        ";
        // line 137
        echo "{{/if}}";
        echo "
                                    </span>
                                    <select class=\"populate placeholder own_field\" name=\"tv_genre_id\" data-validation=\"required\" id=\"channel_s2_\${item_number}\">
                                        ";
        // line 140
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allGenres", [], "array")) {
            // line 141
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allGenres", []));
            foreach ($context['_seq'] as $context["_key"] => $context["s_item"]) {
                // line 142
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s_item"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s_item"], "title", []), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                                        ";
        }
        // line 145
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-xs-5 no-padding-right\">
                                <div class=\"form-group\">
                                    <span class=\"help-inline\">
                                        <span class=\" txt-default\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("XMLTV ID"), "html", null, true);
        echo "</span>
                                    </span>
                                    <div class=\"\">
                                        <input type=\"text\" class=\"form-control own_field\" name=\"xmltv_id\" value=\"\${xmltv_id}\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-3 no-padding-left no-padding-right\">
                            <div class=\"col-xs-6 no-padding-right\">
                                <div class=\"form-group\">
                                    <span class=\"help-inline\">
                                        <span class=\" txt-default\">";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Basic channel"), "html", null, true);
        echo "</span>
                                    </span>
                                    <div class=\"checkbox\">
                                        <label>
                                            <input type=\"checkbox\" value=\"1\" name=\"base_ch\" class=\"own_field\">
                                            <i class=\"fa fa-square-o \"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6 no-padding-right\">
                                <div class=\"form-group\">
                                    <span class=\"help-inline\">
                                        <span class=\" txt-default\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Age restriction"), "html", null, true);
        echo "</span>
                                    </span>
                                    <div class=\"checkbox\">
                                        <label>
                                            <input type=\"checkbox\" value=\"1\" name=\"censored\" class=\"own_field\">
                                            <i class=\"fa fa-square-o \"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                        
                            ";
        // line 191
        echo "                            <div class=\"m3u_item_buttons\">
                                <div class=\"form-group col-xs-6 no-padding-right no-padding-left\">
                                    <button class=\"btn btn-default\" type=\"button\" data-action=\"delete\"><i class=\"fa fa-times\"></i></button>
                                </div>
                                <div class=\"form-group col-xs-6 no-padding-right no-padding-left\">
                                    <button class=\"btn btn-success\" type=\"submit\"><i class=\"fa fa-check\"></i></button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </script>

";
    }

    public function getTemplateName()
    {
        return "default/TvChannels/m3u_import/m3u_import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 191,  297 => 176,  281 => 163,  266 => 151,  258 => 145,  255 => 144,  244 => 142,  239 => 141,  237 => 140,  231 => 137,  227 => 136,  223 => 135,  219 => 134,  204 => 122,  191 => 112,  177 => 101,  158 => 85,  121 => 51,  117 => 50,  104 => 40,  89 => 27,  86 => 26,  80 => 21,  78 => 20,  71 => 16,  68 => 15,  65 => 14,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/m3u_import/m3u_import.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/m3u_import/m3u_import.twig");
    }
}
