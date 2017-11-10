<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fcf4d6da7d02c760563df08eec8c95bcbdc396add28ad5ff75ddf9a47a64346b extends Twig_Template
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
        $__internal_29ea3b1e0b5de59d594ba9b9a6c93ead6b3403664b55231eb7ea3fb07480fde0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ea3b1e0b5de59d594ba9b9a6c93ead6b3403664b55231eb7ea3fb07480fde0->enter($__internal_29ea3b1e0b5de59d594ba9b9a6c93ead6b3403664b55231eb7ea3fb07480fde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_05bd50b40fa03307da92f066fe048e3e3fd47efa052400f8fd37af383dc09a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bd50b40fa03307da92f066fe048e3e3fd47efa052400f8fd37af383dc09a55->enter($__internal_05bd50b40fa03307da92f066fe048e3e3fd47efa052400f8fd37af383dc09a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_29ea3b1e0b5de59d594ba9b9a6c93ead6b3403664b55231eb7ea3fb07480fde0->leave($__internal_29ea3b1e0b5de59d594ba9b9a6c93ead6b3403664b55231eb7ea3fb07480fde0_prof);

        
        $__internal_05bd50b40fa03307da92f066fe048e3e3fd47efa052400f8fd37af383dc09a55->leave($__internal_05bd50b40fa03307da92f066fe048e3e3fd47efa052400f8fd37af383dc09a55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
