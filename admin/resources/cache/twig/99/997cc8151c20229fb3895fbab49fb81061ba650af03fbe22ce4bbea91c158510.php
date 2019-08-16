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

/* default/NewVideoClub/add_video/add_video_step_4.js.twig */
class __TwigTemplate_5034372fc04497b073d2f3cef7fb43f1c1d2f2508220ba7c646fed553592057c extends \Twig\Template
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
function matchStart (term, text) {
    \$(\"#fileLangCloneList\").find('input').val(term);
    return text.toUpperCase().indexOf(term.toUpperCase()) != -1;
}

function changeLangBlockHeight(){
    \$('#file_languages').next().find('.select2-selection').css({minHeight: \$('#fileLangCloneList').height() + 'px'});
    /*
    if (\$(\"#fileLangCloneList\").height() >= \$('#file_languages').next().height()) {
        \$(\"#fileLangCloneList\").parent().css({paddingTop: \$(\"#fileLangCloneList\").height() - \$('#file_languages').next().height() + 'px'});
    } else {
        \$(\"#fileLangCloneList\").find('.select2-selection').css({minHeight: \$('#file_languages').next().height() + 'px'});
        \$(\"#fileLangCloneList\").parent().css({paddingTop: 0});
    }
    */
}

function setFileLanguagesSelect(){
    var file_languages  = \$('#file_languages').select2(s2Opts);

    if (\$('#fileLangCloneList').length) {
        \$('#fileLangCloneList').remove();
    }
    file_languages.parent().css({position: 'relative'});
    var fileLangList = file_languages.next();
    var cloneList = fileLangList.clone(true, true);
    cloneList.insertAfter(fileLangList);

    cloneList.attr('id', 'fileLangCloneList').css({width: '314px', top: 0, left: 10, position: 'absolute'});
    /*file_languages.next().css({visibility: 'hidden'});*/
    cloneList.find('input').css({minWidth: '10px'});


    cloneList.on('select2:selecting', function(e){
        e.stopPropagation();
        e.preventDefault();
       return false;
    });
    cloneList.on('select2:opening', function(e){
        e.stopPropagation();
        e.preventDefault();
        return false;
    });

    fileLangList.find('li, li *').on('input keyup change', function(){
        var oInput = fileLangList.find('input');
        var inputWidth = cloneList.find('input').outerWidth();
        var calcWidth = oInput.val().length * 10;
        if (inputWidth < calcWidth) {
            inputWidth = calcWidth;
        }
        cloneList.find('input').css('width', inputWidth).val(oInput.val());
    });

    function getInputWidth(){
        var containerWidth = cloneList.find('ul').innerWidth();
        var rowWidth = 0;
        cloneList.find('ul').children().each(function(){
            if (!\$(this).hasClass('select2-search--inline')) {
                var oWidth = \$(this).outerWidth() + 10;
                rowWidth += oWidth;
                if (rowWidth >= containerWidth) {
                    rowWidth = oWidth;
                }
            }
        });
        var inputWith = containerWidth - rowWidth - 20;
        return inputWith < 20 ?  'auto': inputWith;
    }

    file_languages.on('select2:selecting', function(e){
        var lastTimestamp = \$(\"#fileLangCloneList\").data('last-timestamp');
        var lastGuid = \$(\"#fileLangCloneList\").data('last-guid');
        if (lastTimestamp != e.timeStamp){
            var liTmpl = \$('<li class=\"select2-selection__choice\" title=\"\"><span role=\"presentation\" class=\"select2-selection__choice__remove\">×</span></li>').insertBefore(\$(\"#fileLangCloneList\").find('li.select2-search'));
            var val = \$(this).data().select2.results.getHighlightedResults().attr('id').split('-').slice(-1)[0];
            var textLabel = \$(this).data().select2.results.getHighlightedResults().text();
            liTmpl.attr('title', textLabel);
            liTmpl.find('span').after(textLabel);
            liTmpl.data('val', val);
        }
        \$(\"#fileLangCloneList\").data('last-timestamp', e.timeStamp);
        \$(\"#fileLangCloneList\").data('last-guid', e.handleObj.guid);
    });

    file_languages.on('select2:select', function(e){
        changeLangBlockHeight();
        fileLangList.find('input').val('');
        cloneList.find('input').css({width: getInputWidth()}).val('');
    });

    \$(\"#file_languages, #fileLangCloneList\").on('select2:closing', function(e){
        conf.form = '#' + \$(\"#modalbox form\").attr('id');
                // how to validate just 1 field:
                var isValid;
                \$(this).validate(function(valid, elem){isValid=valid;}, {form: \"#modalbox form\"});

                //if (!isValid) {
                    conf.onError();
                //}
        /*if (\$(conf.form).isValid({}, conf, true)) {
            getMediaInfo();
        } else {
            conf.onError();
        }*/
        fileLangList.find('input').val('');
        cloneList.find('input').css({width: getInputWidth()}).val('');
        changeLangBlockHeight();
    });

    \$(\"#fileLangCloneList ul\").on('mouseup mousedown select2:selecting select2:opening keyup keydown input', 'li, li *', function(e){
        e.stopPropagation();
        e.preventDefault();
        return false;
    });

    \$(\"#fileLangCloneList\").on('click', 'li.select2-selection__choice', function(e){
        e.stopPropagation();
        e.preventDefault();
        var curVal = \$(this).data('val');
        \$(this).remove();
        var langData = [];
        \$(\"#fileLangCloneList li\").each(function(i){
            langData.push(\$(this).data('val'));
        });
        \$('#file_languages').val(langData).trigger('change.select2');
        changeLangBlockHeight();
        \$('#file_languages').data().select2.trigger('close');
        return false;
    });

}

function yelp_step_4() {

        \$.fn.select2.amd.require([
            \"select2/core\",
            \"select2/utils\",
            \"select2/compat/matcher\"
        ], function (Select2, Utils, oldMatcher) {
            s2Opts = \$.extend({}, select2OptMS, {matcher: oldMatcher(matchStart)});
        });

        conf.form = \"#file_form\";
        //\$.validate(conf);

        LoadSelect2Script();

        \$(\"#files_container\").on('click', '.box-header input, .box-header button, .mod_input i', function (e) {
            e.stopPropagation();
            e.preventDefault();
        });

        \$(\"#files_container\").on('change', 'input[name=\"season_original_name\"], input[name=\"season_name\"], input[name=\"series_original_name\"], input[name=\"series_name\"]', function(e){
            if ((e.type == 'change' || e.type == 'blur' || e.type == 'focusout' || (e.type == 'keydown' && e.keyCode == 13)) && !\$(this).data('is_sended')){
                e.stopPropagation();
                e.preventDefault();
                var params = {
                    id: \$(this).closest(\"div[id*='season']\").attr('id'),
                    field: \$(this).attr('name'),
                    value: \$(this).val(),
                    event: e.type
                };

                ajaxPostSend('";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-season-series-names', params, false, false);
                //\$(this).data('is_sended', 1);
                return;
            }
            /*
            if (\$(this).data('is_sended') && e.type && e.type != 'keydown') {
                \$(this).removeData('is_sended');
            }
            */
        });

        \$(\"#files_container\").on('click', 'button[data-add-files]', function (e) {
            \$(\"#modalbox\").hide();
            \$(\"#modalbox\").data('complete', 1);
            \$('#modalbox').find('.modal-header-name span').text(\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add file"), "html", null, true);
        echo "\");
            \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_save_form_body\").text());
            \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_save_form_buttons\").text());

            \$(\"#file_id\").remove();
            \$(\"#file_name\").remove();
            \$(\"#video_id\").val(\$(\"#files_container\").data('video_id'));

            var seasonContainer = \$(this).closest('div[id^=\"season_\"]');
            if (seasonContainer.length) {
                \$(\"#season_id\").val(seasonContainer.data('seasonid'));
            } else {
                \$(\"#season_id\").remove();
            }

            var seriesContainer = \$(this).closest('div[id^=\"s_season_\"]');
            if (seriesContainer.length) {
                \$(\"#series_id\").val(seriesContainer.data('seriesid'));
            } else {
                \$(\"#series_id\").remove();
            }

            \$(\"#file_protocol\").prop({
                'readonly': 'readonly',
                'disabled': 'disabled'
            }).find('option[value=\"custom\"]').prop({'selected': 'selected'});

            \$('#file_type').select2(select2Opt);
            \$('#file_quality').select2(select2Opt);
            setFileLanguagesSelect();
            \$('#file_volume_level option[value=\"0\"]').prop('selected', true);
            \$('#file_volume_level').select2(select2Opt);
            \$('#file_protocol').select2(select2Opt);
            \$('#file_accessed').select2(select2Opt);
            \$('#file_tmp_link_type').select2(select2OptPH);

            if (\$(this).data('old-url')) {
                \$(\"#video_url\").val(\$(this).data('old-url')).after('<input type=\"hidden\" class=\"own_fields\" name=\"clean_old_url\" value=\"1\">');
                getMediaInfo();
            }

            conf.form = \"#file_form\";
            conf.scrollToTopOnError = false;
            \$.validate(conf);
            \$('#modalbox').show();

            if (!\$(this).closest('a.collapse-link').next('.box-content').is(':visible')) {
                \$(this).closest('a.collapse-link').trigger('click');
            }
        });

        \$(\"#files_container\").on('click', 'button[data-add-series]', function (e) {
            var container = \$(this).closest('div[id^=\"season_\"]');
            if (container.length) {
                var sendData = {
                    season_id: container.data('seasonid'),
                    series_number: container.find(\"span[data-series-count]\").data(\"series-count\")
                };
                ajaxPostSend(\"";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-video-season-series\", sendData, false);
            }
        });

        \$(\"#files_container\").on('click', 'button[data-delete-season]', function (e) {
            var seasonNum= \$(this).closest('.box-header').find(\"[data-season-number]\").text();
            if ( confirm('\"' + seasonNum + '\" ' + '";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("will be deleted from server"), "html", null, true);
        echo "') ) {
                var container = \$(this).closest('div[id^=\"season_\"]');
                if (container.length) {
                    var sendData = {
                        season_id: container.data('seasonid')
                    };
                    ajaxPostSend(\"";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/delete-video-season\", sendData, false, false);
                }
            }
        });

        \$(\"#files_container\").on('click', 'button[data-delete-episode]', function (e) {
            var seriesNum= \$(this).closest('.box-header').find(\"[data-series-number]\").text();
            var seasonContainer = \$(this).closest('div[id^=\"season_\"]');
            if ( confirm(\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " \\\"\" +seriesNum+ \"\\\"?\" ) ) {
                var sendData = {};
                var container = \$(this).closest('div[id^=\"s_season_\"]');
                if (container.length) {
                    var sendData = {
                        series_id: container.data('seriesid'),
                        season_id: seasonContainer.data('seasonid') || ''
                    };
                    ajaxPostSend(\"";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/delete-video-season-series\", sendData, false, false);
                }
            }
        });

        /*
        \$(\"#files_container\").on('click', \"a.collapse-link\", function(e){
            if (\$(this).parent('div[id^=\"s_season_\"]').length == 0 && \$(this).next('div.box-content').is(':visible')) {
                \$(this).next('div').find('.box-content:visible').prev('a.collapse-link').trigger('click');
            }
        });
        */

        \$(\"#season_button_container\").on('click', '#add_season', function (e) {
            e.stopPropagation();
            e.preventDefault();

            var seasonNumbers = new Array(), j;//.find(\"span[data-season-number]\").data(\"season-number\");

            \$(\"#files_container\").find('div[id^=\"season_\"]').each(function(){
                seasonNumbers.push(parseInt(\$(this).find(\"span[data-season-number]\").data(\"season-number\"), 10));
                if (\$(this).children('.box-content').is(':visible')){
                    \$(this).children('a.collapse-link').trigger('click');
                }
            });

            var sendData = {
                video_id: \$(\"#files_container\").data('video_id'),
                season_number: seasonNumbers[seasonNumbers.length - 1] + 1
            };

            for(var i in seasonNumbers){
                j = parseInt(i, 10) +1;
                if (typeof(seasonNumbers[j]) != 'undefined' && seasonNumbers[i] + 1 != seasonNumbers[j]) {
                    sendData.season_number = seasonNumbers[i] + 1;
                    break;
                }
            }

            ajaxPostSend(\"";
        // line 305
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/add-video-season\", sendData, false);
        });

        \$(\"#season_button_container\").on('click', '#add_season_structure', function (e) {
            e.stopPropagation();
            e.preventDefault();
            \$(\"#modalbox .modal-header-name span\").empty().text(\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add seasons and episodes"), "html", null, true);
        echo "\");
            \$(\"#modalbox .devoops-modal-inner\").empty();
            \$(\$(\"#season_counter_template\").html()).appendTo(\"#modalbox .devoops-modal-inner\");

            \$(\"#modalbox .devoops-modal-bottom\").empty().append(\$(\"#modal_save_form_buttons\").html());

            \$('#season_counter').select2(select2Opt);
            \$('<hr>').insertAfter(\$(\"#season_counter\").closest('.form-group'));
            \$(\"#season_counter\").closest('.form-group').next('hr').css({minWidth: \"100%\", clear: \"both\", marginTop: \"40px\", marginBottom: \"40px\"});

            var selectBox = \$(\$(\"#series_counter_template\").html()).insertAfter(\$(\"#season_counter\").closest('.form-group').next('hr'));
            selectBox.find('select').attr({name: 'season_structure[1]', id: 'series_counter_0'});
            selectBox.find('label').text(selectBox.find('label').text() + 1);
            \$('#series_counter_0').select2(select2Opt);

            \$(\"#modalbox\").data('complete', 1).show();
        });

        \$(\"#modalbox\").on('change', \"#season_counter\", function(){
            if (\$(\"#season_counter\").closest('.form-group').next('hr').length == 0) {
                \$('<hr>').insertAfter(\$(\"#season_counter\").closest('.form-group'));
                \$(\"#season_counter\").closest('.form-group').next('hr').css({minWidth: \"100%\", clear: \"both\", marginTop: \"65px\"});
            }

            var currCount = parseInt(\$(this).val(), 10);
            var selectBoxes = \$(\"#modalbox select[id^='series_counter_']\");
            var selectBox;

            while(selectBoxes.length != currCount) {
                if (selectBoxes.length > currCount) {
                    \$(selectBoxes.get(selectBoxes.length - 1)).closest('.form-group').remove();
                } else {
                    if (selectBoxes.length == 0) {
                        selectBox = \$(\$(\"#series_counter_template\").html()).insertAfter(\$(\"#season_counter\").closest('.form-group').next('hr'));
                    } else {
                        selectBox = \$(\$(\"#series_counter_template\").html()).insertAfter(selectBoxes.get(selectBoxes.length - 1).closest('.form-group'));
                    }
                    selectBox.find('select').attr({name: 'season_structure[' + (selectBoxes.length + 1) + ']', id: 'series_counter_' + selectBoxes.length});
                    selectBox.find('label').text(selectBox.find('label').text() + (selectBoxes.length + 1));
                    \$('#series_counter_' + selectBoxes.length).select2(select2Opt);
                }
                selectBoxes = \$(\"#modalbox select[id^='series_counter_']\");
            }

        });

        \$(\"#modalbox\").on(\"click\", \"button[type='submit']\", function (e) {
            e.stopPropagation();
            e.preventDefault();

            conf.form = '#' + \$(\"#modalbox form\").attr('id');

            checkProtocol();
            checkFileType();

            if (\$(conf.form).isValid({}, conf, true)) {
                conf.onSuccess();
            } else {
                conf.onError();
                return false;
            }

            var sendData = {};
            \$(\"#modalbox form\").find(\"input.own_fields, select.own_fields\").filter(':not(:disabled)[id!=\"file_languages\"]').each(function () {
                var _this = \$(this);
                sendData[_this.attr('name')] = _this.val();
            });

            if (\$(\"#modalbox form #file_languages\").length) {
                sendData['languages'] = [];
                \$('#fileLangCloneList li').each(function () {
                    sendData['languages'].push(\$(this).data('val'));
                });
            }

            ajaxPostSend(\$(\"#modalbox form\").attr('action'), sendData, false);
            JScloseModalBox();
        });

        \$(\"#modalbox\").on(\"click\", \"button[type='reset']\", function (e) {
            e.stopPropagation();
            e.preventDefault();

            var dataTable = (\$(\"#season_id\").length != 0 && \$(\"#series_id\").length != 0) ? 'f_season_' + \$(\"#season_id\").val() + '_series_' + \$(\"#series_id\").val() + '_filedata' : \"filedata\";
            if (\$(\"#\" + dataTable).length != 0) {
                dataTableUpdate({datatable: dataTable});
            }

            //\$.validate();
            \$(\"#modalbox form\").get(0).reset();
            /*\$(\"#modalbox form\").find(\"select.own_fields\").each(function () {
                \$(this).select2({minimumResultsForSearch: -1});
            });*/
            JScloseModalBox();
        });

        \$(\"#files_container\").on('click', 'a.main_ajax:not([disabled])', function (e) {
            e.stopPropagation();
            e.preventDefault();
            \$(this).closest(\"div.open\").removeClass('open');

            if( \$(this).attr(\"href\").indexOf(\"remove-video-data\") != -1 && !confirm(\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete this file?"), "html", null, true);
        echo "\") ) {
                return;
            }

            var sendData = \$(this).data();
            if (\$(this).closest('tr').length && \$(this).closest('tr').attr('id')) {
                sendData['RowOrder'] = \$(this).closest('tr').attr('id');
            }
            ajaxPostSend(\$(this).attr('href'), sendData, false, false);
        });

        \$(\"table[id*='filedata']\").on(\"click\", \"a[href*='remove-video']\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            JScloseModalBox();
            \$('#modalbox').find('.modal-header-name span').text(\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete file"), "html", null, true);
        echo "\");
            var id = \$(this).data('id');
            if (id) {
                \$('#modalbox').find('.devoops-modal-inner').html(\"\\n\\
                <form class='form-horizontal' role='form' action=''>\\n\\
                    <input type='hidden' class='own_fields form-control' name='id' value='' readonly='readonly'>\\n\\
                    <span class='col-xs-12 col-sm-12'>\\n\\
                        <span class='text-danger text-center'>\\n\\
                        ";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Do you really wont delete this record?"), "html", null, true);
        echo "\\n\\
                        </span>\\n\\
                    </span>\\n\\
                </form>\\n\\
                \");
                \$('#modalbox').find('.devoops-modal-inner form').attr('action', \$(this).attr('href'));
                \$('#modalbox').find('.devoops-modal-inner form input').val(\$(this).data('id'));
                \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_save_form_buttons\").text());
            } else {
                JSErrorModalBox({msg: \"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("This record cannot be deleted"), "html", null, true);
        echo "\"});
            }
        });

        \$(\"#modalbox\").on('change', '#file_protocol', function (e) {
            checkProtocol();
        });

        \$(\"#modalbox\").on('change', '#file_type', function (e) {
            checkFileType();
        });

        checkVideoType();

        \$(\"#season_button_container\").on(\"click\", \"#update_season\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            checkVideoType();
        });

        \$(document).on(\"show\", \"div[id^='s_season_'] .box-content\", function(e){
            /*var boxContent = \$(this).closest('.box').children('.box-content');*/
            if (e && e.type && e.type == \"show\") {
                \$.queue(this, \"fx\", function() {
                    var dataId = \$(this).closest('.box').data();
                    if (!\$(\"#\" + dataId['table-id']).children('tbody').children('tr').length) {
                        fillFilesData(dataId['self-id'], dataId['table-id']);
                    }
                    /*\$(this).find('table').DataTable().draw();*/
                    \$.dequeue( this );
                });
                /*\$(this).find('table').DataTable().ajax.reload();*/
            }
        });

        \$('.mod_input').on('click', 'i.fa-pencil', function(e){
            \$(this).prev('input').focus();
        });

        \$(\"#files_container\").on('blur', 'input', function(e){
            \$(this).selectRange(0);
        });

        \$(\"#modalbox\").on('change keypress', '#video_url', function(e){
            if (e && e.type && (e.type == \"change\" || (e.type == \"keypress\" && e.keyCode && e.keyCode == 13))) {

                // how to validate just 1 field:
                var isValid;
                \$(this).validate(function(valid, elem){isValid=valid;}, {form: \"#modalbox form\"});

                if (isValid) {
                    getMediaInfo();
                }

            }
        });

        \$(\"#modalbox\").on('click', '#media_info button', function(e){
            e.stopPropagation();
            e.preventDefault();

            var fieldData = {};

            \$(\"#media_info span\").each(function(){
                if (\$(this).data('info-key')) {
                    fieldData[\$(this).data('info-key')] = \$(this).data('info-val');
                }
            });

            if (fieldData.languages) {
                fieldData.languages = fieldData.languages.split(',');
            }

            fillModalBoxFilesData({data: fieldData}, true);
        });
}

function checkProtocol() {
    var protocol = \$(\"#file_protocol\").val();
    \$('#video_url, #file_tmp_link_type').each(function(){
        if (protocol != 'custom') {
            \$(this).attr('disabled', 'disabled').closest('.form-group').hide();
            if (conf.ignore.indexOf(\$(this).attr('name')) == -1) {
                conf.ignore.push(\$(this).attr('name'));
            }
        } else {
            \$(this).removeAttr('disabled').closest('.form-group').show();
            if (conf.ignore.indexOf(\$(this).attr('name')) !== -1) {
                conf.ignore.splice(conf.ignore.indexOf(\$(this).attr('name')), 1);
            }
        }
    });
}

function checkFileType() {
    var fileType = \$(\"#file_type\");
    if (fileType.val() == 'sub') {
        \$(\"#file_quality, #file_volume_level\").prop('disabled', 'disabled').closest('.form-group').hide();
        \$(\"#media_info\").remove();
        \$(\"#file_form_input_container\").addClass('col-sm-offset-2').find('input,select').removeAttr('readonly').removeAttr('disabled');
        \$(\"#modalbox div.devoops-modal-bottom\").find('button').removeClass('disabled').removeAttr('disabled');
    } else {
        \$(\"#file_quality, #file_volume_level\").removeAttr('disabled').closest('.form-group').show();
    }
}

function checkVideoType(data) {
    \$(\"#add_season_structure\").hide();
    \$(\"#add_season\").hide();
    if (\$(\"#form_is_series\").val() == 1) {
        if (data) {
            if (typeof (data.msg) != 'undefined') {
                JSSuccessModalBox(data);
            } else if (data.error) {
                JSErrorModalBox(data);
            }
        }
        ajaxPostSend(\"";
        // line 561
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-video-season-list-json\", \$(\"#files_container\").data(), false);
    } else {
        ajaxPostSend(\"";
        // line 563
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-video-files-list-json\", \$(\"#files_container\").data(), false);
    }
}

function setUniserial(data) {
    \$(\"#files_container\").removeClass().addClass('box').empty();
    \$(\".serial\").removeClass('serial').addClass('uniseries');
    \$(\"#form_year\").removeClass(\"add-video-year\");
    \$(\"#form_year_end\").attr(\"disabled\", \"disabled\");
    \$(\"#season_button_container\").hide();
    if (typeof (data.data) == 'object') {
        \$(\"#files_container\").append(\$(\"#files_box_header\").html());
        \$(\"#files_container\").append(\$(\"#files_box_content\").html());
        fillFilesData('#files_container', 'filedata');
    }
}

function setUniserialError(obj){
    JSErrorModalBox(obj);
}

var setSerial = function (data) {
    \$(\"#files_container\").removeClass();
    if (\$(\"#filedata\").length) {
        \$(\"#files_container\").empty();
    }
    \$(\".uniseries\").removeClass('uniseries').addClass('serial');
    \$(\"#form_year\").addClass(\"add-video-year\");
    \$(\"#form_year_end\").removeAttr(\"disabled\");
    \$(\"#season_button_container\").show();

    if (data.data.length == 0) {
        \$(\"#add_season_structure\").show();
    } else {
        \$(\"#add_season\").show();
    }
    var targetNeighbor = {};
    var existsSeasonBoxCount = \$(\"div[id^='season_']\").filter(\":not(div[id='season_button_container'])\").length;
    var existsSeasonBoxIDs = [];
    \$(\"div[id^='season_']\").filter(\":not(div[id='season_button_container'])\").each(function(){
        existsSeasonBoxIDs.push(\"#\" + \$(this).attr('id'));
    });

    var gettingSeasonBoxCount = Object.keys ? Object.keys(data.data).length: -1;
    for (var i in data.data) {
        if (existsSeasonBoxIDs.indexOf(\"#season_\" + data.data[i].season_id) != -1) {
            existsSeasonBoxIDs.splice(existsSeasonBoxIDs.indexOf(\"#season_\" + data.data[i].season_id), 1);
        }
        var seasonBox = \$(\"#season_\" + data.data[i].season_id);
        if (seasonBox.length == 0) {
            targetNeighbor.action = 'undefined';
            targetNeighbor.key = 0;
            var neighbors = \$(\"div[id^='season_']:has(div[id^='s_season_'])\");
            var season_number = parseInt(data.data[i].season_number, 10);
            \$.each(neighbors, function(i) {
                var currNumberS, nextNumberS;
                targetNeighbor.key = i;
                targetNeighbor.action = 'insertAfter';
                currNumberS = parseInt(\$(this).find(\"span[data-season-number]\").data('season-number'), 10);
                if ( typeof(neighbors[i+1]) != \"undefined\") {
                    nextNumberS = parseInt(\$(neighbors[i+1]).find(\"span[data-season-number]\").data('season-number'), 10);
                } else {
                    nextNumberS = false;
                }

                if (season_number < currNumberS) {
                    targetNeighbor.action = 'insertBefore';
                    return false;
                } else if (currNumberS < season_number && nextNumberS !== false && season_number < nextNumberS ) {
                    return false;
                }
            });

            if ( typeof (neighbors[targetNeighbor.key]) != 'undefined' && targetNeighbor.action != 'undefined') {
                seasonBox = \$('<div class=\"box\" id=\"season_' + data.data[i].season_id + '\"></div>')[targetNeighbor.action](neighbors[targetNeighbor.key]);
            } else if (\$(\"#other_files\").length == 0) {
                seasonBox = \$('<div class=\"box\" id=\"season_' + data.data[i].season_id + '\"></div>').appendTo(\"#files_container\");
            } else {
                seasonBox = \$('<div class=\"box\" id=\"season_' + data.data[i].season_id + '\"></div>').insertBefore(\"#other_files\");
            }
            seasonBox.data('seasonid', data.data[i].season_id);
            seasonBox.append(\$(\"#season_box_header\").html());

            seasonBox.find(\"span[data-season-number]\").data(\"season-number\", (typeof(data.data[i].season_number) != 'undefined' ? data.data[i].season_number : 1))
                    .html(\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Season"), "html", null, true);
        echo " \" + (typeof(data.data[i].season_number) != 'undefined' ? data.data[i].season_number : 1));
            seasonBox.find(\"input[name='season_name']\").val((typeof(data.data[i].season_name) != 'undefined' ? data.data[i].season_name : ''));
            seasonBox.find(\"input[name='season_original_name']\").val((typeof(data.data[i].season_original_name) != 'undefined' ? data.data[i].season_original_name : ''));
            seasonBox.append(\$('<div class=\"box-content\">\\n\\
                                    <div class=\"row\">\\n\\
                                        <div class=\"col-sm-11 col-xs-11 col-sm-offset-1 col-xs-offset-1 no-padding-left\">\\n\\
                                        </div>\\n\\
                                    </div>\\n\\
                               </div>'));
            if (existsSeasonBoxCount != gettingSeasonBoxCount) {
                seasonBox.find('.box-content').hide();
            }
        } else {
            seasonBox.find(\"span[data-season-number]\").data(\"season-number\", (typeof(data.data[i].season_number) != 'undefined' ? data.data[i].season_number : 1))
                    .html(\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Season"), "html", null, true);
        echo " \" + (typeof(data.data[i].season_number) != 'undefined' ? data.data[i].season_number : 1));
            seasonBox.find(\"input[name='season_name']\").val((typeof(data.data[i].season_name) != 'undefined' ? data.data[i].season_name : ''));
            seasonBox.find(\"input[name='season_original_name']\").val((typeof(data.data[i].season_original_name) != 'undefined' ? data.data[i].season_original_name : ''));
        }

        seasonBox.find(\"span[data-series-count]\").data(\"series-count\", (typeof(data.data[i].series_count) != 'undefined' ? data.data[i].series_count : 0))
                .html(\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episodes"), "html", null, true);
        echo " \" + (typeof(data.data[i].series_count) != 'undefined' ? data.data[i].series_count : 0));

        targetNeighbor = {action : 'undefined', key: 0};
        var existsSeasonSeriesBoxIDs = [];
        \$('div[id^=\"s_season_' + data.data[i].season_id + '_series_\"]').each(function(){
            existsSeasonSeriesBoxIDs.push(\"#\" + \$(this).attr('id'));
        });
        for (var j in data.data[i].season_series) {
            var series_id = typeof(data.data[i].season_series[j].series_id) != 'undefined' ? data.data[i].season_series[j].series_id : '';
            if (existsSeasonSeriesBoxIDs.indexOf('#s_season_' + data.data[i].season_id + '_series_' + series_id) != -1) {
                existsSeasonSeriesBoxIDs.splice(existsSeasonSeriesBoxIDs.indexOf('#s_season_' + data.data[i].season_id + '_series_' + series_id), 1);
            }

            if (!series_id) {
                continue;
            }

            var seriesBox = \$('#s_season_' + data.data[i].season_id + '_series_' + series_id);

            if (seriesBox.length == 0) {
                targetNeighbor.action = 'undefined';
                targetNeighbor.key = 0;
                var neighborsS = seasonBox.find(\"div[id^='s_season_']\");
                var series_number = parseInt(data.data[i].season_series[j].series_number, 10);
                \$.each(neighborsS, function(i) {
                    var currNumberS, nextNumberS;
                    targetNeighbor.key = i;
                    targetNeighbor.action = 'insertAfter';
                    currNumberS = parseInt(\$(this).find(\"span[data-series-number]\").data('series-number'), 10);
                    if ( typeof(neighborsS[i+1]) != \"undefined\") {
                        nextNumberS = parseInt(\$(neighborsS[i+1]).find(\"span[data-series-number]\").data('series-number'), 10);
                    } else {
                        nextNumberS = false;
                    }

                    if (series_number < currNumberS) {
                        targetNeighbor.action = 'insertBefore';
                        return false;
                    } else if (currNumberS < series_number && nextNumberS !== false && series_number < nextNumberS ) {
                        return false;
                    }
                });

                if ( typeof (neighborsS[targetNeighbor.key]) != 'undefined' && targetNeighbor.action != 'undefined') {
                    seriesBox = \$('<div class=\"box\" id=\"s_season_' + data.data[i].season_id + '_series_' + series_id + '\"></div>')[targetNeighbor.action](neighborsS[targetNeighbor.key]);
                } else {
                    seriesBox = \$('<div class=\"box\" id=\"s_season_' + data.data[i].season_id + '_series_' + series_id + '\"></div>').appendTo(seasonBox.children(\".box-content\").children(\".row\").children(\".col-sm-11\"));
                }

                seriesBox.data('seriesid', series_id);
                seriesBox.append(\$('#series_box_header').html());
                seriesBox.find(\"span[data-series-number]\").data(\"series-number\", (typeof(data.data[i].season_series[j].series_number) != 'undefined' ? data.data[i].season_series[j].series_number : 1))
                        .html((typeof(data.data[i].season_series[j].series_number) != 'undefined' ? data.data[i].season_series[j].series_number : 1) + \" ";
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episode"), "html", null, true);
        echo "\");
                seriesBox.find(\"span[data-files-count]\").data(\"files-count\", (typeof(data.data[i].season_series[j].series_files) != 'undefined' ? data.data[i].season_series[j].series_files : 0))
                        .html(\"";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("files of video"), "html", null, true);
        echo ": \" + (typeof(data.data[i].season_series[j].series_files) != 'undefined' ? data.data[i].season_series[j].series_files : 0));

                seriesBox.find(\"input[name='series_name']\").val((typeof(data.data[i].season_series[j].series_name) != 'undefined' ? data.data[i].season_series[j].series_name : ''));
                seriesBox.find(\"input[name='series_original_name']\").val((typeof(data.data[i].season_series[j].series_original_name) != 'undefined' ? data.data[i].season_series[j].series_original_name : ''));

                seriesBox.data({'self-id': '#' + seriesBox.attr('id'), 'table-id': 'f_season_' + data.data[i].season_id + '_series_' + series_id + '_filedata'})
                seriesBox.append(\$(\"#files_box_content\").html());
                seriesBox.find('.box-content').hide();
                //fillFilesData('#' + seriesBox.attr('id'), 'f_season_' + data.data[i].season_id + '_series_' + data.data[i].season_series[j].series_id + '_filedata');
            } else {
                seriesBox.find(\"span[data-series-number]\").data(\"series-number\", (typeof(data.data[i].season_series[j].series_number) != 'undefined' ? data.data[i].season_series[j].series_number : 1))
                        .html((typeof(data.data[i].season_series[j].series_number) != 'undefined' ? data.data[i].season_series[j].series_number : 1) + \" ";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("episode"), "html", null, true);
        echo "\");
                seriesBox.find(\"span[data-files-count]\").data(\"files-count\", (typeof(data.data[i].season_series[j].series_files) != 'undefined' ? data.data[i].season_series[j].series_files : 0))
                        .html(\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("files of video"), "html", null, true);
        echo ": \" + (typeof(data.data[i].season_series[j].series_files) != 'undefined' ? data.data[i].season_series[j].series_files : 0));

                seriesBox.find(\"input[name='series_name']\").val((typeof(data.data[i].season_series[j].series_name) != 'undefined' ? data.data[i].season_series[j].series_name : ''));
                seriesBox.find(\"input[name='series_original_name']\").val((typeof(data.data[i].season_series[j].series_original_name) != 'undefined' ? data.data[i].season_series[j].series_original_name : ''));
                if (\$(\"#\" + seriesBox.find('table').attr('id')).is(\":visible\")) {
                    \$(\"#\" + seriesBox.find('table').attr('id')).DataTable().ajax.reload();
                }
            }
        }
        \$.each(existsSeasonSeriesBoxIDs, function(i, val){
            \$(val).remove();
        });
    }

    \$.each(existsSeasonBoxIDs, function(i, val){
        \$(val).remove();
    });

    if (typeof (data.other_files) != 'undefined' && data.other_files != 0 && \$(\"#other_files\").length == 0) {
        \$('<div class=\"box\" id=\"other_files\"></div>').appendTo(\"#files_container\");
        \$('<div id=\"other_files_layer\"></div>').appendTo(\"#other_files\");
        \$('#other_files_layer').css({
            minWidth: '100%',
            minHeight: '100%',
            position: 'absolute',
            top: 0,
            left: 0,
            background: \"center rgba(150, 150, 150, 0.3)\",
            boxShadow: \"0 0 30px 25px rgba(255, 255, 255, 0.7) inset\",
            opacity: 0.8,
            zIndex: 400
        });

        \$(\"#other_files\").append(\$(\"#files_box_header\").html());
        \$(\"#other_files\").append(\$(\"#files_box_content\").html());
        fillFilesData('#other_files', 'other_filedata');
        \$('#other_files').children('a.collapse-link').find('[data-files-title]').text(\"";
        // line 770
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Other files"), "html", null, true);
        echo "\");
    }
};

var setSerialError = function (obj) {
    JSErrorModalBox(obj);
};

function fillFilesData(target, id) {
    LoadDataTablesScripts(function () {
        /*\$(target).append(\$(\"#files_box_content\").html());*/
        \$(target).find('table').attr('id', id);
        \$(\"#\" + id).on('xhr.dt', function (e, settings, json) {
            if (typeof (json.data) == 'object') {
                var season_id = '', series_id = '', season_number = '', series_number = '';

                var seasonContainer = \$(this).closest('div[id^=\"season_\"]');
                if (seasonContainer.length) {
                    season_id = seasonContainer.data('seasonid');
                    season_number = seasonContainer.find(\"span[data-season-number]\").data(\"season-number\");
                }
                var seriesContainer = \$(this).closest('div[id^=\"s_season_\"]');
                if (seriesContainer.length) {
                    series_id = seriesContainer.data('seriesid');
                    series_number = seriesContainer.find(\"span[data-series-number]\").data(\"series-number\");
                }
                var video_id = \$(\"#files_container\").data('video_id'), counter = 0;
                for (var i in json.data) {
                    var id = typeof(json.data[i].id) != 'undefined' ? json.data[i].id : '';

                    var status = parseInt(json.data[i].status, 10);
                    var accessed = parseInt(json.data[i].accessed, 10);
                    var file_name = json.data[i].file_name;

                    json.data[i].languages = json.data[i].languages.join(\", \");

                    json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                    <i class='pull-right fa fa-cog'></i>\\n\\
                                                </a>\\n\\
                                                <ul class='dropdown-menu pull-right'>\\n\\
                                                    <li>\\n\\
                                                        <a class='main_ajax no_context_menu' href='";
        // line 812
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-one-video-file-json' data-id='\" + id + \"' data-video_id='\" + video_id + \"' data-season_id='\" + season_id + \"' data-series_id='\" + series_id + \"' data-season_number='\" + season_number + \"' data-series_number='\" + series_number + \"' data-file_name='\" + file_name + \"'>\\n\\
                                                            <span>";
        // line 813
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\";
                    if (id != 0 ) {
                        json.data[i].operations += \"<li>\\n\\
                                                        <a class='main_ajax no_context_menu' \" + (id == 0 ? \"disabled='disabled'\" : '') + \" href='";
        // line 818
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/toggle-video-accessed' data-accessed='\" + (accessed != 0 ? 0 : 1) + \"' data-id='\" + id + \"' data-video_id='\" + video_id + \"'  data-season_id='\" + season_id + \"' data-series_id='\" + series_id + \"'>\\n\\
                                                            <span>\" + ( accessed == \"1\" ? \"";
        // line 819
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublish"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Publish"), "html", null, true);
        echo "\") + \"</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\";
                    }
                    if (id != 0 ) {
                        json.data[i].operations += \"<li>\\n\\
                                                        <a class='main_ajax no_context_menu' \" + (id == 0 ? \"disabled='disabled'\" : '') + \" href='";
        // line 825
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-video-data' data-id='\" + id + \"' data-video_id='\" + video_id + \"' data-season_id='\" + season_id + \"' data-series_id='\" + series_id + \"'>\\n\\
                                                            <span>";
        // line 826
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remove"), "html", null, true);
        echo "</span>\\n\\
                                                        </a>\\n\\
                                                    </li>\";
                    }
                    json.data[i].operations += \"</ul>\\n\\
                                            </div>\";

                    json.data[i].status = accessed != 0 ? \"<span class='txt-success'>";
        // line 833
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Published"), "html", null, true);
        echo "</span>\" : \"<span class='txt-danger'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unpublished"), "html", null, true);
        echo "</span>\";
                    json.data[i].status += (status == 0 ? \"<br><span class=''>";
        // line 834
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not available on storages"), "html", null, true);
        echo "</span>\" : \"\");
                    json.data[i].volume_level = parseInt(json.data[i].volume_level, 10) * 5;

                    if (json.data[i].file_type !== 'sub') {
                        counter++;
                    }
                }
//                var counter = !isNaN(i) ? (parseInt(i, 10) + 1) : 0;
                \$(target).children('a.collapse-link').find('[data-files-count]').text('";
        // line 842
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("files of video"), "html", null, true);
        echo ": ' + counter);
                \$(target).find('.dataTables_processing:first-of-type').hide('');
            }

            if (json.old_url) {
                addOldURLNote(target, json.old_url);
            } else if (\$(target).find('.box-header button.btn-old-url').length == 0) {
                \$(target).find('.box-header button.btn-old-url').remove();
            }

        }).dataTable({
            \"processing\": false,
            \"serverSide\": false,
            \"ajax\": {
                \"url\": \"";
        // line 856
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-video-files-list-json\",
                \"data\": function (d) {
                    if (\$(\"#files_container\").data('video_id')) {
                        d['video_id'] = \$(\"#files_container\").data('video_id');
                    }
                    var season = \$(target).closest(\"div[id^='season_']\").find('[data-season-number]');
                    if (season.length && season.data('season-number')) {
                        d['seasonnumber'] = season.data('season-number');
                    }
                    var series = \$(target).closest(\"div[id^='s_season_']\").find('[data-series-number]');
                    if (series.length && series.data('series-number')) {
                        d['seriesnumber'] = \$(series).data('series-number');
                    }
                }
            },
            \"deferLoading\": [";
        // line 871
        echo "],
            \"language\": {
                \"url\": \"";
        // line 873
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
            },
            ";
        // line 875
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 876
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
            ";
        }
        // line 878
        echo "            \"bFilter\": true,
            \"bPaginate\": true,
            \"bInfo\": true,
            \"aoColumnDefs\": [
                {className: \"action-menu\", \"targets\": [-1]}
            ]
        }).prev('.dataTables_processing').hide('');
    });
}

function addOldURLNote(target, old_url){
    if (\$(target).find('.box-header button.btn-old-url').length == 0) {
        var button = \$(target).find('.box-header button:first');
        var newButton = button.clone(true);
        newButton.text(\"";
        // line 892
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Old data"), "html", null, true);
        echo "\").data('old-url', old_url).addClass('btn-old-url');
        button.before(newButton);
    }
}

var closeModalBox = function () {
    var dataTable = (\$(\"#season_id\").length != 0 && \$(\"#series_id\").length != 0) ? 'f_season_' + \$(\"#season_id\").val() + '_series_' + \$(\"#series_id\").val() + '_filedata' : \"filedata\";
    if (\$(\"#\" + dataTable).length != 0) {
        dataTableUpdate({datatable: dataTable});
    } else {
        JScloseModalBox();
    }
};

var emptyFileContainer = function (data) {
    \$('#files_container').empty();
};

var dataTableUpdate = function (data) {
    if (typeof (data.msg) != 'undefined') {
        JSSuccessModalBox(data);
    } else if (data.error) {
        JSErrorModalBox(data);
    } else {
        JScloseModalBox();
    }
    if (data.btn_old_url_remove) {
        \$(\"#\" + data.datatable).closest('.box-content').parent('div').find('.box-header button.btn-old-url').remove();
    }
    if (\$(\"#\" + data.datatable).length != 0) {
        \$(\"#\" + data.datatable).DataTable().ajax.reload();
    } else {
        JSErrorModalBox({msg: \"";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Something wrong. Please reload page."), "html", null, true);
        echo "\"});
    }
};

var dataTableUpdateError = function (data) {
    JSErrorModalBox(data);
};

var fillModalBoxFilesData = function (data, localFilling) {

    if (!localFilling) {
        \$(\"#modalbox\").hide();
        \$(\"#modalbox\").data('complete', 1);
        \$('#modalbox').find('.modal-header-name span').text(\"";
        // line 937
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit file"), "html", null, true);
        echo "\");
        \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_save_form_body\").text());
        \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_save_form_buttons\").text());
    }

    var fields = {file_id: 'id', video_id: 'video_id', season_id: 'season_id', series_id: 'series_id', status: 'status'};
    for (var key in fields) {
        var field = fields[key];
        if (typeof(data.data[field]) != 'undefined' && data.data[field]) {
            \$(\"#\" + key).val(data.data[field]);
        } else if(!localFilling) {
            \$(\"#\" + key).remove();
        }

    }

    var fields = {
        file_type: 'file_type',
        file_protocol: 'protocol',
        file_quality: 'quality',
        file_volume_level: 'volume_level',
        file_accessed: 'accessed',
        file_tmp_link_type: 'tmp_link_type'
    };
    for (var key in fields) {
        var field = fields[key];
        if (typeof(data.data[field]) != 'undefined' && data.data[field]) {
            \$(\"#\" + key + \" option\").prop('selected', false).removeAttr('selected');
            \$(\"#\" + key).find('option[value=\"' + data.data[field] + '\"]').prop('selected', 'selected');
        }
        if(!localFilling) {
            \$(\"#\" + key).removeAttr('readonly').removeAttr('disabled');
        }
    }

    \$.validate(conf);
    \$('#modalbox').show();

    \$('#file_type').select2(select2Opt);
    \$('#file_quality').select2(select2Opt);
    \$('#file_volume_level').select2(select2Opt);
    \$('#file_protocol').select2(select2Opt);
    \$('#file_accessed').select2(select2Opt);
    \$('#file_tmp_link_type').select2(select2OptPH);

    if (!localFilling) {
        setFileLanguagesSelect();
    }

    if (typeof(data.data.languages) != 'undefined' && data.data.languages instanceof Array && data.data.languages.length) {
        if (localFilling) {
            \$(\"#fileLangCloneList li.select2-selection__choice\").trigger(\"click\");
        }
        \$(\"#file_languages\").val(data.data.languages).trigger(\"change\");
        var resultList = {};
        \$.each( \$(\"#file_languages\").data().select2.data(), function(i){
            resultList[this.id] = this.text;
        });
        \$.each(data.data.languages, function(i){
            if (typeof resultList[this] != 'undefined') {
                var liTmpl = \$('<li class=\"select2-selection__choice\" title=\"\"><span role=\"presentation\" class=\"select2-selection__choice__remove\">×</span></li>').insertBefore(\$(\"#fileLangCloneList\").find('li.select2-search'));
                liTmpl.attr('title', resultList[this]);
                liTmpl.find('span').after(resultList[this]);
                liTmpl.data('val', this);
            }
        });
        /*
        if (\$(\"#fileLangCloneList\").height() >= \$('#file_languages').next().height()) {
            \$(\"#fileLangCloneList\").parent().css({paddingTop: \$(\"#fileLangCloneList\").height() - \$('#file_languages').next().height() + 'px'});
        } else {
            \$(\"#fileLangCloneList\").find('.select2-selection').css({minHeight: \$('#file_languages').next().height() + 'px'})
        }*/
        changeLangBlockHeight();
    }
    if (typeof(data.data.file_name) != 'undefined' && data.data.file_name) {
        \$(\"#file_name\").val(data.data.file_name);
    }
    if (typeof(data.data.url) != 'undefined' && data.data.url) {
        \$(\"#video_url\").val(data.data.url);
    }
    checkProtocol();
    checkFileType();
    if (!localFilling) {
        getMediaInfo();
    }
};

var fillModalBoxFilesDataError = function (data) {
    JSErrorModalBox(data);
};

var getMediaInfo = function() {
    var sendData = {};
    if (\$(\"#file_type\").val() != 'sub') {
        \$(\"#file_form_input_container\").find(\"input,select\").each(function(i){ //.not(\":disabled\")
            var val = this.tagName.toUpperCase() == 'INPUT' ? \$(this).val(): \$(this).find('option:selected').val();
            if (val) {
                sendData[\$(this).attr('name')] = val;
            }
        });
        \$(\"#file_form_input_container\").find('input,select').prop('readonly', 'readonly').prop('disabled', 'disabled');
        \$(\"#modalbox div.devoops-modal-bottom\").find('button').addClass('disabled').prop('disabled', true);
        if (!\$(\"#media_info\").length) {
            \$(\"#file_form_input_container\").removeClass('col-sm-offset-2');
            \$(\"#file_form_input_container\")
                .delay(600)  // do not combine delayed actions with parallel one - always put them in separate code lines
                .after( \$(\"#media_info_body\").html() )
                .promise().done(function(){
                    //\$(\"#media_info\").css({opacity: 1, width: '29%'});
                    \$(\"#media_info\").show();
                });
        } else {
            cleanMediaInfo();
        }

        ajaxPostSend(\"";
        // line 1052
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-media-info-json\", sendData, false, false, true);
    } else {
        checkProtocol();
        checkFileType();
    }
};

var setMediaInfo = function(data){
    cleanMediaInfo();
    if (data.id && \$('#file_id').length == 0) {
        \$(\"#video_id\").before(\"<input type='hidden' class='own_fields form-control' name='id' id='file_id' value='' readonly='readonly'>\");
    }
    if(\$('#file_id').length && (!\$('#file_id').val() || \$('#file_id').val() == '0')) {
        \$('#file_id').val(data.id ? data.id: 0);
    }
    if (data.data) {
        \$(\"#media_info\").addClass('filled').find('button').removeClass('disabled').prop('disabled', false).removeAttr('disabled');
        var infoField = \$(\$(\"#media_info_info\").html()).prependTo(\"#media_info\");
        if (!data.error){
            infoField.addClass('bg-default').addClass('txt-default').text(\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Media info from source"), "html", null, true);
        echo "\");
        }
        if (data.data.datatable) {
            \$(\"#\" + data.data.datatable).DataTable().ajax.reload();
            delete data.data.datatable;
        }
        for(var key in data.data){
            var infoField = \$(\$(\"#media_info_info\").html()).insertAfter(infoField);
            var textVal = data.data[key];
            var textLabel = words && words[key] ? words[key]: key;
            if (key == 'languages') {
                textVal = [];
                \$.each(data.data[key], function(){
                    textVal.push(\$(\"#file_\" + key + \" option[value='\" + this + \"']\").text());
                });
                textVal = textVal.join(', ');
            } else if (key == 'quality') {
                textVal = \$(\"#file_\" + key + \" option[value='\" + textVal + \"']\").text();
            }
            infoField.addClass('bg-default').addClass('txt-default').text(textLabel + \": \" + textVal);
            infoField.data({'info-key': key, 'info-val': data.data[key] instanceof Array? data.data[key].join(','): data.data[key]});
        }
    }
};

var setMediaInfoError = function(data) {
    setMediaInfo(data);
    \$(\"#media_info\").addClass('filled');
    var infoField = \$(\$(\"#media_info_info\").html()).prependTo(\"#media_info\");
    infoField.addClass('bg-warning').addClass('txt-danger').text(\"";
        // line 1100
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No media info"), "html", null, true);
        echo "\");
    var addMessage = data.msg || data.error;
    if (addMessage) {
        var infoField2 = \$(\$(\"#media_info_info\").html()).insertAfter(infoField);
        infoField2.addClass('bg-warning').addClass('txt-danger').text(addMessage);
    }
};

var cleanMediaInfo = function(){
    \$(\"#file_form_input_container\").find('input,select').prop('readonly', false).prop('disabled', false).removeAttr('readonly').removeAttr('disabled');
    \$(\"#modalbox div.devoops-modal-bottom\").find('button').removeClass('disabled').prop('disabled', false).removeAttr('disabled');
    \$(\"#media_info\").removeClass('filled').find('button').addClass('disabled').prop('disabled', 'disabled');
    \$(\"#media_info\").children().not('button').remove();
    checkProtocol();
    checkFileType();
};";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video_step_4.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1285 => 1100,  1253 => 1071,  1229 => 1052,  1111 => 937,  1095 => 924,  1060 => 892,  1044 => 878,  1038 => 876,  1036 => 875,  1031 => 873,  1027 => 871,  1007 => 856,  990 => 842,  979 => 834,  973 => 833,  963 => 826,  957 => 825,  946 => 819,  940 => 818,  932 => 813,  926 => 812,  881 => 770,  842 => 734,  837 => 732,  823 => 721,  818 => 719,  763 => 667,  754 => 661,  737 => 647,  648 => 563,  641 => 561,  521 => 444,  509 => 435,  498 => 427,  480 => 412,  376 => 311,  365 => 305,  321 => 266,  310 => 258,  297 => 250,  288 => 244,  277 => 238,  216 => 180,  197 => 166,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video_step_4.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video_step_4.js.twig");
    }
}
