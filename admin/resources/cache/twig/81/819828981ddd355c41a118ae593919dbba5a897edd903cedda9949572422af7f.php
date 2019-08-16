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

/* default/TvChannels/m3u_import/m3u_import.js.twig */
class __TwigTemplate_bda8343f948513a6e3ff463e7d6031d6248f8ef0f8d5713f24153d0304a19b54 extends \Twig\Template
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
        var sendedPic = [];
        var conf = {
            lang : '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            ignore: ['.ignore'],
            modules: 'jsconf',
            onSuccess: function () {
                var sendData = { item_id: this.itemId},
                    formId = this.form;
                \$(this.form).find('.own_field:not(.select2-container)').each(function(){
                    if (this.type && this.type.toLowerCase() == 'checkbox'){
                        sendData[\$(this).attr('name')] = \$(this).prop('checked') ? 'on': 'off';
                    } else {
                        sendData[\$(this).attr('name')] = \$(this).val();
                    }
                });
                var counter = 0;
                var timer = setInterval(function(){
                    if (sendedPic.indexOf(formId) != -1 || counter >= 10 || sendData['logo'].search(/^(http|https)?:\\/\\//ig) != -1) {
                        if (counter >= 10) {
                            JSErrorModalBox({msg: \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Image was not uploaded"), "html", null, true);
        echo "\"});
                        }
                        clearInterval(timer);
                        ajaxPostSend(\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/save-m3u-item\", sendData, false, false, true);
                    }
                    counter++;
                }, 100);
                return false;
            },
            onError: function () {
                return false;
            }
        };

        function initFileUploader(){
            \$('#fileupload').fileupload({
                url: '";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/get-m3u-data',
                type: 'POST',
                autoUpload: true,
                multipart: true,
                ";
        // line 45
        echo "                maxFileSize: 1000000,
                maxNumberOfFiles: 1
            }).bind('fileuploaddone', function (e, data) {
                var response;
                if (data && data.jqXHR && data.jqXHR.status && data.jqXHR.status == 200 && data.jqXHR.responseJSON) {
                    response = data.jqXHR.responseJSON;
                } else {
                    JSErrorModalBox();
                    return false;
                }
                if (response.success) {
                    ajaxSuccess(response, false);
                }
                \$(\"#save_channels\").removeClass(\"hidden\");
                \$(\"#clean_channels\").removeClass(\"hidden\");
                return false;
            }).bind('fileuploadfail', function (e, data) {
                if (data && data.jqXHR && data.jqXHR.status && data.jqXHR.responseJSON) {
                    JSErrorModalBox(data.jqXHR.responseJSON);
                } else {
                    JSErrorModalBox();
                }
            });
            return true;
        }

        function initIconUploader(iconContainer){
            \$(iconContainer).fileupload({
                url: '";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-logo',
                type: 'POST',
                autoUpload: true,
                multipart: true,
                multiple: false,
                singleFileUploads: true,
                limitMultiFileUploads: 1,
                acceptFileTypes: /(\\.|\\/)(jpe?g|png)\$/i,
                maxFileSize: 1000000,
                maxNumberOfFiles: 1
            }).bind('fileuploadadd', function (e, data) {
                \$(this).fileupload(
                        'option',
                        'previewMaxWidth',
                        '82px'
                );
                \$(this).fileupload(
                        'option',
                        'previewMaxHeight',
                        '82px'
                );
            }).bind('fileuploadadded', function (e, data) {
                var container, img, currentFile;
                container = e.currentTarget;
                currentFile = data.files[0];
                img = \$(container).parent().find('img');

                if (typeof(data.formData) == 'undefined') {
                    data.formData = {
                        id: 'new',
                        container_id: container.id
                    };
                }
                \$(\"#file_logo_\" + \$(container).data('file_num')).val('');

                img.attr('src', currentFile.preview.toDataURL(currentFile.type));
                if (!img.is(':visible')) {
                    img.show();
                }
            }).bind('fileuploaddone', function (e, data) {
                var result = data._response.result || false,
                    container = e.currentTarget;
                \$(\"#file_logo_\" + \$(container).data('file_num')).val(result.logo);
                sendedPic.push(\"#\" + \$(container).closest('form').attr('id'));
                \$(container).parent('div').find('.clear_m3u_logo').data('logo_id', result.logo);

/*                if (result && result.success && result.upload_id) {
                    if (result.file_num == 0) {
                        \$(\"#form_cover_id\").val(result.upload_id);
                    }
                } else {
                    return false;
                }*/
                return true;
            });
            return true;
        }

        function yelp() {
            \$(document).ready(function () {

                \$.validate(conf);
                //\$(\"#content, #main\").css(\"background-color\", \"#f2f2f2\");

                if (typeof (loadFileUploadScripts) != 'function' || !loadFileUploadScripts(initFileUploader)){
                    JSErrorModalBox({msg: \"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cannot load File Upload plugin"), "html", null, true);
        echo "\"})
                }

                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    ajaxPostSend(\$(this).attr('href'), \$(this).data(), false);
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('click', '#clean_channels', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    cleanM3UData();
                    \$(\"#save_channels\").addClass(\"hidden\");
                    \$(\"#clean_channels\").addClass(\"hidden\");
                    return false;
                });

                \$(document).on('click', '[id^=\"channel_item_\"] button[data-action=\"delete\"]', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    removeM3UItem(\$(this).closest(\"div[id^='channel_item_']\"));
                    return false;
                });

                \$(document).on(\"click\", \"[id^='channel_item_'] button[type='submit']\", function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    saveChannelItem(this);
                    return false;
                });

                \$(document).on(\"click\", \"#save_channels\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"[id^='channel_item_'] button[type='submit']\").trigger('click');
                    return false;
                });

                \$(document).on('click', '.clear_m3u_logo', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    var sendData = \$(this).data();
                    sendData['logo_container_id'] = \$(this).closest('div.m3u_logo_container').children('.fileupload').attr('id');
                    if (sendData['logo_id']) {
                        ajaxPostSend('";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/delete-logo', sendData);
                    } else {
                        deleteLogo(sendData);
                    }
                    return false;
                });


                window.onunload = function(){
                    var \$form = \$(\".channel_form\");
                    if( \$form.is(':visible') ) {
                        return \"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You are going to leave this page, some form data may be lost... Continue?"), "html", null, true);
        echo "\";
                    }
                };
                window.onbeforeunload = function(){
                    var \$form = \$(\".channel_form\");
                    if( \$form.is(':visible') ) {
                        return \"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("You are going to leave this page, some form data may be lost... Continue?"), "html", null, true);
        echo "\";
                    }
                };

            });
        }

        var loadM3UData = function(obj){
            if (obj.data && obj.data.channels) {//warning_message
                var auto_fill = obj.data.channels.length;
                if ( (obj.data.last_channel_number + obj.data.channels.length) >= 99999 ){
                    var text_message = \"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The maximum number of registered channel"), "html", null, true);
        echo " - \" + obj.data.last_channel_number + \". \";
                    if (obj.data.free_number_exists) {
                        var free_number = 99999 - obj.data.last_channel_number;
                        if ( free_number < auto_fill && free_number > 0) {
                            auto_fill = free_number;
                        } else if(free_number <= 0) {
                            auto_fill = 0
                        }

                        text_message += \"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("But in the channel list exist skipped numbers"), "html", null, true);
        echo ". \";
                        text_message += auto_fill + \" ";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("channel numbers filled in automatically"), "html", null, true);
        echo ". \";
                        text_message += \"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Rest of numbers must be filled manually"), "html", null, true);
        echo ".\";
                    } else {
                        text_message += \"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No available numbers of channels"), "html", null, true);
        echo ". \";
                        text_message += \"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("To add more channels, you can delete the unwanted channels in the channel list"), "html", null, true);
        echo ". \";
                    }

                    \$(\"#warning_message\").text(text_message);
                    \$(\"#warning_message\").closest('.row').slideDown(\"300\");
                }
                var free_number_exists = obj.data.free_number_exists,
                    last_channel_number = parseInt(obj.data.last_channel_number, 10);
                \$.each(obj.data.channels, function(i){
                    var item = this;
                    item['item_number'] = i;
                    item['number'] = (free_number_exists && i < auto_fill) ? last_channel_number + i + 1: '';
                    item['logo_name'] = '';
                    if (item['logo'] != '') {
                        item['logo_name'] = item['logo'].split('/').pop();
                        if (item['logo'].search(/^(http|https)?:\\/\\//ig) == -1) {
                            item['logo'] = '';
                        }
                    }
                    \$('#channel-template').tmpl(item).appendTo('#channels_container');
                    initIconUploader(\"#m3u_logo_\" + item['item_number']);
                });
                \$('[id^=\"channel_s2_\"]').select2(select2Opt);
                var n = \$('#channels_container').children().length;
                while ( n-- ){
                    var cItem = \$('#channels_container').children().filter(':not(:visible)').get(0);
                    \$(cItem).slideDown(100);
                }
            }
        };

        var loadM3UDataError = function(obj){
            JSErrorModalBox(obj);
        };

        var cleanM3UData = function(){
            \$('#channels_container').children().each(function(i){
                \$(this).find('.clear_m3u_logo').trigger('click');
                \$(this).remove();
            });
            if (\$('#channels_container').children().length == 0) {
                \$(\"#warning_message\").closest('.row').slideUp(\"100\", function(){ \$(\"#warning_message\").text('');} );
            }
        };

        var removeM3UItem = function(obj){
            \$(obj).slideUp(100, function(){
                \$(this).find('.clear_m3u_logo').trigger('click');
                \$(this).remove();
                if (\$('#channels_container').children().length == 0) {
                    \$(\"#warning_message\").closest('.row').slideUp(\"100\", function(){ \$(\"#warning_message\").text('');} );
                }
            });
        };

        var saveChannelItem = function(obj){
            conf.form = '#' + \$(obj).closest('form').attr('id');
            conf.itemId = \$(obj).closest('[id^=\"channel_item_\"]').attr('id');
            if (\$(conf.form).isValid({}, conf, true)) {
                conf.onSuccess();
            } else {
                conf.onError();
            }
            return false;
        };

        var saveM3UItem = function(obj){
            JSSuccessModalBox(obj);
            removeM3UItem(\"#\"+obj.item_id);
        };

        var saveM3UItemError = function(obj){
            JSErrorModalBox(obj);
            if (!\$(\"#\" + obj.item_id).children('div.box-content').hasClass('m3u_item_error')) {
                \$(\"#\" + obj.item_id).children('div.box-content').addClass('m3u_item_error')
            }
        };

        var deleteLogo = function(data){
            var logo_container_id = '#' + data.logo_container_id,
                form_id = \"#\" + \$(logo_container_id).closest('form').attr('id');
            \$(logo_container_id).children(\"input[type='hidden']\").val('');
            \$(logo_container_id).parent().find('img').attr('src', '');
            num = sendedPic.indexOf(form_id);
            if (num != -1) {
                sendedPic.slice(num, 1);
            }
        };

        document.addEventListener(\"DOMContentLoaded\", yelp, false);
";
    }

    public function getTemplateName()
    {
        return "default/TvChannels/m3u_import/m3u_import.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 227,  301 => 226,  296 => 224,  292 => 223,  288 => 222,  276 => 213,  262 => 202,  253 => 196,  237 => 185,  187 => 138,  117 => 73,  87 => 45,  80 => 40,  64 => 27,  58 => 24,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/m3u_import/m3u_import.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/m3u_import/m3u_import.js.twig");
    }
}
