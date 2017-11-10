<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cdeebebff3e120a0a9e0327dd4d667cc8b962e75d06e01721cbecd7a64db7ea8 extends Twig_Template
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
        $__internal_e7cf08a54d4fc39baf560618e87c857505e5c0c75806aac80f23b6663a9399e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7cf08a54d4fc39baf560618e87c857505e5c0c75806aac80f23b6663a9399e1->enter($__internal_e7cf08a54d4fc39baf560618e87c857505e5c0c75806aac80f23b6663a9399e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d177e10b8c6bc7157d27624fcb8dfd24f4432a4b34fc9fc53fd845e22853c3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d177e10b8c6bc7157d27624fcb8dfd24f4432a4b34fc9fc53fd845e22853c3ad->enter($__internal_d177e10b8c6bc7157d27624fcb8dfd24f4432a4b34fc9fc53fd845e22853c3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e7cf08a54d4fc39baf560618e87c857505e5c0c75806aac80f23b6663a9399e1->leave($__internal_e7cf08a54d4fc39baf560618e87c857505e5c0c75806aac80f23b6663a9399e1_prof);

        
        $__internal_d177e10b8c6bc7157d27624fcb8dfd24f4432a4b34fc9fc53fd845e22853c3ad->leave($__internal_d177e10b8c6bc7157d27624fcb8dfd24f4432a4b34fc9fc53fd845e22853c3ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
