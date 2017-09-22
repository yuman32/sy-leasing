<?php

/* category/new.html.twig */
class __TwigTemplate_15271bf47b22193387ab00fce578ce28e8c78eec25ee0bc7c28a6e58a8d5f3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
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
        $__internal_d21c8ad0d70ffcef07583cb0073d5e50d94fb6e8a113f9851195942c5364455b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21c8ad0d70ffcef07583cb0073d5e50d94fb6e8a113f9851195942c5364455b->enter($__internal_d21c8ad0d70ffcef07583cb0073d5e50d94fb6e8a113f9851195942c5364455b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d21c8ad0d70ffcef07583cb0073d5e50d94fb6e8a113f9851195942c5364455b->leave($__internal_d21c8ad0d70ffcef07583cb0073d5e50d94fb6e8a113f9851195942c5364455b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfaa1e3b40ce048d3b0eb30c8115bf3736e9b32574fc3d9e1bff1e32ddd41070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfaa1e3b40ce048d3b0eb30c8115bf3736e9b32574fc3d9e1bff1e32ddd41070->enter($__internal_dfaa1e3b40ce048d3b0eb30c8115bf3736e9b32574fc3d9e1bff1e32ddd41070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_dfaa1e3b40ce048d3b0eb30c8115bf3736e9b32574fc3d9e1bff1e32ddd41070->leave($__internal_dfaa1e3b40ce048d3b0eb30c8115bf3736e9b32574fc3d9e1bff1e32ddd41070_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
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
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "category/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\category\\new.html.twig");
    }
}
