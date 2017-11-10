<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5f30b5021dd181dc2a963f42161948fa918715c2150da48eeb0bb3f272dc0965 extends Twig_Template
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
        $__internal_44736bb61a818521a20060a72e7f8649106e88439ae4be5831b1eff003f88385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44736bb61a818521a20060a72e7f8649106e88439ae4be5831b1eff003f88385->enter($__internal_44736bb61a818521a20060a72e7f8649106e88439ae4be5831b1eff003f88385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_52480341a6308687f6fc8528aa59f0e457941b049c4b69ab13068d1e36a8f146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52480341a6308687f6fc8528aa59f0e457941b049c4b69ab13068d1e36a8f146->enter($__internal_52480341a6308687f6fc8528aa59f0e457941b049c4b69ab13068d1e36a8f146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_44736bb61a818521a20060a72e7f8649106e88439ae4be5831b1eff003f88385->leave($__internal_44736bb61a818521a20060a72e7f8649106e88439ae4be5831b1eff003f88385_prof);

        
        $__internal_52480341a6308687f6fc8528aa59f0e457941b049c4b69ab13068d1e36a8f146->leave($__internal_52480341a6308687f6fc8528aa59f0e457941b049c4b69ab13068d1e36a8f146_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
