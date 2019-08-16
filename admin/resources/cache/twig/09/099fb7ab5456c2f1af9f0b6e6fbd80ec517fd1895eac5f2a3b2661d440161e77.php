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

/* default/Users/add_users/add_users.twig */
class __TwigTemplate_3dc9fb0d613659a8b18628baaca31a10eaf7395ad9f4c14e9fdd54a1407cb0f6 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/Users/add_users/add_users.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/Users/add_users/add_users.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Users") . ": ") . (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", [])) ? (((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit user") . " '") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userName", [])) . "'")) : ($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add user"))));
        // line 5
        $context["active_alias"] = "users-list";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_footer_js($context, array $blocks = [])
    {
        // line 9
        echo "
        ";
        // line 10
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "

        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/multiselect_transfer/jquery.selso.js\"></script>

        ";
        // line 14
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/Users/add_users/add_users.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/Users/add_users/add_users.twig", 15)->display($context);
        // line 16
        echo "
";
    }

    // line 18
    public function block_footer($context, array $blocks = [])
    {
        // line 19
        echo "
        ";
        // line 20
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 22
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/Users/add_users/add_users.js.twig"), "default/Users/add_users/add_users.twig", 22)->display($context);
        // line 23
        echo "        </script>

";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "resellerUserLimit", [])) {
            // line 30
            echo "        <div id=\"add_channel\">
            ";
            // line 31
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", [])) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "action_alias", []))), "attr" => ["class" => "form-horizontal", "role" => "form", "id" => "form_"]]);
            echo "
            <div class=\"bg-danger\">
                <div class=\"bg-danger\">
                    ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'errors');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"box\">

                    <h4 class=\"section-header\"><span>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Profile"), "html", null, true);
            echo "</span></h4>

                    <div class=\"box-content\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label \">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Name"), "html", null, true);
            echo "</label>
                            <div class=\"col-xs-10 col-sm-6\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    ";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "id", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "fname", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    <div class=\"bg-danger\">
                                        ";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "fname", []), 'errors');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label \">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Login"), "html", null, true);
            echo "</label>
                            <div class=\"col-xs-10 col-sm-6\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    ";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "login", []), 'widget', ["attr" => ["class" => "form-control", "data-validation" => "server", "data-validation-optional" => "true", "data-validation-url" => ((($this->getAttribute($this->getAttribute(            // line 62
($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", [])) . "/check-login"), "data-validation-param-name" => "login"]]);
            // line 64
            echo "
                                    <div class=\"bg-danger\">
                                        ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "login", []), 'errors');
            echo "
                                    </div>
                                </div>
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    <span class=\"small txt-default\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Must be unique"), "html", null, true);
            echo "</span>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label \">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Password"), "html", null, true);
            echo "</label>
                            <div class=\"col-xs-10 col-sm-6\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    ";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "password", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    <div class=\"bg-danger\">
                                        ";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "password", []), 'errors');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label \">";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Phone number"), "html", null, true);
            echo "</label>
                            <div class=\"col-xs-10 col-sm-6\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    ";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "phone", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    <div class=\"bg-danger\">
                                        ";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "phone", []), 'errors');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label \">";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Account number"), "html", null, true);
            echo "</label>
                            <div class=\"col-xs-10 col-sm-6\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    ";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "ls", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    <div class=\"bg-danger\">
                                        ";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "ls", []), 'errors');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            // line 107
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", [], "array")) {
                // line 108
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("User group"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 112
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "group_id", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
                echo "
                                        <div class=\"bg-danger\">
                                            ";
                // line 114
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "group_id", []), 'errors');
                echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            } else {
                // line 120
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">MAC</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 124
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "mac", []), 'widget', ["attr" => ["class" => "form-control", "data-validation" => "custom, server", "data-validation-optional" => "true", "data-validation-regexp" => "^([0-9A-Fa-f]{2}:){5}([0-9A-Fa-f]{2})\$", "data-validation-error-msg-custom" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enter MAC-address according to the format"), "data-validation-url" => ((($this->getAttribute($this->getAttribute(                // line 129
($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []) . "/") . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", [])) . "/check-console-item"), "data-validation-param-name" => "mac"]]);
                // line 131
                echo "
                                        ";
                // line 133
                echo "                                        <div class=\"bg-danger\">
                                            ";
                // line 134
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "mac", []), 'errors');
                echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                // line 139
                if ((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanFlag", [], "array") && $this->getAttribute(($context["app"] ?? null), "tariff_and_service_control", [], "any", true, true)) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") > 0))) {
                    // line 140
                    echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label \">";
                    // line 141
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tariff plan"), "html", null, true);
                    echo "</label>
                                    <div class=\"col-xs-10 col-sm-6\">
                                        <div class=\" col-xs-10 col-sm-4\">
                                            ";
                    // line 144
                    if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") > 1)) {
                        // line 145
                        echo "                                                ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_plan_id", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
                        echo "
                                                <div class=\"bg-danger\">
                                                    ";
                        // line 147
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_plan_id", []), 'errors');
                        echo "
                                                </div>
                                            ";
                    } else {
                        // line 150
                        echo "                                                <label class=\"control-label \">";
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_plan_id", []), "vars", []), "value", []) && $this->getAttribute(($context["app"] ?? null), "allTariffPlans", [], "any", true, true)) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allTariffPlans", [], "array"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_plan_id", []), "vars", []), "value", []), [], "array"))) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allTariffPlans", [], "array"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_plan_id", []), "vars", []), "value", []), [], "array"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("None"), "html", null, true);
                        }
                        echo "</label>
                                            ";
                    }
                    // line 152
                    echo "                                        </div>
                                    </div>
                                </div>
                            ";
                }
                // line 156
                echo "                        ";
            }
            // line 157
            echo "
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label \">";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "html", null, true);
            echo "</label>
                            <div class=\"col-xs-10 col-sm-6\">
                                <div class=\" col-xs-10 col-sm-4\">
                                    ";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "status", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
            echo "
                                    <div class=\"bg-danger\">
                                        ";
            // line 164
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "status", []), 'errors');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
            // line 170
            if (((($this->getAttribute(($context["app"] ?? null), "enableBilling", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enableBilling", [])) && $this->getAttribute(($context["app"] ?? null), "billing_date_control", [], "any", true, true)) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "billing_date_control", [], "array") > 0))) {
                // line 171
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 172
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Expire billing date"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 175
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "billing_date_control", [], "array") == 1)) {
                    // line 176
                    echo "                                            <label class=\"control-label \">";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "expire_billing_date", []), "vars", []), "value", [])) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "expire_billing_date", []), "vars", []), "value", []), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unlimited"), "html", null, true);
                    }
                    echo "</label>
                                        ";
                } else {
                    // line 178
                    echo "                                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "expire_billing_date", []), 'widget', ["attr" => ["class" => "form-control"]]);
                    echo "
                                        ";
                }
                // line 180
                echo "                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 184
            echo "
                        ";
            // line 185
            if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanFlag", [], "array")) {
                // line 186
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Automatic License Key assignment"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-8\">
                                    <div class=\" col-xs-10 col-sm-5\">
                                        <div class=\"mswitch\">
                                            ";
                // line 191
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "activation_code_auto_issue", []), 'widget', ["attr" => []]);
                echo "
                                            ";
                // line 192
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "activation_code_auto_issue", []), 'label');
                echo "
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"bg-danger\">
                                            ";
                // line 197
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "activation_code_auto_issue", []), 'errors');
                echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 203
            echo "
                        ";
            // line 204
            if (((($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array")) && $this->getAttribute(($context["app"] ?? null), "user_reseller_control", [], "any", true, true)) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_reseller_control", [], "array") > 0))) {
                // line 205
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 206
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reseller"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-4\">
                                        ";
                // line 209
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_reseller_control", [], "array") == 1)) {
                    // line 210
                    echo "                                            <label class=\"control-label \">";
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "reseller_id", []), "vars", []), "value", []) && $this->getAttribute(($context["app"] ?? null), "allResellers", [], "any", true, true)) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", [], "array"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "reseller_id", []), "vars", []), "value", []), [], "array"))) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", [], "array"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "reseller_id", []), "vars", []), "value", []), [], "array"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Empty"), "html", null, true);
                    }
                    echo "</label>
                                        ";
                } else {
                    // line 212
                    echo "                                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "reseller_id", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
                    echo "
                                            <div class=\"bg-danger\">
                                                ";
                    // line 214
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "reseller_id", []), 'errors');
                    echo "
                                            </div>
                                        ";
                }
                // line 217
                echo "                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 221
            echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label \">";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("User's theme"), "html", null, true);
            echo "</label>
                            <div class=\"col-xs-10 col-sm-6\">
                                <div class=\" col-xs-10 col-sm-4\">
                                    ";
            // line 225
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "theme", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
            echo "
                                    <div class=\"bg-danger\">
                                        ";
            // line 227
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "theme", []), 'errors');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            // line 232
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", [])) {
                // line 233
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("State"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                <span class=\"help-inline col-xs-12 col-sm-12\">
                                    ";
                // line 237
                if (($this->getAttribute(($context["app"] ?? null), "state", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "state", []))) {
                    // line 238
                    echo "                                        <span class=\"txt-success\">Online</span>
                                    ";
                } else {
                    // line 240
                    echo "                                        <span class=\"txt-danger\">Offline</span>
                                    ";
                }
                // line 242
                echo "                                </span>
                                </div>
                            </div>
                        ";
            }
            // line 246
            echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label \">";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Comments"), "html", null, true);
            echo ":</label>
                            <div class=\"col-xs-10 col-sm-6\">
                                <div class=\" col-xs-10 col-sm-6\">
                                    ";
            // line 250
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "comment", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    <div class=\"bg-danger\">
                                        ";
            // line 252
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "comment", []), 'errors');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            // line 257
            if ((( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanFlag", [], "array") && $this->getAttribute(($context["app"] ?? null), "tariff_and_service_control", [], "any", true, true)) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") > 0))) {
                // line 258
                echo "                            <p class=\"page-header\"></p>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Additional services"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-4\">
                                        ";
                // line 263
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") > 1)) {
                    // line 264
                    echo "                                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "additional_services_on", []), 'widget', ["attr" => ["class" => "populate placeholder"]]);
                    echo "
                                            <div class=\"bg-danger\">
                                                ";
                    // line 266
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "additional_services_on", []), 'errors');
                    echo "
                                            </div>
                                        ";
                } else {
                    // line 269
                    echo "                                            <label class=\"control-label \">";
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "additional_services_on", []), "vars", []), "value", []) && $this->getAttribute(($context["app"] ?? null), "additionalServices", [], "any", true, true)) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "additionalServices", [], "array"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "additional_services_on", []), "vars", []), "value", []), [], "array"))) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "additionalServices", [], "array"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "additional_services_on", []), "vars", []), "value", []), [], "array"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("None"), "html", null, true);
                    }
                    echo "</label>
                                        ";
                }
                // line 271
                echo "                                    </div>
                                ";
                // line 272
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", [])) {
                    // line 273
                    echo "                                    <a class=\"btn btn-default\" id=\"tv_subscription\"  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
                    echo "/get-subscribed-tv\" data-user_id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "id", []), "vars", []), "value", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("User subscription on tv-channels"), "html", null, true);
                    echo "</a>
                                ";
                }
                // line 275
                echo "                                </div>
                            </div>
                        ";
            }
            // line 278
            echo "                    </div>
                </div>

                ";
            // line 281
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", [])) {
                // line 282
                echo "                    <div class=\"box\">
                        <a class=\"collapse-link\">
                            <div class=\"box-header\">
                                <div class=\"box-name\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-10 col-sm-3\">
                                            <span>";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Device info"), "html", null, true);
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
                        <div class=\"box-content\" id=\"Additional\">
                            ";
                // line 299
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", [], "array")) {
                    // line 300
                    echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label \">MAC/ID</label>
                                    <div class=\"col-xs-10 col-sm-6\">
                                        <div class=\" col-xs-10 col-sm-6\">
                                            ";
                    // line 304
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "mac", []), 'widget', ["attr" => ["class" => "form-control"]]);
                    echo "
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                // line 309
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">IP</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 313
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "ip", []), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 318
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Account balance"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 321
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "account_balance", []), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 326
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video out"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 329
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "video_out", []), 'widget', ["attr" => ["class" => "form-control", "style" => "text-transform: uppercase"]]);
                echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 334
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Parental control"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 337
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "parent_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                    </div>
                                    <div class=\" col-xs-10 col-sm-6\">
                                        <a href=\"";
                // line 340
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
                echo "/reset-users-parent-password\" data-userid = \"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userID", []), "html", null, true);
                echo "\" class=\"btn btn-info pull-left main_ajax\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset"), "html", null, true);
                echo "</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 345
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Access control"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 348
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "settings_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                    </div>
                                    <div class=\" col-xs-10 col-sm-6\">
                                        <a href=\"";
                // line 351
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
                echo "/reset-users-settings-password\" data-userid = \"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userID", []), "html", null, true);
                echo "\" class=\"btn btn-info pull-left main_ajax\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset"), "html", null, true);
                echo "</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 356
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Favorite"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 359
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "fav_itv", []), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                    </div>
                                    <div class=\" col-xs-10 col-sm-6\">
                                        <a href=\"";
                // line 362
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
                echo "/reset-user-fav-tv\" class=\"btn btn-info pull-left main_ajax\" data-userid = \"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userID", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reset"), "html", null, true);
                echo "</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 367
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Version"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-6\">
                                        ";
                // line 370
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "version", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "6"]]);
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 377
            echo "
                ";
            // line 378
            if (((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", [], "array") && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "form", [], "array", false, true), "tariff_plan_id", [], "any", true, true)) && $this->getAttribute(($context["app"] ?? null), "tariff_and_service_control", [], "any", true, true)) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") > 0))) {
                // line 379
                echo "                    <div class=\"box\">
                        <a class=\"collapse-link\">
                            <div class=\"box-header\">
                                <div class=\"box-name\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-10 col-sm-3\">
                                            <span>";
                // line 385
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tariff plan"), "html", null, true);
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
                        <div class=\"box-content\" id=\"Additional2\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 397
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tariff plan"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-4\">
                                        ";
                // line 400
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_plan_id", [], "array"), 'widget', ["attr" => ["class" => "populate placeholder", "disabled" => ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") == 1), "readonly" => ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") == 1)]]);
                echo "
                                        <div class=\"bg-danger\">
                                            ";
                // line 402
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_plan_id", [], "array"), 'errors', ["attr" => []]);
                echo "
                                        </div>
                                    </div>
                                    <a class=\"btn btn-default pull-right\" href=\"";
                // line 405
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                echo "/tariffs/subscribe-log?user_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "id", []), "vars", []), "value", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Subscribe log"), "html", null, true);
                echo "</a>
                                    ";
                // line 406
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanSubscriptionFlag", [], "array")) {
                    // line 407
                    echo "                                        <span class=\"col-sm-1  pull-right\">&nbsp;</span>
                                        <a class=\"btn btn-default pull-right\" id=\"tv_subscription\"  href=\"";
                    // line 408
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
                    echo "/get-subscribed-tv\" data-user_id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "id", []), "vars", []), "value", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("User subscription on tv-channels"), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 410
                echo "                                </div>
                            </div>
                            ";
                // line 412
                if (($this->getAttribute(($context["app"] ?? null), "userTPs", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userTPs", [], "array")) > 0))) {
                    // line 413
                    echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label \">";
                    // line 414
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Packages of services"), "html", null, true);
                    echo "</label>
                                    <div class=\"col-xs-10 col-sm-6\">
                                        <div class=\" col-xs-12 col-sm-12\">
                                            <table class=\"table  table-hover\" id=\"tariff_plan_table\" data-planid=\"";
                    // line 417
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_plan_id", [], "array"), "vars", []), "value", []), "html", null, true);
                    echo "\">
                                                <thead>
                                                <tr>
                                                    <th>";
                    // line 420
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Package title"), "html", null, true);
                    echo "</th>
                                                    <th>";
                    // line 421
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Package type"), "html", null, true);
                    echo "</th>
                                                    <th>";
                    // line 422
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("State"), "html", null, true);
                    echo "</th>
                                                </tr>
                                                </thead>
                                                <!-- Start: list_row -->
                                                ";
                    // line 426
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userTPs", [], "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 427
                        echo "                                                    <tr>
                                                        <td>
                                                            <label><a href=\"";
                        // line 429
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                        echo "/tariffs/edit-service-package?id=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "services_package_id", []), "html", null, true);
                        echo "\" data-placement=\"bottom\" data-toggle=\"tooltip\" data-original-title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                        echo "</a></label>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                ";
                        // line 433
                        if (($this->getAttribute($context["item"], "optional", []) == 1)) {
                            // line 434
                            echo "                                                                    <i>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Optional"), "html", null, true);
                            echo "</i>
                                                                ";
                        } else {
                            // line 436
                            echo "                                                                    ";
                            echo "-";
                            echo "
                                                                ";
                        }
                        // line 438
                        echo "                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class=\"col-sm-12\">
                                                                <div class=\"mswitch\">
                                                                    <input id=\"tariff_plan_packages[";
                        // line 443
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "package_id", []), "html", null, true);
                        echo "]\"  type=\"checkbox\" ";
                        if ((($this->getAttribute($context["item"], "optional", []) == 0) || ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") == 1))) {
                            echo "readonly=\"readonly\" disabled=\"disabled\"";
                        }
                        echo "  ";
                        if (($this->getAttribute($context["item"], "subscribed", []) == 1)) {
                            echo "value=\"on\" checked=\"checked\"";
                        } else {
                            echo "value=\"off\"";
                        }
                        echo " name=\"tariff_plan_packages[";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "package_id", []), "html", null, true);
                        echo "]\"/>
                                                                    <label for=\"tariff_plan_packages[";
                        // line 444
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "package_id", []), "html", null, true);
                        echo "]\" class=\"label-success\"></label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 450
                    echo "                                                <!-- End: list_row -->
                                            </table>
                                            <label id=\"tariff_plan_change\" style=\"display: none;\">";
                    // line 452
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("More detailed information about the connected packs will be available in the next editing session"), "html", null, true);
                    echo ".</label>
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                // line 457
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 458
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Valid until"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-4\">
                                        ";
                // line 461
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_expired_date", []), 'widget', ["attr" => ["class" => "form-control datepicker", "readonly" => "readonly", "data-date-format" => "dd-mm-yy", "data-oldvalue" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_expired_date", [], "array"), "vars", []), "value", [])]]);
                echo "
                                        <div class=\"bg-danger\">
                                            ";
                // line 463
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_expired_date", []), 'errors');
                echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label \">";
                // line 469
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("At the expiration of"), "html", null, true);
                echo "</label>
                                <div class=\"col-xs-10 col-sm-6\">
                                    <div class=\" col-xs-10 col-sm-4\">
                                        ";
                // line 472
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_id_instead_expired", [], "array"), 'widget', ["attr" => ["class" => "populate placeholder", "disabled" => ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") == 1), "readonly" => ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariff_and_service_control", [], "array") == 1)]]);
                echo "
                                        <div class=\"bg-danger\">
                                            ";
                // line 474
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "tariff_id_instead_expired", [], "array"), 'errors', ["attr" => []]);
                echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 482
            echo "
                ";
            // line 483
            if ($this->getAttribute(($context["app"] ?? null), "tracertStats", [], "any", true, true)) {
                // line 484
                echo "                    <div class=\"box\">
                        <a class=\"collapse-link\">
                            <div class=\"box-header\">
                                <div class=\"box-name\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-10 col-sm-6\">
                                            <span>";
                // line 490
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Results of extended diagnostics"), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Last update"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tracertStats", [], "array"), "changed", [], "array"), "H:i:s d-m-Y"), "html", null, true);
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
                        <div class=\"box-content\" id=\"Additional3\">
                            ";
                // line 501
                $context["tNum"] = 0;
                // line 502
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tracertStats", [], "array"), "info", [], "array"));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 503
                    echo "                                <div class=\"col-xs-12 col-sm-6\">
                                    <div class=\"box\">
                                        <a class=\"collapse-link\">
                                            <div class=\"box-header\">
                                                <div class=\"box-name\">
                                                    <span>";
                    // line 508
                    echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Domain"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</span>
                                                </div>
                                                <div class=\"circle-button box-icons\">
                                                    <i class=\"fa fa-chevron-up\"></i>
                                                </div>
                                                <div class=\"no-move\"></div>
                                            </div>
                                        </a>
                                        <div class=\"box-content\">
                                            <table class=\"table table-hover table-datatable\" id=\"datatable-";
                    // line 517
                    echo twig_escape_filter($this->env, ($context["tNum"] ?? $this->getContext($context, "tNum")), "html", null, true);
                    echo "\">
                                                ";
                    // line 518
                    if ($this->getAttribute(($context["app"] ?? null), "tracert_attr", [], "any", true, true)) {
                        // line 519
                        echo "                                                    ";
                        echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tracert_attr", [], "array"));
                        echo "
                                                ";
                    }
                    // line 521
                    echo "                                                <tbody>
                                                ";
                    // line 523
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["item"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                        // line 524
                        echo "                                                    <tr>
                                                        ";
                        // line 525
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tracert_attr", [], "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["a_item"]) {
                            // line 526
                            echo "                                                            ";
                            if ( !($this->getAttribute($context["a_item"], "name", []) == "all")) {
                                // line 527
                                echo "                                                        <td>";
                                echo $this->getAttribute($context["val"], $this->getAttribute($context["a_item"], "name", []), [], "array");
                                echo "</td>
                                                            ";
                            }
                            // line 529
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 530
                        echo "                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 532
                    echo "                                                ";
                    // line 533
                    echo "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                ";
                    // line 538
                    $context["tNum"] = (($context["tNum"] ?? $this->getContext($context, "tNum")) + 1);
                    // line 539
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 540
                echo "
                        </div>
                    </div>
                ";
            }
            // line 544
            echo "
                <div class=\"form-buttons col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <div class=\"row\">
                                <div class=\"pull-right\">
                                    ";
            // line 550
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), "save", []), 'widget', ["label" => $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "attr" => ["class" => "btn btn-success  pull-right"]]);
            echo "
                                    <a href=\"";
            // line 551
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/users-list\" class=\"btn btn-default pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style=\"display: none;\">
                ";
            // line 560
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", []), 'rest');
            echo "
            </div>
            ";
            // line 562
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "form", [], "array"), 'form_end');
            echo "
        </div>

        ";
            // line 565
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", []) && ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanFlag", [], "array") || $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanSubscriptionFlag", [], "array")))) {
                // line 566
                echo "        <div id=\"modalbox_ad\">
            <div class=\"devoops-modal\">
                <div class=\"devoops-modal-header\">
                    <div class=\"modal-header-name\">
                        <span>";
                // line 570
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("User subscription on tv-channels"), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"box-icons\">
                        <a class=\"close-link\">
                            <i class=\"fa fa-times\"></i>
                        </a>
                    </div>
                </div>
                <form class=\"form-horizontal\" role=\"form\" action=\"";
                // line 578
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
                echo "/save-subscribed-tv\">
                    <div class=\"devoops-modal-inner\">
                        <div class=\"box\">
                            <div class=\"box-content\" >
                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">
                                        <fieldset id=\"letters\" class=\"col-sm-12\">
                                            <div class=\"col-sm-4\">
                                                <label class=\"col-sm-12 text-center\">";
                // line 586
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available"), "html", null, true);
                echo "</label>
                                                <select id=\"not_subscribed_tv\" class=\"left populate placeholder col-sm-12\" multiple=\"multiple\" name=\"not_subscribed_tv\" size=\"20\">
                                                </select>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <br><br><br><br><br><br><br>
                                                <button type=\"button\" class=\"add all btn btn-block btn-default\"> ";
                // line 592
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("all"), "html", null, true);
                echo " &gt;&gt; </button>
                                                <button type=\"button\" class=\"add btn btn-block btn-default\"> &gt; </button>
                                                <button type=\"button\" class=\"remove btn btn-block btn-default\"> &lt; </button>
                                                <button type=\"button\" class=\"remove all btn btn-block btn-default\"> &lt;&lt; ";
                // line 595
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("all"), "html", null, true);
                echo "</button>
                                            </div>
                                            <div class=\"col-sm-4\">
                                                <label class=\"col-sm-12 text-center\">";
                // line 598
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Selected"), "html", null, true);
                echo "</label>
                                                <select id=\"subscribed_tv\" class=\"right populate placeholder col-sm-12\" multiple=\"multiple\" name=\"subscribed_tv\" size=\"20\">
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"devoops-modal-bottom\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
                // line 610
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
                echo "</button>
                            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
                // line 611
                echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
                echo "</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        ";
            }
            // line 618
            echo "
    ";
        } else {
            // line 620
            echo "    <div id=\"add_channel\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <h2 class=\"txt-danger\">";
            // line 623
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Limit of number of the users has been reached"), "html", null, true);
            echo "</h2>
            </div>
        </div>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "default/Users/add_users/add_users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1268 => 623,  1263 => 620,  1259 => 618,  1249 => 611,  1245 => 610,  1230 => 598,  1224 => 595,  1218 => 592,  1209 => 586,  1196 => 578,  1185 => 570,  1179 => 566,  1177 => 565,  1171 => 562,  1166 => 560,  1150 => 551,  1146 => 550,  1138 => 544,  1132 => 540,  1126 => 539,  1124 => 538,  1117 => 533,  1115 => 532,  1108 => 530,  1102 => 529,  1096 => 527,  1093 => 526,  1089 => 525,  1086 => 524,  1081 => 523,  1078 => 521,  1072 => 519,  1070 => 518,  1066 => 517,  1052 => 508,  1045 => 503,  1040 => 502,  1038 => 501,  1020 => 490,  1012 => 484,  1010 => 483,  1007 => 482,  996 => 474,  991 => 472,  985 => 469,  976 => 463,  971 => 461,  965 => 458,  962 => 457,  954 => 452,  950 => 450,  938 => 444,  922 => 443,  915 => 438,  909 => 436,  903 => 434,  901 => 433,  888 => 429,  884 => 427,  880 => 426,  873 => 422,  869 => 421,  865 => 420,  859 => 417,  853 => 414,  850 => 413,  848 => 412,  844 => 410,  833 => 408,  830 => 407,  828 => 406,  820 => 405,  814 => 402,  809 => 400,  803 => 397,  788 => 385,  780 => 379,  778 => 378,  775 => 377,  765 => 370,  759 => 367,  745 => 362,  739 => 359,  733 => 356,  719 => 351,  713 => 348,  707 => 345,  693 => 340,  687 => 337,  681 => 334,  673 => 329,  667 => 326,  659 => 321,  653 => 318,  645 => 313,  639 => 309,  631 => 304,  625 => 300,  623 => 299,  609 => 288,  601 => 282,  599 => 281,  594 => 278,  589 => 275,  577 => 273,  575 => 272,  572 => 271,  562 => 269,  556 => 266,  550 => 264,  548 => 263,  542 => 260,  538 => 258,  536 => 257,  528 => 252,  523 => 250,  517 => 247,  514 => 246,  508 => 242,  504 => 240,  500 => 238,  498 => 237,  492 => 234,  489 => 233,  487 => 232,  479 => 227,  474 => 225,  468 => 222,  465 => 221,  459 => 217,  453 => 214,  447 => 212,  437 => 210,  435 => 209,  429 => 206,  426 => 205,  424 => 204,  421 => 203,  412 => 197,  404 => 192,  400 => 191,  393 => 187,  390 => 186,  388 => 185,  385 => 184,  379 => 180,  373 => 178,  363 => 176,  361 => 175,  355 => 172,  352 => 171,  350 => 170,  341 => 164,  336 => 162,  330 => 159,  326 => 157,  323 => 156,  317 => 152,  307 => 150,  301 => 147,  295 => 145,  293 => 144,  287 => 141,  284 => 140,  282 => 139,  274 => 134,  271 => 133,  268 => 131,  266 => 129,  265 => 124,  259 => 120,  250 => 114,  245 => 112,  239 => 109,  236 => 108,  234 => 107,  226 => 102,  221 => 100,  215 => 97,  206 => 91,  201 => 89,  195 => 86,  186 => 80,  181 => 78,  175 => 75,  167 => 70,  160 => 66,  156 => 64,  154 => 62,  153 => 59,  147 => 56,  138 => 50,  133 => 48,  129 => 47,  123 => 44,  116 => 40,  107 => 34,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  86 => 23,  84 => 22,  79 => 20,  76 => 19,  73 => 18,  68 => 16,  65 => 15,  63 => 14,  58 => 12,  53 => 10,  50 => 9,  47 => 8,  43 => 1,  41 => 5,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/add_users/add_users.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/add_users/add_users.twig");
    }
}
