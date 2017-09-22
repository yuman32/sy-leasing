<?php

/* admin/product/new.html.twig */
class __TwigTemplate_a6bd2b6f01e723b33c289b89cc982d08c0644bf7fb94c1d45ac039ea3383f7f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/product/new.html.twig", 1);
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
        $__internal_e4e8977c151b17d97bd893286689ff5111d9da72e36686b0fb0e4a3ad0a16d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e8977c151b17d97bd893286689ff5111d9da72e36686b0fb0e4a3ad0a16d3d->enter($__internal_e4e8977c151b17d97bd893286689ff5111d9da72e36686b0fb0e4a3ad0a16d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e8977c151b17d97bd893286689ff5111d9da72e36686b0fb0e4a3ad0a16d3d->leave($__internal_e4e8977c151b17d97bd893286689ff5111d9da72e36686b0fb0e4a3ad0a16d3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6083fb46d05025772163687a89bd4879eaad68647bffb03f6fcbeb9578a89ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6083fb46d05025772163687a89bd4879eaad68647bffb03f6fcbeb9578a89ae9->enter($__internal_6083fb46d05025772163687a89bd4879eaad68647bffb03f6fcbeb9578a89ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6083fb46d05025772163687a89bd4879eaad68647bffb03f6fcbeb9578a89ae9->leave($__internal_6083fb46d05025772163687a89bd4879eaad68647bffb03f6fcbeb9578a89ae9_prof);

    }

    public function getTemplateName()
    {
        return "admin/product/new.html.twig";
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
", "admin/product/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\admin\\product\\new.html.twig");
    }
}
