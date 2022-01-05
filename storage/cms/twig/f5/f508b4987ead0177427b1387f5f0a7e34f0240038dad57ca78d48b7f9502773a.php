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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-residential-school/history.htm */
class __TwigTemplate_9ba3e0ecb92bd51ab28c72e290e4c1dfed78f3761ea07657c13e7c0ddea078f7 extends \Twig\Template
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
        $tags = array("partial" => 22);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
      
      <p>The Mahabodhi Residential School was established in the year 1992 with just 25 girls selected from the most remote and ignored regions of Ladakh. Today the school has grown huge and has a total of 510 students pursuing their studies from class nursery to 10th standard. It is affiliated to the Central Board of Secondary Education (CBSE), New Delhi and has successfully established its sister branches in three of the most inaccessible villages of Ladakh embracing yet another 350 students under its care and guidance. It is run by the Mahabodhi International Meditation Centre and managed by the Mahabodhi School Managing Committee under the vibrant chairmanship of most Ven. Sanghasena Mahathera.</p>

      <p>Geographically situated at the crown of India in Ladakh region of Jammu and Kashmir, the Mahabodhi Residential School is a natural and tranquil institution away from the din of the city which fosters an ideal educational environment for both students and the teachers. Amidst the beautiful snow capped mountains of Ladakh, the school nurtures the life of students coming together from the widespread hamlets in the valley of Ladakh. It is a unique school where young monks, nuns, boys, girls and the visually impaired children receive secular education without any biases and differences.</p>

      <h6>Message from the Chairman</h6>
      <p>“Mahabodhi education programme aims to reform the existing information and job-oriented education in such a way that the students grow physically strong, mentally brilliant, culturally rich, morally lofty, spiritually enlightening, environmentally friendly, and globally peaceful.”</p>
      <strong>-by<i> Ven. Sanghasena</i></strong>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-residential-school"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "

    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-residential-school/history.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  88 => 22,  70 => 7,  62 => 1,);
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
      
      <p>The Mahabodhi Residential School was established in the year 1992 with just 25 girls selected from the most remote and ignored regions of Ladakh. Today the school has grown huge and has a total of 510 students pursuing their studies from class nursery to 10th standard. It is affiliated to the Central Board of Secondary Education (CBSE), New Delhi and has successfully established its sister branches in three of the most inaccessible villages of Ladakh embracing yet another 350 students under its care and guidance. It is run by the Mahabodhi International Meditation Centre and managed by the Mahabodhi School Managing Committee under the vibrant chairmanship of most Ven. Sanghasena Mahathera.</p>

      <p>Geographically situated at the crown of India in Ladakh region of Jammu and Kashmir, the Mahabodhi Residential School is a natural and tranquil institution away from the din of the city which fosters an ideal educational environment for both students and the teachers. Amidst the beautiful snow capped mountains of Ladakh, the school nurtures the life of students coming together from the widespread hamlets in the valley of Ladakh. It is a unique school where young monks, nuns, boys, girls and the visually impaired children receive secular education without any biases and differences.</p>

      <h6>Message from the Chairman</h6>
      <p>“Mahabodhi education programme aims to reform the existing information and job-oriented education in such a way that the students grow physically strong, mentally brilliant, culturally rich, morally lofty, spiritually enlightening, environmentally friendly, and globally peaceful.”</p>
      <strong>-by<i> Ven. Sanghasena</i></strong>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-residential-school' %}


    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-residential-school/history.htm", "");
    }
}
