<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b4524afe777a055bc0ad22abb98e01c904b29b2b2d946d2f7241f8ddfea3ff43 extends Twig_Template
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
        $__internal_bac1a12c195444d4a88d918f62c4a1efdd38eea03849490d11ce1ca0e50e26f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac1a12c195444d4a88d918f62c4a1efdd38eea03849490d11ce1ca0e50e26f7->enter($__internal_bac1a12c195444d4a88d918f62c4a1efdd38eea03849490d11ce1ca0e50e26f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bac1a12c195444d4a88d918f62c4a1efdd38eea03849490d11ce1ca0e50e26f7->leave($__internal_bac1a12c195444d4a88d918f62c4a1efdd38eea03849490d11ce1ca0e50e26f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\sy-leasing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
