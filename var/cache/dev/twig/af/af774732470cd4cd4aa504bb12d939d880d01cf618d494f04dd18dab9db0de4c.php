<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_1c50a18dbc8c8341f764ba34ec4e7e2e148df572377b45599f961362ba7d0d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41482d990efaee6189ad880dfef5799934d0fa5639b47a7ce66095a77f617cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41482d990efaee6189ad880dfef5799934d0fa5639b47a7ce66095a77f617cba->enter($__internal_41482d990efaee6189ad880dfef5799934d0fa5639b47a7ce66095a77f617cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41482d990efaee6189ad880dfef5799934d0fa5639b47a7ce66095a77f617cba->leave($__internal_41482d990efaee6189ad880dfef5799934d0fa5639b47a7ce66095a77f617cba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a694bf00d2febb1d5be7537e53a61f03d6e6e674453736308713b72ff88fe4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a694bf00d2febb1d5be7537e53a61f03d6e6e674453736308713b72ff88fe4b5->enter($__internal_a694bf00d2febb1d5be7537e53a61f03d6e6e674453736308713b72ff88fe4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a694bf00d2febb1d5be7537e53a61f03d6e6e674453736308713b72ff88fe4b5->leave($__internal_a694bf00d2febb1d5be7537e53a61f03d6e6e674453736308713b72ff88fe4b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1dffa818be2bb2f6ebe519a5a0132f158bf582f4eeb9053d864aab3a927812e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dffa818be2bb2f6ebe519a5a0132f158bf582f4eeb9053d864aab3a927812e->enter($__internal_c1dffa818be2bb2f6ebe519a5a0132f158bf582f4eeb9053d864aab3a927812e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c1dffa818be2bb2f6ebe519a5a0132f158bf582f4eeb9053d864aab3a927812e->leave($__internal_c1dffa818be2bb2f6ebe519a5a0132f158bf582f4eeb9053d864aab3a927812e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3be463df585638cf421d1d626b13aefe886bbe5f1493425ecf51dce4f95f518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3be463df585638cf421d1d626b13aefe886bbe5f1493425ecf51dce4f95f518->enter($__internal_b3be463df585638cf421d1d626b13aefe886bbe5f1493425ecf51dce4f95f518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_b3be463df585638cf421d1d626b13aefe886bbe5f1493425ecf51dce4f95f518->leave($__internal_b3be463df585638cf421d1d626b13aefe886bbe5f1493425ecf51dce4f95f518_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4fa7f7057fc288e05a2a8edd58809086e5f5b7649a801eca75b93bc7cf184897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa7f7057fc288e05a2a8edd58809086e5f5b7649a801eca75b93bc7cf184897->enter($__internal_4fa7f7057fc288e05a2a8edd58809086e5f5b7649a801eca75b93bc7cf184897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4fa7f7057fc288e05a2a8edd58809086e5f5b7649a801eca75b93bc7cf184897->leave($__internal_4fa7f7057fc288e05a2a8edd58809086e5f5b7649a801eca75b93bc7cf184897_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
