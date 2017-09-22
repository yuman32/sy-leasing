<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_55d83dbad4af824809a4ea5b71033d2095cb8e196bc4c213e0da1d13dc774c12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_cbced84e8edc5d3c81227f5437000aefbc99555e52ccc67ee7214d25970864d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbced84e8edc5d3c81227f5437000aefbc99555e52ccc67ee7214d25970864d6->enter($__internal_cbced84e8edc5d3c81227f5437000aefbc99555e52ccc67ee7214d25970864d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbced84e8edc5d3c81227f5437000aefbc99555e52ccc67ee7214d25970864d6->leave($__internal_cbced84e8edc5d3c81227f5437000aefbc99555e52ccc67ee7214d25970864d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40dd4a49da3886cfc3dc2f3a813060c6b3457f8de74c65b4b723c44dc7b78780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dd4a49da3886cfc3dc2f3a813060c6b3457f8de74c65b4b723c44dc7b78780->enter($__internal_40dd4a49da3886cfc3dc2f3a813060c6b3457f8de74c65b4b723c44dc7b78780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_40dd4a49da3886cfc3dc2f3a813060c6b3457f8de74c65b4b723c44dc7b78780->leave($__internal_40dd4a49da3886cfc3dc2f3a813060c6b3457f8de74c65b4b723c44dc7b78780_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
