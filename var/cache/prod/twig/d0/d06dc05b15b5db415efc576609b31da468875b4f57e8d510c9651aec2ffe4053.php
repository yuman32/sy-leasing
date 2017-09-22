<?php

/* base.html.twig */
class __TwigTemplate_e75bfaefe162566ac9d06a0f9f4b3caad7163a5d7b0606b3443d5305374b4a0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    
</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"> LEASY </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\" >
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Catgories</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Products</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact us</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">About us</a>
                    </li>
                    ";
        // line 59
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "                        <li>
                            <a  href=\"#\">&nbsp;&nbsp;&nbsp; Welcome, ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "</a> 
                        </li>
                        <li>
                            <a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> Logout </a>
                        </li>
                        ";
        } else {
            // line 67
            echo "                        <li>
                            <a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> Signin </a>
                        </li>
                    ";
        }
        // line 71
        echo "                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    ";
        // line 78
        $this->displayBlock('header', $context, $blocks);
        // line 120
        echo "
    <!-- Page Content -->
    <div class=\"container\" >
        <div class=\"col-md-12\" style=\"min-height:450px;\">
            ";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "        </div>


        <hr>    

        <!-- Footer -->
<!--         <footer style=\"background-color: #333;height:40px;margin-bottom:0px;color:white;\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"col-md-9\">
                        <p>LEASY .Inc is not affiliated with the manufacturers of the items displayed. All trademarks, logos and brands    are the property of their respective owners. Items are subject to availability and may be sold and shipped by our third party suppliers.
                        </p>
                        
                    </div>
                    <div class=\"col-md-3\" style=\"text-align:right;line-height:40px;\">
                         Copyright &copy; Your Website 2017
                    </div>
                </div>
            </div>
        </footer> -->

        <footer class=\"container col-md-12\" style=\"margin-bottom:0px;\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"col-md-9\">
                        <p>LEASY .Inc is not affiliated with the manufacturers of the items displayed. All trademarks, logos and brands    are the property of their respective owners. Items are subject to availability and may be sold and shipped by our third party suppliers.
                        </p>
                        
                    </div>
                    <div class=\"col-md-3\" style=\"text-align:right;line-height:40px;\">
                         Copyright &copy; Your Website 2017
                    </div>
                </div>
            </div>
        </footer>

    <!-- /.container -->
    </div>



    ";
        // line 168
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "
</body>

</html>
";
    }

    // line 78
    public function block_header($context, array $blocks = array())
    {
        // line 79
        echo "    <!-- Header Carousel -->
        <header id=\"myCarousel\" class=\"carousel slide\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <div class=\"fill\" style=\"background-image:url('";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/img/wall.jpg"), "html", null, true);
        echo "');\"></div>
                    <div class=\"carousel-caption\">
                        <h2> <b> Own  your car now and pay later  </b> </h2>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"fill\" style=\"background-image:url('";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/img/wall3.jpg"), "html", null, true);
        echo "');\"></div>
                    <div class=\"carousel-caption\">
                        <h2> <b> Find best wearings </b>  </h2>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"fill\" style=\"background-image:url('";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/img/wall2.jpg"), "html", null, true);
        echo "');\"></div>
                    <div class=\"carousel-caption\">
                        <h2> <b> Own your game PSP now </b> </h2>
                    </div>
                </div> 
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                <span class=\"icon-prev\"></span>
            </a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                <span class=\"icon-next\"></span>
            </a>
        </header>

    ";
    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        // line 125
        echo "                
            ";
    }

    // line 168
    public function block_javascripts($context, array $blocks = array())
    {
        // line 169
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


        <!-- Script to Activate the Carousel -->
        <script>
        \$('.carousel').carousel({
            interval: 5000 //changes the speed
        })
            
            console.log(\$(\"#appbundle_purchase_amount\"));
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 173,  268 => 170,  265 => 169,  262 => 168,  257 => 125,  254 => 124,  233 => 103,  224 => 97,  215 => 91,  201 => 79,  198 => 78,  190 => 185,  188 => 168,  145 => 127,  143 => 124,  137 => 120,  135 => 78,  126 => 71,  120 => 68,  117 => 67,  111 => 64,  105 => 61,  102 => 60,  100 => 59,  89 => 51,  83 => 48,  77 => 45,  50 => 21,  44 => 18,  38 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\base.html.twig");
    }
}
