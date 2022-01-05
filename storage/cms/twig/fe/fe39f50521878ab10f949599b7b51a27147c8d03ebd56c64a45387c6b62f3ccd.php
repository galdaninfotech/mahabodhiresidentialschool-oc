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

/* C:\laragon\www\mimc1/themes/demo5/pages/home.htm */
class __TwigTemplate_5066c7dfa1bf1f1f223a40dd8be1fd741c17d3914001b46f915f255a74b91ae8 extends \Twig\Template
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
        $tags = array("component" => 387, "if" => 486);
        $filters = array("theme" => 14, "escape" => 409);
        $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if'],
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
                        <h2>MIMC</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when bhikkhu sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"";
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
                        <h2>Ven Bhikkhu sanghasena</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when bhikkhu sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"";
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
                        <h2>MIMC News</h2>
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
    


<section class=\"upcoming-events-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                <div>
                    <div class=\"heading white-heading\">Upcoming Events</div>
                    <p class=\"heading-disc\">Join us in any of our upcoming events listed below...</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"upcoming-events\">
                    <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg.jpg");
        echo "\">
                    <div class=\"upcoming-events-content\">
                        <div class=\"inner-content\">
                            <h3 class=\"title\">Festival Of Yoga & Meditation</h3>
                            <p class=\"post\">A splendid 7 day International Conference on Yoga, Meditation, World Peace...</p>
                            <ul class=\"icon\">
                                <li><a href=\"";
        // line 60
        echo url("upcoming-events/festival-of-yoga-and-meditation");
        echo "\">Read More...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"upcoming-events\">
                    <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg2.jpg");
        echo "\">
                    <div class=\"upcoming-events-content\">
                        <div class=\"inner-content\">
                            <h3 class=\"title\">Meditation</h3>
                            <p class=\"post\">A splendid 7 day International Conference on Yoga, Meditation, World Peace...</p>
                            <ul class=\"icon\">
                                <li><a href=\"";
        // line 75
        echo url("upcoming-events/meditation");
        echo "\">Read More...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"upcoming-events\">
                    <img src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg3.jpg");
        echo "\">
                    <div class=\"upcoming-events-content\">
                        <div class=\"inner-content\">
                            <h3 class=\"title\">Cultural Show</h3>
                            <p class=\"post\">A splendid 7 day International Conference on Yoga, Meditation, World Peace...</p>
                            <ul class=\"icon\">
                                <li><a href=\"";
        // line 90
        echo url("upcoming-events/cultural-show");
        echo "\">Read More...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<section class=\"intro\" data-scroll-index=\"1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                <div>
                    <div class=\"heading white-heading\">Sister Concerns</div>
                    <p class=\"heading-disc\"></p>
                </div>
            </div>
            

            <div class=\"col-md-3\">
                <figure class=\"snip1253\">
                    <div class=\"image\"><img src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/save-the-himalaya-foundation.jpg");
        echo "\" alt=\"sample52\"/></div>
                    <figcaption>
                      <h6>Save the Himalaya Foundation</h6>
                      <p>Save the Himalaya Foundation was established by Ven. Bhikkhu sanghasena in the year</p>
                    </figcaption>
                    <footer>
                      <div class=\"views\"><i class=\"ion-eye\"></i></div>
                      <div class=\"love\"><i class=\"ion-heart\"></i></div>
                      <div class=\"comments read-more\"><i class=\"ion-chatboxes\"></i>Read More</div>
                    </footer><a href=\"";
        // line 125
        echo url("sister-concerns/save-the-himalaya-foundation");
        echo "\"></a>
                </figure>
            </div>

            <div class=\"col-md-3\">
                <figure class=\"snip1253\">
                    <div class=\"image\"><img src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mahakaruna-foundation.jpg");
        echo "\" alt=\"sample52\"/></div>
                    <figcaption>
                      <h6>Mahakaruna Foundation</h6>
                      <p>Mahakaruna Foundation was established to spread the great compassion in Action</p>
                    </figcaption>
                    <footer>
                      <div class=\"views\"><i class=\"ion-eye\"></i></div>
                      <div class=\"love\"><i class=\"ion-heart\"></i></div>
                      <div class=\"comments\"><i class=\"ion-chatboxes\"></i>Read More</div>
                    </footer><a href=\"";
        // line 140
        echo url("sister-concerns/mahakaruna-foundation");
        echo "\"></a>
                </figure>
            </div>

            <div class=\"col-md-3\">
                <figure class=\"snip1253\">
                    <div class=\"image\"><img src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/global-doctors-association-for-himalaya.jpg");
        echo "\" alt=\"sample52\"/></div>
                    <figcaption>
                      <h6>GDAH</h6>
                      <p>Global Docters Association For Himalayas was started for the healthcare of peaple of Himalayas...</p>
                    </figcaption>
                    <footer>
                      <div class=\"views\"><i class=\"ion-eye\"></i></div>
                      <div class=\"love\"><i class=\"ion-heart\"></i></div>
                      <div class=\"comments\"><i class=\"ion-chatboxes\"></i>Read More</div>
                    </footer><a href=\"";
        // line 155
        echo url("sister-concerns/gdah");
        echo "\"></a>
                </figure>
            </div>

            <div class=\"col-md-3\">
                <figure class=\"snip1253\">
                    <div class=\"image\"><img src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/foundation-for-indian-buddhist.jpg");
        echo "\" alt=\"sample52\"/></div>
                    <figcaption>
                      <h6>Foundation For Indian Buddhist</h6>
                      <p>Foundation For Indian Buddhist was started for revival of Buddhism in its birthpalce, India</p>
                    </figcaption>
                    <footer>
                      <div class=\"views\"><i class=\"ion-eye\"></i></div>
                      <div class=\"love\"><i class=\"ion-heart\"></i></div>
                      <div class=\"comments\"><i class=\"ion-chatboxes\"></i>Read More</div>
                    </footer><a href=\"";
        // line 170
        echo url("sister-concerns/foundation-for-indian-buddhist");
        echo "\"></a>
                </figure>
            </div>    

        </div>
    </div>
</section>



    

    <!-- Start Testimonials Section -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">\t\t\t
                <div id=\"mimc-testimoials\" class=\"carousel slide margin-50px-tb\" data-ride=\"carousel\">
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <div class=\"heading white-heading\">Testimonials</div>
                            <p class=\"heading-disc\">As shard by our friends, well wishers and supporters from around the world</p>
                        </div>
                    </div>
                    <!-- Carousel indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#mimc-testimoials\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#mimc-testimoials\" data-slide-to=\"1\"></li>
                        <li data-target=\"#mimc-testimoials\" data-slide-to=\"2\"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class=\"carousel-inner\">
                        <div class=\"active carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Beautiful and peaceful location between desert mountains, green gardens, flowers and birds, children's chanting early in the morning, Master's teachings, time to think about priorities and values in life...peace, peace, peace...all this and much more I have found at Mahabodhi</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial1.jpg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Romone</b></div>
                                                <div class=\"details\">Slovenia</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>I’m so happy to have discovered Mahabodhi. It’s a beautiful oasis of calm and tranquility. Ven. sanghasena was an entertaining and inspiring teacher on the 3 day residential meditation course. Found a perfect way to take a piece of divine Ladakh home with me (in my heart)</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"";
        // line 234
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial2.jpg");
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Charlotte Winn</b></div>
                                                <div class=\"details\">New Zealand</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                            </div>\t\t\t
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Mahabodhi is an excellent place to escape the hustle and bustle of traveling around India. Great place to wonder around – you can see cheeky young monks playing cricket. The food is tip top and its was a good base for my excursions around Ladakh. I enjoyed coming back. You can be involved in the spiritual side as much or as little as you want, it’s a friendly place!</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"";
        // line 263
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial3.jpg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Tony</b></div>
                                                <div class=\"details\">United Kingdom</div>\t\t\t\t\t\t\t\t\t\t\t
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Mahabodhi is an excellent place to escape the hustle and bustle of traveling around India. Great place to wonder around – you can see cheeky young monks playing cricket. The food is tip top and its was a good base for my excursions around Ladakh. I enjoyed coming back. You can be involved in the spiritual side as much or as little as you want, it’s a friendly place!</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"";
        // line 288
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial4.jpg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Mary Saveley</b></div>
                                                <div class=\"details\">Australia</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                            </div>\t\t\t
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Mahabodhi is an excellent place to escape the hustle and bustle of traveling around India. Great place to wonder around – you can see cheeky young monks playing cricket. The food is tip top and its was a good base for my excursions around Ladakh. I enjoyed coming back. You can be involved in the spiritual side as much or as little as you want, it’s a friendly place!</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"";
        // line 317
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial5.jpg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Martin Sommer</b></div>
                                                <div class=\"details\">United States Of America</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Mahabodhi is an excellent place to escape the hustle and bustle of traveling around India. Great place to wonder around – you can see cheeky young monks playing cricket. The food is tip top and its was a good base for my excursions around Ladakh. I enjoyed coming back. You can be involved in the spiritual side as much or as little as you want, it’s a friendly place!</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"";
        // line 342
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial6.jpg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>John Williams</b></div>
                                                <div class=\"details\">Germany</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                            </div>\t\t\t
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class=\"carousel-control left\" href=\"#mimc-testimoials\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control right\" href=\"#mimc-testimoials\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Section -->
    
    
    <section class=\"social-feed\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                    <div>
                        <div class=\"heading white-heading\">Latest Social Media</div>
                        <p class=\"heading-disc\">Check out out latest posts of our Social Media Sites</p>
                    </div>
                </div>               
                <div class=\"col-md-4\">";
        // line 387
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("fanpageFacebook"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>
                <div class=\"col-md-4\">";
        // line 388
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("fanpageFacebook"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>
                <div class=\"col-md-4\">";
        // line 389
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("fanpageFacebook"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>
            </div>
        </div>
    </section>

    <!-- Support Our Project -->
    <section id=\"biking-tour\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                    <div>
                        <div class=\"heading white-heading\">Support Our Projects</div>
                        <p class=\"heading-disc\">Help us by contributing your bit to achieve our mission</p>
                    </div>
                </div>

\t\t\t\t<!-- Item -->
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t<figure class=\"snip1369 blue animated rollIn\"\">
\t\t\t\t\t\t<img class=\" img img-responsive\" src=\"";
        // line 408
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/foreign-donation.jpg");
        echo "\"
\t\t\t\t\t alt=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "description", [], "any", false, false, true, 409), 409, $this->source), "html", null, true);
        echo "\" />
\t\t\t\t\t<div class=\" image\">
\t\t\t\t\t\t<img class=\"img img-responsive\" src=\"";
        // line 411
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/foreign-donation.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "description", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h3>Foreign Donors</h3>
\t\t\t\t\t\t<p class=\"excerpt\">Help us by contributing your bit to achieve our mission...</p>
\t\t\t\t\t</figcaption>
\t\t\t\t\t<span class=\"read-more\">Support Now <i class=\"ion-android-arrow-forward\"></i></span>
\t\t\t\t\t<a href=\"";
        // line 418
        echo "donation/foreign-donation";
        echo "\"></a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<!-- End Item -->
\t\t\t\t<!-- Item -->
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t<figure class=\"snip1369 blue animated rollIn\"\">
\t\t\t\t\t\t\t<img class=\" img img-responsive\" src=\"";
        // line 425
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/indian-donation.jpg");
        echo "\"
\t\t\t\t\t\t alt=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "description", [], "any", false, false, true, 426), 426, $this->source), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\" image\">
\t\t\t\t\t\t\t<img class=\"img img-responsive\" src=\"";
        // line 428
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/indian-donation.jpg");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "description", [], "any", false, false, true, 428), 428, $this->source), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t<h3>Indian Donors</h3>
\t\t\t\t\t\t\t<p class=\"excerpt\">Help us by contributing your bit to achieve our mission...</p>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t<span class=\"read-more\">Support Now <i class=\"ion-android-arrow-forward\"></i></span>
\t\t\t\t\t\t<a href=\"";
        // line 435
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
                        <span>infomimc@gmail.com/secymimc@gmail.com</span>
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
        // line 486
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 486), "title", [], "any", false, false, true, 486) == "Home")) {
            // line 487
            echo "                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5463.287092411134!2d77.61416951972717!3d34.10069754928813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1614781487435!5m2!1sen!2sin\" width=\"540\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                        ";
        }
        // line 489
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
        // line 499
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 500
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
        return "C:\\laragon\\www\\mimc1/themes/demo5/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  701 => 500,  697 => 499,  685 => 489,  681 => 487,  679 => 486,  625 => 435,  613 => 428,  608 => 426,  604 => 425,  594 => 418,  582 => 411,  577 => 409,  573 => 408,  549 => 389,  543 => 388,  537 => 387,  489 => 342,  461 => 317,  429 => 288,  401 => 263,  369 => 234,  341 => 209,  299 => 170,  287 => 161,  278 => 155,  266 => 146,  257 => 140,  245 => 131,  236 => 125,  224 => 116,  195 => 90,  186 => 84,  174 => 75,  165 => 69,  153 => 60,  144 => 54,  120 => 33,  115 => 31,  111 => 30,  103 => 25,  98 => 23,  94 => 22,  86 => 17,  81 => 15,  77 => 14,  62 => 1,);
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
                        <h2>MIMC</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when bhikkhu sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"{{url('about/mahabodhi-international-meditation-centre')}}\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
            <div class=\"col-md-4\">
                <figure class=\"snip1447 hover\"><img src=\"{{'assets/images/intro-lg-2.jpg'|theme}}\" alt=\"sample74\" />
                    <figcaption><img src=\"{{'assets/images/intro-sm-2.jpg'|theme}}\" alt=\"profile-sample2\" class=\"profile\" />
                        <h2>Ven Bhikkhu sanghasena</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when bhikkhu sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"{{url('ven-bhikkhu-sanghasena/ven-bhikkhu-sanghasena')}}\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
            <div class=\"col-md-4\">
                <figure class=\"snip1447\"><img src=\"{{'assets/images/intro-lg-3.jpg'|theme}}\" alt=\"sample69\" />
                    <figcaption><img src=\"{{'assets/images/intro-sm-3.jpg'|theme}}\" alt=\"profile-sample5\" class=\"profile\" />
                        <h2>MIMC News</h2>
                        <p>The Mahabodhi International Meditation Centre had its humble begining in one small rented room in Leh city in 1986 when bhikkhu sanghasena...</p><a href=\"#\" class=\"follow\">Follow</a><a href=\"{{url('news/latest-news')}}\" class=\"info\">Read More</a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
    


<section class=\"upcoming-events-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                <div>
                    <div class=\"heading white-heading\">Upcoming Events</div>
                    <p class=\"heading-disc\">Join us in any of our upcoming events listed below...</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"upcoming-events\">
                    <img src=\"{{'assets/images/bg.jpg'|theme}}\">
                    <div class=\"upcoming-events-content\">
                        <div class=\"inner-content\">
                            <h3 class=\"title\">Festival Of Yoga & Meditation</h3>
                            <p class=\"post\">A splendid 7 day International Conference on Yoga, Meditation, World Peace...</p>
                            <ul class=\"icon\">
                                <li><a href=\"{{url('upcoming-events/festival-of-yoga-and-meditation')}}\">Read More...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"upcoming-events\">
                    <img src=\"{{'assets/images/bg2.jpg'|theme}}\">
                    <div class=\"upcoming-events-content\">
                        <div class=\"inner-content\">
                            <h3 class=\"title\">Meditation</h3>
                            <p class=\"post\">A splendid 7 day International Conference on Yoga, Meditation, World Peace...</p>
                            <ul class=\"icon\">
                                <li><a href=\"{{url('upcoming-events/meditation')}}\">Read More...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"upcoming-events\">
                    <img src=\"{{'assets/images/bg3.jpg'|theme}}\">
                    <div class=\"upcoming-events-content\">
                        <div class=\"inner-content\">
                            <h3 class=\"title\">Cultural Show</h3>
                            <p class=\"post\">A splendid 7 day International Conference on Yoga, Meditation, World Peace...</p>
                            <ul class=\"icon\">
                                <li><a href=\"{{url('upcoming-events/cultural-show')}}\">Read More...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<section class=\"intro\" data-scroll-index=\"1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                <div>
                    <div class=\"heading white-heading\">Sister Concerns</div>
                    <p class=\"heading-disc\"></p>
                </div>
            </div>
            

            <div class=\"col-md-3\">
                <figure class=\"snip1253\">
                    <div class=\"image\"><img src=\"{{'assets/images/save-the-himalaya-foundation.jpg'|theme}}\" alt=\"sample52\"/></div>
                    <figcaption>
                      <h6>Save the Himalaya Foundation</h6>
                      <p>Save the Himalaya Foundation was established by Ven. Bhikkhu sanghasena in the year</p>
                    </figcaption>
                    <footer>
                      <div class=\"views\"><i class=\"ion-eye\"></i></div>
                      <div class=\"love\"><i class=\"ion-heart\"></i></div>
                      <div class=\"comments read-more\"><i class=\"ion-chatboxes\"></i>Read More</div>
                    </footer><a href=\"{{url('sister-concerns/save-the-himalaya-foundation')}}\"></a>
                </figure>
            </div>

            <div class=\"col-md-3\">
                <figure class=\"snip1253\">
                    <div class=\"image\"><img src=\"{{'assets/images/mahakaruna-foundation.jpg'|theme}}\" alt=\"sample52\"/></div>
                    <figcaption>
                      <h6>Mahakaruna Foundation</h6>
                      <p>Mahakaruna Foundation was established to spread the great compassion in Action</p>
                    </figcaption>
                    <footer>
                      <div class=\"views\"><i class=\"ion-eye\"></i></div>
                      <div class=\"love\"><i class=\"ion-heart\"></i></div>
                      <div class=\"comments\"><i class=\"ion-chatboxes\"></i>Read More</div>
                    </footer><a href=\"{{url('sister-concerns/mahakaruna-foundation')}}\"></a>
                </figure>
            </div>

            <div class=\"col-md-3\">
                <figure class=\"snip1253\">
                    <div class=\"image\"><img src=\"{{'assets/images/global-doctors-association-for-himalaya.jpg'|theme}}\" alt=\"sample52\"/></div>
                    <figcaption>
                      <h6>GDAH</h6>
                      <p>Global Docters Association For Himalayas was started for the healthcare of peaple of Himalayas...</p>
                    </figcaption>
                    <footer>
                      <div class=\"views\"><i class=\"ion-eye\"></i></div>
                      <div class=\"love\"><i class=\"ion-heart\"></i></div>
                      <div class=\"comments\"><i class=\"ion-chatboxes\"></i>Read More</div>
                    </footer><a href=\"{{url('sister-concerns/gdah')}}\"></a>
                </figure>
            </div>

            <div class=\"col-md-3\">
                <figure class=\"snip1253\">
                    <div class=\"image\"><img src=\"{{'assets/images/foundation-for-indian-buddhist.jpg'|theme}}\" alt=\"sample52\"/></div>
                    <figcaption>
                      <h6>Foundation For Indian Buddhist</h6>
                      <p>Foundation For Indian Buddhist was started for revival of Buddhism in its birthpalce, India</p>
                    </figcaption>
                    <footer>
                      <div class=\"views\"><i class=\"ion-eye\"></i></div>
                      <div class=\"love\"><i class=\"ion-heart\"></i></div>
                      <div class=\"comments\"><i class=\"ion-chatboxes\"></i>Read More</div>
                    </footer><a href=\"{{url('sister-concerns/foundation-for-indian-buddhist')}}\"></a>
                </figure>
            </div>    

        </div>
    </div>
</section>



    

    <!-- Start Testimonials Section -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">\t\t\t
                <div id=\"mimc-testimoials\" class=\"carousel slide margin-50px-tb\" data-ride=\"carousel\">
                    <div class=\"d-flex justify-content-center\">
                        <div>
                            <div class=\"heading white-heading\">Testimonials</div>
                            <p class=\"heading-disc\">As shard by our friends, well wishers and supporters from around the world</p>
                        </div>
                    </div>
                    <!-- Carousel indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#mimc-testimoials\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#mimc-testimoials\" data-slide-to=\"1\"></li>
                        <li data-target=\"#mimc-testimoials\" data-slide-to=\"2\"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class=\"carousel-inner\">
                        <div class=\"active carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Beautiful and peaceful location between desert mountains, green gardens, flowers and birds, children's chanting early in the morning, Master's teachings, time to think about priorities and values in life...peace, peace, peace...all this and much more I have found at Mahabodhi</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"{{'assets/images/testimonial1.jpg'|theme}}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Romone</b></div>
                                                <div class=\"details\">Slovenia</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>I’m so happy to have discovered Mahabodhi. It’s a beautiful oasis of calm and tranquility. Ven. sanghasena was an entertaining and inspiring teacher on the 3 day residential meditation course. Found a perfect way to take a piece of divine Ladakh home with me (in my heart)</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"{{'assets/images/testimonial2.jpg'|theme}}\" alt=\"\">
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Charlotte Winn</b></div>
                                                <div class=\"details\">New Zealand</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                            </div>\t\t\t
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Mahabodhi is an excellent place to escape the hustle and bustle of traveling around India. Great place to wonder around – you can see cheeky young monks playing cricket. The food is tip top and its was a good base for my excursions around Ladakh. I enjoyed coming back. You can be involved in the spiritual side as much or as little as you want, it’s a friendly place!</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"{{'assets/images/testimonial3.jpg'|theme}}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Tony</b></div>
                                                <div class=\"details\">United Kingdom</div>\t\t\t\t\t\t\t\t\t\t\t
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Mahabodhi is an excellent place to escape the hustle and bustle of traveling around India. Great place to wonder around – you can see cheeky young monks playing cricket. The food is tip top and its was a good base for my excursions around Ladakh. I enjoyed coming back. You can be involved in the spiritual side as much or as little as you want, it’s a friendly place!</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"{{'assets/images/testimonial4.jpg'|theme}}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Mary Saveley</b></div>
                                                <div class=\"details\">Australia</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                            </div>\t\t\t
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Mahabodhi is an excellent place to escape the hustle and bustle of traveling around India. Great place to wonder around – you can see cheeky young monks playing cricket. The food is tip top and its was a good base for my excursions around Ladakh. I enjoyed coming back. You can be involved in the spiritual side as much or as little as you want, it’s a friendly place!</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"{{'assets/images/testimonial5.jpg'|theme}}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>Martin Sommer</b></div>
                                                <div class=\"details\">United States Of America</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"testimonial\">
                                        <p>Mahabodhi is an excellent place to escape the hustle and bustle of traveling around India. Great place to wonder around – you can see cheeky young monks playing cricket. The food is tip top and its was a good base for my excursions around Ladakh. I enjoyed coming back. You can be involved in the spiritual side as much or as little as you want, it’s a friendly place!</p>
                                    </div>
                                    <div class=\"media\">
                                        <div class=\"media-left d-flex mr-3\">
                                            <img src=\"{{'assets/images/testimonial6.jpg'|theme}}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"media-body\">
                                            <div class=\"overview\">
                                                <div class=\"name\"><b>John Williams</b></div>
                                                <div class=\"details\">Germany</div>
                                                <div class=\"star-rating\">
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                        <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div>
                            </div>\t\t\t
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class=\"carousel-control left\" href=\"#mimc-testimoials\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control right\" href=\"#mimc-testimoials\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Section -->
    
    
    <section class=\"social-feed\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                    <div>
                        <div class=\"heading white-heading\">Latest Social Media</div>
                        <p class=\"heading-disc\">Check out out latest posts of our Social Media Sites</p>
                    </div>
                </div>               
                <div class=\"col-md-4\">{% component 'fanpageFacebook' %}</div>
                <div class=\"col-md-4\">{% component 'fanpageFacebook' %}</div>
                <div class=\"col-md-4\">{% component 'fanpageFacebook' %}</div>
            </div>
        </div>
    </section>

    <!-- Support Our Project -->
    <section id=\"biking-tour\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                    <div>
                        <div class=\"heading white-heading\">Support Our Projects</div>
                        <p class=\"heading-disc\">Help us by contributing your bit to achieve our mission</p>
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
\t\t\t\t\t\t<h3>Foreign Donors</h3>
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
\t\t\t\t\t\t\t<h3>Indian Donors</h3>
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
                        <span>infomimc@gmail.com/secymimc@gmail.com</span>
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
    <!-- End Contact Section -->", "C:\\laragon\\www\\mimc1/themes/demo5/pages/home.htm", "");
    }
}
