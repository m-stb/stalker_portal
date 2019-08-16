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

/* default/TvChannels/move_channel/move_channel.twig */
class __TwigTemplate_b673bf5de00f7c4ae541d300b7c0f8ebe9037a1abfc07efa417da17f38621232 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/") . "layout.twig")), "default/TvChannels/move_channel/move_channel.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["active"] = "tv-channels";
        // line 4
        $context["title"] = $this->env->getExtension('Lib\EmptyTranslationExtension')->trans((($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("IPTV channels") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Organize channels")));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_footer($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"./plugins/scrollTo/jquery.scrollTo.min.js\" defer=\"\"></script>
    <script type=\"text/javascript\" src=\"./js/jquery.tmpl.min.js\" defer=\"\"></script>
    
    <script type=\"text/javascript\">
       
        ";
        // line 14
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/TvChannels/move_channel/move_channel.js.twig"), "default/TvChannels/move_channel/move_channel.twig", 14)->display($context);
        // line 15
        echo "
    </script>
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "    <div id=\"iptv_list_move\">
        <div class=\"row\">
            <form id=\"form_\">
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-left \" >
                    <div class=\"col-xs-8 col-sm-8 no-padding input-group channel_diapason\">
                        <label class=\"control-label col-xs-2 col-sm-2 no-modified\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Channels"), "html", null, true);
        echo "</label>
                        <div class=\"col-xs-5 col-sm-5 no-margin-right no-padding-right leftbordercircle\">
                            <input class=\"form-control\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("from"), "html", null, true);
        echo "\" type=\"text\" id=\"channel_begin\" name=\"channel_begin\" value=\"";
        (($this->getAttribute(($context["app"] ?? null), "channel_begin", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "channel_begin", []), "html", null, true))) : (print (1)));
        echo "\" data-validation=\"required, compare_number, number\" data-validation-compare-element=\"#channel_end\" data-validation-compare-operation=\"<=\" data-validation-allowing=\"range[1;100000]\" data-validation-error-msg-container=\"#channel_begin_error\">
                            <label id=\"channel_begin_error\"></label>
                        </div>
                        <div class=\"col-xs-5 col-sm-5 no-margin-left no-padding-left rightbordercircle\">
                            <input class=\"form-control\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("to"), "html", null, true);
        echo "\" type=\"text\" id=\"channel_end\" name=\"channel_end\" value=\"";
        (($this->getAttribute(($context["app"] ?? null), "channel_end", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "channel_end", []), "html", null, true))) : (print (200)));
        echo "\" data-validation=\"required, compare_number, number\" data-validation-compare-element=\"#channel_begin\" data-validation-compare-operation=\">=\" data-validation-allowing=\"range[1;100000]\" data-validation-error-msg-container=\"#channel_end_error\">
                            <label id=\"channel_end_error\"></label>
                        </div>
                        <label id=\"channel_num_error\" class=\"col-sm-offset-2 col-sm-10\"></label>
                    </div>
                    <div class=\"col-xs-4 col-sm-4 no-modified no-margin no-padding-left\">
                        <button class=\"btn btn-action green\" type=\"button\" id=\"iptv_list_move_show\"><i class=\"fa fa-share fa-rotate-90\"></i>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Get channels"), "html", null, true);
        echo "</button>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-6\">
                    <div class=\"input-group col-xs-8 col-sm-8 col-md-8 col-lg-8 pull-right no-padding\"  id=\"searc_and_backlight\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                        <input type=\"text\" placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Enter title or number of the channel"), "html", null, true);
        echo "...\" class=\"form-control\" data-original-title=\"\" title=\"\">
                    </div>
                </div>

                <div class=\"form-buttons col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"box\">
                        <div class=\"box-content\">
                            <div class=\"row\">
                                <div class=\"text-right\">
                                    <button class=\"btn btn-success \" type=\"button\" id=\"iptv_list_move_send\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Apply"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"col-xs-12 col-sm-12 box_v2\" id=\"channelListContainer\"></div>
            </div>
        </div>
    </div>


    ";
        // line 70
        echo "    <script type=\"text/template\" id=\"list_item\">
        <div class=\"box \${locked} \${empty}\"  style=\"position:relative; z-index:30;\">
            <div class=\"box-header \${empty}\"  style=\"position:relative; z-index:30;\">
                <div class=\"box-name col-sm-11\"  style=\"position:relative; z-index:30;\">
                    <span class=\"curr_num col-xs-2 col-sm-2 no-modified no-padding\" data-number=\"\${old_number}\">\${number}</span>
                    <div class=\"channel col-xs-10 col-sm-10 no-padding ";
        // line 75
        echo "{{if relocating }}";
        echo "relocating";
        echo "{{/if}}";
        echo "\">
                            <span class=\"no-padding\">
                              <!----  <img class=\"img-rounded\" src=\"\${logo}\" alt=\"\">--->
                            </span>
                        <a href=\"\${link}\" class=\"no-padding name-link\" title=\"\${name}\">\${name}</a>
                        ";
        // line 80
        echo "{{if notempty == '1'}}";
        echo "
                            <a class=\"lock-link\" title=\"";
        // line 81
        echo "{{if notlocked == '1'}}";
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Lock channel position");
        echo "{{else}}";
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Unlock channel position");
        echo "{{/if}}";
        echo "\">
                                <i data-id=\"\${id}\" class=\"fa fa-";
        // line 82
        echo "{{if notlocked == '1'}}";
        echo "un";
        echo "{{/if}}";
        echo "lock\"></i>
                            </a>
                        ";
        // line 84
        echo "{{else}}";
        echo "
                            ";
        // line 88
        echo "                        ";
        echo "{{/if}}";
        echo "
                    </div>
                </div>
                <div class=\"no-move\"></div>
            </div>
        </div>
    </script>
    <script type=\"text/template\" id=\"list_counter\">
        <div class=\"counter\">
            <span>\${from} - \${to}</span>
            ";
        // line 101
        echo "        </div>
    </script>
    <script type=\"text/template\" id=\"modal_form_buttons\">
        <div class=\"pull-left no-padding\">&nbsp;</div>
        <div class=\"pull-right no-padding\">
            <button type=\"reset\" class=\"btn btn-default pull-left\">";
        // line 106
        echo $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel");
        echo "</button>
            <button type=\"button\" class=\"btn btn-success pull-right\">\${ok_title}</button>
        </div>
    </script>
    ";
        // line 111
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/TvChannels/move_channel/move_channel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 111,  203 => 106,  196 => 101,  182 => 88,  178 => 84,  171 => 82,  163 => 81,  159 => 80,  149 => 75,  142 => 70,  122 => 52,  110 => 43,  101 => 37,  90 => 31,  81 => 27,  76 => 25,  69 => 20,  66 => 19,  60 => 15,  58 => 14,  47 => 7,  44 => 6,  40 => 1,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/move_channel/move_channel.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/move_channel/move_channel.twig");
    }
}
