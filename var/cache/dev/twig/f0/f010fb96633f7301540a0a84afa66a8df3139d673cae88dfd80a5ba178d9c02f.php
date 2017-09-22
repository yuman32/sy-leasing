<?php

/* admin/product/index.html.twig */
class __TwigTemplate_6c287e163cd830727b1c738e3992b085be849d8e3fe7e1a8bafa4efac63d1d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/product/index.html.twig", 1);
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
        $__internal_3235d933ebeeb2d3a1779dc6e6ae5432c48710670c3ccf425791399c66944637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3235d933ebeeb2d3a1779dc6e6ae5432c48710670c3ccf425791399c66944637->enter($__internal_3235d933ebeeb2d3a1779dc6e6ae5432c48710670c3ccf425791399c66944637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3235d933ebeeb2d3a1779dc6e6ae5432c48710670c3ccf425791399c66944637->leave($__internal_3235d933ebeeb2d3a1779dc6e6ae5432c48710670c3ccf425791399c66944637_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_1ca58f722a3c8c73df8916ff9137cd0fddd538e695c9df043ca53f2ab485ec81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca58f722a3c8c73df8916ff9137cd0fddd538e695c9df043ca53f2ab485ec81->enter($__internal_1ca58f722a3c8c73df8916ff9137cd0fddd538e695c9df043ca53f2ab485ec81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_1ca58f722a3c8c73df8916ff9137cd0fddd538e695c9df043ca53f2ab485ec81->leave($__internal_1ca58f722a3c8c73df8916ff9137cd0fddd538e695c9df043ca53f2ab485ec81_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_46efab4803ea7eb29ce53b9e78b8af004cc457ada3f228d7894be14e830406e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46efab4803ea7eb29ce53b9e78b8af004cc457ada3f228d7894be14e830406e4->enter($__internal_46efab4803ea7eb29ce53b9e78b8af004cc457ada3f228d7894be14e830406e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Produc List
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminproduct_new");
        echo "\">nouveau </a>
    <div class=\"row\">
        <div class=\"col-lg-12\">

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"panel panel-default text-center\">
                        <div class=\"panel-heading\">
                            <img style=\"width:100%;height:165px;\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("design/uploads/" . $this->getAttribute($context["product"], "photo", array()))), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"panel-body\">
                            <h4> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo " </h4>
                            <p style=\"height:50px;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo " </p>
                            <p > Price : \$";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo " </p>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                
                                    <a class=\"btn\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminproduct_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" style=\"border-radius: 15px;font-weight: bold;background:silver;\"> Modifier </a>
                                </div>
                                <div class=\"col-md-6\">

                                 <a class=\"btn \"  href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminproduct_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"  style=\"border-radius: 15px;font-weight: bold;background:silver;\"> voir</a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </div>
";
        
        $__internal_46efab4803ea7eb29ce53b9e78b8af004cc457ada3f228d7894be14e830406e4->leave($__internal_46efab4803ea7eb29ce53b9e78b8af004cc457ada3f228d7894be14e830406e4_prof);

    }

    public function getTemplateName()
    {
        return "admin/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  107 => 37,  100 => 33,  91 => 27,  87 => 26,  83 => 25,  77 => 22,  68 => 18,  61 => 14,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
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
            <h1 class=\"page-header\">Produc List
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <a href=\"{{path('adminproduct_new')}}\">nouveau </a>
    <div class=\"row\">
        <div class=\"col-lg-12\">

            {% for product in products %} 
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"panel panel-default text-center\">
                        <div class=\"panel-heading\">
                            <img style=\"width:100%;height:165px;\" src=\"{{ asset('design/uploads/'~ product.photo) }}\" />
                        </div>
                        <div class=\"panel-body\">
                            <h4> {{ product.title }} </h4>
                            <p style=\"height:50px;\">{{ product.description }} </p>
                            <p > Price : \${{ product.price }} </p>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                
                                    <a class=\"btn\" href=\"{{path('adminproduct_edit', {'id':product.id})}}\" style=\"border-radius: 15px;font-weight: bold;background:silver;\"> Modifier </a>
                                </div>
                                <div class=\"col-md-6\">

                                 <a class=\"btn \"  href=\"{{path('adminproduct_show', {'id':product.id})}}\"  style=\"border-radius: 15px;font-weight: bold;background:silver;\"> voir</a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "admin/product/index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\admin\\product\\index.html.twig");
    }
}
