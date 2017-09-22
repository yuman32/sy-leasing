<?php

/* product/index.html.twig */
class __TwigTemplate_8230ff661aaf135ccfa86aee25ef4f8c58b1b67a2c31a4b88a4130382d2c4af6 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
        return array (  98 => 40,  85 => 33,  79 => 30,  71 => 25,  67 => 24,  63 => 23,  57 => 20,  48 => 16,  37 => 7,  34 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product/index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\product\\index.html.twig");
    }
}
