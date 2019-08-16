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

/* default/Users/add_users/add_users.js.twig */
class __TwigTemplate_2cb97d50497b52592721f733656e07f85c4f328aa8bfc11ffeed6f28ed159cdf extends \Twig\Template
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

var isEditing = ";
        // line 4
        echo (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", [])) ? ("true") : ("false"));
        echo "

var conf = {
    form: '#form_',
    lang : '";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
    showHelpOnFocus : true,
    validateOnBlur: true,
    validateOnEvent: false,
    validateHiddenInputs: true,
    ignore: [],
    modules: 'jsconf, date, security',

    onSuccess: function () {
        \$(this.form).get(0).submit();
        return false;
    },
    onError: function () {
        return false;
    }
};

var dayNamesMin = [
        '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
        echo "',
        '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
        echo "',
        '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
        echo "',
        '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
        echo "',
        '";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
        echo "',
        '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
        echo "',
        '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
        echo "'
    ],
    monthNames = [
        '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
        echo "',
        '";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
        echo "',
        '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
        echo "',
        '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
        echo "',
        '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
        echo "',
        '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
        echo "',
        '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
        echo "',
        '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
        echo "',
        '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
        echo "',
        '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
        echo "',
        '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
        echo "',
        '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
        echo "'
    ];


function DemoSelect2() {
    \$('#form_group_id').select2(select2Opt);
    \$('#form_tariff_plan_id, #form_tariff_id_instead_expired').select2(select2Opt);
    \$('#form_additional_services_on').select2(select2Opt);
    \$('#form_status').select2(select2Opt);
    \$('#form_theme').select2(select2Opt);
    ";
        // line 56
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 57
            echo "    \$('#form_reseller_id').select2(select2Opt);
    ";
        }
        // line 59
        echo "}

function TestTable1() {
    \$('.table-datatable').dataTable({
        \"processing\": false,
        \"serverSide\": false,
        \"ajax\": null,
        \"language\": {
            \"url\": \"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
        },
        ";
        // line 69
        if ($this->getAttribute(($context["app"] ?? null), "tracert_attr", [], "any", true, true)) {
            // line 70
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tracert_attr", [], "array")], "method"), "html", null, true);
            echo "
        ";
        }
        // line 72
        echo "        \"bFilter\": false,
        \"bPaginate\": false,
        \"bInfo\": false,
        \"aoColumnDefs\": [
            {\"searchable\": false},
            {\"orderable\": false, \"targets\": [ 0 ]}
        ]
    });
}

function yelp() {
    \$(document).ready(function () {

        // set up validator config
        if (isEditing) {
            setEditValidationConfig(conf);
        } else {
            setDefaultValidationConfig(conf);
        }
        
        \$.validate(conf);
        setServerValidationRequestParams();

        \$('[data-toggle=\"tooltip\"]').tooltip();
        \$(\"#form_tariff_expired_date\").datepicker({
                minDate: new Date(),
                onClose: null,
                numberOfMonths: 1,
                firstDay : 1,
                language: '";
        // line 101
        if (($this->getAttribute(($context["app"] ?? null), "locale", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "locale", [], "array")) == 2))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "locale", [], "array"), "html", null, true);
        } else {
            echo "en";
        }
        echo "',
                dateFormat  : 'dd-mm-yy',
                dayNamesMin : dayNamesMin,
                monthNames  : monthNames,
                showOn: \"both\",
                buttonImage: \"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/calendar.gif\",
                buttonImageOnly: true,
                buttonText: \"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select date"), "html", null, true);
        echo "\"
            }
        );

        LoadSelect2Script(DemoSelect2);
        LoadDataTablesScripts(TestTable1);

        ";
        // line 115
        if (($this->getAttribute(($context["app"] ?? null), "enableBilling", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enableBilling", []))) {
            // line 116
            echo "        \$(\"#form_expire_billing_date\").datepicker({
                language: 'ru',
                dateFormat: 'dd-mm-yy',
                firstDay: 1,
                minDate: new Date(),
                dayNamesMin: dayNamesMin,
                monthNames: monthNames,
                showOn: \"both\",
                buttonImage: \"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/img/calendar.gif\",
                buttonImageOnly: true,
                buttonText: \"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Select date"), "html", null, true);
            echo "\"
            }
        );
        ";
        }
        // line 130
        echo "
        /*
        \$(document).on('change keydown', '#form_login', debounce( 500, function (e) {
            var \$this = \$(this);
            \$this.next('div').removeClass('bg-danger').css('visibility', 'hidden').empty();

            if( \$this.val() ) {
                var sendData = {
                    id :    \$(\"#form_id\").val(),
                    login : \$this.val()
                };
                ajaxPostSend('";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-login', sendData);
            }
        }));

        \$(document).on('input', \"#form_mac:not(:disabled)\", function(){
            if ((/^([0-9A-Fa-f]{2}\\:){5}([0-9A-Fa-f]{2})\$/ig).test(\$(this).val())) {
                \$(this).next('div.ajax-check').show();
                ajaxPostSend('";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-console-item', {mac: \$(this).val(), input_id: \$(this).attr('id'), form_page: 'add_user_form'});
            } else {
                \$(this).next('div.ajax-check').hide();
            }
        });*/

        \$(document).on('click', \"a.main_ajax\", function (e) {
            e.stopPropagation();
            e.preventDefault();

            ajaxPostSend(\$(this).attr('href'), \$(this).data(), false, false);

            return false;
        });

        \$(document).on('change', '#form_tariff_plan_id', function(){
            if(\$(this).val() != \$(\"#tariff_plan_table\").data('planid')){
                \$(\"#tariff_plan_table\").hide();
                \$(\"#tariff_plan_change\").show();
                var expirestime = parseInt(\$('#form_tariff_plan_id option:selected').data('expirestime'));
                if (expirestime) {
                    var tariff_expired_date = new Date();
                    tariff_expired_date.setDate(tariff_expired_date.getDate() + expirestime);
                    \$(\"#form_tariff_expired_date\").val(tariff_expired_date.toLocaleFormat('%d-%m-%Y'));
                } else {
                    \$(\"#form_tariff_expired_date\").val('');
                }
            } else {
                \$(\"#tariff_plan_table\").show();
                \$(\"#tariff_plan_change\").hide();
                \$(\"#form_tariff_expired_date\").val(\$(\"#form_tariff_expired_date\").data('oldvalue'));
            }
        });

        \$(document).on('click', '#form_save', function(){
            if (!\$(\"#tariff_plan_table\").is(':visible')) {
                \$(\"#tariff_plan_table input\").attr('disabled', 'disabled');
            }

            e.stopPropagation();
            e.preventDefault();

            if (\$(conf.form).isValid({}, conf, true)) {
                conf.onSuccess();
            } else {
                conf.onError();
            }
            return false;
        });

        ";
        // line 198
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", []) && ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanFlag", [], "array") || $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanSubscriptionFlag", [], "array")))) {
            // line 199
            echo "        \$(document).on('click', \"#tv_subscription\", function (e){
            e.stopPropagation();
            e.preventDefault();
            ajaxPostSend(\$(this).attr('href'), \$(this).data());
        });

        \$(\"#modalbox_ad\").on('click', 'button[type=\"submit\"]', function(e){
            e.stopPropagation();
            e.preventDefault();
            var sendData = {
                user_id: \$('#form_id').val(),
                sub_ch: []
            };
            \$(\"#subscribed_tv option\").each(function(){
                sendData.sub_ch.push(\$(this).val())
            });
            ajaxPostSend(\$(this).closest('form').attr('action'), sendData);
        });
        ";
        }
        // line 218
        echo "    });
}
document.addEventListener(\"DOMContentLoaded\", yelp, false);

var resetUsersParentPassword = function (obj) {
    \$(obj).closest('.form-group').find('input').val(\$(obj).data('newpass'));
    JSSuccessModalBox(obj);
};

var resetUserFavTv = function (obj) {
    \$(obj).closest('.form-group').find('input').val(0);
    JSSuccessModalBox(obj);
};


function setServerValidationRequestParams() {
    var param = {
        'id': \$(\"#form_id\").val(),
        'for_validator': true
    };
    \$('#form_login').attr('data-validation-req-params', JSON.stringify(param) );

    param = {
        'id': \$(\"#form_id\").val(),
        'input_id': \"form_mac\",
        'form_page': \"add_user_form\",
        'for_validator': true
    };
    \$('#form_mac').attr('data-validation-req-params', JSON.stringify(param) );
}

function setDefaultValidationConfig(conf) {
    conf.ignore = [];
    conf.validateOnBlur = true;
    conf.validateOnEvent = false;

    \$(\"#form_login, #form_mac\").off('change');
}

function setEditValidationConfig(conf) {
    conf.ignore = ['form[login]','form[mac]'];
    conf.validateOnBlur = false;
    conf.validateOnEvent = true;

    \$(\"#form_login, #form_mac\").one('change', function (e) {
        var ignore = conf.ignore;
        var index = ignore.indexOf(this.name);
        if( index !== -1 ){
            //\$(this).attr('data-validation-event', \"blur\");
            ignore.splice( index, 1 );
            conf.validateOnBlur = true;
            conf.validateOnEvent = false;
            \$.validate(conf);
        }
    });
}


";
        // line 276
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userEdit", []) && ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanFlag", [], "array") || $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "tariffPlanSubscriptionFlag", [], "array")))) {
            // line 277
            echo "var setSubscribedTVModal = function(data){
    if (data.not_subscribed_tv) {
        \$(\"#not_subscribed_tv\").empty();
        \$.each(data.not_subscribed_tv, function(){
            \$(\"#not_subscribed_tv\").append('<option value=\"'+this.id+'\">'+this.name+'</option>');
        });
    }

    if (data.subscribed_tv) {
        \$(\"#subscribed_tv\").empty();
        \$.each(data.subscribed_tv, function(){
            \$(\"#subscribed_tv\").append('<option value=\"'+this.id+'\">'+this.name+'</option>');
        });
    }

    \$(\"#modalbox_ad\").show();
};

var hideSubscribedTVModal = function(data){
    \$(\"#modalbox_ad\").hide();
    JSSuccessModalBox(data);
};

var hideSubscribedTVModalError = function(data){
    JSErrorModalBox(data);
};

";
        }
    }

    public function getTemplateName()
    {
        return "default/Users/add_users/add_users.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 277,  424 => 276,  364 => 218,  343 => 199,  341 => 198,  286 => 148,  274 => 141,  261 => 130,  254 => 126,  249 => 124,  239 => 116,  237 => 115,  227 => 108,  222 => 106,  210 => 101,  179 => 72,  173 => 70,  171 => 69,  166 => 67,  156 => 59,  152 => 57,  150 => 56,  137 => 46,  133 => 45,  129 => 44,  125 => 43,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  63 => 26,  42 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/add_users/add_users.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/add_users/add_users.js.twig");
    }
}
