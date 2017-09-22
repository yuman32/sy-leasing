<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7590e8ceba83ae956597e1dfccaa51eb3a29fa0511d2d0319d1f3040c89b6c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fb1eb9fa7bfb1498c8a048b2e151f81c7e15522a8d09b637c0191fd1dbf0825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb1eb9fa7bfb1498c8a048b2e151f81c7e15522a8d09b637c0191fd1dbf0825->enter($__internal_3fb1eb9fa7bfb1498c8a048b2e151f81c7e15522a8d09b637c0191fd1dbf0825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb1eb9fa7bfb1498c8a048b2e151f81c7e15522a8d09b637c0191fd1dbf0825->leave($__internal_3fb1eb9fa7bfb1498c8a048b2e151f81c7e15522a8d09b637c0191fd1dbf0825_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d38086ab6f179f71951efdc54400c03c07f4596a2033d2783221982fe92f49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d38086ab6f179f71951efdc54400c03c07f4596a2033d2783221982fe92f49c->enter($__internal_2d38086ab6f179f71951efdc54400c03c07f4596a2033d2783221982fe92f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_2d38086ab6f179f71951efdc54400c03c07f4596a2033d2783221982fe92f49c->leave($__internal_2d38086ab6f179f71951efdc54400c03c07f4596a2033d2783221982fe92f49c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
