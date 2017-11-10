<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_ffeba601040169b12835d44e640cb5696887de1bdfdffa236733b807f9322838 extends Twig_Template
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
        $__internal_4346e1e7609c954b5e8f0c07dd9696c42c5a8094cb5ffc7f1b92bdf24f115596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4346e1e7609c954b5e8f0c07dd9696c42c5a8094cb5ffc7f1b92bdf24f115596->enter($__internal_4346e1e7609c954b5e8f0c07dd9696c42c5a8094cb5ffc7f1b92bdf24f115596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.html.twig"));

        $__internal_7badaedb81f29bd23bbbf36f385d3cde9d0a34ddfdeb36aa840b1a9c81148988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7badaedb81f29bd23bbbf36f385d3cde9d0a34ddfdeb36aa840b1a9c81148988->enter($__internal_7badaedb81f29bd23bbbf36f385d3cde9d0a34ddfdeb36aa840b1a9c81148988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.html.twig"));

        // line 1
        echo "<div class=\"trace trace-as-html\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((isset($context["expand"]) || array_key_exists("expand", $context) ? $context["expand"] : (function () { throw new Twig_Error_Runtime('Variable "expand" does not exist.', 4, $this->getSourceContext()); })())) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    <span class=\"trace-namespace\">
                        ";
        // line 7
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 7, $this->getSourceContext()); })()), "class", array()), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 8
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "class", array()), "\\")) > 1)) ? ("\\") : (""));
        echo "
                    </span>
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 10, $this->getSourceContext()); })()), "class", array()), "\\")), "html", null, true);
        echo "

                    <span class=\"icon icon-close\">";
        // line 12
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 13
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>

                ";
        // line 16
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 16, $this->getSourceContext()); })()), "message", array())) && ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 16, $this->getSourceContext()); })()) > 1))) {
            // line 17
            echo "                    <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </span>
        </div>

        <div id=\"trace-html-";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 23
        $context["_is_first_user_code"] = true;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 24, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 25
            echo "            ";
            $context["_display_code_snippet"] = ((((isset($context["_is_first_user_code"]) || array_key_exists("_is_first_user_code", $context) ? $context["_is_first_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_is_first_user_code" does not exist.', 25, $this->getSourceContext()); })()) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array())));
            // line 26
            echo "            ";
            if ((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new Twig_Error_Runtime('Variable "_display_code_snippet" does not exist.', 26, $this->getSourceContext()); })())) {
                $context["_is_first_user_code"] = false;
            }
            // line 27
            echo "            <div class=\"trace-line\">
                ";
            // line 28
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", array("prefix" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 28, $this->getSourceContext()); })()), "i" => $context["i"], "trace" => $context["trace"], "_display_code_snippet" => (isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new Twig_Error_Runtime('Variable "_display_code_snippet" does not exist.', 28, $this->getSourceContext()); })())), false);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
</div>
";
        
        $__internal_4346e1e7609c954b5e8f0c07dd9696c42c5a8094cb5ffc7f1b92bdf24f115596->leave($__internal_4346e1e7609c954b5e8f0c07dd9696c42c5a8094cb5ffc7f1b92bdf24f115596_prof);

        
        $__internal_7badaedb81f29bd23bbbf36f385d3cde9d0a34ddfdeb36aa840b1a9c81148988->leave($__internal_7badaedb81f29bd23bbbf36f385d3cde9d0a34ddfdeb36aa840b1a9c81148988_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  95 => 28,  92 => 27,  87 => 26,  84 => 25,  79 => 24,  77 => 23,  73 => 22,  68 => 19,  62 => 17,  60 => 16,  54 => 13,  50 => 12,  45 => 10,  40 => 8,  38 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"trace trace-as-html\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-{{ index }}\" data-toggle-initial=\"{{ expand ? 'display' }}\">
                <h3 class=\"trace-class\">
                    <span class=\"trace-namespace\">
                        {{ exception.class|split('\\\\')|slice(0, -1)|join('\\\\') }}
                        {{- exception.class|split('\\\\')|length > 1 ? '\\\\' }}
                    </span>
                    {{ exception.class|split('\\\\')|last }}

                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>

                {% if exception.message is not empty and index > 1 %}
                    <p class=\"break-long-words trace-message\">{{ exception.message }}</p>
                {% endif %}
            </span>
        </div>

        <div id=\"trace-html-{{ index }}\" class=\"sf-toggle-content\">
        {% set _is_first_user_code = true %}
        {% for i, trace in exception.trace %}
            {% set _display_code_snippet = _is_first_user_code and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and (trace.file is not empty) %}
            {% if _display_code_snippet %}{% set _is_first_user_code = false %}{% endif %}
            <div class=\"trace-line\">
                {{ include('@Twig/Exception/trace.html.twig', { prefix: index, i: i, trace: trace, _display_code_snippet: _display_code_snippet }, with_context = false) }}
            </div>
        {% endfor %}
        </div>
    </div>
</div>
", "TwigBundle:Exception:traces.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.html.twig");
    }
}
