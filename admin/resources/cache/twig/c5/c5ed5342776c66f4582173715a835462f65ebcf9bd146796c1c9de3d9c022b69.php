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

/* default/NewVideoClub/video_list/video_list.twig */
class __TwigTemplate_fbc408c0a77a7ee97c4962b718007baa1be0c1600c706ffcb23da07ff1d72fde extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'footer_js' => [$this, 'block_footer_js'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig"), "default/NewVideoClub/video_list/video_list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["main_macro"] = $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/macro/iptw_macro.twig"), "default/NewVideoClub/video_list/video_list.twig", 2)->unwrap();
        // line 4
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video club") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("movie list"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "    
    ";
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
         ";
        // line 11
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/video_list/video_list.css"), "default/NewVideoClub/video_list/video_list.twig", 11)->display($context);
        // line 12
        echo "    </style>

";
    }

    // line 15
    public function block_footer_js($context, array $blocks = [])
    {
        // line 16
        echo "    
        ";
        // line 17
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
        ";
        // line 18
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-datatables.twig"), "default/NewVideoClub/video_list/video_list.twig", 18)->display($context);
        // line 19
        echo "        ";
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/basic_templates/scripts-select2.twig"), "default/NewVideoClub/video_list/video_list.twig", 19)->display($context);
        // line 20
        echo "
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js\"></script>
        <link  href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/FixedHeader/css/fixedHeader.dataTables.css\" rel=\"stylesheet\">

        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Select/js/dataTables.select.js\"></script>

        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/js/dataTables.buttons.js\"></script>
        <link  href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css\" rel=\"stylesheet\">

";
    }

    // line 30
    public function block_footer($context, array $blocks = [])
    {
        // line 31
        echo "    
        ";
        // line 32
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\" defer>
            ";
        // line 34
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/NewVideoClub/video_list/video_list.js.twig"), "default/NewVideoClub/video_list/video_list.twig", 34)->display($context);
        // line 35
        echo "        </script>
        
";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        // line 41
        echo "    <div id=\"iptv_list\">
        <div class=\"row filters-actions-pannel\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 44
        echo $context["main_macro"]->getget_filter("is_series", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Type"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "isSeries", [], "array"), 2);
        echo "
                ";
        // line 45
        echo $context["main_macro"]->getget_filter("genre_id", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Genre"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allGenre", [], "array"), 2);
        echo "
                ";
        // line 46
        echo $context["main_macro"]->getget_filter("year", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Year"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allYears", [], "array"), 2);
        echo "
                ";
        // line 47
        echo $context["main_macro"]->getget_filter("status_id", $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Status"), "id", "title", $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allStatus", [], "array"), 2);
        echo "
                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-video\" class=\"btn btn-action pull-right no_context_menu\"><i class=\"fa fa-plus\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add movie"), "html", null, true);
        echo "</a>
            </div>
        </div>
        <div class=\"row\">
                <div class=\"box\">
                    ";
        // line 53
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 54
            echo "                        ";
            echo $context["main_macro"]->getget_dropdown_attribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
            echo "
                    ";
        }
        // line 56
        echo "                    <div class=\"box-content\">
                        <div class=\"box-content no-padding\">

                            <div class=\"dt-buttons\">
                                <div class=\"dt-group-select-dropdown pull-left\">
                                    <a href=\"#\" class=\"dropdown-toggle btn-- dt-button\" data-toggle=\"dropdown\">
                                        <span><i class=\"fa \"></i>&nbsp;</span>
                                        <i class=\"fa fa-caret-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li>
                                            <div id=\"select_none\">
                                                ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Undo selection"), "html", null, true);
        echo "
                                            </div>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li>
                                            <div id=\"select_all\">
                                                ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select all"), "html", null, true);
        echo "
                                            </div>
                                        </li>
                                        <li>
                                            <div id=\"select_inverse\">
                                                 ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Inverse selection"), "html", null, true);
        echo "
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class=\"dataTables_processing\"></div>
                            <table class=\"table dataTable table-hover table-datatable compact\" id=\"datatable-1\">
                                ";
        // line 88
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 89
            echo "                                    ";
            echo $context["main_macro"]->getget_datatable_head($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"), "\000");
            echo "
                                ";
        }
        // line 91
        echo "                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
            
    <div id=\"modalbox_ad\">
        <div class=\"devoops-modal add-tasks\">
            <div class=\"devoops-modal-header\">
                <div class=\"modal-header-name\">
                    <span>";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Create task"), "html", null, true);
        echo "</span>
                </div>
                <div class=\"box-icons\">
                    <a class=\"close-link\">
                        <i class=\"fa fa-times\"></i>
                    </a>
                </div>
            </div>
            <div class=\"devoops-modal-inner\">
                <div class=\"box-content\">
                    <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/create-tasks\" method=\"POST\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video title"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <span class=\"col-xs-10 col-sm-12\">
                                    <input type=\"hidden\" name=\"id\">
                                    <div class=\"form-control-static txt-default\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Video title"), "html", null, true);
        echo "</div>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("To"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\"col-xs-10 col-sm-12\">
                                    <select class=\"populate placeholder\" name=\"to_usr\" id=\"s2_video_moderators\" required=\"\">
                                        ";
        // line 130
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allModerators", [], "array")) {
            // line 131
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allModerators", []));
            foreach ($context['_seq'] as $context["_key"] => $context["m_item"]) {
                // line 132
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m_item"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m_item"], "login", []), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                                        ";
        }
        // line 135
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Task description"), "html", null, true);
        echo "</label>
                            <div class=\"col-xs-10 col-sm-8\">
                                <div class=\"col-xs-10 col-sm-12\">
                                    <textarea class=\"form-control\" name=\"comment\" rows=\"6\" required=\"\"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"devoops-modal-bottom\">
                <div class=\"col-xs-12\">
                    <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>
                    <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_list/video_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 153,  323 => 152,  308 => 140,  301 => 135,  298 => 134,  287 => 132,  282 => 131,  280 => 130,  273 => 126,  265 => 121,  258 => 117,  251 => 115,  238 => 105,  222 => 91,  216 => 89,  214 => 88,  202 => 79,  194 => 74,  185 => 68,  171 => 56,  165 => 54,  163 => 53,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  130 => 41,  127 => 40,  121 => 35,  119 => 34,  114 => 32,  111 => 31,  108 => 30,  101 => 27,  97 => 26,  92 => 24,  87 => 22,  83 => 21,  80 => 20,  77 => 19,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  59 => 12,  57 => 11,  52 => 9,  49 => 8,  46 => 7,  42 => 1,  40 => 4,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_list/video_list.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_list/video_list.twig");
    }
}
