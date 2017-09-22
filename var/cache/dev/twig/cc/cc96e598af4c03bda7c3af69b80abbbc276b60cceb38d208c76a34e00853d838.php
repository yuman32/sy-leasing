<?php

/* :admin/product:new.html.twig */
class __TwigTemplate_5ac9963584f18989aa1fc2bf1c8397a297acaf17563fcfe75bbe429274980be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/product:new.html.twig", 1);
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
        $__internal_3b8a9382f029dec72133f53c901e7171b70cd4fff77e9285ebbc8344a53a4d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8a9382f029dec72133f53c901e7171b70cd4fff77e9285ebbc8344a53a4d10->enter($__internal_3b8a9382f029dec72133f53c901e7171b70cd4fff77e9285ebbc8344a53a4d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/product:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b8a9382f029dec72133f53c901e7171b70cd4fff77e9285ebbc8344a53a4d10->leave($__internal_3b8a9382f029dec72133f53c901e7171b70cd4fff77e9285ebbc8344a53a4d10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92f2ae049bb655c8a2b69df52c66f311748336b0888d993ea4e88a98782f9914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f2ae049bb655c8a2b69df52c66f311748336b0888d993ea4e88a98782f9914->enter($__internal_92f2ae049bb655c8a2b69df52c66f311748336b0888d993ea4e88a98782f9914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminproduct_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_92f2ae049bb655c8a2b69df52c66f311748336b0888d993ea4e88a98782f9914->leave($__internal_92f2ae049bb655c8a2b69df52c66f311748336b0888d993ea4e88a98782f9914_prof);

    }

    public function getTemplateName()
    {
        return ":admin/product:new.html.twig";
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
    <h1>Product creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminproduct_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":admin/product:new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/admin/product/new.html.twig");
    }
}
