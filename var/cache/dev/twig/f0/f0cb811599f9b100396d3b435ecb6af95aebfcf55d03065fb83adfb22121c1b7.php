<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_021375a5adf592fab62f16d35ee30ffbe50ef4d17c75581fccc09bb7767b9860 extends Twig_Template
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
        $__internal_daf960b8fae48397a58e657a3a55802f2f194e735a1580f94d271945c6ef84bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf960b8fae48397a58e657a3a55802f2f194e735a1580f94d271945c6ef84bb->enter($__internal_daf960b8fae48397a58e657a3a55802f2f194e735a1580f94d271945c6ef84bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_daf960b8fae48397a58e657a3a55802f2f194e735a1580f94d271945c6ef84bb->leave($__internal_daf960b8fae48397a58e657a3a55802f2f194e735a1580f94d271945c6ef84bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
