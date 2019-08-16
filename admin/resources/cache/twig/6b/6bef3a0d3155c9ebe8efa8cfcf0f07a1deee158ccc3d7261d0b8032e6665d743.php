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

/* default/Infoportal/phone_book/phone_book.js.twig */
class __TwigTemplate_46d99aecfe407de4367d4c8028192390b90a16a3690108024075af4363e1c85c extends \Twig\Template
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
            form: '#karaoke_form',
            lang : '";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            modules: 'jsconf',

            onSuccess: function () {
                var sendData = new Object();
                var form_fields = \$(\"#modalbox_ad input.own_fields:not(:disabled)\");
                form_fields.each(function () {
                    if (\$(this).val()) {
                        sendData[this.name] = \$(this).val();
                    }
                });

                sendData[\"phoneboocksource\"] = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "service", [], "array"), "html", null, true);
        echo "\";
                ajaxPostSend(\$(\"#modalbox_ad form\").attr('action'), sendData, false, false);
                return false;
            },

            onError: function () {
                return false;
            }
        };

        function closeModalBox(){
            \$(\"#modalbox\").hide();
            \$('#modalbox').find('.modal-header-name span').empty();
            \$('#modalbox').find('.devoops-modal-inner').empty();
            \$('#modalbox').find('.devoops-modal-bottom').empty();
        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var title = json.data[i].title;
                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8' >\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/phone-book-list-json' data-id='\" + id + \"' data-phoneboocksource='";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "service", [], "array"), "html", null, true);
        echo "'>\\n\\
                                                                    <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-phone-book-item' data-id='\" + id + \"' data-phoneboocksource='";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "service", [], "array"), "html", null, true);
        echo "'>\\n\\
                                                                    <span> ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        json.data[i].title = '<a class=\"main_ajax no_context_menu\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/phone-book-list-json\" data-id=\"' + id + '\" data-phoneboocksource=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filters", [], "array"), "service", [], "array"), "html", null, true);
        echo "\">' + title + '</a>';

                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/phone-book-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },

                ";
        // line 73
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 74
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 76
        echo "                
                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },

                \"columnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                \$.validate(conf);

                \$(document).on('click', \"a.main_ajax[disabled!='disabled']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var sendData = \$(this).data();
                    ajaxPostSend(\$(this).attr('href'), sendData, false, false);
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(\"#form_reset\").on('click', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(this).closest('form').get(0).reset();
                    return false;
                });

                \$(\"#modalbox_ad button[type='submit']\").on('click', function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    if (\$(\"#karaoke_form\").isValid({}, conf, true)) {
                        conf.onSuccess();
                    } else {
                        conf.onError();
                    }
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
                
                \$(\"#add_phone_book_item\").on(\"click\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$.validate();
                    \$('#karaoke_form').get(0).reset();
                    \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Adding"), "html", null, true);
        echo "');
                    \$(\"#modalbox_ad input\").prop(\"disabled\", false).removeAttr('disabled').val('');
                    \$(\"#modalbox_ad input[type='hidden']\").attr('disabled', 'disabled').val('');
                    \$(\"#modalbox_ad\").show();
                    //        \$(this).closest('.form-group').find('tbody tr:hidden').show();
                    return false;
                });
                
                LoadDataTablesScripts(TestTable1);

            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
        
        var setPhoneBookModal = function (data) {
            \$.validate();
            \$('#karaoke_form').get(0).reset();
            \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "');
            if (data.data.length == 1) {
                var row = data.data[0];
                for (var field_name in row) {
                    \$(\"#modalbox_ad input[name='\" + field_name + \"']\").val(row[field_name]);
                }
            }
            \$(\"#modalbox_ad input\").removeAttr('disabled');
            \$(\"#modalbox_ad\").show();
        };
";
    }

    public function getTemplateName()
    {
        return "default/Infoportal/phone_book/phone_book.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 161,  222 => 143,  153 => 76,  147 => 74,  145 => 73,  139 => 70,  131 => 67,  116 => 59,  108 => 54,  100 => 53,  93 => 49,  85 => 48,  53 => 19,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Infoportal/phone_book/phone_book.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Infoportal/phone_book/phone_book.js.twig");
    }
}
