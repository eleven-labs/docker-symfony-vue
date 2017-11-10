<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_c74fe43112cd2cd430305c3da6cc6572b666cb250443a9af8065e7154f52cf98 extends Twig_Template
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
        $__internal_ae0395c6a187d950b44a75ac32f71b8909f30253baf043c6535bdec2126d17c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0395c6a187d950b44a75ac32f71b8909f30253baf043c6535bdec2126d17c1->enter($__internal_ae0395c6a187d950b44a75ac32f71b8909f30253baf043c6535bdec2126d17c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        $__internal_77a47a7f5dac8f213e3a61944bf7c7c83cf02fb9757f79462892f5b925f5fa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a47a7f5dac8f213e3a61944bf7c7c83cf02fb9757f79462892f5b925f5fa4e->enter($__internal_77a47a7f5dac8f213e3a61944bf7c7c83cf02fb9757f79462892f5b925f5fa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        $context["channel_is_defined"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 1, $this->getSourceContext()); })())), "channel", array(), "any", true, true);
        // line 2
        echo "
<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            ";
        // line 7
        if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new Twig_Error_Runtime('Variable "channel_is_defined" does not exist.', 7, $this->getSourceContext()); })())) {
            echo "<th>Channel</th>";
        }
        // line 8
        echo "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 400)) {
                // line 15
                echo "            ";
                $context["status"] = "error";
                // line 16
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 300)) {
                // line 17
                echo "            ";
                $context["status"] = "warning";
                // line 18
                echo "        ";
            } else {
                // line 19
                echo "            ";
                $context["severity"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "context", array(), "any", false, true), "exception", array(), "any", false, true), "severity", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "context", array(), "any", false, true), "exception", array(), "any", false, true), "severity", array()), false)) : (false));
                // line 20
                echo "            ";
                $context["status"] = (((((isset($context["severity"]) || array_key_exists("severity", $context) ? $context["severity"] : (function () { throw new Twig_Error_Runtime('Variable "severity" does not exist.', 20, $this->getSourceContext()); })()) === constant("E_DEPRECATED")) || ((isset($context["severity"]) || array_key_exists("severity", $context) ? $context["severity"] : (function () { throw new Twig_Error_Runtime('Variable "severity" does not exist.', 20, $this->getSourceContext()); })()) === constant("E_USER_DEPRECATED")))) ? ("warning") : ("normal"));
                // line 21
                echo "        ";
            }
            // line 22
            echo "        <tr class=\"status-";
            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()), "html", null, true);
            echo "</span>
                <span class=\"text-muted newline\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
            echo "</span>
            </td>
            ";
            // line 27
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new Twig_Error_Runtime('Variable "channel_is_defined" does not exist.', 27, $this->getSourceContext()); })())) {
                // line 28
                echo "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "channel", array()), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 32
            echo "            <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage(twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "context", array()));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>
";
        
        $__internal_ae0395c6a187d950b44a75ac32f71b8909f30253baf043c6535bdec2126d17c1->leave($__internal_ae0395c6a187d950b44a75ac32f71b8909f30253baf043c6535bdec2126d17c1_prof);

        
        $__internal_77a47a7f5dac8f213e3a61944bf7c7c83cf02fb9757f79462892f5b925f5fa4e->leave($__internal_77a47a7f5dac8f213e3a61944bf7c7c83cf02fb9757f79462892f5b925f5fa4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  99 => 32,  93 => 29,  90 => 28,  88 => 27,  83 => 25,  79 => 24,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  45 => 13,  38 => 8,  34 => 7,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set channel_is_defined = (logs|first).channel is defined %}

<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            {% if channel_is_defined %}<th>Channel</th>{% endif %}
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    {% for log in logs %}
        {% if log.priority >= 400 %}
            {% set status = 'error' %}
        {% elseif log.priority >= 300 %}
            {% set status = 'warning' %}
        {% else %}
            {% set severity = log.context.exception.severity|default(false) %}
            {% set status = severity is constant('E_DEPRECATED') or severity is constant('E_USER_DEPRECATED') ? 'warning' : 'normal' %}
        {% endif %}
        <tr class=\"status-{{ status }}\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
            </td>
            {% if channel_is_defined %}
                <td class=\"text-small text-bold nowrap\">
                    {{ log.channel }}
                </td>
            {% endif %}
            <td>{{ log.message|format_log_message(log.context) }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "TwigBundle:Exception:logs.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
