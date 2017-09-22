<?php

/* default/index.html.twig */
class __TwigTemplate_2147b4e7b85e1c7d537c180ba293729b4ca89563afd4ccc83e1d9d63d98840c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ceb0fd15b8b25bb89332937a7f768d80b7960033de4bd24519e82bca43b4c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ceb0fd15b8b25bb89332937a7f768d80b7960033de4bd24519e82bca43b4c55->enter($__internal_3ceb0fd15b8b25bb89332937a7f768d80b7960033de4bd24519e82bca43b4c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ceb0fd15b8b25bb89332937a7f768d80b7960033de4bd24519e82bca43b4c55->leave($__internal_3ceb0fd15b8b25bb89332937a7f768d80b7960033de4bd24519e82bca43b4c55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0264b0842214c8ab45b3b88e4fdfb7533e65e64df8d8ba76a7b8f780b67c6ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0264b0842214c8ab45b3b88e4fdfb7533e65e64df8d8ba76a7b8f780b67c6ed6->enter($__internal_0264b0842214c8ab45b3b88e4fdfb7533e65e64df8d8ba76a7b8f780b67c6ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
    <!-- Marketing Icons Section -->
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Get the coolest products regardless of your budget!
            </h1>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4><i class=\"glyphicon glyphicon-shopping-cart\"></i> Pick your product & Name  your payment</h4>
                </div>
                <div class=\"panel-body\">
                    <p>
                        We don't carry refurbished or repackaged items. All of our products are new and packaged by the manufacturer. Pick the product you want and then customize your payment with our payment calculator.
                    </p>
                    <!-- <a href=\"#\" class=\"btn btn-default\">Learn More</a> -->
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4><i class=\"glyphicon glyphicon-check\"></i> Submit a short application & Get approved</h4>
                </div>
                <div class=\"panel-body\">
                    <p>
                        Our short online application takes only minutes to complete. We will typically approve your submitted application the same day.
                        <br/>
                        <br/>
                        <br/>
                    </p>
                    <!-- <a href=\"#\" class=\"btn btn-default\">Learn More</a> -->
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4><i class=\"glyphicon glyphicon-gift\"></i> Enjoy your product in days & Own it in 12 months or less</h4>
                </div>
                <div class=\"panel-body\">
                    <p>
                        Your product is on the way as soon as you agree to the terms, sign the online lease agreement and provide any additional information that may be required to confirm your identity.
                        <br/>
                        <br/>
                    </p>
                    <!-- <a href=\"#\" class=\"btn btn-default\">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->



    <div id=\"pricing\">
        <div class=\"container\">
            <!-- header -->
            <h2 class=\"section_header\">
                <hr class=\"left visible-desktop\">
                <span>
                    How our lease works
                </span>
                <hr class=\"right visible-desktop\">
            </h2>

            <!-- pricing charts -->
            <div class=\"row\">
                <div class=\"span1\"></div>
                <div class=\"span10\">
                    <table class=\"table\">
                        <tbody><tr style=\"background-color:#8EB4E4; padding:10px;\">
                            <td colspan=\"2\" style=\"font-size:12pt; font-weight:bold; color:Black;\">
                                How Our Lease Works For You
                            </td>
                        </tr>
                        <tr style=\"background-color:#C6D9F0; padding:10px; font-size:12pt; \">
                            <td style=\"padding-right:20px;\">
                                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/img/tirelire-icon.png"), "html", null, true);
        echo "\" alt=\"customize payment\" style=\"width:50px;\">
                            </td>
                            <td style=\"vertical-align:middle; padding-right:40px;\">
                                <span style=\"font-size:12pt; font-weight:bold; color:Black;\">You customize your payment. &nbsp;&nbsp;</span> Your lease payments are based on how often you get paid and how much refundable security deposit you want to put down. The larger your deposit, the lower your payment. If you decide to keep the product, we will apply your deposit toward the purchase, otherwise we will refund your deposit at the end of the lease.
                            </td>
                        </tr>
                        <tr style=\"background-color:#8EB4E4; padding:10px; font-size:12pt; \">
                            <td style=\"vertical-align:middle; padding-right:20px;\">
                                <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/img/Icon-Clock-big.png"), "html", null, true);
        echo "\" alt=\"Own the product in 12 months\" style=\"width:50px;\">
                            </td>
                            <td style=\"padding-top:20px; padding-bottom:20px; padding-right:40px;\">
                                <p><span style=\"font-size:12pt; font-weight:bold; color:Black;\">You can own your product in 12 months. &nbsp;&nbsp;</span> Our leases are for 5 months.  After 5 months you can own the product by making an additional seven months worth of payments.</p>
                                <p><span style=\"font-size:12pt; font-weight:bold; color:Black;\">You can return the product after 5 months. &nbsp;&nbsp;</span> Make 5 months worth of consecutive payments and you can terminate the lease without any termination fees.</p>
                                <span style=\"font-size:12pt; font-weight:bold; color:Black;\">If you change your mind, return it to us within 10 days. &nbsp;&nbsp;</span> Within 10 days of the contract you can return the unopened product to us and we will refund your initial payment.
                            </td>
                        </tr>
                        <tr style=\"background-color:#C6D9F0; padding:10px; font-size:12pt; \">
                            <td style=\"vertical-align:middle; padding-right:20px;\">
                                <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("design/img/gift-flat.png"), "html", null, true);
        echo "\" alt=\"100 days same as cash\" style=\"width:50px;\">
                            </td>
                            <td style=\"padding-top:20px; padding-right:40px;\">
                                <p><span style=\"font-size:12pt; font-weight:bold; color:Black;\">100 days same as cash. &nbsp;&nbsp;</span> If you decide to purchase the product from us within 100 days of your lease agreement, we will apply any lease payments you have made toward the cash price.</p>
                                <p><span style=\"font-size:12pt; font-weight:bold; color:Black;\">Upgrade and get another product. &nbsp;&nbsp;</span> Make 3 months worth of consecutive payments and you will be eligible to trade for something newer or lease another product.  Subject to product availabilities and YuKeep approval.</p>
                                <span style=\"font-size:8pt; font-style:italic; color:Black; margin-top:30px; text-align:right;\">(This is only a summary, final terms and details will be reflected on lease)</span>
                            </td>
                        </tr>
                    </tbody></table>
                </div>
                <div class=\"span1\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_0264b0842214c8ab45b3b88e4fdfb7533e65e64df8d8ba76a7b8f780b67c6ed6->leave($__internal_0264b0842214c8ab45b3b88e4fdfb7533e65e64df8d8ba76a7b8f780b67c6ed6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 101,  132 => 91,  121 => 83,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"row\">
    <!-- Marketing Icons Section -->
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Get the coolest products regardless of your budget!
            </h1>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4><i class=\"glyphicon glyphicon-shopping-cart\"></i> Pick your product & Name  your payment</h4>
                </div>
                <div class=\"panel-body\">
                    <p>
                        We don't carry refurbished or repackaged items. All of our products are new and packaged by the manufacturer. Pick the product you want and then customize your payment with our payment calculator.
                    </p>
                    <!-- <a href=\"#\" class=\"btn btn-default\">Learn More</a> -->
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4><i class=\"glyphicon glyphicon-check\"></i> Submit a short application & Get approved</h4>
                </div>
                <div class=\"panel-body\">
                    <p>
                        Our short online application takes only minutes to complete. We will typically approve your submitted application the same day.
                        <br/>
                        <br/>
                        <br/>
                    </p>
                    <!-- <a href=\"#\" class=\"btn btn-default\">Learn More</a> -->
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4><i class=\"glyphicon glyphicon-gift\"></i> Enjoy your product in days & Own it in 12 months or less</h4>
                </div>
                <div class=\"panel-body\">
                    <p>
                        Your product is on the way as soon as you agree to the terms, sign the online lease agreement and provide any additional information that may be required to confirm your identity.
                        <br/>
                        <br/>
                    </p>
                    <!-- <a href=\"#\" class=\"btn btn-default\">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->



    <div id=\"pricing\">
        <div class=\"container\">
            <!-- header -->
            <h2 class=\"section_header\">
                <hr class=\"left visible-desktop\">
                <span>
                    How our lease works
                </span>
                <hr class=\"right visible-desktop\">
            </h2>

            <!-- pricing charts -->
            <div class=\"row\">
                <div class=\"span1\"></div>
                <div class=\"span10\">
                    <table class=\"table\">
                        <tbody><tr style=\"background-color:#8EB4E4; padding:10px;\">
                            <td colspan=\"2\" style=\"font-size:12pt; font-weight:bold; color:Black;\">
                                How Our Lease Works For You
                            </td>
                        </tr>
                        <tr style=\"background-color:#C6D9F0; padding:10px; font-size:12pt; \">
                            <td style=\"padding-right:20px;\">
                                <img src=\"{{ asset('design/img/tirelire-icon.png') }}\" alt=\"customize payment\" style=\"width:50px;\">
                            </td>
                            <td style=\"vertical-align:middle; padding-right:40px;\">
                                <span style=\"font-size:12pt; font-weight:bold; color:Black;\">You customize your payment. &nbsp;&nbsp;</span> Your lease payments are based on how often you get paid and how much refundable security deposit you want to put down. The larger your deposit, the lower your payment. If you decide to keep the product, we will apply your deposit toward the purchase, otherwise we will refund your deposit at the end of the lease.
                            </td>
                        </tr>
                        <tr style=\"background-color:#8EB4E4; padding:10px; font-size:12pt; \">
                            <td style=\"vertical-align:middle; padding-right:20px;\">
                                <img src=\"{{ asset('design/img/Icon-Clock-big.png') }}\" alt=\"Own the product in 12 months\" style=\"width:50px;\">
                            </td>
                            <td style=\"padding-top:20px; padding-bottom:20px; padding-right:40px;\">
                                <p><span style=\"font-size:12pt; font-weight:bold; color:Black;\">You can own your product in 12 months. &nbsp;&nbsp;</span> Our leases are for 5 months.  After 5 months you can own the product by making an additional seven months worth of payments.</p>
                                <p><span style=\"font-size:12pt; font-weight:bold; color:Black;\">You can return the product after 5 months. &nbsp;&nbsp;</span> Make 5 months worth of consecutive payments and you can terminate the lease without any termination fees.</p>
                                <span style=\"font-size:12pt; font-weight:bold; color:Black;\">If you change your mind, return it to us within 10 days. &nbsp;&nbsp;</span> Within 10 days of the contract you can return the unopened product to us and we will refund your initial payment.
                            </td>
                        </tr>
                        <tr style=\"background-color:#C6D9F0; padding:10px; font-size:12pt; \">
                            <td style=\"vertical-align:middle; padding-right:20px;\">
                                <img src=\"{{ asset('design/img/gift-flat.png') }}\" alt=\"100 days same as cash\" style=\"width:50px;\">
                            </td>
                            <td style=\"padding-top:20px; padding-right:40px;\">
                                <p><span style=\"font-size:12pt; font-weight:bold; color:Black;\">100 days same as cash. &nbsp;&nbsp;</span> If you decide to purchase the product from us within 100 days of your lease agreement, we will apply any lease payments you have made toward the cash price.</p>
                                <p><span style=\"font-size:12pt; font-weight:bold; color:Black;\">Upgrade and get another product. &nbsp;&nbsp;</span> Make 3 months worth of consecutive payments and you will be eligible to trade for something newer or lease another product.  Subject to product availabilities and YuKeep approval.</p>
                                <span style=\"font-size:8pt; font-style:italic; color:Black; margin-top:30px; text-align:right;\">(This is only a summary, final terms and details will be reflected on lease)</span>
                            </td>
                        </tr>
                    </tbody></table>
                </div>
                <div class=\"span1\"></div>
            </div>
        </div>
    </div>
{% endblock %}

", "default/index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\default\\index.html.twig");
    }
}
