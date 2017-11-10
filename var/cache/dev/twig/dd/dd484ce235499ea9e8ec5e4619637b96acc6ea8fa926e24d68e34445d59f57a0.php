<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3524ae00284755e4e8f61de3685b0ed5758ea4978b71753aa8a2fbab16fca10f extends Twig_Template
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
        $__internal_499010600e82e6ac8d1cd2f3e69049ff8183897e5eb0f1a62847076af9c29181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499010600e82e6ac8d1cd2f3e69049ff8183897e5eb0f1a62847076af9c29181->enter($__internal_499010600e82e6ac8d1cd2f3e69049ff8183897e5eb0f1a62847076af9c29181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_363ec18ea6ffaa5a9fa734b0f944f7881d0be41d2d88a5c410786969316f81ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363ec18ea6ffaa5a9fa734b0f944f7881d0be41d2d88a5c410786969316f81ac->enter($__internal_363ec18ea6ffaa5a9fa734b0f944f7881d0be41d2d88a5c410786969316f81ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_499010600e82e6ac8d1cd2f3e69049ff8183897e5eb0f1a62847076af9c29181->leave($__internal_499010600e82e6ac8d1cd2f3e69049ff8183897e5eb0f1a62847076af9c29181_prof);

        
        $__internal_363ec18ea6ffaa5a9fa734b0f944f7881d0be41d2d88a5c410786969316f81ac->leave($__internal_363ec18ea6ffaa5a9fa734b0f944f7881d0be41d2d88a5c410786969316f81ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
