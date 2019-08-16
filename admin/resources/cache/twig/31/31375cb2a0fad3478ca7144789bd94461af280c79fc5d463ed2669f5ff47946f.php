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

/* default/LicenseKeys/about_license_keys/about_license_keys.twig */
class __TwigTemplate_73654083d90a47ad0eb87462dc2f6667afb639f9199b306d1aac03f6621357b2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", [], "array") . "/layout.twig"), "default/LicenseKeys/about_license_keys/about_license_keys.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["active"] = "license-keys";
        // line 3
        $context["title"] = (($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("License key") . ": ") . $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("About License key"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    
    ";
        // line 7
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
         ";
        // line 9
        $this->loadTemplate(($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "twig_theme", []) . "/LicenseKeys/about_license_keys/about_license_keys.css"), "default/LicenseKeys/about_license_keys/about_license_keys.twig", 9)->display($context);
        // line 10
        echo "    </style>

";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "    <div id=\"license_keys_first\">
        <div class=\"row\">
            <div class=\"box\">
                <div class=\"box-content\">
                    <div class=\"box-content no-padding\">
                        
                        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Broadcast content on any device"), "html", null, true);
        echo "</h3>

                        <img class=\"main-image\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/license-keys/ac-main.png\" alt=\"\">
                        
                        <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Owners of practically any device can become subscribers to your service."), "html", null, true);
        echo "</p>
                        <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Now you can connect to Ministra TV platform with the most popular media players and smart TVs."), "html", null, true);
        echo "</p>
                        <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("This was made possible thanks to the release of Ministra Player, an easy-to-use application for viewing TV and video content that is available on an increasing number of platforms."), "html", null, true);
        echo "</p>
                        <p>
                            ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The application can be downloaded for free, but its full functionality requires a License key."), "html", null, true);
        echo "<br>
                            ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("A License key is a unique set of symbols which licenses CPE to be compatible with the Ministra TV platform."), "html", null, true);
        echo "
                        </p>

                        <div class=\"header\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Get more information about buying a License key and learn more about the application's operation."), "html", null, true);
        echo "</div>

                        <div class=\"block-bordered block-wheretobuy\">
\t\t\t\t\t\t\t
                            <h5>";
        // line 37
        echo twig_escape_filter($this->env, ($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Keys are purchased through") . ":"), "html", null, true);
        echo "</h5>
                            
                            <div class=\"link-box\">
                                <a href=\"//www.infomir.eu/";
        // line 40
        if (($this->getAttribute(($context["app"] ?? null), "language", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", [], "array") == "ru"))) {
            echo "rus/";
        } else {
            echo "eng/";
        }
        echo "payments/\" target=\"_blank\">
                                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/license-keys/ac-www.png\" alt=\"\"><br>
                                    infomir.eu/pay
                                </a>
                            </div>

                            <div class=\"link-box\">
                                <a href=\"//www.infomir.eu/";
        // line 47
        if (($this->getAttribute(($context["app"] ?? null), "language", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", [], "array") == "ru"))) {
            echo "rus/";
        } else {
            echo "eng/";
        }
        echo "payments/\" target=\"_blank\">
                                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/license-keys/ac-IM.png\" alt=\"\"><br>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("sales department"), "html", null, true);
        echo "
                                </a>
                            </div>

                        </div>

                        
                        <div class=\"block-bordered block-anyquestions\">

                            <h5>";
        // line 58
        echo twig_escape_filter($this->env, ($this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Have any additional questions") . "?"), "html", null, true);
        echo "</h5>
                            
                            <div class=\"link-box\">
                                <a href=\"mailto:ministra@infomir.com\">
                                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/license-keys/ac-email.png\" alt=\"\"><br>
                                    ministra@infomir.com
                                </a>
                            </div>

                        </div>
                        <div class=\"clearfix\"></div>



                        <h3>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Which devices are supported?"), "html", null, true);
        echo "</h3>
                        
                        <div class=\"block-block clearfix\">
                                <img class=\"picture-device\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/license-keys/ac-device-1.png\" alt=\"\">
                                <h4>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Infomir MAG Set-Top Boxes"), "html", null, true);
        echo "</h4>
                                <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Set-Top Boxes produced by Infomir on Linux or Android operating systems are already to be connected to the Ministra TV platform."), "html", null, true);
        echo "</p>
                        </div>
                        
                        <div class=\"block-block clearfix\">
                                <img class=\"picture-device\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/license-keys/ac-device-2.png\" alt=\"\">
                                <h4>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Applications for Android and iOS"), "html", null, true);
        echo "</h4>
                                <p>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("The official applications for Apple TV, Android TV, iPad, iPhone, iPod touch, Android phones & tablets, Android STB can be downloaded and installed for free from app stores, but a License key will be needed."), "html", null, true);
        echo "</p>
                        </div>
                        
                        <div class=\"block-block clearfix\">
                                <img class=\"picture-device\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/img/license-keys/ac-device-3.png\" alt=\"\">
                                <h4>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Applications for media players and Smart TVs"), "html", null, true);
        echo "</h4>
                                <p>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Applications for Roku media player, and Samsung Tizen TV and LG WebOS Smart TVs, can be downloaded and installed for free from app stores, but a License key will be needed."), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"text-center button-block\">
                                <a href=\"//www.infomir.eu/";
        // line 93
        if (($this->getAttribute(($context["app"] ?? null), "language", [], "any", true, true) && ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "language", [], "array") == "ru"))) {
            echo "rus/";
        } else {
            echo "eng/";
        }
        echo "payments/\" target=\"_blank\"
                                    class=\"btn btn-success\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Buy a License key"), "html", null, true);
        echo "</a>
                        </div>
                        <br>
 
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/LicenseKeys/about_license_keys/about_license_keys.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 94,  232 => 93,  225 => 89,  221 => 88,  217 => 87,  210 => 83,  206 => 82,  202 => 81,  195 => 77,  191 => 76,  187 => 75,  181 => 72,  168 => 62,  161 => 58,  149 => 49,  145 => 48,  137 => 47,  128 => 41,  120 => 40,  114 => 37,  107 => 33,  101 => 30,  97 => 29,  92 => 27,  88 => 26,  84 => 25,  79 => 23,  74 => 21,  66 => 15,  63 => 14,  57 => 10,  55 => 9,  50 => 7,  47 => 6,  44 => 5,  40 => 1,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/LicenseKeys/about_license_keys/about_license_keys.twig", "/var/www/html/stalker_portal/admin/resources/views/default/LicenseKeys/about_license_keys/about_license_keys.twig");
    }
}
