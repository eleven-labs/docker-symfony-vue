<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bf0c00b2ffe71a8eb3de3562b85a1b16865c255c8ade32ca55f5674140cfe504 extends Twig_Template
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
        $__internal_111854729e3fbc70da8201d3e93a9efdb7ec6bd5e6f46ee63b80ce8846d63326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111854729e3fbc70da8201d3e93a9efdb7ec6bd5e6f46ee63b80ce8846d63326->enter($__internal_111854729e3fbc70da8201d3e93a9efdb7ec6bd5e6f46ee63b80ce8846d63326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4bfc0023f9ec1d4c18101bbe6a6e0a67a6bc656c670617b5fa05a483b7b37d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfc0023f9ec1d4c18101bbe6a6e0a67a6bc656c670617b5fa05a483b7b37d9b->enter($__internal_4bfc0023f9ec1d4c18101bbe6a6e0a67a6bc656c670617b5fa05a483b7b37d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_111854729e3fbc70da8201d3e93a9efdb7ec6bd5e6f46ee63b80ce8846d63326->leave($__internal_111854729e3fbc70da8201d3e93a9efdb7ec6bd5e6f46ee63b80ce8846d63326_prof);

        
        $__internal_4bfc0023f9ec1d4c18101bbe6a6e0a67a6bc656c670617b5fa05a483b7b37d9b->leave($__internal_4bfc0023f9ec1d4c18101bbe6a6e0a67a6bc656c670617b5fa05a483b7b37d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
