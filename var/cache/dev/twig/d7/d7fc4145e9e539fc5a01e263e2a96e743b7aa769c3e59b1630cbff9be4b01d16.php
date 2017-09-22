<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1ddab268ee57c49e4c4ba1b9cb33fce51f6d6d1b92d8822534cebbf3526ce54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e1f23b37f808e4f08fdbaeaf8f83614c65edb386d2dedff8bf94584586d6cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1f23b37f808e4f08fdbaeaf8f83614c65edb386d2dedff8bf94584586d6cc1->enter($__internal_7e1f23b37f808e4f08fdbaeaf8f83614c65edb386d2dedff8bf94584586d6cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1f23b37f808e4f08fdbaeaf8f83614c65edb386d2dedff8bf94584586d6cc1->leave($__internal_7e1f23b37f808e4f08fdbaeaf8f83614c65edb386d2dedff8bf94584586d6cc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_828e064e3a96f47eb84dd9dd992b2f22a7ca24adb69661341e4f2f4d5c63cbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828e064e3a96f47eb84dd9dd992b2f22a7ca24adb69661341e4f2f4d5c63cbbc->enter($__internal_828e064e3a96f47eb84dd9dd992b2f22a7ca24adb69661341e4f2f4d5c63cbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_828e064e3a96f47eb84dd9dd992b2f22a7ca24adb69661341e4f2f4d5c63cbbc->leave($__internal_828e064e3a96f47eb84dd9dd992b2f22a7ca24adb69661341e4f2f4d5c63cbbc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_66e9615adc07263723c621bd3ca9b1fff04ccc12fed0226cb06c58d16fb45533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e9615adc07263723c621bd3ca9b1fff04ccc12fed0226cb06c58d16fb45533->enter($__internal_66e9615adc07263723c621bd3ca9b1fff04ccc12fed0226cb06c58d16fb45533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66e9615adc07263723c621bd3ca9b1fff04ccc12fed0226cb06c58d16fb45533->leave($__internal_66e9615adc07263723c621bd3ca9b1fff04ccc12fed0226cb06c58d16fb45533_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8db1392a8b01b727276b4af5cbbcb6e0e2f1b72c2f858a47cc8a69d9a8cb4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8db1392a8b01b727276b4af5cbbcb6e0e2f1b72c2f858a47cc8a69d9a8cb4bb->enter($__internal_f8db1392a8b01b727276b4af5cbbcb6e0e2f1b72c2f858a47cc8a69d9a8cb4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f8db1392a8b01b727276b4af5cbbcb6e0e2f1b72c2f858a47cc8a69d9a8cb4bb->leave($__internal_f8db1392a8b01b727276b4af5cbbcb6e0e2f1b72c2f858a47cc8a69d9a8cb4bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
