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

/* C:\laragon\www\mimc1/themes/demo5/partials/sidebar/mahabodhi-residential-school.htm */
class __TwigTemplate_fdd5e04cf4b7d3219611f7f978863ca1264e794e3d9e7044d101a68543ef1f92 extends \Twig\Template
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Mahabodhi Residential School</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 6
        echo url("/mahabodhi-residential-school/history");
        echo "\">History</a></li>
        <li><a href=\"";
        // line 7
        echo url("/mahabodhi-residential-school/mission-and-vision-of-school");
        echo "\">Mission & Vision of School</a></li>
        <li><a href=\"";
        // line 8
        echo url("/mahabodhi-residential-school/school-management-committee");
        echo "\">School Management Committee</a></li>
        <li><a href=\"";
        // line 9
        echo url("/mahabodhi-residential-school/list-of-teachers");
        echo "\">List of Teachers</a></li>
        <li><a href=\"";
        // line 10
        echo url("/mahabodhi-residential-school/cbse-requirements");
        echo "\">CBSE Requirements</a></li>
        <li><a href=\"";
        // line 11
        echo url("/mahabodhi-residential-school/admission-details");
        echo "\">Admission Details</a></li>
      </ul>
    </nav>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/mahabodhi-residential-school.htm";
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Mahabodhi Residential School</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('/mahabodhi-residential-school/history')}}\">History</a></li>
        <li><a href=\"{{url('/mahabodhi-residential-school/mission-and-vision-of-school')}}\">Mission & Vision of School</a></li>
        <li><a href=\"{{url('/mahabodhi-residential-school/school-management-committee')}}\">School Management Committee</a></li>
        <li><a href=\"{{url('/mahabodhi-residential-school/list-of-teachers')}}\">List of Teachers</a></li>
        <li><a href=\"{{url('/mahabodhi-residential-school/cbse-requirements')}}\">CBSE Requirements</a></li>
        <li><a href=\"{{url('/mahabodhi-residential-school/admission-details')}}\">Admission Details</a></li>
      </ul>
    </nav>
  </div>", "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/mahabodhi-residential-school.htm", "");
    }
}
