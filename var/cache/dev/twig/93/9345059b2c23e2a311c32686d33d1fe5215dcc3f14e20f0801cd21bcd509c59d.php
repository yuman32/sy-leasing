<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_9fe4c1d55577d600737f50379d57ef49f3501df73baef9d8f0ac4358b107cb04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_7a2931ee767584c013ef642915ba965b6f8061cb7bfebdf51cf1704833586622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2931ee767584c013ef642915ba965b6f8061cb7bfebdf51cf1704833586622->enter($__internal_7a2931ee767584c013ef642915ba965b6f8061cb7bfebdf51cf1704833586622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a2931ee767584c013ef642915ba965b6f8061cb7bfebdf51cf1704833586622->leave($__internal_7a2931ee767584c013ef642915ba965b6f8061cb7bfebdf51cf1704833586622_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b5a57428a66d56160ff87a484bbda10bb61b8073111903ad7db29844f190c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5a57428a66d56160ff87a484bbda10bb61b8073111903ad7db29844f190c42->enter($__internal_4b5a57428a66d56160ff87a484bbda10bb61b8073111903ad7db29844f190c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_4b5a57428a66d56160ff87a484bbda10bb61b8073111903ad7db29844f190c42->leave($__internal_4b5a57428a66d56160ff87a484bbda10bb61b8073111903ad7db29844f190c42_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
