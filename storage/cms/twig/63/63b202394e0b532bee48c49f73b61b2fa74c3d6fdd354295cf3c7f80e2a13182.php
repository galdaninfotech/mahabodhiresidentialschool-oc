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

/* C:\laragon\www\mimc1/themes/demo5/partials/sidebar/sustainable-development-project.htm */
class __TwigTemplate_354be77dde1eceec42902cb1f76ba8f3afe7bba50e7f593ab7b53e28383d4712 extends \Twig\Template
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Sustainable Development Project</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 6
        echo url("/sustainable-development-project/eco-development-project");
        echo "\">Eco Development Project</a></li>
        <li><a href=\"";
        // line 7
        echo url("/sustainable-development-project/mahabodhi-publication-wing");
        echo "\">Mahabodhi Publication Wing</a></li>
        <li><a href=\"";
        // line 8
        echo url("/sustainable-development-project/mahabodhi-studio");
        echo "\">Mahabodhi Studio</a></li>
        <li><a href=\"";
        // line 9
        echo url("/sustainable-development-project/mahabodhi-global-family-resort");
        echo "\">Mahabodhi Global Family Resort</a></li>
        
      </ul>
    </nav>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/sustainable-development-project.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 9,  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-lbg margin-20px-tb\">
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Sustainable Development Project</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('/sustainable-development-project/eco-development-project')}}\">Eco Development Project</a></li>
        <li><a href=\"{{url('/sustainable-development-project/mahabodhi-publication-wing')}}\">Mahabodhi Publication Wing</a></li>
        <li><a href=\"{{url('/sustainable-development-project/mahabodhi-studio')}}\">Mahabodhi Studio</a></li>
        <li><a href=\"{{url('/sustainable-development-project/mahabodhi-global-family-resort')}}\">Mahabodhi Global Family Resort</a></li>
        
      </ul>
    </nav>
  </div>", "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/sustainable-development-project.htm", "");
    }
}
