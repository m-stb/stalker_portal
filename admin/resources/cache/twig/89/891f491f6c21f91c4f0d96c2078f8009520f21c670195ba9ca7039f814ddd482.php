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

/* default/ApplicationCatalog/application_list/application_list.js.twig */
class __TwigTemplate_17ec0d01bf98710a7b53b67586122d677bd0d49e7206b3208c85c9c1f11a73b3 extends \Twig\Template
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
        echo "/*
 this component has templates in .twig file
*/

        var conf = {
            form: '#form_',
            lang : '";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            modules: 'jsconf',

            onSuccess: function () {
                var sendData = {};

                \$(this.form).find('input, select').filter(':not(disabled)').each(function () {
                    sendData[\$(this).attr('name')] = \$(this).is(':checkbox') ? (\$(this).is(':checked') ? 1 : 0) : \$(this).val();
                });
                \$.validate();
                \$(conf.form).get(0).reset();
                JScloseModalBox();
                JSshowModalBox();
                ajaxPostSend(\$(conf.form).attr('action'), sendData, false, false, true);
                return false;
            },

            onError: function () {
                return false;
            }
        };

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var item = json.data[i];
                        var id = json.data[i].id;

                        json.data[i].name = '<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/application-detail?id=' + id + '\">' + json.data[i].name + '</a>';
                        var status = item.status;
                        if (!item.current_version) {
                            item.current_version = \"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Undefined"), "html", null, true);
        echo "\"
                        }
                        if (item.installed) {
                            item.current_version += ' ' + (item.available_version != item.current_version ? '&nbsp;&nbsp;&nbsp;<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/application-detail?id=' + id + '\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update"), "html", null, true);
        echo "</a>' : '');
                            item.status = item.status == '1' ? \"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Active"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Disabled"), "html", null, true);
        echo "\";
                        } else {
                            item.current_version = ' ' + '<a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/application-detail?id=' + id + '\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Install"), "html", null, true);
        echo "</a>';
                            item.status = \"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not installed"), "html", null, true);
        echo "\";
                        }

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' \" + (!item.installed ? 'disabled=\"disabled\"' : '') + \" href='";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/application-toggle-state' data-id='\" + id + \"' data-status='\" + (status == '1' ? '0': '1') + \"'>\\n\\
                                                                    <span> \" + (status != '1' ? \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Activate"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Deactivate"), "html", null, true);
        echo "\") + \" </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' \" + (status == '1' ? 'disabled=\"disabled\"' : '') + \" href='";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/application-delete' data-id='\" + id + \"'>\\n\\
                                                                    <span> ";
        // line 64
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
                \"serverSide\": false,
                \"ajax\": {
                    \"url\": \"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/application-list-json\",
                    \"data\": function (d) {
                    }
                },
                \"language\": {
                    \"url\": \"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 82
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 83
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 85
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                \"aoColumnDefs\": [
                    {className: \"action-menu\", \"targets\": [-1]},
                    {\"searchable\": false, \"targets\": [-1]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                \$.validate(conf);
                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.closest('div.open').removeClass('open');

                    if( \$this.attr(\"href\").indexOf(\"application-delete\") !== -1 && !confirm(\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this application?"), "html", null, true);
        echo "\") ) {
                        return false;
                    }

                    \$(\"#modalbox\").data('complete', 0);
                    JSshowModalBox();
                    var sendData = \$this.data();
                    ajaxPostSend(\$this.attr('href'), sendData, false, false, true );
                    return false;
                });

                \$(document).on('click', \"#modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function (e) {
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();
                    if (\$(\"#modalbox\").data('complete') && \$(\"#modalbox\").data('complete') == 1) {
                        JScloseModalBox();
                    } else {
                        for (i = 0; i < 3; i++) {
                            \$('#modalbox > div').fadeTo('slow', 0.5).fadeTo('slow', 1.0);
                        }
                    }
                    return false;
                });

                \$(document).on(\"click\", \"#add_apps\", function (e) {
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();

                    buildGetForm();

                    \$('#modalbox').show();

                    return false;
                });

                \$(document).on('click', \"#modalbox button[type='submit']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    conf.form = \"#\" + \$(\"#modalbox\").find('form').attr('id');

                    if (\$(conf.form).isValid({}, conf, true)) {
                        conf.onSuccess();
                    } else {
                        conf.onError();
                    }
                    return false;
                });

                \$(document).on('click', \"#modalbox button[type='reset']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();
                    return false;
                });

                \$(document).on('click', '#add_apps_back', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    var url = \$('#apps_url').val();
                    JScloseModalBox();
                    buildGetForm();
                    \$('#apps_url').val(url);
                    return false;
                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        function buildGetForm() {
            \$(\"#modalbox\").hide();
            \$(\"#modalbox\").data('complete', 1);
            \$('#modalbox').find('.modal-header-name span').text('";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add application by URL (Step 1)"), "html", null, true);
        echo "');
            \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_get_form_body\").text());
            \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_get_form_buttons\").text());
            \$('#modalbox').show();
        }

        function buildSaveForm(data) {
            \$(\"#modalbox\").hide();
            \$(\"#modalbox\").data('complete', 1);
            \$('#modalbox').find('.modal-header-name span').text('";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add application by URL (Step 2)"), "html", null, true);
        echo "');
            \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_save_form_body\").text());
            \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_save_form_buttons\").text());
            fillModalForm(data.data);
            \$('#modalbox').show();
        }

        var fillModalForm = function (data) {
            conf.form = \"#\" + \$(\"#modalbox\").find('form').attr('id');
            \$.validate();
            \$(conf.form).get(0).reset();
            if (data.repository && data.repository.url) {
                var regExp = new RegExp('\\\\.git\$', 'gi');
                \$('#apps_url').val(data.repository.url.replace(regExp, ''));
            }
            if (data.name) {
                \$('#apps_name').val(data.name).next('h5').text(data.name);
            }
            if (data.version) {
                \$('#apps_version').val(data.version).next('h5').text(data.version);
            }

            if (data.description) {
                \$('#apps_description').text(data.description);
            }
        };
";
    }

    public function getTemplateName()
    {
        return "default/ApplicationCatalog/application_list/application_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 196,  287 => 187,  203 => 106,  180 => 85,  174 => 83,  172 => 82,  167 => 80,  157 => 75,  143 => 64,  137 => 63,  128 => 59,  122 => 58,  110 => 49,  102 => 48,  95 => 46,  87 => 45,  81 => 42,  73 => 39,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/ApplicationCatalog/application_list/application_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/ApplicationCatalog/application_list/application_list.js.twig");
    }
}
