<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d0ce2b94265d3cb81f9b183df94162e0b3db894a6985fa7ae5dbc108a1352bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd0468160e6acd5d1c3eff888eb3393e42980ab870f78c3bf7d14e8add2c8d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0468160e6acd5d1c3eff888eb3393e42980ab870f78c3bf7d14e8add2c8d72->enter($__internal_dd0468160e6acd5d1c3eff888eb3393e42980ab870f78c3bf7d14e8add2c8d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0468160e6acd5d1c3eff888eb3393e42980ab870f78c3bf7d14e8add2c8d72->leave($__internal_dd0468160e6acd5d1c3eff888eb3393e42980ab870f78c3bf7d14e8add2c8d72_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_dc10ba80aa45a191088809a929d8a55e6a93a79352f82f1f0486dcbc1cca3ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc10ba80aa45a191088809a929d8a55e6a93a79352f82f1f0486dcbc1cca3ad7->enter($__internal_dc10ba80aa45a191088809a929d8a55e6a93a79352f82f1f0486dcbc1cca3ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_dc10ba80aa45a191088809a929d8a55e6a93a79352f82f1f0486dcbc1cca3ad7->leave($__internal_dc10ba80aa45a191088809a929d8a55e6a93a79352f82f1f0486dcbc1cca3ad7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed4ec8ebcdbe7bf01aef3725546436f7fdf2c65e7acbd7afff693ccacc86ebe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4ec8ebcdbe7bf01aef3725546436f7fdf2c65e7acbd7afff693ccacc86ebe1->enter($__internal_ed4ec8ebcdbe7bf01aef3725546436f7fdf2c65e7acbd7afff693ccacc86ebe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"col-md-6 col-md-offset-3\">
\t\t<div class=\"panel panel-default\" style=\"margin-top:30px;\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> Create your account or 
                <span class=\"label label-success\"><a style=\"color:white;\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"> SIgn in here  </a> </span></h3>
            </div>
            <div class=\"panel-body\">

\t\t\t\t";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_ed4ec8ebcdbe7bf01aef3725546436f7fdf2c65e7acbd7afff693ccacc86ebe1->leave($__internal_ed4ec8ebcdbe7bf01aef3725546436f7fdf2c65e7acbd7afff693ccacc86ebe1_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94a7fadbd77c5bee93c083f63d426d8c5c9a5b7d6405c5173dc725f578596d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a7fadbd77c5bee93c083f63d426d8c5c9a5b7d6405c5173dc725f578596d4b->enter($__internal_94a7fadbd77c5bee93c083f63d426d8c5c9a5b7d6405c5173dc725f578596d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "\t\t\t\t";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t\t";
        
        $__internal_94a7fadbd77c5bee93c083f63d426d8c5c9a5b7d6405c5173dc725f578596d4b->leave($__internal_94a7fadbd77c5bee93c083f63d426d8c5c9a5b7d6405c5173dc725f578596d4b_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b95d1358e23aad21dbc8a3a3290d33ca7ca24c18963607779117c8f71c88a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b95d1358e23aad21dbc8a3a3290d33ca7ca24c18963607779117c8f71c88a06->enter($__internal_0b95d1358e23aad21dbc8a3a3290d33ca7ca24c18963607779117c8f71c88a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$('input').addClass('form-control');
\t\t\$('form').addClass('horizontal-form col-md-6 col-md-offset-3');
\t\t// alert('ff');
\t</script>

";
        
        $__internal_0b95d1358e23aad21dbc8a3a3290d33ca7ca24c18963607779117c8f71c88a06->leave($__internal_0b95d1358e23aad21dbc8a3a3290d33ca7ca24c18963607779117c8f71c88a06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  97 => 24,  90 => 17,  87 => 16,  81 => 15,  69 => 18,  67 => 15,  60 => 11,  54 => 7,  48 => 6,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header %}
{% endblock %}

{% block body %}
\t<div class=\"col-md-6 col-md-offset-3\">
\t\t<div class=\"panel panel-default\" style=\"margin-top:30px;\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> Create your account or 
                <span class=\"label label-success\"><a style=\"color:white;\" href=\"{{ path('fos_user_security_login') }}\"> SIgn in here  </a> </span></h3>
            </div>
            <div class=\"panel-body\">

\t\t\t\t{% block fos_user_content %}
\t\t\t\t{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
\t\t\t\t{% endblock fos_user_content %}
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}
{% block javascripts %}
\t{{ parent() }}
\t<script type=\"text/javascript\">
\t\t\$('input').addClass('form-control');
\t\t\$('form').addClass('horizontal-form col-md-6 col-md-offset-3');
\t\t// alert('ff');
\t</script>

{% endblock %}", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
