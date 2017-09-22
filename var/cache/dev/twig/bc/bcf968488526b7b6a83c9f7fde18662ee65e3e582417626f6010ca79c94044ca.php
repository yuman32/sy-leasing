<?php

/* :admin/category:index.html.twig */
class __TwigTemplate_71ccd7fa3ae05836084c23bd4c41a2aed2db6bafd70b7808b0f34cd0eeac4323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/category:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28cc51db6206c9155b78cb3467ea5cd042abe07432922b188e58f94eef630213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cc51db6206c9155b78cb3467ea5cd042abe07432922b188e58f94eef630213->enter($__internal_28cc51db6206c9155b78cb3467ea5cd042abe07432922b188e58f94eef630213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28cc51db6206c9155b78cb3467ea5cd042abe07432922b188e58f94eef630213->leave($__internal_28cc51db6206c9155b78cb3467ea5cd042abe07432922b188e58f94eef630213_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_87df7d019c710b037281242155fd01a6812c41059f8c1dab7ba36aae92afbbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87df7d019c710b037281242155fd01a6812c41059f8c1dab7ba36aae92afbbe9->enter($__internal_87df7d019c710b037281242155fd01a6812c41059f8c1dab7ba36aae92afbbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_87df7d019c710b037281242155fd01a6812c41059f8c1dab7ba36aae92afbbe9->leave($__internal_87df7d019c710b037281242155fd01a6812c41059f8c1dab7ba36aae92afbbe9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f72630a986f5ff49cb9fa458120547bdd6c22e2c3774af036ec53dabba99cb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72630a986f5ff49cb9fa458120547bdd6c22e2c3774af036ec53dabba99cb9a->enter($__internal_f72630a986f5ff49cb9fa458120547bdd6c22e2c3774af036ec53dabba99cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Categorie List
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amincategory_new");
        echo "\">nouveau </a>
    <div class=\"row\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admincategory_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"cat\">
                <div class=\"col-md-3 col-sm-6\" >
                    <div class=\"panel panel-default text-center\">
                        <div class=\"panel-heading\">
                            <img style=\"width:100%;height:165px;\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("design/uploads/" . $this->getAttribute($context["category"], "photo", array()))), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"panel-body\">
                            <h4> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo " </h4>
                            <p style=\"height:50px;\"> ";
            // line 25
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
        // line 31
        echo "    </div>
    
";
        
        $__internal_f72630a986f5ff49cb9fa458120547bdd6c22e2c3774af036ec53dabba99cb9a->leave($__internal_f72630a986f5ff49cb9fa458120547bdd6c22e2c3774af036ec53dabba99cb9a_prof);

    }

    public function getTemplateName()
    {
        return ":admin/category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  88 => 25,  84 => 24,  78 => 21,  70 => 17,  66 => 16,  61 => 14,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block header %}
{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Categorie List
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <a href=\"{{path('amincategory_new')}}\">nouveau </a>
    <div class=\"row\">
        {% for category in categories %}
             <a href=\"{{ path('admincategory_show', {'id':category.id}) }}\" class=\"cat\">
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
", ":admin/category:index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/admin/category/index.html.twig");
    }
}
