<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4083a47f3b74c93a652f68f8c58f1e26c0c6783a0d145739ba6e095c5cb5bed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c0a8f77ba5e980787323afb23c34e6be81b678d712dc1638243acfd37fc59cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0a8f77ba5e980787323afb23c34e6be81b678d712dc1638243acfd37fc59cf->enter($__internal_3c0a8f77ba5e980787323afb23c34e6be81b678d712dc1638243acfd37fc59cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a3f14b0505912af396118134843366df63df3d04865a9994e562b96beffbd233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f14b0505912af396118134843366df63df3d04865a9994e562b96beffbd233->enter($__internal_a3f14b0505912af396118134843366df63df3d04865a9994e562b96beffbd233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3c0a8f77ba5e980787323afb23c34e6be81b678d712dc1638243acfd37fc59cf->leave($__internal_3c0a8f77ba5e980787323afb23c34e6be81b678d712dc1638243acfd37fc59cf_prof);

        
        $__internal_a3f14b0505912af396118134843366df63df3d04865a9994e562b96beffbd233->leave($__internal_a3f14b0505912af396118134843366df63df3d04865a9994e562b96beffbd233_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd36e325753940f479397b389b925f1ed6df60534146a8a3c9007a4b2db24306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd36e325753940f479397b389b925f1ed6df60534146a8a3c9007a4b2db24306->enter($__internal_bd36e325753940f479397b389b925f1ed6df60534146a8a3c9007a4b2db24306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_957181d4c9c6bdde3757434c1c0fa80a765bce9e3eba2f89a8d12fb337e75fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957181d4c9c6bdde3757434c1c0fa80a765bce9e3eba2f89a8d12fb337e75fe9->enter($__internal_957181d4c9c6bdde3757434c1c0fa80a765bce9e3eba2f89a8d12fb337e75fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_957181d4c9c6bdde3757434c1c0fa80a765bce9e3eba2f89a8d12fb337e75fe9->leave($__internal_957181d4c9c6bdde3757434c1c0fa80a765bce9e3eba2f89a8d12fb337e75fe9_prof);

        
        $__internal_bd36e325753940f479397b389b925f1ed6df60534146a8a3c9007a4b2db24306->leave($__internal_bd36e325753940f479397b389b925f1ed6df60534146a8a3c9007a4b2db24306_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c3ff2779ef19c9b4751e35ab341f4feb975ab427c48351023c714414fdc9462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3ff2779ef19c9b4751e35ab341f4feb975ab427c48351023c714414fdc9462->enter($__internal_6c3ff2779ef19c9b4751e35ab341f4feb975ab427c48351023c714414fdc9462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1984258b4302e65c0326b683d740f48366334569572b5a4599d5762760e23319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1984258b4302e65c0326b683d740f48366334569572b5a4599d5762760e23319->enter($__internal_1984258b4302e65c0326b683d740f48366334569572b5a4599d5762760e23319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1984258b4302e65c0326b683d740f48366334569572b5a4599d5762760e23319->leave($__internal_1984258b4302e65c0326b683d740f48366334569572b5a4599d5762760e23319_prof);

        
        $__internal_6c3ff2779ef19c9b4751e35ab341f4feb975ab427c48351023c714414fdc9462->leave($__internal_6c3ff2779ef19c9b4751e35ab341f4feb975ab427c48351023c714414fdc9462_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_acf326be53f9a7fe7ac4f0206f866f5cca57d89e271163cb8e9523633719e8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf326be53f9a7fe7ac4f0206f866f5cca57d89e271163cb8e9523633719e8c3->enter($__internal_acf326be53f9a7fe7ac4f0206f866f5cca57d89e271163cb8e9523633719e8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5a61cefdcf75c9837db5dac7a35d5a27741da6dfc5bb02d40ae0d9bbe79a6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a61cefdcf75c9837db5dac7a35d5a27741da6dfc5bb02d40ae0d9bbe79a6a3->enter($__internal_c5a61cefdcf75c9837db5dac7a35d5a27741da6dfc5bb02d40ae0d9bbe79a6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5a61cefdcf75c9837db5dac7a35d5a27741da6dfc5bb02d40ae0d9bbe79a6a3->leave($__internal_c5a61cefdcf75c9837db5dac7a35d5a27741da6dfc5bb02d40ae0d9bbe79a6a3_prof);

        
        $__internal_acf326be53f9a7fe7ac4f0206f866f5cca57d89e271163cb8e9523633719e8c3->leave($__internal_acf326be53f9a7fe7ac4f0206f866f5cca57d89e271163cb8e9523633719e8c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
