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

/* default/NewVideoClub/add_video/add_video.twig */
class __TwigTemplate_7f1092b1c555e5d54f2af49ff6d5f8748be62ad36ef84105696747e9c28166dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'form_errors' => [$this, 'block_form_errors'],
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
            'footer_steps_js' => [$this, 'block_footer_steps_js'],
            'content' => [$this, 'block_content'],
            'form_step_by_step' => [$this, 'block_form_step_by_step'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/layout.twig"), "default/NewVideoClub/add_video/add_video.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/NewVideoClub/add_video/add_video.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club") . ": ") . (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [])) ? (((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit movie") . " '") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoName", [])) . "'")) : ($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add movie"))));
        // line 5
        $context["active_alias"] = "video-list";
        // line 7
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), [0 => $this]);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_form_errors($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        ob_start(function () { return ''; });
        // line 12
        echo "        <div>
        ";
        // line 13
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                echo "                    <i class=\"txt-danger fa fa-ban\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo " ";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo "<br>";
                }
                // line 16
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_footer_js($context, array $blocks = [])
    {
        // line 23
        echo "    
        ";
        // line 24
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 25
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/NewVideoClub/add_video/add_video.twig", 25)->display($context);
        // line 26
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/NewVideoClub/add_video/add_video.twig", 26)->display($context);
        // line 27
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/file-uploader-scripts.twig"), "default/NewVideoClub/add_video/add_video.twig", 27)->display($context);
        // line 28
        echo "
";
    }

    // line 30
    public function block_footer($context, array $blocks = [])
    {
        // line 31
        echo "    
        ";
        // line 32
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"./plugins/scrollTo/jquery.scrollTo.min.js\" defer=\"\"></script>
        <script type=\"text/javascript\">
           
            ";
        // line 36
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/add_video/add_video.js.twig"), "default/NewVideoClub/add_video/add_video.twig", 36)->display($context);
        // line 37
        echo "
        </script>
    ";
        // line 39
        $this->displayBlock('footer_steps_js', $context, $blocks);
        // line 41
        echo "
";
    }

    // line 39
    public function block_footer_steps_js($context, array $blocks = [])
    {
        // line 40
        echo "    ";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        // line 46
        echo "    <div id=\"add_channel\" class=\"new_video_club\">
        ";
        // line 47
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [], "array")) {
            // line 48
            echo "        <h4 class=\"section-header\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Editing movie"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoName", []), "html", null, true);
            echo "</span></h4>
        ";
        }
        // line 50
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", [])) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "action_alias", []))), "attr" => ["class" => "form-horizontal", "role" => "form", "id" => "form_"]]);
        echo "
        <div class=\"bg-danger\">
            <div class=\"bg-danger\">
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">

                ";
        // line 59
        $context["form_steps"] = [1 => "Basic", 2 => "Movie information", 3 => "Screenshots", 4 => "Files"];
        // line 65
        echo "
                <ol class=\"nav nav-pills step-wizard-progress-bar active-";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []), "html", null, true);
        echo " clearfix\" role=\"navigation\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form_steps"] ?? $this->getContext($context, "form_steps")));
        foreach ($context['_seq'] as $context["step"] => $context["step_name"]) {
            // line 68
            echo "                        <li class=\" step-";
            echo twig_escape_filter($this->env, $context["step"], "html", null, true);
            echo " ";
            echo (((($context["step"] < $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", [])) || $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [], "array"))) ? ("complete") : (""));
            echo " ";
            echo ((($context["step"] == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []))) ? ("active") : (""));
            echo "\">
                            ";
            // line 69
            if (($context["step"] == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []))) {
                // line 70
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans($context["step_name"]), "html", null, true);
                echo "
                            ";
            } elseif (($this->getAttribute(            // line 71
($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [], "array") || ($context["step"] < $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", [])))) {
                // line 72
                echo "                                <a class=\"no_context_menu\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
                echo "/edit-video?step=";
                echo twig_escape_filter($this->env, $context["step"], "html", null, true);
                if ($this->getAttribute(($context["app"] ?? null), "id", [], "any", true, true)) {
                    echo "&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "id", []), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans($context["step_name"]), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 74
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans($context["step_name"]), "html", null, true);
                echo "
                            ";
            }
            // line 76
            echo "                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['step'], $context['step_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </ol>

                ";
        // line 80
        $this->displayBlock('form_step_by_step', $context, $blocks);
        // line 82
        echo "
            </div>

            <div class=\"form-buttons col-xs-12 col-sm-12\">
                <div class=\"box\">
                    <div class=\"box-content\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right\">
                                
                                ";
        // line 91
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [], "array") && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []) == 4))) {
            // line 92
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/video-list\" class=\"btn btn-success  pull-right\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("CLOSE"), "html", null, true);
            echo " </a>
                                ";
        } elseif (( !$this->getAttribute(        // line 93
($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [], "array") && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []) == 4))) {
            // line 94
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/video-list\" class=\"btn btn-success  pull-right\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Complite"), "html", null, true);
            echo " </a>
                                ";
        } else {
            // line 96
            echo "                                <button type=\"submit\" id=\"form_save\" name=\"form[save]\" class=\"btn btn-success pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save & Forward"), "html", null, true);
            echo "<i class=\"fa fa-arrow-right\"></i></button>
                                ";
        }
        // line 98
        echo "
                                ";
        // line 99
        if ((1 < $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []))) {
            // line 100
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/edit-video?step=";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []) - 1), "html", null, true);
            if ($this->getAttribute(($context["app"] ?? null), "id", [], "any", true, true)) {
                echo "&id=";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "id", []), "html", null, true);
            }
            echo "\" class=\"btn btn-default  pull-right\"><i class=\"fa fa-arrow-left\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Back"), "html", null, true);
            echo " </a>
                                ";
        }
        // line 102
        echo "
                                ";
        // line 103
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [], "array") && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []) != 4))) {
            // line 104
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/video-list\" class=\"btn btn-default  pull-right\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("CLOSE"), "html", null, true);
            echo " </a>
                                ";
        } elseif (( !$this->getAttribute(        // line 105
($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [], "array") && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []) == 1))) {
            // line 106
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/video-list\" class=\"btn btn-default  pull-right\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("CLOSE"), "html", null, true);
            echo " </a>
                                ";
        }
        // line 108
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"\">
            ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", []), 'rest');
        echo "
        </div>
        ";
        // line 118
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'form_end');
        echo "
    </div>


    ";
        // line 123
        echo "
    <script type=\"text/template\" id=\"files_box_content\">
        <div class=\"box-content\">
            <div class=\"dataTables_processing\"></div>
            <table class=\"table  table-hover table-datatable\">
                ";
        // line 128
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 129
            echo "                    ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 131
        echo "                <tbody>
                </tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"files_box_header\">
        <a class=\"collapse-link\">
            <div class=\"box-header\">
                <div class=\"box-name\">
                    <div class=\"row\">
                        <div class=\"\">
                            <span data-files-title=\"\"></span>
                        </div>
                        <div class=\"col-xs-4 col-sm-3\">
                            <span data-files-count=\"\">";
        // line 146
        echo twig_escape_filter($this->env, ($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("files of video") . ":"), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>
                <div class=\"box-header-btn\">
                    <button class=\"btn btn-default btn-add-video-rating\" data-add-files=\"1\" title=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add file"), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add file"), "html", null, true);
        echo "</button>
                </div>
                <div class=\"box-icons\">
                    <i class=\"fa fa-chevron-up\"></i>
                </div>
                <div class=\"no-move\"></div>
            </div>
        </a>
    </script>

    <script type=\"text/template\" id=\"series_box_header\">
        <a class=\"collapse-link\">
            <div class=\"box-header\">
                <div class=\"box-name\">
                    <div class=\"row\">
                        <div class=\"col-lg-1 col-md-1 no-padding-right\">
                            <span data-series-number=\"\"></span>
                        </div>
                        <div class=\"col-lg-1 col-md-1 no-padding-right\">
                            <span data-files-count=\"\"></span>
                        </div>
                        <div class=\"col-lg-4 col-md-4 no-padding-right\">
                            <span class=\"col-lg-4 col-md-4 text-right\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo ":</span>
                            <div class=\"mod_input col-lg-8 col-md-8 no-padding\">
                                <input class=\"col-lg-12 col-md-12  no-padding\" type=\"text\" name=\"series_name\" placeholder=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add episodes name"), "html", null, true);
        echo "\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 no-padding-left\">
                            <span class=\"col-lg-5 col-md-4 text-right no-padding-left\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Original title"), "html", null, true);
        echo ":</span>
                            <div class=\"mod_input col-lg-7 col-md-6 no-padding\">
                                <input class=\"col-lg-12 col-md-12  no-padding\" type=\"text\" name=\"series_original_name\" placeholder=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add original name"), "html", null, true);
        echo "\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"box-header-btn\">
                    <button class=\"btn btn-default btn-add-video-rating\" data-add-files=\"1\" title=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add file"), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"  data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add file"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"left\"></i></button>
                    <button class=\"btn btn-default btn-add-video-rating\" data-delete-episode=\"1\" title=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete episode"), "html", null, true);
        echo "\"><i class=\"fa fa-trash\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete episode"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"left\"></i></button>
                </div>
                <div class=\"box-icons\">
                    <i class=\"fa fa-chevron-down\"></i>
                </div>
                <div class=\"no-move\"></div>
            </div>
        </a>
    </script>

    <script type=\"text/template\" id=\"season_box_header\">
        <a class=\"collapse-link\">
            <div class=\"box-header\">
                <div class=\"box-name\">
                    <div class=\"row\">
                        <div class=\"col-lg-1 col-md-1 no-padding-right\">
                            <span data-season-number=\"\"></span>
                        </div>
                        <div class=\"col-lg-1 col-md-1 no-padding-right\">
                            <span data-series-count=\"\"></span>
                        </div>
                        <div class=\"col-lg-4 col-md-4 no-padding-right\">
                            <span class=\"col-lg-3 col-md-4 text-right\" title=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo ":</span>
                            <div class=\"mod_input col-lg-9 col-md-8 no-padding\">
                                <input class=\"col-lg-12 col-md-12  no-padding\" type=\"text\" name=\"season_name\" placeholder=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add season name"), "html", null, true);
        echo "\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 no-padding-right\">
                            <span class=\"col-lg-5 col-md-4 text-right no-padding-left \" title=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Original title"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Original title"), "html", null, true);
        echo ":</span>
                            <div class=\"mod_input col-lg-7 col-md-6 no-padding\">
                                <input class=\"col-lg-12 col-md-12  no-padding\" type=\"text\" name=\"season_original_name\" placeholder=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add original name"), "html", null, true);
        echo "\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"box-header-btn\">
                    <button class=\"btn btn-default btn-add-video-rating\" data-add-series=\"1\" title=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add series"), "html", null, true);
        echo "\"><i class=\"fa fa-plus\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add episodes"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"left\"></i></button>
                    <button class=\"btn btn-default btn-add-video-rating\" data-delete-season=\"1\" title=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove season"), "html", null, true);
        echo "\"><i class=\"fa fa-trash\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete season"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"left\"></i></button>
                </div>
                <div class=\"box-icons\">
                    <i class=\"fa fa-chevron-down\"></i>
                </div>
                <div class=\"no-move\"></div>
            </div>
        </a>
    </script>

    <script type=\"text/template\" id=\"modal_save_form_body\">
        <div class=\"box-content no-padding\">
            <form id=\"file_form\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-video-files\">
                    <div class=\"col-sm-8 col-sm-offset-2\" id=\"file_form_input_container\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("File type"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-9 col-sm-9\">
                                <span class=\"col-xs-12 col-sm-12\">
                                    <input type=\"hidden\" class=\"own_fields form-control\" name=\"id\" id=\"file_id\" value=\"\" readonly=\"readonly\">
                                    <input type=\"hidden\" class=\"own_fields form-control\" name=\"video_id\" id=\"video_id\" value=\"\" readonly=\"readonly\">
                                    <input type=\"hidden\" class=\"own_fields form-control\" name=\"season_id\" id=\"season_id\" value=\"\" readonly=\"readonly\">
                                    <input type=\"hidden\" class=\"own_fields form-control\" name=\"series_id\" id=\"series_id\" value=\"\" readonly=\"readonly\">
                                    <input type=\"hidden\" class=\"own_fields form-control\" name=\"file_name\" id=\"file_name\" value=\"\" readonly=\"readonly\">
                                    <input type=\"hidden\" class=\"own_fields form-control\" name=\"status\" id=\"status\" value=\"\" readonly=\"readonly\">
                                    <select id=\"file_type\" name=\"file_type\" class=\"own_fields populate placeholder\">
                                        <option value=\"video\">";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video"), "html", null, true);
        echo "</option>
                                        <option value=\"sub\">";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Subs"), "html", null, true);
        echo "</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Quality"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-9 col-sm-9\">
                                <span class=\"col-xs-12 col-sm-12\">
                                    <select id=\"file_quality\" name=\"quality\" class=\"own_fields populate placeholder\">
                                        ";
        // line 265
        if (($this->getAttribute(($context["app"] ?? null), "quality", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "quality", [], "array"))) {
            // line 266
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "quality", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 267
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "num_title", []), "html", null, true);
                (($this->getAttribute($context["item"], "text_title", [])) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans(((" (" . $this->getAttribute($context["item"], "text_title", [])) . ")")), "html", null, true))) : (print ("")));
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "                                        ";
        }
        // line 270
        echo "                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Languages"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-9 col-sm-9\">
                                <span class=\"col-xs-12 col-sm-12\">
                                    <select id=\"file_languages\" name=\"languages\" class=\"own_fields populate placeholder\" multiple=\"multiple\" data-validation='required'>
                                        ";
        // line 279
        if ($this->getAttribute(($context["app"] ?? null), "allLanguages", [], "any", true, true)) {
            // line 280
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allLanguages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 281
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                                        ";
        }
        // line 284
        echo "                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Volume level"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-9 col-sm-9\">
                                <span class=\"col-xs-12 col-sm-6\">
                                    <select id=\"file_volume_level\" name=\"volume_level\" class=\"own_fields populate placeholder\">
                                        ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range( -20, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 294
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["item"] * 5), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Protocol"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-9 col-sm-9\">
                                <span class=\"col-xs-12 col-sm-12\">
                                    <select id=\"file_protocol\" name=\"protocol\" class=\"own_fields populate placeholder\">
                                        <option value=\"http\">HTTP</option>
                                        <option value=\"custom\">Custom URL</option>
                                    </select>
                                </span>
                            </div>
                            <span class=\"help-inline col-xs-9 col-sm-9 col-xs-offset-3 col-sm-offset-3\">
                                <span class=\"small txt-default col-xs-11 col-sm-11\">";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Selecting the method of content delivery to the user (http or custom url). When using HTTP, there is no link to the content, it is stored on the server."), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("URL"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-9 col-sm-9\">
                                <span class=\"col-xs-12 col-sm-12\">
                                    <input type=\"text\" class=\"own_fields form-control\" name=\"url\" id=\"video_url\" value=\"\" data-validation = 'required custom' data-validation-regexp = '^(\\w+\\s)?\\w+\\:\\/\\/.+\$' data-validation-error-msg-custom = \"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Invalid format links"), "html", null, true);
        echo "\">
                                </span>
                            </div>
                            <span class=\"help-inline col-xs-9 col-sm-9 col-xs-offset-3 col-sm-offset-3\">
                                <span class=\"small txt-default col-xs-11 col-sm-11\">";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Example: ffmpeg http://anon.nasa-global.edgesuite.net/HD_downloads/135_launch_720p.wmv"), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Temporary link"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-9 col-sm-9\">
                                <span class=\"col-xs-12 col-sm-12\">
                                    <select id=\"file_tmp_link_type\" name=\"tmp_link_type\" class=\"populate placeholder own_fields\">
                                        <option value=\"\">&nbsp;</option>
                                        <option value=\"flussonic\">Flussonic</option>
                                        <option value=\"nginx\">Nginx secire link</option>
                                        <option value=\"wowza\">Wowza</option>
                                        <option value=\"edgecast_auth\">EdgeCast auth</option>
                                        <option value=\"akamai_auth\">Akamai</option>
                                        <option value=\"nimble\">Nimble</option>
                                        <option value=\"wowza_securetoken\">Wowza SecureToken</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-9 col-sm-9\">
                                <span class=\"col-xs-12 col-sm-12\">
                                    <select id=\"file_accessed\" name=\"accessed\" class=\"own_fields populate placeholder\">
                                        <option value=\"0\">";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not published"), "html", null, true);
        echo "</option>
                                        <option value=\"1\">";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"media_info_body\">
        <div class=\"col-sm-4\" id=\"media_info\">
            <button class=\"btn btn-success btn-block disabled\" disabled=\"disabled\">";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Autofill"), "html", null, true);
        echo "</button>
        </div>
    </script>

    <script type=\"text/template\" id=\"media_info_info\">
        <span class=\"col-sm-12 center\" data-info-key=\"\" data-info-val=\"\"></span>
    </script>

    <script type=\"text/template\" id=\"modal_save_form_buttons\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

    <script type=\"text/template\" id=\"season_counter_template\">
        <form id=\"season_counter_form\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-video-season\">
            <input type=\"hidden\" class=\"own_fields form-control\" name=\"video_id\" id=\"video_id\" value=\"";
        // line 377
        if ($this->getAttribute(($context["app"] ?? null), "video_id", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "video_id", [], "array"), "html", null, true);
        }
        echo "\" readonly=\"readonly\">
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label col-sm-offset-2 \">";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Seasons"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-10 col-sm-6\">
                    <select name='season_counter' id='season_counter'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                    </select>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/template\" id=\"series_counter_template\">
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label col-sm-offset-2\">";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Season"), "html", null, true);
        echo " </label>
            <div class=\"col-xs-10 col-sm-6\">
                <select name='' id='series_counter_' class=\"populate placeholder own_fields\">
                    <option value='1'>1 ";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='2'>2 ";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='3'>3 ";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='4'>4 ";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='5'>5 ";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='6'>6 ";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='7'>7 ";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='8'>8 ";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='9'>9 ";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='10'>10 ";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='11'>11 ";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='12'>12 ";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='13'>13 ";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='14'>14 ";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                    <option value='15'>15 ";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo "</option>
                </select>
            </div>
            <br><br>
        </div>
    </script>

";
    }

    // line 80
    public function block_form_step_by_step($context, array $blocks = [])
    {
        // line 81
        echo "                ";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  921 => 81,  918 => 80,  906 => 422,  902 => 421,  898 => 420,  894 => 419,  890 => 418,  886 => 417,  882 => 416,  878 => 415,  874 => 414,  870 => 413,  866 => 412,  862 => 411,  858 => 410,  854 => 409,  850 => 408,  844 => 405,  815 => 379,  808 => 377,  802 => 376,  794 => 371,  790 => 370,  777 => 360,  762 => 348,  758 => 347,  751 => 343,  731 => 326,  724 => 322,  717 => 318,  711 => 315,  704 => 311,  691 => 301,  684 => 296,  673 => 294,  669 => 293,  662 => 289,  655 => 284,  652 => 283,  641 => 281,  636 => 280,  634 => 279,  627 => 275,  620 => 270,  617 => 269,  605 => 267,  600 => 266,  598 => 265,  591 => 261,  582 => 255,  578 => 254,  565 => 244,  557 => 241,  540 => 229,  534 => 228,  524 => 221,  517 => 219,  509 => 214,  502 => 212,  475 => 190,  469 => 189,  459 => 182,  454 => 180,  446 => 175,  441 => 173,  414 => 151,  406 => 146,  389 => 131,  383 => 129,  381 => 128,  374 => 123,  367 => 118,  362 => 116,  352 => 108,  342 => 106,  340 => 105,  331 => 104,  329 => 103,  326 => 102,  310 => 100,  308 => 99,  305 => 98,  299 => 96,  289 => 94,  287 => 93,  278 => 92,  276 => 91,  265 => 82,  263 => 80,  259 => 78,  252 => 76,  246 => 74,  230 => 72,  228 => 71,  223 => 70,  221 => 69,  212 => 68,  208 => 67,  204 => 66,  201 => 65,  199 => 59,  190 => 53,  183 => 50,  175 => 48,  173 => 47,  170 => 46,  167 => 45,  163 => 40,  160 => 39,  155 => 41,  153 => 39,  149 => 37,  147 => 36,  140 => 32,  137 => 31,  134 => 30,  129 => 28,  126 => 27,  123 => 26,  121 => 25,  117 => 24,  114 => 23,  111 => 22,  105 => 18,  102 => 17,  88 => 16,  81 => 15,  63 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  48 => 1,  46 => 7,  44 => 5,  42 => 4,  40 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video.twig");
    }
}
