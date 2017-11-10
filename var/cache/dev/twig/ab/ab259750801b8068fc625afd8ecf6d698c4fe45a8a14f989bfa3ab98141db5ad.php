<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48bd85eab4a9d7fc72621e69390f0598d1087491dc05e7f8305783927c89fa6c extends Twig_Template
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
        $__internal_e4af9ca1d14b8f9102a228b1b6b80cee292bc761080dd3c96ce3875e447680ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4af9ca1d14b8f9102a228b1b6b80cee292bc761080dd3c96ce3875e447680ba->enter($__internal_e4af9ca1d14b8f9102a228b1b6b80cee292bc761080dd3c96ce3875e447680ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6d307a8e347d8122c395755f6efa6db7e16c3684bef149e804345a86aed9566c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d307a8e347d8122c395755f6efa6db7e16c3684bef149e804345a86aed9566c->enter($__internal_6d307a8e347d8122c395755f6efa6db7e16c3684bef149e804345a86aed9566c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e4af9ca1d14b8f9102a228b1b6b80cee292bc761080dd3c96ce3875e447680ba->leave($__internal_e4af9ca1d14b8f9102a228b1b6b80cee292bc761080dd3c96ce3875e447680ba_prof);

        
        $__internal_6d307a8e347d8122c395755f6efa6db7e16c3684bef149e804345a86aed9566c->leave($__internal_6d307a8e347d8122c395755f6efa6db7e16c3684bef149e804345a86aed9566c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
