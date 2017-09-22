<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_37a09b7f0169632284d729a83dc5e71f26e66484d543d899feb6e8d239854b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_65b74e6d341311b5a72be4c0cec50dc5f77b428e7d53e1f9d3429497b8d15392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b74e6d341311b5a72be4c0cec50dc5f77b428e7d53e1f9d3429497b8d15392->enter($__internal_65b74e6d341311b5a72be4c0cec50dc5f77b428e7d53e1f9d3429497b8d15392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b74e6d341311b5a72be4c0cec50dc5f77b428e7d53e1f9d3429497b8d15392->leave($__internal_65b74e6d341311b5a72be4c0cec50dc5f77b428e7d53e1f9d3429497b8d15392_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a004301cdcc7ab3b15f92e6ad9764d89824cee27ca49ff12ea412e9e36329b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a004301cdcc7ab3b15f92e6ad9764d89824cee27ca49ff12ea412e9e36329b6d->enter($__internal_a004301cdcc7ab3b15f92e6ad9764d89824cee27ca49ff12ea412e9e36329b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a004301cdcc7ab3b15f92e6ad9764d89824cee27ca49ff12ea412e9e36329b6d->leave($__internal_a004301cdcc7ab3b15f92e6ad9764d89824cee27ca49ff12ea412e9e36329b6d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0793435b0237ee4e3f0102e4fa002a2fcae45ee158c6c0be5b5cee00abefa385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0793435b0237ee4e3f0102e4fa002a2fcae45ee158c6c0be5b5cee00abefa385->enter($__internal_0793435b0237ee4e3f0102e4fa002a2fcae45ee158c6c0be5b5cee00abefa385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0793435b0237ee4e3f0102e4fa002a2fcae45ee158c6c0be5b5cee00abefa385->leave($__internal_0793435b0237ee4e3f0102e4fa002a2fcae45ee158c6c0be5b5cee00abefa385_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e59b23cc049404ef62df9d404274613ffced2d4546e2a17c192281088afb7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e59b23cc049404ef62df9d404274613ffced2d4546e2a17c192281088afb7b5->enter($__internal_9e59b23cc049404ef62df9d404274613ffced2d4546e2a17c192281088afb7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9e59b23cc049404ef62df9d404274613ffced2d4546e2a17c192281088afb7b5->leave($__internal_9e59b23cc049404ef62df9d404274613ffced2d4546e2a17c192281088afb7b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
