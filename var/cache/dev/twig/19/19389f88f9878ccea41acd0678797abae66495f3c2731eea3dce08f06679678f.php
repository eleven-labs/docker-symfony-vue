<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e798dbbd24cea784321d24074bed4afd4b335a4f5b4b5c6f2db37d11fc9403bc extends Twig_Template
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
        $__internal_777c3b70b20d319118c1b742902508064a861eb5973b466fe8573b7c90b4cf49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777c3b70b20d319118c1b742902508064a861eb5973b466fe8573b7c90b4cf49->enter($__internal_777c3b70b20d319118c1b742902508064a861eb5973b466fe8573b7c90b4cf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d92b694532e53e52c86e5bb3c078ec7e0088255cd246349f041b5a68a057b87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92b694532e53e52c86e5bb3c078ec7e0088255cd246349f041b5a68a057b87a->enter($__internal_d92b694532e53e52c86e5bb3c078ec7e0088255cd246349f041b5a68a057b87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_777c3b70b20d319118c1b742902508064a861eb5973b466fe8573b7c90b4cf49->leave($__internal_777c3b70b20d319118c1b742902508064a861eb5973b466fe8573b7c90b4cf49_prof);

        
        $__internal_d92b694532e53e52c86e5bb3c078ec7e0088255cd246349f041b5a68a057b87a->leave($__internal_d92b694532e53e52c86e5bb3c078ec7e0088255cd246349f041b5a68a057b87a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
