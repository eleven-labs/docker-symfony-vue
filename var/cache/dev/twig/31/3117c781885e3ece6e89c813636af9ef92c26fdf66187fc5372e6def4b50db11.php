<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6b1746815aa9827284e65f977aab435935ee0e07700a60a925e1ab63365c8e04 extends Twig_Template
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
        $__internal_43652753ce883f53bc1fca7b5c73bad985daefb8d8f4b37ccf996bf5c8102a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43652753ce883f53bc1fca7b5c73bad985daefb8d8f4b37ccf996bf5c8102a52->enter($__internal_43652753ce883f53bc1fca7b5c73bad985daefb8d8f4b37ccf996bf5c8102a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e6b4460d0ec55f6b24ad6ce06c57385b2dd1a085547e6bb90ee2c5a335987685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b4460d0ec55f6b24ad6ce06c57385b2dd1a085547e6bb90ee2c5a335987685->enter($__internal_e6b4460d0ec55f6b24ad6ce06c57385b2dd1a085547e6bb90ee2c5a335987685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_43652753ce883f53bc1fca7b5c73bad985daefb8d8f4b37ccf996bf5c8102a52->leave($__internal_43652753ce883f53bc1fca7b5c73bad985daefb8d8f4b37ccf996bf5c8102a52_prof);

        
        $__internal_e6b4460d0ec55f6b24ad6ce06c57385b2dd1a085547e6bb90ee2c5a335987685->leave($__internal_e6b4460d0ec55f6b24ad6ce06c57385b2dd1a085547e6bb90ee2c5a335987685_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
