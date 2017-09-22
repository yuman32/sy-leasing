<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5123ea8f48dd0543e58155a52b150e7b630bae8039e29e126ad6cf707d5bf2f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e680e9d7389ceb0723374f66deefe1566c3bea7a8f46b7f56e0b118e4492e757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e680e9d7389ceb0723374f66deefe1566c3bea7a8f46b7f56e0b118e4492e757->enter($__internal_e680e9d7389ceb0723374f66deefe1566c3bea7a8f46b7f56e0b118e4492e757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e680e9d7389ceb0723374f66deefe1566c3bea7a8f46b7f56e0b118e4492e757->leave($__internal_e680e9d7389ceb0723374f66deefe1566c3bea7a8f46b7f56e0b118e4492e757_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb7333dda30340fe517b0a19e520a9ba824e489baea92795d4f95fb96f8b576a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7333dda30340fe517b0a19e520a9ba824e489baea92795d4f95fb96f8b576a->enter($__internal_eb7333dda30340fe517b0a19e520a9ba824e489baea92795d4f95fb96f8b576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_eb7333dda30340fe517b0a19e520a9ba824e489baea92795d4f95fb96f8b576a->leave($__internal_eb7333dda30340fe517b0a19e520a9ba824e489baea92795d4f95fb96f8b576a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
