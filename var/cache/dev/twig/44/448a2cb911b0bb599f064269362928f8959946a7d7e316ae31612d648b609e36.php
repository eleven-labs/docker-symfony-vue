<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_9820e0fcd0a5e5adda1d95592c99e257488abea3dcae593268ee45733c425763 extends Twig_Template
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
        $__internal_63dd2d21c1571f5abd2a1fc28bb4445854d2c1082dd4d403cff09f1d0932cd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63dd2d21c1571f5abd2a1fc28bb4445854d2c1082dd4d403cff09f1d0932cd7e->enter($__internal_63dd2d21c1571f5abd2a1fc28bb4445854d2c1082dd4d403cff09f1d0932cd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_ec26794fc2dfa401e32d72fff4e8a66e1ba2997445bfda245192c9c145ad9bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec26794fc2dfa401e32d72fff4e8a66e1ba2997445bfda245192c9c145ad9bba->enter($__internal_ec26794fc2dfa401e32d72fff4e8a66e1ba2997445bfda245192c9c145ad9bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_63dd2d21c1571f5abd2a1fc28bb4445854d2c1082dd4d403cff09f1d0932cd7e->leave($__internal_63dd2d21c1571f5abd2a1fc28bb4445854d2c1082dd4d403cff09f1d0932cd7e_prof);

        
        $__internal_ec26794fc2dfa401e32d72fff4e8a66e1ba2997445bfda245192c9c145ad9bba->leave($__internal_ec26794fc2dfa401e32d72fff4e8a66e1ba2997445bfda245192c9c145ad9bba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
