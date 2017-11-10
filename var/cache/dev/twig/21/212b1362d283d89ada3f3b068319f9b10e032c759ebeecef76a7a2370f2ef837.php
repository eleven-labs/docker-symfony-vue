<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2c5719267716a4213471d052a3ff7d0a658a1724128865ef4707ad92a641942c extends Twig_Template
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
        $__internal_4fef4f832b5f0057e16d265ca2c3fec5fff2a52fe21686bd174672b68c8b2b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fef4f832b5f0057e16d265ca2c3fec5fff2a52fe21686bd174672b68c8b2b37->enter($__internal_4fef4f832b5f0057e16d265ca2c3fec5fff2a52fe21686bd174672b68c8b2b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_508065cc133c713ada778765d87c7f8e7fddcdff5fbb04c0595eb5c06d3e078f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508065cc133c713ada778765d87c7f8e7fddcdff5fbb04c0595eb5c06d3e078f->enter($__internal_508065cc133c713ada778765d87c7f8e7fddcdff5fbb04c0595eb5c06d3e078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4fef4f832b5f0057e16d265ca2c3fec5fff2a52fe21686bd174672b68c8b2b37->leave($__internal_4fef4f832b5f0057e16d265ca2c3fec5fff2a52fe21686bd174672b68c8b2b37_prof);

        
        $__internal_508065cc133c713ada778765d87c7f8e7fddcdff5fbb04c0595eb5c06d3e078f->leave($__internal_508065cc133c713ada778765d87c7f8e7fddcdff5fbb04c0595eb5c06d3e078f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
