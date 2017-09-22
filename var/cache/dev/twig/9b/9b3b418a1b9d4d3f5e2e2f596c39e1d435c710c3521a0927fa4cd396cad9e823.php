<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c73add8645afaae4faa0cca9f7e0835c3bffeb9a3a325b6f5537552e2aa03782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5010f311ce408a6b994b61f0e2f2194d48356e2ad06a17f35ee57da700c020bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5010f311ce408a6b994b61f0e2f2194d48356e2ad06a17f35ee57da700c020bc->enter($__internal_5010f311ce408a6b994b61f0e2f2194d48356e2ad06a17f35ee57da700c020bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5010f311ce408a6b994b61f0e2f2194d48356e2ad06a17f35ee57da700c020bc->leave($__internal_5010f311ce408a6b994b61f0e2f2194d48356e2ad06a17f35ee57da700c020bc_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_32edd81388a01a439538747112e25ca638f7c05b10ca4190b7a474fad46faa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32edd81388a01a439538747112e25ca638f7c05b10ca4190b7a474fad46faa10->enter($__internal_32edd81388a01a439538747112e25ca638f7c05b10ca4190b7a474fad46faa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_32edd81388a01a439538747112e25ca638f7c05b10ca4190b7a474fad46faa10->leave($__internal_32edd81388a01a439538747112e25ca638f7c05b10ca4190b7a474fad46faa10_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5ea7e1deb1b843f2ca05f69c83030044b0c475c8f6de132080962f7c99bfb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ea7e1deb1b843f2ca05f69c83030044b0c475c8f6de132080962f7c99bfb98->enter($__internal_a5ea7e1deb1b843f2ca05f69c83030044b0c475c8f6de132080962f7c99bfb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"row\">
\t\t";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 45
        echo "\t</div>
";
        
        $__internal_a5ea7e1deb1b843f2ca05f69c83030044b0c475c8f6de132080962f7c99bfb98->leave($__internal_a5ea7e1deb1b843f2ca05f69c83030044b0c475c8f6de132080962f7c99bfb98_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d378ce8257afbae7ff008e5f1a67f8133f19d9940f8608f20c9fcf45fc234b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d378ce8257afbae7ff008e5f1a67f8133f19d9940f8608f20c9fcf45fc234b4->enter($__internal_2d378ce8257afbae7ff008e5f1a67f8133f19d9940f8608f20c9fcf45fc234b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t\t";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 12
        echo "
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<div class=\"panel panel-default\" style=\"margin-top:30px;\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\"> Login into your account before purchase or 
\t                <span class=\"label label-success\"><a style=\"color:white;\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"> SIgn up here  </a> </span></h3>
\t            </div>
\t            <div class=\"panel-body\">
\t            \t<form class=\"horizontal-form col-md-6 col-md-offset-3\" action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t\t    <label for=\"username\"> Username </label>
\t\t\t\t\t    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

\t\t\t\t\t    <label for=\"password\"> Password </label>
\t\t\t\t\t    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t    <label for=\"remember_me\"> Remember me </label>
\t\t\t\t\t    <br/>

\t\t\t\t\t    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Sign in\" />
\t\t\t\t\t</form>
\t            </div>
\t            
\t        </div>
\t\t</div>




\t\t
\t\t";
        
        $__internal_2d378ce8257afbae7ff008e5f1a67f8133f19d9940f8608f20c9fcf45fc234b4->leave($__internal_2d378ce8257afbae7ff008e5f1a67f8133f19d9940f8608f20c9fcf45fc234b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  98 => 21,  94 => 20,  88 => 17,  81 => 12,  75 => 10,  72 => 9,  66 => 8,  58 => 45,  56 => 8,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
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
\t<div class=\"row\">
\t\t{% block fos_user_content %}
\t\t{% if error %}
\t\t    <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
\t\t{% endif %}

\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<div class=\"panel panel-default\" style=\"margin-top:30px;\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\"> Login into your account before purchase or 
\t                <span class=\"label label-success\"><a style=\"color:white;\" href=\"{{ path('fos_user_registration_register') }}\"> SIgn up here  </a> </span></h3>
\t            </div>
\t            <div class=\"panel-body\">
\t            \t<form class=\"horizontal-form col-md-6 col-md-offset-3\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

\t\t\t\t\t    <label for=\"username\"> Username </label>
\t\t\t\t\t    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

\t\t\t\t\t    <label for=\"password\"> Password </label>
\t\t\t\t\t    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t    <label for=\"remember_me\"> Remember me </label>
\t\t\t\t\t    <br/>

\t\t\t\t\t    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Sign in\" />
\t\t\t\t\t</form>
\t            </div>
\t            
\t        </div>
\t\t</div>




\t\t
\t\t{% endblock fos_user_content %}
\t</div>
{% endblock %}", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
