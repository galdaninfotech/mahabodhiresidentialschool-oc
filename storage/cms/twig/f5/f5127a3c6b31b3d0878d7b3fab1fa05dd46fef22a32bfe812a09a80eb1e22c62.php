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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/shangri-la-meditation.htm */
class __TwigTemplate_73fc1b448c1fb9ea2052cb36ea80b4e8cb91092914f49a599c2c284e5f38eca0 extends \Twig\Template
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
        $tags = array("partial" => 41);
        $filters = array("escape" => 6, "theme" => 11);
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
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h1></div>
        </div>
      </div>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mahabodhi-sambodhi-retreat-centre/shangri-la-meditation.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\">
      </div>

      <p>The Shangri-la Meditation course is designed to help people:</p>

      <ul class=\"department-list\">
        <li>To find immediate physical and psychological relaxation.</li>
        <li>To train and discipline the mind and use it positively, effectively and efficiently in daily life.</li>
        <li>To develop tranquility, serenity and clarity of mind</li>
        <li>To find practical solutions to the problems occurring in our daily lives.</li>
        <li>To learn the art of living in this world peacefully, harmoniously, friendly, mindfully, creatively, positively, helping and serving, caring and sharing with each other’s without hurting and harming each other’s.</li>
        <li>To help experience the ultimate bliss of Nirvana</li>
      </ul>

      <p>Immerse yourself in the transformative Shangri-la Meditation with Bhikkhu Sanghasena which will invite you to the immeasurable inner qualities of the awakened heart and mind. </p>

      <h6>We Offers:</h6>
      <ul class=\"department-list\">
        <li>Individual Self Retreat</li>
        <li>Long & Short retreat</li>
        <li>Yoga sessions</li>
        <li>Shangri-La Meditation -Three days Retreat</li>
        <li>Shangri-La Meditation -Seven days Retreat</li>
        <li>On every Sunday Special chanting, guided meditation, Dhamma talks, devotional songs and celestial music’s.</li>
      </ul>

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-sambodhi-retreat-centre"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-city-centre-changspa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/shangri-la-meditation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  116 => 42,  112 => 41,  77 => 11,  69 => 6,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/mahabodhi-sambodhi-retreat-centre/shangri-la-meditation.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <p>The Shangri-la Meditation course is designed to help people:</p>

      <ul class=\"department-list\">
        <li>To find immediate physical and psychological relaxation.</li>
        <li>To train and discipline the mind and use it positively, effectively and efficiently in daily life.</li>
        <li>To develop tranquility, serenity and clarity of mind</li>
        <li>To find practical solutions to the problems occurring in our daily lives.</li>
        <li>To learn the art of living in this world peacefully, harmoniously, friendly, mindfully, creatively, positively, helping and serving, caring and sharing with each other’s without hurting and harming each other’s.</li>
        <li>To help experience the ultimate bliss of Nirvana</li>
      </ul>

      <p>Immerse yourself in the transformative Shangri-la Meditation with Bhikkhu Sanghasena which will invite you to the immeasurable inner qualities of the awakened heart and mind. </p>

      <h6>We Offers:</h6>
      <ul class=\"department-list\">
        <li>Individual Self Retreat</li>
        <li>Long & Short retreat</li>
        <li>Yoga sessions</li>
        <li>Shangri-La Meditation -Three days Retreat</li>
        <li>Shangri-La Meditation -Seven days Retreat</li>
        <li>On every Sunday Special chanting, guided meditation, Dhamma talks, devotional songs and celestial music’s.</li>
      </ul>

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-sambodhi-retreat-centre' %}
      {% partial 'sidebar/mahabodhi-city-centre-changspa' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/shangri-la-meditation.htm", "");
    }
}
