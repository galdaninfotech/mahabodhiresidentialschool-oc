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

/* C:\laragon\www\mimc1/themes/demo5/pages/news/press-clippings.htm */
class __TwigTemplate_234345761b9d06eb84113c9808006c0801de2e29cf99f49ae92179e749b83b63 extends \Twig\Template
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
        $tags = array("partial" => 56);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape'],
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
      
      <h6>MIMC Hospital Declared As COVID-19 Hospital</h6>
      <strong>Date</strong>: 31st March, 2020 22:40 IST<br>
      <strong>URL</strong>: <a href=\"https://www.republicworld.com/india-news/general-news/mahabodhi-karuna-charitable-hospital-declared-as-covid-19-hospital.html\">Republic World India</a><br><br>

      <p>Lieutenant Governor of Ladakh RK Mathur took stock of arrangements at Mahabodhi Karuna Charitable Hospital, Leh that has been designated for COVID-19 cases.</p>

      <p>Lieutenant Governor of Ladakh R.K. Mathur took stock of arrangements at Mahabodhi Karuna Charitable Hospital, Leh that has been designated for COVID-19 cases in UT Ladakh. He was accompanied by Commissioner/ Secretary Health Ladakh, Rigzin Samphel.</p>

      <p>Earlier, Common High Court of UT of Jammu-Kashmir and Ladakh directed Secretary, Department of Health and Medical Education of both the Union Territories together with the IGP, Jammu, IGP, Kashmir and IGP, Ladakh to ensure that complete safety and security is provided to the personnel who are serving at all government facilities.</p>

      <p>Both UT governments were also directed to ensure that the accommodation, healthcare and the needs of the migrant labourers, if not already provided for, are addressed.</p>
      <a href=\"https://www.republicworld.com/india-news/general-news/mahabodhi-karuna-charitable-hospital-declared-as-covid-19-hospital.html\">Read More...</a>

      <br><hr><br>

      <h6>PM congratulates MIMC Ladakh on Mahakaruna Diwas Celebrations</h6>
      <strong>Date</strong>:   February 5, 2017 00:20 IST<br>
      <strong>URL</strong>: <a href=\"https://www.business-standard.com/article/government-press-release/pm-congratulates-mahabodhi-international-meditation-centre-leh-ladakh-on-mahakaruna-diwas-117020400680_1.html\">Business Standard</a><br><br>

      <p>The Prime Minister Shri Narendra Modi has congratulated Mahabodhi International Meditation Centre, Leh Ladakh on Mahakaruna Diwas 2017 celebrations.</p>

      <p>\"Congratulations & best wishes to Mahabodhi International Meditation Centre, Leh Ladakh on Mahakaruna Diwas 2017 celebrations.</p>

      <p>Life & teachings of Lord Buddha embody service, compassion and renunciation. He emphasised on non-violence & ending human suffering.\", the Prime Minister said.</p>

      <a href=\"https://www.business-standard.com/article/government-press-release/pm-congratulates-mahabodhi-international-meditation-centre-leh-ladakh-on-mahakaruna-diwas-117020400680_1.html\">Read More...</a>
      
      <br><hr><br>

      <h6>A home away from home for poor girls from Ladakh</h6>
      <strong>Date</strong>: December 1, 2010 4:53:11 am<br>
      <strong>URL</strong>: <a href=\"https://indianexpress.com/article/cities/chandigarh/a-home-away-from-home-for-poor-girls-from-ladakh/\">Indian Express</a><br><br>

      <p>It’s a foundation for the future,one that Bhikkhu Sanghasena,president of the Mahabodhi International Meditation Centre in Leh,envisions for the girls of Leh and Ladakh. The Mahabodhi Devachan Campus at Choglamsar is a 230-acre campus where activities of the Mahabodhi International Meditation Centre (MIMC) are conducted.</p>

      <p>MIMC is a non-government,charitable organisation working for the poorest of poor. The campus houses a school till Class X,residential hostels for boys and girls,home for the elderly and physically challenged,a hostel for the visually impaired,a monastery and nunnery,a meditation retreat centre,a global family guest house and a fully-equipped hospital with state-of-the-art facilities.</p>

      <a href=\"https://indianexpress.com/article/cities/chandigarh/a-home-away-from-home-for-poor-girls-from-ladakh/\">Read More...</a>



      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/news"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/media"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/news/press-clippings.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 58,  126 => 57,  122 => 56,  70 => 7,  62 => 1,);
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
      
      <h6>MIMC Hospital Declared As COVID-19 Hospital</h6>
      <strong>Date</strong>: 31st March, 2020 22:40 IST<br>
      <strong>URL</strong>: <a href=\"https://www.republicworld.com/india-news/general-news/mahabodhi-karuna-charitable-hospital-declared-as-covid-19-hospital.html\">Republic World India</a><br><br>

      <p>Lieutenant Governor of Ladakh RK Mathur took stock of arrangements at Mahabodhi Karuna Charitable Hospital, Leh that has been designated for COVID-19 cases.</p>

      <p>Lieutenant Governor of Ladakh R.K. Mathur took stock of arrangements at Mahabodhi Karuna Charitable Hospital, Leh that has been designated for COVID-19 cases in UT Ladakh. He was accompanied by Commissioner/ Secretary Health Ladakh, Rigzin Samphel.</p>

      <p>Earlier, Common High Court of UT of Jammu-Kashmir and Ladakh directed Secretary, Department of Health and Medical Education of both the Union Territories together with the IGP, Jammu, IGP, Kashmir and IGP, Ladakh to ensure that complete safety and security is provided to the personnel who are serving at all government facilities.</p>

      <p>Both UT governments were also directed to ensure that the accommodation, healthcare and the needs of the migrant labourers, if not already provided for, are addressed.</p>
      <a href=\"https://www.republicworld.com/india-news/general-news/mahabodhi-karuna-charitable-hospital-declared-as-covid-19-hospital.html\">Read More...</a>

      <br><hr><br>

      <h6>PM congratulates MIMC Ladakh on Mahakaruna Diwas Celebrations</h6>
      <strong>Date</strong>:   February 5, 2017 00:20 IST<br>
      <strong>URL</strong>: <a href=\"https://www.business-standard.com/article/government-press-release/pm-congratulates-mahabodhi-international-meditation-centre-leh-ladakh-on-mahakaruna-diwas-117020400680_1.html\">Business Standard</a><br><br>

      <p>The Prime Minister Shri Narendra Modi has congratulated Mahabodhi International Meditation Centre, Leh Ladakh on Mahakaruna Diwas 2017 celebrations.</p>

      <p>\"Congratulations & best wishes to Mahabodhi International Meditation Centre, Leh Ladakh on Mahakaruna Diwas 2017 celebrations.</p>

      <p>Life & teachings of Lord Buddha embody service, compassion and renunciation. He emphasised on non-violence & ending human suffering.\", the Prime Minister said.</p>

      <a href=\"https://www.business-standard.com/article/government-press-release/pm-congratulates-mahabodhi-international-meditation-centre-leh-ladakh-on-mahakaruna-diwas-117020400680_1.html\">Read More...</a>
      
      <br><hr><br>

      <h6>A home away from home for poor girls from Ladakh</h6>
      <strong>Date</strong>: December 1, 2010 4:53:11 am<br>
      <strong>URL</strong>: <a href=\"https://indianexpress.com/article/cities/chandigarh/a-home-away-from-home-for-poor-girls-from-ladakh/\">Indian Express</a><br><br>

      <p>It’s a foundation for the future,one that Bhikkhu Sanghasena,president of the Mahabodhi International Meditation Centre in Leh,envisions for the girls of Leh and Ladakh. The Mahabodhi Devachan Campus at Choglamsar is a 230-acre campus where activities of the Mahabodhi International Meditation Centre (MIMC) are conducted.</p>

      <p>MIMC is a non-government,charitable organisation working for the poorest of poor. The campus houses a school till Class X,residential hostels for boys and girls,home for the elderly and physically challenged,a hostel for the visually impaired,a monastery and nunnery,a meditation retreat centre,a global family guest house and a fully-equipped hospital with state-of-the-art facilities.</p>

      <a href=\"https://indianexpress.com/article/cities/chandigarh/a-home-away-from-home-for-poor-girls-from-ladakh/\">Read More...</a>



      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/news' %}
      {% partial 'sidebar/media' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/news/press-clippings.htm", "");
    }
}
