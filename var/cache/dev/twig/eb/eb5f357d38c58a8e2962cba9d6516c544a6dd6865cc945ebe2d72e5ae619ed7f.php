<?php

/* memberaccount/edit.html.twig */
class __TwigTemplate_26109201457a5ae79a126fe1991c3aa696d5eb51ea8ece2e5c04475ecf636f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "memberaccount/edit.html.twig", 1);
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
        $__internal_0880430c771a73a9c6bf46e3a1ff1ab77acce6cc48272f535076015491d67c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0880430c771a73a9c6bf46e3a1ff1ab77acce6cc48272f535076015491d67c4b->enter($__internal_0880430c771a73a9c6bf46e3a1ff1ab77acce6cc48272f535076015491d67c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "memberaccount/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0880430c771a73a9c6bf46e3a1ff1ab77acce6cc48272f535076015491d67c4b->leave($__internal_0880430c771a73a9c6bf46e3a1ff1ab77acce6cc48272f535076015491d67c4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65cacd045e7d339107c1f16fa9768ac5b9a9cf02b540a628a3247dd60d1a346d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cacd045e7d339107c1f16fa9768ac5b9a9cf02b540a628a3247dd60d1a346d->enter($__internal_65cacd045e7d339107c1f16fa9768ac5b9a9cf02b540a628a3247dd60d1a346d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65cacd045e7d339107c1f16fa9768ac5b9a9cf02b540a628a3247dd60d1a346d->leave($__internal_65cacd045e7d339107c1f16fa9768ac5b9a9cf02b540a628a3247dd60d1a346d_prof);

    }

    public function getTemplateName()
    {
        return "memberaccount/edit.html.twig";
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
", "memberaccount/edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\memberaccount\\edit.html.twig");
    }
}
