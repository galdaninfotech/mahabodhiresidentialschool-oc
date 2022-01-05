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

/* C:\laragon\www\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-ney.htm */
class __TwigTemplate_887beec038c25cceb26edd8b95c0daaab43df5d422ed509b99f9d47cae50715c extends \Twig\Template
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
        $tags = array("partial" => 21);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/education/mahabodhi-branch-school-ney.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>
      <p>Ney is one of the Village in Leh Tehsil , Leh District , UT of Ladakh . Ney is located 40 km distance from its District Main City Leh Ladakh. It is located 252 km distance from its State Main City Srinagar; Jammu. The Lochos Mahabodhi School is located on the right side of Ney brook. The Lochos Mahabodhi school, Ney was established in the year 2004 with the kind bliss of his holiness Lochos  Rinpochay and noble guidance of Mr. Roland Weiser. </p>
      
      <p>Since, the village Ney lacks far behind then other surrounding village in terms of education, besides the standard of education in other Govt school of Ney far below the standard, under the noble vision of Mr. Roland and the member Thakchokling charitable organization Ney decided to establish a public school to be taught up to primary class. Since then the school is running 100% funding from Thakchokling charitable organization Germany. The school has been affiliated with Mahabodhi School, Choglamsar Leh. A pioneer in the education sector. Presently there are 37 days boarding students studying in various classes under 4 qualified teachers. The school has made substantial progress in term of imparting quality education to the children in the last since its inception.</p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sustainable-development-project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-ney.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  101 => 23,  96 => 22,  92 => 21,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/education/mahabodhi-branch-school-ney.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>
      <p>Ney is one of the Village in Leh Tehsil , Leh District , UT of Ladakh . Ney is located 40 km distance from its District Main City Leh Ladakh. It is located 252 km distance from its State Main City Srinagar; Jammu. The Lochos Mahabodhi School is located on the right side of Ney brook. The Lochos Mahabodhi school, Ney was established in the year 2004 with the kind bliss of his holiness Lochos  Rinpochay and noble guidance of Mr. Roland Weiser. </p>
      
      <p>Since, the village Ney lacks far behind then other surrounding village in terms of education, besides the standard of education in other Govt school of Ney far below the standard, under the noble vision of Mr. Roland and the member Thakchokling charitable organization Ney decided to establish a public school to be taught up to primary class. Since then the school is running 100% funding from Thakchokling charitable organization Germany. The school has been affiliated with Mahabodhi School, Choglamsar Leh. A pioneer in the education sector. Presently there are 37 days boarding students studying in various classes under 4 qualified teachers. The school has made substantial progress in term of imparting quality education to the children in the last since its inception.</p>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/education' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/sustainable-development-project' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/education/mahabodhi-branch-school-ney.htm", "");
    }
}
