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

/* C:\laragon\www\mimc1/themes/demo5/partials/sidebar/education.htm */
class __TwigTemplate_123a3676e6ebdb2613b6122df68114833967450bf614ad7e1f9fa45e67942eb2 extends \Twig\Template
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Education</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 6
        echo url("/education/mahabodhi-residential-school");
        echo "\">Mahabodhi Residential School</a></li>
        <li><a href=\"";
        // line 7
        echo url("/education/mahabodhi-branch-school-tingmosgang");
        echo "\">Mahabodhi Branch School Tingmosgang</a></li>
        <li><a href=\"";
        // line 8
        echo url("/education/mahabodhi-branch-school-bodhkharboo");
        echo "\">Mahabodhi Branch School Bodhkharboo</a></li>
        <li><a href=\"";
        // line 9
        echo url("/education/mahabodhi-branch-school-ney");
        echo "\">Mahabodhi Branch School Ney</a></li>
        <li><a href=\"";
        // line 10
        echo url("/education/mahabodhi-jetavana-monastery");
        echo "\">Mahabodhi Jetavana Monastery</a></li>
        <li><a href=\"";
        // line 11
        echo url("/education/mahabodhi-nunnery");
        echo "\">Mahabodhi Nunnery</a></li>
        <li><a href=\"";
        // line 12
        echo url("/education/mahabodhi-boys-hostel");
        echo "\">Mahabodhi Boys Hostel</a></li>
        <li><a href=\"";
        // line 13
        echo url("/education/mahabodhi-girls-hostel");
        echo "\">Mahabodhi Girls Hostel</a></li>
        <li><a href=\"";
        // line 14
        echo url("/education/higher-education-programme");
        echo "\">Higher education Programme</a></li>
        <li><a href=\"";
        // line 15
        echo url("/education/mahabodhi-women-literacy-programme");
        echo "\">Mahabodhi Women Literacy Programme</a></li>
      </ul>
    </nav>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/education.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 15,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-lbg margin-20px-tb\">
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Education</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('/education/mahabodhi-residential-school')}}\">Mahabodhi Residential School</a></li>
        <li><a href=\"{{url('/education/mahabodhi-branch-school-tingmosgang')}}\">Mahabodhi Branch School Tingmosgang</a></li>
        <li><a href=\"{{url('/education/mahabodhi-branch-school-bodhkharboo')}}\">Mahabodhi Branch School Bodhkharboo</a></li>
        <li><a href=\"{{url('/education/mahabodhi-branch-school-ney')}}\">Mahabodhi Branch School Ney</a></li>
        <li><a href=\"{{url('/education/mahabodhi-jetavana-monastery')}}\">Mahabodhi Jetavana Monastery</a></li>
        <li><a href=\"{{url('/education/mahabodhi-nunnery')}}\">Mahabodhi Nunnery</a></li>
        <li><a href=\"{{url('/education/mahabodhi-boys-hostel')}}\">Mahabodhi Boys Hostel</a></li>
        <li><a href=\"{{url('/education/mahabodhi-girls-hostel')}}\">Mahabodhi Girls Hostel</a></li>
        <li><a href=\"{{url('/education/higher-education-programme')}}\">Higher education Programme</a></li>
        <li><a href=\"{{url('/education/mahabodhi-women-literacy-programme')}}\">Mahabodhi Women Literacy Programme</a></li>
      </ul>
    </nav>
  </div>", "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/education.htm", "");
    }
}
