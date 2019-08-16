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

/* default/basic_templates/frgFooter/frgFooter.twig */
class __TwigTemplate_de536841ea3c820466d467b2431fa99ee673c840d6d2c1dea4e4fe028213ecf3 extends \Twig\Template
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
        echo "
<footer>
    <script type=\"text/javascript\" defer=\"defer\">
        var words = [];
        var lang = \$.cookies.get('language');
        lang = lang ? lang.substr(0, 2): 'en';
        \$.ajax({
            type: \"GET\",
            url: \"./js/js_translate.php\",
            async: false,
            data: {language: lang},
            dataType: \"json\",
            success: function(data){
                for (var key in data){
                    words[key] = data[key];
                }
            }
        });

        \$('#datatable-1').on( 'draw.dt', function () {
            \$('#wrapper').css({minHeight: heightCalculate()});
        } );
        if (typeof (ver) != 'undefined') {
            \$(\"#portal_version_srt\").text(\" v \" + ver);
        }

        ";
        // line 28
        if (($this->getAttribute(($context["app"] ?? null), "new_version", [], "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "new_version", [], "array"))) {
            // line 29
            echo "        var update = {
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "new_version", [], "array"));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 31
                echo "            '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "'";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ",";
                }
                // line 32
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        };

        if (typeof(update.version) != 'undefined' && ver != update.version) {
            \$(\"#portal_version_srt\").after('<span id=\"new_version\" class=\"text-default\"><a class=\"text-primary\" href=\"' + update.url + '\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Available new version"), "html", null, true);
            echo " ' + update.version + '</a></span>').after(' - ');
        }
        ";
        }
        // line 39
        echo "
        \$(document).on('click', '#contact_support', function (e) {
            e.stopPropagation();
            e.preventDefault();
            footer_modal(\$(this));
            return false
        });

        function footer_modal(obj){
            var modalContainer;
            if (\$('#modalbox_clone').length) {
                modalContainer = \$('#modalbox_clone');
            } else {
                modalContainer = \$('#modalbox').clone(true);
                modalContainer.attr('id', 'modalbox_clone');
                \$('#modalbox').after(modalContainer);
            }
            modalContainer.find('.modal-header-name span').text('";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Technical questions form"), "html", null, true);
        echo "');
            modalContainer.find('.devoops-modal-inner').html('\\n\\
                <div class=\"box-content\">\\n\\
                     <iframe src=\"//www.infomir.eu/eng/support/form/stalker.php?lang=";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", []), "html", null, true);
        echo "\" width=\"734\" height=\"400\" frameborder=\"0\" allowtransparency=\"true\"></iframe>  \\n\\
                </div>');
            modalContainer.find('.devoops-modal-bottom').empty();
            modalContainer.show();
            obj.closest('div.open').removeClass('open');
        }

        function topModalMsg(obj){
            if (!obj || !obj.data) {
                obj['data'] = [];
            }
            var certificateCheck = localStorage.getItem('certificateCheck'), showed, cTime = new Date();
            if (!certificateCheck) {
                certificateCheck = {
                    showed: {},
                    closed: true,
                    timestamp: 0
                };
            } else {
                certificateCheck = \$.parseJSON(certificateCheck);
            }
            showed = certificateCheck.showed;
            for (var i in obj.data) {
                if (obj.data[i].expires_30_days && !showed[obj.data[i].id] && (obj.data[i].cert_end * 1000) >= cTime.getTime() ) {
                    showed[obj.data[i].id] = false;
                    certificateCheck.closed = false;
                }
            }

            certificateCheck.showed = showed;
            certificateCheck.timestamp = cTime.getTime();
            localStorage.setItem('certificateCheck', JSON.stringify(certificateCheck));
            if (!certificateCheck.closed) {
                createCertModal();
            }
        }

        function createCertModal(){
            \$('body').prepend(\"\\n\\
                    <div id='certificate_warn' class='box-content ' style='z-index: 100000; position: fixed; top: 0; left: 0; width: 100%;'>\\n\\
                        <div class='row'>\\n\\
                            <div class='col-xs-6 col-xs-offset-3'>\\n\\
                                <h4 class='text-center'>\\n\\
                                    <img src='";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/warning-icon.png'/>\\n\\
                                    &nbsp;&nbsp;\\n\\
                                    <strong>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Reminder: One of your certificates is expiring"), "html", null, true);
        echo "</strong>\\n\\
                                    &nbsp;&nbsp;\\n\\
                                    <small><a href='";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/certificates/current' class='txt-primary'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Details"), "html", null, true);
        echo "</a></small>\\n\\
                                </h4>\\n\\
                            </div>\\n\\
                            <div id='warn_close' class='col-xs-3 txt-center pull-right'>\\n\\
                                <i class='fa fa-times'></i>\\n\\
                            </div>\\n\\
                        </div>\\n\\
                    </div>\");

            \$(\"#certificate_warn\").on(\"click\", \"#warn_close i\", function(){
                var certificateCheck = localStorage.getItem('certificateCheck'), cTime = new Date();
                if (!certificateCheck) {
                    certificateCheck = {
                        showed: {},
                        closed: false,
                        timestamp: 0
                    };
                } else {
                    certificateCheck = \$.parseJSON(certificateCheck);
                }

                for (var i in certificateCheck.showed) {
                    certificateCheck.showed[i] = true;
                }
                certificateCheck.closed = true;
                certificateCheck.timestamp = cTime.getTime();
                localStorage.setItem('certificateCheck', JSON.stringify(certificateCheck));
                \$(\"#certificate_warn\").remove();
            });
        }

        \$(document).ready(function(){

            ";
        // line 139
        if (( !$this->getAttribute(($context["app"] ?? null), "certificate_server_health_check", [], "any", true, true) || $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "certificate_server_health_check", [], "array"))) {
            // line 140
            echo "
            serverHealthCheckFunc();
            var serverHealthCheck = setTimeout(function () {
                serverHealthCheckFunc();
            }, 3600000);

            ";
        }
        // line 147
        echo "
            var certificateCheck = localStorage.getItem('certificateCheck');
            if (!certificateCheck) {
                certificateCheck = {
                    showed: {},
                    closed: false,
                    timestamp: 0
                };
            } else {
                certificateCheck = \$.parseJSON(certificateCheck);
            }
            var cTime = new Date();
            if ((cTime.getTime() - certificateCheck.timestamp) > 86400000 ) {
                ajaxPostSend('";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/certificates/current-list-json', {notty_check: 1}, false, false, true);
            } else if (!certificateCheck.closed){
                createCertModal();
            }

            ";
        // line 165
        if ($this->getAttribute(($context["app"] ?? null), "npmVersionError", [], "any", true, true)) {
            // line 166
            echo "
            var npmVersionError = localStorage.getItem('npm-version-error');
            if (!npmVersionError) {
                npmVersionError = {
                    timescounter: 0,
                    closed: false,
                    timestamp: 0
                };
            } else {
                npmVersionError = \$.parseJSON(npmVersionError);
            }
            if (!cTime) {
                var cTime = new Date();
            }
            if ((cTime.getTime() - npmVersionError.timestamp) > 86400000 || (!npmVersionError.closed && npmVersionError.timescounter <= 20)){
                npmVersionAlert();
            }

            ";
        }
        // line 185
        echo "
            ";
        // line 186
        if (($this->getAttribute(($context["app"] ?? null), "userlogin", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "userlogin", [], "array") == "admin"))) {
            // line 187
            echo "
            var notiFeedObj = \$(\"#index_note_list\").parent().notiFeed({
                ajax_link: \"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/index/note-list\",
                title: \"<label>";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Notifications"), "html", null, true);
            echo "</label>\",
                linkText: \"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Read more"), "html", null, true);
            echo "\",
                emptyListText: \"<div>";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No new notifications"), "html", null, true);
            echo "</div>\",
                titleDelete  : \"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete notification"), "html", null, true);
            echo "\"
/* Remove popup for notification
                openFeedItemCallback: function(feedItemId){
                    JScloseModalBox();
                    if (typeof (feedItemId) != 'undefined') {
                        \$(\"#modalbox .modal-header-name span\").text(notiFeedObj.feedList[feedItemId].title);
                        \$(\"#modalbox .devoops-modal-inner\").html(\"<div class='col-xs-12'>\" + notiFeedObj.feedList[feedItemId].description + \"</div>\");
                        \$(\"#modalbox .devoops-modal-bottom\").html(\"<div class='col-xs-12'>\" +
                            '<a id=\"feed_remind\" href=\"' + notiFeedObj.defaults.set_remind_link + '\" class=\"btn btn-default col-sm-3 col-sm-offset-1 no-padding-left no-padding-right pull-right\" data-feeditemid=\"'+ feedItemId +'\">";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Remind me later"), "html", null, true);
            echo "</a>'+
                            '<button type=\"reset\" id=\"feed_close\" class=\"btn btn-default col-sm-3 col-sm-offset-1 no-padding-left no-padding-right pull-right\">";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Close"), "html", null, true);
            echo "</button>'+
                            \"</div>\");
                        \$(\"#modalbox\").show();
                        notiFeedObj.setReadedItem(feedItemId);
                    }
                }*/
            });

            \$(\"#index_note_list\").on('click', function (e) {
                notiFeedObj.setReadedAll();
            });
                    /*\$(document).on('click', \"#feed_remind\", function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        var sendData = \$(this).data();
                        ajaxPostSend(\$(this).attr('href'), sendData, false, false);
                        JScloseModalBox();
                        return false;
                    });*/


            ";
        }
        // line 224
        echo "        });

        ";
        // line 226
        if (( !$this->getAttribute(($context["app"] ?? null), "certificate_server_health_check", [], "any", true, true) || $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "certificate_server_health_check", [], "array"))) {
            // line 227
            echo "        var serverHealthCheckFunc = function(){
            var curTime = new Date().getTime(), lastCheck = parseInt(localStorage.getItem('check_health_time'), 10);
            if (isNaN(lastCheck) || (curTime - lastCheck) > 3600000) {
                ajaxPostSend('";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/index/check-certificate-server-health', {check_health_time: isNaN(lastCheck)? 0: curTime});
                localStorage.setItem('check_health_time', curTime);
            }
        };

        var healthServerAlert = function(){

            var zIndex = 200000;

            \$(\"div[id^='server_error_warn_']\").each(function(){
                var cZIndex = \$(this).css('zIndex');
                if (zIndex <= cZIndex) {
                    zIndex = cZIndex + 1;
                }
            });
            var errorTmplObj = {
                zIndex: zIndex,
                alertMsg: \"";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("There is no connection to the server of certificates. The operation of some client's applications and devices can be suspended."), "html", null, true);
            echo "\",
                alertLink: {
                    link: \"http://www.infomir.eu/";
            // line 249
            echo ((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", [], "array") == "ru")) ? ("rus") : ("eng"));
            echo "/payments/\",
                    text: \"";
            // line 250
            echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("More information here"), "html", null, true);
            echo "\"
                }
            };

            if (!\$.isFunction(\$.tmpl)){
                \$.ajax({
                    url: \"";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
            echo "/js/jquery.tmpl.min.js\",
                    dataType: \"script\",
                    cache: true,
                    async: false
                });
            }

            \$(\"#server_error_warn_tmpl\").tmpl(errorTmplObj).prependTo('body');

            \$(document).on(\"click\", \"#warn_close_\"+zIndex+\" i\", function(){
                \$(\"#server_error_warn_\"+ zIndex ).remove();
            });
        };

        ";
        }
        // line 271
        echo "
        var npmVersionAlert = function(){

            var zIndex = 200000;

            \$(\"div[id^='server_error_warn_']\").each(function(){
                var cZIndex = \$(this).css('zIndex');
                if (zIndex <= cZIndex) {
                    zIndex = cZIndex + 1;
                }
            });
            var link = {
                ru: \"https://wiki.infomir.eu/rus/ministra-tv-platform/administrativnaya-panel/priloyoeniya/priloyoeniya-smart-launcher/kak-ustanovit-priloyoenie-smart-launcher\",
                en: \"https://wiki.infomir.eu/eng/ministra-tv-platform/administrative-panel/applications/smart-launcher-apps/how-to-install-smart-launcher-app\"
            };

            var errorTmplObj = {
                zIndex: zIndex,
                alertMsg: \"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The npm version does not match the required one. For correct operation, install npm version 2.15.11"), "html", null, true);
        echo "\",
                alertLink: {
                    link: link[\"";
        // line 291
        echo ((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", [], "array") == "ru")) ? ("ru") : ("en"));
        echo "\"],
                    text: \"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("More information here"), "html", null, true);
        echo "\"
                }
            };

            if (!\$.isFunction(\$.tmpl)){
                \$.ajax({
                    url: \"";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/js/jquery.tmpl.min.js\",
                    dataType: \"script\",
                    cache: true,
                    async: false
                });
            }

            \$(\"#server_error_warn_tmpl\").tmpl(errorTmplObj).prependTo('body');

            \$(document).on(\"click\", \"#warn_close_\"+zIndex+\" i\", function(){
                var npmVersionError = localStorage.getItem('npm-version-error'), cTime = new Date();
                if (!npmVersionError) {
                    npmVersionError = {
                        timescounter: 0,
                        closed: false,
                        timestamp: 0
                    };
                } else {
                    npmVersionError = \$.parseJSON(npmVersionError);
                }

                npmVersionError.timescounter++;
                npmVersionError.closed = true;
                npmVersionError.timestamp = cTime.getTime();
                localStorage.setItem('npm-version-error', JSON.stringify(npmVersionError));
                \$(\"#server_error_warn_\"+ zIndex ).remove();
            });
        };

    </script>

    <script type=\"text/template\" id=\"server_error_warn_tmpl\">
        <div id='server_error_warn_\${zIndex}' class='box-content ' style='z-index: \${zIndex}; position: fixed; top: 0; left: 0; width: 100%;'>
            <div class='row'>
                <div class='col-xs-6 col-xs-offset-3'>
                    <h4 class='text-center'>
                        <img src='";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/warning-icon.png'/>
                        &nbsp;&nbsp;
                        <strong>\${alertMsg}</strong>
                        &nbsp;&nbsp;
                        ";
        // line 338
        echo "{{if alertLink}}";
        echo "
                        <br>
                        <small><a href='\${alertLink.link}' target=\"_blank\" class='txt-primary'>\${alertLink.text}</a></small>
                        ";
        // line 341
        echo "{{/if}}";
        echo "
                    </h4>
                </div>
                <div id='warn_close_\${zIndex}' class='col-xs-3 txt-center pull-right'>
                    <i class='fa fa-times'></i>
                </div>
            </div>
        </div>
    </script>

</footer>
";
    }

    public function getTemplateName()
    {
        return "default/basic_templates/frgFooter/frgFooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 341,  506 => 338,  499 => 334,  460 => 298,  451 => 292,  447 => 291,  442 => 289,  422 => 271,  404 => 256,  395 => 250,  391 => 249,  386 => 247,  366 => 230,  361 => 227,  359 => 226,  355 => 224,  330 => 202,  326 => 201,  315 => 193,  311 => 192,  307 => 191,  303 => 190,  299 => 189,  295 => 187,  293 => 186,  290 => 185,  269 => 166,  267 => 165,  259 => 160,  244 => 147,  235 => 140,  233 => 139,  195 => 106,  190 => 104,  185 => 102,  139 => 59,  133 => 56,  114 => 39,  108 => 36,  103 => 33,  89 => 32,  80 => 31,  63 => 30,  60 => 29,  58 => 28,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/basic_templates/frgFooter/frgFooter.twig", "/var/www/html/stalker_portal/admin/resources/views/default/basic_templates/frgFooter/frgFooter.twig");
    }
}
