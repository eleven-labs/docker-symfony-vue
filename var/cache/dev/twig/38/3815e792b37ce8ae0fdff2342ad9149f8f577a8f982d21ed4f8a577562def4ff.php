<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_192461a440b17006c17db228dcb4b8cfb4db3dff23fff3e7518772439220c966 extends Twig_Template
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
        $__internal_f7df991fcea0c55fa7e3dcdccd28818616622a5ef24421e2ec4f95a06366d78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7df991fcea0c55fa7e3dcdccd28818616622a5ef24421e2ec4f95a06366d78f->enter($__internal_f7df991fcea0c55fa7e3dcdccd28818616622a5ef24421e2ec4f95a06366d78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_fd36daa05b4bae13c55aff08c6b7105d98625e6c15a079c612c0f30e32246b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd36daa05b4bae13c55aff08c6b7105d98625e6c15a079c612c0f30e32246b0b->enter($__internal_fd36daa05b4bae13c55aff08c6b7105d98625e6c15a079c612c0f30e32246b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_f7df991fcea0c55fa7e3dcdccd28818616622a5ef24421e2ec4f95a06366d78f->leave($__internal_f7df991fcea0c55fa7e3dcdccd28818616622a5ef24421e2ec4f95a06366d78f_prof);

        
        $__internal_fd36daa05b4bae13c55aff08c6b7105d98625e6c15a079c612c0f30e32246b0b->leave($__internal_fd36daa05b4bae13c55aff08c6b7105d98625e6c15a079c612c0f30e32246b0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
