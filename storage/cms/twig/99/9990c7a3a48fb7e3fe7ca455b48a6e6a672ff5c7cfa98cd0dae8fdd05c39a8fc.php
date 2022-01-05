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

/* C:\laragon\www\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/awards-and-accolades.htm */
class __TwigTemplate_cb37cb64034bb6c0b072582129fe449f997b9a7a1b4f83514ef926dd6b048a56 extends \Twig\Template
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
        $tags = array("partial" => 99);
        $filters = array("escape" => 6);
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
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h1></div>
            <p class=\"heading-disc\">Some intro text Some intro text Some intro text Some intro text Some intro text Some intro text Some intro textSome intro text Some intro textSome intro text Some intro textSome intro textSome intro textSome intro textSome intro textSome intro textSome intro textSome intro textSome intro text . </p>
        </div>
      </div>

      <div class=\"list-type2\">
        <ol>
        <li>
          <a href=\"\">In public recognition of his selfless service to society, the Ministry of Social Justice and Empowerment, Government of India, presented him with the “National Award for the Welfare of People with Disabilities” in 3rd December, 2000.</a>
        </li> 
        <li>
          <a href=\"\">The Gandhi Peace Foundation, India, honoured him with its prestigious “World Peace Award for the Year 2004” in recognition of his work for world peace, interfaith service and inter-religious harmony. </a>
        </li>
        <li>
          <a href=\"\">In 1999, his name was included in the prestigious book “Marquis’ Who’s Who”. “Marquis’ Who’s Who” believes men and women around the globe whose achievements influence people of today are worthy of permanent record.</a>
        </li> 
        <li>
          <a href=\"\">The American Biographical Institute recognized Venerable Bhikkhu Sanghasena as its “Man of the Year 2002”. </a>
        </li>
        <li>
          <a href=\"\">He was nominated as the Chancellor of the International Association of Educators for World Peace (IAEWP), based in Huntsville, USA, for the Jammu and Kashmir State Chapter, India in the Year 2004. </a>
        </li>
        <li>
          <a href=\"\">On the occasion of the United Nations “World Environment Day, Third World Congress”, which was held in Verbania, Italy, in 2005, the “Peace Environment Award” was presented to Venerable Bhikkhu Sanghasena in recognition of his invaluable contribution to a “culture of peace through education and international friendship”. </a>
        </li>
        <li>
          <a href=\"\">The International Centre for Advanced Studies and Research in Global Environment and International Institute of Ecology and Environment, Delhi has also appointed Venerable Bhikkhu Sanghasena as their Global Ambassador and Regional Director. </a>
        </li>
        <li>
          <a href=\"\">Rajiv Gandhi Award 2006: was presented to Ven. Sanghasena by Hon’ble Chief Minister J&K state JenabGhulamNabi Azad, On 21 May 2006 at ChashmaShahiBagh,Srinager.</a>
        </li> 
        <li>
          <a href=\"\">The Ladakh Buddhist Association presented the “Bharat Ratna Dr. Bhim Rao Ambedkar Award 2009” to Venerable Bhikkhu Sanghasena in recognition of his invaluable humanitarian and benevolent service to the needy people of Ladakh. </a>
        </li>
        <li>
          <a href=\"\">The Ashwagosha Buddhist Foundation, based in Nagpur, India, presented the “Sakyamuni Buddha International Award 2009” to Venerable Bhikkhu Sanghasena. </a>
        </li>
        <li>
          <a href=\"\">Certificate of Achievement presented by Ladakh Buddhist Youth Association on 14th April 2009. </a>
        </li>
          
        <li>
          <a href=\"\">The Dharma Buddhist University of Malaysia conferred their Honourary Degree of the Doctorate of Philosophy to Venerable Bhikkhu Sanghasena on 31st May, 2009. </a>
        </li>
        <li>
          <a href=\"\">On the occasion of the “World Management Congress”, Venerable Bhikkhu Sanghasena was awarded with the “Lifetime Achievement Award” in the field of spirituality and religious studies, which was jointly constituted and awarded by the International Association of Educators for World Peace (IAEWP) (affiliated to the United Nations), based in the USA, the Global Open University Nagaland, Confederation of Indian Universities, the Educational Standards and Testing Council of India at the India International Centre, New Delhi on 30th -31st Dec, 2010.</a>
        </li> 
        <li>
          <a href=\"\">Awarded with Honorary Title of “Tripitaka Grantha Visharada” on May 16th 2011 in Sri Lanka. </a>
        </li>
        <li>
          <a href=\"\">Prestigious Title Chief Sangha Nayaka of Northern India Presented in Colombo. </a>
        </li>
        <li>
          <a href=\"\">Awarded with “President Commendation award” by President of Sri - Lanka in 2011. </a>
        </li>
        <li>
          <a href=\"\">Awarded with the 1st World Outstanding Buddhist Leader award by the world fellowship of Buddhist Youth(WFBY), Thailand. </a>
        </li>
        <li>
          <a href=\"\">Awarded with “TARA AWARD” by most Ven. Mae Chee Sansanee Sthirasuta, the founder of Sathira-Dhammasathan Savika Sikkhalaya, Thailand on the 24th of August 2014.</a>
        </li> 
        <li>
          <a href=\"\">World Peace Ambassador Award by Master Satthitham Pensuk, the founder of ‘Save the World Foundation’, Thailand in the year 2014 </a>
        </li>
        <li>
          <a href=\"\">The World Spiritual Education and Development Award 2014 was presented to Ven. Bhikkhu Sanghasena by His Excellency Governor of Gujarat state, Prof, Om Prakash Kohil on 20th December, 2014, New Delhi. </a>
        </li>
        <li>
          <a href=\"\">On the 7th of January 2015, He was awarded with “Buddhism Today Award 2014” Presented by Most Ven. Thich Nhat Tu from Vietnam. </a>
        </li>
        <li>
          <a href=\"\">The On the occasion of the International Human Rights Day 2016 and the 6th BHARATIYA MANAV ADHIKAR SAMMAN Award Ceremony at the India Islamic Centre Auditorium- New Delhi, on the 10th of December 2016, the All India Council of Human Rights, Liberties and Social Justice -(AICHLS) along with National Council of News and Broadcasting(NCNB), Asian Human Rights Council (AHRC) , Amnesty Worldwide (AW) , Universal Mission For Peace And Harmony (UMPH) And International Institute Of Human Rights Studies (IIHRS)” presented the prestigious “Ambassador for Peace Award- ‘2016” to Most Venerable Bhikkhu Sanghasena for his outstanding contribution for Peace , Harmony , Protecting and Promoting Human Rights and service to Humanity. </a>
        </li>
        
        <li>
          <a href=\"\">Awarded with 
          <p>
            For the past 25 years Venerable Bhikkhu Sanghasena has travelled extensively, visiting many countries around the world, to share the Buddha-Dhamma through numerous international conferences, seminars and workshops. In particular, he has made many regular visits to the USA, Canada, Brazil, Australia, the UK, Germany, Austria, Switzerland, Belgium, Denmark, the Netherlands, Italy, Israel, Japan, South Korea, China, Taiwan, Hong Kong, Singapore, the Philippines, Indonesia, Thailand, Myanmar and several parts of India.
          </p> 
          <p>
            Wherever he goes, and whomever he meets, Venerable Bhikkhu Sanghasena urges all to promote cultural and spiritual values, literacy, environmental protection, non-violence, inter-religious harmony and peaceful co-existence, the concept of a single global village and world peace. He actively supports the elevation of the status of women, the provision of compassionate care and support for poverty- stricken people, and raises his voice against destructive armaments, degradation of the environment and ecology, human injustice, consumerism, economic imbalance and racism. 
          </p>
        </a>
        </li>
      </ol>
      </div>

      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 99
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/ven-bhikkhu-sanghasena"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 100
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/awards-and-accolades.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 101,  169 => 100,  165 => 99,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>{{this.page.title}}</h1></div>
            <p class=\"heading-disc\">Some intro text Some intro text Some intro text Some intro text Some intro text Some intro text Some intro textSome intro text Some intro textSome intro text Some intro textSome intro textSome intro textSome intro textSome intro textSome intro textSome intro textSome intro textSome intro text . </p>
        </div>
      </div>

      <div class=\"list-type2\">
        <ol>
        <li>
          <a href=\"\">In public recognition of his selfless service to society, the Ministry of Social Justice and Empowerment, Government of India, presented him with the “National Award for the Welfare of People with Disabilities” in 3rd December, 2000.</a>
        </li> 
        <li>
          <a href=\"\">The Gandhi Peace Foundation, India, honoured him with its prestigious “World Peace Award for the Year 2004” in recognition of his work for world peace, interfaith service and inter-religious harmony. </a>
        </li>
        <li>
          <a href=\"\">In 1999, his name was included in the prestigious book “Marquis’ Who’s Who”. “Marquis’ Who’s Who” believes men and women around the globe whose achievements influence people of today are worthy of permanent record.</a>
        </li> 
        <li>
          <a href=\"\">The American Biographical Institute recognized Venerable Bhikkhu Sanghasena as its “Man of the Year 2002”. </a>
        </li>
        <li>
          <a href=\"\">He was nominated as the Chancellor of the International Association of Educators for World Peace (IAEWP), based in Huntsville, USA, for the Jammu and Kashmir State Chapter, India in the Year 2004. </a>
        </li>
        <li>
          <a href=\"\">On the occasion of the United Nations “World Environment Day, Third World Congress”, which was held in Verbania, Italy, in 2005, the “Peace Environment Award” was presented to Venerable Bhikkhu Sanghasena in recognition of his invaluable contribution to a “culture of peace through education and international friendship”. </a>
        </li>
        <li>
          <a href=\"\">The International Centre for Advanced Studies and Research in Global Environment and International Institute of Ecology and Environment, Delhi has also appointed Venerable Bhikkhu Sanghasena as their Global Ambassador and Regional Director. </a>
        </li>
        <li>
          <a href=\"\">Rajiv Gandhi Award 2006: was presented to Ven. Sanghasena by Hon’ble Chief Minister J&K state JenabGhulamNabi Azad, On 21 May 2006 at ChashmaShahiBagh,Srinager.</a>
        </li> 
        <li>
          <a href=\"\">The Ladakh Buddhist Association presented the “Bharat Ratna Dr. Bhim Rao Ambedkar Award 2009” to Venerable Bhikkhu Sanghasena in recognition of his invaluable humanitarian and benevolent service to the needy people of Ladakh. </a>
        </li>
        <li>
          <a href=\"\">The Ashwagosha Buddhist Foundation, based in Nagpur, India, presented the “Sakyamuni Buddha International Award 2009” to Venerable Bhikkhu Sanghasena. </a>
        </li>
        <li>
          <a href=\"\">Certificate of Achievement presented by Ladakh Buddhist Youth Association on 14th April 2009. </a>
        </li>
          
        <li>
          <a href=\"\">The Dharma Buddhist University of Malaysia conferred their Honourary Degree of the Doctorate of Philosophy to Venerable Bhikkhu Sanghasena on 31st May, 2009. </a>
        </li>
        <li>
          <a href=\"\">On the occasion of the “World Management Congress”, Venerable Bhikkhu Sanghasena was awarded with the “Lifetime Achievement Award” in the field of spirituality and religious studies, which was jointly constituted and awarded by the International Association of Educators for World Peace (IAEWP) (affiliated to the United Nations), based in the USA, the Global Open University Nagaland, Confederation of Indian Universities, the Educational Standards and Testing Council of India at the India International Centre, New Delhi on 30th -31st Dec, 2010.</a>
        </li> 
        <li>
          <a href=\"\">Awarded with Honorary Title of “Tripitaka Grantha Visharada” on May 16th 2011 in Sri Lanka. </a>
        </li>
        <li>
          <a href=\"\">Prestigious Title Chief Sangha Nayaka of Northern India Presented in Colombo. </a>
        </li>
        <li>
          <a href=\"\">Awarded with “President Commendation award” by President of Sri - Lanka in 2011. </a>
        </li>
        <li>
          <a href=\"\">Awarded with the 1st World Outstanding Buddhist Leader award by the world fellowship of Buddhist Youth(WFBY), Thailand. </a>
        </li>
        <li>
          <a href=\"\">Awarded with “TARA AWARD” by most Ven. Mae Chee Sansanee Sthirasuta, the founder of Sathira-Dhammasathan Savika Sikkhalaya, Thailand on the 24th of August 2014.</a>
        </li> 
        <li>
          <a href=\"\">World Peace Ambassador Award by Master Satthitham Pensuk, the founder of ‘Save the World Foundation’, Thailand in the year 2014 </a>
        </li>
        <li>
          <a href=\"\">The World Spiritual Education and Development Award 2014 was presented to Ven. Bhikkhu Sanghasena by His Excellency Governor of Gujarat state, Prof, Om Prakash Kohil on 20th December, 2014, New Delhi. </a>
        </li>
        <li>
          <a href=\"\">On the 7th of January 2015, He was awarded with “Buddhism Today Award 2014” Presented by Most Ven. Thich Nhat Tu from Vietnam. </a>
        </li>
        <li>
          <a href=\"\">The On the occasion of the International Human Rights Day 2016 and the 6th BHARATIYA MANAV ADHIKAR SAMMAN Award Ceremony at the India Islamic Centre Auditorium- New Delhi, on the 10th of December 2016, the All India Council of Human Rights, Liberties and Social Justice -(AICHLS) along with National Council of News and Broadcasting(NCNB), Asian Human Rights Council (AHRC) , Amnesty Worldwide (AW) , Universal Mission For Peace And Harmony (UMPH) And International Institute Of Human Rights Studies (IIHRS)” presented the prestigious “Ambassador for Peace Award- ‘2016” to Most Venerable Bhikkhu Sanghasena for his outstanding contribution for Peace , Harmony , Protecting and Promoting Human Rights and service to Humanity. </a>
        </li>
        
        <li>
          <a href=\"\">Awarded with 
          <p>
            For the past 25 years Venerable Bhikkhu Sanghasena has travelled extensively, visiting many countries around the world, to share the Buddha-Dhamma through numerous international conferences, seminars and workshops. In particular, he has made many regular visits to the USA, Canada, Brazil, Australia, the UK, Germany, Austria, Switzerland, Belgium, Denmark, the Netherlands, Italy, Israel, Japan, South Korea, China, Taiwan, Hong Kong, Singapore, the Philippines, Indonesia, Thailand, Myanmar and several parts of India.
          </p> 
          <p>
            Wherever he goes, and whomever he meets, Venerable Bhikkhu Sanghasena urges all to promote cultural and spiritual values, literacy, environmental protection, non-violence, inter-religious harmony and peaceful co-existence, the concept of a single global village and world peace. He actively supports the elevation of the status of women, the provision of compassionate care and support for poverty- stricken people, and raises his voice against destructive armaments, degradation of the environment and ecology, human injustice, consumerism, economic imbalance and racism. 
          </p>
        </a>
        </li>
      </ol>
      </div>

      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/ven-bhikkhu-sanghasena' %}
      {% partial 'sidebar/about' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/awards-and-accolades.htm", "");
    }
}
