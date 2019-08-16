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

/* default/basic_templates/events_menu.twig */
class __TwigTemplate_a986961dfa3305be9d6e6ed522a8df0c1236aaabb2bceae34b9f793bed1a7184 extends \Twig\Template
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
        // line 1
        echo "<div id=\"modalbox_ad\">
    <div class=\"devoops-modal\">
        <div class=\"devoops-modal-header\">
            <div class=\"modal-header-name\">
                <span>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("New event"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"box-icons\">
                <a class=\"close-link\">
                    <i class=\"fa fa-times\"></i>
                </a>
            </div>
        </div>
        <form class=\"form-horizontal\" role=\"form\" id=\"event_form\">
            <div class=\"devoops-modal-inner\">
                <div class=\"box\">
                    <div class=\"box-content\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Recipient"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"user_list_type\" id=\"s2_user_list_type\" data-validation=\"required\">
                                        <option value=\"to_all\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All"), "html", null, true);
        echo "</option>
                                        <option value=\"by_user_list\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("List"), "html", null, true);
        echo "</option>
                                        <option value=\"by_group\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Group"), "html", null, true);
        echo "</option>
                                        <option value=\"by_pattern\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("On the preset"), "html", null, true);
        echo "</option>
                                        <option value=\"to_single\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("One"), "html", null, true);
        echo "</option>
                                        <option value=\"by_filter\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter"), "html", null, true);
        echo "</option>
                                    </select>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Example: to one, to all, on the list, on the preset, to the group"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                                <span class=\"help-inline col-xs-12 col-sm-8 col-sm-shifted\">
                                    <span class=\"small txt-default\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Choose recipient"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"by_user_list\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("List of MAC-addresses"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-10 col-sm-shifted\">
                                    <input type=\"hidden\" name=\"file_name\" id=\"file_name\">
                                    <!-- The file upload form used as target for the file upload widget -->
                                    <div id=\"fileupload\" class=\"pull-left\">
                                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                        <div class=\"fileupload-buttonbar\">
                                            <div class=\"fileupload-buttons\">
                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                <span class=\"fileinput-button btn btn-success\">
                                                    <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("File"), "html", null, true);
        echo "</span>
                                                    <input type=\"file\" name=\"files\" style=\"opacity: 0;\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class=\"help-inline col-xs-12 no-padding\">
                                        <span class=\"small txt-default\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The file must contain pre-compiled list of MAC-addresses in the txt extension or another text format"), "html", null, true);
        echo "</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"by_group\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Group"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"group_id\" id=\"s2_group_id\" data-validation=\"required\">
                                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "consoleGroup", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                    </select>
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select a group of users that will be delivered message"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"by_pattern\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Preset"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"pattern\" id=\"s2_pattern\" data-validation=\"required\">
                                        <option value=\"MAG100\">MAG100</option>
                                        <option value=\"MAG200\">MAG200</option>
                                        <option value=\"MAG245\">MAG245</option>
                                        <option value=\"MAG245D\">MAG245D</option>
                                        <option value=\"MAG250\">MAG250</option>
                                        <option value=\"MAG254\">MAG254</option>
                                        <option value=\"MAG255\">MAG255</option>
                                        <option value=\"MAG256\">MAG256</option>
                                        <option value=\"MAG257\">MAG257</option>
                                        <option value=\"MAG270\">MAG270</option>
                                        <option value=\"MAG275\">MAG275</option>
                                        <option value=\"MAG322\">MAG322</option>
                                        <option value=\"MAG323\">MAG323</option>
                                        <option value=\"MAG324\">MAG324</option>
                                        <option value=\"MAG324C\">MAG324C</option>
                                        <option value=\"MAG325\">MAG325</option>
                                        <option value=\"MAG349\">MAG349</option>
                                        <option value=\"MAG350\">MAG350</option>
                                        <option value=\"MAG351\">MAG351</option>
                                        <option value=\"MAG352\">MAG352</option>
                                        <option value=\"AuraHD0\">AuraHD0</option>
                                        <option value=\"AuraHD1\">AuraHD1</option>
                                        <option value=\"AuraHD9\">AuraHD9</option>
                                        <option value=\"IP_STB_HD\">IP_STB_HD</option>
                                    </select>
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select preset for STB type"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"to_single\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("MAC-address"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-8 col-sm-shifted\">
                                    <input class=\"form-control with-error-space\" type=\"text\" data-validation=\"required,custom\" data-validation-regexp='^([0-9a-fA-F]{2}:){5}[0-9a-fA-F]{2}\$' data-validation-error-msg-custom=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enter MAC-address according to the format"), "html", null, true);
        echo "\" title=\"\" value=\"";
        if ($this->getAttribute(($context["app"] ?? null), "currentUser", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "currentUser", []), "mac", []), "html", null, true);
        }
        echo "\" name=\"mac\">
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Input user MAC-address"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"by_filter\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" id=\"s2_filter\" name=\"filter_set\" data-validation=\"required\">
                                        <option value=\"\" data-filter-descriprion=\"\"></option>
                                        ";
        // line 131
        if (($this->getAttribute(($context["app"] ?? null), "allFilters", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allFilters", [], "array")) > 0))) {
            // line 132
            echo "                                            ";
            if ($this->getAttribute(($context["app"] ?? null), "user_id", [], "any", true, true)) {
                // line 133
                echo "                                                ";
                $context["check_id"] = $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_id", [], "array");
                // line 134
                echo "                                            ";
            } else {
                // line 135
                echo "                                                ";
                $context["check_id"] =  -1;
                // line 136
                echo "                                            ";
            }
            // line 137
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allFilters", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 138
                echo "                                                ";
                if (((($this->getAttribute($context["filter"], "for_all", [], "array") == 1) || ($this->getAttribute($context["filter"], "for_all", [], "array") == ($context["check_id"] ?? $this->getContext($context, "check_id")))) || ($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", [], "array") == "admin")))) {
                    // line 139
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "id", [], "array"), "html", null, true);
                    echo "\" data-filter-descriprion=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "filter_set", [], "array"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "title", [], "array"), "html", null, true);
                    echo "</option>
                                                ";
                }
                // line 141
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                                        ";
        }
        // line 143
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"by_filter\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter description"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\" id=\"filter_description_input\"></span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Actions"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" data-validation=\"required\" name=\"event\" id=\"s2_event\" required=\"required\">
                                        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "formEvent", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 161
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", [], "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "title", [], "array"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                    </select>
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\">";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select one of the actions"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\" data-event-type=\"play_channel;play_radio_channel\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channel"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-8 col-sm-shifted\">
                                    <input class=\"form-control\" type=\"text\" title=\"\" value=\"\" name=\"channel\" data-validation=\"required\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">TTL<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\"  col-xs-10 col-sm-6\">
                                    <input id=\"ttl\" name=\"ttl\" class=\"form-control with-error-space\" type=\"text\" title=\"\" data-validation=\"required\" value=\"\">
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Time to live, measured in seconds"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                            </div>
                        </div>
                        <div class=\"form-group \" data-event-type=\"send_msg\">
                            <div class=\"separator\"></div>
                        </div>
                        <div class=\"form-group  form-group-checkbox\" data-event-type=\"send_msg\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reboot"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-8 col-sm-shifted\">
                                    <div class=\"checkbox-inline\">
                                        <label>
                                            <input type=\"checkbox\" value=\"1\" name=\"reboot_after_ok\">
                                            <i class=\"fa fa-square-o small\"></i>
                                        </label>
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reboot the STB after OK button is pressed"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\" data-event-type=\"send_msg\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Message templates"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" id=\"s2_msg_pattern\" name=\"\">
                                        <option value=\"\" data-template-header=\"\"></option>
                                        ";
        // line 216
        if (($this->getAttribute(($context["app"] ?? null), "messagesTemplates", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "messagesTemplates", [], "array")) > 0))) {
            // line 217
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "messagesTemplates", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 218
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", [], "array"), "html", null, true);
                echo "\" data-template-header=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "header", [], "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", [], "array"), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                                        ";
        }
        // line 221
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\" data-event-type=\"send_msg\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Message header"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-10\">
                                    <input class=\"form-control\" type=\"text\" title=\"\" value=\"\" name=\"header\" id=\"msg_header\" data-validation=\"required\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\" data-event-type=\"send_msg\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Message text"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-10\">
                                    <textarea id=\"msg_textarea\" class=\"form-control\" rows=\"4\" name=\"msg\" data-validation=\"required\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group  form-group-checkbox\" data-event-type=\"send_msg\" id=\"add_post_function_container\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add post-function"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-8 col-sm-shifted\">
                                    <div class=\"checkbox-inline\">
                                        <label>
                                            <input type=\"checkbox\" value=\"1\" name=\"add_post_function\" id=\"add_post_function\">
                                            <i class=\"fa fa-square-o small\"></i>
                                        </label>
                                    </div>
                                    <i class=\"i-hint\"
                                        title=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The function to be executed when pressing the \"OK\" button"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\" data-event-type=\"post_function_type\" id=\"post_function_type\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Post-function"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" id=\"s2_post_function\" name=\"post_function\" data-validation=\"required\" data-validation-depends-on=\"add_post_function\">
                                        <option value=\"send_msg_with_video\">";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Send message whith video"), "html", null, true);
        echo "</option>
                                        ";
        // line 265
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\" data-event-type=\"post_function_video_url\" id=\"send_msg_with_video\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("VIDEO URL"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-12\">
                                    <input class=\"form-control\" type=\"text\" name=\"param1\" value=\"\" data-validation=\"required\" data-validation-depends-on=\"add_post_function\">
                                </div>
                            </div>
                        </div>
                        ";
        // line 289
        echo "                    </div>
                </div>
            </div>
            <div class=\"devoops-modal-bottom\">
                <div class=\"col-xs-12\">
                    <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                    <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </form>
    </div>
</div>

";
        // line 302
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/basic_templates/scripts-select2.twig"), "default/basic_templates/events_menu.twig", 302)->display($context);
        // line 303
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/basic_templates/file-uploader-scripts.twig"), "default/basic_templates/events_menu.twig", 303)->display($context);
        // line 304
        echo "
<script type=\"text/javascript\" defer>

    var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'}
    var no_table_operations = true;

    var confEvent = {
        form: '#event_form',
        lang : '";
        // line 312
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
        showHelpOnFocus : true,
        validateHiddenInputs: true,
        scrollToTopOnError: false,
        errorClass: \"error\",
        ignore: [],
        modules: 'jsconf, date',
        // \$.formUtils.dialogs.removeInputStylingAndMessage()
        // works correctly when this default keys are setup here
        errorElementClass: \"error\", inputParentClassOnError: \"has-error\", errorMessageClass: \"form-error\",

        onSuccess: function () {
            \$(\"#modalbox_ad .form-group:visible\").find(\"select[disabled]\").removeAttr('disabled');
            var formData = \$(\"#modalbox_ad form\").serialize();
            formData['no_table_operations'] = no_table_operations;
            ajaxPostSend(\"";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/events/add-event\", formData);
            \$(\"#modalbox_ad form\").get(0).reset();
            return false;
        },
        onError: function () {
            var _that = this;
            \$(_that.form + \" select\").each(function(){
                if (\$(this).hasClass(_that.errorClass)) {
                    _that.highlight(this, _that.errorClass);
                } else {
                    _that.unhighlight(this, _that.errorClass);
                }
            });
            return false;
        },

        highlight: function (element, errorClass, validClass) {
            if (!\$(element).parent().children().find('.selection').children().hasClass(errorClass)) {
                \$(element).parent().children().find('.selection').children().addClass(errorClass);
            }
        },

        unhighlight: function (element, errorClass, validClass) {
            \$(element).parent().children().find('.selection').children().removeClass(errorClass);
        }
    };

    function initFileUploader(){
        \$('#fileupload').fileupload({
            url: '";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/upload-list-addresses',
            type: 'POST',
            autoUpload: true,
            multipart: true,
            /*acceptFileTypes: /(\\.|\\/)(jpe?g|png)\$/i,*/
            maxFileSize: 1000000,
            maxNumberOfFiles: 1
        }).bind('fileuploaddone', function (e, data) {
            var response;
            if (data && data.jqXHR && data.jqXHR.status && data.jqXHR.status == 200 && data.jqXHR.responseJSON) {
                response = data.jqXHR.responseJSON;
            } else {
                JSErrorModalBox();
                return false;
            }

            if (response.success) {
                \$('#file_name').val(response.fname);
                if (\$.isFunction(window[response.action]) && !response.error) {
                    window[response.action](response);
                }
            } else if (response.error && \$.isFunction(window[response.action + \"Error\"])) {
                window[response.action + \"Error\"](response);
            } else {
                alert(\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Some server error"), "html", null, true);
        echo "\");
            }
            return false;
        });
        return true;
    }

    function eventsMenuHandlers(events_page) {

    /*
     *  Note: popup open initialization is at page script
     */

        if (typeof (events_page) !== 'undefind' && events_page) {
            no_table_operations = false;
        }
        \$.validate(confEvent);

        LoadSelect2Script(DemoSelect2);

        setEventTTL();

        \$(\"[data-list-type], [data-event-type]\").hide().find('input, select, textarea').attr('disabled', 'disabled');
        
        \$(document).on('change', \"#s2_user_list_type\", function (e) {
            checkFields(\$(this), e);
        });

        \$(document).on('change', \"#s2_event\", function (e) {
            checkFields(\$(this), e);
            setEventTTL();
            // remove error message and styling
            \$.formUtils.dialogs.removeInputStylingAndMessage( \$(\"#ttl\"), confEvent );
        });

        \$(document).on('change', \"#s2_user_list_type, #s2_event, #s2_group_id, #s2_pattern, #s2_filter\", function (e) {
            var \$this = \$(this);
            \$this.validate( confEvent );
            if (\$this.hasClass(confEvent.errorClass)) {
                confEvent.highlight(this, confEvent.errorClass);
            } else {
                confEvent.unhighlight(this, confEvent.errorClass);
            }
        });

        \$(document).on('change', \"#s2_filter\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            var filter_description_text = \$(this).find('option:selected').data('filter-descriprion');
            \$('#filter_description_input').text(filter_description_text);
            return false;
        });

        \$(document).on('change', \"#s2_msg_pattern\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            \$('#msg_textarea').val(\$.trim(\$('#msg_textarea_pattern_'+\$(this).val()).html()));
            \$('#msg_header').val(\$(this).find('option:selected').data('template-header'));
            \$.formUtils.dialogs.removeInputStylingAndMessage( \$(\"#msg_textarea\"), confEvent );
            \$.formUtils.dialogs.removeInputStylingAndMessage( \$(\"#msg_header\"), confEvent );
            return false;
        });

        \$(document).on('click', \"#modalbox_ad button[type='submit']\", function (e) {

            e.stopPropagation();
            e.preventDefault();

            if (\$(confEvent.form).isValid({}, confEvent, true)) {
                confEvent.onSuccess();
            } else {
                confEvent.onError();
            }
            return false;
        });

        \$(document).on('hide', \"#add_post_function_container\", function(e){
            \$(\"[data-event-type^='post_function']\").hide().find('select, input').attr('disabled', 'disabled');
        });

        \$(document).on('change show', \"#add_post_function, #add_post_function_container\", function(e){
            e.stopPropagation();
            e.preventDefault();
            if (\$(\"#add_post_function\").is(':checked')) {
                \$(\"#post_function_type\").show().find('select').removeAttr('disabled');
            } else {
                \$(\"#post_function_type\").hide().find('select').attr('disabled', 'disabled');
                \$(\"[data-event-type^='post_function']\").hide().find('select, input').attr('disabled', 'disabled');
            }
            return false;
        });

        \$(document).on('change show', \"#s2_post_function, #post_function_type\", function(e){
            \$(\"[data-event-type^='post_function']\").filter(\"[data-event-type!='post_function_type']\").hide().find('select, input').attr('disabled', 'disabled');
            \$(\"#\" + \$(\"#s2_post_function\").val()).show().find('select, input').removeAttr('disabled');
        });

        if (typeof (loadFileUploadScripts) != 'function' || !loadFileUploadScripts(initFileUploader)){
            JSErrorModalBox({msg: \"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cannot load File Upload plugin"), "html", null, true);
        echo "\"})
        }

        \$('#event_form .i-hint').tooltip({
            animation: true,
            placement: \"right\"
        });
    }

    function DemoSelect2() {
        \$(\"[id^='s2_']\").select2(select2Opt);
    }

    function checkFields(obj, e) {
        //\$(obj).select2(select2Opt); // ?reset errors
        var dataName = \$(obj).attr('id') == 's2_user_list_type' ? 'data-list-type' : 'data-event-type';
        \$(\"[\" + dataName + \"]\").hide().find('input, select, textarea').attr('disabled', 'disabled');
        \$(obj).find('option:selected').each(function () {
            var searchVal = \$(this).val();
            var dataNameIn = dataName.replace('data-', '').replace('-', ' ').camelCase();
            \$('[' + dataName + '*=\"' + searchVal + '\"]').each(function() {
                if (\$(this).data(dataNameIn) && \$(this).data(dataNameIn).split(\";\").indexOf(searchVal) !== -1) {
                    \$(this).show().find('input, select, textarea').removeAttr('disabled');
                }
            });
        });
        return false;
    }

    function setEventTTL() {
        switch (\$(\"#s2_event\").val()) {
        ";
        // line 509
        if ($this->getAttribute(($context["app"] ?? null), "defTTL", [], "any", true, true)) {
            // line 510
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "defTTL", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 511
                echo "                ";
                if (($context["key"] != "other")) {
                    // line 512
                    echo "            case '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "': { \$(\"#ttl\").val(\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\"); break; }
                ";
                }
                // line 514
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            echo "            default : { \$(\"#ttl\").val(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "defTTL", [], "array"), "other", [], "array"), "html", null, true);
            echo "\"); break; }
        ";
        }
        // line 517
        echo "        }
    }

</script>
";
        // line 521
        if (($this->getAttribute(($context["app"] ?? null), "messagesTemplates", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "messagesTemplates", [])) > 0))) {
            // line 522
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "messagesTemplates", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 523
                echo "<script type=\"text/template\" id=\"msg_textarea_pattern_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "\">
    ";
                // line 524
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "body", []), "html", null, true);
                echo "
</script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "default/basic_templates/events_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 524,  807 => 523,  802 => 522,  800 => 521,  794 => 517,  788 => 515,  782 => 514,  774 => 512,  771 => 511,  766 => 510,  764 => 509,  730 => 478,  629 => 380,  600 => 356,  568 => 327,  550 => 312,  540 => 304,  538 => 303,  536 => 302,  526 => 295,  522 => 294,  515 => 289,  505 => 270,  498 => 265,  494 => 263,  487 => 259,  478 => 253,  474 => 252,  461 => 242,  450 => 234,  439 => 226,  432 => 221,  429 => 220,  416 => 218,  411 => 217,  409 => 216,  401 => 211,  392 => 205,  388 => 204,  375 => 194,  364 => 186,  360 => 185,  343 => 171,  335 => 166,  330 => 163,  319 => 161,  315 => 160,  308 => 156,  297 => 148,  290 => 143,  287 => 142,  281 => 141,  271 => 139,  268 => 138,  263 => 137,  260 => 136,  257 => 135,  254 => 134,  251 => 133,  248 => 132,  246 => 131,  238 => 126,  230 => 121,  220 => 118,  214 => 115,  206 => 110,  172 => 79,  164 => 74,  159 => 71,  148 => 69,  144 => 68,  137 => 64,  128 => 58,  118 => 51,  104 => 40,  96 => 35,  90 => 32,  86 => 31,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  52 => 18,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/events_menu.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/events_menu.twig");
    }
}
