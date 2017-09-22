<?php

/* memberaccount/new.html.twig */
class __TwigTemplate_0aee2a76e36f4574364e3481b568f32c9b7fa07636c9e2f418b1ebc0e4df3d8e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Member account creation</h1>

    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div  class=\"form-row col-md-12\">
            <br style=\"clear:both;\" />
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label> First name </label>
                    <div class=\"range-slider\" style=\"margin:0px\">
                        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fname", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lname", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "birthday", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zip", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "employer", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "selfEmployee", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            
        </div>
    ";
        // line 97
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


";
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
        return array (  162 => 97,  156 => 94,  139 => 80,  128 => 72,  117 => 64,  106 => 56,  95 => 48,  84 => 40,  73 => 32,  62 => 24,  51 => 16,  41 => 9,  37 => 7,  34 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberaccount/new.html.twig", "C:\\wamp64\\www\\sy-leasing\\app\\Resources\\views\\memberaccount\\new.html.twig");
    }
}
