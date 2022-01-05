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

/* C:\laragon\www\mimc1/themes/demo5/pages/sponsorship/options.htm */
class __TwigTemplate_c4a6524b28a10cee1a195a89b7bb7db3346e790f5a91519a8da3a8d6976e35ff extends \Twig\Template
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
        $tags = array("partial" => 31);
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
            <div class=\"heading white-heading\"><h1>Sponsorship ";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h1></div>
        </div>
      </div>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsorship/options.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

      <p>Sponsor you can make an immediate difference in a child's life and see tangible results.</p>

      <h6>Sponsoring A Young Monk/Nun</h6>
      <p>We take this opportunity to earnestly appeal to all generous-minded brothers and sisters to help implement the nunnery. We also need funds for the expansion of the physical facilities such as a dining hall, classrooms and accommodations to take in more nuns in the future</p>

      <h6>Sponsoring A Day-Boarder / Child From Our Branch Schools</h6>
      <p>The School also has many students on its day-boarder's list and also students studying at our Branch Schools in Tinsmosgang and Bodhkharbu villages who come from very poor families.</p>

      <h6>Sponsoring an Aged and Destitute</h6>
      <p>The inmates of Mahabodhi Home for the Aged and Destitute are very humble and easy to support with a few requirements. Nevertheless, apart from the basic needs like clothing, shelter, food and medicine, Mahabodhi wishes to provide the inmates of the Home with good facilities to protect them from the rough climate of Ladakh and provide them a safe and warm surrounding. Some of the inmates are urgently in need of better medical facilities like wheel chair, mobile toilet chair or spectacles.</p>

      <p>By supporting one of the inmates through a sponsorship a lot of improvements can be done and your kind help enables an old person to enjoy the last part of his/her life in a very peaceful and suitable surrounding.</p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sponsorship"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/sponsorship/options.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  111 => 33,  106 => 32,  102 => 31,  78 => 12,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>Sponsorship {{this.page.title}}</h1></div>
        </div>
      </div>

      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/sponsorship/options.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <p>Sponsor you can make an immediate difference in a child's life and see tangible results.</p>

      <h6>Sponsoring A Young Monk/Nun</h6>
      <p>We take this opportunity to earnestly appeal to all generous-minded brothers and sisters to help implement the nunnery. We also need funds for the expansion of the physical facilities such as a dining hall, classrooms and accommodations to take in more nuns in the future</p>

      <h6>Sponsoring A Day-Boarder / Child From Our Branch Schools</h6>
      <p>The School also has many students on its day-boarder's list and also students studying at our Branch Schools in Tinsmosgang and Bodhkharbu villages who come from very poor families.</p>

      <h6>Sponsoring an Aged and Destitute</h6>
      <p>The inmates of Mahabodhi Home for the Aged and Destitute are very humble and easy to support with a few requirements. Nevertheless, apart from the basic needs like clothing, shelter, food and medicine, Mahabodhi wishes to provide the inmates of the Home with good facilities to protect them from the rough climate of Ladakh and provide them a safe and warm surrounding. Some of the inmates are urgently in need of better medical facilities like wheel chair, mobile toilet chair or spectacles.</p>

      <p>By supporting one of the inmates through a sponsorship a lot of improvements can be done and your kind help enables an old person to enjoy the last part of his/her life in a very peaceful and suitable surrounding.</p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/sponsorship' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/education' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/sponsorship/options.htm", "");
    }
}
