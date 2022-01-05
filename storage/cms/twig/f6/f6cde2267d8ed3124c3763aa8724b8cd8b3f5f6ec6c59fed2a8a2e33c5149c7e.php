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

/* C:\laragon\www\mimc1/themes/demo5/pages/social-welfare/mahabodhi-karuna-charitable-hospital.htm */
class __TwigTemplate_3e012da055d1362dc384b51b0d5a966924b8287aee623e869e5961c39056c870 extends \Twig\Template
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
        $tags = array("partial" => 131);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mahabodhi-karuna-charitable-hospital.jpg");
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
      <p>Health care and medical development in Ladakh is very poor and many people in the remote areas cannot effort to buy medicine or get proper treatments. Doctors in Ladakh are very rare and many people die or suffer from serious diseases due to lack of medical facilities available. Furthermore, the costs of good medical treatments are for many people of Ladakh beyond their capacity to pay.</p>

      <p>To provide free medical care to some of the poorest people and those living in the remotest villages of the Himalayan region, Bhikkhu Sanghasena, a Buddhist leader, meditation teacher, and founder of Mahabodhi International Meditation Centre (MIMC) established the Mahabodhi Karuna Charitable Hospital in 1995, at the Devachan campus of MIMC in Leh, Ladakh. The hospital has been delivering medical treatment for over two decades with the help of senior doctors retired from local government hospitals and visiting volunteer doctors from around the world. Our Mission is to improve the existing medical facilities at the hospital and to serve the people of Ladakh better.</p>

      <p>The public health care system needs to be better structured and resourced and periodically renewed and strengthened to improve the health of the population. A framework needs to be worked out that defines the core activities of a comprehensive public health system. In an attempt to ensure a better health care coverage, Mahabodhi International Mediation Centre (MIMC) has been supplementing the government’s efforts to providing a strong and effective public health services for improving the health of the population.</p>

      <p>Ladakh is the biggest district in India however there is only one hospital at its capital Leh, which is often crowded and lacks modern diagnostic machines and equipment’s. Heart disease is very common in Ladakh, but treatment and facilities are not readily available. Patients are therefore referred either to Chandigarh or to Delhi. Not everyone can afford this expensive treatment. To supplement medical services, and provide quality Medicare, Guruji Ven. Sanghasena Mahanyaka Thera started the Mahabodhi Karuna Charitable Hospital in 1996 by the kind initial support of Mother Park Sung Soo from South Korea. The hospital now has a mobile ambulance, to impart heath care in rural areas.</p> 

      <p>The residence of remote villages otherwise cannot access adequate health care given the geographical isolation, harsh environment and lack of general health education in Ladakh. Outfitted with the latest medical equipment’s among clean, well maintained facilities, the Karuna Hospital continues to set new standards of Health care in the region.</p> 

      <p>The Mahabodhi Hospital organizes annual summer medical camps in remote villages, attended by specialist doctors from our hospital and abroad.</p>
      
      <br>
      <p><strong>The Hospital offers allopathic medicine in the following departments:</strong></p>
      <ul class=\"department-list\">
        <li>Ophthalmology Department</li>
        <li>Medical Department</li>
        <li>Dental Department</li>
        <li>Surgical Department</li>
        <li>Gynaecology</li>
        <li>Maternity and child Department</li>
        <li>Anesthetic Department</li>
        <li>ENT</li>
        <li>X-Ray</li>
        <li>Diagnostic Laboratory</li>
        <li>OPD units</li>
      </ul>
      
      <br>
      <p><strong>The Hospital has state-of-the-art equipment and a Doctor at their services. Other services include:</strong></p>

      <ul class=\"department-list\">
        <li>Amchi Clinic and acupuncture clinic</li>
        <li>Mobile Clinic to render services to flung villages</li>
        <li>Health, Hygiene and health education program to people living in rural areas.</li>
        <li>A meditation Hall for mental health and ethical training</li>
        <li>Medical equipment, such as Ultra sonogram, video-endoscopes, ventilator, oximeter, Boyle’s Apparatus, etc. is available, and is aided with the allied services of laboratory, two operation theatres, X ray etc.</li>
      </ul>


      <br>
      <h6>How you can help</h6>
      <p>Since the hospital is charitable in nature, it renders free health care services/medicines to the poor and deserving patients, which comparatively are much larger in number. Compare to the very few who can afford to compensate to the services offered. As such, the income to the hospital is limited and self-sustenance will be a steep struggle ahead. All philanthropic groups, organizations, individuals could extend their help and support for purchase of life saving drugs, hospital equipment’s, and salary of the doctors / paramedics and for maintaining the central heating system. One can also contribute through volunteering to conduct/organize health camps or as a volunteer at the hospital if having a medical background.</p>


      <br>
      <h6>Updates & Activities</h6>
      <p>The Mahabodhi Karuna Charitable hospital has rendered its services and successfully done the following:</p>

      <ul class=\"department-list\">
        <li>Over 3000 surgeries done at the hospital.</li>
        <li>Mobile clinic with facilities for minor general surgery; cataract surgery and medical services in Leh and Kargil district.</li>
        <li>Delivered over 500 babies including c-sections surgeries.</li>
        <li>Pre-natal clinic to reduce infant mortality.</li>
        <li>Women clinic with over 250 surgeries.</li>
        <li>Under the Govt of India scheme this hospital served as a MOTHER NGO and established 3 fields NGO in remote areas to offer rural health services.</li>
        <li>Plastic and reconstruction surgery camp by the World’s renowned surgeons from Germany.</li>
        <li>Disability & rehab camp with support by an NGO in Mumbai.</li>
        <li>Dental and Women’s clinic was run by German teams.</li>
        <li>Traditional medicine</li>
      </ul>  

      <br><br><br>
      <h6>MAHABODHI KARUNA CHARITABLE HOSPITAL AT PRESENT A 100% COVID-19 DEDICATED FACILITY</h6>

      <p>The Mahabodhi Karuna Charitable hospital has been in the forefront of helping people during this natural calamity or crisis that has erupted in India by actively participating in relief and rehabilitation programmes. In the wake of COVID-19 pandemic outbreak in the Ladakh region, MKCH has been at the forefront in showing our concern and solidarity with our fellow native people as well as the global family at large.</p>

      <p>Beginning March 2020, from the break of the COVID-19 Pandemic up until, 2021 and continuing the Mahabodhi Karuna Charitable hospital is the first and only dedicated COVID facility to treat the COVID-19 affected individuals in Ladakh. At present the UT, govt of Ladakh in collaboration with MKCH is running the hospital.  The hospital offers a comprehensive medical care set up for the COVID patients, and at present is being run in collaboration with Government of the Union territory Ladakh. The COVID-19 dedicated hospital has a dedicated basic life support ambulance round the clock. The hospital has a well-equipped intensive care unit, ventilators, and beds with oxygen support. All these facilities follow a strict infection prevention and control mechanism. </p>

      <h6 class=\"text-center mt-3 mb-5\">ALIGNED WITH</h6>

      <ul class=\"sdg-icons\">
        <li><img class=\"img img-responsive\" src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-17.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li class=\"sdg-logo\"><img class=\"img img-responsive\" src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg2.png");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-10.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-08.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
      </ul>

      <ul class=\"sdg-icons\">
        <li><img class=\"img img-responsive\" src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-06.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-05.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-03.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
      </ul>
      <br><br><br>
      
      
      <h6 class=\"mt-5 mb-5\">GLOBAL DOCTOR’S ASSOCIATION FOR THE HIMALAYAS</h6>

      <p>Health care in the Himalayan region is insufficient and cannot afford to go out of Ladakh for their medical treatment. Many people in the remote areas have serious difficulties about healthcare access and cost. The supply in Ladakh of doctors is very less and many people often suffer or die from lack of proper medical care. Furthermore, the costs of good medical treatments are too high for many people in Ladakh and it is beyond their capacity to pay. Sustained funding to support our hospital would help many people from Leh and Ladakh at low to no cost. For years, Venerable Bhikkhu Sanghasena, the visionary and humble monk who created the MIMC, has dreamt about starting an association that is dedicated to improving the health care system in the Himalayan region. Having already dedicated his life to the care, support and nurturing of the people of Ladakh, he has decided that now is the time to begin this huge undertaking. It is this new act of care and compassion that has brought about the Global Doctor’s Association for the Himalayas.</p>

      <p>Founder of The Global Doctors Association for the Himalayas, Venerable Bhikkhu Sanghasena decided to start this initiative to bring together doctors and medical professionals from around the world to deliver medical care and generate awareness on health and disease prevention in the Himalayas. The sole aim of establishing Global Doctors Association for the Himalayas, is to reach the unreachable and help deliver better medical care to the people of Himalayan region where there is inadequate medical care. It aims to serve as a platform for meeting, interaction, discussion, planning and execution of healthcare programmes in the Himalayan region. The association intends to organize medical camps for the poorest and the most isolated people in the Himalayan region for primary health check-up, distributing medicines, conducting operations and generating awareness on health and disease prevention.</p>

      <p>The Global Doctors Association has the capacity to change and better the health care facility in the Himalayan region. In the recent times, there has been an increase of health issues that have surfaced itself in the Himalayan regions, particularly in Ladakh. Health problems in Ladakh can be grouped into a few main categories, a high rate, of infectious and water borne diseases, poor environmental sanitation and hygiene, unsatisfactory nutritional status, health education, ignorance about health, and an unsatisfactory health care delivery system.</p>

      <p>Through the Global Doctors Association for the Himalayas, it makes it possible to reach inaccessible areas and help deliver better medical care to the people of the Himalayan region. It also serves as a platform for meeting, interaction, discussion, planning and execution of healthcare programmes in the Himalayan region which enables holistic community development in the health arena. You being a member only helps and aids us better our mission.</p>

      <h6 class=\"text-center mt-3 mb-5\">ALIGNED WITH</h6>

      <ul class=\"sdg-icons\">
        <li class=\"sdg-logo\"><img class=\"img img-responsive\" src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg2.png");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-04.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-03.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-17.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-10.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-08.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-05.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sdg_icons-06.jpg");
        echo "\" alt=\"sdg_icons-03\"></li>
      </ul>


      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 131
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 132
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 133
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 134
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/social-welfare/mahabodhi-karuna-charitable-hospital.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 134,  259 => 133,  254 => 132,  250 => 131,  239 => 123,  235 => 122,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  215 => 117,  211 => 116,  190 => 98,  186 => 97,  182 => 96,  175 => 92,  171 => 91,  167 => 90,  163 => 89,  85 => 14,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/mahabodhi-karuna-charitable-hospital.jpg'|theme}}\" alt=\"{{this.page.title}}\">
          <div class=\"text\">
              <h6>{{this.page.title}}</h6>
          </div>
      </div>
      <p>Health care and medical development in Ladakh is very poor and many people in the remote areas cannot effort to buy medicine or get proper treatments. Doctors in Ladakh are very rare and many people die or suffer from serious diseases due to lack of medical facilities available. Furthermore, the costs of good medical treatments are for many people of Ladakh beyond their capacity to pay.</p>

      <p>To provide free medical care to some of the poorest people and those living in the remotest villages of the Himalayan region, Bhikkhu Sanghasena, a Buddhist leader, meditation teacher, and founder of Mahabodhi International Meditation Centre (MIMC) established the Mahabodhi Karuna Charitable Hospital in 1995, at the Devachan campus of MIMC in Leh, Ladakh. The hospital has been delivering medical treatment for over two decades with the help of senior doctors retired from local government hospitals and visiting volunteer doctors from around the world. Our Mission is to improve the existing medical facilities at the hospital and to serve the people of Ladakh better.</p>

      <p>The public health care system needs to be better structured and resourced and periodically renewed and strengthened to improve the health of the population. A framework needs to be worked out that defines the core activities of a comprehensive public health system. In an attempt to ensure a better health care coverage, Mahabodhi International Mediation Centre (MIMC) has been supplementing the government’s efforts to providing a strong and effective public health services for improving the health of the population.</p>

      <p>Ladakh is the biggest district in India however there is only one hospital at its capital Leh, which is often crowded and lacks modern diagnostic machines and equipment’s. Heart disease is very common in Ladakh, but treatment and facilities are not readily available. Patients are therefore referred either to Chandigarh or to Delhi. Not everyone can afford this expensive treatment. To supplement medical services, and provide quality Medicare, Guruji Ven. Sanghasena Mahanyaka Thera started the Mahabodhi Karuna Charitable Hospital in 1996 by the kind initial support of Mother Park Sung Soo from South Korea. The hospital now has a mobile ambulance, to impart heath care in rural areas.</p> 

      <p>The residence of remote villages otherwise cannot access adequate health care given the geographical isolation, harsh environment and lack of general health education in Ladakh. Outfitted with the latest medical equipment’s among clean, well maintained facilities, the Karuna Hospital continues to set new standards of Health care in the region.</p> 

      <p>The Mahabodhi Hospital organizes annual summer medical camps in remote villages, attended by specialist doctors from our hospital and abroad.</p>
      
      <br>
      <p><strong>The Hospital offers allopathic medicine in the following departments:</strong></p>
      <ul class=\"department-list\">
        <li>Ophthalmology Department</li>
        <li>Medical Department</li>
        <li>Dental Department</li>
        <li>Surgical Department</li>
        <li>Gynaecology</li>
        <li>Maternity and child Department</li>
        <li>Anesthetic Department</li>
        <li>ENT</li>
        <li>X-Ray</li>
        <li>Diagnostic Laboratory</li>
        <li>OPD units</li>
      </ul>
      
      <br>
      <p><strong>The Hospital has state-of-the-art equipment and a Doctor at their services. Other services include:</strong></p>

      <ul class=\"department-list\">
        <li>Amchi Clinic and acupuncture clinic</li>
        <li>Mobile Clinic to render services to flung villages</li>
        <li>Health, Hygiene and health education program to people living in rural areas.</li>
        <li>A meditation Hall for mental health and ethical training</li>
        <li>Medical equipment, such as Ultra sonogram, video-endoscopes, ventilator, oximeter, Boyle’s Apparatus, etc. is available, and is aided with the allied services of laboratory, two operation theatres, X ray etc.</li>
      </ul>


      <br>
      <h6>How you can help</h6>
      <p>Since the hospital is charitable in nature, it renders free health care services/medicines to the poor and deserving patients, which comparatively are much larger in number. Compare to the very few who can afford to compensate to the services offered. As such, the income to the hospital is limited and self-sustenance will be a steep struggle ahead. All philanthropic groups, organizations, individuals could extend their help and support for purchase of life saving drugs, hospital equipment’s, and salary of the doctors / paramedics and for maintaining the central heating system. One can also contribute through volunteering to conduct/organize health camps or as a volunteer at the hospital if having a medical background.</p>


      <br>
      <h6>Updates & Activities</h6>
      <p>The Mahabodhi Karuna Charitable hospital has rendered its services and successfully done the following:</p>

      <ul class=\"department-list\">
        <li>Over 3000 surgeries done at the hospital.</li>
        <li>Mobile clinic with facilities for minor general surgery; cataract surgery and medical services in Leh and Kargil district.</li>
        <li>Delivered over 500 babies including c-sections surgeries.</li>
        <li>Pre-natal clinic to reduce infant mortality.</li>
        <li>Women clinic with over 250 surgeries.</li>
        <li>Under the Govt of India scheme this hospital served as a MOTHER NGO and established 3 fields NGO in remote areas to offer rural health services.</li>
        <li>Plastic and reconstruction surgery camp by the World’s renowned surgeons from Germany.</li>
        <li>Disability & rehab camp with support by an NGO in Mumbai.</li>
        <li>Dental and Women’s clinic was run by German teams.</li>
        <li>Traditional medicine</li>
      </ul>  

      <br><br><br>
      <h6>MAHABODHI KARUNA CHARITABLE HOSPITAL AT PRESENT A 100% COVID-19 DEDICATED FACILITY</h6>

      <p>The Mahabodhi Karuna Charitable hospital has been in the forefront of helping people during this natural calamity or crisis that has erupted in India by actively participating in relief and rehabilitation programmes. In the wake of COVID-19 pandemic outbreak in the Ladakh region, MKCH has been at the forefront in showing our concern and solidarity with our fellow native people as well as the global family at large.</p>

      <p>Beginning March 2020, from the break of the COVID-19 Pandemic up until, 2021 and continuing the Mahabodhi Karuna Charitable hospital is the first and only dedicated COVID facility to treat the COVID-19 affected individuals in Ladakh. At present the UT, govt of Ladakh in collaboration with MKCH is running the hospital.  The hospital offers a comprehensive medical care set up for the COVID patients, and at present is being run in collaboration with Government of the Union territory Ladakh. The COVID-19 dedicated hospital has a dedicated basic life support ambulance round the clock. The hospital has a well-equipped intensive care unit, ventilators, and beds with oxygen support. All these facilities follow a strict infection prevention and control mechanism. </p>

      <h6 class=\"text-center mt-3 mb-5\">ALIGNED WITH</h6>

      <ul class=\"sdg-icons\">
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-17.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li class=\"sdg-logo\"><img class=\"img img-responsive\" src=\"{{'assets/images/sdg2.png'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-10.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-08.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
      </ul>

      <ul class=\"sdg-icons\">
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-06.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-05.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-03.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
      </ul>
      <br><br><br>
      
      
      <h6 class=\"mt-5 mb-5\">GLOBAL DOCTOR’S ASSOCIATION FOR THE HIMALAYAS</h6>

      <p>Health care in the Himalayan region is insufficient and cannot afford to go out of Ladakh for their medical treatment. Many people in the remote areas have serious difficulties about healthcare access and cost. The supply in Ladakh of doctors is very less and many people often suffer or die from lack of proper medical care. Furthermore, the costs of good medical treatments are too high for many people in Ladakh and it is beyond their capacity to pay. Sustained funding to support our hospital would help many people from Leh and Ladakh at low to no cost. For years, Venerable Bhikkhu Sanghasena, the visionary and humble monk who created the MIMC, has dreamt about starting an association that is dedicated to improving the health care system in the Himalayan region. Having already dedicated his life to the care, support and nurturing of the people of Ladakh, he has decided that now is the time to begin this huge undertaking. It is this new act of care and compassion that has brought about the Global Doctor’s Association for the Himalayas.</p>

      <p>Founder of The Global Doctors Association for the Himalayas, Venerable Bhikkhu Sanghasena decided to start this initiative to bring together doctors and medical professionals from around the world to deliver medical care and generate awareness on health and disease prevention in the Himalayas. The sole aim of establishing Global Doctors Association for the Himalayas, is to reach the unreachable and help deliver better medical care to the people of Himalayan region where there is inadequate medical care. It aims to serve as a platform for meeting, interaction, discussion, planning and execution of healthcare programmes in the Himalayan region. The association intends to organize medical camps for the poorest and the most isolated people in the Himalayan region for primary health check-up, distributing medicines, conducting operations and generating awareness on health and disease prevention.</p>

      <p>The Global Doctors Association has the capacity to change and better the health care facility in the Himalayan region. In the recent times, there has been an increase of health issues that have surfaced itself in the Himalayan regions, particularly in Ladakh. Health problems in Ladakh can be grouped into a few main categories, a high rate, of infectious and water borne diseases, poor environmental sanitation and hygiene, unsatisfactory nutritional status, health education, ignorance about health, and an unsatisfactory health care delivery system.</p>

      <p>Through the Global Doctors Association for the Himalayas, it makes it possible to reach inaccessible areas and help deliver better medical care to the people of the Himalayan region. It also serves as a platform for meeting, interaction, discussion, planning and execution of healthcare programmes in the Himalayan region which enables holistic community development in the health arena. You being a member only helps and aids us better our mission.</p>

      <h6 class=\"text-center mt-3 mb-5\">ALIGNED WITH</h6>

      <ul class=\"sdg-icons\">
        <li class=\"sdg-logo\"><img class=\"img img-responsive\" src=\"{{'assets/images/sdg2.png'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-04.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-03.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-17.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-10.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-08.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-05.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
        <li><img class=\"img img-responsive\" src=\"{{'assets/images/sdg_icons-06.jpg'|theme}}\" alt=\"sdg_icons-03\"></li>
      </ul>


      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/social-welfare/mahabodhi-karuna-charitable-hospital.htm", "");
    }
}
