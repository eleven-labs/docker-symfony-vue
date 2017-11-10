<?php

/* AppBundle:App:page1.html.twig */
class __TwigTemplate_9d9d46b3841d62dbbd66ff9536e9a27840780eeb3d1b0bd087ef21ae0f4b714c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/App/layout.html.twig", "AppBundle:App:page1.html.twig", 1);
        $this->blocks = array(
            'data_layout' => array($this, 'block_data_layout'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/App/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62bc50d5cf7ad94ae516801e0e0cad400d2e7d5dd0f77e1299c6a2a952ef8b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62bc50d5cf7ad94ae516801e0e0cad400d2e7d5dd0f77e1299c6a2a952ef8b98->enter($__internal_62bc50d5cf7ad94ae516801e0e0cad400d2e7d5dd0f77e1299c6a2a952ef8b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:App:page1.html.twig"));

        $__internal_a94752fd05ff15d49055649c7de1753df63d3c47190aee783287e90c435a645b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94752fd05ff15d49055649c7de1753df63d3c47190aee783287e90c435a645b->enter($__internal_a94752fd05ff15d49055649c7de1753df63d3c47190aee783287e90c435a645b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:App:page1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62bc50d5cf7ad94ae516801e0e0cad400d2e7d5dd0f77e1299c6a2a952ef8b98->leave($__internal_62bc50d5cf7ad94ae516801e0e0cad400d2e7d5dd0f77e1299c6a2a952ef8b98_prof);

        
        $__internal_a94752fd05ff15d49055649c7de1753df63d3c47190aee783287e90c435a645b->leave($__internal_a94752fd05ff15d49055649c7de1753df63d3c47190aee783287e90c435a645b_prof);

    }

    // line 3
    public function block_data_layout($context, array $blocks = array())
    {
        $__internal_779d8e2f14446370689173c9e5aa298bfa365df8093b230c2c0ac817606b61aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779d8e2f14446370689173c9e5aa298bfa365df8093b230c2c0ac817606b61aa->enter($__internal_779d8e2f14446370689173c9e5aa298bfa365df8093b230c2c0ac817606b61aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_layout"));

        $__internal_5b789ae798d038e4038092f47f01dd47e2b309ec451890f9d30f3bfd9b651320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b789ae798d038e4038092f47f01dd47e2b309ec451890f9d30f3bfd9b651320->enter($__internal_5b789ae798d038e4038092f47f01dd47e2b309ec451890f9d30f3bfd9b651320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_layout"));

        // line 4
        echo "    ";
        $this->displayParentBlock("data_layout", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
      dataLayout.message = \"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "\";
    </script>
";
        
        $__internal_5b789ae798d038e4038092f47f01dd47e2b309ec451890f9d30f3bfd9b651320->leave($__internal_5b789ae798d038e4038092f47f01dd47e2b309ec451890f9d30f3bfd9b651320_prof);

        
        $__internal_779d8e2f14446370689173c9e5aa298bfa365df8093b230c2c0ac817606b61aa->leave($__internal_779d8e2f14446370689173c9e5aa298bfa365df8093b230c2c0ac817606b61aa_prof);

    }

    // line 10
    public function block_container($context, array $blocks = array())
    {
        $__internal_3d397ebf457657ec914bc772e59a8ea494038628860f718a8e0c66b48282d84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d397ebf457657ec914bc772e59a8ea494038628860f718a8e0c66b48282d84c->enter($__internal_3d397ebf457657ec914bc772e59a8ea494038628860f718a8e0c66b48282d84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_8e33e592a07a812532aaeec61ea73322a030c7d4f1103bf2089cfbed19d4027d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e33e592a07a812532aaeec61ea73322a030c7d4f1103bf2089cfbed19d4027d->enter($__internal_8e33e592a07a812532aaeec61ea73322a030c7d4f1103bf2089cfbed19d4027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 11
        echo "<div id=\"app1\"></div>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/page1.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8e33e592a07a812532aaeec61ea73322a030c7d4f1103bf2089cfbed19d4027d->leave($__internal_8e33e592a07a812532aaeec61ea73322a030c7d4f1103bf2089cfbed19d4027d_prof);

        
        $__internal_3d397ebf457657ec914bc772e59a8ea494038628860f718a8e0c66b48282d84c->leave($__internal_3d397ebf457657ec914bc772e59a8ea494038628860f718a8e0c66b48282d84c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:App:page1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  78 => 11,  69 => 10,  56 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@App/App/layout.html.twig' %}

{% block data_layout %}
    {{ parent() }}
    <script type=\"text/javascript\">
      dataLayout.message = \"{{ message }}\";
    </script>
{% endblock %}

{% block container %}
<div id=\"app1\"></div>
<script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/page1.js') }}\"></script>
{% endblock %}
", "AppBundle:App:page1.html.twig", "/var/www/symfony/src/AppBundle/Resources/views/App/page1.html.twig");
    }
}
