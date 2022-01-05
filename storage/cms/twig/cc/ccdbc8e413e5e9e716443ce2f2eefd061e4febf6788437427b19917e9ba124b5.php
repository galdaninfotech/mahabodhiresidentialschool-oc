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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/sidebar/about.htm */
class __TwigTemplate_38d99bbcf67c7cb55acf8ac259fefb2cd0d87480050ca3525a685b0978f6e9d5 extends \Twig\Template
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
        $functions = array("url" => 7);

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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">About Us</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>

    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 7
        echo url("about/mahabodhi-international-meditation-centre");
        echo "\">Mahabodhi Residential School</a></li>
        <li><a href=\"";
        // line 8
        echo url("about/about");
        echo "\">About Us</a></li>
        <li><a href=\"";
        // line 9
        echo url("about/motto");
        echo "\">Motto</a></li>
        <li><a href=\"";
        // line 10
        echo url("about/admissions");
        echo "\">Admission</a></li>
      </ul>
    </nav>

    
    <br>

  </div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/sidebar/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  78 => 9,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-lbg margin-20px-tb\">
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">About Us</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>

    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('about/mahabodhi-international-meditation-centre')}}\">Mahabodhi Residential School</a></li>
        <li><a href=\"{{url('about/about')}}\">About Us</a></li>
        <li><a href=\"{{url('about/motto')}}\">Motto</a></li>
        <li><a href=\"{{url('about/admissions')}}\">Admission</a></li>
      </ul>
    </nav>

    
    <br>

  </div>", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/sidebar/about.htm", "");
    }
}
