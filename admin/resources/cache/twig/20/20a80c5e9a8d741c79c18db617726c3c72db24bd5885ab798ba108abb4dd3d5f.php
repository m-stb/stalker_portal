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

/* default/Users/users_consoles_groups/users_consoles_groups.twig */
class __TwigTemplate_944347e58cb9e0f989e9f7150f4d309233a12b2b7c0caf600fc71ed3c4496906 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Users/users_consoles_groups/users_consoles_groups.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Users/users_consoles_groups/users_consoles_groups.twig", 2)->unwrap();
        // line 4
        $context["title"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Users") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("list of groups STB")));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Users/users_consoles_groups/users_consoles_groups.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Users/users_consoles_groups/users_consoles_groups.twig", 11)->display($context);
        // line 12
        echo "
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        // line 18
        echo "
        ";
        // line 19
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 21
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Users/users_consoles_groups/users_consoles_groups.js.twig"), "default/Users/users_consoles_groups/users_consoles_groups.twig", 21)->display($context);
        // line 22
        echo "        </script>

";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-console-group\" class=\"btn btn-action pull-right no_context_menu\" id=\"add_console_group\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add group"), "html", null, true);
        echo "</a>
            </div>
        </div>
        <div class=\"row\">
                <div class=\"box\">
\t\t\t\t\t";
        // line 36
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 37
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 38
        echo "\t
                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">
                            <div class=\"\">
                                <div class=\"\">
                                    <div class=\"dataTables_processing\"></div>
                                    <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                                        ";
        // line 45
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 46
            echo "                                            ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                        ";
        }
        // line 48
        echo "                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <script type=\"text/template\" id=\"modal_group_name_form\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-10 col-sm-10\">
                            <input id=\"console_group_id\" type=\"hidden\" class=\"own_fields\" name=\"id\" >
                            <input id=\"console_name\" class=\"own_fields form-control\" type=\"text\" name=\"name\" 
                                data-validation = \"required, server\" 
                                data-validation-url = \"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-console-name\" >
                            <div class=\"name-check\"></div>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_form_buttons\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

";
        // line 86
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 87
            echo "    <script type=\"text/template\" id=\"modal_change_reseller_form\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" action=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-user-group-to-reseller\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reseller name"), "html", null, true);
            echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-10\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"consolegroupid\" value=\"\">
                            <input type=\"hidden\" class=\"own_fields\" name=\"source_id\" value=\"\">
                            <select class=\"own_fields\" name=\"target_id\" id=\"target_reseller\">
                                ";
            // line 97
            if ($this->getAttribute(($context["app"] ?? null), "allResellers", [], "any", true, true)) {
                // line 98
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", []));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 99
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", []), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", []), "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                                ";
            }
            // line 102
            echo "                            </select>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>
";
        }
        // line 110
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/Users/users_consoles_groups/users_consoles_groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 110,  235 => 102,  232 => 101,  221 => 99,  216 => 98,  214 => 97,  205 => 91,  198 => 89,  194 => 87,  192 => 86,  185 => 82,  181 => 81,  165 => 70,  156 => 64,  138 => 48,  132 => 46,  130 => 45,  121 => 38,  115 => 37,  113 => 36,  101 => 31,  96 => 28,  93 => 27,  87 => 22,  85 => 21,  80 => 19,  77 => 18,  74 => 17,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/users_consoles_groups/users_consoles_groups.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/users_consoles_groups/users_consoles_groups.twig");
    }
}
