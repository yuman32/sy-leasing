<?php

/* purchase/new.html.twig */
class __TwigTemplate_66c51e7c3d97e67603471c37e8e979543581a0fe122821b6a8b9dfd991e88365 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("design/uploads/" . $this->getAttribute(($context["product"] ?? null), "photo", array()))), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-4\">
            <h3> Article details </h3>
            <p style=\"height:50px;\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "description", array()), "html", null, true);
        echo " </p>
            <p > Price : \$";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "price", array()), "html", null, true);
        echo " </p>


            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                <div  class=\"form-row col-md-12\">
                <!-- <div class=\"range-slider\"  style=\"border:solid 1px red;\"> -->
                    <br style=\"clear:both;\" />
                    <div class=\"form-group\">
                        <label> Choose your monthly payment</label>
                        <div class=\"range-slider\" style=\"margin:0px\">
                            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "amount", array()), 'widget', array("attr" => array("class" => "range-slider__range", "title" => $this->getAttribute(($context["purchase"] ?? null), "amount", array()))));
        echo "                             
                            <span class=\"range-slider__value\" >";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? null), "amount", array()), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "amount", array()), 'errors');
        echo "
                <!-- </div> -->
                    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                    <div class=\"form-group\">
                      <input class=\"btn btn-success\" type=\"submit\" value=\"Purchase now\" />
                    </div>
                </div>

            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
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
    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        // line 178
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            \$('#appbundle_purchase_amount').prop('min', ";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "minPrice", array()), "html", null, true);
        echo ");
            \$('#appbundle_purchase_amount').prop('max', ";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "price", array()), "html", null, true);
        echo ");
            \$('#appbundle_purchase_amount').prop('value', ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["purchase"] ?? null), "amount", array()), "html", null, true);
        echo ");
            

            \$('#duration_spinner').prop('max', ";
        // line 185
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["product"] ?? null), "price", array()) / $this->getAttribute(($context["product"] ?? null), "minPrice", array())), "html", null, true);
        echo ");

            var duration = Math.ceil(";
        // line 187
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["product"] ?? null), "price", array()) / $this->getAttribute(($context["purchase"] ?? null), "amount", array())), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "price", array()), "html", null, true);
        echo " / value );
                // console.log(duration);
                \$('#duration_spinner').prop('value', duration);
                \$('#duration_value').html(duration);
            });
        </script>
     ";
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
        return array (  278 => 196,  266 => 187,  261 => 185,  255 => 182,  251 => 181,  247 => 180,  241 => 178,  238 => 177,  112 => 53,  102 => 46,  96 => 44,  82 => 32,  78 => 31,  68 => 24,  62 => 21,  58 => 20,  51 => 16,  40 => 7,  37 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "purchase/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\purchase\\new.html.twig");
    }
}
