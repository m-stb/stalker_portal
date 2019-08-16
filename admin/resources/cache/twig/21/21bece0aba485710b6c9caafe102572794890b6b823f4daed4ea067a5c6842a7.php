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

/* default/NewVideoClub/add_video/add_video_step_2.js.twig */
class __TwigTemplate_2b0dba2f6dcdd6e439bda2408c25edb106de370517c4bc2868a268eda0386a34 extends \Twig\Template
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
        echo "function DemoSelect2() {
    \$('#form_rating_mpaa').select2(select2Opt);
    \$('#form_age').select2(select2Opt);
}

function yelp_step_2() {

    \$.validate(conf);

    LoadSelect2Script(DemoSelect2);

    \$(document).on('click', '#update_rating_kinopoisk', function () {
        var sendData = {
            data: \$(\"#form_kinopoisk_id\").val() || \$(\"#form_o_name\").val() || '',
            provider: \$(\"#form_autocomplete_provider\").val() || 0,
            type: (\$(\"#form_is_series\").val() === '1'?'tv':'movie')
        };

        \$.ajax({
            url: '";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/update-rating-kinopoisk',
            type: 'POST',
            data: sendData,
            success: function (data) {
                if (data.success) {
                    \$('#kinopoisk_url').attr('href', '');
                    \$('#kinopoisk_url').html('');
                    for (var id in data.result) {
                        if (data.result.hasOwnProperty(id)) {
                            \$(\"#form_\" + id).val(data.result[id]);

                            if (id == 'kinopoisk_url') {
                                \$('#kinopoisk_url').attr('href', data.result[id]);
                                \$('#kinopoisk_url').html(data.result[id]);
                            }
                        }
                    }
                } else if (data.error) {
                    alert(data.error);
                } else {
                    alert(\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Some server error"), "html", null, true);
        echo "\");
                }
            },
            error: function (data) {
                if (typeof(data.responseJSON) != 'undefined' && typeof(data.responseJSON.error) != 'undefined') {
                    alert(data.responseJSON.error);
                } else {
                    alert(\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Some network error or access denied"), "html", null, true);
        echo "\");
                }
            },
            dataType: \"json\",
            async: false
        });

    });

    \$(\"#autocomplete_button_container\").on('click', 'button', function (e) {
        e.stopPropagation();
        e.preventDefault();

        var sendData = {
            data: \$(\"#form_kinopoisk_id\").val() || \$(\"#form_o_name\").val() || '',
            provider: \$(\"#form_autocomplete_provider\").val() || 0,
            type: (\$(\"#form_is_series\").val() === '1'?'tv':'movie')
        };

        var searchBy;

        if ((\$('#form_o_name').val() && \$('#form_o_name').val() != \$('#form_o_name').data('oldvalue'))) {
            \$('#form_o_name').data('oldvalue', \$('#form_o_name').val());
            sendData.data = \$('#form_o_name').val();
            searchBy = 'name';
        } else {
            sendData.data = (\$('#form_kinopoisk_id').val() ? \$('#form_kinopoisk_id').val() : \$('#form_o_name').val());
            searchBy = (\$('#form_kinopoisk_id').val() ? 'id' : 'name');
        }

        if (!sendData.provider || sendData.provider === ''){
            JSErrorModalBox({'msg': \"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("First, select the search service"), "html", null, true);
        echo "\"});
        } else if (!sendData.data || sendData.data === '') {
            JSErrorModalBox({'msg': \"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("First enter the name or the movie id"), "html", null, true);
        echo "\"});
        } else {
            if (\$(\"#modalbox > div\").css('display') != 'none') {
                \$(\"#modalbox > div\").hide();
            }
            \$(\"#modalbox\").show();
            JSshowModalBox();
            ajaxPostSend('";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-kinopoisk-info-by-' + searchBy, sendData, false, false, true);
        }
    });

    fillFormData();

    var currID = \$(\"#form_id\").val(), currOName = \$(\"#form_o_name\").val();

    if (currID && currOName) {
        var addMovieData = localStorage.getItem('add_movie_data') || '[]', timer = new Date();
        addMovieData = JSON.parse(addMovieData);
        for (var i in addMovieData){
            if (addMovieData[i] instanceof Object && ((addMovieData[i].timestamp && (timer.getTime() - addMovieData[i].timestamp) > 1800000) || (addMovieData[i].o_name && addMovieData[i].o_name === currOName))){
                addMovieData.splice(i, 1);
            }
        }
        addMovieData.push({
            id: currID,
            o_name: currOName,
            timestamp: timer.getTime()
        });
        localStorage.setItem('add_movie_data', JSON.stringify(addMovieData));
    }
}";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video_step_2.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 87,  125 => 80,  120 => 78,  86 => 47,  76 => 40,  51 => 20,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video_step_2.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video_step_2.js.twig");
    }
}
