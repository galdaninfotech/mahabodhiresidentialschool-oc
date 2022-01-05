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

/* C:\laragon\www\mimc1/themes/demo5/partials/sidebar/news.htm */
class __TwigTemplate_37156151aacfae765cd5e548be58f133be25b14ebcd5ee35bd42cec5c955258f extends \Twig\Template
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">MIMC News</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a class=\"dropdown-item\" href=\"";
        // line 6
        echo url("news/latest-news");
        echo "\">Latest News</a></li>
        <li><a class=\"dropdown-item\" href=\"";
        // line 7
        echo url("news/newsletter");
        echo "\">Newsletter</a></li>
        <li><a class=\"dropdown-item\" href=\"";
        // line 8
        echo url("news/press-clippings");
        echo "\">Press Clippings</a></li>
      </ul>
    </nav>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-lbg margin-20px-tb\">
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">MIMC News</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a class=\"dropdown-item\" href=\"{{url('news/latest-news')}}\">Latest News</a></li>
        <li><a class=\"dropdown-item\" href=\"{{url('news/newsletter')}}\">Newsletter</a></li>
        <li><a class=\"dropdown-item\" href=\"{{url('news/press-clippings')}}\">Press Clippings</a></li>
      </ul>
    </nav>
  </div>", "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/news.htm", "");
    }
}
