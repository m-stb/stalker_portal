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

/* default/TvChannels/add_channel/add_channel.twig */
class __TwigTemplate_a2701c0934d8c81f267460d5986966506692d0caa390c7a5ceb4a292f1ff721d extends \Twig\Template
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
        // line 2
        return $this->loadTemplate($this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig")), "default/TvChannels/add_channel/add_channel.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["main_macro"] = $this->loadTemplate($this->env->getExtension('Lib\EmptyTranslationExtension')->trans(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig")), "default/TvChannels/add_channel/add_channel.twig", 3)->unwrap();
        // line 5
        $context["title"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("IPTV channels") . ": ") . (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "channelEdit", [])) ? ($this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("edit channel \"") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "editChannelName", [])) . "\""))) : ($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("add")))));
        // line 6
        $context["active_alias"] = "iptv-list";
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_footer_js($context, array $blocks = [])
    {
        // line 10
        echo "    
        ";
        // line 11
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 12
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/TvChannels/add_channel/add_channel.twig", 12)->display($context);
        // line 13
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/file-uploader-scripts.twig"), "default/TvChannels/add_channel/add_channel.twig", 13)->display($context);
        // line 14
        echo "
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
        <script type=\"text/javascript\" src=\"./js/jquery.tmpl.min.js\" defer=\"\"></script>
        <script type=\"text/javascript\" src=\"./plugins/scrollTo/jquery.scrollTo.min.js\" defer=\"\"></script>
        <script type=\"text/javascript\" defer=\"\">
           
            ";
        // line 23
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/TvChannels/add_channel/add_channel.js.twig"), "default/TvChannels/add_channel/add_channel.twig", 23)->display($context);
        // line 24
        echo "
        </script>
        
";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "    
    ";
        // line 32
        if (($this->getAttribute(($context["app"] ?? null), "not_found", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "not_found", []))) {
            // line 33
            echo "    <div class=\"row \">
        <div class=\"box\">
            <div class=\"box-content\">
                <h3 class=\"text-danger\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Requested channel not found"), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add a channel"), "html", null, true);
            echo "?</h3>
            </div>
        </div>
    </div>
    ";
        }
        // line 41
        echo "
    <div id=\"add_channel\">
        ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", [])) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "action_alias", []))), "attr" => ["class" => "form-horizontal", "role" => "form", "id" => "form_"]]);
        echo "
        <div class=\"bg-danger\">
            <div class=\"bg-danger\">
                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                <h4 class=\"section-header\"><span>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Basic"), "html", null, true);
        echo "</span></h4>
                ";
        // line 68
        echo "                <div class=\"box-content\" id=\"add_channel_base\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel number"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "id", []), 'widget');
        echo "
                                ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "number", []), 'widget', ["attr" => ["class" => "form-control ignore", "data-validation" => "required,number", "data-validation-allowing" => "range[1;99999]"]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "number", []), 'errors');
        echo "
                                    ";
        // line 77
        if (($this->getAttribute(($context["app"] ?? null), "error_local", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "error_local", [], "array", false, true), "number", [], "any", true, true))) {
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "error_local", [], "array"), "number", [], "array"), "html", null, true);
            echo "</span> ";
        }
        // line 78
        echo "                                </div>
                            </div>
                            ";
        // line 85
        echo "                            <i class=\"i-hint\"
                                title=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Number in channel list must contain only numbers from 1 to 999"), "html", null, true);
        echo "\" >
                                <img class=\"i-hint-sign\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                            </i>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "name", []), 'widget', ["attr" => ["class" => "form-control", "data-validation" => "required"]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "name", []), 'errors');
        echo "
                                    ";
        // line 98
        if (($this->getAttribute(($context["app"] ?? null), "error_local", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "error_local", [], "array", false, true), "name", [], "any", true, true))) {
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "error_local", [], "array"), "name", [], "array"), "html", null, true);
            echo "</span> ";
        }
        // line 99
        echo "                                </div>
                            </div>
                            <i class=\"i-hint\"
                                title=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can use Latin letters, digits and symbols from the list ! @ # \$ % ^ & * ( ) _ - + : ; , ."), "html", null, true);
        echo "\" >
                                <img class=\"i-hint-sign\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                            </i>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Genre"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tv_genre_id", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tv_genre_id", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Languages"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "languages", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "languages", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"no-padding-left col-xs-10 col-sm-6\">
                                <button id=\"lang_autocheck\" class=\"btn btn-success ";
        // line 128
        if (( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "form", [], "array", false, true), "cmd", [], "any", true, true) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cmd", [], "array")) < 1))) {
            echo "disabled";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Autofill"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Volume correction"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-3\">
                                ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "volume_correction", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "volume_correction", []), 'errors');
        echo "
                                </div>
                            </div>
                            <i class=\"i-hint\"
                                title=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sets compulsory volume level for this channel"), "html", null, true);
        echo "\" >
                                <img class=\"i-hint-sign\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                            </i>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel logo"), "html", null, true);
        echo ":</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\"pull-left\" id=\"cover_container\">
                                ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "logo", []), 'widget');
        echo "
                                <img class=\"channel-logo\" src=\"";
        // line 152
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "logo", []), "vars", []), "value", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "baseHost", []), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "logo", []), "vars", []), "value", []), "html", null, true);
            echo "?ver=";
            echo twig_escape_filter($this->env, twig_random($this->env, 100000), "html", null, true);
        }
        echo "\" alt=\"\" style=\"max-width: 100%;\">
                                <div class=\"col-xs-2 col-sm-1 no-padding\" id=\"deletelogolink\">
                                    <a class=\"no_context_menu\" href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/delete-logo\" data-logo_id=\"";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "id", []), "vars", []), "value", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "id", []), "vars", []), "value", []), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete logo"), "html", null, true);
        echo "</a>
                                </div>
                            </div>

                            <!-- The file upload form used as target for the file upload widget -->
                            <div id=\"fileupload\" class=\"clear-left pull-left\">
                                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                <div class=\"fileupload-buttonbar\">
                                    <div class=\"fileupload-buttons\">
                                        <!-- The fileinput-button span is used to style the file input field as button -->
                                        <span class=\"fileinput-button btn btn-success\">
                                            <span>";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add a picture"), "html", null, true);
        echo "</span>
                                            <input type=\"file\" name=\"files\" style=\"opacity: 0;\">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Recommended format – png, no smaller than 96*96 pixels, maximum size of the file – 1 MB."), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                    ";
        // line 176
        if (($this->getAttribute(($context["app"] ?? null), "enable_tariff_plans", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enable_tariff_plans", [], "array"))) {
            // line 177
            echo "                    <div class=\"form-group form-group-checkbox\">
                        <label class=\"col-sm-2 control-label\">";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Basic channel"), "html", null, true);
            echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-10\">
                                <div class=\"checkbox-inline\">
                                    <label>
                                        ";
            // line 183
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "base_ch", []), 'widget');
            echo "
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The base channel is available for user by default."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not base channel may be available by subscription in user profile."), "html", null, true);
            echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/img/field-hint-sign.svg\" />
                                </i>
                                <div class=\"bg-danger\">
                                    ";
            // line 192
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "base_ch", []), 'errors');
            echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 198
        echo "                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Streaming links"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <table class=\"table  table-hover\" id=\"cmd_data\" data-validation = 'cmd_validate'>
                                    <thead>
                                    <tr>
                                        <th>";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Adress"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Priority"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Temporary HTTP–link"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Monitoring"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Monitoring status"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Loading balance"), "html", null, true);
        echo "</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Start: list_row -->
                                    ";
        // line 216
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "form", [], "array", false, true), "cmd", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cmd", [], "array")) >= 1))) {
            // line 217
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cmd", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 218
                echo "                                            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "form", [], "array", false, true), "cmd", [], "array", false, true), $context["key"], [], "array", false, true), "vars", [], "any", false, true), "value", [], "any", true, true)) {
                    // line 219
                    echo "                                                <tr>
                                                    <td>
                                                        ";
                    // line 221
                    echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "cmd", [], "array"), "cmd", $context["key"], 1);
                    echo "
                                                        ";
                    // line 222
                    echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "user_agent_filter", [], "array"), "user_agent_filter", $context["key"], 0);
                    echo "
                                                    </td>
                                                    <td>
                                                        ";
                    // line 225
                    echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "priority", [], "array"), "priority", $context["key"], 1);
                    echo "
                                                    </td>
                                                    <td>
                                                        <div class=\"col-sm-12\">
                                                            ";
                    // line 229
                    echo $context["main_macro"]->getinput_checkbox($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "use_http_tmp_link", [], "array"), "use_http_tmp_link", $context["key"]);
                    echo "
                                                            ";
                    // line 230
                    if (($this->getAttribute(($context["app"] ?? null), "httpTmpLink", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "httpTmpLink", [], "array"))) {
                        // line 231
                        echo "                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "httpTmpLink", [], "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 232
                            echo "                                                                    ";
                            if ( !($this->getAttribute($context["row"], "value", []) == "use_http_tmp_link")) {
                                // line 233
                                echo "                                                                        ";
                                echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), $this->getAttribute($context["row"], "value", []), [], "array"), $this->getAttribute($context["row"], "value", []), $context["key"], 0);
                                echo "
                                                                    ";
                            }
                            // line 235
                            echo "                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 236
                        echo "                                                            ";
                    }
                    // line 237
                    echo "                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"col-sm-12\">
                                                            ";
                    // line 241
                    echo $context["main_macro"]->getinput_checkbox($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "enable_monitoring", [], "array"), "enable_monitoring", $context["key"]);
                    echo "
                                                            ";
                    // line 242
                    echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "enable_balancer_monitoring", [], "array"), "enable_balancer_monitoring", $context["key"], 0);
                    echo "
                                                            ";
                    // line 243
                    echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "monitoring_url", [], "array"), "monitoring_url", $context["key"], 0);
                    echo "
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"col-sm-12\">
                                                            ";
                    // line 248
                    if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "form", [], "array", false, true), "monitoring_status", [], "array", false, true), $context["key"], [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "form", [], "array", false, true), "enable_monitoring", [], "array", false, true), $context["key"], [], "any", true, true))) {
                        // line 249
                        echo "                                                                ";
                        echo $context["main_macro"]->getset_monitoring_status($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "monitoring_status", [], "array"), $context["key"], $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "enable_monitoring", [], "array"), $context["key"], [], "array"), "vars", []), "data", []));
                        echo "
                                                            ";
                    } else {
                        // line 251
                        echo "                                                                <div>
                                                                    <label> - </label>
                                                                </div>
                                                            ";
                    }
                    // line 255
                    echo "                                                            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "form", [], "array", false, true), "monitoring_status", [], "array", false, true), $context["key"], [], "any", true, true)) {
                        // line 256
                        echo "                                                                ";
                        echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "monitoring_status", [], "array"), "monitoring_status", $context["key"], 0);
                        echo "
                                                            ";
                    }
                    // line 258
                    echo "                                                            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "form", [], "array", false, true), "enable_monitoring", [], "array", false, true), $context["key"], [], "any", true, true)) {
                        // line 259
                        echo "                                                                ";
                        echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "enable_monitoring", [], "array"), "enable_monitoring", $context["key"], 0);
                        echo "
                                                            ";
                    }
                    // line 261
                    echo "                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"col-sm-12\">
                                                            ";
                    // line 265
                    echo $context["main_macro"]->getinput_checkbox($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "use_load_balancing", [], "array"), "use_load_balancing", $context["key"]);
                    echo "
                                                            ";
                    // line 266
                    echo $context["main_macro"]->getinput_hidden($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "stream_server", [], "array"), "stream_server", $context["key"], 0);
                    echo "
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"col-xs-3 col-sm-8\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                                                <i class=\"pull-right fa fa-cog\"></i>
                                                            </a>
                                                            <ul class=\"dropdown-menu pull-right\">
                                                                <li>
                                                                    <a href=\"#\" class=\"channel_url_change_data\">
                                                                        <span>";
                    // line 277
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\" class=\"channel_url_remove_data\">
                                                                        <span>";
                    // line 282
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
                }
                // line 290
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "                                    ";
        }
        // line 292
        echo "                                    <tr>
                                        <td>
                                            <label data-field=\"form[cmd]\"></label>
                                            <input type=\"hidden\" disabled=\"disabled\" name=\"form[cmd][0]\" id=\"form_cmd_0\">
                                            <input type=\"hidden\" disabled=\"disabled\" name=\"form[user_agent_filter][0]\" id=\"form_user_agent_filter_0\">
                                        </td>
                                        <td>
                                            <label data-field=\"form[priority]\"></label>
                                            <input type=\"hidden\" disabled=\"disabled\" name=\"form[priority][0]\" id=\"form_priority_0\">
                                        </td>
                                        <td>
                                            <div class=\"col-sm-12\">
                                                <div class=\"toggle-switch toggle-switch-success\">
                                                    <label>
                                                        <input type=\"checkbox\" value=\"1\" disabled=\"disabled\" name=\"form[use_http_tmp_link][0]\" id=\"form_use_http_tmp_link_0\">
                                                        <div class=\"toggle-switch-inner\"></div>
                                                        <div class=\"toggle-switch-switch\"></div>
                                                    </label>
                                                </div>
                                                ";
        // line 311
        if (($this->getAttribute(($context["app"] ?? null), "httpTmpLink", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "httpTmpLink", [], "array"))) {
            // line 312
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "httpTmpLink", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 313
                echo "                                                        ";
                if ( !($this->getAttribute($context["row"], "value", []) == "use_http_tmp_link")) {
                    // line 314
                    echo "                                                        <input type=\"hidden\" disabled=\"disabled\" name=\"form[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "value", []), "html", null, true);
                    echo "][0]\" id=\"form_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "value", []), "html", null, true);
                    echo "_0\">
                                                        ";
                }
                // line 316
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "                                                ";
        }
        // line 318
        echo "                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"col-sm-12\">
                                                <div class=\"toggle-switch toggle-switch-success\">
                                                    <label>
                                                        <input type=\"checkbox\" value=\"1\" disabled=\"disabled\" name=\"form[enable_monitoring][0]\" id=\"form_enable_monitoring_0\">
                                                        <div class=\"toggle-switch-inner\"></div>
                                                        <div class=\"toggle-switch-switch\"></div>
                                                    </label>
                                                    <input type=\"hidden\" disabled=\"disabled\" name=\"form[enable_balancer_monitoring][0]\" id=\"form_enable_balancer_monitoring_0\">
                                                    <input type=\"hidden\" disabled=\"disabled\" name=\"form[monitoring_url][0]\" id=\"form_monitoring_url_0\">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"col-sm-12\">
                                                <div >
                                                    <label>-</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"col-sm-12\">
                                                <div class=\"toggle-switch toggle-switch-success\">
                                                    <label>
                                                        <input type=\"checkbox\" value=\"1\" disabled=\"disabled\" name=\"form[use_load_balancing][0]\" id=\"form_use_load_balancing_0\">
                                                        <div class=\"toggle-switch-inner\"></div>
                                                        <div class=\"toggle-switch-switch\"></div>
                                                    </label>
                                                    <input type=\"hidden\" disabled=\"disabled\" name=\"form[stream_server][0]\" id=\"form_stream_server_0\">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"col-xs-3 col-sm-8\">
                                                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                                    <i class=\"pull-right fa fa-cog\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu pull-right\">
                                                    <li>
                                                        <a class=\"channel_url_change_data\" href=\"#\">
                                                            <span>";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"channel_url_remove_data\" href=\"#\">
                                                            <span>";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- End: list_row -->
                                    </tbody>
                                </table>
                                <input type=\"hidden\" name=\"cmd_validate\" data-validation = 'cmd_validate'>
                            </div>
                            ";
        // line 377
        if (($this->getAttribute(($context["app"] ?? null), "error_local", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "error_local", [], "array", false, true), "cmd", [], "any", true, true))) {
            // line 378
            echo "                                <div class=\" col-xs-10 col-sm-12 cmd_error\">
                                    <div class=\"bg-danger lead\">
                                        <span> ";
            // line 380
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "error_local", [], "array"), "cmd", [], "array"), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                            ";
        }
        // line 384
        echo "                            <div class=\"pull-left\">
                                <a class=\"btn btn-success btn-block\" id=\"add_broadcasting_link\"><span>";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add link"), "html", null, true);
        echo "</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"box\">
                <h4 class=\"section-header\"><span>";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TV archive"), "html", null, true);
        echo "</span></h4>
                ";
        // line 410
        echo "                <div class=\"box-content\" id=\"add_channel_storage_save\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TV archive type"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-3\">
                                ";
        // line 415
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tv_archive_type", []), 'widget', ["attr" => ["class" => "form-control populate placeholder", "placeholder" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Disabled")]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 417
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tv_archive_type", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Archive servers"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 426
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "storage_names", []), 'widget', ["attr" => ["class" => "populate placeholder", "data-validation" => "required", "data-validation-depends-on" => "form[tv_archive_type]", "data-validation-error-msg" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select the storage for recording")]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 428
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "storage_names", []), 'errors');
        echo "
                                </div>
                                ";
        // line 430
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "wowza_storage_names", []), 'widget', ["attr" => ["class" => "populate placeholder", "data-validation" => "required", "data-validation-depends-on" => "form[tv_archive_type]", "data-validation-error-msg" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select the storage for recording")]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 432
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "wowza_storage_names", []), 'errors');
        echo "
                                </div>
                                ";
        // line 434
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "flussonic_storage_names", []), 'widget', ["attr" => ["class" => "populate placeholder", "data-validation" => "required", "data-validation-depends-on" => "form[tv_archive_type]", "data-validation-error-msg" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select the storage for recording")]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "flussonic_storage_names", []), 'errors');
        echo "
                                </div>
                                ";
        // line 438
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "nimble_storage_names", []), 'widget', ["attr" => ["class" => "populate placeholder", "data-validation" => "required", "data-validation-depends-on" => "form[tv_archive_type]", "data-validation-error-msg" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select the storage for recording")]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 440
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "nimble_storage_names", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TV archive address"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 449
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "mc_cmd", []), 'widget', ["attr" => ["class" => "form-control", "data-validation" => "required custom", "data-validation-regexp" => "^(http|udp|rtp)\\:\\/\\/", "data-validation-error-msg-custom" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Valid protocols are http://, rtp:// and udp://."), "data-validation-error-msg-required" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Input source URL"), "data-validation-depends-on" => "form[tv_archive_type]"]]);
        echo " ";
        // line 450
        echo "                                ";
        // line 451
        echo "                                <div class=\"bg-danger\">
                                    ";
        // line 452
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "mc_cmd", []), 'errors');
        echo "
                                    ";
        // line 453
        if (($this->getAttribute(($context["app"] ?? null), "error_local", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "error_local", [], "array", false, true), "mc_cmd", [], "any", true, true))) {
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "error_local", [], "array"), "mc_cmd", [], "array"), "html", null, true);
            echo "</span> ";
        }
        // line 454
        echo "                                </div>
                            </div>
                            <i class=\"i-hint\"
                                title=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel's URL for TV archive or nPVR recording"), "html", null, true);
        echo "\" >
                                <img class=\"i-hint-sign\" src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                            </i>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TV archive length"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 466
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tv_archive_duration", []), 'widget', ["attr" => ["class" => "form-control populate placeholder", "data-validation" => "required number", "data-validation-error-msg-required" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Setup TV archive duration"), "data-validation-allowing" => "range[0;999]", "data-validation-error-msg-number" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Allowed values from 0 to 999"), "data-validation-depends-on" => "form[tv_archive_type]"]]);
        echo "
                                ";
        // line 468
        echo "                                <div class=\"bg-danger\">
                                    ";
        // line 469
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tv_archive_duration", []), 'errors');
        echo "
                                </div>
                            </div>
                            <i class=\"i-hint\"
                                title=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TV archive length"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Measured in hours"), "html", null, true);
        echo "\" >
                                <img class=\"i-hint-sign\" src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                            </i>
                        </div>
                    </div>
                    <div class=\"form-group form-group-checkbox\">
                        <label class=\"col-sm-2 control-label\">";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Allow nPVR"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-10\">
                                <div class=\"checkbox-inline\">
                                    <label>
                                        ";
        // line 484
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "allow_pvr", []), 'widget');
        echo "
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Allow the user to record selected programs on the server repository"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                                <div class=\"bg-danger\">
                                    ";
        // line 493
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "allow_pvr", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("nPVR servers"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 502
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "pvr_storage_names", []), 'widget', ["attr" => ["class" => "populate placeholder", "data-validation" => "required", "data-validation-depends-on" => "form[allow_pvr]", "data-validation-error-msg" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select the storage for recording")]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 504
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "pvr_storage_names", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"box\">
                <h4 class=\"section-header\"><span>";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("EPG"), "html", null, true);
        echo "</span></h4>
                ";
        // line 530
        echo "                <div class=\"box-content\" id=\"add_channel_EPG\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("XMLTV ID"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 535
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "xmltv_id", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 537
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "xmltv_id", []), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 541
        echo "                            <i class=\"i-hint\"
                                title=\"";
        // line 542
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("XMLTV ID of channel in EPG file. If the EPG source has the prefix state it in &lt;your_prefix&gt;ID format");
        echo "\" >
                                <img class=\"i-hint-sign\" src=\"";
        // line 543
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []);
        echo "/img/field-hint-sign.svg\" />
                            </i>
                            ";
        // line 546
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Time correction for EPG"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-6\">
                                ";
        // line 552
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "correct_time", []), 'widget', ["attr" => ["class" => "form-control", "data-validation" => "number", "data-validation-allowing" => "range[-720;840],negative", "data-validation-error-msg" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Allowed values from -720 to 840"), "data-validation-depends-on" => "form[xmltv_id]"]]);
        echo "
                                <div class=\"bg-danger\">
                                    ";
        // line 554
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "correct_time", []), 'errors');
        echo "
                                </div>
                            </div>
                            <i class=\"i-hint\"
                                title=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Measured in minutes"), "html", null, true);
        echo "\" >
                                <img class=\"i-hint-sign\" src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                            </i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"box\">
                <h4 class=\"section-header\"><span>";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Parental control"), "html", null, true);
        echo "</span></h4>
                ";
        // line 584
        echo "                <div class=\"box-content\" id=\"add_channel_safety\">
                    <div class=\"form-group form-group-checkbox\">
                        <label class=\"col-sm-2 control-label\">";
        // line 586
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Age restriction"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-10\">
                                <div class=\"checkbox-inline\">
                                    <label>
                                        ";
        // line 591
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "censored", []), 'widget');
        echo "
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sets the password restriction on the channel Default password 0000"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                                <div class=\"bg-danger\">
                                    ";
        // line 600
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "censored", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"box\">
                <h4 class=\"section-header\"><span>";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("USB recordings"), "html", null, true);
        echo "</span></h4>
                ";
        // line 626
        echo "                <div class=\"box-content\" id=\"add_channel_usb_store\">
                    <div class=\"form-group form-group-checkbox\">
                        <label class=\"col-sm-2 control-label\">";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TimeShift via USB devices"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-10\">
                                <div class=\"checkbox-inline\">
                                    <label>
                                        ";
        // line 633
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "allow_local_timeshift", []), 'widget');
        echo "
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("User can perform TimeShift function using Flash drive."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TimeShift only works with solutions rtp and ffrt."), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                                <div class=\"bg-danger\">
                                    ";
        // line 642
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "allow_local_timeshift", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group form-group-checkbox\">
                        <label class=\"col-sm-2 control-label\">";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("PVR to the USB-driver"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-6\">
                            <div class=\" col-xs-10 col-sm-10\">
                                <div class=\"checkbox-inline\">
                                    <label>
                                        ";
        // line 653
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "allow_local_pvr", []), 'widget');
        echo "
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("User can record selected shows and programs to the Flash drive."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Can record only the channels, which is broadcasted in the transport stream (mpeg-ts),  from multicast and also from http-server."), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                                <div class=\"bg-danger\">
                                    ";
        // line 662
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "allow_local_pvr", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-buttons col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"box\">
                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"pull-right\">
                            ";
        // line 675
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "save", []), 'widget', ["label" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "attr" => ["class" => "btn btn-success   pull-right"]]);
        echo "
                            <a href=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/iptv-list\" class=\"btn btn-default  pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=\"display: none;\">
        ";
        // line 684
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'rest');
        echo "
    </div>
        ";
        // line 686
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'form_end');
        echo "
    

    <div id=\"modalbox_ad\">
        <div class=\"devoops-modal channel-form\">
            <div class=\"devoops-modal-header\">
                <div class=\"modal-header-name\">
                    <span>";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add streaming link"), "html", null, true);
        echo "</span>
                </div>
                <div class=\"box-icons\">
                    <a class=\"close-link\">
                        <i class=\"fa fa-times\"></i>
                    </a>
                </div>
            </div>
            <form class=\"form-horizontal\" role=\"form\" id=\"add_channel_link_form\">
                <div class=\"devoops-modal-inner\">
                    <div class=\"box\">
                        <a class=\"collapse-link\">
                            <div class=\"box-header\">
                                <div class=\"box-name\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-10 col-sm-4\">
                                            <span>";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Basic"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"box-icons\">
                                    <i class=\"fa fa-chevron-down\"></i>
                                </div>
                                <div class=\"no-move\"></div>
                            </div>
                        </a>
                        <div class=\"box-content\" id=\"add_channel_url_base\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\">";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel URL"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-12\">
                                        <input class=\"form-control\" type=\"text\" data-validation = 'required, custom' data-validation-regexp = '^(\\w+\\s)?\\w+\\:\\/\\/.+\$' title=\"\" value=\"\" name=\"form[cmd][]\">
                                    </div>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Format: solution+URL Example ffrt http://5.39.70.216/live/88.ts"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\">";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-12\">
                                        <input class=\"form-control\" type=\"text\" title=\"\" value=\"\" name=\"form[user_agent_filter][]\">
                                    </div>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter by user-agent. Ability to set the filter by the connection type (WiFi, Ethernet), by STB model (250, 275, ...), by country (UA, RU, ...). Field is case sensitive"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\">";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Priority"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        <select class=\"populate placeholder\" name=\"form[priority][]\" id=\"s2_priority\">
                                            <option value=\"0\">0</option>
                                            <option value=\"1\">1</option>
                                            <option value=\"2\">2</option>
                                            <option value=\"3\">3</option>
                                            <option value=\"4\">4</option>
                                            <option value=\"5\">5</option>
                                        </select>
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Priority for channel URL, 0 – the highest priority"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\">";
        // line 764
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Temporary URL"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        <select class=\"populate placeholder\" name=\"form[use_http_tmp_link][]\" id=\"s2_use_http_tmp_link\">
                                            <option value=\"\">&nbsp;</option>
                                            ";
        // line 769
        if ($this->getAttribute(($context["app"] ?? null), "httpTmpLink", [], "any", true, true)) {
            // line 770
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "httpTmpLink", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 771
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "value", []), "html", null, true);
                echo "\" data-check-module=";
                if (($this->getAttribute($context["row"], "check_module", []) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "mcrypt_enabled", [], "array"))) {
                    echo "0";
                } else {
                    echo "1";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "label", []), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 773
            echo "                                            ";
        }
        // line 774
        echo "                                        </select>
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Protect channel from unauthorized access"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 778
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <a class=\"collapse-link\">
                            <div class=\"box-header\">
                                <div class=\"box-name\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-10 col-sm-4\">
                                            <span>";
        // line 790
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Monitoring"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"box-icons\">
                                    <i class=\"fa fa-chevron-up\"></i>
                                </div>
                                <div class=\"no-move\"></div>
                            </div>
                        </a>
                        <div class=\"box-content\" id=\"add_channel_link_monitoring\">
                            <div class=\"form-group form-group-checkbox\">
                                <label class=\"col-sm-3 control-label\">";
        // line 802
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enable monitoring"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-12\">
                                        <div class=\"checkbox-inline\">
                                            <label>
                                                <input type=\"checkbox\" name=\"form[enable_monitoring][]\">
                                                <i class=\"fa fa-square-o small\"></i>
                                            </label>
                                        </div>
                                        <i class=\"i-hint\"
                                            title=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("URL availability check"), "html", null, true);
        echo "\" >
                                            <img class=\"i-hint-sign\" src=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\">";
        // line 819
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel URL for monitoring"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-12\">
                                        <input class=\"form-control\" type=\"text\" title=\"\" value=\"\" name=\"form[monitoring_url][]\" data-validation = 'required, custom' data-validation-regexp = '^\\w+\\:\\/\\/.+\$'>
                                    </div>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Format: URL (without solution). Example: http://lpOfStream/test.js"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 827
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <a class=\"collapse-link\">
                            <div class=\"box-header\">
                                <div class=\"box-name\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-10 col-sm-4\">
                                            <span>";
        // line 838
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Load balancing"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"box-icons\">
                                    <i class=\"fa fa-chevron-up\"></i>
                                </div>
                                <div class=\"no-move\"></div>
                            </div>
                        </a>
                        <div class=\"box-content\" id=\"add_channel_load_balancing\">
                            <div class=\"form-group form-group-checkbox\">
                                <label class=\"col-sm-3 control-label\">";
        // line 850
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enable load balancing"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-12\">
                                        <div class=\"checkbox-inline\">
                                            <label>
                                                <input type=\"checkbox\" name=\"form[use_load_balancing][]\" id=\"use_load_balancing_chk\">
                                                <i class=\"fa fa-square-o small\"></i>
                                            </label>
                                        </div>
                                        <i class=\"i-hint\"
                                            title=\"";
        // line 860
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switching between streaming servers depending on the load"), "html", null, true);
        echo "\" >
                                            <img class=\"i-hint-sign\" src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\">";
        // line 867
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Streaming servers"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <select class=\"populate placeholder\" multiple name=\"form[stream_server][]\" id=\"s2_stream_server\" data-validation = \"required\" disabled=\"disabled\">
                                            ";
        // line 871
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "streamServers", [], "array")) {
            // line 872
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "streamServers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["s_item"]) {
                // line 873
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s_item"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s_item"], "name", []), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 875
            echo "                                            ";
        }
        // line 876
        echo "                                        </select>
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Servers which are going to be balanced"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 880
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                            <div class=\"form-group form-group-checkbox\">
                                <label class=\"col-sm-3 control-label\">";
        // line 885
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Balancer monitoring"), "html", null, true);
        echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-12\">
                                        <div class=\"checkbox-inline\">
                                            <label>
                                                <input type=\"checkbox\" name=\"form[enable_balancer_monitoring][]\">
                                                <i class=\"fa fa-square-o small\"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"devoops-modal-bottom\">
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\" >";
        // line 902
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                        <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\" >";
        // line 903
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type=\"text/template\" id=\"cmd_autocheck_lang_tmpl\">
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 912
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select link"), "html", null, true);
        echo "</label>
            <input type=\"hidden\" id=\"ch_id\" name=\"ch_id\" value=\"\${ch_id}\">
            <div class=\"col-xs-10 col-sm-10\">
                <select id=\"cmd_autocheck_lang\" name=\"cmd_autocheck_lang\" required=\"required\" class=\"form-control populate placeholder\">
                    ";
        // line 916
        echo "{{each links}}";
        echo "
                    <option value=\"\${\$value}\">\${\$value}</option>
                    ";
        // line 918
        echo "{{/each}}";
        echo "
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <div id=\"cmd_lang_result\" class=\"col-xs-12 col-sm-12\" style=\"min-height: 138px;\">
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_form_buttons\">
        <div class=\"pull-right no-padding\">&nbsp;</div>
        <div class=\"pull-right no-padding\">
            <button id=\"cmd_autocheck_btn\" type=\"submit\" class=\"btn btn-success pull-right\">";
        // line 931
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Check"), "html", null, true);
        echo "</button>
            <button type=\"reset\" class=\"btn btn-default pull-right\" >";
        // line 932
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/TvChannels/add_channel/add_channel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1588 => 932,  1584 => 931,  1568 => 918,  1563 => 916,  1556 => 912,  1544 => 903,  1540 => 902,  1520 => 885,  1512 => 880,  1508 => 879,  1503 => 876,  1500 => 875,  1489 => 873,  1484 => 872,  1482 => 871,  1475 => 867,  1466 => 861,  1462 => 860,  1449 => 850,  1434 => 838,  1420 => 827,  1416 => 826,  1406 => 819,  1397 => 813,  1393 => 812,  1380 => 802,  1365 => 790,  1350 => 778,  1346 => 777,  1341 => 774,  1338 => 773,  1321 => 771,  1316 => 770,  1314 => 769,  1306 => 764,  1298 => 759,  1294 => 758,  1278 => 745,  1271 => 741,  1267 => 740,  1257 => 733,  1250 => 729,  1246 => 728,  1236 => 721,  1221 => 709,  1202 => 693,  1192 => 686,  1187 => 684,  1172 => 676,  1168 => 675,  1152 => 662,  1146 => 659,  1140 => 658,  1132 => 653,  1124 => 648,  1115 => 642,  1109 => 639,  1103 => 638,  1095 => 633,  1087 => 628,  1083 => 626,  1079 => 608,  1068 => 600,  1062 => 597,  1058 => 596,  1050 => 591,  1042 => 586,  1038 => 584,  1034 => 566,  1024 => 559,  1020 => 558,  1013 => 554,  1008 => 552,  1002 => 549,  997 => 546,  992 => 543,  988 => 542,  985 => 541,  979 => 537,  974 => 535,  968 => 532,  964 => 530,  960 => 512,  949 => 504,  944 => 502,  938 => 499,  929 => 493,  923 => 490,  919 => 489,  911 => 484,  903 => 479,  895 => 474,  889 => 473,  882 => 469,  879 => 468,  875 => 466,  869 => 463,  861 => 458,  857 => 457,  852 => 454,  846 => 453,  842 => 452,  839 => 451,  837 => 450,  834 => 449,  828 => 446,  819 => 440,  814 => 438,  809 => 436,  804 => 434,  799 => 432,  794 => 430,  789 => 428,  784 => 426,  778 => 423,  769 => 417,  764 => 415,  758 => 412,  754 => 410,  750 => 392,  740 => 385,  737 => 384,  730 => 380,  726 => 378,  724 => 377,  709 => 365,  701 => 360,  657 => 318,  654 => 317,  648 => 316,  640 => 314,  637 => 313,  632 => 312,  630 => 311,  609 => 292,  606 => 291,  600 => 290,  589 => 282,  581 => 277,  567 => 266,  563 => 265,  557 => 261,  551 => 259,  548 => 258,  542 => 256,  539 => 255,  533 => 251,  527 => 249,  525 => 248,  517 => 243,  513 => 242,  509 => 241,  503 => 237,  500 => 236,  494 => 235,  488 => 233,  485 => 232,  480 => 231,  478 => 230,  474 => 229,  467 => 225,  461 => 222,  457 => 221,  453 => 219,  450 => 218,  445 => 217,  443 => 216,  434 => 210,  430 => 209,  426 => 208,  422 => 207,  418 => 206,  414 => 205,  405 => 199,  402 => 198,  393 => 192,  387 => 189,  381 => 188,  373 => 183,  365 => 178,  362 => 177,  360 => 176,  353 => 172,  343 => 165,  321 => 154,  311 => 152,  307 => 151,  301 => 148,  293 => 143,  289 => 142,  282 => 138,  277 => 136,  271 => 133,  259 => 128,  252 => 124,  247 => 122,  241 => 119,  232 => 113,  227 => 111,  221 => 108,  213 => 103,  209 => 102,  204 => 99,  198 => 98,  194 => 97,  189 => 95,  183 => 92,  175 => 87,  171 => 86,  168 => 85,  164 => 78,  158 => 77,  154 => 76,  149 => 74,  145 => 73,  139 => 70,  135 => 68,  131 => 51,  123 => 46,  117 => 43,  113 => 41,  103 => 36,  98 => 33,  96 => 32,  93 => 31,  90 => 30,  83 => 24,  81 => 23,  73 => 18,  70 => 17,  67 => 16,  62 => 14,  59 => 13,  57 => 12,  53 => 11,  50 => 10,  47 => 9,  43 => 2,  41 => 6,  39 => 5,  37 => 3,  31 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/add_channel/add_channel.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/add_channel/add_channel.twig");
    }
}
