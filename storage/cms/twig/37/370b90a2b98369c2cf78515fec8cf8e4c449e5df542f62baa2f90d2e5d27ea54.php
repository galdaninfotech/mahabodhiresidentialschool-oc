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

/* C:\laragon\www\mimc1/themes/demo5/pages/sustainable-development-project/mahabodhi-global-family-resort.htm */
class __TwigTemplate_acbec61a349a59409f583a0c25572c01e632e7813f45728e42a69151545fdd3b extends \Twig\Template
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
        $tags = array("partial" => 38);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sustainable-development-project/mahabodhi-global-family-resort.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

      <p>Being a Charitable Organization itself, MIMC runs all its activities depending on charity and donations as its main source of income. Hence, it was thought advisable to find an income generating project that would help contribute to the smooth running of its activities. Though it is not very easy to get support for a commercial and profit-making project, once again Sister Ramona Lai understood the need and purpose of such a project and came forward to support it. She generously funded the construction of the first floor of the Global Family Guest House, which was completed in late 2012. </p>

      <p>The Guest House is furnished with 43 Rooms with attached Bathrooms and 16 Rooms with non-attached bathrooms, besides many other facilities like a library, dining hall, meditation hall and multi-purpose hall that can be used for activities like seminars and workshops. Besides our own supporters and guests, we welcome all spiritually-inclined tourists who would like to enjoy calm, serene and clean living accommodation while holidaying in Ladakh. One can attend all our daily yoga and meditation classes as well as Sunday special pujas and meditation sessions at the main meditation hall where the entire Devachan family gathers every Sunday.</p>


<!-- Daily Morning Meditation Programroom bearb
Shangri-La Restaurant
Souvenir Shop
International Calling Facilities
Internet Cafe
Open orchard garden
Doctor on call
Library & TV Lounge
Organize tracking and sight seeingterasse bearb
Taxi booking service
Forex
Airport transfer facility
Hot and Cold shower
Laundry -->
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/sustainable-development-project/mahabodhi-global-family-resort.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 41,  118 => 40,  113 => 39,  109 => 38,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/sustainable-development-project/mahabodhi-global-family-resort.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <p>Being a Charitable Organization itself, MIMC runs all its activities depending on charity and donations as its main source of income. Hence, it was thought advisable to find an income generating project that would help contribute to the smooth running of its activities. Though it is not very easy to get support for a commercial and profit-making project, once again Sister Ramona Lai understood the need and purpose of such a project and came forward to support it. She generously funded the construction of the first floor of the Global Family Guest House, which was completed in late 2012. </p>

      <p>The Guest House is furnished with 43 Rooms with attached Bathrooms and 16 Rooms with non-attached bathrooms, besides many other facilities like a library, dining hall, meditation hall and multi-purpose hall that can be used for activities like seminars and workshops. Besides our own supporters and guests, we welcome all spiritually-inclined tourists who would like to enjoy calm, serene and clean living accommodation while holidaying in Ladakh. One can attend all our daily yoga and meditation classes as well as Sunday special pujas and meditation sessions at the main meditation hall where the entire Devachan family gathers every Sunday.</p>


<!-- Daily Morning Meditation Programroom bearb
Shangri-La Restaurant
Souvenir Shop
International Calling Facilities
Internet Cafe
Open orchard garden
Doctor on call
Library & TV Lounge
Organize tracking and sight seeingterasse bearb
Taxi booking service
Forex
Airport transfer facility
Hot and Cold shower
Laundry -->
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/sustainable-development-project' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/education' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/sustainable-development-project/mahabodhi-global-family-resort.htm", "");
    }
}
