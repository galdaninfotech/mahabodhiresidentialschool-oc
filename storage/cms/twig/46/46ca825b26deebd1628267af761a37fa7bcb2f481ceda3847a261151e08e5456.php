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

/* C:\laragon\www\mrsl1/themes/demo5/pages/about/dfc-i-can-change-award.htm */
class __TwigTemplate_a37399adee3e84a1c16d523dfc8e725dfafb49d06c88f131e206c31406008789 extends \Twig\Template
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
        $tags = array("partial" => 37);
        $filters = array("escape" => 7, "theme" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape', 'theme'],
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
      
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h1></div>
        </div>
      </div>
      
      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/index.jpg");
        echo "\" alt=\"DFC I Can Change Award\">
      </div>

      <h6>Mahabodhi Hostels for Girls- 1991</h6>
      <p>Mahabodhi Girls Hostel is meant for those under privileged girl students from the far flung villages of Ladakh region who were receiving a holistic education from the Mahabodhi Residential School in the Devachan campus. Like many other parts of India, Ladakh has witnessed a biased attitude toward female children, especially in terms of providing education.</p>

    <p>Hence, Venerable Bhikkhu Sanghasena has long felt the need to provide education for deprived girls as a matter of priority over boys. In 1992, the Mahabodhi Girls' Hostel was established, embracing young girls from extremely disadvantaged families located in some of the remotest parts of the region. At present, 140 girls reside at the Mahabodhi Girls' Hostel, living like sisters, in a homely environment surrounded by love, care and genuine concern. Extending the existing facilities to accommodate at least 200 girls, ensuring no female child is deprived of an education through a lack of facilities or resources is our goal. </p>

    <h6>Mahabodhi Hostels for Boys – 1996</h6>

    <p>Mahabodhi Boys Hostel aims to provide decent accommodation to the boys from remote places of the Ladakh region to get proper education facilities at the campus school. Like their sister counterparts‚ many poor boys belonging to remote and marginalized communities in Ladakh are deprived of a basic education.</p>

    <p>Hence‚ to provide a home for such boys‚ Venerable Bhikkhu Sanghasena initiated the Mahabodhi Boys’ Hostel in 1996‚which received its first intake of 10 boys that same year.Now‚130 young and highly energetic boys are resident at the Mahabodhi Boys’ Hostel‚with each developing and flourishing in the safety and security of this loving environment.</p>

    <p>The boys’ hostel required extending the existing facilities to accommodate at least 200 boys‚so no child is deprived of an education through a lack of facilities or resources.</p>

    <p>The Mahabodhi hostels for boys have become a home away from home for more than 100 young boys. The hostel is upgraded and expanded periodically to accommodate more needy children, ensuring facilities to the truly disadvantages, who find it difficult to get access to educational opportunities are not left out and they find a place in our hostel.</p>




       
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/useful-links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mrsl1/themes/demo5/pages/about/dfc-i-can-change-award.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  110 => 38,  106 => 37,  78 => 12,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>{{this.page.title}}</h1></div>
        </div>
      </div>
      
      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/index.jpg'|theme}}\" alt=\"DFC I Can Change Award\">
      </div>

      <h6>Mahabodhi Hostels for Girls- 1991</h6>
      <p>Mahabodhi Girls Hostel is meant for those under privileged girl students from the far flung villages of Ladakh region who were receiving a holistic education from the Mahabodhi Residential School in the Devachan campus. Like many other parts of India, Ladakh has witnessed a biased attitude toward female children, especially in terms of providing education.</p>

    <p>Hence, Venerable Bhikkhu Sanghasena has long felt the need to provide education for deprived girls as a matter of priority over boys. In 1992, the Mahabodhi Girls' Hostel was established, embracing young girls from extremely disadvantaged families located in some of the remotest parts of the region. At present, 140 girls reside at the Mahabodhi Girls' Hostel, living like sisters, in a homely environment surrounded by love, care and genuine concern. Extending the existing facilities to accommodate at least 200 girls, ensuring no female child is deprived of an education through a lack of facilities or resources is our goal. </p>

    <h6>Mahabodhi Hostels for Boys – 1996</h6>

    <p>Mahabodhi Boys Hostel aims to provide decent accommodation to the boys from remote places of the Ladakh region to get proper education facilities at the campus school. Like their sister counterparts‚ many poor boys belonging to remote and marginalized communities in Ladakh are deprived of a basic education.</p>

    <p>Hence‚ to provide a home for such boys‚ Venerable Bhikkhu Sanghasena initiated the Mahabodhi Boys’ Hostel in 1996‚which received its first intake of 10 boys that same year.Now‚130 young and highly energetic boys are resident at the Mahabodhi Boys’ Hostel‚with each developing and flourishing in the safety and security of this loving environment.</p>

    <p>The boys’ hostel required extending the existing facilities to accommodate at least 200 boys‚so no child is deprived of an education through a lack of facilities or resources.</p>

    <p>The Mahabodhi hostels for boys have become a home away from home for more than 100 young boys. The hostel is upgraded and expanded periodically to accommodate more needy children, ensuring facilities to the truly disadvantages, who find it difficult to get access to educational opportunities are not left out and they find a place in our hostel.</p>




       
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/useful-links' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mrsl1/themes/demo5/pages/about/dfc-i-can-change-award.htm", "");
    }
}
