<?php

/* app.html.twig */
class __TwigTemplate_b959ee1bc43b5d12b1a8865485dc99a3fbb9f6c60719b9e4197b34aaeb000a6e extends Twig_Template
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
        $__internal_422faf33b2959a96b6971112709ea14b7bcb7a623049b040e03b337b559f2ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422faf33b2959a96b6971112709ea14b7bcb7a623049b040e03b337b559f2ac1->enter($__internal_422faf33b2959a96b6971112709ea14b7bcb7a623049b040e03b337b559f2ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app.html.twig"));

        $__internal_ec98df2a1f12e9bc8ba0baa921cc0ce3ae723a82b13964f97d6c61cd74ca1aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec98df2a1f12e9bc8ba0baa921cc0ce3ae723a82b13964f97d6c61cd74ca1aa7->enter($__internal_ec98df2a1f12e9bc8ba0baa921cc0ce3ae723a82b13964f97d6c61cd74ca1aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
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
        
        $__internal_422faf33b2959a96b6971112709ea14b7bcb7a623049b040e03b337b559f2ac1->leave($__internal_422faf33b2959a96b6971112709ea14b7bcb7a623049b040e03b337b559f2ac1_prof);

        
        $__internal_ec98df2a1f12e9bc8ba0baa921cc0ce3ae723a82b13964f97d6c61cd74ca1aa7->leave($__internal_ec98df2a1f12e9bc8ba0baa921cc0ce3ae723a82b13964f97d6c61cd74ca1aa7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5feac2e5a5fa9ce96278dfed7f03fc03575dbe5dec203ecc08f6601d0c376ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5feac2e5a5fa9ce96278dfed7f03fc03575dbe5dec203ecc08f6601d0c376ba->enter($__internal_a5feac2e5a5fa9ce96278dfed7f03fc03575dbe5dec203ecc08f6601d0c376ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d4effa518fc6f9861cbc062d09b0699ec07034f1c1c842ee31bf38250ae84b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4effa518fc6f9861cbc062d09b0699ec07034f1c1c842ee31bf38250ae84b9->enter($__internal_1d4effa518fc6f9861cbc062d09b0699ec07034f1c1c842ee31bf38250ae84b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1d4effa518fc6f9861cbc062d09b0699ec07034f1c1c842ee31bf38250ae84b9->leave($__internal_1d4effa518fc6f9861cbc062d09b0699ec07034f1c1c842ee31bf38250ae84b9_prof);

        
        $__internal_a5feac2e5a5fa9ce96278dfed7f03fc03575dbe5dec203ecc08f6601d0c376ba->leave($__internal_a5feac2e5a5fa9ce96278dfed7f03fc03575dbe5dec203ecc08f6601d0c376ba_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8045728e8f406226df68d00235a4031d122abe55c5cefc16d5ee71ca59168912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8045728e8f406226df68d00235a4031d122abe55c5cefc16d5ee71ca59168912->enter($__internal_8045728e8f406226df68d00235a4031d122abe55c5cefc16d5ee71ca59168912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_651597ea339469da18e05e4e642d19e9a367a1c8444febdec5583dce7dd67a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651597ea339469da18e05e4e642d19e9a367a1c8444febdec5583dce7dd67a54->enter($__internal_651597ea339469da18e05e4e642d19e9a367a1c8444febdec5583dce7dd67a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_651597ea339469da18e05e4e642d19e9a367a1c8444febdec5583dce7dd67a54->leave($__internal_651597ea339469da18e05e4e642d19e9a367a1c8444febdec5583dce7dd67a54_prof);

        
        $__internal_8045728e8f406226df68d00235a4031d122abe55c5cefc16d5ee71ca59168912->leave($__internal_8045728e8f406226df68d00235a4031d122abe55c5cefc16d5ee71ca59168912_prof);

    }

    // line 14
    public function block_data_layout($context, array $blocks = array())
    {
        $__internal_01a037aa489cdc8bbf754f19b7722d039c376cc665ef0fcb1cffb89920619bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a037aa489cdc8bbf754f19b7722d039c376cc665ef0fcb1cffb89920619bd6->enter($__internal_01a037aa489cdc8bbf754f19b7722d039c376cc665ef0fcb1cffb89920619bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_layout"));

        $__internal_03b55571f1b0fab64c3a46b1c7e6e4ab9a77cad89216ce9b9804d2ee42b53090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b55571f1b0fab64c3a46b1c7e6e4ab9a77cad89216ce9b9804d2ee42b53090->enter($__internal_03b55571f1b0fab64c3a46b1c7e6e4ab9a77cad89216ce9b9804d2ee42b53090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_layout"));

        // line 15
        echo "            <script type=\"text/javascript\" id=\"dataLayout\">
                var dataLayout = {};
            </script>
        ";
        
        $__internal_03b55571f1b0fab64c3a46b1c7e6e4ab9a77cad89216ce9b9804d2ee42b53090->leave($__internal_03b55571f1b0fab64c3a46b1c7e6e4ab9a77cad89216ce9b9804d2ee42b53090_prof);

        
        $__internal_01a037aa489cdc8bbf754f19b7722d039c376cc665ef0fcb1cffb89920619bd6->leave($__internal_01a037aa489cdc8bbf754f19b7722d039c376cc665ef0fcb1cffb89920619bd6_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_f98f262d210681212b49312b0882ee5e5ba0b1c56a20b7856623ef4b9c680d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98f262d210681212b49312b0882ee5e5ba0b1c56a20b7856623ef4b9c680d8f->enter($__internal_f98f262d210681212b49312b0882ee5e5ba0b1c56a20b7856623ef4b9c680d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1efa0a8d5b59b8fa8990b9d4868afc581f5a0c8fc122a226ab10acce288f337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1efa0a8d5b59b8fa8990b9d4868afc581f5a0c8fc122a226ab10acce288f337->enter($__internal_b1efa0a8d5b59b8fa8990b9d4868afc581f5a0c8fc122a226ab10acce288f337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1efa0a8d5b59b8fa8990b9d4868afc581f5a0c8fc122a226ab10acce288f337->leave($__internal_b1efa0a8d5b59b8fa8990b9d4868afc581f5a0c8fc122a226ab10acce288f337_prof);

        
        $__internal_f98f262d210681212b49312b0882ee5e5ba0b1c56a20b7856623ef4b9c680d8f->leave($__internal_f98f262d210681212b49312b0882ee5e5ba0b1c56a20b7856623ef4b9c680d8f_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd80e0791f6502adc74001fbcb780d69cee4d42c25a1ecc8cc7f765981ee6ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd80e0791f6502adc74001fbcb780d69cee4d42c25a1ecc8cc7f765981ee6ef5->enter($__internal_dd80e0791f6502adc74001fbcb780d69cee4d42c25a1ecc8cc7f765981ee6ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c9461b80984c86e163c8f50b00bfbcfb8fbb202bbcba2e853a90b5e20965767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9461b80984c86e163c8f50b00bfbcfb8fbb202bbcba2e853a90b5e20965767->enter($__internal_2c9461b80984c86e163c8f50b00bfbcfb8fbb202bbcba2e853a90b5e20965767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c9461b80984c86e163c8f50b00bfbcfb8fbb202bbcba2e853a90b5e20965767->leave($__internal_2c9461b80984c86e163c8f50b00bfbcfb8fbb202bbcba2e853a90b5e20965767_prof);

        
        $__internal_dd80e0791f6502adc74001fbcb780d69cee4d42c25a1ecc8cc7f765981ee6ef5->leave($__internal_dd80e0791f6502adc74001fbcb780d69cee4d42c25a1ecc8cc7f765981ee6ef5_prof);

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
        return array (  152 => 21,  135 => 19,  122 => 15,  113 => 14,  96 => 9,  79 => 7,  67 => 22,  65 => 21,  62 => 20,  59 => 19,  57 => 14,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  33 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta charset=\"UTF-8\" />

        <title>{% block title %}{% endblock %}</title>

        {% block stylesheets %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block data_layout %}
            <script type=\"text/javascript\" id=\"dataLayout\">
                var dataLayout = {};
            </script>
        {% endblock %}
        {% block body %}{% endblock %}

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "app.html.twig", "/var/www/symfony/app/Resources/views/app.html.twig");
    }
}
