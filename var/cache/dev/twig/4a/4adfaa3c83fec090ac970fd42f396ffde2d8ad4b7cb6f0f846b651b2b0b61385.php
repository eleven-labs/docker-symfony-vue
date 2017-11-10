<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_657be184f40d8af8c5b418ac6b54ed44ef987c7bbc93f9026a95f0162676ea2b extends Twig_Template
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
        $__internal_6d8e1c4bb38b76dd52551435898792cc251554d00758dabc44f1b0bfb3017774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8e1c4bb38b76dd52551435898792cc251554d00758dabc44f1b0bfb3017774->enter($__internal_6d8e1c4bb38b76dd52551435898792cc251554d00758dabc44f1b0bfb3017774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_24a6563b6753acccfd42eb59acc5afa1173039ae0813f4fe8259b36bc1529699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a6563b6753acccfd42eb59acc5afa1173039ae0813f4fe8259b36bc1529699->enter($__internal_24a6563b6753acccfd42eb59acc5afa1173039ae0813f4fe8259b36bc1529699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6d8e1c4bb38b76dd52551435898792cc251554d00758dabc44f1b0bfb3017774->leave($__internal_6d8e1c4bb38b76dd52551435898792cc251554d00758dabc44f1b0bfb3017774_prof);

        
        $__internal_24a6563b6753acccfd42eb59acc5afa1173039ae0813f4fe8259b36bc1529699->leave($__internal_24a6563b6753acccfd42eb59acc5afa1173039ae0813f4fe8259b36bc1529699_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
