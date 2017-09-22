<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4206796944a7c986fa817a1616438acfa4de7f26ef30e7228021473c6843b823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "\t<div class=\"col-md-6 col-md-offset-3\">
\t\t<div class=\"panel panel-default\" style=\"margin-top:30px;\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> Create your account or 
                <span class=\"label label-success\"><a style=\"color:white;\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"> SIgn in here  </a> </span></h3>
            </div>
            <div class=\"panel-body\">

\t\t\t\t";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "\t\t\t</div>
\t\t</div>
\t</div>


";
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t\t";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t\t";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$('input').addClass('form-control');
\t\t\$('form').addClass('horizontal-form col-md-6 col-md-offset-3');
\t\t// alert('ff');
\t</script>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  73 => 24,  69 => 17,  66 => 16,  63 => 15,  54 => 18,  52 => 15,  45 => 11,  39 => 7,  36 => 6,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
