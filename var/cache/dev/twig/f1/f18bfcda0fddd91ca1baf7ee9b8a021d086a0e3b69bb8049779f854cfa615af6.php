<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_184ba75b9149ecfd858e087a98e3e53e52e4966ae793006bb2f1464b65f9ab8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_c70d77d56d37158028c488f05145b2c166f779ea4f75de1730dbefd46b6f317e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70d77d56d37158028c488f05145b2c166f779ea4f75de1730dbefd46b6f317e->enter($__internal_c70d77d56d37158028c488f05145b2c166f779ea4f75de1730dbefd46b6f317e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c70d77d56d37158028c488f05145b2c166f779ea4f75de1730dbefd46b6f317e->leave($__internal_c70d77d56d37158028c488f05145b2c166f779ea4f75de1730dbefd46b6f317e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e29df67b19a882e1681ff1dadea5b7f49eb8af9ab7f72f75c20dbd356be94f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29df67b19a882e1681ff1dadea5b7f49eb8af9ab7f72f75c20dbd356be94f47->enter($__internal_e29df67b19a882e1681ff1dadea5b7f49eb8af9ab7f72f75c20dbd356be94f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e29df67b19a882e1681ff1dadea5b7f49eb8af9ab7f72f75c20dbd356be94f47->leave($__internal_e29df67b19a882e1681ff1dadea5b7f49eb8af9ab7f72f75c20dbd356be94f47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
