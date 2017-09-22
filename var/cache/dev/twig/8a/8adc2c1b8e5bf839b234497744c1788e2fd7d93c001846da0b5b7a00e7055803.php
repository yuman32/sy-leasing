<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_7b8fb20b1108b1836a29925ba3e97ea472472bb5ccb430097a9a8ac7420ed3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0a4c0b7f831b31e19b8de07f2c0dda65d2e9bbcf5505a07608146d67c785820c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4c0b7f831b31e19b8de07f2c0dda65d2e9bbcf5505a07608146d67c785820c->enter($__internal_0a4c0b7f831b31e19b8de07f2c0dda65d2e9bbcf5505a07608146d67c785820c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4c0b7f831b31e19b8de07f2c0dda65d2e9bbcf5505a07608146d67c785820c->leave($__internal_0a4c0b7f831b31e19b8de07f2c0dda65d2e9bbcf5505a07608146d67c785820c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b82d8acc79d7342579fd3ff32b33fcdf818b957d16a6731c95ca8c1195b0ecec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82d8acc79d7342579fd3ff32b33fcdf818b957d16a6731c95ca8c1195b0ecec->enter($__internal_b82d8acc79d7342579fd3ff32b33fcdf818b957d16a6731c95ca8c1195b0ecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b82d8acc79d7342579fd3ff32b33fcdf818b957d16a6731c95ca8c1195b0ecec->leave($__internal_b82d8acc79d7342579fd3ff32b33fcdf818b957d16a6731c95ca8c1195b0ecec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
