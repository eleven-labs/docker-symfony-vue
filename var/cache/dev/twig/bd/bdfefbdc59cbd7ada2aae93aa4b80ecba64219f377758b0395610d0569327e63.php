<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e6e5350934db7e96a9bc51439c9baf223dc0687dc44cbf3ed160da0b9f96069b extends Twig_Template
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
        $__internal_b5921c0d7beaae7b33bcd09693caf88810097166095baea1eaede0efecfe84f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5921c0d7beaae7b33bcd09693caf88810097166095baea1eaede0efecfe84f9->enter($__internal_b5921c0d7beaae7b33bcd09693caf88810097166095baea1eaede0efecfe84f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9ff4b1eee3b902e30d7113a0b3109d3708a0f8db641944026a3b240580203140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff4b1eee3b902e30d7113a0b3109d3708a0f8db641944026a3b240580203140->enter($__internal_9ff4b1eee3b902e30d7113a0b3109d3708a0f8db641944026a3b240580203140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b5921c0d7beaae7b33bcd09693caf88810097166095baea1eaede0efecfe84f9->leave($__internal_b5921c0d7beaae7b33bcd09693caf88810097166095baea1eaede0efecfe84f9_prof);

        
        $__internal_9ff4b1eee3b902e30d7113a0b3109d3708a0f8db641944026a3b240580203140->leave($__internal_9ff4b1eee3b902e30d7113a0b3109d3708a0f8db641944026a3b240580203140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
