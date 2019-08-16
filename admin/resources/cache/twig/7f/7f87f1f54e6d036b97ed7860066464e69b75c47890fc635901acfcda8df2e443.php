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

/* default/Login/index/index.css */
class __TwigTemplate_67038d912e813b61f00e61414cce091525784b992ef8f06ed5b97a1dc925cf02 extends \Twig\Template
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
        echo "body {
\tmin-width: 320px;
\tbackground-color: #9c1b65;
\tbackground-image: -webkit-gradient(radial, center center, 0px, center center, 100%, from(#9c1b65), to(#152e5d));
\tbackground-image: -webkit-radial-gradient(#9c1b65, #152e5d);
\tbackground-image: radial-gradient(circle at bottom, #9c1b65, #152e5d);
\t/*background-position: center bottom;*/
}

html, body {
\theight: 100%;
}
body > .container {
\tmin-height: 100%;
\tposition: relative;
}

.panel-info {
\tmin-height: 280px;
}
.panel-body {
\twidth: 350px;
\tposition: absolute;
\ttop: 50%;
\tleft: 50%;
\tmargin-top: -140px;
\tmargin-left: -175px;
}

.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 3px 10px;
    /*-webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;*/
}
.form-signin .form-control:focus
{
    /*z-index: 2;*/

}
.form-signin input[type=\"text\"]
{
    

}
.form-signin input[type=\"password\"]
{
    
    
}
/*
.login-form > input[type=\"text\"]:first-child,
.login-form > input[type=\"password\"]:not(:first-child):not(:last-child){*/
.login-form > input.form-control[type=\"text\"],
.login-form > input.form-control[type=\"password\"]{
\t/*box-sizing: content-box;*/
\twidth: 290px;
\tmargin-bottom: 12px;
\tborder: 2px solid transparent;
\tborder-radius: 3px !important;
\tbox-shadow: none;
}

.login-form > input[type=\"submit\"] {
\tclear: left;
\tfloat: left;
\tmargin-top: 10px;
\tpadding: 7px 0;
}
.lobtn {
\tcolor: #000;
\tbackground-color: #ffcd1c;
\tborder-radius: 3px;
}

#login-logo {
\tmargin-bottom: 17px;
}

.login-form > input[type=\"submit\"]:focus {
\toutline: none;
}
.login-form > input[type=\"submit\"]:hover {
\tbox-shadow: 0 0 0 2px #172e5d;
}

.login-form > input[type=\"text\"]:focus,
.login-form > input[type=\"password\"]:focus {
    box-shadow: 0 0 0 2px #ffcd1c;
}

.login-form.has-error > input[type=\"text\"],
.login-form.has-error > input[type=\"password\"]{
    /*color: #d60000;*/
    outline: 0 none;
    border-color: transparent !important;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-box-shadow: 0 0 0 2px #d32f2f;
    box-shadow: 0 0 0 2px #d32f2f !important;
}

.login-form .alert {
\tcolor: #FFF;
    position: relative;
    padding: 0 20px 0 40px;
    margin-bottom: 0;
}

.login-form .alert > i.fa:first-child {
\tposition: absolute;
\ttop: 50%;
\tleft: 20px;
\tmargin-top: -0.5em;
\tmargin-left: -0.5em;
}
/*
.login-form > .alert:before {

}
*/
.login-form .txt-danger {
    color: #FFF !important;
}
";
    }

    public function getTemplateName()
    {
        return "default/Login/index/index.css";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/Login/index/index.css", "/var/www/html/stalker_portal/admin/resources/views/default/Login/index/index.css");
    }
}
