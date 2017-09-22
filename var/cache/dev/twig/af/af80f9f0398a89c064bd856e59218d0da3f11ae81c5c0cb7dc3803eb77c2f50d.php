<?php

/* admin/product/edit.html.twig */
class __TwigTemplate_4329638f885223bb8b7da0640843ab50fc07f3733e4c7b04fe70c4fc37570344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/product/edit.html.twig", 1);
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
        $__internal_b7b2edad6e03cdec22283a19ee53cd52b03ae0eb6b8e94f4972e9b6331188b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b2edad6e03cdec22283a19ee53cd52b03ae0eb6b8e94f4972e9b6331188b7f->enter($__internal_b7b2edad6e03cdec22283a19ee53cd52b03ae0eb6b8e94f4972e9b6331188b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/product/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b2edad6e03cdec22283a19ee53cd52b03ae0eb6b8e94f4972e9b6331188b7f->leave($__internal_b7b2edad6e03cdec22283a19ee53cd52b03ae0eb6b8e94f4972e9b6331188b7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2744f9753afd7818b07a643a3c42da45f291f12359ee484f0fe0b61610d8bb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2744f9753afd7818b07a643a3c42da45f291f12359ee484f0fe0b61610d8bb32->enter($__internal_2744f9753afd7818b07a643a3c42da45f291f12359ee484f0fe0b61610d8bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminproduct_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2744f9753afd7818b07a643a3c42da45f291f12359ee484f0fe0b61610d8bb32->leave($__internal_2744f9753afd7818b07a643a3c42da45f291f12359ee484f0fe0b61610d8bb32_prof);

    }

    public function getTemplateName()
    {
        return "admin/product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Product edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminproduct_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "admin/product/edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\admin\\product\\edit.html.twig");
    }
}
