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

/* default/Users/users_list/users_list.js.twig */
class __TwigTemplate_9dbc621a91a35291b22ae830e682e22bb964e728b53123c0eea65d9d8ded3449 extends \Twig\Template
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
        var datepickerBaseOpt = {
            numberOfMonths: 1,
            firstDay    : 1,
            language: '";
        // line 5
        if (($this->getAttribute(($context["app"] ?? null), "locale", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "locale", [], "array")) == 2))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "locale", [], "array"), "html", null, true);
        } else {
            echo "en";
        }
        echo "',
            dateFormat  : 'dd-mm-yy',
            dayNamesMin : [
                '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sun"), "html", null, true);
        echo "',
                '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Mon"), "html", null, true);
        echo "',
                '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tue"), "html", null, true);
        echo "',
                '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wed"), "html", null, true);
        echo "',
                '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Thu"), "html", null, true);
        echo "',
                '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Fri"), "html", null, true);
        echo "',
                '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Sat"), "html", null, true);
        echo "'
            ],
            monthNames  : [
                '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("January"), "html", null, true);
        echo "',
                '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("February"), "html", null, true);
        echo "',
                '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("March"), "html", null, true);
        echo "',
                '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("April"), "html", null, true);
        echo "',
                '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("May"), "html", null, true);
        echo "',
                '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("June"), "html", null, true);
        echo "',
                '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("July"), "html", null, true);
        echo "',
                '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("August"), "html", null, true);
        echo "',
                '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("September"), "html", null, true);
        echo "',
                '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("October"), "html", null, true);
        echo "',
                '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("November"), "html", null, true);
        echo "',
                '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("December"), "html", null, true);
        echo "'
            ],
            onClose: function (selectedDate) {
                var dateParam, inputNeighbor;
                if (\$(this).attr('id').slice(-3) == '_to') {
                    dateParam = \"maxDate\";
                    inputNeighbor = \$(this).prev('input');
                } else {
                    dateParam = \"minDate\";
                    inputNeighbor = \$(this).next('input');
                }
                if (inputNeighbor && inputNeighbor.length) {
                    inputNeighbor.datepicker(\"option\", dateParam, selectedDate);
                }
            }
        };

        var conf = {
            form: '#modalbox form',
            lang : '";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            errorClass: \"error\",
            ignore: ['.ignore'],
            modules: 'jsconf',

            onSuccess: function () {
                return false;
            },
            onError: function () {
                return false;
            }
        };

        var mediaTypeName = [
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "mediaTypeName", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            echo "'";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "'";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        ];

        var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'};

        function DemoSelect2() {
            \$(\"[id^='s2_']\").not(\"#filter_s2_state, #filter_s2_status\").select2(select2Opt);
            \$(\"#filter_s2_state, #filter_s2_status\").select2(select2Opt);
            \$(\"[id^='filter_s2_']\").select2(select2Opt);
        }

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object' && json.data.length >0) {
                    var date;
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        ";
        // line 81
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 82
            echo "                        var reseller_id = json.data[i].reseller_id;
                        var reseller_name = json.data[i].reseller_name;
                        ";
        }
        // line 85
        echo "                        var status = json.data[i].status;
                        var state = json.data[i].state;
                        var expire_billing_date = json.data[i].expire_billing_date;
                        var mac = json.data[i].mac;

                        json.data[i].now_playing_type = (typeof (mediaTypeName[json.data[i].now_playing_type]) != 'undefined' ? mediaTypeName[json.data[i].now_playing_type]: '--');
                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a href='";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-users?id=\" + id + \"'>\\n\\
                                                                    <span>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a \"+ ( !mac && !json.data[i].login ? \"disabled='disabled' \":\"\") + \"class='main_ajax no_context_menu' href='";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/send-message' data-userid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Send event"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a href='";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/users-consoles-logs?mac=\" + mac + \"'>\\n\\
                                                                    <span>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Details"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                                                            ";
        // line 111
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 112
            echo "                        json.data[i].operations +=          \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-user-to-reseller' data-id='\" + id + \"' data-reseller_id='\" + reseller_id + \"'>\\n\\
                                                                    <span>\"+ (reseller_name != '' ? \"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Change reseller for current user"), "html", null, true);
            echo "\": \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Set reseller for current user"), "html", null, true);
            echo "\") +\"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                                                            ";
        }
        // line 118
        echo "                                                            ";
        if (($this->getAttribute(($context["app"] ?? null), "enableBilling", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enableBilling", []))) {
            // line 119
            echo "                        json.data[i].operations +=          \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/set-expire-billing-date' data-userid='\" + id + \"' data-setaction='set'>\\n\\
                                                                    <span>";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Set expires billing date"), "html", null, true);
            echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                                                            if (expire_billing_date > 0) {
                        json.data[i].operations +=          \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/set-expire-billing-date' data-userid='\" + id + \"' data-setaction='unset'>\\n\\
                                                                    <span>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unset expires billing date"), "html", null, true);
            echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\";
                                                            }
                                                            ";
        }
        // line 132
        echo "                        json.data[i].operations +=          \"<li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-user' data-userid='\" + id + \"' data-userstatus='\" + status + \"'>\\n\\
                                                                    <span>\" + (status == 0 ? \"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch off"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch on"), "html", null, true);
        echo "\") + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-user' data-userid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        var last_active = new Date(json.data[i].last_active * 1000);
                        json.data[i].state = state != 0 ? \"<span class=''>Online</span>\" : \"<span class=''>Offline</span><br><span>";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Last activity"), "html", null, true);
        echo ": \" + (json.data[i].last_active != 0? last_active.toLocaleFormat(\"%b %d, %Y %H:%M\"): \"-\") + \"</span>\";
                        
                        // Note that 0 corresponds to status On !
                        //json.data[i].status = \"<span class=''>\" + (status == 0 ? \"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("on"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("off"), "html", null, true);
        echo "\") + \"</span>\";
                        json.data[i].status = '\\
                           <div class=\"mswitch\">\\
                                <input type=\"checkbox\" \\
                                       id=\"user_status_'+ json.data[i].id +'\"\\
                                       name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                       ' + ( json.data[i].status == 0 ? 'checked=\"checked\"' : '' ) +'\\
                                       data-userid=\"' + json.data[i].id + '\"\\
                                       data-userstatus=\"' + json.data[i].status +'\">\\
                                <label class=\"label-success\" \\
                                       title=\"' + ( json.data[i].status == 0 ? \"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch off"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch on"), "html", null, true);
        echo "\" ) + '\" \\
                                       for=\"user_status_'+ json.data[i].id +'\"></label>\\
                            </div>';

                        if (json.data[i].country) {
                            json.data[i].ip = \"<span class='countries-flag-container'><span class='pull-left'>\" + json.data[i].ip + \"</span>&nbsp;<span class='flag-wrapper pull-right'><span class='img-thumbnail flag flag-icon-background flag-icon-\"+json.data[i].country+\"'>&nbsp;</span></span></span>\";
                        }

                        if (json.data[i].ip_link) {
                            json.data[i].ip = \"<a href='\"+ json.data[i].ip_link +\"' target='_blanc'>\" + json.data[i].ip +\"</a>\";
                        }

                        date = json.data[i]['last_change_status'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['last_change_status'] = date.toLocaleFormat(\"%b %d, %Y\");
                        } else {
                            json.data[i]['last_change_status'] = ''/*'00-00-0000'*/;
                        }
                        ";
        // line 177
        if (($this->getAttribute(($context["app"] ?? null), "enableBilling", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enableBilling", []))) {
            // line 178
            echo "                        date = json.data[i]['expire_billing_date'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['expire_billing_date'] = date.toLocaleFormat(\"%b %d, %Y\");
                        } else {
                            json.data[i]['expire_billing_date'] = '";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unlimited"), "html", null, true);
            echo "';
                        }
                        ";
        }
        // line 186
        echo "                        date = json.data[i]['created'];
                        if (date > 0) {
                            date = new Date(date * 1000);
                            json.data[i]['created'] = date.toLocaleFormat(\"%b %d, %Y\");
                        } else {
                            json.data[i]['created'] = '---';
                        }

                        json.data[i].mac = '<a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-users?id='+ id +'\" >'+ mac +'</a>';
                        ";
        // line 195
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 196
            echo "                        json.data[i].reseller_name = '<a class=\"main_ajax no_context_menu\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
            echo "/move-user-to-reseller\" data-id=\"' + id + '\" data-reseller_id=\"' + reseller_id + '\">'+ reseller_name +'</a>';
                        ";
        }
        // line 198
        echo "                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"pageLength\": 50,
                \"ajax\": {
                    \"url\": \"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/users-list-json\",
                    \"data\": function (d) {
                        d = dataTableDataPrepare(d);

                        \$(\"div[data-tvfilter]\").each(function(){
                            var inputs, s2_filter;
                            if ((inputs = \$(this).find('input.datepicker')).length) {
                                d['filters[' + \$.trim(\$(this).data('tvfilter')) + ']'] = inputs.map(function(){return this.value}).get().join('|');
                            } else if((s2_filter = \$(this).find('select[id^=\"filter_s2_\"]')).length){
                                d['filters[' + \$.trim(\$(this).data('tvfilter')) + ']'] = s2_filter.find('option:selected').map(function(){return this.value}).get().join('|');
                            } else {
                                d['filters[' + \$.trim(\$(this).data('tvfilter')) + ']'] = \$.trim(\$(this).data('filterval')) || '';
                            }
                        });
                    }
                },
                \"language\": {
                    \"url\": \"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 224
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 225
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 227
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
                    {\"searchable\": false, \"targets\": [5, 6, 8, 9, 10, 11, ";
        // line 239
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            echo "12, ";
        }
        echo "-1]},
                    {\"sortable\": false, \"targets\": [-1]},
                    {className: \"data-filter-status\", \"targets\": [-";
        // line 241
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            echo "3";
        } else {
            echo "2";
        }
        if (($this->getAttribute(($context["app"] ?? null), "enableBilling", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enableBilling", []))) {
            echo "-1";
        }
        echo " ]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                confEvent.modules = 'jsconf, date, logic';
                extendEventForm();
                eventsMenuHandlers();
                // Make user's MAC-address field free of validation
                //\$(confEvent.form).get(0).validationConfig.ignore.push('mac');

                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = \$(this);
                    _this.closest('div.open').removeClass('open');

                    if (_this.attr('href').search(\"send-message\") != -1 || _this.attr('href').search(\"set-expire-billing-date\") != -1  || _this.attr('href').search(\"move-user-to-reseller\") != -1) {
                        return false;
                    }

                    if( _this.attr(\"href\").indexOf(\"remove-user\") != -1 && !confirm(\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this user?"), "html", null, true);
        echo "\") ) {
                        return;
                    }

                    ajaxPostSend(\$(this).attr('href'), \$(this).data(), false, false);
                    return false;
                });

                \$(document).on('change', \".mswitch input\", function(e){
                    ajaxPostSend('";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-user', \$(this).data() );
                });
                
                \$(document).on('click', 'a[href*=\"send-message\"]', function (e) {
/*
                    // the form reset is done on close by devoops.js:623
                    // so we need just to clear some values:
                    \$(\"#modalbox_ad select\").trigger('change'); // update select2 according to <select> default values
                    \$(\"#modalbox_ad form\").get(0).reset();      // clear select2 validation errors
*/
                    e.stopPropagation();
                    e.preventDefault();
                    \$(this).closest(\"div.open\").removeClass('open');

                    //\$(\"#modalbox_ad form\").get(0).reset();
                    //\$(\"#s2_msg_pattern\").trigger('change');

                    \$(\"#modalbox_ad\").find(\"select[id^='s2_']\").trigger('change.select2'); // update all select2 appearence after form reset
                    \$(\"#modalbox_ad\").show().find('input, select, textarea').removeAttr('disabled');
                    \$(\"#modalbox_ad form\").get(0).reset();

                    \$(\"#s2_user_list_type\").val('to_single');
                    \$(\"#s2_user_list_type\").trigger('change.select2').attr('disabled', 'disabled');

                    var tr = \$(this).closest('tr');
                    var table = \$('#datatable-1').DataTable();
                    var data = table.row(tr).data();

                    checkFields('#s2_user_list_type', e);
                    checkFields('#s2_event', e);
                    setEventTTL();

                    var mac = \$(\$(this).closest('tr').children('td').get(0)).text();
                    var macField = \$(\"input[name='mac']\");
                    var loginField = \$(\"input[name='login']\");
                    var regExp = /([0-9a-fA-F]{2}([:]|\$)){6}\$/ig;
                    if( \$.trim(mac) == '' ) {
                        \$(\"input[name='user_id']\").val( data.id ).removeAttr('disabled');
                        \$(\"input[name='login']\").val( data.login );
                        macField.attr('disabled', 'disabled');
                        macField.closest('.form-group').hide();
                    } else {
                        if ( regExp.test(mac) ) {
                            macField.val(mac).attr('readonly', 'readonly');
                        } else {
                            macField.val(mac).removeAttr('readonly');
                        }
                        loginField.attr('disabled', 'disabled');
                        loginField.closest('.form-group').hide();
                        \$(\"input[name='user_id']\").attr('disabled', 'disabled');
                    }

                    return false;
                });

                \$('form').on('reset', function() {
                    \$(\"input[type='hidden']\", \$(this)).val('');
                });
                
                ";
        // line 333
        if (($this->getAttribute(($context["app"] ?? null), "enableBilling", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enableBilling", []))) {
            // line 334
            echo "                \$(document).on('click', 'a[href*=\"set-expire-billing-date\"]', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = \$(this);
                    if (_this.data('setaction') == 'set') {
                        setExpireDateModal(_this);
                    } else {
                        ajaxPostSend(_this.attr('href'), _this.data());
                    }
                    return false;
                });
                \$(document).on('hide', '#modalbox', function(e){
                    \$(\"div[id*='datepicker']\").removeClass('dp_white');
                    \$('#modalbox .devoops-modal').removeAttr('style');
                });
                ";
        }
        // line 350
        echo "
                ";
        // line 351
        if (($this->getAttribute(($context["app"] ?? null), "reseller", [], "any", true, true) &&  !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "reseller", [], "array"))) {
            // line 352
            echo "                \$(document).on('click', \"a[href*='move-user-to-reseller']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox\").data('complete', 1);
                    \$('#modalbox').find('.modal-header-name span').text(\"";
            // line 356
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Resellers"), "html", null, true);
            echo "\");
                    var reseller_id = \$(this).data('reseller_id');
                    \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#move_user_to_reseller_template\").html());
                    \$('#modalbox input[name=\"id\"]').val(\$(this).data('id'));
                    \$('#modalbox input[name=\"source_id\"]').val(reseller_id);
                    \$('#target_reseller option').removeAttr('selected');
                    \$('#target_reseller option[value=\"'+ reseller_id +'\"]').attr('selected', 'selected');

                    \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_form_button_template\").html());
                    \$('#modalbox button[type=\"submit\"]').text(\"";
            // line 365
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Move"), "html", null, true);
            echo "\");

                    \$(\"#target_reseller\").select2(select2Opt);

                    \$(\"#modalbox\").show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });
                ";
        }
        // line 374
        echo "
                \$(document).on('click', \"#modalbox button[type='submit']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();

                    if (\$(\"#modalbox form\").isValid({}, conf, true)) {
                        var _this = \$(this);
                        var sendData = new Object();
                        var form_fields = _this.closest(\"#modalbox\").find('form').find(\".own_fields:not(:disabled)\");
                        form_fields.each(function () {
                            if (\$(this).val()) {
                                if (this.type.toUpperCase() != 'CHECKBOX' || this.checked) {
                                    sendData[this.name] = \$(this).val();
                                }
                            }
                        });
                        var action = _this.closest(\"#modalbox\").find('form').attr('action');
                        ajaxPostSend(action, sendData, false, false);
                        return false;
                    }
                });

                \$(document).on('change', \"#filter_param li:not(:first-child) input[type='checkbox']\", function (e) {
                    if (this.checked) {
                        ajaxPostSend(\"";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-filter\", {text_id: \$(this).val()});
                    } else {
                        \$('div[data-tvfilter=\"' + \$(this).val() + '\"]').remove();
                    }
                });

                \$(document).on('click', 'div[data-tvfilter] ul a, div[data-tvfilter] .dropdown-menu button, div[data-tvfilter] .dropdown-menu button i', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var filter_str = (this.tagName == \"A\") ? \$(this).data('filter'): \$(this).closest('.dropdown-menu').find('input').map(function(){return this.value}).get().join('|');
                    \$(this).closest('[data-filterval]').data('filterval', filter_str);
                    \$(this).closest('[data-filterval]').find('a.dropdown-toggle span:nth-child(2)').text((this.tagName == \"A\") ? \$(this).text() : \$(this).closest('.dropdown-menu').find('input').map(function(){return this.value}).get().join(' - '));
                    \$(this).closest('.open').removeClass('open');
                    return false;
                });

                \$(document).on('change', 'select[id^=\"filter_s2_\"]', function (e) {
                    var selectedOpt = \$('option:selected', this);

                    if ((!\$(this).data('tested') || \$(this).data('tested') == '0')) {
                        var incomingVal = selectedOpt.map(function(){return this.value}).get(),
                            existsVal = \$(this).closest('[data-filterval]').data('filterval'), diffVal;

                        existsVal = (existsVal) ? existsVal.split('|') : ['0'];
                        diffVal = incomingVal.filter(function(value){
                            return existsVal.indexOf(value) == -1;
                        });

                        if ( (diffVal.length == 1 && diffVal.indexOf('0') != -1) || incomingVal.length == 0 ) {
                            \$(this).val('0');
                        } else {
                            \$(this).val(incomingVal.filter(function(value){return value !== '0'}));
                        }
                        \$(this).data('tested', '1');
                        \$(this).trigger('change');
                    } else {
                        var filter_val = selectedOpt.map(function(){return this.value}).get().join('|');
                        var filter_str = selectedOpt.map(function(){return \$(this).text()}).get().join('|');
                        \$(this).closest('[data-filterval]').data('filterval', filter_val);
                        \$(this).closest('[data-filterval]').find('a.dropdown-toggle span:nth-child(2)').text(filter_str);
                        \$(this).data('tested', '0');
                    }
                });

                \$('.datepicker[id^=\"filter_string\"]').datepicker(\$.extend(datepickerBaseOpt, {minDate: null}));

                \$(document).on(\"click\", \"#apply_filter_button\", function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    \$('div[data-tvfilter] button.filter_string').trigger(\"click\");
                    \$('#datatable-1').DataTable().ajax.reload();
                    return false;
                });

                \$(document).on(\"click\", \"#form_filter_button\", function(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$('#modalbox').find('.modal-header-name span').text(\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save filter"), "html", null, true);
        echo "\");
                    var filter_set = {
                        id: ";
        // line 457
        if ($this->getAttribute(($context["app"] ?? null), "filter_set", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filter_set", []), "id", []), "html", null, true);
        } else {
            echo "\$(this).data('filter_set_id') || 0";
        }
        echo ",
                        admin_id : ";
        // line 458
        if ($this->getAttribute(($context["app"] ?? null), "user_id", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user_id", []), "html", null, true);
        } else {
            echo "0";
        }
        echo ",
                        title: \"";
        // line 459
        if ($this->getAttribute(($context["app"] ?? null), "filter_set", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filter_set", []), "title", []), "html", null, true);
        }
        echo "\",
                        for_all: ";
        // line 460
        if (($this->getAttribute(($context["app"] ?? null), "filter_set", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filter_set", []), "for_all", []))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        description: \"";
        // line 461
        if ($this->getAttribute(($context["app"] ?? null), "filter_set", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "filter_set", []), "description", []), "html", null, true);
        }
        echo "\",
                        filter_set: {}
                    };

                    \$(\"div[data-tvfilter]\").each(function(){
                        var inputs, s2_filter;
                        if ((inputs = \$(this).find('input.datepicker')).length) {
                            filter_set.filter_set[\$.trim(\$(this).data('tvfilter'))] = inputs.map(function(){return this.value}).get().join('|');
                        } else if((s2_filter = \$(this).find('select[id^=\"filter_s2_\"]')).length){
                            filter_set.filter_set[\$.trim(\$(this).data('tvfilter'))] = s2_filter.find('option:selected').map(function(){return this.value}).get().join('|');
                        } else {
                            filter_set.filter_set[\$.trim(\$(this).data('tvfilter'))] = \$.trim(\$(this).data('filterval')) || '';
                        }
                    });

                    filter_set.filter_set = encodeURIComponent(JSON.stringify(filter_set.filter_set));

                    \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#save_filter_template\").html());
                    \$('#modalbox input[name=\"filter_set[id]\"]').val(filter_set.id);
                    \$('#modalbox input[name=\"filter_set[admin_id]\"]').val(filter_set.admin_id);
                    \$('#modalbox input[name=\"filter_set[filter_set]\"]').val(filter_set.filter_set);
                    \$('#modalbox input[name=\"filter_set[title]\"]').val(filter_set.title);
                    \$('#modalbox input[name=\"filter_set[for_all]\"]').prop('checked', filter_set.for_all);
                    \$('#modalbox textarea').text(filter_set.description);
                    \$.validate(conf);

                    \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_form_button_template\").html());
                    \$('#modalbox button[type=\"submit\"]').text(\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "\");

                    \$('#modalbox').show();
                    return false;
                });

                \$(document).off('click', 'div[data-tvfilter] a.dropdown-toggle i.fa-times-circle');
                \$(document).on('click', 'div[data-tvfilter] a.dropdown-toggle i.fa-times-circle', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    var parentDiv = \$(this).closest('div[data-tvfilter]');
                    \$(\"#filter_param li[data-filter='\" + parentDiv.data('tvfilter') + \"'] input\").prop(\"checked\", false);
                    parentDiv.remove();
                    return false;
                });

                \$(document).on('click', \"span.select2-selection__choice__remove\", function(e){
                    e.stopPropagation();
                });

                \$('input.autocomplete').each(function(){
                    \$(this).autocomplete(autoCompleteInit(\$(this)));
                });

                \$(document).on('click', 'div[data-tvfilter] a:first-child', function(e){
                    if (\$(this).closest('div').hasClass('open')){
                        \$(this).closest('div').find(\"input:first-of-type\").trigger(\"focus\").trigger(\"click\");
                    }
                });

                \$(\"#modalbox\").on(\"click\", \"button[type='reset']\", function(){
                    \$(\"#modalbox form\").get(0).reset();
                    JScloseModalBox();
                });


                LoadDataTablesScripts(TestTable1);
                LoadSelect2Script(DemoSelect2);
            });

        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var removeUser = function (obj) {
            if (typeof(obj.add_button) != 'undefined') {
                if (obj.add_button) {
                    \$(\"#add_button\").show();
                    \$(\"#limit_message\").hide();
                } else {
                    \$(\"#add_button\").hide();
                    \$(\"#limit_message\").show();
                }
            }
            deleteTableRow(obj);
        };
        
        function checkFields(obj, e) {
            var dataName = \$(obj).attr('id') == 's2_user_list_type' ? 'data-list-type' : 'data-event-type';
            \$(\"[\" + dataName + \"]\").hide().find('input, select, textarea').attr('disabled', 'disabled');
            \$(obj).find('option:selected').each(function () {
                var searchVal = \$(this).val();
                var dataNameIn = dataName.replace('data-', '').replace('-', ' ').camelCase();
                \$('[' + dataName + '*=\"' + searchVal + '\"]').each(function() {
                    var \$this = \$(this);
                    if (\$this.data(dataNameIn) && \$this.data(dataNameIn).split(\";\").indexOf(searchVal) !== -1) {
                        \$this.show().find('input, select, textarea').removeAttr('disabled');
                    }
                });
            });
            return false;
        }

        function extendEventForm() {
            var macField = \$(\"input[name='mac']\");
            var loginField =    '<div class=\"form-group\" data-list-type=\"to_single\">\\n\\
                                    <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Login"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>\\n\\
                                    <div class=\"col-xs-10 col-sm-8\">\\n\\
                                        <div class=\" col-xs-10 col-sm-6\">\\n\\
                                            <input type=\"hidden\" name=\"user_id\" id=\"user_id\" value=\"\">\\n\\
                                            <input type=\"text\" name=\"login\" class=\"form-control with-error-space\" value=\"\" readonly=\"readonly\" data-validation=\"required\" data-validation-optional-if-answered=\"mac\">\\n\\
                                        </div>\\n\\
                                    </div>\\n\\
                                </div>'

            macField.attr(\"data-validation-optional-if-answered\", \"login\").closest(\".form-group\").after( loginField );
        }

        ";
        // line 576
        if (($this->getAttribute(($context["app"] ?? null), "enableBilling", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "enableBilling", []))) {
            // line 577
            echo "        function setExpireDateModal(obj){
            \$('#modalbox .modal-header-name span').text('";
            // line 578
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Expire billing date"), "html", null, true);
            echo "');
            \$('#modalbox .devoops-modal-inner').html(\$(\"#expire_date_template\").html());
            \$('#modalbox input[name=\"userid\"]').val(obj.data('userid'));
            \$('#modalbox .devoops-modal-bottom').html(\$(\"#modal_form_button_template\").html());
            \$('#modalbox button[type=\"reset\"]').removeClass('pull-right').addClass('pull-left').parent('div').removeClass('pull-right').removeClass('no-padding');
            \$('#modalbox button[type=\"submit\"]').text(\"";
            // line 583
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Set date"), "html", null, true);
            echo "\");

            \$('#modalbox .devoops-modal').width(400);
            \$(\"#expire_date_datepicker\").datepicker(\$.extend(datepickerBaseOpt, {minDate: new Date(), onClose: null}));
            \$(\"div[id*='datepicker']\").addClass('dp_white');
            \$(obj).closest('div.open').removeClass('open');
            \$('#modalbox').show();
        }
        ";
        }
        // line 592
        echo "
        var addFilter = function(data){
            var last_filter_block = \$('#filter_block div[data-tvfilter]:last');

            var filtervalStr = '<div class=\" '+(data.filter.values_set && data.filter.values_set.length > 0 ? \"filter_s\": \"filter\") +'\" data-tvfilter=\"'+ data.filter.text_id +'\" data-filterval=\"'+(data.filter.type == 'DATETIME' ? '|':'')+ '\">';

            if (last_filter_block.length) {
                last_filter_block.after(filtervalStr);
            } else {
                \$(\"#filter_block\").append(filtervalStr);
            }
            if (data.filter.values_set && data.filter.values_set.length > 0) {
                createFilterList(data.filter);
            } else if (data.filter.type == 'STRING'){
                createFilterText(data.filter)
            } else if (data.filter.type == 'DATETIME'){
                createFilterDate(data.filter)
            }
            \$(\"#filter_param\").removeClass('open');
            \$('div[data-tvfilter=\"'+ data.filter.text_id +'\"]').addClass('open').find(\"input:first-of-type\").trigger(\"focus\").trigger(\"click\");
        };

        var saveFilterData = function(data){
            if (data.return_id) {
                \$(\"#form_filter_button\").data('filter_set_id', data.return_id);
            }
            JSSuccessModalBox(data);
        };

        var saveFilterDataError = function(data){
            JSErrorModalBox(data);
        };

        var addFilterError = function(data){
            JSErrorModalBox(data);
            if (typeof(data) != 'undefined' && typeof(data.filter) != 'undefined' && typeof(data.filter.text_id) != 'undefined' ) {
                \$(\"li[data-filter='\" + data.filter.text_id + \"'] input[type='checkbox']\").prop('disabled', 'disabled').attr('checked', false);
            }
        };

        function createFilterList(filter_data){
            var filter_bloc = \$('div[data-tvfilter=\"'+ filter_data.text_id +'\"]');
            filter_bloc.append('<a data-toggle=\"dropdown\" class=\"btn dropdown-toggle\" href=\"#\"><span class=\"no-padding\">' + filter_data.title + ':</span><span>' + '";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All"), "html", null, true);
        echo "' + '</span><i class=\"fa fa-caret-down\"></i><i title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this filter"), "html", null, true);
        echo "\" class=\"fa fa-times-circle\"></i></a>')
                    .append('<div class=\"dropdown-menu\">');
            filter_bloc.find(\"div.dropdown-menu\").append('<select class=\"populate placeholder\" name=\"'+ filter_data.text_id +'\" id=\"filter_s2_'+ filter_data.text_id +'\" data-postponed=\"1\" multiple>');
            var list = filter_bloc.find('select');
            list.append('<option value=\"0\" >' + '";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All"), "html", null, true);
        echo "' + '</option>');
            for (var i in filter_data.values_set) {
                list.append('<option value=\"' + filter_data.values_set[i].value + '\">' + filter_data.values_set[i].title + '</option>');
            }

            if (\$(\"#filter_s2_\"+ filter_data.text_id).find('option:selected').length == 0) {
                \$(\$(\"#filter_s2_\"+ filter_data.text_id).find('option').get(0)).prop('selected', 'selected');
            }

            \$(\"#filter_s2_\"+ filter_data.text_id).select2(select2Opt);
        }

        function createFilterText(filter_data){
            var filter_bloc = \$('div[data-tvfilter=\"'+ filter_data.text_id +'\"]');
            filter_bloc.append('<a data-toggle=\"dropdown\" class=\" dropdown-toggle\" href=\"#\"><span class=\"no-padding\">' + filter_data.title + ':</span><span></span><i class=\"fa fa-caret-down\"></i><i class=\"fa fa-times-circle\"></i></a>');
            filter_bloc.append('<div class=\"dropdown-menu\">' +
            '<input type=\"text\" class=\"filter_string autocomplete\" value=\"\" id=\"filter_string_'+ filter_data.text_id +'\" name=\"'+ filter_data.text_id +'\">' +
            '<button type=\"button\" class=\"btn btn-success filter_string\"  data-postponed=\"1\"><i class=\"fa fa-check\"></i></button>' +
            '</div>');
            var _this = \$( '#filter_string_'+ filter_data.text_id );
            _this.autocomplete(autoCompleteInit(_this));
        }

        function createFilterDate(filter_data){
            var filter_bloc = \$('div[data-tvfilter=\"'+ filter_data.text_id +'\"]');
            filter_bloc.append('<a data-toggle=\"dropdown\" class=\"btn dropdown-toggle\" href=\"#\"><span class=\"no-padding\">' + filter_data.title + ':</span><span></span><i class=\"fa fa-caret-down\"></i><i class=\"fa fa-times-circle\"></a>');
            filter_bloc.append('<div class=\"dropdown-menu\">' +
            '<input type=\"text\" class=\"datepicker filter_string\" data-date-format=\"dd-mm-yy\" name=\"'+ filter_data.text_id +'[from]\" id=\"filter_string_'+ filter_data.text_id +'_from\" value=\"\">' +
            '<input type=\"text\" class=\"datepicker filter_string\" data-date-format=\"dd-mm-yy\" name=\"'+ filter_data.text_id +'[to]\" id=\"filter_string_'+ filter_data.text_id +'_to\" value=\"\">' +
            '<button type=\"button\" class=\"btn btn-success filter_string\" data-postponed=\"1\"></i><i class=\"fa fa-check\"></button>' +
            '</div>');
            \$('[id^=\"filter_string_'+ filter_data.text_id + '\"]').datepicker(\$.extend(datepickerBaseOpt, {minDate: null}));
        }

        function autoCompleteInit(targetObj) {
            return {
                source: \"";
        // line 674
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-autocomplete-\" + targetObj.prop('name').replace(\"_\", \"-\"),
                minLength: 3,
                messages:{
                    noResults: \"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No search results"), "html", null, true);
        echo "\"
                },
                close: function( event, ui ) {
                    targetObj.closest('[data-filterval]').data('filterval', targetObj.val());
                    targetObj.closest('[data-filterval]').find('a.dropdown-toggle span:nth-child(2)').text(targetObj.val());
                }
            }
        }
";
    }

    public function getTemplateName()
    {
        return "default/Users/users_list/users_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1051 => 677,  1043 => 674,  1004 => 638,  995 => 634,  951 => 592,  939 => 583,  931 => 578,  928 => 577,  926 => 576,  911 => 564,  832 => 488,  800 => 461,  792 => 460,  786 => 459,  778 => 458,  770 => 457,  765 => 455,  703 => 398,  677 => 374,  665 => 365,  653 => 356,  647 => 352,  645 => 351,  642 => 350,  624 => 334,  622 => 333,  558 => 274,  546 => 265,  512 => 241,  505 => 239,  491 => 227,  485 => 225,  483 => 224,  478 => 222,  456 => 205,  447 => 198,  439 => 196,  437 => 195,  431 => 194,  421 => 186,  415 => 183,  408 => 178,  406 => 177,  382 => 158,  367 => 148,  361 => 145,  352 => 139,  346 => 138,  337 => 134,  331 => 133,  328 => 132,  320 => 127,  314 => 126,  306 => 121,  300 => 120,  297 => 119,  294 => 118,  285 => 114,  279 => 113,  276 => 112,  274 => 111,  268 => 108,  262 => 107,  255 => 103,  249 => 102,  242 => 98,  236 => 97,  222 => 85,  217 => 82,  215 => 81,  197 => 65,  162 => 64,  142 => 47,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Users/users_list/users_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Users/users_list/users_list.js.twig");
    }
}
