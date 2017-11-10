<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_141fa064c0dfd08ac6ed573fb76e49f4a56714c8a0272aef04329bc8919e16cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ab66439eb3ec06791bb1e6bf369f64dc91725d20419fed21dd76036eb0d809c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab66439eb3ec06791bb1e6bf369f64dc91725d20419fed21dd76036eb0d809c->enter($__internal_5ab66439eb3ec06791bb1e6bf369f64dc91725d20419fed21dd76036eb0d809c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_bc801c971ba42b02ad47572efb820133093d720586a506ae540bff61d411c5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc801c971ba42b02ad47572efb820133093d720586a506ae540bff61d411c5b8->enter($__internal_bc801c971ba42b02ad47572efb820133093d720586a506ae540bff61d411c5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_5ab66439eb3ec06791bb1e6bf369f64dc91725d20419fed21dd76036eb0d809c->leave($__internal_5ab66439eb3ec06791bb1e6bf369f64dc91725d20419fed21dd76036eb0d809c_prof);

        
        $__internal_bc801c971ba42b02ad47572efb820133093d720586a506ae540bff61d411c5b8->leave($__internal_bc801c971ba42b02ad47572efb820133093d720586a506ae540bff61d411c5b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
