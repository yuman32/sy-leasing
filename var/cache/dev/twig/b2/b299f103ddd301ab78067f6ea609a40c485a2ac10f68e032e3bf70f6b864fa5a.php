<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1ac97e7c0eef6c3a0de44c2ed1ba960307c825d05952ff928e45d24f14f9c4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_430909369d028bcd2487e98282e207d0dde6670d764807ef9d3bbfe25a9706b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430909369d028bcd2487e98282e207d0dde6670d764807ef9d3bbfe25a9706b3->enter($__internal_430909369d028bcd2487e98282e207d0dde6670d764807ef9d3bbfe25a9706b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430909369d028bcd2487e98282e207d0dde6670d764807ef9d3bbfe25a9706b3->leave($__internal_430909369d028bcd2487e98282e207d0dde6670d764807ef9d3bbfe25a9706b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_104da82cc1e774f214e864d7fb8380f988512d70cc3fa141bede16ddc2de98dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104da82cc1e774f214e864d7fb8380f988512d70cc3fa141bede16ddc2de98dc->enter($__internal_104da82cc1e774f214e864d7fb8380f988512d70cc3fa141bede16ddc2de98dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_104da82cc1e774f214e864d7fb8380f988512d70cc3fa141bede16ddc2de98dc->leave($__internal_104da82cc1e774f214e864d7fb8380f988512d70cc3fa141bede16ddc2de98dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_56de7072f92f78a97e9e9e221172720089fa53096828125481d770afb81d1072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56de7072f92f78a97e9e9e221172720089fa53096828125481d770afb81d1072->enter($__internal_56de7072f92f78a97e9e9e221172720089fa53096828125481d770afb81d1072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_56de7072f92f78a97e9e9e221172720089fa53096828125481d770afb81d1072->leave($__internal_56de7072f92f78a97e9e9e221172720089fa53096828125481d770afb81d1072_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b8ab26ef6246fb48598e911dd91a1faa51fc3e711788bde1fc7e1a3dfcacd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8ab26ef6246fb48598e911dd91a1faa51fc3e711788bde1fc7e1a3dfcacd06->enter($__internal_1b8ab26ef6246fb48598e911dd91a1faa51fc3e711788bde1fc7e1a3dfcacd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1b8ab26ef6246fb48598e911dd91a1faa51fc3e711788bde1fc7e1a3dfcacd06->leave($__internal_1b8ab26ef6246fb48598e911dd91a1faa51fc3e711788bde1fc7e1a3dfcacd06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
