<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2124cf2ca75b76ab173d0bae260014a5a29f2a87e01eb4e3e4a66b25749a9e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_9b3b5fa44979616af2cf5af42d73191d8ce4c710d0542727b8d26fb122bd2e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3b5fa44979616af2cf5af42d73191d8ce4c710d0542727b8d26fb122bd2e15->enter($__internal_9b3b5fa44979616af2cf5af42d73191d8ce4c710d0542727b8d26fb122bd2e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3b5fa44979616af2cf5af42d73191d8ce4c710d0542727b8d26fb122bd2e15->leave($__internal_9b3b5fa44979616af2cf5af42d73191d8ce4c710d0542727b8d26fb122bd2e15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9a1ff16526b979dcb7547454efc509ea3851123696aadb0706f00bfba228098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a1ff16526b979dcb7547454efc509ea3851123696aadb0706f00bfba228098->enter($__internal_f9a1ff16526b979dcb7547454efc509ea3851123696aadb0706f00bfba228098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f9a1ff16526b979dcb7547454efc509ea3851123696aadb0706f00bfba228098->leave($__internal_f9a1ff16526b979dcb7547454efc509ea3851123696aadb0706f00bfba228098_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
