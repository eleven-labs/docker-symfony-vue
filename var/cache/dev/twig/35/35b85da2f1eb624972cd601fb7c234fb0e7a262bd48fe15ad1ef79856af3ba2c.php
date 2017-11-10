<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0830b3045ee3f5b99e97da29a5aeb5a9a9eb0d05ca33702254c2e9fd2f2230ad extends Twig_Template
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
        $__internal_36645bdeb86d93aeb5a5ab5fba6dbae4b915ac3c3b4ebd99d53557c4ca9348a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36645bdeb86d93aeb5a5ab5fba6dbae4b915ac3c3b4ebd99d53557c4ca9348a7->enter($__internal_36645bdeb86d93aeb5a5ab5fba6dbae4b915ac3c3b4ebd99d53557c4ca9348a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d2b2d43fd83128045f527f541176a1e520c0c5acf057542fa888678fc215cf35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b2d43fd83128045f527f541176a1e520c0c5acf057542fa888678fc215cf35->enter($__internal_d2b2d43fd83128045f527f541176a1e520c0c5acf057542fa888678fc215cf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_36645bdeb86d93aeb5a5ab5fba6dbae4b915ac3c3b4ebd99d53557c4ca9348a7->leave($__internal_36645bdeb86d93aeb5a5ab5fba6dbae4b915ac3c3b4ebd99d53557c4ca9348a7_prof);

        
        $__internal_d2b2d43fd83128045f527f541176a1e520c0c5acf057542fa888678fc215cf35->leave($__internal_d2b2d43fd83128045f527f541176a1e520c0c5acf057542fa888678fc215cf35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
