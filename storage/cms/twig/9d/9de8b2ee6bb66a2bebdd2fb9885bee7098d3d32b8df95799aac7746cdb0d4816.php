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

/* /home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/home.htm */
class __TwigTemplate_4437f561b7a43986329de67ca071a5a0d04d3b56792b9997b32df5fdcd91c08a extends \Twig\Template
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
        $tags = array("if" => 137, "component" => 150);
        $filters = array("theme" => 14, "escape" => 60);
        $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component'],
                ['theme', 'escape'],
                ['url']
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
        echo "<!-- Start About Section -->
<section class=\"intro\" data-scroll-index=\"1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                <div>
                    <div class=\"heading white-heading\">About Us</div>
                    <p class=\"heading-disc\">Find all the information about us in the following section or follow the menu on top</p>
                </div>
            </div>

            <div class=\"col-md-4\">
                <figure class=\"snip1447\">
                    <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro-lg-1.jpg");
        echo "\" alt=\"sample87\" />
                    <figcaption><img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro-sm-1.jpg");
        echo "\" alt=\"profile-sample4\" class=\"profile\" />
                        <h2>About The School</h2>
                        <p>The Mahabodhi Residential School is a CBSE affiliated high school flourishing in the naturally dazzling and tranquil campus of MIMC, Leh...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"";
        // line 17
        echo url("about/mahabodhi-international-meditation-centre");
        echo "\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
            <div class=\"col-md-4\">
                <figure class=\"snip1447 hover\"><img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro-lg-2.jpg");
        echo "\" alt=\"sample74\" />
                    <figcaption><img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro-sm-2.jpg");
        echo "\" alt=\"profile-sample2\" class=\"profile\" />
                        <h2>About The Founder</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when Bhikkhu Sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"";
        // line 25
        echo url("ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena");
        echo "\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
            <div class=\"col-md-4\">
                <figure class=\"snip1447\"><img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro-lg-3.jpg");
        echo "\" alt=\"sample69\" />
                    <figcaption><img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro-sm-3.jpg");
        echo "\" alt=\"profile-sample5\" class=\"profile\" />
                        <h2>About The Society</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when bhikkhu sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"";
        // line 33
        echo url("news/latest-news");
        echo "\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>



    
    

    <!-- Support Our Project -->
    <section id=\"biking-tour\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                    <div>
                        <div class=\"heading white-heading\">Our Esteemed Advisors</div>
                    </div>
                </div>

\t\t\t\t<!-- Item -->
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t<figure class=\"snip1369 blue animated rollIn\"\">
\t\t\t\t\t\t<img class=\" img img-responsive\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/foreign-donation.jpg");
        echo "\"
\t\t\t\t\t alt=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "description", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "\" />
\t\t\t\t\t<div class=\" image\">
\t\t\t\t\t\t<img class=\"img img-responsive\" src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/foreign-donation.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "description", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h3>Our Advisor</h3>
\t\t\t\t\t\t<p class=\"excerpt\">Help us by contributing your bit to achieve our mission...</p>
\t\t\t\t\t</figcaption>
\t\t\t\t\t<span class=\"read-more\">Support Now <i class=\"ion-android-arrow-forward\"></i></span>
\t\t\t\t\t<a href=\"";
        // line 69
        echo "donation/foreign-donation";
        echo "\"></a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<!-- End Item -->
\t\t\t\t<!-- Item -->
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t<figure class=\"snip1369 blue animated rollIn\"\">
\t\t\t\t\t\t\t<img class=\" img img-responsive\" src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/indian-donation.jpg");
        echo "\"
\t\t\t\t\t\t alt=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "description", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\" image\">
\t\t\t\t\t\t\t<img class=\"img img-responsive\" src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/indian-donation.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "description", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t<h3>Our Advisor</h3>
\t\t\t\t\t\t\t<p class=\"excerpt\">Help us by contributing your bit to achieve our mission...</p>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t<span class=\"read-more\">Support Now <i class=\"ion-android-arrow-forward\"></i></span>
\t\t\t\t\t\t<a href=\"";
        // line 86
        echo "donation/indian-donation";
        echo "\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Item -->
\t\t\t</div>
\t\t</div>
\t</section>
    <!-- end Support Our Project -->

    <section class=\"contact contact-parallax bg-light-gray no-padding margin-50px-tb\" data-scroll-index=\"6\">
        <!-- start quickly contact -->
        <div class=\"info\">
            <div class=\"padding-ten-lr padding-100px-tb padding-70px-tb sm-padding-50px-tb sm-no-padding-lr\">
                <div>
                    <div class=\"heading white-heading\">Get In Touch</div>
                    <p class=\"heading-disc\">Contact us on the following options for more information on the various projects & events being held at Mahabodhi International Meditation Centre</p>
                </div>
                <div class=\"col-md-4 item margin-20px-bottom\">
                    <div class=\"address-box\">
                        <i class=\"fa fa-map-marker-alt\"></i>
                        <h6 class=\"text-white\">Address: </h6>
                        <span>P.O. Box #22, Leh, </span>
                        <span>UT Ladakh 194101, India</span>
                    </div>
                </div>
                <div class=\"col-md-4 item margin-20px-bottom\">
                    <div class=\"address-box\">
                        <i class=\"fa fa-mobile-alt\"></i>
                        <h6 class=\"text-white\">Phone: </h6>
                        <span>+91-1082-264372</span>
                    </div>
                </div>
                <div class=\"col-md-4 item margin-20px-bottom\">
                    <div class=\"address-box\">
                        <i class=\"fa fa-envelope\"></i>
                        <h6 class=\"text-white\">Email: </h6>
                        <span>mrsl@gmail.com/secymimc@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end quickly contact -->
    </section>

    <!-- Start Contact Section -->
    <section class=\"contact bg-light-gray padding-10px-bottom padding-10px-top\" data-scroll-index=\"6\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- start quickly contact -->
                <div class=\"col-lg-6 map-home\">
                    <div class=\"padding-16px-tb\">
                        ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 137), "title", [], "any", false, false, true, 137) == "Home")) {
            // line 138
            echo "                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5463.287092411134!2d77.61416951972717!3d34.10069754928813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1614781487435!5m2!1sen!2sin\" width=\"540\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                        ";
        }
        // line 140
        echo "                    </div>
                </div>
                <!-- end quickly contact -->

                <!-- start get in touch -->
                <div class=\"col-lg-6\">
                    <div class=\"padding-ten-lr padding-10px-tb sm-padding-50px-tb sm-no-padding-lr\">
                        <div class=\"contact\">
                            <h4 class=\"heading font-weight-300 font-size32 md-font-size27 sm-font-size24 xs-font-size20 text-center\">Mail Us</h4>
                        </div>
                        ";
        // line 150
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 151
        echo "                    </div>
                </div>
                <!-- end get in touch -->
            </div>
        </div>
    </section>
    <!-- End Contact Section -->";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 151,  273 => 150,  261 => 140,  257 => 138,  255 => 137,  201 => 86,  189 => 79,  184 => 77,  180 => 76,  170 => 69,  158 => 62,  153 => 60,  149 => 59,  120 => 33,  115 => 31,  111 => 30,  103 => 25,  98 => 23,  94 => 22,  86 => 17,  81 => 15,  77 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Start About Section -->
<section class=\"intro\" data-scroll-index=\"1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                <div>
                    <div class=\"heading white-heading\">About Us</div>
                    <p class=\"heading-disc\">Find all the information about us in the following section or follow the menu on top</p>
                </div>
            </div>

            <div class=\"col-md-4\">
                <figure class=\"snip1447\">
                    <img src=\"{{'assets/images/intro-lg-1.jpg'|theme}}\" alt=\"sample87\" />
                    <figcaption><img src=\"{{'assets/images/intro-sm-1.jpg'|theme}}\" alt=\"profile-sample4\" class=\"profile\" />
                        <h2>About The School</h2>
                        <p>The Mahabodhi Residential School is a CBSE affiliated high school flourishing in the naturally dazzling and tranquil campus of MIMC, Leh...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"{{url('about/mahabodhi-international-meditation-centre')}}\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
            <div class=\"col-md-4\">
                <figure class=\"snip1447 hover\"><img src=\"{{'assets/images/intro-lg-2.jpg'|theme}}\" alt=\"sample74\" />
                    <figcaption><img src=\"{{'assets/images/intro-sm-2.jpg'|theme}}\" alt=\"profile-sample2\" class=\"profile\" />
                        <h2>About The Founder</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when Bhikkhu Sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"{{url('ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena')}}\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
            <div class=\"col-md-4\">
                <figure class=\"snip1447\"><img src=\"{{'assets/images/intro-lg-3.jpg'|theme}}\" alt=\"sample69\" />
                    <figcaption><img src=\"{{'assets/images/intro-sm-3.jpg'|theme}}\" alt=\"profile-sample5\" class=\"profile\" />
                        <h2>About The Society</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when bhikkhu sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"{{url('news/latest-news')}}\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>



    
    

    <!-- Support Our Project -->
    <section id=\"biking-tour\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                    <div>
                        <div class=\"heading white-heading\">Our Esteemed Advisors</div>
                    </div>
                </div>

\t\t\t\t<!-- Item -->
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t<figure class=\"snip1369 blue animated rollIn\"\">
\t\t\t\t\t\t<img class=\" img img-responsive\" src=\"{{'assets/images/foreign-donation.jpg'|theme}}\"
\t\t\t\t\t alt=\"{{ firstItem.description }}\" />
\t\t\t\t\t<div class=\" image\">
\t\t\t\t\t\t<img class=\"img img-responsive\" src=\"{{'assets/images/foreign-donation.jpg'|theme}}\" alt=\"{{ firstItem.description }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h3>Our Advisor</h3>
\t\t\t\t\t\t<p class=\"excerpt\">Help us by contributing your bit to achieve our mission...</p>
\t\t\t\t\t</figcaption>
\t\t\t\t\t<span class=\"read-more\">Support Now <i class=\"ion-android-arrow-forward\"></i></span>
\t\t\t\t\t<a href=\"{{'donation/foreign-donation'}}\"></a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<!-- End Item -->
\t\t\t\t<!-- Item -->
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t<figure class=\"snip1369 blue animated rollIn\"\">
\t\t\t\t\t\t\t<img class=\" img img-responsive\" src=\"{{'assets/images/indian-donation.jpg'|theme}}\"
\t\t\t\t\t\t alt=\"{{ firstItem.description }}\" />
\t\t\t\t\t\t<div class=\" image\">
\t\t\t\t\t\t\t<img class=\"img img-responsive\" src=\"{{'assets/images/indian-donation.jpg'|theme}}\" alt=\"{{ firstItem.description }}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t<h3>Our Advisor</h3>
\t\t\t\t\t\t\t<p class=\"excerpt\">Help us by contributing your bit to achieve our mission...</p>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t<span class=\"read-more\">Support Now <i class=\"ion-android-arrow-forward\"></i></span>
\t\t\t\t\t\t<a href=\"{{'donation/indian-donation'}}\"></a>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Item -->
\t\t\t</div>
\t\t</div>
\t</section>
    <!-- end Support Our Project -->

    <section class=\"contact contact-parallax bg-light-gray no-padding margin-50px-tb\" data-scroll-index=\"6\">
        <!-- start quickly contact -->
        <div class=\"info\">
            <div class=\"padding-ten-lr padding-100px-tb padding-70px-tb sm-padding-50px-tb sm-no-padding-lr\">
                <div>
                    <div class=\"heading white-heading\">Get In Touch</div>
                    <p class=\"heading-disc\">Contact us on the following options for more information on the various projects & events being held at Mahabodhi International Meditation Centre</p>
                </div>
                <div class=\"col-md-4 item margin-20px-bottom\">
                    <div class=\"address-box\">
                        <i class=\"fa fa-map-marker-alt\"></i>
                        <h6 class=\"text-white\">Address: </h6>
                        <span>P.O. Box #22, Leh, </span>
                        <span>UT Ladakh 194101, India</span>
                    </div>
                </div>
                <div class=\"col-md-4 item margin-20px-bottom\">
                    <div class=\"address-box\">
                        <i class=\"fa fa-mobile-alt\"></i>
                        <h6 class=\"text-white\">Phone: </h6>
                        <span>+91-1082-264372</span>
                    </div>
                </div>
                <div class=\"col-md-4 item margin-20px-bottom\">
                    <div class=\"address-box\">
                        <i class=\"fa fa-envelope\"></i>
                        <h6 class=\"text-white\">Email: </h6>
                        <span>mrsl@gmail.com/secymimc@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end quickly contact -->
    </section>

    <!-- Start Contact Section -->
    <section class=\"contact bg-light-gray padding-10px-bottom padding-10px-top\" data-scroll-index=\"6\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- start quickly contact -->
                <div class=\"col-lg-6 map-home\">
                    <div class=\"padding-16px-tb\">
                        {% if this.page.title == 'Home' %}
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5463.287092411134!2d77.61416951972717!3d34.10069754928813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1614781487435!5m2!1sen!2sin\" width=\"540\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                        {% endif %}
                    </div>
                </div>
                <!-- end quickly contact -->

                <!-- start get in touch -->
                <div class=\"col-lg-6\">
                    <div class=\"padding-ten-lr padding-10px-tb sm-padding-50px-tb sm-no-padding-lr\">
                        <div class=\"contact\">
                            <h4 class=\"heading font-weight-300 font-size32 md-font-size27 sm-font-size24 xs-font-size20 text-center\">Mail Us</h4>
                        </div>
                        {% component 'contact' %}
                    </div>
                </div>
                <!-- end get in touch -->
            </div>
        </div>
    </section>
    <!-- End Contact Section -->", "/home/vg19p32nkdok/public_html/mahabodhiresidentialschool.org/themes/demo5/pages/home.htm", "");
    }
}
