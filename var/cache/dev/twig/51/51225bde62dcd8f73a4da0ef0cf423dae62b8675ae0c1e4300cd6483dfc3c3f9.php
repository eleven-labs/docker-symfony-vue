<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_66df6a0b2bed85a4bae3ad109c6c83cbea38f63581e4995fb89d4157a25243e6 extends Twig_Template
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
        $__internal_fe6cd393a76d69c8a1f3794c2fa7dc5cfb0ca523c5ac864f09a9960139a4c3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6cd393a76d69c8a1f3794c2fa7dc5cfb0ca523c5ac864f09a9960139a4c3a4->enter($__internal_fe6cd393a76d69c8a1f3794c2fa7dc5cfb0ca523c5ac864f09a9960139a4c3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f804c7f7cf760737b864e68352f607921d1c5d0eed3b98070a3be96f19296f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f804c7f7cf760737b864e68352f607921d1c5d0eed3b98070a3be96f19296f4e->enter($__internal_f804c7f7cf760737b864e68352f607921d1c5d0eed3b98070a3be96f19296f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_fe6cd393a76d69c8a1f3794c2fa7dc5cfb0ca523c5ac864f09a9960139a4c3a4->leave($__internal_fe6cd393a76d69c8a1f3794c2fa7dc5cfb0ca523c5ac864f09a9960139a4c3a4_prof);

        
        $__internal_f804c7f7cf760737b864e68352f607921d1c5d0eed3b98070a3be96f19296f4e->leave($__internal_f804c7f7cf760737b864e68352f607921d1c5d0eed3b98070a3be96f19296f4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
