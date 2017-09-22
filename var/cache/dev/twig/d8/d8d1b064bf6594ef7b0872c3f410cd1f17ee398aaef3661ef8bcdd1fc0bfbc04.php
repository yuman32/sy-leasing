<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b5ddf7d733a059545bbcc0628460aeb91e4c7e0ac7d820765ca7c4f368221490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9ee6d2040480c4f379f61f42783460f080f1a8dbf94ad37685b9b499dfe3b55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee6d2040480c4f379f61f42783460f080f1a8dbf94ad37685b9b499dfe3b55f->enter($__internal_9ee6d2040480c4f379f61f42783460f080f1a8dbf94ad37685b9b499dfe3b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ee6d2040480c4f379f61f42783460f080f1a8dbf94ad37685b9b499dfe3b55f->leave($__internal_9ee6d2040480c4f379f61f42783460f080f1a8dbf94ad37685b9b499dfe3b55f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4faa466b1e4648e442b347389d8817c0805ac22842aedb6e4f643bea2c62b539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faa466b1e4648e442b347389d8817c0805ac22842aedb6e4f643bea2c62b539->enter($__internal_4faa466b1e4648e442b347389d8817c0805ac22842aedb6e4f643bea2c62b539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4faa466b1e4648e442b347389d8817c0805ac22842aedb6e4f643bea2c62b539->leave($__internal_4faa466b1e4648e442b347389d8817c0805ac22842aedb6e4f643bea2c62b539_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
