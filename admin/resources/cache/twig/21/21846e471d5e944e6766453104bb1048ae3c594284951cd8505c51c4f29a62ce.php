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

/* default/basic_templates/file-uploader-scripts.twig */
class __TwigTemplate_cb2d7ce5a1cfb0cf06038b2d77665b3e418312a53b92fb2ef4d87b329f49ee38 extends \Twig\Template
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
        <!-- Include all neccesary scripts -->
        <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/load-image.all.min.js\"></script>
        <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/canvas-to-blob.min.js\"></script>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/jquery.blueimp-gallery.min.js\"></script>
        <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/jquery.iframe-transport.js\"></script>
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/jquery.fileupload.js\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/jquery.fileupload-process.js\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/jquery.fileupload-image.js\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/jquery.fileupload-validate.js\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/jquery.fileupload-ui.js\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/jquery.fileupload-jquery-ui.js\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js\"></script>


<!-- The template to display files available for upload -->
<script id=\"template-upload-base\" type=\"text/x-tmpl\">
[% for (var i=0, file; file=o.files[i]; i++) { %]
    <tr class=\"template-upload fade\">
        <td>
            <span class=\"preview\"></span>
        </td>
        <td>
            <p class=\"name\">[%=file.name%]</p>
            <strong class=\"error\"></strong>
        </td>
        <td>
            <p class=\"size\">Processing...</p>
            <div class=\"progress\"></div>
        </td>
        <td>
            [% if (!i && !o.options.autoUpload) { %]
                <button class=\"start\" disabled>Start</button>
            [% } %]
            [% if (!i) { %]
                <button class=\"cancel\">Cancel</button>
            [% } %]
        </td>
    </tr>
[% } %]
</script>

<!-- The template to display files available for download -->
<script id=\"template-download\" type=\"text/x-tmpl\">
[% for (var i=0, file; file=o.files[i]; i++) { %]
    <tr class=\"template-download fade\">
        <td>
            <span class=\"preview\">
                [% if (file.thumbnailUrl) { %]
                    <a href=\"[%=file.url%]\" title=\"[%=file.name%]\" download=\"[%=file.name%]\" data-gallery><img src=\"[%=file.thumbnailUrl%]\"></a>
                [% } %]
            </span>
        </td>
        <td>
            <p class=\"name\">
                <a href=\"[%=file.url%]\" title=\"[%=file.name%]\" download=\"[%=file.name%]\" [%=file.thumbnailUrl?'data-gallery':''%]>[%=file.name%]</a>
            </p>
            [% if (file.error) { %]
                <div><span class=\"error\">Error</span> [%=file.error%]</div>
            [% } %]
        </td>
        <td>
            <span class=\"size\">[%=o.formatFileSize(file.size)%]</span>
        </td>
        <td>
            <button class=\"delete\" data-type=\"[%=file.deleteType%]\" data-url=\"[%=file.deleteUrl%]\"[% if (file.deleteWithCredentials) { %] data-xhr-fields='{\"withCredentials\":true}'[% } %]>Delete</button>
            <input type=\"checkbox\" name=\"delete\" value=\"1\" class=\"toggle\">
        </td>
    </tr>
[% } %]
</script>

<script type=\"text/javascript\" defer=\"defer\">
    function loadFileUploadScripts(callbackFileUpload){
        if (!\$.fn.fileupload) {
            return false;
        } else  if (typeof (callbackFileUpload) === \"function\") {
            \$.widget('blueimp.fileupload', \$.blueimp.fileupload, {
                options: {
                    messages: {
                        acceptFileTypes: \"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("File type not allowed"), "html", null, true);
        echo "\",
                        maxFileSize:\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("File is too large"), "html", null, true);
        echo "\",
                        maxNumberOfFiles:\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Maximum number of files exceeded"), "html", null, true);
        echo "\",
                        minFileSize:\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("File is too small"), "html", null, true);
        echo "\",
                        unknownError:\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unknown error"), "html", null, true);
        echo "\",
                        uploadedBytes:\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Uploaded bytes exceed file size"), "html", null, true);
        echo "\"
                    },
                    fail: function (e, data) {
                        console.log('fileuploadfail');
                        \$.each(data.files, function (index) {
                            var error = this.error;
                            if (error) {
                                JSErrorModalBox({msg: error});
                            }
                        });
                    },
                    change: function (e, data) {
                        console.log('fileuploadchange');
                        \$.each(data.files, function (index) {
                            var error = this.error;
                            if (error) {
                                JSErrorModalBox({msg: error});
                            }
                        });
                    },
                    processfail: function (e, data) {
                        console.log('fileuploadsubmit');
                        \$.each(data.files, function (index) {
                            var error = this.error;
                            if (error) {
                                JSErrorModalBox({msg: error});
                            }
                        });
                    }
                }
            });
            return callbackFileUpload();
        }
    }
</script>";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/file-uploader-scripts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 86,  161 => 85,  157 => 84,  153 => 83,  149 => 82,  145 => 81,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/file-uploader-scripts.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/file-uploader-scripts.twig");
    }
}
