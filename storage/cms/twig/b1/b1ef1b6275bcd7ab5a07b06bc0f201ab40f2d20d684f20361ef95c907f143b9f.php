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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/facilities/maths-lab.htm */
class __TwigTemplate_7814a64743d701edaa2d79198f7ea32a1f4eaedddaf6d64c0171a7f5b011858c extends \Twig\Template
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
        $tags = array("partial" => 21);
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
        echo "\" alt=\"Maths Labs\">
      </div>

      <p>The school´s math lab was established in 2014. It is seen as a great start to make children love mathematics. The focus is shifted from textbook dominated classes to activity based learning. Students discover mathematics by doing and informal exploration. Learning new mathematical concepts, which many students often feel phobic about, becomes a fun activity for them. The school’s Maths Lab is well equiped with necesary kits & tools to argment the learning eperience of the childen. The interiors of the lab and the teaching & learning aids provides a wonderful opportunity for the children to understand & internalize the relevance & application of otherwise difficult mathematical concepts through concrete objects and situations.</p>

       
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/useful-links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/facilities/maths-lab.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  94 => 22,  90 => 21,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/index.jpg'|theme}}\" alt=\"Maths Labs\">
      </div>

      <p>The school´s math lab was established in 2014. It is seen as a great start to make children love mathematics. The focus is shifted from textbook dominated classes to activity based learning. Students discover mathematics by doing and informal exploration. Learning new mathematical concepts, which many students often feel phobic about, becomes a fun activity for them. The school’s Maths Lab is well equiped with necesary kits & tools to argment the learning eperience of the childen. The interiors of the lab and the teaching & learning aids provides a wonderful opportunity for the children to understand & internalize the relevance & application of otherwise difficult mathematical concepts through concrete objects and situations.</p>

       
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/useful-links' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/facilities/maths-lab.htm", "");
    }
}
