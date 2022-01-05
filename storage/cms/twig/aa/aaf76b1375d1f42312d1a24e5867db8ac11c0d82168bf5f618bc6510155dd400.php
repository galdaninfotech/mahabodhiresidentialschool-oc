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

/* C:\laragon\www\mimc1/themes/demo5/partials/header.htm */
class __TwigTemplate_54b0ceeebabf16d55d9ccfdee3f00391075ec8c236e5b3a112c9c2da89a39a9b extends \Twig\Template
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
        $tags = array("if" => 1, "partial" => 3, "component" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial', 'component'],
                [],
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 1), "title", [], "any", false, false, true, 1) == "Home")) {
            // line 2
            echo "    <header class=\"header background-position-top bg-img no-transition\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainmenu"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </header>
    ";
            // line 5
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("homeslideshow"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 6
            echo "
";
        } else {
            // line 8
            echo "    <header class=\"header background-position-top bg-img no-transition\">
        ";
            // line 9
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainmenu"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "    </header>
    ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "title", [], "any", false, false, true, 11) == "Gallery")) {
                // line 12
                echo "        
    ";
            } else {
                // line 14
                echo "        ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slideshow-sm"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 15
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  98 => 14,  94 => 12,  92 => 11,  89 => 10,  85 => 9,  82 => 8,  78 => 6,  74 => 5,  71 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.page.title == 'Home' %}
    <header class=\"header background-position-top bg-img no-transition\">
        {% partial 'mainmenu' %}
    </header>
    {% component 'homeslideshow' %}

{% else %}
    <header class=\"header background-position-top bg-img no-transition\">
        {% partial 'mainmenu' %}
    </header>
    {% if this.page.title == 'Gallery' %}
        
    {% else %}
        {% partial 'slideshow-sm' %}
    {% endif %}
{% endif %}", "C:\\laragon\\www\\mimc1/themes/demo5/partials/header.htm", "");
    }
}
