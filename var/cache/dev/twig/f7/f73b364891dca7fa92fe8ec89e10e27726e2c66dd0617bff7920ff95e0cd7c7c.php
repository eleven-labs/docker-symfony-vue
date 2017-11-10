<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_5abacd4ad410a88a3cc17a3d5c566e5b4d9443b05d436e49f135c1ff0a0226e9 extends Twig_Template
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
        $__internal_ef9a5aa24e469a51c9fd38eeb5c6173140680c5aadcbe128cab47c7f2e8dba78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9a5aa24e469a51c9fd38eeb5c6173140680c5aadcbe128cab47c7f2e8dba78->enter($__internal_ef9a5aa24e469a51c9fd38eeb5c6173140680c5aadcbe128cab47c7f2e8dba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c7816e1f73876874a4cee24d917c91b66719293a2c91d048e5cafee6fd802552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7816e1f73876874a4cee24d917c91b66719293a2c91d048e5cafee6fd802552->enter($__internal_c7816e1f73876874a4cee24d917c91b66719293a2c91d048e5cafee6fd802552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ef9a5aa24e469a51c9fd38eeb5c6173140680c5aadcbe128cab47c7f2e8dba78->leave($__internal_ef9a5aa24e469a51c9fd38eeb5c6173140680c5aadcbe128cab47c7f2e8dba78_prof);

        
        $__internal_c7816e1f73876874a4cee24d917c91b66719293a2c91d048e5cafee6fd802552->leave($__internal_c7816e1f73876874a4cee24d917c91b66719293a2c91d048e5cafee6fd802552_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
