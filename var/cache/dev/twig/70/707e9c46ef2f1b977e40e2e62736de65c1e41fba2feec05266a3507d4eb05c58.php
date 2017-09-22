<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_434e67128790885ee46cac94212fb14bb0b8e59e014f9e1fb8d2d2fe39ec6ba7 extends Twig_Template
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
        $__internal_b73580af53ed65962f09abfc1920751362bb7a701cd73e2906e6397dfc2fbafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73580af53ed65962f09abfc1920751362bb7a701cd73e2906e6397dfc2fbafb->enter($__internal_b73580af53ed65962f09abfc1920751362bb7a701cd73e2906e6397dfc2fbafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b73580af53ed65962f09abfc1920751362bb7a701cd73e2906e6397dfc2fbafb->leave($__internal_b73580af53ed65962f09abfc1920751362bb7a701cd73e2906e6397dfc2fbafb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
