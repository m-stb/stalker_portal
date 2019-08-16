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

/* default/layout.twig */
class __TwigTemplate_bcc85578e0c14b2a30d97061fd77d71d43c01f83d56c0b7e051a04b962b2c79e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'container' => [$this, 'block_container'],
            'maincontainer' => [$this, 'block_maincontainer'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"";
        // line 3
        if (($this->getAttribute(($context["app"] ?? null), "language", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", [], "array")) == 2))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", [], "array"), "html", null, true);
        } else {
            echo "en";
        }
        echo "\">
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body ";
        // line 12
        echo (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "COOKIE", []), "get", [0 => "menuSidebarState"], "method")) ? ((("class=\"sidebar-" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "COOKIE", []), "get", [0 => "menuSidebarState"], "method")) . "\"")) : (""));
        echo ">
        ";
        // line 13
        $this->displayBlock('container', $context, $blocks);
        // line 61
        echo "\t\t\t
    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</title>
            ";
        // line 8
        $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "basic_templates/meta.twig"), "default/layout.twig", 8)->display($context);
        // line 9
        echo "            ";
        $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "basic_templates/css.twig"), "default/layout.twig", 9)->display($context);
        // line 10
        echo "        ";
    }

    // line 13
    public function block_container($context, array $blocks = [])
    {
        // line 14
        echo "        ";
        $this->displayBlock('maincontainer', $context, $blocks);
        // line 60
        echo "        ";
    }

    // line 14
    public function block_maincontainer($context, array $blocks = [])
    {
        // line 15
        echo "                
                ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "
                ";
        // line 20
        $this->displayBlock('sidebar', $context, $blocks);
        // line 23
        echo "                
                <!--Start Container-->
                <div id=\"wrapper\">
                    
                    <div id=\"main\" class=\"container-fluid\">

                        <div class=\"row\">

                            <!--Start Content-->
                            <div id=\"main-wrapper\" >
                                <div id=\"content\" class=\"content\">
                                    <div class=\"preloader\">
                                        <img src=\"img/devoops_getdata.gif\" class=\"devoops-getdata\" alt=\"preloader\"/>
                                    </div>
                                    <div id=\"ajax-content\">
                                        ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "                                    </div>
                                </div>
                            </div>
                            <!--End Content-->

                        </div>
                    </div>

                    ";
        // line 49
        echo "                    ";
        $this->displayBlock('footer_js', $context, $blocks);
        // line 52
        echo "                 
                    ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "
                <!--End Container--></div>
        
        ";
    }

    // line 16
    public function block_header($context, array $blocks = [])
    {
        // line 17
        echo "                    ";
        $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "basic_templates/frgHeader/frgHeader.twig"), "default/layout.twig", 17)->display($context);
        // line 18
        echo "                ";
    }

    // line 20
    public function block_sidebar($context, array $blocks = [])
    {
        // line 21
        echo "                    ";
        $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "basic_templates/frgSidebar/frgSidebar.twig"), "default/layout.twig", 21)->display($context);
        // line 22
        echo "                ";
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        // line 39
        echo "                                        ";
    }

    // line 49
    public function block_footer_js($context, array $blocks = [])
    {
        // line 50
        echo "                        ";
        $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "basic_templates/footer_js.twig"), "default/layout.twig", 50)->display($context);
        // line 51
        echo "                    ";
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        // line 54
        echo "                        ";
        $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "basic_templates/frgFooter/frgFooter.twig"), "default/layout.twig", 54)->display($context);
        // line 55
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "default/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 55,  195 => 54,  192 => 53,  188 => 51,  185 => 50,  182 => 49,  178 => 39,  175 => 38,  171 => 22,  168 => 21,  165 => 20,  161 => 18,  158 => 17,  155 => 16,  148 => 56,  146 => 53,  143 => 52,  140 => 49,  130 => 40,  128 => 38,  111 => 23,  109 => 20,  106 => 19,  104 => 16,  101 => 15,  98 => 14,  94 => 60,  91 => 14,  88 => 13,  84 => 10,  81 => 9,  79 => 8,  75 => 7,  72 => 6,  69 => 5,  62 => 61,  60 => 13,  56 => 12,  53 => 11,  51 => 5,  42 => 3,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout.twig", "/var/www/html/stalker_portal/admin/resources/views/default/layout.twig");
    }
}
