<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fd4095c43fd4c8998034ce4e91bd9e6c83b9b7e08f8d24930b60d691ba144360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_282bbb717c6d2a25b6ed439c148ac9a8088dd9b44d967a550609f527d21c23cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282bbb717c6d2a25b6ed439c148ac9a8088dd9b44d967a550609f527d21c23cd->enter($__internal_282bbb717c6d2a25b6ed439c148ac9a8088dd9b44d967a550609f527d21c23cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_343a7c7abde81ca83bf1fb7b865836ea19bf527544d99d09e7c8c1f8f5acf57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343a7c7abde81ca83bf1fb7b865836ea19bf527544d99d09e7c8c1f8f5acf57f->enter($__internal_343a7c7abde81ca83bf1fb7b865836ea19bf527544d99d09e7c8c1f8f5acf57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_282bbb717c6d2a25b6ed439c148ac9a8088dd9b44d967a550609f527d21c23cd->leave($__internal_282bbb717c6d2a25b6ed439c148ac9a8088dd9b44d967a550609f527d21c23cd_prof);

        
        $__internal_343a7c7abde81ca83bf1fb7b865836ea19bf527544d99d09e7c8c1f8f5acf57f->leave($__internal_343a7c7abde81ca83bf1fb7b865836ea19bf527544d99d09e7c8c1f8f5acf57f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fec60f2ac9adaf51d00137fddc3a14267b76d174b4df381f72de90af09867bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec60f2ac9adaf51d00137fddc3a14267b76d174b4df381f72de90af09867bdf->enter($__internal_fec60f2ac9adaf51d00137fddc3a14267b76d174b4df381f72de90af09867bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c4cc689844fd9740fd4e0f2f83147408ed8d4ecd8c087b4c6d4a61d03ff47210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cc689844fd9740fd4e0f2f83147408ed8d4ecd8c087b4c6d4a61d03ff47210->enter($__internal_c4cc689844fd9740fd4e0f2f83147408ed8d4ecd8c087b4c6d4a61d03ff47210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c4cc689844fd9740fd4e0f2f83147408ed8d4ecd8c087b4c6d4a61d03ff47210->leave($__internal_c4cc689844fd9740fd4e0f2f83147408ed8d4ecd8c087b4c6d4a61d03ff47210_prof);

        
        $__internal_fec60f2ac9adaf51d00137fddc3a14267b76d174b4df381f72de90af09867bdf->leave($__internal_fec60f2ac9adaf51d00137fddc3a14267b76d174b4df381f72de90af09867bdf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e71dfc32912469fe5d73e3d29b2e6964004cac5540f64998f75ec22b23dcfa2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71dfc32912469fe5d73e3d29b2e6964004cac5540f64998f75ec22b23dcfa2a->enter($__internal_e71dfc32912469fe5d73e3d29b2e6964004cac5540f64998f75ec22b23dcfa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1cf65927319dc143a83a0caaf2e8948494e16daf658cdab61fe95fea90c57b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cf65927319dc143a83a0caaf2e8948494e16daf658cdab61fe95fea90c57b1->enter($__internal_f1cf65927319dc143a83a0caaf2e8948494e16daf658cdab61fe95fea90c57b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1cf65927319dc143a83a0caaf2e8948494e16daf658cdab61fe95fea90c57b1->leave($__internal_f1cf65927319dc143a83a0caaf2e8948494e16daf658cdab61fe95fea90c57b1_prof);

        
        $__internal_e71dfc32912469fe5d73e3d29b2e6964004cac5540f64998f75ec22b23dcfa2a->leave($__internal_e71dfc32912469fe5d73e3d29b2e6964004cac5540f64998f75ec22b23dcfa2a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c29751645325351f4588a2e4fb0e1eed3aaad568b68ce907f0002d5fc7c6eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c29751645325351f4588a2e4fb0e1eed3aaad568b68ce907f0002d5fc7c6eae->enter($__internal_5c29751645325351f4588a2e4fb0e1eed3aaad568b68ce907f0002d5fc7c6eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_adfd0c07e2f00ec42ed57df839557f3df1a6dcf6419f0631d3866d76874a177a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfd0c07e2f00ec42ed57df839557f3df1a6dcf6419f0631d3866d76874a177a->enter($__internal_adfd0c07e2f00ec42ed57df839557f3df1a6dcf6419f0631d3866d76874a177a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_adfd0c07e2f00ec42ed57df839557f3df1a6dcf6419f0631d3866d76874a177a->leave($__internal_adfd0c07e2f00ec42ed57df839557f3df1a6dcf6419f0631d3866d76874a177a_prof);

        
        $__internal_5c29751645325351f4588a2e4fb0e1eed3aaad568b68ce907f0002d5fc7c6eae->leave($__internal_5c29751645325351f4588a2e4fb0e1eed3aaad568b68ce907f0002d5fc7c6eae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
