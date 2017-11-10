<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6b5b6954db5bb3226d96f417c34ce514594f4cdfb63a1f7ca42bb56b63a27644 extends Twig_Template
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
        $__internal_96fadb13845e7c8510fb20070d340a97394527bdd15fb0afa4c3540c9258cdd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96fadb13845e7c8510fb20070d340a97394527bdd15fb0afa4c3540c9258cdd7->enter($__internal_96fadb13845e7c8510fb20070d340a97394527bdd15fb0afa4c3540c9258cdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bf71b8d2ceca419784e69e967877ddf2cf49f1c92f7c54fd01e22f55088975ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf71b8d2ceca419784e69e967877ddf2cf49f1c92f7c54fd01e22f55088975ff->enter($__internal_bf71b8d2ceca419784e69e967877ddf2cf49f1c92f7c54fd01e22f55088975ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_96fadb13845e7c8510fb20070d340a97394527bdd15fb0afa4c3540c9258cdd7->leave($__internal_96fadb13845e7c8510fb20070d340a97394527bdd15fb0afa4c3540c9258cdd7_prof);

        
        $__internal_bf71b8d2ceca419784e69e967877ddf2cf49f1c92f7c54fd01e22f55088975ff->leave($__internal_bf71b8d2ceca419784e69e967877ddf2cf49f1c92f7c54fd01e22f55088975ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
