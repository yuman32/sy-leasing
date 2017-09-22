<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6c039b17a12c53ad6f4078fb76f94b5d29d73bd2b8ba769c6f11853ca213a580 extends Twig_Template
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
        $__internal_b4ab8c2cff16f5a4d94f46d3411d41c90ebd588da37286de0f44eb8a6b725bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ab8c2cff16f5a4d94f46d3411d41c90ebd588da37286de0f44eb8a6b725bd7->enter($__internal_b4ab8c2cff16f5a4d94f46d3411d41c90ebd588da37286de0f44eb8a6b725bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b4ab8c2cff16f5a4d94f46d3411d41c90ebd588da37286de0f44eb8a6b725bd7->leave($__internal_b4ab8c2cff16f5a4d94f46d3411d41c90ebd588da37286de0f44eb8a6b725bd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
