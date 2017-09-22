<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_03d8dbdea8bcfe6979601a0944b083bff0791c120325cb1ff89f65c741bd02aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_a94dbd80cdba0b83e6459f4d86caaa2cb673a4f88585ef6e033fb66bf2e08e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94dbd80cdba0b83e6459f4d86caaa2cb673a4f88585ef6e033fb66bf2e08e00->enter($__internal_a94dbd80cdba0b83e6459f4d86caaa2cb673a4f88585ef6e033fb66bf2e08e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a94dbd80cdba0b83e6459f4d86caaa2cb673a4f88585ef6e033fb66bf2e08e00->leave($__internal_a94dbd80cdba0b83e6459f4d86caaa2cb673a4f88585ef6e033fb66bf2e08e00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ba4dc29c6501fcf7eb9ed8b3d042f8e33c61c082f602ec7bb6e5ad05ea9977f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba4dc29c6501fcf7eb9ed8b3d042f8e33c61c082f602ec7bb6e5ad05ea9977f->enter($__internal_8ba4dc29c6501fcf7eb9ed8b3d042f8e33c61c082f602ec7bb6e5ad05ea9977f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_8ba4dc29c6501fcf7eb9ed8b3d042f8e33c61c082f602ec7bb6e5ad05ea9977f->leave($__internal_8ba4dc29c6501fcf7eb9ed8b3d042f8e33c61c082f602ec7bb6e5ad05ea9977f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
