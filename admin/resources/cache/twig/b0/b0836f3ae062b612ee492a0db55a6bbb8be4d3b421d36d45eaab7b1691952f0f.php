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

/* default/macro/iptw_macro2.twig */
class __TwigTemplate_cd842f613594b1874c8383262a1ad60811d1635887a12a9492a1df2eacac0df0 extends \Twig\Template
{
    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate($this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig")), "default/macro/iptw_macro2.twig", 2);
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
    public function getget_filter($__name__ = null, $__title__ = null, $__id_field__ = null, $__title_field__ = null, $__list_all__ = null, $__block_width__ = null, $__label_width__ = null, $__without_all__ = null, ...$__varargs__)
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
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 43
            echo "        ";
            if (($context["without_all"] ?? $this->getContext($context, "without_all"))) {
                // line 44
                echo "            ";
                $context["list"] = "";
                // line 45
                echo "        ";
            } else {
                // line 46
                echo "            ";
                $context["list"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((("<li><a href=\"#\" data-filter=\"0\"><span>" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "translator", []), "trans", [0 => "All"], "method")) . "</span></a></li>"));
                // line 47
                echo "        ";
            }
            // line 48
            echo "        ";
            if ( !($context["block_width"] ?? $this->getContext($context, "block_width"))) {
                // line 49
                echo "            ";
                $context["block_width"] = 3;
                // line 50
                echo "        ";
            } else {
                // line 51
                echo "            ";
                $context["block_width"] = (($context["block_width"] ?? $this->getContext($context, "block_width")) + 3);
                // line 52
                echo "        ";
            }
            // line 53
            echo "        ";
            if ( !($context["label_width"] ?? $this->getContext($context, "label_width"))) {
                // line 54
                echo "            ";
                $context["label_width"] = 4;
                // line 55
                echo "        ";
            } else {
                // line 56
                echo "            ";
                $context["label_width"] = ($context["label_width"] ?? $this->getContext($context, "label_width"));
                // line 57
                echo "        ";
            }
            // line 58
            echo "        ";
            // line 60
            echo "        <div class=\"br  filter\" data-tvfilter=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">      <span class=\"no-padding\">";
            // line 61
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo ":</span>
            ";
            // line 62
            if ((($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), ($context["name"] ?? $this->getContext($context, "name")), [], "any", true, true)) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array") != "0"))) {
                // line 63
                echo "                ";
                $context["f_name"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array");
                // line 64
                echo "            ";
            } else {
                // line 65
                echo "                ";
                $context["f_name"] = 0;
                // line 66
                echo "            ";
            }
            // line 67
            echo "            ";
            $context["list_f"] = ($context["list"] ?? $this->getContext($context, "list"));
            echo "                       
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_all"] ?? $this->getContext($context, "list_all")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 69
                echo "                ";
                $context["list_f"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((((((($context["list_f"] ?? $this->getContext($context, "list_f")) . "<li><a href=\"#\" data-filter=\"") . $this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array")) . "\"><span>") . $this->getAttribute($context["item"], ($context["title_field"] ?? $this->getContext($context, "title_field")), [], "array")) . "</span></a></li>"));
                // line 70
                echo "                ";
                if (( !(($context["f_name"] ?? $this->getContext($context, "f_name")) === 0) && (($context["f_name"] ?? $this->getContext($context, "f_name")) == $this->getAttribute($context["item"], ($context["id_field"] ?? $this->getContext($context, "id_field")), [], "array")))) {
                    echo "                       
                                       
                        <span>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], ($context["title_field"] ?? $this->getContext($context, "title_field")), [], "array"), "html", null, true);
                    echo "</span>
                        <i class=\"fa fa-caret-down\"></i>
                    </a>
                ";
                }
                // line 76
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            ";
            // line 78
            echo "                ";
            if ((($context["f_name"] ?? $this->getContext($context, "f_name")) === 0)) {
                // line 79
                echo "                                  
                        <span>";
                // line 80
                if (($context["without_all"] ?? $this->getContext($context, "without_all"))) {
                } else {
                    echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "translator", []), "trans", [0 => "All"], "method");
                }
                echo "</span>
                        <i class=\"fa fa-caret-down\"></i>
                    </a>
                ";
            }
            // line 84
            echo "                <ul class=\"dropdown-menu pull-left\">
                    ";
            // line 85
            echo ($context["list_f"] ?? $this->getContext($context, "list_f"));
            echo "
                </ul>
            ";
            // line 88
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

    // line 91
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
            // line 92
            echo "        ";
            $context["main_macro_inside"] = $this;
            // line 93
            echo "        ";
            $context["set_id"] = "attribute_set";
            // line 94
            echo "        ";
            $context["set_title"] = "А";
            // line 95
            echo "        ";
            $context["set_width"] = 1;
            // line 96
            echo "        ";
            if (((isset($context["list_id"]) || array_key_exists("list_id", $context)) && ($context["list_id"] ?? $this->getContext($context, "list_id")))) {
                // line 97
                echo "            ";
                $context["set_id"] = ($context["list_id"] ?? $this->getContext($context, "list_id"));
                // line 98
                echo "        ";
            }
            // line 99
            echo "        ";
            if (((isset($context["list_title"]) || array_key_exists("list_title", $context)) && ($context["list_title"] ?? $this->getContext($context, "list_title")))) {
                // line 100
                echo "            ";
                $context["set_title"] = ($context["list_title"] ?? $this->getContext($context, "list_title"));
                // line 101
                echo "        ";
            }
            // line 102
            echo "        ";
            if (((isset($context["list_width"]) || array_key_exists("list_width", $context)) && ($context["list_width"] ?? $this->getContext($context, "list_width")))) {
                // line 103
                echo "            ";
                $context["set_width"] = ($context["list_width"] ?? $this->getContext($context, "list_width"));
                // line 104
                echo "        ";
            }
            // line 105
            echo "        ";
            if (($context["with_all"] ?? $this->getContext($context, "with_all"))) {
                // line 106
                echo "            ";
                $context["with_all"] = ($context["with_all"] ?? $this->getContext($context, "with_all"));
                // line 107
                echo "        ";
            } else {
                // line 108
                echo "            ";
                $context["with_all"] = 1;
                // line 109
                echo "        ";
            }
            // line 110
            echo "        <div class=\"btn-group filter_s  ";
            echo " attribute_set\" id=\"";
            echo twig_escape_filter($this->env, ($context["set_id"] ?? $this->getContext($context, "set_id")), "html", null, true);
            echo "\">
            <a href=\"#\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">                    
                <span>";
            // line 112
            echo twig_escape_filter($this->env, ($context["set_title"] ?? $this->getContext($context, "set_title")), "html", null, true);
            echo "</span>
                <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu pull-left\">
                ";
            // line 116
            if ((($context["with_all"] ?? $this->getContext($context, "with_all")) == 1)) {
                // line 117
                echo "                <li>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" value=\"all\" name=\"";
                // line 120
                echo twig_escape_filter($this->env, ($context["set_id"] ?? $this->getContext($context, "set_id")), "html", null, true);
                echo "[]\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "translator", []), "trans", [0 => "All"], "method"), "html", null, true);
                echo "
                            <i class=\"fa fa-square-o\"></i>
                        </label>
                    </div>
                </li>
                <li class=\"divider\"></li>
                ";
            }
            // line 127
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dropdownAttribute"] ?? $this->getContext($context, "dropdownAttribute")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 128
                echo "                ";
                echo $context["main_macro_inside"]->getget_dropdown_attribute_item($context["item"], ($context["set_id"] ?? $this->getContext($context, "set_id")));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
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

    // line 135
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
            // line 136
            echo "        ";
            // line 137
            echo "        <li data-filter='";
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "name", []);
            echo "'>
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 140
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
            // line 146
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

    // line 148
    public function getget_datatable_head($__dropdownAttribute__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "dropdownAttribute" => $__dropdownAttribute__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 149
            echo "        <thead>
            <tr>
        ";
            // line 152
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dropdownAttribute"] ?? $this->getContext($context, "dropdownAttribute")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 153
                echo "                <th data-filter=\"";
                echo $this->getAttribute($context["item"], "name", []);
                echo "\">";
                if ( !($this->getAttribute($context["item"], "name", []) == "operations")) {
                    echo $this->getAttribute($context["item"], "title", []);
                }
                echo "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "        ";
            // line 156
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

    // line 160
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
            // line 162
            echo "           
                ";
            // line 163
            if (($this->getAttribute(($context["app"] ?? null), "filters", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filters", [], "array", false, true), ($context["name"] ?? $this->getContext($context, "name")), [], "any", true, true))) {
                // line 164
                echo "                    ";
                $context["f_name"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), ($context["name"] ?? $this->getContext($context, "name")), [], "array");
                // line 165
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["list_all"] ?? $this->getContext($context, "list_all")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 166
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
                    echo "\" class=\"btn btn-success ";
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
                // line 168
                echo "                ";
            }
            // line 169
            echo "          
            ";
            // line 171
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
        return "default/macro/iptw_macro2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 171,  636 => 169,  633 => 168,  610 => 166,  605 => 165,  602 => 164,  600 => 163,  597 => 162,  580 => 160,  563 => 156,  561 => 155,  548 => 153,  543 => 152,  539 => 149,  527 => 148,  512 => 146,  490 => 140,  483 => 137,  481 => 136,  468 => 135,  450 => 130,  441 => 128,  436 => 127,  424 => 120,  419 => 117,  417 => 116,  410 => 112,  403 => 110,  400 => 109,  397 => 108,  394 => 107,  391 => 106,  388 => 105,  385 => 104,  382 => 103,  379 => 102,  376 => 101,  373 => 100,  370 => 99,  367 => 98,  364 => 97,  361 => 96,  358 => 95,  355 => 94,  352 => 93,  349 => 92,  332 => 91,  316 => 88,  311 => 85,  308 => 84,  298 => 80,  295 => 79,  292 => 78,  290 => 77,  284 => 76,  277 => 72,  271 => 70,  268 => 69,  264 => 68,  259 => 67,  256 => 66,  253 => 65,  250 => 64,  247 => 63,  245 => 62,  241 => 61,  236 => 60,  234 => 58,  231 => 57,  228 => 56,  225 => 55,  222 => 54,  219 => 53,  216 => 52,  213 => 51,  210 => 50,  207 => 49,  204 => 48,  201 => 47,  198 => 46,  195 => 45,  192 => 44,  189 => 43,  170 => 42,  155 => 40,  143 => 38,  137 => 35,  131 => 33,  123 => 31,  120 => 30,  117 => 29,  102 => 28,  87 => 26,  72 => 20,  68 => 18,  60 => 13,  53 => 9,  49 => 7,  46 => 6,  32 => 5,  28 => 2,  26 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/macro/iptw_macro2.twig", "/var/www/html/stalker_portal/admin/resources/views/default/macro/iptw_macro2.twig");
    }
}
