<?php

/* :product:new.html.twig */
class __TwigTemplate_c2e7fe61ec29be50c90ac25a3343b11eede5cd938686db38de9b05c7e2f0d5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:new.html.twig", 1);
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
        $__internal_04699a12126a3702c21b14e9130f47605ec3fd781a0e1332740b8ea2047e198c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04699a12126a3702c21b14e9130f47605ec3fd781a0e1332740b8ea2047e198c->enter($__internal_04699a12126a3702c21b14e9130f47605ec3fd781a0e1332740b8ea2047e198c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04699a12126a3702c21b14e9130f47605ec3fd781a0e1332740b8ea2047e198c->leave($__internal_04699a12126a3702c21b14e9130f47605ec3fd781a0e1332740b8ea2047e198c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e37385cd54f8e4cfa0fd1f71addfbba9f587f6a1ada6fe6dee9f61e9758ddcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e37385cd54f8e4cfa0fd1f71addfbba9f587f6a1ada6fe6dee9f61e9758ddcb->enter($__internal_1e37385cd54f8e4cfa0fd1f71addfbba9f587f6a1ada6fe6dee9f61e9758ddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1e37385cd54f8e4cfa0fd1f71addfbba9f587f6a1ada6fe6dee9f61e9758ddcb->leave($__internal_1e37385cd54f8e4cfa0fd1f71addfbba9f587f6a1ada6fe6dee9f61e9758ddcb_prof);

    }

    public function getTemplateName()
    {
        return ":product:new.html.twig";
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
    <h1>Product creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":product:new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/product/new.html.twig");
    }
}
