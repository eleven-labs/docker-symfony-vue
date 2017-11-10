<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2ed64e7cb0c798229236243195b6ed9c01fc16c89955583551e6106e2d52e49e extends Twig_Template
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
        $__internal_1ad8f38918bb0c3c292e8b7282a0bc10e70024646f48dec9a41a2f99938559d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad8f38918bb0c3c292e8b7282a0bc10e70024646f48dec9a41a2f99938559d3->enter($__internal_1ad8f38918bb0c3c292e8b7282a0bc10e70024646f48dec9a41a2f99938559d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9425d60a8e3abd6ac446e73855660057e46fc7c06705c548e6c0e78a0dbb8fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9425d60a8e3abd6ac446e73855660057e46fc7c06705c548e6c0e78a0dbb8fe6->enter($__internal_9425d60a8e3abd6ac446e73855660057e46fc7c06705c548e6c0e78a0dbb8fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1ad8f38918bb0c3c292e8b7282a0bc10e70024646f48dec9a41a2f99938559d3->leave($__internal_1ad8f38918bb0c3c292e8b7282a0bc10e70024646f48dec9a41a2f99938559d3_prof);

        
        $__internal_9425d60a8e3abd6ac446e73855660057e46fc7c06705c548e6c0e78a0dbb8fe6->leave($__internal_9425d60a8e3abd6ac446e73855660057e46fc7c06705c548e6c0e78a0dbb8fe6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
