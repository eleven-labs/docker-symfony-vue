<?php

/* app.html.twig */
class __TwigTemplate_ce2bcdfad7f39896269a84102cec1b2844c7ef6eb63434dd18d1602735fb3881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'data_layout' => array($this, 'block_data_layout'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta charset=\"UTF-8\" />

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('data_layout', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_data_layout($context, array $blocks = array())
    {
        // line 15
        echo "            <script type=\"text/javascript\" id=\"dataLayout\">
                var dataLayout = {};
            </script>
        ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  87 => 19,  80 => 15,  77 => 14,  72 => 9,  67 => 7,  61 => 22,  59 => 21,  56 => 20,  53 => 19,  51 => 14,  45 => 11,  42 => 10,  40 => 9,  35 => 7,  27 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app.html.twig", "/var/www/symfony/app/Resources/views/app.html.twig");
    }
}
