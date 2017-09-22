<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_351e17cefb414b6c9a3d056b0e2a94dcc3970d1f33b77a30d43083e339a2a2a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f51a955ffbe2c31395d6ce51307e0e99fc09a116e9c992855df36d81fac6f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f51a955ffbe2c31395d6ce51307e0e99fc09a116e9c992855df36d81fac6f04->enter($__internal_7f51a955ffbe2c31395d6ce51307e0e99fc09a116e9c992855df36d81fac6f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_7f51a955ffbe2c31395d6ce51307e0e99fc09a116e9c992855df36d81fac6f04->leave($__internal_7f51a955ffbe2c31395d6ce51307e0e99fc09a116e9c992855df36d81fac6f04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
