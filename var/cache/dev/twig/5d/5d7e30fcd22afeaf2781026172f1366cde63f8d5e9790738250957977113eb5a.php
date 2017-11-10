<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_0d782f96bf66e43ba900aa384faf60b2773e97abbc560385b9ac678197b9bafc extends Twig_Template
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
        $__internal_8e2cf7fcc31ce53869caf501ce4c9db3a05693c76b164962ab1b3abde7f21e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2cf7fcc31ce53869caf501ce4c9db3a05693c76b164962ab1b3abde7f21e39->enter($__internal_8e2cf7fcc31ce53869caf501ce4c9db3a05693c76b164962ab1b3abde7f21e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9a7bdf06d66c7f16734260db22bdbcd12543542382bda1cba2bfbff8909dca60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7bdf06d66c7f16734260db22bdbcd12543542382bda1cba2bfbff8909dca60->enter($__internal_9a7bdf06d66c7f16734260db22bdbcd12543542382bda1cba2bfbff8909dca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8e2cf7fcc31ce53869caf501ce4c9db3a05693c76b164962ab1b3abde7f21e39->leave($__internal_8e2cf7fcc31ce53869caf501ce4c9db3a05693c76b164962ab1b3abde7f21e39_prof);

        
        $__internal_9a7bdf06d66c7f16734260db22bdbcd12543542382bda1cba2bfbff8909dca60->leave($__internal_9a7bdf06d66c7f16734260db22bdbcd12543542382bda1cba2bfbff8909dca60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
