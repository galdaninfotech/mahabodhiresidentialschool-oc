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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/about/about.htm */
class __TwigTemplate_2edd2c90aca27fe01c423058ae16ce4d833e55bed880afd4ae2f9c96159d6ce8 extends \Twig\Template
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
        $tags = array("partial" => 41);
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
        echo " US</h1></div>
        </div>
      </div>
      
      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/index.jpg");
        echo "\" alt=\"About\">
      </div>
      
      
        <p>The Mahabodhi Residential School is a CBSE affiliated high school flourishing in the naturally dazzling and tranquil campus of Mahabodhi International Meditation Centre (MIMC), Leh Ladakh. Away from the hustle and bustle of the city and gorgeously nestled amidst the majestic snow-capped mountains, the school nurtures the lives of hundreds of students coming together from across the length and breadth of Ladakh. It is a unique school where young monks, nuns, boys, girls and visually impaired children receive quality education indiscriminately. </p>

        <p>The Mahabodhi Residential School was established in the year 1992 by most Ven. Bhikkhu Sanghasena on a completely abandoned desert-like land. With continued efforts and strong motivation, today the school has grown into a beautiful learning hub offering a perfect milieu for children to grown holistically and happily. Ever since its inception, the school has committed itself to providing quality education to the children, coming together from the widespread hamlets of Ladakh, to help them flourish and grow inot…... Apart from imparting the normal secular education the school is committed to accomplish the vision and mission of a happy and prosperous society, nation and world at large, by encouraging in the children a sense of global responsibility, compassionate outlook of the world, and empathetic understanding of the entire sentient beings through imparting spiritual and moral training.</p>

        <p>It is a matter of great pride and joy for all associated with the school to be able to look back upon the activities and rejoice over what the school has been able to achieve within the past few decades. Today Mahabodhi Residential School is one of the best schools in Ladakh with many prestigious awards and laurels to its name including the “I Can Change-Design for Change (DFC) Awards and the Guinness World Records. Given the demand and the current high standard of service delivery, the upgradation of the school to higher secondary (10 + 2) is also in high demand and process. Currently, under the compassionate aspiration and vision of Ven. Bhikkhu Sanghasena, the Mahabodhi Education Programme is supporting around thousands of children, who come from more than 64 remote villages and the noble endeavour is only growing and expanding every passing year.</p>

        <h6>The Concept of Mahabodhi Education Programme </h6>
        “The Mahabodhi Educational Programmes aims to reform the existing information and job oriented educational system in such a way that students grow: -
        <ul class=\"mrsl-list\">
            <li>Physically strong</li>
            <li>Mentally brilliant</li>
            <li>Culturally rich</li>
            <li>Morally lofty</li>
            <li>Spiritually enlightening</li>
            <li>Socially harmonious</li>
            <li>Materially prosperous</li>
            <li>Globally friendly</li>
            <li>Environmentally peaceful</li>
        </ul>


      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/useful-links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/about/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  114 => 42,  110 => 41,  78 => 12,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      
      <div class=\"d-flex justify-content-center margin-20px-bottom\">
        <div>
            <div class=\"heading white-heading\"><h1>{{this.page.title}} US</h1></div>
        </div>
      </div>
      
      <div class=\"polaroid\">
        <img class=\"img img-responsive\" src=\"{{'assets/images/index.jpg'|theme}}\" alt=\"About\">
      </div>
      
      
        <p>The Mahabodhi Residential School is a CBSE affiliated high school flourishing in the naturally dazzling and tranquil campus of Mahabodhi International Meditation Centre (MIMC), Leh Ladakh. Away from the hustle and bustle of the city and gorgeously nestled amidst the majestic snow-capped mountains, the school nurtures the lives of hundreds of students coming together from across the length and breadth of Ladakh. It is a unique school where young monks, nuns, boys, girls and visually impaired children receive quality education indiscriminately. </p>

        <p>The Mahabodhi Residential School was established in the year 1992 by most Ven. Bhikkhu Sanghasena on a completely abandoned desert-like land. With continued efforts and strong motivation, today the school has grown into a beautiful learning hub offering a perfect milieu for children to grown holistically and happily. Ever since its inception, the school has committed itself to providing quality education to the children, coming together from the widespread hamlets of Ladakh, to help them flourish and grow inot…... Apart from imparting the normal secular education the school is committed to accomplish the vision and mission of a happy and prosperous society, nation and world at large, by encouraging in the children a sense of global responsibility, compassionate outlook of the world, and empathetic understanding of the entire sentient beings through imparting spiritual and moral training.</p>

        <p>It is a matter of great pride and joy for all associated with the school to be able to look back upon the activities and rejoice over what the school has been able to achieve within the past few decades. Today Mahabodhi Residential School is one of the best schools in Ladakh with many prestigious awards and laurels to its name including the “I Can Change-Design for Change (DFC) Awards and the Guinness World Records. Given the demand and the current high standard of service delivery, the upgradation of the school to higher secondary (10 + 2) is also in high demand and process. Currently, under the compassionate aspiration and vision of Ven. Bhikkhu Sanghasena, the Mahabodhi Education Programme is supporting around thousands of children, who come from more than 64 remote villages and the noble endeavour is only growing and expanding every passing year.</p>

        <h6>The Concept of Mahabodhi Education Programme </h6>
        “The Mahabodhi Educational Programmes aims to reform the existing information and job oriented educational system in such a way that students grow: -
        <ul class=\"mrsl-list\">
            <li>Physically strong</li>
            <li>Mentally brilliant</li>
            <li>Culturally rich</li>
            <li>Morally lofty</li>
            <li>Spiritually enlightening</li>
            <li>Socially harmonious</li>
            <li>Materially prosperous</li>
            <li>Globally friendly</li>
            <li>Environmentally peaceful</li>
        </ul>


      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/about' %}
      {% partial 'sidebar/useful-links' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/about/about.htm", "");
    }
}
