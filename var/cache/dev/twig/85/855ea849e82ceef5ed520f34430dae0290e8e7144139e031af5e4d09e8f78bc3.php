<?php

/* admin/category/new.html.twig */
class __TwigTemplate_972bd85186c9b7cfffcd4ddadeb4f21bf7e14432c293d8e135eb648d5a59ff1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/category/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16822a0f88d3a62cb10e3ba64856251ca5a21c59ac69248c7074ac84f2f4db4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16822a0f88d3a62cb10e3ba64856251ca5a21c59ac69248c7074ac84f2f4db4d->enter($__internal_16822a0f88d3a62cb10e3ba64856251ca5a21c59ac69248c7074ac84f2f4db4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16822a0f88d3a62cb10e3ba64856251ca5a21c59ac69248c7074ac84f2f4db4d->leave($__internal_16822a0f88d3a62cb10e3ba64856251ca5a21c59ac69248c7074ac84f2f4db4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e6e1a0c531329cdfd0660290753236eb849b2d01268b40cb02390a22d436b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6e1a0c531329cdfd0660290753236eb849b2d01268b40cb02390a22d436b5f->enter($__internal_2e6e1a0c531329cdfd0660290753236eb849b2d01268b40cb02390a22d436b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e6e1a0c531329cdfd0660290753236eb849b2d01268b40cb02390a22d436b5f->leave($__internal_2e6e1a0c531329cdfd0660290753236eb849b2d01268b40cb02390a22d436b5f_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/new.html.twig";
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
        return new Twig_Source("{% extends 'admin.html.twig' %}

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
", "admin/category/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\admin\\category\\new.html.twig");
    }
}
