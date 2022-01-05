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

/* C:\laragon\www\mimc1/themes/demo5/partials/sidebar/social-welfare.htm */
class __TwigTemplate_b323ad66a4a924da43888645b03d01d8d2622ecc53d7014b8584f2bd2b6436da extends \Twig\Template
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Social Welfare</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 6
        echo url("/social-welfare/old-age-home");
        echo "\">Old Age Home</a></li>
        <li><a href=\"";
        // line 7
        echo url("/social-welfare/visually-impaired-project");
        echo "\">Visually Impaired Project</a></li>
        <li><a href=\"";
        // line 8
        echo url("/social-welfare/mahabodhi-karuna-charitable-hospital");
        echo "\">Mahabodhi Karuna Charitable Hospital</a></li>
        <li><a href=\"";
        // line 9
        echo url("/social-welfare/mahabodhi-maitri-charity-programme");
        echo "\">Mahabodhi Maitri Charity Programme</a></li>
        <li><a href=\"";
        // line 10
        echo url("/social-welfare/interfaith-programme");
        echo "\">Interfaith Programme</a></li>
        <li><a href=\"";
        // line 11
        echo url("/social-welfare/gggg");
        echo "\">Youth Wing</a></li>
      </ul>
    </nav>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/social-welfare.htm";
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">Social Welfare</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>
    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('/social-welfare/old-age-home')}}\">Old Age Home</a></li>
        <li><a href=\"{{url('/social-welfare/visually-impaired-project')}}\">Visually Impaired Project</a></li>
        <li><a href=\"{{url('/social-welfare/mahabodhi-karuna-charitable-hospital')}}\">Mahabodhi Karuna Charitable Hospital</a></li>
        <li><a href=\"{{url('/social-welfare/mahabodhi-maitri-charity-programme')}}\">Mahabodhi Maitri Charity Programme</a></li>
        <li><a href=\"{{url('/social-welfare/interfaith-programme')}}\">Interfaith Programme</a></li>
        <li><a href=\"{{url('/social-welfare/gggg')}}\">Youth Wing</a></li>
      </ul>
    </nav>
  </div>", "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/social-welfare.htm", "");
    }
}
