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

/* default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig */
class __TwigTemplate_fd8fa2935e429bcb34b10436d476edc11d935b558c88542ad4b59d77d5d6c451 extends \Twig\Template
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
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Streaming servers") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("servers list"));
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig", 11)->display($context);
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
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/BroadcastServers/broadcast_servers_list/broadcast_servers_list.js.twig"), "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig", 21)->display($context);
        // line 22
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
        echo $context["main_macro"]->getget_filter("status", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allServerStatus", [], "array"), 2);
        echo "
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/broadcast-servers-list-json\" class=\"main_ajax btn btn-action pull-right no_context_menu\" id=\"add_server\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add server"), "html", null, true);
        echo "</a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                ";
        // line 37
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 38
            echo "                    ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                ";
        }
        // line 40
        echo "                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        <div class=\"dataTables_processing\"></div>
                        <table class=\"table  table-hover table-datatable\" id=\"datatable-1\">
                            ";
        // line 44
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 45
            echo "                                ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                            ";
        }
        // line 47
        echo "                            <tbody>

                            </tbody>
                        </table>
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
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-server\">
                <div class=\"devoops-modal-inner\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <!-- track name -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Title"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10 \">
                                        <input type=\"hidden\" name=\"id\" class=\"own_fields\">
                                        <input type=\"text\" name=\"name\" data-validation=\"required\"  class='own_fields form-control'>
                                    </div>
                                    <i class=\"i-hint\"
                                       title=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You can use letters, digits and symbols from the list: ! @ # \$ % ^ & * ( ) _ - + : ; , . It will be shown in the load balancer."), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>

                            <!-- address -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("URL"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"text\" name=\"address\" data-validation=\"required,custom\" data-validation-regexp=\"^[a-z0-9\\.\\-]+(\\:\\d+)?\$\" class='form-control own_fields'>
                                    </div>
                                    <i class=\"i-hint\"
                                       title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Example: server.example:8080"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                            
                            <!-- max_sessions -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-xs-offset-1\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Maximum users"), "html", null, true);
        echo " <span class=\"icon-required\">*</span></label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-10\">
                                        <input type=\"text\" name=\"max_sessions\" data-validation=\"required,number\"  class='form-control own_fields'>
                                    </div>
                                    <i class=\"i-hint\"
                                       title=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Maximum quantity of users(load) numeric value"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                </div>
                            </div>
                            
                            <!-- zone -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Streaming area"), "html", null, true);
        echo " </label>
                                <div class=\"col-xs-10 col-sm-8 no-padding\">
                                    <div class=\" col-xs-10 col-sm-6 \">
                                        <select class=\"populate placeholder own_fields\" name=\"stream_zone\" id=\"s2_zone\">
                                            <option value=\"\">&nbsp;</option>
                                            ";
        // line 123
        if ($this->getAttribute(($context["app"] ?? null), "allZones", [], "any", true, true)) {
            // line 124
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allZones", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 125
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                            ";
        }
        // line 128
        echo "                                        </select>
                                    </div>
                                    <i class=\"i-hint\"
                                       title=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Choose the streaming area, if the field is clean, there will be set a default streaming area"), "html", null, true);
        echo "\" >
                                        <img class=\"i-hint-sign\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/field-hint-sign.svg\" />
                                    </i>
                                    ";
        // line 138
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"devoops-modal-bottom\">
                    <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                        <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\" > ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo " </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 146,  296 => 145,  287 => 138,  282 => 132,  278 => 131,  273 => 128,  270 => 127,  259 => 125,  254 => 124,  252 => 123,  244 => 118,  234 => 111,  230 => 110,  221 => 104,  211 => 97,  207 => 96,  198 => 90,  188 => 83,  184 => 82,  174 => 75,  163 => 69,  139 => 47,  133 => 45,  131 => 44,  125 => 40,  119 => 38,  117 => 37,  104 => 31,  100 => 30,  95 => 27,  92 => 26,  87 => 22,  85 => 21,  80 => 19,  77 => 18,  74 => 17,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  39 => 4,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/BroadcastServers/broadcast_servers_list/broadcast_servers_list.twig");
    }
}
