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

/* C:\laragon\www\mimc1/themes/demo5/pages/education/higher-education-programme.htm */
class __TwigTemplate_5a186433000b82b05d4c0dbe2b4d01d947d2428a907cb08a8ed7145f8b9ac491 extends \Twig\Template
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
        $tags = array("partial" => 32);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/education/higher-education-programme.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      <p>
        Over the last two decades, there has been a positive major overhaul of the school education system in Ladakh with the help of private institutions and organizations keen to help in the economic and social development of the region.
      </p>
      <p>
        However despite this, the students who complete their schooling here face several problems when they move to other parts of India to pursue higher education. This is because Ladakh has its own unique culture and language and the students find it difficult to gain entry into institutions outside of Ladakh. By keeping this in mind Mahabodhi started a Higher Education program which aims to help the students who like to pursue their higher education in colleges and universities in the places like Chandigarh, Jammu, Delhi, Bangalore, etc. Mahabodhi would certainly like to see a great many more students pursue their further education in the many fine higher learning institutions throughout India or overseas.
      </p>
      <p>
        However this needs careful planning and adequate funding and we sincerely appeal to well-wishes to help us in this noble cause as most certainly, education is the key to economic and social freedom for the needy.
      </p>
      <p>
        Your charity dollars would help bring much needed new skills and technologies back when these young people finish their studies and return to Ladakh.
      </p>

      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/higher-education-programme.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  112 => 34,  107 => 33,  103 => 32,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/education/higher-education-programme.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      <p>
        Over the last two decades, there has been a positive major overhaul of the school education system in Ladakh with the help of private institutions and organizations keen to help in the economic and social development of the region.
      </p>
      <p>
        However despite this, the students who complete their schooling here face several problems when they move to other parts of India to pursue higher education. This is because Ladakh has its own unique culture and language and the students find it difficult to gain entry into institutions outside of Ladakh. By keeping this in mind Mahabodhi started a Higher Education program which aims to help the students who like to pursue their higher education in colleges and universities in the places like Chandigarh, Jammu, Delhi, Bangalore, etc. Mahabodhi would certainly like to see a great many more students pursue their further education in the many fine higher learning institutions throughout India or overseas.
      </p>
      <p>
        However this needs careful planning and adequate funding and we sincerely appeal to well-wishes to help us in this noble cause as most certainly, education is the key to economic and social freedom for the needy.
      </p>
      <p>
        Your charity dollars would help bring much needed new skills and technologies back when these young people finish their studies and return to Ladakh.
      </p>

      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/higher-education-programme.htm", "");
    }
}
