<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_d79582214dfcb83869621747cfad15a7aea23e984e30869b42cf37662a737ea4 extends Twig_Template
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
        $__internal_43e7340e26b52348bbda1bb467caf2a5884a35d873709f319ca1c7253c37b550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e7340e26b52348bbda1bb467caf2a5884a35d873709f319ca1c7253c37b550->enter($__internal_43e7340e26b52348bbda1bb467caf2a5884a35d873709f319ca1c7253c37b550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_eed922ee420d05dab849e9082d532835cdef0d902633e0d66d9629395cb722d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed922ee420d05dab849e9082d532835cdef0d902633e0d66d9629395cb722d8->enter($__internal_eed922ee420d05dab849e9082d532835cdef0d902633e0d66d9629395cb722d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_43e7340e26b52348bbda1bb467caf2a5884a35d873709f319ca1c7253c37b550->leave($__internal_43e7340e26b52348bbda1bb467caf2a5884a35d873709f319ca1c7253c37b550_prof);

        
        $__internal_eed922ee420d05dab849e9082d532835cdef0d902633e0d66d9629395cb722d8->leave($__internal_eed922ee420d05dab849e9082d532835cdef0d902633e0d66d9629395cb722d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
