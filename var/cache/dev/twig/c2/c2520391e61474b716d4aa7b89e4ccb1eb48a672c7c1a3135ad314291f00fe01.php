<?php

/* :purchase:confirmed.html.twig */
class __TwigTemplate_7fd6e0d4a5ac32515b69274a323e2104fde1ddc93f0fcc3e915925f27ca44656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":purchase:confirmed.html.twig", 1);
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
        $__internal_1e79889a6b5be748a000230986b87f5288882c6ebaf28f3acc173de5a8488af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e79889a6b5be748a000230986b87f5288882c6ebaf28f3acc173de5a8488af3->enter($__internal_1e79889a6b5be748a000230986b87f5288882c6ebaf28f3acc173de5a8488af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":purchase:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e79889a6b5be748a000230986b87f5288882c6ebaf28f3acc173de5a8488af3->leave($__internal_1e79889a6b5be748a000230986b87f5288882c6ebaf28f3acc173de5a8488af3_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_a0ddf4aa16a1020232ea293b127fe7e5f255034d6a49cfa97e46492a1adb18b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ddf4aa16a1020232ea293b127fe7e5f255034d6a49cfa97e46492a1adb18b9->enter($__internal_a0ddf4aa16a1020232ea293b127fe7e5f255034d6a49cfa97e46492a1adb18b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        
        $__internal_a0ddf4aa16a1020232ea293b127fe7e5f255034d6a49cfa97e46492a1adb18b9->leave($__internal_a0ddf4aa16a1020232ea293b127fe7e5f255034d6a49cfa97e46492a1adb18b9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee23166b39108620b1dbcb6e32a8d33514065975805beda97140b8ce05b1ade4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee23166b39108620b1dbcb6e32a8d33514065975805beda97140b8ce05b1ade4->enter($__internal_ee23166b39108620b1dbcb6e32a8d33514065975805beda97140b8ce05b1ade4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Congratulation, your purchase is confirmed now
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
                    

                    
                </div>
        </div>
    </div>
   
";
        
        $__internal_ee23166b39108620b1dbcb6e32a8d33514065975805beda97140b8ce05b1ade4->leave($__internal_ee23166b39108620b1dbcb6e32a8d33514065975805beda97140b8ce05b1ade4_prof);

    }

    public function getTemplateName()
    {
        return ":purchase:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  85 => 28,  75 => 21,  71 => 20,  64 => 16,  54 => 8,  48 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
            <h1 class=\"page-header\"> Congratulation, your purchase is confirmed now
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
                    

                    
                </div>
        </div>
    </div>
   
{% endblock %}
", ":purchase:confirmed.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/purchase/confirmed.html.twig");
    }
}
