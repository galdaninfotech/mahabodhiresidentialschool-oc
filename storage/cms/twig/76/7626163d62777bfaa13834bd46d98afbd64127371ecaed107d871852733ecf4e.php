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

/* C:\laragon\www\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-tingmosgang.htm */
class __TwigTemplate_a9e70ec4fdc95dc418f146a09877c23d7311fcce304f13c1caa56b680144230b extends \Twig\Template
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
        $tags = array("partial" => 27);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/education/mahabodhi-branch-school-tingmosgang.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      <p>Tingmosgang is a largely populous remote village in Western Ladakh which attracts students from many neighbouring areas. There were government-run schools in the village but over the period of time, the standard of instruction in those schools had deteriorated. Being a native of the village, Ven. Sanghasena was aware of the deteriorating standard of education in the village and was very much concerned about it. After having series of discussions, the villagers</p>

      <p>put forth an appeal to Ven. Sanghasena requesting to open a branch of the Mahabodhi Residential School at the Village. Bearing in mind the dire need of a good school in that area and considering the remoteness of the village, Ven. Sanghasena finally decided to start a branch School which was inaugurated in the year 1999. Over the years, the school got popular with the local people and surrounding villages for its standard of education and good facilities.</p>
      
      <p>Initially, the school was aimed up to 5th class starting from nursery, but later as mandated, it was upgraded to 8th standard. At present there are around 140 students availing the facilities of this branch School of Mahabodhi. Every year, the 8th standard pass outs from the school migrate to the main school at Leh for the continuation of their studies. It has eleven teaching staffs including a very dynamic and dedicated Principal, Mr. Padma Dorjey.</p>

      <p>The infrastructures of the school has been conceptualized and upgraded as per requirements. New class rooms, kitchen with storerooms and a multipurpose hall have been built in addition to the extension of the play grounds with plantation areas. A much needed residential hostel is also under construction keeping in view the persistent demands from the parents of the adjoining villages. The Residential Hostel is designed for 50 students (both boys and girls) who hail from the far flung surrounding villages in the valley. The school currently serves the educational needs of villages like of Ang, Nurla, Wanlaks, Tia, Lharsa and Tserey. With the establishment of the hostel, we are hoping to cover more deserving villages.</p>

      <p>A lunch project has also been initiated for the convenience of the students coming from distant villages however; its sustenance is purely subjected to the availability of funds. We, thus humbly appeal to the supporters to kindly find sponsors for the continuation of this project.</p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-tingmosgang.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  107 => 29,  102 => 28,  98 => 27,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/education/mahabodhi-branch-school-tingmosgang.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      <p>Tingmosgang is a largely populous remote village in Western Ladakh which attracts students from many neighbouring areas. There were government-run schools in the village but over the period of time, the standard of instruction in those schools had deteriorated. Being a native of the village, Ven. Sanghasena was aware of the deteriorating standard of education in the village and was very much concerned about it. After having series of discussions, the villagers</p>

      <p>put forth an appeal to Ven. Sanghasena requesting to open a branch of the Mahabodhi Residential School at the Village. Bearing in mind the dire need of a good school in that area and considering the remoteness of the village, Ven. Sanghasena finally decided to start a branch School which was inaugurated in the year 1999. Over the years, the school got popular with the local people and surrounding villages for its standard of education and good facilities.</p>
      
      <p>Initially, the school was aimed up to 5th class starting from nursery, but later as mandated, it was upgraded to 8th standard. At present there are around 140 students availing the facilities of this branch School of Mahabodhi. Every year, the 8th standard pass outs from the school migrate to the main school at Leh for the continuation of their studies. It has eleven teaching staffs including a very dynamic and dedicated Principal, Mr. Padma Dorjey.</p>

      <p>The infrastructures of the school has been conceptualized and upgraded as per requirements. New class rooms, kitchen with storerooms and a multipurpose hall have been built in addition to the extension of the play grounds with plantation areas. A much needed residential hostel is also under construction keeping in view the persistent demands from the parents of the adjoining villages. The Residential Hostel is designed for 50 students (both boys and girls) who hail from the far flung surrounding villages in the valley. The school currently serves the educational needs of villages like of Ang, Nurla, Wanlaks, Tia, Lharsa and Tserey. With the establishment of the hostel, we are hoping to cover more deserving villages.</p>

      <p>A lunch project has also been initiated for the convenience of the students coming from distant villages however; its sustenance is purely subjected to the availability of funds. We, thus humbly appeal to the supporters to kindly find sponsors for the continuation of this project.</p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-tingmosgang.htm", "");
    }
}
