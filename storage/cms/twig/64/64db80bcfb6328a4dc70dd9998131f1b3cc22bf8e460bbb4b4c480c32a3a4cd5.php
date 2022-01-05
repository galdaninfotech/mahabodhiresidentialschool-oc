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

/* C:\laragon\www\mimc1/themes/demo5/pages/education/mahabodhi-jetavana-monastery.htm */
class __TwigTemplate_ab04bb4d5656c5c7004ab9351f2cc2892f27effc73324a022620bce6869e8076 extends \Twig\Template
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
        $tags = array("partial" => 22);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/education/mahabodhi-jetavana-monastery.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

      <p>Despite all the humanitarian work undertaken by MIMC, Ven. Sanghasena has not lost sight of the primary goal of introducing Ladakhi’s to both the theory and the practice of the Buddha's teachings. In fact, the Dhamma or teachings is the foundation of the entire organization. Without the guidance of the Buddha's teachings, MIMC might have developed into an organization without a goal. Therefore, to ensure the future existence of MIMC, in 2004 Ven. Sanghasena took an essential and visionary step to establish a Monastery at the Devachan Campus to train a new generation of monks. </p>

      <p>The Mahabodhi Jetavana Monastery was established on 17th July, 2004 with only a few monks in training. In 2005, the first group of 10 new young monks were ordained as novices and began their monastic education at MIMC. Today, the Mahabodhi Jetavana Monastery is the only Theravada Monastery and training Centre in the entire western Himalayan region. Presently 10 young monks receive an innovative and comprehensive training program from Venerable Sanghasena Mahathera and two other senior monks. They study and practice the teachings of the Buddha as preserved in the Pali Canon (Tipitaka). Additionally, they also receive a complete, modern secular education approved by the Indian Ministry of Education at the Mahabodhi Residential School. The monks will become proficient not only in Pali, but also in English and Ladakhi languages that they can become competent teachers, healers and leaders of the community in the future. These monks are and will continue to be the community leaders of MIMC, guiding and ensuring the moral and spiritual integrity o the organization. </p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-jetavana-monastery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  102 => 24,  97 => 23,  93 => 22,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/education/mahabodhi-jetavana-monastery.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <p>Despite all the humanitarian work undertaken by MIMC, Ven. Sanghasena has not lost sight of the primary goal of introducing Ladakhi’s to both the theory and the practice of the Buddha's teachings. In fact, the Dhamma or teachings is the foundation of the entire organization. Without the guidance of the Buddha's teachings, MIMC might have developed into an organization without a goal. Therefore, to ensure the future existence of MIMC, in 2004 Ven. Sanghasena took an essential and visionary step to establish a Monastery at the Devachan Campus to train a new generation of monks. </p>

      <p>The Mahabodhi Jetavana Monastery was established on 17th July, 2004 with only a few monks in training. In 2005, the first group of 10 new young monks were ordained as novices and began their monastic education at MIMC. Today, the Mahabodhi Jetavana Monastery is the only Theravada Monastery and training Centre in the entire western Himalayan region. Presently 10 young monks receive an innovative and comprehensive training program from Venerable Sanghasena Mahathera and two other senior monks. They study and practice the teachings of the Buddha as preserved in the Pali Canon (Tipitaka). Additionally, they also receive a complete, modern secular education approved by the Indian Ministry of Education at the Mahabodhi Residential School. The monks will become proficient not only in Pali, but also in English and Ladakhi languages that they can become competent teachers, healers and leaders of the community in the future. These monks are and will continue to be the community leaders of MIMC, guiding and ensuring the moral and spiritual integrity o the organization. </p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-jetavana-monastery.htm", "");
    }
}
