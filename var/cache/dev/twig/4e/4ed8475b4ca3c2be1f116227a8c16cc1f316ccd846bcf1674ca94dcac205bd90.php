<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1d31f66e08c12ffea69829d55684591a4c4da25394c055bdc063456c70ab65c1 extends Twig_Template
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
        $__internal_eb53c6f3441a3478e402c7fc6e0541292b5547a94c6141db0b9b276cea366ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb53c6f3441a3478e402c7fc6e0541292b5547a94c6141db0b9b276cea366ca7->enter($__internal_eb53c6f3441a3478e402c7fc6e0541292b5547a94c6141db0b9b276cea366ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1e6dd8ae7faf0cc1806ff483365ea57170295bf41b7a66722eaa6bf1dc723518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6dd8ae7faf0cc1806ff483365ea57170295bf41b7a66722eaa6bf1dc723518->enter($__internal_1e6dd8ae7faf0cc1806ff483365ea57170295bf41b7a66722eaa6bf1dc723518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_eb53c6f3441a3478e402c7fc6e0541292b5547a94c6141db0b9b276cea366ca7->leave($__internal_eb53c6f3441a3478e402c7fc6e0541292b5547a94c6141db0b9b276cea366ca7_prof);

        
        $__internal_1e6dd8ae7faf0cc1806ff483365ea57170295bf41b7a66722eaa6bf1dc723518->leave($__internal_1e6dd8ae7faf0cc1806ff483365ea57170295bf41b7a66722eaa6bf1dc723518_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
