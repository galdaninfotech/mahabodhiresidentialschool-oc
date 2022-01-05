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

/* C:\laragon\www\mrsl1/themes/demo5/pages/facilities/robotics-lab.htm */
class __TwigTemplate_6ee6ceedd461ccccc217a93895b3de2eb2ea10fe95164ad652d614aa4ced1c90 extends \Twig\Template
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
        $tags = array("partial" => 23);
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
        echo "\" alt=\"Robotics Labs\">
      </div>

      <p>Physics and mathematics often considered as stumbling blocks for students. Many students wonder if they might ever be able to apply the learnings in real life situations. To remove such fear and apprehensions in the children and to make the abstract concepts of mathematics & physics practical to their lives, the shool has set up its Robotics Lab, 1st of its kind in entire Ladakh. At first robotics might seem exotic, but on a closer examination it attracts students to domains such as mechanics, electrical circuits and applied mathematical reasoning. Students learn to transfer their abstract knowledge, gained in maths and physics classes, to a practical level.</p>

      <p>Robotics provides a conducive environment that emphasizes on meaningful problem-based learning, integration and application of knowledge, hands-on learning in cooperative groups and demonstrable mastery of new learning we are the 1st school in entire region to have a Robotics Lab in the school.</p>

       
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/useful-links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mrsl1/themes/demo5/pages/facilities/robotics-lab.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  96 => 24,  92 => 23,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/index.jpg'|theme}}\" alt=\"Robotics Labs\">
      </div>

      <p>Physics and mathematics often considered as stumbling blocks for students. Many students wonder if they might ever be able to apply the learnings in real life situations. To remove such fear and apprehensions in the children and to make the abstract concepts of mathematics & physics practical to their lives, the shool has set up its Robotics Lab, 1st of its kind in entire Ladakh. At first robotics might seem exotic, but on a closer examination it attracts students to domains such as mechanics, electrical circuits and applied mathematical reasoning. Students learn to transfer their abstract knowledge, gained in maths and physics classes, to a practical level.</p>

      <p>Robotics provides a conducive environment that emphasizes on meaningful problem-based learning, integration and application of knowledge, hands-on learning in cooperative groups and demonstrable mastery of new learning we are the 1st school in entire region to have a Robotics Lab in the school.</p>

       
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/useful-links' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mrsl1/themes/demo5/pages/facilities/robotics-lab.htm", "");
    }
}
