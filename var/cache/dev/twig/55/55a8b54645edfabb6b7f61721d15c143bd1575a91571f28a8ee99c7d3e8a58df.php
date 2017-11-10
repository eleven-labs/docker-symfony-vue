<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_16317b118e8c62e37a7daa782295969226de84ab8c8078795a36b6d6a083aa26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cb6d224215e574a5a585da954e6f19c86155c8cac3794323d3da235879231a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb6d224215e574a5a585da954e6f19c86155c8cac3794323d3da235879231a9->enter($__internal_8cb6d224215e574a5a585da954e6f19c86155c8cac3794323d3da235879231a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6568eb2bdeeb45889970a51bd1aecdd4b148acca1666271b215318d4282ea875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6568eb2bdeeb45889970a51bd1aecdd4b148acca1666271b215318d4282ea875->enter($__internal_6568eb2bdeeb45889970a51bd1aecdd4b148acca1666271b215318d4282ea875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb6d224215e574a5a585da954e6f19c86155c8cac3794323d3da235879231a9->leave($__internal_8cb6d224215e574a5a585da954e6f19c86155c8cac3794323d3da235879231a9_prof);

        
        $__internal_6568eb2bdeeb45889970a51bd1aecdd4b148acca1666271b215318d4282ea875->leave($__internal_6568eb2bdeeb45889970a51bd1aecdd4b148acca1666271b215318d4282ea875_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f30411bf53ef18d834d02f14b19738ab9918f548d7728aadefacb6f822c35f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30411bf53ef18d834d02f14b19738ab9918f548d7728aadefacb6f822c35f76->enter($__internal_f30411bf53ef18d834d02f14b19738ab9918f548d7728aadefacb6f822c35f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2a971da5ca7f74348201019a4376c784d38e050a38fc05db9902150ac527baf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a971da5ca7f74348201019a4376c784d38e050a38fc05db9902150ac527baf2->enter($__internal_2a971da5ca7f74348201019a4376c784d38e050a38fc05db9902150ac527baf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2a971da5ca7f74348201019a4376c784d38e050a38fc05db9902150ac527baf2->leave($__internal_2a971da5ca7f74348201019a4376c784d38e050a38fc05db9902150ac527baf2_prof);

        
        $__internal_f30411bf53ef18d834d02f14b19738ab9918f548d7728aadefacb6f822c35f76->leave($__internal_f30411bf53ef18d834d02f14b19738ab9918f548d7728aadefacb6f822c35f76_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
