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

/* default/Users/users_consoles_groups/users_consoles_groups.js.twig */
class __TwigTemplate_5b95e38e05144ecda128f7f0bece9c3e4072a83eb462837071b9b20eba043ea8 extends \Twig\Template
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
            lang : '";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            ignore: [],
            modules: 'security',

            onkeyup: false,
            errorClass: \"error\",

            onSuccess: function () {
                var sendData = {};
                \$(\"#modalbox\").find('input.own_fields, select.own_fields').each(function(){
                    sendData[\$(this).attr('name')] = \$(this).val();
                });
                ajaxPostSend(\$(\"#modalbox form\").attr('action'), sendData);
                JScloseModalBox();
            },

            onError: function () {
                return false;
            }
        };

        ";
        // line 27
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 28
            echo "
            var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'};

            function DemoSelect2() {
                \$(\"[id^='s2_']\").select2(select2Opt);
            }

        ";
        }
        // line 36
        echo "
        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        json.data[i] = getCeils(json.data[i]);
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/users-consoles-groups-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 53
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 54
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 56
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,

                \"fixedHeader\": {
                    header: true,
                    headerOffset: \$('header.navbar').height()
                },
                
                \"aoColumnDefs\": [
                    { className: \"action-menu\", \"targets\": [ -1 ] },
                    {\"searchable\": false, \"targets\": [-1]},
                    {\"sortable\": false, \"targets\": [-1]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                
                /*
                \$(document).on('change', '#console_name', function(e){
                    var \$this = \$(this);
                    \$this.next('div').removeClass('bg-danger').hide().empty();
                    \$('#modalbox_ad button[type=\"submit\"]').removeAttr(\"disabled\");

                    if ( \$(\"#modalbox form\").isValid( ) && \$this.val().replace(/\\s/ig, '').length ) { // yes, it's double check
                        var sendData = {
                            name: \$(this).val(),
                            id: \$(\"#modalbox input[name='id']\").val()
                        };
                        ajaxPostSend(\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-console-name\", sendData, false, false);
                    }
                });*/
                
                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    \$this.closest('div.open').removeClass('open');

                    if( \$this.attr(\"href\").indexOf(\"remove-console-group\") !== -1 && !confirm(\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this users group?"), "html", null, true);
        echo "\") ) {
                        return false;
                    }

                    ajaxPostSend(\$this.attr('href'), \$this.data());
                    return false;
                });
                
                \$(document).on('click', '#add_console_group, a[id^=\"edit_console_group_\"]', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    openModalBox(\$(this));
                    return false
                });

                ";
        // line 113
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 114
            echo "                \$(document).on('click', \"a[href*='move-user-group-to-reseller']\", function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox\").data('complete', 1);
                    \$('#modalbox').find('.modal-header-name span').text(\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Resellers"), "html", null, true);
            echo "\");
                    var reseller_id = \$(this).data('reseller_id');

                    \$('#modalbox .devoops-modal-inner').html(\$(\"#modal_change_reseller_form\").html());
                    \$('#modalbox .devoops-modal-inner input[name=\"consolegroupid\"]').val(\$(this).data('consolegroupid'));

                    \$('#target_reseller option').removeAttr('selected');
                    \$('#target_reseller option[value=\"'+ reseller_id +'\"]').attr('selected', 'selected');

                    \$('#modalbox .devoops-modal-bottom').html(\$(\"#modal_form_buttons\").html());
                    \$('#modalbox .devoops-modal-bottom button[type=\"submit\"]').text(\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Move"), "html", null, true);
            echo "\");

                    \$(\"#target_reseller\").select2(select2Opt);
                    \$.validate(conf);

                    \$(\"#modalbox\").show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                LoadSelect2Script(DemoSelect2);

                ";
        }
        // line 141
        echo "
                \$(document).on('click', \"#modalbox button[type='reset'], #modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function(e){
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();

                    JScloseModalBox();

                    return false;
                });

                \$(document).on('click', \"#modalbox button[type='submit']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    
                    if (\$(\"#modalbox form\").isValid({}, conf, true)) {
                        conf.onSuccess();
                    } else {
                        conf.onError();
                    }
                    return false;
                });
                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var manageList = function (obj) {
            \$(\"#modalbox_ad\").click();
            JSSuccessModalBox(obj);
            \$('#datatable-1').DataTable().ajax.reload();
        };

        var manageListError = function (obj) {
            JSErrorModalBox(obj);
        };

    
    function openModalBox(obj){
        \$('#modalbox .modal-header-name span').text((obj.data('consolegroupid')? \"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit group"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add group"), "html", null, true);
        echo "\"));
        \$('#modalbox .devoops-modal-inner').html(\$(\"#modal_group_name_form\").html());
        \$('#modalbox .devoops-modal-bottom').html(\$(\"#modal_form_buttons\").html());

        if (obj.data('consolegroupid')) {
            \$('#modalbox .devoops-modal-inner input[type=\"hidden\"]').val(obj.data('consolegroupid'));
            \$('#modalbox .devoops-modal-inner input[type=\"text\"]').val(obj.data('consolegroupname'));
        }

        // set up form validator
        if (obj.data('consolegroupid')) {
            clearServerValidator();
            setEditValidationConfig(conf);
            \$(\"#console_name\").removeAttr('data-validation-event');
        } else {
            clearServerValidator();
            setDefaultValidationConfig(conf);
            \$(\"#console_name\").removeAttr('data-validation-event');
        }
        \$.validate(conf);
        setServerValidationRequestParams();

        \$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");
        \$('#console_name').next('div').removeClass('bg-danger').css('visibility', 'hidden').html('&nbsp;');
        \$('#modalbox form').attr('action', obj.attr('href'));
        \$(\"#modalbox\").show();
        obj.closest('div.open').removeClass('open');
    }

    function getCeils(data){
        var resellers = {};
        ";
        // line 214
        if ($this->getAttribute(($context["app"] ?? null), "allResellers", [], "any", true, true)) {
            // line 215
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allResellers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 216
                echo "        resellers['";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "'] = '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "';
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "        ";
        }
        // line 219
        echo "        var ceils = {};
        ceils.RowOrder = data.RowOrder;
        ceils.name = '<a href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/users-groups-consoles-list?id='+data.id+'\">'+data.name+'</a>';
        var reseller_id = '' + (typeof (data.reseller_id) != 'undefined' ? data.reseller_id: '-') + '';
        ceils.users_count  = data.users_count;
        ceils.reseller_name = '<a class=\"no_context_menu\" href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/move-user-group-to-reseller\" data-consolegroupid=\"'+data.id+'\" data-reseller_id=\"'+reseller_id+'\">' + resellers[reseller_id] + '</a>';
        ceils.operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                    <i class='pull-right fa fa-cog'></i>\\n\\
                                </a>\\n\\
                                <ul class='dropdown-menu pull-right'>\\n\\
                                    <li>\\n\\
                                        <a class='no_context_menu' href='";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-console-group'  id='edit_console_group_\"+data.id+\"' data-consolegroupid='\" + data.id + \"' data-consolegroupname='\" + data.name + \"'>\\n\\
                                            <span>";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                        </a>\\n\\
                                    </li>\" +
        
                                    ";
        // line 236
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 237
            echo "                                    \"<li>\\n\\
                                        <a class='no_context_menu' href='";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-user-group-to-reseller' data-consolegroupid='\" + data.id + \"' data-reseller_id='\"+reseller_id+\"'>\\n\\
                                            <span>";
            // line 239
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change reseller for current group"), "html", null, true);
            echo "</span>\\n\\
                                        </a>\\n\\
                                    </li>\" +
                                    ";
        }
        // line 243
        echo "
                                    \"<li>\\n\\
                                        <a class='main_ajax no_context_menu' href='";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-console-group' data-consolegroupid='\" + data.id + \"'>\\n\\
                                            <span>";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                        </a>\\n\\
                                    </li>\\n\\
                                </ul>\\n\\
                            </div>\";
        return ceils;
    }


function setServerValidationRequestParams() {
    var param = {
        'id': \$(\"#modalbox input[name='id']\").val(),
        'for_validator': true,
    };
    \$('#console_name').attr('data-validation-req-params', JSON.stringify(param) );
}

// drop assigned server-side validator instance to stop reuse:
function clearServerValidator() {
    \$(\"#modalbox\").find(\"[data-validation~='server']\").each( function(){
        this.asyncValidators = null;
    });
}

function setDefaultValidationConfig(conf) {
    conf.ignore = [];
    conf.validateOnBlur = true;
    conf.validateOnEvent = false;
    
    \$(\"#console_name\").off('change');
}

function setEditValidationConfig(conf) {
    conf.ignore = ['name'];
    conf.validateOnBlur = false;
    conf.validateOnEvent = true;

    \$(\"#console_name\").one('change', function (e) {
        var ignore = conf.ignore;
        var index = ignore.indexOf(this.name);
        if( index !== -1 ){
            \$(this).attr('data-validation-event', \"blur\");
            ignore.splice( index, 1 );
            \$.validate(conf);
        }
    });
}
";
    }

    public function getTemplateName()
    {
        return "default/Users/users_consoles_groups/users_consoles_groups.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 246,  372 => 245,  368 => 243,  361 => 239,  355 => 238,  352 => 237,  350 => 236,  343 => 232,  337 => 231,  325 => 224,  317 => 221,  313 => 219,  310 => 218,  299 => 216,  294 => 215,  292 => 214,  256 => 183,  212 => 141,  196 => 128,  183 => 118,  177 => 114,  175 => 113,  157 => 98,  142 => 88,  108 => 56,  102 => 54,  100 => 53,  95 => 51,  87 => 48,  73 => 36,  63 => 28,  61 => 27,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/users_consoles_groups/users_consoles_groups.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/users_consoles_groups/users_consoles_groups.js.twig");
    }
}
