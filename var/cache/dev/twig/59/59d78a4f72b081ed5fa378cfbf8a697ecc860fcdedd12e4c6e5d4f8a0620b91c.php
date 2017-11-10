<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0126976cfc087d36149ab7dbf51549b1d5c60dd3740a4426d41152b242778469 extends Twig_Template
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
        $__internal_584efbbc41ae66a29501c8eeeb1b652478ffa3e01550b300ec8a96b810d79325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584efbbc41ae66a29501c8eeeb1b652478ffa3e01550b300ec8a96b810d79325->enter($__internal_584efbbc41ae66a29501c8eeeb1b652478ffa3e01550b300ec8a96b810d79325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dff3a038beea62b11f469988f6fdb04e8ddb641d5e3d7a4f1fc3cc43d341ca49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff3a038beea62b11f469988f6fdb04e8ddb641d5e3d7a4f1fc3cc43d341ca49->enter($__internal_dff3a038beea62b11f469988f6fdb04e8ddb641d5e3d7a4f1fc3cc43d341ca49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_584efbbc41ae66a29501c8eeeb1b652478ffa3e01550b300ec8a96b810d79325->leave($__internal_584efbbc41ae66a29501c8eeeb1b652478ffa3e01550b300ec8a96b810d79325_prof);

        
        $__internal_dff3a038beea62b11f469988f6fdb04e8ddb641d5e3d7a4f1fc3cc43d341ca49->leave($__internal_dff3a038beea62b11f469988f6fdb04e8ddb641d5e3d7a4f1fc3cc43d341ca49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
