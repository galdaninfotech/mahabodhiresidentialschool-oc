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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-city-centre-changspa/about-the-teacher.htm */
class __TwigTemplate_ec6b88069e1f7e8e78d1014d2908e7e2c90e7cb9daa78936463d4a709fcecb99 extends \Twig\Template
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
        $tags = array("partial" => 48);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mahabodhi-city-centre-changspa/about-the-teacher.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

        <p>Venerable Bhikkhu Sanghasena was born in the remote Himalayan region of Ladakh – an ancient state located in the far north west of India, high on the Tibetan plateau. He was brought up within a deeply religious family, amongst people who followed the ancient Buddhist traditions and believed in peacefulness, humility and innocence as the natural way of life. At the age of seventeen he joined the Indian Army, where he developed a strong sense of personal discipline and responsibility.</p>

        <p>Year 1977 was a particularly significant year in his life, for this is when he felt the inner spiritual call and decided to leave the army. He left the mountains of Ladakh far behind him and became a committed disciple of the renowned Buddhist scholar and celebrated monk, Venerable Acharya Buddharakkhita Mahathera, the abbot of the Mahabodhi Society Vihara, Bangalore, South India. Having received full ordination, Ven. Sanghasena undertook enthusiastic studies of the Dhamma and also practiced various methods of Buddhist meditation.</p>

        <p>In 1986, Venerable Bhikkhu Sanghasena, returned to Ladakh and founded the Mahabodhi International Meditation Centre (MIMC) in Ladakh. Since then he has worked tirelessly and selflessly to put the Buddha’s teachings on loving kindness and compassion into action through multifarious charitable humanitarian services which are being carried out in 250 acres of moon-like desert that forms the impressive backdrop to the Devachan Campus at Choglamsar, Ladakh. For the past many years, he has also worked day and night to provide high quality education and safe shelter for underprivileged children, compassionate healthcare for the sick and the needy, empowerment and literacy programmes for women folk and other socially disadvantaged groups, a caring home for the aged and destitute, and many other humanitarian services. </p>

        <p>Thousands students and elders benefits and prosper from the facilities provided under M1MC's umbrella. At present, the Mahabodhi Residential School, Leh has about 500 children under its care with 300 more at its branch school at Bhodkharbu, Tingmosgang and Ney. With a good student ratio with trained teachers, the schools are reputed for providing excellent academic education. As a result, the number of new admission increases every year. The school also takes care of 10 visually impaired student with utmost care according to their needs. The hostels have all the basic amenities needed to create a conducive study environment. Other activities at the schools engage the students to participate in other life skills programs. MI MC also supports hundreds of students pursuing their high study in Delhi, Chandigarh Jammu and others cities in India. The old age home has more than 30 homeless elders, who's needs are taken care of Various spiritual programs have been conducting since the inception and thousands of seekers of truth and lover of peace around world has been benefiting by this noble program. </p>

        <p>Ven. Sanghasena has travelled extensively around the world and participated in many international conferences, seminars and workshops. He urges everyone to promote spiritual and cultural values, literacy, environmental protection, non-violence, inter-religious harmony, co-existence, global family and world peace. He actively supports the elevation of the status of all women, poverty stricken and underserved people. Furthermore, he also raises his voice against issues concerning the whole world like destructive armaments, destruction of the environment and ecology, human injustice, consumerism, economic imbalance and racism.</p>

        <p>Bhikkhu Sanghasena strongly proposes and advocates the creation of a global family as last solution to the serious crisis faced by the current world. He is actively working with several other leading national and international organizations, which are committed to the developmental works towards a safer, peaceful and integrated world and he is recipient of various national and international awards. </p>

        <p>Venerable Bhikkhu Sanghasena has distinguished himself as both a charismatic and highly energetic social and spiritual worker over the years. Today, he is an internationally well recognized and respected Buddhist leader.</p>

        <p><b>Bhikkhu Sanghasena is the founder president of the following four foundations:</b></p>

        <p><strong>Mahakaruna Foundation</strong> –New Delhi, Dedicated to world peace and harmony</p>
        <p><strong>Save the Himalaya Foundation (SHF)</strong> New Delhi, Dedicated to offer service for the serious crises of Himalayas</p>
        <p><strong>Global Doctors Association for Himalaya (GDAH)</strong> New Delhi, Dedicated to create conducive environment for community health</p>
        <p><strong>Foundation of Indian Buddhist (FIB)</strong> New Delhi, Dedicated to the revival of Buddhism in its birth place India</p>

        <blockquote class=\"blockquote\">
            <p class=\"mb-0\"><b><i>\"In this turbulent and troubled era, seemingly so dominated by personal and collective greed, hatred and delusion, meditation is the supreme medicine and hope for all societies.\"</i></b></p>
            <footer class=\"blockquote-footer text-right\"><cite title=\"Source Title\"><b><i>Bhikkhu Sanghasena</i></b> </cite></footer>
        </blockquote>


      
      
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-city-centre-changspa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-sambodhi-retreat-centre"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-city-centre-changspa/about-the-teacher.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  123 => 49,  119 => 48,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/mahabodhi-city-centre-changspa/about-the-teacher.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

        <p>Venerable Bhikkhu Sanghasena was born in the remote Himalayan region of Ladakh – an ancient state located in the far north west of India, high on the Tibetan plateau. He was brought up within a deeply religious family, amongst people who followed the ancient Buddhist traditions and believed in peacefulness, humility and innocence as the natural way of life. At the age of seventeen he joined the Indian Army, where he developed a strong sense of personal discipline and responsibility.</p>

        <p>Year 1977 was a particularly significant year in his life, for this is when he felt the inner spiritual call and decided to leave the army. He left the mountains of Ladakh far behind him and became a committed disciple of the renowned Buddhist scholar and celebrated monk, Venerable Acharya Buddharakkhita Mahathera, the abbot of the Mahabodhi Society Vihara, Bangalore, South India. Having received full ordination, Ven. Sanghasena undertook enthusiastic studies of the Dhamma and also practiced various methods of Buddhist meditation.</p>

        <p>In 1986, Venerable Bhikkhu Sanghasena, returned to Ladakh and founded the Mahabodhi International Meditation Centre (MIMC) in Ladakh. Since then he has worked tirelessly and selflessly to put the Buddha’s teachings on loving kindness and compassion into action through multifarious charitable humanitarian services which are being carried out in 250 acres of moon-like desert that forms the impressive backdrop to the Devachan Campus at Choglamsar, Ladakh. For the past many years, he has also worked day and night to provide high quality education and safe shelter for underprivileged children, compassionate healthcare for the sick and the needy, empowerment and literacy programmes for women folk and other socially disadvantaged groups, a caring home for the aged and destitute, and many other humanitarian services. </p>

        <p>Thousands students and elders benefits and prosper from the facilities provided under M1MC's umbrella. At present, the Mahabodhi Residential School, Leh has about 500 children under its care with 300 more at its branch school at Bhodkharbu, Tingmosgang and Ney. With a good student ratio with trained teachers, the schools are reputed for providing excellent academic education. As a result, the number of new admission increases every year. The school also takes care of 10 visually impaired student with utmost care according to their needs. The hostels have all the basic amenities needed to create a conducive study environment. Other activities at the schools engage the students to participate in other life skills programs. MI MC also supports hundreds of students pursuing their high study in Delhi, Chandigarh Jammu and others cities in India. The old age home has more than 30 homeless elders, who's needs are taken care of Various spiritual programs have been conducting since the inception and thousands of seekers of truth and lover of peace around world has been benefiting by this noble program. </p>

        <p>Ven. Sanghasena has travelled extensively around the world and participated in many international conferences, seminars and workshops. He urges everyone to promote spiritual and cultural values, literacy, environmental protection, non-violence, inter-religious harmony, co-existence, global family and world peace. He actively supports the elevation of the status of all women, poverty stricken and underserved people. Furthermore, he also raises his voice against issues concerning the whole world like destructive armaments, destruction of the environment and ecology, human injustice, consumerism, economic imbalance and racism.</p>

        <p>Bhikkhu Sanghasena strongly proposes and advocates the creation of a global family as last solution to the serious crisis faced by the current world. He is actively working with several other leading national and international organizations, which are committed to the developmental works towards a safer, peaceful and integrated world and he is recipient of various national and international awards. </p>

        <p>Venerable Bhikkhu Sanghasena has distinguished himself as both a charismatic and highly energetic social and spiritual worker over the years. Today, he is an internationally well recognized and respected Buddhist leader.</p>

        <p><b>Bhikkhu Sanghasena is the founder president of the following four foundations:</b></p>

        <p><strong>Mahakaruna Foundation</strong> –New Delhi, Dedicated to world peace and harmony</p>
        <p><strong>Save the Himalaya Foundation (SHF)</strong> New Delhi, Dedicated to offer service for the serious crises of Himalayas</p>
        <p><strong>Global Doctors Association for Himalaya (GDAH)</strong> New Delhi, Dedicated to create conducive environment for community health</p>
        <p><strong>Foundation of Indian Buddhist (FIB)</strong> New Delhi, Dedicated to the revival of Buddhism in its birth place India</p>

        <blockquote class=\"blockquote\">
            <p class=\"mb-0\"><b><i>\"In this turbulent and troubled era, seemingly so dominated by personal and collective greed, hatred and delusion, meditation is the supreme medicine and hope for all societies.\"</i></b></p>
            <footer class=\"blockquote-footer text-right\"><cite title=\"Source Title\"><b><i>Bhikkhu Sanghasena</i></b> </cite></footer>
        </blockquote>


      
      
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-city-centre-changspa' %}
      {% partial 'sidebar/mahabodhi-sambodhi-retreat-centre' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-city-centre-changspa/about-the-teacher.htm", "");
    }
}
