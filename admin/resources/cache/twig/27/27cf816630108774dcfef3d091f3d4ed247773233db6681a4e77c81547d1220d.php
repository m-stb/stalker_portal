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

/* default/Users/users_filter_list/users_filter_list.js.twig */
class __TwigTemplate_318430ecb2804465386da607ada114d941aa82dfc4f7580a26f19a2b52e37e36 extends \Twig\Template
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
        echo "
        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var favorites =json.data[i].favorites;
                        var login =json.data[i].login;

                        if (\$(\"#s2_filter\").length != 0 ) {
                            if (\$(\"#s2_filter option[value='\" + id + \"']\").length == 0) {
                                \$(\"#s2_filter\").append('<option value=\"' + id + '\" data-filter-descriprion=\"' + json.data[i].filter_set + '\">' + json.data[i].title + '</option>');
                            }
                        }

                        json.data[i].login = '<a href=\"#\" class=\"no_context_menu\">' + json.data[i].login + '</a>';
                        json.data[i].title = '<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/users/users-list?filter_set='+ id +'\">' + json.data[i].title + '</a>';
                        json.data[i].for_all = (json.data[i].for_all ? \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("For all"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Only for"), "html", null, true);
        echo " \" + login);
                        json.data[i].favorites = (favorites ? '<span class=\"txt txt-danger\"><i class=\"fa fa-star\"></i></span>': '');

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a href='";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/users/users-list?filter_set=\"+ id +\"'>\\n\\
                                                                    <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='add_events no_context_menu' href='#' data-filter_set='\"+ id +\"'>\\n\\
                                                                    <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add event"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-filter-favorite' data-id='\"+ id +\"' data-favorite='\" + favorites + \"'>\\n\\
                                                                    <span>\" + (favorites? '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove from favorites"), "html", null, true);
        echo "': '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add to favorites"), "html", null, true);
        echo "') + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-filter' data-id='\" + id + \"'>\\n\\
                                                                    <span> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/users-filter-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 59
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 60
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 62
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },

                \"columnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, -2, -3, -4]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                
                \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.closest('div.open').removeClass('open');

                    if( \$this.attr(\"href\").indexOf(\"remove-filter\") != -1 && !confirm(\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove this filter?"), "html", null, true);
        echo "\") ) {
                        return;
                    }

                    var sendData = \$this.data();
                    ajaxPostSend(\$this.attr('href'), sendData, false, false, true);
                    return false;
                });

                \$(document).on('click', \"#modalbox_ad button[type='submit']\", function (e) {
                    //\$(\"#s2_filter\").prop(\"disabled\", false).removeAttr(\"disabled\");
                });

                eventsMenuHandlers();

                \$(document).on('click', '.add_events', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(this).closest('div.open').removeClass('open');
                    \$(\"#modalbox_ad\").show().find('input, select, textarea').removeAttr('disabled');
                    \$(\"#modalbox_ad #s2_msg_pattern\").trigger('change.select2'); // update all select2 appearence after form reset
                    \$(\"#s2_user_list_type\").val('by_filter').trigger('change.select2').attr('disabled', 'disabled');
                    \$(\"#s2_filter option[value='\"+\$(this).data('filter_set')+\"']\").prop('selected', 'selected');
                    \$(\"#s2_filter\").change();
                    checkFields('#s2_user_list_type', e);
                    checkFields('#s2_event', e);
                    \$('#s2_event').change();
                    \$(\"#s2_filter\").prop(\"disabled\", \"disabled\");
                    return false;
                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/Users/users_filter_list/users_filter_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 89,  141 => 62,  135 => 60,  133 => 59,  128 => 57,  120 => 54,  106 => 43,  100 => 42,  91 => 38,  85 => 37,  78 => 33,  70 => 28,  66 => 27,  52 => 18,  48 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/users_filter_list/users_filter_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/users_filter_list/users_filter_list.js.twig");
    }
}
