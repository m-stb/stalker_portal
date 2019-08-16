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

/* default/Events/message_templates/message_templates.js.twig */
class __TwigTemplate_d18cd573922911db3a1e6dc258d7f4d60999e412effb861f625ea9efb719dbee extends \Twig\Template
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
        var conf = {
            form: '#save_message_template',
            lang : '";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateOnBlur : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            modules: 'jsconf',

            onSuccess: function () {
                var sendData = new Object();
                \$(\"#modalbox\").find('form').find(\".own_fields:not(:disabled)\").each(function () {
                    if (\$(this).val()) {
                        if (this.type.toUpperCase() != 'CHECKBOX' || this.checked) {
                            sendData[this.name] = \$(this).val();
                        }
                    }
                });
                JScloseModalBox();
                ajaxPostSend(\$(\"#modalbox\").find('form').attr('action'), sendData, false, false);
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
                        var id = json.data[i].id;

                        json.data[i].login = '<a href=\"#\" class=\"no_context_menu\">' + json.data[i].login + '</a>';
                        json.data[i].title = '<a class=\"main_ajax no_context_menu\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/message-templates-list-json\" data-id=\"'+ id +'\">' + json.data[i].title + '</a>';

                        if (json.data[i]['created'] != 0) {
                            var dateOn = new Date(json.data[i]['created']);
                            json.data[i]['created'] = dateOn.toLocaleFormat(\"%b %d, %Y\");
                        }
                        if (json.data[i]['edited'] != 0) {
                            var dateOn = new Date(json.data[i]['edited']);
                            json.data[i]['edited'] = dateOn.toLocaleFormat(\"%b %d, %Y\");
                        }

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/message-templates-list-json' data-id='\"+ id +\"'>\\n\\
                                                                    <span> ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-template' data-id='\" + id + \"'>\\n\\
                                                                    <span> ";
        // line 60
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
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/message-templates-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 76
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 77
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 79
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                \"columnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1, -2, -3]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                // no forms at this point
                //\$.validate(conf);

                \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.closest('div.open').removeClass('open');

                    if( \$this.attr(\"href\").indexOf(\"remove-template\") !== -1 && !confirm(\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this template?"), "html", null, true);
        echo "\") ) {
                        return false;
                    }
                    
                    \$(\"#modalbox\").data('complete', 0);
                    var sendData = \$this.data();
                    ajaxPostSend(\$this.attr('href'), sendData, false, false, true);
                    return false;
                });

                \$(document).on('click', \"#modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function(e){
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();
                    closeModalBox();
                    return false;
                });

                \$(document).on(\"click\", \"#msg_tpl_create\", function(e){
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();

                    getTemplateForm();

                    \$('#modalbox').show();

                    return false;
                });

                \$(document).on('click', \"#modalbox button[type='submit']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
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
                    closeModalBox();
                    return false;
                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
              
        function closeModalBox(){
            \$(\"#modalbox\").hide();
            \$('#modalbox').find('.modal-header-name span').empty();
            \$('#modalbox').find('.devoops-modal-inner').empty();
            \$('#modalbox').find('.devoops-modal-bottom').empty();
        }

        function getTemplateForm(templateName){
            \$(\"#modalbox\").data('complete', 1);
            if (templateName) {
                \$('#modalbox').find('.modal-header-name span').text('";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Editing template"), "html", null, true);
        echo " \"' + templateName + '\"');
            } else {
                \$('#modalbox').find('.modal-header-name span').text('";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("New template"), "html", null, true);
        echo "');
            }

            \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_form_body\").text());
            \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_form_buttons\").text());
            \$.validate(conf);
        }

        var fillModalForm = function(data){
            closeModalBox();
            getTemplateForm(data.data[0]['title']);
            if (data.data.length == 1) {
                var row = data.data[0];
                for (var field_name in row) {
                    var field = \$(\"#modalbox .own_fields[name='msg_tpl[\" + field_name + \"]']\");
                    if (field.length != 0) {
                        field.val(row[field_name]);
                    }
                }
            }
            \$.validate(conf);
            \$('#modalbox').show();
        }
";
    }

    public function getTemplateName()
    {
        return "default/Events/message_templates/message_templates.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 174,  245 => 172,  173 => 103,  147 => 79,  141 => 77,  139 => 76,  134 => 74,  126 => 71,  112 => 60,  106 => 59,  99 => 55,  93 => 54,  71 => 37,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Events/message_templates/message_templates.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Events/message_templates/message_templates.js.twig");
    }
}
