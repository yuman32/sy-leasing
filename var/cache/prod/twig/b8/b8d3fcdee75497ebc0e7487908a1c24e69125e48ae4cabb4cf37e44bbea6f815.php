<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0019c1350da701e8950e954e74b0d07c4bb421049a30b386e4dc1b37fa167a7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "\t<div class=\"row\">
\t\t";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 45
        echo "\t</div>
";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "\t\t";
        if (($context["error"] ?? null)) {
            // line 10
            echo "\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 12
        echo "
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<div class=\"panel panel-default\" style=\"margin-top:30px;\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\"> Login into your account before purchase or 
\t                <span class=\"label label-success\"><a style=\"color:white;\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"> SIgn up here  </a> </span></h3>
\t            </div>
\t            <div class=\"panel-body\">
\t            \t<form class=\"horizontal-form col-md-6 col-md-offset-3\" action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />

\t\t\t\t\t    <label for=\"username\"> Username </label>
\t\t\t\t\t    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" />

\t\t\t\t\t    <label for=\"password\"> Password </label>
\t\t\t\t\t    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t    <label for=\"remember_me\"> Remember me </label>
\t\t\t\t\t    <br/>

\t\t\t\t\t    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Sign in\" />
\t\t\t\t\t</form>
\t            </div>
\t            
\t        </div>
\t\t</div>




\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  77 => 21,  73 => 20,  67 => 17,  60 => 12,  54 => 10,  51 => 9,  48 => 8,  43 => 45,  41 => 8,  38 => 7,  35 => 6,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
