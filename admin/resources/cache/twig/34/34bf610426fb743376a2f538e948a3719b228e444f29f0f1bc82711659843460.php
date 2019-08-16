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

/* default/ApplicationCatalog/tos/tos.twig */
class __TwigTemplate_9e1fc29d8d394efe1bcca42b4f5ec8a2044955986d78bf73b723cd686cd0c623 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig")), "default/ApplicationCatalog/tos/tos.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["active"] = "application-catalog";
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Applications") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Terms of Service."));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "    <div id=\"iptv_list\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12\">
                ";
        // line 11
        if ($this->getAttribute(($context["app"] ?? null), "tos", [], "any", true, true)) {
            // line 12
            echo "                    ";
            // line 13
            echo "                    ";
            echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tos", []), "tos_en", []);
            echo "
                    ";
            // line 15
            echo "                ";
        }
        // line 16
        echo "            </div>
            <div class=\"col-xs-12 col-sm-12\">
                <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "workHost", []), "html", null, true);
        echo "server/adm/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/accept-tos\">
                    <input type=\"hidden\" name=\"tos_alias\" value=\"";
        // line 19
        if ($this->getAttribute(($context["app"] ?? null), "tos_alias", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tos_alias", []), "html", null, true);
        }
        echo "\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <div class=\"form-group\">
                                <div class=\"checkbox-inline\" style=\"margin-left: 7px\">
                                    <label style=\"margin-top: 0;\">
                                        <input type=\"checkbox\" value=\"1\" name=\"accepted\" ";
        // line 25
        if (( !$this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) || ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", []) != "admin"))) {
            echo "readonly=\"readonly\" disabled=\"disabled\"";
        }
        echo ">
                                        <i class=\"fa fa-square-o small\"></i>
                                        <span class=\"txt-default\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("I AGREE I have read and agree to all of terms and conditions above"), "html", null, true);
        echo "</span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-success\" ";
        // line 32
        if (( !$this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) || ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", []) != "admin"))) {
            echo "readonly=\"readonly\" disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Agree"), "html", null, true);
        echo "</button>
                                <a class=\"btn btn-success no_context_menu\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "workHost", []), "html", null, true);
        echo "server/adm/\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Do Not Agree"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col-xs-12 col-sm-12\"><br/></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/ApplicationCatalog/tos/tos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  99 => 32,  91 => 27,  84 => 25,  73 => 19,  67 => 18,  63 => 16,  60 => 15,  55 => 13,  53 => 12,  51 => 11,  46 => 8,  43 => 7,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/ApplicationCatalog/tos/tos.twig", "/var/www/html/stalker_portal/admin/resources/views/default/ApplicationCatalog/tos/tos.twig");
    }
}
