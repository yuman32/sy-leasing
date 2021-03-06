<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_52b5cf8c7f385e47a79e838ac802679495efd6899781727530df406b4b96c80d extends Twig_Template
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
        $__internal_d5fc4a7efa28dda2a1eaf2a4edad0ca3fd89d4debbfc50af577f39bb79c10d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fc4a7efa28dda2a1eaf2a4edad0ca3fd89d4debbfc50af577f39bb79c10d98->enter($__internal_d5fc4a7efa28dda2a1eaf2a4edad0ca3fd89d4debbfc50af577f39bb79c10d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5fc4a7efa28dda2a1eaf2a4edad0ca3fd89d4debbfc50af577f39bb79c10d98->leave($__internal_d5fc4a7efa28dda2a1eaf2a4edad0ca3fd89d4debbfc50af577f39bb79c10d98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c61334cf45416115e5cc329b9d303a739a5868c133c56c26253ba664346d683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c61334cf45416115e5cc329b9d303a739a5868c133c56c26253ba664346d683->enter($__internal_8c61334cf45416115e5cc329b9d303a739a5868c133c56c26253ba664346d683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c61334cf45416115e5cc329b9d303a739a5868c133c56c26253ba664346d683->leave($__internal_8c61334cf45416115e5cc329b9d303a739a5868c133c56c26253ba664346d683_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8e255726c20561dded6ceba500a76b0c82307f72b97fa933f8f0179fbb525db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e255726c20561dded6ceba500a76b0c82307f72b97fa933f8f0179fbb525db->enter($__internal_f8e255726c20561dded6ceba500a76b0c82307f72b97fa933f8f0179fbb525db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8e255726c20561dded6ceba500a76b0c82307f72b97fa933f8f0179fbb525db->leave($__internal_f8e255726c20561dded6ceba500a76b0c82307f72b97fa933f8f0179fbb525db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_548e892618bc94e67efb4700cea74b426bb5b0475fc976b1056b64ed354e00b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548e892618bc94e67efb4700cea74b426bb5b0475fc976b1056b64ed354e00b9->enter($__internal_548e892618bc94e67efb4700cea74b426bb5b0475fc976b1056b64ed354e00b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_548e892618bc94e67efb4700cea74b426bb5b0475fc976b1056b64ed354e00b9->leave($__internal_548e892618bc94e67efb4700cea74b426bb5b0475fc976b1056b64ed354e00b9_prof);

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
