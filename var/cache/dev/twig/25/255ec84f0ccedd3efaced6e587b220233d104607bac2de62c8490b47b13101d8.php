<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f4e614e33a7193454a2c61aa0c0d84df7e40e22d2aaab57347cf3ad09234e7cf extends Twig_Template
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
        $__internal_e5034fdf49152f28c7ef574332a0fb245ca3a84803ade7d588ab9d7ec211041f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5034fdf49152f28c7ef574332a0fb245ca3a84803ade7d588ab9d7ec211041f->enter($__internal_e5034fdf49152f28c7ef574332a0fb245ca3a84803ade7d588ab9d7ec211041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_bd22f0d1c9253e26dde09a6971909c779a79b51b37f8bd128480e7e527811de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd22f0d1c9253e26dde09a6971909c779a79b51b37f8bd128480e7e527811de6->enter($__internal_bd22f0d1c9253e26dde09a6971909c779a79b51b37f8bd128480e7e527811de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e5034fdf49152f28c7ef574332a0fb245ca3a84803ade7d588ab9d7ec211041f->leave($__internal_e5034fdf49152f28c7ef574332a0fb245ca3a84803ade7d588ab9d7ec211041f_prof);

        
        $__internal_bd22f0d1c9253e26dde09a6971909c779a79b51b37f8bd128480e7e527811de6->leave($__internal_bd22f0d1c9253e26dde09a6971909c779a79b51b37f8bd128480e7e527811de6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
