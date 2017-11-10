<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fd97813c4c0a13502bd88b18d07d946d9e162deaf92f7f087eddd69ada55e09c extends Twig_Template
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
        $__internal_5c9de7456c0c55e7ed5ae14b7e2997dadd1f54ddf835ce02e04abb9abbe66ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9de7456c0c55e7ed5ae14b7e2997dadd1f54ddf835ce02e04abb9abbe66ab1->enter($__internal_5c9de7456c0c55e7ed5ae14b7e2997dadd1f54ddf835ce02e04abb9abbe66ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9e0c2ca604bea10ff67741270635ef5c99a8fd41bb69cec10927bbe12a92a912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0c2ca604bea10ff67741270635ef5c99a8fd41bb69cec10927bbe12a92a912->enter($__internal_9e0c2ca604bea10ff67741270635ef5c99a8fd41bb69cec10927bbe12a92a912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5c9de7456c0c55e7ed5ae14b7e2997dadd1f54ddf835ce02e04abb9abbe66ab1->leave($__internal_5c9de7456c0c55e7ed5ae14b7e2997dadd1f54ddf835ce02e04abb9abbe66ab1_prof);

        
        $__internal_9e0c2ca604bea10ff67741270635ef5c99a8fd41bb69cec10927bbe12a92a912->leave($__internal_9e0c2ca604bea10ff67741270635ef5c99a8fd41bb69cec10927bbe12a92a912_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
