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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/layouts/default.htm */
class __TwigTemplate_f00728edd1ede31d523fe794c731aa9702e554c81ba1119fe88f3c0242bc711d extends \Twig\Template
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
        $tags = array("if" => 20, "partial" => 93, "page" => 94);
        $filters = array("escape" => 5, "theme" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial', 'page'],
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
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Core Style Css -->
    <link href=\"https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootnavbar.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/helper.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/side-nav.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">

    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "title", [], "any", false, false, true, 20) == "Home")) {
            // line 21
            echo "        <link rel=\"stylesheet\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slideshow.css");
            echo "\">
    ";
        } else {
            // line 23
            echo "        <link rel=\"stylesheet\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slideshow-sm.css");
            echo "\">
    ";
        }
        // line 25
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/forms.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/support-our-projects.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/upcoming-events.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/timeline.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/testimonials.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/right.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/gallery.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\">

    <script> 

        function setCookie(cname,cvalue,exdays) {
          var d = new Date();
          d.setTime(d.getTime()+(exdays*24*60*60*1000));
          var expires = \"expires=\"+d.toGMTString();
          document.cookie = cname + \"=\" + cvalue + \"; \" + expires;
        }

        function window_height() {
           if (document.body) {
             winH = document.body.offsetHeight;
           }

          if (document.compatMode=='CSS1Compat' &&
             document.documentElement &&
             document.documentElement.offsetHeight ) {
             winH = document.documentElement.offsetHeight;
             return winH
          }

         if (window.innerHeight && window.innerHeight) {
            winH = window.innerHeight;
            return winH;
         }
      }     

      function window_width() {
        if (document.body) {
          winW = document.body.offsetWidth;
        }

       if (document.compatMode=='CSS1Compat' &&
          document.documentElement &&
          document.documentElement.offsetWidth ) {
          winW = document.documentElement.offsetWidth;
          return winW
       }

       if (window.innerWidth && window.innerWidth) {
         winW = window.innerWidth;
         return winW;
       }
     }      
       /* Upon page load, get the page width and height, and store in a JSON object/Cookie */
       setTimeout(function(){
         setCookie('w_w',JSON.stringify({'width':window_width(),'height':window_height()}))
       });



     </script>

</head>

<body>
    
 
    ";
        // line 93
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 94
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 95
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 96
        echo "    
    
    

<!-- <div class=\"loader\">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div> -->
    
        <script src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@jquery"]);
        echo "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>



        <script src=\"";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/core.min.js");
        echo "\"></script>
        <script src=\"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/bootnavbar.js");
        echo "\" ></script>

        <!-- custom scripts -->
        <script src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/scripts.js");
        echo "\"></script>
        <script src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/photobox.js");
        echo "\"></script>
        <script src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/gallery.js");
        echo "\"></script>
        <script src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/custom.js");
        echo "\"></script>

        <script src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@framework", 1 => "@framework.extras"]);
        // line 125
        echo "\">
            </script>

        <script>
            \$(function () {
                \$('#main_navbar').bootnavbar({
                    //option
                    //animation: false
                });
            })
        </script>
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 125,  267 => 122,  262 => 120,  258 => 119,  254 => 118,  250 => 117,  244 => 114,  240 => 113,  231 => 107,  218 => 96,  213 => 95,  210 => 94,  206 => 93,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  112 => 25,  106 => 23,  100 => 21,  98 => 20,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <title>{{ this.page.title }}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Core Style Css -->
    <link href=\"https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\">
    
    <link rel=\"stylesheet\" href=\"{{'assets/css/bootnavbar.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/helper.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/side-nav.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/style.css'|theme}}\">

    {% if this.page.title == 'Home' %}
        <link rel=\"stylesheet\" href=\"{{'assets/css/slideshow.css'|theme}}\">
    {% else %}
        <link rel=\"stylesheet\" href=\"{{'assets/css/slideshow-sm.css'|theme}}\">
    {% endif %}

    <link rel=\"stylesheet\" href=\"{{'assets/css/forms.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/support-our-projects.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/upcoming-events.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/timeline.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/testimonials.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/right.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/gallery.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/custom.css'|theme}}\">

    <script> 

        function setCookie(cname,cvalue,exdays) {
          var d = new Date();
          d.setTime(d.getTime()+(exdays*24*60*60*1000));
          var expires = \"expires=\"+d.toGMTString();
          document.cookie = cname + \"=\" + cvalue + \"; \" + expires;
        }

        function window_height() {
           if (document.body) {
             winH = document.body.offsetHeight;
           }

          if (document.compatMode=='CSS1Compat' &&
             document.documentElement &&
             document.documentElement.offsetHeight ) {
             winH = document.documentElement.offsetHeight;
             return winH
          }

         if (window.innerHeight && window.innerHeight) {
            winH = window.innerHeight;
            return winH;
         }
      }     

      function window_width() {
        if (document.body) {
          winW = document.body.offsetWidth;
        }

       if (document.compatMode=='CSS1Compat' &&
          document.documentElement &&
          document.documentElement.offsetWidth ) {
          winW = document.documentElement.offsetWidth;
          return winW
       }

       if (window.innerWidth && window.innerWidth) {
         winW = window.innerWidth;
         return winW;
       }
     }      
       /* Upon page load, get the page width and height, and store in a JSON object/Cookie */
       setTimeout(function(){
         setCookie('w_w',JSON.stringify({'width':window_width(),'height':window_height()}))
       });



     </script>

</head>

<body>
    
 
    {% partial 'header' %}
    {% page %}
    {% partial 'footer' %}
    
    
    

<!-- <div class=\"loader\">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div> -->
    
        <script src=\"{{ ['@jquery'] | theme }}\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>



        <script src=\"{{'assets/javascript/core.min.js'|theme}}\"></script>
        <script src=\"{{'assets/javascript/bootnavbar.js'|theme}}\" ></script>

        <!-- custom scripts -->
        <script src=\"{{'assets/javascript/scripts.js'|theme}}\"></script>
        <script src=\"{{'assets/javascript/photobox.js'|theme}}\"></script>
        <script src=\"{{'assets/javascript/gallery.js'|theme}}\"></script>
        <script src=\"{{'assets/javascript/custom.js'|theme}}\"></script>

        <script src=\"{{ [
            '@framework',
            '@framework.extras'
            ]|theme }}\">
            </script>

        <script>
            \$(function () {
                \$('#main_navbar').bootnavbar({
                    //option
                    //animation: false
                });
            })
        </script>
    </body>

</html>", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/layouts/default.htm", "");
    }
}
