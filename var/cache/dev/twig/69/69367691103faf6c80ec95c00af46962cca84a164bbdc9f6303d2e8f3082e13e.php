<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b3aaddfe180cb50a0838b591c239d3f5e40fb0504156611750f6c11e5613ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e77e49ba149c38a5228884fa8317b4bad7f6c13be26eb23a1c3a5a7d689eb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e77e49ba149c38a5228884fa8317b4bad7f6c13be26eb23a1c3a5a7d689eb43->enter($__internal_3e77e49ba149c38a5228884fa8317b4bad7f6c13be26eb23a1c3a5a7d689eb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3e77e49ba149c38a5228884fa8317b4bad7f6c13be26eb23a1c3a5a7d689eb43->leave($__internal_3e77e49ba149c38a5228884fa8317b4bad7f6c13be26eb23a1c3a5a7d689eb43_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c3aa34d5ef50fafb427450db8aaef224ae8a27c71bc55a12d8ceae771f24253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3aa34d5ef50fafb427450db8aaef224ae8a27c71bc55a12d8ceae771f24253->enter($__internal_1c3aa34d5ef50fafb427450db8aaef224ae8a27c71bc55a12d8ceae771f24253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1c3aa34d5ef50fafb427450db8aaef224ae8a27c71bc55a12d8ceae771f24253->leave($__internal_1c3aa34d5ef50fafb427450db8aaef224ae8a27c71bc55a12d8ceae771f24253_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
