<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_5a3bebd72334ddc16ea8a72ac938ce5450597a086f23621a60a68b3248de6e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25a02a156b386bb1f2a9d4e0a300b13cabda5aadffc5c3e89d7cc69b8325cec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a02a156b386bb1f2a9d4e0a300b13cabda5aadffc5c3e89d7cc69b8325cec3->enter($__internal_25a02a156b386bb1f2a9d4e0a300b13cabda5aadffc5c3e89d7cc69b8325cec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6996d7fb9d1fd9a9fc52a97ae2ce327aeaaee4d0c0e8e6afd8f551febf8ebe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6996d7fb9d1fd9a9fc52a97ae2ce327aeaaee4d0c0e8e6afd8f551febf8ebe1b->enter($__internal_6996d7fb9d1fd9a9fc52a97ae2ce327aeaaee4d0c0e8e6afd8f551febf8ebe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a02a156b386bb1f2a9d4e0a300b13cabda5aadffc5c3e89d7cc69b8325cec3->leave($__internal_25a02a156b386bb1f2a9d4e0a300b13cabda5aadffc5c3e89d7cc69b8325cec3_prof);

        
        $__internal_6996d7fb9d1fd9a9fc52a97ae2ce327aeaaee4d0c0e8e6afd8f551febf8ebe1b->leave($__internal_6996d7fb9d1fd9a9fc52a97ae2ce327aeaaee4d0c0e8e6afd8f551febf8ebe1b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_376dcbc90b8a2bd81855c68a560a621b748e7d240a6731af980e3783648952a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376dcbc90b8a2bd81855c68a560a621b748e7d240a6731af980e3783648952a4->enter($__internal_376dcbc90b8a2bd81855c68a560a621b748e7d240a6731af980e3783648952a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b8c4c3e0473b37a03f2fd6399cf842df8584d1f0743f43ad61a6e7bb16d2f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8c4c3e0473b37a03f2fd6399cf842df8584d1f0743f43ad61a6e7bb16d2f73->enter($__internal_9b8c4c3e0473b37a03f2fd6399cf842df8584d1f0743f43ad61a6e7bb16d2f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9b8c4c3e0473b37a03f2fd6399cf842df8584d1f0743f43ad61a6e7bb16d2f73->leave($__internal_9b8c4c3e0473b37a03f2fd6399cf842df8584d1f0743f43ad61a6e7bb16d2f73_prof);

        
        $__internal_376dcbc90b8a2bd81855c68a560a621b748e7d240a6731af980e3783648952a4->leave($__internal_376dcbc90b8a2bd81855c68a560a621b748e7d240a6731af980e3783648952a4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_60e0c0e8e735e8e9ffbfce55fe68719f948ebaeb6968f35385a7a809e4cb7bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e0c0e8e735e8e9ffbfce55fe68719f948ebaeb6968f35385a7a809e4cb7bcc->enter($__internal_60e0c0e8e735e8e9ffbfce55fe68719f948ebaeb6968f35385a7a809e4cb7bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a59cc8aa65dd97da46b87444cb035cfe1c00962c557f2dca04df2d26db4686c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59cc8aa65dd97da46b87444cb035cfe1c00962c557f2dca04df2d26db4686c9->enter($__internal_a59cc8aa65dd97da46b87444cb035cfe1c00962c557f2dca04df2d26db4686c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_a59cc8aa65dd97da46b87444cb035cfe1c00962c557f2dca04df2d26db4686c9->leave($__internal_a59cc8aa65dd97da46b87444cb035cfe1c00962c557f2dca04df2d26db4686c9_prof);

        
        $__internal_60e0c0e8e735e8e9ffbfce55fe68719f948ebaeb6968f35385a7a809e4cb7bcc->leave($__internal_60e0c0e8e735e8e9ffbfce55fe68719f948ebaeb6968f35385a7a809e4cb7bcc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
