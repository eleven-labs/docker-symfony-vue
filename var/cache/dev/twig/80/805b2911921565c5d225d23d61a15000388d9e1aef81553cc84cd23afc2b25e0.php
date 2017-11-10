<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_be489c7eecd757e317943bb16846df7d59c397298924eef2af3d173844382585 extends Twig_Template
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
        $__internal_4b6be52c7657e23091ce80424f61677c526b146cf791a17ac92c54eecac3d95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6be52c7657e23091ce80424f61677c526b146cf791a17ac92c54eecac3d95b->enter($__internal_4b6be52c7657e23091ce80424f61677c526b146cf791a17ac92c54eecac3d95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f6e0780a6e25b2282569c93a5af314429b37f89f1fbf1c72637bd68931332b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e0780a6e25b2282569c93a5af314429b37f89f1fbf1c72637bd68931332b19->enter($__internal_f6e0780a6e25b2282569c93a5af314429b37f89f1fbf1c72637bd68931332b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4b6be52c7657e23091ce80424f61677c526b146cf791a17ac92c54eecac3d95b->leave($__internal_4b6be52c7657e23091ce80424f61677c526b146cf791a17ac92c54eecac3d95b_prof);

        
        $__internal_f6e0780a6e25b2282569c93a5af314429b37f89f1fbf1c72637bd68931332b19->leave($__internal_f6e0780a6e25b2282569c93a5af314429b37f89f1fbf1c72637bd68931332b19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
