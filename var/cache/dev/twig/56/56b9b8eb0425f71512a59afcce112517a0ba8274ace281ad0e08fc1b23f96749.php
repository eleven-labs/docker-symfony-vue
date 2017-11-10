<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_56ce9cca7973ebd431ac9c6c9888b7921682ad209ab6c22e3ba7e5934570b2e1 extends Twig_Template
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
        $__internal_c29fcfa5d33776cf5d65456e8870e8188f307f3e6fa336a040e44046d210eae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29fcfa5d33776cf5d65456e8870e8188f307f3e6fa336a040e44046d210eae4->enter($__internal_c29fcfa5d33776cf5d65456e8870e8188f307f3e6fa336a040e44046d210eae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c15b4c32a298610b45e768a603e4288bc7e8c58c18fd4a04d0a7596ce9c0364c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15b4c32a298610b45e768a603e4288bc7e8c58c18fd4a04d0a7596ce9c0364c->enter($__internal_c15b4c32a298610b45e768a603e4288bc7e8c58c18fd4a04d0a7596ce9c0364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c29fcfa5d33776cf5d65456e8870e8188f307f3e6fa336a040e44046d210eae4->leave($__internal_c29fcfa5d33776cf5d65456e8870e8188f307f3e6fa336a040e44046d210eae4_prof);

        
        $__internal_c15b4c32a298610b45e768a603e4288bc7e8c58c18fd4a04d0a7596ce9c0364c->leave($__internal_c15b4c32a298610b45e768a603e4288bc7e8c58c18fd4a04d0a7596ce9c0364c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
