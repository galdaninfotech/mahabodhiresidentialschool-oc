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

/* C:\laragon\www\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/online-form.htm */
class __TwigTemplate_acd491c4b7be9aa1f2bf6acf2d9fe2143dd87014391bfad16abb1f7959a2646b extends \Twig\Template
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
        $tags = array("partial" => 59);
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
      
      <div class=\"form-bg\">
        <div class=\"form-container\">
          <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h1>

          <p>
            While participating in the course, you are expected to stick on to the following rules. Please review the rules and register for the course only if you are sure you can abide by it.
          </p>
          <h5 class=\"text-lg\">To follow the Five Precepts which are:</h5>

          <ol class=\"list-decimal-leading-zero ml-8\">
            <li>To refrain from harming any living being.</li>
            <li>To refrain from taking what is not given or misusing the property of others.</li>
            <li>To observe celibacy.</li>
            <li>To refrain from lying, harsh speech, decisive speech and idle gossip (in the context of retreat, this means observing noble silence except when speaking with the teacher).</li>
            <li>To refrain from the use of intoxicants (alcohol, drugs, or any other mind altering substance).  For the comfort of others, we require that you also refrain from the use of tobacco.</li>
          </ol>

          <ol class=\"list ml-8 mt20\">
            <li>In order to create a more supportive environment for meditation, we request that you dress modestly while at the Meditation Camp, refraining from wearing shorts, tank tops, and transparent or revealing clothing.</li>
            <li>You are kindly requested to attend all the classes without fail.</li>
            <li>We expect you to arrive a few minutes before the class starts and do not leave the hall until the end of the session, if at all possible.</li>
            <li>In order to create a more supportive environment we need your full cooperation.</li>
            <li>You are expected to complete the course and not allowed to leave in between.</li>
          </ol>

          <h5 class=\"text-lg mt-8 mb-8\">If this code of conduct is acceptable to you, then please complete the following Registration Form.</h5>

          To <br>
          The Course Manager,<br><br>
          Sir, <br>
          I have carefully read the registration form. I hereby declare that, I will follow the rules and regulations of Meditation Camp and will complete the Meditation Camp successfully. <br><br>


            <form class=\"form-horizontal margin-50px-tb\">
                <div class=\"form-group\"><label>User Name*</label><input class=\"form-control\" type=\"text\"></div>
                <div class=\"form-group\"><label>Email ID*</label><input class=\"form-control\" type=\"email\"></div>

                <div class=\"form-group age\"><label>Age*</label><input class=\"form-control\" type=\"number\"></div>
                <div class=\"form-group age\"><label>Sex</label><input class=\"form-control\" type=\"text\"></div>

                <div class=\"form-group age\"><label>Occupation (Optional)</label><input class=\"form-control\" type=\"text\"></div>
                <div class=\"form-group age\"><label>Nationality</label><input class=\"form-control\" type=\"text\"></div>

                <div class=\"form-group age\"><label>Mailing Address (Optional)</label><input class=\"form-control\" type=\"text\"></div>
                <div class=\"form-group age\"><label>Date of Arrival </label><input class=\"form-control\" type=\"date\"></div>

                <button class=\"btn signin\">Register Now</button>
            </form>
        </div>
      </div>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-sambodhi-retreat-centre"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/mahabodhi-city-centre-changspa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/online-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 61,  129 => 60,  125 => 59,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row main-content margin-50px-tb\">
    <div class=\"col-md-9\">
      
      <div class=\"form-bg\">
        <div class=\"form-container\">
          <h1>{{this.page.title}}</h1>

          <p>
            While participating in the course, you are expected to stick on to the following rules. Please review the rules and register for the course only if you are sure you can abide by it.
          </p>
          <h5 class=\"text-lg\">To follow the Five Precepts which are:</h5>

          <ol class=\"list-decimal-leading-zero ml-8\">
            <li>To refrain from harming any living being.</li>
            <li>To refrain from taking what is not given or misusing the property of others.</li>
            <li>To observe celibacy.</li>
            <li>To refrain from lying, harsh speech, decisive speech and idle gossip (in the context of retreat, this means observing noble silence except when speaking with the teacher).</li>
            <li>To refrain from the use of intoxicants (alcohol, drugs, or any other mind altering substance).  For the comfort of others, we require that you also refrain from the use of tobacco.</li>
          </ol>

          <ol class=\"list ml-8 mt20\">
            <li>In order to create a more supportive environment for meditation, we request that you dress modestly while at the Meditation Camp, refraining from wearing shorts, tank tops, and transparent or revealing clothing.</li>
            <li>You are kindly requested to attend all the classes without fail.</li>
            <li>We expect you to arrive a few minutes before the class starts and do not leave the hall until the end of the session, if at all possible.</li>
            <li>In order to create a more supportive environment we need your full cooperation.</li>
            <li>You are expected to complete the course and not allowed to leave in between.</li>
          </ol>

          <h5 class=\"text-lg mt-8 mb-8\">If this code of conduct is acceptable to you, then please complete the following Registration Form.</h5>

          To <br>
          The Course Manager,<br><br>
          Sir, <br>
          I have carefully read the registration form. I hereby declare that, I will follow the rules and regulations of Meditation Camp and will complete the Meditation Camp successfully. <br><br>


            <form class=\"form-horizontal margin-50px-tb\">
                <div class=\"form-group\"><label>User Name*</label><input class=\"form-control\" type=\"text\"></div>
                <div class=\"form-group\"><label>Email ID*</label><input class=\"form-control\" type=\"email\"></div>

                <div class=\"form-group age\"><label>Age*</label><input class=\"form-control\" type=\"number\"></div>
                <div class=\"form-group age\"><label>Sex</label><input class=\"form-control\" type=\"text\"></div>

                <div class=\"form-group age\"><label>Occupation (Optional)</label><input class=\"form-control\" type=\"text\"></div>
                <div class=\"form-group age\"><label>Nationality</label><input class=\"form-control\" type=\"text\"></div>

                <div class=\"form-group age\"><label>Mailing Address (Optional)</label><input class=\"form-control\" type=\"text\"></div>
                <div class=\"form-group age\"><label>Date of Arrival </label><input class=\"form-control\" type=\"date\"></div>

                <button class=\"btn signin\">Register Now</button>
            </form>
        </div>
      </div>
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/mahabodhi-sambodhi-retreat-centre' %}
      {% partial 'sidebar/mahabodhi-city-centre-changspa' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/mahabodhi-sambodhi-retreat-centre/online-form.htm", "");
    }
}
