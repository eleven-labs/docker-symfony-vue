<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b057bb4ded1fbaa979522d60d6043bf478217cd6d7e84e80c404854d0f3b367d extends Twig_Template
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
        $__internal_ca95fe70196e18f9b8c4927a5883130f5d555b143a930b62b0823ac3ef0cc0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca95fe70196e18f9b8c4927a5883130f5d555b143a930b62b0823ac3ef0cc0bb->enter($__internal_ca95fe70196e18f9b8c4927a5883130f5d555b143a930b62b0823ac3ef0cc0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fcf3ea267bd6d88218617318c6a7f2c7a59d74585e4290f375651566f03554d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf3ea267bd6d88218617318c6a7f2c7a59d74585e4290f375651566f03554d2->enter($__internal_fcf3ea267bd6d88218617318c6a7f2c7a59d74585e4290f375651566f03554d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ca95fe70196e18f9b8c4927a5883130f5d555b143a930b62b0823ac3ef0cc0bb->leave($__internal_ca95fe70196e18f9b8c4927a5883130f5d555b143a930b62b0823ac3ef0cc0bb_prof);

        
        $__internal_fcf3ea267bd6d88218617318c6a7f2c7a59d74585e4290f375651566f03554d2->leave($__internal_fcf3ea267bd6d88218617318c6a7f2c7a59d74585e4290f375651566f03554d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
