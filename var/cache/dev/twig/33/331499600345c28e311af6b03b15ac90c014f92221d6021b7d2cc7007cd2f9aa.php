<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_df3aa10f2a71c400d84eb459a02c7a9cad8de831bbf7e248f5abc5c8c9cee953 extends Twig_Template
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
        $__internal_71cba2a06cca2ad0364e462c1c39178d4f70bde5fa87bdf4fcfb59078a4eb927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cba2a06cca2ad0364e462c1c39178d4f70bde5fa87bdf4fcfb59078a4eb927->enter($__internal_71cba2a06cca2ad0364e462c1c39178d4f70bde5fa87bdf4fcfb59078a4eb927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_71cba2a06cca2ad0364e462c1c39178d4f70bde5fa87bdf4fcfb59078a4eb927->leave($__internal_71cba2a06cca2ad0364e462c1c39178d4f70bde5fa87bdf4fcfb59078a4eb927_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
