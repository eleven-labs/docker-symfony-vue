<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_42fc23a400c09d7cceee1e56c5f52da8ff246a5211d3c3e773e844002b557204 extends Twig_Template
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
        $__internal_3de220cbf0ea601098543087b2bcf57c9fcbf638a4eeab4ea0cf8961b84574e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de220cbf0ea601098543087b2bcf57c9fcbf638a4eeab4ea0cf8961b84574e4->enter($__internal_3de220cbf0ea601098543087b2bcf57c9fcbf638a4eeab4ea0cf8961b84574e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9e51d11222407b00cf373288a6329cb9841e04ac0f591c97f437ea74cd53ff65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e51d11222407b00cf373288a6329cb9841e04ac0f591c97f437ea74cd53ff65->enter($__internal_9e51d11222407b00cf373288a6329cb9841e04ac0f591c97f437ea74cd53ff65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3de220cbf0ea601098543087b2bcf57c9fcbf638a4eeab4ea0cf8961b84574e4->leave($__internal_3de220cbf0ea601098543087b2bcf57c9fcbf638a4eeab4ea0cf8961b84574e4_prof);

        
        $__internal_9e51d11222407b00cf373288a6329cb9841e04ac0f591c97f437ea74cd53ff65->leave($__internal_9e51d11222407b00cf373288a6329cb9841e04ac0f591c97f437ea74cd53ff65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
