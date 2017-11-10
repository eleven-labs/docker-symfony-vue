<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1a038b7a8b5d2342508e8e917c71f8b0d6687f04ea95852d30136ee87e91b8d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99cfa99d28073fabf25feefa2323041e6bbb3da69401f2c915abab4717310950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99cfa99d28073fabf25feefa2323041e6bbb3da69401f2c915abab4717310950->enter($__internal_99cfa99d28073fabf25feefa2323041e6bbb3da69401f2c915abab4717310950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_bff0f020fcd59c70bc13e2fb9cb75030fa5e37414cdc3e21977f4709c7bbd1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff0f020fcd59c70bc13e2fb9cb75030fa5e37414cdc3e21977f4709c7bbd1bf->enter($__internal_bff0f020fcd59c70bc13e2fb9cb75030fa5e37414cdc3e21977f4709c7bbd1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_99cfa99d28073fabf25feefa2323041e6bbb3da69401f2c915abab4717310950->leave($__internal_99cfa99d28073fabf25feefa2323041e6bbb3da69401f2c915abab4717310950_prof);

        
        $__internal_bff0f020fcd59c70bc13e2fb9cb75030fa5e37414cdc3e21977f4709c7bbd1bf->leave($__internal_bff0f020fcd59c70bc13e2fb9cb75030fa5e37414cdc3e21977f4709c7bbd1bf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_39a29445d400c4ea0c36c8bd97a8ab187feaaae645f8f1a2d330df17790365af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a29445d400c4ea0c36c8bd97a8ab187feaaae645f8f1a2d330df17790365af->enter($__internal_39a29445d400c4ea0c36c8bd97a8ab187feaaae645f8f1a2d330df17790365af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b909033188da54a779e1cb868b7ef2f358394ad089cb2bfb082946b3c98ec72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b909033188da54a779e1cb868b7ef2f358394ad089cb2bfb082946b3c98ec72->enter($__internal_3b909033188da54a779e1cb868b7ef2f358394ad089cb2bfb082946b3c98ec72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3b909033188da54a779e1cb868b7ef2f358394ad089cb2bfb082946b3c98ec72->leave($__internal_3b909033188da54a779e1cb868b7ef2f358394ad089cb2bfb082946b3c98ec72_prof);

        
        $__internal_39a29445d400c4ea0c36c8bd97a8ab187feaaae645f8f1a2d330df17790365af->leave($__internal_39a29445d400c4ea0c36c8bd97a8ab187feaaae645f8f1a2d330df17790365af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
