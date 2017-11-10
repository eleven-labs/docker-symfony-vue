<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_d52e49326493aeb933a99aabce42e85270965961893eedc8d4189a4f9c6515b4 extends Twig_Template
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
        $__internal_505c0a50a389e052abbc75376377d1b5064b08a409438fd5686b862c6bd2b58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505c0a50a389e052abbc75376377d1b5064b08a409438fd5686b862c6bd2b58c->enter($__internal_505c0a50a389e052abbc75376377d1b5064b08a409438fd5686b862c6bd2b58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.html.twig"));

        $__internal_456fabda57bdd73fd2709573e79fa4fe956558961dce8acda1aabb3b7ed93f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456fabda57bdd73fd2709573e79fa4fe956558961dce8acda1aabb3b7ed93f0c->enter($__internal_456fabda57bdd73fd2709573e79fa4fe956558961dce8acda1aabb3b7ed93f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.html.twig"));

        // line 1
        echo "<div class=\"trace-line-header break-long-words ";
        echo ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) ? ("sf-toggle") : (""));
        echo "\" data-toggle-selector=\"#trace-html-";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new Twig_Error_Runtime('Variable "_display_code_snippet" does not exist.', 1, $this->getSourceContext()); })())) ? ("display") : (""));
        echo "\">
    ";
        // line 2
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 3
            echo "        <span class=\"icon icon-close\">";
            echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
            echo "</span>
        <span class=\"icon icon-open\">";
            // line 4
            echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
            echo "</span>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "function", array())) {
            // line 8
            echo "        <span class=\"trace-class\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->getSourceContext()); })()), "class", array()));
            echo "</span>";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->getSourceContext()); })()), "type", array()))) {
                echo "<span class=\"trace-type\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->getSourceContext()); })()), "type", array()), "html", null, true);
                echo "</span>";
            }
            echo "<span class=\"trace-method\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->getSourceContext()); })()), "function", array()), "html", null, true);
            echo "</span><span class=\"trace-arguments\">(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->getSourceContext()); })()), "args", array()));
            echo ")</span>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 12
            echo "        ";
            $context["line_number"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array()), 1)) : (1));
            // line 13
            echo "        ";
            $context["file_link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 13, $this->getSourceContext()); })()), "file", array()), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 13, $this->getSourceContext()); })()));
            // line 14
            echo "        ";
            $context["file_path"] = twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 14, $this->getSourceContext()); })()), "file", array()), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 14, $this->getSourceContext()); })()))), array((" at line " . (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 14, $this->getSourceContext()); })())) => ""));
            // line 15
            echo "        ";
            $context["file_path_parts"] = twig_split_filter($this->env, (isset($context["file_path"]) || array_key_exists("file_path", $context) ? $context["file_path"] : (function () { throw new Twig_Error_Runtime('Variable "file_path" does not exist.', 15, $this->getSourceContext()); })()), twig_constant("DIRECTORY_SEPARATOR"));
            // line 16
            echo "
        <span class=\"block trace-file-path\">
            in
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["file_link"]) || array_key_exists("file_link", $context) ? $context["file_link"] : (function () { throw new Twig_Error_Runtime('Variable "file_link" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, (isset($context["file_path_parts"]) || array_key_exists("file_path_parts", $context) ? $context["file_path_parts"] : (function () { throw new Twig_Error_Runtime('Variable "file_path_parts" does not exist.', 19, $this->getSourceContext()); })()), 0,  -1), twig_constant("DIRECTORY_SEPARATOR")), "html", null, true);
            echo twig_escape_filter($this->env, twig_constant("DIRECTORY_SEPARATOR"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["file_path_parts"]) || array_key_exists("file_path_parts", $context) ? $context["file_path_parts"] : (function () { throw new Twig_Error_Runtime('Variable "file_path_parts" does not exist.', 19, $this->getSourceContext()); })())), "html", null, true);
            echo "</strong></a>
            (line ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo ")
        </span>
    ";
        }
        // line 23
        echo "</div>
";
        // line 24
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 25
            echo "    <div id=\"trace-html-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 25, $this->getSourceContext()); })()) . "-") . (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 25, $this->getSourceContext()); })())), "html", null, true);
            echo "\" class=\"trace-code sf-toggle-content\">
        ";
            // line 26
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 26, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 26, $this->getSourceContext()); })()), "line", array()), 5), array("#DD0000" => "#183691", "#007700" => "#a71d5d", "#0000BB" => "#222222", "#FF8000" => "#969896"));
            // line 31
            echo "
    </div>
";
        }
        
        $__internal_505c0a50a389e052abbc75376377d1b5064b08a409438fd5686b862c6bd2b58c->leave($__internal_505c0a50a389e052abbc75376377d1b5064b08a409438fd5686b862c6bd2b58c_prof);

        
        $__internal_456fabda57bdd73fd2709573e79fa4fe956558961dce8acda1aabb3b7ed93f0c->leave($__internal_456fabda57bdd73fd2709573e79fa4fe956558961dce8acda1aabb3b7ed93f0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  116 => 26,  111 => 25,  109 => 24,  106 => 23,  100 => 20,  91 => 19,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  72 => 11,  69 => 10,  53 => 8,  51 => 7,  48 => 6,  43 => 4,  38 => 3,  36 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"trace-line-header break-long-words {{ trace.file|default(false) ? 'sf-toggle' }}\" data-toggle-selector=\"#trace-html-{{ prefix }}-{{ i }}\" data-toggle-initial=\"{{ _display_code_snippet ? 'display' }}\">
    {% if trace.file|default(false) %}
        <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square.svg') }}</span>
        <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square.svg') }}</span>
    {% endif %}

    {% if trace.function %}
        <span class=\"trace-class\">{{ trace.class|abbr_class }}</span>{% if trace.type is not empty %}<span class=\"trace-type\">{{ trace.type }}</span>{% endif %}<span class=\"trace-method\">{{ trace.function }}</span><span class=\"trace-arguments\">({{ trace.args|format_args }})</span>
    {% endif %}

    {% if trace.file|default(false) %}
        {% set line_number = trace.line|default(1) %}
        {% set file_link = trace.file|file_link(line_number) %}
        {% set file_path = trace.file|format_file(line_number)|striptags|replace({ (' at line ' ~ line_number): '' }) %}
        {% set file_path_parts = file_path|split(constant('DIRECTORY_SEPARATOR')) %}

        <span class=\"block trace-file-path\">
            in
            <a href=\"{{ file_link }}\">{{ file_path_parts[:-1]|join(constant('DIRECTORY_SEPARATOR')) }}{{ constant('DIRECTORY_SEPARATOR') }}<strong>{{ file_path_parts|last }}</strong></a>
            (line {{ line_number }})
        </span>
    {% endif %}
</div>
{% if trace.file|default(false) %}
    <div id=\"trace-html-{{ prefix ~ '-' ~ i }}\" class=\"trace-code sf-toggle-content\">
        {{ trace.file|file_excerpt(trace.line, 5)|replace({
            '#DD0000': '#183691',
            '#007700': '#a71d5d',
            '#0000BB': '#222222',
            '#FF8000': '#969896'
        })|raw }}
    </div>
{% endif %}
", "TwigBundle:Exception:trace.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.html.twig");
    }
}
