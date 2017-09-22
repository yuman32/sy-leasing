<?php

/* :memberaccount:edit.html.twig */
class __TwigTemplate_dd4eaec016b71af86a2b213f249da5b1c4aeaa368d93dc304a80ffcf26375dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":memberaccount:edit.html.twig", 1);
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
        $__internal_060bc3c9023f6622ad003d3c6cb27b537cfeaf7b5107e40dd7dc988c36441506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060bc3c9023f6622ad003d3c6cb27b537cfeaf7b5107e40dd7dc988c36441506->enter($__internal_060bc3c9023f6622ad003d3c6cb27b537cfeaf7b5107e40dd7dc988c36441506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":memberaccount:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060bc3c9023f6622ad003d3c6cb27b537cfeaf7b5107e40dd7dc988c36441506->leave($__internal_060bc3c9023f6622ad003d3c6cb27b537cfeaf7b5107e40dd7dc988c36441506_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44323a0c1ba521dc22142a5ad1728613ccb9f8b97f69088328aad3470e0d134f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44323a0c1ba521dc22142a5ad1728613ccb9f8b97f69088328aad3470e0d134f->enter($__internal_44323a0c1ba521dc22142a5ad1728613ccb9f8b97f69088328aad3470e0d134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Memberaccount edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_details_index");
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
        
        $__internal_44323a0c1ba521dc22142a5ad1728613ccb9f8b97f69088328aad3470e0d134f->leave($__internal_44323a0c1ba521dc22142a5ad1728613ccb9f8b97f69088328aad3470e0d134f_prof);

    }

    public function getTemplateName()
    {
        return ":memberaccount:edit.html.twig";
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
    <h1>Memberaccount edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('member_details_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":memberaccount:edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/memberaccount/edit.html.twig");
    }
}
