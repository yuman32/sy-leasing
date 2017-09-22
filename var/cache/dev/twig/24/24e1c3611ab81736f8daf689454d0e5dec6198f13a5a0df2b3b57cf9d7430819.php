<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8a6c930b7a20565f3061618b6916355f97556c98fd3d09c4ca1f3fdc71130408 extends Twig_Template
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
        $__internal_0b35f743ff18cbd574628733de7806e3cccd7085c4da8d06f7db2ebf5d72d792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b35f743ff18cbd574628733de7806e3cccd7085c4da8d06f7db2ebf5d72d792->enter($__internal_0b35f743ff18cbd574628733de7806e3cccd7085c4da8d06f7db2ebf5d72d792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0b35f743ff18cbd574628733de7806e3cccd7085c4da8d06f7db2ebf5d72d792->leave($__internal_0b35f743ff18cbd574628733de7806e3cccd7085c4da8d06f7db2ebf5d72d792_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
