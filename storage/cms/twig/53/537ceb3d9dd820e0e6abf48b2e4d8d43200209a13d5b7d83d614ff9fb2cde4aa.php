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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-residential-school/list-of-teachers.htm */
class __TwigTemplate_df57094dd914dbc432e77b4d03d46bc3241cf1db2788e3a87e4aa305395db963 extends \Twig\Template
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
        $tags = array("partial" => 43);
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

      <p>The school tries to create a stimulating and enlightening environment in order to offer a wonderful teaching-learning experience for both teachers and the students. A team of well qualified teachers are on their mission to make learning a joyful experience for their learners.  The school faculty members try leaving no stone unturned to provide a fruitful learning milieu with immense scope for individual creativity.</p>

      <p>And to cater to the personality and professional growth of the staffs themselves, the school conducts various seminars and workshops and invites educational experts from India and abroad every year.</p><br><br>
      
      <table width=\"98%\" border=\"1\" align=\"center\" cellpadding=\"4\" cellspacing=\"0\" bordercolor=\"#DBDBDB\" style=\"border-collapse:collapse;\" class=\"text2 table\">
        <tbody><tr>
          <td width=\"46\">PGTs </td>
          <td width=\"45\">TGTs </td>
          <td width=\"46\">PRTs </td>
          <td width=\"46\">NTTs </td>
          <td width=\"58\">PET</td>
          <td width=\"60\">Total</td>
          <td width=\"90\">Principal</td>
          <td width=\"108\">V.Principal </td>
          <td width=\"150\">Non-teaching    Staffs</td>
        </tr>
        <tr>
          <td width=\"46\">2</td>
          <td width=\"45\">4</td>
          <td width=\"46\">6</td>
          <td width=\"46\">8</td>
          <td width=\"58\">1</td>
          <td width=\"60\">21</td>
          <td width=\"90\">1</td>
          <td width=\"108\">1</td>
          <td width=\"150\">6</td>
        </tr>
      </tbody></table>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-residential-school"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-residential-school/list-of-teachers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  109 => 43,  70 => 7,  62 => 1,);
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

      <p>The school tries to create a stimulating and enlightening environment in order to offer a wonderful teaching-learning experience for both teachers and the students. A team of well qualified teachers are on their mission to make learning a joyful experience for their learners.  The school faculty members try leaving no stone unturned to provide a fruitful learning milieu with immense scope for individual creativity.</p>

      <p>And to cater to the personality and professional growth of the staffs themselves, the school conducts various seminars and workshops and invites educational experts from India and abroad every year.</p><br><br>
      
      <table width=\"98%\" border=\"1\" align=\"center\" cellpadding=\"4\" cellspacing=\"0\" bordercolor=\"#DBDBDB\" style=\"border-collapse:collapse;\" class=\"text2 table\">
        <tbody><tr>
          <td width=\"46\">PGTs </td>
          <td width=\"45\">TGTs </td>
          <td width=\"46\">PRTs </td>
          <td width=\"46\">NTTs </td>
          <td width=\"58\">PET</td>
          <td width=\"60\">Total</td>
          <td width=\"90\">Principal</td>
          <td width=\"108\">V.Principal </td>
          <td width=\"150\">Non-teaching    Staffs</td>
        </tr>
        <tr>
          <td width=\"46\">2</td>
          <td width=\"45\">4</td>
          <td width=\"46\">6</td>
          <td width=\"46\">8</td>
          <td width=\"58\">1</td>
          <td width=\"60\">21</td>
          <td width=\"90\">1</td>
          <td width=\"108\">1</td>
          <td width=\"150\">6</td>
        </tr>
      </tbody></table>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-residential-school' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-residential-school/list-of-teachers.htm", "");
    }
}
