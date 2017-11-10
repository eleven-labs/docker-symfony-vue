<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ddd33264701589964c8d73e07e0475c24c97175393f1b6276ae7a6df6035a351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ef5cdfb513e7a7b404d784e05f80e4e51220e38b7c2a225c67e387de37dce58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef5cdfb513e7a7b404d784e05f80e4e51220e38b7c2a225c67e387de37dce58->enter($__internal_8ef5cdfb513e7a7b404d784e05f80e4e51220e38b7c2a225c67e387de37dce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1ab1f59a56bcdb07d5237c0bfd9af81968c0a81a0a142940160a5388543e3719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab1f59a56bcdb07d5237c0bfd9af81968c0a81a0a142940160a5388543e3719->enter($__internal_1ab1f59a56bcdb07d5237c0bfd9af81968c0a81a0a142940160a5388543e3719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef5cdfb513e7a7b404d784e05f80e4e51220e38b7c2a225c67e387de37dce58->leave($__internal_8ef5cdfb513e7a7b404d784e05f80e4e51220e38b7c2a225c67e387de37dce58_prof);

        
        $__internal_1ab1f59a56bcdb07d5237c0bfd9af81968c0a81a0a142940160a5388543e3719->leave($__internal_1ab1f59a56bcdb07d5237c0bfd9af81968c0a81a0a142940160a5388543e3719_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_467b53222c03ccef9e178a1cf0a0e60641219825a1af424f1f555e126f7a12a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467b53222c03ccef9e178a1cf0a0e60641219825a1af424f1f555e126f7a12a6->enter($__internal_467b53222c03ccef9e178a1cf0a0e60641219825a1af424f1f555e126f7a12a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3deb5de53efa6f9759290a9630e3c961a2256f472f004e768ee94c4edf4e705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3deb5de53efa6f9759290a9630e3c961a2256f472f004e768ee94c4edf4e705->enter($__internal_e3deb5de53efa6f9759290a9630e3c961a2256f472f004e768ee94c4edf4e705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e3deb5de53efa6f9759290a9630e3c961a2256f472f004e768ee94c4edf4e705->leave($__internal_e3deb5de53efa6f9759290a9630e3c961a2256f472f004e768ee94c4edf4e705_prof);

        
        $__internal_467b53222c03ccef9e178a1cf0a0e60641219825a1af424f1f555e126f7a12a6->leave($__internal_467b53222c03ccef9e178a1cf0a0e60641219825a1af424f1f555e126f7a12a6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_625d5707274588e264967ce6aab0828f5f0290e73d1d0c5a557cb16a030b627b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625d5707274588e264967ce6aab0828f5f0290e73d1d0c5a557cb16a030b627b->enter($__internal_625d5707274588e264967ce6aab0828f5f0290e73d1d0c5a557cb16a030b627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80e7f35c561fe9e66be1e10414f6c946a4e70a6050a1051ebe82b0bea2852ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e7f35c561fe9e66be1e10414f6c946a4e70a6050a1051ebe82b0bea2852ea6->enter($__internal_80e7f35c561fe9e66be1e10414f6c946a4e70a6050a1051ebe82b0bea2852ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_80e7f35c561fe9e66be1e10414f6c946a4e70a6050a1051ebe82b0bea2852ea6->leave($__internal_80e7f35c561fe9e66be1e10414f6c946a4e70a6050a1051ebe82b0bea2852ea6_prof);

        
        $__internal_625d5707274588e264967ce6aab0828f5f0290e73d1d0c5a557cb16a030b627b->leave($__internal_625d5707274588e264967ce6aab0828f5f0290e73d1d0c5a557cb16a030b627b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
