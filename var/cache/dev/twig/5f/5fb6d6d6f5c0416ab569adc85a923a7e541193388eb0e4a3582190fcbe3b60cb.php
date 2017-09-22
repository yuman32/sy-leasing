<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_bb70f60988b2e5537b19074c1e806f1d9bbeffdf629081906d8a198f1c7a6601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_52a368e44fb136e3d52bd0da1099837cc557343317c71e2bacf5763c2b9aeaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a368e44fb136e3d52bd0da1099837cc557343317c71e2bacf5763c2b9aeaee->enter($__internal_52a368e44fb136e3d52bd0da1099837cc557343317c71e2bacf5763c2b9aeaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a368e44fb136e3d52bd0da1099837cc557343317c71e2bacf5763c2b9aeaee->leave($__internal_52a368e44fb136e3d52bd0da1099837cc557343317c71e2bacf5763c2b9aeaee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa918746b9512793a9588b2149ec206aae7e491294b4c986338c11a938ff86ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa918746b9512793a9588b2149ec206aae7e491294b4c986338c11a938ff86ec->enter($__internal_aa918746b9512793a9588b2149ec206aae7e491294b4c986338c11a938ff86ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_aa918746b9512793a9588b2149ec206aae7e491294b4c986338c11a938ff86ec->leave($__internal_aa918746b9512793a9588b2149ec206aae7e491294b4c986338c11a938ff86ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
