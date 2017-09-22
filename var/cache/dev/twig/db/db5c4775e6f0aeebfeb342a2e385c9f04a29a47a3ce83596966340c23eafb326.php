<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6508c3cde17dfcadb2aab69f3bdedac3e9ba00c6c454368f010d10385daf6b34 extends Twig_Template
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
        $__internal_768d150edf472874fb691ecfd4171b025ba0cea618575a7cc3effef6b5fec1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768d150edf472874fb691ecfd4171b025ba0cea618575a7cc3effef6b5fec1e4->enter($__internal_768d150edf472874fb691ecfd4171b025ba0cea618575a7cc3effef6b5fec1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_768d150edf472874fb691ecfd4171b025ba0cea618575a7cc3effef6b5fec1e4->leave($__internal_768d150edf472874fb691ecfd4171b025ba0cea618575a7cc3effef6b5fec1e4_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_142e5e65b9e579d5e19a7e68d01c428825e07445186d0fca2e55f1a7eea298eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142e5e65b9e579d5e19a7e68d01c428825e07445186d0fca2e55f1a7eea298eb->enter($__internal_142e5e65b9e579d5e19a7e68d01c428825e07445186d0fca2e55f1a7eea298eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_142e5e65b9e579d5e19a7e68d01c428825e07445186d0fca2e55f1a7eea298eb->leave($__internal_142e5e65b9e579d5e19a7e68d01c428825e07445186d0fca2e55f1a7eea298eb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a85d10096f45bb22ada07640537b6723c170b161114bf5399973451b33d5367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a85d10096f45bb22ada07640537b6723c170b161114bf5399973451b33d5367->enter($__internal_6a85d10096f45bb22ada07640537b6723c170b161114bf5399973451b33d5367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a85d10096f45bb22ada07640537b6723c170b161114bf5399973451b33d5367->leave($__internal_6a85d10096f45bb22ada07640537b6723c170b161114bf5399973451b33d5367_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32b20007fc2a76c4bd3c658b09755fa16af5e594b22da0ee723b690675493cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b20007fc2a76c4bd3c658b09755fa16af5e594b22da0ee723b690675493cf1->enter($__internal_32b20007fc2a76c4bd3c658b09755fa16af5e594b22da0ee723b690675493cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "\t\t\t\t";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t\t";
        
        $__internal_32b20007fc2a76c4bd3c658b09755fa16af5e594b22da0ee723b690675493cf1->leave($__internal_32b20007fc2a76c4bd3c658b09755fa16af5e594b22da0ee723b690675493cf1_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_647d085ce0b5d93926c03696c4a46219355a566298c2588d86245dbc147ffb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647d085ce0b5d93926c03696c4a46219355a566298c2588d86245dbc147ffb26->enter($__internal_647d085ce0b5d93926c03696c4a46219355a566298c2588d86245dbc147ffb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_647d085ce0b5d93926c03696c4a46219355a566298c2588d86245dbc147ffb26->leave($__internal_647d085ce0b5d93926c03696c4a46219355a566298c2588d86245dbc147ffb26_prof);

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
