<?php

/* @SensioDistribution/Configurator/Step/doctrine.html.twig */
class __TwigTemplate_1eb689df681675eed89870514b533d7e771e8304e27b2a79e610acc9dfea0a04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "@SensioDistribution/Configurator/Step/doctrine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9c3bda12adffc57af62ca20d5ccb82aee2f2703e2ba306ddebd621161dcf8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c3bda12adffc57af62ca20d5ccb82aee2f2703e2ba306ddebd621161dcf8b5->enter($__internal_e9c3bda12adffc57af62ca20d5ccb82aee2f2703e2ba306ddebd621161dcf8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/Step/doctrine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9c3bda12adffc57af62ca20d5ccb82aee2f2703e2ba306ddebd621161dcf8b5->leave($__internal_e9c3bda12adffc57af62ca20d5ccb82aee2f2703e2ba306ddebd621161dcf8b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f087609f691f6ff9627c05a21422b1a31b003e029004f0fbd54b7572665601a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f087609f691f6ff9627c05a21422b1a31b003e029004f0fbd54b7572665601a4->enter($__internal_f087609f691f6ff9627c05a21422b1a31b003e029004f0fbd54b7572665601a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure database";
        
        $__internal_f087609f691f6ff9627c05a21422b1a31b003e029004f0fbd54b7572665601a4->leave($__internal_f087609f691f6ff9627c05a21422b1a31b003e029004f0fbd54b7572665601a4_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_24fc682dc59538f3177c3c8c5d8d72ddcf28d9d9aa4ccdb37e4b7b86e46a4b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fc682dc59538f3177c3c8c5d8d72ddcf28d9d9aa4ccdb37e4b7b86e46a4b8f->enter($__internal_24fc682dc59538f3177c3c8c5d8d72ddcf28d9d9aa4ccdb37e4b7b86e46a4b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "@SensioDistribution/Configurator/Step/doctrine.html.twig", 9)->display(array_merge($context, array("index" => ($context["index"] ?? $this->getContext($context, "index")), "count" => ($context["count"] ?? $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_configurator_step", array("index" => ($context["index"] ?? $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "driver", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "host", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
        
        $__internal_24fc682dc59538f3177c3c8c5d8d72ddcf28d9d9aa4ccdb37e4b7b86e46a4b8f->leave($__internal_24fc682dc59538f3177c3c8c5d8d72ddcf28d9d9aa4ccdb37e4b7b86e46a4b8f_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/Step/doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block title %}Symfony - Configure database{% endblock %}

{% block content %}
    {% form_theme form \"SensioDistributionBundle::Configurator/form.html.twig\" %}

    <div class=\"step\">
        {% include \"SensioDistributionBundle::Configurator/steps.html.twig\" with { \"index\": index, \"count\": count } %}

        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            {{ form_errors(form) }}
        </div>
        <form action=\"{{ path('_configurator_step', { 'index': index }) }}\" method=\"POST\">
            <div class=\"symfony-form-column\">
                {{ form_row(form.driver) }}
                {{ form_row(form.host) }}
                {{ form_row(form.name) }}
            </div>
            <div class=\"symfony-form-column\">
                {{ form_row(form.user) }}
                {{ form_row(form.password) }}
            </div>

            {{ form_rest(form) }}

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
{% endblock %}
", "@SensioDistribution/Configurator/Step/doctrine.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\Step\\doctrine.html.twig");
    }
}
