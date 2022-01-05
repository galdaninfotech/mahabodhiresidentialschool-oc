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

/* C:\laragon\www\mrsl1/plugins/indikator/news/components/posts/default.htm */
class __TwigTemplate_9d5914dd38cbe5b45f06326f9b3eb38471ed2232180161527c98742c1b9996eb extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 6);
        $filters = array("escape" => 6, "media" => 6, "date" => 9, "raw" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'media', 'date', 'raw'],
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    <div class=\"post-item\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, true, 6)) {
                echo "<div class=\"post-image\"><a href=\"/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["postPage"] ?? null), 6, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\"><img src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, true, 6), 6, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\"></a></div>";
            }
            // line 7
            echo "
        <h2 class=\"post-title\"><a href=\"/";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["postPage"] ?? null), 8, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</a></h2>
        <p class=\"post-date\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 9), 9, $this->source), "Y-m-d"), "html", null, true);
            echo "</p>

        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, true, 11)) {
                // line 12
                echo "        <div class=\"post-introductory\">";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, true, 12), 12, $this->source);
                echo "</div>
        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 13
$context["post"], "content", [], "any", false, false, true, 13)) {
                // line 14
                echo "        <div class=\"post-content\">";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, true, 14), 14, $this->source);
                echo "</div>
        ";
            }
            // line 16
            echo "    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <span class=\"post-nodata\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noPostsMessage"] ?? null), 18, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>

";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", [], "any", false, false, true, 22), 22, $this->source);
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mrsl1/plugins/indikator/news/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 22,  134 => 20,  125 => 18,  119 => 16,  113 => 14,  111 => 13,  106 => 12,  104 => 11,  99 => 9,  91 => 8,  88 => 7,  76 => 6,  73 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.posts %}

<div class=\"post-list\">
    {% for post in posts %}
    <div class=\"post-item\">
        {% if post.image %}<div class=\"post-image\"><a href=\"/{{ postPage }}/{{ post.slug }}\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\"></a></div>{% endif %}

        <h2 class=\"post-title\"><a href=\"/{{ postPage }}/{{ post.slug }}\">{{ post.title }}</a></h2>
        <p class=\"post-date\">{{ post.published_at|date('Y-m-d') }}</p>

        {% if post.introductory %}
        <div class=\"post-introductory\">{{ post.introductory|raw }}</div>
        {% elseif post.content %}
        <div class=\"post-content\">{{ post.content|raw }}</div>
        {% endif %}
    </div>
    {% else %}
    <span class=\"post-nodata\">{{ noPostsMessage }}</span>
    {% endfor %}
</div>

{{ posts.render|raw }}
", "C:\\laragon\\www\\mrsl1/plugins/indikator/news/components/posts/default.htm", "");
    }
}
