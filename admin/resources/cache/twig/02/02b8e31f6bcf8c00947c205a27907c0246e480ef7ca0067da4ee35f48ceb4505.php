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

/* default/NewVideoClub/add_video/add_video_step_1.js.twig */
class __TwigTemplate_ea0db9b7d252ce6e2983f54bcf4231be773e542b82657adaf7f4c5d5d4f85971 extends \Twig\Template
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
        checkCatGenreList('#form_category_id', '#form_cat_genre_id');
        \$('#form_category_id').select2(select2OptPH);
        \$('#form_cat_genre_id').select2(select2OptMS);
        \$('#form_is_series').select2(select2Opt);
}

function yelp_step_1() {
    // Add custom validation rule
    var customRuleObj = {
        name : 'compare_number',
        errorMessage : \"\",
        errorMessageKey: 'badCompareNumber'
    };

    customRuleObj.validatorFunction = function(value, el, config, language, form) {
        var compElem = \$(el).data('validation-compare-element');
        var compOperation = \$(el).data('validation-compare-operation') ? \$(el).data('validation-compare-operation') : \"<=\";
        var compRegExpStr = \$(el).data('validation-regexp');
        var compElemValidationOptional = \$(compElem).data('validation-optional') || false;

        if (compRegExpStr) {
            var compRegExp = new RegExp(compRegExpStr, 'ig');
            if (!compRegExp.test(\$(el).val())){
                this.errorMessage = language.badCustomVal;
                return false;
            }
        }

        if (compElem && !\$(compElem).is(\":disabled\")) {
            if (!\$(compElem).val() && compElemValidationOptional) {
                return true;
            }
            var val = parseFloat(\$(el).val());
            var compVal = parseFloat(\$(compElem).val());
            if ((compOperation == '<=' && !(val <= compVal)) || (compOperation == '>=' && !(val >= compVal))) {
                this.errorMessage = \"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("End date can not be less than the start date"), "html", null, true);
        echo "\";
                return false;
            }
        }

        return true;
    };

    \$.formUtils.addValidator(customRuleObj);

    \$.validate(conf);

    LoadSelect2Script(DemoSelect2);

    \$(document).on('change', '#form_category_id', function () {
        checkCatGenreList('#form_category_id', '#form_cat_genre_id');
        \$('#form_category_id, #form_cat_genre_id').validate(function(valid, elem) {
            if (valid) {
                conf.unhighlight(elem, 'error');
            } else {
                conf.highlight(elem, 'error');
            }
        });
    });

    \$(document).on('change', '#form_cat_genre_id', function () {
        \$(this).validate(function(valid, elem) {
            if (valid) {
                conf.unhighlight(elem, 'error');
            } else {
                conf.highlight(elem, 'error');
            }
        });
    });

    \$(document).on('blur focus', '#form_name, #form_year', function (e) {
        var _this = \$('#form_name');
        _this.next('div').removeClass('bg-danger').html('&nbsp;').hide();

        if (\$.trim(_this.val()) == '' && \$.trim(\$('#form_o_name').val()) == '') {
            \$('#form_kinopoisk_id').removeAttr('readonly');
        } else {
            \$('#form_kinopoisk_id').attr('readonly', 'readonly');
        }
        if (\$.trim(_this.val()) == '') {
            return;
        }

        ajaxPostSend('";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-name', {name: _this.val(), year: \$.trim(\$('#form_year').val()), 'id<>': \$(\"#form_id\").val()}, false, false);

    });

    if (\$.trim(\$('#form_o_name').val()) == '') {
        \$('#form_kinopoisk_id').removeAttr('readonly');
    } else {
        \$('#form_kinopoisk_id').attr('readonly', 'readonly');
    }

    \$(document).on('change keyup', '#form_o_name', function (e) {
        if (\$.trim(\$(this).val()) == '' && \$.trim(\$('#form_name').val()) == '') {
            \$('#form_kinopoisk_id').removeAttr('readonly');
        } else {
            \$('#form_kinopoisk_id').attr('readonly', 'readonly');
        }
        checkAutocompliteButton('#form_o_name', '#form_kinopoisk_id');
    });

    \$(document).on('change keyup', '#form_kinopoisk_id', function (e) {
        checkAutocompliteButton('#form_kinopoisk_id', '#form_o_name');
    });

    \$(document).on('change', '[id^=\"form_autocomplete_provider_\"]', function(e){

        var label = \$('label[for=\"form_autocomplete_provider\"]');

        label.text(\$(this).val() == 'tmdb' ? \"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("TMDB ID"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Kinopoisk ID"), "html", null, true);
        echo "\" );
        \$('i.i-hint', label.next()).attr('title', \$(this).val() == 'tmdb' ? \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("ID of movie on the TMDB"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("ID of movie on the Kinopoisk"), "html", null, true);
        echo "\" ).tooltip('fixTitle').tooltip('setContent');
    });

    \$(\"#autocomplete_button_container\").on('click', 'button', function (e) {
        e.stopPropagation();
        e.preventDefault();

        var sendData = {
            data: 0,
            provider: \$(\"[id^='form_autocomplete_provider']\").filter(':checked').val() || false,
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
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("First, select the search service"), "html", null, true);
        echo "\"});
        } else if (!sendData.data || sendData.data === '') {
            JSErrorModalBox({'msg': \"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("First enter the name or the movie id"), "html", null, true);
        echo "\"});
        } else {
            \$(\"#modalbox\").data('complete', 0);
            showModalBox();
            /*
            if (\$(\"#modalbox > div\").css('display') != 'none') {
                \$(\"#modalbox > div\").hide();
            }
            \$(\"#modalbox\").show();
            JSshowModalBox();
            */
            ajaxPostSend('";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-kinopoisk-info-by-' + searchBy, sendData, false, false, true);
        }
    });

    checkIsSeries();

    \$(document).on(\"change\", \"#form_is_series\", function () {
        checkIsSeries();
    });

    window.onunload = function(){
        if (\$(\"#modalbox\").is(':visible')) {
            return \"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Autocomplete request is running, please wait"), "html", null, true);
        echo "\";
        }
    };
    window.onbeforeunload = function(){
        if (\$(\"#modalbox\").is(':visible')) {
            return \"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Autocomplete request is running, please wait"), "html", null, true);
        echo "\";
        }
    };

    var currID = \$(\"#form_id\").val(), currOName = \$(\"#form_o_name\").val();
    if (!currID && currOName) {
        var addMovieData = localStorage.getItem('add_movie_data') || '[]';
        addMovieData = JSON.parse(addMovieData);
        for (var i in addMovieData){
            if (addMovieData[i] instanceof Object && addMovieData[i].o_name && addMovieData[i].o_name === currOName) {
                \$(\"#form_id\").val(addMovieData[i].id);
                break;
            }
        }
    }
}

var cat_genre_list = {
    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "preparedCatGenre", [], "array"));
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
        foreach ($context['_seq'] as $context["key"] => $context["g_item"]) {
            // line 188
            echo "    '";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "': [";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["g_item"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["g_in_item"]) {
                echo "{
        'id': '";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["g_in_item"], "id", [], "array"), "html", null, true);
                echo "',
        'title': '";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["g_in_item"], "title", [], "array"), "html", null, true);
                echo "'
    }";
                // line 191
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ", ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g_in_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "]";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo ", ";
            }
            // line 192
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['g_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "};

var category_list = {
    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "catGenres", [], "array"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g_item"]) {
            // line 197
            echo "    '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g_item"], "id", [], "array"), "html", null, true);
            echo "': '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g_item"], "category_alias", [], "array"), "html", null, true);
            echo "'";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo ", ";
            }
            // line 198
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "};

function checkCatGenreList(parent, child) {
    var selAlias = category_list[\$(parent).val()];
    var selChildData = \$(child).val();
    \$(child).empty();
    if (typeof(cat_genre_list[selAlias]) != 'undefined') {
        \$.each(cat_genre_list[selAlias], function (index, value) {
            \$(child).append('<option value=\"' + value.id + '\" ' + (\$.inArray(value.id, selChildData) != -1 ? 'selected=\"selected\"' : '') + '>' + value.title + '</option>');
        });
    }
    \$(child).select2(select2OptMS);
}

function checkAutocompliteButton(master, slave) {
    var buttonContainer = \$(slave).parent('div').next();
    if (\$.trim(\$(master).val()) != '') {
        buttonContainer.find('button').attr('disabled', 'disabled').removeClass('btn-success');
        buttonContainer.find('i').removeClass('txt-success').removeClass('fa-check').addClass('txt-danger').addClass('fa-ban');
    } else {
        buttonContainer.find('button').removeAttr('disabled').addClass('btn-success');
        buttonContainer.find('i').removeClass('txt-danger').removeClass('fa-ban').addClass('txt-success').addClass('fa-check');
    }
}

function checkIsSeries(){
    if (\$(\"#form_is_series\").val() === '1') {
        \$(\".uniseries\").removeClass('uniseries').addClass('serial');
        \$(\"#form_year\").addClass(\"add-video-year\");
        \$(\"#form_year_end\").removeAttr(\"disabled\");
    } else {
        \$(\".serial\").removeClass('serial').addClass('uniseries');
        \$(\"#form_year\").removeClass(\"add-video-year\");
        \$(\"#form_year_end\").attr(\"disabled\", \"disabled\");
    }
}";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video_step_1.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 199,  365 => 198,  356 => 197,  339 => 196,  334 => 193,  320 => 192,  300 => 191,  296 => 190,  292 => 189,  270 => 188,  253 => 187,  232 => 169,  224 => 164,  207 => 152,  193 => 141,  188 => 139,  157 => 113,  151 => 112,  119 => 85,  68 => 37,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video_step_1.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video_step_1.js.twig");
    }
}
