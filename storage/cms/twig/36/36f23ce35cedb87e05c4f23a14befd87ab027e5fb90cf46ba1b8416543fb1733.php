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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/facilities.htm */
class __TwigTemplate_327b2ba6afe4ab93278daa2994f83cccc8dc963d3de46239e1427fc49478a726 extends \Twig\Template
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
        $tags = array("partial" => 26);
        $filters = array("escape" => 7, "theme" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape', 'theme'],
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
        echo "<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h1></div>
        </div>
      </div>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/management-committee.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

      <p>The Centre is blessed with a beautiful meditation hall; separate dormitories which can accommodate 40-50 male and female residents at a time; a delightful dining hall for more than 50 people and a beautiful garden where meditators can practice walking meditation and yoga or simply rest on the lawn under many fruits trees.</p>

      <p> It is also intriguing to see different types of birds wandering in the garden and among the trees.</p>

      <p>In addition to the spacious accommodation and the first-rate facilities for groups, the Sambodhi Retreat Centre has a number of comfortable meditation kutis (with attached bathroom, small kitchen, bedroom and meditation room) for experienced solitary practitioners. We are also looking forward to building more such kutis in the future, as and when the necessary resources become available.</p>
      
      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-sambodhi-retreat-centre"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-city-centre-changspa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/facilities.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  101 => 27,  97 => 26,  78 => 12,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>{{this.page.title}}</h1></div>
        </div>
      </div>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/about/management-committee.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <p>The Centre is blessed with a beautiful meditation hall; separate dormitories which can accommodate 40-50 male and female residents at a time; a delightful dining hall for more than 50 people and a beautiful garden where meditators can practice walking meditation and yoga or simply rest on the lawn under many fruits trees.</p>

      <p> It is also intriguing to see different types of birds wandering in the garden and among the trees.</p>

      <p>In addition to the spacious accommodation and the first-rate facilities for groups, the Sambodhi Retreat Centre has a number of comfortable meditation kutis (with attached bathroom, small kitchen, bedroom and meditation room) for experienced solitary practitioners. We are also looking forward to building more such kutis in the future, as and when the necessary resources become available.</p>
      
      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-sambodhi-retreat-centre' %}
      {% partial 'sidebar/mahabodhi-city-centre-changspa' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/facilities.htm", "");
    }
}
