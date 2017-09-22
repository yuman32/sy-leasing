<?php

/* :admin/category:edit.html.twig */
class __TwigTemplate_0c0d4b2b72a61b131480dc5c1dda6430b8f9eee0618aca42abd121acbd77e988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/category:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89c6cb024f34b51fcf4a5d487f27f40177167711888fd915f5f3fc0f33d0eaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c6cb024f34b51fcf4a5d487f27f40177167711888fd915f5f3fc0f33d0eaf0->enter($__internal_89c6cb024f34b51fcf4a5d487f27f40177167711888fd915f5f3fc0f33d0eaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89c6cb024f34b51fcf4a5d487f27f40177167711888fd915f5f3fc0f33d0eaf0->leave($__internal_89c6cb024f34b51fcf4a5d487f27f40177167711888fd915f5f3fc0f33d0eaf0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d369db1cfad312ea07b1f34a28a7faaa612c5735f062137c707ae1cfb50c8f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d369db1cfad312ea07b1f34a28a7faaa612c5735f062137c707ae1cfb50c8f91->enter($__internal_d369db1cfad312ea07b1f34a28a7faaa612c5735f062137c707ae1cfb50c8f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d369db1cfad312ea07b1f34a28a7faaa612c5735f062137c707ae1cfb50c8f91->leave($__internal_d369db1cfad312ea07b1f34a28a7faaa612c5735f062137c707ae1cfb50c8f91_prof);

    }

    public function getTemplateName()
    {
        return ":admin/category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block body %}
    <h1>Category edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":admin/category:edit.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/admin/category/edit.html.twig");
    }
}
