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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/blog/categories.htm */
class __TwigTemplate_99c4585d1572d49a09b41d83dde247c144e8bb8976bcf668f1fe3981da5c9e0e extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 5, "if" => 11);
        $filters = array("escape" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, true, 1);
        // line 2
        $context["currentCategorySlug"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "currentCategorySlug", [], "any", false, false, true, 2);
        // line 3
        echo "
<div class=\"list-group\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", [], "any", false, false, true, 6);
            // line 7
            echo "        <a
            href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\"
            class=\"list-group-item ";
            // line 9
            echo (((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 9) == ($context["currentCategorySlug"] ?? null))) ? ("active") : (""));
            echo "\"
            >";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
            ";
            // line 11
            if (($context["postCount"] ?? null)) {
                // line 12
                echo "                <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["postCount"] ?? null), 12, $this->source), "html", null, true);
                echo "</span>
            ";
            }
            // line 14
            echo "        </a> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/blog/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 16,  100 => 14,  94 => 12,  92 => 11,  88 => 10,  84 => 9,  80 => 8,  77 => 7,  74 => 6,  70 => 5,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = blogCategories.categories %}
{% set currentCategorySlug = blogCategories.currentCategorySlug %}

<div class=\"list-group\">
    {% for category in categories %}
        {% set postCount = category.post_count %}
        <a
            href=\"{{ category.url }}\"
            class=\"list-group-item {{ category.slug == currentCategorySlug ? 'active' }}\"
            >{{ category.name }}
            {% if postCount %}
                <span class=\"badge\">{{ postCount }}</span>
            {% endif %}
        </a> 
    {% endfor %}
</div>", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/blog/categories.htm", "");
    }
}
