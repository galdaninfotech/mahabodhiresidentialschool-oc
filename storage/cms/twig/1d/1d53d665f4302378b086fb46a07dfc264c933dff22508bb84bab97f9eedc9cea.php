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

/* C:\laragon\www\mimc1/themes/demo5/partials/sidebar/mahabodhi-sambodhi-retreat-centre.htm */
class __TwigTemplate_60163933973d91b2c51128e5b440165d4a7c5d45074bd4467c5bcc1af181de1f extends \Twig\Template
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Mahabodhi Sambodhi Retreat Centre</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 6
        echo url("/mahabodhi-sambodhi-retreat-centre/shangri-la-meditation");
        echo "\">Shangri-La Meditation</a></li>
        <li><a href=\"";
        // line 7
        echo url("/mahabodhi-sambodhi-retreat-centre/teachers");
        echo "\">Teachers</a></li>
        <li><a href=\"";
        // line 8
        echo url("/mahabodhi-sambodhi-retreat-centre/facilities");
        echo "\">Facilities</a></li>
        <li><a href=\"";
        // line 9
        echo url("/mahabodhi-sambodhi-retreat-centre/retreat-schedule");
        echo "\">Retreat Schedule</a></li>
        <li><a href=\"";
        // line 10
        echo url("/mahabodhi-sambodhi-retreat-centre/online-form");
        echo "\">Online Form</a></li>
      </ul>
    </nav>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/mahabodhi-sambodhi-retreat-centre.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 10,  81 => 9,  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-lbg margin-20px-tb\">
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Mahabodhi Sambodhi Retreat Centre</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('/mahabodhi-sambodhi-retreat-centre/shangri-la-meditation')}}\">Shangri-La Meditation</a></li>
        <li><a href=\"{{url('/mahabodhi-sambodhi-retreat-centre/teachers')}}\">Teachers</a></li>
        <li><a href=\"{{url('/mahabodhi-sambodhi-retreat-centre/facilities')}}\">Facilities</a></li>
        <li><a href=\"{{url('/mahabodhi-sambodhi-retreat-centre/retreat-schedule')}}\">Retreat Schedule</a></li>
        <li><a href=\"{{url('/mahabodhi-sambodhi-retreat-centre/online-form')}}\">Online Form</a></li>
      </ul>
    </nav>
  </div>", "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/mahabodhi-sambodhi-retreat-centre.htm", "");
    }
}
