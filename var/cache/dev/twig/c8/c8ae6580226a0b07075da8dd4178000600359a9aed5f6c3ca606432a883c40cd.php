<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_bcda089924c61033810024caf879ba5ee29de7df05079930856637ccd859cf27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_b5b9796f54413f99134f718cb9a1de82a1e747aa91683d380c5498cdd617bb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b9796f54413f99134f718cb9a1de82a1e747aa91683d380c5498cdd617bb27->enter($__internal_b5b9796f54413f99134f718cb9a1de82a1e747aa91683d380c5498cdd617bb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b9796f54413f99134f718cb9a1de82a1e747aa91683d380c5498cdd617bb27->leave($__internal_b5b9796f54413f99134f718cb9a1de82a1e747aa91683d380c5498cdd617bb27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_029608d7822d3dd8d78820bd48cae9290fed76fdfc60608c8e30e33fe4132fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029608d7822d3dd8d78820bd48cae9290fed76fdfc60608c8e30e33fe4132fd2->enter($__internal_029608d7822d3dd8d78820bd48cae9290fed76fdfc60608c8e30e33fe4132fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_029608d7822d3dd8d78820bd48cae9290fed76fdfc60608c8e30e33fe4132fd2->leave($__internal_029608d7822d3dd8d78820bd48cae9290fed76fdfc60608c8e30e33fe4132fd2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
