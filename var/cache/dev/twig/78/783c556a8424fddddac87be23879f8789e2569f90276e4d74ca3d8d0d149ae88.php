<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a31e460b005ea6959bb26b9b5ce22db59c97ba96221c203a75ad1739740426d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ab88423c26b4177eebcba0ca73ac1cdd90c46b297570a56a9fa6841785ad421a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab88423c26b4177eebcba0ca73ac1cdd90c46b297570a56a9fa6841785ad421a->enter($__internal_ab88423c26b4177eebcba0ca73ac1cdd90c46b297570a56a9fa6841785ad421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab88423c26b4177eebcba0ca73ac1cdd90c46b297570a56a9fa6841785ad421a->leave($__internal_ab88423c26b4177eebcba0ca73ac1cdd90c46b297570a56a9fa6841785ad421a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dea7d97b73ce13f55ca9e2e52b69b5ee7d2858dd6b407d9c5a058213dba88231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea7d97b73ce13f55ca9e2e52b69b5ee7d2858dd6b407d9c5a058213dba88231->enter($__internal_dea7d97b73ce13f55ca9e2e52b69b5ee7d2858dd6b407d9c5a058213dba88231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dea7d97b73ce13f55ca9e2e52b69b5ee7d2858dd6b407d9c5a058213dba88231->leave($__internal_dea7d97b73ce13f55ca9e2e52b69b5ee7d2858dd6b407d9c5a058213dba88231_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f2f28da700ba46f387606be3c7eb35d120b55d386950168cf0949846e681cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2f28da700ba46f387606be3c7eb35d120b55d386950168cf0949846e681cd1->enter($__internal_7f2f28da700ba46f387606be3c7eb35d120b55d386950168cf0949846e681cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7f2f28da700ba46f387606be3c7eb35d120b55d386950168cf0949846e681cd1->leave($__internal_7f2f28da700ba46f387606be3c7eb35d120b55d386950168cf0949846e681cd1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
