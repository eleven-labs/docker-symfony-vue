<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1ffa29b2f807a3988abe83dcdc06fc2290d3c23b0a1997c4ae6b41477e766547 extends Twig_Template
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
        $__internal_f7ea94566150ecec95b3e47469b023e5fbc6bb51f4bb278532d6c457dc1e5482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ea94566150ecec95b3e47469b023e5fbc6bb51f4bb278532d6c457dc1e5482->enter($__internal_f7ea94566150ecec95b3e47469b023e5fbc6bb51f4bb278532d6c457dc1e5482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_125421403a76f35180f6ee36f57fa54e7c527247f6f98615ac708dab53d90960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125421403a76f35180f6ee36f57fa54e7c527247f6f98615ac708dab53d90960->enter($__internal_125421403a76f35180f6ee36f57fa54e7c527247f6f98615ac708dab53d90960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f7ea94566150ecec95b3e47469b023e5fbc6bb51f4bb278532d6c457dc1e5482->leave($__internal_f7ea94566150ecec95b3e47469b023e5fbc6bb51f4bb278532d6c457dc1e5482_prof);

        
        $__internal_125421403a76f35180f6ee36f57fa54e7c527247f6f98615ac708dab53d90960->leave($__internal_125421403a76f35180f6ee36f57fa54e7c527247f6f98615ac708dab53d90960_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
