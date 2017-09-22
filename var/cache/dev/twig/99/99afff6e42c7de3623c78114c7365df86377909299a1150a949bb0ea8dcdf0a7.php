<?php

/* base.html.twig */
class __TwigTemplate_3fa03899ae39107e35034b98144fcd655d995cb882a0d3a52ed71d996cb00144 extends Twig_Template
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
        $__internal_599115b41c18aa7f028cc6bd21cfab0bd1e62ff5cd4464790dda510227fdb23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599115b41c18aa7f028cc6bd21cfab0bd1e62ff5cd4464790dda510227fdb23e->enter($__internal_599115b41c18aa7f028cc6bd21cfab0bd1e62ff5cd4464790dda510227fdb23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_599115b41c18aa7f028cc6bd21cfab0bd1e62ff5cd4464790dda510227fdb23e->leave($__internal_599115b41c18aa7f028cc6bd21cfab0bd1e62ff5cd4464790dda510227fdb23e_prof);

    }

    // line 78
    public function block_header($context, array $blocks = array())
    {
        $__internal_7b04d681a0d705094b404c3bc3fae86234fb231d99bf68705a1a300f344c7808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b04d681a0d705094b404c3bc3fae86234fb231d99bf68705a1a300f344c7808->enter($__internal_7b04d681a0d705094b404c3bc3fae86234fb231d99bf68705a1a300f344c7808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_7b04d681a0d705094b404c3bc3fae86234fb231d99bf68705a1a300f344c7808->leave($__internal_7b04d681a0d705094b404c3bc3fae86234fb231d99bf68705a1a300f344c7808_prof);

    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        $__internal_b298508fe5fef154cd2cb75e8ba63cb98c6db1fd3d1e218bf7a2b8f9c6943153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b298508fe5fef154cd2cb75e8ba63cb98c6db1fd3d1e218bf7a2b8f9c6943153->enter($__internal_b298508fe5fef154cd2cb75e8ba63cb98c6db1fd3d1e218bf7a2b8f9c6943153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 125
        echo "                
            ";
        
        $__internal_b298508fe5fef154cd2cb75e8ba63cb98c6db1fd3d1e218bf7a2b8f9c6943153->leave($__internal_b298508fe5fef154cd2cb75e8ba63cb98c6db1fd3d1e218bf7a2b8f9c6943153_prof);

    }

    // line 168
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7e875fe65a9ae862355a5cf0f46d9b43163a2d199c556fa5d7bf12aabf2e603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e875fe65a9ae862355a5cf0f46d9b43163a2d199c556fa5d7bf12aabf2e603->enter($__internal_d7e875fe65a9ae862355a5cf0f46d9b43163a2d199c556fa5d7bf12aabf2e603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d7e875fe65a9ae862355a5cf0f46d9b43163a2d199c556fa5d7bf12aabf2e603->leave($__internal_d7e875fe65a9ae862355a5cf0f46d9b43163a2d199c556fa5d7bf12aabf2e603_prof);

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
        return array (  295 => 173,  289 => 170,  286 => 169,  280 => 168,  272 => 125,  266 => 124,  242 => 103,  233 => 97,  224 => 91,  210 => 79,  204 => 78,  193 => 185,  191 => 168,  148 => 127,  146 => 124,  140 => 120,  138 => 78,  129 => 71,  123 => 68,  120 => 67,  114 => 64,  108 => 61,  105 => 60,  103 => 59,  92 => 51,  86 => 48,  80 => 45,  53 => 21,  47 => 18,  41 => 15,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('design/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ asset('design/css/modern-business.css') }}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"{{ asset('design/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    
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
                        <a href=\"{{ path('homepage') }}\">Home</a>
                    </li>
                    <li>
                        <a href=\"{{ path('category_index') }}\">Catgories</a>
                    </li>
                    <li>
                        <a href=\"{{ path('product_index') }}\">Products</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact us</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">About us</a>
                    </li>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <li>
                            <a  href=\"#\">&nbsp;&nbsp;&nbsp; Welcome, {{ app.user.username }}</a> 
                        </li>
                        <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\"> Logout </a>
                        </li>
                        {% else %}
                        <li>
                            <a href=\"{{ path('fos_user_security_login') }}\"> Signin </a>
                        </li>
                    {% endif %}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    {% block header %}
    <!-- Header Carousel -->
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
                    <div class=\"fill\" style=\"background-image:url('{{ asset('design/img/wall.jpg')  }}');\"></div>
                    <div class=\"carousel-caption\">
                        <h2> <b> Own  your car now and pay later  </b> </h2>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"fill\" style=\"background-image:url('{{ asset('design/img/wall3.jpg')  }}');\"></div>
                    <div class=\"carousel-caption\">
                        <h2> <b> Find best wearings </b>  </h2>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"fill\" style=\"background-image:url('{{ asset('design/img/wall2.jpg')  }}');\"></div>
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

    {% endblock %}

    <!-- Page Content -->
    <div class=\"container\" >
        <div class=\"col-md-12\" style=\"min-height:450px;\">
            {% block body %}
                
            {% endblock %}
        </div>


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



    {% block javascripts %}
        <!-- jQuery -->
        <script src=\"{{ asset('design/js/jquery.js') }}\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"{{ asset('design/js/bootstrap.min.js') }}\"></script>


        <!-- Script to Activate the Carousel -->
        <script>
        \$('.carousel').carousel({
            interval: 5000 //changes the speed
        })
            
            console.log(\$(\"#appbundle_purchase_amount\"));
        </script>
    {% endblock %}

</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\base.html.twig");
    }
}
