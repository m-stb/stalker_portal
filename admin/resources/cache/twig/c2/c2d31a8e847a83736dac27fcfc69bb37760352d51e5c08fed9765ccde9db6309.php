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

/* default/Admins/resellers_list/resellers_list.js.twig */
class __TwigTemplate_e33bf2a6ebfc328e9b35ae254b23c3873f3106e7ce8dd6e28844e11041cfb1c5 extends \Twig\Template
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
        var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'};
        
        var conf = {
            form: '#modalbox_ad form',
            lang : '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            modules: 'jsconf',
            errorClass: \"error\",

            onError: function () {
                return false;
            }
        }

        function DemoSelect2() {
                \$.fn.select2.defaults.set('dropdownAutoWidth', 'false');
                \$.fn.select2.defaults.set('width', '100%');
                \$('#target_reseller').select2(select2Opt);
        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var name = json.data[i].name;
                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/move-users-to-reseller' data-id='\" + id +\"'>\\n\\
                                                                    <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Move all users to another reseller"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        \";
                        if (id !== '-') {
                            json.data[i].operations += \"<li>\\n\\
                                                            <a class='main_ajax no_context_menu' href='";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/resellers-list-json' data-id='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/resellers-delete' data-id='\" + id + \"'>\\n\\
                                                                    <span> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                            json.data[i].name = '<a class=\"main_ajax no_context_menu\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/resellers-list-json\" data-id=\"' + id + '\">' + name + '</a>';
                        }
                        json.data[i].operations += \"</ul>\\n\\
                                                    </div>\";
                        if (json.data[i].max_users <= 0) {
                            json.data[i].max_users = \"&#8734\";
                        }
                        var possibleDateKeys = ['created', 'modified'], date;
                        for (var num in possibleDateKeys) {
                            var key = possibleDateKeys[num];
                            if (typeof(json.data[0][key]) != 'undefined') {
                                date = json.data[i][key];
                                if (date > 0) {
                                    date = new Date(date * 1000);
                                    json.data[i][key] = date.toLocaleFormat(\"%b %d, %Y %H:%M\");
                                }
                            }
                        }
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/resellers-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 81
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 82
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 84
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                \"columnDefs\": [
                    {className: \"action-menu\", \"targets\": [-1]},
                    {\"searchable\": false, \"targets\": [-1, 2, 3, 4, 5]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                \$.validate(conf);

                \$(document).on('click', \"a.main_ajax:not([href*='move-users-to-reseller'])\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.closest('div.open').removeClass('open');

                    if( \$this.attr(\"href\").indexOf(\"resellers-delete\") !== -1 && !confirm(\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove this reseller?"), "html", null, true);
        echo "\") ) {
                        return false;
                    }
                    
                    var sendData = \$this.data();
                    ajaxPostSend(\$this.attr('href'), sendData, false, false);
                    return false;
                });

                \$(document).on('click', \"#form_reset\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    if (!\$(this).closest('form').find(\"input[type='hidden']\").val()) {
                        \$('#modalbox form').get(0).reset();
                    }
                    JScloseModalBox();
                    return false;
                });

                \$(document).on('click', \"#modalbox_ad button[type='submit'], #modalbox button[type='submit']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    if (\$(conf.form).isValid({}, conf, true)) {
                        var _this = \$(this);
                        var sendData = new Object();
                        var form_fields = _this.closest(\"div[id*='modalbox']\").find('form').find(\".own_fields:not(:disabled)\");
                        form_fields.each(function () {
                            if (\$(this).val()) {
                                sendData[this.name] = \$(this).val();
                            }
                        });
                        var action = _this.closest(\"div[id*='modalbox']\").find('form').attr('action');
                        ajaxPostSend(action, sendData, false, false);
                    }   
                    return false;
                });

                \$(\"#add_reseller\").on(\"click\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Adding reseller"), "html", null, true);
        echo "');
                    \$(\"#modalbox_ad input\").removeAttr('disabled').val('');
                    \$(\"#modalbox_ad input[type='hidden']\").attr('disabled', 'disabled');
                    \$(\"#modalbox_ad\").show();
                    return false;
                });

                \$(document).on('click', \"a[href*='move-users-to-reseller']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox\").data('complete', 1);
                    \$('#modalbox').find('.modal-header-name span').text(\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Resellers"), "html", null, true);
        echo "\");
                    var formHtml = '\\n\\
                        <div class=\"box-content\">\\n\\
                            <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/move-users-to-reseller\">\\n\\
                                <div class=\"form-group\">\\n\\
                                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reseller name"), "html", null, true);
        echo "</label>\\n\\
                                    <div class=\"col-xs-10 col-sm-8\">\\n\\
                                        <span class=\"col-xs-12 col-sm-10\">\\n\\
                                            <input type=\"hidden\" class=\"own_fields\" name=\"source_id\" value=\"'+ \$(this).data('id') + '\">\\n\\
                                            <select class=\"own_fields\" name=\"target_id\" id=\"target_reseller\">\\n\\
                                    ";
        // line 170
        echo "                                        ";
        if ($this->getAttribute(($context["app"] ?? null), "allResellers", [], "any", true, true)) {
            // line 171
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 172
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["row"], "id", []);
                echo "\" >";
                echo (($this->getAttribute($context["row"], "name", [])) ? ($this->getAttribute($context["row"], "name", [])) : ("&nbsp;"));
                echo "</option>\\n\\
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                                        ";
        }
        // line 175
        echo "                                    ";
        // line 176
        echo "                                        </span>\\n\\
                                    </div>\\n\\
                                </div>\\n\\
                            </form>\\n\\
                        </div>';
                    \$('#modalbox').find('.devoops-modal-inner').html(formHtml);
                    \$('#modalbox').find('.devoops-modal-bottom').html('\\n\\
                        <div class=\"col-xs-12\">\\n\\
                            <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Move"), "html", null, true);
        echo "</button>\\n\\
                            <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\" id=\"form_reset\">";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                        </div>');

                    \$(\"#target_reseller option[value='\"+\$(this).data('id')+\"']\").prop('selected', 'selected');
                    \$(\"#target_reseller\").select2(select2Opt);

                    \$(\"#modalbox\").show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                LoadSelect2Script(DemoSelect2);
                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
        
        var setResellerModal = function (data) {
            \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Editing reseller"), "html", null, true);
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
        return "default/Admins/resellers_list/resellers_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 204,  302 => 185,  298 => 184,  288 => 176,  286 => 175,  283 => 174,  272 => 172,  267 => 171,  264 => 170,  256 => 164,  249 => 162,  243 => 159,  229 => 148,  185 => 107,  160 => 84,  154 => 82,  152 => 81,  147 => 79,  139 => 76,  110 => 52,  104 => 49,  98 => 48,  91 => 44,  85 => 43,  76 => 37,  70 => 36,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Admins/resellers_list/resellers_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Admins/resellers_list/resellers_list.js.twig");
    }
}
