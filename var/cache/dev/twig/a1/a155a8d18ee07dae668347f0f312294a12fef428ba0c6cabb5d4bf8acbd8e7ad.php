<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3d493ac0146ec1b27229097642c0696335e2bfe6a7f3c944997afd4034e71969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b4348d242a26d7c2faf0de168720141d7066919d28375b4abb0190a73388fcce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4348d242a26d7c2faf0de168720141d7066919d28375b4abb0190a73388fcce->enter($__internal_b4348d242a26d7c2faf0de168720141d7066919d28375b4abb0190a73388fcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2bbdffe7c7e2d966164e8f196d2ca31e8e52ea17789347d72e95949a2b12d93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbdffe7c7e2d966164e8f196d2ca31e8e52ea17789347d72e95949a2b12d93b->enter($__internal_2bbdffe7c7e2d966164e8f196d2ca31e8e52ea17789347d72e95949a2b12d93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4348d242a26d7c2faf0de168720141d7066919d28375b4abb0190a73388fcce->leave($__internal_b4348d242a26d7c2faf0de168720141d7066919d28375b4abb0190a73388fcce_prof);

        
        $__internal_2bbdffe7c7e2d966164e8f196d2ca31e8e52ea17789347d72e95949a2b12d93b->leave($__internal_2bbdffe7c7e2d966164e8f196d2ca31e8e52ea17789347d72e95949a2b12d93b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1556494f62aad3629384f6bc2a176e3659b7454f398757e8f9e6da611ae4e074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1556494f62aad3629384f6bc2a176e3659b7454f398757e8f9e6da611ae4e074->enter($__internal_1556494f62aad3629384f6bc2a176e3659b7454f398757e8f9e6da611ae4e074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_53a97847618a8e70bc32808f58dc4517aa65caef9067613f2f0a5165e1677666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a97847618a8e70bc32808f58dc4517aa65caef9067613f2f0a5165e1677666->enter($__internal_53a97847618a8e70bc32808f58dc4517aa65caef9067613f2f0a5165e1677666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_53a97847618a8e70bc32808f58dc4517aa65caef9067613f2f0a5165e1677666->leave($__internal_53a97847618a8e70bc32808f58dc4517aa65caef9067613f2f0a5165e1677666_prof);

        
        $__internal_1556494f62aad3629384f6bc2a176e3659b7454f398757e8f9e6da611ae4e074->leave($__internal_1556494f62aad3629384f6bc2a176e3659b7454f398757e8f9e6da611ae4e074_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c1f23448a4062abc576877eeb80d98dfba4fe4b468065a92dce66860875ce08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1f23448a4062abc576877eeb80d98dfba4fe4b468065a92dce66860875ce08->enter($__internal_2c1f23448a4062abc576877eeb80d98dfba4fe4b468065a92dce66860875ce08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e473f250789fa1563e573e78c0b73951edfd849d8f378e2b5d6e2cdce2140b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e473f250789fa1563e573e78c0b73951edfd849d8f378e2b5d6e2cdce2140b97->enter($__internal_e473f250789fa1563e573e78c0b73951edfd849d8f378e2b5d6e2cdce2140b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e473f250789fa1563e573e78c0b73951edfd849d8f378e2b5d6e2cdce2140b97->leave($__internal_e473f250789fa1563e573e78c0b73951edfd849d8f378e2b5d6e2cdce2140b97_prof);

        
        $__internal_2c1f23448a4062abc576877eeb80d98dfba4fe4b468065a92dce66860875ce08->leave($__internal_2c1f23448a4062abc576877eeb80d98dfba4fe4b468065a92dce66860875ce08_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_529b1798ebc38c49a07080b9fde373649ad830c8dbb3cdd18669c3bbde9a0363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529b1798ebc38c49a07080b9fde373649ad830c8dbb3cdd18669c3bbde9a0363->enter($__internal_529b1798ebc38c49a07080b9fde373649ad830c8dbb3cdd18669c3bbde9a0363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a9fe2c96f01547bdb4de9599091cfb21421847436e2a068ffa7d7f97ffaa78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9fe2c96f01547bdb4de9599091cfb21421847436e2a068ffa7d7f97ffaa78a->enter($__internal_2a9fe2c96f01547bdb4de9599091cfb21421847436e2a068ffa7d7f97ffaa78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_2a9fe2c96f01547bdb4de9599091cfb21421847436e2a068ffa7d7f97ffaa78a->leave($__internal_2a9fe2c96f01547bdb4de9599091cfb21421847436e2a068ffa7d7f97ffaa78a_prof);

        
        $__internal_529b1798ebc38c49a07080b9fde373649ad830c8dbb3cdd18669c3bbde9a0363->leave($__internal_529b1798ebc38c49a07080b9fde373649ad830c8dbb3cdd18669c3bbde9a0363_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
