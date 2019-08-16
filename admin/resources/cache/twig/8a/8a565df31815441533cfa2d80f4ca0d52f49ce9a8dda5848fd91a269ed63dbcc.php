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

/* default/ApplicationCatalog/smart_application_list/smart_application_list.twig */
class __TwigTemplate_c7e017e8f1dde5235a49fd60fdf36aec690ab20c9b9fbf91b6d3a7e03ee20d2b extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/ApplicationCatalog/smart_application_list/smart_application_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/ApplicationCatalog/smart_application_list/smart_application_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Applications") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("applications catalog"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/ApplicationCatalog/smart_application_list/smart_application_list.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/file-uploader-scripts.twig"), "default/ApplicationCatalog/smart_application_list/smart_application_list.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    // line 14
    public function block_footer($context, array $blocks = [])
    {
        // line 15
        echo "       
        ";
        // line 16
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 18
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/ApplicationCatalog/smart_application_list/smart_application_list.js.twig"), "default/ApplicationCatalog/smart_application_list/smart_application_list.twig", 18)->display($context);
        // line 19
        echo "        </script>
        
";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        // line 25
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 28
        echo $context["main_macro"]->getget_filter("type", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Type"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allType", [], "array"), 3);
        echo "
                ";
        // line 29
        echo $context["main_macro"]->getget_filter("category", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Category"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allCategory", [], "array"), 3);
        echo "
                ";
        // line 30
        echo $context["main_macro"]->getget_filter("installed", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("State"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allInstalled", [], "array"), 3);
        echo "
                ";
        // line 31
        echo $context["main_macro"]->getget_filter("status", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allStatus", [], "array"), 3);
        echo "
                ";
        // line 33
        echo "
                ";
        // line 64
        echo "
                <div class=\"btn-group pull-right\">
                    <a href=\"#\" class=\"dropdown-toggle btn btn-default no_context_menu\" data-toggle=\"dropdown\">
                        <span>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("List of installed"), "html", null, true);
        echo "</span>
                        <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu pull-left\">
                        <li>
                            <a id=\"upload_list\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-upload-list\" class=\"btn-- no_context_menu\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Upload the list"), "html", null, true);
        echo "</a>
                        </li>
                        <li>
                             <a id=\"download_list\" href=\"#\" class=\"btn-- no_context_menu\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save the list"), "html", null, true);
        echo "</a>
                        </li>
                    </ul>
                </div>

                <div class=\"btn-group pull-right\">
                    <a href=\"#\" class=\"dropdown-toggle btn btn-default no_context_menu\" data-toggle=\"dropdown\">
                        <span>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Updates"), "html", null, true);
        echo "</span>
                        <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu pull-left\">
                        <li>
                            <a id=\"check_update_apps\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-check-update\" data-info = '1' data-id=\"all\" class=\"main_ajax btn-- no_context_menu\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Check updates"), "html", null, true);
        echo "</a>
                        </li>
                        <li>
                            <a id=\"update_all_apps\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-update\" data-info = '1' data-id=\"all\" class=\"main_ajax btn-- no_context_menu\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update all"), "html", null, true);
        echo "</a>
                        </li>
                    </ul>
                </div>

                <a id=\"reset_all_apps\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-reset-all\" data-info = '1' class=\"main_ajax btn btn-action pull-right no_context_menu\"><i class=\"fa fa-times\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset all"), "html", null, true);
        echo "</a>
                <a id=\"add_apps\" href=\"#\" class=\"btn btn-action pull-right no_context_menu\"><i class=\"fa fa-plus\"></i>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add new"), "html", null, true);
        echo "</a>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 102
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 103
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 105
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 109
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 110
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 112
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 124
        echo "
    <script type=\"text/template\" id=\"modal_get_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" id=\"form_\" action=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-get-data-from-repo\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Package name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"text\" class=\"own_fields form-control error-befor-hint\" name=\"apps[url]\" value=\"\" id=\"apps_url\" data-validation=required>
                        </span>
                        <span class=\"help-inline col-xs-12 col-sm-12\">
                            <span class=\"small txt-default\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enter the package name"), "html", null, true);
        echo "</span>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_get_form_buttons\">
        <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Next"), "html", null, true);
        echo "</button>
            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_save_form_body\">
        <div class=\"box-content\">
            <form class=\"form-horizontal\" role=\"form\" id=\"form_\"  action=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-add\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Package name"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"text\" class=\"own_fields form-control\" name=\"apps[url]\" id=\"apps_url\" value=\"\" readonly=\"readonly\">
                        </span>
";
        // line 162
        echo "                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Application"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"apps[name]\" id=\"apps_name\" value=\"\" readonly=\"readonly\">
                            <h5></h5>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Type"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"apps[type]\" id=\"apps_type\" value=\"\" readonly=\"readonly\">
                            <h5></h5>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Category"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"apps[category]\" id=\"apps_category\" value=\"\" readonly=\"readonly\">
                            <h5></h5>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Version"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"apps[options]\" id=\"apps_options\" value=\"\" readonly=\"readonly\" disabled=\"disabled\">
                            <input type=\"hidden\" class=\"own_fields form-control\" value=\"\" id=\"apps_version\" readonly=\"readonly\" disabled=\"disabled\">
                            <h5></h5>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Author"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <input type=\"hidden\" class=\"own_fields form-control\" name=\"apps[author]\" id=\"apps_author\" value=\"\" readonly=\"readonly\">
                            <h5></h5>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Dependencies"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <textarea class=\"own_fields form-control\" name=\"apps[dependencies]\" id=\"apps_dependencies\" readonly=\"readonly\" rows=\"5\" disabled=\"disabled\"></textarea>
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label col-sm-offset-1\">";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("About app"), "html", null, true);
        echo "</label>
                    <div class=\"col-xs-10 col-sm-8\">
                        <span class=\"col-xs-12 col-sm-12\">
                            <textarea class=\"own_fields form-control\" name=\"apps[description]\" id=\"apps_description\" readonly=\"readonly\" rows=\"5\" disabled=\"disabled\"></textarea>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_info_body\">
        <div class=\"col-md-2 col-md-offset-1\">
            <img src=\"img/no_image.png\" style=\"background-color: #ffffff\">
        </div>
        <div class=\"col-md-9\">
            <h3 class=\"col-md-12\"><strong data-item=\"name\"></strong></h3>
            <span class=\"col-md-12\" data-item=\"current_version\">";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Current version"), "html", null, true);
        echo " </span>
            <p class=\"col-md-12 text-danger\" data-item=\"conflicts\">";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The current version of package is conflicts with"), "html", null, true);
        echo "<br/></p>
            <span class=\"col-md-12\" data-item=\"available_version\">";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available version"), "html", null, true);
        echo " </span>
            <p class=\"col-md-12 text-danger\" data-item=\"available_version_conflicts\">";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The available version of package is conflicts with"), "html", null, true);
        echo "<br/></p>
            <span class=\"col-md-12\" data-item=\"author\">";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Author"), "html", null, true);
        echo " </span>
            <p class=\"col-md-12\" data-item=\"description\"></p>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_info_buttons\">
        <div class=\"pull-right no-padding\">
            <a href=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-version-install\" id=\"info_apps_action\" class=\"main_ajax btn btn-success pull-right no_context_menu\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Install"), "html", null, true);
        echo "</a>
            <button type=\"reset\" class=\"btn btn-default pull-right\">";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Close"), "html", null, true);
        echo "</button>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_save_form_buttons\">
        <div class=\"pull-left no-padding\">
            <button type=\"reset\" class=\"btn btn-default pull-left\">";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
        <div class=\"pull-right no-padding\">
            <button type=\"submit\" class=\"btn btn-success pull-right\">";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
            <button type=\"button\" id=\"add_apps_back\" class=\"btn btn-success pull-right\">";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Back"), "html", null, true);
        echo "</button>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_reset_all_body\">
        <div class=\"col-md-12\">
            <span class=\"col-md-12 txt-default\">";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Do you really want reset all applications?"), "html", null, true);
        echo "</span>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_reset_all_buttons\">
        <div class=\"col-xs-12\">
            <a id=\"reset_all_apps_btn\" type=\"button\" class=\"btn btn-danger col-sm-2 pull-right no_context_menu\" href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-reset-all\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset"), "html", null, true);
        echo "</a>
            <button type=\"reset\" id=\"reset_all_apps_button\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

    <script type=\"text/template\" id=\"modal_fileupload\">
        <div id=\"fileupload\" class=\"pull-left\" style=\"margin-left: 15px;\">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class=\"fileupload-buttonbar\">
                <div class=\"fileupload-buttons\">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"fileinput-button btn btn-success\">
                        <span>";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select file"), "html", null, true);
        echo "</span>
                        <input type=\"file\" name=\"files\" style=\"opacity: 0;\">
                    </span>
                </div>
            </div>
        </div>
        <span class=\"col-md-6 fileupload-message\"></span>
    </script>

    <script type=\"text/template\" id=\"modal_fileupload_buttons\">
        <div class=\"pull-right no-padding\">
            <button id=\"fileupload_button_send\" type=\"button\" class=\"btn btn-danger pull-right\">";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Send"), "html", null, true);
        echo "</button>
            <button id=\"fileupload_button_reset\" type=\"reset\" class=\"btn btn-success pull-right\">";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Clean"), "html", null, true);
        echo "</button>
            <button id=\"fileupload_button_cancel\" type=\"button\" class=\"btn btn-success pull-right\">";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>

";
    }

    public function getTemplateName()
    {
        return "default/ApplicationCatalog/smart_application_list/smart_application_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 295,  496 => 294,  492 => 293,  478 => 282,  464 => 271,  456 => 270,  447 => 264,  438 => 258,  434 => 257,  428 => 254,  419 => 248,  411 => 247,  401 => 240,  397 => 239,  393 => 238,  389 => 237,  385 => 236,  365 => 219,  354 => 211,  342 => 202,  329 => 192,  317 => 183,  305 => 174,  293 => 165,  288 => 162,  280 => 154,  273 => 152,  264 => 146,  260 => 145,  247 => 135,  238 => 129,  231 => 127,  226 => 124,  213 => 112,  207 => 110,  205 => 109,  199 => 105,  193 => 103,  191 => 102,  182 => 96,  174 => 95,  162 => 90,  152 => 87,  144 => 82,  134 => 75,  124 => 72,  116 => 67,  111 => 64,  108 => 33,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  87 => 25,  84 => 24,  78 => 19,  76 => 18,  71 => 16,  68 => 15,  65 => 14,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/ApplicationCatalog/smart_application_list/smart_application_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/ApplicationCatalog/smart_application_list/smart_application_list.twig");
    }
}
