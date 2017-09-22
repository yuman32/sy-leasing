<?php

/* :admin/category:new.html.twig */
class __TwigTemplate_afb3ee9989cf29f3ab1ba77a50b8ad6c2e47b1ec634961e1e3773c031b67921d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/category:new.html.twig", 1);
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
        $__internal_ea71f15db79cafd495dbe49b90bd17d7e27f291b7d34a9aa0bba4f3071996ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea71f15db79cafd495dbe49b90bd17d7e27f291b7d34a9aa0bba4f3071996ce0->enter($__internal_ea71f15db79cafd495dbe49b90bd17d7e27f291b7d34a9aa0bba4f3071996ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea71f15db79cafd495dbe49b90bd17d7e27f291b7d34a9aa0bba4f3071996ce0->leave($__internal_ea71f15db79cafd495dbe49b90bd17d7e27f291b7d34a9aa0bba4f3071996ce0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc553f3ff085ca83ab16dd68ded9e03549ad6510acc9a8402923f683b48fdda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc553f3ff085ca83ab16dd68ded9e03549ad6510acc9a8402923f683b48fdda->enter($__internal_cbc553f3ff085ca83ab16dd68ded9e03549ad6510acc9a8402923f683b48fdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cbc553f3ff085ca83ab16dd68ded9e03549ad6510acc9a8402923f683b48fdda->leave($__internal_cbc553f3ff085ca83ab16dd68ded9e03549ad6510acc9a8402923f683b48fdda_prof);

    }

    public function getTemplateName()
    {
        return ":admin/category:new.html.twig";
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
", ":admin/category:new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/admin/category/new.html.twig");
    }
}
