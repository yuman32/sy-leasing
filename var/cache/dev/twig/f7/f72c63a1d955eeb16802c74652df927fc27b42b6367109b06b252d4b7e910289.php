<?php

/* admin/search/result.html.twig */
class __TwigTemplate_2ea99f57ea708ff3bb2b9d98fb2789ae9e7347990bc34a289cd11bfa6ac6b1ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/search/result.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_617b566dcd29f49df8a279bab4c719b48acce33f16c26ce590bc5292b2d8b9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617b566dcd29f49df8a279bab4c719b48acce33f16c26ce590bc5292b2d8b9ee->enter($__internal_617b566dcd29f49df8a279bab4c719b48acce33f16c26ce590bc5292b2d8b9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/search/result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617b566dcd29f49df8a279bab4c719b48acce33f16c26ce590bc5292b2d8b9ee->leave($__internal_617b566dcd29f49df8a279bab4c719b48acce33f16c26ce590bc5292b2d8b9ee_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_664d140e515dfde943f2fa2827a02b01a3fb1133696c3d9646faea1f8a50fc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664d140e515dfde943f2fa2827a02b01a3fb1133696c3d9646faea1f8a50fc87->enter($__internal_664d140e515dfde943f2fa2827a02b01a3fb1133696c3d9646faea1f8a50fc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_664d140e515dfde943f2fa2827a02b01a3fb1133696c3d9646faea1f8a50fc87->leave($__internal_664d140e515dfde943f2fa2827a02b01a3fb1133696c3d9646faea1f8a50fc87_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd643db779e6503e857300d2b1433b0aa2d51966afe18128f010f0bc41136174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd643db779e6503e857300d2b1433b0aa2d51966afe18128f010f0bc41136174->enter($__internal_fd643db779e6503e857300d2b1433b0aa2d51966afe18128f010f0bc41136174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h3>Result</h3>
  
 
   ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["query"] ?? $this->getContext($context, "query")));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            echo " 
              <div>
              
           Purchase N° ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
            echo " 
              amount: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "amount", array()), "html", null, true);
            echo " 
            
              </div>\t
                           
                          
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    
";
        
        $__internal_fd643db779e6503e857300d2b1433b0aa2d51966afe18128f010f0bc41136174->leave($__internal_fd643db779e6503e857300d2b1433b0aa2d51966afe18128f010f0bc41136174_prof);

    }

    public function getTemplateName()
    {
        return "admin/search/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  70 => 15,  66 => 14,  58 => 11,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
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

{% block header %}
{% endblock %}

{% block body %}

<h3>Result</h3>
  
 
   {% for q in query %} 
              <div>
              
           Purchase N° {{ q.id }} 
              amount: {{ q.amount}} 
            
              </div>\t
                           
                          
            {% endfor %}
    
{% endblock %}
", "admin/search/result.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\admin\\search\\result.html.twig");
    }
}
