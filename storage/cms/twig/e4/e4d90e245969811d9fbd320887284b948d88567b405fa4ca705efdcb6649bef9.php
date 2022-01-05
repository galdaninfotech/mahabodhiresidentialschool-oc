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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/plugins/galdan/slideshow/components/homeslideshow/default.htm */
class __TwigTemplate_c041bc1db1d0b3a9ac0c1a50f816a44e237e983b8ae08bbf6c6f4b621fd1804a extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 4, "for" => 10);
        $filters = array("escape" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        $context["slideshows"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "slideshow", [], "any", false, false, true, 1);
        // line 2
        $context["image_count"] = 1;
        // line 3
        echo "
<!-- ";
        // line 4
        if ((($context["width"] ?? null) < 767)) {
            // line 5
            echo "<h1>yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy</h1>
";
        } else {
            // line 7
            echo "<h1>nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</h1>
";
        }
        // line 8
        echo " -->

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slideshows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slideshow"]) {
            // line 11
            echo "<div id=\"mimc-slideshow\" class=\"carousel slide\" data-ride=\"carousel\">
  <div class=\"carousel-inner mobile-height-60vh\">
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slideshow"], "featured_images", [], "any", false, false, true, 13), "count", [], "any", false, false, true, 13)) {
                // line 14
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["slideshow"], "featured_images", [], "any", false, false, true, 14));
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
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 15
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 15)) {
                        // line 16
                        echo "            <div class=\"carousel-item active\">
              <img data-src=\"";
                        // line 17
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                        echo "\"  />
              <div class=\"carousel-caption d-none d-md-block text-center caption\">
                <h3 class=\"alt-font font-size20 sm-font-size18 no-margin\">Mahabodhi International Meditation Centre</h3>
                <h1 class=\"banner-headline clip\">
                  <span class=\"blc\">Meditation In</span>
                  <span class=\"banner-words-wrapper highlight\" style=\"width: 170.779px; overflow: hidden;\">
                    <b class=\"is-hidden\">Action</b>
                    <b class=\"is-visible\">Compassion</b>
                  </span>
                </h1>
                <p class=\"margin-30px-bottom sm-margin-20px-bottom xs-display-none\">We have programs for Vipassana Meditation especially for professional & business executives</p>
                <a href=\"javascript:void(0);\" class=\"btn\">
                    <span class=\"alt-font  font-size16 sm-font-size14\">Learn More</span><span class=\"fa fa-long-arrow-up\" aria-hidden=\"true\"></span><i class=\"fa fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left\"></i>
                </a>
            </div>
          </div>
          ";
                    } else {
                        // line 34
                        echo "            <div class=\"carousel-item\">
              <img data-src=\"";
                        // line 35
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                        echo "\"  />
              <div class=\"carousel-caption d-none d-md-block text-center caption\">
                <h3 class=\"alt-font font-size20 sm-font-size18 no-margin\">Mahabodhi International Meditation Centre</h3>
                <h1 class=\"banner-headline clip\">
                  <span class=\"blc\">Meditation In</span>
                  <span class=\"banner-words-wrapper highlight\" style=\"width: 170.779px; overflow: hidden;\">
                    <b class=\"is-hidden\">Action</b>
                    <b class=\"is-visible\">Compassion</b>
                  </span>
                </h1>
                <p class=\"margin-30px-bottom sm-margin-20px-bottom xs-display-none\">We have programs for Vipassana Meditation especially for professional & business executives</p>
                <a href=\"javascript:void(0);\" class=\"btn\">
                    <span class=\"alt-font  font-size16 sm-font-size14\">Learn More</span><span class=\"fa fa-long-arrow-up\" aria-hidden=\"true\"></span><i class=\"fa fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left\"></i>
                </a>
            </div>
            </div>
          ";
                    }
                    // line 52
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "  ";
            }
            // line 54
            echo "  </div>
  <a class=\"carousel-control-prev\" href=\"#mimc-slideshow\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#mimc-slideshow\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
  <div class=\"arrow d-none d-md-block\">
    <a href=\"javascript:void(0);\" data-scroll-nav=\"1\" class=\"\"><i class=\"fas fa-chevron-down\"></i></a>
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slideshow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/plugins/galdan/slideshow/components/homeslideshow/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 68,  185 => 54,  182 => 53,  168 => 52,  144 => 35,  141 => 34,  117 => 17,  114 => 16,  111 => 15,  93 => 14,  91 => 13,  87 => 11,  83 => 10,  79 => 8,  75 => 7,  71 => 5,  69 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set slideshows = __SELF__.slideshow %}
{% set image_count=1 %}

<!-- {% if width < 767 %}
<h1>yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy</h1>
{% else %}
<h1>nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</h1>
{% endif %} -->

{% for slideshow in slideshows %}
<div id=\"mimc-slideshow\" class=\"carousel slide\" data-ride=\"carousel\">
  <div class=\"carousel-inner mobile-height-60vh\">
    {% if slideshow.featured_images.count %}
        {% for image in slideshow.featured_images %}
          {% if loop.first %}
            <div class=\"carousel-item active\">
              <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\"  />
              <div class=\"carousel-caption d-none d-md-block text-center caption\">
                <h3 class=\"alt-font font-size20 sm-font-size18 no-margin\">Mahabodhi International Meditation Centre</h3>
                <h1 class=\"banner-headline clip\">
                  <span class=\"blc\">Meditation In</span>
                  <span class=\"banner-words-wrapper highlight\" style=\"width: 170.779px; overflow: hidden;\">
                    <b class=\"is-hidden\">Action</b>
                    <b class=\"is-visible\">Compassion</b>
                  </span>
                </h1>
                <p class=\"margin-30px-bottom sm-margin-20px-bottom xs-display-none\">We have programs for Vipassana Meditation especially for professional & business executives</p>
                <a href=\"javascript:void(0);\" class=\"btn\">
                    <span class=\"alt-font  font-size16 sm-font-size14\">Learn More</span><span class=\"fa fa-long-arrow-up\" aria-hidden=\"true\"></span><i class=\"fa fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left\"></i>
                </a>
            </div>
          </div>
          {% else %}
            <div class=\"carousel-item\">
              <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\"  />
              <div class=\"carousel-caption d-none d-md-block text-center caption\">
                <h3 class=\"alt-font font-size20 sm-font-size18 no-margin\">Mahabodhi International Meditation Centre</h3>
                <h1 class=\"banner-headline clip\">
                  <span class=\"blc\">Meditation In</span>
                  <span class=\"banner-words-wrapper highlight\" style=\"width: 170.779px; overflow: hidden;\">
                    <b class=\"is-hidden\">Action</b>
                    <b class=\"is-visible\">Compassion</b>
                  </span>
                </h1>
                <p class=\"margin-30px-bottom sm-margin-20px-bottom xs-display-none\">We have programs for Vipassana Meditation especially for professional & business executives</p>
                <a href=\"javascript:void(0);\" class=\"btn\">
                    <span class=\"alt-font  font-size16 sm-font-size14\">Learn More</span><span class=\"fa fa-long-arrow-up\" aria-hidden=\"true\"></span><i class=\"fa fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left\"></i>
                </a>
            </div>
            </div>
          {% endif %}
        {% endfor %}
  {% endif %}
  </div>
  <a class=\"carousel-control-prev\" href=\"#mimc-slideshow\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#mimc-slideshow\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
  <div class=\"arrow d-none d-md-block\">
    <a href=\"javascript:void(0);\" data-scroll-nav=\"1\" class=\"\"><i class=\"fas fa-chevron-down\"></i></a>
</div>
</div>
{% endfor %}


", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/plugins/galdan/slideshow/components/homeslideshow/default.htm", "");
    }
}
