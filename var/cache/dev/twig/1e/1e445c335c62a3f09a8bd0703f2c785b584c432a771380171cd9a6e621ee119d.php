<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_dd9e8893560df10fd129b9aa56c3c2b9eca84c4f3e9e3ac7fb5e4896019d2db3 extends Twig_Template
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
        $__internal_b2ef29684844916ac5e67329e899ca3be9e3d9d5152f5c52753d005dd8a2421a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ef29684844916ac5e67329e899ca3be9e3d9d5152f5c52753d005dd8a2421a->enter($__internal_b2ef29684844916ac5e67329e899ca3be9e3d9d5152f5c52753d005dd8a2421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b2ef29684844916ac5e67329e899ca3be9e3d9d5152f5c52753d005dd8a2421a->leave($__internal_b2ef29684844916ac5e67329e899ca3be9e3d9d5152f5c52753d005dd8a2421a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\sy-leasing\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/show_content.html.twig");
    }
}
