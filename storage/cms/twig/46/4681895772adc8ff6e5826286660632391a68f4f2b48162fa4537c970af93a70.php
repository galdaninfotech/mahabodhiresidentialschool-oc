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

/* C:\laragon\www\mrsl1/plugins/kenshin/facebook/components/fanpageface/default.htm */
class __TwigTemplate_a769a585be2b6cf4eb50be709352238c1dc3c1aae53378cd6e1b0b62d29f75be extends \Twig\Template
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
        $filters = array("escape" => 4);
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
        echo "<div class=\"sidebar-item\" style=\"width: 100%\">
<div class=\"fb-page\"
     data-tabs=\"timeline,events,messages\"
     data-href=\"https://www.facebook.com/";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fanFace"] ?? null), 4, $this->source), "html", null, true);
        echo "\"
     data-width=\"380\"
     data-hide-cover=\"false\"></div>

</div>

<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/in_IN/sdk.js#xfbml=1&version=v2.10&appId=1411450375798466';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mrsl1/plugins/kenshin/facebook/components/fanpageface/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-item\" style=\"width: 100%\">
<div class=\"fb-page\"
     data-tabs=\"timeline,events,messages\"
     data-href=\"https://www.facebook.com/{{ fanFace }}\"
     data-width=\"380\"
     data-hide-cover=\"false\"></div>

</div>

<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/in_IN/sdk.js#xfbml=1&version=v2.10&appId=1411450375798466';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
", "C:\\laragon\\www\\mrsl1/plugins/kenshin/facebook/components/fanpageface/default.htm", "");
    }
}
