<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bcc3d1d6bccca58fa495759f2b7e206c4a2d8c595a70de44cdaedb8b30e448f1 extends Twig_Template
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
        $__internal_261e94ee250814b7cebcbdb4c5b261e9674de2e547575b23b3db4eb9adf2af2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261e94ee250814b7cebcbdb4c5b261e9674de2e547575b23b3db4eb9adf2af2a->enter($__internal_261e94ee250814b7cebcbdb4c5b261e9674de2e547575b23b3db4eb9adf2af2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_04c6b0ceb54b01f57b8f7731b48f9201d89ae74b55b0502646a76e43bb44beca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c6b0ceb54b01f57b8f7731b48f9201d89ae74b55b0502646a76e43bb44beca->enter($__internal_04c6b0ceb54b01f57b8f7731b48f9201d89ae74b55b0502646a76e43bb44beca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_261e94ee250814b7cebcbdb4c5b261e9674de2e547575b23b3db4eb9adf2af2a->leave($__internal_261e94ee250814b7cebcbdb4c5b261e9674de2e547575b23b3db4eb9adf2af2a_prof);

        
        $__internal_04c6b0ceb54b01f57b8f7731b48f9201d89ae74b55b0502646a76e43bb44beca->leave($__internal_04c6b0ceb54b01f57b8f7731b48f9201d89ae74b55b0502646a76e43bb44beca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
