<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_1851d3e87f9521246ff831c00dad5380081281137df83fbe231dba4a34708b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_3b0faae6efdb88cdb5f8b2351525d9c66dd06d10defaa57f37cb711421ce073b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0faae6efdb88cdb5f8b2351525d9c66dd06d10defaa57f37cb711421ce073b->enter($__internal_3b0faae6efdb88cdb5f8b2351525d9c66dd06d10defaa57f37cb711421ce073b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b0faae6efdb88cdb5f8b2351525d9c66dd06d10defaa57f37cb711421ce073b->leave($__internal_3b0faae6efdb88cdb5f8b2351525d9c66dd06d10defaa57f37cb711421ce073b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f4424afa73e26690e40eb6634cd7788ce1a6e9175f1b78e57c479b946a30f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4424afa73e26690e40eb6634cd7788ce1a6e9175f1b78e57c479b946a30f62->enter($__internal_4f4424afa73e26690e40eb6634cd7788ce1a6e9175f1b78e57c479b946a30f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4f4424afa73e26690e40eb6634cd7788ce1a6e9175f1b78e57c479b946a30f62->leave($__internal_4f4424afa73e26690e40eb6634cd7788ce1a6e9175f1b78e57c479b946a30f62_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
