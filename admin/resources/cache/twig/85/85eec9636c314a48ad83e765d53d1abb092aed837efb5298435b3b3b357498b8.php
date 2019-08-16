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

/* default/LicenseKeys/license_keys_list/license_keys_list.twig */
class __TwigTemplate_b93a756f92960c51cb9d0af82c8b924339dc98dc3d6ca85615b0e20220fa29a4 extends \Twig\Template
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
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/layout.twig"), "default/LicenseKeys/license_keys_list/license_keys_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/LicenseKeys/license_keys_list/license_keys_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("License key") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("License keys list"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/LicenseKeys/license_keys_list/license_keys_list.twig", 10)->display($context);
        // line 11
        echo "    ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/file-uploader-scripts.twig"), "default/LicenseKeys/license_keys_list/license_keys_list.twig", 11)->display($context);
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

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Select/js/dataTables.select.js\"></script>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/js/dataTables.buttons.js\"></script>
    <link  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 22
    public function block_footer($context, array $blocks = [])
    {
        // line 23
        echo "
    ";
        // line 24
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <script type=\"text/javascript\" defer>
        ";
        // line 26
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/LicenseKeys/license_keys_list/license_keys_list.js.twig"), "default/LicenseKeys/license_keys_list/license_keys_list.twig", 26)->display($context);
        // line 27
        echo "    </script>
";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "    <div id=\"iptv_list\">
        <div class=\"row filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 35
        echo $context["main_macro"]->getget_filter("key_type", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Key type"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allKeyTypes", [], "array"), 2);
        echo "
                ";
        // line 36
        echo $context["main_macro"]->getget_filter("request", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Request ID"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allRequests", [], "array"), 2);
        echo "
                ";
        // line 37
        echo $context["main_macro"]->getget_filter("status", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allStatuses", [], "array"), 2);
        echo "
                ";
        // line 38
        echo $context["main_macro"]->getget_filter("device", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Device"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allDevices", [], "array"), 2);
        echo "

                <div id=\"fileupload\" class=\"pull-right\">
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class=\"fileupload-buttonbar\">
                        <div class=\"fileupload-buttons\">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class=\"fileinput-button btn btn-action\">
                                <span><i class=\"fa fa-plus\"></i>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add a file"), "html", null, true);
        echo "</span>
                                <input type=\"file\" name=\"files\" style=\"opacity: 0;\">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 56
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 57
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 59
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dt-buttons\">
                            <div class=\"dt-group-select-dropdown pull-left--\">
                                <a href=\"#\" class=\"dropdown-toggle btn-- dt-button\" data-toggle=\"dropdown\">
                                    <span><i class=\"fa \"></i>&nbsp;</span>
                                    <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu pull-left\">
                                    <li>
                                        <div id=\"select_none\">
                                            ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Undo selection"), "html", null, true);
        echo "
                                        </div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div id=\"select_all\">
                                            ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select all"), "html", null, true);
        echo "
                                        </div>
                                    </li>
                                    <li>
                                        <div id=\"select_inverse\">
                                            ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Inverse selection"), "html", null, true);
        echo "
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 90
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 91
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"), "\000");
            echo "
                            ";
        }
        // line 93
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/LicenseKeys/license_keys_list/license_keys_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 93,  202 => 91,  200 => 90,  188 => 81,  180 => 76,  171 => 70,  158 => 59,  152 => 57,  150 => 56,  137 => 46,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  109 => 32,  106 => 31,  101 => 27,  99 => 26,  94 => 24,  91 => 23,  88 => 22,  81 => 19,  77 => 18,  72 => 16,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/LicenseKeys/license_keys_list/license_keys_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/LicenseKeys/license_keys_list/license_keys_list.twig");
    }
}
