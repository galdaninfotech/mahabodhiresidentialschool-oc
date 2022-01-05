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

/* C:\laragon\www\mimc1/themes/demo5/pages/sustainable-development-project/mahabodhi-studio.htm */
class __TwigTemplate_1bd11c541178a3eee6f50a18dd436ca3c306bc6dc14e850d1254b8c078ad08a2 extends \Twig\Template
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
        $tags = array("partial" => 40);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sustainable-development-project/eco-development-project.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      
      <p>
        The Mahabodhi organization believes in presenting Ladakh’s culture and Buddhist history through cinema.
      </p>

      <p>
        MIMC Zita and Horst Norbert studio aims in producing documentaries and films on the Mahabodhi community, Ladakh and Buddhist related videos, creates videos and audios for the promotion of rich Ladakh art & culture giving opportunities to the budding talent of Ladakh to pursue careers in such areas.
      </p>

      <p>
        We are trying to produce many traditional music, hymn, and chanting and recordings for that we are seeking some financial assistance from the Govt. and well wishers.
      </p>

      <p>
        We are also encouraging our students especially the drop out ones to take part in this lively extracurricular activity.
      </p>

      <p>
        Apart from the direction for the self sustenance, this studio will be boon to school dropout students to showcase their talents.
      </p>

      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/sustainable-development-project/mahabodhi-studio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  120 => 42,  115 => 41,  111 => 40,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/sustainable-development-project/eco-development-project.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      
      <p>
        The Mahabodhi organization believes in presenting Ladakh’s culture and Buddhist history through cinema.
      </p>

      <p>
        MIMC Zita and Horst Norbert studio aims in producing documentaries and films on the Mahabodhi community, Ladakh and Buddhist related videos, creates videos and audios for the promotion of rich Ladakh art & culture giving opportunities to the budding talent of Ladakh to pursue careers in such areas.
      </p>

      <p>
        We are trying to produce many traditional music, hymn, and chanting and recordings for that we are seeking some financial assistance from the Govt. and well wishers.
      </p>

      <p>
        We are also encouraging our students especially the drop out ones to take part in this lively extracurricular activity.
      </p>

      <p>
        Apart from the direction for the self sustenance, this studio will be boon to school dropout students to showcase their talents.
      </p>

      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/sustainable-development-project' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/education' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/sustainable-development-project/mahabodhi-studio.htm", "");
    }
}
