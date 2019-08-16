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

/* default/Settings/themes/themes.js.twig */
class __TwigTemplate_ba884df9d763c781896f3d3dbd0c993dcc0adc2d38a14ca78a9a48371d40b5c5 extends \Twig\Template
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
";
        // line 3
        echo "var dataSet = ";
        echo twig_jsonencode_filter($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "allData", []));
        echo ", select2Opt = {minimumResultsForSearch: -1, dropdownAutoWidth: false, width: '100%', allowDuplicates: true};
var deviceTitles = { deviceTitles: {
        'mag'    :   \"";
        // line 5
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("MAG Set-Top Box");
        echo "\",
        'pc'     :   \"";
        // line 6
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Smart TV and Set-Top Box");
        echo "\",
        'laptop' :   \"";
        // line 7
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Desktop and notebook");
        echo "\",
        'tablet' :   \"";
        // line 8
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Tablet");
        echo "\",
        'phone'  :   \"";
        // line 9
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Smartphone");
        echo "\"
    }};
";
        // line 12
        echo "
function TestTable1() {

    \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
        if (typeof (json.data) == 'object' && json.data.length > 0) {
            for (var i in json.data) {
                json.data[i] = rowDataPrepare(json.data[i]);
            }
        }
    }).dataTable({
        processing: false,
        serverSide: false,
        ajax: null,
        data: [],
        language: {
            url: \"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
        },

        //from macro
        columns: [
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array"));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 33
            echo "            ";
            if (("all" != $this->getAttribute($context["item"], "name", []))) {
                // line 34
                echo "            {\"data\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\", \"name\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\" ";
                if ( !$this->getAttribute($context["item"], "checked", [])) {
                    echo ", visible: false, className: 'none'";
                }
                echo "}";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ",";
                }
                // line 35
                echo "            ";
            }
            // line 36
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ],

        scrollCollapse: true,
        bFilter: false,
        bPaginate: false,
        lengthChange: true,
        bInfo:     false,
        bSort : false,

        fixedHeader: {
            header: true,
            headerOffset: \$('header.navbar').height()
        },

        rowId: \"RowOrder\", // required to restore selected rows on reload

        aoColumnDefs: [
            { searchable: false},
            { sortable: false},
            { width: \"20%\", targets: [ -1 ] },
            { className: \"action-menu\", targets: [ -1 ] },
            { className: \"tooltip-cell\", targets: [ -2 ] },
            { className: \"theme-preview\", targets: [ 0 ] }
        ]

    });

    var dtInstance = \$('#datatable-1').DataTable(), dtRow;
    for (var i in dataSet) {
        dtRow = \$(\"<tr>\");
        \$.each(rowDataPrepare(dataSet[i]), function (index, row) {
            var td = \$('<td>');
            \$(row).appendTo(td);
            td.appendTo(dtRow);
        });
        dtRow.attr('id', 'dTRow_' + dataSet[i].alias);

        dtInstance.row.add(dtRow).draw();
    }
}

function DemoGallery(){
    // Fancybox simple image initialization
    \$('.fancybox a').fancybox({
        openEffect\t: 'none',
        closeEffect\t: 'none',
        minWidth: 800,
        tpl: {
            closeBtn : '<a title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("CLOSE"), "html", null, true);
        echo "\" class=\"fancybox-item fancybox-close\" href=\"javascript:;\"></a>'
        }
    });

    // Fancybox initialization for inline content
    \$('.fancybox .fancybox-preview').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        minWidth: 800,
        tpl: {
            closeBtn : '<a title=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("CLOSE"), "html", null, true);
        echo "\" class=\"fancybox-item fancybox-close\" href=\"javascript:;\"></a>'
        },
        beforeLoad: function(){
            var cloneEl = \$(this.element).clone();
            \$(this.element).after(cloneEl);
        },
        afterClose: function(){
            \$(this.element).next().remove();
            \$(this.element).removeAttr('style');
        }
    });
}

function DemoSelect2() {
    \$('#form_ select').select2(select2Opt);
}

function yelp() {
    \$(document).ready(function () {
        \$(document).on('click', \".main_ajax[disabled!='disabled']\", function (e) {
            e.stopPropagation();
            e.preventDefault();
            var objHref = (\$(this).attr('href'))? \$(this).attr('href'): \$(this).data('href');
            if( objHref.indexOf(\"themes-reset-to-default\") != -1 && !confirm(\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Do theme restore to the initial look"), "html", null, true);
        echo "?\") ){
                \$(this).closest('div.open').removeClass('open');
                return false;
            }
            \$(\"#modalbox\").data('complete', 0);
            var sendData = \$(this).data();
            ajaxPostSend(objHref, sendData, false, false);
            \$(this).closest('div.open').removeClass('open');
            return false;
        });

        // Load Fancybox2 and make gallery in callback
        LoadFancyboxScript(DemoGallery);

        LoadDataTablesScripts(TestTable1);

        LoadSelect2Script(DemoSelect2);

/*        \$(document).tooltip({
            selector: '[data-toggle=\"tooltip\"]',
            placement: 'top'
        });*/

        \$(document).on('click submit', '#form_', function (e) {
            e.stopPropagation();
            e.preventDefault();
        });

        \$(document).on('click submit', '#form_ button', function (e) {
            e.stopPropagation();
            e.preventDefault();

            var sendData = {}, parentForm = \$(this).closest('form');

            \$('select', parentForm).each(function () {
                sendData[this.name] = this.value;
            });

            ajaxPostSend(parentForm.attr('action'), sendData);
            return false;
        });

    });
}

document.addEventListener(\"DOMContentLoaded\", yelp, false);

var changeTheme = function(obj){
    \$(\"button[data-themename]\").each(function(){
        if (\$(this).data('themename') == obj.name) {
            \$(this).prop('disabled', 'disabled').attr('disabled', 'disabled');
            if(!\$(this).hasClass('btn-yaly')) {
                \$(this).removeClass('btn-yal').addClass('btn-yaly');
            }
            \$(this).text('";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Current"), "html", null, true);
        echo "');
        } else {
            \$(this).prop('disabled', false).removeAttr('disabled');
            if(!\$(this).hasClass('btn-yal')) {
                \$(this).removeClass('btn-yaly').addClass('btn-yal');
            }
            \$(this).text('";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Apply"), "html", null, true);
        echo "');
        }
    });
};

function rowDataPrepare(item){
    return {
        preview: \$(\"#item_coll_preview\").tmpl(item).get(0).outerHTML,
        type: \$(\"#item_coll_type\").tmpl(item).get(0).outerHTML,
        name: \$(\"#item_coll_name\").tmpl(item).get(0).outerHTML,
        devices: \$(\"#item_coll_devices\").tmpl(item,deviceTitles).get(0).outerHTML,
        operations: \$(\"#item_coll_operations\").tmpl(item).get(0).outerHTML
    };
}";
    }

    public function getTemplateName()
    {
        return "default/Settings/themes/themes.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 178,  281 => 172,  224 => 118,  198 => 95,  185 => 85,  135 => 37,  121 => 36,  118 => 35,  105 => 34,  102 => 33,  85 => 32,  77 => 27,  60 => 12,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  33 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Settings/themes/themes.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/Settings/themes/themes.js.twig");
    }
}
