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

/* C:\laragon\www\mimc1/themes/demo5/pages/about/mahabodhi-international-meditation-centre.htm */
class __TwigTemplate_8119e2fd5a459936d0502df9e5fb182f2cbd21eb4d204dd2eba8e89109b99f03 extends \Twig\Template
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
        $tags = array("partial" => 34);
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
  <div class=\"row main-content margin-10px-t margin-50px-b\">
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/mahabodhi-international-meditation-centre.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      <p>
        The Mahabodhi International Meditation Centre (MIMC) had its humble beginnings in one small rented room in Leh city in 1986 when Venerable Bhikkhu Sanghasena realized there was a great need to offer both humanitarian and spiritual services to the people of Ladakh. From there the centre moved to the main Devachan campus in Choglamsar which is on an impressive 200 acres of desert land in 1991. Against all odds, with no water, no proper roads and just harsh desert sand, through the tenacity, compassion and resourcefulness of Venerable Sanghasena and his team, the Mahabodhi Devachan campus began to grow and flourish and his dream slowly became a reality.
      </p> 

      <p>
        Venerable Sanghasena realized that the main root cause of poverty and social unrest was illiteracy. He knew that when people were given proper holistic education, the cycle of poverty and social evils could be broken. With this in mind, he started the first residential school for underprivileged children who came from the far flung corners of Ladakh. From this initial project, other desperately needed humanitarian services were identified and added to the Devachan campus which now houses a home for the aged, visually impaired, a monastery, a nunnery, a meditation and yoga centre and so on.
      </p> 

      <p>
        Today the Devachan campus has become a home and refuge for thousands of deserving people who live happily and peacefully together. A dedicated team of social workers, teachers, doctors, monks, nuns, community leaders and care-providers have created an integrated community at Devachan which provides comprehensive care to all segments of society: children, the elderly, special needs individuals, monks and nuns, the sick, as well as those seeking spiritual development. The community has become a model for the region through harmonious sustainable and ecological development. In fact, people from various parts of the world have come to learn and want to emulate a similar community in their own countries. With the continued support of likeminded sponsors from all over the world, we hope to be able to contribute our part towards this goal by serving the people of Ladakh. We welcome anyone who would also like to be a part of this initiative. 
      </p>

      <p>
        MIMC is indeed a great example of one man's vision turning into reality. His great vision of love and compassion for the underprivileged people of Ladakh has been materialized in the very formation of MIMC. 
      </p>

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/ven-bhikkhu-sanghasena"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/about/mahabodhi-international-meditation-centre.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  109 => 35,  105 => 34,  78 => 12,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-10px-t margin-50px-b\">
    <div class=\"col-md-9\">
      
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>{{this.page.title}}</h1></div>
        </div>
      </div>
      
      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/about/mahabodhi-international-meditation-centre.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      <p>
        The Mahabodhi International Meditation Centre (MIMC) had its humble beginnings in one small rented room in Leh city in 1986 when Venerable Bhikkhu Sanghasena realized there was a great need to offer both humanitarian and spiritual services to the people of Ladakh. From there the centre moved to the main Devachan campus in Choglamsar which is on an impressive 200 acres of desert land in 1991. Against all odds, with no water, no proper roads and just harsh desert sand, through the tenacity, compassion and resourcefulness of Venerable Sanghasena and his team, the Mahabodhi Devachan campus began to grow and flourish and his dream slowly became a reality.
      </p> 

      <p>
        Venerable Sanghasena realized that the main root cause of poverty and social unrest was illiteracy. He knew that when people were given proper holistic education, the cycle of poverty and social evils could be broken. With this in mind, he started the first residential school for underprivileged children who came from the far flung corners of Ladakh. From this initial project, other desperately needed humanitarian services were identified and added to the Devachan campus which now houses a home for the aged, visually impaired, a monastery, a nunnery, a meditation and yoga centre and so on.
      </p> 

      <p>
        Today the Devachan campus has become a home and refuge for thousands of deserving people who live happily and peacefully together. A dedicated team of social workers, teachers, doctors, monks, nuns, community leaders and care-providers have created an integrated community at Devachan which provides comprehensive care to all segments of society: children, the elderly, special needs individuals, monks and nuns, the sick, as well as those seeking spiritual development. The community has become a model for the region through harmonious sustainable and ecological development. In fact, people from various parts of the world have come to learn and want to emulate a similar community in their own countries. With the continued support of likeminded sponsors from all over the world, we hope to be able to contribute our part towards this goal by serving the people of Ladakh. We welcome anyone who would also like to be a part of this initiative. 
      </p>

      <p>
        MIMC is indeed a great example of one man's vision turning into reality. His great vision of love and compassion for the underprivileged people of Ladakh has been materialized in the very formation of MIMC. 
      </p>

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/ven-bhikkhu-sanghasena' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/about/mahabodhi-international-meditation-centre.htm", "");
    }
}
