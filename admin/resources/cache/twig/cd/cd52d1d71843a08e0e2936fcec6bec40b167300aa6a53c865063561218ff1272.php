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

/* default/macro/iptw_macro.twig */
class __TwigTemplate_164ed1bbbd3dfcf00ca111a0933ecae58d697260c69eae463b6d134d43a20a8c extends \Twig\Template
{
    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate($this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig")), "default/macro/iptw_macro.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["main_macro_inside"] = $this;
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function getinput_checkbox($__value__ = null, $__name__ = null, $__key__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "name" => $__name__,
            "key" => $__key__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            echo "        ";
            if ($this->getAttribute(($context["value"] ?? null), ($context["key"] ?? $this->getContext($context, "key")), [], "any", true, true)) {
                // line 7
                echo "            <div class=\"toggle-switch toggle-switch-success\">
                <label>
                    ";
                // line 9
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["key"] ?? $this->getContext($context, "key")), [], "array"), 'widget');
                echo "
                    <div class=\"toggle-switch-inner\"></div>
                    <div class=\"toggle-switch-switch\"></div>
                    <div class=\"bg-danger\">
                        ";
                // line 13
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["key"] ?? $this->getContext($context, "key")), [], "array"), 'errors');
                echo "
                    </div>
                </label>
            </div>
        ";
            } else {
                // line 18
                echo "            <div class=\"toggle-switch toggle-switch-success\">
                <label>
                    <input type=\"checkbox\" name=\"form[";
                // line 20
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
                echo "]\" id=\"form_";
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
                echo "\">
                    <div class=\"toggle-switch-inner\"></div>
                    <div class=\"toggle-switch-switch\"></div>
                </label>
            </div>
        ";
            }
            // line 26
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getinput_hidden($__value__ = null, $__name__ = null, $__key__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "name" => $__name__,
            "key" => $__key__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            echo "        ";
            if ($this->getAttribute(($context["value"] ?? null), ($context["key"] ?? $this->getContext($context, "key")), [], "any", true, true)) {
                // line 30
                echo "            ";
                if (($context["label"] ?? $this->getContext($context, "label"))) {
                    // line 31
                    echo "                <label data-field=\"form[";
                    echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                    echo "]\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["key"] ?? $this->getContext($context, "key")), [], "array"), "vars", []), "value", []), "html", null, true);
                    echo "</label>
            ";
                }
                // line 33
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["key"] ?? $this->getContext($context, "key")), [], "array"), 'widget');
                echo "
            <div class=\"bg-danger\">
                ";
                // line 35
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["key"] ?? $this->getContext($context, "key")), [], "array"), 'errors');
                echo "
            </div>
        ";
            } else {
                // line 38
                echo "            <input type=\"hidden\" id=\"form_";
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
                echo "\" name=\"form[";
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
                echo "]\">
        ";
            }
            // line 40
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getget_filter($__name__ = null, $__title__ = null, $__id_field__ = null, $__title_field__ = null, $__list_all__ = null, $__block_width__ = null, $__label_width__ = null, $__without_all__ = null, $__postponed__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "id_field" => $__id_field__,
            "title_field" => $__title_field__,
            "list_all" => $__list_all__,
            "block_width" => $__block_width__,
            "label_width" => $__label_width__,
            "without_all" => $__without_all__,
            "postponed" => $__postponed__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 43
            echo "        ";
            if (((isset($context["postponed"]) || array_key_exists("postponed", $context)) && ($context["postponed"] ?? $this->getContext($context, "postponed")))) {
                // line 44
                echo "            ";
                $context["postponed"] = 1;
                // line 45
                echo "        ";
            } else {
                // line 46
                echo "            ";
                $context["postponed"] = 0;
                // line 47
                echo "        ";
            }
            // line 48
            echo "        ";
            if (($context["without_all"] ?? $this->getContext($context, "without_all"))) {
                // line 49
                echo "            ";
                $context["list"] = "";
                // line 50
                echo "        ";
            } else {
                // line 51
                echo "            ";
                $context["list"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((((("<li><a href=\"#\" data-filter=\"0\" " . ((($context["postponed"] ?? $this->getContext($context, "postponed"))) ? ("data-postponed=\"1\"") : (""))) . "><span>") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All")) . "</span></a></li>"));
                // line 52
                echo "        ";
            }
            // line 53
            echo "        ";
            if ( !($context["block_width"] ?? $this->getContext($context, "block_width"))) {
                // line 54
                echo "            ";
                $context["block_width"] = 3;
                // line 55
                echo "        ";
            } else {
                // line 56
                echo "            ";
                $context["block_width"] = (($context["block_width"] ?? $this->getContext($context, "block_width")) + 3);
                // line 57
                echo "        ";
            }
            // line 58
            echo "        ";
            if ( !($context["label_width"] ?? $this->getContext($context, "label_width"))) {
                // line 59
                echo "            ";
                $context["label_width"] = 4;
                // line 60
                echo "        ";
            } else {
                // line 61
                echo "            ";
                $context["label_width"] = ($context["label_width"] ?? $this->getContext($context, "label_width"));
                // line 62
                echo "        ";
            }
            // line 63
            echo "        ";
            // line 65
            echo "        ";
            if ((($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), ($context["name"] ?? $this->getContext($context, "name")), [], "any", true, true)) &&  !($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array") === "0"))) {
                // line 66
                echo "            ";
                $context["f_name"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array");
                // line 67
                echo "        ";
            } else {
                // line 68
                echo "            ";
                $context["f_name"] = 0;
                // line 69
                echo "        ";
            }
            // line 70
            echo "        <div class=\"br  filter\" data-tvfilter=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" data-filterval=\"";
            echo twig_escape_filter($this->env, ($context["f_name"] ?? $this->getContext($context, "f_name")), "html", null, true);
            echo "\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"no-padding\">";
            // line 71
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo ":</span>
            ";
            // line 72
            $context["list_f"] = ($context["list"] ?? $this->getContext($context, "list"));
            // line 73
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_all"] ?? $this->getContext($context, "list_all")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
                echo "                ";
                $context["list_f"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((((((((((($context["list_f"] ?? $this->getContext($context, "list_f")) . "<li><a href=\"#\" class=\"") . ((( !(($context["f_name"] ?? $this->getContext($context, "f_name")) === 0) && (($context["f_name"] ?? $this->getContext($context, "f_name")) == $this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array")))) ? ("active") : (""))) . "\" data-filter=\"") . $this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array")) . "\" ") . ((($context["postponed"] ?? $this->getContext($context, "postponed"))) ? ("data-postponed=\"1\"") : (""))) . "><span>") . $this->getAttribute($context["item"], ($context["title_field"] ?? $this->getContext($context, "title_field")), [], "array")) . "</span></a></li>"));
                // line 75
                echo "                ";
                if (( !(($context["f_name"] ?? $this->getContext($context, "f_name")) === 0) && (($context["f_name"] ?? $this->getContext($context, "f_name")) == $this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array")))) {
                    echo "                       
                        <span class=\"applied\" title=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], ($context["title_field"] ?? $this->getContext($context, "title_field")), [], "array"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], ($context["title_field"] ?? $this->getContext($context, "title_field")), [], "array"), "html", null, true);
                    echo "</span>
                        <i class=\"fa fa-caret-down\"></i>
                    </a>
                ";
                }
                // line 80
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "            ";
            // line 82
            echo "                ";
            if ((($context["f_name"] ?? $this->getContext($context, "f_name")) === 0)) {
                // line 83
                echo "                        <span>";
                if (($context["without_all"] ?? $this->getContext($context, "without_all"))) {
                } else {
                    echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All");
                }
                echo "</span>
                        <i class=\"fa fa-caret-down\"></i>
                    </a>
                ";
            }
            // line 87
            echo "                <ul class=\"dropdown-menu pull-left\">
                    ";
            // line 88
            echo ($context["list_f"] ?? $this->getContext($context, "list_f"));
            echo "
                </ul>
            ";
            // line 91
            echo "        </div>
    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 95
    public function getget_filter_value_set_input($__name__ = null, $__title__ = null, $__id_field__ = null, $__title_field__ = null, $__list_all__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "id_field" => $__id_field__,
            "title_field" => $__title_field__,
            "list_all" => $__list_all__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 96
            echo "        ";
            if ((($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), ($context["name"] ?? $this->getContext($context, "name")), [], "any", true, true)) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array") != ""))) {
                // line 97
                echo "            ";
                $context["value"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array");
                // line 98
                echo "        ";
            } else {
                // line 99
                echo "            ";
                $context["value"] = "";
                // line 100
                echo "        ";
            }
            // line 101
            echo "        <div class=\"btn-group filter_s\" data-tvfilter=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" data-filterval=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? $this->getContext($context, "value")), "|"), "html", null, true);
            echo "\">
            ";
            // line 103
            echo "            <a href=\"#\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"no-padding\">";
            echo ($context["title"] ?? $this->getContext($context, "title"));
            echo ":</span>
                <span>
                    ";
            // line 105
            if (twig_in_filter("0", ($context["value"] ?? $this->getContext($context, "value")))) {
                // line 106
                echo "                        ";
                echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All");
                if ((twig_length_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))) > 1)) {
                    echo "|";
                }
                // line 107
                echo "                    ";
            } else {
                // line 108
                echo "                        ";
                $context["value_str"] = "";
                // line 109
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["list_all"] ?? $this->getContext($context, "list_all")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 110
                    echo "                            ";
                    if (twig_in_filter($this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array"), ($context["value"] ?? $this->getContext($context, "value")))) {
                        // line 111
                        echo "                                ";
                        $context["value_str"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans(((($context["value_str"] ?? $this->getContext($context, "value_str")) . $this->getAttribute($context["item"], ($context["title_field"] ?? $this->getContext($context, "title_field")), [], "array")) . "|"));
                        // line 112
                        echo "                            ";
                    }
                    // line 113
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                        ";
                echo twig_trim_filter(($context["value_str"] ?? $this->getContext($context, "value_str")), "|");
                echo "
                    ";
            }
            // line 116
            echo "                </span>
                <i class=\"fa fa-caret-down\"></i>
                ";
            // line 118
            if ( !($context["default"] ?? $this->getContext($context, "default"))) {
                // line 119
                echo "                    <i class=\"fa fa-times-circle\"></i>
                ";
            }
            // line 121
            echo "            </a>
            <div class=\"dropdown-menu\">
                <select class=\"populate placeholder\" name=\"";
            // line 123
            echo ($context["name"] ?? $this->getContext($context, "name"));
            echo "\" id=\"filter_s2_";
            echo ($context["name"] ?? $this->getContext($context, "name"));
            echo "\" data-postponed=\"1\" multiple>
                    <option value=\"0\">";
            // line 124
            echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All");
            echo "</option>
                    ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_all"] ?? $this->getContext($context, "list_all")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 126
                echo "                        <option value=\"";
                echo $this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array");
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array"), ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["item"], ($context["title_field"] ?? $this->getContext($context, "title_field")), [], "array");
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                </select>
            </div>
            ";
            // line 131
            echo "        </div>
    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 135
    public function getget_filter_string_input($__name__ = null, $__title__ = null, $__id_field__ = null, $__title_field__ = null, $__list_all__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "id_field" => $__id_field__,
            "title_field" => $__title_field__,
            "list_all" => $__list_all__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 136
            echo "        ";
            if ((($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), ($context["name"] ?? $this->getContext($context, "name")), [], "any", true, true)) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array") != ""))) {
                // line 137
                echo "            ";
                $context["value"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array");
                // line 138
                echo "        ";
            } else {
                // line 139
                echo "            ";
                $context["value"] = "";
                // line 140
                echo "        ";
            }
            // line 141
            echo "        <div class=\"br filter\" data-tvfilter=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" data-filterval=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">
            ";
            // line 143
            echo "                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"no-padding\">";
            echo ($context["title"] ?? $this->getContext($context, "title"));
            echo ":</span>
                    <span>";
            // line 144
            echo ($context["value"] ?? $this->getContext($context, "value"));
            echo "</span>
                    <i class=\"fa fa-caret-down\"></i>
                    ";
            // line 146
            if ( !($context["default"] ?? $this->getContext($context, "default"))) {
                // line 147
                echo "                        <i class=\"fa fa-times-circle\"></i>
                    ";
            }
            // line 149
            echo "                </a>
                <div class=\"dropdown-menu\">
                    <input type=\"text\" name=\"";
            // line 151
            echo ($context["name"] ?? $this->getContext($context, "name"));
            echo "\" id=\"filter_string_";
            echo ($context["name"] ?? $this->getContext($context, "name"));
            echo "\" value=\"";
            echo ($context["value"] ?? $this->getContext($context, "value"));
            echo "\" class=\"filter_string autocomplete\">
                    <button class=\"btn btn-success filter_string\" type=\"button\" data-postponed=\"1\"><i class=\"fa fa-check\"></i></button>
                </div>
            ";
            // line 155
            echo "        </div>
    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 158
    public function getget_filter_datetime_input($__name__ = null, $__title__ = null, $__id_field__ = null, $__title_field__ = null, $__list_all__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "id_field" => $__id_field__,
            "title_field" => $__title_field__,
            "list_all" => $__list_all__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 159
            echo "        ";
            if ((($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), ($context["name"] ?? $this->getContext($context, "name")), [], "any", true, true)) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array") != ""))) {
                // line 160
                echo "            ";
                $context["value"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array");
                // line 161
                echo "        ";
            } else {
                // line 162
                echo "            ";
                $context["value"] = "";
                // line 163
                echo "        ";
            }
            // line 164
            echo "        <div class=\"br filter\" data-tvfilter=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" data-filterval=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "from", []), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "to", []), "html", null, true);
            echo "\">
            ";
            // line 166
            echo "            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"no-padding\">";
            echo ($context["title"] ?? $this->getContext($context, "title"));
            echo ":</span>
                <span>";
            // line 167
            echo $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "from", []);
            echo " - ";
            echo $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "to", []);
            echo "</span>
                <i class=\"fa fa-caret-down\"></i>
                ";
            // line 169
            if ( !($context["default"] ?? $this->getContext($context, "default"))) {
                // line 170
                echo "                    <i class=\"fa fa-times-circle\"></i>
                ";
            }
            // line 172
            echo "            </a>
            <div class=\"dropdown-menu\">
                <input type='text' class='datepicker filter_string' data-date-format='dd-mm-yy' name=\"";
            // line 174
            echo ($context["name"] ?? $this->getContext($context, "name"));
            echo "[from]\" id=\"filter_string_";
            echo ($context["name"] ?? $this->getContext($context, "name"));
            echo "_from\" value=\"";
            echo $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "from", []);
            echo "\">
                <input type='text' class='datepicker filter_string' data-date-format='dd-mm-yy' name=\"";
            // line 175
            echo ($context["name"] ?? $this->getContext($context, "name"));
            echo "[to]\" id=\"filter_string_";
            echo ($context["name"] ?? $this->getContext($context, "name"));
            echo "_to\" value=\"";
            echo $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "to", []);
            echo "\">
                <button class=\"btn btn-success filter_string\" type=\"button\" data-postponed=\"1\"><i class=\"fa fa-check\"></i></button>
            </div>
            ";
            // line 179
            echo "        </div>
    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 182
    public function getget_dropdown_attribute($__dropdownAttribute__ = null, $__list_id__ = null, $__list_title__ = null, $__list_width__ = null, $__with_all__ = null, $__no_padding__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "dropdownAttribute" => $__dropdownAttribute__,
            "list_id" => $__list_id__,
            "list_title" => $__list_title__,
            "list_width" => $__list_width__,
            "with_all" => $__with_all__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 183
            echo "        ";
            $context["main_macro_inside"] = $this;
            // line 184
            echo "        ";
            $context["set_id"] = "attribute_set";
            // line 185
            echo "        ";
            $context["set_title"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Attributes");
            // line 186
            echo "        ";
            $context["set_width"] = 1;
            // line 187
            echo "        ";
            if (((isset($context["list_id"]) || array_key_exists("list_id", $context)) && ($context["list_id"] ?? $this->getContext($context, "list_id")))) {
                // line 188
                echo "            ";
                $context["set_id"] = ($context["list_id"] ?? $this->getContext($context, "list_id"));
                // line 189
                echo "        ";
            }
            // line 190
            echo "        ";
            if (((isset($context["list_title"]) || array_key_exists("list_title", $context)) && ($context["list_title"] ?? $this->getContext($context, "list_title")))) {
                // line 191
                echo "            ";
                $context["set_title"] = ($context["list_title"] ?? $this->getContext($context, "list_title"));
                // line 192
                echo "        ";
            }
            // line 193
            echo "        ";
            if (((isset($context["list_width"]) || array_key_exists("list_width", $context)) && ($context["list_width"] ?? $this->getContext($context, "list_width")))) {
                // line 194
                echo "            ";
                $context["set_width"] = ($context["list_width"] ?? $this->getContext($context, "list_width"));
                // line 195
                echo "        ";
            }
            // line 196
            echo "        ";
            if (($context["with_all"] ?? $this->getContext($context, "with_all"))) {
                // line 197
                echo "            ";
                $context["with_all"] = ($context["with_all"] ?? $this->getContext($context, "with_all"));
                // line 198
                echo "        ";
            } else {
                // line 199
                echo "            ";
                $context["with_all"] = 1;
                // line 200
                echo "        ";
            }
            // line 201
            echo "        <div class=\"";
            if (((isset($context["list_title"]) || array_key_exists("list_title", $context)) && ($context["list_title"] ?? $this->getContext($context, "list_title")))) {
                echo "no-padding";
            }
            echo " attribute_set btn-group\" id=\"";
            echo twig_escape_filter($this->env, ($context["set_id"] ?? $this->getContext($context, "set_id")), "html", null, true);
            echo "\" style=\"\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">                    
                <span><img src=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/img/icon-dropdown-column.svg\" alt=\"\"></span>
                <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu pull-right\">
                ";
            // line 207
            if ((($context["with_all"] ?? $this->getContext($context, "with_all")) == 1)) {
                // line 208
                echo "                    ";
                if ($this->getAttribute(($context["dropdownAttribute"] ?? null), "all", [], "any", true, true)) {
                    // line 209
                    echo "                    ";
                    echo $context["main_macro_inside"]->getget_dropdown_attribute_item($this->getAttribute(($context["dropdownAttribute"] ?? $this->getContext($context, "dropdownAttribute")), "all", [], "array"), ($context["set_id"] ?? $this->getContext($context, "set_id")));
                    echo "
                    ";
                } else {
                    // line 211
                    echo "                <li>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" value=\"all\" name=\"";
                    // line 214
                    echo twig_escape_filter($this->env, ($context["set_id"] ?? $this->getContext($context, "set_id")), "html", null, true);
                    echo "[]\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All"), "html", null, true);
                    echo "
                            <i class=\"fa fa-square-o\"></i>
                        </label>
                    </div>
                </li>
                    ";
                }
                // line 220
                echo "                <li class=\"divider\"></li>
                ";
            }
            // line 222
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dropdownAttribute"] ?? $this->getContext($context, "dropdownAttribute")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 223
                echo "                    ";
                if (("all" != $this->getAttribute($context["item"], "name", []))) {
                    // line 224
                    echo "                ";
                    echo $context["main_macro_inside"]->getget_dropdown_attribute_item($context["item"], ($context["set_id"] ?? $this->getContext($context, "set_id")));
                    echo "
                    ";
                }
                // line 226
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "            </ul>
        </div>

    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 232
    public function getget_dropdown_attribute_item($__item__ = null, $__set_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "set_id" => $__set_id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 233
            echo "        ";
            // line 234
            echo "        <li data-filter='";
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "name", []);
            echo "'>
            <div class=\"checkbox ";
            // line 235
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "name", []) == "all")) {
                echo "checkbox-all";
            }
            echo "\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 237
            echo ($context["set_id"] ?? $this->getContext($context, "set_id"));
            echo "[]\" ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "name", []) == "operations")) {
                echo "readonly=\"readonly\" disabled=\"disabled\"";
            }
            echo " value=\"";
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "name", []);
            echo "\" ";
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "checked", [])) {
                echo "checked=\"";
                echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "checked", []);
                echo "\"";
            }
            echo "> ";
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "title", []);
            echo "
                    <i class=\"fa fa-square-o\"></i>
                </label>
            </div>
        </li>
        ";
            // line 243
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 245
    public function getget_datatable_head($__dropdownAttribute__ = null, $__addFirst__ = null, $__addLast__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "dropdownAttribute" => $__dropdownAttribute__,
            "addFirst" => $__addFirst__,
            "addLast" => $__addLast__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 246
            echo "        <thead>
            <tr>
        ";
            // line 249
            echo "            ";
            if (((isset($context["addFirst"]) || array_key_exists("addFirst", $context)) && ($context["addFirst"] ?? $this->getContext($context, "addFirst")))) {
                // line 250
                echo "                <th>";
                echo ($context["addFirst"] ?? $this->getContext($context, "addFirst"));
                echo "</th>
            ";
            }
            // line 252
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dropdownAttribute"] ?? $this->getContext($context, "dropdownAttribute")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 253
                echo "                ";
                if (("all" != $this->getAttribute($context["item"], "name", []))) {
                    // line 254
                    echo "                <th data-filter=\"";
                    echo $this->getAttribute($context["item"], "name", []);
                    echo "\">";
                    if ( !($this->getAttribute($context["item"], "name", []) == "operations")) {
                        echo $this->getAttribute($context["item"], "title", []);
                    }
                    echo "</th>
                ";
                }
                // line 256
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "            ";
            if (((isset($context["addLast"]) || array_key_exists("addLast", $context)) && ($context["addLast"] ?? $this->getContext($context, "addLast")))) {
                // line 258
                echo "                <th>";
                echo ($context["addLast"] ?? $this->getContext($context, "addLast"));
                echo "</th>
            ";
            }
            // line 260
            echo "        ";
            // line 261
            echo "            </tr>
        </thead>
    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 265
    public function getget_datatable_column($__dropdownAttribute__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "dropdownAttribute" => $__dropdownAttribute__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 266
            echo "        \"columns\": [
        ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dropdownAttribute"] ?? $this->getContext($context, "dropdownAttribute")));
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
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 268
                echo "            ";
                if (("all" != $this->getAttribute($context["item"], "name", []))) {
                    // line 269
                    echo "            {\"data\": \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                    echo "\" ";
                    if ( !$this->getAttribute($context["item"], "checked", [])) {
                        echo ", visible: false, className: 'none'";
                    }
                    echo "}";
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ",";
                    }
                    // line 270
                    echo "            ";
                }
                // line 271
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "        ],
    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 275
    public function getget_filter_button_bar($__name__ = null, $__id_field__ = null, $__title_field__ = null, $__list_all__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "id_field" => $__id_field__,
            "title_field" => $__title_field__,
            "list_all" => $__list_all__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            echo "           
            ";
            // line 277
            echo "           
                ";
            // line 278
            if (($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), ($context["name"] ?? $this->getContext($context, "name")), [], "any", true, true))) {
                // line 279
                echo "                    ";
                $context["f_name"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array");
                // line 280
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["list_all"] ?? $this->getContext($context, "list_all")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 281
                    echo "                <a href=\"";
                    echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []);
                    echo "/";
                    echo $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []);
                    echo "/";
                    echo $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "action_alias", []);
                    echo "?filters[";
                    echo ($context["name"] ?? $this->getContext($context, "name"));
                    echo "]=";
                    echo $this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array");
                    echo "\" class=\"pull-left btn btn-success ";
                    if ((($context["f_name"] ?? $this->getContext($context, "f_name")) == $this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array"))) {
                        echo "active";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["item"], ($context["title_field"] ?? $this->getContext($context, "title_field")), [], "array");
                    echo "</a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 283
                echo "                ";
            }
            // line 284
            echo "          
            ";
            // line 286
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 288
    public function getget_datepicker_double_input($__width__ = null, $__half__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "width" => $__width__,
            "half" => $__half__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 289
            echo "        ";
            if ( !($context["width"] ?? $this->getContext($context, "width"))) {
                // line 290
                echo "            ";
                $context["width"] = 5;
                // line 291
                echo "        ";
            }
            // line 292
            echo "        ";
            if ( !($context["half"] ?? $this->getContext($context, "half"))) {
                // line 293
                echo "            ";
                $context["half"] = ((int) floor((($context["width"] ?? $this->getContext($context, "width")) / 2)) + 1);
                // line 294
                echo "            ";
                $context["style"] = "";
                // line 295
                echo "        ";
            } else {
                // line 296
                echo "            ";
                $context["style"] = "style=\"margin-right: 0px;\"";
                // line 297
                echo "        ";
            }
            // line 298
            echo "        <div class=\"col-xs-";
            echo twig_escape_filter($this->env, (($context["width"] ?? $this->getContext($context, "width")) + 1), "html", null, true);
            echo " col-sm-";
            echo twig_escape_filter($this->env, (($context["width"] ?? $this->getContext($context, "width")) + 4), "html", null, true);
            echo " col-md-";
            echo twig_escape_filter($this->env, (($context["width"] ?? $this->getContext($context, "width")) + 1), "html", null, true);
            echo " col-lg-";
            echo twig_escape_filter($this->env, ($context["width"] ?? $this->getContext($context, "width")), "html", null, true);
            echo " filter pull-left\" data-tvfilter=\"time_period\" >
            <div class=\"col-sm-";
            // line 299
            echo twig_escape_filter($this->env, ($context["half"] ?? $this->getContext($context, "half")), "html", null, true);
            echo " filter no-padding leftbordercircle\" data-tvfilter=\"time_period\" ";
            echo ($context["style"] ?? $this->getContext($context, "style"));
            echo ">
                <input class=\"col-xs-12 col-sm-12 filter\" placeholder=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("from"), "html", null, true);
            echo "\" type=\"text\" id=\"datepicker_from\" name=\"interval_from\" value=\"";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), "interval_from", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "interval_from", [], "array"), "html", null, true);
            }
            echo "\">
            </div>
            <div class=\"col-sm-";
            // line 302
            echo twig_escape_filter($this->env, ($context["half"] ?? $this->getContext($context, "half")), "html", null, true);
            echo " filter no-padding\" data-tvfilter=\"time_period\" ";
            echo ($context["style"] ?? $this->getContext($context, "style"));
            echo ">
                <input class=\"col-xs-12 col-sm-12 filter\" placeholder=\"";
            // line 303
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("to"), "html", null, true);
            echo "\" type=\"text\" id=\"datepicker_to\" name=\"interval_to\" value=\"";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), "interval_to", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "interval_to", [], "array"), "html", null, true);
            }
            echo "\">
            </div>
        </div>
    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 308
    public function getget_datepicker_js_script($__notDateLimit__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "notDateLimit" => $__notDateLimit__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 309
            echo "        var datePickerOpt = {
        ";
            // line 310
            if ( !(isset($context["notDateLimit"]) || array_key_exists("notDateLimit", $context))) {
                // line 311
                echo "            maxDate: 0,
        ";
            }
            // line 313
            echo "        ";
            if (($this->getAttribute(($context["app"] ?? null), "minDatepickerDate", [], "any", true, true) &&  !(isset($context["notDateLimit"]) || array_key_exists("notDateLimit", $context)))) {
                // line 314
                echo "            minDate: new Date(";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "minDatepickerDate", [], "array"), "html", null, true);
                echo " * 1000),
        ";
            }
            // line 316
            echo "            numberOfMonths: 1,
            language: 'ru',
            firstDay: 1,
            dateFormat: 'dd/mm/yy',
            dayNamesMin: [
                '";
            // line 321
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
            echo "',
                '";
            // line 322
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
            echo "',
                '";
            // line 323
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
            echo "',
                '";
            // line 324
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
            echo "',
                '";
            // line 325
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
            echo "',
                '";
            // line 326
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
            echo "',
                '";
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
            echo "'
            ],
            monthNames: [
                '";
            // line 330
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
            echo "',
                '";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
            echo "',
                '";
            // line 332
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
            echo "',
                '";
            // line 333
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
            echo "',
                '";
            // line 334
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
            echo "',
                '";
            // line 335
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
            echo "',
                '";
            // line 336
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
            echo "',
                '";
            // line 337
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
            echo "',
                '";
            // line 338
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
            echo "',
                '";
            // line 339
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
            echo "',
                '";
            // line 340
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
            echo "',
                '";
            // line 341
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
            echo "'
            ],
            onClose: function(){}
        };
        datePickerOpt.onClose = function (selectedDate) {
        \$(\"#datepicker_to\").datepicker(\"option\", \"minDate\", selectedDate);
            \$('#datatable-1').DataTable().ajax.reload();
        };
        if (typeof(datePickerOptAlt) != 'undefined') {
             \$.extend(datePickerOpt, datePickerOptAlt);
        }
        \$(\"#datepicker_from\").datepicker(datePickerOpt);

        datePickerOpt.onClose = function (selectedDate) {
        \$(\"#datepicker_from\").datepicker(\"option\", \"maxDate\", selectedDate);
            \$('#datatable-1').DataTable().ajax.reload();
        };
        if (typeof(datePickerOptAlt) != 'undefined') {
            \$.extend(datePickerOpt, datePickerOptAlt);
        }
        \$(\"#datepicker_to\").datepicker(datePickerOpt);
    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 364
    public function getset_monitoring_status($__value__ = null, $__key__ = null, $__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "key" => $__key__,
            "status" => $__status__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 365
            echo "        ";
            if (($context["status"] ?? $this->getContext($context, "status"))) {
                // line 366
                echo "            ";
                if ($this->getAttribute(($context["value"] ?? null), ($context["key"] ?? $this->getContext($context, "key")), [], "any", true, true)) {
                    // line 367
                    echo "            <div >
                <label class=\"nowrap txt-";
                    // line 368
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["key"] ?? $this->getContext($context, "key")), [], "array"), "vars", []), "data", [])) {
                        echo "success";
                    } else {
                        echo "danger";
                    }
                    echo "\">
                    ";
                    // line 369
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["key"] ?? $this->getContext($context, "key")), [], "array"), "vars", []), "data", [])) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("OK"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No signal"), "html", null, true);
                    }
                    // line 370
                    echo "                </label>
            </div>
            ";
                }
                // line 373
                echo "        ";
            } else {
                // line 374
                echo "            <div>
                <label> - </label>
            </div>
        ";
            }
            // line 378
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "default/macro/iptw_macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1425 => 378,  1419 => 374,  1416 => 373,  1411 => 370,  1405 => 369,  1397 => 368,  1394 => 367,  1391 => 366,  1388 => 365,  1374 => 364,  1337 => 341,  1333 => 340,  1329 => 339,  1325 => 338,  1321 => 337,  1317 => 336,  1313 => 335,  1309 => 334,  1305 => 333,  1301 => 332,  1297 => 331,  1293 => 330,  1287 => 327,  1283 => 326,  1279 => 325,  1275 => 324,  1271 => 323,  1267 => 322,  1263 => 321,  1256 => 316,  1250 => 314,  1247 => 313,  1243 => 311,  1241 => 310,  1238 => 309,  1226 => 308,  1203 => 303,  1197 => 302,  1188 => 300,  1182 => 299,  1171 => 298,  1168 => 297,  1165 => 296,  1162 => 295,  1159 => 294,  1156 => 293,  1153 => 292,  1150 => 291,  1147 => 290,  1144 => 289,  1131 => 288,  1116 => 286,  1113 => 284,  1110 => 283,  1087 => 281,  1082 => 280,  1079 => 279,  1077 => 278,  1074 => 277,  1057 => 275,  1041 => 272,  1027 => 271,  1024 => 270,  1013 => 269,  1010 => 268,  993 => 267,  990 => 266,  978 => 265,  961 => 261,  959 => 260,  953 => 258,  950 => 257,  944 => 256,  934 => 254,  931 => 253,  926 => 252,  920 => 250,  917 => 249,  913 => 246,  899 => 245,  884 => 243,  862 => 237,  855 => 235,  850 => 234,  848 => 233,  835 => 232,  817 => 227,  811 => 226,  805 => 224,  802 => 223,  797 => 222,  793 => 220,  782 => 214,  777 => 211,  771 => 209,  768 => 208,  766 => 207,  759 => 203,  749 => 201,  746 => 200,  743 => 199,  740 => 198,  737 => 197,  734 => 196,  731 => 195,  728 => 194,  725 => 193,  722 => 192,  719 => 191,  716 => 190,  713 => 189,  710 => 188,  707 => 187,  704 => 186,  701 => 185,  698 => 184,  695 => 183,  678 => 182,  662 => 179,  652 => 175,  644 => 174,  640 => 172,  636 => 170,  634 => 169,  627 => 167,  622 => 166,  613 => 164,  610 => 163,  607 => 162,  604 => 161,  601 => 160,  598 => 159,  581 => 158,  565 => 155,  555 => 151,  551 => 149,  547 => 147,  545 => 146,  540 => 144,  535 => 143,  528 => 141,  525 => 140,  522 => 139,  519 => 138,  516 => 137,  513 => 136,  496 => 135,  480 => 131,  476 => 128,  461 => 126,  457 => 125,  453 => 124,  447 => 123,  443 => 121,  439 => 119,  437 => 118,  433 => 116,  427 => 114,  421 => 113,  418 => 112,  415 => 111,  412 => 110,  407 => 109,  404 => 108,  401 => 107,  395 => 106,  393 => 105,  387 => 103,  380 => 101,  377 => 100,  374 => 99,  371 => 98,  368 => 97,  365 => 96,  348 => 95,  332 => 91,  327 => 88,  324 => 87,  313 => 83,  310 => 82,  308 => 81,  302 => 80,  293 => 76,  288 => 75,  285 => 74,  280 => 73,  278 => 72,  274 => 71,  267 => 70,  264 => 69,  261 => 68,  258 => 67,  255 => 66,  252 => 65,  250 => 63,  247 => 62,  244 => 61,  241 => 60,  238 => 59,  235 => 58,  232 => 57,  229 => 56,  226 => 55,  223 => 54,  220 => 53,  217 => 52,  214 => 51,  211 => 50,  208 => 49,  205 => 48,  202 => 47,  199 => 46,  196 => 45,  193 => 44,  190 => 43,  170 => 42,  155 => 40,  143 => 38,  137 => 35,  131 => 33,  123 => 31,  120 => 30,  117 => 29,  102 => 28,  87 => 26,  72 => 20,  68 => 18,  60 => 13,  53 => 9,  49 => 7,  46 => 6,  32 => 5,  28 => 2,  26 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/macro/iptw_macro.twig", "/var/www/html/stalker_portal/admin/resources/views/default/macro/iptw_macro.twig");
    }
}
