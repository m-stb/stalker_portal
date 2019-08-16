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

/* default/TvChannels/add_channel/add_channel.js.twig */
class __TwigTemplate_f5505d94d41ce6655777e5fb2fbfd91c88c4011b24d29c66603fe2081831a942 extends \Twig\Template
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
        // line 2
        echo "var allLanguages = ";
        if ($this->getAttribute(($context["app"] ?? null), "allLanguages", [], "any", true, true)) {
            echo "JSON.parse('";
            echo twig_jsonencode_filter($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allLanguages", [], "array"));
            echo "')";
        } else {
            echo "{}";
        }
        echo ";
";
        // line 4
        echo "var select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%'},
    select2OptPH = Object.assign({}, select2Opt, {placeholder: {id: \"-1\", text: \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Disabled"), "html", null, true);
        echo "\", selected:'selected'}});

var conf = {
    form: '#form_',
    formContainer: '#add_channel',
    lang : '";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
    showHelpOnFocus : true,
    validateHiddenInputs: true,
    scrollToTopOnError: false,
    ignore: ['.ignore'],
    modules: 'jsconf, logic',
    errorClass: \"error\",
    onSuccess: function () {
        if (this.form == '#form_') {
            \$(this.form).get(0).submit();
        }
        return false;
    },
    onError: function () {
        \$(this.formContainer).find('span.form-error, div.bg-danger').each(function(){
            if (\$.trim(\$(this).text()) && !\$(this).is(\":visible\")) {
                \$(this).closest('div.box').find('a.collapse-link').trigger('click');
            }
        });

        var _this = this;
        \$(_this.form + \" select\").each(function(){
            if (\$(this).hasClass(_this.errorClass)) {
                _this.highlight(this, _this.errorClass);
            } else {
                _this.unhighlight(this, _this.errorClass);
            }
        });

        // scroll to the first error:
        var targetElem;
        if( _this.form == \"#form_\" ){
            targetElem = \$(_this.form).find(\".\"+_this.errorClass+\":first\").closest(\".form-group\");
            \$(window).scrollTop( targetElem.offset().top - 65 );
            //\$(window).scrollTo( targetElem, null, {margin: false});
        }

        return false;
    },
    highlight: function (element, errorClass, validClass) {
        var select2 = \$(element).next().find('.selection').children();
        if (!select2.hasClass(errorClass)) {
            select2.addClass(errorClass);
        }
    },
    unhighlight: function (element, errorClass, validClass) {
        \$(element).next().children('.selection').children().removeClass(errorClass);
    }
},

confModal = \$.extend({}, conf, {
    form: '#modalbox_ad form',
    formContainer: '#modalbox_ad .channel-form',
    scrollToTopOnError: false
});


// Add custom validation rule
var customRuleObj = {
    name : 'cmd_validate',
    errorMessage : \"\",
    errorMessageKey: 'badCmd'
};

customRuleObj.validatorFunction = function(value, el, config, language, form) {
    var cmd_data = \$('#cmd_data tr:visible td:first-of-type input[name*=\"cmd\"]:not(:disabled)');
    if (cmd_data.length == 0) {
        if (!\$('#cmd_data').parent('div').next('div').hasClass('cmd_error')){
            !\$('#cmd_data').parent('div').after(
                \$('<div class=\" col-xs-10 col-sm-12 cmd_error\">\\n\\
                       <div class=\"bg-danger lead\">\\n\\
                           <span> ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Requires at least one link of broadcast"), "html", null, true);
        echo "</span>\\n\\
                       </div>\\n\\
                   </div>')
            );
        }
        return false;
    }
    \$('#cmd_data').parent('div').next('div.cmd_error').remove();
    return true;
};

var linkTypeFields = [
    ";
        // line 93
        if (($this->getAttribute(($context["app"] ?? null), "httpTmpLink", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "httpTmpLink", [], "array"))) {
            // line 94
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "httpTmpLink", [], "array"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 95
                echo "    '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "value", []), "html", null, true);
                echo "'";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ",";
                }
                // line 96
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    ";
        }
        // line 98
        echo "];

function DemoSelect2() {
    \$('#form_tv_genre_id').select2(select2Opt);
    \$('#form_volume_correction').select2(select2Opt);
    \$('#s2_priority').select2(select2Opt);
    \$('#s2_use_http_tmp_link').select2(select2Opt);
    \$('#s2_stream_server').select2(select2Opt);
    \$('#form_pvr_storage_names').select2(select2Opt);
    \$('#form_storage_names').select2(select2Opt);
    \$('#form_flussonic_storage_names').select2(select2Opt);
    \$('#form_wowza_storage_names').select2(select2Opt);
    \$('#form_nimble_storage_names').select2(select2Opt);
    \$('#form_tv_archive_type').select2(select2OptPH);
    \$('#form_languages').select2(select2Opt);
}

function initFileUploader(){
    \$('#fileupload').fileupload({
        url: 'tv-channels/edit-logo?id=' + (\$(this).prev('div').children('input').val() ? \$(this).prev('div').children('input').val() : 'new'),
        type: 'POST',
        autoUpload: true,
        multipart: true,
        acceptFileTypes: /(\\.|\\/)(jpe?g|png)\$/i,
        maxFileSize: 1000000,
        maxNumberOfFiles: 1
    }).bind('fileuploaddone', function (e, data) {
        var response;
        if (data && data.jqXHR && data.jqXHR.status && data.jqXHR.status == 200 && data.jqXHR.responseJSON) {
            response = data.jqXHR.responseJSON;
        } else {
            JSErrorModalBox();
            return false;
        }
        \$(this).prev('div').children('img').attr('src', response.pic + '?' + \$.random(100000)).css('max-width', '100%');
        var val = response.pic.split('/');
        val = val[val.length - 1];
        \$(this).prev('div').children('input').val(val);
        var imageName = val.split('.');
        if (imageName.length > 1) {
            imageName.length -= 1;
        }
        imageName = imageName.join('.');
        var postUrl = 'tv-channels/edit-logo?id=' + (typeof (imageName) != 'undefined' && imageName != '' ? imageName : 'new');
        \$(this).fileupload('option', {url: postUrl});

        \$(\"#deletelogolink a\").data(\"logo_id\", (imageName.search('new') != -1 ? val: imageName));

        return false;
    }).bind('fileuploadfail', function (e, data) {
        var errMSG = '';
        if (data && data.jqXHR && data.jqXHR.responseJSON) {
            errMSG = data.jqXHR.responseJSON.msg ? data.jqXHR.responseJSON.msg : (data.jqXHR.responseJSON.error ? data.jqXHR.responseJSON.error: '');
        }
        JSErrorModalBox({msg: errMSG});
    });
    return true;
}

function yelp() {
    \$(document).ready(function () {

        \$.formUtils.addValidator(customRuleObj);

        \$.validate(conf);
        \$.validate(confModal);

        LoadSelect2Script(DemoSelect2);

        \$(\"#form_allow_pvr\").on('change', function () {
            checkEnableChkBox('form_allow_pvr');
        });

        checkEnableChkBox('form_allow_pvr');

        \$(\"#form_tv_archive_type\").on('change', function () {
            toggleChkSelect(\$(this).val());
            // also clean validation errors for selects:
            \$(\"#form_storage_names\").parent().removeClass('has-error');
            \$(\"#form_storage_names\").nextAll(\".form-error\").remove();
        });

        toggleChkSelect(\$(\"#form_tv_archive_type\").val());

        \$('#form_ .form-group .i-hint').tooltip({
            animation: true,
            placement: \"right\"
        });

        \$(document).on('click', '#fileupload input[type=\"file\"]', function(e){
            var imgItem = \$(this).closest('.form-group').find('img');
            if (imgItem.attr('src') && !confirm('";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Do you really want to delete or replace this image?"), "html", null, true);
        echo "')) {
                e.stopPropagation();
                e.preventDefault();
                return false;
            }
        });

        if (typeof (loadFileUploadScripts) != 'function' || !loadFileUploadScripts(initFileUploader)){
            JSErrorModalBox({msg: \"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cannot load File Upload plugin"), "html", null, true);
        echo "\"})
        }

        \$(\"#form_save\").on('click', function (e) {

            e.stopPropagation();
            e.preventDefault();

            if (checkValidForm()) {
                conf.onSuccess();
            } else {
                conf.onError();
            }
            return false;
        });

        \$(\"#form_reset\").on('click', function(e){
            e.stopPropagation();
            e.preventDefault();
            \$(this).closest('form').get(0).reset();
            return false;
        });

        // initial opening collapse-box :
        \$(\"#modalbox_ad > div > form > .devoops-modal-inner > .box:not(:first-of-type)\")
        //.add(\"#add_channel > form > .row > .box:not(:first-of-type)\")
            .children('div.box-content')
            .hide('fast');

        \$(\"#modalbox_ad > .channel-form .box-header .box-name .toggle-switch, #add_channel_base #cmd_data .toggle-switch\").off('click');
        \$(\"#modalbox_ad > .channel-form .box-header .box-name .toggle-switch, #add_channel_base #cmd_data .toggle-switch\").on('click', function(e){
            e.stopPropagation();
            e.preventDefault();
            return false;
        });

        \$(document).on('click', \"#add_channel #add_broadcasting_link\", function (e) {
            e.stopPropagation();
            e.preventDefault();

            \$(\"#modalbox_ad span.duplicate\").remove();
            var tmp_id = \$('#cmd_data tr:last').attr('id');
            if (!tmp_id) {
                tmp_id = \"tr_\" + \$.randString();
                \$('#cmd_data tr:last').attr('id', tmp_id);
            }
            \$(\"#modalbox_ad\").data('tr_id', tmp_id);

            \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add streaming link"), "html", null, true);
        echo "');
            \$(\"#modalbox_ad\").find(\"input, select\").prop(\"disabled\", false).removeAttr('disabled');
            \$(\"#modalbox_ad\").find('form').each(function(){
                this.reset();
            });
            \$(\"#s2_stream_server option\").prop('selected', false).removeAttr('selected');
            \$(\"#s2_stream_server\").prop('disabled', 'disabled');
            \$(\"#s2_stream_server\").closest(\".form-group\").hide();
            \$(\"#s2_use_http_tmp_link\").val('').trigger('change');
            \$(\"#add_channel_load_balancing input[type='checkbox'][name*='enable_balancer_monitoring']\").prop('checked', false).closest(\".form-group\").hide();
            \$(\"#add_channel_link_monitoring input[type='checkbox'][name*='enable_monitoring']\").prop('checked', false);
            \$(\"#add_channel_link_monitoring input[type='text'][name*='monitoring_url']\").prop('disabled', 'disabled').closest(\".form-group\").hide();

            \$('#add_channel_link_form .i-hint').tooltip({
                animation: true,
                placement: \"left\"
            });
            \$('#add_channel_link_form .checkbox-inline + .i-hint').tooltip(\"destroy\").tooltip({
                animation: true,
                placement: \"right\"
            });

            \$(\"#modalbox_ad\").show();
            return false;
        });

        \$(document).on(\"click\", \"#cmd_data .channel_url_remove_data\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            var parentTable = \$(this).closest('tbody');
            \$(this).closest('tr').remove();
            parentTable.find('tr:visible').each(function(i){
                \$(this).find('input').each(function(){
                    \$(this).attr('name', \$(this).attr('name').replace(/\\d+?/ig, i+1));
                    \$(this).attr('id', \$(this).attr('id').replace(/\\d+?/ig, i+1));
                })
            });
            if (parentTable.find('tr:visible').length == 0 && !\$(\"#lang_autocheck\").hasClass('disabled')) {
                \$(\"#lang_autocheck\").addClass('disabled');
            }
            conf.form = '#form_';
            conf.formContainer = '#add_channel';
            \$(conf.form).isValid({}, conf, true);
            return false;
        });

        \$(document).on(\"click\", \"#cmd_data .channel_url_change_data\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            \$(\"#modalbox_ad span.duplicate\").remove();
            var data = channelUrlDataGet(\$(this).closest('tr'));
            var tmp_id = \$(this).closest('tr').attr('id');
            if (!tmp_id) {
                tmp_id = \"tr_\" + \$.randString();
                \$(this).closest('tr').attr('id', tmp_id);
            }
            \$(\"#modalbox_ad\").data('tr_id', tmp_id);
            \$(\"#modalbox_ad\").find('input, select').each(function () {
                var name = (typeof (\$(this).attr('name')) != 'undefined') ? \$(this).attr('name').replace(/\\[\\d*?\\]/ig, '') : false;
                if (typeof (data[name]) == 'undefined') {
                    return true;
                }

                \$(this).prop(\"disabled\", false).removeAttr(\"disabled\");

                var shortName = name.replace(/[^\\[]*\\[([^\\]]*).*\$/ig, '\$1');
                if (\$(\"#s2_use_http_tmp_link\").attr('name').search(shortName) != -1) {
                    \$.each(linkTypeFields, function(i, linkVal){
                        var fieldName = 'form[' + linkVal + ']';
                        if (data[fieldName] && (('' + data[fieldName].value) == '1' || data[fieldName].value == 'on')) {
                            \$(\"#s2_use_http_tmp_link\").val(linkVal).trigger('change');
                        }
                    });
                    return true;
                }

                var type = typeof (\$(this).attr('type')) != 'undefined' ? \$(this).attr('type') : \$(this).get(0).tagName.toLowerCase();
                if (type == 'select') {
                    var lSelect = \$(this);
                    lSelect.find('option').prop('selected', false).removeAttr('selected');
                    \$.each(data[name].value.split(';'), function (i, lValue) {
                        lSelect.find(\"option[value='\" + lValue + \"']\").prop('selected', 'selected');
                    });
                    if (lSelect.attr('id').search('s2') != -1) {
                        lSelect.select2(select2Opt);
                    }
                } else if (type == 'checkbox') {
                    \$(this).prop('checked', (data[name].value == 'on' || data[name].value == '1'));
                } else if (type == 'radio') {
                    if (\$(this).val() == data[name].value) {
                        \$(this).prop('checked', 'checked');
                    } else {
                        \$(this).prop('checked', false).removeAttr('checked');
                    }
                } else {
                    \$(this).val(data[name].value);
                }
            });

            if (!\$(\"#add_channel_load_balancing input[type='checkbox'][name*='use_load_balancing']\").is(':checked')) {
                \$(\"#s2_stream_server option\").prop('selected', false).removeAttr('selected');
                \$(\"#s2_stream_server\").prop('disabled', 'disabled');
                \$(\"#s2_stream_server\").closest(\".form-group\").hide();
                \$(\"#add_channel_load_balancing input[type='checkbox'][name*='enable_balancer_monitoring']\").prop('checked', false).closest(\".form-group\").hide();
            } else {
                \$(\"#s2_stream_server\").prop('disabled', false).removeAttr('disabled');
                \$('#s2_stream_server').select2(select2Opt);
                \$(\"#s2_stream_server\").closest(\".form-group\").show();
                \$(\"#add_channel_load_balancing input[type='checkbox'][name*='enable_balancer_monitoring']\").closest(\".form-group\").show();
            }

            if (!\$(\"#add_channel_link_monitoring input[type='checkbox'][name*='enable_monitoring']\").is(':checked')) {
                \$(\"#add_channel_link_monitoring input[type='text'][name*='monitoring_url']\").prop('disabled', 'disabled').closest(\".form-group\").hide();
            } else {
                \$(\"#add_channel_link_monitoring input[type='text'][name*='monitoring_url']\").prop('disabled', false).closest(\".form-group\").show();
            }

            \$('#add_channel_link_form .i-hint').tooltip({
                animation: true,
                placement: \"left\"
            });
            \$('#add_channel_link_form .checkbox-inline + .i-hint').tooltip(\"destroy\").tooltip({
                animation: true,
                placement: \"right\"
            });

            \$(\"#modalbox_ad\").find(\".modal-header-name\").children('span').text('";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit streaming link"), "html", null, true);
        echo "');
            \$(\"#modalbox_ad\").show();
            \$(this).closest('.open').removeClass('open');
            return false;
        });

        \$(\"#cover_container\").on('click', 'a', function(e){
            e.stopPropagation();
            e.preventDefault();
            if( !confirm(\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete logo"), "html", null, true);
        echo "?\") ){
                return;
            }ajaxPostSend(\$(this).attr('href'), {logo_id: \$(this).data('logo_id')});
            return false;
        });

        \$(\"#modalbox_ad\").on('change', \"input[name*='enable_balancer_monitoring']\", function(e){
            var enable_monitoring = \$(\"#modalbox_ad input[name*='enable_monitoring']:checked\");
            if ( this.checked && (enable_monitoring.length == 0 || enable_monitoring.val() == 'off') ){
                e.stopPropagation();
                e.preventDefault();
                \$(this).prop('checked', false);
                showModalBox();
                return false;
            }
        });

        \$(\"#s2_use_http_tmp_link\").on('select2:select', function(e){
            if (\$(this).find('option[value=\"' + \$(this).val() + '\"]').data('check-module') == '0' ) {
                JSErrorModalBox({msg: \"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("For enabling this option you need enable mcrypt php-extension"), "html", null, true);
        echo "\"});
                \$(this).val('').trigger('change');
                e.stopPropagation();
                e.preventDefault();
                return false;
            }
        });

        // open box-dropdowns if error fired
        \$(\"#add_channel .form-group\").each(function(i){
            var errorDiv = \$(this).find('.bg-danger, .form-error');
            if (errorDiv.length && !errorDiv.is(\":visible\") && \$.trim(errorDiv.text()) != '') {
                \$(this).closest('div.box').find('a.collapse-link').trigger('click');
            }
        });

        \$(\"#add_channel_load_balancing\").on(\"change\", \"input[type='checkbox'][name*='use_load_balancing']\", function(e){
            if (!\$(this).is(':checked')) {
                \$(\"#s2_stream_server option\").prop('selected', false).removeAttr('selected');
                \$(\"#s2_stream_server\").prop('disabled', 'disabled');
                \$(\"#s2_stream_server\").closest(\".form-group\").hide();
                \$(\"#add_channel_load_balancing input[type='checkbox'][name*='enable_balancer_monitoring']\").prop('checked', false).closest(\".form-group\").hide();
            } else {
                \$(\"#s2_stream_server\").prop('disabled', false).removeAttr('disabled');
                \$('#s2_stream_server').select2(select2Opt);
                \$(\"#s2_stream_server\").closest(\".form-group\").show();
                \$(\"#add_channel_load_balancing input[type='checkbox'][name*='enable_balancer_monitoring']\").closest(\".form-group\").show();
            }
        });

        \$(\"#add_channel_link_monitoring\").on('change',  \"input[type='checkbox'][name*='enable_monitoring']\", function(e){
            if (!\$(this).is(':checked')) {
                \$(\"#add_channel_link_monitoring input[type='text'][name*='monitoring_url']\").prop('disabled', 'disabled').closest(\".form-group\").hide();
            } else {
                \$(\"#add_channel_link_monitoring input[type='text'][name*='monitoring_url']\").prop('disabled', false).closest(\".form-group\").show();
            }
        });

        \$(document).on('click submit', \"#modalbox_ad .channel-form button[type='submit']\", function (e) {
            e.stopPropagation();
            e.preventDefault();

            if (typeof(conf) == 'object' && typeof(conf.form) != 'undefined') {
                conf.form = '#add_channel_link_form';
                conf.formContainer = '#modalbox_ad';
                \$(conf.form).prop('novalidate', 0).removeAttr('novalidate');
                if (\$(conf.form).isValid({}, conf, true)) {
                    conf.onSuccess();
                    \$(conf.form).prop('novalidate', 1);
                } else {
                    conf.onError();
                    return false;
                }
            }

            var tmp_id = \$(\"#modalbox_ad\").data('tr_id');
            var dataObj = {};

            var currentCMD = \$(\"#modalbox_ad #add_channel_url_base input[name*='cmd']\");
            var currentCMDVal = \$(currentCMD).val();
            currentCMDVal = currentCMDVal.replace(/\\s/ig, '');
            var duplicate = false;

            \$('#cmd_data tr:visible td:first-of-type input[name*=\"cmd\"]').each(function(){
                var existsCMDVal = \$(this).val();
                existsCMDVal = existsCMDVal.replace(/\\s/ig, '');
                var currID = \$(this).closest('tr').attr('id') || false;
                if (existsCMDVal == currentCMDVal &&  currID != tmp_id) {
                    duplicate = true;
                    return false;
                }
            });

            if (duplicate) {
                if (\$(\"#modalbox_ad span.duplicate\").length == 0) {
                    currentCMD.closest('div').after('<span class=\"help-inline col-xs-12 col-sm-12 duplicate\"><span class=\"txt-danger\">' + words['CMD_Exists'] + \"</span></span>\");
                }
                \$(\"#modalbox_ad\").scrollTo(0);
                currentCMD.focus();
                return false;
            } else {
                \$(\"#modalbox_ad span.duplicate\").remove();
            }

            \$('#modalbox_ad').find('input, select').each(function () {
                var name = (typeof (\$(this).attr('name')) != 'undefined') ? \$(this).attr('name').replace(/\\[\\d*?\\]/ig, '') : false;
                if (!name) {
                    return true;
                }
                var type = typeof (\$(this).attr('type')) != 'undefined' ? \$(this).attr('type') : \$(this).get(0).tagName.toLowerCase();
                var value = \$(this).val() || '';
                if (value instanceof Array) {
                    value = value.join(';');
                }
                if (type == 'checkbox') {
                    dataObj[name] = {'value': (\$(this).prop('checked') ? 'on' : 'off'), 'type': type};
                } else if (type == 'radio') {
                    if (\$(this).prop('checked')) {
                        dataObj[name] = {'value': \$(this).val(), 'type': type};
                    }
                } else if (type == 'select' && \$(this).attr('multiple')) {
                    dataObj[name] = {'value': value, 'type': type};
                } else {
                    dataObj[name] = {'value': value, 'type': type};
                }
            });
            channelUrlDataUpdate(\"#\" + tmp_id, dataObj);

            if (Object.keys(dataObj).length != 0 && \$(\"#lang_autocheck\").hasClass('disabled')) {
                \$(\"#lang_autocheck\").removeClass('disabled');
            }

            \$(\"#modalbox_ad\").find(\"input, select\").prop(\"disabled\", \"disabled\");
            \$(\"#modalbox_ad\").find(\"form\").each(function () {
                this.reset();
            });
            \$(\"#modalbox_ad\").hide();
            conf.form = '#form_';
            conf.formContainer = '#add_channel';
            \$(conf.form).isValid({}, conf, true);
            return false;
        });

        \$(document).on('click', '#lang_autocheck', function(e){
            e.stopPropagation();
            e.preventDefault();
            var cmdData = [];
            \$(\"input[name*='form[cmd]'][value]:hidden\", '#form_').each(function(){
                cmdData.push(\$(this).val());
            });
            if (\$(this).hasClass('disabled') || !cmdData.length) {
                JSErrorModalBox({msg: \"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Requires at least one link of broadcast"), "html", null, true);
        echo "\"})
                return false;
            }

            \$('#modalbox .modal-header-name span').text('";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Auto-detect channel languages"), "html", null, true);
        echo "');
            \$(\"#modalbox .devoops-modal-inner\").empty();
            \$('#cmd_autocheck_lang_tmpl').tmpl({ch_id: \$(\"#form_id\").val(), links: cmdData}).appendTo( \$(\"#modalbox .devoops-modal-inner\") );
            \$(\"#cmd_autocheck_lang\").select2(select2Opt);
            \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_form_buttons\").html());

            \$(\"#modalbox\").show();
        });

        \$(document).on('change', \"#cmd_autocheck_lang\", function(){
            if (\$(\"#cmd_lang_result\").length) {
                \$(\"#cmd_lang_result\").empty();
            }
        });

        \$(document).on('click', '#cmd_autocheck_btn', function(e){
            e.stopPropagation();
            e.preventDefault();
            var sendData = {
                ch_id: \$(\"#form_id\").val(),
                link: \$(\"#cmd_autocheck_lang\").val()
            };
            if (\$(\"#cmd_lang_result\").length) {
                \$(\"#cmd_lang_result\").empty().append(\"<div class='col-xs-12 col-sm-12 text-center'><img src='img/preloader.gif' style='margin-top: 10px;'></div>\");
            }
            ajaxPostSend(\"";
        // line 559
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/cmd-autodetect-lang\", sendData, false, false, true);
        });

        \$(document).on('click', \"#lang_apply_btn\", function(e){
            e.stopPropagation();
            e.preventDefault();
            var newValues = [];
            \$(\"#cmd_lang_result label[data-lang_code]\").each(function(){
                newValues.push(\$(this).data('lang_code'));
            });
            \$(\"#form_languages\").val(newValues).trigger(\"change\");
        });

        \$(document).on('hide', '#modalbox', function(){
            \$('.devoops-modal', this).removeAttr('style');
        });
    });
}

document.addEventListener(\"DOMContentLoaded\", yelp, false);

function channelUrlDataGet(container){
    var dataObj = {};
    \$(container).find('input').each(function(){
        var name = \$(this).attr('name').replace(/\\[\\d*?\\]/ig, '');
        var value = \$(this).val();
        var type = \$(this).attr('type');
        if (type != 'checkbox') {
            dataObj[name] = {'value': value, 'type': type};
        } else {
            dataObj[name] = {'value': (\$(this).prop('checked') ? 'on': 'off'), 'type': type};
        }
    });
    return dataObj;
}

function channelUrlDataUpdate(container, data){
    if (\$(container).css('display') == 'none'){
        var clonContainer = \$(container).clone(true, true);
        clonContainer.removeAttr('id');
        \$(clonContainer).insertAfter(container);
        \$(container).css(\"display\", \"table-row\");
        var countRow = \$(container).parent().find(\$(container).get(0).tagName+\":visible\").length;
        \$(container).find('input').each(function(){
            \$(this).attr('name', \$(this).attr('name').replace(/\\d+?/ig, countRow));
            \$(this).attr('id', \$(this).attr('id').replace(/\\d+?/ig, countRow));
        });
    }
    \$(container).find('input').each(function(){
        \$(this).prop(\"disabled\", false).removeAttr(\"disabled\");
        var name = \$(this).attr('name').replace(/\\[\\d*?\\]/ig, '');
        var type = \$(this).attr('type');

        var shortName = name.replace(/[^\\[]*\\[([^\\]]*).*\$/ig, '\$1');
        if (linkTypeFields.indexOf(shortName) != -1) {
            if (type == 'checkbox') {
                \$(this).prop('checked', \$(\"#s2_use_http_tmp_link\").val() == shortName);
            } else {
                \$(this).val(\$(\"#s2_use_http_tmp_link\").val() == shortName ? 'on': 'off');
            }
            return true;
        } else if (typeof (data[name]) == 'undefined') {
            return true;
        }
        if (type == 'checkbox') {
            if (\$(this).attr('name').search('enable_monitoring') != -1) {
                var targetLabel = \$(this).closest('td').next('td').find('label');
                if (targetLabel.text() != '-' && \$(this).prop('checked') != (data[name].value == 'on')) {
                    targetLabel.text('-');
                    targetLabel.removeClass();
                }
            }
            \$(this).prop('checked', (data[name].value == 'on'));
        } else {
            \$(this).val(data[name].value);
        }
        var label = \$(this).prev(\"label[data-field='\"+name+\"']\");
        if (label) {
            label.text(data[name].value);
        }
    });

    \$(container).find('input[name*=\"use_http_tmp_link\"]').prop('checked', \$(\"#s2_use_http_tmp_link\").val() ? true: false);

}

function setTVArchiveFields(){
    var \$tv_archive_type = \$(\"#form_tv_archive_type\"),
        \$form_allow_pvr  = \$(\"#form_allow_pvr\"),
        \$disablingFields = \$(\"#form_mc_cmd, #form_tv_archive_duration\");

    // Lock/Unlock fields:
    if( \$tv_archive_type.val() == \"\" ){
        if( \$form_allow_pvr.prop(\"checked\") ){
            \$(\"#form_mc_cmd\").prop(\"disabled\", false).removeAttr('disabled');
            \$(\"#form_tv_archive_duration\").prop('disabled', 'disabled');
        } else {
            \$disablingFields.prop('disabled', 'disabled');
            // also clean validation errors:
            \$disablingFields.css('border-color', '').removeClass('error').parent().removeClass('has-error');
            \$disablingFields.nextAll(\".form-error\").remove();
        }
    } else {
        \$disablingFields.prop(\"disabled\", false).removeAttr('disabled');
    }

    /*
    *   Link's URL and duration is neccessary when TV Archive or nPVR is enabled.
    *   So we need manualy to change validation-depends-on condition.
    */
    if( \$tv_archive_type.val() == \"\" && \$form_allow_pvr.prop(\"checked\") ){
        \$disablingFields.attr(\"data-validation-depends-on\",\"form[allow_pvr]\");
    } else {
        \$disablingFields.attr(\"data-validation-depends-on\",\"form[tv_archive_type]\");
    }

}

function toggleChkSelect(currVal){
    var relations = {
        'stalker_dvr': 'form_storage_names',
        'wowza_dvr': 'form_wowza_storage_names',
        'flussonic_dvr': 'form_flussonic_storage_names',
        'nimble_dvr': 'form_nimble_storage_names'
    };

    var parentVisible = 0;

    \$.each(relations, function(key, val){
        var currObj = \$(\"#\" + val);
        if (key !== currVal) {
            currObj.next('span').hide();
            currObj.prop(\"disabled\", 'disabled').attr('disabled', \"disabled\");
        } else {
            parentVisible = 1;
            currObj.next('span').show();
            currObj.select2(select2Opt);
            currObj.prop(\"disabled\", false).removeAttr('disabled');
        }
    });

    \$(\"#form_storage_names\").closest('div.form-group')[parentVisible ? 'show': 'hide']();

    // Enable/Disable inputs:
    setTVArchiveFields();
}

function checkEnableChkBox(chkBoxId){
    var _this = \$(\"#\" + chkBoxId);
    var parent = _this.closest('div.form-group');
    if (_this.prop(\"checked\")) {
        parent.next().show().find('input, select').prop(\"disabled\", false).removeAttr('disabled');
    } else {
        parent.next().hide().find('input, select').prop(\"disabled\", \"disabled\").attr('disabled', \"disabled\");
    }

    // Enable/Disable inputs:
    setTVArchiveFields();
}

var closeModalBox = function(){
    \$(\"#modalbox\").hide();
    \$('#modalbox').find('.modal-header-name span').empty();
    \$('#modalbox').find('.devoops-modal-inner').empty();
    \$('#modalbox').find('.devoops-modal-bottom').empty();
};

function showModalBox(){
    \$('#modalbox .devoops-modal').css({marginTop: '12%'});
    \$('#modalbox').find('.modal-header-name span').text('";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Pay attention."), "html", null, true);
        echo "');
    \$('#modalbox').find('.devoops-modal-inner').html('<span>";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("For activating this option, you must enable \"Enable monitoring\" in the \"Monitoring\" section"), "html", null, true);
        echo "</span>');
    \$(\"#modalbox\").show();
}

var deleteLogo = function(data){
    \$('#form_logo').val('');
    \$('#cover_container img').attr('src', '');
    JSSuccessModalBox(data);
};

var deleteLogoError = function(data){
    JSErrorModalBox(data);
};

var autodetectLangResult = function(data){
    if (\$(\"#cmd_lang_result\").length) {
        var langContainer = \$(\"#cmd_lang_result\");
        langContainer.empty();
        \$(\"<div class='form-group'><label class='col-xs-12 col-sm-12 control-label'>";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Detected languages"), "html", null, true);
        echo "</label></div>\").appendTo(langContainer);
        langContainer = \$(\"<div class='col-xs-12 col-sm-12'></div>\").appendTo(langContainer);
        \$.each(data.languages, function(){
            if (allLanguages[this]) {
                \$(\"<label class='col-xs-4 col-sm-4 control-label' data-lang_code='\"+ this +\"'>\"+ allLanguages[this] +\"</span>\").appendTo(langContainer);
            }
        });
        \$(\"<div class='col-xs-12 col-sm-12 text-center'><button id='lang_apply_btn' class='btn btn-success center'>";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Apply detected languages"), "html", null, true);
        echo "</button></div>\").appendTo(langContainer.parent('div'));
    }
};

var autodetectLangResultError = function(data){
    if (\$(\"#cmd_lang_result\").length) {
        var langContainer = \$(\"#cmd_lang_result\");
        langContainer.empty();
        \$(\"<div class='form-group'><label class='col-xs-12 col-sm-12 control-label'>\"+ (data.msg ? data.msg : (data.error ? data.error: \"";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No results"), "html", null, true);
        echo "\")) +\"</label></div>\").appendTo(langContainer);
    }
};


function checkValidForm(){
    var ignore = new Array();

    \$(\"#form_correct_time, #tv_archive_duration\").each(function() {
        if (!\$(this).val() || \$(this).val().length == 0) {
            \$(this).val(0);
        }
    });

    conf.ignore = ignore;
    conf.form = '#form_';
    conf.formContainer = '#add_channel';
    if (!\$(conf.form).isValid({}, conf, true)) {
        //var targetElem = (\$('.has-error, .error, .form-error').get(0) || \$('div.bg-danger:visible').children().get(0));
        //\$(document).scrollTo(\$(targetElem).closest('.form-group').prev().get(0) || \$(targetElem).closest('.box').get(0), 'slow');
        var targetElem = \$('.has-error, .error, .form-error').first().closest('.form-group') || \$('div.bg-danger:visible').children();
        \$(window).scrollTop( targetElem.offset().top - 65 );
        return false;
    }

    return true;
}

";
        // line 790
        if (($this->getAttribute(($context["app"] ?? null), "channelEdit", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "channelEdit", []))) {
            // line 791
            echo "window.onunload = function(){
    if (!checkValidForm()) {
        return \"";
            // line 793
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Form data is not valid. Really want to go?"), "html", null, true);
            echo "\";
    }
};

window.onbeforeunload = function(){
    if (!checkValidForm()) {
        return \"";
            // line 799
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Form data is not valid. Really want to go?"), "html", null, true);
            echo "\";
    }
};
";
        }
    }

    public function getTemplateName()
    {
        return "default/TvChannels/add_channel/add_channel.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  938 => 799,  929 => 793,  925 => 791,  923 => 790,  892 => 762,  881 => 754,  871 => 747,  850 => 729,  846 => 728,  672 => 559,  644 => 534,  637 => 530,  503 => 399,  481 => 380,  469 => 371,  340 => 245,  289 => 197,  278 => 189,  185 => 98,  182 => 97,  168 => 96,  161 => 95,  143 => 94,  141 => 93,  126 => 81,  52 => 10,  44 => 5,  41 => 4,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/add_channel/add_channel.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/add_channel/add_channel.js.twig");
    }
}
