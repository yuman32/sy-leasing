<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e7b7d9222242db34337c138ac1254abbf9163abd822734bf0f2fe6fad6ca0749 extends Twig_Template
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
        $__internal_8a4139ea853939f26b9ec4b0e0c5c82b56866b90fb682ea54d7c1dfdfe3495e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4139ea853939f26b9ec4b0e0c5c82b56866b90fb682ea54d7c1dfdfe3495e5->enter($__internal_8a4139ea853939f26b9ec4b0e0c5c82b56866b90fb682ea54d7c1dfdfe3495e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8a4139ea853939f26b9ec4b0e0c5c82b56866b90fb682ea54d7c1dfdfe3495e5->leave($__internal_8a4139ea853939f26b9ec4b0e0c5c82b56866b90fb682ea54d7c1dfdfe3495e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
