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

/* default/NewVideoClub/add_video/add_video.js.twig */
class __TwigTemplate_93deb10b75ddf495c154bd16702a476a2fed8259d6967419d8265ad017f01c9d extends \Twig\Template
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
        echo "/*
 this component has templates in .twig file
*/

var sendCounter = 0;

var pendingList = [];

var conf = {
    form: '#form_',
    lang : '";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
    showHelpOnFocus : true,
    validateHiddenInputs: true,
    validateOnBlur: true,
    ignore: ['.ignore'],
    modules: 'jsconf, date, security',
    errorClass: \"error\",
    onSuccess: function () {
        if (this.form == '#form_') {
            if (typeof (pendingList) != \"undefined\" && pendingList instanceof Array && pendingList.length != 0){
                if (!\$(\"#modalbox\").is(':visible')) {
                    \$('#modalbox').find('.modal-header-name span').text(\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Uploading progress"), "html", null, true);
        echo "\");
                    \$(\"#modalbox .devoops-modal-inner\").empty();
                    \$(\"#modalbox\").show();
                }
                pendingList.forEach(function (data) {
                    var name = '';
                    if (typeof(data.files) != \"undefined\" && data.files.length) {
                        name = \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Image"), "html", null, true);
        echo " \" + data.files[0].name;
                    }
                    var progress_id = 'qq-progress-bar-' + data.formData.file_num;
                    data.progress_id = progress_id;
                    \$(\"#modalbox .devoops-modal-inner\").append('\\n\\
                    <span class=\"col-sm-10 col-sm-offset-1\" style=\"text-align: center;\">'+name+'</span>\\n\\
                    <div class=\"qq-progress-bar-container-selector\">\\n\\
                        <div id=\"' + progress_id + '\" class=\"tu-progress-bar ui-progressbar ui-widget ui-widget-content ui-corner-all\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuenow=\"0\" style=\"width: 90%; margin-left: 5%;\">\\n\\
                            <div class=\"qq-progress-bar-selector ui-progressbar-value ui-widget-header ui-corner-left\" style=\"width: 0%;\"></div>\\n\\
                        </div>\\n\\
                    </div>');
                    data.submit();
                });
            }

            var submittedFileTimer = window.setInterval(function(){
                if ((typeof (pendingList) != \"undefined\" && pendingList instanceof Array && pendingList.length == 0) || (typeof (window.submitTry) != \"undefined\" && window.submitTry >= 300)){
                    window.clearInterval(submittedFileTimer);
                    if (typeof (window.submitTry) != \"undefined\" && window.submitTry >= 300) {
                        JSErrorModalBox({msg: \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("One or more images not be loaded"), "html", null, true);
        echo "\"});
                    }
                    \$('#form_').get(0).submit();
                } else {
                    window.submitTry = typeof (window.submitTry) != \"undefined\" ? window.submitTry++: 0;
                }
            }, 100);
        }
        return false;
    },
    onError: function () {
        var _this = this;
        \$(_this.form + \" select\").each(function(){
            if (\$(this).hasClass('error')) {
                _this.highlight(this, _this.errorClass);
            } else {
                _this.unhighlight(this, _this.errorClass);
            }
        });
        return false;
    },
    highlight: function (element, errorClass, validClass) {
        if (!\$(element).parent().children().find('.selection').children().hasClass(errorClass)) {
            \$(element).parent().children().find('.selection').children().addClass(errorClass);
        }
    },
    unhighlight: function (element, errorClass, validClass) {
        \$(element).parent().find('.select2-selection').removeClass(errorClass);
    }
};

var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%', allowDuplicates: true};
var select2OptMS = {maximumSelectionSize: 4, maximumSelectionLength: 4},
    select2OptPH = \$.extend({
                                placeholder: {
                                    id: \"-1\",
                                    text: \"\",
                                    selected: 'selected'
                                }
                            }, select2Opt);
\$.extend(select2OptMS, select2Opt);
select2OptMS.minimumResultsForSearch = 1;

var s2Opts, deferred_js_function = ['yelp_step_1', 'yelp_step_2', 'yelp_step_3', 'yelp_step_4'];

function yelp() {
    \$(document).ready(function () {

        \$('.form-group .i-hint').tooltip({
            animation: true,
            placement: \"right\"
        });

        \$(\"#form_save\").on('click', function (e) {
            e.stopPropagation();
            e.preventDefault();

            conf.form = '#form_';

            if (\$(conf.form).isValid({}, conf, true)) {
                ";
        // line 108
        if (($this->getAttribute(($context["app"] ?? null), "step", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "step", []) == "1"))) {
            // line 109
            echo "                var existData = localStorage.getItem('autocomlete_data') || '{}';
                existData = JSON.parse(existData);
                if (\$('#form_kinopoisk_id').length && \$('#form_kinopoisk_id').val() && typeof existData[\$('#form_kinopoisk_id').val()] !== 'undefined') {
                    existData[\$('#form_kinopoisk_id').val()].o_name = \$('#form_o_name').val();
                    existData[\$('#form_kinopoisk_id').val()].name = \$('#form_name').val();
                    localStorage.setItem('autocomlete_data', JSON.stringify(existData));
                }
                ";
        }
        // line 117
        echo "
                ";
        // line 118
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "videoEdit", [])) {
            // line 119
            echo "                var currID = \$(\"#form_id\").val(), currOName = \$(\"#form_o_name\").val();

                if (currID && currOName) {
                    var addMovieData = localStorage.getItem('add_movie_data') || '[]', timer = new Date();
                    addMovieData = JSON.parse(addMovieData);
                    for (var i in addMovieData){
                        if (addMovieData[i] instanceof Object && ((addMovieData[i].timestamp && (timer.getTime() - addMovieData[i].timestamp) > 1800000) || (addMovieData[i].id && addMovieData[i].id === currID))){
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
                ";
        }
        // line 137
        echo "                conf.onSuccess();
            } else {
                conf.onError();
            }
            return false;
        });

        \$(\"#form_reset\").on('click', function (e) {
            e.stopPropagation();
            e.preventDefault();
            \$.validate();
            \$(this).closest('form').get(0).reset();
            return false;
        });

        \$('i[data-toggle=\"tooltip\"]').tooltip();

        \$.each(deferred_js_function, function(key, func_name){
            if (\$.isFunction(window[func_name])) {
                window[func_name]();
            }
        });
    });
}

document.addEventListener(\"DOMContentLoaded\", yelp, false);

function fillFormData(obj) {
    var data = obj || {};
    var existData = localStorage.getItem('autocomlete_data') || '{}';
    existData = JSON.parse(existData);
    var timestamp = new Date();
    var localStorageData = {}
    \$(\"#modalbox\").data('complete', 1);

    if (typeof (data.result) !== 'undefined' && data.result instanceof Object && Object.keys(data.result).length > 0) {
        if (typeof (data.result.timestamp) === 'undefined' ) {
            localStorageData = { 'timestamp' : timestamp.getTime()};
        }

        if (data.result.hasOwnProperty('cover_big')) {
            \$('#cover_container').next('img').prop('src', \"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-image?url=\" + data.result['cover_big'] + '&v=' + \$.random(1000000));
        } else {
            \$('#cover_container').next('img').prop('src', '');
        }

        var compliteMSG = 0;

        \$.each([
            'kinopoisk_url',
            'rating_count_kinopoisk',
            'rating_imdb',
            'rating_count_imdb',
            'name',
            'censored',
            'o_name',
            'kinopoisk_id',
            'rating_kinopoisk',
            'year',
            'year_end',
            'time',
            'country',
            'director',
            'actors',
            'description',
            'comments',
            'rating_mpaa',
            'age',
            'cover_big',
            'timestamp'
        ], function (i) {
            var fieldValue = data.result.hasOwnProperty(this) ? data.result[this] : '', _this = this + '';
            var fieldObj = \$(\"#form_\" + _this);

            if (_this != 'kinopoisk_url' && fieldObj.length != 0 && fieldValue ) {
                if (!fieldObj.val() || _this == 'o_name' || _this == 'name' ) {
                    if (fieldObj.get(0).tagName.toLocaleUpperCase() == 'SELECT') {
                        fieldObj.find('option[value=\"' + fieldValue + '\"]').prop('selected', 'selected');
                        fieldObj.select2(select2Opt);
                    } else {
                        if (fieldObj.get(0).type && fieldObj.get(0).type.toLocaleUpperCase() == 'CHECKBOX') {
                            fieldObj.prop('checked', !!fieldValue);
                        } else {
                            fieldObj.val(fieldValue);
                        }
                    }
                    if (_this != 'o_name' && _this != 'name') {
                        compliteMSG +=1;
                    }
                    console.log(_this);
                }
            } else if (_this == 'kinopoisk_url' && fieldValue && !\$('#kinopoisk_url').attr('href')) {
                \$('#kinopoisk_url').attr('href', fieldValue);
                \$('#kinopoisk_url').html(fieldValue);
            }

            if (fieldValue) {
                localStorageData[_this] = fieldValue;
            }
        });

        if (data.result.hasOwnProperty('kinopoisk_id')) {
            existData[data.result.kinopoisk_id] = localStorageData;
            localStorage.setItem('autocomlete_data', JSON.stringify(existData));
        }

        if (!\$(\"#modalbox > div\").is(\":visible\")) {
            \$(\"#modalbox > div\").show(50);
        }

        console.log('compliteMSG = ' + compliteMSG);

        if (compliteMSG > 0) {
            JSSuccessModalBox({msg: \"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Autocomplete done"), "html", null, true);
        echo "\"})
        } else {
            JScloseModalBox()
        }
    } else {
        if (\$('#form_kinopoisk_id').length && \$('#form_kinopoisk_id').val() && typeof existData[\$('#form_kinopoisk_id').val()] !== 'undefined') {
            localStorageData = existData[\$('#form_kinopoisk_id').val()];
            if ((timestamp.getTime() - localStorageData.timestamp) <= 480000) {
                fillFormData({'result': localStorageData});
            } else {
                delete(existData[\$('#form_kinopoisk_id').val()]);
                localStorage.setItem('autocomlete_data', JSON.stringify(existData));
            }
        }
    }
}

var fillFormDataError = function(data){
    // \$(\"#modalbox\").data('complete', 1); // is set in JSErrorModalBox()
    JSErrorModalBox(data);
    \$(\"#modalbox\").hide();
}

function showModalBox() {
    \$('#modalbox').find('.modal-header-name span').text('";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wait"), "html", null, true);
        echo "...');
    \$('#modalbox').find('.devoops-modal-inner').html('<span style=\"margin: 10px 20px;\">";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Request is being processed"), "html", null, true);
        echo "...</span>');
    \$('#modalbox').find('.devoops-modal-bottom').empty();
    \$(\"#modalbox\").show();
}

var closeModalBox = function () {
    var dataTable = (\$(\"#season_id\").length != 0 && \$(\"#series_id\").length != 0) ? 'f_season_' + \$(\"#season_id\").val() + '_series_' + \$(\"#series_id\").val() + '_filedata' : \"filedata\";
    if (\$(\"#\" + dataTable).length != 0) {
        dataTableUpdate({datatable: dataTable});
    } else {
        JScloseModalBox();
    }
};

var errAction = function(data){
    if (\$.isFunction(window['setMediaInfoError'])) {
        setMediaInfoError({});
    }
    JSErrorModalBox(data);
};";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 275,  335 => 274,  308 => 250,  231 => 178,  188 => 137,  168 => 119,  166 => 118,  163 => 117,  153 => 109,  151 => 108,  88 => 48,  66 => 29,  56 => 22,  42 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video.js.twig");
    }
}
