<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a1e60c268b6b6ed6356c7020a3e705a80a7064deadcdc153b343cb0e3ae34991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_581e4880fa9bae6579f06be5f26b943bd6264f10bc2e2b4eb0f4793924aba9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581e4880fa9bae6579f06be5f26b943bd6264f10bc2e2b4eb0f4793924aba9b1->enter($__internal_581e4880fa9bae6579f06be5f26b943bd6264f10bc2e2b4eb0f4793924aba9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "\t<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">

\t\t";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t\t<div>
\t\t\t<br/>
\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t</div>
\t</form>
";
        
        $__internal_581e4880fa9bae6579f06be5f26b943bd6264f10bc2e2b4eb0f4793924aba9b1->leave($__internal_581e4880fa9bae6579f06be5f26b943bd6264f10bc2e2b4eb0f4793924aba9b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t<form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">

\t\t{{ form_widget(form) }}
\t\t<div>
\t\t\t<br/>
\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" />
\t\t</div>
\t</form>
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
