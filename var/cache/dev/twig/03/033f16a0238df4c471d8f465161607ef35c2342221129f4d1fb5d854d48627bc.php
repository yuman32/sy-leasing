<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_7be851f9ab8d2aef763ee36e57680cea8a00f4a784660b9fc096035e141dc5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_c2b7aec3985a2b8072fae1928dfe84b3ce3f9754288904662e0e4d0a2d89526d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b7aec3985a2b8072fae1928dfe84b3ce3f9754288904662e0e4d0a2d89526d->enter($__internal_c2b7aec3985a2b8072fae1928dfe84b3ce3f9754288904662e0e4d0a2d89526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2b7aec3985a2b8072fae1928dfe84b3ce3f9754288904662e0e4d0a2d89526d->leave($__internal_c2b7aec3985a2b8072fae1928dfe84b3ce3f9754288904662e0e4d0a2d89526d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c7f519869fc4256f37dcc4f4c16f5ee3db82580a6e23153ca32af4b2c8b9c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7f519869fc4256f37dcc4f4c16f5ee3db82580a6e23153ca32af4b2c8b9c28->enter($__internal_6c7f519869fc4256f37dcc4f4c16f5ee3db82580a6e23153ca32af4b2c8b9c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6c7f519869fc4256f37dcc4f4c16f5ee3db82580a6e23153ca32af4b2c8b9c28->leave($__internal_6c7f519869fc4256f37dcc4f4c16f5ee3db82580a6e23153ca32af4b2c8b9c28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
