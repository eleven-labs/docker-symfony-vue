<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_da86d08b1dd8407af846ad65aae641197ade2d9e4136d725ec81e2ca09ed24d8 extends Twig_Template
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
        $__internal_0406af5dc52fd1fc4d09d924a98363d3e2228f99eb25139f22a37c0ab0672405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0406af5dc52fd1fc4d09d924a98363d3e2228f99eb25139f22a37c0ab0672405->enter($__internal_0406af5dc52fd1fc4d09d924a98363d3e2228f99eb25139f22a37c0ab0672405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_970a44062ac05749f7b71e4c72d95411d7905fd161c601d17621f64b8c1b9508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970a44062ac05749f7b71e4c72d95411d7905fd161c601d17621f64b8c1b9508->enter($__internal_970a44062ac05749f7b71e4c72d95411d7905fd161c601d17621f64b8c1b9508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_0406af5dc52fd1fc4d09d924a98363d3e2228f99eb25139f22a37c0ab0672405->leave($__internal_0406af5dc52fd1fc4d09d924a98363d3e2228f99eb25139f22a37c0ab0672405_prof);

        
        $__internal_970a44062ac05749f7b71e4c72d95411d7905fd161c601d17621f64b8c1b9508->leave($__internal_970a44062ac05749f7b71e4c72d95411d7905fd161c601d17621f64b8c1b9508_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
