<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3587ae145afbc2b0541cccdff04cd6e399c6f2fa31f1480bf23eac27914843fc extends Twig_Template
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
        $__internal_c1e2c6c738277bfae19644f1125fefb2db158c8bcab102cec32fe58674a57668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e2c6c738277bfae19644f1125fefb2db158c8bcab102cec32fe58674a57668->enter($__internal_c1e2c6c738277bfae19644f1125fefb2db158c8bcab102cec32fe58674a57668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0621f22c5e9af97ee86dc5bbd7dafcce6c71edb9ecedb3f17963a17ce7261464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0621f22c5e9af97ee86dc5bbd7dafcce6c71edb9ecedb3f17963a17ce7261464->enter($__internal_0621f22c5e9af97ee86dc5bbd7dafcce6c71edb9ecedb3f17963a17ce7261464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_c1e2c6c738277bfae19644f1125fefb2db158c8bcab102cec32fe58674a57668->leave($__internal_c1e2c6c738277bfae19644f1125fefb2db158c8bcab102cec32fe58674a57668_prof);

        
        $__internal_0621f22c5e9af97ee86dc5bbd7dafcce6c71edb9ecedb3f17963a17ce7261464->leave($__internal_0621f22c5e9af97ee86dc5bbd7dafcce6c71edb9ecedb3f17963a17ce7261464_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
