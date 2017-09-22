<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_a9bb914ad870e23d661a23baf0de113a71e60d3099ced2c1f544f723dc6e4884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d7475b8a73b73da24a2756182533d88efa5e9f263b7b72d5fdca258f5aa98097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7475b8a73b73da24a2756182533d88efa5e9f263b7b72d5fdca258f5aa98097->enter($__internal_d7475b8a73b73da24a2756182533d88efa5e9f263b7b72d5fdca258f5aa98097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7475b8a73b73da24a2756182533d88efa5e9f263b7b72d5fdca258f5aa98097->leave($__internal_d7475b8a73b73da24a2756182533d88efa5e9f263b7b72d5fdca258f5aa98097_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be919fc7881c9dc75c1ee33739cbfa64f70fdfa271e9b0a20a3b9f7173a610a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be919fc7881c9dc75c1ee33739cbfa64f70fdfa271e9b0a20a3b9f7173a610a2->enter($__internal_be919fc7881c9dc75c1ee33739cbfa64f70fdfa271e9b0a20a3b9f7173a610a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_be919fc7881c9dc75c1ee33739cbfa64f70fdfa271e9b0a20a3b9f7173a610a2->leave($__internal_be919fc7881c9dc75c1ee33739cbfa64f70fdfa271e9b0a20a3b9f7173a610a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
