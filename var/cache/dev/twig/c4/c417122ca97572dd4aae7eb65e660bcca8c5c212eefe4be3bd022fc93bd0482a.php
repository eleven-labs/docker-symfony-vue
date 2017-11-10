<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c3cfd0b48066bb6db275e6f50698dd125d1266199c31a254f2f1bafe5530be9f extends Twig_Template
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
        $__internal_b25982d2312de857b4d2a0038591d1e2ac4f97e3469f408434caade7cb93ee3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25982d2312de857b4d2a0038591d1e2ac4f97e3469f408434caade7cb93ee3b->enter($__internal_b25982d2312de857b4d2a0038591d1e2ac4f97e3469f408434caade7cb93ee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d025b718b0e16f919be481556a6d99c1cdaabee234873748d4db5e9d76f34a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d025b718b0e16f919be481556a6d99c1cdaabee234873748d4db5e9d76f34a22->enter($__internal_d025b718b0e16f919be481556a6d99c1cdaabee234873748d4db5e9d76f34a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b25982d2312de857b4d2a0038591d1e2ac4f97e3469f408434caade7cb93ee3b->leave($__internal_b25982d2312de857b4d2a0038591d1e2ac4f97e3469f408434caade7cb93ee3b_prof);

        
        $__internal_d025b718b0e16f919be481556a6d99c1cdaabee234873748d4db5e9d76f34a22->leave($__internal_d025b718b0e16f919be481556a6d99c1cdaabee234873748d4db5e9d76f34a22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
