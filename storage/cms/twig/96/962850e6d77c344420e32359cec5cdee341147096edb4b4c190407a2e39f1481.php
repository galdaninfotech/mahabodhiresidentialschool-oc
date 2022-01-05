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

/* C:\laragon\www\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/previous-positions.htm */
class __TwigTemplate_31a14813fe1cfb8a77ff6a3895a9f9aa5337481e598e57b5877ec9edeaae2105 extends \Twig\Template
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
        $tags = array("partial" => 35);
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
      

      <div class=\"list-type2\">
        <ol>
          <li><a href=\"\">President, Mahabodhi Society, Bangalore from 1980 – 2009.</a></li>
          <li><a href=\"\">Founder-President, Mahabodhi International Meditation Centre (MIMC), Leh, Ladakh, India since 1985</a></li>
          
          <li><a href=\"\">Former Council Member, International Association for Religious Freedom (IARF), UK </a></li>
          <li><a href=\"\">Chairman, United Religious Initiative, Ladakh Branch </a></li>
          <li><a href=\"\">President, International Association for Religious Freedom, Ladakh Chapter </a></li>
          <li><a href=\"\">Member of the Board of Directors, Buddha’s Light International Association (BLIA), Los Angeles, USA & Taiwan since 1991 – 2008. </a></li>
          <li><a href=\"\">Former Vice President, World Fellowship of Buddhist Youth, Bangkok, Thailand </a></li>
          <li><a href=\"\">Advisor, International Association for Engaged Buddhists (INEB), Thailand</a></li> 
          <li><a href=\"\">Executive Member, World Buddhist Sangha Council, Taipei, Taiwan </a></li>
          <li><a href=\"\">Chancellor, International Association of Educators for World Peace (IAEWP), Huntsville, USA, Jammu and Kashmir State Chapter, India </a></li>
          <li><a href=\"\">Governing Body Member, Nava Nalanda Deem University, Bihar, India Patron, Kampus OnlineTM IGNOU Virtual Community College, New Delhi, India Vice President, Ashoka Mission, New Delhi</a></li>
          <li><a href=\"\">Treasurer, International Buddhist Congregation, New Delhi from 2013 onwards. </a></li>
        </ol>
        </div>
        

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/ven-bhikkhu-sanghasena"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/previous-positions.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  105 => 36,  101 => 35,  70 => 7,  62 => 1,);
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
      

      <div class=\"list-type2\">
        <ol>
          <li><a href=\"\">President, Mahabodhi Society, Bangalore from 1980 – 2009.</a></li>
          <li><a href=\"\">Founder-President, Mahabodhi International Meditation Centre (MIMC), Leh, Ladakh, India since 1985</a></li>
          
          <li><a href=\"\">Former Council Member, International Association for Religious Freedom (IARF), UK </a></li>
          <li><a href=\"\">Chairman, United Religious Initiative, Ladakh Branch </a></li>
          <li><a href=\"\">President, International Association for Religious Freedom, Ladakh Chapter </a></li>
          <li><a href=\"\">Member of the Board of Directors, Buddha’s Light International Association (BLIA), Los Angeles, USA & Taiwan since 1991 – 2008. </a></li>
          <li><a href=\"\">Former Vice President, World Fellowship of Buddhist Youth, Bangkok, Thailand </a></li>
          <li><a href=\"\">Advisor, International Association for Engaged Buddhists (INEB), Thailand</a></li> 
          <li><a href=\"\">Executive Member, World Buddhist Sangha Council, Taipei, Taiwan </a></li>
          <li><a href=\"\">Chancellor, International Association of Educators for World Peace (IAEWP), Huntsville, USA, Jammu and Kashmir State Chapter, India </a></li>
          <li><a href=\"\">Governing Body Member, Nava Nalanda Deem University, Bihar, India Patron, Kampus OnlineTM IGNOU Virtual Community College, New Delhi, India Vice President, Ashoka Mission, New Delhi</a></li>
          <li><a href=\"\">Treasurer, International Buddhist Congregation, New Delhi from 2013 onwards. </a></li>
        </ol>
        </div>
        

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/ven-bhikkhu-sanghasena' %}
      {% partial 'sidebar/about' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/ven-bhikkhu-sanghasena/previous-positions.htm", "");
    }
}
