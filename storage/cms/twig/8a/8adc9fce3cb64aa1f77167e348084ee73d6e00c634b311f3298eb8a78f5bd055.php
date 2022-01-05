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

/* C:\laragon\www\mimc1/themes/demo5/pages/about/list-of-activities.htm */
class __TwigTemplate_e0342e13f4e5251f264a46bfc565cbd9ff474acb28256cecda9d0a284c247df1 extends \Twig\Template
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
        $tags = array("partial" => 43);
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
      
      <div class=\"polaroid mb-5\">
        <img class=\"img img-responsive\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/31-mimc-activities.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
          <div class=\"text\">
              <h6>31 MIMC Activities</h6>
          </div>
      </div><br><br>

      <div class=\"polaroid mb-5\">
        <img class=\"img img-responsive\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/a-prayer-for-world-peace.jpg");
        echo "\" alt=\"a-prayer-for-world-peace\">
          <div class=\"text\">
              <h6>A Prayer For World Peace</h6>
          </div>
      </div><br><br>

      <div class=\"polaroid mb-5\">
        <img class=\"img img-responsive\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/prayer-of-compassion.jpg");
        echo "\" alt=\"prayer-of-compassion\">
          <div class=\"text\">
              <h6>Prayer Of Compassion</h6>
          </div>
      </div><br><br>

      <div class=\"polaroid mb-5\">
        <img class=\"img img-responsive\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/motto.jpg");
        echo "\" alt=\"Motto\">
          <div class=\"text\">
              <h6>MIMC Motto</h6>
          </div>
      </div><br><br>
      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/ven-bhikkhu-sanghasena"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/about/list-of-activities.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  127 => 44,  123 => 43,  110 => 33,  100 => 26,  90 => 19,  78 => 12,  70 => 7,  62 => 1,);
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
      
      <div class=\"polaroid mb-5\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/31-mimc-activities.jpg'|theme}}\" alt=\"{{this.page.title}}\">
          <div class=\"text\">
              <h6>31 MIMC Activities</h6>
          </div>
      </div><br><br>

      <div class=\"polaroid mb-5\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/a-prayer-for-world-peace.jpg'|theme}}\" alt=\"a-prayer-for-world-peace\">
          <div class=\"text\">
              <h6>A Prayer For World Peace</h6>
          </div>
      </div><br><br>

      <div class=\"polaroid mb-5\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/prayer-of-compassion.jpg'|theme}}\" alt=\"prayer-of-compassion\">
          <div class=\"text\">
              <h6>Prayer Of Compassion</h6>
          </div>
      </div><br><br>

      <div class=\"polaroid mb-5\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/motto.jpg'|theme}}\" alt=\"Motto\">
          <div class=\"text\">
              <h6>MIMC Motto</h6>
          </div>
      </div><br><br>
      <p></p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/ven-bhikkhu-sanghasena' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/about/list-of-activities.htm", "");
    }
}
