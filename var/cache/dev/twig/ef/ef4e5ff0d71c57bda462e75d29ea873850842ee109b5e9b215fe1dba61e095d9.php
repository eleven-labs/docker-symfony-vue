<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_f89c14f621e648105fe36b34ede07375ee64e11d2fbd329801bdf57dcb355d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "DoctrineBundle:Collector:db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a7fa878cbd319303764c6033459e5ad0c0486a034c90e272a3d6e58a021eafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7fa878cbd319303764c6033459e5ad0c0486a034c90e272a3d6e58a021eafd->enter($__internal_1a7fa878cbd319303764c6033459e5ad0c0486a034c90e272a3d6e58a021eafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineBundle:Collector:db.html.twig"));

        $__internal_753b1121e8e586737f862f5f5b23d18a6424c398222bbe27c0c785b8bdc4c815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753b1121e8e586737f862f5f5b23d18a6424c398222bbe27c0c785b8bdc4c815->enter($__internal_753b1121e8e586737f862f5f5b23d18a6424c398222bbe27c0c785b8bdc4c815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineBundle:Collector:db.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7fa878cbd319303764c6033459e5ad0c0486a034c90e272a3d6e58a021eafd->leave($__internal_1a7fa878cbd319303764c6033459e5ad0c0486a034c90e272a3d6e58a021eafd_prof);

        
        $__internal_753b1121e8e586737f862f5f5b23d18a6424c398222bbe27c0c785b8bdc4c815->leave($__internal_753b1121e8e586737f862f5f5b23d18a6424c398222bbe27c0c785b8bdc4c815_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_185cd822d0571ecc7e17ea7d100b166fbb5495a14e8bc8f99343377842df4c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185cd822d0571ecc7e17ea7d100b166fbb5495a14e8bc8f99343377842df4c25->enter($__internal_185cd822d0571ecc7e17ea7d100b166fbb5495a14e8bc8f99343377842df4c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3233c01b8d9f8715213be4913ef91ef738320cd42d193b589196b706661f72bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3233c01b8d9f8715213be4913ef91ef738320cd42d193b589196b706661f72bf->enter($__internal_3233c01b8d9f8715213be4913ef91ef738320cd42d193b589196b706661f72bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "querycount", array()) > 0) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0))) {
            // line 5
            echo "
        ";
            // line 6
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 6, $this->getSourceContext()); })()), 1)) : (1));
            // line 7
            echo "
        ";
            // line 8
            ob_start();
            // line 9
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 9, $this->getSourceContext()); })()) == 1)) {
                // line 10
                echo "
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status ";
                // line 12
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->getSourceContext()); })()), "querycount", array()) > 50)) {
                    echo "sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
                echo "</span>
                    ";
                // line 13
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "querycount", array()) > 0)) {
                    // line 14
                    echo "                        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
                    echo " ms</span>
                    ";
                }
                // line 16
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0)) {
                    // line 17
                    echo "                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 17, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 19
                echo "
            ";
            } else {
                // line 21
                echo "
                ";
                // line 22
                $context["status"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "querycount", array()) > 50)) ? ("yellow") : (""))));
                // line 23
                echo "
                ";
                // line 24
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "

                ";
                // line 26
                if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->getSourceContext()); })()), "querycount", array()) == 0) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0))) {
                    // line 27
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                ";
                } else {
                    // line 30
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 33
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                ";
                }
                // line 37
                echo "
            ";
            }
            // line 39
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 41
            ob_start();
            // line 42
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
            // line 44
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "querycount", array()) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 48
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 48, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 52
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 54
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 54, $this->getSourceContext()); })()), "cacheEnabled", array())) {
                // line 55
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 57, $this->getSourceContext()); })()), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 61
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 61, $this->getSourceContext()); })()), "cacheMissesCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 61, $this->getSourceContext()); })()), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 65
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->getSourceContext()); })()), "cachePutsCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->getSourceContext()); })()), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 68
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 73
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 74
            echo "
        ";
            // line 75
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 75, $this->getSourceContext()); })()), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 75, $this->getSourceContext()); })()), "")) : (""))));
            echo "

    ";
        }
        
        $__internal_3233c01b8d9f8715213be4913ef91ef738320cd42d193b589196b706661f72bf->leave($__internal_3233c01b8d9f8715213be4913ef91ef738320cd42d193b589196b706661f72bf_prof);

        
        $__internal_185cd822d0571ecc7e17ea7d100b166fbb5495a14e8bc8f99343377842df4c25->leave($__internal_185cd822d0571ecc7e17ea7d100b166fbb5495a14e8bc8f99343377842df4c25_prof);

    }

    // line 80
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4422cefdf1915ffbcb4a7e0708367db9bb92471339111f477627f6201fc30ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4422cefdf1915ffbcb4a7e0708367db9bb92471339111f477627f6201fc30ba0->enter($__internal_4422cefdf1915ffbcb4a7e0708367db9bb92471339111f477627f6201fc30ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ed89c04d85cf5c25908d99053560cce4021b0e83f2ae6a56b415401ff026c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed89c04d85cf5c25908d99053560cce4021b0e83f2ae6a56b415401ff026c73->enter($__internal_2ed89c04d85cf5c25908d99053560cce4021b0e83f2ae6a56b415401ff026c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 81
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 81, $this->getSourceContext()); })()), 1)) : (1));
        // line 82
        echo "
    ";
        // line 83
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 83, $this->getSourceContext()); })()) == 1)) {
            // line 84
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 89, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 90
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 90, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 95
            echo "
        <span class=\"label ";
            // line 96
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 96, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0)) ? ("label-status-error") : (""));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 96, $this->getSourceContext()); })()), "querycount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 97
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>
            ";
            // line 99
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 99, $this->getSourceContext()); })()), "invalidEntityCount", array())) {
                // line 100
                echo "                <span class=\"count\">
                    <span>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 104
            echo "        </span>

    ";
        }
        
        $__internal_2ed89c04d85cf5c25908d99053560cce4021b0e83f2ae6a56b415401ff026c73->leave($__internal_2ed89c04d85cf5c25908d99053560cce4021b0e83f2ae6a56b415401ff026c73_prof);

        
        $__internal_4422cefdf1915ffbcb4a7e0708367db9bb92471339111f477627f6201fc30ba0->leave($__internal_4422cefdf1915ffbcb4a7e0708367db9bb92471339111f477627f6201fc30ba0_prof);

    }

    // line 109
    public function block_panel($context, array $blocks = array())
    {
        $__internal_669d7d02df3f259ab38a63619f07cc6936c6c5a54ced7f5d94b63b82ac45ffb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669d7d02df3f259ab38a63619f07cc6936c6c5a54ced7f5d94b63b82ac45ffb6->enter($__internal_669d7d02df3f259ab38a63619f07cc6936c6c5a54ced7f5d94b63b82ac45ffb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8667899544d33612a9bb09cc5dcf4b8ba742c5f40f82a4d280187baca64f88d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8667899544d33612a9bb09cc5dcf4b8ba742c5f40f82a4d280187baca64f88d5->enter($__internal_8667899544d33612a9bb09cc5dcf4b8ba742c5f40f82a4d280187baca64f88d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 110
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 110, $this->getSourceContext()); })()), 1)) : (1));
        // line 111
        echo "
    ";
        // line 112
        if (("explain" == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 112, $this->getSourceContext()); })()))) {
            // line 113
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 114
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 114, $this->getSourceContext()); })()), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 116
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 116, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "connection"), "method"), "query" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 117
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 117, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "query"), "method"))));
            // line 118
            echo "
    ";
        } else {
            // line 120
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_8667899544d33612a9bb09cc5dcf4b8ba742c5f40f82a4d280187baca64f88d5->leave($__internal_8667899544d33612a9bb09cc5dcf4b8ba742c5f40f82a4d280187baca64f88d5_prof);

        
        $__internal_669d7d02df3f259ab38a63619f07cc6936c6c5a54ced7f5d94b63b82ac45ffb6->leave($__internal_669d7d02df3f259ab38a63619f07cc6936c6c5a54ced7f5d94b63b82ac45ffb6_prof);

    }

    // line 124
    public function block_queries($context, array $blocks = array())
    {
        $__internal_ee9aa100784415becd8ce3ca24981f5e73e95afc278c541f1f5df85eea9a94c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9aa100784415becd8ce3ca24981f5e73e95afc278c541f1f5df85eea9a94c8->enter($__internal_ee9aa100784415becd8ce3ca24981f5e73e95afc278c541f1f5df85eea9a94c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        $__internal_17f55bf80e90786a41a86cc78d0afdd68677e4f89df7ca874e9c02d9cc0bae61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f55bf80e90786a41a86cc78d0afdd68677e4f89df7ca874e9c02d9cc0bae61->enter($__internal_17f55bf80e90786a41a86cc78d0afdd68677e4f89df7ca874e9c02d9cc0bae61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 125
        echo "    <style>
        ";
        // line 126
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 126, $this->getSourceContext()); })()) == 1)) {
            // line 127
            echo "            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        ";
        }
        // line 141
        echo "
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
    </style>

    ";
        // line 147
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 147, $this->getSourceContext()); })()) > 1)) {
            // line 148
            echo "        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 152, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 157, $this->getSourceContext()); })()), "groupedQueryCount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Different statements</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 162
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 162, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 167, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
    
            ";
            // line 171
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 171, $this->getSourceContext()); })()), "cacheEnabled", array())) {
                // line 172
                echo "                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 173, $this->getSourceContext()); })()), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 177, $this->getSourceContext()); })()), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 181, $this->getSourceContext()); })()), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            ";
            }
            // line 185
            echo "        </div>
    ";
        }
        // line 187
        echo "
    ";
        // line 188
        $context["group_queries"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 188, $this->getSourceContext()); })()), "query", array()), "getBoolean", array(0 => "group"), "method");
        // line 189
        echo "    ";
        if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 189, $this->getSourceContext()); })())) {
            // line 190
            echo "        <h2>Grouped Statements</h2>
        <p><a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 191, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">Show all queries</a></p>
    ";
        } else {
            // line 193
            echo "        <h2>Queries</h2>
        <p><a href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 194, $this->getSourceContext()); })()), "group" => true)), "html", null, true);
            echo "\">Group similar statements</a></p>
    ";
        }
        // line 196
        echo "
    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 197, $this->getSourceContext()); })()), "queries", array()));
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
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 198
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 198, $this->getSourceContext()); })()), "connections", array())) > 1)) {
                // line 199
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
        ";
            }
            // line 201
            echo "
        ";
            // line 202
            if (twig_test_empty($context["queries"])) {
                // line 203
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 207
                echo "            ";
                if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 207, $this->getSourceContext()); })())) {
                    // line 208
                    echo "                ";
                    $context["queries"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 208, $this->getSourceContext()); })()), "groupedQueries", array()), $context["connection"], array(), "array");
                    // line 209
                    echo "            ";
                }
                // line 210
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    ";
                // line 213
                if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 213, $this->getSourceContext()); })())) {
                    // line 214
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 215
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Count<span></span></th>
                    ";
                } else {
                    // line 217
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 218
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    ";
                }
                // line 220
                echo "                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\">
                    ";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 225
                    echo "                        ";
                    $context["i"] = (((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 225, $this->getSourceContext()); })())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "index", array())) : ($context["i"]));
                    // line 226
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                            ";
                    // line 227
                    if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 227, $this->getSourceContext()); })())) {
                        // line 228
                        echo "                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:";
                        // line 229
                        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionPercent", array())), "html", null, true);
                        echo "%\"></span>
                                    <span class=\"nowrap\">";
                        // line 230
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionMS", array()) * 1000)), "html", null, true);
                        echo "&nbsp;ms<br />(";
                        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionPercent", array())), "html", null, true);
                        echo "%)</span>
                                </td>
                                <td class=\"nowrap\">";
                        // line 232
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "count", array()), "html", null, true);
                        echo "</td>
                            ";
                    } else {
                        // line 234
                        echo "                                <td class=\"nowrap\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                        echo "</td>
                                <td class=\"nowrap\">";
                        // line 235
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionMS", array()) * 1000)), "html", null, true);
                        echo "&nbsp;ms</td>
                            ";
                    }
                    // line 237
                    echo "                            <td>
                                ";
                    // line 238
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "sql", array()), true);
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 241
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "params", array())));
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" ";
                    // line 245
                    echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 245, $this->getSourceContext()); })()) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" ";
                    // line 249
                    echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 249, $this->getSourceContext()); })()) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    ";
                    // line 251
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "explainable", array())) {
                        // line 252
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 253
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 253, $this->getSourceContext()); })()), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">Explain query</a>
                                    ";
                    }
                    // line 255
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 257
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 258
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "sql", array()));
                    echo "
                                </div>

                                <div id=\"original-query-";
                    // line 261
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 262
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery($this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->replaceQueryParameters((twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "sql", array()) . ";"), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "params", array())), true);
                    echo "
                                </div>

                                ";
                    // line 265
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "explainable", array())) {
                        // line 266
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\" class=\"sql-explain\"></div>
                                ";
                    }
                    // line 268
                    echo "                            </td>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                echo "                </tbody>
            </table>
        ";
            }
            // line 274
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "
    <h2>Database Connections</h2>

    ";
        // line 278
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 278, $this->getSourceContext()); })()), "connections", array())) {
            // line 279
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 283
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 283, $this->getSourceContext()); })()), "connections", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 285
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 288
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 288, $this->getSourceContext()); })()), "managers", array())) {
            // line 289
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 293
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 293, $this->getSourceContext()); })()), "managers", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 295
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 298
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 298, $this->getSourceContext()); })()), "cacheEnabled", array())) {
            // line 299
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 303
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 303, $this->getSourceContext()); })()), "cacheCounts", array())) {
                // line 304
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 308
                echo "            ";
                if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 308, $this->getSourceContext()); })()) == 1)) {
                    // line 309
                    echo "                ";
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 309, $this->getSourceContext()); })()), "cacheCounts", array())), false);
                    echo "
            ";
                } else {
                    // line 311
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 313
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 313, $this->getSourceContext()); })()), "cacheCounts", array()), "hits", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 318
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 318, $this->getSourceContext()); })()), "cacheCounts", array()), "misses", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 323
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 323, $this->getSourceContext()); })()), "cacheCounts", array()), "puts", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            ";
                }
                // line 328
                echo "
            ";
                // line 329
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 329, $this->getSourceContext()); })()), "cacheRegions", array()), "hits", array())) {
                    // line 330
                    echo "                <h3>Number of cache hits</h3>
                ";
                    // line 331
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 331, $this->getSourceContext()); })()), "cacheRegions", array()), "hits", array())), false);
                    echo "
            ";
                }
                // line 333
                echo "
            ";
                // line 334
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 334, $this->getSourceContext()); })()), "cacheRegions", array()), "misses", array())) {
                    // line 335
                    echo "                <h3>Number of cache misses</h3>
                ";
                    // line 336
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 336, $this->getSourceContext()); })()), "cacheRegions", array()), "misses", array())), false);
                    echo "
            ";
                }
                // line 338
                echo "
            ";
                // line 339
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 339, $this->getSourceContext()); })()), "cacheRegions", array()), "puts", array())) {
                    // line 340
                    echo "                <h3>Number of cache puts</h3>
                ";
                    // line 341
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 341, $this->getSourceContext()); })()), "cacheRegions", array()), "puts", array())), false);
                    echo "
            ";
                }
                // line 343
                echo "        ";
            }
            // line 344
            echo "    ";
        }
        // line 345
        echo "
    <h2>Entities Mapping</h2>

    ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 348, $this->getSourceContext()); })()), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 349
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 349, $this->getSourceContext()); })()), "managers", array())) > 1)) {
                // line 350
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo " <small>entity manager</small></h3>
        ";
            }
            // line 352
            echo "
        ";
            // line 353
            if (twig_test_empty($context["classes"])) {
                // line 354
                echo "            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        ";
            } else {
                // line 358
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 366
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 367
                    echo "                    ";
                    $context["contains_errors"] = (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true));
                    // line 368
                    echo "                    <tr class=\"";
                    echo (((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new Twig_Error_Runtime('Variable "contains_errors" does not exist.', 368, $this->getSourceContext()); })())) ? ("status-error") : (""));
                    echo "\">
                        <td>";
                    // line 369
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td class=\"font-normal\">
                            ";
                    // line 371
                    if ((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new Twig_Error_Runtime('Variable "contains_errors" does not exist.', 371, $this->getSourceContext()); })())) {
                        // line 372
                        echo "                                <ul>
                                    ";
                        // line 373
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 373, $this->getSourceContext()); })()), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 374
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 376
                        echo "                                </ul>
                            ";
                    } else {
                        // line 378
                        echo "                                No errors.
                            ";
                    }
                    // line 380
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 383
                echo "                </tbody>
            </table>
        ";
            }
            // line 386
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 445
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 445, $this->getSourceContext()); })()) == 1)) {
            // line 446
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        ";
        }
        // line 463
        echo "
        //]]></script>
";
        
        $__internal_17f55bf80e90786a41a86cc78d0afdd68677e4f89df7ca874e9c02d9cc0bae61->leave($__internal_17f55bf80e90786a41a86cc78d0afdd68677e4f89df7ca874e9c02d9cc0bae61_prof);

        
        $__internal_ee9aa100784415becd8ce3ca24981f5e73e95afc278c541f1f5df85eea9a94c8->leave($__internal_ee9aa100784415becd8ce3ca24981f5e73e95afc278c541f1f5df85eea9a94c8_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1068 => 463,  1049 => 446,  1047 => 445,  987 => 387,  981 => 386,  976 => 383,  968 => 380,  964 => 378,  960 => 376,  951 => 374,  947 => 373,  944 => 372,  942 => 371,  937 => 369,  932 => 368,  929 => 367,  925 => 366,  915 => 358,  909 => 354,  907 => 353,  904 => 352,  898 => 350,  895 => 349,  891 => 348,  886 => 345,  883 => 344,  880 => 343,  875 => 341,  872 => 340,  870 => 339,  867 => 338,  862 => 336,  859 => 335,  857 => 334,  854 => 333,  849 => 331,  846 => 330,  844 => 329,  841 => 328,  833 => 323,  825 => 318,  817 => 313,  813 => 311,  807 => 309,  804 => 308,  798 => 304,  795 => 303,  789 => 299,  787 => 298,  782 => 295,  776 => 293,  770 => 289,  768 => 288,  763 => 285,  757 => 283,  751 => 279,  749 => 278,  744 => 275,  730 => 274,  725 => 271,  709 => 268,  701 => 266,  699 => 265,  693 => 262,  687 => 261,  681 => 258,  675 => 257,  671 => 255,  662 => 253,  659 => 252,  657 => 251,  648 => 249,  637 => 245,  630 => 241,  624 => 238,  621 => 237,  616 => 235,  611 => 234,  606 => 232,  599 => 230,  595 => 229,  592 => 228,  590 => 227,  583 => 226,  580 => 225,  563 => 224,  559 => 223,  554 => 220,  549 => 218,  544 => 217,  539 => 215,  534 => 214,  532 => 213,  527 => 210,  524 => 209,  521 => 208,  518 => 207,  512 => 203,  510 => 202,  507 => 201,  501 => 199,  498 => 198,  481 => 197,  478 => 196,  473 => 194,  470 => 193,  465 => 191,  462 => 190,  459 => 189,  457 => 188,  454 => 187,  450 => 185,  443 => 181,  436 => 177,  429 => 173,  426 => 172,  424 => 171,  417 => 167,  409 => 162,  401 => 157,  393 => 152,  387 => 148,  385 => 147,  377 => 141,  361 => 127,  359 => 126,  356 => 125,  347 => 124,  333 => 120,  329 => 118,  327 => 117,  326 => 116,  325 => 114,  323 => 113,  321 => 112,  318 => 111,  315 => 110,  306 => 109,  293 => 104,  287 => 101,  284 => 100,  282 => 99,  277 => 97,  271 => 96,  268 => 95,  260 => 90,  256 => 89,  249 => 84,  247 => 83,  244 => 82,  241 => 81,  232 => 80,  218 => 75,  215 => 74,  212 => 73,  205 => 68,  197 => 65,  188 => 61,  181 => 57,  177 => 55,  175 => 54,  168 => 52,  161 => 48,  152 => 44,  148 => 42,  146 => 41,  143 => 40,  140 => 39,  136 => 37,  129 => 33,  122 => 30,  115 => 27,  113 => 26,  108 => 24,  105 => 23,  103 => 22,  100 => 21,  96 => 19,  90 => 17,  87 => 16,  81 => 14,  79 => 13,  71 => 12,  67 => 10,  64 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}

        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}

                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status {% if collector.querycount > 50 %}sf-toolbar-status-yellow{% endif %}\">{{ collector.querycount }}</span>
                    {% if collector.querycount > 0 %}
                        <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                    {% endif %}
                    {% if collector.invalidEntityCount > 0 %}
                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">{{ collector.invalidEntityCount }}</span>
                    {% endif %}

            {% else %}

                {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}

                {{ include('@Doctrine/Collector/icon.svg') }}

                {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}
                    <span class=\"sf-toolbar-value\">{{ collector.invalidEntityCount }}</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                {% else %}
                    <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                {% endif %}

            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status {{ collector.querycount > 50 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.querycount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}\">{{ collector.invalidEntityCount }}</span>
            </div>
            {% if collector.cacheEnabled %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cacheHitsCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cacheMissesCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cachePutsCount }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}

    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}

        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>{{ collector.querycount }}</span>
                <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
            </span>
        </span>

    {% else %}

        <span class=\"label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@Doctrine/Collector/icon.svg') }}</span>
            <strong>Doctrine</strong>
            {% if collector.invalidEntityCount %}
                <span class=\"count\">
                    <span>{{ collector.invalidEntityCount }}</span>
                </span>
            {% endif %}
        </span>

    {% endif %}
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if 'explain' == page %}
        {{ render(controller('DoctrineBundle:Profiler:explain', {
            token: token,
            panel: 'db',
            connectionName: app.request.query.get('connection'),
            query: app.request.query.get('query')
        })) }}
    {% else %}
        {{ block('queries') }}
    {% endif %}
{% endblock %}

{% block queries %}
    <style>
        {% if profiler_markup_version == 1 %}
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        {% endif %}

        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
    </style>

    {% if profiler_markup_version > 1 %}
        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.querycount }}</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.groupedQueryCount }}</span>
                <span class=\"label\">Different statements</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"label\">Invalid entities</span>
            </div>
    
            {% if collector.cacheEnabled %}
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cacheHitsCount }}</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cacheMissesCount }}</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cachePutsCount }}</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            {% endif %}
        </div>
    {% endif %}

    {% set group_queries = request.query.getBoolean('group') %}
    {% if group_queries %}
        <h2>Grouped Statements</h2>
        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token }) }}\">Show all queries</a></p>
    {% else %}
        <h2>Queries</h2>
        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token, group: true }) }}\">Group similar statements</a></p>
    {% endif %}

    {% for connection, queries in collector.queries %}
        {% if collector.connections|length > 1 %}
            <h3>{{ connection }} <small>connection</small></h3>
        {% endif %}

        {% if queries is empty %}
            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        {% else %}
            {% if group_queries %}
                {% set queries = collector.groupedQueries[connection] %}
            {% endif %}
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    {% if group_queries %}
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Count<span></span></th>
                    {% else %}
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    {% endif %}
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                    {% for i, query in queries %}
                        {% set i = group_queries ? query.index : i %}
                        <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                            {% if group_queries %}
                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:{{ '%0.2f'|format(query.executionPercent) }}%\"></span>
                                    <span class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms<br />({{ '%0.2f'|format(query.executionPercent) }}%)</span>
                                </td>
                                <td class=\"nowrap\">{{ query.count }}</td>
                            {% else %}
                                <td class=\"nowrap\">{{ loop.index }}</td>
                                <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>
                            {% endif %}
                            <td>
                                {{ query.sql|doctrine_pretty_query(highlight_only = true) }}

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: {{ profiler_dump(query.params) }}
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" {{ profiler_markup_version == 1 ? 'onclick=\"return toggleRunnableQuery(this);\"' }} class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" {{ profiler_markup_version == 1 ? 'onclick=\"return toggleRunnableQuery(this);\"' }} class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    {% if query.explainable %}
                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}\" onclick=\"return explain(this);\" data-target-id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\">Explain query</a>
                                    {% endif %}
                                </div>

                                <div id=\"formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ query.sql|doctrine_pretty_query }}
                                </div>

                                <div id=\"original-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ (query.sql ~ ';')|doctrine_replace_query_parameters(query.params)|doctrine_pretty_query(highlight_only = true) }}
                                </div>

                                {% if query.explainable %}
                                    <div id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-explain\"></div>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Database Connections</h2>

    {% if not collector.connections %}
        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.connections, labels: ['Name', 'Service'] }, with_context = false ) }}
    {% endif %}

    <h2>Entity Managers</h2>

    {% if not collector.managers %}
        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.managers, labels: ['Name', 'Service'] }, with_context = false ) }}
    {% endif %}

    <h2>Second Level Cache</h2>

    {% if not collector.cacheEnabled %}
        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    {% else %}
        {% if not collector.cacheCounts %}
            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        {% else %}
            {% if profiler_markup_version == 1 %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheCounts }, with_context = false) }}
            {% else %}
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.hits }}</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.misses }}</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.puts }}</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            {% endif %}

            {% if collector.cacheRegions.hits %}
                <h3>Number of cache hits</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.hits }, with_context = false) }}
            {% endif %}

            {% if collector.cacheRegions.misses %}
                <h3>Number of cache misses</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.misses }, with_context = false) }}
            {% endif %}

            {% if collector.cacheRegions.puts %}
                <h3>Number of cache puts</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.puts }, with_context = false) }}
            {% endif %}
        {% endif %}
    {% endif %}

    <h2>Entities Mapping</h2>

    {% for manager, classes in collector.entities %}
        {% if collector.managers|length > 1 %}
            <h3>{{ manager }} <small>entity manager</small></h3>
        {% endif %}

        {% if classes is empty %}
            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        {% else %}
            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                {% for class in classes %}
                    {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class] is defined %}
                    <tr class=\"{{ contains_errors ? 'status-error' }}\">
                        <td>{{ class }}</td>
                        <td class=\"font-normal\">
                            {% if contains_errors %}
                                <ul>
                                    {% for error in collector.mappingErrors[manager][class] %}
                                        <li>{{ error }}</li>
                                    {% endfor %}
                                </ul>
                            {% else %}
                                No errors.
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        {% if profiler_markup_version == 1 %}
            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        {% endif %}

        //]]></script>
{% endblock %}
", "DoctrineBundle:Collector:db.html.twig", "/var/www/symfony/vendor/doctrine/doctrine-bundle/Resources/views/Collector/db.html.twig");
    }
}
