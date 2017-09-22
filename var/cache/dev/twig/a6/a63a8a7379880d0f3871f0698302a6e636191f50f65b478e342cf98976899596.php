<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_852aeec5487085a6c3179ec3cb07cdaeb9b13cee41c1bc1beffced0e419a97db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fa3a967525e11637eddd6e218adae9a3f33e9399a5d5a2edec61a32706263c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa3a967525e11637eddd6e218adae9a3f33e9399a5d5a2edec61a32706263c2->enter($__internal_7fa3a967525e11637eddd6e218adae9a3f33e9399a5d5a2edec61a32706263c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7fa3a967525e11637eddd6e218adae9a3f33e9399a5d5a2edec61a32706263c2->leave($__internal_7fa3a967525e11637eddd6e218adae9a3f33e9399a5d5a2edec61a32706263c2_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_214b8a6f9bda85974606c19e6b2ee21eeb05e0f4922502e69b9efc5eabaed9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214b8a6f9bda85974606c19e6b2ee21eeb05e0f4922502e69b9efc5eabaed9c8->enter($__internal_214b8a6f9bda85974606c19e6b2ee21eeb05e0f4922502e69b9efc5eabaed9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_214b8a6f9bda85974606c19e6b2ee21eeb05e0f4922502e69b9efc5eabaed9c8->leave($__internal_214b8a6f9bda85974606c19e6b2ee21eeb05e0f4922502e69b9efc5eabaed9c8_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cbbe899dc2650bb9e280572d51ad449b7b978d8ab474ed555c8e35f6438cd36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbe899dc2650bb9e280572d51ad449b7b978d8ab474ed555c8e35f6438cd36c->enter($__internal_cbbe899dc2650bb9e280572d51ad449b7b978d8ab474ed555c8e35f6438cd36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cbbe899dc2650bb9e280572d51ad449b7b978d8ab474ed555c8e35f6438cd36c->leave($__internal_cbbe899dc2650bb9e280572d51ad449b7b978d8ab474ed555c8e35f6438cd36c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7ce87b5777601e0fbecb3840ad331bf8c8c60c1e611a335e504e5b0d58facab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce87b5777601e0fbecb3840ad331bf8c8c60c1e611a335e504e5b0d58facab4->enter($__internal_7ce87b5777601e0fbecb3840ad331bf8c8c60c1e611a335e504e5b0d58facab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7ce87b5777601e0fbecb3840ad331bf8c8c60c1e611a335e504e5b0d58facab4->leave($__internal_7ce87b5777601e0fbecb3840ad331bf8c8c60c1e611a335e504e5b0d58facab4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
