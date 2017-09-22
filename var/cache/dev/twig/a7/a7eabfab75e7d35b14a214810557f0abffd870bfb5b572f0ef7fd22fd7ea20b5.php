<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_667e77d7ff62504aabdb655e503cd209b3c89d9cf32a6388d41e45c42ab0e568 extends Twig_Template
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
        $__internal_3bcd53000793befb299eb94e35561aeadf632d76d3c08eafc41eb3d8ab1296e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcd53000793befb299eb94e35561aeadf632d76d3c08eafc41eb3d8ab1296e3->enter($__internal_3bcd53000793befb299eb94e35561aeadf632d76d3c08eafc41eb3d8ab1296e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3bcd53000793befb299eb94e35561aeadf632d76d3c08eafc41eb3d8ab1296e3->leave($__internal_3bcd53000793befb299eb94e35561aeadf632d76d3c08eafc41eb3d8ab1296e3_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6baad7acca2b51b64de2a0bf460b30c60aec811db59b02b04a14b0db1ffb30d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6baad7acca2b51b64de2a0bf460b30c60aec811db59b02b04a14b0db1ffb30d8->enter($__internal_6baad7acca2b51b64de2a0bf460b30c60aec811db59b02b04a14b0db1ffb30d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6baad7acca2b51b64de2a0bf460b30c60aec811db59b02b04a14b0db1ffb30d8->leave($__internal_6baad7acca2b51b64de2a0bf460b30c60aec811db59b02b04a14b0db1ffb30d8_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2dc242fda6dcda023af168f8ebbaa24e1f5a7f17d79c3b177c63f6528800332c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc242fda6dcda023af168f8ebbaa24e1f5a7f17d79c3b177c63f6528800332c->enter($__internal_2dc242fda6dcda023af168f8ebbaa24e1f5a7f17d79c3b177c63f6528800332c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2dc242fda6dcda023af168f8ebbaa24e1f5a7f17d79c3b177c63f6528800332c->leave($__internal_2dc242fda6dcda023af168f8ebbaa24e1f5a7f17d79c3b177c63f6528800332c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6fca5adee905640dfad2dfc6726550cf3c479acfb9feed380d5e84717de013d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fca5adee905640dfad2dfc6726550cf3c479acfb9feed380d5e84717de013d->enter($__internal_b6fca5adee905640dfad2dfc6726550cf3c479acfb9feed380d5e84717de013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6fca5adee905640dfad2dfc6726550cf3c479acfb9feed380d5e84717de013d->leave($__internal_b6fca5adee905640dfad2dfc6726550cf3c479acfb9feed380d5e84717de013d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
