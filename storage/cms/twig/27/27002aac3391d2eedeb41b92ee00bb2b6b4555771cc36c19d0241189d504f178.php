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

/* C:\laragon\www\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-bodhkharboo.htm */
class __TwigTemplate_43143e3ec2f835bf8500b05c4a66d31615002685fa0c62989a6f304950e92357 extends \Twig\Template
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
        $tags = array("partial" => 49);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/education/mahabodhi-branch-school-bodhkharboo.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

      <h6>BRIEF HISTORY OF MBSBK</h6>
      <p>With the total population of approximately 1400 Mahabodhi Branch , Bodh-kharboo is situated 170 km west of Leh capital of Ladakh and 75km east of Kargil district , UT Ladakh at the 11875 ft. above sea level which indicates a lots of its topography and description of harsh atmosphere, and in comparison to zojila pass Bodh-kharboo is 300 ft. higher than the so called pass. Due to harsh climate here the mercury drops minus 30-35 degree Celsius during winter season and water body freezes even in the month of early September and late may. It has more than six acres land and some portion has been planted for a healthy environment particularly for students. it has been affiliated to the CBSE (central board of secondary education) New Delhi, India, since it’s inception.</p> 

      <p>Bodh-kharboo and other some small villages fall between two hilly passes which are known as Namkila and photola which become immense barrier in approaching higher authorities of government and NGOS of Leh and Kargil District to review particularly education sector. Since India’s post independence the literacy rate of people of these areas are very deplorable and even in the 21st century remained the same. By contemplating these factors most venerable Sanghesena,Maha Thara , founder president of MIMI, leh has kindly initiated Mahabodhi Branch School Bodh-kharboo in the year 2004 , to impart quality and holistic education to the underprivilege and destitute children of remote areas of more than seven villages.</p>

      <p>A humble beginning was started with 25 students in a village community hall although nearly 100 students applied in the initial admission process but due to lack of infrastructure arrangement only the deserving 25 students have been selected. Today we have 107 students on roll from Nursery to 8th standard belonging from Bodhkharboo and the surrounding villages. At present it has a second storied splendid building comprising 15 rooms.</p>
      
      <p>In 2011 a beautiful students hostel was also started to provide hostel facilities particularly the students of the far flung villages who are vulnerable to various social exploitation.</p>

      <h6>AIMS AND OBJECTIVES</h6>
      <ul>
        <li>1. To provide holistic education and to make civilize.</li>
        <li>2. To develop in students, the important of love, compassion.</li>
        <li>3. Enabling students to remain within their villages, for minimizing the financial burden which are taken by families.</li>
        <li>4. To motivates villagers towards the values of education and its benefit.</li>
      </ul>
      
      <b>For more information:</b> <br>
      SECRETARY<br>
      Mahabodhi Branch School, Bodhkharboo.<br>
      B.P.O Bodhkharboo district Kargil, UT Ladakh 194109, India<br><br>
      <a id=\"trigger-call\" href=\"tel:+8899289888\">
        <svg class=\"svg-inline--fa fa-phone-volume fa-w-12\" aria-hidden=\"true\" data-fa-processed=\"\" data-prefix=\"fas\" data-icon=\"phone-volume\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\"><path fill=\"currentColor\" d=\"M97.333 506.966c-129.874-129.874-129.681-340.252 0-469.933 5.698-5.698 14.527-6.632 21.263-2.422l64.817 40.513a17.187 17.187 0 0 1 6.849 20.958l-32.408 81.021a17.188 17.188 0 0 1-17.669 10.719l-55.81-5.58c-21.051 58.261-20.612 122.471 0 179.515l55.811-5.581a17.188 17.188 0 0 1 17.669 10.719l32.408 81.022a17.188 17.188 0 0 1-6.849 20.958l-64.817 40.513a17.19 17.19 0 0 1-21.264-2.422zM247.126 95.473c11.832 20.047 11.832 45.008 0 65.055-3.95 6.693-13.108 7.959-18.718 2.581l-5.975-5.726c-3.911-3.748-4.793-9.622-2.261-14.41a32.063 32.063 0 0 0 0-29.945c-2.533-4.788-1.65-10.662 2.261-14.41l5.975-5.726c5.61-5.378 14.768-4.112 18.718 2.581zm91.787-91.187c60.14 71.604 60.092 175.882 0 247.428-4.474 5.327-12.53 5.746-17.552.933l-5.798-5.557c-4.56-4.371-4.977-11.529-.93-16.379 49.687-59.538 49.646-145.933 0-205.422-4.047-4.85-3.631-12.008.93-16.379l5.798-5.557c5.022-4.813 13.078-4.394 17.552.933zm-45.972 44.941c36.05 46.322 36.108 111.149 0 157.546-4.39 5.641-12.697 6.251-17.856 1.304l-5.818-5.579c-4.4-4.219-4.998-11.095-1.285-15.931 26.536-34.564 26.534-82.572 0-117.134-3.713-4.836-3.115-11.711 1.285-15.931l5.818-5.579c5.159-4.947 13.466-4.337 17.856 1.304z\"></path>
        </svg>+91-1985-280095</a>
      <br><i class=\"fas fa-envelope\" aria-hidden=\"true\"></i>
      information@gmail.com<br>
      <i class=\"fas fa-globe\" aria-hidden=\"true\"></i>
      www.mahabodhi-ladakh.org<br>
      

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-bodhkharboo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  129 => 51,  124 => 50,  120 => 49,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/education/mahabodhi-branch-school-bodhkharboo.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <h6>BRIEF HISTORY OF MBSBK</h6>
      <p>With the total population of approximately 1400 Mahabodhi Branch , Bodh-kharboo is situated 170 km west of Leh capital of Ladakh and 75km east of Kargil district , UT Ladakh at the 11875 ft. above sea level which indicates a lots of its topography and description of harsh atmosphere, and in comparison to zojila pass Bodh-kharboo is 300 ft. higher than the so called pass. Due to harsh climate here the mercury drops minus 30-35 degree Celsius during winter season and water body freezes even in the month of early September and late may. It has more than six acres land and some portion has been planted for a healthy environment particularly for students. it has been affiliated to the CBSE (central board of secondary education) New Delhi, India, since it’s inception.</p> 

      <p>Bodh-kharboo and other some small villages fall between two hilly passes which are known as Namkila and photola which become immense barrier in approaching higher authorities of government and NGOS of Leh and Kargil District to review particularly education sector. Since India’s post independence the literacy rate of people of these areas are very deplorable and even in the 21st century remained the same. By contemplating these factors most venerable Sanghesena,Maha Thara , founder president of MIMI, leh has kindly initiated Mahabodhi Branch School Bodh-kharboo in the year 2004 , to impart quality and holistic education to the underprivilege and destitute children of remote areas of more than seven villages.</p>

      <p>A humble beginning was started with 25 students in a village community hall although nearly 100 students applied in the initial admission process but due to lack of infrastructure arrangement only the deserving 25 students have been selected. Today we have 107 students on roll from Nursery to 8th standard belonging from Bodhkharboo and the surrounding villages. At present it has a second storied splendid building comprising 15 rooms.</p>
      
      <p>In 2011 a beautiful students hostel was also started to provide hostel facilities particularly the students of the far flung villages who are vulnerable to various social exploitation.</p>

      <h6>AIMS AND OBJECTIVES</h6>
      <ul>
        <li>1. To provide holistic education and to make civilize.</li>
        <li>2. To develop in students, the important of love, compassion.</li>
        <li>3. Enabling students to remain within their villages, for minimizing the financial burden which are taken by families.</li>
        <li>4. To motivates villagers towards the values of education and its benefit.</li>
      </ul>
      
      <b>For more information:</b> <br>
      SECRETARY<br>
      Mahabodhi Branch School, Bodhkharboo.<br>
      B.P.O Bodhkharboo district Kargil, UT Ladakh 194109, India<br><br>
      <a id=\"trigger-call\" href=\"tel:+8899289888\">
        <svg class=\"svg-inline--fa fa-phone-volume fa-w-12\" aria-hidden=\"true\" data-fa-processed=\"\" data-prefix=\"fas\" data-icon=\"phone-volume\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\"><path fill=\"currentColor\" d=\"M97.333 506.966c-129.874-129.874-129.681-340.252 0-469.933 5.698-5.698 14.527-6.632 21.263-2.422l64.817 40.513a17.187 17.187 0 0 1 6.849 20.958l-32.408 81.021a17.188 17.188 0 0 1-17.669 10.719l-55.81-5.58c-21.051 58.261-20.612 122.471 0 179.515l55.811-5.581a17.188 17.188 0 0 1 17.669 10.719l32.408 81.022a17.188 17.188 0 0 1-6.849 20.958l-64.817 40.513a17.19 17.19 0 0 1-21.264-2.422zM247.126 95.473c11.832 20.047 11.832 45.008 0 65.055-3.95 6.693-13.108 7.959-18.718 2.581l-5.975-5.726c-3.911-3.748-4.793-9.622-2.261-14.41a32.063 32.063 0 0 0 0-29.945c-2.533-4.788-1.65-10.662 2.261-14.41l5.975-5.726c5.61-5.378 14.768-4.112 18.718 2.581zm91.787-91.187c60.14 71.604 60.092 175.882 0 247.428-4.474 5.327-12.53 5.746-17.552.933l-5.798-5.557c-4.56-4.371-4.977-11.529-.93-16.379 49.687-59.538 49.646-145.933 0-205.422-4.047-4.85-3.631-12.008.93-16.379l5.798-5.557c5.022-4.813 13.078-4.394 17.552.933zm-45.972 44.941c36.05 46.322 36.108 111.149 0 157.546-4.39 5.641-12.697 6.251-17.856 1.304l-5.818-5.579c-4.4-4.219-4.998-11.095-1.285-15.931 26.536-34.564 26.534-82.572 0-117.134-3.713-4.836-3.115-11.711 1.285-15.931l5.818-5.579c5.159-4.947 13.466-4.337 17.856 1.304z\"></path>
        </svg>+91-1985-280095</a>
      <br><i class=\"fas fa-envelope\" aria-hidden=\"true\"></i>
      information@gmail.com<br>
      <i class=\"fas fa-globe\" aria-hidden=\"true\"></i>
      www.mahabodhi-ladakh.org<br>
      

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-bodhkharboo.htm", "");
    }
}
