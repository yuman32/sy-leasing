<?php

/* category/index.html.twig */
class __TwigTemplate_55252a269fa2c11cba10771c2972ba6248dd059680545d0b093c62945d70099a extends Twig_Template
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
        $__internal_139249ea495d802f70b9d0c702f3486bbd6331f08fdf8c78fab1014134c15953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139249ea495d802f70b9d0c702f3486bbd6331f08fdf8c78fab1014134c15953->enter($__internal_139249ea495d802f70b9d0c702f3486bbd6331f08fdf8c78fab1014134c15953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_139249ea495d802f70b9d0c702f3486bbd6331f08fdf8c78fab1014134c15953->leave($__internal_139249ea495d802f70b9d0c702f3486bbd6331f08fdf8c78fab1014134c15953_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0f3b8f165bf2e3d321fcbeffd31e3580a6a0330bc564aa664b0bd13bb0d4728b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3b8f165bf2e3d321fcbeffd31e3580a6a0330bc564aa664b0bd13bb0d4728b->enter($__internal_0f3b8f165bf2e3d321fcbeffd31e3580a6a0330bc564aa664b0bd13bb0d4728b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_0f3b8f165bf2e3d321fcbeffd31e3580a6a0330bc564aa664b0bd13bb0d4728b->leave($__internal_0f3b8f165bf2e3d321fcbeffd31e3580a6a0330bc564aa664b0bd13bb0d4728b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4f3ad50f1a454f6e173495484aea926105b184d888854c94b54ebbe13ee262a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f3ad50f1a454f6e173495484aea926105b184d888854c94b54ebbe13ee262a->enter($__internal_f4f3ad50f1a454f6e173495484aea926105b184d888854c94b54ebbe13ee262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f4f3ad50f1a454f6e173495484aea926105b184d888854c94b54ebbe13ee262a->leave($__internal_f4f3ad50f1a454f6e173495484aea926105b184d888854c94b54ebbe13ee262a_prof);

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
