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

/* C:\laragon\www\mimc1/themes/demo5/pages/meditation-and-spirituality.htm */
class __TwigTemplate_64ce8dc02229fe9ef3425ad008a610e878e162cacd9874a0820be4b90ea12cde extends \Twig\Template
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
        $tags = array("partial" => 25);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/management-committee.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      <p>Mahabodhi Devachan is built on the values and practices of the Buddha Dhamma. The Sanga provides the core leadership and vision for its development and working. The community of monks and nuns, students, elderly and disabled, staff and guests all have equal access to the timeless and life changing teaching of the Buddha.</p>

        <p>Meditation' is the accepted translation of the Buddhist term 'bhavana' which more accurately means mental culture or mental development. Buddhism is primarily about gaining insight into the true nature of reality and bringing an end to dissatisfaction and suffering in life. The immediate benefits of the practice of meditation is the minimising of restlessness, discontent, fear, aversion and a cultivation of equanimity, acceptance and tranquility. The practice of meditation consciously cultivates and develops the mind to rise above the stresses and insecurities that burden our lives, and generates a richer and deeper experience of life. The highest goal of the practice, however, is gaining permanent release from the unsatisfactory cycle of life. This is the ultimate goal of the Teachings of the Buddha.</p>

        <p>Traditionally, there are two main approaches to Buddhist meditation. The first is calm, samatha, meditation. The purpose is to calm both body and mind; it is to bring the mind into a state of perfect concentration. In a day to day practical sense, samatha helps in greater peace of mind and tolerance for the stresses life puts in our path. Despite these benefits samatha does not offer a complete pathway to enlightenment - a complete release from our restless and discontented selves. Buddha introduced the practice of vipassana - insight - meditation as the critical technique to move us to full entitlement. Vipassana means 'to see things as they really are'. It builds on the positive emotion generated in Samatha, and helps develop awareness into the impermanence and interconnectedness of our experiences.</p>

        <p>At Mahabodhi, the practice and teaching of meditation is one of the main programs. Meditation is introduced to all students and staff of Mahabodhi Devachan. Each year, during the summer months, the MIMC is engaged in conducting several mediation activities targeting visitors. Meditation classes are conducted both at the main campus and at other places in Ladakh.</p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/ven-bhikkhu-sanghasena"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/meditation-and-spirituality.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 27,  100 => 26,  96 => 25,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/about/management-committee.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      <p>Mahabodhi Devachan is built on the values and practices of the Buddha Dhamma. The Sanga provides the core leadership and vision for its development and working. The community of monks and nuns, students, elderly and disabled, staff and guests all have equal access to the timeless and life changing teaching of the Buddha.</p>

        <p>Meditation' is the accepted translation of the Buddhist term 'bhavana' which more accurately means mental culture or mental development. Buddhism is primarily about gaining insight into the true nature of reality and bringing an end to dissatisfaction and suffering in life. The immediate benefits of the practice of meditation is the minimising of restlessness, discontent, fear, aversion and a cultivation of equanimity, acceptance and tranquility. The practice of meditation consciously cultivates and develops the mind to rise above the stresses and insecurities that burden our lives, and generates a richer and deeper experience of life. The highest goal of the practice, however, is gaining permanent release from the unsatisfactory cycle of life. This is the ultimate goal of the Teachings of the Buddha.</p>

        <p>Traditionally, there are two main approaches to Buddhist meditation. The first is calm, samatha, meditation. The purpose is to calm both body and mind; it is to bring the mind into a state of perfect concentration. In a day to day practical sense, samatha helps in greater peace of mind and tolerance for the stresses life puts in our path. Despite these benefits samatha does not offer a complete pathway to enlightenment - a complete release from our restless and discontented selves. Buddha introduced the practice of vipassana - insight - meditation as the critical technique to move us to full entitlement. Vipassana means 'to see things as they really are'. It builds on the positive emotion generated in Samatha, and helps develop awareness into the impermanence and interconnectedness of our experiences.</p>

        <p>At Mahabodhi, the practice and teaching of meditation is one of the main programs. Meditation is introduced to all students and staff of Mahabodhi Devachan. Each year, during the summer months, the MIMC is engaged in conducting several mediation activities targeting visitors. Meditation classes are conducted both at the main campus and at other places in Ladakh.</p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/ven-bhikkhu-sanghasena' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/meditation-and-spirituality.htm", "");
    }
}
