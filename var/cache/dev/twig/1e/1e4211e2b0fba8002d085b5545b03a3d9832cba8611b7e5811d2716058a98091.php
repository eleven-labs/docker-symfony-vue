<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_009203b4e2b3a7ea7a48cd23b7c66b7db28be8e546d0f9f1ed0f82e2d0f2999b extends Twig_Template
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
        $__internal_967f06f011f559dbc39f686fdfc567dcf89b80b0de68ce00836bbbd0c9ef6575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967f06f011f559dbc39f686fdfc567dcf89b80b0de68ce00836bbbd0c9ef6575->enter($__internal_967f06f011f559dbc39f686fdfc567dcf89b80b0de68ce00836bbbd0c9ef6575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4bb32891ea0630c23fa090ac81cfe118a73ab3cd3b75150ecd0a5aa2d4bf9b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb32891ea0630c23fa090ac81cfe118a73ab3cd3b75150ecd0a5aa2d4bf9b7d->enter($__internal_4bb32891ea0630c23fa090ac81cfe118a73ab3cd3b75150ecd0a5aa2d4bf9b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_967f06f011f559dbc39f686fdfc567dcf89b80b0de68ce00836bbbd0c9ef6575->leave($__internal_967f06f011f559dbc39f686fdfc567dcf89b80b0de68ce00836bbbd0c9ef6575_prof);

        
        $__internal_4bb32891ea0630c23fa090ac81cfe118a73ab3cd3b75150ecd0a5aa2d4bf9b7d->leave($__internal_4bb32891ea0630c23fa090ac81cfe118a73ab3cd3b75150ecd0a5aa2d4bf9b7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
