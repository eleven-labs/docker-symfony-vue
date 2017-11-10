<?php

/* @App/App/layout.html.twig */
class __TwigTemplate_a6c8d817137d5795f5385c2a1027d5877fcf6195f1e94149f63906fecb7cd789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app.html.twig", "@App/App/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Docker - Symfony - Vue.js";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
    }

    public function block_container($context, array $blocks = array())
    {
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@App/App/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  46 => 9,  43 => 8,  38 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/App/layout.html.twig", "/var/www/symfony/src/AppBundle/Resources/views/App/layout.html.twig");
    }
}
