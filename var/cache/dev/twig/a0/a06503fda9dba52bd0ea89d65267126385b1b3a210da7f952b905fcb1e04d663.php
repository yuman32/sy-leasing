<?php

/* product/index.html.twig */
class __TwigTemplate_dd90cd2527ccffc818099554b157d5398828e4e6b658a01dd00a507dc876af45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_24807af472e400cfba1d01a8b5c72dd98e75548f948f3d76d74b07453990997f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24807af472e400cfba1d01a8b5c72dd98e75548f948f3d76d74b07453990997f->enter($__internal_24807af472e400cfba1d01a8b5c72dd98e75548f948f3d76d74b07453990997f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24807af472e400cfba1d01a8b5c72dd98e75548f948f3d76d74b07453990997f->leave($__internal_24807af472e400cfba1d01a8b5c72dd98e75548f948f3d76d74b07453990997f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_b81f498ed8b7a0e557bd8fe43d60dc5e91d66d6bd0abe0d53c9990e63315126d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81f498ed8b7a0e557bd8fe43d60dc5e91d66d6bd0abe0d53c9990e63315126d->enter($__internal_b81f498ed8b7a0e557bd8fe43d60dc5e91d66d6bd0abe0d53c9990e63315126d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_b81f498ed8b7a0e557bd8fe43d60dc5e91d66d6bd0abe0d53c9990e63315126d->leave($__internal_b81f498ed8b7a0e557bd8fe43d60dc5e91d66d6bd0abe0d53c9990e63315126d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4290e97cc17e38955cfc8e77d519102d573dd818772f851bf9c2ad32b3f91acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4290e97cc17e38955cfc8e77d519102d573dd818772f851bf9c2ad32b3f91acd->enter($__internal_4290e97cc17e38955cfc8e77d519102d573dd818772f851bf9c2ad32b3f91acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Shop your product
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"panel panel-default text-center\">
                        <div class=\"panel-heading\">
                            <img style=\"width:100%;height:165px;\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("design/uploads/" . $this->getAttribute($context["product"], "photo", array()))), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"panel-body\">
                            <h4> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo " </h4>
                            <p style=\"height:50px;\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo " </p>
                            <p > Price : \$";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo " </p>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <p class=\"btn \" style=\"border-radius: 15px;font-weight: bold;background:silver;\"> \$";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "minPrice", array()), "html", null, true);
            echo "/Month </p>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_product", array("product" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" style=\"border-radius:15px;font-weight: bold;\" class=\"btn btn-success\"> Purchase  </a>
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
        // line 40
        echo "        </div>
    </div>
";
        
        $__internal_4290e97cc17e38955cfc8e77d519102d573dd818772f851bf9c2ad32b3f91acd->leave($__internal_4290e97cc17e38955cfc8e77d519102d573dd818772f851bf9c2ad32b3f91acd_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  100 => 33,  94 => 30,  86 => 25,  82 => 24,  78 => 23,  72 => 20,  63 => 16,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
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
            <h1 class=\"page-header\"> Shop your product
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
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
                                    <p class=\"btn \" style=\"border-radius: 15px;font-weight: bold;background:silver;\"> \${{ product.minPrice }}/Month </p>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"{{ path('purchase_product', {'product': product.id }) }}\" style=\"border-radius:15px;font-weight: bold;\" class=\"btn btn-success\"> Purchase  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "product/index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\product\\index.html.twig");
    }
}
