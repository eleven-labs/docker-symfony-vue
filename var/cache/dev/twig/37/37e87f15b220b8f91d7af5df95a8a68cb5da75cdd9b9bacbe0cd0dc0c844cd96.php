<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_82b85e4b07b5a9ddb940cc8b7c31b72f09f41a88f51c726cb1049eebe6ef41f0 extends Twig_Template
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
        $__internal_2b88fbbbba644c83b650a487c8e8e09f7e1e1e6f1bf1713955dfffdb87ec5c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b88fbbbba644c83b650a487c8e8e09f7e1e1e6f1bf1713955dfffdb87ec5c56->enter($__internal_2b88fbbbba644c83b650a487c8e8e09f7e1e1e6f1bf1713955dfffdb87ec5c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_81303e2531f61f834a2c41b54f18dcb380af298b5f854aac393e680c5d06551a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81303e2531f61f834a2c41b54f18dcb380af298b5f854aac393e680c5d06551a->enter($__internal_81303e2531f61f834a2c41b54f18dcb380af298b5f854aac393e680c5d06551a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2b88fbbbba644c83b650a487c8e8e09f7e1e1e6f1bf1713955dfffdb87ec5c56->leave($__internal_2b88fbbbba644c83b650a487c8e8e09f7e1e1e6f1bf1713955dfffdb87ec5c56_prof);

        
        $__internal_81303e2531f61f834a2c41b54f18dcb380af298b5f854aac393e680c5d06551a->leave($__internal_81303e2531f61f834a2c41b54f18dcb380af298b5f854aac393e680c5d06551a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
