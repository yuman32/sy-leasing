<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fd1849ee28679686e0655b69f53e1b1695091a8adf6f3d6c43991b2f40f3c4fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ef164ebcae8b15b8917a31fdf13a476ca2f48bbca1a2af6e82e8523cb62cbbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef164ebcae8b15b8917a31fdf13a476ca2f48bbca1a2af6e82e8523cb62cbbc3->enter($__internal_ef164ebcae8b15b8917a31fdf13a476ca2f48bbca1a2af6e82e8523cb62cbbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef164ebcae8b15b8917a31fdf13a476ca2f48bbca1a2af6e82e8523cb62cbbc3->leave($__internal_ef164ebcae8b15b8917a31fdf13a476ca2f48bbca1a2af6e82e8523cb62cbbc3_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c72889254151236f97368419001b806f1a8742a0fb458b11575d1671704f9403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72889254151236f97368419001b806f1a8742a0fb458b11575d1671704f9403->enter($__internal_c72889254151236f97368419001b806f1a8742a0fb458b11575d1671704f9403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_c72889254151236f97368419001b806f1a8742a0fb458b11575d1671704f9403->leave($__internal_c72889254151236f97368419001b806f1a8742a0fb458b11575d1671704f9403_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_60ed8d2d623fa0713afaefabeaad90f9a709858be09670b22110727ff0755e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ed8d2d623fa0713afaefabeaad90f9a709858be09670b22110727ff0755e24->enter($__internal_60ed8d2d623fa0713afaefabeaad90f9a709858be09670b22110727ff0755e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60ed8d2d623fa0713afaefabeaad90f9a709858be09670b22110727ff0755e24->leave($__internal_60ed8d2d623fa0713afaefabeaad90f9a709858be09670b22110727ff0755e24_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c98ce1ade07304683475486adf7ea9a1a1c47a8b05b40c35631c2599b548294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c98ce1ade07304683475486adf7ea9a1a1c47a8b05b40c35631c2599b548294->enter($__internal_5c98ce1ade07304683475486adf7ea9a1a1c47a8b05b40c35631c2599b548294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "\t\t\t\t";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t\t";
        
        $__internal_5c98ce1ade07304683475486adf7ea9a1a1c47a8b05b40c35631c2599b548294->leave($__internal_5c98ce1ade07304683475486adf7ea9a1a1c47a8b05b40c35631c2599b548294_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97ffa1e4eb5b17ca0f70ed32730c1489016ca852ccddb2e0480dacb7481d1ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ffa1e4eb5b17ca0f70ed32730c1489016ca852ccddb2e0480dacb7481d1ad3->enter($__internal_97ffa1e4eb5b17ca0f70ed32730c1489016ca852ccddb2e0480dacb7481d1ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_97ffa1e4eb5b17ca0f70ed32730c1489016ca852ccddb2e0480dacb7481d1ad3->leave($__internal_97ffa1e4eb5b17ca0f70ed32730c1489016ca852ccddb2e0480dacb7481d1ad3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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

{% endblock %}", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
