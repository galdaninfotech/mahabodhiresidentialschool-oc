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

/* C:\laragon\www\mrsl1/themes/demo5/partials/footer.htm */
class __TwigTemplate_b5e5eab02732190875c773acc920465914d5256e7586e89b3c66f106ecbaacee extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<!--  Start Footer Section -->
    <footer class=\"bg-primary\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                        <div>
                            <div class=\"heading white-heading margin-50px-bottom\">Contact Us</div>
                            <span class=\"footer-company-name font-size20 alt-font text-uppercase  display-block letter-spacing-1 text-burlywood margin-15px-top margin-30px-bottom xs-margin-fifteen\">
                                Mahabodhi Residential School
                            </span>
                        </div>
                    </div>

                    <!-- start footer logo -->
                    <div class=\"footer-address col-md-12 col-sm-12 text-center\">
                        <span class=\"address-line\">P.O. Box #22, Leh, UT Ladakh 194101, India</span>
                        <span class=\"address-line\">Email: mahabodhi-residential-school@gmail.com</span>
                        <span class=\"address-line\">Tel: +91-1982-00000 Fax: +91-1982-00000</span>
                        <br>
                        <br>
                        
                    </div>
                    <!-- end footer logo -->
                    <!-- start social media link -->
                    <div class=\"col-md-12 col-sm-12 text-center\">
                        <div class=\"footer-social\">
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-twitter\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-google-plus-g\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-dribbble\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-youtube\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <!-- end social media link -->
                </div>
            </div>
        </div>
        <div class=\"footer-bottom bg-primary-darken-20 d-none d-md-block\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col col-xs-6 text-left\">
                        <span class=\"font-size11\">Copyright © 1986 - 2021 <a href=\"#\">Mahabodhi International Meditation Centre, Ladakh</a></span>
                    </div>
                    <div class=\"col col-xs-6 text-right\">
                        <span class=\"font-size11\">Developed By : <a href=\"http://www.galdaninfotech.in\">Galdan Infotech</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom bg-primary-darken-20 d-block d-md-none\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col col-xs-6 text-left\">
                        <span class=\"font-size11\"><span>©</span> <a href=\"#\">MIMC Ladakh</a></span>
                    </div>
                    <div class=\"col col-xs-6 text-right\">
                        <span class=\"font-size11\"><a href=\"http://www.galdaninfotech.in\">Galdan Infotech</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"back-to-top\" class=\"back-to-top\">
            <i class=\"fa fa-angle-up\"></i>
        </div>
    </footer>
    <!-- End Footer Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mrsl1/themes/demo5/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--  Start Footer Section -->
    <footer class=\"bg-primary\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 d-flex justify-content-center mt-2 mb-2\">
                        <div>
                            <div class=\"heading white-heading margin-50px-bottom\">Contact Us</div>
                            <span class=\"footer-company-name font-size20 alt-font text-uppercase  display-block letter-spacing-1 text-burlywood margin-15px-top margin-30px-bottom xs-margin-fifteen\">
                                Mahabodhi Residential School
                            </span>
                        </div>
                    </div>

                    <!-- start footer logo -->
                    <div class=\"footer-address col-md-12 col-sm-12 text-center\">
                        <span class=\"address-line\">P.O. Box #22, Leh, UT Ladakh 194101, India</span>
                        <span class=\"address-line\">Email: mahabodhi-residential-school@gmail.com</span>
                        <span class=\"address-line\">Tel: +91-1982-00000 Fax: +91-1982-00000</span>
                        <br>
                        <br>
                        
                    </div>
                    <!-- end footer logo -->
                    <!-- start social media link -->
                    <div class=\"col-md-12 col-sm-12 text-center\">
                        <div class=\"footer-social\">
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-twitter\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-google-plus-g\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-dribbble\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-youtube\"></i></a>
                            <a href=\"javascript:void(0);\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <!-- end social media link -->
                </div>
            </div>
        </div>
        <div class=\"footer-bottom bg-primary-darken-20 d-none d-md-block\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col col-xs-6 text-left\">
                        <span class=\"font-size11\">Copyright © 1986 - 2021 <a href=\"#\">Mahabodhi International Meditation Centre, Ladakh</a></span>
                    </div>
                    <div class=\"col col-xs-6 text-right\">
                        <span class=\"font-size11\">Developed By : <a href=\"http://www.galdaninfotech.in\">Galdan Infotech</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom bg-primary-darken-20 d-block d-md-none\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col col-xs-6 text-left\">
                        <span class=\"font-size11\"><span>©</span> <a href=\"#\">MIMC Ladakh</a></span>
                    </div>
                    <div class=\"col col-xs-6 text-right\">
                        <span class=\"font-size11\"><a href=\"http://www.galdaninfotech.in\">Galdan Infotech</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"back-to-top\" class=\"back-to-top\">
            <i class=\"fa fa-angle-up\"></i>
        </div>
    </footer>
    <!-- End Footer Section -->", "C:\\laragon\\www\\mrsl1/themes/demo5/partials/footer.htm", "");
    }
}
