<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9c7e27b00694613238f617b1e10cac0f2e77fa00778450864e12e099eb58e803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_fe13b7351d12902826e9c1b64408d7dbe1befca49b95f8ac13d23c8fbe06a235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe13b7351d12902826e9c1b64408d7dbe1befca49b95f8ac13d23c8fbe06a235->enter($__internal_fe13b7351d12902826e9c1b64408d7dbe1befca49b95f8ac13d23c8fbe06a235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe13b7351d12902826e9c1b64408d7dbe1befca49b95f8ac13d23c8fbe06a235->leave($__internal_fe13b7351d12902826e9c1b64408d7dbe1befca49b95f8ac13d23c8fbe06a235_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cbaf8ef78f16a890d47e9666c85bfc9eeb801ff264ce0fd70e98b61766ec60ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbaf8ef78f16a890d47e9666c85bfc9eeb801ff264ce0fd70e98b61766ec60ad->enter($__internal_cbaf8ef78f16a890d47e9666c85bfc9eeb801ff264ce0fd70e98b61766ec60ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cbaf8ef78f16a890d47e9666c85bfc9eeb801ff264ce0fd70e98b61766ec60ad->leave($__internal_cbaf8ef78f16a890d47e9666c85bfc9eeb801ff264ce0fd70e98b61766ec60ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd72fa9f3bb346adf28866d562d5635e8fce866a02154b5a2eda62712e13efb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd72fa9f3bb346adf28866d562d5635e8fce866a02154b5a2eda62712e13efb3->enter($__internal_bd72fa9f3bb346adf28866d562d5635e8fce866a02154b5a2eda62712e13efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd72fa9f3bb346adf28866d562d5635e8fce866a02154b5a2eda62712e13efb3->leave($__internal_bd72fa9f3bb346adf28866d562d5635e8fce866a02154b5a2eda62712e13efb3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4970a1d3a5b5f3a51ff756f6e74f215d697f289947d761854583a61a8204ddc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4970a1d3a5b5f3a51ff756f6e74f215d697f289947d761854583a61a8204ddc1->enter($__internal_4970a1d3a5b5f3a51ff756f6e74f215d697f289947d761854583a61a8204ddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4970a1d3a5b5f3a51ff756f6e74f215d697f289947d761854583a61a8204ddc1->leave($__internal_4970a1d3a5b5f3a51ff756f6e74f215d697f289947d761854583a61a8204ddc1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
