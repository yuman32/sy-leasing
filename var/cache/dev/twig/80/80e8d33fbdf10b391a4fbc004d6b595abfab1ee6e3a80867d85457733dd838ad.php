<?php

/* admin.html.twig */
class __TwigTemplate_4048aa5e364a6e08922b97b38d7b6a35d1febd69205ff6b0852ee7e928de13e3 extends Twig_Template
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
        $__internal_a1ef653c8268190ea32dc5ede2ec6c59266110112bd3f6a49beafe5eaad85972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ef653c8268190ea32dc5ede2ec6c59266110112bd3f6a49beafe5eaad85972->enter($__internal_a1ef653c8268190ea32dc5ede2ec6c59266110112bd3f6a49beafe5eaad85972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

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
      <li><a href=\"#\">Recherche</a></li>
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
        
        $__internal_a1ef653c8268190ea32dc5ede2ec6c59266110112bd3f6a49beafe5eaad85972->leave($__internal_a1ef653c8268190ea32dc5ede2ec6c59266110112bd3f6a49beafe5eaad85972_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_48740908d553a1963f26377f659baf346ef1fd4c5d37b5c0f2fdac54a290c454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48740908d553a1963f26377f659baf346ef1fd4c5d37b5c0f2fdac54a290c454->enter($__internal_48740908d553a1963f26377f659baf346ef1fd4c5d37b5c0f2fdac54a290c454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "                
            ";
        
        $__internal_48740908d553a1963f26377f659baf346ef1fd4c5d37b5c0f2fdac54a290c454->leave($__internal_48740908d553a1963f26377f659baf346ef1fd4c5d37b5c0f2fdac54a290c454_prof);

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
        return array (  87 => 32,  81 => 31,  66 => 34,  64 => 31,  51 => 21,  47 => 20,  28 => 4,  23 => 1,);
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
      <li><a href=\"#\">Recherche</a></li>
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
