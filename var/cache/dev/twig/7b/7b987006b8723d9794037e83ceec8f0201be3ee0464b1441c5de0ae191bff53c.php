<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_80a6d3b7556f2dd882e7fbbec70f1521445e23a0a7d452110e155b1a694f26c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_339d937b0c16b38333a264d792d488a2ae13a1955e2acee0a85a8b81cbff827e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339d937b0c16b38333a264d792d488a2ae13a1955e2acee0a85a8b81cbff827e->enter($__internal_339d937b0c16b38333a264d792d488a2ae13a1955e2acee0a85a8b81cbff827e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_339d937b0c16b38333a264d792d488a2ae13a1955e2acee0a85a8b81cbff827e->leave($__internal_339d937b0c16b38333a264d792d488a2ae13a1955e2acee0a85a8b81cbff827e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dbde499b3531b226743c6454e3828c56f34cd846ad0c7bbc62ec7124e623c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbde499b3531b226743c6454e3828c56f34cd846ad0c7bbc62ec7124e623c3c->enter($__internal_5dbde499b3531b226743c6454e3828c56f34cd846ad0c7bbc62ec7124e623c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5dbde499b3531b226743c6454e3828c56f34cd846ad0c7bbc62ec7124e623c3c->leave($__internal_5dbde499b3531b226743c6454e3828c56f34cd846ad0c7bbc62ec7124e623c3c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
