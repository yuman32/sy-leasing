<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c87632368afe73f3b481ea88a2b609c7730d18c192f7a808b771628ab13751e7 extends Twig_Template
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
        $__internal_58c7e787d7ad3c7e379dc36ca1fdab9a2ced80b27b920a4ab5a7dc6f145d34a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c7e787d7ad3c7e379dc36ca1fdab9a2ced80b27b920a4ab5a7dc6f145d34a6->enter($__internal_58c7e787d7ad3c7e379dc36ca1fdab9a2ced80b27b920a4ab5a7dc6f145d34a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_58c7e787d7ad3c7e379dc36ca1fdab9a2ced80b27b920a4ab5a7dc6f145d34a6->leave($__internal_58c7e787d7ad3c7e379dc36ca1fdab9a2ced80b27b920a4ab5a7dc6f145d34a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
