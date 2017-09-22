<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_af8b1693a03f6fe868dd0a8fbcb0e50cae114a3e00e9c8983f4e97a12cad658b extends Twig_Template
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
        $__internal_5af6c62cf398c10fcf1802605bf1531236fe8ce2d24a957d7015c0716646f5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af6c62cf398c10fcf1802605bf1531236fe8ce2d24a957d7015c0716646f5cd->enter($__internal_5af6c62cf398c10fcf1802605bf1531236fe8ce2d24a957d7015c0716646f5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5af6c62cf398c10fcf1802605bf1531236fe8ce2d24a957d7015c0716646f5cd->leave($__internal_5af6c62cf398c10fcf1802605bf1531236fe8ce2d24a957d7015c0716646f5cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
