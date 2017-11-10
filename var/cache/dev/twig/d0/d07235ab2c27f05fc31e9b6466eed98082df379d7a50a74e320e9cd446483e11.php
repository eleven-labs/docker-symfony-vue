<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d6d8cb96f051ba20ab37906fd72d4784616824356220fd71c4fa0e5bce314f7b extends Twig_Template
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
        $__internal_a538e3f7e81b7b94e20f49b7362b52e1735d9ebb2f4067112c9dbb76a41b02fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a538e3f7e81b7b94e20f49b7362b52e1735d9ebb2f4067112c9dbb76a41b02fc->enter($__internal_a538e3f7e81b7b94e20f49b7362b52e1735d9ebb2f4067112c9dbb76a41b02fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1259a3d8471d698fa424b0fa78729437c3a42cc5cd2baa8b74938e4766b6cb2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1259a3d8471d698fa424b0fa78729437c3a42cc5cd2baa8b74938e4766b6cb2a->enter($__internal_1259a3d8471d698fa424b0fa78729437c3a42cc5cd2baa8b74938e4766b6cb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a538e3f7e81b7b94e20f49b7362b52e1735d9ebb2f4067112c9dbb76a41b02fc->leave($__internal_a538e3f7e81b7b94e20f49b7362b52e1735d9ebb2f4067112c9dbb76a41b02fc_prof);

        
        $__internal_1259a3d8471d698fa424b0fa78729437c3a42cc5cd2baa8b74938e4766b6cb2a->leave($__internal_1259a3d8471d698fa424b0fa78729437c3a42cc5cd2baa8b74938e4766b6cb2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
