<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_045350900985d3175bfb6ff075b97b3a8f626cc806270f2308ed5ac75ba3b8a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_6dce1f298672c5d9b2ca8a3e53770caa923fa073f7eba7170d4eb49623e1f2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dce1f298672c5d9b2ca8a3e53770caa923fa073f7eba7170d4eb49623e1f2db->enter($__internal_6dce1f298672c5d9b2ca8a3e53770caa923fa073f7eba7170d4eb49623e1f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dce1f298672c5d9b2ca8a3e53770caa923fa073f7eba7170d4eb49623e1f2db->leave($__internal_6dce1f298672c5d9b2ca8a3e53770caa923fa073f7eba7170d4eb49623e1f2db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c576a10441ebf4656a9872b842a5b801f5a1184c937c1c0eb1e9360ec4fe29a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c576a10441ebf4656a9872b842a5b801f5a1184c937c1c0eb1e9360ec4fe29a9->enter($__internal_c576a10441ebf4656a9872b842a5b801f5a1184c937c1c0eb1e9360ec4fe29a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_c576a10441ebf4656a9872b842a5b801f5a1184c937c1c0eb1e9360ec4fe29a9->leave($__internal_c576a10441ebf4656a9872b842a5b801f5a1184c937c1c0eb1e9360ec4fe29a9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
