<?php

/* WebProfilerBundle:Collector:cache.html.twig */
class __TwigTemplate_ddf9cc914c3bc300db262eff42c036944b9a1303617f004282bcc8b89677f66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:cache.html.twig", 1);
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
        $__internal_ec5306ab8eae68275fb675f68e118408232ccf7c0801c51ddf706e264f9da4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5306ab8eae68275fb675f68e118408232ccf7c0801c51ddf706e264f9da4d6->enter($__internal_ec5306ab8eae68275fb675f68e118408232ccf7c0801c51ddf706e264f9da4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:cache.html.twig"));

        $__internal_b7c48dd24f70437e64d2be6ba16381d638bf73b804799743cc6d7eedb7315c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c48dd24f70437e64d2be6ba16381d638bf73b804799743cc6d7eedb7315c02->enter($__internal_b7c48dd24f70437e64d2be6ba16381d638bf73b804799743cc6d7eedb7315c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:cache.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5306ab8eae68275fb675f68e118408232ccf7c0801c51ddf706e264f9da4d6->leave($__internal_ec5306ab8eae68275fb675f68e118408232ccf7c0801c51ddf706e264f9da4d6_prof);

        
        $__internal_b7c48dd24f70437e64d2be6ba16381d638bf73b804799743cc6d7eedb7315c02->leave($__internal_b7c48dd24f70437e64d2be6ba16381d638bf73b804799743cc6d7eedb7315c02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_686157fe6beb202279dbc02cf8212c6ce65b3cb889c7525d1b759c1a09bf8350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686157fe6beb202279dbc02cf8212c6ce65b3cb889c7525d1b759c1a09bf8350->enter($__internal_686157fe6beb202279dbc02cf8212c6ce65b3cb889c7525d1b759c1a09bf8350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f20596810bfc005857ed1f8e834f91bd9c455e21c20b90a5a515fbfd8280d174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20596810bfc005857ed1f8e834f91bd9c455e21c20b90a5a515fbfd8280d174->enter($__internal_f20596810bfc005857ed1f8e834f91bd9c455e21c20b90a5a515fbfd8280d174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "totals", array()), "calls", array()) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 17, $this->getSourceContext()); })()), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 21
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 21, $this->getSourceContext()); })()), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "totals", array()), "hits", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "totals", array()), "reads", array()), "html", null, true);
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "totals", array()), "hit_read_ratio", array()))) {
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "totals", array()), "hit_read_ratio", array()), "html", null, true);
                echo "%)";
            }
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "totals", array()), "writes", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
        ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 33, $this->getSourceContext()); })())));
            echo "
    ";
        }
        
        $__internal_f20596810bfc005857ed1f8e834f91bd9c455e21c20b90a5a515fbfd8280d174->leave($__internal_f20596810bfc005857ed1f8e834f91bd9c455e21c20b90a5a515fbfd8280d174_prof);

        
        $__internal_686157fe6beb202279dbc02cf8212c6ce65b3cb889c7525d1b759c1a09bf8350->leave($__internal_686157fe6beb202279dbc02cf8212c6ce65b3cb889c7525d1b759c1a09bf8350_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cbcedb7365ac8c8bba2461cddb21552981056ec36374c83b337dbff17e2f1d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcedb7365ac8c8bba2461cddb21552981056ec36374c83b337dbff17e2f1d1f->enter($__internal_cbcedb7365ac8c8bba2461cddb21552981056ec36374c83b337dbff17e2f1d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a20f5c71806c04288088c01bd8aa8cbee9fb774ab087d635c380b685c787a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a20f5c71806c04288088c01bd8aa8cbee9fb774ab087d635c380b685c787a99->enter($__internal_4a20f5c71806c04288088c01bd8aa8cbee9fb774ab087d635c380b685c787a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "totals", array()), "calls", array()) == 0)) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">
        ";
        // line 40
        echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
        echo "
    </span>
    <strong>Cache</strong>
</span>
";
        
        $__internal_4a20f5c71806c04288088c01bd8aa8cbee9fb774ab087d635c380b685c787a99->leave($__internal_4a20f5c71806c04288088c01bd8aa8cbee9fb774ab087d635c380b685c787a99_prof);

        
        $__internal_cbcedb7365ac8c8bba2461cddb21552981056ec36374c83b337dbff17e2f1d1f->leave($__internal_cbcedb7365ac8c8bba2461cddb21552981056ec36374c83b337dbff17e2f1d1f_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28485ab233de430d96a928d539b55e31ed69611f285c179160a09aa50b63d3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28485ab233de430d96a928d539b55e31ed69611f285c179160a09aa50b63d3c2->enter($__internal_28485ab233de430d96a928d539b55e31ed69611f285c179160a09aa50b63d3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff5116371a39f90c734573160a7db189b4230acf68c6abf08a82d9591730c869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5116371a39f90c734573160a7db189b4230acf68c6abf08a82d9591730c869->enter($__internal_ff5116371a39f90c734573160a7db189b4230acf68c6abf08a82d9591730c869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Cache</h2>

    ";
        // line 49
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 49, $this->getSourceContext()); })()), "totals", array()), "calls", array()) == 0)) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 60
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 60, $this->getSourceContext()); })()), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->getSourceContext()); })()), "totals", array()), "reads", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 69, $this->getSourceContext()); })()), "totals", array()), "writes", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 73, $this->getSourceContext()); })()), "totals", array()), "deletes", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 78, $this->getSourceContext()); })()), "totals", array()), "hits", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 82, $this->getSourceContext()); })()), "totals", array()), "misses", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    ";
            // line 87
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array())) : (0)), "html", null, true);
            echo " <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 95, $this->getSourceContext()); })()), "calls", array()));
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 96
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $context["calls"]) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 97
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 97, $this->getSourceContext()); })()), "statistics", array()), $context["name"], array(), "array"), "calls", array()), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        ";
                // line 100
                if ((twig_length_filter($this->env, $context["calls"]) == 0)) {
                    // line 101
                    echo "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 102
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " pool.</p>
                            </div>
                        ";
                } else {
                    // line 105
                    echo "                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 107, $this->getSourceContext()); })()), "statistics", array()), $context["name"], array(), "array"));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 108
                        echo "                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            ";
                        // line 110
                        if (($context["key"] == "time")) {
                            // line 111
                            echo "                                                ";
                            echo twig_escape_filter($this->env, sprintf("%0.2f", (1000 * twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "value", array()))), "html", null, true);
                            echo " <span class=\"unit\">ms</span>
                                            ";
                        } elseif ((                        // line 112
$context["key"] == "hit_read_ratio")) {
                            // line 113
                            echo "                                                ";
                            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "value", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "value", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "value", array())) : (0)), "html", null, true);
                            echo " <span class=\"unit\">%</span>
                                            ";
                        } else {
                            // line 115
                            echo "                                                ";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "
                                            ";
                        }
                        // line 117
                        echo "                                        </span>
                                        <span class=\"label\">";
                        // line 118
                        echo twig_escape_filter($this->env, ((($context["key"] == "hit_read_ratio")) ? ("Hits/reads") : (twig_capitalize_string_filter($this->env, $context["key"]))), "html", null, true);
                        echo "</span>
                                    </div>
                                    ";
                        // line 120
                        if ((($context["key"] == "time") || ($context["key"] == "deletes"))) {
                            // line 121
                            echo "                                        <div class=\"metric-divider\"></div>
                                    ";
                        }
                        // line 123
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["calls"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 138
                        echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 139
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                        echo "</td>
                                        <td class=\"nowrap\">";
                        // line 140
                        echo twig_escape_filter($this->env, sprintf("%0.2f", ((twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "end", array()) - twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "start", array())) * 1000)), "html", null, true);
                        echo " ms</td>
                                        <td class=\"nowrap\">";
                        // line 141
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "name", array()), "html", null, true);
                        echo "()</td>
                                        <td>";
                        // line 142
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "value", array()), "result", array()), 2));
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 148
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "        </div>
    ";
        }
        
        $__internal_ff5116371a39f90c734573160a7db189b4230acf68c6abf08a82d9591730c869->leave($__internal_ff5116371a39f90c734573160a7db189b4230acf68c6abf08a82d9591730c869_prof);

        
        $__internal_28485ab233de430d96a928d539b55e31ed69611f285c179160a09aa50b63d3c2->leave($__internal_28485ab233de430d96a928d539b55e31ed69611f285c179160a09aa50b63d3c2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 151,  400 => 148,  395 => 145,  378 => 142,  374 => 141,  370 => 140,  366 => 139,  363 => 138,  346 => 137,  331 => 124,  325 => 123,  321 => 121,  319 => 120,  314 => 118,  311 => 117,  305 => 115,  299 => 113,  297 => 112,  292 => 111,  290 => 110,  286 => 108,  282 => 107,  278 => 105,  272 => 102,  269 => 101,  267 => 100,  259 => 97,  254 => 96,  250 => 95,  239 => 87,  231 => 82,  224 => 78,  216 => 73,  209 => 69,  202 => 65,  194 => 60,  187 => 56,  183 => 54,  177 => 50,  175 => 49,  171 => 47,  162 => 46,  147 => 40,  141 => 38,  132 => 37,  119 => 33,  116 => 32,  110 => 29,  96 => 25,  89 => 21,  82 => 17,  78 => 15,  75 => 14,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.totals.calls > 0 %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/cache.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.totals.calls }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.totals.time * 1000) }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}
        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>{{ collector.totals.calls }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ '%0.2f'|format(collector.totals.time * 1000) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>{{ collector.totals.hits }} / {{ collector.totals.reads }}{% if collector.totals.hit_read_ratio is not null %} ({{ collector.totals.hit_read_ratio }}%){% endif %}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>{{ collector.totals.writes }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.totals.calls == 0 ? 'disabled' }}\">
    <span class=\"icon\">
        {{ include('@WebProfiler/Icon/cache.svg') }}
    </span>
    <strong>Cache</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Cache</h2>

    {% if collector.totals.calls == 0 %}
        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.calls }}</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.totals.time * 1000) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.reads }}</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.writes }}</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.deletes }}</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.hits }}</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.misses }}</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    {{ collector.totals.hit_read_ratio ?? 0 }} <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            {% for name, calls in collector.calls %}
                <div class=\"tab {{ calls|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ collector.statistics[name].calls }}</span></h3>

                    <div class=\"tab-content\">
                        {% if calls|length == 0 %}
                            <div class=\"empty\">
                                <p>No calls were made for {{ name }} pool.</p>
                            </div>
                        {% else %}
                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                {% for key, value in collector.statistics[name] %}
                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            {% if key == 'time' %}
                                                {{ '%0.2f'|format(1000 * value.value) }} <span class=\"unit\">ms</span>
                                            {% elseif key == 'hit_read_ratio' %}
                                                {{ value.value ?? 0 }} <span class=\"unit\">%</span>
                                            {% else %}
                                                {{ value }}
                                            {% endif %}
                                        </span>
                                        <span class=\"label\">{{ key == 'hit_read_ratio' ? 'Hits/reads' : key|capitalize }}</span>
                                    </div>
                                    {% if key == 'time' or key == 'deletes' %}
                                        <div class=\"metric-divider\"></div>
                                    {% endif %}
                                {% endfor %}
                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for call in calls %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"nowrap\">{{ '%0.2f'|format((call.end - call.start) * 1000) }} ms</td>
                                        <td class=\"nowrap\">{{ call.name }}()</td>
                                        <td>{{ profiler_dump(call.value.result, maxDepth=2) }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:cache.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/cache.html.twig");
    }
}
