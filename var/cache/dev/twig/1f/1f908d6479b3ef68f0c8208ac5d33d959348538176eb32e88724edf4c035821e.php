<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6bd7832b3d19a7a6713be44848b10931b69e8b08315b7a8e045477bb3a452e51 extends Twig_Template
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
        $__internal_93106df73dfe1091a7f7085a040eb1f173632c4486ad8d57389c93d8b58d52d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93106df73dfe1091a7f7085a040eb1f173632c4486ad8d57389c93d8b58d52d6->enter($__internal_93106df73dfe1091a7f7085a040eb1f173632c4486ad8d57389c93d8b58d52d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_93106df73dfe1091a7f7085a040eb1f173632c4486ad8d57389c93d8b58d52d6->leave($__internal_93106df73dfe1091a7f7085a040eb1f173632c4486ad8d57389c93d8b58d52d6_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8a99899fa7213c34015d63658746c6a99fefe3e6dcfed24e42ac93943e7851b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a99899fa7213c34015d63658746c6a99fefe3e6dcfed24e42ac93943e7851b9->enter($__internal_8a99899fa7213c34015d63658746c6a99fefe3e6dcfed24e42ac93943e7851b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8a99899fa7213c34015d63658746c6a99fefe3e6dcfed24e42ac93943e7851b9->leave($__internal_8a99899fa7213c34015d63658746c6a99fefe3e6dcfed24e42ac93943e7851b9_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_694c7825311cc90a6b399b707b653109ca45b84e5e58783f4e0706a9fe71198f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694c7825311cc90a6b399b707b653109ca45b84e5e58783f4e0706a9fe71198f->enter($__internal_694c7825311cc90a6b399b707b653109ca45b84e5e58783f4e0706a9fe71198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_694c7825311cc90a6b399b707b653109ca45b84e5e58783f4e0706a9fe71198f->leave($__internal_694c7825311cc90a6b399b707b653109ca45b84e5e58783f4e0706a9fe71198f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_846bfdc04810550786b0d1c629da5b476fcb70785627feedae6b1c5bd3e53be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846bfdc04810550786b0d1c629da5b476fcb70785627feedae6b1c5bd3e53be8->enter($__internal_846bfdc04810550786b0d1c629da5b476fcb70785627feedae6b1c5bd3e53be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_846bfdc04810550786b0d1c629da5b476fcb70785627feedae6b1c5bd3e53be8->leave($__internal_846bfdc04810550786b0d1c629da5b476fcb70785627feedae6b1c5bd3e53be8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
