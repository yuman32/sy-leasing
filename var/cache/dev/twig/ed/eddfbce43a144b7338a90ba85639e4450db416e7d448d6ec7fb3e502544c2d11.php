<?php

/* category/index.html.twig */
class __TwigTemplate_7f56724b86df3846b77c139b019697ac08949a0fe4b957bef9ebfe3a72ae4c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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
        $__internal_d1340a821955c9d758b55ee4711fd0deb0c63a3d4ddef60969de9e158a497ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1340a821955c9d758b55ee4711fd0deb0c63a3d4ddef60969de9e158a497ccc->enter($__internal_d1340a821955c9d758b55ee4711fd0deb0c63a3d4ddef60969de9e158a497ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1340a821955c9d758b55ee4711fd0deb0c63a3d4ddef60969de9e158a497ccc->leave($__internal_d1340a821955c9d758b55ee4711fd0deb0c63a3d4ddef60969de9e158a497ccc_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_944b46d183405895f581e17baba96668378e1042dd07c90289be368267611708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944b46d183405895f581e17baba96668378e1042dd07c90289be368267611708->enter($__internal_944b46d183405895f581e17baba96668378e1042dd07c90289be368267611708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_944b46d183405895f581e17baba96668378e1042dd07c90289be368267611708->leave($__internal_944b46d183405895f581e17baba96668378e1042dd07c90289be368267611708_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddfe6c6b594e0a27b4377ea7e4090f1f4c8a3d7d7bc64a87e0c410cd9cb3ee0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfe6c6b594e0a27b4377ea7e4090f1f4c8a3d7d7bc64a87e0c410cd9cb3ee0f->enter($__internal_ddfe6c6b594e0a27b4377ea7e4090f1f4c8a3d7d7bc64a87e0c410cd9cb3ee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddfe6c6b594e0a27b4377ea7e4090f1f4c8a3d7d7bc64a87e0c410cd9cb3ee0f->leave($__internal_ddfe6c6b594e0a27b4377ea7e4090f1f4c8a3d7d7bc64a87e0c410cd9cb3ee0f_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
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
", "category/index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\category\\index.html.twig");
    }
}
