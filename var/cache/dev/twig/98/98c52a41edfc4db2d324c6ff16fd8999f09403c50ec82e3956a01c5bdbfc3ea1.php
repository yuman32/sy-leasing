<?php

/* admin/category/show.html.twig */
class __TwigTemplate_ce7d96ac7771e2cbec9ba3e620a35f6c2bd3c6447772622e5b9f9ed269246f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/category/show.html.twig", 1);
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
        $__internal_5beb22d0f509d05696ea837c8c6b449d874a8afa0afc2fcc660db1c23be38803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5beb22d0f509d05696ea837c8c6b449d874a8afa0afc2fcc660db1c23be38803->enter($__internal_5beb22d0f509d05696ea837c8c6b449d874a8afa0afc2fcc660db1c23be38803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5beb22d0f509d05696ea837c8c6b449d874a8afa0afc2fcc660db1c23be38803->leave($__internal_5beb22d0f509d05696ea837c8c6b449d874a8afa0afc2fcc660db1c23be38803_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0e8fdf35cca8bd446c915ba869ff23e22843d7d70e7e53ccc6ae249a4e92836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e8fdf35cca8bd446c915ba869ff23e22843d7d70e7e53ccc6ae249a4e92836->enter($__internal_f0e8fdf35cca8bd446c915ba869ff23e22843d7d70e7e53ccc6ae249a4e92836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "photo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parent</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "parent", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admincategory_edit", array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f0e8fdf35cca8bd446c915ba869ff23e22843d7d70e7e53ccc6ae249a4e92836->leave($__internal_f0e8fdf35cca8bd446c915ba869ff23e22843d7d70e7e53ccc6ae249a4e92836_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ category.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ category.description }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ category.photo }}</td>
            </tr>
            <tr>
                <th>Parent</th>
                <td>{{ category.parent }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_categories') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admincategory_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "admin/category/show.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\admin\\category\\show.html.twig");
    }
}
