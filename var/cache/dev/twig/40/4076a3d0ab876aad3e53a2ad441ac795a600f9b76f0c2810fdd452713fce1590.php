<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_9b51c6d27f8a444e1afe357ef43fad951cadf787a440f079f08b6a8c4c7ec688 extends Twig_Template
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
        $__internal_5deb52daf6e5a30255c893044e384e3161a55fedf68193ce0f90ec23a403461c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5deb52daf6e5a30255c893044e384e3161a55fedf68193ce0f90ec23a403461c->enter($__internal_5deb52daf6e5a30255c893044e384e3161a55fedf68193ce0f90ec23a403461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a784c329ba9b8007782fc9c10b2bebd94e6df0f4d9e372c12c447aa242f4753b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a784c329ba9b8007782fc9c10b2bebd94e6df0f4d9e372c12c447aa242f4753b->enter($__internal_a784c329ba9b8007782fc9c10b2bebd94e6df0f4d9e372c12c447aa242f4753b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5deb52daf6e5a30255c893044e384e3161a55fedf68193ce0f90ec23a403461c->leave($__internal_5deb52daf6e5a30255c893044e384e3161a55fedf68193ce0f90ec23a403461c_prof);

        
        $__internal_a784c329ba9b8007782fc9c10b2bebd94e6df0f4d9e372c12c447aa242f4753b->leave($__internal_a784c329ba9b8007782fc9c10b2bebd94e6df0f4d9e372c12c447aa242f4753b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
