<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_36e86fec71f9076ee2430e16dd559a41cf32e9e5339ecd430bdaa52db7288a48 extends Twig_Template
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
        $__internal_1bf947fb535a3b27c75a923a0d1e59bae0986c897ead61c99562996c200d4c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf947fb535a3b27c75a923a0d1e59bae0986c897ead61c99562996c200d4c01->enter($__internal_1bf947fb535a3b27c75a923a0d1e59bae0986c897ead61c99562996c200d4c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c9d8c86c8ed09c3ab73a333ba4a6c30936cac92945eab1ac576bf877602ac984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d8c86c8ed09c3ab73a333ba4a6c30936cac92945eab1ac576bf877602ac984->enter($__internal_c9d8c86c8ed09c3ab73a333ba4a6c30936cac92945eab1ac576bf877602ac984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1bf947fb535a3b27c75a923a0d1e59bae0986c897ead61c99562996c200d4c01->leave($__internal_1bf947fb535a3b27c75a923a0d1e59bae0986c897ead61c99562996c200d4c01_prof);

        
        $__internal_c9d8c86c8ed09c3ab73a333ba4a6c30936cac92945eab1ac576bf877602ac984->leave($__internal_c9d8c86c8ed09c3ab73a333ba4a6c30936cac92945eab1ac576bf877602ac984_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
