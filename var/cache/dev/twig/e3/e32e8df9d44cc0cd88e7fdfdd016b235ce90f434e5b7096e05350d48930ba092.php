<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e55c20069cfef53506a8762702083f536d4c4e432d62b9378a3e56f36db9906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_3b9fa4c4e09a067ab1e67f4a31a98d9b1913fe82f3063dcbccb95b7c0c9b86fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9fa4c4e09a067ab1e67f4a31a98d9b1913fe82f3063dcbccb95b7c0c9b86fe->enter($__internal_3b9fa4c4e09a067ab1e67f4a31a98d9b1913fe82f3063dcbccb95b7c0c9b86fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b9fa4c4e09a067ab1e67f4a31a98d9b1913fe82f3063dcbccb95b7c0c9b86fe->leave($__internal_3b9fa4c4e09a067ab1e67f4a31a98d9b1913fe82f3063dcbccb95b7c0c9b86fe_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_123787f4355fc5f8580024e0d12a3fcda2e2e536576fc6ce2032dcb94602767e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123787f4355fc5f8580024e0d12a3fcda2e2e536576fc6ce2032dcb94602767e->enter($__internal_123787f4355fc5f8580024e0d12a3fcda2e2e536576fc6ce2032dcb94602767e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_123787f4355fc5f8580024e0d12a3fcda2e2e536576fc6ce2032dcb94602767e->leave($__internal_123787f4355fc5f8580024e0d12a3fcda2e2e536576fc6ce2032dcb94602767e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a08363aad969b55ddcebb9da8c813d33db02377529e920d65e9042a1620813f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a08363aad969b55ddcebb9da8c813d33db02377529e920d65e9042a1620813f->enter($__internal_7a08363aad969b55ddcebb9da8c813d33db02377529e920d65e9042a1620813f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"row\">
\t\t";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 45
        echo "\t</div>
";
        
        $__internal_7a08363aad969b55ddcebb9da8c813d33db02377529e920d65e9042a1620813f->leave($__internal_7a08363aad969b55ddcebb9da8c813d33db02377529e920d65e9042a1620813f_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68b64bc5cd13d590d82e490520be012ee89253d77ae91802f20490bf9c4856ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b64bc5cd13d590d82e490520be012ee89253d77ae91802f20490bf9c4856ea->enter($__internal_68b64bc5cd13d590d82e490520be012ee89253d77ae91802f20490bf9c4856ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t\t";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t\t    <label for=\"username\"> Username </label>
\t\t\t\t\t    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_68b64bc5cd13d590d82e490520be012ee89253d77ae91802f20490bf9c4856ea->leave($__internal_68b64bc5cd13d590d82e490520be012ee89253d77ae91802f20490bf9c4856ea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  98 => 21,  94 => 20,  88 => 17,  81 => 12,  75 => 10,  72 => 9,  66 => 8,  58 => 45,  56 => 8,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
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
\t<div class=\"row\">
\t\t{% block fos_user_content %}
\t\t{% if error %}
\t\t    <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
\t\t{% endif %}

\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<div class=\"panel panel-default\" style=\"margin-top:30px;\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\"> Login into your account before purchase or 
\t                <span class=\"label label-success\"><a style=\"color:white;\" href=\"{{ path('fos_user_registration_register') }}\"> SIgn up here  </a> </span></h3>
\t            </div>
\t            <div class=\"panel-body\">
\t            \t<form class=\"horizontal-form col-md-6 col-md-offset-3\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

\t\t\t\t\t    <label for=\"username\"> Username </label>
\t\t\t\t\t    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

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
\t\t{% endblock fos_user_content %}
\t</div>
{% endblock %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
