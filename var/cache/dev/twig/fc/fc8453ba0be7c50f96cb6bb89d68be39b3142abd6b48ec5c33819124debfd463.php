<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_575bde99a25a016530688421f727816c96ebcf33fc3e345f229cf68abf3f5748 extends Twig_Template
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
        $__internal_2fc3ca54fb0b4b9c0e3f50157e93562a1da1dfb4cb278293b55c6d3c6888dffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc3ca54fb0b4b9c0e3f50157e93562a1da1dfb4cb278293b55c6d3c6888dffb->enter($__internal_2fc3ca54fb0b4b9c0e3f50157e93562a1da1dfb4cb278293b55c6d3c6888dffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_2fc3ca54fb0b4b9c0e3f50157e93562a1da1dfb4cb278293b55c6d3c6888dffb->leave($__internal_2fc3ca54fb0b4b9c0e3f50157e93562a1da1dfb4cb278293b55c6d3c6888dffb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
