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

/* C:\laragon\www\mimc1/themes/demo5/pages/about/volunteers-with-us.htm */
class __TwigTemplate_23445f96eb3831aa1c6bc1434bc05c59c689b091c44882e594c3955f221d22de extends \Twig\Template
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
          <form 
          id=\"contact-form\" 
          data-request=\"onContact\" 
          data-request-success=\"
            \$('#contact-form').fadeOut();
            \$('.contact h1').html('Thank You!');
            \$('.contact').append('<p>Hi '+\$('#name').val()+'!</p>');
            \$('.contact').append('<p>Your message has been sent. You will be shortly contacted by our customer support.</p>');
            console.log('";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text_messages"] ?? null), 15, $this->source), "html", null, true);
        echo "');
          \"
            class=\"form-horizontal margin-50px-tb\">
            <div class=\"form-group\"><label>Full Name*</label><input name=\"name\" class=\"form-control\" type=\"text\"></div>
            <div class=\"form-group\"><label>Email ID*</label><input name=\"email\" class=\"form-control\" type=\"email\"></div>

            <div class=\"form-group age\"><label>Age*</label><input class=\"form-control\" type=\"number\"></div>
            <div class=\"form-group age\"><label>Sex</label><input class=\"form-control\" type=\"text\"></div>

            <div class=\"form-group age\"><label>Occupation (Optional)</label><input class=\"form-control\" type=\"text\"></div>
            <div class=\"form-group age\"><label>Nationality</label><input class=\"form-control\" type=\"text\"></div>

            <div class=\"form-group age\"><label>Message</label>
              <textarea name=\"message\" class=\"form-control\" rows=\"10\" style=\"height:100%; min-width: 202% !important; resize: vertical;\"></textarea>
            </div>

            

            

            <button class=\"btn signin\">Volunteer Now</button>
          </form>
        </div>
      </div>
      
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
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/about/volunteers-with-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 44,  112 => 43,  81 => 15,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      <div class=\"form-bg\">
        <div class=\"form-container\">
          <h1>{{this.page.title}}</h1>
          <form 
          id=\"contact-form\" 
          data-request=\"onContact\" 
          data-request-success=\"
            \$('#contact-form').fadeOut();
            \$('.contact h1').html('Thank You!');
            \$('.contact').append('<p>Hi '+\$('#name').val()+'!</p>');
            \$('.contact').append('<p>Your message has been sent. You will be shortly contacted by our customer support.</p>');
            console.log('{{ text_messages }}');
          \"
            class=\"form-horizontal margin-50px-tb\">
            <div class=\"form-group\"><label>Full Name*</label><input name=\"name\" class=\"form-control\" type=\"text\"></div>
            <div class=\"form-group\"><label>Email ID*</label><input name=\"email\" class=\"form-control\" type=\"email\"></div>

            <div class=\"form-group age\"><label>Age*</label><input class=\"form-control\" type=\"number\"></div>
            <div class=\"form-group age\"><label>Sex</label><input class=\"form-control\" type=\"text\"></div>

            <div class=\"form-group age\"><label>Occupation (Optional)</label><input class=\"form-control\" type=\"text\"></div>
            <div class=\"form-group age\"><label>Nationality</label><input class=\"form-control\" type=\"text\"></div>

            <div class=\"form-group age\"><label>Message</label>
              <textarea name=\"message\" class=\"form-control\" rows=\"10\" style=\"height:100%; min-width: 202% !important; resize: vertical;\"></textarea>
            </div>

            

            

            <button class=\"btn signin\">Volunteer Now</button>
          </form>
        </div>
      </div>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/ven-bhikkhu-sanghasena' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/about/volunteers-with-us.htm", "");
    }
}
