<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_91938ac787cc63fc7c2a69072e09b44983024ded9ea4b56aa20274cfea7b9624 extends Twig_Template
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
        $__internal_e470770484ff1c5a74ce7060601466455b7e6bd789ad5e266b12d25f6866ba1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e470770484ff1c5a74ce7060601466455b7e6bd789ad5e266b12d25f6866ba1c->enter($__internal_e470770484ff1c5a74ce7060601466455b7e6bd789ad5e266b12d25f6866ba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e470770484ff1c5a74ce7060601466455b7e6bd789ad5e266b12d25f6866ba1c->leave($__internal_e470770484ff1c5a74ce7060601466455b7e6bd789ad5e266b12d25f6866ba1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
