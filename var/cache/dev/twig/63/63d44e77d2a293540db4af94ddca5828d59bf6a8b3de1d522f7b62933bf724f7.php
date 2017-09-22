<?php

/* :purchase:edit.html.twig */
class __TwigTemplate_e84e79ec2f339303b98babdee340a5f12869277c19b50de05f31a1760337dcd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":purchase:edit.html.twig", 1);
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
        $__internal_4ccb2ffdb8ed58fab7946a43c8186961d23ad0d991ea8d942fe0084738146bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccb2ffdb8ed58fab7946a43c8186961d23ad0d991ea8d942fe0084738146bdd->enter($__internal_4ccb2ffdb8ed58fab7946a43c8186961d23ad0d991ea8d942fe0084738146bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":purchase:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ccb2ffdb8ed58fab7946a43c8186961d23ad0d991ea8d942fe0084738146bdd->leave($__internal_4ccb2ffdb8ed58fab7946a43c8186961d23ad0d991ea8d942fe0084738146bdd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9210321a008dcc865fa614a1b16f4fb51f854f7b57a079d69b94bf000da63ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9210321a008dcc865fa614a1b16f4fb51f854f7b57a079d69b94bf000da63ade->enter($__internal_9210321a008dcc865fa614a1b16f4fb51f854f7b57a079d69b94bf000da63ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Purchase edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_index");
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
        
        $__internal_9210321a008dcc865fa614a1b16f4fb51f854f7b57a079d69b94bf000da63ade->leave($__internal_9210321a008dcc865fa614a1b16f4fb51f854f7b57a079d69b94bf000da63ade_prof);

    }

    public function getTemplateName()
    {
        return ":purchase:edit.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Purchase edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('purchase_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":purchase:edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/purchase/edit.html.twig");
    }
}
