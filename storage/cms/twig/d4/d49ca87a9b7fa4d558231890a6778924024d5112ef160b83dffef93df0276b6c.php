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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/slideshow-sm.htm */
class __TwigTemplate_efd39cae92989c48f808b83389a3e9481de192d0790dbfbe7cebec4119c29019 extends \Twig\Template
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
        $filters = array("theme" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
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
        echo "<div id=\"mimc-slideshow\" class=\"carousel slide d-none d-md-block\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <img class=\"d-block w-100\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg.jpg");
        echo "\" alt=\"First slide\">
        <div class=\"carousel-caption d-none d-md-block text-center caption\">

        </div>
      </div>

      <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg2.jpg");
        echo "\" alt=\"Second slide\">
        <div class=\"carousel-caption d-none d-md-block text-center caption\">
           

        </div>
      </div>

      <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg3.jpg");
        echo "\" alt=\"Third slide\">
        <div class=\"carousel-caption d-none d-md-block text-center caption\">
            

        </div>
      </div>
    </div>
    
    <a class=\"carousel-control-prev\" href=\"#mimc-slideshow\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#mimc-slideshow\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/slideshow-sm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  77 => 11,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"mimc-slideshow\" class=\"carousel slide d-none d-md-block\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <img class=\"d-block w-100\" src=\"{{'assets/images/bg.jpg'|theme}}\" alt=\"First slide\">
        <div class=\"carousel-caption d-none d-md-block text-center caption\">

        </div>
      </div>

      <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"{{'assets/images/bg2.jpg'|theme}}\" alt=\"Second slide\">
        <div class=\"carousel-caption d-none d-md-block text-center caption\">
           

        </div>
      </div>

      <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"{{'assets/images/bg3.jpg'|theme}}\" alt=\"Third slide\">
        <div class=\"carousel-caption d-none d-md-block text-center caption\">
            

        </div>
      </div>
    </div>
    
    <a class=\"carousel-control-prev\" href=\"#mimc-slideshow\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#mimc-slideshow\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/slideshow-sm.htm", "");
    }
}
