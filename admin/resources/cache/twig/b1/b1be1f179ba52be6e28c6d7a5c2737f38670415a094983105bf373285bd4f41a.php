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

/* default/NewVideoClub/video_advertise/video_advertise.js.twig */
class __TwigTemplate_a17afbe5d43ef2514ae4c5e77f99050d8c2041aefe5efea3fa9d6360717123b9 extends \Twig\Template
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
        echo "    var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'};

    var conf = {
        form: '#form_',
        lang : '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
        showHelpOnFocus : true,
        validateHiddenInputs: true,
        scrollToTopOnError: false,
        modules: 'jsconf',

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
                var id, title, status;
                for (var i in json.data) {
                    id = json.data[i].id;
                    title = json.data[i].title;
                    status = json.data[i].status;

                    if (isNaN(json.data[i].must_watch)) {
                        json.data[i].must_watch = \"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All"), "html", null, true);
        echo "\";
                    }

                    json.data[i]['title'] = '<a class=\"main_ajax no_context_menu\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-advertise-list-json\" data-id=\"'+ id +'\">'+title+'</a>';

                    json.data[i].must_watch = json.data[i].must_watch == 'all' ? \"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("All"), "html", null, true);
        echo "\" : json.data[i].must_watch;
                    //json.data[i]['status'] = status ? \"<span class='' data-filter='status'>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "</span>\" : \"<span class='' data-filter='status'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not published"), "html", null, true);
        echo "</span>\";
                    json.data[i].status = '\\
                       <div class=\"mswitch\">\\
                            <input type=\"checkbox\" \\
                                   id=\"ads_status_'+ json.data[i].id +'\"\\
                                   name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                   ' + ( json.data[i].status ? 'checked=\"checked\"' : '' ) +'\\
                                   data-adsid=\"' + json.data[i].id + '\"\\
                                   data-adsstatus=\"' + (1-json.data[i].status) +'\">\\
                            <label class=\"label-success\" \\
                                   title=\"' + ( json.data[i].status ? \"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched on"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Switched off"), "html", null, true);
        echo "\" ) + '\" \\
                                   for=\"ads_status_'+ json.data[i].id +'\"></label>\\
                        </div>\\
                        ';

                    json.data[i].operations = '<div class=\"col-xs-3 col-sm-8 ddd\">\\n\\
                                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">\\n\\
                                                            <i class=\"pull-right fa fa-cog\"></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class=\"dropdown-menu pull-right\">\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-advertise-list-json\" data-id=\"'+ id +'\">\\n\\
                                                                    <span>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-video-ads-status\" data-adsstatus=\"'+(status ? 0: 1)+'\" data-adsid=\"'+id+'\">\\n\\
                                                                    <span>'+(status ? \"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "\")+'</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class=\"main_ajax no_context_menu\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-video-ads\" data-adsid=\"'+id+'\">\\n\\
                                                                    <span>";
        // line 74
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
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/video-advertise-list-json\"
            },
            \"language\": {
                \"url\": \"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
            },
            \"paging\":   true,
            \"ordering\": true,
            \"scrollCollapse\": true,
            \"bFilter\": true,
            \"bPaginate\": true,
            \"lengthChange\": true,
            \"info\":     true,
            
            ";
        // line 99
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 100
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
            ";
        }
        // line 102
        echo "
            fixedHeader: {
                header: true,
                headerOffset: \$('header.navbar').height()
            },

            \"aoColumnDefs\": [ 
                { className: \"action-menu\", \"targets\": [ -1 ] },
                { \"targets\": [ -1 ], \"orderable\": false},
                { \"targets\": [ -1, -2, -3, -4, -5], \"searchable\": false}
            ]
        }).prev('.dataTables_processing').hide('');
    }

    function yelp() {
        \$(document).ready(function () {
            
            LoadDataTablesScripts(TestTable1);

            \$.validate(conf);

            \$(document).on('click', \"a.main_ajax\", function (e) {
                e.stopPropagation();
                e.preventDefault();
                var _this = \$(this);

                ajaxPostSend(\$(this).attr('href'), \$(this).data(), false, false);
                _this.closest('div.open').removeClass('open');
                return false;
            });

            \$(document).on('change', \".mswitch input\", function(e){
                ajaxPostSend('";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-video-ads-status', \$(this).data() );
            });


            \$(document).on('click', '#add_video_ads', function (e) {
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

    if (obj && obj.data && obj.data.length) {
        \$('#modalbox').find('.modal-header-name span').text( \"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "\" + \" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("advertising"), "html", null, true);
        echo "\" );
        \$('#modalbox').find('.devoops-modal-inner').html( \$(\"#modal_video_ads_inner\").tmpl(obj.data) );
        \$(\"select\", conf.form).each(function(){
            var objKey = \$(this).attr('id').replace('form_', '');
            if (obj.data[0][objKey]) {
                \$(this).val(obj.data[0][objKey]).trigger('change');
            }
        });

    } else {
        \$('#modalbox').find('.modal-header-name span').text( \"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add"), "html", null, true);
        echo "\" + \" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("advertising"), "html", null, true);
        echo "\" );
        \$('#modalbox').find('.devoops-modal-inner').html( \$(\"#modal_video_ads_inner\").tmpl() );
    }

    \$('#modalbox').find('.devoops-modal-bottom').html('\\n\\
                <div class=\"col-xs-12\">\\n\\
                    <input type=\"submit\" id=\"form_save\"  class=\"btn btn-success col-sm-2 pull-right\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "\" />\\n\\
                    <button type=\"reset\" id=\"form_reset\" class=\"btn btn-default col-sm-2 pull-right\" >";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                </div>');


    \$('#form_denied_categories').select2(select2Opt);

    \$('.form-group .i-hint').tooltip({
        animation: true,
        placement: \"left\"
    });

    var select = \$( \"#form_must_watch\" );
    var handle = \$( \"#slider-handle\" );

    var slider = \$( \"#slider\" ).slider({
      value: select[ 0 ].options.length - 1 - select[ 0 ].selectedIndex,
      min: 0,
      max: select[ 0 ].options.length - 1,

      create: function() {
        handle.text( select[ 0 ].options[ select[ 0 ].selectedIndex ].innerText );
      },
      slide: function( event, ui ) {
        var max = \$( \"#slider\" ).slider( \"option\", \"max\" );
        //\$( \"#amount\" ).val( ui.value );
        handle.text( select[ 0 ].options[ max - ui.value ].innerText );
        select[ 0 ].selectedIndex = max - ui.value;
      }
    });
    
    select.on( \"change\", function() {
        slider.slider( \"value\", select[ 0 ].options.length - 1 - this.selectedIndex );
        handle.text( select[ 0 ].options[ select[ 0 ].selectedIndex ].innerText );
    }).hide();
    
    
    \$(\"#modalbox\").addClass(\"modal-vc-ads\").show();
}";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/video_advertise/video_advertise.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 183,  293 => 182,  282 => 176,  267 => 166,  230 => 134,  196 => 102,  190 => 100,  188 => 99,  175 => 89,  167 => 86,  152 => 74,  146 => 73,  137 => 69,  131 => 68,  124 => 64,  118 => 63,  102 => 52,  87 => 42,  83 => 41,  76 => 39,  70 => 36,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/video_advertise/video_advertise.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/video_advertise/video_advertise.js.twig");
    }
}
