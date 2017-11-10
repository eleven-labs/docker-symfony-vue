<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_bdb8ac51593858dca5fe65ac3e8ef60fdc79c44b0fff17456377019d954686f1 extends Twig_Template
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
        $__internal_eb681c01de7038a3246aa339ba745c84395a4bbd6f3543730c09b876f1ecad02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb681c01de7038a3246aa339ba745c84395a4bbd6f3543730c09b876f1ecad02->enter($__internal_eb681c01de7038a3246aa339ba745c84395a4bbd6f3543730c09b876f1ecad02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_1884766b68c242cef906bad1825818cbb28695b097df3cff5daa7deca5f51f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1884766b68c242cef906bad1825818cbb28695b097df3cff5daa7deca5f51f28->enter($__internal_1884766b68c242cef906bad1825818cbb28695b097df3cff5daa7deca5f51f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_eb681c01de7038a3246aa339ba745c84395a4bbd6f3543730c09b876f1ecad02->leave($__internal_eb681c01de7038a3246aa339ba745c84395a4bbd6f3543730c09b876f1ecad02_prof);

        
        $__internal_1884766b68c242cef906bad1825818cbb28695b097df3cff5daa7deca5f51f28->leave($__internal_1884766b68c242cef906bad1825818cbb28695b097df3cff5daa7deca5f51f28_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
