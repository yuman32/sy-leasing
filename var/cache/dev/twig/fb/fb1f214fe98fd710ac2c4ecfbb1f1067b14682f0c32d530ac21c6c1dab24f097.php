<?php

/* :memberaccount:new.html.twig */
class __TwigTemplate_496b22ea7063429b17e645cf8d1ca0cfbc3a32eb72795c05e41aac39b72f573b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":memberaccount:new.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a815cab93d807019ae140a98f6f8f4c1772e5fd1ce1a6ec86ce18c6f55b0033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a815cab93d807019ae140a98f6f8f4c1772e5fd1ce1a6ec86ce18c6f55b0033->enter($__internal_1a815cab93d807019ae140a98f6f8f4c1772e5fd1ce1a6ec86ce18c6f55b0033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":memberaccount:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a815cab93d807019ae140a98f6f8f4c1772e5fd1ce1a6ec86ce18c6f55b0033->leave($__internal_1a815cab93d807019ae140a98f6f8f4c1772e5fd1ce1a6ec86ce18c6f55b0033_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d01dc6cf54b9694c204be4019631dd90d671f9b37dd3258d5715a2a742bfd912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01dc6cf54b9694c204be4019631dd90d671f9b37dd3258d5715a2a742bfd912->enter($__internal_d01dc6cf54b9694c204be4019631dd90d671f9b37dd3258d5715a2a742bfd912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_d01dc6cf54b9694c204be4019631dd90d671f9b37dd3258d5715a2a742bfd912->leave($__internal_d01dc6cf54b9694c204be4019631dd90d671f9b37dd3258d5715a2a742bfd912_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecc9f13f9d84ff418b8b23fe4e86b1db5949f53c42b0a98da82273100936f222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc9f13f9d84ff418b8b23fe4e86b1db5949f53c42b0a98da82273100936f222->enter($__internal_ecc9f13f9d84ff418b8b23fe4e86b1db5949f53c42b0a98da82273100936f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Member account creation</h1>

    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div  class=\"form-row col-md-12\">
            <br style=\"clear:both;\" />
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> First name </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> Last name </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"form-group\">
                    <label> Birthday </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"form-group\">
                    <label> Gender </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> Phone </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"form-group\">
                    <label> Zip </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label> Address </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> Your employer </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "employer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"form-group\">
                    <label> Are you self employed </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "selfEmployee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> &nbsp; </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Create your account\" />
                    </div>
                </div>
            </div>


            ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            
        </div>
    ";
        // line 97
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_ecc9f13f9d84ff418b8b23fe4e86b1db5949f53c42b0a98da82273100936f222->leave($__internal_ecc9f13f9d84ff418b8b23fe4e86b1db5949f53c42b0a98da82273100936f222_prof);

    }

    public function getTemplateName()
    {
        return ":memberaccount:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 97,  171 => 94,  154 => 80,  143 => 72,  132 => 64,  121 => 56,  110 => 48,  99 => 40,  88 => 32,  77 => 24,  66 => 16,  56 => 9,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
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

{% block header %}
{% endblock %}

{% block body %}
    <h1>Member account creation</h1>

    {{ form_start(form) }}
        <div  class=\"form-row col-md-12\">
            <br style=\"clear:both;\" />
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> First name </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.fname,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> Last name </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.lname,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"form-group\">
                    <label> Birthday </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.birthday,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"form-group\">
                    <label> Gender </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.gender,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> Phone </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.phone,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"form-group\">
                    <label> Zip </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.zip,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label> Address </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.address,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> Your employer </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.employer,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"form-group\">
                    <label> Are you self employed </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        {{ form_widget(form.selfEmployee,{'attr': {'class': 'form-control'} }) }}                             
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> &nbsp; </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Create your account\" />
                    </div>
                </div>
            </div>


            {{ form_widget(form) }}
            
        </div>
    {{ form_end(form) }}


{% endblock %}
", ":memberaccount:new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app/Resources\\views/memberaccount/new.html.twig");
    }
}
