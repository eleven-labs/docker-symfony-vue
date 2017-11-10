<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_15ccaadde77cce965e64bc1515bab913d5035d8dbcb85b206ab2668fb9f4b679 extends Twig_Template
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
        $__internal_9e1adcf081c3647afb32446ac860f7dbb690313154aaa9a41b9b9cdd5d028b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1adcf081c3647afb32446ac860f7dbb690313154aaa9a41b9b9cdd5d028b87->enter($__internal_9e1adcf081c3647afb32446ac860f7dbb690313154aaa9a41b9b9cdd5d028b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_82f935959dc5c1fe47fa7219579755fb48e795eb2f50e36da9a073cd21dac75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f935959dc5c1fe47fa7219579755fb48e795eb2f50e36da9a073cd21dac75b->enter($__internal_82f935959dc5c1fe47fa7219579755fb48e795eb2f50e36da9a073cd21dac75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_9e1adcf081c3647afb32446ac860f7dbb690313154aaa9a41b9b9cdd5d028b87->leave($__internal_9e1adcf081c3647afb32446ac860f7dbb690313154aaa9a41b9b9cdd5d028b87_prof);

        
        $__internal_82f935959dc5c1fe47fa7219579755fb48e795eb2f50e36da9a073cd21dac75b->leave($__internal_82f935959dc5c1fe47fa7219579755fb48e795eb2f50e36da9a073cd21dac75b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
