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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/blog.htm */
class __TwigTemplate_f9c42de6fd34f8bec849f1dddbd3c7c73b1bf3e7be9e7fc183e627cd19f4fc8f extends \Twig\Template
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
        $tags = array("partial" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/categories"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 8,  75 => 7,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            {% partial 'blog/posts' %}
        </div>
        <div class=\"col-md-4\">
            {% partial 'blog/categories' %}
        </div>
    </div>
</div>", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/blog.htm", "");
    }
}
