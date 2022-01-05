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

/* C:\laragon\www\mimc1/plugins/indikator/news/components/subscribe/default.htm */
class __TwigTemplate_6231391c753f7a781f6f87b5cc68046bcf54140c2105cb5cb301f43eedd7bdb4 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 1, $this->source), "html", null, true);
        echo "::onSubscription1\" data-request-success=\"alert('";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text_messages"] ?? null), 1, $this->source), "html", null, true);
        echo "')\">
\t<div class=\"form-group\"><input name=\"name\" type=\"text\" class=\"form-control newsletter\" placeholder=\"Full Name\"  id=\"subscribersName\" aria-label=\"Full Name\" required></div>
    <div class=\"form-group\"><input name=\"email\" type=\"text\" class=\"form-control newsletter\" placeholder=\"Your Email\"  id=\"subscribersEmail\" aria-label=\"Your Email\" required></div>
    <button class=\"button medium acc1 pull-right\" type=\"submit\" aria-label=\"Subscribe\">Subscribe Now!</button>
</form>
<div class=\"row\">
    <div class=\"col-md-12\">
        <p class=\"subscribe-intro\">Please subscribe to our periodic newsletter to get latest updates about ongoing tours and other offers from ";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["company"] ?? null), 8, $this->source), "html", null, true);
        echo ".</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/plugins/indikator/news/components/subscribe/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"{{ __SELF__ }}::onSubscription1\" data-request-success=\"alert('{{ text_messages }}')\">
\t<div class=\"form-group\"><input name=\"name\" type=\"text\" class=\"form-control newsletter\" placeholder=\"Full Name\"  id=\"subscribersName\" aria-label=\"Full Name\" required></div>
    <div class=\"form-group\"><input name=\"email\" type=\"text\" class=\"form-control newsletter\" placeholder=\"Your Email\"  id=\"subscribersEmail\" aria-label=\"Your Email\" required></div>
    <button class=\"button medium acc1 pull-right\" type=\"submit\" aria-label=\"Subscribe\">Subscribe Now!</button>
</form>
<div class=\"row\">
    <div class=\"col-md-12\">
        <p class=\"subscribe-intro\">Please subscribe to our periodic newsletter to get latest updates about ongoing tours and other offers from {{ company }}.</p>
    </div>
</div>", "C:\\laragon\\www\\mimc1/plugins/indikator/news/components/subscribe/default.htm", "");
    }
}
