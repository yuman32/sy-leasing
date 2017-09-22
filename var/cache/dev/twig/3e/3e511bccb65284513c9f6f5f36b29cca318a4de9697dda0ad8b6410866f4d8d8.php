<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c6b6c6b66b9629f683f34a77f97ef5d7c8ea8e8e95691eaace45a0536c80bb26 extends Twig_Template
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
        $__internal_041fd52a91ac6d4c28b4715dd3a3618e08a895387c3fa209a0db5aa728e707d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041fd52a91ac6d4c28b4715dd3a3618e08a895387c3fa209a0db5aa728e707d7->enter($__internal_041fd52a91ac6d4c28b4715dd3a3618e08a895387c3fa209a0db5aa728e707d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_041fd52a91ac6d4c28b4715dd3a3618e08a895387c3fa209a0db5aa728e707d7->leave($__internal_041fd52a91ac6d4c28b4715dd3a3618e08a895387c3fa209a0db5aa728e707d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
