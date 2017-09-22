<?php

/* purchase/index.html.twig */
class __TwigTemplate_a4a0dbe7cfdfaa608f2060e177a9589453756692691b2490c83d2b4d76c321cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "purchase/index.html.twig", 1);
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
        $__internal_9e4b56e6af900854ac339ce16c2edca38193fd95849da7eb1fcf22e37a8516ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4b56e6af900854ac339ce16c2edca38193fd95849da7eb1fcf22e37a8516ea->enter($__internal_9e4b56e6af900854ac339ce16c2edca38193fd95849da7eb1fcf22e37a8516ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4b56e6af900854ac339ce16c2edca38193fd95849da7eb1fcf22e37a8516ea->leave($__internal_9e4b56e6af900854ac339ce16c2edca38193fd95849da7eb1fcf22e37a8516ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2cf1bd2172a755f7419e0144939edb5b5c12ff02b214cc9a4532080718f562d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cf1bd2172a755f7419e0144939edb5b5c12ff02b214cc9a4532080718f562d->enter($__internal_b2cf1bd2172a755f7419e0144939edb5b5c12ff02b214cc9a4532080718f562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Purchases list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datepurchase</th>
                <th>Amount</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["purchases"] ?? $this->getContext($context, "purchases")));
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_show", array("id" => $this->getAttribute($context["purchase"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["purchase"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["purchase"], "datePurchase", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["purchase"], "datePurchase", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["purchase"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["purchase"], "duration", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_show", array("id" => $this->getAttribute($context["purchase"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_edit", array("id" => $this->getAttribute($context["purchase"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_new");
        echo "\">Create a new purchase</a>
        </li>
    </ul>
";
        
        $__internal_b2cf1bd2172a755f7419e0144939edb5b5c12ff02b214cc9a4532080718f562d->leave($__internal_b2cf1bd2172a755f7419e0144939edb5b5c12ff02b214cc9a4532080718f562d_prof);

    }

    public function getTemplateName()
    {
        return "purchase/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  78 => 22,  74 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Purchases list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datepurchase</th>
                <th>Amount</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for purchase in purchases %}
            <tr>
                <td><a href=\"{{ path('purchase_show', { 'id': purchase.id }) }}\">{{ purchase.id }}</a></td>
                <td>{% if purchase.datePurchase %}{{ purchase.datePurchase|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ purchase.amount }}</td>
                <td>{{ purchase.duration }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('purchase_show', { 'id': purchase.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('purchase_edit', { 'id': purchase.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('purchase_new') }}\">Create a new purchase</a>
        </li>
    </ul>
{% endblock %}
", "purchase/index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\purchase\\index.html.twig");
    }
}
