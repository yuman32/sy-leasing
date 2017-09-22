<?php

/* :memberaccount:index.html.twig */
class __TwigTemplate_b14f04b5ed6b83f078a1383094884419be510b410c0eeb9dbf40070309aedf46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":memberaccount:index.html.twig", 1);
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
        $__internal_350b811733378e6cdb4e811a8ea32ad946dafbdeef7779f4de79460706157a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350b811733378e6cdb4e811a8ea32ad946dafbdeef7779f4de79460706157a8e->enter($__internal_350b811733378e6cdb4e811a8ea32ad946dafbdeef7779f4de79460706157a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":memberaccount:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_350b811733378e6cdb4e811a8ea32ad946dafbdeef7779f4de79460706157a8e->leave($__internal_350b811733378e6cdb4e811a8ea32ad946dafbdeef7779f4de79460706157a8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d84a0b8afa92d590b7e1cd85b7ceaa4bf217452ec3ce02b367523b44527d2291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84a0b8afa92d590b7e1cd85b7ceaa4bf217452ec3ce02b367523b44527d2291->enter($__internal_d84a0b8afa92d590b7e1cd85b7ceaa4bf217452ec3ce02b367523b44527d2291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Memberaccounts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Zip</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Employer</th>
                <th>Selfemployee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["memberAccounts"] ?? $this->getContext($context, "memberAccounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["memberAccount"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_details_show", array("id" => $this->getAttribute($context["memberAccount"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberAccount"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberAccount"], "fname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberAccount"], "lname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["memberAccount"], "birthday", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["memberAccount"], "birthday", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberAccount"], "gender", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberAccount"], "zip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberAccount"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberAccount"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberAccount"], "employer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["memberAccount"], "selfEmployee", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_details_show", array("id" => $this->getAttribute($context["memberAccount"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_details_edit", array("id" => $this->getAttribute($context["memberAccount"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberAccount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_details_new");
        echo "\">Create a new memberAccount</a>
        </li>
    </ul>
";
        
        $__internal_d84a0b8afa92d590b7e1cd85b7ceaa4bf217452ec3ce02b367523b44527d2291->leave($__internal_d84a0b8afa92d590b7e1cd85b7ceaa4bf217452ec3ce02b367523b44527d2291_prof);

    }

    public function getTemplateName()
    {
        return ":memberaccount:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  137 => 47,  125 => 41,  119 => 38,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Memberaccounts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Zip</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Employer</th>
                <th>Selfemployee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for memberAccount in memberAccounts %}
            <tr>
                <td><a href=\"{{ path('member_details_show', { 'id': memberAccount.id }) }}\">{{ memberAccount.id }}</a></td>
                <td>{{ memberAccount.fname }}</td>
                <td>{{ memberAccount.lname }}</td>
                <td>{% if memberAccount.birthday %}{{ memberAccount.birthday|date('Y-m-d') }}{% endif %}</td>
                <td>{{ memberAccount.gender }}</td>
                <td>{{ memberAccount.zip }}</td>
                <td>{{ memberAccount.phone }}</td>
                <td>{{ memberAccount.address }}</td>
                <td>{{ memberAccount.employer }}</td>
                <td>{% if memberAccount.selfEmployee %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('member_details_show', { 'id': memberAccount.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('member_details_edit', { 'id': memberAccount.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('member_details_new') }}\">Create a new memberAccount</a>
        </li>
    </ul>
{% endblock %}
", ":memberaccount:index.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/memberaccount/index.html.twig");
    }
}
