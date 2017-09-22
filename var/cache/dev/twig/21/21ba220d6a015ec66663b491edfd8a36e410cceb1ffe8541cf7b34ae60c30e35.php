<?php

/* :purchase:show.html.twig */
class __TwigTemplate_ede1f8c3dc85fe18d102ab3c091a2c29b0f5fb8fb28eff8b4242df7119595806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":purchase:show.html.twig", 1);
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
        $__internal_ed85ec83f0e9f102614d4bf3e4448c2d99e4cc94a9b60bebf06910b3a95b87b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed85ec83f0e9f102614d4bf3e4448c2d99e4cc94a9b60bebf06910b3a95b87b3->enter($__internal_ed85ec83f0e9f102614d4bf3e4448c2d99e4cc94a9b60bebf06910b3a95b87b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":purchase:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed85ec83f0e9f102614d4bf3e4448c2d99e4cc94a9b60bebf06910b3a95b87b3->leave($__internal_ed85ec83f0e9f102614d4bf3e4448c2d99e4cc94a9b60bebf06910b3a95b87b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1bd553e38a46e92b7248329f60970072336a29ee52cb97002fb67541645b1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bd553e38a46e92b7248329f60970072336a29ee52cb97002fb67541645b1d8->enter($__internal_b1bd553e38a46e92b7248329f60970072336a29ee52cb97002fb67541645b1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Purchase</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepurchase</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "datePurchase", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "datePurchase", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "duration", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_edit", array("id" => $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b1bd553e38a46e92b7248329f60970072336a29ee52cb97002fb67541645b1d8->leave($__internal_b1bd553e38a46e92b7248329f60970072336a29ee52cb97002fb67541645b1d8_prof);

    }

    public function getTemplateName()
    {
        return ":purchase:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Purchase</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ purchase.id }}</td>
            </tr>
            <tr>
                <th>Datepurchase</th>
                <td>{% if purchase.datePurchase %}{{ purchase.datePurchase|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ purchase.amount }}</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>{{ purchase.duration }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('purchase_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('purchase_edit', { 'id': purchase.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":purchase:show.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/purchase/show.html.twig");
    }
}
