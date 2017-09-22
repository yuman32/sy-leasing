<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2a1141d25c73e98413c6a9923038becdc0fd16083454da8391bb6f0ffc047bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd760d051bd268c76d1c6e903a1aad72e46530572f41178ccbe348d1390fc77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd760d051bd268c76d1c6e903a1aad72e46530572f41178ccbe348d1390fc77a->enter($__internal_cd760d051bd268c76d1c6e903a1aad72e46530572f41178ccbe348d1390fc77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cd760d051bd268c76d1c6e903a1aad72e46530572f41178ccbe348d1390fc77a->leave($__internal_cd760d051bd268c76d1c6e903a1aad72e46530572f41178ccbe348d1390fc77a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c59e69197f673ad3a7d9aa4f27efdac5ed348086f3cdbabae712ae5b83c95bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59e69197f673ad3a7d9aa4f27efdac5ed348086f3cdbabae712ae5b83c95bea->enter($__internal_c59e69197f673ad3a7d9aa4f27efdac5ed348086f3cdbabae712ae5b83c95bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c59e69197f673ad3a7d9aa4f27efdac5ed348086f3cdbabae712ae5b83c95bea->leave($__internal_c59e69197f673ad3a7d9aa4f27efdac5ed348086f3cdbabae712ae5b83c95bea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
