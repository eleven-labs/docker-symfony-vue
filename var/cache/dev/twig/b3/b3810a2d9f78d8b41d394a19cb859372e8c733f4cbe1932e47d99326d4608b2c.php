<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_33f2e18e3fa6bb17c7c4003d45cf0ffed77640c824db43ce5fd106f71ccb73ae extends Twig_Template
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
        $__internal_85b73e420e33075d8b97e9126fe47a6e4b8e3faac102fa295a9ea29cd439a0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b73e420e33075d8b97e9126fe47a6e4b8e3faac102fa295a9ea29cd439a0db->enter($__internal_85b73e420e33075d8b97e9126fe47a6e4b8e3faac102fa295a9ea29cd439a0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_5afe82f286900d847ea60c6ddb857cc155437029fb2a080bd77003f08ffab137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afe82f286900d847ea60c6ddb857cc155437029fb2a080bd77003f08ffab137->enter($__internal_5afe82f286900d847ea60c6ddb857cc155437029fb2a080bd77003f08ffab137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_85b73e420e33075d8b97e9126fe47a6e4b8e3faac102fa295a9ea29cd439a0db->leave($__internal_85b73e420e33075d8b97e9126fe47a6e4b8e3faac102fa295a9ea29cd439a0db_prof);

        
        $__internal_5afe82f286900d847ea60c6ddb857cc155437029fb2a080bd77003f08ffab137->leave($__internal_5afe82f286900d847ea60c6ddb857cc155437029fb2a080bd77003f08ffab137_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
