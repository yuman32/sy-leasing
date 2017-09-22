<?php

/* memberaccount/new.html.twig */
class __TwigTemplate_94b32bc969655f572c7d28db645b9ffe7b4b143f6993308f248169ca5c7883a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "memberaccount/new.html.twig", 1);
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
        $__internal_837b1029a3af9582061360807bb87a3074ac4311be39a32a362fe20ed71faa96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837b1029a3af9582061360807bb87a3074ac4311be39a32a362fe20ed71faa96->enter($__internal_837b1029a3af9582061360807bb87a3074ac4311be39a32a362fe20ed71faa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "memberaccount/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837b1029a3af9582061360807bb87a3074ac4311be39a32a362fe20ed71faa96->leave($__internal_837b1029a3af9582061360807bb87a3074ac4311be39a32a362fe20ed71faa96_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0dbefff3563053b7c6a34767b058d36d3efb975b56842b980759350548f977d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbefff3563053b7c6a34767b058d36d3efb975b56842b980759350548f977d0->enter($__internal_0dbefff3563053b7c6a34767b058d36d3efb975b56842b980759350548f977d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_0dbefff3563053b7c6a34767b058d36d3efb975b56842b980759350548f977d0->leave($__internal_0dbefff3563053b7c6a34767b058d36d3efb975b56842b980759350548f977d0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8734e7e137c9f79e931e28b80d72743de48c4ff8b32ba08aa849c2e9d27994e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8734e7e137c9f79e931e28b80d72743de48c4ff8b32ba08aa849c2e9d27994e0->enter($__internal_8734e7e137c9f79e931e28b80d72743de48c4ff8b32ba08aa849c2e9d27994e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8734e7e137c9f79e931e28b80d72743de48c4ff8b32ba08aa849c2e9d27994e0->leave($__internal_8734e7e137c9f79e931e28b80d72743de48c4ff8b32ba08aa849c2e9d27994e0_prof);

    }

    public function getTemplateName()
    {
        return "memberaccount/new.html.twig";
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
", "memberaccount/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\memberaccount\\new.html.twig");
    }
}
