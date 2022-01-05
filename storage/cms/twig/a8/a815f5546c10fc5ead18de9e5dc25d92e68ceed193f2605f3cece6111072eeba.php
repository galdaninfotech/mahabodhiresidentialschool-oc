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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/about.htm */
class __TwigTemplate_16a89c14b843bf018d5bd8f415fd7e02f510337930753f8ee45f18640103698c extends \Twig\Template
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
        $tags = array("partial" => 37);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mahabodhi-sambodhi-retreat-centre/mahabodhi-sambodhi-retreat-centre.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

        <p>Ladakh is the destination for seekers of truth and lover of peace. It is the land of prayer and meditation. Nestling in the lofty Himalayan Mountain in the northern India is the region of Ladakh. The snow-capped mountain peaks rise to touch the sky and the sky gently bends down to greet the earth where heaven and mountain meet. It is the land where humanity and religion sprang up together from the earth, where both live in harmony neither questioning nor threatening each other. Whenever the eye turns, the rock and the hills speak of the Buddha and his teachings. </p>

        <p>The Mahabodhi International Meditation Centre is located 10 KM from the Kushok Bakula Rinpoche airport.</p>

        <p>The incredibly beautiful Sambodhi Retreat Centre, an inspiring oasis of tranquil contemplation, is situated in a secluded corner of the transformative Mahabodhi International Meditation Centre campus in the mist of the picturesque thus offering placid energy for the individual’s inner growth.</p>

        <p>The Centre is dominated by Rocky Mountains on one side and golden sand dunes on the other. The sweet scent of fragrant and jewel-like flowers, which line the footpaths of the Center, play joyfully on the senses, while enigmatic stupas, reclusive meditation kuties, abundant prayer flags, and the most sacred and eye-catching Milarepa rock cave provide silent spiritual encouragement. </p>

        <p>The Sambodhi Retreat Centre is exceptionally well designed and very thoughtfully appointed. In fact, our most revered spiritual guide and meditation teacher, Venerable Bhikkhu Sanghasena, has personally overseen all aspects of the Centre’s design, construction and management with a singularly humanitarian vision: to create a unique, world-renowned contemplative venue, which is appealing to all seekers of truth and lovers of peace, irrespective of their religious inclinations, caste or creed. As a consequence, the Centre provides an incredibly warm welcome to all genuine seekers who are looking to incorporate timeless and universal spiritual truths into their daily lives.</p>


        <blockquote class=\"blockquote\">
            <p class=\"mb-0\"><b><i>\"Meditation is experiencing Buddha-hood within oneself and compassion is radiation the boundless fragrance of that Buddha-hood in all direction for the benefits of all.\"</i></b></p>
            <footer class=\"blockquote-footer text-right\"><cite title=\"Source Title\"><b><i>Bhikkhu Sanghasena</i></b> </cite></footer>
        </blockquote>


      
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-sambodhi-retreat-centre"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-city-centre-changspa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 39,  112 => 38,  108 => 37,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/mahabodhi-sambodhi-retreat-centre/mahabodhi-sambodhi-retreat-centre.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

        <p>Ladakh is the destination for seekers of truth and lover of peace. It is the land of prayer and meditation. Nestling in the lofty Himalayan Mountain in the northern India is the region of Ladakh. The snow-capped mountain peaks rise to touch the sky and the sky gently bends down to greet the earth where heaven and mountain meet. It is the land where humanity and religion sprang up together from the earth, where both live in harmony neither questioning nor threatening each other. Whenever the eye turns, the rock and the hills speak of the Buddha and his teachings. </p>

        <p>The Mahabodhi International Meditation Centre is located 10 KM from the Kushok Bakula Rinpoche airport.</p>

        <p>The incredibly beautiful Sambodhi Retreat Centre, an inspiring oasis of tranquil contemplation, is situated in a secluded corner of the transformative Mahabodhi International Meditation Centre campus in the mist of the picturesque thus offering placid energy for the individual’s inner growth.</p>

        <p>The Centre is dominated by Rocky Mountains on one side and golden sand dunes on the other. The sweet scent of fragrant and jewel-like flowers, which line the footpaths of the Center, play joyfully on the senses, while enigmatic stupas, reclusive meditation kuties, abundant prayer flags, and the most sacred and eye-catching Milarepa rock cave provide silent spiritual encouragement. </p>

        <p>The Sambodhi Retreat Centre is exceptionally well designed and very thoughtfully appointed. In fact, our most revered spiritual guide and meditation teacher, Venerable Bhikkhu Sanghasena, has personally overseen all aspects of the Centre’s design, construction and management with a singularly humanitarian vision: to create a unique, world-renowned contemplative venue, which is appealing to all seekers of truth and lovers of peace, irrespective of their religious inclinations, caste or creed. As a consequence, the Centre provides an incredibly warm welcome to all genuine seekers who are looking to incorporate timeless and universal spiritual truths into their daily lives.</p>


        <blockquote class=\"blockquote\">
            <p class=\"mb-0\"><b><i>\"Meditation is experiencing Buddha-hood within oneself and compassion is radiation the boundless fragrance of that Buddha-hood in all direction for the benefits of all.\"</i></b></p>
            <footer class=\"blockquote-footer text-right\"><cite title=\"Source Title\"><b><i>Bhikkhu Sanghasena</i></b> </cite></footer>
        </blockquote>


      
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-sambodhi-retreat-centre' %}
      {% partial 'sidebar/mahabodhi-city-centre-changspa' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/about.htm", "");
    }
}
