<?php

/* AppBundle:App:page2.html.twig */
class __TwigTemplate_1774532f7f5eb58e147d3a816682618efe1da66f65628136e8f4b6d7e39cf8f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/App/layout.html.twig", "AppBundle:App:page2.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/App/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0b04c2feaaf26031a7ce8e656157602ce36bee22206167df3966dd90e52a8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b04c2feaaf26031a7ce8e656157602ce36bee22206167df3966dd90e52a8d9->enter($__internal_c0b04c2feaaf26031a7ce8e656157602ce36bee22206167df3966dd90e52a8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:App:page2.html.twig"));

        $__internal_58c64fe0905c2a023b1a8083a61375c71bed7fd08d00b1d4a2e1e454059ffbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c64fe0905c2a023b1a8083a61375c71bed7fd08d00b1d4a2e1e454059ffbfa->enter($__internal_58c64fe0905c2a023b1a8083a61375c71bed7fd08d00b1d4a2e1e454059ffbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:App:page2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0b04c2feaaf26031a7ce8e656157602ce36bee22206167df3966dd90e52a8d9->leave($__internal_c0b04c2feaaf26031a7ce8e656157602ce36bee22206167df3966dd90e52a8d9_prof);

        
        $__internal_58c64fe0905c2a023b1a8083a61375c71bed7fd08d00b1d4a2e1e454059ffbfa->leave($__internal_58c64fe0905c2a023b1a8083a61375c71bed7fd08d00b1d4a2e1e454059ffbfa_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_1ab4f9e5c27f501471d6b36b5da6d2265682ee3c7b0b87ccb6282a8f4c941e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab4f9e5c27f501471d6b36b5da6d2265682ee3c7b0b87ccb6282a8f4c941e09->enter($__internal_1ab4f9e5c27f501471d6b36b5da6d2265682ee3c7b0b87ccb6282a8f4c941e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_618053403768b5fc09698208cf2c4fc159e7a1543c74c8a6dbe0a9b5eed2859b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618053403768b5fc09698208cf2c4fc159e7a1543c74c8a6dbe0a9b5eed2859b->enter($__internal_618053403768b5fc09698208cf2c4fc159e7a1543c74c8a6dbe0a9b5eed2859b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "<div id=\"app2\"></div>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/page2.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_618053403768b5fc09698208cf2c4fc159e7a1543c74c8a6dbe0a9b5eed2859b->leave($__internal_618053403768b5fc09698208cf2c4fc159e7a1543c74c8a6dbe0a9b5eed2859b_prof);

        
        $__internal_1ab4f9e5c27f501471d6b36b5da6d2265682ee3c7b0b87ccb6282a8f4c941e09->leave($__internal_1ab4f9e5c27f501471d6b36b5da6d2265682ee3c7b0b87ccb6282a8f4c941e09_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:App:page2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@App/App/layout.html.twig' %}

{% block container %}
<div id=\"app2\"></div>
<script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/page2.js') }}\"></script>
{% endblock %}
", "AppBundle:App:page2.html.twig", "/var/www/symfony/src/AppBundle/Resources/views/App/page2.html.twig");
    }
}
