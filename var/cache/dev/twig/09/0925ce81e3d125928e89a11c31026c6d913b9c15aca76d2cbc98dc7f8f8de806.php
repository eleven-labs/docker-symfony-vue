<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_ed6ed8a4a4efa5f94f1af636474162333065440b6d33e5e252b6b40db59afe88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:logger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd56c7a8b883233c94e4a23d6471da3e3f8eb3b795ecfed17f1366907a9f75eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd56c7a8b883233c94e4a23d6471da3e3f8eb3b795ecfed17f1366907a9f75eb->enter($__internal_cd56c7a8b883233c94e4a23d6471da3e3f8eb3b795ecfed17f1366907a9f75eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:logger.html.twig"));

        $__internal_ea4a2d1072d5d59c05cb2b0a2854a048eeef7f6c70c5c9f706e16e36e081fa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4a2d1072d5d59c05cb2b0a2854a048eeef7f6c70c5c9f706e16e36e081fa34->enter($__internal_ea4a2d1072d5d59c05cb2b0a2854a048eeef7f6c70c5c9f706e16e36e081fa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd56c7a8b883233c94e4a23d6471da3e3f8eb3b795ecfed17f1366907a9f75eb->leave($__internal_cd56c7a8b883233c94e4a23d6471da3e3f8eb3b795ecfed17f1366907a9f75eb_prof);

        
        $__internal_ea4a2d1072d5d59c05cb2b0a2854a048eeef7f6c70c5c9f706e16e36e081fa34->leave($__internal_ea4a2d1072d5d59c05cb2b0a2854a048eeef7f6c70c5c9f706e16e36e081fa34_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f9c001ba45aca5da476742a19fab66db0efc209395cb0a20e57daf2af377181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9c001ba45aca5da476742a19fab66db0efc209395cb0a20e57daf2af377181->enter($__internal_0f9c001ba45aca5da476742a19fab66db0efc209395cb0a20e57daf2af377181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0c91a64abd0ca502d493b88235a61b7694c0b6686e23b347c4db51fb7f718d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c91a64abd0ca502d493b88235a61b7694c0b6686e23b347c4db51fb7f718d8e->enter($__internal_0c91a64abd0ca502d493b88235a61b7694c0b6686e23b347c4db51fb7f718d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "counterrors", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "countdeprecations", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "countwarnings", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 8, $this->getSourceContext()); })()), "counterrors", array())) ? ("red") : ("yellow"));
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "counterrors", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "counterrors", array())) : ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "countdeprecations", array()) + twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "countwarnings", array())))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 21, $this->getSourceContext()); })()), "countwarnings", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countwarnings", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countwarnings", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->getSourceContext()); })()), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 30, $this->getSourceContext()); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 30, $this->getSourceContext()); })())));
            echo "
    ";
        }
        
        $__internal_0c91a64abd0ca502d493b88235a61b7694c0b6686e23b347c4db51fb7f718d8e->leave($__internal_0c91a64abd0ca502d493b88235a61b7694c0b6686e23b347c4db51fb7f718d8e_prof);

        
        $__internal_0f9c001ba45aca5da476742a19fab66db0efc209395cb0a20e57daf2af377181->leave($__internal_0f9c001ba45aca5da476742a19fab66db0efc209395cb0a20e57daf2af377181_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fafadfa44868ffca94ab2b7be46f600933d09aef52de7b5d138ae115d5383113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafadfa44868ffca94ab2b7be46f600933d09aef52de7b5d138ae115d5383113->enter($__internal_fafadfa44868ffca94ab2b7be46f600933d09aef52de7b5d138ae115d5383113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d79bd8eaa077e09353644f21d342a60792a644cd24805944bde6759e1c2571d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d79bd8eaa077e09353644f21d342a60792a644cd24805944bde6759e1c2571d->enter($__internal_2d79bd8eaa077e09353644f21d342a60792a644cd24805944bde6759e1c2571d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "counterrors", array())) ? ("error") : ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "countdeprecations", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "countwarnings", array()))) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "counterrors", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "countdeprecations", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "countwarnings", array()))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "counterrors", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "counterrors", array())) : ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "countdeprecations", array()) + twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "countwarnings", array())))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_2d79bd8eaa077e09353644f21d342a60792a644cd24805944bde6759e1c2571d->leave($__internal_2d79bd8eaa077e09353644f21d342a60792a644cd24805944bde6759e1c2571d_prof);

        
        $__internal_fafadfa44868ffca94ab2b7be46f600933d09aef52de7b5d138ae115d5383113->leave($__internal_fafadfa44868ffca94ab2b7be46f600933d09aef52de7b5d138ae115d5383113_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cca011814d5b3f6b5f487cfd38a7ed3b3b8dd9d883d7276ba7ba9b5bf6611f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca011814d5b3f6b5f487cfd38a7ed3b3b8dd9d883d7276ba7ba9b5bf6611f2a->enter($__internal_cca011814d5b3f6b5f487cfd38a7ed3b3b8dd9d883d7276ba7ba9b5bf6611f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_685c01faf3b1c90e0c33cff8a26553ce43ea9b18adc9015e4ac304c8309a3db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685c01faf3b1c90e0c33cff8a26553ce43ea9b18adc9015e4ac304c8309a3db8->enter($__internal_685c01faf3b1c90e0c33cff8a26553ce43ea9b18adc9015e4ac304c8309a3db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 49, $this->getSourceContext()); })()), "logs", array()))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            // line 55
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 57
                echo "            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "scream", array(), "any", true, true) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "scream", array()))) {
                    // line 58
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge((isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new Twig_Error_Runtime('Variable "deprecation_logs" does not exist.', 58, $this->getSourceContext()); })()), array(0 => $context["log"]));
                    // line 59
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "scream", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "scream", array()))) {
                    // line 60
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge((isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new Twig_Error_Runtime('Variable "silenced_logs" does not exist.', 60, $this->getSourceContext()); })()), array(0 => $context["log"]));
                    // line 61
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 62
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge((isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new Twig_Error_Runtime('Variable "debug_logs" does not exist.', 62, $this->getSourceContext()); })()), array(0 => $context["log"]));
                    // line 63
                    echo "            ";
                } else {
                    // line 64
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge((isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new Twig_Error_Runtime('Variable "info_and_error_logs" does not exist.', 64, $this->getSourceContext()); })()), array(0 => $context["log"]));
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 70
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "counterrors", array())) ? ("error") : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "countwarnings", array())) ? ("warning") : (""))));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "counterrors", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "counterrors", array())) : (twig_length_filter($this->env, (isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new Twig_Error_Runtime('Variable "info_and_error_logs" does not exist.', 70, $this->getSourceContext()); })())))), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    ";
            // line 74
            if (twig_test_empty((isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new Twig_Error_Runtime('Variable "info_and_error_logs" does not exist.', 74, $this->getSourceContext()); })()))) {
                // line 75
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 79
                echo "                        ";
                echo $context["helper"]->macro_render_table((isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new Twig_Error_Runtime('Variable "info_and_error_logs" does not exist.', 79, $this->getSourceContext()); })()), "info", true);
                echo "
                    ";
            }
            // line 81
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 87
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 87, $this->getSourceContext()); })()), "countdeprecations", array())) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">
                    ";
            // line 91
            if (twig_test_empty((isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new Twig_Error_Runtime('Variable "deprecation_logs" does not exist.', 91, $this->getSourceContext()); })()))) {
                // line 92
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 96
                echo "                        ";
                echo $context["helper"]->macro_render_table((isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new Twig_Error_Runtime('Variable "deprecation_logs" does not exist.', 96, $this->getSourceContext()); })()), "deprecation", false, true);
                echo "
                    ";
            }
            // line 98
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 102
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new Twig_Error_Runtime('Variable "debug_logs" does not exist.', 102, $this->getSourceContext()); })())), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    ";
            // line 106
            if (twig_test_empty((isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new Twig_Error_Runtime('Variable "debug_logs" does not exist.', 106, $this->getSourceContext()); })()))) {
                // line 107
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 111
                echo "                        ";
                echo $context["helper"]->macro_render_table((isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new Twig_Error_Runtime('Variable "debug_logs" does not exist.', 111, $this->getSourceContext()); })()), "debug");
                echo "
                    ";
            }
            // line 113
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">";
            // line 117
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">
                    ";
            // line 121
            if (twig_test_empty((isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new Twig_Error_Runtime('Variable "silenced_logs" does not exist.', 121, $this->getSourceContext()); })()))) {
                // line 122
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 126
                echo "                        ";
                echo $context["helper"]->macro_render_table((isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new Twig_Error_Runtime('Variable "silenced_logs" does not exist.', 126, $this->getSourceContext()); })()), "silenced");
                echo "
                    ";
            }
            // line 128
            echo "                </div>
            </div>

            ";
            // line 131
            $context["compilerLogTotal"] = 0;
            // line 132
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 132, $this->getSourceContext()); })()), "compilerLogs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
                // line 133
                echo "                ";
                $context["compilerLogTotal"] = ((isset($context["compilerLogTotal"]) || array_key_exists("compilerLogTotal", $context) ? $context["compilerLogTotal"] : (function () { throw new Twig_Error_Runtime('Variable "compilerLogTotal" does not exist.', 133, $this->getSourceContext()); })()) + twig_length_filter($this->env, $context["logs"]));
                // line 134
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["compilerLogTotal"]) || array_key_exists("compilerLogTotal", $context) ? $context["compilerLogTotal"] : (function () { throw new Twig_Error_Runtime('Variable "compilerLogTotal" does not exist.', 136, $this->getSourceContext()); })()), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">
                    ";
            // line 140
            if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 140, $this->getSourceContext()); })()), "compilerLogs", array()))) {
                // line 141
                echo "                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>
                    ";
            } else {
                // line 145
                echo "                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 154, $this->getSourceContext()); })()), "compilerLogs", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                    // line 155
                    echo "                                    <tr class=\"\">
                                        <td class=\"font-normal\">
                                            ";
                    // line 157
                    $context["context_id"] = ("context-compiler-" . twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()));
                    // line 158
                    echo "
                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                    // line 159
                    echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new Twig_Error_Runtime('Variable "context_id" does not exist.', 159, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</a>

                                             <div id=\"";
                    // line 161
                    echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new Twig_Error_Runtime('Variable "context_id" does not exist.', 161, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>
                                                ";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["logs"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                        // line 164
                        echo "                                                    <li>";
                        echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "message", array()));
                        echo "</li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">";
                    // line 169
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["logs"]), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 175
            echo "                </div>
            </div>

        </div>
    ";
        }
        
        $__internal_685c01faf3b1c90e0c33cff8a26553ce43ea9b18adc9015e4ac304c8309a3db8->leave($__internal_685c01faf3b1c90e0c33cff8a26553ce43ea9b18adc9015e4ac304c8309a3db8_prof);

        
        $__internal_cca011814d5b3f6b5f487cfd38a7ed3b3b8dd9d883d7276ba7ba9b5bf6611f2a->leave($__internal_cca011814d5b3f6b5f487cfd38a7ed3b3b8dd9d883d7276ba7ba9b5bf6611f2a_prof);

    }

    // line 182
    public function macro_render_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0d192a0f4bf4a650db5a76943be5dcb27c7d8a68df4f373d7e350b98082ea404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0d192a0f4bf4a650db5a76943be5dcb27c7d8a68df4f373d7e350b98082ea404->enter($__internal_0d192a0f4bf4a650db5a76943be5dcb27c7d8a68df4f373d7e350b98082ea404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_8ed5f371a0d830571ea5a02fd98f39baa9c9a30dc7d904385aacac0bd8b6c779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8ed5f371a0d830571ea5a02fd98f39baa9c9a30dc7d904385aacac0bd8b6c779->enter($__internal_8ed5f371a0d830571ea5a02fd98f39baa9c9a30dc7d904385aacac0bd8b6c779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 183
            echo "    ";
            $context["helper"] = $this;
            // line 184
            echo "    ";
            $context["channel_is_defined"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 184, $this->getSourceContext()); })())), "channel", array(), "any", true, true);
            // line 185
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 189
            echo (((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new Twig_Error_Runtime('Variable "show_level" does not exist.', 189, $this->getSourceContext()); })())) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 190
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new Twig_Error_Runtime('Variable "channel_is_defined" does not exist.', 190, $this->getSourceContext()); })())) {
                echo "<th>Channel</th>";
            }
            // line 191
            echo "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 196, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 197
                echo "                ";
                $context["css_class"] = (((isset($context["is_deprecation"]) || array_key_exists("is_deprecation", $context) ? $context["is_deprecation"] : (function () { throw new Twig_Error_Runtime('Variable "is_deprecation" does not exist.', 197, $this->getSourceContext()); })())) ? ("") : (((twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(),                 // line 198
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 199
$context["log"], "priorityName", array()) == "WARNING")) ? ("status-warning") : (""))))));
                // line 201
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new Twig_Error_Runtime('Variable "css_class" does not exist.', 201, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\" nowrap>
                        ";
                // line 203
                if ((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new Twig_Error_Runtime('Variable "show_level" does not exist.', 203, $this->getSourceContext()); })())) {
                    // line 204
                    echo "                            <span class=\"colored text-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 206
                echo "                        <span class=\"text-muted newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 209
                if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new Twig_Error_Runtime('Variable "channel_is_defined" does not exist.', 209, $this->getSourceContext()); })())) {
                    // line 210
                    echo "                        <td class=\"font-normal text-small text-bold\" nowrap>
                            ";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "channel", array()), "html", null, true);
                    echo "
                            ";
                    // line 212
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "errorCount", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "errorCount", array()) > 1))) {
                        // line 213
                        echo "                                <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "errorCount", array()), "html", null, true);
                        echo " times)</span>
                            ";
                    }
                    // line 215
                    echo "                        </td>

                    ";
                }
                // line 218
                echo "
                    <td class=\"font-normal\">";
                // line 219
                echo $context["helper"]->macro_render_log_message((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 219, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), $context["log"]);
                echo "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "        </tbody>
    </table>
";
            
            $__internal_8ed5f371a0d830571ea5a02fd98f39baa9c9a30dc7d904385aacac0bd8b6c779->leave($__internal_8ed5f371a0d830571ea5a02fd98f39baa9c9a30dc7d904385aacac0bd8b6c779_prof);

            
            $__internal_0d192a0f4bf4a650db5a76943be5dcb27c7d8a68df4f373d7e350b98082ea404->leave($__internal_0d192a0f4bf4a650db5a76943be5dcb27c7d8a68df4f373d7e350b98082ea404_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 226
    public function macro_render_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5b52d41a40311b546955747a5099058e84ce9ec79caa198cb8e66d4c61633ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5b52d41a40311b546955747a5099058e84ce9ec79caa198cb8e66d4c61633ebe->enter($__internal_5b52d41a40311b546955747a5099058e84ce9ec79caa198cb8e66d4c61633ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_12f434847aaefc36440bb22477d6530c92ba1b78fff102ad63fd213296861e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_12f434847aaefc36440bb22477d6530c92ba1b78fff102ad63fd213296861e26->enter($__internal_12f434847aaefc36440bb22477d6530c92ba1b78fff102ad63fd213296861e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 227
            echo "    ";
            $context["has_context"] = (twig_get_attribute($this->env, $this->getSourceContext(), ($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 227, $this->getSourceContext()); })()), "context", array())));
            // line 228
            echo "    ";
            $context["has_trace"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["log"] ?? null), "context", array(), "any", false, true), "exception", array(), "any", false, true), "trace", array(), "any", true, true);
            // line 229
            echo "
    ";
            // line 230
            if ( !(isset($context["has_context"]) || array_key_exists("has_context", $context) ? $context["has_context"] : (function () { throw new Twig_Error_Runtime('Variable "has_context" does not exist.', 230, $this->getSourceContext()); })())) {
                // line 231
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 231, $this->getSourceContext()); })()), "message", array()));
                echo "
    ";
            } else {
                // line 233
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 233, $this->getSourceContext()); })()), "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 233, $this->getSourceContext()); })()), "context", array()));
                echo "

        <div class=\"text-small font-normal\">
            ";
                // line 236
                $context["context_id"] = ((("context-" . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 236, $this->getSourceContext()); })())) . "-") . (isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new Twig_Error_Runtime('Variable "log_index" does not exist.', 236, $this->getSourceContext()); })()));
                // line 237
                echo "            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new Twig_Error_Runtime('Variable "context_id" does not exist.', 237, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>

            ";
                // line 239
                if ((isset($context["has_trace"]) || array_key_exists("has_trace", $context) ? $context["has_trace"] : (function () { throw new Twig_Error_Runtime('Variable "has_trace" does not exist.', 239, $this->getSourceContext()); })())) {
                    // line 240
                    echo "                &nbsp;&nbsp;
                ";
                    // line 241
                    $context["trace_id"] = ((("trace-" . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 241, $this->getSourceContext()); })())) . "-") . (isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new Twig_Error_Runtime('Variable "log_index" does not exist.', 241, $this->getSourceContext()); })()));
                    // line 242
                    echo "                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    echo twig_escape_filter($this->env, (isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new Twig_Error_Runtime('Variable "trace_id" does not exist.', 242, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
            ";
                }
                // line 244
                echo "        </div>

        <div id=\"";
                // line 246
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new Twig_Error_Runtime('Variable "context_id" does not exist.', 246, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
                // line 247
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 247, $this->getSourceContext()); })()), "context", array()), 1));
                echo "
        </div>

        ";
                // line 250
                if ((isset($context["has_trace"]) || array_key_exists("has_trace", $context) ? $context["has_trace"] : (function () { throw new Twig_Error_Runtime('Variable "has_trace" does not exist.', 250, $this->getSourceContext()); })())) {
                    // line 251
                    echo "            <div id=\"";
                    echo twig_escape_filter($this->env, (isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new Twig_Error_Runtime('Variable "trace_id" does not exist.', 251, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                    // line 252
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 252, $this->getSourceContext()); })()), "context", array()), "exception", array()), "trace", array()), 1));
                    echo "
            </div>
        ";
                }
                // line 255
                echo "    ";
            }
            
            $__internal_12f434847aaefc36440bb22477d6530c92ba1b78fff102ad63fd213296861e26->leave($__internal_12f434847aaefc36440bb22477d6530c92ba1b78fff102ad63fd213296861e26_prof);

            
            $__internal_5b52d41a40311b546955747a5099058e84ce9ec79caa198cb8e66d4c61633ebe->leave($__internal_5b52d41a40311b546955747a5099058e84ce9ec79caa198cb8e66d4c61633ebe_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  732 => 255,  726 => 252,  721 => 251,  719 => 250,  713 => 247,  709 => 246,  705 => 244,  699 => 242,  697 => 241,  694 => 240,  692 => 239,  686 => 237,  684 => 236,  677 => 233,  671 => 231,  669 => 230,  666 => 229,  663 => 228,  660 => 227,  640 => 226,  623 => 222,  606 => 219,  603 => 218,  598 => 215,  592 => 213,  590 => 212,  586 => 211,  583 => 210,  581 => 209,  574 => 206,  568 => 204,  566 => 203,  560 => 201,  558 => 199,  557 => 198,  555 => 197,  538 => 196,  531 => 191,  527 => 190,  523 => 189,  517 => 185,  514 => 184,  511 => 183,  490 => 182,  475 => 175,  470 => 172,  453 => 169,  448 => 166,  439 => 164,  435 => 163,  430 => 161,  421 => 159,  418 => 158,  416 => 157,  412 => 155,  395 => 154,  384 => 145,  378 => 141,  376 => 140,  369 => 136,  366 => 135,  360 => 134,  357 => 133,  352 => 132,  350 => 131,  345 => 128,  339 => 126,  333 => 122,  331 => 121,  324 => 117,  318 => 113,  312 => 111,  306 => 107,  304 => 106,  297 => 102,  291 => 98,  285 => 96,  279 => 92,  277 => 91,  267 => 87,  261 => 81,  255 => 79,  249 => 75,  247 => 74,  238 => 70,  233 => 67,  227 => 66,  224 => 65,  221 => 64,  218 => 63,  215 => 62,  212 => 61,  209 => 60,  206 => 59,  203 => 58,  200 => 57,  195 => 56,  192 => 55,  190 => 54,  184 => 50,  182 => 49,  178 => 47,  169 => 46,  158 => 43,  152 => 40,  149 => 39,  147 => 38,  142 => 36,  135 => 35,  126 => 34,  113 => 30,  110 => 29,  102 => 26,  92 => 21,  82 => 16,  78 => 14,  76 => 13,  73 => 12,  68 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : 'yellow' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations or collector.countwarnings ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.logs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {# sort collected logs in groups #}
        {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}
        {% for log in collector.logs %}
            {% if log.scream is defined and not log.scream %}
                {% set deprecation_logs = deprecation_logs|merge([log]) %}
            {% elseif log.scream is defined and log.scream %}
                {% set silenced_logs = silenced_logs|merge([log]) %}
            {% elseif log.priorityName == 'DEBUG' %}
                {% set debug_logs = debug_logs|merge([log]) %}
            {% else %}
                {% set info_and_error_logs = info_and_error_logs|merge([log]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' }}\">{{ collector.counterrors ?: info_and_error_logs|length }}</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    {% if info_and_error_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(info_and_error_logs, 'info', true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                {# 'deprecation_logs|length' is not used because deprecations are
                now grouped and the group count doesn't match the message count #}
                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">
                    {% if deprecation_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(deprecation_logs, 'deprecation', false, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">{{ debug_logs|length }}</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    {% if debug_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(debug_logs, 'debug') }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">{{ collector.countscreams|default(0) }}</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">
                    {% if silenced_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(silenced_logs, 'silenced') }}
                    {% endif %}
                </div>
            </div>

            {% set compilerLogTotal = 0 %}
            {% for logs in collector.compilerLogs %}
                {% set compilerLogTotal = compilerLogTotal + logs|length %}
            {% endfor %}
            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">{{ compilerLogTotal }}</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">
                    {% if collector.compilerLogs is empty %}
                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>
                    {% else %}
                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>
                                {% for class, logs in collector.compilerLogs %}
                                    <tr class=\"\">
                                        <td class=\"font-normal\">
                                            {% set context_id = 'context-compiler-' ~ loop.index %}

                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"{{ class }}\">{{ class }}</a>

                                             <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>
                                                {% for log in logs %}
                                                    <li>{{ profiler_dump_log(log.message) }}</li>
                                                {% endfor %}
                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">{{ logs|length }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            </div>

        </div>
    {% endif %}
{% endblock %}

{% macro render_table(logs, category = '', show_level = false, is_deprecation = false) %}
    {% import _self as helper %}
    {% set channel_is_defined = (logs|first).channel is defined %}

    <table class=\"logs\">
        <thead>
            <tr>
                <th>{{ show_level ? 'Level' : 'Time' }}</th>
                {% if channel_is_defined %}<th>Channel</th>{% endif %}
                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            {% for log in logs %}
                {% set css_class = is_deprecation ? ''
                    : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'
                    : log.priorityName == 'WARNING' ? 'status-warning'
                %}
                <tr class=\"{{ css_class }}\">
                    <td class=\"font-normal text-small\" nowrap>
                        {% if show_level %}
                            <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                        {% endif %}
                        <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
                    </td>

                    {% if channel_is_defined %}
                        <td class=\"font-normal text-small text-bold\" nowrap>
                            {{ log.channel }}
                            {% if log.errorCount is defined and log.errorCount > 1 %}
                                <span class=\"text-muted\">({{ log.errorCount }} times)</span>
                            {% endif %}
                        </td>

                    {% endif %}

                    <td class=\"font-normal\">{{ helper.render_log_message(category, loop.index, log) }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_log_message(category, log_index, log) %}
    {% set has_context = log.context is defined and log.context is not empty %}
    {% set has_trace = log.context.exception.trace is defined %}

    {% if not has_context %}
        {{ profiler_dump_log(log.message) }}
    {% else %}
        {{ profiler_dump_log(log.message, log.context) }}

        <div class=\"text-small font-normal\">
            {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>

            {% if has_trace %}
                &nbsp;&nbsp;
                {% set trace_id = 'trace-' ~ category ~ '-' ~ log_index %}
                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
            {% endif %}
        </div>

        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(log.context, maxDepth=1) }}
        </div>

        {% if has_trace %}
            <div id=\"{{ trace_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.exception.trace, maxDepth=1) }}
            </div>
        {% endif %}
    {% endif %}
{% endmacro %}
", "WebProfilerBundle:Collector:logger.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/logger.html.twig");
    }
}
