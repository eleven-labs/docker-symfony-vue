<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1b36535185bf97d53fdd4e861e9b12822b1faeb04ddac09745f3886fd930d281 extends Twig_Template
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
        $__internal_87efdf670ac95f019d294aefcb28d032d92769b212a5e568804a3dc9e23ba598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87efdf670ac95f019d294aefcb28d032d92769b212a5e568804a3dc9e23ba598->enter($__internal_87efdf670ac95f019d294aefcb28d032d92769b212a5e568804a3dc9e23ba598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9d50a258ff55b4a3256b3be7492d655056a10bd3a76fa83272ec3e44acb70747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d50a258ff55b4a3256b3be7492d655056a10bd3a76fa83272ec3e44acb70747->enter($__internal_9d50a258ff55b4a3256b3be7492d655056a10bd3a76fa83272ec3e44acb70747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_87efdf670ac95f019d294aefcb28d032d92769b212a5e568804a3dc9e23ba598->leave($__internal_87efdf670ac95f019d294aefcb28d032d92769b212a5e568804a3dc9e23ba598_prof);

        
        $__internal_9d50a258ff55b4a3256b3be7492d655056a10bd3a76fa83272ec3e44acb70747->leave($__internal_9d50a258ff55b4a3256b3be7492d655056a10bd3a76fa83272ec3e44acb70747_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
