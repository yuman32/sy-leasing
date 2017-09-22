<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_85335ab7f95e4467d1559a8f6c8d696c0697044baa4f7692e4aa9a31d9bba993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8e60824723d1e1f7b0fb06ab1237e14ffbffc0c5b4a36db7939acc402ead2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e60824723d1e1f7b0fb06ab1237e14ffbffc0c5b4a36db7939acc402ead2f7->enter($__internal_d8e60824723d1e1f7b0fb06ab1237e14ffbffc0c5b4a36db7939acc402ead2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e60824723d1e1f7b0fb06ab1237e14ffbffc0c5b4a36db7939acc402ead2f7->leave($__internal_d8e60824723d1e1f7b0fb06ab1237e14ffbffc0c5b4a36db7939acc402ead2f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c977b3ff6caee0ee6029a0364c36e0f189a16ccf464d5254f542478d65874b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c977b3ff6caee0ee6029a0364c36e0f189a16ccf464d5254f542478d65874b1e->enter($__internal_c977b3ff6caee0ee6029a0364c36e0f189a16ccf464d5254f542478d65874b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c977b3ff6caee0ee6029a0364c36e0f189a16ccf464d5254f542478d65874b1e->leave($__internal_c977b3ff6caee0ee6029a0364c36e0f189a16ccf464d5254f542478d65874b1e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93a0e204c14a40e67502be9670fdf64ff229afeaecb6f58f0818a59827fcfa9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a0e204c14a40e67502be9670fdf64ff229afeaecb6f58f0818a59827fcfa9c->enter($__internal_93a0e204c14a40e67502be9670fdf64ff229afeaecb6f58f0818a59827fcfa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93a0e204c14a40e67502be9670fdf64ff229afeaecb6f58f0818a59827fcfa9c->leave($__internal_93a0e204c14a40e67502be9670fdf64ff229afeaecb6f58f0818a59827fcfa9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55105d95c86712934cbdf4ea6fed4205cd60a9aa5714aac25caacd01b01d8125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55105d95c86712934cbdf4ea6fed4205cd60a9aa5714aac25caacd01b01d8125->enter($__internal_55105d95c86712934cbdf4ea6fed4205cd60a9aa5714aac25caacd01b01d8125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_55105d95c86712934cbdf4ea6fed4205cd60a9aa5714aac25caacd01b01d8125->leave($__internal_55105d95c86712934cbdf4ea6fed4205cd60a9aa5714aac25caacd01b01d8125_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
