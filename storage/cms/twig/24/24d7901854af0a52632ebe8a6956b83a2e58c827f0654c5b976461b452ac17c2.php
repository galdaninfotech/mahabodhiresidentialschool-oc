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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-residential-school/cbse-requirements.htm */
class __TwigTemplate_e386af30bb3458f9b876ed39f56fcb436ba5b8de9fa886704f51a0299269d04e extends \Twig\Template
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
        $tags = array("partial" => 81);
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
      
      <h6>Land Requirement</h6>
      <p>The school should have the following land:</p>
      <ul class=\"department-list\">
        <li>2 acres( In general)</li>
        <li>1.5 acres( In general with restriction on no. of students)</li>
        <li>1 acre- Hilly areas</li>
      </ul>

      <p>The land should be in a single piece of land and no public road, railway line, stream, canal and power lines should cross through the piece of land.</p>

      <p>The plot of land should be surrounded by a single continuous pucca boundary wall on all four sides enclosing the school building and the playground. </p>

      <h6>Land Documents </h6>
      <p>The school should have legible copies of the registered sale deed, lease deed or the gift deed through which the ownership of land has accrued in the name of school or the Society/Trust/Company running the school. </p>
      
      <p>The land has to be in the name of the school or the society running the school.</p>

      <p>If the acquisition of land is through the lease deed, the same should befor a period of at least 30 years. </p>

      <p>Unregistered sale/lease deed documents will not be accepted.The lessor should be the owner (and not lessee) of the land that he is leasing to the school/society running the school and sublease to the school/society running the school will not be accepted.</p>

      <p>In case the original document is in vernacular language, the same should be translated in Hindi or English along with the name and designation and stamp/seal of the issuing authority. </p>
      
      <p>The school manager should give an affidavit on the translation itself that the translation is exact translation of the original document and nothing has been added or deleted from the contents of the original document.</p>
       
      <h6>Land Certificate</h6>
      <p>The school should be in possession of original Land Certificate issued by the concerned District magistrate/Registering/Revenue authorities. The format of the land certificate is given at Appendix-VI of Affiliation byelaws.</p>

      <h6>Recognition letter </h6>
      <p>The school should have a Recognition Certificate as given below issued by the State Education Department.</p>
      <table>
        <tbody>
          <thead>
            <tr>
              <td>Level of Application</td> <td>Recognition Certificate required</td>
            </tr>
          </thead>
            <tr>
              <td> Middle Class Syllabus</td><td>1 to 8th</td>
            </tr>
            <tr>
              <td>Secondary Level (Fresh)</td><td>1 to 8th</td>
            </tr>
            <tr>
              <td>Secondary Level (Switch Over)</td><td>1 to 10th</td>
            </tr>
            <tr>
              <td>Senior Secondary Level (Upgradation)</td><td>At least 1 to 8th</td>
            </tr>
            <tr>
              <td>Senior Secondary Level (Switch Over)</td><td>1 to 12th</td>
            </tr>
        </tbody>
      </table>
      
      <h6>NOC</h6>
      <p>The school should have a No Objection Certificate issued by the State Education Department clearly stating that the state govt. has no objection if the school is affiliated to the board. The name and address of the school in this certificate should be same as mentioned by the school in the application form.</p>

      <p>In case the original document is in vernacular language, the same should be translated in Hindi or English along with the name designation and stamp/seal of the issuing authority. The school manager should give an affidavit on the translation itself that the translation is exact translation of the original document and nothing has been added or deleted from the contents of the original document. </p>
       
       
       
       

      

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-residential-school"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-residential-school/cbse-requirements.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 82,  147 => 81,  70 => 7,  62 => 1,);
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
      
      <h6>Land Requirement</h6>
      <p>The school should have the following land:</p>
      <ul class=\"department-list\">
        <li>2 acres( In general)</li>
        <li>1.5 acres( In general with restriction on no. of students)</li>
        <li>1 acre- Hilly areas</li>
      </ul>

      <p>The land should be in a single piece of land and no public road, railway line, stream, canal and power lines should cross through the piece of land.</p>

      <p>The plot of land should be surrounded by a single continuous pucca boundary wall on all four sides enclosing the school building and the playground. </p>

      <h6>Land Documents </h6>
      <p>The school should have legible copies of the registered sale deed, lease deed or the gift deed through which the ownership of land has accrued in the name of school or the Society/Trust/Company running the school. </p>
      
      <p>The land has to be in the name of the school or the society running the school.</p>

      <p>If the acquisition of land is through the lease deed, the same should befor a period of at least 30 years. </p>

      <p>Unregistered sale/lease deed documents will not be accepted.The lessor should be the owner (and not lessee) of the land that he is leasing to the school/society running the school and sublease to the school/society running the school will not be accepted.</p>

      <p>In case the original document is in vernacular language, the same should be translated in Hindi or English along with the name and designation and stamp/seal of the issuing authority. </p>
      
      <p>The school manager should give an affidavit on the translation itself that the translation is exact translation of the original document and nothing has been added or deleted from the contents of the original document.</p>
       
      <h6>Land Certificate</h6>
      <p>The school should be in possession of original Land Certificate issued by the concerned District magistrate/Registering/Revenue authorities. The format of the land certificate is given at Appendix-VI of Affiliation byelaws.</p>

      <h6>Recognition letter </h6>
      <p>The school should have a Recognition Certificate as given below issued by the State Education Department.</p>
      <table>
        <tbody>
          <thead>
            <tr>
              <td>Level of Application</td> <td>Recognition Certificate required</td>
            </tr>
          </thead>
            <tr>
              <td> Middle Class Syllabus</td><td>1 to 8th</td>
            </tr>
            <tr>
              <td>Secondary Level (Fresh)</td><td>1 to 8th</td>
            </tr>
            <tr>
              <td>Secondary Level (Switch Over)</td><td>1 to 10th</td>
            </tr>
            <tr>
              <td>Senior Secondary Level (Upgradation)</td><td>At least 1 to 8th</td>
            </tr>
            <tr>
              <td>Senior Secondary Level (Switch Over)</td><td>1 to 12th</td>
            </tr>
        </tbody>
      </table>
      
      <h6>NOC</h6>
      <p>The school should have a No Objection Certificate issued by the State Education Department clearly stating that the state govt. has no objection if the school is affiliated to the board. The name and address of the school in this certificate should be same as mentioned by the school in the application form.</p>

      <p>In case the original document is in vernacular language, the same should be translated in Hindi or English along with the name designation and stamp/seal of the issuing authority. The school manager should give an affidavit on the translation itself that the translation is exact translation of the original document and nothing has been added or deleted from the contents of the original document. </p>
       
       
       
       

      

      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-residential-school' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-residential-school/cbse-requirements.htm", "");
    }
}
