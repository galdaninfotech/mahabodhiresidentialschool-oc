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

/* C:\laragon\www\mrsl1/themes/demo5/partials/sidebar/useful-links.htm */
class __TwigTemplate_8ceeac8e0104de51553030bce2a2d1e62303330ae26968d2661284010c5f2120 extends \Twig\Template
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Useful Links</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 6
        echo url("classroom");
        echo "\">Classroom</a></li>
        <li><a href=\"";
        // line 7
        echo url("Moral and Spiritual Training");
        echo "\">Moral and Spiritual Training</a></li>
        <li><a href=\"";
        // line 8
        echo url("School hall");
        echo "\">School hall</a></li>
        <li><a href=\"";
        // line 9
        echo url("ven-bhikkhu-sanghasena/previous-positions");
        echo "\">Previous Positions</a></li>
        <li><a href=\"";
        // line 10
        echo url("Lunch/dining hall");
        echo "\">Lunch/Dining Hall</a></li>
      </ul>
    </nav>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mrsl1/themes/demo5/partials/sidebar/useful-links.htm";
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Useful Links</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('classroom')}}\">Classroom</a></li>
        <li><a href=\"{{url('Moral and Spiritual Training')}}\">Moral and Spiritual Training</a></li>
        <li><a href=\"{{url('School hall')}}\">School hall</a></li>
        <li><a href=\"{{url('ven-bhikkhu-sanghasena/previous-positions')}}\">Previous Positions</a></li>
        <li><a href=\"{{url('Lunch/dining hall')}}\">Lunch/Dining Hall</a></li>
      </ul>
    </nav>
  </div>", "C:\\laragon\\www\\mrsl1/themes/demo5/partials/sidebar/useful-links.htm", "");
    }
}
