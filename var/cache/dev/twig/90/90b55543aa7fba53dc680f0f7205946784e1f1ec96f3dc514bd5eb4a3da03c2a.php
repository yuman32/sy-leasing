<?php

/* admin/search/searchView.html.twig */
class __TwigTemplate_4484838ef9973abba7e23b776675250343627cba0e6d361f9b5582fcbc995b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/search/searchView.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_212a3e715b422706268e8bffd9f268e7fb2d0e2b9ed8cb2383e8d805b6632c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212a3e715b422706268e8bffd9f268e7fb2d0e2b9ed8cb2383e8d805b6632c59->enter($__internal_212a3e715b422706268e8bffd9f268e7fb2d0e2b9ed8cb2383e8d805b6632c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/search/searchView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212a3e715b422706268e8bffd9f268e7fb2d0e2b9ed8cb2383e8d805b6632c59->leave($__internal_212a3e715b422706268e8bffd9f268e7fb2d0e2b9ed8cb2383e8d805b6632c59_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_75692520999ebf50778371e45794a27fc4edadcb58cc0bad8fac2f83feb9d37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75692520999ebf50778371e45794a27fc4edadcb58cc0bad8fac2f83feb9d37b->enter($__internal_75692520999ebf50778371e45794a27fc4edadcb58cc0bad8fac2f83feb9d37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_75692520999ebf50778371e45794a27fc4edadcb58cc0bad8fac2f83feb9d37b->leave($__internal_75692520999ebf50778371e45794a27fc4edadcb58cc0bad8fac2f83feb9d37b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_152374572c39ebaf72dc61351838fd7837733cfe1b353b2ae83f2ba497b59442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152374572c39ebaf72dc61351838fd7837733cfe1b353b2ae83f2ba497b59442->enter($__internal_152374572c39ebaf72dc61351838fd7837733cfe1b353b2ae83f2ba497b59442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h3>Rechercher</h3>
    
   <form    action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_search");
        echo "\" method=\"post\" > 
     
         <div class=\"form-group\">

              <label >date 1:</label>
              <input type=\"date\" placeholder=\"date1\"   class=\"form-control\" name=\"date1\">

         </div>

         <div class=\"form-group\">

              <label >date 2:</label>
              <input type=\"date\" placeholder=\"date2\"   class=\"form-control\" name=\"date2\">

         </div>


              <input type=\"submit\"  style=\"border-radius: 15px;font-weight: bold;background:silver;\"  class=\"form-control\" value=\"valider\">

  </form>

    
";
        
        $__internal_152374572c39ebaf72dc61351838fd7837733cfe1b353b2ae83f2ba497b59442->leave($__internal_152374572c39ebaf72dc61351838fd7837733cfe1b353b2ae83f2ba497b59442_prof);

    }

    public function getTemplateName()
    {
        return "admin/search/searchView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block header %}
{% endblock %}

{% block body %}

<h3>Rechercher</h3>
    
   <form    action=\"{{ path('admin_search') }}\" method=\"post\" > 
     
         <div class=\"form-group\">

              <label >date 1:</label>
              <input type=\"date\" placeholder=\"date1\"   class=\"form-control\" name=\"date1\">

         </div>

         <div class=\"form-group\">

              <label >date 2:</label>
              <input type=\"date\" placeholder=\"date2\"   class=\"form-control\" name=\"date2\">

         </div>


              <input type=\"submit\"  style=\"border-radius: 15px;font-weight: bold;background:silver;\"  class=\"form-control\" value=\"valider\">

  </form>

    
{% endblock %}
", "admin/search/searchView.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\admin\\search\\searchView.html.twig");
    }
}
