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

/* C:\laragon\www\mimc1/themes/demo5/pages/education/mahabodhi-boys-hostel.htm */
class __TwigTemplate_e3859da244c5c29784a0847ab5a94c8cc517fed9939e94421c7657a09b3e7f09 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/management-committee.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

      <h6>HOW AND WHEN:</h6>
      <p>Mahabodhi Boys hostel was established in 1997 with 10 boys. while uplifting the status of the girls child was ne of the primary mission of Ven.Sangasena but the need to extent the similar facilities to the boys belonging to poor families was also realised which led to the established of the Mahabodhi Hostel for the Boys. The work for the construction of the hostel began in 1996 with its first batch 10 boys belonging to poor families of zangsker, Nubra, changthang and Leh, today the hostel has more than 100 boys approximately 70 different villages of Ladakh in a natural family like structure embedded with brotherhood, love, co-operation and mutual understanding.</p>

      <p>They are looked after by the warden, in charge, and the foster mothers. And as they would do in a family environment, the child are encourage to clean and arrange their own rooms, help in gardening and participate in many of the Devachan social events. The feeling of a shared responsibility and accountability towards each other’s peaceful living in inculcates in them through the compassionate and blissful teaching of the Buddha.</p>

      <p>Every year we admit students in our hostels and we require sponsors for newly admitted children. Total amount for sponsoring a child is Rs. 3500/-which cover entire their boarding lodging, food, medicine, education, uniform, stationary etc. for a year. </p>

      <h6>PRESENT SCENARIO:</h6>
      <p>At present there are around 100 students who come from approximately 70 different villages of Ladakh, living like a brother, in a homely environment surrounded by love, care and genuine concern.</p>

      <p>Education is a crucial key to helping eradicate poverty and we are fully committed towards fulfilling this dream and objective of Venerable Sanghasena.</p>

      <h6>FUTERE PLAN:</h6>
      <p>To extend the existing facilities to accommodate at least 200 boys, ensuring no child is deprived of an education through a lack of facilities or resources. there is also a need to expand the current facilities in order to accommodate students who are coming to join the school from our Tingmosgang and Bodhkhabu branch school in the coming years.</p>

      <p>Both the Boys and the Girls hostels are functioning extremely well with around 100 boys at the boys hostel and 120 girls at the Girls hostel who come from different village. Every year during the admission period in October, the selection committee face an extremely difficult time as it has to turn away many children simply because there is shortage of accommodation space for them at the hostel. There are many heart wrenching stories told as families from very remote villages have had to walk for miles just to catch public transport, arrive at the school only to be told that their child cannot gain admission to the hostels.One of the immediate goals is to expand our hostel facilities to admit up to 200 boys and 200 girls each but this of course is possible only through adequate funds being made available for the project. We would like to appeal to any philanthropic individual or organisation that might be interested in supporting this deserving project.</p>

      <p>“Illiteracy and the poverty are the biggest enemies of mankind;they mst be fought and conquered at any cost”</p>

      
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
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-boys-hostel.htm";
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/about/management-committee.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <h6>HOW AND WHEN:</h6>
      <p>Mahabodhi Boys hostel was established in 1997 with 10 boys. while uplifting the status of the girls child was ne of the primary mission of Ven.Sangasena but the need to extent the similar facilities to the boys belonging to poor families was also realised which led to the established of the Mahabodhi Hostel for the Boys. The work for the construction of the hostel began in 1996 with its first batch 10 boys belonging to poor families of zangsker, Nubra, changthang and Leh, today the hostel has more than 100 boys approximately 70 different villages of Ladakh in a natural family like structure embedded with brotherhood, love, co-operation and mutual understanding.</p>

      <p>They are looked after by the warden, in charge, and the foster mothers. And as they would do in a family environment, the child are encourage to clean and arrange their own rooms, help in gardening and participate in many of the Devachan social events. The feeling of a shared responsibility and accountability towards each other’s peaceful living in inculcates in them through the compassionate and blissful teaching of the Buddha.</p>

      <p>Every year we admit students in our hostels and we require sponsors for newly admitted children. Total amount for sponsoring a child is Rs. 3500/-which cover entire their boarding lodging, food, medicine, education, uniform, stationary etc. for a year. </p>

      <h6>PRESENT SCENARIO:</h6>
      <p>At present there are around 100 students who come from approximately 70 different villages of Ladakh, living like a brother, in a homely environment surrounded by love, care and genuine concern.</p>

      <p>Education is a crucial key to helping eradicate poverty and we are fully committed towards fulfilling this dream and objective of Venerable Sanghasena.</p>

      <h6>FUTERE PLAN:</h6>
      <p>To extend the existing facilities to accommodate at least 200 boys, ensuring no child is deprived of an education through a lack of facilities or resources. there is also a need to expand the current facilities in order to accommodate students who are coming to join the school from our Tingmosgang and Bodhkhabu branch school in the coming years.</p>

      <p>Both the Boys and the Girls hostels are functioning extremely well with around 100 boys at the boys hostel and 120 girls at the Girls hostel who come from different village. Every year during the admission period in October, the selection committee face an extremely difficult time as it has to turn away many children simply because there is shortage of accommodation space for them at the hostel. There are many heart wrenching stories told as families from very remote villages have had to walk for miles just to catch public transport, arrive at the school only to be told that their child cannot gain admission to the hostels.One of the immediate goals is to expand our hostel facilities to admit up to 200 boys and 200 girls each but this of course is possible only through adequate funds being made available for the project. We would like to appeal to any philanthropic individual or organisation that might be interested in supporting this deserving project.</p>

      <p>“Illiteracy and the poverty are the biggest enemies of mankind;they mst be fought and conquered at any cost”</p>

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-boys-hostel.htm", "");
    }
}
