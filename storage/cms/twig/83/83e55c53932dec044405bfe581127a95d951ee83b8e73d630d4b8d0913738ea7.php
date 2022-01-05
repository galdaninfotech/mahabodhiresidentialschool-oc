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

/* C:\laragon\www\mrsl1/themes/demo5/pages/cbse-mandatory-disclosure.htm */
class __TwigTemplate_991080ad35c3b5fb8050dfeecdeb024ab5c3969edb00d9d526addbcc535eccbd extends \Twig\Template
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
        $tags = array("partial" => 567);
        $filters = array("escape" => 7, "theme" => 15);
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
                    <div class=\"heading white-heading\">
                        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " US</h1>
                    </div>
                </div>
            </div>

            <div class=\"polaroid\">
                <img
                    class=\"img img-responsive\"
                    src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/index.jpg");
        echo "\"
                    alt=\"About\"
                />
            </div>

            <div class=\"wpb_wrapper\">
                <div class=\"wpb_raw_code wpb_content_element wpb_raw_html\">
                    <div class=\"wpb_wrapper\">
                        <div style=\"text-align:left;\"><strong>A:</strong> <span><strong><u>GENERAL INFORMATION:</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>DETAILS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        NAME OF THE SCHOOL
                                    </td>
                                    <td>
                                        MAHABODHI RESIDENTIAL SCHOOL
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        AFFILIATION NO.(IF APPLICABLE)
                                    </td>
                                    <td>
                                        68578
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        SCHOOL CODE (IF APPLICABLE)
                                    </td>
                                    <td>
                                        65845
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        COMPLETE ADDRESS WITH PIN CODE
                                    </td>
                                    <td>
                                        LEH LADAKH
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        PRINCIPAL NAME &amp; QUALIFICATION:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        SCHOOL EMAIL ID
                                    </td>
                                    <td>
                                        mahabodhiresidentialschool@gmail.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        CONTACT DETAILS (LANDLINE/MOBILE)
                                    </td>
                                    <td>
                                        +1982-00000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\"text-align:left;\"><strong>B:</strong> <span><strong><u>DOCUMENTS AND INFORMATION:</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>DOCUMENTS/INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>VIEW DOCUMENTS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 144
        echo "storage/app/media/cbse-mandatory-disclosure/documents-and-information/affiliation-upgradation.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 155
        echo "storage/app/media/cbse-mandatory-disclosure/documents-and-information/society-registration-certificate.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 166
        echo "storage/app/media/cbse-mandatory-disclosure/documents-and-information/noc.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 177
        echo "storage/app/media/cbse-mandatory-disclosure/documents-and-information/building.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 188
        echo "storage/app/media/cbse-mandatory-disclosure/documents-and-information/fire-safety.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATIONOR SELF CERTIFICATION BY SCHOOL
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 199
        echo "storage/app/media/cbse-mandatory-disclosure/documents-and-information/b7.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 210
        echo "storage/app/media/cbse-mandatory-disclosure/documents-and-information/drinking-water.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <br>
                        <div style=\"text-align:left;\"><strong>C:</strong> <span><strong><u>RESULT AND ACADEMICS:</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>DOCUMENTS/INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>VIEW DOCUMENTS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        FEE STRUCTURE OF THE SCHOOL
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 242
        echo "storage/app/media/cbse-mandatory-disclosure/result-and-academics/fee-structure.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        ANNUAL ACADEMIC CALANDER.
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 253
        echo "storage/app/media/cbse-mandatory-disclosure/result-and-academics/calendar.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 264
        echo "storage/app/media/cbse-mandatory-disclosure/result-and-academics/smc.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 275
        echo "storage/app/media/cbse-mandatory-disclosure/result-and-academics/parents-teachers-association-members.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABLILITY
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 286
        echo "storage/app/media/cbse-mandatory-disclosure/result-and-academics/class-x-result-2020-2021.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        SCHOOL TRANSFER CERTIFICATE SAMPLE
                                    </td>
                                    <td>
                                        <a href=\"";
        // line 297
        echo "storage/app/media/cbse-mandatory-disclosure/result-and-academics/transfer-certificate.pdf";
        echo "\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div style=\"text-align:left;\"><strong>RESULT CLASS: X</strong></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>YEAR</strong>
                                    </td>
                                    <td>
                                        <strong> NO. OF REGISTERED STUDENTS</strong>
                                    </td>
                                    <td>
                                        <strong> NO. OF STUDENTS PASSED </strong>
                                    </td>
                                    <td>
                                        <strong> PASS PERCENTAGE</strong>
                                    </td>
                                    <td>
                                        <strong> REMARKS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        2020-2021
                                    </td>
                                    <td>
                                        32
                                    </td>
                                    <td>
                                        32
                                    </td>
                                    <td>
                                        100
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <br>
                        <div style=\"text-align:left;\"><strong>D:</strong> <span><strong><u>STAFF (TEACHING)</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>DETAILS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        PRINCIPAL
                                    </td>
                                    <td>
                                        1
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        VICE PRINCIPAL
                                    </td>
                                    <td>
                                        1
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>TOTAL NO. OF TEACHERS
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>PGT</td>
                                                </tr>
                                                <tr>
                                                    <td>TGT</td>
                                                </tr>
                                                <tr>
                                                    <td>PRT</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        25
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        TEACHERS SECTION RATIO
                                    </td>
                                    <td>
                                        16:1
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        DETAILS OF SPECIAL EDUCATOR
                                    </td>
                                    <td>
                                        Not Applicable
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        DETAILS OF COUNSELLOR AND WELNESS TEACHER
                                    </td>
                                    <td>
                                        Not Applicable
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div style=\"text-align:left;\"><strong>E:</strong> <span><strong><u>SCHOOL INFRASTRUCTURE:</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>DETAILS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)
                                    </td>
                                    <td>
                                        60703 Sq.mts.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        NO. AND SIZE OF THE CLASS ROOMS (IN SQ MTR)
                                    </td>
                                    <td>
                                        18 Rooms
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR
                                    </td>
                                    <td>
                                        5 Rooms (50.424 sq mtr)
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        INTERNET FACILITY (Y/N)
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        NO. OF GIRLS TOILETS
                                    </td>
                                    <td>
                                        15
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        NO. OF BOYS TOILETS
                                    </td>
                                    <td>
                                        10
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!--  .col-md-9 -->

        <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
            ";
        // line 567
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
            ";
        // line 568
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/useful-links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 569
        echo "        </div>
        <!--  .col-md-3 -->
    </div>
    <!--  .row -->
</div>
<!--  .container -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\mrsl1/themes/demo5/pages/cbse-mandatory-disclosure.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 569,  681 => 568,  675 => 567,  402 => 297,  388 => 286,  374 => 275,  360 => 264,  346 => 253,  332 => 242,  297 => 210,  283 => 199,  269 => 188,  255 => 177,  241 => 166,  227 => 155,  213 => 144,  81 => 15,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row main-content margin-50px-tb\">
        <div class=\"col-md-9\">
            <div class=\"d-flex justify-content-center margin-20px-bottom\">
                <div>
                    <div class=\"heading white-heading\">
                        <h1>{{this.page.title}} US</h1>
                    </div>
                </div>
            </div>

            <div class=\"polaroid\">
                <img
                    class=\"img img-responsive\"
                    src=\"{{'assets/images/index.jpg'|theme}}\"
                    alt=\"About\"
                />
            </div>

            <div class=\"wpb_wrapper\">
                <div class=\"wpb_raw_code wpb_content_element wpb_raw_html\">
                    <div class=\"wpb_wrapper\">
                        <div style=\"text-align:left;\"><strong>A:</strong> <span><strong><u>GENERAL INFORMATION:</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>DETAILS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        NAME OF THE SCHOOL
                                    </td>
                                    <td>
                                        MAHABODHI RESIDENTIAL SCHOOL
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        AFFILIATION NO.(IF APPLICABLE)
                                    </td>
                                    <td>
                                        68578
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        SCHOOL CODE (IF APPLICABLE)
                                    </td>
                                    <td>
                                        65845
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        COMPLETE ADDRESS WITH PIN CODE
                                    </td>
                                    <td>
                                        LEH LADAKH
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        PRINCIPAL NAME &amp; QUALIFICATION:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        SCHOOL EMAIL ID
                                    </td>
                                    <td>
                                        mahabodhiresidentialschool@gmail.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        CONTACT DETAILS (LANDLINE/MOBILE)
                                    </td>
                                    <td>
                                        +1982-00000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\"text-align:left;\"><strong>B:</strong> <span><strong><u>DOCUMENTS AND INFORMATION:</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>DOCUMENTS/INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>VIEW DOCUMENTS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/documents-and-information/affiliation-upgradation.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/documents-and-information/society-registration-certificate.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/documents-and-information/noc.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/documents-and-information/building.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/documents-and-information/fire-safety.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATIONOR SELF CERTIFICATION BY SCHOOL
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/documents-and-information/b7.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/documents-and-information/drinking-water.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <br>
                        <div style=\"text-align:left;\"><strong>C:</strong> <span><strong><u>RESULT AND ACADEMICS:</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>DOCUMENTS/INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>VIEW DOCUMENTS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        FEE STRUCTURE OF THE SCHOOL
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/result-and-academics/fee-structure.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        ANNUAL ACADEMIC CALANDER.
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/result-and-academics/calendar.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/result-and-academics/smc.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/result-and-academics/parents-teachers-association-members.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABLILITY
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/result-and-academics/class-x-result-2020-2021.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        SCHOOL TRANSFER CERTIFICATE SAMPLE
                                    </td>
                                    <td>
                                        <a href=\"{{ 'storage/app/media/cbse-mandatory-disclosure/result-and-academics/transfer-certificate.pdf'}}\" target=\"_blank\">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div style=\"text-align:left;\"><strong>RESULT CLASS: X</strong></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>YEAR</strong>
                                    </td>
                                    <td>
                                        <strong> NO. OF REGISTERED STUDENTS</strong>
                                    </td>
                                    <td>
                                        <strong> NO. OF STUDENTS PASSED </strong>
                                    </td>
                                    <td>
                                        <strong> PASS PERCENTAGE</strong>
                                    </td>
                                    <td>
                                        <strong> REMARKS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        2020-2021
                                    </td>
                                    <td>
                                        32
                                    </td>
                                    <td>
                                        32
                                    </td>
                                    <td>
                                        100
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <br>
                        <div style=\"text-align:left;\"><strong>D:</strong> <span><strong><u>STAFF (TEACHING)</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>DETAILS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        PRINCIPAL
                                    </td>
                                    <td>
                                        1
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        VICE PRINCIPAL
                                    </td>
                                    <td>
                                        1
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>TOTAL NO. OF TEACHERS
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>PGT</td>
                                                </tr>
                                                <tr>
                                                    <td>TGT</td>
                                                </tr>
                                                <tr>
                                                    <td>PRT</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        25
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        TEACHERS SECTION RATIO
                                    </td>
                                    <td>
                                        16:1
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        DETAILS OF SPECIAL EDUCATOR
                                    </td>
                                    <td>
                                        Not Applicable
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        DETAILS OF COUNSELLOR AND WELNESS TEACHER
                                    </td>
                                    <td>
                                        Not Applicable
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div style=\"text-align:left;\"><strong>E:</strong> <span><strong><u>SCHOOL INFRASTRUCTURE:</u></strong></span></div>
                        <table class=\"table table-stripped\">
                            <thead style=\"background-color:#1f92da; color:white;font-size:14px;\">
                                <tr>
                                    <td>
                                        <strong>S.NO.</strong>
                                    </td>
                                    <td>
                                        <strong>INFORMATION</strong>
                                    </td>
                                    <td>
                                        <strong>DETAILS</strong>
                                    </td>
                                </tr>
                            </thead>
            
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)
                                    </td>
                                    <td>
                                        60703 Sq.mts.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        NO. AND SIZE OF THE CLASS ROOMS (IN SQ MTR)
                                    </td>
                                    <td>
                                        18 Rooms
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR
                                    </td>
                                    <td>
                                        5 Rooms (50.424 sq mtr)
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        INTERNET FACILITY (Y/N)
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        NO. OF GIRLS TOILETS
                                    </td>
                                    <td>
                                        15
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        NO. OF BOYS TOILETS
                                    </td>
                                    <td>
                                        10
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!--  .col-md-9 -->

        <div class=\"col-md-3 d-none d-xs-none d-sm-block\">
            {% partial 'sidebar/about' %} 
            {% partial 'sidebar/useful-links' %}
        </div>
        <!--  .col-md-3 -->
    </div>
    <!--  .row -->
</div>
<!--  .container -->", "C:\\laragon\\www\\mrsl1/themes/demo5/pages/cbse-mandatory-disclosure.htm", "");
    }
}
