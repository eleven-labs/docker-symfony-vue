<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_20a002d1d6d32e8394343b172252131edfc51baee7cbd2bade5d9f83fc92d197 extends Twig_Template
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
        $__internal_c6f100cf96bd3459e38dd32b616cb5a92f19353ff3cd25a52a690f3ee33c324e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f100cf96bd3459e38dd32b616cb5a92f19353ff3cd25a52a690f3ee33c324e->enter($__internal_c6f100cf96bd3459e38dd32b616cb5a92f19353ff3cd25a52a690f3ee33c324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4270c7179a4836b18531e39ff8b6f8507ee1e4046fae0590e7ef2464c26be601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4270c7179a4836b18531e39ff8b6f8507ee1e4046fae0590e7ef2464c26be601->enter($__internal_4270c7179a4836b18531e39ff8b6f8507ee1e4046fae0590e7ef2464c26be601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c6f100cf96bd3459e38dd32b616cb5a92f19353ff3cd25a52a690f3ee33c324e->leave($__internal_c6f100cf96bd3459e38dd32b616cb5a92f19353ff3cd25a52a690f3ee33c324e_prof);

        
        $__internal_4270c7179a4836b18531e39ff8b6f8507ee1e4046fae0590e7ef2464c26be601->leave($__internal_4270c7179a4836b18531e39ff8b6f8507ee1e4046fae0590e7ef2464c26be601_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
