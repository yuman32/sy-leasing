<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a414c595bcb72a7638133943531f21e96155b135fa3d9daae6fdce8d8644e7ce extends Twig_Template
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
        $__internal_2074730a5d8a98d5964f301295535ac9cf19e8d34c1708084fbf4de37b1e4aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2074730a5d8a98d5964f301295535ac9cf19e8d34c1708084fbf4de37b1e4aad->enter($__internal_2074730a5d8a98d5964f301295535ac9cf19e8d34c1708084fbf4de37b1e4aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2074730a5d8a98d5964f301295535ac9cf19e8d34c1708084fbf4de37b1e4aad->leave($__internal_2074730a5d8a98d5964f301295535ac9cf19e8d34c1708084fbf4de37b1e4aad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
