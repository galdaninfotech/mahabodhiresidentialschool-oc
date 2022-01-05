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

/* C:\laragon\www\mimc1/themes/demo5/pages/education/mahabodhi-girls-hostel.htm */
class __TwigTemplate_daf2f54810b53695d1f553b43222ea7b88fd48020a7925e71fcfaaafe42baaf2 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/article1.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
          <div class=\"text\">
              <h6>";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</h6>
          </div>
      </div>

      <h6>HOW AND WHEN:</h6>
      <p>Mahabodhi girls hostel was established in 1992 with only 25 girls by founder of MIMC ven.Sangasana, he established this hostel with the aim to provide boarding, lodging and medical care free of cost for the girls belonging to the underprivileged families. the first building of the hostel was built i 1992 especially for girls because the Ladakhi society was and continues to be negligent towards the female child, particularly in matters of education. Initially the building was just sufficient to accommodate the first batch of 25 girls however; over the period of time the need was felt to extent the same facilities to the hundreds more students belonging to poor families of the remote villages.</p>

      <p>They are looked after by the warden, in charge, and the foster mothers. And as they would do in a family environment, the child are encourage to clean and arrange their own rooms, help in gardening and participate in many of the Devachan social events. The feeling of a shared responsibility and accountability towards each other’s peaceful living in inculcates in them through the compassionate and blissful teaching of the Buddha.</p>

      <p>Every year we admit students in our hostels and we require sponsors for newly admitted children. Total amount for sponsoring a child is Rs. 3500/-which cover entire their boarding lodging, food, medicine, education, uniform, stationary etc. for a year.</p>

      <h6>PRESENT SCENARIO:</h6>
      <p>
        At present there are around 120 students who come from approximately 70 different villages of Ladakh, living like a sisters, in a homely environment surrounded by love, care and genuine concern.
        Education is a crucial key to helping eradicate poverty and we are fully committed towards fulfilling this dream and objective of Venerable Sanghasena.
      </p>

      <h6>FUTERE PLAN:</h6>
      <p>To extend the existing facilities to accommodate at least 200 girls, ensuring no female child is deprived of an education through a lack of facilities or resources.there is also a need to expand the current facilities in order to accommodate students who are coming to join the school from our Tingmosgang and Bodhkhabu branch school in the coming years.</p>
    
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-girls-hostel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  121 => 40,  116 => 39,  112 => 38,  85 => 14,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/article1.jpg'|theme}}\" alt=\"{{this.page.title}}\">
          <div class=\"text\">
              <h6>{{this.page.title}}</h6>
          </div>
      </div>

      <h6>HOW AND WHEN:</h6>
      <p>Mahabodhi girls hostel was established in 1992 with only 25 girls by founder of MIMC ven.Sangasana, he established this hostel with the aim to provide boarding, lodging and medical care free of cost for the girls belonging to the underprivileged families. the first building of the hostel was built i 1992 especially for girls because the Ladakhi society was and continues to be negligent towards the female child, particularly in matters of education. Initially the building was just sufficient to accommodate the first batch of 25 girls however; over the period of time the need was felt to extent the same facilities to the hundreds more students belonging to poor families of the remote villages.</p>

      <p>They are looked after by the warden, in charge, and the foster mothers. And as they would do in a family environment, the child are encourage to clean and arrange their own rooms, help in gardening and participate in many of the Devachan social events. The feeling of a shared responsibility and accountability towards each other’s peaceful living in inculcates in them through the compassionate and blissful teaching of the Buddha.</p>

      <p>Every year we admit students in our hostels and we require sponsors for newly admitted children. Total amount for sponsoring a child is Rs. 3500/-which cover entire their boarding lodging, food, medicine, education, uniform, stationary etc. for a year.</p>

      <h6>PRESENT SCENARIO:</h6>
      <p>
        At present there are around 120 students who come from approximately 70 different villages of Ladakh, living like a sisters, in a homely environment surrounded by love, care and genuine concern.
        Education is a crucial key to helping eradicate poverty and we are fully committed towards fulfilling this dream and objective of Venerable Sanghasena.
      </p>

      <h6>FUTERE PLAN:</h6>
      <p>To extend the existing facilities to accommodate at least 200 girls, ensuring no female child is deprived of an education through a lack of facilities or resources.there is also a need to expand the current facilities in order to accommodate students who are coming to join the school from our Tingmosgang and Bodhkhabu branch school in the coming years.</p>
    
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-girls-hostel.htm", "");
    }
}
