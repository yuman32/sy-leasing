<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_eb7fe287c4a9c99e257776ab41f346ea6bfbb29da1f44c31f618d22ad976ce18 extends Twig_Template
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
        $__internal_a3c881238cdb200cdb23b9ee6dd44345ed9609f2d8a54c94a78be17066740433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c881238cdb200cdb23b9ee6dd44345ed9609f2d8a54c94a78be17066740433->enter($__internal_a3c881238cdb200cdb23b9ee6dd44345ed9609f2d8a54c94a78be17066740433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a3c881238cdb200cdb23b9ee6dd44345ed9609f2d8a54c94a78be17066740433->leave($__internal_a3c881238cdb200cdb23b9ee6dd44345ed9609f2d8a54c94a78be17066740433_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b1fa14ff54f740fcb654f057a4f63cd9f907b680d7ca745e5f4a77306f5af536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fa14ff54f740fcb654f057a4f63cd9f907b680d7ca745e5f4a77306f5af536->enter($__internal_b1fa14ff54f740fcb654f057a4f63cd9f907b680d7ca745e5f4a77306f5af536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b1fa14ff54f740fcb654f057a4f63cd9f907b680d7ca745e5f4a77306f5af536->leave($__internal_b1fa14ff54f740fcb654f057a4f63cd9f907b680d7ca745e5f4a77306f5af536_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f29ef2e102491c2e622840e5a6472ac267fbde3f88a3f6bb3407ebf0121dc87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29ef2e102491c2e622840e5a6472ac267fbde3f88a3f6bb3407ebf0121dc87a->enter($__internal_f29ef2e102491c2e622840e5a6472ac267fbde3f88a3f6bb3407ebf0121dc87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f29ef2e102491c2e622840e5a6472ac267fbde3f88a3f6bb3407ebf0121dc87a->leave($__internal_f29ef2e102491c2e622840e5a6472ac267fbde3f88a3f6bb3407ebf0121dc87a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bcff1667c454008126f3add8d238f552b9f093eb36aa723cf23b747b728af7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcff1667c454008126f3add8d238f552b9f093eb36aa723cf23b747b728af7e4->enter($__internal_bcff1667c454008126f3add8d238f552b9f093eb36aa723cf23b747b728af7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bcff1667c454008126f3add8d238f552b9f093eb36aa723cf23b747b728af7e4->leave($__internal_bcff1667c454008126f3add8d238f552b9f093eb36aa723cf23b747b728af7e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
