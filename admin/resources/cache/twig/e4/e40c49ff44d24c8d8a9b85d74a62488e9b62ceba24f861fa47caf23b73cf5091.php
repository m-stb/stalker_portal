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

/* default/LicenseKeys/about_license_keys/about_license_keys.css */
class __TwigTemplate_9d5e7c24bd2649504677cc685be182b75e4ccb6a7988e5e38324b8e559c93370 extends \Twig\Template
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
        echo "#license_keys_first {
\tmax-width: 1200px;
\tpadding-right: 85px;
}

#license_keys_first h3 {
\tcolor: #404040;
\tfont-size: 17px;
\tfont-weight: bold;
\ttext-transform: uppercase;
\tpadding: 14px 0 9px;
\tmargin-right: -85px;
\tmargin-bottom: 20px;
\tborder-bottom: 1px solid #ccc;
}

#license_keys_first p {
\tmargin: 0 0 22px;
\tline-height: 22px;
}

#license_keys_first .header {
\tfont-weight: bold;
\ttext-align: center;
\twidth: 624px;
}

#license_keys_first .main-image {
\tfloat: right;
\tmargin-top: 24px;
\tmargin-left: 20px;
}

#license_keys_first .block-bordered {
\tfloat: left;
\ttext-align: center;
\tpadding: 10px 25px 21px;
\tmargin: 10px 30px 30px 0;
\tborder: 1px solid #e3e3e3;
}

#license_keys_first .block-bordered:last-of-type {

}

#license_keys_first .block-bordered h5 {
\tcolor: #37474f;
\tfont-weight: bold;
\tmargin: 10px 0 17px;
}

#license_keys_first .block-bordered .link-box {
\tdisplay: inline-block;
\ttext-align: center;
\twidth: 150px;
}

#license_keys_first .block-bordered .link-box img {
\tmargin: 0 auto 6px;
}

#license_keys_first .block-block {
\tpadding: 0 0 0 100px;
}

#license_keys_first .block-block .picture-device {
\tfloat: left;
\tmargin-top: 24px;
\tmargin-left: -100px;
}

#license_keys_first .block-block h4 {
\tcolor: #37474f;
\tfont-size: 1em;
\tline-height: 22px;
\tfont-weight: bold;
\tmargin: 10px 0 0;
}

#license_keys_first .block-block p {
\tfont-size: 1em;
}

#license_keys_first .button-block {
\tmargin: 12px 0;
}

#license_keys_first .button-block .btn {
\theight: auto; /* need to overwrite */
\tpadding: 10px 55px;
\t/*background: #388e3c;*/
}";
    }

    public function getTemplateName()
    {
        return "default/LicenseKeys/about_license_keys/about_license_keys.css";
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
        return new Source("", "default/LicenseKeys/about_license_keys/about_license_keys.css", "/var/www/html/stalker_portal/admin/resources/views/default/LicenseKeys/about_license_keys/about_license_keys.css");
    }
}
