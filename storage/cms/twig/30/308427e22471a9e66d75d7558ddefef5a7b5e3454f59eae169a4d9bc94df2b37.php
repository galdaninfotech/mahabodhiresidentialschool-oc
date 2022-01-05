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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/contact.htm */
class __TwigTemplate_b21708f2505167e77180317a550a8e714b43978d39360c1f454eb166bc2362da extends \Twig\Template
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
        $tags = array("component" => 19);
        $filters = array("escape" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
        echo "<div class=\"container mt-3 primary-heading\">
  <div class=\"row\">
    <div class=\"col-md-12 d-flex justify-content-center\">
      <h1 class=\"home-primary-heading\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["company"] ?? null), 4, $this->source), "html", null, true);
        echo "</h1>
    </div>
  </div>
</div>


<div class=\"container main-content\">
    <div class=\"row\">
        <div class=\"col-lg-6 address\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 13), "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo " Us</h1>
            <div id=\"contact-us\"> </div>
        </div>
        
        <div class=\"col-lg-6 contact\">
            <h1>Send us a mail.</h1>
            <div id=\"contact-us\"> ";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " </div></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  81 => 13,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mt-3 primary-heading\">
  <div class=\"row\">
    <div class=\"col-md-12 d-flex justify-content-center\">
      <h1 class=\"home-primary-heading\">{{this.page.title}}  {{company}}</h1>
    </div>
  </div>
</div>


<div class=\"container main-content\">
    <div class=\"row\">
        <div class=\"col-lg-6 address\">
            <h1>{{this.page.title }} Us</h1>
            <div id=\"contact-us\"> </div>
        </div>
        
        <div class=\"col-lg-6 contact\">
            <h1>Send us a mail.</h1>
            <div id=\"contact-us\"> {% component 'contact' %} </div></div>
    </div>
</div>", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/contact.htm", "");
    }
}
