<?php

/* product/new.html.twig */
class __TwigTemplate_0c961f4e81c1f005dc206ad5b2661bac486c32c7f9f44a33ce0394d7bca23da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07f041213f9b3071ae6b4c9aff32f35351197a7d45de2b83709b99e482bbee8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f041213f9b3071ae6b4c9aff32f35351197a7d45de2b83709b99e482bbee8c->enter($__internal_07f041213f9b3071ae6b4c9aff32f35351197a7d45de2b83709b99e482bbee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f041213f9b3071ae6b4c9aff32f35351197a7d45de2b83709b99e482bbee8c->leave($__internal_07f041213f9b3071ae6b4c9aff32f35351197a7d45de2b83709b99e482bbee8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9060ef7fb935d2130bd92a8883396c16d3ea3d34d53d65ec935184186619a16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9060ef7fb935d2130bd92a8883396c16d3ea3d34d53d65ec935184186619a16c->enter($__internal_9060ef7fb935d2130bd92a8883396c16d3ea3d34d53d65ec935184186619a16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9060ef7fb935d2130bd92a8883396c16d3ea3d34d53d65ec935184186619a16c->leave($__internal_9060ef7fb935d2130bd92a8883396c16d3ea3d34d53d65ec935184186619a16c_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Product creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "product/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\product\\new.html.twig");
    }
}
