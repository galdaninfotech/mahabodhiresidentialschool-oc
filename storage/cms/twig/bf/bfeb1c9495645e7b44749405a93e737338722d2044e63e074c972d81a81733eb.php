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

/* C:\laragon\www\mimc1/themes/demo5/pages/social-welfare/old-age-home.htm */
class __TwigTemplate_06c76d54edfb377dbb03ac6809c8dd8a7ec031434a564721681a2cce60bf74fc extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-welfare/old-age-home.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      <p>
        In trying to translate the compassion of Buddha into action, the Mahabodhi Maitri Geriatric Home for the Aged, Destitute and Disabled was started in 1995.
      </p>

      <p>
        Through the selfless blessings and tireless endeavour of Bhikkhu Sanghasena, who conceived of and created a beautiful home within the unique setting of the Mahabodhi Devachan Campus, and because of the incredibly generous support and love of kind wonderful people, the elderly people are able to spend the last, and most vulnerable, days of their lives in the relative safety, warmth, comfort and security of the Mahabodhi Maitri Geriatric Home (MMGH) – what is, truly, “A home away from home.” 
      </p>

      <p>
        The main objective behind this humble initiatives is to render a service or a helping hand for the elderly and physically handicapped who are either abandoned or have nobody to look after in them.  They are given all the love, affection and necessary equipment’s required and essential for them at this stage of life. 
      </p>

      <p>
        This home is one of its kinds in entire Ladakh. The home provides an environment resident in all respect in catering to the limited need and maximum happiness of the inmates. Presently 35 elderly and physically handicapped young adults are residing at our Mahabodhi Maitri Geriatric and with the humble donations and support we wish to expand the facilities to 100 elderly and homeless people in this region of Himalaya.
      </p>

      <p>
        We extend our thanks and gratitude to many wonderful and kind people for their  incredibly generous and compassionate support of the homeless, elderly and differently-abled residents here at the Mahabodhi Maitri Geriatric Home (MMGH).
      </p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/social-welfare/old-age-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  117 => 39,  112 => 38,  108 => 37,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/social-welfare/old-age-home.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      <p>
        In trying to translate the compassion of Buddha into action, the Mahabodhi Maitri Geriatric Home for the Aged, Destitute and Disabled was started in 1995.
      </p>

      <p>
        Through the selfless blessings and tireless endeavour of Bhikkhu Sanghasena, who conceived of and created a beautiful home within the unique setting of the Mahabodhi Devachan Campus, and because of the incredibly generous support and love of kind wonderful people, the elderly people are able to spend the last, and most vulnerable, days of their lives in the relative safety, warmth, comfort and security of the Mahabodhi Maitri Geriatric Home (MMGH) – what is, truly, “A home away from home.” 
      </p>

      <p>
        The main objective behind this humble initiatives is to render a service or a helping hand for the elderly and physically handicapped who are either abandoned or have nobody to look after in them.  They are given all the love, affection and necessary equipment’s required and essential for them at this stage of life. 
      </p>

      <p>
        This home is one of its kinds in entire Ladakh. The home provides an environment resident in all respect in catering to the limited need and maximum happiness of the inmates. Presently 35 elderly and physically handicapped young adults are residing at our Mahabodhi Maitri Geriatric and with the humble donations and support we wish to expand the facilities to 100 elderly and homeless people in this region of Himalaya.
      </p>

      <p>
        We extend our thanks and gratitude to many wonderful and kind people for their  incredibly generous and compassionate support of the homeless, elderly and differently-abled residents here at the Mahabodhi Maitri Geriatric Home (MMGH).
      </p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/social-welfare/old-age-home.htm", "");
    }
}
