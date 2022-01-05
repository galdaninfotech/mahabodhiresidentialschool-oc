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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-city-centre-changspa/introduction.htm */
class __TwigTemplate_da8cb018bc8970e405c3b28236b49a1264b5b7aee03c984b2f0eae1a1472bab5 extends \Twig\Template
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
        $tags = array("partial" => 35);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mahabodhi-city-centre-changspa/mahabodhi-city-centre-changspa.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      
      <p>Many people visit Ladakh looking for an encounter and experience with Buddha Dhamma, its monks, nuns and monasteries. But for those yearning for a still deeper and meaningful understanding of inner peace the language and cultural difference presents a serious challenge. Most seekers, having arrived in Leh, find it difficult to locate suitable English speaking Dhamma and meditation teachers. </p>

      <p>Mahabodhi is one the few centers in Ladakh offering regular Meditation courses, Dhamma talks and books - literature on meditation and yoga sessions.</p>

      <p>Being about 10 kms from Leh city, the Devachan Campus is out of the way for many visitors to Ladakh. MIMC rents a small building at Changspa, to offer its services to those who make Leh their base. The Changspa sub-centre is well away from the main Leh bazaar and is not too noisy. Here, regular daily meditation classes and Dhamma talks are conducted from June to September during peak tourist season. </p>

      <p>Daily yoga and meditation classes are also conducted at the Mahabodhi City Centre, Changspa from Monday to Saturday. </p>

      <strong>Address: </strong><br>
      Mahabodhi Yoga and Meditation Centre, <br>
      Changspa, Near Alpha Mess <br>

      <blockquote class=\"blockquote\">
        <p class=\"mb-0\"><b><i>\"What sun is to the flowers, meditation is to the Mind.\"</i></b></p>
        <footer class=\"blockquote-footer text-right\"><cite title=\"Source Title\"><b><i>Bhikkhu Sanghasena</i></b> </cite></footer>
    </blockquote>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-city-centre-changspa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-sambodhi-retreat-centre"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-city-centre-changspa/introduction.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  110 => 36,  106 => 35,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/mahabodhi-city-centre-changspa/mahabodhi-city-centre-changspa.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      
      <p>Many people visit Ladakh looking for an encounter and experience with Buddha Dhamma, its monks, nuns and monasteries. But for those yearning for a still deeper and meaningful understanding of inner peace the language and cultural difference presents a serious challenge. Most seekers, having arrived in Leh, find it difficult to locate suitable English speaking Dhamma and meditation teachers. </p>

      <p>Mahabodhi is one the few centers in Ladakh offering regular Meditation courses, Dhamma talks and books - literature on meditation and yoga sessions.</p>

      <p>Being about 10 kms from Leh city, the Devachan Campus is out of the way for many visitors to Ladakh. MIMC rents a small building at Changspa, to offer its services to those who make Leh their base. The Changspa sub-centre is well away from the main Leh bazaar and is not too noisy. Here, regular daily meditation classes and Dhamma talks are conducted from June to September during peak tourist season. </p>

      <p>Daily yoga and meditation classes are also conducted at the Mahabodhi City Centre, Changspa from Monday to Saturday. </p>

      <strong>Address: </strong><br>
      Mahabodhi Yoga and Meditation Centre, <br>
      Changspa, Near Alpha Mess <br>

      <blockquote class=\"blockquote\">
        <p class=\"mb-0\"><b><i>\"What sun is to the flowers, meditation is to the Mind.\"</i></b></p>
        <footer class=\"blockquote-footer text-right\"><cite title=\"Source Title\"><b><i>Bhikkhu Sanghasena</i></b> </cite></footer>
    </blockquote>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-city-centre-changspa' %}
      {% partial 'sidebar/mahabodhi-sambodhi-retreat-centre' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-city-centre-changspa/introduction.htm", "");
    }
}
