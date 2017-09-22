<?php

/* ::1base.html.twig */
class __TwigTemplate_9de0f5b33c0e6cd64bb22cbabc2c1ef37bdc6ef75a466fdbbe9d18e9f41db49b extends Twig_Template
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
        $__internal_2c3501c094eef2444801affbd196fbcc7ceea22b1f2381774834907fd88c3ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3501c094eef2444801affbd196fbcc7ceea22b1f2381774834907fd88c3ec5->enter($__internal_2c3501c094eef2444801affbd196fbcc7ceea22b1f2381774834907fd88c3ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::1base.html.twig"));

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
        
        $__internal_2c3501c094eef2444801affbd196fbcc7ceea22b1f2381774834907fd88c3ec5->leave($__internal_2c3501c094eef2444801affbd196fbcc7ceea22b1f2381774834907fd88c3ec5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fb8cd79311ac15bfffeb1cad2c50fb2d422dffd12c2765f4d7b9d5bb9467ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb8cd79311ac15bfffeb1cad2c50fb2d422dffd12c2765f4d7b9d5bb9467ec4->enter($__internal_5fb8cd79311ac15bfffeb1cad2c50fb2d422dffd12c2765f4d7b9d5bb9467ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5fb8cd79311ac15bfffeb1cad2c50fb2d422dffd12c2765f4d7b9d5bb9467ec4->leave($__internal_5fb8cd79311ac15bfffeb1cad2c50fb2d422dffd12c2765f4d7b9d5bb9467ec4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fe57900fe61161f3d755f7bb807a4b82d64022f6cc67e1f14a03cc3cd08194f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe57900fe61161f3d755f7bb807a4b82d64022f6cc67e1f14a03cc3cd08194f->enter($__internal_5fe57900fe61161f3d755f7bb807a4b82d64022f6cc67e1f14a03cc3cd08194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5fe57900fe61161f3d755f7bb807a4b82d64022f6cc67e1f14a03cc3cd08194f->leave($__internal_5fe57900fe61161f3d755f7bb807a4b82d64022f6cc67e1f14a03cc3cd08194f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9489ed1276b295b6a218ffbece82d413713ec87dfcb55d8c1afe37e7dd39d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9489ed1276b295b6a218ffbece82d413713ec87dfcb55d8c1afe37e7dd39d82->enter($__internal_c9489ed1276b295b6a218ffbece82d413713ec87dfcb55d8c1afe37e7dd39d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9489ed1276b295b6a218ffbece82d413713ec87dfcb55d8c1afe37e7dd39d82->leave($__internal_c9489ed1276b295b6a218ffbece82d413713ec87dfcb55d8c1afe37e7dd39d82_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_351879a8cb8262925f97d3b18781977378007c67f807545c145e3b95bdde5065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351879a8cb8262925f97d3b18781977378007c67f807545c145e3b95bdde5065->enter($__internal_351879a8cb8262925f97d3b18781977378007c67f807545c145e3b95bdde5065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_351879a8cb8262925f97d3b18781977378007c67f807545c145e3b95bdde5065->leave($__internal_351879a8cb8262925f97d3b18781977378007c67f807545c145e3b95bdde5065_prof);

    }

    public function getTemplateName()
    {
        return "::1base.html.twig";
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
", "::1base.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/1base.html.twig");
    }
}
