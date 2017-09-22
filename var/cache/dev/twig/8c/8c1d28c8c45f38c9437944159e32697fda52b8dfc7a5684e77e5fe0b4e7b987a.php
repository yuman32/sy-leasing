<?php

/* :memberaccount:show.html.twig */
class __TwigTemplate_5a0fd0d60203ca70fa0f1f98f8b5c2cba5ab5853fd75b7caedb0cc5a072f1a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":memberaccount:show.html.twig", 1);
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
        $__internal_f0eae7fa0474ce086c4fe3702bcdb3b25faddb6a126698ec50c96610ee1117f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0eae7fa0474ce086c4fe3702bcdb3b25faddb6a126698ec50c96610ee1117f4->enter($__internal_f0eae7fa0474ce086c4fe3702bcdb3b25faddb6a126698ec50c96610ee1117f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":memberaccount:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0eae7fa0474ce086c4fe3702bcdb3b25faddb6a126698ec50c96610ee1117f4->leave($__internal_f0eae7fa0474ce086c4fe3702bcdb3b25faddb6a126698ec50c96610ee1117f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26d10c6215f64aa9038a34646a20379dd0ef0ddb576ddf81ba7b5ea7092a4e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d10c6215f64aa9038a34646a20379dd0ef0ddb576ddf81ba7b5ea7092a4e46->enter($__internal_26d10c6215f64aa9038a34646a20379dd0ef0ddb576ddf81ba7b5ea7092a4e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Memberaccount</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "fname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "lname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "birthday", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "birthday", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "gender", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zip</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "zip", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "phone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Employer</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "employer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Selfemployee</th>
                <td>";
        // line 46
        if ($this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "selfEmployee", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_details_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_details_edit", array("id" => $this->getAttribute(($context["memberAccount"] ?? $this->getContext($context, "memberAccount")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_26d10c6215f64aa9038a34646a20379dd0ef0ddb576ddf81ba7b5ea7092a4e46->leave($__internal_26d10c6215f64aa9038a34646a20379dd0ef0ddb576ddf81ba7b5ea7092a4e46_prof);

    }

    public function getTemplateName()
    {
        return ":memberaccount:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 61,  139 => 59,  133 => 56,  127 => 53,  113 => 46,  106 => 42,  99 => 38,  92 => 34,  85 => 30,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Memberaccount</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ memberAccount.id }}</td>
            </tr>
            <tr>
                <th>Fname</th>
                <td>{{ memberAccount.fname }}</td>
            </tr>
            <tr>
                <th>Lname</th>
                <td>{{ memberAccount.lname }}</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>{% if memberAccount.birthday %}{{ memberAccount.birthday|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ memberAccount.gender }}</td>
            </tr>
            <tr>
                <th>Zip</th>
                <td>{{ memberAccount.zip }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ memberAccount.phone }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ memberAccount.address }}</td>
            </tr>
            <tr>
                <th>Employer</th>
                <td>{{ memberAccount.employer }}</td>
            </tr>
            <tr>
                <th>Selfemployee</th>
                <td>{% if memberAccount.selfEmployee %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('member_details_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('member_details_edit', { 'id': memberAccount.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":memberaccount:show.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/memberaccount/show.html.twig");
    }
}
