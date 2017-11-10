<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cc2db257f5a22d444992127bfab399dca1f67f5ad519f13bbe987e02f6598ec9 extends Twig_Template
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
        $__internal_3dcc76f96550330982c5d558e4f50917d2729a319a1d0a45c810759d5e6aa192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dcc76f96550330982c5d558e4f50917d2729a319a1d0a45c810759d5e6aa192->enter($__internal_3dcc76f96550330982c5d558e4f50917d2729a319a1d0a45c810759d5e6aa192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_52276ea00454e5fa64e98bef771ec317bb008e4c6ef76fe4087f02ccca84f2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52276ea00454e5fa64e98bef771ec317bb008e4c6ef76fe4087f02ccca84f2f9->enter($__internal_52276ea00454e5fa64e98bef771ec317bb008e4c6ef76fe4087f02ccca84f2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_3dcc76f96550330982c5d558e4f50917d2729a319a1d0a45c810759d5e6aa192->leave($__internal_3dcc76f96550330982c5d558e4f50917d2729a319a1d0a45c810759d5e6aa192_prof);

        
        $__internal_52276ea00454e5fa64e98bef771ec317bb008e4c6ef76fe4087f02ccca84f2f9->leave($__internal_52276ea00454e5fa64e98bef771ec317bb008e4c6ef76fe4087f02ccca84f2f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
