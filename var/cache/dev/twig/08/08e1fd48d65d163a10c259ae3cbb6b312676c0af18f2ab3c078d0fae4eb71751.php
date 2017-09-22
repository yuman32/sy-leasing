<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_0e121170f9969bf9db7f9b980cfaae6801cd724d9f0f23a6fadab0a79dd87c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eec956cbdaf46b00add54619ad58f6c3cb972f6416a885f3cd9a0a94d62b9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eec956cbdaf46b00add54619ad58f6c3cb972f6416a885f3cd9a0a94d62b9e8->enter($__internal_7eec956cbdaf46b00add54619ad58f6c3cb972f6416a885f3cd9a0a94d62b9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eec956cbdaf46b00add54619ad58f6c3cb972f6416a885f3cd9a0a94d62b9e8->leave($__internal_7eec956cbdaf46b00add54619ad58f6c3cb972f6416a885f3cd9a0a94d62b9e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71daf88d675ac8d7727598815df09e92b252fe97516957ef09108f8ca711816d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71daf88d675ac8d7727598815df09e92b252fe97516957ef09108f8ca711816d->enter($__internal_71daf88d675ac8d7727598815df09e92b252fe97516957ef09108f8ca711816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_71daf88d675ac8d7727598815df09e92b252fe97516957ef09108f8ca711816d->leave($__internal_71daf88d675ac8d7727598815df09e92b252fe97516957ef09108f8ca711816d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
