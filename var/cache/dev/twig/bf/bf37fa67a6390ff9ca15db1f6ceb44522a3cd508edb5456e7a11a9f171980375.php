<?php

/* purchase/confirm.html.twig */
class __TwigTemplate_77cd2a9319a1ae78f881a32df9564d7cc4de94a31f697aefcc973cc040af6da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "purchase/confirm.html.twig", 1);
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
        $__internal_11c313d67143c2701d7ca6b613c0fb74b9a2f32a33dc10b6d23b9cdfa2dc9751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c313d67143c2701d7ca6b613c0fb74b9a2f32a33dc10b6d23b9cdfa2dc9751->enter($__internal_11c313d67143c2701d7ca6b613c0fb74b9a2f32a33dc10b6d23b9cdfa2dc9751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "purchase/confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c313d67143c2701d7ca6b613c0fb74b9a2f32a33dc10b6d23b9cdfa2dc9751->leave($__internal_11c313d67143c2701d7ca6b613c0fb74b9a2f32a33dc10b6d23b9cdfa2dc9751_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_681e6a65766cc2b04daaed3a04596650c1af2252e1b984d71f95bcf6f5a4ecce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681e6a65766cc2b04daaed3a04596650c1af2252e1b984d71f95bcf6f5a4ecce->enter($__internal_681e6a65766cc2b04daaed3a04596650c1af2252e1b984d71f95bcf6f5a4ecce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        
        $__internal_681e6a65766cc2b04daaed3a04596650c1af2252e1b984d71f95bcf6f5a4ecce->leave($__internal_681e6a65766cc2b04daaed3a04596650c1af2252e1b984d71f95bcf6f5a4ecce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b2f5c9088e65b782b81333816e0fc7744b1fd3bf8cffdaffff900a6bd32f15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2f5c9088e65b782b81333816e0fc7744b1fd3bf8cffdaffff900a6bd32f15b->enter($__internal_9b2f5c9088e65b782b81333816e0fc7744b1fd3bf8cffdaffff900a6bd32f15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Purchase confirmation
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-8\">
            <img style=\"width:80%;\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("design/uploads/" . $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "photo", array()))), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-4\">
            <h3> Article details </h3>
            <p style=\"height:50px;\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo " </p>
            <p > Price : \$";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo " </p>

                <div  class=\"form-row col-md-12\">
                <!-- <div class=\"range-slider\"  style=\"border:solid 1px red;\"> -->
                    <br style=\"clear:both;\" />
                    <div class=\"form-group\">
                        <span> Loan debit   : </span>
                        <label> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "amount", array()), "html", null, true);
        echo " XOF</label>
                    </div>
                    <div class=\"form-group\">
                        <span> Loan duration   : </span>
                        <label> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "duration", array()), "html", null, true);
        echo " months</label>
                    </div>
                    

                    <div class=\"form-group\">
                      <a class=\"btn btn-success\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("confirm");
        echo "\"> CONFIRM YOUR PURCHASE NOW </a>
                    </div>
                </div>
        </div>
    </div>
   
";
        
        $__internal_9b2f5c9088e65b782b81333816e0fc7744b1fd3bf8cffdaffff900a6bd32f15b->leave($__internal_9b2f5c9088e65b782b81333816e0fc7744b1fd3bf8cffdaffff900a6bd32f15b_prof);

    }

    public function getTemplateName()
    {
        return "purchase/confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  92 => 32,  85 => 28,  75 => 21,  71 => 20,  64 => 16,  54 => 8,  48 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
            <h1 class=\"page-header\"> Purchase confirmation
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-8\">
            <img style=\"width:80%;\" src=\"{{ asset('design/uploads/' ~ product.photo) }}\">
        </div>
        <div class=\"col-md-4\">
            <h3> Article details </h3>
            <p style=\"height:50px;\">{{ product.description }} </p>
            <p > Price : \${{ product.price }} </p>

                <div  class=\"form-row col-md-12\">
                <!-- <div class=\"range-slider\"  style=\"border:solid 1px red;\"> -->
                    <br style=\"clear:both;\" />
                    <div class=\"form-group\">
                        <span> Loan debit   : </span>
                        <label> {{ purchase.amount}} XOF</label>
                    </div>
                    <div class=\"form-group\">
                        <span> Loan duration   : </span>
                        <label> {{ purchase.duration }} months</label>
                    </div>
                    

                    <div class=\"form-group\">
                      <a class=\"btn btn-success\" href=\"{{ path('confirm') }}\"> CONFIRM YOUR PURCHASE NOW </a>
                    </div>
                </div>
        </div>
    </div>
   
{% endblock %}
", "purchase/confirm.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\purchase\\confirm.html.twig");
    }
}
