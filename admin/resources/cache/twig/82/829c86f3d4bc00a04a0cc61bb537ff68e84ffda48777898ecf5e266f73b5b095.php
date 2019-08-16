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

/* default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.js.twig */
class __TwigTemplate_f5bed3367b6646f6167e6a7fd86f3f04a9a7d763083c780da6675463a7fd77a5 extends \Twig\Template
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
    form: '#form_',
    lang : '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
    showHelpOnFocus : true,
    validateHiddenInputs: true,
    scrollToTopOnError: false,
    modules: 'security',

    onSuccess: function () {
        var sendData = {};
        \$('.own_field', this.form).each(function () {
            sendData[\$(this).attr('name')] = \$(this).is(':checkbox') ? (\$(this).is(':checked') ? 1 : 0) : \$(this).val();
        });
        JScloseModalBox();
        ajaxPostSend(\$(this.form).attr('action'), sendData, false, false, true);
        return false;
    },

    onError: function () {
        return false;
    }
};

    function TestTable1() {
        \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
            if (typeof (json.data) == 'object') {
                var id, name, status;
                for (var i in json.data) {
                    id = json.data[i].id;
                    name = json.data[i].name;
                    status = json.data[i].status;

                    json.data[i]['name'] = '<a class=\"main_ajax no_context_menu\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-moderators-addresses-list-json\" data-id=\"'+id+'\">'+name+'</a>';
                    json.data[i]['disable_vclub_ad'] = ( json.data[i]['disable_vclub_ad'] ? \"<span class=''>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Yes"), "html", null, true);
        echo "</span>\" : \"<span class=''>-</span>\");
                    
                    //json.data[i]['status'] = ( status ? \"<span class=''>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched on"), "html", null, true);
        echo "</span>\" : \"<span class=''>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched off"), "html", null, true);
        echo "</span>\");
                    json.data[i].status = '\\
                       <div class=\"mswitch\">\\
                            <input type=\"checkbox\" \\
                                   id=\"mod_status_'+ json.data[i].id +'\"\\
                                   name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                   ' + ( json.data[i].status ? 'checked=\"checked\"' : '' ) +'\\
                                   data-modid=\"' + json.data[i].id + '\"\\
                                   data-modstatus=\"' + (1 - json.data[i].status) +'\">\\
                            <label class=\"label-success\" \\
                                   title=\"' + ( json.data[i].status ? \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched on"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched off"), "html", null, true);
        echo "\" ) + '\" \\
                                   for=\"mod_status_'+ json.data[i].id +'\"></label>\\
                        </div>\\
                        ';

                    json.data[i].operations = '<div class=\"col-xs-3 col-sm-8 ddd\">\\n\\
                                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">\\n\\
                                                            <i class=\"pull-right fa fa-cog\"></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class=\"dropdown-menu pull-right\">\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-moderators-addresses-list-json\" data-id=\"'+id+'\">\\n\\
                                                                    <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-video-moderators-status\" data-modstatus=\"'+(status ? 0: 1)+'\" data-modid=\"'+id+'\">\\n\\
                                                                    <span>'+ (status ? \"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch off"), "html", null, true);
        echo "\":\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switch on"), "html", null, true);
        echo "\") +'</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-video-moderators\" data-modid=\"'+id+'\">\\n\\
                                                                    <span>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>';

                }
            }
        }).dataTable({
            \"processing\": true,
            \"serverSide\": true,
            \"ajax\": {
                \"url\": \"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-moderators-addresses-list-json\"
            },
            \"language\": {
                \"url\": \"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
            },
            \"bFilter\": true,
            \"bPaginate\": true,
            \"lengthChange\": true,
            \"bInfo\":     true,
            
            ";
        // line 92
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 93
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
            ";
        }
        // line 95
        echo "
            fixedHeader: {
                header: true,
                headerOffset: \$('header.navbar').height()
            },

            \"aoColumnDefs\": [ 
                { \"orderable\" : false, \"targets\": [ -1 ] },
                { \"searchable\": false, \"targets\": [ -1, -2, -3 ] },
                { \"width\": \"10%\", \"targets\": [ 1, 2, -2 ] },
                { className: \"dt-center\", \"targets\": [ 2 ] },
                { className: \"action-menu\", \"targets\": [ -1 ] }
            ]
        }).prev('.dataTables_processing').hide('');
    }

    function yelp() {
        \$(document).ready(function () {
            
            LoadDataTablesScripts(TestTable1);

            \$(document).on('click', \"a.main_ajax\", function (e) {
                e.stopPropagation();
                e.preventDefault();
                var _this = \$(this);

                ajaxPostSend(\$(this).attr('href'), _this.data());

                _this.closest('div.open').removeClass('open');
                return false;
            });

            \$(document).on('change', \".mswitch input\", function(e){
                ajaxPostSend('";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-video-moderators-status', \$(this).data() );
            });


            \$(document).on('click', '#add_video_moderator', function (e) {
                e.stopPropagation();
                e.preventDefault();
                openModalBox();
                return false
            });

            \$(document).on('click', '#form_save', function(e){
                e.stopPropagation();
                e.preventDefault();

                if (\$(conf.form).isValid({}, conf, true)) {
                    conf.onSuccess();
                } else {
                    conf.onError();
                }
                return false;
            });

        });
    }
    
    document.addEventListener(\"DOMContentLoaded\", yelp, false);



function openModalBox(obj){
    var regExp = /([0-9a-fA-F]{2}([:]|\$)){6}\$/ig;
    if (obj && obj.data && obj.data.length) {
        \$('#modalbox').find('.modal-header-name span').text( \"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "\" + \" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("video moderator"), "html", null, true);
        echo "\" );
        \$('#modalbox').find('.devoops-modal-inner').html( \$(\"#modal_moderators_inner\").tmpl(obj.data) );
        \$(\"select\", conf.form).each(function(){
            var objKey = \$(this).attr('id').replace('form_', '');
            if (obj.data[0][objKey]) {
                \$(this).val(obj.data[0][objKey]).trigger('change');
            }
        });

    } else {
        \$('#modalbox').find('.modal-header-name span').text( \"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add"), "html", null, true);
        echo "\" + \" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("video moderator"), "html", null, true);
        echo "\" );
        \$('#modalbox').find('.devoops-modal-inner').html( \$(\"#modal_moderators_inner\").tmpl() );
    }

    \$('#modalbox').find('.devoops-modal-bottom').html('\\n\\
                <div class=\"col-xs-12\">\\n\\
                    <input type=\"submit\" id=\"form_save\"  class=\"btn btn-success col-sm-2 pull-right\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "\" />\\n\\
                    <button type=\"reset\" id=\"form_reset\" class=\"btn btn-default col-sm-2 pull-right\" >";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                </div>');


    // set up validator for the form
    if (obj && obj.data && obj.data.length) {
        clearServerValidator();
        setEditValidationConfig(conf);
        \$(\"#form_mac\").removeAttr('data-validation-event');
        \$.validate(conf);
        setServerValidationRequestParams();
    } else {
        clearServerValidator();
        setDefaultValidationConfig(conf);
        \$(\"#form_mac\").removeAttr('data-validation-event');
        \$.validate(conf);
        setServerValidationRequestParams();
    }

    \$(\"#modalbox\").show();
}


function setServerValidationRequestParams() {
    var param = {
        'id': \$(\"#form_id\").val(),
        'for_validator': true,
    };
    \$('#form_mac').attr('data-validation-req-params', JSON.stringify(param) );
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
    
    \$(\"#form_mac\").off('change');
}

function setEditValidationConfig(conf) {
    conf.ignore = ['mac'];
    conf.validateOnBlur = false;
    conf.validateOnEvent = true;

    \$(\"#form_mac\").one('change', function (e) {
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
        return "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 178,  285 => 177,  274 => 171,  259 => 161,  221 => 128,  186 => 95,  180 => 93,  178 => 92,  168 => 85,  160 => 82,  145 => 70,  139 => 69,  130 => 65,  124 => 64,  117 => 60,  111 => 59,  95 => 48,  80 => 38,  75 => 36,  69 => 35,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_moderators_addresses/video_moderators_addresses.js.twig");
    }
}
