<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\laragon\www\mimc1/themes/demo5/partials/sidebar/contact.htm */
class __TwigTemplate_fe4381e753ffb1fb4c05382fada2e05084a7ca89a9b7e5c32f9575d933901e6b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array("url" => 6);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"widget-lbg margin-20px-tb\">
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Contact Us</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 6
        echo url("contact/founder");
        echo "\">Founder</a></li>
        <li><a href=\"";
        // line 7
        echo url("contact/gen-secretary");
        echo "\">Gen, Secretary</a></li>
        <li><a href=\"";
        // line 8
        echo url("contact/mimc-project");
        echo "\">MIMC Project</a></li>
        <li><a href=\"";
        // line 9
        echo url("contact/sponsorship");
        echo "\">Sponsorship</a></li>
        <li><a href=\"";
        // line 10
        echo url("contact/global-family-resort");
        echo "\">Global Family Resort</a></li>
        <li><a href=\"";
        // line 11
        echo url("contact/meditation-programme");
        echo "\">Meditation Programme</a></li>
      </ul>
    </nav>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 11,  85 => 10,  81 => 9,  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-lbg margin-20px-tb\">
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Contact Us</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('contact/founder')}}\">Founder</a></li>
        <li><a href=\"{{url('contact/gen-secretary')}}\">Gen, Secretary</a></li>
        <li><a href=\"{{url('contact/mimc-project')}}\">MIMC Project</a></li>
        <li><a href=\"{{url('contact/sponsorship')}}\">Sponsorship</a></li>
        <li><a href=\"{{url('contact/global-family-resort')}}\">Global Family Resort</a></li>
        <li><a href=\"{{url('contact/meditation-programme')}}\">Meditation Programme</a></li>
      </ul>
    </nav>
  </div>", "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/contact.htm", "");
    }
}
