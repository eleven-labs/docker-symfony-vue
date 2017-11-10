<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_130aa10b046ff6e46a83c1396ccc10d8fefd7747f13babce9d4aa0744dc870a8 extends Twig_Template
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
        $__internal_e735bf832e65c9b3e0d092e6f7dc7157be536f2cd9a28eafdf388766c1d212d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e735bf832e65c9b3e0d092e6f7dc7157be536f2cd9a28eafdf388766c1d212d0->enter($__internal_e735bf832e65c9b3e0d092e6f7dc7157be536f2cd9a28eafdf388766c1d212d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_599f97739545023fce302473cc4f2d019171d85d54b8cbf175eb70e4ed56a926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599f97739545023fce302473cc4f2d019171d85d54b8cbf175eb70e4ed56a926->enter($__internal_599f97739545023fce302473cc4f2d019171d85d54b8cbf175eb70e4ed56a926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e735bf832e65c9b3e0d092e6f7dc7157be536f2cd9a28eafdf388766c1d212d0->leave($__internal_e735bf832e65c9b3e0d092e6f7dc7157be536f2cd9a28eafdf388766c1d212d0_prof);

        
        $__internal_599f97739545023fce302473cc4f2d019171d85d54b8cbf175eb70e4ed56a926->leave($__internal_599f97739545023fce302473cc4f2d019171d85d54b8cbf175eb70e4ed56a926_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
