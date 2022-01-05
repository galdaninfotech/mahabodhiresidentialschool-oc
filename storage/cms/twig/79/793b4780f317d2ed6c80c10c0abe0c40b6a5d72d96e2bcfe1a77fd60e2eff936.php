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

/* C:\laragon\www\mimc1/themes/demo5/pages/education/mahabodhi-nunnery.htm */
class __TwigTemplate_72bad97ca8f0c0d819c7634498555d5ada90ea030d839cd37d00f6b41b4da803 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/education/nunnery.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

      <p>Venerable Sanghasena also established the Mahabodhi Nunnery, the first of its kind with first batch of young nuns in the year 1996. He recognized the need to improve the status and impoverished living conditions of nuns and to restore their self-esteem and dignity in society. Previously non-existent, a comprehensive secular and religious education is provided to the young nuns in this safe and healthy spiritual environment. This has provided them with an opportunity to develop and grow to their fullest potential and offer their services for the development of their fellow sisters in the remote and neglected communities of this region. </p>

      <p>The Mahabodhi Nunnery has trained over 30 nuns from all parts of Ladakh as well as the less well known Buddhist communities in the areas such as Arunachal Pradesh. The combining of secular and religious education, the monastic discipline and the exposure to many different cultures at Mahabodhi have enabled these Buddhist women from the Himalayan region to choose between a secular life rich with spirituality or give a lifelong commitment to a monastic life of service and meditation. The senior nuns and students were sent abroad to participate in several International Buddhist Women Conferences. For the first time, Venerable Sanghasena invited and hosted the International Buddhist Women's Conference (Sakyadittha) at Devachan Campus of Mahabodhi International Meditation Centre in the year 1995.</p>

      <p>Presently 15 young nuns are at the Nunnery receiving their monastic training which includes the practice of Vipassana meditation, the study of basic Buddhist philosophy, Buddhist history, Ladakhi, Tibetan, English and Pali languages. They also attend the Mahabodhi School at the campus with other regular children. This gives them both a sound secular education as well as an opportunity for integration with the broader society. Unfortunately, the part of the building had to be dismantled due to a crack in the foundation wall during the 2010 devastating flash floods. We are very much thankful to the members of Buddha Haus, Germany who very kindly funded part of the reconstruction of the building. </p>

      <p>Venerable Sanghasena certainly aspires and wishes very strongly to train and make the Mahabodhi nuns socially engaged Buddhist nuns, respectful and skillful Dhamma and meditation teachers, community leaders, religious administrators and healers. They will be encouraged to shoulder leadership responsibilities in carrying out the various educational, medical, spiritual and charity projects on the campus. They will be encouraged to help in organizing special pujas and give Dhamma talks to the residents at the campus. In the long run, their work will enhance the status of nuns and women and enable them to play a significant role in promoting the welfare and preserving the cultural heritage of the Ladakhi communities.</p>

      
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
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-nunnery.htm";
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/education/nunnery.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <p>Venerable Sanghasena also established the Mahabodhi Nunnery, the first of its kind with first batch of young nuns in the year 1996. He recognized the need to improve the status and impoverished living conditions of nuns and to restore their self-esteem and dignity in society. Previously non-existent, a comprehensive secular and religious education is provided to the young nuns in this safe and healthy spiritual environment. This has provided them with an opportunity to develop and grow to their fullest potential and offer their services for the development of their fellow sisters in the remote and neglected communities of this region. </p>

      <p>The Mahabodhi Nunnery has trained over 30 nuns from all parts of Ladakh as well as the less well known Buddhist communities in the areas such as Arunachal Pradesh. The combining of secular and religious education, the monastic discipline and the exposure to many different cultures at Mahabodhi have enabled these Buddhist women from the Himalayan region to choose between a secular life rich with spirituality or give a lifelong commitment to a monastic life of service and meditation. The senior nuns and students were sent abroad to participate in several International Buddhist Women Conferences. For the first time, Venerable Sanghasena invited and hosted the International Buddhist Women's Conference (Sakyadittha) at Devachan Campus of Mahabodhi International Meditation Centre in the year 1995.</p>

      <p>Presently 15 young nuns are at the Nunnery receiving their monastic training which includes the practice of Vipassana meditation, the study of basic Buddhist philosophy, Buddhist history, Ladakhi, Tibetan, English and Pali languages. They also attend the Mahabodhi School at the campus with other regular children. This gives them both a sound secular education as well as an opportunity for integration with the broader society. Unfortunately, the part of the building had to be dismantled due to a crack in the foundation wall during the 2010 devastating flash floods. We are very much thankful to the members of Buddha Haus, Germany who very kindly funded part of the reconstruction of the building. </p>

      <p>Venerable Sanghasena certainly aspires and wishes very strongly to train and make the Mahabodhi nuns socially engaged Buddhist nuns, respectful and skillful Dhamma and meditation teachers, community leaders, religious administrators and healers. They will be encouraged to shoulder leadership responsibilities in carrying out the various educational, medical, spiritual and charity projects on the campus. They will be encouraged to help in organizing special pujas and give Dhamma talks to the residents at the campus. In the long run, their work will enhance the status of nuns and women and enable them to play a significant role in promoting the welfare and preserving the cultural heritage of the Ladakhi communities.</p>

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-nunnery.htm", "");
    }
}
