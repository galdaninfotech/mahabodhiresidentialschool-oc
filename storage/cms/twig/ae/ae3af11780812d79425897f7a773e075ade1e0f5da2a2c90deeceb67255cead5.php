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

/* C:\laragon\www\mimc1/themes/demo5/pages/contact/gen-secretary.htm */
class __TwigTemplate_ed974a540ff87cdcea0836717be7d532f494278e6cfd8848eac432bb92a779b7 extends \Twig\Template
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
        $tags = array("partial" => 26);
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
          <h1>Contact - ";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h1>
          For information related to meditation courses please contact us at:-<br>
          mimc-sambodhi@mahabodhi-ladakh.org<br><br>
            <form class=\"form-horizontal margin-50px-tb\">
                <div class=\"form-group\"><label>Full Name*</label><input class=\"form-control\" type=\"text\"></div>
                <div class=\"form-group\"><label>Email ID*</label><input class=\"form-control\" type=\"email\"></div>

                <div class=\"form-group\">
                  <textarea name=\"message\" placeholder=\"Your Message\" rows=\"12\" class=\"form-control\"></textarea>
                </div>


                <button class=\"btn signin\">Send Now</button>
            </form>
        </div>
      </div>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/contact/gen-secretary.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  96 => 27,  92 => 26,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      <div class=\"form-bg\">
        <div class=\"form-container\">
          <h1>Contact - {{this.page.title}}</h1>
          For information related to meditation courses please contact us at:-<br>
          mimc-sambodhi@mahabodhi-ladakh.org<br><br>
            <form class=\"form-horizontal margin-50px-tb\">
                <div class=\"form-group\"><label>Full Name*</label><input class=\"form-control\" type=\"text\"></div>
                <div class=\"form-group\"><label>Email ID*</label><input class=\"form-control\" type=\"email\"></div>

                <div class=\"form-group\">
                  <textarea name=\"message\" placeholder=\"Your Message\" rows=\"12\" class=\"form-control\"></textarea>
                </div>


                <button class=\"btn signin\">Send Now</button>
            </form>
        </div>
      </div>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/contact' %}
      {% partial 'sidebar/about' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/contact/gen-secretary.htm", "");
    }
}
