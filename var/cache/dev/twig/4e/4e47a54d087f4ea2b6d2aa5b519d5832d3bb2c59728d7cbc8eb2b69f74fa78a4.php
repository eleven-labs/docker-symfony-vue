<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8ab17edf931ec010745ae1cd42f793fa1d128898aa802a733c2b09be47549912 extends Twig_Template
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
        $__internal_4e8264f69e302c241ecb2902210c478507c7ef78b53c796063f1ba22c01c316a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8264f69e302c241ecb2902210c478507c7ef78b53c796063f1ba22c01c316a->enter($__internal_4e8264f69e302c241ecb2902210c478507c7ef78b53c796063f1ba22c01c316a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_611979968d1de267b71c5a1878a5945de3ae7020a9c6102474fb1cd9756a867f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611979968d1de267b71c5a1878a5945de3ae7020a9c6102474fb1cd9756a867f->enter($__internal_611979968d1de267b71c5a1878a5945de3ae7020a9c6102474fb1cd9756a867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4e8264f69e302c241ecb2902210c478507c7ef78b53c796063f1ba22c01c316a->leave($__internal_4e8264f69e302c241ecb2902210c478507c7ef78b53c796063f1ba22c01c316a_prof);

        
        $__internal_611979968d1de267b71c5a1878a5945de3ae7020a9c6102474fb1cd9756a867f->leave($__internal_611979968d1de267b71c5a1878a5945de3ae7020a9c6102474fb1cd9756a867f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
