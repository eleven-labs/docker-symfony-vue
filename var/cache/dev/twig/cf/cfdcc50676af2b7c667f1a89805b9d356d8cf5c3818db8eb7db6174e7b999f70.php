<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_96b2e8ca1493a1d27471f6a808ca06bcecfd26a58a8d3f46878bef8af4350cc6 extends Twig_Template
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
        $__internal_f4a7c14b41f9191d6c0b73b62611738dfec328489a4ef9e2c32968ffb84dffa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a7c14b41f9191d6c0b73b62611738dfec328489a4ef9e2c32968ffb84dffa5->enter($__internal_f4a7c14b41f9191d6c0b73b62611738dfec328489a4ef9e2c32968ffb84dffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_503d19c706089dba7eddb31e6b0474de8d66d975f0ee7c99a6d0204b4b74593c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503d19c706089dba7eddb31e6b0474de8d66d975f0ee7c99a6d0204b4b74593c->enter($__internal_503d19c706089dba7eddb31e6b0474de8d66d975f0ee7c99a6d0204b4b74593c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f4a7c14b41f9191d6c0b73b62611738dfec328489a4ef9e2c32968ffb84dffa5->leave($__internal_f4a7c14b41f9191d6c0b73b62611738dfec328489a4ef9e2c32968ffb84dffa5_prof);

        
        $__internal_503d19c706089dba7eddb31e6b0474de8d66d975f0ee7c99a6d0204b4b74593c->leave($__internal_503d19c706089dba7eddb31e6b0474de8d66d975f0ee7c99a6d0204b4b74593c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
