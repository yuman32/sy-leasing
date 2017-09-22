<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_f9705e70ba12936222fd49e94a99600623fdb0ecfdde3fdcda0fac2a78359f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_6a77c9172cb798fa59b6cf614e01fc001cdca7f6ae14ef9056132d71c9ceedf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a77c9172cb798fa59b6cf614e01fc001cdca7f6ae14ef9056132d71c9ceedf8->enter($__internal_6a77c9172cb798fa59b6cf614e01fc001cdca7f6ae14ef9056132d71c9ceedf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a77c9172cb798fa59b6cf614e01fc001cdca7f6ae14ef9056132d71c9ceedf8->leave($__internal_6a77c9172cb798fa59b6cf614e01fc001cdca7f6ae14ef9056132d71c9ceedf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bac7fa590e7bbc70994f5d774d01f3d990122bd6a8cd1b1b5fa682b6ccca23b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac7fa590e7bbc70994f5d774d01f3d990122bd6a8cd1b1b5fa682b6ccca23b5->enter($__internal_bac7fa590e7bbc70994f5d774d01f3d990122bd6a8cd1b1b5fa682b6ccca23b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bac7fa590e7bbc70994f5d774d01f3d990122bd6a8cd1b1b5fa682b6ccca23b5->leave($__internal_bac7fa590e7bbc70994f5d774d01f3d990122bd6a8cd1b1b5fa682b6ccca23b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/checkEmail.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
