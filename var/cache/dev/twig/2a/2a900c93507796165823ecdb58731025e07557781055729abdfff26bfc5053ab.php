<?php

/* admin.html.twig */
class __TwigTemplate_a65669ca480098ee519d52e04e7f45dc65dd0b0280d81b96dd95425845dc0bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecabccd31ca07c5423cac63f202cc88795d84f7f887da4ad8f91140f4abd65c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecabccd31ca07c5423cac63f202cc88795d84f7f887da4ad8f91140f4abd65c2->enter($__internal_ecabccd31ca07c5423cac63f202cc88795d84f7f887da4ad8f91140f4abd65c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<html>

<header>
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
</header>

<body>

<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\">Admin</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories");
        echo "\">Category</a></li>
      <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminproduct_index");
        echo "\">Produit</a></li>
      <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_search");
        echo "\">Recherche</a></li>
    </ul>
  </div>
</nav>


<h3 align=\"center\">Administration</h3>
<div class=\"container\" >
        <div class=\"col-md-12\" style=\"min-height:450px;\">
            ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        </div>
</div>


</body>



</html>";
        
        $__internal_ecabccd31ca07c5423cac63f202cc88795d84f7f887da4ad8f91140f4abd65c2->leave($__internal_ecabccd31ca07c5423cac63f202cc88795d84f7f887da4ad8f91140f4abd65c2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_24b38eb4ce73c236d1126180ce3fdae1d4bdafba3c231b6073d98beafdbb32bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b38eb4ce73c236d1126180ce3fdae1d4bdafba3c231b6073d98beafdbb32bc->enter($__internal_24b38eb4ce73c236d1126180ce3fdae1d4bdafba3c231b6073d98beafdbb32bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "                
            ";
        
        $__internal_24b38eb4ce73c236d1126180ce3fdae1d4bdafba3c231b6073d98beafdbb32bc->leave($__internal_24b38eb4ce73c236d1126180ce3fdae1d4bdafba3c231b6073d98beafdbb32bc_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  84 => 31,  69 => 34,  67 => 31,  55 => 22,  51 => 21,  47 => 20,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>

<header>
 <link href=\"{{ asset('design/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
</header>

<body>

<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\">Admin</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li><a href=\"{{path('admin_categories')}}\">Category</a></li>
      <li><a href=\"{{path('adminproduct_index')}}\">Produit</a></li>
      <li><a href=\"{{path('admin_search')}}\">Recherche</a></li>
    </ul>
  </div>
</nav>


<h3 align=\"center\">Administration</h3>
<div class=\"container\" >
        <div class=\"col-md-12\" style=\"min-height:450px;\">
            {% block body %}
                
            {% endblock %}
        </div>
</div>


</body>



</html>", "admin.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\admin.html.twig");
    }
}
