<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b8164d16c2e54b384414e84d0c92ded97d3b85e8c773f20e362662f6793b2d96 extends Twig_Template
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
        $__internal_c0e49c8c11b69f392fccc9a80815c50151552270840027f776f3b9c4b845576a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e49c8c11b69f392fccc9a80815c50151552270840027f776f3b9c4b845576a->enter($__internal_c0e49c8c11b69f392fccc9a80815c50151552270840027f776f3b9c4b845576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7edcee75edc7e9d9579beff7228aab200f9d1c509c9599d0b6b41c81236318ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edcee75edc7e9d9579beff7228aab200f9d1c509c9599d0b6b41c81236318ca->enter($__internal_7edcee75edc7e9d9579beff7228aab200f9d1c509c9599d0b6b41c81236318ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c0e49c8c11b69f392fccc9a80815c50151552270840027f776f3b9c4b845576a->leave($__internal_c0e49c8c11b69f392fccc9a80815c50151552270840027f776f3b9c4b845576a_prof);

        
        $__internal_7edcee75edc7e9d9579beff7228aab200f9d1c509c9599d0b6b41c81236318ca->leave($__internal_7edcee75edc7e9d9579beff7228aab200f9d1c509c9599d0b6b41c81236318ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
