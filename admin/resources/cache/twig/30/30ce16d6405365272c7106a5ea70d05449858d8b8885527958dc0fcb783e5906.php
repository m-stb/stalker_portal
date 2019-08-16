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

/* default/Infoportal/phone_book/phone_book.twig */
class __TwigTemplate_cf4f8097602cf0a82a888daff6be3efba34ee7944b68a936c9aede9a635277da extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Infoportal/phone_book/phone_book.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Infoportal/phone_book/phone_book.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Information portal") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Phone book"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Infoportal/phone_book/phone_book.twig", 10)->display($context);
        // line 11
        echo "
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

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
        <script type=\"text/javascript\" defer>
            ";
        // line 20
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Infoportal/phone_book/phone_book.js.twig"), "default/Infoportal/phone_book/phone_book.twig", 20)->display($context);
        // line 21
        echo "        </script>
        
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 30
        echo $context["main_macro"]->getget_filter_button_bar("service", "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allServices", [], "array"));
        echo "
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-phone-book-item\" class=\"btn btn-action pull-right no_context_menu\" id=\"add_phone_book_item\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add"), "html", null, true);
        echo "</a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"\">
                <div class=\"box\">
                    ";
        // line 38
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 39
            echo "                        ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 41
        echo "                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">
                            <div class=\"dataTables_processing\"></div>
                            <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                                ";
        // line 45
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 46
            echo "                                    ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                                ";
        }
        // line 48
        echo "                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"modalbox_ad\">
        <div class=\"devoops-modal\">
            <div class=\"devoops-modal-header\">
                <div class=\"modal-header-name\">
                    <span></span>
                </div>
                <div class=\"box-icons\">
                    <a class=\"close-link\">
                        <i class=\"fa fa-times\"></i>
                    </a>
                </div>
            </div>
            <form class=\"form-horizontal\" role=\"form\" id=\"karaoke_form\" action=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-phone-book-item\">
            <div class=\"devoops-modal-inner\">
                <div class=\"box\">
                    <div class=\"box-content\">
                            <!-- singer -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Order"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"number\" required=\"required\" name=\"num\" data-validation=\"required\" class='form-control own_fields with-error-space' min=\"1\">
                                    </div>
                                    <span class=\"help-inline col-xs-12 col-sm-12\">
                                        <span class=\"small txt-default\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Order of service in the directory. Must contain digits only"), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>
                            <!-- name -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <input type=\"hidden\" name=\"id\" class=\"own_fields\">
                                        <input type=\"text\" required=\"required\" name=\"title\" data-validation=\"required\" class='own_fields form-control'>
                                    </div>
                                </div>
                            </div>
                            <!-- URL -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Phone number"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"text\" name=\"number\" required=\"required\" data-validation=\"required\" class='form-control own_fields'>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
            <div class=\"devoops-modal-bottom\">
                <div class=\"col-xs-12\">
                    <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                    <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "default/Infoportal/phone_book/phone_book.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 113,  221 => 112,  205 => 99,  192 => 89,  183 => 83,  174 => 77,  163 => 71,  138 => 48,  132 => 46,  130 => 45,  124 => 41,  118 => 39,  116 => 38,  102 => 31,  98 => 30,  93 => 27,  90 => 26,  84 => 21,  82 => 20,  77 => 18,  74 => 17,  71 => 16,  64 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Infoportal/phone_book/phone_book.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Infoportal/phone_book/phone_book.twig");
    }
}
