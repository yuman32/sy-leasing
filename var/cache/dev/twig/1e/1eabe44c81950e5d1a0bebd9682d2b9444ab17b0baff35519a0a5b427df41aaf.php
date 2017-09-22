<?php

/* :category:new.html.twig */
class __TwigTemplate_17f8e4ed6652eaed3095a73ceb74241819db32cf3604cdf1548bc649d426aa21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:new.html.twig", 1);
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
        $__internal_c05489bb7d0580858568ed88a52495d7211b96e86b2e3c088ac17afad1020fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05489bb7d0580858568ed88a52495d7211b96e86b2e3c088ac17afad1020fbb->enter($__internal_c05489bb7d0580858568ed88a52495d7211b96e86b2e3c088ac17afad1020fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05489bb7d0580858568ed88a52495d7211b96e86b2e3c088ac17afad1020fbb->leave($__internal_c05489bb7d0580858568ed88a52495d7211b96e86b2e3c088ac17afad1020fbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a7863ceea8004dc214ae39988c269d37e8c610127a7de0c383ff4fec438c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a7863ceea8004dc214ae39988c269d37e8c610127a7de0c383ff4fec438c17->enter($__internal_a2a7863ceea8004dc214ae39988c269d37e8c610127a7de0c383ff4fec438c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2a7863ceea8004dc214ae39988c269d37e8c610127a7de0c383ff4fec438c17->leave($__internal_a2a7863ceea8004dc214ae39988c269d37e8c610127a7de0c383ff4fec438c17_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
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
", ":category:new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/category/new.html.twig");
    }
}
