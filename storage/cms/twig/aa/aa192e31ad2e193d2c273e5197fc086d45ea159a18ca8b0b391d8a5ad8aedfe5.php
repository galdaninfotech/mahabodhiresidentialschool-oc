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

/* C:\laragon\www\mimc1/plugins/rainlab/pages/components/staticmenu/default.htm */
class __TwigTemplate_eb7e728a159b9d66754ab601dbcd3e727fe64838461c0e92cfab876b34add353 extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 12, "partial" => 17);
        $filters = array("theme" => 4, "escape" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
                ['theme', 'escape'],
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, true, 1)) {
            // line 2
            echo "<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"main_navbar\">
\t<a class=\"logo active\" href=\"javascript:void(0);\" data-scroll-nav=\"0\">
\t\t<img src=\"";
            // line 4
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-light.png");
            echo "\" alt=\"Mahabodhi International Meditation Centre\" title=\"Mahabodhi International Meditation Centre\">
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t  <span class=\"navbar-toggler-icon\"></span>
\t</button>
  
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 13)) {
                    // line 14
                    echo "\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle ";
                    // line 15
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 15)) ? ("activez") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 15)) ? ("child-active") : (""));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo "\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 15), "isExternal", [], "any", false, false, true, 15)) ? ("target=\"_blank\"") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu bg-primary\" aria-labelledby=\"navbarDropdown\">";
                    // line 17
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 17)                    ;
                    $context['__cms_partial_params']['count'] = ($context["count"] ?? null)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
\t\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 21), "isExternal", [], "any", false, false, true, 21)) ? ("target=\"_blank\"") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t
\t\t</ul>
\t</div>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/plugins/rainlab/pages/components/staticmenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 26,  126 => 25,  115 => 21,  112 => 20,  102 => 17,  89 => 15,  86 => 14,  83 => 13,  79 => 12,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.menuItems %}
<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"main_navbar\">
\t<a class=\"logo active\" href=\"javascript:void(0);\" data-scroll-nav=\"0\">
\t\t<img src=\"{{'assets/images/logo-light.png'|theme}}\" alt=\"Mahabodhi International Meditation Centre\" title=\"Mahabodhi International Meditation Centre\">
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t  <span class=\"navbar-toggler-icon\"></span>
\t</button>
  
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t{% for item in staticMenu.menuItems %}
\t\t\t\t{% if item.items %}
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle {{ item.isActive ? 'activez' : '' }} {{ item.isChildActive ? 'child-active' : '' }}\" href=\"{{ item.url }}\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>{{ item.title }}
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu bg-primary\" aria-labelledby=\"navbarDropdown\">{% partial __SELF__ ~ \"::items\" items=item.items count=count %}</ul>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ item.url }}\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>{{ item.title }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t
\t\t</ul>
\t</div>
  </nav>
{% endif %}", "C:\\laragon\\www\\mimc1/plugins/rainlab/pages/components/staticmenu/default.htm", "");
    }
}
