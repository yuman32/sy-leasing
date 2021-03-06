<?php

/* :product:show.html.twig */
class __TwigTemplate_25f88bd8888a4e3fef1b9592a2c59f9baf02fe916f0524022c81b1298a4870fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:show.html.twig", 1);
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
        $__internal_a46c329cc30bb50281be810333bc24a309344ae9e3703dd727ef49e4ad62ae4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46c329cc30bb50281be810333bc24a309344ae9e3703dd727ef49e4ad62ae4e->enter($__internal_a46c329cc30bb50281be810333bc24a309344ae9e3703dd727ef49e4ad62ae4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a46c329cc30bb50281be810333bc24a309344ae9e3703dd727ef49e4ad62ae4e->leave($__internal_a46c329cc30bb50281be810333bc24a309344ae9e3703dd727ef49e4ad62ae4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c8c67aa5365ca8c8e4e88fd1fb71017076b4bb691f0dc7fb0c06003013f71e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8c67aa5365ca8c8e4e88fd1fb71017076b4bb691f0dc7fb0c06003013f71e4->enter($__internal_5c8c67aa5365ca8c8e4e88fd1fb71017076b4bb691f0dc7fb0c06003013f71e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "photo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
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
        
        $__internal_5c8c67aa5365ca8c8e4e88fd1fb71017076b4bb691f0dc7fb0c06003013f71e4->leave($__internal_5c8c67aa5365ca8c8e4e88fd1fb71017076b4bb691f0dc7fb0c06003013f71e4_prof);

    }

    public function getTemplateName()
    {
        return ":product:show.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ product.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ product.description }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ product.photo }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":product:show.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/product/show.html.twig");
    }
}
