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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_17a7d9f04c563eb658811cbe1bf512889e73097b86e6ae2ab85ee46ec018b528 extends \Twig\Template
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
        $tags = array("for" => 2, "if" => 4, "partial" => 12);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 2), "isHidden", [], "any", false, false, true, 2)) {
                // line 3
                echo "
        ";
                // line 4
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 4)) {
                    // line 5
                    echo "            <li class=\"nav-item dropdown\">
                ";
                    // line 6
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 6)) {
                        // line 7
                        echo "                    <a class=\"dropdown-item dropdown-toggle\" href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                        echo "\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 7), "isExternal", [], "any", false, false, true, 7)) ? ("target=\"_blank\"") : (""));
                        echo ">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                        echo "
                    </a>
                ";
                    } else {
                        // line 10
                        echo "                    <span>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 12
                    echo "                <ul class=\"dropdown-menu ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 12), "cssClass", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo " bg-primary\" aria-labelledby=\"navbarDropdown\">";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 12)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
            </li>
        ";
                } else {
                    // line 15
                    echo "            <li>
                ";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 16)) {
                        // line 17
                        echo "                <a class=\"dropdown-item\" href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                        echo "</a>
                ";
                    } else {
                        // line 19
                        echo "                <span>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 21
                    echo "            </li>
        ";
                }
                // line 23
                echo "    
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/plugins/rainlab/pages/components/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  132 => 23,  128 => 21,  122 => 19,  114 => 17,  112 => 16,  109 => 15,  97 => 12,  91 => 10,  80 => 7,  78 => 6,  75 => 5,  73 => 4,  70 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for item in items if not item.viewBag.isHidden %}

        {% if item.items %}
            <li class=\"nav-item dropdown\">
                {% if item.url %}
                    <a class=\"dropdown-item dropdown-toggle\" href=\"{{ item.url }}\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>{{ item.title }}
                    </a>
                {% else %}
                    <span>{{ item.title }}</span>
                {% endif %}
                <ul class=\"dropdown-menu {{ item.viewBag.cssClass }} bg-primary\" aria-labelledby=\"navbarDropdown\">{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
            </li>
        {% else %}
            <li>
                {% if item.url %}
                <a class=\"dropdown-item\" href=\"{{ item.url }}\">{{ item.title }}</a>
                {% else %}
                <span>{{ item.title }}</span>
                {% endif %}
            </li>
        {% endif %}
    
{% endfor %}

", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
}
