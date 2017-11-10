<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_61269ec9e33cb5696b4373df5447e05f751d17ec19336ff8496745c48c9660bb extends Twig_Template
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
        $__internal_763cf6c8060942c55c15ff5c4274d1232a42040e56857d9ef73b8473baed96ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763cf6c8060942c55c15ff5c4274d1232a42040e56857d9ef73b8473baed96ff->enter($__internal_763cf6c8060942c55c15ff5c4274d1232a42040e56857d9ef73b8473baed96ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_434d1f1b518d83fab77d987b171a589ccb6db7a9c7427be13fcdd3cd698203f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434d1f1b518d83fab77d987b171a589ccb6db7a9c7427be13fcdd3cd698203f3->enter($__internal_434d1f1b518d83fab77d987b171a589ccb6db7a9c7427be13fcdd3cd698203f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_763cf6c8060942c55c15ff5c4274d1232a42040e56857d9ef73b8473baed96ff->leave($__internal_763cf6c8060942c55c15ff5c4274d1232a42040e56857d9ef73b8473baed96ff_prof);

        
        $__internal_434d1f1b518d83fab77d987b171a589ccb6db7a9c7427be13fcdd3cd698203f3->leave($__internal_434d1f1b518d83fab77d987b171a589ccb6db7a9c7427be13fcdd3cd698203f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
