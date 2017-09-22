<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_90c457e451979fd562d075ec59f1fb1bffd52b0b793c93112929b23684d6fc15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c25134faf03413d345ab3c7a1dc84c8a2f86294131ff4e5d33c4c51e0d0db37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c25134faf03413d345ab3c7a1dc84c8a2f86294131ff4e5d33c4c51e0d0db37->enter($__internal_1c25134faf03413d345ab3c7a1dc84c8a2f86294131ff4e5d33c4c51e0d0db37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c25134faf03413d345ab3c7a1dc84c8a2f86294131ff4e5d33c4c51e0d0db37->leave($__internal_1c25134faf03413d345ab3c7a1dc84c8a2f86294131ff4e5d33c4c51e0d0db37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66cb92908f11e54445fd94fb7eae0c1437346a6c987bb6eaadf7aec6d92cab33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cb92908f11e54445fd94fb7eae0c1437346a6c987bb6eaadf7aec6d92cab33->enter($__internal_66cb92908f11e54445fd94fb7eae0c1437346a6c987bb6eaadf7aec6d92cab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_66cb92908f11e54445fd94fb7eae0c1437346a6c987bb6eaadf7aec6d92cab33->leave($__internal_66cb92908f11e54445fd94fb7eae0c1437346a6c987bb6eaadf7aec6d92cab33_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3df9925dbbc793041d23039cb2d91afaee837af4853cd5acbb7ba3c17217c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3df9925dbbc793041d23039cb2d91afaee837af4853cd5acbb7ba3c17217c08->enter($__internal_a3df9925dbbc793041d23039cb2d91afaee837af4853cd5acbb7ba3c17217c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a3df9925dbbc793041d23039cb2d91afaee837af4853cd5acbb7ba3c17217c08->leave($__internal_a3df9925dbbc793041d23039cb2d91afaee837af4853cd5acbb7ba3c17217c08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
