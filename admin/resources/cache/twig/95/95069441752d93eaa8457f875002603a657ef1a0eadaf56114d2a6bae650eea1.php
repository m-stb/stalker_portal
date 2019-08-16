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

/* default/ApplicationCatalog/smart_application_list/smart_application_list.js.twig */
class __TwigTemplate_78a5dd9e7e929e26f03faf3d9dc3309b611b9001b4ccdcf04a77f8823dbbb30c extends \Twig\Template
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
        var fileUploaderList = [];
        var messageStack = [], messageTimer;
        var conf = {
            form: '#form_',
            lang : '";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
            showHelpOnFocus : true,
            validateHiddenInputs: true,
            scrollToTopOnError: false,
            modules: 'jsconf',

            onSuccess: function () {
                var sendData = {};

                \$(this.form).find('input, select').filter(':not(disabled)').each(function () {
                    sendData[\$(this).attr('name')] = \$(this).is(':checkbox') ? (\$(this).is(':checked') ? 1 : 0) : \$(this).val();
                });
                \$.validate();
                \$(conf.form).get(0).reset();
                JScloseModalBox();
                JSshowModalBox();
                ajaxPostSend(\$(conf.form).attr('action'), sendData, false, false, true);
                return false;
            },

            onError: function () {
                return false;
            }
        };

        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        json.data[i] = rowDataPrepare(json.data[i]);
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-list-json\"
                    /*\"data\": function (d) {
                    }*/
                },
                \"language\": {
                    \"url\": \"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 51
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 52
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 54
        echo "                \"bFilter\": true,
                \"bPaginate\": true,
                \"lengthChange\": true,
                \"bInfo\": true,
                \"searchDelay\": 800,
                \"aoColumnDefs\": [
                    {className: \"action-menu\", \"targets\": [-1]},
                    {width: \"35%\", \"targets\": [-2]},
                    {\"searchable\": false, \"targets\": [0, 2, 3, 5, 7, -1]},
                    {\"sortable\": false, \"targets\": [0, 5, 6, -1]}
                ],
                \"fnRowCallback\": function (nRow, aData, iDisplayIndex) {
                    nRow.setAttribute('id', aData.RowOrder);  //Initialize row id for every row
                },
                \"createdRow\": function ( row, data, index ) {
                    if (!data.rerendered) {
                        var _this = this;
                        setTimeout(function(){
                            ajaxPostSend(_this.DataTable().ajax.url(), {id: data.id, curr_row: index}, false, false, true);
                            var curOption = {
                                ddMenuMaxHeight: 0,
                                ddMenuHeight: 0,
                                trParentOffset: 0
                            };
                            checkMenuItemPosition(row, curOption);
                        }, 200);
                    }
                },
                \"initComplete\": function(settings, json) {
                    \$(\"#datatable-1_filter input\").off( 'keyup.DT search.DT input.DT paste.DT cut.DT' );
                    \$(\"#datatable-1_filter input\").on( 'keyup.DT search.DT input.DT paste.DT cut.DT', debounce( settings.searchDelay, function(e) {
                        settings.oInstance.DataTable().search( this.value ).draw();
                    } ) );
                }
            }).prev('.dataTables_processing').hide('');
        }

        function yelp() {
            \$(document).ready(function () {

                LoadDataTablesScripts(TestTable1);

                messageTimer =  setInterval(function(){
                    if (messageStack.length != 0) {
                        var row = messageStack.shift();
                        if (typeof (window[row.action]) == 'function') {
                            window[row.action](row.data);
                        }
                    }
                }, 500);

                \$.ajax({
                    url: '";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/plugins/jquery-file-download/jquery.fileDownload.js',
                    dataType: 'script',
                    cache: true
                });

                \$.validate(conf);

                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = this;
                    \$(\"#modalbox\").data('complete', 0);
                    var sendData = \$(_this).data();
                    if (\$(_this).closest('tr[id^=\"dTRow_\"]').length != 0) {
                        sendData['curr_row'] = \$(_this).closest('tr[id^=\"dTRow_\"]').attr('id');
                    }

                    showModalBox();
                    var timer = setInterval(function(){
                        if ((\$(_this).attr('href').search('smart-application-version-install') != -1 ||
                                \$(_this).attr('href').search('smart-application-update') != -1 ||
                                \$(_this).attr('href').search('smart-application-check-update') != -1) && (!sendData.id || sendData.id != 'all')){
                            clearInterval(timer);
                            createIFrame('cometFrame', \$(_this).attr('href') + '?v=' + \$.random(10000000) + \"&\" + \$.param(sendData));
                        } else {
                            clearInterval(timer);
                            ajaxPostSend(\$(_this).attr('href'), sendData, false, false);
                        }
                    }, 10);

                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('click', \"#modalbox, #modalbox a.close-link, #modalbox a.close-link *\", function (e) {
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();
                    if (\$(\"#modalbox\").data('complete') && \$(\"#modalbox\").data('complete') == 1) {
                        closeModalBox();
                    } else {
                        for (i = 0; i < 3; i++) {
                            \$('#modalbox > div').fadeTo('slow', 0.5).fadeTo('slow', 1.0);
                        }
                    }
                    return false;
                });

                \$(document).on(\"click\", \"#add_apps\", function (e) {
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();

                    buildGetForm();

                    \$('#modalbox').show();

                    return false;
                });

                \$(document).on('click', \"#modalbox button[type='submit']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    conf.form = \"#\" + \$(\"#modalbox\").find('form').attr('id');

                    if (\$(conf.form).isValid({}, conf, true)) {
                        conf.onSuccess();
                    } else {
                        conf.onError();
                    }
                    return false;
                });

                \$(document).on('click', \"#modalbox button[type='reset']\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    \$('#modalbox').find('.modal-header-name span').removeClass('txt-danger');
                    JScloseModalBox();
                    return false;
                });

                \$(document).on('click', '#add_apps_back', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    var url = \$('#apps_url').val();
                    JScloseModalBox();
                    buildGetForm();
                    \$('#apps_url').val(url);
                    return false;
                });

                \$(document).on('click', 'a.smart-application-toggle-state', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    JScloseModalBox();
                    var sendData = \$(this).data();
                    if (!sendData['curr_row'] && \$(this).closest('tr[id^=\"dTRow_\"]').length != 0) {
                        sendData['curr_row'] = \"#\"+\$(this).closest('tr[id^=\"dTRow_\"]').attr('id');
                    }
                    \$(this).closest('.open').removeClass('open');
                    if (\$(this).data('type') != 'app' && \$(this).data('status') != '1') {
                        \$('#modalbox').find('.modal-header-name span').addClass('txt-danger').text('";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Warning"), "html", null, true);
        echo "' + '!');
                        \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_reset_all_body\").text());
                        \$('#modalbox .devoops-modal-inner span').text(\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("This is system apps. Disabling this application can lead to failures in other applications. Do really want deactivate this application?"), "html", null, true);
        echo "\")
                        \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_reset_all_buttons\").text());
                        \$(\"#reset_all_apps_btn\").text(\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Deactivate"), "html", null, true);
        echo "\").addClass('main_ajax').attr(\"href\", \$(this).attr('href')).data(sendData);
                        \$('#modalbox').show();
                    } else {
                        ajaxPostSend(\$(this).attr('href'), sendData, false, false);
                    }
                    return false;
                });

                \$(\"#modalbox\").on('click', \"#reset_all_apps_btn\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = this;
                    \$(\"#modalbox\").data('complete', 0);
                    var sendData = \$(_this).data();
                    if (\$(_this).attr(\"disabled\")) {
                        JSErrorModalBox({msg: \"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Action is not available"), "html", null, true);
        echo "\"});
                    } else {
                        showModalBox();
                        var timer = setInterval(function(){
                            if (\$(_this).hasClass('main_ajax')) {
                                clearInterval(timer);
                                ajaxPostSend(\$(_this).attr('href'), sendData);
                            }else if (\$(\"#reset_all_apps_btn\").length == 0 || !\$(\"#reset_all_apps_btn\").is(\":visible\")) {
                                clearInterval(timer);
                                createIFrame('cometFrame', \$(_this).attr('href') + '?v=' + \$.random(10000000) + \"&\" + \$.param(sendData));
                            }
                        }, 10);
                    }
                    \$(this).closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('click', '#download_list', function(e){
                    e.stopPropagation();
                    e.preventDefault();

                    \$.fileDownload(\"";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-download-list\", {
                        dialogOptions:{
                            modal: false
                        },
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        /*preparingMessageHtml: \"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wait. List of installed applications is generated"), "html", null, true);
        echo ".\",
                        failMessageHtml: \"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Failed. Some server error"), "html", null, true);
        echo ".\",*/
                        prepareCallback: function(){
                            JSshowModalBox('show');
                        },
                        successCallback: function (data) {
                            JSSuccessModalBox();
                            if (data.action && typeof(window[data.action]) == 'function') {
                                window[data.action](data);
                            }
                        },
                        failCallback: function(data, url) {
                            JSErrorModalBox(data);
                            if (data.action && typeof(window[data.action + 'Error']) == 'function') {
                                window[data.action + 'Error'](data);
                            }
                        }
                    });
                    return false;
                });

                \$(document).on('click', '#upload_list', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#modalbox .devoops-modal-header span\").text(\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Uploading of list of installed applications"), "html", null, true);
        echo "\");
                    \$(\"#modalbox .devoops-modal-inner\").html(\$(\"#modal_fileupload\").html());
                    \$(\"#modalbox .devoops-modal-inner\").append(\"<div id='upload_processing' class='upload_processing'><span></span></div>\");

                    \$(\"#modalbox .devoops-modal-bottom\").html(\$(\"#modal_fileupload_buttons\").html());
                    loadFileUploadScripts(function(){});
                    initFileUploader(\"";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-upload-list\");
                    \$(\"#modalbox\").data('complete', 1);
                    \$(\"#modalbox\").show();
                });

                \$(\"#modalbox\").on('click', '#fileupload_button_send', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    if (fileUploaderList && fileUploaderList.length) {
                        \$(\"#modalbox\").data('complete', 0);
                        \$(\"#upload_processing\").show();
                        fileUploaderList[0].submit();
                        \$(\"#modalbox button\").attr('disabled', 'disabled').addClass('disabled');
                    }
                });

                \$(\"#modalbox\").on('click', '#fileupload_button_reset', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    if (fileUploaderList && fileUploaderList.length) {
                        fileUploaderList.pop();
                    }
                    \$(\"#fileupload\").next('.fileupload-message').text('');
                });

                \$(\"#modalbox\").on('click', '#fileupload_button_cancel', function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    \$(\"#fileupload\").fileupload('destroy');
                    if (fileUploaderList && fileUploaderList.length) {
                        fileUploaderList.pop();
                    }
                    JScloseModalBox();
                });


                window.onunload = function(){
                    var \$modalbox = \$(\"#modalbox\");
                    if (\$modalbox.is(':visible') && \$modalbox.data('complete') == 0) {
                        return \"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Please wait till the operation complete, this can take some time"), "html", null, true);
        echo "\";
                    }
                };
                window.onbeforeunload = function(){
                    var \$modalbox = \$(\"#modalbox\");
                    if (\$modalbox.is(':visible') && \$modalbox.data('complete') == 0) {
                        return \"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Please wait till the operation complete, this can take some time"), "html", null, true);
        echo "\";
                    }
                };

            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

        var manageList = function (obj) {
            \$(\"#modalbox\").data('complete', 1);
            if (!obj.error) {
                JSSuccessModalBox(obj);
            } else {
                JSErrorModalBox(obj);
            }
            if (obj.id && obj.curr_row) {
                ajaxPostSend(\$('#datatable-1').DataTable().ajax.url(), {id: obj.id, curr_row: obj.curr_row}, false, false, true);
            } else {
                \$('#datatable-1').DataTable().ajax.reload();
            }
            cleanIframe();
        };

        var setModalMessage = function(msg){
            \$('#modalbox .devoops-modal-inner span').html(msg);
        };

        var setUploadMessage = function(data){
            msg =(data instanceof Object && data.msg) ? data.msg : data;
            \$('#upload_processing span').html(msg);
        };

        function closeModalBox() {
            \$(\"#modalbox\").hide();
            \$('#modalbox').find('.modal-header-name span').removeClass('txt-danger').empty();
            \$('#modalbox').find('.devoops-modal-inner').empty();
            \$('#modalbox').find('.devoops-modal-bottom').empty();
        }

        function showModalBox() {
            \$('#modalbox').find('.modal-header-name span').removeClass('txt-danger').text('";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Wait"), "html", null, true);
        echo "...');
            \$('#modalbox').find('.devoops-modal-inner').html('<span style=\"margin: 10px 20px;\">";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Request is being processed"), "html", null, true);
        echo "...</span>');
            \$('#modalbox').find('.devoops-modal-bottom').empty();
            \$(\"#modalbox\").show();
        }

        var manageListError = function (obj) {
            JSErrorModalBox(obj);
        };

        var errAction = function (obj) {
            JSErrorModalBox(typeof(obj) != 'undefined' ? obj: {});
        };

        var buildSaveFormError = function(obj){
            JSErrorModalBox(obj);
        };

        function buildGetForm() {
            \$(\"#modalbox\").hide();
            \$(\"#modalbox\").data('complete', 1);
            \$('#modalbox').find('.modal-header-name span').text('";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add application by package name (Step 1)"), "html", null, true);
        echo "');
            \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_get_form_body\").text());
            \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_get_form_buttons\").text());
            \$('#modalbox').show();
        }

        function buildSaveForm(data) {
            \$(\"#modalbox\").hide();
            \$(\"#modalbox\").data('complete', 1);
            \$('#modalbox').find('.modal-header-name span').text('";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add application by package name (Step 2)"), "html", null, true);
        echo "');
            \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_save_form_body\").text());
            \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_save_form_buttons\").text());
            fillModalForm(data.data);
            \$('#modalbox').show();
        }

        function buildModalByAlias(data){
            \$(\"#modalbox\").hide();
            \$(\"#modalbox\").data('complete', 1);
            if (data && data.data && data.data.length == 1) {
                var info = data.data[0];
                \$('#modalbox').find('.modal-header-name span').text('";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("About"), "html", null, true);
        echo "' + ' \"' + info.name + '\"');
                \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_info_body\").text());
                \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_info_buttons\").text());
                \$('#modalbox .devoops-modal-inner img').css('backgroundColor', \"#aaaaaa\");
                \$('#modalbox .devoops-modal-inner [data-item]').each(function(){
                    var field = \$(this).data('item');
                    if (info[field] && info[field].length != 0) {
                        if (info[field] instanceof Array || info[field] instanceof Object) {
                            for(var i in info[field]) {
                                \$(this).html(\$(this).html() + info[field][i]['alias'] + ' ' + info[field][i]['current_version'] + '<br>');
                            }
                        } else {
                            \$(this).text(\$(this).text() + info[field]);
                        }
                    } else {
                        \$(this).hide();
                    }
                });
                \$('#info_apps_action').data('id', info.id);
                if (!info.installed) {
                    \$('#info_apps_action').text(\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Install"), "html", null, true);
        echo "\");
                    if (info.available_version_conflicts && info.available_version_conflicts.length != 0) {
                        \$('#info_apps_action').prop('disabled', 'disabled').addClass('disabled');
                    }
                } else if (info.current_version != info.available_version){
                    \$('#info_apps_action').text(\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update"), "html", null, true);
        echo "\");
                    if (info.available_version_conflicts && info.available_version_conflicts.length != 0) {
                        \$('#info_apps_action').prop('disabled', 'disabled').addClass('disabled');
                    }
                } else {
                    \$('#info_apps_action').prop('disabled', 'disabled').addClass('disabled');
                    \$('#modalbox .devoops-modal-inner [data-item=\"available_version\"]').hide();
                }
                var icon = info.icon ? info.icon: \"img/no_image.png\";
                var backgroundColor = info.icon ? info.backgroundColor: \"#FFFFFF\";
                \$('#modalbox .devoops-modal-inner img').attr('src', icon).css({backgroundColor: backgroundColor});

                \$('#modalbox').show();
            }
        }

        var fillModalForm = function (data) {
            conf.form = \"#\" + \$(\"#modalbox\").find('form').attr('id');
            \$.validate();
            \$(conf.form).get(0).reset();
            if (data.repository && data.repository.url) {
                var regExp = new RegExp('\\\\.git\$', 'gi');
                \$('#apps_url').val(data.repository.url.replace(regExp, ''));
            }
            if (data.name) {
                \$('#apps_name').val(data.name).next('h5').text(data.name);
            }
            if (data.config) {
                if (data.config.type) {
                    \$('#apps_type').val(data.config.type).next('h5').text(data.config.type);
                }
                if (data.config.category) {
                    \$('#apps_category').val(data.config.category).next('h5').text(data.config.category);
                }
            }
            if (data.version) {
                \$('#apps_version').val(data.version).next('h5').text(data.version);
            }
            if (data.options) {
                \$('#apps_options').val(JSON.stringify(data.options));
            }
            if (data.author) {
                \$('#apps_author').val(data.author).next('h5').text(data.author);
            }
            if (data.dependencies) {
                \$('#apps_dependencies').text(Object.keys(data.dependencies).join(';\\n') + ';');
            }
            if (data.description) {
                \$('#apps_description').text(data.description);
            }
        };

        var changeStatus = function(obj){
            manageList(obj);
        };

        var changeStatusError = function(obj){
            JSErrorModalBox(obj);
        };

        function rowDataPrepare(item){
            var id = item.id;
            var icon = item.icon ? item.icon: \"img/preloader.gif\";
            var backgroundColor = item.icon ? item.backgroundColor: \"#FFFFFF\";
            var status = item.status;
            var current_version = item.current_version;

            item.icon = \"<img class='app_img' src='\" + icon + \"' style='background-color: \" + backgroundColor + \"'>\";
            item.name = '<a href=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-detail?id=' + id + '\">' + item.name + '</a>';
            if (!item.current_version) {
                item.current_version = \"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Undefined"), "html", null, true);
        echo "\"
            }

            if (!item.available_version){
                item.available_version = '...';
            }

            if (item.installed) { /* data-info = \"1\" */
                item.current_version += ' ' + (item.available_version != '...' && item.available_version != current_version ? '&nbsp;&nbsp;&nbsp;<a class=\"main_ajax no_context_menu\" id=\"update_app_'+ id + '\" href=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-update\"  data-id=\"' + id + '\"><span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update"), "html", null, true);
        echo " </span></a>' : '');
                item.status = item.status == 1 ? \"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Active"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Disabled"), "html", null, true);
        echo "\";
            } else { /*data-info='1'*/
                item.current_version = \"<a class='main_ajax no_context_menu' id='install_app_\"+ id +\"' href='";
        // line 522
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-version-install' data-id='\" + id + \"' >\\n\\
                                           <span> ";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Install"), "html", null, true);
        echo " </span>\\n\\
                                        </a>\";
                item.status = \"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Not installed"), "html", null, true);
        echo "\";
            }

            item.operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                    <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                        <i class='pull-right fa fa-cog'></i>\\n\\
                                    </a>\\n\\
                                    <ul class='dropdown-menu pull-right'>\\n\";
            if (!item.installed) { /* data-info='1'*/
                item.operations += \"<li>\\n\\
                                        <a class='main_ajax no_context_menu' id='install_app_\"+ id +\"' href='";
        // line 535
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-version-install' data-id='\" + id + \"'>\\n\\
                                            <span> ";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Install"), "html", null, true);
        echo " </span>\\n\\
                                        </a>\\n\\
                                    </li>\\n\";
            } else {
                item.operations += \"<li>\\n\\
                                        <a class='smart-application-toggle-state no_context_menu' href='";
        // line 541
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-toggle-state' data-type='\" + item.type + \"' data-id='\" + id + \"' data-status='\" + (status == '1' ? '0': '1') + \"'>\\n\\
                                            <span> \" + (status != 1 ? \"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Activate"), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Deactivate"), "html", null, true);
        echo "\") + \" </span>\\n\\
                                        </a>\\n\\
                                    </li>\\n\";
                if (status != 1) {
                    item.operations += \"<li>\\n\\
                                            <a class='main_ajax no_context_menu' href='";
        // line 547
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-delete' data-id='\" + id + \"'>\\n\\
                                                <span> ";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo " </span>\\n\\
                                            </a>\\n\\
                                        </li>\\n\";
                }
            }
            item.operations += \"<li>\\n\\
                                    <a class='main_ajax no_context_menu' id='check_update_app_\"+ id +\"' href='";
        // line 554
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-check-update' data-info = '1' data-id='\" + id + \"'>\\n\\
                                        <span> ";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Checking updates"), "html", null, true);
        echo " </span>\\n\\
                                    </a>\\n\\
                                </li>\\n\";
            if (item.installed && item.available_version != '...' && item.available_version != current_version) { /* data-info = '1'*/
                item.operations += \"<li>\\n\\
                                        <a class='main_ajax no_context_menu' id='update_app_\"+ id +\"' href='";
        // line 560
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-update'  data-id='\" + id + \"'>\\n\\
                                            <span> ";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Update"), "html", null, true);
        echo " </span>\\n\\
                                        </a>\\n\\
                                    </li>\\n\";
            }
            item.operations += \"<li>\\n\\
                                    <a class='main_ajax no_context_menu' href='";
        // line 566
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/smart-application-list-json' data-id='\" + id + \"' data-alias='\" + item.alias + \"' data-version='\"+ current_version +\"'>\\n\\
                                        <span> ";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Details"), "html", null, true);
        echo " </span>\\n\\
                                    </a>\\n\\
                                </li>\\n\\
                            </ul>\\n\\
                        </div>\";
            return item;
        }

        var oneRowRender = function(data){
            if (data.data && data.data.length == 1) {
                var newData = rowDataPrepare(data.data[0]);
                newData.rerendered = true;
                \$('#datatable-1').DataTable().row( data.curr_row ).invalidate(newData);
                \$('#datatable-1').dataTable().fnUpdate(newData, data.curr_row, null, false, false);
                var curOption = {
                    ddMenuMaxHeight: 0,
                    ddMenuHeight: 0,
                    trParentOffset: 0
                };
                checkMenuItemPosition(\"#\" + newData.RowOrder.replace(\"#\", ''), curOption);
            }
        };

        var resetAllWarning = function(data){
            JScloseModalBox();
            \$('#modalbox').find('.modal-header-name span').addClass('txt-danger').text('";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Warning"), "html", null, true);
        echo "' + '!');
            \$('#modalbox').find('.devoops-modal-inner').html(\$(\"#modal_reset_all_body\").text());
            \$('#modalbox').find('.devoops-modal-bottom').html(\$(\"#modal_reset_all_buttons\").text());

            if (data.data && data.data.length != 0 ) {
                var infoBlock = \$(\"<span class='col-md-12 txt-default'>";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The next apps has been installed manually and will be removed."), "html", null, true);
        echo "</span>\").prependTo('#modalbox .devoops-modal-inner div');
                for (var i in data.data) {
                    var infoBlock = \$(\"<span class='col-md-12 txt-danger'>\"+ data.data[i]['alias'] + \" ";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("current version"), "html", null, true);
        echo " \" + data.data[i]['current_version'] +\"</span>\").insertAfter(infoBlock);
                }
            }

            if (data.url_id && \$(\"#\" + data.url_id).length != 0) {
                \$(\"#reset_all_apps_btn\").prop('href', \$(\"#\" + data.url_id).prop('href'));
                for(var key in \$(\"#\" + data.url_id).data()){
                    if (key != 'info') {
                        \$(\"#reset_all_apps_btn\").data(key, \$(\"#\" + data.url_id).data(key));
                    }
                }
            }

            if (data.curr_row){
                \$(\"#reset_all_apps_btn\").data('curr_row', data.curr_row);
            }

            if (data.modal_message){
                \$(\"#modalbox .devoops-modal-inner span:first\").text(data.modal_message);
            }

            if (data.button_message){
                \$(\"#reset_all_apps_btn\").text(data.button_message);
            }

            \$('#modalbox').show();
            return false;
        };

        var isIE = '\\v' == 'v';

        function getIframeDocument(iframeNode) {
            if (iframeNode.contentDocument) {
                return iframeNode.contentDocument;
            }
            if (iframeNode.contentWindow) {
                return iframeNode.contentWindow.document;
            }
            return iframeNode.document
        }

        function setIframeSrc(iframeNode, src) {
            var doc = getIframeDocument(iframeNode);
            doc.location.replace(src);
        }

        function createIFrameNoIE(fname, src) {

            if (isIE) {
                var cframe = document.createElement('<iframe name=\"' + fname + '\">');
            } else {
                cframe = document.createElement('iframe');
                cframe.setAttribute(\"name\", fname);
            }

            cframe.style.display = 'none';
            cframe.onload = iFrameOnLoad;
            cframe.onerror = iFrameOnError;
            cframe.onreadystatechange = iFrameOnReadyStateChange;

            document.body.appendChild(cframe);

            setIframeSrc(cframe, src);
        }

        function createIFrameIE(fname, src) {
            var rcvNode = new ActiveXObject(\"htmlfile\");
            rcvNode.open();
            rcvNode.close();

            rcvNode.parentWindow.deliver = deliver;

            var cframe = rcvNode.createElement(\"<iframe name='\" + fname + \"' src='\" + src + \"'></iframe>\");

            cframe.onload = iFrameOnLoad;
            cframe.onerror = iFrameOnError;
            cframe.onreadystatechange = iFrameOnReadyStateChange;

            rcvNode.appendChild(cframe)
        }

        function createIFrame(fname, src) {
            cleanIframe();
            isIE ? createIFrameIE(fname, src) : createIFrameNoIE(fname, src);
        }

        function cleanIframe(){
            \$('iframe[name=\"cometFrame\"]').remove();
        }

        function deliver(callback, data) {
            messageStack.push({action: callback, data: data});
        }

        var iFrameOnLoad = function() {
            if (!this.executed) {
                this.executed = true;
                console.log(this.innerHTML);
            }
        };

        var iFrameOnError = function() {
            if (!this.executed) {
                this.executed = true;
                console.log(this.innerHTML);
            }
        };

        var iFrameOnReadyStateChange = function(){
            var self = this;
            if (this.readyState == \"complete\" || this.readyState == \"loaded\") {
                setTimeout(function() {
                    self.onload()
                }, 0);
            }
        };

        function initFileUploader(url){
            \$('#fileupload').fileupload({
                url: url,
                type: 'POST',
                autoUpload: false,
                multipart: true,
                acceptFileTypes: /(\\.|\\/)(json)\$/i,
                maxNumberOfFiles: 1
            }).bind('fileuploaddone', function (e, data) {
                /*\$(\"#upload_processing\").hide();*/
                /*\$(\"#modalbox button\").removeAttr('disabled').removeClass('disabled');*/
                var response;
                if (data && data.jqXHR && data.jqXHR.status && data.jqXHR.status == 200 && data.jqXHR.responseJSON) {
                    response = data.jqXHR.responseJSON;
                } else {
                    JSErrorModalBox();
                    return false;
                }

                if (response.success) {
                    ajaxSuccess(response, false);
                    fileUploaderList.pop();
                    \$(e.currentTarget).next('.fileupload-message').text('');
                    var sendData = {
                        install_path: response.install_path,
                        install_file: response.install_file
                    };
                    var timer = setInterval(function(){
                            clearInterval(timer);
                            createIFrame('cometFrame', url + '?v=' + \$.random(10000000) + \"&\" + \$.param(sendData));
                    }, 10);
                }
                return false;
            }).bind('fileuploadfail', function (e, data) {
                \$(\"#modalbox button\").removeAttr('disabled').removeClass('disabled');
                \$(\"#upload_processing\").hide();
                if (data && data.jqXHR && data.jqXHR.status && data.jqXHR.status == 200 && data.jqXHR.responseJSON) {
                    JSErrorModalBox(JSON.parse(data.jqXHR.responseJSON));
                } else {
                    JSErrorModalBox();
                }
            }).bind('fileuploadadd', function (e, data) {
                \$(\"#modalbox button\").removeAttr('disabled').removeClass('disabled');
                \$(e.currentTarget).next('.fileupload-message').text(data.files[0].name);
                fileUploaderList.push(data);
            });
            return true;
        }
";
    }

    public function getTemplateName()
    {
        return "default/ApplicationCatalog/smart_application_list/smart_application_list.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  796 => 599,  791 => 597,  783 => 592,  755 => 567,  749 => 566,  741 => 561,  735 => 560,  727 => 555,  721 => 554,  712 => 548,  706 => 547,  696 => 542,  690 => 541,  682 => 536,  676 => 535,  663 => 525,  658 => 523,  652 => 522,  645 => 520,  637 => 519,  626 => 511,  619 => 509,  548 => 441,  540 => 436,  517 => 416,  502 => 404,  490 => 395,  467 => 375,  463 => 374,  419 => 333,  410 => 327,  366 => 288,  357 => 282,  331 => 259,  327 => 258,  315 => 251,  291 => 230,  273 => 215,  268 => 213,  263 => 211,  155 => 106,  101 => 54,  95 => 52,  93 => 51,  88 => 49,  78 => 44,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/ApplicationCatalog/smart_application_list/smart_application_list.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/ApplicationCatalog/smart_application_list/smart_application_list.js.twig");
    }
}
