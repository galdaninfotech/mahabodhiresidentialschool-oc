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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/blog/posts.htm */
class __TwigTemplate_4488b33c528eb502b71557f5feb2c9c1c3da1c77f7512f82374d2a667ff52107 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 9);
        $filters = array("escape" => 8, "date" => 27, "raw" => 33, "page" => 47);
        $functions = array("range" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'date', 'raw', 'page'],
                ['range']
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
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
            echo "        <div class=\"media\">

            <div class=\"media-left\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">
                    ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 9), "count", [], "any", false, false, true, 9) > 0)) {
                // line 10
                echo "                        <img class=\"media-object\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 10), "first", [], "any", false, false, true, 10), "getThumb", [0 => 100, 1 => "auto"], "method", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\" />
                    ";
            } else {
                // line 12
                echo "                        <img class=\"media-object\" src=\"http://placehold.it/100x100\" />
                    ";
            }
            // line 14
            echo "                </a>
            </div>

            <div class=\"media-body\">
                <h4 class=\"media-heading\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</a>
                </h4>
                <p class=\"info\">
                    Posted
                    ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 23), "count", [], "any", false, false, true, 23)) {
                echo " in ";
            }
            // line 24
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 24));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 25)) {
                    echo ", ";
                }
                // line 26
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 27), 27, $this->source), "M d, Y"), "html", null, true);
            echo "
                </p>

                ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 30)) {
                // line 31
                echo "                    <p class=\"excerpt\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 33
                echo "                    <div class=\"content\">";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 33), 33, $this->source);
                echo "</div>
                ";
            }
            // line 35
            echo "            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "        <div class=\"no-data\">
            <p>";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noPostsMessage"] ?? null), 39, $this->source), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>

";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 44) > 1)) {
            // line 45
            echo "    <ul class=\"pagination\">
        ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 46) > 1)) {
                // line 47
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 47), "baseFileName", [], "any", false, false, true, 47), 47, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 47) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 49
            echo "
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 50)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 51
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 51) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 52
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 52), "baseFileName", [], "any", false, false, true, 52), 52, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 52, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
        ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 56) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 56))) {
                // line 57
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 57), "baseFileName", [], "any", false, false, true, 57), 57, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 57) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 59
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/blog/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 59,  240 => 57,  238 => 56,  235 => 55,  224 => 52,  219 => 51,  215 => 50,  212 => 49,  206 => 47,  204 => 46,  201 => 45,  199 => 44,  195 => 42,  186 => 39,  183 => 38,  176 => 35,  170 => 33,  164 => 31,  162 => 30,  155 => 27,  141 => 26,  132 => 25,  114 => 24,  110 => 23,  101 => 19,  94 => 14,  90 => 12,  84 => 10,  82 => 9,  78 => 8,  73 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

<div class=\"post-list\">
    {% for post in posts %}
        <div class=\"media\">

            <div class=\"media-left\">
                <a href=\"{{ post.url }}\">
                    {% if post.featured_images.count > 0 %}
                        <img class=\"media-object\" src=\"{{ post.featured_images.first.getThumb(100, 'auto') }}\" />
                    {% else %}
                        <img class=\"media-object\" src=\"http://placehold.it/100x100\" />
                    {% endif %}
                </a>
            </div>

            <div class=\"media-body\">
                <h4 class=\"media-heading\">
                    <a href=\"{{ post.url }}\">{{ post.title }}</a>
                </h4>
                <p class=\"info\">
                    Posted
                    {% if post.categories.count %} in {% endif %}
                    {% for category in post.categories %}
                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                    on {{ post.published_at|date('M d, Y') }}
                </p>

                {% if post.excerpt %}
                    <p class=\"excerpt\">{{ post.excerpt }}</p>
                {% else %}
                    <div class=\"content\">{{ post.content_html|raw }}</div>
                {% endif %}
            </div>
        </div>
    {% else %}
        <div class=\"no-data\">
            <p>{{ noPostsMessage }}</p>
        </div>
    {% endfor %}
</div>

{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/partials/blog/posts.htm", "");
    }
}
