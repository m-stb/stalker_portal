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

/* breadcrumbs.html.twig */
class __TwigTemplate_e718e0119b3c49f2da9403ef159bf85c4a0054a01836bebe843fb94f7ab67ff2 extends \Twig\Template
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
        echo "<ul class=\"breadcrumb\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "        <li ";
            if ($this->getAttribute($context["loop"], "last", [])) {
                echo "class=\"active\"";
            }
            echo ">
            ";
            // line 5
            if (((null === $this->getAttribute($context["breadcrumb"], "target", [])) || $this->getAttribute($context["loop"], "last", []))) {
                // line 6
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans($this->getAttribute($context["breadcrumb"], "linkName", [])), "html", null, true);
                echo "
            ";
            } else {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "target", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans($this->getAttribute($context["breadcrumb"], "linkName", [])), "html", null, true);
                echo "</a>
            ";
            }
            // line 10
            echo "            ";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                // line 11
                echo "                <span class=\"fa fa-angle-right separator\"></span>
                ";
                // line 13
                echo "            ";
            }
            // line 14
            echo "        </li>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  82 => 14,  79 => 13,  76 => 11,  73 => 10,  65 => 8,  59 => 6,  57 => 5,  50 => 4,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "breadcrumbs.html.twig", "/var/www/html/stalker_portal/admin/resources/views/default/breadcrumbs.html.twig");
    }
}
