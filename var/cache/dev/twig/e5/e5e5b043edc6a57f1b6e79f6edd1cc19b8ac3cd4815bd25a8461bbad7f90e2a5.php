<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f381b3fefc1bbf4d166a23bbe1b542a4bcab523443bfd9d248ebdbcf4da40129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daec2358f71ea78560fa8a4fb9b3b8e59a9cf84f263965f9d03503cf4f7a0ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daec2358f71ea78560fa8a4fb9b3b8e59a9cf84f263965f9d03503cf4f7a0ba1->enter($__internal_daec2358f71ea78560fa8a4fb9b3b8e59a9cf84f263965f9d03503cf4f7a0ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_daec2358f71ea78560fa8a4fb9b3b8e59a9cf84f263965f9d03503cf4f7a0ba1->leave($__internal_daec2358f71ea78560fa8a4fb9b3b8e59a9cf84f263965f9d03503cf4f7a0ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
