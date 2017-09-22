<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_3e4d8942e6804326a437acb45ce9706907de4c6e438dcb455533aafe4df22117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_398a527532a3f9ea19640d00ffcca77af71dab9ee7edf1670acda0a6473a5e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398a527532a3f9ea19640d00ffcca77af71dab9ee7edf1670acda0a6473a5e8e->enter($__internal_398a527532a3f9ea19640d00ffcca77af71dab9ee7edf1670acda0a6473a5e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398a527532a3f9ea19640d00ffcca77af71dab9ee7edf1670acda0a6473a5e8e->leave($__internal_398a527532a3f9ea19640d00ffcca77af71dab9ee7edf1670acda0a6473a5e8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4342e8bb82fdacdba655ce288d54618253c651d155eac3d59cfb5bbd1ef2085a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4342e8bb82fdacdba655ce288d54618253c651d155eac3d59cfb5bbd1ef2085a->enter($__internal_4342e8bb82fdacdba655ce288d54618253c651d155eac3d59cfb5bbd1ef2085a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4342e8bb82fdacdba655ce288d54618253c651d155eac3d59cfb5bbd1ef2085a->leave($__internal_4342e8bb82fdacdba655ce288d54618253c651d155eac3d59cfb5bbd1ef2085a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
