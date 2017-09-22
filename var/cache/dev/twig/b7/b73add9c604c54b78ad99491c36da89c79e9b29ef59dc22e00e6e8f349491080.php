<?php

/* :category:index.html.twig */
class __TwigTemplate_ab13a13c297333daf9e2a55e40da9a3cd4a864dbac33210ef99951d63a7625e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d7f5f1330d7b387a5c79dce18702547722b39366cdeef2ca618d1663ed4f73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7f5f1330d7b387a5c79dce18702547722b39366cdeef2ca618d1663ed4f73e->enter($__internal_5d7f5f1330d7b387a5c79dce18702547722b39366cdeef2ca618d1663ed4f73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d7f5f1330d7b387a5c79dce18702547722b39366cdeef2ca618d1663ed4f73e->leave($__internal_5d7f5f1330d7b387a5c79dce18702547722b39366cdeef2ca618d1663ed4f73e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_9552f6c6e9ccb776e3932b5853c8b3fcb8d861c8be43ca544e662d2cee38d37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9552f6c6e9ccb776e3932b5853c8b3fcb8d861c8be43ca544e662d2cee38d37e->enter($__internal_9552f6c6e9ccb776e3932b5853c8b3fcb8d861c8be43ca544e662d2cee38d37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9552f6c6e9ccb776e3932b5853c8b3fcb8d861c8be43ca544e662d2cee38d37e->leave($__internal_9552f6c6e9ccb776e3932b5853c8b3fcb8d861c8be43ca544e662d2cee38d37e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_066d77e7f35eaf2a4437fc48cc2a6769806100bf39e87e790ececb6eb1dbbfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066d77e7f35eaf2a4437fc48cc2a6769806100bf39e87e790ececb6eb1dbbfff->enter($__internal_066d77e7f35eaf2a4437fc48cc2a6769806100bf39e87e790ececb6eb1dbbfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Shop by category
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_list", array("cat" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"cat\">
                <div class=\"col-md-3 col-sm-6\" >
                    <div class=\"panel panel-default text-center\">
                        <div class=\"panel-heading\">
                            <img style=\"width:100%;height:165px;\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("design/uploads/" . $this->getAttribute($context["category"], "photo", array()))), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"panel-body\">
                            <h4> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo " </h4>
                            <p style=\"height:50px;\"> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo " </p>
                        </div>
                    </div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
    
";
        
        $__internal_066d77e7f35eaf2a4437fc48cc2a6769806100bf39e87e790ececb6eb1dbbfff->leave($__internal_066d77e7f35eaf2a4437fc48cc2a6769806100bf39e87e790ececb6eb1dbbfff_prof);

    }

    public function getTemplateName()
    {
        return ":category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  84 => 24,  80 => 23,  74 => 20,  66 => 16,  62 => 15,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header %}
{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Shop by category
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <div class=\"row\">
        {% for category in categories %}
            <a href=\"{{ path('product_list', {'cat':category.id}) }}\" class=\"cat\">
                <div class=\"col-md-3 col-sm-6\" >
                    <div class=\"panel panel-default text-center\">
                        <div class=\"panel-heading\">
                            <img style=\"width:100%;height:165px;\" src=\"{{ asset('design/uploads/'~ category.photo) }}\" />
                        </div>
                        <div class=\"panel-body\">
                            <h4> {{ category.title }} </h4>
                            <p style=\"height:50px;\"> {{ category.description }} </p>
                        </div>
                    </div>
                </div>
            </a>
        {% endfor %}
    </div>
    
{% endblock %}
", ":category:index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/category/index.html.twig");
    }
}
