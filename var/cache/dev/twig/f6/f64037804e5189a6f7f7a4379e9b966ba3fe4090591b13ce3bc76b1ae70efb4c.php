<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_112edbff7d2fa566c2e1de062017a8655780699c173611b990acbb4901b4fee4 extends Twig_Template
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
        $__internal_2cf17e96238956291d00de17d3cc84ad5adb9fdd992d57ed79864efc241b9b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf17e96238956291d00de17d3cc84ad5adb9fdd992d57ed79864efc241b9b61->enter($__internal_2cf17e96238956291d00de17d3cc84ad5adb9fdd992d57ed79864efc241b9b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf17e96238956291d00de17d3cc84ad5adb9fdd992d57ed79864efc241b9b61->leave($__internal_2cf17e96238956291d00de17d3cc84ad5adb9fdd992d57ed79864efc241b9b61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_703c06c4675c30519f177b21739c8ec8fdf4540ba185c4dc704f4d778975cc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703c06c4675c30519f177b21739c8ec8fdf4540ba185c4dc704f4d778975cc3c->enter($__internal_703c06c4675c30519f177b21739c8ec8fdf4540ba185c4dc704f4d778975cc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_703c06c4675c30519f177b21739c8ec8fdf4540ba185c4dc704f4d778975cc3c->leave($__internal_703c06c4675c30519f177b21739c8ec8fdf4540ba185c4dc704f4d778975cc3c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50d64e273b2054f82d887c9dd1047b818536e94f9517dcfac0d550107562d7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d64e273b2054f82d887c9dd1047b818536e94f9517dcfac0d550107562d7bd->enter($__internal_50d64e273b2054f82d887c9dd1047b818536e94f9517dcfac0d550107562d7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50d64e273b2054f82d887c9dd1047b818536e94f9517dcfac0d550107562d7bd->leave($__internal_50d64e273b2054f82d887c9dd1047b818536e94f9517dcfac0d550107562d7bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78c448276dd307ce9df514c7728e43b1152141ab290d806b536fb890786dd16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c448276dd307ce9df514c7728e43b1152141ab290d806b536fb890786dd16c->enter($__internal_78c448276dd307ce9df514c7728e43b1152141ab290d806b536fb890786dd16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_78c448276dd307ce9df514c7728e43b1152141ab290d806b536fb890786dd16c->leave($__internal_78c448276dd307ce9df514c7728e43b1152141ab290d806b536fb890786dd16c_prof);

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
