<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a1e91f366ca905f96b8c4dfe77bcfc52b828051c960d1fcdbb49a46c82b238ab extends Twig_Template
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
        $__internal_73f9df567d65461c57b9ef2ce51b001b4a80b15b40b4701a275482419e971016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f9df567d65461c57b9ef2ce51b001b4a80b15b40b4701a275482419e971016->enter($__internal_73f9df567d65461c57b9ef2ce51b001b4a80b15b40b4701a275482419e971016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_02262aabdc2df1d4b455ee62ba72c279518d10f19dabb7d49a4d347132a21e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02262aabdc2df1d4b455ee62ba72c279518d10f19dabb7d49a4d347132a21e2a->enter($__internal_02262aabdc2df1d4b455ee62ba72c279518d10f19dabb7d49a4d347132a21e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_73f9df567d65461c57b9ef2ce51b001b4a80b15b40b4701a275482419e971016->leave($__internal_73f9df567d65461c57b9ef2ce51b001b4a80b15b40b4701a275482419e971016_prof);

        
        $__internal_02262aabdc2df1d4b455ee62ba72c279518d10f19dabb7d49a4d347132a21e2a->leave($__internal_02262aabdc2df1d4b455ee62ba72c279518d10f19dabb7d49a4d347132a21e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
