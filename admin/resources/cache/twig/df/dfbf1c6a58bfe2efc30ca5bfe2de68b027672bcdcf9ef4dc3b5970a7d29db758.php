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

/* default/NewVideoClub/add_video/add_video_step_3.js.twig */
class __TwigTemplate_23b93365f2aa3f5b0c749ec6e70a6fdb99d80b2df6d62468752e0b8ed1299b9c extends \Twig\Template
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
        echo "function initFileUploader(){
    \$('#cover_container, div[id^=\"video_episodes_\"]').fileupload({
        url: '";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-cover',
        type: 'POST',
        autoUpload: false,
        multipart: true,
        multiple: true,
        singleFileUploads: true,
        limitMultiFileUploads: 10,
        acceptFileTypes: /(\\.|\\/)(jpe?g|png)\$/i,
        maxFileSize: 1000000,
        maxNumberOfFiles: 10
    }).bind('fileuploadadd', function (e, data) {
        if (e.currentTarget.id.search('video_episodes_') == -1){
            \$(this).fileupload(
                    'option',
                    'previewMaxWidth',
                    '484px'
            );
            \$(this).fileupload(
                    'option',
                    'previewMaxHeight',
                    '363px'
            );
        } else {
            \$(this).fileupload(
                    'option',
                    'previewMaxWidth',
                    '101px'
            );
            \$(this).fileupload(
                    'option',
                    'previewMaxHeight',
                    '68px'
            );
        }
    }).bind('fileuploadadded', function (e, data) {
        var container, img, params = {}, currentFile, id;
        container = e.currentTarget;
        id = container.id.search('video_episodes_') == -1 ? 0: parseInt(container.id.replace(/[^\\d]*/ig, ''), 10);
        currentFile = data.files[0];
        img = \$(container).next('img');

        if (img.attr('src') || \$(container).attr('qq-file-id')) {
            img = false;
            \$(\"#cover_container, div[id^='video_episodes_']\").each(function(){
                if (!\$(this).next('img').attr('src') && !\$(this).attr('qq-file-id') ) {
                    id = this.id.search('video_episodes_') == -1 ? 0: parseInt(this.id.replace(/[^\\d]*/ig, ''), 10);
                    \$(this).attr('qq-file-id', id);
                    params = {
                        id: \$(this).data('id'),
                        file_num: ''+\$(this).data('file_num'),
                        video_id: (\$(\"#form_id\").val() ? \$(\"#form_id\").val() : 'new')
                    };
                    img = \$(this).next('img');
                    return false;
                }
            });
            if (img === false) {
                return false;
            }
        } else {
            \$(container).attr('qq-file-id', id);
            params = {
                id: \$(container).data('id'),
                file_num: ''+\$(container).data('file_num'),
                video_id: (\$(\"#form_id\").val() ? \$(\"#form_id\").val() : 'new')
            };
        }

        if (typeof(data.formData) == 'undefined') {
            data.formData = {};
        }

        data.formData = params;

        img.attr('src', currentFile.preview.toDataURL(currentFile.type));
        if (!img.is(':visible')) {
            img.show();
        }
        pendingList.push(data);
    }).bind('fileuploadalways', function (e, data) {
        if (typeof(data.progressWorkTimer) != \"undefined\") {
            window.clearInterval(data.progressWorkTimer);
        }

        var name = '';
        if (typeof(data.files) != \"undefined\" && data.files.length) {
            name = \"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Image"), "html", null, true);
        echo " \" + data.files[0].name;
        }

        var progress_id = ( typeof(data.progress_id) != \"undefined\" ? data.progress_id: 'qq-progress-bar-' + data.formData.file_num);

        \$('#' + progress_id).attr('aria-valuenow', 100);
        \$('#' + progress_id).closest('div.qq-progress-bar-container-selector').prev('span').html(name + ' ' + \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("saving"), "html", null, true);
        echo "\");
        \$('#' + progress_id + \" > div\").css(\"width\", \"100%\");
        var file_num = '' + data.formData.file_num;
        if (typeof (pendingList) != \"undefined\" && pendingList instanceof Array && pendingList.length && file_num) {
            \$.each(pendingList, function (i) {
                if (file_num && this.formData && this.formData.file_num && this.formData.file_num == file_num) {
                    pendingList.splice(i,1);
                }
            });
        }
    }).bind('fileuploadprogress', function (e, data) {
        var name = '';
        if (typeof(data.files) != \"undefined\" && data.files.length) {
            name = \"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Image"), "html", null, true);
        echo " \" + data.files[0].name;
        }
        var value_now = Math.round(data.loaded / data.total * 100);
        var progress = '\"' + name + '\" '+\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("uploading"), "html", null, true);
        echo "\"+'...  ' + value_now + '%';
        var progress_id = ( typeof(data.progress_id) != \"undefined\" ? data.progress_id: 'qq-progress-bar-' + data.formData.file_num);
        if (data.loaded < data.total) {
            \$('#' + progress_id).attr('aria-valuenow', value_now);
            \$('#' + progress_id).closest('div.qq-progress-bar-container-selector').prev('span').html(progress);
            \$('#' + progress_id + \" > div\").css(\"width\", value_now + \"%\");
        } else {
            \$('#' + progress_id).attr('aria-valuenow', 100);
            \$('#' + progress_id).closest('div.qq-progress-bar-container-selector').prev('span').html(name + ' ' + \"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("saving"), "html", null, true);
        echo "\");
            \$('#' + progress_id + \" > div\").css(\"width\", \"100%\");
        }
    }).bind('fileuploaddone', function (e, data) {
        var result = data._response.result || false;

        if (result && result.success && result.upload_id) {
            if (result.file_num == 0) {
                \$(\"#form_cover_id\").val(result.upload_id);
            }
        } else {
            return false;
        }
        return true;
    });
    return true;
}

function yelp_step_3() {

    \$.validate(conf);

    if (typeof (loadFileUploadScripts) != 'function' || !loadFileUploadScripts(initFileUploader)){
        JSErrorModalBox({msg: \"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cannot load File Upload plugin"), "html", null, true);
        echo "\"})
    }

    \$(document).on(\"click\", \".clear_video_episodes, #delete_cover\", function (e) {
        e.stopPropagation();
        e.preventDefault();

        if( \$(this).attr(\"id\") == \"delete_cover\" && !confirm(\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete cover"), "html", null, true);
        echo "?\") ){
            return;
        }

        var img, container;
        if (\$(this).hasClass('clear_video_episodes')) {
            img = \$(this).prev('img');
            container = \$(this).closest('li').find(\"div[id^='video_episodes_']\").attr('id');
        } else {
            img = \$(\"#cover_container\").next('img');
            container = \"cover_container\";
        }
        img.hide(100, function () {
            img.attr('src', '');
        });
        img.css('display', 'inline');

        var id = \$('#' + container).attr('qq-file-id');
        if (typeof(id) != 'undefined') {
            var file_num = ''+\$('#' + container).data('file_num');
            if (typeof (pendingList) != \"undefined\" && pendingList instanceof Array && pendingList.length && file_num) {
                \$.each(pendingList, function (i) {
                    if (file_num && this.formData && this.formData.file_num && this.formData.file_num == file_num) {
                        this.abort();
                        pendingList.splice(i,1);
                    }
                });
            }
        } else if(\$(\"#form_id\").val()){
            ajaxPostSend('";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/delete-cover', {id: \$(\"#\" + container).data('id'), container: container}, false);
        }
        \$('#' + container).removeAttr('qq-file-id');
        \$(this).hide(50, function(){
            var _this = this;
            setTimeout(function(){
                \$(_this).removeAttr('style');
            }, 1000);
        });
    });
}

var deleteCover = function (data) {
    if (typeof (data.id)) {
        \$(\"#\" + data.id).data('id', 'new');
    }
    JSSuccessModalBox(data);
};

var deleteCoverError = function (data) {
    JSErrorModalBox(data);
};";
    }

    public function getTemplateName()
    {
        return "default/NewVideoClub/add_video/add_video_step_3.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 178,  203 => 149,  193 => 142,  167 => 119,  156 => 111,  150 => 108,  134 => 95,  125 => 89,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/NewVideoClub/add_video/add_video_step_3.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/NewVideoClub/add_video/add_video_step_3.js.twig");
    }
}
