<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a9fbeaeef895214da76adc3e39709e0948e2c7f055ba557ddbb9e0b044b10da9 extends Twig_Template
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
        $__internal_a102d1fb102690f5e7847c6aca25651abdcb2b1348acc270a58faa880088187d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a102d1fb102690f5e7847c6aca25651abdcb2b1348acc270a58faa880088187d->enter($__internal_a102d1fb102690f5e7847c6aca25651abdcb2b1348acc270a58faa880088187d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_83da084914f8276773975ca1eb61bf568c028b383e20f36eab5485e4bce62d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83da084914f8276773975ca1eb61bf568c028b383e20f36eab5485e4bce62d75->enter($__internal_83da084914f8276773975ca1eb61bf568c028b383e20f36eab5485e4bce62d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a102d1fb102690f5e7847c6aca25651abdcb2b1348acc270a58faa880088187d->leave($__internal_a102d1fb102690f5e7847c6aca25651abdcb2b1348acc270a58faa880088187d_prof);

        
        $__internal_83da084914f8276773975ca1eb61bf568c028b383e20f36eab5485e4bce62d75->leave($__internal_83da084914f8276773975ca1eb61bf568c028b383e20f36eab5485e4bce62d75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
