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

/* C:\laragon\www\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena.htm */
class __TwigTemplate_6581206dc09deda9a2821b592b52c41761b69d9042564acd3e79a3b90efe4f58 extends \Twig\Template
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
        $tags = array("partial" => 61);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      <p>
        Venerable Bhikkhu Sanghasena was born in the Himalayan region of Ladakh, India. At the age of seventeen he joined the Indian Army, where he developed a strong sense of personal discipline and responsibility. 1977 was a particularly significant year in his life, for this is when he felt the inner spiritual call and decided to leave the army. He left the mountains of Ladakh far behind him and became a committed disciple of the renowned Buddhist scholar and celebrated monk, Venerable Acharya Buddharakkhita Mahathera, the abbot of the Mahabodhi Society Vihara, Bangalore. Having received full ordination, Ven. Sanghasena undertook enthusiastic studies of the Dhamma and also practiced various methods of Buddhist meditations. In 1986, Venerable Bhikkhu Sanghasena founded the Mahabodhi International Meditation Centre (MIMC) in Ladakh.
      </p> 

      <p>
        Since then he has worked tirelessly and selflessly to put the Buddha's teachings on loving kindness and compassion into action and now MIMC has become one of the leading NGOs in India. Today, the 250 acre campus which is known as Devachan campus has grown to become a unique, vibrant and vital hub for multifarious humanitarian and spiritual service programs in Ladakh and beyond this land, once totally barren desert like moon has become Spiritual based, integrated alternative community- a beautiful and blissful home for thousands, including children, senior citizen, and the visually impaired, monks and nuns, meditators, school teachers, doctors, and volunteers live in the Devachan campus now. In addition, numerous volunteers, visitors, meditators and genuine seekers of truth and lover of peace from many parts of the world flock to the campus every summer to participate in the popular meditation, yoga, festivals, the spiritual teachings program and various humanitarian services. 
      </p>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena2.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 23), "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "\">
      </div>

      <p>
        The Devachan campus once totally barren land is now blossoming environmentally with thousands of trees including many apples and apricots and an abundance of flowers which provide a highly colorful and sweetly perfumed backdrop during the warm, summer months. The campus is truly turning into a role model for individual who cultivate a new and revolutionary vision and mission. Great compassion has been the driving force behind all pioneering works of Bhikkhu Sanghasena. 
      </p>

      <p>
        He is continuing to move forward, year upon year, with full and firm conviction and an unyielding faith in the transformative power of his multi-dimensional mission. The uniqueness of his organization is the integrated approach for inner spiritual developments encompassing all human welfare activities to become potential amalgam unit as a model for the society. Beside these spiritual and humanitarian services, he has also been proactively involved in fostering numerous peace-building and inter-faith harmony and inter-religious dialogues, environmental, educational, health and various national and international festivals promoting the preservation of the Buddhist and Himalayan cultural heritage, and the delivery of countless meditation and yoga camps.
      </p>

      <p>
        Bhikkhu Sanghasena has traveled extensively around the world and participated in many international conferences, seminars and workshops. He urges everyone to promote spiritual and cultural values, literacy, environmental protection, non-violence, inter-religious harmony, peaceful co-existence, global family and world peace. He actively supports the elevation of the status of all women, poverty stricken and underserved people. Furthermore, he also raises his voice against issues concerning the whole world like destructive armaments, destruction of the environment and ecology, human injustice, consumerism, economic imbalance and racism. Bhikkhu Sanghasena strongly proposes and advocates the creation of a global family as last solution to the brutal wars and violence faced by the current world. He is actively working with several other leading national and international organizations, which are committed to the developmental works towards a safer, peaceful and integrated world. 
      </p>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena3.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "\">
      </div>

      <p>
        Venerable Bhikkhu Sanghasena has distinguished himself as both a charismatic and highly energetic social and spiritual reformer over the years. He has attempted to revitalize and simplify the complexity of ancient philosophy by focusing on relevance of day to day life of young generation. Through his popular slogan- compassion in action, meditation in action, with his captivating smile, he has reached and touched the hearts of thousands and transformed numerous lives across the world. 
      </p>

      <p>
        Today, He is recipient of many national and international awards for his outstanding achievement of humanitarian services. Mahakaruna great compassion in action movement launched recently, as a fully-embodied and highly active personal and social transformation program, is yet another important initiative of Bhikkhu Sanghasena to address the many challenges and threats the world is facing today-from sectarianism, violence, poverty, disease, environmental degradation, excessive consumerism and so on. 
      </p>

      <p>
        He strongly believes that this campaign of Mahakaruna- universal compassion will be a catalyst for all to come together and join hands from every walk of life to create a platform for social transformation and clarion call to urgently take action with great compassion to address national and global challenges. Recent campaign of global Mahakaruna, has received tremendous response from everybody. Bhikkhu Sanghasena strongly believes that this campaign of Mahakaruna- universal compassion will be a catalyst for all to come together and join hands from every walk of life to create a platform for social trans-formation and clarion call to urgently take action with great compassion to address national and global challenges. 
      </p>

      <p>
        During the Mahakaruna day celebration in Delhi on 4th of February 2017, Dr. Karan Sigh, great Indologist and the member of Indian parliament, Former Indian Ambassadors to USA, in his keynote speech recommended name of Bhikkhu Sanghasena for Nobel peace prize for his outstanding achievement of humanitarian services. Bhikkhu Sanghasena is also the Founder of Save the Himalaya Foundation (SHF), New Delhi — dedicated to the beautiful Himalaya Foundation of Indian Buddhists (FIB) New Delhi — dedicated to the revival of Buddhism in its birth place – India, Mahakaruna Foundation, New Delhi — dedicated to promote universal compassion and Ladakh Think Tank Forum — dedicated to future vision of Ladakh 
      </p>

    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/ven-bhikkhu-sanghasena"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  146 => 62,  142 => 61,  115 => 39,  94 => 23,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      <p>
        Venerable Bhikkhu Sanghasena was born in the Himalayan region of Ladakh, India. At the age of seventeen he joined the Indian Army, where he developed a strong sense of personal discipline and responsibility. 1977 was a particularly significant year in his life, for this is when he felt the inner spiritual call and decided to leave the army. He left the mountains of Ladakh far behind him and became a committed disciple of the renowned Buddhist scholar and celebrated monk, Venerable Acharya Buddharakkhita Mahathera, the abbot of the Mahabodhi Society Vihara, Bangalore. Having received full ordination, Ven. Sanghasena undertook enthusiastic studies of the Dhamma and also practiced various methods of Buddhist meditations. In 1986, Venerable Bhikkhu Sanghasena founded the Mahabodhi International Meditation Centre (MIMC) in Ladakh.
      </p> 

      <p>
        Since then he has worked tirelessly and selflessly to put the Buddha's teachings on loving kindness and compassion into action and now MIMC has become one of the leading NGOs in India. Today, the 250 acre campus which is known as Devachan campus has grown to become a unique, vibrant and vital hub for multifarious humanitarian and spiritual service programs in Ladakh and beyond this land, once totally barren desert like moon has become Spiritual based, integrated alternative community- a beautiful and blissful home for thousands, including children, senior citizen, and the visually impaired, monks and nuns, meditators, school teachers, doctors, and volunteers live in the Devachan campus now. In addition, numerous volunteers, visitors, meditators and genuine seekers of truth and lover of peace from many parts of the world flock to the campus every summer to participate in the popular meditation, yoga, festivals, the spiritual teachings program and various humanitarian services. 
      </p>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena2.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <p>
        The Devachan campus once totally barren land is now blossoming environmentally with thousands of trees including many apples and apricots and an abundance of flowers which provide a highly colorful and sweetly perfumed backdrop during the warm, summer months. The campus is truly turning into a role model for individual who cultivate a new and revolutionary vision and mission. Great compassion has been the driving force behind all pioneering works of Bhikkhu Sanghasena. 
      </p>

      <p>
        He is continuing to move forward, year upon year, with full and firm conviction and an unyielding faith in the transformative power of his multi-dimensional mission. The uniqueness of his organization is the integrated approach for inner spiritual developments encompassing all human welfare activities to become potential amalgam unit as a model for the society. Beside these spiritual and humanitarian services, he has also been proactively involved in fostering numerous peace-building and inter-faith harmony and inter-religious dialogues, environmental, educational, health and various national and international festivals promoting the preservation of the Buddhist and Himalayan cultural heritage, and the delivery of countless meditation and yoga camps.
      </p>

      <p>
        Bhikkhu Sanghasena has traveled extensively around the world and participated in many international conferences, seminars and workshops. He urges everyone to promote spiritual and cultural values, literacy, environmental protection, non-violence, inter-religious harmony, peaceful co-existence, global family and world peace. He actively supports the elevation of the status of all women, poverty stricken and underserved people. Furthermore, he also raises his voice against issues concerning the whole world like destructive armaments, destruction of the environment and ecology, human injustice, consumerism, economic imbalance and racism. Bhikkhu Sanghasena strongly proposes and advocates the creation of a global family as last solution to the brutal wars and violence faced by the current world. He is actively working with several other leading national and international organizations, which are committed to the developmental works towards a safer, peaceful and integrated world. 
      </p>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena3.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <p>
        Venerable Bhikkhu Sanghasena has distinguished himself as both a charismatic and highly energetic social and spiritual reformer over the years. He has attempted to revitalize and simplify the complexity of ancient philosophy by focusing on relevance of day to day life of young generation. Through his popular slogan- compassion in action, meditation in action, with his captivating smile, he has reached and touched the hearts of thousands and transformed numerous lives across the world. 
      </p>

      <p>
        Today, He is recipient of many national and international awards for his outstanding achievement of humanitarian services. Mahakaruna great compassion in action movement launched recently, as a fully-embodied and highly active personal and social transformation program, is yet another important initiative of Bhikkhu Sanghasena to address the many challenges and threats the world is facing today-from sectarianism, violence, poverty, disease, environmental degradation, excessive consumerism and so on. 
      </p>

      <p>
        He strongly believes that this campaign of Mahakaruna- universal compassion will be a catalyst for all to come together and join hands from every walk of life to create a platform for social transformation and clarion call to urgently take action with great compassion to address national and global challenges. Recent campaign of global Mahakaruna, has received tremendous response from everybody. Bhikkhu Sanghasena strongly believes that this campaign of Mahakaruna- universal compassion will be a catalyst for all to come together and join hands from every walk of life to create a platform for social trans-formation and clarion call to urgently take action with great compassion to address national and global challenges. 
      </p>

      <p>
        During the Mahakaruna day celebration in Delhi on 4th of February 2017, Dr. Karan Sigh, great Indologist and the member of Indian parliament, Former Indian Ambassadors to USA, in his keynote speech recommended name of Bhikkhu Sanghasena for Nobel peace prize for his outstanding achievement of humanitarian services. Bhikkhu Sanghasena is also the Founder of Save the Himalaya Foundation (SHF), New Delhi — dedicated to the beautiful Himalaya Foundation of Indian Buddhists (FIB) New Delhi — dedicated to the revival of Buddhism in its birth place – India, Mahakaruna Foundation, New Delhi — dedicated to promote universal compassion and Ladakh Think Tank Forum — dedicated to future vision of Ladakh 
      </p>

    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/ven-bhikkhu-sanghasena' %}
      {% partial 'sidebar/about' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena.htm", "");
    }
}
