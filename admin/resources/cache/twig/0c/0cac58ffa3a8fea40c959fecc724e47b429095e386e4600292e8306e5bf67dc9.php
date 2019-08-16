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

/* default/basic_templates/frgSidebar/frgSidebar.twig */
class __TwigTemplate_0804a76baacf14a6e6be750a412eee943cfd5db300c8f7439fc53ada778dc4d9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "<div id=\"sidebar-left\" class=\"col-xs-12 col-sm-2\">
    ";
        // line 3
        if ($this->getAttribute(($context["app"] ?? null), "side_bar", [], "any", true, true)) {
            // line 4
            echo "        <div class=\"scroll-btn scroll-btn-up fa fa-angle-up\"></div>
        <ul class=\"nav main-menu\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "side_bar", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "                <li class=\"dropdown ";
                if (($this->getAttribute($context["item"], "alias", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []))) {
                    echo "selected";
                }
                echo "\">
                    <a  href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                echo "/";
                (($this->getAttribute($context["item"], "alias", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["item"], "alias", []), "html", null, true))) : (print ("#")));
                echo "\" 
                        class=\"dropdown-toggle ";
                // line 9
                if (($this->getAttribute($context["item"], "alias", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []))) {
                    echo "opened";
                }
                echo "\">
                        ";
                // line 10
                if ($this->getAttribute($context["item"], "icon", [])) {
                    // line 11
                    echo "                            <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 13
                echo "                        <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo " ";
                if ($this->getAttribute($context["item"], "new", [], "any", true, true)) {
                    echo "<sup><span class=\"txt-danger\">New!</span></sup>";
                }
                echo "</span>
                        ";
                // line 14
                if ($this->getAttribute($context["item"], "add_params", [], "any", true, true)) {
                    // line 15
                    echo "                            ";
                    // line 16
                    echo "                            ";
                    echo $this->getAttribute($context["item"], "add_params", [], "array");
                    echo "
                            ";
                    // line 18
                    echo "                        ";
                }
                // line 19
                echo "                        ";
                if ($this->getAttribute($context["item"], "icon2", [])) {
                    // line 20
                    echo "                            <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon2", []), "html", null, true);
                    echo "\"></i>
                        ";
                } elseif ($this->getAttribute(                // line 21
$context["item"], "action", [])) {
                    // line 22
                    echo "                            <i class=\"pull-right fa fa-chevron-left\"></i>
                        ";
                }
                // line 24
                echo "                    </a>
                    ";
                // line 25
                if ($this->getAttribute($context["item"], "action", [])) {
                    // line 26
                    echo "                        <ul class=\"dropdown-menu\">
                        ";
                }
                // line 28
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "action", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item_action"]) {
                    // line 29
                    echo "                            ";
                    if ($this->getAttribute($context["item_action"], "self_parent_alias", [], "any", true, true)) {
                        // line 30
                        echo "                                ";
                        $context["parent_alias"] = $this->getAttribute($context["item_action"], "self_parent_alias", [], "array");
                        // line 31
                        echo "                            ";
                    } elseif ($this->getAttribute($context["item"], "alias", [], "any", true, true)) {
                        // line 32
                        echo "                                ";
                        $context["parent_alias"] = $this->getAttribute($context["item"], "alias", [], "array");
                        // line 33
                        echo "                            ";
                    } else {
                        // line 34
                        echo "                                ";
                        $context["parent_alias"] = "";
                        // line 35
                        echo "                            ";
                    }
                    // line 36
                    echo "                            <li>
                                <a class=\"bord ";
                    // line 37
                    if ((($this->getAttribute($context["item_action"], "alias", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "action_alias", [])) || ((isset($context["active_alias"]) || array_key_exists("active_alias", $context)) && (($context["active_alias"] ?? $this->getContext($context, "active_alias")) == $this->getAttribute($context["item_action"], "alias", []))))) {
                        echo "active-parent active";
                    }
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                    echo "/";
                    ((($context["parent_alias"] ?? $this->getContext($context, "parent_alias"))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($context["parent_alias"] ?? $this->getContext($context, "parent_alias")) . "/")), "html", null, true))) : (print ("")));
                    (($this->getAttribute($context["item_action"], "alias", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["item_action"], "alias", []), "html", null, true))) : (print ("")));
                    echo "\">
                                    ";
                    // line 38
                    if ($this->getAttribute($context["item_action"], "icon", [])) {
                        echo "<i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item_action"], "icon", []), "html", null, true);
                        echo "\"></i> ";
                    }
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item_action"], "name", []), "html", null, true);
                    echo "
                                ";
                    // line 39
                    if ($this->getAttribute($context["item_action"], "add_params", [], "any", true, true)) {
                        // line 40
                        echo "                                    ";
                        // line 41
                        echo "                                    ";
                        echo $this->getAttribute($context["item_action"], "add_params", [], "array");
                        echo "
                                    ";
                        // line 43
                        echo "                                ";
                    }
                    // line 44
                    echo "                                </a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                        ";
                if ($this->getAttribute($context["item"], "action", [])) {
                    // line 48
                    echo "                        </ul>
                    ";
                }
                // line 50
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </ul>
        <div class=\"scroll-btn scroll-btn-down fa fa-angle-down\"></div>
    ";
        }
        // line 55
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/frgSidebar/frgSidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 55,  199 => 52,  192 => 50,  188 => 48,  185 => 47,  177 => 44,  174 => 43,  169 => 41,  167 => 40,  165 => 39,  156 => 38,  145 => 37,  142 => 36,  139 => 35,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  116 => 28,  112 => 26,  110 => 25,  107 => 24,  103 => 22,  101 => 21,  96 => 20,  93 => 19,  90 => 18,  85 => 16,  83 => 15,  81 => 14,  72 => 13,  64 => 11,  62 => 10,  56 => 9,  50 => 8,  43 => 7,  39 => 6,  35 => 4,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/frgSidebar/frgSidebar.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/frgSidebar/frgSidebar.twig");
    }
}
