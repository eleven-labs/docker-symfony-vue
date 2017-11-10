<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_61c5829d76680b26b09ce46572964b7fb4ed574f11e6bfffc64b7cd5bb178a12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ba237aaecbb40d916015eaa33a201ed8a5f14b2983ab922f0f71f787107e74a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba237aaecbb40d916015eaa33a201ed8a5f14b2983ab922f0f71f787107e74a2->enter($__internal_ba237aaecbb40d916015eaa33a201ed8a5f14b2983ab922f0f71f787107e74a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_24cae86331ee74a6e3e873691a5abc642d6d36da1e6999408f3ac08d4c79e17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cae86331ee74a6e3e873691a5abc642d6d36da1e6999408f3ac08d4c79e17c->enter($__internal_24cae86331ee74a6e3e873691a5abc642d6d36da1e6999408f3ac08d4c79e17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba237aaecbb40d916015eaa33a201ed8a5f14b2983ab922f0f71f787107e74a2->leave($__internal_ba237aaecbb40d916015eaa33a201ed8a5f14b2983ab922f0f71f787107e74a2_prof);

        
        $__internal_24cae86331ee74a6e3e873691a5abc642d6d36da1e6999408f3ac08d4c79e17c->leave($__internal_24cae86331ee74a6e3e873691a5abc642d6d36da1e6999408f3ac08d4c79e17c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50b03f1567697fc456c70eba80ffc910556f893878b7c37d0b050a8982341d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b03f1567697fc456c70eba80ffc910556f893878b7c37d0b050a8982341d59->enter($__internal_50b03f1567697fc456c70eba80ffc910556f893878b7c37d0b050a8982341d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e52539c531001448cb24840276f8a3b872ff0a3aa7cca407252e47bc95287301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52539c531001448cb24840276f8a3b872ff0a3aa7cca407252e47bc95287301->enter($__internal_e52539c531001448cb24840276f8a3b872ff0a3aa7cca407252e47bc95287301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e52539c531001448cb24840276f8a3b872ff0a3aa7cca407252e47bc95287301->leave($__internal_e52539c531001448cb24840276f8a3b872ff0a3aa7cca407252e47bc95287301_prof);

        
        $__internal_50b03f1567697fc456c70eba80ffc910556f893878b7c37d0b050a8982341d59->leave($__internal_50b03f1567697fc456c70eba80ffc910556f893878b7c37d0b050a8982341d59_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a62fdde8794274a3c8634f0b5c14c715d917b2595f89651db2f327106991b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a62fdde8794274a3c8634f0b5c14c715d917b2595f89651db2f327106991b29->enter($__internal_4a62fdde8794274a3c8634f0b5c14c715d917b2595f89651db2f327106991b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b10e29636d6a900db1cbfddaa487b1b06c1283bab5216d194d6cc3ccbea3d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b10e29636d6a900db1cbfddaa487b1b06c1283bab5216d194d6cc3ccbea3d27->enter($__internal_2b10e29636d6a900db1cbfddaa487b1b06c1283bab5216d194d6cc3ccbea3d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2b10e29636d6a900db1cbfddaa487b1b06c1283bab5216d194d6cc3ccbea3d27->leave($__internal_2b10e29636d6a900db1cbfddaa487b1b06c1283bab5216d194d6cc3ccbea3d27_prof);

        
        $__internal_4a62fdde8794274a3c8634f0b5c14c715d917b2595f89651db2f327106991b29->leave($__internal_4a62fdde8794274a3c8634f0b5c14c715d917b2595f89651db2f327106991b29_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a05c5e9f33d6c80e4228c788b7dd3b1c4ad3262e53ba890a83d9054b2cfdf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a05c5e9f33d6c80e4228c788b7dd3b1c4ad3262e53ba890a83d9054b2cfdf67->enter($__internal_3a05c5e9f33d6c80e4228c788b7dd3b1c4ad3262e53ba890a83d9054b2cfdf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_650ff2e2b39f9b529f334a5237a65d91b146e8fe25ac8f3797208d9093fbca47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650ff2e2b39f9b529f334a5237a65d91b146e8fe25ac8f3797208d9093fbca47->enter($__internal_650ff2e2b39f9b529f334a5237a65d91b146e8fe25ac8f3797208d9093fbca47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_650ff2e2b39f9b529f334a5237a65d91b146e8fe25ac8f3797208d9093fbca47->leave($__internal_650ff2e2b39f9b529f334a5237a65d91b146e8fe25ac8f3797208d9093fbca47_prof);

        
        $__internal_3a05c5e9f33d6c80e4228c788b7dd3b1c4ad3262e53ba890a83d9054b2cfdf67->leave($__internal_3a05c5e9f33d6c80e4228c788b7dd3b1c4ad3262e53ba890a83d9054b2cfdf67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
