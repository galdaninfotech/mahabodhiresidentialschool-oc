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

/* C:\laragon\www\mimc1/themes/demo5/pages/sponsorship/country-wise-representative-list.htm */
class __TwigTemplate_4f14f14e1ddf9f7069dc91dcc56f154352bf8d8b241ef9449ac2c2cf238f3c21 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsorship/country-wise-representative-list.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
      </div>

      <div class=\"box\">
        <div class=\"container\">
          <div class=\"wrapper\">
            <button class=\"toggle\">GERMANY<i class=\"fas fa-plus icon\"></i></button>
            <div class=\"content heightActive\">
              <p class=\"contentText\">Für Spenden oder Patenschaften von Deutschland aus, wenden Sie sich bitte an einen der folgenden Ansprechpartner:</p>
              <div class=\"country-wise mt-2 mb-2\">
                <div class=\"logo-sponsors\">
                  <img class=\"img img-responsive\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/buddhahaus-logo.jpg");
        echo "\" alt=\"buddhahaus-logo\">
                </div>
                <div class=\"address\">
                  Buddha-Haus e.V.<br>
                  Kontakt: Steffen Wendt<br>
                  Uttenbühl 5<br>
                  87466 Oy-Mittelberg<br>
                  E-Mail: hilfsprojekt.ladakh@buddha-haus.de<br>
                  https://www.buddha-haus.de/mahabodhi-hilfsprojekt<br><br>
                </div>
              </div>

\t\t\t  <div class=\"country-wise mt-2 mb-2\">
                <div class=\"logo-sponsors\">
\t\t\t\t\t<img class=\"img img-responsive\" src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lotus-vihara-logo.jpg");
        echo "\" alt=\"lotus-vihara-logo\">
                </div>
                <div class=\"address\">
\t\t\t\t\tBuddhistisches Zentrum Lotos-Vihara<br>
\t\t\t\t\tNeue Blumenstraße 5<br>
\t\t\t\t\t10179 Berlin (Mitte)<br>
\t\t\t\t\tTel.: +49 (0)30 - 25 76 21 64<br>
\t\t\t\t\tFax: +49 (0)30 - 24 08 31 59<br>
\t\t\t\t\tE-Mail: info@lotos-vihara.de<br>
\t\t\t\t\thttp://www.lotos-vihara.de/lotos-vihara-ev/mahabodhi.html<br><br>
                </div>
              </div>

\t\t\t  <div class=\"country-wise mt-2 mb-2\">
                <div class=\"logo-sponsors\">
\t\t\t\t\t<img class=\"img img-responsive\" src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dharma-chakra-logo.png");
        echo "\" alt=\"dharma-chakra-logo\">
                </div>
                <div class=\"address\">
\t\t\t\t\tDharma-Chakra e. V.<br>
\t\t\t\t\tMarktgasse 15<br>
\t\t\t\t\t01662 Meißen<br>
\t\t\t\t\tKontakt: Heiko Damme & Gitta Fineiß<br>
\t\t\t\t\tTelefon: +49 (0)3521 494520<br>
\t\t\t\t\tTelefax: +49 (0)3521 494519<br>
\t\t\t\t\tE-Mail: admin@dharmarad.de<br>
\t\t\t\t\thttp://www.dharmarad.de/verein/spendenprojekt.html<br><br>
                </div>
              </div>

            </div>
          </div>
          <div class=\"wrapper\">
            <button class=\"toggle\">OTHER COUNTRIES<i class=\"fas fa-plus icon\"></i></button>
            <div class=\"content\">
              <p></p>
            </div>
          </div>
        </div>
      </div>
      
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      ";
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/sponsorship"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/social-welfare"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/education"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/sponsorship/country-wise-representative-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 84,  170 => 83,  165 => 82,  161 => 81,  129 => 52,  111 => 37,  94 => 23,  78 => 12,  70 => 7,  62 => 1,);
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
        <img class=\"img img-responsive\" src=\"{{'assets/images/sponsorship/country-wise-representative-list.jpg'|theme}}\" alt=\"{{this.page.title}}\">
      </div>

      <div class=\"box\">
        <div class=\"container\">
          <div class=\"wrapper\">
            <button class=\"toggle\">GERMANY<i class=\"fas fa-plus icon\"></i></button>
            <div class=\"content heightActive\">
              <p class=\"contentText\">Für Spenden oder Patenschaften von Deutschland aus, wenden Sie sich bitte an einen der folgenden Ansprechpartner:</p>
              <div class=\"country-wise mt-2 mb-2\">
                <div class=\"logo-sponsors\">
                  <img class=\"img img-responsive\" src=\"{{'assets/images/buddhahaus-logo.jpg'|theme}}\" alt=\"buddhahaus-logo\">
                </div>
                <div class=\"address\">
                  Buddha-Haus e.V.<br>
                  Kontakt: Steffen Wendt<br>
                  Uttenbühl 5<br>
                  87466 Oy-Mittelberg<br>
                  E-Mail: hilfsprojekt.ladakh@buddha-haus.de<br>
                  https://www.buddha-haus.de/mahabodhi-hilfsprojekt<br><br>
                </div>
              </div>

\t\t\t  <div class=\"country-wise mt-2 mb-2\">
                <div class=\"logo-sponsors\">
\t\t\t\t\t<img class=\"img img-responsive\" src=\"{{'assets/images/lotus-vihara-logo.jpg'|theme}}\" alt=\"lotus-vihara-logo\">
                </div>
                <div class=\"address\">
\t\t\t\t\tBuddhistisches Zentrum Lotos-Vihara<br>
\t\t\t\t\tNeue Blumenstraße 5<br>
\t\t\t\t\t10179 Berlin (Mitte)<br>
\t\t\t\t\tTel.: +49 (0)30 - 25 76 21 64<br>
\t\t\t\t\tFax: +49 (0)30 - 24 08 31 59<br>
\t\t\t\t\tE-Mail: info@lotos-vihara.de<br>
\t\t\t\t\thttp://www.lotos-vihara.de/lotos-vihara-ev/mahabodhi.html<br><br>
                </div>
              </div>

\t\t\t  <div class=\"country-wise mt-2 mb-2\">
                <div class=\"logo-sponsors\">
\t\t\t\t\t<img class=\"img img-responsive\" src=\"{{'assets/images/dharma-chakra-logo.png'|theme}}\" alt=\"dharma-chakra-logo\">
                </div>
                <div class=\"address\">
\t\t\t\t\tDharma-Chakra e. V.<br>
\t\t\t\t\tMarktgasse 15<br>
\t\t\t\t\t01662 Meißen<br>
\t\t\t\t\tKontakt: Heiko Damme & Gitta Fineiß<br>
\t\t\t\t\tTelefon: +49 (0)3521 494520<br>
\t\t\t\t\tTelefax: +49 (0)3521 494519<br>
\t\t\t\t\tE-Mail: admin@dharmarad.de<br>
\t\t\t\t\thttp://www.dharmarad.de/verein/spendenprojekt.html<br><br>
                </div>
              </div>

            </div>
          </div>
          <div class=\"wrapper\">
            <button class=\"toggle\">OTHER COUNTRIES<i class=\"fas fa-plus icon\"></i></button>
            <div class=\"content\">
              <p></p>
            </div>
          </div>
        </div>
      </div>
      
      
    </div> <!--  .col-md-9 -->

    <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
      {% partial 'sidebar/sponsorship' %}
      {% partial 'sidebar/social-welfare' %}
      {% partial 'sidebar/education' %}
            
    </div> <!--  .col-md-3 -->
  </div> <!--  .row -->
</div> <!--  .container -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/sponsorship/country-wise-representative-list.htm", "");
    }
}
