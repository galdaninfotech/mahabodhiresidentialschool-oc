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

/* C:\laragon\www\mimc1/themes/demo5/pages/about/membership-form.htm */
class __TwigTemplate_ece7d1b8e186e51268fefc8edfb4d8259ac8cfe8b2681f9738070faf12ab1aad extends \Twig\Template
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
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape'],
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
      <div class=\"form-bg\">
        <div class=\"form-container\">
          <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h1>
          <form class=\"form-horizontal margin-50px-tb\">
            <div class=\"form-group\"><label>Full Name*</label><input class=\"form-control\" type=\"text\"></div>
            <div class=\"form-group\"><label>Email ID*</label><input class=\"form-control\" type=\"email\"></div>

            <div class=\"form-group age\"><label>Age*</label><input class=\"form-control\" type=\"number\"></div>
            <div class=\"form-group age\"><label>Sex</label><input class=\"form-control\" type=\"text\"></div>

            <div class=\"form-group age\"><label>Occupation (Optional)</label><input class=\"form-control\" type=\"text\"></div>
            <div class=\"form-group age\"><label>Nationality</label><input class=\"form-control\" type=\"text\"></div>

            <button class=\"btn signin\">Submit Form</button>
          </form>
        </div>
      </div>
      
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
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/about/membership-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  95 => 26,  91 => 25,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      <div class=\"form-bg\">
        <div class=\"form-container\">
          <h1>{{this.page.title}}</h1>
          <form class=\"form-horizontal margin-50px-tb\">
            <div class=\"form-group\"><label>Full Name*</label><input class=\"form-control\" type=\"text\"></div>
            <div class=\"form-group\"><label>Email ID*</label><input class=\"form-control\" type=\"email\"></div>

            <div class=\"form-group age\"><label>Age*</label><input class=\"form-control\" type=\"number\"></div>
            <div class=\"form-group age\"><label>Sex</label><input class=\"form-control\" type=\"text\"></div>

            <div class=\"form-group age\"><label>Occupation (Optional)</label><input class=\"form-control\" type=\"text\"></div>
            <div class=\"form-group age\"><label>Nationality</label><input class=\"form-control\" type=\"text\"></div>

            <button class=\"btn signin\">Submit Form</button>
          </form>
        </div>
      </div>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/ven-bhikkhu-sanghasena' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/about/membership-form.htm", "");
    }
}
