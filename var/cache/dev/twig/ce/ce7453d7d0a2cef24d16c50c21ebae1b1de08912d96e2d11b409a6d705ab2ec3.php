<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d295f4515cf18d4c12a91d69d70cf62d740c89d7c160b7317ec4ba3d7cf819bc extends Twig_Template
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
        $__internal_961b87dc01d567e57cc82c758a076ad71efc440a1c218312436b43b7f4aa51c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961b87dc01d567e57cc82c758a076ad71efc440a1c218312436b43b7f4aa51c2->enter($__internal_961b87dc01d567e57cc82c758a076ad71efc440a1c218312436b43b7f4aa51c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_961b87dc01d567e57cc82c758a076ad71efc440a1c218312436b43b7f4aa51c2->leave($__internal_961b87dc01d567e57cc82c758a076ad71efc440a1c218312436b43b7f4aa51c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
