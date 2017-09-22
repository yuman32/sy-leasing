<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cc98485f4f9c7963a9a1ecbcb90e86d4476e5cdd2e29bd138f907604b84b2edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_def81fce15cd7bbe0a308a54c81a457b4a03a2b7c2b4ddeb8ab1476ceeda7505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def81fce15cd7bbe0a308a54c81a457b4a03a2b7c2b4ddeb8ab1476ceeda7505->enter($__internal_def81fce15cd7bbe0a308a54c81a457b4a03a2b7c2b4ddeb8ab1476ceeda7505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_def81fce15cd7bbe0a308a54c81a457b4a03a2b7c2b4ddeb8ab1476ceeda7505->leave($__internal_def81fce15cd7bbe0a308a54c81a457b4a03a2b7c2b4ddeb8ab1476ceeda7505_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_477622d7e5ab812fc4333e46927664712c9532fae31b65122b006e1001dbb688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477622d7e5ab812fc4333e46927664712c9532fae31b65122b006e1001dbb688->enter($__internal_477622d7e5ab812fc4333e46927664712c9532fae31b65122b006e1001dbb688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_477622d7e5ab812fc4333e46927664712c9532fae31b65122b006e1001dbb688->leave($__internal_477622d7e5ab812fc4333e46927664712c9532fae31b65122b006e1001dbb688_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
