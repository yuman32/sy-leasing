<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_898829a8517a2d2e464bedf9b3d8fd12be5e1349f15afe59d752b908e962f0d6 extends Twig_Template
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
        $__internal_372a72efec2097073f2656ec8d01d14c2501d3c902b35d7a4cb34c41a5828721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372a72efec2097073f2656ec8d01d14c2501d3c902b35d7a4cb34c41a5828721->enter($__internal_372a72efec2097073f2656ec8d01d14c2501d3c902b35d7a4cb34c41a5828721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_372a72efec2097073f2656ec8d01d14c2501d3c902b35d7a4cb34c41a5828721->leave($__internal_372a72efec2097073f2656ec8d01d14c2501d3c902b35d7a4cb34c41a5828721_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
