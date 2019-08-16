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

/* default/basic_templates/scheduler_events_menu.twig */
class __TwigTemplate_ee24fcedec99b3bcb05b6dd130d094ec47a63df73086171c6563eeb523f7fd0f extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add event into the schedule"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"box-icons\">
                <a class=\"close-link\">
                    <i class=\"fa fa-times\"></i>
                </a>
            </div>
        </div>
        <form id=\"event_form\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-schedule-event\">
            <input type=\"hidden\" name=\"id\" class=\"form-control\" value=\"\">
            <div class=\"devoops-modal-inner\">
                <div class=\"box\">
                    <div class=\"box-content\">

                        <fieldset>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Type"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"type\" id=\"s2_schedule_type\" data-validation=\"required\">
                                        ";
        // line 25
        if (($this->getAttribute(($context["app"] ?? null), "scheduleType", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "scheduleType", [], "array")) > 0))) {
            // line 26
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "scheduleType", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 27
                echo "                                                <option value=\"schedule_type_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", [], "array"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "title", [], "array"), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                                        ";
        }
        // line 30
        echo "                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\" data-schedule-type=\"schedule_type_2;schedule_type_1\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The date of start event"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\"col-xs-10 col-sm-6\">
                                    <input class=\"form-control\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("from"), "html", null, true);
        echo "\" type=\"text\" id=\"date_begin\" name=\"date_begin\" value=\"\" readonly=\"readonly\">
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\" data-schedule-type=\"schedule_type_2\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The date of end event"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\"col-xs-10 col-sm-6\">
                                    <input class=\"form-control\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("to"), "html", null, true);
        echo "\" type=\"text\" id=\"date_end\" name=\"date_end\" value=\"\" readonly=\"readonly\">
                                </div>
                            </div>
                        </div>

                        <div class=\"alert well well-sm col-sm-10 col-sm-offset-1 text_black text-center\" role=\"alert\" data-schedule-type=\"schedule_type_2\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                            </button>
                            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("If the date the start / end is not specified, the event will be repeated at a specified interval until its status is changed to \"Stopped\""), "html", null, true);
        echo "
                        </div>

                        <div class=\"form-group\" data-schedule-type=\"schedule_type_2\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Repeating interval"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"interval\" id=\"s2_repeating_interval\" data-validation=\"required\">
                                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "repeatingInterval", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 66
            echo "                                            <option value=\"repeating_interval_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", [], "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "title", [], "array"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\" data-schedule-type=\"schedule_type_2\" data-repeating-type=\"repeating_interval_1\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Month"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"month\" id=\"s2_month\" data-validation=\"required\">
                                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "monthNames", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($context["item"], "id", [], "array")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", [], "array"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\" data-schedule-type=\"schedule_type_2\" data-repeating-type=\"repeating_interval_2\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Every"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-5 col-sm-3 col-sm-shifted\">
                                    <select class=\"populate placeholder\" name=\"every_month\" id=\"s2_every_month\" data-validation=\"required\">
                                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 92
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, sprintf("%02d", $context["i"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                    </select>
                                </div>
                                <div class=\" col-xs-5 col-sm-3\">
                                    <label class=\"control-label col-sm-offset-1\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("month"), "html", null, true);
        echo "</label>
                                </div>
                            </div>
                        </div>

                        <div id=\"date_type_day\" class=\"form-group\" data-schedule-type=\"schedule_type_2\" data-repeating-type=\"repeating_interval_1;repeating_interval_2\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Date type"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\"col-xs-5 col-sm-4 col-sm-shifted\">
                                    <div class=\"radio\">
                                        <label class=\"\">
                                            <input type=\"radio\" name=\"date_type\" id=\"date_type_day_week\" value=\"day_week\" checked=\"checked\" data-validation=\"required\"> ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Day of week"), "html", null, true);
        echo "
                                            <i class=\"fa fa-circle-o small\"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class=\"col-xs-5 col-sm-4\">
                                    <div class=\"radio\">
                                        <label class=\"\">
                                            <input type=\"radio\" name=\"date_type\" id=\"date_type_day_number\" value=\"day_number\" data-validation=\"required\"> ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Day number"), "html", null, true);
        echo "
                                            <i class=\"fa fa-circle-o small\"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\" data-schedule-type=\"schedule_type_2\" data-repeating-type=\"repeating_interval_3;repeating_interval_2;repeating_interval_1\" data-date-type=\"day_week\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Day"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\"col-xs-10 col-sm-12\">
                                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dayNames", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 129
            echo "                                    <div class=\"checkbox-inline\">
                                        <label>
                                            <input type=\"checkbox\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo "\" name=\"day_week[]\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
            echo "
                                            <i class=\"fa fa-square-o small\"></i>
                                        </label>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"alert well well-sm col-sm-10 col-sm-offset-1  text_black text-center\" role=\"alert\"  data-schedule-type=\"schedule_type_2\" data-repeating-type=\"repeating_interval_3;repeating_interval_2;repeating_interval_1\" data-date-type=\"day_week\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                            </button>
                            ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("If do not selected any of the days of the week the event will be run every day."), "html", null, true);
        echo "
                        </div>

                        <div class=\"form-group\" data-schedule-type=\"schedule_type_2\" data-repeating-type=\"repeating_interval_1;repeating_interval_2;repeating_interval_4\" data-date-type=\"day_number\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Day number"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-5 col-sm-3 col-sm-shifted\">
                                    <select class=\"populate placeholder\" name=\"every_day\" id=\"s2_every_day\" data-validation=\"required\">
                                        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 153
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, sprintf("%02d", $context["i"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\" data-schedule-type=\"schedule_type_2;schedule_type_1\" >
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Time"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-5 col-sm-2 col-sm-shifted\">
                                    <select class=\"populate placeholder\" name=\"every_hour\" id=\"s2_every_hour\" data-validation=\"required\">
                                        ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 166
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, sprintf("%02d", $context["i"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, sprintf("%02d", $context["i"]), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                    </select>
                                </div>
                                <label class=\"col-xs-1 col-sm-shifted no-padding-right ln-30 text-center\" style=\"width: 18px;\">:</label>
                                <div class=\" col-xs-5 col-sm-2 col-sm-shifted\">
                                    <select class=\"populate placeholder\" name=\"every_minute\" id=\"s2_every_minute\" data-validation=\"required\">
                                        ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 55, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 174
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, sprintf("%02d", $context["i"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, sprintf("%02d", $context["i"]), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <div class=\"separator\"></div>
                        </div>
                        </fieldset>


                        <fieldset>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Recipient"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"user_list_type\" id=\"s2_user_list_type\" data-validation=\"required\">
                                        <option value=\"to_all\">";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All"), "html", null, true);
        echo "</option>
                                        <option value=\"by_group\">";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Group"), "html", null, true);
        echo "</option>
                                        <option value=\"to_single\">";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("One"), "html", null, true);
        echo "</option>
                                        <option value=\"by_filter\">";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter"), "html", null, true);
        echo "</option>
                                    </select>
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Example: to one, to all, on the list, on the preset, to the group"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                                <span class=\"help-inline col-xs-12 col-sm-8 col-sm-shifted\">
                                    <span class=\"small txt-default\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Choose recipient"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>

                        <div class=\"form-group\" data-list-type=\"by_group\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Group"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"group_id\" id=\"s2_group_id\" data-validation=\"required\">
                                        ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "consoleGroup", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 215
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
        // line 217
        echo "                                    </select>
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\">";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select a group of users that will be delivered message"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"to_single\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("MAC-address"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-8 col-sm-shifted\">
                                    <input class=\"form-control with-error-space\" type=\"text\" title=\"\" value=\"";
        // line 228
        if ($this->getAttribute(($context["app"] ?? null), "currentUser", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "currentUser", []), "mac", []), "html", null, true);
        }
        echo "\" name=\"mac\" data-validation=\"required,custom\" data-validation-regexp='^([0-9a-fA-F]{2}:){5}[0-9a-fA-F]{2}\$'>
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\">";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Input user MAC-address"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"by_filter\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Filter name"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" name=\"filter_set\" id=\"s2_filter\" data-validation=\"required\">
                                        ";
        // line 240
        if (($this->getAttribute(($context["app"] ?? null), "allFilters", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allFilters", [], "array")) > 0))) {
            // line 241
            echo "                                            ";
            if ($this->getAttribute(($context["app"] ?? null), "user_id", [], "any", true, true)) {
                // line 242
                echo "                                                ";
                $context["check_id"] = $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_id", [], "array");
                // line 243
                echo "                                            ";
            } else {
                // line 244
                echo "                                                ";
                $context["check_id"] =  -1;
                // line 245
                echo "                                            ";
            }
            // line 246
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allFilters", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 247
                echo "                                                ";
                if (((($this->getAttribute($context["filter"], "for_all", [], "array") == 1) || ($this->getAttribute($context["filter"], "for_all", [], "array") == ($context["check_id"] ?? $this->getContext($context, "check_id")))) || ($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", [], "array") == "admin")))) {
                    // line 248
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "id", [], "array"), "html", null, true);
                    echo "\" data-filter-descriprion=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "filter_set", [], "array"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "title", [], "array"), "html", null, true);
                    echo "</option>
                                                ";
                }
                // line 250
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "                                        ";
        }
        // line 252
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\" data-list-type=\"by_filter\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 257
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
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Actions"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    <select class=\"populate placeholder\" data-validation=\"required\" name=\"event\" id=\"s2_event\">
                                        ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "formEvent", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 270
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
        // line 272
        echo "                                    </select>
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\">";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select one of the actions"), "html", null, true);
        echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\" data-event-type=\"play_channel;play_radio_channel\">
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 280
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
                                    <input id=\"ttl\" class=\"form-control with-error-space\" type=\"text\" name=\"ttl\" data-validation=\"required\" value=\"\">
                                </div>
                                <i class=\"i-hint\"
                                    title=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Time to live, measured in seconds"), "html", null, true);
        echo "\" >
                                    <img class=\"i-hint-sign\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                </i>
                            </div>
                        </div>
                        </fieldset>


                        <fieldset>
                                <div class=\"form-group \" data-event-type=\"send_msg\">
                                    <div class=\"separator\"></div>
                                </div>
                                <div class=\"form-group  form-group-checkbox\" data-event-type=\"send_msg\">
                                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 307
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
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reboot the STB after OK button is pressed"), "html", null, true);
        echo "\" >
                                                <img class=\"i-hint-sign\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" data-event-type=\"send_msg\">
                                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Message templates"), "html", null, true);
        echo "</label>
                                    <div class=\"col-xs-10 col-sm-8\">
                                        <div class=\" col-xs-10 col-sm-6\">
                                            <select class=\"populate placeholder\" name=\"\" id=\"s2_msg_pattern\">
                                                <option value=\"\" data-template-header=\"\"></option>
                                                ";
        // line 329
        if (($this->getAttribute(($context["app"] ?? null), "messagesTemplates", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "messagesTemplates", [], "array")) > 0))) {
            // line 330
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "messagesTemplates", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 331
                echo "                                                        <option value=\"";
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
            // line 333
            echo "                                                ";
        }
        // line 334
        echo "                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" data-event-type=\"send_msg\">
                                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 339
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
        // line 347
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
        // line 355
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
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The function to be executed when pressing the \"OK\" button"), "html", null, true);
        echo "\" >
                                                <img class=\"i-hint-sign\" src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" data-event-type=\"post_function_type\" id=\"post_function_type\">
                                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Post-function"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                    <div class=\"col-xs-10 col-sm-8\">
                                        <div class=\" col-xs-10 col-sm-6\">
                                            <select class=\"populate placeholder\" name=\"post_function\" id=\"s2_post_function\" data-validation-depends-on=\"add_post_function\" data-validation=\"required\">
                                                <option value=\"send_msg_with_video\">";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Send message whith video"), "html", null, true);
        echo "</option>
                                                ";
        // line 378
        echo "                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" data-event-type=\"post_function_video_url\" id=\"send_msg_with_video\">
                                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("VIDEO URL"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                    <div class=\"col-xs-10 col-sm-8\">
                                        <div class=\" col-xs-10 col-sm-12\">
                                            <input class=\"form-control\" type=\"text\" name=\"param1\" value=\"\" data-validation-depends-on=\"add_post_function\" data-validation=\"required\">
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                    </div>
                </div>
            </div>
            <div class=\"devoops-modal-bottom\">
                <div class=\"col-xs-12\">
                    <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                    <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script type=\"text/javascript\">
    var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'};

    var confEvent = {
        form: '#event_form',
        formContainer: '#modalbox_ad',
        lang : '";
        // line 412
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
        showHelpOnFocus : true,
        validateHiddenInputs: true,
        scrollToTopOnError: false,
        errorClass: \"error\",
        ignore: [],
        modules: 'jsconf, logic',
        // \$.formUtils.dialogs.removeInputStylingAndMessage()
        // works correctly when this default keys are setup here
        errorElementClass: \"error\", inputParentClassOnError: \"has-error\", errorMessageClass: \"form-error\",

        onSuccess: function () {
            var formData = \$(\"#modalbox_ad form\").serialize();
            ajaxPostSend(\$(\"#modalbox_ad form\").prop('action'), formData);
            return false;
        },
        onError: function () {
            \$(this.formContainer).find('span.form-error, div.bg-danger').each(function(){
                if (!\$(this).closest('div.box-content').is(':visible')){
                    \$(this).closest('div.box').find('a.collapse-link').trigger('click');
                }
            });
            var _this = this;
            \$(_this.form + \" select\").each(function(){
                if (\$(this).hasClass('error')) {
                    _this.highlight(this, _this.errorClass);
                } else {
                    _this.unhighlight(this, _this.errorClass);
                }
            });
            return false;
        },

        highlight: function (element, errorClass, validClass) {
            if (!\$(element).next().children('.selection').children().hasClass(errorClass)) {
                \$(element).next().children('.selection').children().addClass(errorClass);
            }
        },

        unhighlight: function (element, errorClass, validClass) {
            \$(element).next().children('.selection').children().removeClass(errorClass);
        }
    };

    function eventsMenuHandlers() {
    /*
     *  Note: popup open initialization is at page script
     */

        \$.validate(confEvent);

        LoadSelect2Script(DemoSelect2);

        setEventTTL();

        \$(\"[data-list-type], [data-event-type], [data-schedule-type], [data-repeating-type], [data-date-type] \").hide().find('input, select, textarea').attr('disabled', 'disabled');

        \$(document).on('change', \"#s2_user_list_type, #date_type_day input, #s2_schedule_type, #s2_repeating_interval\", function (e) {
            checkFields(\$(this), e);

            if (\$(this).prop('id') == 's2_schedule_type') {
                if (\$(this).val() == 'schedule_type_1' ) {
                    \$(\"#date_begin\").removeAttr('disabled').closest('.form-group').show().find('label:first-child').text(\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The date of run event"), "html", null, true);
        echo "\");
                    \$(\"#date_begin\").removeAttr('placeholder');
                } else {
                    \$(\"#date_begin\").closest('.form-group').find('label:first-child').text(\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The date of start event"), "html", null, true);
        echo "\");
                    \$(\"#date_begin\").attr('placeholder', \"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("from"), "html", null, true);
        echo "\");
                }
                checkFields('#s2_repeating_interval');
            }
            if (\$(this).prop('id') == 's2_schedule_type' || \$(this).prop('id') == 's2_repeating_interval') {
                checkFields('#date_type_day input');
            }
            if (\$(this).prop('id') == 's2_user_list_type' || \$(this).val() == 'by_filter') {
                \$(\"#s2_filter\").trigger('change');
            }
        });

        \$(document).on('change', \"#s2_event\", function (e) {
            checkFields(\$(this), e);
            setEventTTL();
            // clear valid state becouse of programmatically fill TTL
            \$.formUtils.dialogs.removeInputStylingAndMessage( \$(\"#ttl\"), confEvent );
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

        \$('#event_form .i-hint').tooltip({
            animation: true,
            placement: \"right\"
        });
    }

    function DemoSelect2() {
        \$(\"[id^='s2_']\").select2(select2Opt);
    }

    function checkFields(obj, e) {

        if (\$(obj).length > 1) {
            \$(obj).each(function(){
                checkFields(\$(this));
            });
            return;
        }

        if (\$(obj).attr('disabled')) {
            return;
        }

        var dataName = '';

        switch (\$(obj).attr('id')) {
            case 's2_user_list_type' : {
                dataName = 'data-list-type';
                break;
            }
            case 's2_event' : {
                dataName = 'data-event-type';
                break;
            }
            case 's2_schedule_type' : {
                dataName = 'data-schedule-type';
                break;
            }
            case 's2_repeating_interval' : {
                dataName = 'data-repeating-type';
                break;
            }
            case 'date_type_day_week':
            case 'date_type_day_number' : {
                dataName = 'data-date-type';
                break;
            }

        }
        if (dataName) {
            var searchVal = \$(obj).prop('tagName').toLowerCase() == 'select' ? \$(obj).find('option:selected').val() : (\$(obj).prop('checked') ? \$(obj).val() : false);
            if (searchVal) {
                \$(\"[\" + dataName + \"]\").hide().find('input, select, textarea').attr('disabled', 'disabled').removeAttr('require');//.rules('remove');
                var dataNameIn = dataName.replace('data-', '').replace('-', ' ').camelCase();
                \$('[' + dataName + '*=\"' + searchVal + '\"]').each(function() {
                    var _this = \$(this), inputFields;
                    if (!_this.is(\":visible\") && _this.data(dataNameIn) && _this.data(dataNameIn).split(\";\").indexOf(searchVal) !== -1) {
                        _this.show();
                        inputFields = _this.find('input, select, textarea');
                        inputFields.removeAttr('disabled');
                        if (inputFields.filter(\":not([type='checkbox'])\").length) {
                            inputFields.filter(\":not([type='checkbox'])\").attr('require', 'require');//.rules('add', {required: true});
                        }
                    }
                });
            }
        }
        return false;
    }

    function setEventTTL() {
        switch (\$(\"#s2_event\").val()) {
                ";
        // line 619
        if ($this->getAttribute(($context["app"] ?? null), "defTTL", [], "any", true, true)) {
            // line 620
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "defTTL", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 621
                echo "                ";
                if (($context["key"] != "other")) {
                    // line 622
                    echo "            case '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "': { \$(\"#ttl\").val(\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\"); break; }
                ";
                }
                // line 624
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 625
            echo "            default : { \$(\"#ttl\").val(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "defTTL", [], "array"), "other", [], "array"), "html", null, true);
            echo "\"); break; }
                ";
        }
        // line 627
        echo "        }
    }

</script>
";
        // line 631
        if (($this->getAttribute(($context["app"] ?? null), "messagesTemplates", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "messagesTemplates", [])) > 0))) {
            // line 632
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "messagesTemplates", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 633
                echo "<script type=\"text/template\" id=\"msg_textarea_pattern_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "\">
    ";
                // line 634
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
        return "default/basic_templates/scheduler_events_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1073 => 634,  1068 => 633,  1063 => 632,  1061 => 631,  1055 => 627,  1049 => 625,  1043 => 624,  1035 => 622,  1032 => 621,  1027 => 620,  1025 => 619,  881 => 478,  877 => 477,  871 => 474,  806 => 412,  789 => 398,  785 => 397,  768 => 383,  761 => 378,  757 => 376,  750 => 372,  741 => 366,  737 => 365,  724 => 355,  713 => 347,  702 => 339,  695 => 334,  692 => 333,  679 => 331,  674 => 330,  672 => 329,  664 => 324,  655 => 318,  651 => 317,  638 => 307,  623 => 295,  619 => 294,  602 => 280,  594 => 275,  589 => 272,  578 => 270,  574 => 269,  567 => 265,  556 => 257,  549 => 252,  546 => 251,  540 => 250,  530 => 248,  527 => 247,  522 => 246,  519 => 245,  516 => 244,  513 => 243,  510 => 242,  507 => 241,  505 => 240,  498 => 236,  490 => 231,  482 => 228,  476 => 225,  468 => 220,  463 => 217,  452 => 215,  448 => 214,  441 => 210,  432 => 204,  426 => 201,  422 => 200,  415 => 196,  411 => 195,  407 => 194,  403 => 193,  396 => 189,  381 => 176,  370 => 174,  366 => 173,  359 => 168,  348 => 166,  344 => 165,  337 => 161,  329 => 155,  318 => 153,  314 => 152,  307 => 148,  300 => 144,  290 => 136,  277 => 131,  273 => 129,  269 => 128,  263 => 125,  251 => 116,  240 => 108,  232 => 103,  223 => 97,  218 => 94,  207 => 92,  203 => 91,  196 => 87,  188 => 81,  177 => 79,  173 => 78,  166 => 74,  158 => 68,  147 => 66,  143 => 65,  136 => 61,  129 => 57,  117 => 48,  111 => 45,  102 => 39,  96 => 36,  88 => 30,  85 => 29,  74 => 27,  69 => 26,  67 => 25,  60 => 21,  47 => 13,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/scheduler_events_menu.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/scheduler_events_menu.twig");
    }
}
