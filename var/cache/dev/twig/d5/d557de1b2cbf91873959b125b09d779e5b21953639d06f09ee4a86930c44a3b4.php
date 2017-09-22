<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_e8be810df439f4aa7e55e92b8dfa33ecc59ade64399a1d8154e384e60a531c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_d1e70f56c0f478e01547a76b88d3bcb3a54fd7b8012383bd2579b019e945b35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e70f56c0f478e01547a76b88d3bcb3a54fd7b8012383bd2579b019e945b35f->enter($__internal_d1e70f56c0f478e01547a76b88d3bcb3a54fd7b8012383bd2579b019e945b35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e70f56c0f478e01547a76b88d3bcb3a54fd7b8012383bd2579b019e945b35f->leave($__internal_d1e70f56c0f478e01547a76b88d3bcb3a54fd7b8012383bd2579b019e945b35f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_556efa6943d9e6ab43536a0051d4e6106467095f046dbc962a0218debfd4a4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556efa6943d9e6ab43536a0051d4e6106467095f046dbc962a0218debfd4a4e6->enter($__internal_556efa6943d9e6ab43536a0051d4e6106467095f046dbc962a0218debfd4a4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_556efa6943d9e6ab43536a0051d4e6106467095f046dbc962a0218debfd4a4e6->leave($__internal_556efa6943d9e6ab43536a0051d4e6106467095f046dbc962a0218debfd4a4e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
