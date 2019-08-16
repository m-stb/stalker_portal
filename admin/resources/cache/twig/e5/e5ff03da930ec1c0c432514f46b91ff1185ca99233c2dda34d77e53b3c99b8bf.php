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

/* default/Login/index/index.twig */
class __TwigTemplate_58ca94d7c9345347d693345d358af5125efebf059d3feac33c5a7d3b7b865346 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Login/index/index.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["active"] = "index";
        // line 4
        $context["title"] = "login";
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Login/index/index.css"), "default/Login/index/index.twig", 10)->display($context);
        // line 11
        echo "    </style>

";
    }

    // line 15
    public function block_container($context, array $blocks = [])
    {
        // line 16
        echo "    <div class=\"container\">
            <div class=\" panel-info \">
                <div class=\"panel-body\">
                    <center><img id=\"login-logo\" src=\"img/m-logo-full.png\"></center>

                    <form action=\"./login\" method=\"POST\" class=\"form-signin\" role=\"form\">
                        <div class=\"input-group login-form ";
        // line 22
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "error_local", [], "array")) {
            echo "has-error";
        }
        echo "\">
                            <input type=\"text\" class=\"form-control \" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Username"), "html", null, true);
        echo "\" name=\"username\"/>
                            <input type=\"password\" class=\"form-control \" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Password"), "html", null, true);
        echo "\" name=\"password\"/>
                            ";
        // line 25
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "error_local", [], "array")) {
            // line 26
            echo "                                <div class=\"alert col-sm-12\">
                                    <i class=\"fa fa-warning\"></i>
                                    <span>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "error_local", [], "array"), "html", null, true);
            echo "</span>
                                </div>
                            ";
        }
        // line 31
        echo "
                            <input type=\"submit\" class=\"btn lobtn btn-block\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sign in"), "html", null, true);
        echo "\">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery/jquery-2.1.0.min.js\"></script>
    <script type=\"text/javascript\" defer=\"defer\">
        \$(document).ready(function(){
            localStorage.removeItem('opinionCheck');
            ";
        // line 42
        if ($this->getAttribute(($context["app"] ?? null), "npmVersionError", [], "any", true, true)) {
            // line 43
            echo "            var npmVersionError = localStorage.getItem('npm-version-error');
            if (!npmVersionError) {
                npmVersionError = {
                    timescounter: 0,
                    closed: false,
                    timestamp: 0
                };
            } else {
                npmVersionError = \$.parseJSON(npmVersionError);
                npmVersionError.closed = false;
            }
            localStorage.setItem('npm-version-error', JSON.stringify(npmVersionError));
            ";
        }
        // line 56
        echo "            //localStorage.removeItem('npm-version-error');

            \$(document).on('submit', 'form', function(e){
                var currAdmin = \$('input[name=\"username\"]').val();
                var lastAdmin = localStorage.getItem('lastAdmin') || false;
                if (currAdmin) {
                    if (lastAdmin && lastAdmin != currAdmin) {
                        for (var key in localStorage){
                            if (key.search('DataTable') != -1) {
                                localStorage.removeItem(key);
                            }
                        }
                    }
                    localStorage.setItem('lastAdmin', currAdmin);
                }
                localStorage.removeItem('check_health_time');
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/Login/index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  121 => 43,  119 => 42,  112 => 38,  103 => 32,  100 => 31,  94 => 28,  90 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  66 => 16,  63 => 15,  57 => 11,  55 => 10,  50 => 8,  47 => 7,  44 => 6,  40 => 1,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Login/index/index.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Login/index/index.twig");
    }
}
