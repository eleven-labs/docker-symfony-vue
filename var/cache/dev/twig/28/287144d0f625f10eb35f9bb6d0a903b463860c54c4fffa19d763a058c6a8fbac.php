<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c88bb227ba74da97386ea7bd0ddf4cec6728093a9eb5f36c4a7f225d2b47a6d8 extends Twig_Template
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
        $__internal_4d236701bb4baa3ffb74d7893e098e0071aaa294ff40a88c01e45100ff28b8bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d236701bb4baa3ffb74d7893e098e0071aaa294ff40a88c01e45100ff28b8bb->enter($__internal_4d236701bb4baa3ffb74d7893e098e0071aaa294ff40a88c01e45100ff28b8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2a229ebec5af08e7247a883089a03b2ecf4a743938e85ed06395fefe8c209ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a229ebec5af08e7247a883089a03b2ecf4a743938e85ed06395fefe8c209ac8->enter($__internal_2a229ebec5af08e7247a883089a03b2ecf4a743938e85ed06395fefe8c209ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_4d236701bb4baa3ffb74d7893e098e0071aaa294ff40a88c01e45100ff28b8bb->leave($__internal_4d236701bb4baa3ffb74d7893e098e0071aaa294ff40a88c01e45100ff28b8bb_prof);

        
        $__internal_2a229ebec5af08e7247a883089a03b2ecf4a743938e85ed06395fefe8c209ac8->leave($__internal_2a229ebec5af08e7247a883089a03b2ecf4a743938e85ed06395fefe8c209ac8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
