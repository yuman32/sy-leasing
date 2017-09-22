<?php

/* :admin/product:edit.html.twig */
class __TwigTemplate_ab56c05541c32d8d799daf4d985e016ad4e3e34c44d22306a571b71882d42045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/product:edit.html.twig", 1);
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
        $__internal_aeb62a7c3b8b5fb46a6b98bd02864c4e612b6027137dd0e051165157e83b5cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb62a7c3b8b5fb46a6b98bd02864c4e612b6027137dd0e051165157e83b5cf1->enter($__internal_aeb62a7c3b8b5fb46a6b98bd02864c4e612b6027137dd0e051165157e83b5cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb62a7c3b8b5fb46a6b98bd02864c4e612b6027137dd0e051165157e83b5cf1->leave($__internal_aeb62a7c3b8b5fb46a6b98bd02864c4e612b6027137dd0e051165157e83b5cf1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d26b434bb3da6c4e4dfd15a5beb58ac45928e0d245226d86c77c661e7846fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d26b434bb3da6c4e4dfd15a5beb58ac45928e0d245226d86c77c661e7846fde->enter($__internal_3d26b434bb3da6c4e4dfd15a5beb58ac45928e0d245226d86c77c661e7846fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d26b434bb3da6c4e4dfd15a5beb58ac45928e0d245226d86c77c661e7846fde->leave($__internal_3d26b434bb3da6c4e4dfd15a5beb58ac45928e0d245226d86c77c661e7846fde_prof);

    }

    public function getTemplateName()
    {
        return ":admin/product:edit.html.twig";
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
", ":admin/product:edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/admin/product/edit.html.twig");
    }
}
