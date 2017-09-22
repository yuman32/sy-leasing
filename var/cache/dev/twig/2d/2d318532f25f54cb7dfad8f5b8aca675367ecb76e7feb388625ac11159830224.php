<?php

/* purchase/purchase.html.twig */
class __TwigTemplate_ecbef6865952d7b87ecf2093f5d2fd8c6bc0222f196643a2fc7f42f3a02b17a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "purchase/purchase.html.twig", 1);
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
        $__internal_882c64c5afa6a74418e9efeba6d9337db7a171db72709512e9512d95a5b8c767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882c64c5afa6a74418e9efeba6d9337db7a171db72709512e9512d95a5b8c767->enter($__internal_882c64c5afa6a74418e9efeba6d9337db7a171db72709512e9512d95a5b8c767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "purchase/purchase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882c64c5afa6a74418e9efeba6d9337db7a171db72709512e9512d95a5b8c767->leave($__internal_882c64c5afa6a74418e9efeba6d9337db7a171db72709512e9512d95a5b8c767_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_6085d2f53db87a89236d6a1c24cd49310611b668afd4fa18da865e9945289cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6085d2f53db87a89236d6a1c24cd49310611b668afd4fa18da865e9945289cbb->enter($__internal_6085d2f53db87a89236d6a1c24cd49310611b668afd4fa18da865e9945289cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6085d2f53db87a89236d6a1c24cd49310611b668afd4fa18da865e9945289cbb->leave($__internal_6085d2f53db87a89236d6a1c24cd49310611b668afd4fa18da865e9945289cbb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa2396af0bb946d2b0c115288c51c15fbdd8ad22ac75eac7ee929425287d7abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2396af0bb946d2b0c115288c51c15fbdd8ad22ac75eac7ee929425287d7abd->enter($__internal_aa2396af0bb946d2b0c115288c51c15fbdd8ad22ac75eac7ee929425287d7abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa2396af0bb946d2b0c115288c51c15fbdd8ad22ac75eac7ee929425287d7abd->leave($__internal_aa2396af0bb946d2b0c115288c51c15fbdd8ad22ac75eac7ee929425287d7abd_prof);

    }

    public function getTemplateName()
    {
        return "purchase/purchase.html.twig";
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
", "purchase/purchase.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\purchase\\purchase.html.twig");
    }
}
