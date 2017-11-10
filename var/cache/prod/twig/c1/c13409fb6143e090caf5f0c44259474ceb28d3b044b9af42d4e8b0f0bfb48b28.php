<?php

/* @App/App/index.html.twig */
class __TwigTemplate_6b8a3053a1801b09996c9bd786bf259aeafc1558b6d50041c402b146dff55c16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/App/layout.html.twig", "@App/App/index.html.twig", 1);
        $this->blocks = array(
            'data_layout' => array($this, 'block_data_layout'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/App/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_data_layout($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("data_layout", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
      dataLayout.message = \"";
        // line 6
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "\";
    </script>
";
    }

    // line 10
    public function block_container($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"app1\"></div>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/page1.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@App/App/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  48 => 11,  45 => 10,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/App/index.html.twig", "/var/www/symfony/src/AppBundle/Resources/views/App/index.html.twig");
    }
}
