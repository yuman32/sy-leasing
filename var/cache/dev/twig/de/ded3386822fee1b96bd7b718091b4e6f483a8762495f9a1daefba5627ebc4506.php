<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_cdb08e0a125cb036839582a0893c64f4a19ffb2f5fcf505fd8bed562dfbfbbc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_bd166a1e99ff430893d67dc215d12c68af5496abc6433c24d94d048cd7432da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd166a1e99ff430893d67dc215d12c68af5496abc6433c24d94d048cd7432da3->enter($__internal_bd166a1e99ff430893d67dc215d12c68af5496abc6433c24d94d048cd7432da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd166a1e99ff430893d67dc215d12c68af5496abc6433c24d94d048cd7432da3->leave($__internal_bd166a1e99ff430893d67dc215d12c68af5496abc6433c24d94d048cd7432da3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c137643ac90a46bb56549444d9cb0a6d685095141ba9bd45fb61ef9bdd961915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c137643ac90a46bb56549444d9cb0a6d685095141ba9bd45fb61ef9bdd961915->enter($__internal_c137643ac90a46bb56549444d9cb0a6d685095141ba9bd45fb61ef9bdd961915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c137643ac90a46bb56549444d9cb0a6d685095141ba9bd45fb61ef9bdd961915->leave($__internal_c137643ac90a46bb56549444d9cb0a6d685095141ba9bd45fb61ef9bdd961915_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_735d103ab31d126fd83566e4f160b9bf15579cc885c8b3c1204eca6e3223c754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735d103ab31d126fd83566e4f160b9bf15579cc885c8b3c1204eca6e3223c754->enter($__internal_735d103ab31d126fd83566e4f160b9bf15579cc885c8b3c1204eca6e3223c754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_735d103ab31d126fd83566e4f160b9bf15579cc885c8b3c1204eca6e3223c754->leave($__internal_735d103ab31d126fd83566e4f160b9bf15579cc885c8b3c1204eca6e3223c754_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_41bd7e5ca8410029f104d22295efc646a88629b080b34242e1e29eefc60ab0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bd7e5ca8410029f104d22295efc646a88629b080b34242e1e29eefc60ab0cd->enter($__internal_41bd7e5ca8410029f104d22295efc646a88629b080b34242e1e29eefc60ab0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41bd7e5ca8410029f104d22295efc646a88629b080b34242e1e29eefc60ab0cd->leave($__internal_41bd7e5ca8410029f104d22295efc646a88629b080b34242e1e29eefc60ab0cd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_955e8e39fd9e35b3a684be846f0690918eb785e8302041bb850c833c8f797b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955e8e39fd9e35b3a684be846f0690918eb785e8302041bb850c833c8f797b18->enter($__internal_955e8e39fd9e35b3a684be846f0690918eb785e8302041bb850c833c8f797b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_955e8e39fd9e35b3a684be846f0690918eb785e8302041bb850c833c8f797b18->leave($__internal_955e8e39fd9e35b3a684be846f0690918eb785e8302041bb850c833c8f797b18_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
