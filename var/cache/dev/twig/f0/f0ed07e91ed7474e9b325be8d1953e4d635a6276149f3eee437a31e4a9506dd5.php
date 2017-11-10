<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e3d318aeeeacb8db2d4be8510db170ed8ab32d7d4ce1695c57cd1c9c17c8a010 extends Twig_Template
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
        $__internal_566cc25fdb3f784b0138785aefb16bbac35f10be29835df906c7fb8595092871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566cc25fdb3f784b0138785aefb16bbac35f10be29835df906c7fb8595092871->enter($__internal_566cc25fdb3f784b0138785aefb16bbac35f10be29835df906c7fb8595092871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_292e39e2e256aaf8834fd638e6a03c8093fd9d912d5ea741419e42a96d40c61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292e39e2e256aaf8834fd638e6a03c8093fd9d912d5ea741419e42a96d40c61a->enter($__internal_292e39e2e256aaf8834fd638e6a03c8093fd9d912d5ea741419e42a96d40c61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_566cc25fdb3f784b0138785aefb16bbac35f10be29835df906c7fb8595092871->leave($__internal_566cc25fdb3f784b0138785aefb16bbac35f10be29835df906c7fb8595092871_prof);

        
        $__internal_292e39e2e256aaf8834fd638e6a03c8093fd9d912d5ea741419e42a96d40c61a->leave($__internal_292e39e2e256aaf8834fd638e6a03c8093fd9d912d5ea741419e42a96d40c61a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
