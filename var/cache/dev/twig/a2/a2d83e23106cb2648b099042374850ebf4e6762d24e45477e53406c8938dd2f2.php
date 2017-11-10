<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_42bc6cbede6bd727e8cb637559f815fdfd83e1ab808269dc770d83e8c17d6300 extends Twig_Template
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
        $__internal_633c39fee730f2d9f9b866a619bcb273d4d385493e89d2d1fc8878b067ad06bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633c39fee730f2d9f9b866a619bcb273d4d385493e89d2d1fc8878b067ad06bf->enter($__internal_633c39fee730f2d9f9b866a619bcb273d4d385493e89d2d1fc8878b067ad06bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ce4569daa5f13edee49ea1ea9c2bde3f599b4ed57682e2ffeccf14c36bd9e59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4569daa5f13edee49ea1ea9c2bde3f599b4ed57682e2ffeccf14c36bd9e59c->enter($__internal_ce4569daa5f13edee49ea1ea9c2bde3f599b4ed57682e2ffeccf14c36bd9e59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_633c39fee730f2d9f9b866a619bcb273d4d385493e89d2d1fc8878b067ad06bf->leave($__internal_633c39fee730f2d9f9b866a619bcb273d4d385493e89d2d1fc8878b067ad06bf_prof);

        
        $__internal_ce4569daa5f13edee49ea1ea9c2bde3f599b4ed57682e2ffeccf14c36bd9e59c->leave($__internal_ce4569daa5f13edee49ea1ea9c2bde3f599b4ed57682e2ffeccf14c36bd9e59c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
