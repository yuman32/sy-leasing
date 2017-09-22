<?php

/* purchase/new.html.twig */
class __TwigTemplate_0a26ce435572a92ad90153682797617a9fcb073402145f9a01aaf234f5aa09c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "purchase/new.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_323ee579d5d57415e046c905931753a4b6b908a9e25cbe49a35725686790e4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323ee579d5d57415e046c905931753a4b6b908a9e25cbe49a35725686790e4ea->enter($__internal_323ee579d5d57415e046c905931753a4b6b908a9e25cbe49a35725686790e4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "purchase/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323ee579d5d57415e046c905931753a4b6b908a9e25cbe49a35725686790e4ea->leave($__internal_323ee579d5d57415e046c905931753a4b6b908a9e25cbe49a35725686790e4ea_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c6a4811b621382eefbaca95caad76e358540b5ca05f232a3bd53959230648956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a4811b621382eefbaca95caad76e358540b5ca05f232a3bd53959230648956->enter($__internal_c6a4811b621382eefbaca95caad76e358540b5ca05f232a3bd53959230648956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        
        $__internal_c6a4811b621382eefbaca95caad76e358540b5ca05f232a3bd53959230648956->leave($__internal_c6a4811b621382eefbaca95caad76e358540b5ca05f232a3bd53959230648956_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa1c3d44cac12b9d1555467d95ad34be285eb76f0bd96c0482712eef4f53dcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1c3d44cac12b9d1555467d95ad34be285eb76f0bd96c0482712eef4f53dcb6->enter($__internal_fa1c3d44cac12b9d1555467d95ad34be285eb76f0bd96c0482712eef4f53dcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Purchase
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-8\">
            <img style=\"width:80%;\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("design/uploads/" . $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "photo", array()))), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-4\">
            <h3> Article details </h3>
            <p style=\"height:50px;\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo " </p>
            <p > Price : \$";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo " </p>


            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div  class=\"form-row col-md-12\">
                <!-- <div class=\"range-slider\"  style=\"border:solid 1px red;\"> -->
                    <br style=\"clear:both;\" />
                    <div class=\"form-group\">
                        <label> Choose your monthly payment</label>
                        <div class=\"range-slider\" style=\"margin:0px\">
                            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "amount", array()), 'widget', array("attr" => array("class" => "range-slider__range", "title" => $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "amount", array()))));
        echo "                             
                            <span class=\"range-slider__value\" >";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "amount", array()), "html", null, true);
        echo " </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label> Loan duration </label>
                        <div class=\"range-slider\" style=\"margin:0px\">
                            <input id=\"duration_spinner\" class=\"range-slider__range\" type=\"range\" disabled=\"disabled\">
                            <span style=\"border-right: 7px solid #a94298;background: #a94298;\" id=\"duration_value\" class=\"range-slider__value\">0</span>
                        </div>
                    </div>

                    ";
        // line 44
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "amount", array()), 'errors');
        echo "
                <!-- </div> -->
                    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

                    <div class=\"form-group\">
                      <input class=\"btn btn-success\" type=\"submit\" value=\"Purchase now\" />
                    </div>
                </div>

            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>

    <style type=\"text/css\">

        #appbundle_purchase_amount{
            /*background-color: transparent;*/
        }

        *, *:before, *:after {
            box-sizing: border-box;
        }

        body {
          font-family: sans-serif;
          padding: 60px 20px;
        }
        @media (min-width: 600px) {
          body {
            padding: 60px;
          }
        }

        .range-slider {
          margin: 60px 0 0 0%;
        }

        .range-slider {
          width: 100%;
        }

        .range-slider__range {
          -webkit-appearance: none;
          width: calc(100% - (73px));
          height: 10px;
          border-radius: 5px;
          background: #d7dcdf;
          outline: none;
          padding: 0;
          margin: 0;
        }
        .range-slider__range::-webkit-slider-thumb {
          -webkit-appearance: none;
                  appearance: none;
          width: 20px;
          height: 20px;
          border-radius: 50%;
          background: #2c3e50;
          cursor: pointer;
          -webkit-transition: background .15s ease-in-out;
          transition: background .15s ease-in-out;
        }
        .range-slider__range::-webkit-slider-thumb:hover {
          background: #1abc9c;
        }
        .range-slider__range:active::-webkit-slider-thumb {
          background: #1abc9c;
        }
        .range-slider__range::-moz-range-thumb {
          width: 20px;
          height: 20px;
          border: 0;
          border-radius: 50%;
          background: #2c3e50;
          cursor: pointer;
          -webkit-transition: background .15s ease-in-out;
          transition: background .15s ease-in-out;
        }
        .range-slider__range::-moz-range-thumb:hover {
          background: #1abc9c;
        }
        .range-slider__range:active::-moz-range-thumb {
          background: #1abc9c;
        }

        .range-slider__value {
          display: inline-block;
          position: relative;
          width: 60px;
          color: #fff;
          line-height: 20px;
          text-align: center;
          border-radius: 3px;
          background: #2c3e50;
          padding: 5px 10px;
          margin-left: 8px;
          font-weight: bold;
        }
        #duration_value:after {
            border-right: 7px solid #a94298;
        }
        #duration_spinner::-webkit-slider-thumb{
            background: #a94298;
        }
        .range-slider__value:after {
          position: absolute;
          top: 8px;
          left: -7px;
          width: 0;
          height: 0;
          border-top: 7px solid transparent;
          border-right: 7px solid #2c3e50;
          border-bottom: 7px solid transparent;
          content: '';
        }

        ::-moz-range-track {
          background: #d7dcdf;
          border: 0;
        }

        input::-moz-focus-inner,
        input::-moz-focus-outer {
          border: 0;
        }


    </style>

   
     ";
        
        $__internal_fa1c3d44cac12b9d1555467d95ad34be285eb76f0bd96c0482712eef4f53dcb6->leave($__internal_fa1c3d44cac12b9d1555467d95ad34be285eb76f0bd96c0482712eef4f53dcb6_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47dd14aa5d0421c660e4550534b35d206d3b81a19277ec9d88d7893089e3d606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47dd14aa5d0421c660e4550534b35d206d3b81a19277ec9d88d7893089e3d606->enter($__internal_47dd14aa5d0421c660e4550534b35d206d3b81a19277ec9d88d7893089e3d606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            \$('#appbundle_purchase_amount').prop('min', ";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "minPrice", array()), "html", null, true);
        echo ");
            \$('#appbundle_purchase_amount').prop('max', ";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo ");
            \$('#appbundle_purchase_amount').prop('value', ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "amount", array()), "html", null, true);
        echo ");
            

            \$('#duration_spinner').prop('max', ";
        // line 185
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()) / $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "minPrice", array())), "html", null, true);
        echo ");

            var duration = Math.ceil(";
        // line 187
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()) / $this->getAttribute(($context["purchase"] ?? $this->getContext($context, "purchase")), "amount", array())), "html", null, true);
        echo ");
            \$('#duration_value').html(duration);
            
            \$('#duration_spinner').prop('value', duration);
            \$('#appbundle_purchase_amount').change(function(){
                var value = \$(this).val();
                // console.log(value);
                \$('.range-slider__value').html(value);
                \$('#appbundle_purchase_amount').prop('title', value);
                var duration = Math.ceil( ";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo " / value );
                // console.log(duration);
                \$('#duration_spinner').prop('value', duration);
                \$('#duration_value').html(duration);
            });
        </script>
     ";
        
        $__internal_47dd14aa5d0421c660e4550534b35d206d3b81a19277ec9d88d7893089e3d606->leave($__internal_47dd14aa5d0421c660e4550534b35d206d3b81a19277ec9d88d7893089e3d606_prof);

    }

    public function getTemplateName()
    {
        return "purchase/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 196,  287 => 187,  282 => 185,  276 => 182,  272 => 181,  268 => 180,  262 => 178,  256 => 177,  127 => 53,  117 => 46,  111 => 44,  97 => 32,  93 => 31,  83 => 24,  77 => 21,  73 => 20,  66 => 16,  55 => 7,  49 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends 'base.html.twig' %}

    {% block header %}
    {% endblock %}

    {% block body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Purchase
                <!-- <small>Subheading</small> -->
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-8\">
            <img style=\"width:80%;\" src=\"{{ asset('design/uploads/' ~ product.photo) }}\">
        </div>
        <div class=\"col-md-4\">
            <h3> Article details </h3>
            <p style=\"height:50px;\">{{ product.description }} </p>
            <p > Price : \${{ product.price }} </p>


            {{ form_start(form) }}
                <div  class=\"form-row col-md-12\">
                <!-- <div class=\"range-slider\"  style=\"border:solid 1px red;\"> -->
                    <br style=\"clear:both;\" />
                    <div class=\"form-group\">
                        <label> Choose your monthly payment</label>
                        <div class=\"range-slider\" style=\"margin:0px\">
                            {{ form_widget(form.amount, {'attr': {'class': 'range-slider__range', 'title': purchase.amount } }) }}                             
                            <span class=\"range-slider__value\" >{{ purchase.amount}} </span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label> Loan duration </label>
                        <div class=\"range-slider\" style=\"margin:0px\">
                            <input id=\"duration_spinner\" class=\"range-slider__range\" type=\"range\" disabled=\"disabled\">
                            <span style=\"border-right: 7px solid #a94298;background: #a94298;\" id=\"duration_value\" class=\"range-slider__value\">0</span>
                        </div>
                    </div>

                    {# Génération de l'input. #}
                    {{ form_errors(form.amount) }}
                <!-- </div> -->
                    {{ form_widget(form) }}

                    <div class=\"form-group\">
                      <input class=\"btn btn-success\" type=\"submit\" value=\"Purchase now\" />
                    </div>
                </div>

            {{ form_end(form) }}
            </div>
        </div>

    <style type=\"text/css\">

        #appbundle_purchase_amount{
            /*background-color: transparent;*/
        }

        *, *:before, *:after {
            box-sizing: border-box;
        }

        body {
          font-family: sans-serif;
          padding: 60px 20px;
        }
        @media (min-width: 600px) {
          body {
            padding: 60px;
          }
        }

        .range-slider {
          margin: 60px 0 0 0%;
        }

        .range-slider {
          width: 100%;
        }

        .range-slider__range {
          -webkit-appearance: none;
          width: calc(100% - (73px));
          height: 10px;
          border-radius: 5px;
          background: #d7dcdf;
          outline: none;
          padding: 0;
          margin: 0;
        }
        .range-slider__range::-webkit-slider-thumb {
          -webkit-appearance: none;
                  appearance: none;
          width: 20px;
          height: 20px;
          border-radius: 50%;
          background: #2c3e50;
          cursor: pointer;
          -webkit-transition: background .15s ease-in-out;
          transition: background .15s ease-in-out;
        }
        .range-slider__range::-webkit-slider-thumb:hover {
          background: #1abc9c;
        }
        .range-slider__range:active::-webkit-slider-thumb {
          background: #1abc9c;
        }
        .range-slider__range::-moz-range-thumb {
          width: 20px;
          height: 20px;
          border: 0;
          border-radius: 50%;
          background: #2c3e50;
          cursor: pointer;
          -webkit-transition: background .15s ease-in-out;
          transition: background .15s ease-in-out;
        }
        .range-slider__range::-moz-range-thumb:hover {
          background: #1abc9c;
        }
        .range-slider__range:active::-moz-range-thumb {
          background: #1abc9c;
        }

        .range-slider__value {
          display: inline-block;
          position: relative;
          width: 60px;
          color: #fff;
          line-height: 20px;
          text-align: center;
          border-radius: 3px;
          background: #2c3e50;
          padding: 5px 10px;
          margin-left: 8px;
          font-weight: bold;
        }
        #duration_value:after {
            border-right: 7px solid #a94298;
        }
        #duration_spinner::-webkit-slider-thumb{
            background: #a94298;
        }
        .range-slider__value:after {
          position: absolute;
          top: 8px;
          left: -7px;
          width: 0;
          height: 0;
          border-top: 7px solid transparent;
          border-right: 7px solid #2c3e50;
          border-bottom: 7px solid transparent;
          content: '';
        }

        ::-moz-range-track {
          background: #d7dcdf;
          border: 0;
        }

        input::-moz-focus-inner,
        input::-moz-focus-outer {
          border: 0;
        }


    </style>

   
     {% endblock %}


     {% block javascripts %}
        {{ parent() }}
        <script type=\"text/javascript\">
            \$('#appbundle_purchase_amount').prop('min', {{ product.minPrice }});
            \$('#appbundle_purchase_amount').prop('max', {{ product.price }});
            \$('#appbundle_purchase_amount').prop('value', {{ purchase.amount }});
            

            \$('#duration_spinner').prop('max', {{ product.price/product.minPrice }});

            var duration = Math.ceil({{ product.price / purchase.amount }});
            \$('#duration_value').html(duration);
            
            \$('#duration_spinner').prop('value', duration);
            \$('#appbundle_purchase_amount').change(function(){
                var value = \$(this).val();
                // console.log(value);
                \$('.range-slider__value').html(value);
                \$('#appbundle_purchase_amount').prop('title', value);
                var duration = Math.ceil( {{ product.price }} / value );
                // console.log(duration);
                \$('#duration_spinner').prop('value', duration);
                \$('#duration_value').html(duration);
            });
        </script>
     {% endblock %}", "purchase/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\purchase\\new.html.twig");
    }
}
