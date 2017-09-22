<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_42bf600411f2a1c0cee00c69a35270d1a2807eff7047a9f98c5456589bcd4d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_af5556aa933f7987e37309c3e83d02fac1501915d57c4a30dfabdccbfe06b415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5556aa933f7987e37309c3e83d02fac1501915d57c4a30dfabdccbfe06b415->enter($__internal_af5556aa933f7987e37309c3e83d02fac1501915d57c4a30dfabdccbfe06b415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af5556aa933f7987e37309c3e83d02fac1501915d57c4a30dfabdccbfe06b415->leave($__internal_af5556aa933f7987e37309c3e83d02fac1501915d57c4a30dfabdccbfe06b415_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecc2b654b25ac30f761d8535f9669ef83af42c157ec422ae962ec17114f2508d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc2b654b25ac30f761d8535f9669ef83af42c157ec422ae962ec17114f2508d->enter($__internal_ecc2b654b25ac30f761d8535f9669ef83af42c157ec422ae962ec17114f2508d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ecc2b654b25ac30f761d8535f9669ef83af42c157ec422ae962ec17114f2508d->leave($__internal_ecc2b654b25ac30f761d8535f9669ef83af42c157ec422ae962ec17114f2508d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
