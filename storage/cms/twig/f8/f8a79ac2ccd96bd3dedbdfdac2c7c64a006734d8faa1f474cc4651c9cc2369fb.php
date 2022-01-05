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

/* C:\laragon\www\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/timeline.htm */
class __TwigTemplate_d9ec7bf311ca599b73a988aa518543ef1ee6910ff4693259397dbecdb65e6178 extends \Twig\Template
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
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
    <div class=\"col-md-12\">
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h1></div>
            <p class=\"heading-disc\">Some intro text about the timeline Ven. Bhikkhu Sanghasena Some intro text about the timeline Ven. Bhikkhu Sanghasena Some intro text about the timeline Ven. Bhikkhu Sanghasena . </p>
        </div>
      </div>


      <div class=\"main-timeline\">
        
        <div class=\"timeline\">
          <a href=\"\" class=\"timeline-content\">
            <div class=\"timeline-year\">
                <span>1986</span>
            </div>
            <div class=\"inner-content\">
                <h3 class=\"title\"> MIMC</h3>
                <p class=\"description\">Venerable Bhikkhu Sanghasena founded the Mahabodhi International Meditation Centre (MIMC) in Leh, Ladakh.</p>
            </div>
          </a>
        </div>
      
        <div class=\"timeline\">
          <a href=\"\" class=\"timeline-content\">
            <div class=\"timeline-year\">
                <span>1991</span>
            </div>
            <div class=\"inner-content\">
                <h3 class=\"title\"> Mahabodhi Devachan Campus</h3>
                <p class=\"description\">Established the Mahabodhi Devachan campus on 200 acres of barren and isolated land in Choglamsar, approximately 10 kilometres away from Leh town</p>
            </div>
          </a>
        </div>
      
        <div class=\"timeline\">
            <a href=\"\" class=\"timeline-content\">
              <div class=\"timeline-year\">
                  <span>1991</span>
              </div>
              <div class=\"inner-content\">
                  <h3 class=\"title\">Mahabodhi Girls Hostel</h3>
                  <p class=\"description\">Established the Mahabodhi Girls Hostel, a pioneering project providing holistic education and a Safe home environment for under-privileged girls from remote homesteads scattered across Ladakh.</p>
              </div>
            </a>
          </div>
      
        <div class=\"timeline\">
          <a href=\"\" class=\"timeline-content\">
            <div class=\"timeline-year\">
                <span>1992</span>
            </div>
            <div class=\"inner-content\">
                <h3 class=\"title\">Established Mahabodhi Residential School</h3>
                <p class=\"description\">Established the Mahabodhi Residential School, dedicated to providing high quality holistic Education aimed at eradicating illiteracy and poverty across the region. This school is now providing High School level education to some 600 students.</p>
            </div>
          </a>
        </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1992</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Established Mahabodhi Meditation Centre</h3>
              <p class=\"description\">Established the Mahabodhi Meditation Centre, dedicated to promoting physical and mental Well-being, social harmony and world peace.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1992</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Established Mahabodhi Charitable Hospital</h3>
              <p class=\"description\">Established the Mahabodhi Charitable Hospital - the first non-governmental hospital in Ladakh - dedicated to providing healthcare and support for under- privileged patients through a purpose-built and well-equipped 50 bed hospital.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1992</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Established Mahabodhi Green Project</h3>
              <p class=\"description\">Started the Mahabodhi Green Project, under which tens of thousands of trees have been Planted on the once barren and isolated land at Mahabodhi Devachan.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1993</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Mobile Health Clinic</h3>
              <p class=\"description\">Established the Mahabodhi Mobile Health Clinic, dedicated to providing regular healthcare and dental visits for communities in remote and previously inaccessible areas.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1995</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Home for the Aged & Destitute</h3>
              <p class=\"description\">Established the Mahabodhi Home for the Aged and Destitute, a pioneering project dedicated to providing a safe residential home, personal and social care, and respect for the most vulnerable members of Ladakhi society.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1996</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Boys Hostel</h3>
              <p class=\"description\">Established the Mahabodhi Boys Hostel, dedicated to providing holistic education and a safe home environment for under-privileged boys from remote homesteads scattered across Ladakh. At present, there are some 150 boys living in this hostel. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1996</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi New Delhi Branch</h3>
              <p class=\"description\">Established the Mahabodhi New Delhi Branch.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1997</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Nunnery</h3>
              <p class=\"description\">Established the Mahabodhi Nunnery, a truly pioneering project dedicated to providing a fully integrated and holistic education for young nuns. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1999</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi School Tingmosgang</h3>
              <p class=\"description\">Founded the Mahabodhi Branch School in Tingmosgang village, dedicated to providing high- quality holistic education to students in this remote rural location, where at present some 150 students attend each day. Since 2001, scores of Mahabodhi Residential School graduates have travelled to Bangalore, South India to pursue their higher education studies with the ongoing encouragement and support of the Mahabodhi International Meditation Centre.
                </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2002</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Acharya Buddharakkhita Humanitarian Award</h3>
              <p class=\"description\">Constituted the “Acharya Buddharakkhita Humanitarian Award” – awarded to those noble citizens, whose service to the poorest and most marginalized communities warrants both praise and recognition. The late KushokBakula Rinpoche (Head Lama of Ladakh), Shri. ThupstanTsewang (Former Honourable Member of Parliament for Ladakh), Shri. B.K. Modi (Chairman and Founder of Spice Global India) & Lamdon Social Welfare, Leh are amongst the list of award recipients.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2004</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Jetavana Monastery</h3>
              <p class=\"description\">Established the Mahabodhi Jetavana Monastery, dedicated to providing both traditional spiritual and modern-based education to young monks.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2004</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Title</h3>
              <p class=\"description\">Since 1996, Venerable Bhikkhu Sanghasena has been an active member of the International Association for Religious Freedom (IARF) and the International Association of Liberal Religious Women(IALRW), actively participating in their conferences in Italy, Hungary, South Korea and various parts of India. Besides this, he has also organised various interfaith meetings, seminars and dialogues aimed at promoting greater understanding and peace throughout the region. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2005</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Elder Women’s Literacy Programme</h3>
              <p class=\"description\">Established the Mahabodhi Elder Women’s Literacy Programme, dedicated to providing basic education and empowerment for elderly women across the Ladakh region. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2005</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">School For Blind & Visually Impaired</h3>
              <p class=\"description\">Established the first school and hostel for blind and visually-impaired students in Ladakh, which was inaugurated by His Excellency Dr. A.P.J. Abdul Kalam (the then President of India), in the presence of His Excellency the Governor and the Honourable Chief Minister of Jammu and Kashmir. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2006</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi School Bodhkharbu</h3>
              <p class=\"description\">Established the Mahabodhi Branch School in Bodhkharbu, dedicated to providing high quality holistic education for students living in this remote and under-developed village in the Kargil district of Ladakh.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2007</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Vocational Training Programme</h3>
              <p class=\"description\">Established the Mahabodhi Vocational Training Programme, a pioneering project dedicated to providing a practical vocational platform for school drop-outs, enabling them to develop and exhibit their talents in music, traditional woodcarving and painting, as well as providing them with a vital means of generating income. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2008</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Branch in Jammu</h3>
              <p class=\"description\">Established the Mahabodhi Branch in Jammu district, dedicated to fostering and promoting social and mental harmony, as well as world peace.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2008</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">International Youth Sangha Conference</h3>
              <p class=\"description\">Organised a 5-day international youth Sangha conference in association with the World Buddhist Sangha Council, whereupon representatives of the Theravada and Mahayana Buddhist traditions from different countries, including Taiwan, Sri Lanka, Malaysia and India, came together in order to promote greater understanding, universal brotherhood and world peace. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2009</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Sambodhi Retreat Centre</h3>
              <p class=\"description\">The incredibly beautiful Sambodhi Retreat Centre was design to create a unique, world renowned contemplative venue which is appealing to all the seekers of truth and lovers of peace, irrespective of their religious inclinations, caste and creed. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2010</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">MIMC Meditation Branch in Chandigarh</h3>
              <p class=\"description\">Established the Mahabodhi Meditation Centre Branch in Chandigarh, dedicated to promoting social and mental harmony, and world peace.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2010</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Girls Hostel in Chandigarh</h3>
              <p class=\"description\">Established the Mahabodhi Girls Hostel in Chandigarh, wherein 100 female students can be accommodated in a safe home environment where they can concentrate on their higher education studies. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2012</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">IFBHL</h3>
              <p class=\"description\">Constituted the International Festival of the Buddhist Heritage of Ladakh (IFBHL) as an annual feature in the calendar of MIMC.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2012</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Dhamma Dipa Swezigon Pagoda</h3>
              <p class=\"description\">A beautiful and magnanimous Burmese style Dhamma Dipa Swezigon Pagoda was constructed in the center of the Mahabodhi Campus. The ground breaking ceremony was done by Most Ven. Ashin Nyanissara Sayadaw from Myanmar and his devotees.</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2013</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">International Mahakaruna Diwas</h3>
              <p class=\"description\">Constituted the International Mahakaruna Diwas Celebration dedicated to promote Universal Compassion.</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2014</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">IFBHL Lifetime achievement Award</h3>
              <p class=\"description\">Constitute the International Festival of Buddhist Heritage of Ladakh (IFBHL) Lifetime achievement Award. The recipients of the Award are DatukSiri Dr. Victor Wee President Buddhist Gem Fellowship Malaysia, Young Drukpa Association of Ladakh (YDA), Shri TashiRapgyas renowned Historian of Ladakh, Shri ZangpoSerthi Film Maker, Dr. RavindraNathPanthDiresctorMahavihara Bihar and Shri Javdev Baba BijalbhaiSondarva,</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2015</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Global Interfaith WASH Alliance</h3>
              <p class=\"description\">Started the Global Interfaith WASH Alliance, Ladakh Chapter dedicated to the promotion of clean drinking water, Sanitation and Hygiene in Ladakh.</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2016</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Safe the Himalaya Foundation</h3>
              <p class=\"description\">Established the Safe the Himalaya Foundation (SHF), registered in New-Delhi dedicated to the conservation and Preservation of the Ancient Himalayan values on environment.</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2016</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Foundation for Indian Buddhist</h3>
              <p class=\"description\">Established the Foundation for Indian Buddhist (FIB), registered in New-Delhi dedicated to the promotion of friendship between the Traditional Buddhist’s and the Newly converted Buddhist’s of India.</p>
          </div>
        </a>
      </div>

      </div><!--  end main-timeline -->
    </div> <!--  .col-md-12 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/timeline.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-12\">
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>{{this.page.title}}</h1></div>
            <p class=\"heading-disc\">Some intro text about the timeline Ven. Bhikkhu Sanghasena Some intro text about the timeline Ven. Bhikkhu Sanghasena Some intro text about the timeline Ven. Bhikkhu Sanghasena . </p>
        </div>
      </div>


      <div class=\"main-timeline\">
        
        <div class=\"timeline\">
          <a href=\"\" class=\"timeline-content\">
            <div class=\"timeline-year\">
                <span>1986</span>
            </div>
            <div class=\"inner-content\">
                <h3 class=\"title\"> MIMC</h3>
                <p class=\"description\">Venerable Bhikkhu Sanghasena founded the Mahabodhi International Meditation Centre (MIMC) in Leh, Ladakh.</p>
            </div>
          </a>
        </div>
      
        <div class=\"timeline\">
          <a href=\"\" class=\"timeline-content\">
            <div class=\"timeline-year\">
                <span>1991</span>
            </div>
            <div class=\"inner-content\">
                <h3 class=\"title\"> Mahabodhi Devachan Campus</h3>
                <p class=\"description\">Established the Mahabodhi Devachan campus on 200 acres of barren and isolated land in Choglamsar, approximately 10 kilometres away from Leh town</p>
            </div>
          </a>
        </div>
      
        <div class=\"timeline\">
            <a href=\"\" class=\"timeline-content\">
              <div class=\"timeline-year\">
                  <span>1991</span>
              </div>
              <div class=\"inner-content\">
                  <h3 class=\"title\">Mahabodhi Girls Hostel</h3>
                  <p class=\"description\">Established the Mahabodhi Girls Hostel, a pioneering project providing holistic education and a Safe home environment for under-privileged girls from remote homesteads scattered across Ladakh.</p>
              </div>
            </a>
          </div>
      
        <div class=\"timeline\">
          <a href=\"\" class=\"timeline-content\">
            <div class=\"timeline-year\">
                <span>1992</span>
            </div>
            <div class=\"inner-content\">
                <h3 class=\"title\">Established Mahabodhi Residential School</h3>
                <p class=\"description\">Established the Mahabodhi Residential School, dedicated to providing high quality holistic Education aimed at eradicating illiteracy and poverty across the region. This school is now providing High School level education to some 600 students.</p>
            </div>
          </a>
        </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1992</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Established Mahabodhi Meditation Centre</h3>
              <p class=\"description\">Established the Mahabodhi Meditation Centre, dedicated to promoting physical and mental Well-being, social harmony and world peace.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1992</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Established Mahabodhi Charitable Hospital</h3>
              <p class=\"description\">Established the Mahabodhi Charitable Hospital - the first non-governmental hospital in Ladakh - dedicated to providing healthcare and support for under- privileged patients through a purpose-built and well-equipped 50 bed hospital.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1992</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Established Mahabodhi Green Project</h3>
              <p class=\"description\">Started the Mahabodhi Green Project, under which tens of thousands of trees have been Planted on the once barren and isolated land at Mahabodhi Devachan.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1993</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Mobile Health Clinic</h3>
              <p class=\"description\">Established the Mahabodhi Mobile Health Clinic, dedicated to providing regular healthcare and dental visits for communities in remote and previously inaccessible areas.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1995</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Home for the Aged & Destitute</h3>
              <p class=\"description\">Established the Mahabodhi Home for the Aged and Destitute, a pioneering project dedicated to providing a safe residential home, personal and social care, and respect for the most vulnerable members of Ladakhi society.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1996</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Boys Hostel</h3>
              <p class=\"description\">Established the Mahabodhi Boys Hostel, dedicated to providing holistic education and a safe home environment for under-privileged boys from remote homesteads scattered across Ladakh. At present, there are some 150 boys living in this hostel. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1996</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi New Delhi Branch</h3>
              <p class=\"description\">Established the Mahabodhi New Delhi Branch.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1997</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Nunnery</h3>
              <p class=\"description\">Established the Mahabodhi Nunnery, a truly pioneering project dedicated to providing a fully integrated and holistic education for young nuns. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>1999</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi School Tingmosgang</h3>
              <p class=\"description\">Founded the Mahabodhi Branch School in Tingmosgang village, dedicated to providing high- quality holistic education to students in this remote rural location, where at present some 150 students attend each day. Since 2001, scores of Mahabodhi Residential School graduates have travelled to Bangalore, South India to pursue their higher education studies with the ongoing encouragement and support of the Mahabodhi International Meditation Centre.
                </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2002</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Acharya Buddharakkhita Humanitarian Award</h3>
              <p class=\"description\">Constituted the “Acharya Buddharakkhita Humanitarian Award” – awarded to those noble citizens, whose service to the poorest and most marginalized communities warrants both praise and recognition. The late KushokBakula Rinpoche (Head Lama of Ladakh), Shri. ThupstanTsewang (Former Honourable Member of Parliament for Ladakh), Shri. B.K. Modi (Chairman and Founder of Spice Global India) & Lamdon Social Welfare, Leh are amongst the list of award recipients.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2004</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Jetavana Monastery</h3>
              <p class=\"description\">Established the Mahabodhi Jetavana Monastery, dedicated to providing both traditional spiritual and modern-based education to young monks.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2004</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Title</h3>
              <p class=\"description\">Since 1996, Venerable Bhikkhu Sanghasena has been an active member of the International Association for Religious Freedom (IARF) and the International Association of Liberal Religious Women(IALRW), actively participating in their conferences in Italy, Hungary, South Korea and various parts of India. Besides this, he has also organised various interfaith meetings, seminars and dialogues aimed at promoting greater understanding and peace throughout the region. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2005</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Elder Women’s Literacy Programme</h3>
              <p class=\"description\">Established the Mahabodhi Elder Women’s Literacy Programme, dedicated to providing basic education and empowerment for elderly women across the Ladakh region. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2005</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">School For Blind & Visually Impaired</h3>
              <p class=\"description\">Established the first school and hostel for blind and visually-impaired students in Ladakh, which was inaugurated by His Excellency Dr. A.P.J. Abdul Kalam (the then President of India), in the presence of His Excellency the Governor and the Honourable Chief Minister of Jammu and Kashmir. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2006</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi School Bodhkharbu</h3>
              <p class=\"description\">Established the Mahabodhi Branch School in Bodhkharbu, dedicated to providing high quality holistic education for students living in this remote and under-developed village in the Kargil district of Ladakh.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2007</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Vocational Training Programme</h3>
              <p class=\"description\">Established the Mahabodhi Vocational Training Programme, a pioneering project dedicated to providing a practical vocational platform for school drop-outs, enabling them to develop and exhibit their talents in music, traditional woodcarving and painting, as well as providing them with a vital means of generating income. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2008</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Mahabodhi Branch in Jammu</h3>
              <p class=\"description\">Established the Mahabodhi Branch in Jammu district, dedicated to fostering and promoting social and mental harmony, as well as world peace.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2008</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">International Youth Sangha Conference</h3>
              <p class=\"description\">Organised a 5-day international youth Sangha conference in association with the World Buddhist Sangha Council, whereupon representatives of the Theravada and Mahayana Buddhist traditions from different countries, including Taiwan, Sri Lanka, Malaysia and India, came together in order to promote greater understanding, universal brotherhood and world peace. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2009</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Sambodhi Retreat Centre</h3>
              <p class=\"description\">The incredibly beautiful Sambodhi Retreat Centre was design to create a unique, world renowned contemplative venue which is appealing to all the seekers of truth and lovers of peace, irrespective of their religious inclinations, caste and creed. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2010</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">MIMC Meditation Branch in Chandigarh</h3>
              <p class=\"description\">Established the Mahabodhi Meditation Centre Branch in Chandigarh, dedicated to promoting social and mental harmony, and world peace.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2010</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Girls Hostel in Chandigarh</h3>
              <p class=\"description\">Established the Mahabodhi Girls Hostel in Chandigarh, wherein 100 female students can be accommodated in a safe home environment where they can concentrate on their higher education studies. </p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2012</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">IFBHL</h3>
              <p class=\"description\">Constituted the International Festival of the Buddhist Heritage of Ladakh (IFBHL) as an annual feature in the calendar of MIMC.</p>
          </div>
        </a>
      </div>
      
      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2012</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Dhamma Dipa Swezigon Pagoda</h3>
              <p class=\"description\">A beautiful and magnanimous Burmese style Dhamma Dipa Swezigon Pagoda was constructed in the center of the Mahabodhi Campus. The ground breaking ceremony was done by Most Ven. Ashin Nyanissara Sayadaw from Myanmar and his devotees.</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2013</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">International Mahakaruna Diwas</h3>
              <p class=\"description\">Constituted the International Mahakaruna Diwas Celebration dedicated to promote Universal Compassion.</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2014</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">IFBHL Lifetime achievement Award</h3>
              <p class=\"description\">Constitute the International Festival of Buddhist Heritage of Ladakh (IFBHL) Lifetime achievement Award. The recipients of the Award are DatukSiri Dr. Victor Wee President Buddhist Gem Fellowship Malaysia, Young Drukpa Association of Ladakh (YDA), Shri TashiRapgyas renowned Historian of Ladakh, Shri ZangpoSerthi Film Maker, Dr. RavindraNathPanthDiresctorMahavihara Bihar and Shri Javdev Baba BijalbhaiSondarva,</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2015</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Global Interfaith WASH Alliance</h3>
              <p class=\"description\">Started the Global Interfaith WASH Alliance, Ladakh Chapter dedicated to the promotion of clean drinking water, Sanitation and Hygiene in Ladakh.</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2016</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Safe the Himalaya Foundation</h3>
              <p class=\"description\">Established the Safe the Himalaya Foundation (SHF), registered in New-Delhi dedicated to the conservation and Preservation of the Ancient Himalayan values on environment.</p>
          </div>
        </a>
      </div>

      <div class=\"timeline\">
        <a href=\"\" class=\"timeline-content\">
          <div class=\"timeline-year\">
              <span>2016</span>
          </div>
          <div class=\"inner-content\">
              <h3 class=\"title\">Foundation for Indian Buddhist</h3>
              <p class=\"description\">Established the Foundation for Indian Buddhist (FIB), registered in New-Delhi dedicated to the promotion of friendship between the Traditional Buddhist’s and the Newly converted Buddhist’s of India.</p>
          </div>
        </a>
      </div>

      </div><!--  end main-timeline -->
    </div> <!--  .col-md-12 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/timeline.htm", "");
    }
}
