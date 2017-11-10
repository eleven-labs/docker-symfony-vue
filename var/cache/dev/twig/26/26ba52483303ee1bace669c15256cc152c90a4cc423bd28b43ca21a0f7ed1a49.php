<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2c25482f7042320728bc2723321802bc2e7e0d67cb852c4e8507b8cae6f7ccbf extends Twig_Template
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
        $__internal_e9b2ffadbd18699b34e5672da490733071d4e533c0889264592ac994c901b5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b2ffadbd18699b34e5672da490733071d4e533c0889264592ac994c901b5dd->enter($__internal_e9b2ffadbd18699b34e5672da490733071d4e533c0889264592ac994c901b5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dac4c3d48bf47a55dbc3427e2014faf45cac0e4db1d56823f72ad9a0b6daf37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac4c3d48bf47a55dbc3427e2014faf45cac0e4db1d56823f72ad9a0b6daf37a->enter($__internal_dac4c3d48bf47a55dbc3427e2014faf45cac0e4db1d56823f72ad9a0b6daf37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e9b2ffadbd18699b34e5672da490733071d4e533c0889264592ac994c901b5dd->leave($__internal_e9b2ffadbd18699b34e5672da490733071d4e533c0889264592ac994c901b5dd_prof);

        
        $__internal_dac4c3d48bf47a55dbc3427e2014faf45cac0e4db1d56823f72ad9a0b6daf37a->leave($__internal_dac4c3d48bf47a55dbc3427e2014faf45cac0e4db1d56823f72ad9a0b6daf37a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
