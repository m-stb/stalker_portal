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

/* default/Storages/storages_list/storages_list.twig */
class __TwigTemplate_76454f38a4c16a7dc2228c665cd0172a9c55f7f6d9bad58ede180dad3559c65d extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Storages/storages_list/storages_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Storages/storages_list/storages_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Storage") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("storages list"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Storages/storages_list/storages_list.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Storages/storages_list/storages_list.twig", 11)->display($context);
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
        <script type=\"text/javascript\" src=\"./js/jquery.tmpl.min.js\" defer=\"\"></script>
        <script type=\"text/javascript\" defer>
            ";
        // line 22
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Storages/storages_list/storages_list.js.twig"), "default/Storages/storages_list/storages_list.twig", 22)->display($context);
        // line 23
        echo "        </script>

";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "    <div id=\"iptv_list\">
        <div class=\"row  filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\" pull-right\">
                    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-storage\" class=\"btn btn-action pull-right no_context_menu\" id=\"add_storage\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add storage"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"pull-right\">
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/reset-cache\" class=\"btn btn-action  pull-right main_ajax no_context_menu\" data-id=\"all\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Clean the cache – remove all content from cache"), "html", null, true);
        echo "\"><i class=\"fa fa-times\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Clean the cache"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"pull-right\">
                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/refresh-cache\" class=\"btn btn-action pull-right main_ajax no_context_menu\" data-id=\"all\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update the cache – receive new information about all content in the storage"), "html", null, true);
        echo "\"><i class=\"fa fa-refresh\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update the cache"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
        ";
        // line 63
        echo "        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 65
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 66
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 68
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 72
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 73
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 75
        echo "                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/template\" id=\"save_storage_form\" >
        <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-storage\" id=\"modal_form\">
            <div class=\"box\">
                <a class=\"collapse-link\">
                    <div class=\"box-header\">
                        <div class=\"box-name\">
                            <div class=\"row\">
                                <div class=\"col-xs-10 col-sm-4\">
                                    <span>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("General information"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"box-icons\">
                            <i class=\"fa fa-chevron-up\"></i>
                        </div>
                        <div class=\"no-move\"></div>
                    </div>
                </a>
                <div class=\"box-content\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <input class=\"form-control\" type=\"hidden\" title=\"\" value=\"\${id}\" name=\"form[id]\">
                                <input class=\"form-control with-error-space\" type=\"text\" title=\"\" data-validation=\"required\" value=\"\${storage_name}\" name=\"form[storage_name]\" ";
        // line 109
        echo "{{if storage_name}}";
        echo "readonly=\"readonly\"";
        echo "{{/if}}";
        echo ">
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small default\">
                                    ";
        // line 113
        echo "{{if storage_name}}";
        echo "
                                        ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Changing the name of the storage can lead to critical consequences. To use a storage with a different name, create a new storage."), "html", null, true);
        echo "
                                    ";
        // line 115
        echo "{{else}}";
        echo "
                                        ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can use letters, digits and symbols from the list: ! @ # \$ % ^ & * ( ) _ - + : ; , ."), "html", null, true);
        echo "
                                    ";
        // line 117
        echo "{{/if}}";
        echo "
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("IP"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <input class=\"form-control with-error-space\" type=\"text\" title=\"\" data-validation=\"required,custom\" data-validation-regexp=\"^(?:(?!\\:\\/\\/).)+\$\" value=\"\${storage_ip}\" name=\"form[storage_ip]\">
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("IP-address of the storage. Example : 127.0.0.1"), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Apache port"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <input class=\"form-control with-error-space\" type=\"text\" title=\"\" data-validation=\"required,number\" placeholder=\"88\" value=\"\${apache_port}\" name=\"form[apache_port]\">
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Number of the port, accessing to the Apache server"), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Home directory"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <input class=\"form-control\" type=\"text\" title=\"\" value=\"\${nfs_home_path}\" name=\"form[nfs_home_path]\">
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Home directory where the catalogues and symbol links will be created Example: /home/username/slash_folder"), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Maximum of the users"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <input class=\"form-control\" type=\"text\" title=\"\" value=\"\${max_online}\" name=\"form[max_online]\">
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Maximum quantity of the users, which can watching the content from the storage at the same time"), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"box\">
                <a class=\"collapse-link\">
                    <div class=\"box-header\">
                        <div class=\"box-name\">
                            <div class=\"row\">
                                <div class=\"col-xs-10 col-sm-4\">
                                    <span>";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Additional information"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"box-icons\">
                            <i class=\"fa fa-chevron-up\"></i>
                        </div>
                        <div class=\"no-move\"></div>
                    </div>
                </a>
                <div class=\"box-content\" id=\"additional_information\">
                    <div class=\"row\"></div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Storing content"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"form_for_simple_storage\" name=\"form[for_simple_storage]\" ";
        // line 193
        echo "{{if for_simple_storage}}";
        echo "checked=\"checked\"";
        echo "{{/if}}";
        echo ">
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                            </div>
                            ";
        // line 201
        echo "                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Allow TV recording"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <select class=\"populate placeholder own_field\" name=\"form[dvr_type]\" id=\"form_dvr_type\">
                                    ";
        // line 209
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dvrType", [], "array")) {
            // line 210
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dvrType", []));
            foreach ($context['_seq'] as $context["key"] => $context["title"]) {
                // line 211
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                                    ";
        }
        // line 214
        echo "                                </select>
                            </div>
                            ";
        // line 219
        echo "                        </div>
                    </div>

                    <div class=\"form-group\" style=\"display:  ";
        // line 222
        echo "{{if dvr_type}}";
        echo "block";
        echo "{{else}}";
        echo "none";
        echo "{{/if}}";
        echo "\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Emulation"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"form_fake_tv_archive\" name=\"form[fake_tv_archive]\" ";
        // line 228
        echo "{{if dvr_type}}";
        echo "{{if fake_tv_archive}}";
        echo "checked=\"checked\"";
        echo "{{/if}}";
        echo "{{/if}}";
        echo ">
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The emulation mode is used in case when two portals are attached to a single storage of TV archive. It is necessary to set the recording of TV archive at the first portal, and TV archive recording with the option of emulation at the second one. Thus, there will be two portals with the archive, though in fact it is recorded once."), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Stream server"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <select id=\"form_stream_server_type\" name=\"form[stream_server_type]\" class=\"populate placeholder own_fields\">
                                    <option value=\"\">&nbsp;</option>
                                    <option value=\"flussonic\">Flussonic</option>
                                    <option value=\"wowza\">Wowza</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\" style=\"display:  ";
        // line 250
        echo "{{if stream_server_type}}";
        echo "block";
        echo "{{else}}";
        echo "none";
        echo "{{/if}}";
        echo "\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Stream server port"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <input class=\"form-control\" type=\"text\" title=\"\" data-validation=\"required,number\" data-validation-depends-on=\"form[stream_server_type]\" value=\"\${stream_server_port}\" placeholder=\"1935\" id=\"form_stream_server_port\" name=\"form[stream_server_port]\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\" style=\"display:  ";
        // line 258
        echo "{{if stream_server_type}}";
        echo "block";
        echo "{{else}}";
        echo "none";
        echo "{{/if}}";
        echo "\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Stream server App"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <input class=\"form-control\" type=\"text\" title=\"\" data-validation=\"required\" data-validation-depends-on=\"form[stream_server_type]\" value=\"\${stream_server_app}\" id=\"form_stream_server_app\" name=\"form[stream_server_app]\">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-12\">
                                <input class=\"form-control\" type=\"text\" title=\"\" value=\"\${user_agent_filter}\" name=\"form[user_agent_filter]\">
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can filter the STBs according to their connection type (Wi-Fi, Ethernet) and to the models (250,275…). Field is case sensitive"), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Access restriction"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-2 col-sm-shifted\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"form_for_moderator\" name=\"form[for_moderator]\" name=\"form[for_moderator]\" ";
        // line 284
        echo "{{if for_moderator}}";
        echo "checked=\"checked\"";
        echo "{{/if}}";
        echo ">
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Only moderators can watch the content from the storage"), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not available for the MAG100"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-10 col-sm-8\">
                            <div class=\" col-xs-10 col-sm-2 col-sm-shifted\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"form_not_for_mag100\" name=\"form[not_for_mag100]\" ";
        // line 300
        echo "{{if not_for_mag100}}";
        echo "checked=\"checked\"";
        echo "{{/if}}";
        echo ">
                                        <i class=\"fa fa-square-o small\"></i>
                                    </label>
                                </div>
                            </div>
                            <span class=\"help-inline col-xs-12 col-sm-12\">
                                <span class=\"small txt-default\">";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Storage is not available on the MAG100"), "html", null, true);
        echo "</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/template\" id=\"save_storage_form_button\" >
        <div class=\"col-xs-12\">
            <button form=\"modal_form\" type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\" id=\"save_button\">";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
            <button form=\"modal_form\" type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        </div>
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/Storages/storages_list/storages_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 318,  564 => 317,  550 => 306,  539 => 300,  531 => 295,  523 => 290,  512 => 284,  504 => 279,  496 => 274,  487 => 268,  475 => 259,  467 => 258,  457 => 251,  449 => 250,  435 => 239,  427 => 234,  414 => 228,  406 => 223,  398 => 222,  393 => 219,  389 => 214,  386 => 213,  375 => 211,  370 => 210,  368 => 209,  361 => 205,  355 => 201,  345 => 193,  337 => 188,  320 => 174,  305 => 162,  296 => 156,  288 => 151,  279 => 145,  271 => 140,  262 => 134,  254 => 129,  245 => 123,  236 => 117,  232 => 116,  228 => 115,  224 => 114,  220 => 113,  211 => 109,  204 => 105,  189 => 93,  177 => 86,  164 => 75,  158 => 73,  156 => 72,  150 => 68,  144 => 66,  142 => 65,  138 => 63,  125 => 39,  113 => 36,  103 => 33,  97 => 29,  94 => 28,  88 => 23,  86 => 22,  80 => 19,  77 => 18,  74 => 17,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Storages/storages_list/storages_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Storages/storages_list/storages_list.twig");
    }
}
