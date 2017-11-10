<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c328a74f08ac42677ce46711d1368555678d320b7cb7e0c9ead229552831be20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e45152fad06dd69c1330e8b1f95118cda9f82bebc3d186aa25ff972dd2a8cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e45152fad06dd69c1330e8b1f95118cda9f82bebc3d186aa25ff972dd2a8cb9->enter($__internal_9e45152fad06dd69c1330e8b1f95118cda9f82bebc3d186aa25ff972dd2a8cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b60b13483df2323e98a71b3c7c409eccfd949f8ddabd9fdb04f91ff11244ffc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60b13483df2323e98a71b3c7c409eccfd949f8ddabd9fdb04f91ff11244ffc5->enter($__internal_b60b13483df2323e98a71b3c7c409eccfd949f8ddabd9fdb04f91ff11244ffc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e45152fad06dd69c1330e8b1f95118cda9f82bebc3d186aa25ff972dd2a8cb9->leave($__internal_9e45152fad06dd69c1330e8b1f95118cda9f82bebc3d186aa25ff972dd2a8cb9_prof);

        
        $__internal_b60b13483df2323e98a71b3c7c409eccfd949f8ddabd9fdb04f91ff11244ffc5->leave($__internal_b60b13483df2323e98a71b3c7c409eccfd949f8ddabd9fdb04f91ff11244ffc5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a844016686fed870cba913398fc7ef9a931b60afbc8009cf6abd6c017cb24ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a844016686fed870cba913398fc7ef9a931b60afbc8009cf6abd6c017cb24ad3->enter($__internal_a844016686fed870cba913398fc7ef9a931b60afbc8009cf6abd6c017cb24ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_93108aded58bd901c711753a0b1a43b5fe232c4f9ff0848f587d88de81beefc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93108aded58bd901c711753a0b1a43b5fe232c4f9ff0848f587d88de81beefc0->enter($__internal_93108aded58bd901c711753a0b1a43b5fe232c4f9ff0848f587d88de81beefc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_93108aded58bd901c711753a0b1a43b5fe232c4f9ff0848f587d88de81beefc0->leave($__internal_93108aded58bd901c711753a0b1a43b5fe232c4f9ff0848f587d88de81beefc0_prof);

        
        $__internal_a844016686fed870cba913398fc7ef9a931b60afbc8009cf6abd6c017cb24ad3->leave($__internal_a844016686fed870cba913398fc7ef9a931b60afbc8009cf6abd6c017cb24ad3_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd406d0a82b7336ca65a75fcd448e17bdc7beaf5889dabe16e04f1a03252cd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd406d0a82b7336ca65a75fcd448e17bdc7beaf5889dabe16e04f1a03252cd6e->enter($__internal_fd406d0a82b7336ca65a75fcd448e17bdc7beaf5889dabe16e04f1a03252cd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3532314e557b1954fc910e8db97f4053e30c494a3ca2e09ef365568002772389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3532314e557b1954fc910e8db97f4053e30c494a3ca2e09ef365568002772389->enter($__internal_3532314e557b1954fc910e8db97f4053e30c494a3ca2e09ef365568002772389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3532314e557b1954fc910e8db97f4053e30c494a3ca2e09ef365568002772389->leave($__internal_3532314e557b1954fc910e8db97f4053e30c494a3ca2e09ef365568002772389_prof);

        
        $__internal_fd406d0a82b7336ca65a75fcd448e17bdc7beaf5889dabe16e04f1a03252cd6e->leave($__internal_fd406d0a82b7336ca65a75fcd448e17bdc7beaf5889dabe16e04f1a03252cd6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
