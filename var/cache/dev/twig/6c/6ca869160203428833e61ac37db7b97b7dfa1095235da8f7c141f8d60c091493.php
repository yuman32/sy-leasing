<?php

/* 1base.html.twig */
class __TwigTemplate_768b2ff5e08addd25b2eca59475185b81a060c8f38863ec9e08c0b73a6227ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cb8e944a09a8d2bbe9824a5e5d57af41fbce4984684453c4896971dc68d18f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb8e944a09a8d2bbe9824a5e5d57af41fbce4984684453c4896971dc68d18f9->enter($__internal_4cb8e944a09a8d2bbe9824a5e5d57af41fbce4984684453c4896971dc68d18f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "1base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4cb8e944a09a8d2bbe9824a5e5d57af41fbce4984684453c4896971dc68d18f9->leave($__internal_4cb8e944a09a8d2bbe9824a5e5d57af41fbce4984684453c4896971dc68d18f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_73c06e992b49ea3c632d7c4724348bb052d16dd4456ca982d2970c5dd1780ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c06e992b49ea3c632d7c4724348bb052d16dd4456ca982d2970c5dd1780ad7->enter($__internal_73c06e992b49ea3c632d7c4724348bb052d16dd4456ca982d2970c5dd1780ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_73c06e992b49ea3c632d7c4724348bb052d16dd4456ca982d2970c5dd1780ad7->leave($__internal_73c06e992b49ea3c632d7c4724348bb052d16dd4456ca982d2970c5dd1780ad7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc2f208d7dd47721a0d9a8ae1e15d33045b5f2132415a03f5338deeb193a26c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2f208d7dd47721a0d9a8ae1e15d33045b5f2132415a03f5338deeb193a26c1->enter($__internal_cc2f208d7dd47721a0d9a8ae1e15d33045b5f2132415a03f5338deeb193a26c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc2f208d7dd47721a0d9a8ae1e15d33045b5f2132415a03f5338deeb193a26c1->leave($__internal_cc2f208d7dd47721a0d9a8ae1e15d33045b5f2132415a03f5338deeb193a26c1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c8c771ecba4472e9e243ec1d2ccebf01f15195ecbd7b959c58df54308de9971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8c771ecba4472e9e243ec1d2ccebf01f15195ecbd7b959c58df54308de9971->enter($__internal_1c8c771ecba4472e9e243ec1d2ccebf01f15195ecbd7b959c58df54308de9971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c8c771ecba4472e9e243ec1d2ccebf01f15195ecbd7b959c58df54308de9971->leave($__internal_1c8c771ecba4472e9e243ec1d2ccebf01f15195ecbd7b959c58df54308de9971_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3bb578c35b1e83770cb3169e43ecd235c645e63a08b5029617fde0ee8eef629a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb578c35b1e83770cb3169e43ecd235c645e63a08b5029617fde0ee8eef629a->enter($__internal_3bb578c35b1e83770cb3169e43ecd235c645e63a08b5029617fde0ee8eef629a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3bb578c35b1e83770cb3169e43ecd235c645e63a08b5029617fde0ee8eef629a->leave($__internal_3bb578c35b1e83770cb3169e43ecd235c645e63a08b5029617fde0ee8eef629a_prof);

    }

    public function getTemplateName()
    {
        return "1base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "1base.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\1base.html.twig");
    }
}
