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

/* C:\laragon\www\mimc1/themes/demo5/pages/gallery.htm */
class __TwigTemplate_1820f0176a5995450dc7ff40df3753ac0bf9be8725a4ee6bd91aefa37b3c589f extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"section\">
    <div class=\"container\">
        <div class=\"row main-content margin-50px-tb\">
            <div class=\"col-md-12 d-flex justify-content-center mb-8\">
                <div>
                    <div class=\"heading white-heading mt-20\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</div>
                </div>
            </div>
            <div class=\"col-md-12 mt-6\">
                <ul id='gallery'></ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section\">
    <div class=\"container\">
        <div class=\"row main-content margin-50px-tb\">
            <div class=\"col-md-12 d-flex justify-content-center mb-8\">
                <div>
                    <div class=\"heading white-heading mt-20\">{{this.page.title}}</div>
                </div>
            </div>
            <div class=\"col-md-12 mt-6\">
                <ul id='gallery'></ul>
            </div>
        </div>
    </div>
</div>", "C:\\laragon\\www\\mimc1/themes/demo5/pages/gallery.htm", "");
    }
}
