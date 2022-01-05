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

/* C:\laragon\www\mimc1/plugins/galdan/sitetools/components/contact/default.htm */
class __TwigTemplate_db25b90170adfb6c6550cefe32982e4703d03c6c02f3a6605fb4de323a43190d extends \Twig\Template
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
        $tags = array("set" => 1);
        $filters = array("escape" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
        $context["bike"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["bike"] ?? null) : null);
        // line 2
        echo "<form 
\tid=\"booking-form\" 
\tdata-request=\"onContact\" 
\tdata-request-success=\"
\t\t\$('#booking-form').fadeOut();
\t\t\$('.col-md-9 h1').html('Thank You!');
\t\t\$('.col-md-9').append('<p>Congratulation '+\$('#name').val()+'!</p>');
\t\t\$('.col-md-9').append('<p>Your booking has been sent. You will shortly receive mail with booking information.</p>');
\t\tconsole.log('";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text_messages"] ?? null), 10, $this->source), "html", null, true);
        echo "');
\t\">
    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"other2\">
    <tbody>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Name :&nbsp;&nbsp;<font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"name\" type=\"text\" id=\"name\" value=\"\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Email :&nbsp;&nbsp;<font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"email\" type=\"email\" id=\"email\" value=\"\" size=\"30\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Contact No. : &nbsp;&nbsp; <font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
      <div align=\"left\">
        <input name=\"message\" type=\"text\" id=\"message\" value=\"\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>

               
    <tr>
      <td height=\"40\" align=\"left\" valign=\"middle\">&nbsp;</td>
      <td height=\"40\" align=\"right\" valign=\"middle\">
        <input type=\"submit\" name=\"submit_book_now_form\" value=\"Submit\" class=\"button medium acc1\">
        <input type=\"hidden\" name=\"Submit\" value=\"Submit\">
      </td>
    </tr>
  </tbody>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/plugins/galdan/sitetools/components/contact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set bike = this.param['bike'] %}
<form 
\tid=\"booking-form\" 
\tdata-request=\"onContact\" 
\tdata-request-success=\"
\t\t\$('#booking-form').fadeOut();
\t\t\$('.col-md-9 h1').html('Thank You!');
\t\t\$('.col-md-9').append('<p>Congratulation '+\$('#name').val()+'!</p>');
\t\t\$('.col-md-9').append('<p>Your booking has been sent. You will shortly receive mail with booking information.</p>');
\t\tconsole.log('{{ text_messages }}');
\t\">
    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"other2\">
    <tbody>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Name :&nbsp;&nbsp;<font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"name\" type=\"text\" id=\"name\" value=\"\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Email :&nbsp;&nbsp;<font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"email\" type=\"email\" id=\"email\" value=\"\" size=\"30\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Contact No. : &nbsp;&nbsp; <font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
      <div align=\"left\">
        <input name=\"message\" type=\"text\" id=\"message\" value=\"\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>

               
    <tr>
      <td height=\"40\" align=\"left\" valign=\"middle\">&nbsp;</td>
      <td height=\"40\" align=\"right\" valign=\"middle\">
        <input type=\"submit\" name=\"submit_book_now_form\" value=\"Submit\" class=\"button medium acc1\">
        <input type=\"hidden\" name=\"Submit\" value=\"Submit\">
      </td>
    </tr>
  </tbody>
</table>
</form>
", "C:\\laragon\\www\\mimc1/plugins/galdan/sitetools/components/contact/default.htm", "");
    }
}
