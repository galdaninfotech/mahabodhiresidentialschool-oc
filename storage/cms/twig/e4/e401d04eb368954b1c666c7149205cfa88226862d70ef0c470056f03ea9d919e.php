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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/facilities/fundamentals-nursery-wing.htm */
class __TwigTemplate_4496a33f260fa52534cc47c98a1e7e7cd0ea1930aaf91aaf838c118c2a53a1c4 extends \Twig\Template
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
            <div class=\"heading white-heading\"><h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h1></div>
        </div>
      </div>
      
      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/index.jpg");
        echo "\" alt=\"FUNdamentals Nursery Wings\">
      </div>

      <p>Learning is fun! That is what the youngest students of nursery and kindergarten are likely to figure out in their first years at our institution. The concept of FUNdamentals promotes stress-free and child-centred learning, giving the toddlers the freedom, they need, to grow to their utmost potential. In a newly constructed learning area the kids have access to an open-display library and are encouraged to gain knowledge about nature, science, health and their heritage.</p>

        <p>Playing is the way of learning children get the most output from. Why? Because they are playing real life. While playing they learn about their own strengths and weaknesses. They learn to trust themselves and spend happy hours at FUNdamentals, not being confronted with the expectations of others, who might think that the earlier you start learning academics the greater the benefit for the infants. Sooner is not always better. Rather than pressurizing kids with tests and force them to learn algebra or writing before their brain is ready for processing this complex input, we give them the opportunity to do what they are naturally good at.</p>

        <p>Even though the young toddlers cannot read on their own, we still consider it very beneficial if kids come into contact with books at an early stage of their development. So the teachers read out books to the toddlers. Hence, kids learn to speak the words before writing them. Before a person can master words orally, writing does not have any purpose and meaning.</p>

        <p>The FUNdamentals section is equipped with clean indoor washrooms and an indoor perceptual motor gym. Furthermore, the kids creativity and self-esteem is promoted by talent performances of songs or dances on stage. But most of all our nursery students enjoy playing in the sandbox.</p>

        <p>English is not only the official language of our country, but also the preferred medium for global communication. Therefore, Mahabodhi makes sure that kids come into contact with the English language at the stage of nursery already, so that even before joining 1st class students are able to have little conversations in English. International teachers and volunteers are especially encouraging the kids to apply their language skills on a daily basis.</p>

        <p>In a fun and growth-promoting environment the toddlers are prepared for entering the regular school system in such a way, that they learn from each other and with each other – but most importantly with fun. </p>

       
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/useful-links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/facilities/fundamentals-nursery-wing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  104 => 32,  100 => 31,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/index.jpg'|theme}}\" alt=\"FUNdamentals Nursery Wings\">
      </div>

      <p>Learning is fun! That is what the youngest students of nursery and kindergarten are likely to figure out in their first years at our institution. The concept of FUNdamentals promotes stress-free and child-centred learning, giving the toddlers the freedom, they need, to grow to their utmost potential. In a newly constructed learning area the kids have access to an open-display library and are encouraged to gain knowledge about nature, science, health and their heritage.</p>

        <p>Playing is the way of learning children get the most output from. Why? Because they are playing real life. While playing they learn about their own strengths and weaknesses. They learn to trust themselves and spend happy hours at FUNdamentals, not being confronted with the expectations of others, who might think that the earlier you start learning academics the greater the benefit for the infants. Sooner is not always better. Rather than pressurizing kids with tests and force them to learn algebra or writing before their brain is ready for processing this complex input, we give them the opportunity to do what they are naturally good at.</p>

        <p>Even though the young toddlers cannot read on their own, we still consider it very beneficial if kids come into contact with books at an early stage of their development. So the teachers read out books to the toddlers. Hence, kids learn to speak the words before writing them. Before a person can master words orally, writing does not have any purpose and meaning.</p>

        <p>The FUNdamentals section is equipped with clean indoor washrooms and an indoor perceptual motor gym. Furthermore, the kids creativity and self-esteem is promoted by talent performances of songs or dances on stage. But most of all our nursery students enjoy playing in the sandbox.</p>

        <p>English is not only the official language of our country, but also the preferred medium for global communication. Therefore, Mahabodhi makes sure that kids come into contact with the English language at the stage of nursery already, so that even before joining 1st class students are able to have little conversations in English. International teachers and volunteers are especially encouraging the kids to apply their language skills on a daily basis.</p>

        <p>In a fun and growth-promoting environment the toddlers are prepared for entering the regular school system in such a way, that they learn from each other and with each other – but most importantly with fun. </p>

       
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/useful-links' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/facilities/fundamentals-nursery-wing.htm", "");
    }
}
