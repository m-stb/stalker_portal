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

/* default/AudioClub/audio_albums/audio_albums.js.twig */
class __TwigTemplate_391714cfacd5284d1218fe69b890ac56fd3ea4a13a9b266d5950879e52184801 extends \Twig\Template
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
                        var status = json.data[i].status;
                        var name = json.data[i].name;
                        var tracks = json.data[i].tracks_count;

                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a href='";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-audio-albums?id=\" + id + \"'>\\n\\
                                                                    <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-audio-albums' data-albumsid='\" + id + \"' data-albumsstatus='\" + status + \"'>\\n\\
                                                                    <span>\" + (status != 0 ? \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "\") + \"</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='remove-audio-albums no_context_menu'  data-albumsid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        
                        //json.data[i].status = status != 0 ? \"<span class=''>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "</span>\" : \"<span class=''>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "</span>\";
                        json.data[i].status = '\\
                           <div class=\"mswitch\">\\
                                <input type=\"checkbox\" \\
                                       id=\"album_status_'+ json.data[i].id +'\"\\
                                       name=\"form[status]\" readonly=\"readonly\" class=\"form-control\" \\
                                       ' + ( json.data[i].status != 0 ? 'checked=\"checked\"' : '' ) +'\\
                                       data-albumsid=\"' + json.data[i].id + '\"\\
                                       data-albumsstatus=\"' + json.data[i].status +'\">\\
                                <label class=\"label-success\" \\
                                       title=\"' + ( json.data[i].status != 0 ? \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "\" ) + '\" \\
                                       for=\"album_status_'+ json.data[i].id +'\"></label>\\
                            </div>';

                        json.data[i].name = '<a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-audio-albums?id=' + id + '\" >' + name + '</a>';
                        json.data[i].tracks_count = '<a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-audio-albums?id=' + id + '&step=2\" >' + tracks + '</a>';
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/audio-albums-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 61
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 62
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 64
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
                    {\"searchable\": false, \"targets\": [-1, -3, -2, 2]},
                    {\"sortable\": false, \"targets\": [-1, -3, 2]},
                    {\"className\": \"data-filter-status\", \"targets\": [-2]}
                ]
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {
                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = this;
                    var sendData = \$(_this).data();
                    if (\$(_this).attr(\"disabled\")) {
                        JSErrorModalBox({msg: \"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Action is not available"), "html", null, true);
        echo "! \" + (\$(_this).attr('warning_msg') ? \$(_this).attr('warning_msg') : '')});
                    } else {
                        ajaxPostSend(\$(_this).attr('href'), sendData, false );
                    }
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('click', \"a.remove-audio-albums\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = this;
                    if (\$(_this).attr(\"disabled\")) {
                        JSErrorModalBox({msg: \"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Action is not available"), "html", null, true);
        echo "! \" + (\$(_this).attr('warning_msg') ? \$(_this).attr('warning_msg') : '')});
                        return false;
                    }
                    JScloseModalBox();
                    \$('#modalbox').find('.modal-header-name span').addClass('txt-danger').text('";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Warning"), "html", null, true);
        echo "' + '!');
                    \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_del_body\").text());
                    \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_del_buttons\").text());

                    \$('#del_album_btn').data(\$(_this).data());

                    \$('#modalbox').show();
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('change', \".mswitch input\", function(e){
                    ajaxPostSend('";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-audio-albums', \$(this).data() );
                });

                // stop sending Form on Enter press:
                \$(document).on('keyup keypress', 'form input[type=\"text\"]', function(e) {
                    if(e.which == 13) {
                        e.preventDefault();
                        e.stopPropagation();
                        return false;
                    }
                });

                LoadDataTablesScripts(TestTable1);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        function closeModalBox() {
            \$(\"#modalbox\").hide();
            \$('#modalbox').find('.modal-header-name span').removeClass('txt-danger').empty();
            \$('#modalbox').find('.devoops-modal-inner').empty();
            \$('#modalbox').find('.devoops-modal-bottom').empty();
        }
";
    }

    public function getTemplateName()
    {
        return "default/AudioClub/audio_albums/audio_albums.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 120,  201 => 108,  194 => 104,  178 => 91,  149 => 64,  143 => 62,  141 => 61,  136 => 59,  128 => 56,  116 => 49,  110 => 48,  101 => 44,  86 => 34,  77 => 28,  67 => 23,  61 => 22,  54 => 18,  48 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/AudioClub/audio_albums/audio_albums.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/AudioClub/audio_albums/audio_albums.js.twig");
    }
}
