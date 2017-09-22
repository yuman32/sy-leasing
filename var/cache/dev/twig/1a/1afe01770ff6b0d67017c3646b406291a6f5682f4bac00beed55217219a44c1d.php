<?php

/* :purchase:purchase.html.twig */
class __TwigTemplate_f90f254f4724db09c7dd7acac11fc725aa73586de2ba35ac336ff9b6786f64ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":purchase:purchase.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88f715a88cda17c553040cd3e8cf0540977f268000284b05377a4ade276d0434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f715a88cda17c553040cd3e8cf0540977f268000284b05377a4ade276d0434->enter($__internal_88f715a88cda17c553040cd3e8cf0540977f268000284b05377a4ade276d0434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":purchase:purchase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f715a88cda17c553040cd3e8cf0540977f268000284b05377a4ade276d0434->leave($__internal_88f715a88cda17c553040cd3e8cf0540977f268000284b05377a4ade276d0434_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_6c746422b7b296f0cff8f8e4bd233392099b025cd8189a6181ad8d27df64af6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c746422b7b296f0cff8f8e4bd233392099b025cd8189a6181ad8d27df64af6d->enter($__internal_6c746422b7b296f0cff8f8e4bd233392099b025cd8189a6181ad8d27df64af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6c746422b7b296f0cff8f8e4bd233392099b025cd8189a6181ad8d27df64af6d->leave($__internal_6c746422b7b296f0cff8f8e4bd233392099b025cd8189a6181ad8d27df64af6d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_179878de04f3ff25062ea98d8715072149a0cbae9c54c2d3a488489b58ce85c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179878de04f3ff25062ea98d8715072149a0cbae9c54c2d3a488489b58ce85c8->enter($__internal_179878de04f3ff25062ea98d8715072149a0cbae9c54c2d3a488489b58ce85c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Purchase
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-8\">
            -
        </div>
        <div class=\"col-md-4\">
            <h3>Send us a Message</h3>
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Create\" />
            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_179878de04f3ff25062ea98d8715072149a0cbae9c54c2d3a488489b58ce85c8->leave($__internal_179878de04f3ff25062ea98d8715072149a0cbae9c54c2d3a488489b58ce85c8_prof);

    }

    public function getTemplateName()
    {
        return ":purchase:purchase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  71 => 21,  67 => 20,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
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

{% block header %}
{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Purchase
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-8\">
            -
        </div>
        <div class=\"col-md-4\">
            <h3>Send us a Message</h3>
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" value=\"Create\" />
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", ":purchase:purchase.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/purchase/purchase.html.twig");
    }
}
