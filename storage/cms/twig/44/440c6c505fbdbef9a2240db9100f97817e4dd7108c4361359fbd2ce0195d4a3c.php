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

/* C:\laragon\www\mimc1/themes/demo5/partials/sidebar/about.htm */
class __TwigTemplate_9eea240692dd1621421d32c949e72e296154f01052c5e740c7b018cb38c3dbcd extends \Twig\Template
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
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">About MIMC</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>

    <nav class=\"nav\">
      <ul>
        <li><a href=\"";
        // line 7
        echo url("about/mahabodhi-international-meditation-centre");
        echo "\">MIMC</a></li>
        <li><a href=\"";
        // line 8
        echo url("about/motto");
        echo "\">Motto</a></li>
        <li><a href=\"";
        // line 9
        echo url("about/prayer-of-compassion");
        echo "\">Prayer of Compassion</a></li>
        <li><a href=\"";
        // line 10
        echo url("about/list-of-activities");
        echo "\">List of Activities</a></li>
        <li><a href=\"";
        // line 11
        echo url("about/management-committee");
        echo "\">Management Committee</a></li>
        <li><a href=\"";
        // line 12
        echo url("about/guidelines");
        echo "\">Guidelines</a></li>
        <li><a href=\"";
        // line 13
        echo url("about/volunteer-with-us");
        echo "\">Volunteer With Us</a></li>
        <li><a href=\"";
        // line 14
        echo url("about/membership-form");
        echo "\">Membership Form</a></li>
      </ul>
    </nav>

    
    <br>

  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-lbg margin-20px-tb\">
    <a href=\"#\" class=\"title-box right\"><span class=\"left title\">About MIMC</span><span class=\"right icon icon-comment\"><span class=\"slant-right\"></span></span>
    </a>

    <nav class=\"nav\">
      <ul>
        <li><a href=\"{{url('about/mahabodhi-international-meditation-centre')}}\">MIMC</a></li>
        <li><a href=\"{{url('about/motto')}}\">Motto</a></li>
        <li><a href=\"{{url('about/prayer-of-compassion')}}\">Prayer of Compassion</a></li>
        <li><a href=\"{{url('about/list-of-activities')}}\">List of Activities</a></li>
        <li><a href=\"{{url('about/management-committee')}}\">Management Committee</a></li>
        <li><a href=\"{{url('about/guidelines')}}\">Guidelines</a></li>
        <li><a href=\"{{url('about/volunteer-with-us')}}\">Volunteer With Us</a></li>
        <li><a href=\"{{url('about/membership-form')}}\">Membership Form</a></li>
      </ul>
    </nav>

    
    <br>

  </div>", "C:\\laragon\\www\\mimc1/themes/demo5/partials/sidebar/about.htm", "");
    }
}
