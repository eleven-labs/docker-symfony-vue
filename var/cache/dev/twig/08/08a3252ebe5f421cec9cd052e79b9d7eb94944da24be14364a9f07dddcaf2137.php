<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_be90a424bc68fdc69d7664d5ba2c1f2f6289895078f961bbcadfc2bac96ec31d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:request.html.twig", 1);
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
        $__internal_0fd7837c0653b8c70a128ecac7f39c1567499a8480b285abed6af5b7d0d9774a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd7837c0653b8c70a128ecac7f39c1567499a8480b285abed6af5b7d0d9774a->enter($__internal_0fd7837c0653b8c70a128ecac7f39c1567499a8480b285abed6af5b7d0d9774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:request.html.twig"));

        $__internal_b4dc52e1b61c45f9c84d9d7192e73d1e395694f72e7f79c7679270c2a96d72db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4dc52e1b61c45f9c84d9d7192e73d1e395694f72e7f79c7679270c2a96d72db->enter($__internal_b4dc52e1b61c45f9c84d9d7192e73d1e395694f72e7f79c7679270c2a96d72db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fd7837c0653b8c70a128ecac7f39c1567499a8480b285abed6af5b7d0d9774a->leave($__internal_0fd7837c0653b8c70a128ecac7f39c1567499a8480b285abed6af5b7d0d9774a_prof);

        
        $__internal_b4dc52e1b61c45f9c84d9d7192e73d1e395694f72e7f79c7679270c2a96d72db->leave($__internal_b4dc52e1b61c45f9c84d9d7192e73d1e395694f72e7f79c7679270c2a96d72db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61967f566263a950663bf887486a485deab26873152fa5022349d8e92068d17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61967f566263a950663bf887486a485deab26873152fa5022349d8e92068d17f->enter($__internal_61967f566263a950663bf887486a485deab26873152fa5022349d8e92068d17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_020b178049233fb8e5307e87160dcc8db2c620dcb4b3ad0aecd2e39be7013b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020b178049233fb8e5307e87160dcc8db2c620dcb4b3ad0aecd2e39be7013b24->enter($__internal_020b178049233fb8e5307e87160dcc8db2c620dcb4b3ad0aecd2e39be7013b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["helper"] = $this;
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "controller", array()));
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "redirect", array())) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            ";
            echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "redirect", array()), "controller", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "redirect", array()), "route", array()), ((("GET" != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "redirect", array()), "method", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "redirect", array()), "method", array())) : ("")));
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "forward", array()), false)) : (false))) {
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            ";
            echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 17, $this->getSourceContext()); })()), "forward", array()), "controller", array()));
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        $context["request_status_code_color"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 21, $this->getSourceContext()); })()), "statuscode", array()) >= 400)) ? ("red") : ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 21, $this->getSourceContext()); })()), "statuscode", array()) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) || array_key_exists("request_status_code_color", $context) ? $context["request_status_code_color"] : (function () { throw new Twig_Error_Runtime('Variable "request_status_code_color" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->getSourceContext()); })()), "statuscode", array()), "html", null, true);
        echo "</span>
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "route", array())) {
            // line 26
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->getSourceContext()); })()), "redirect", array())) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 27
            echo "            ";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "forward", array()), false)) : (false))) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 28
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, ((("GET" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 28, $this->getSourceContext()); })()), "method", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 28, $this->getSourceContext()); })()), "method", array())) : ("")), "html", null, true);
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "route", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "statuscode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "statustext", array()), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 40
        if (("GET" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "method", array()))) {
            // line 41
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->getSourceContext()); })()), "method", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 46
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) || array_key_exists("request_handler", $context) ? $context["request_handler"] : (function () { throw new Twig_Error_Runtime('Variable "request_handler" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 53
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Controller class</b>
                    <span>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 55, $this->getSourceContext()); })()), "controller", array()), "class", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 58
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 61
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "route", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "route", array()), "NONE")) : ("NONE")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 66
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 66, $this->getSourceContext()); })()), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 70
        if (array_key_exists("redirect_handler", $context)) {
            // line 71
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 74, $this->getSourceContext()); })()), "redirect", array()), "status_code", array()), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["redirect_handler"]) || array_key_exists("redirect_handler", $context) ? $context["redirect_handler"] : (function () { throw new Twig_Error_Runtime('Variable "redirect_handler" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo "
                        (<a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 79, $this->getSourceContext()); })()), "redirect", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 79, $this->getSourceContext()); })()), "redirect", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 84
        echo "
        ";
        // line 85
        if (array_key_exists("forward_handler", $context)) {
            // line 86
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["forward_handler"]) || array_key_exists("forward_handler", $context) ? $context["forward_handler"] : (function () { throw new Twig_Error_Runtime('Variable "forward_handler" does not exist.', 90, $this->getSourceContext()); })()), "html", null, true);
            echo "
                        (<a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 91, $this->getSourceContext()); })()), "forward", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 91, $this->getSourceContext()); })()), "forward", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 96
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 97
        echo "
    ";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 98, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_020b178049233fb8e5307e87160dcc8db2c620dcb4b3ad0aecd2e39be7013b24->leave($__internal_020b178049233fb8e5307e87160dcc8db2c620dcb4b3ad0aecd2e39be7013b24_prof);

        
        $__internal_61967f566263a950663bf887486a485deab26873152fa5022349d8e92068d17f->leave($__internal_61967f566263a950663bf887486a485deab26873152fa5022349d8e92068d17f_prof);

    }

    // line 101
    public function block_menu($context, array $blocks = array())
    {
        $__internal_488e230a263701a20ecf124157f58a248daa8338cb6740dab72c153c602de29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488e230a263701a20ecf124157f58a248daa8338cb6740dab72c153c602de29f->enter($__internal_488e230a263701a20ecf124157f58a248daa8338cb6740dab72c153c602de29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f99d0beba586fcc5e0bcccda5d497d77eee27715401c5ad74f0adbaa3c7cc361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99d0beba586fcc5e0bcccda5d497d77eee27715401c5ad74f0adbaa3c7cc361->enter($__internal_f99d0beba586fcc5e0bcccda5d497d77eee27715401c5ad74f0adbaa3c7cc361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 102
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 103
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_f99d0beba586fcc5e0bcccda5d497d77eee27715401c5ad74f0adbaa3c7cc361->leave($__internal_f99d0beba586fcc5e0bcccda5d497d77eee27715401c5ad74f0adbaa3c7cc361_prof);

        
        $__internal_488e230a263701a20ecf124157f58a248daa8338cb6740dab72c153c602de29f->leave($__internal_488e230a263701a20ecf124157f58a248daa8338cb6740dab72c153c602de29f_prof);

    }

    // line 108
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46726a8d3aa834123fefe556f7ab47af4a232692a9cdd55dc92fb0bf40d49e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46726a8d3aa834123fefe556f7ab47af4a232692a9cdd55dc92fb0bf40d49e42->enter($__internal_46726a8d3aa834123fefe556f7ab47af4a232692a9cdd55dc92fb0bf40d49e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b39ca3cfe868afe07b7f6c24e89036334f60220f5cf9a0859c303bbc7544f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b39ca3cfe868afe07b7f6c24e89036334f60220f5cf9a0859c303bbc7544f1d->enter($__internal_1b39ca3cfe868afe07b7f6c24e89036334f60220f5cf9a0859c303bbc7544f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 109
        echo "    ";
        $context["helper"] = $this;
        // line 110
        echo "
    <h2>
        ";
        // line 112
        echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 112, $this->getSourceContext()); })()), "controller", array()));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 122
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 122, $this->getSourceContext()); })()), "requestquery", array()), "all", array()))) {
            // line 123
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 127
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 127, $this->getSourceContext()); })()), "requestquery", array()), "maxDepth" => 1), false);
            echo "
                ";
        }
        // line 129
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 132
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 132, $this->getSourceContext()); })()), "requestrequest", array()), "all", array()))) {
            // line 133
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 137
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 137, $this->getSourceContext()); })()), "requestrequest", array()), "maxDepth" => 1), false);
            echo "
                ";
        }
        // line 139
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 142
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 142, $this->getSourceContext()); })()), "requestattributes", array()), "all", array()))) {
            // line 143
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 147
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 147, $this->getSourceContext()); })()), "requestattributes", array())), false);
            echo "
                ";
        }
        // line 149
        echo "
                <h3>Request Headers</h3>
                ";
        // line 151
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 151, $this->getSourceContext()); })()), "requestheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 155
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 155, $this->getSourceContext()); })()), "content", array()) == false)) {
            // line 156
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 159
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 159, $this->getSourceContext()); })()), "content", array())) {
            // line 160
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 161, $this->getSourceContext()); })()), "content", array()), "html", null, true);
            echo "</pre>
                    </div>
                ";
        } else {
            // line 164
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 168
        echo "
                <h3>Server Parameters</h3>
                ";
        // line 170
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 170, $this->getSourceContext()); })()), "requestserver", array())), false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 180
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 180, $this->getSourceContext()); })()), "responseheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 184
        echo (((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 184, $this->getSourceContext()); })()), "requestcookies", array()), "all", array())) && twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 184, $this->getSourceContext()); })()), "responsecookies", array()), "all", array())))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 190
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 190, $this->getSourceContext()); })()), "requestcookies", array()), "all", array()))) {
            // line 191
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 195
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 195, $this->getSourceContext()); })()), "requestcookies", array())), false);
            echo "
                ";
        }
        // line 197
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 200
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 200, $this->getSourceContext()); })()), "responsecookies", array()), "all", array()))) {
            // line 201
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 205
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 205, $this->getSourceContext()); })()), "responsecookies", array())), true);
            echo "
                ";
        }
        // line 207
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 210
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 210, $this->getSourceContext()); })()), "sessionmetadata", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 216
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 216, $this->getSourceContext()); })()), "sessionmetadata", array()))) {
            // line 217
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 221
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 221, $this->getSourceContext()); })()), "sessionmetadata", array())), false);
            echo "
                ";
        }
        // line 223
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 226
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 226, $this->getSourceContext()); })()), "sessionattributes", array()))) {
            // line 227
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 231
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 231, $this->getSourceContext()); })()), "sessionattributes", array()), "labels" => array(0 => "Attribute", 1 => "Value")), false);
            echo "
                ";
        }
        // line 233
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 236
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 236, $this->getSourceContext()); })()), "flashes", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 242
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 242, $this->getSourceContext()); })()), "flashes", array()))) {
            // line 243
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 247
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 247, $this->getSourceContext()); })()), "flashes", array())), false);
            echo "
                ";
        }
        // line 249
        echo "            </div>
        </div>

        ";
        // line 252
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 252, $this->getSourceContext()); })()), "parent", array())) {
            // line 253
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 258, $this->getSourceContext()); })()), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 259, $this->getSourceContext()); })()), "parent", array()), "token", array()), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 262
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 262, $this->getSourceContext()); })()), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            echo "
            </div>
        </div>
        ";
        }
        // line 266
        echo "
        ";
        // line 267
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 267, $this->getSourceContext()); })()), "children", array()))) {
            // line 268
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 269
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 269, $this->getSourceContext()); })()), "children", array())), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 272, $this->getSourceContext()); })()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 273
                echo "                    <h3>
                        <a href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "token", array()))), "html", null, true);
                echo "\">
                            ";
                // line 275
                echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "getcollector", array(0 => "request"), "method"), "controller", array()));
                echo "
                        </a>
                        <small>(token = <a href=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "token", array()), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 280
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "            </div>
        </div>
        ";
        }
        // line 285
        echo "    </div>
";
        
        $__internal_1b39ca3cfe868afe07b7f6c24e89036334f60220f5cf9a0859c303bbc7544f1d->leave($__internal_1b39ca3cfe868afe07b7f6c24e89036334f60220f5cf9a0859c303bbc7544f1d_prof);

        
        $__internal_46726a8d3aa834123fefe556f7ab47af4a232692a9cdd55dc92fb0bf40d49e42->leave($__internal_46726a8d3aa834123fefe556f7ab47af4a232692a9cdd55dc92fb0bf40d49e42_prof);

    }

    // line 288
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b71bef82b50ade82ad0f42e01a8f46219a0f35263fdc93a6ef190921aa3060a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b71bef82b50ade82ad0f42e01a8f46219a0f35263fdc93a6ef190921aa3060a0->enter($__internal_b71bef82b50ade82ad0f42e01a8f46219a0f35263fdc93a6ef190921aa3060a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            $__internal_17decb32d55aeebd6ee89b7b8909c51d1cf1ba0b6a4ec2863fd556feebee6d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_17decb32d55aeebd6ee89b7b8909c51d1cf1ba0b6a4ec2863fd556feebee6d3c->enter($__internal_17decb32d55aeebd6ee89b7b8909c51d1cf1ba0b6a4ec2863fd556feebee6d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 289
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["controller"] ?? null), "class", array(), "any", true, true)) {
                // line 290
                if (((array_key_exists("method", $context)) ? (_twig_default_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 290, $this->getSourceContext()); })()), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 290, $this->getSourceContext()); })()), "html", null, true);
                    echo "</span>";
                }
                // line 291
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 291, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 291, $this->getSourceContext()); })()), "line", array()));
                // line 292
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 292, $this->getSourceContext()); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 292, $this->getSourceContext()); })()), "file", array()), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span>";
                }
                // line 294
                if (((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 294, $this->getSourceContext()); })()), false)) : (false))) {
                    // line 295
                    echo "@";
                    echo twig_escape_filter($this->env, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 295, $this->getSourceContext()); })()), "html", null, true);
                } else {
                    // line 297
                    echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 297, $this->getSourceContext()); })()), "class", array()))), "html", null, true);
                    // line 298
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 298, $this->getSourceContext()); })()), "method", array())) ? ((" :: " . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 298, $this->getSourceContext()); })()), "method", array()))) : ("")), "html", null, true);
                }
                // line 301
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 301, $this->getSourceContext()); })())) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 303
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 303, $this->getSourceContext()); })()), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 303, $this->getSourceContext()); })()))) : ((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 303, $this->getSourceContext()); })()))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_17decb32d55aeebd6ee89b7b8909c51d1cf1ba0b6a4ec2863fd556feebee6d3c->leave($__internal_17decb32d55aeebd6ee89b7b8909c51d1cf1ba0b6a4ec2863fd556feebee6d3c_prof);

            
            $__internal_b71bef82b50ade82ad0f42e01a8f46219a0f35263fdc93a6ef190921aa3060a0->leave($__internal_b71bef82b50ade82ad0f42e01a8f46219a0f35263fdc93a6ef190921aa3060a0_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  720 => 303,  713 => 301,  710 => 298,  708 => 297,  704 => 295,  702 => 294,  692 => 292,  690 => 291,  684 => 290,  681 => 289,  661 => 288,  650 => 285,  645 => 282,  637 => 280,  629 => 277,  624 => 275,  620 => 274,  617 => 273,  613 => 272,  607 => 269,  604 => 268,  602 => 267,  599 => 266,  592 => 262,  586 => 259,  582 => 258,  575 => 253,  573 => 252,  568 => 249,  562 => 247,  556 => 243,  554 => 242,  545 => 236,  540 => 233,  534 => 231,  528 => 227,  526 => 226,  521 => 223,  515 => 221,  509 => 217,  507 => 216,  498 => 210,  493 => 207,  487 => 205,  481 => 201,  479 => 200,  474 => 197,  468 => 195,  462 => 191,  460 => 190,  451 => 184,  444 => 180,  431 => 170,  427 => 168,  421 => 164,  415 => 161,  412 => 160,  410 => 159,  405 => 156,  403 => 155,  396 => 151,  392 => 149,  386 => 147,  380 => 143,  378 => 142,  373 => 139,  367 => 137,  361 => 133,  359 => 132,  354 => 129,  348 => 127,  342 => 123,  340 => 122,  327 => 112,  323 => 110,  320 => 109,  311 => 108,  297 => 103,  294 => 102,  285 => 101,  273 => 98,  270 => 97,  267 => 96,  257 => 91,  253 => 90,  247 => 86,  245 => 85,  242 => 84,  232 => 79,  228 => 78,  221 => 74,  216 => 71,  214 => 70,  203 => 66,  195 => 61,  190 => 58,  185 => 55,  181 => 53,  179 => 52,  173 => 49,  168 => 46,  163 => 43,  159 => 41,  157 => 40,  149 => 37,  144 => 34,  142 => 33,  139 => 32,  136 => 31,  131 => 29,  126 => 28,  121 => 27,  116 => 26,  114 => 25,  107 => 24,  105 => 23,  102 => 22,  100 => 21,  97 => 20,  94 => 19,  88 => 17,  85 => 16,  83 => 15,  80 => 14,  77 => 13,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% import _self as helper %}
    {% set request_handler %}
        {{ helper.set_handler(collector.controller) }}
    {% endset %}

    {% if collector.redirect %}
        {% set redirect_handler %}
            {{ helper.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}
        {% endset %}
    {% endif %}

    {% if collector.forward|default(false) %}
        {% set forward_handler %}
            {{ helper.set_handler(collector.forward.controller) }}
        {% endset %}
    {% endif %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            {% if collector.redirect %}{{ include('@WebProfiler/Icon/redirect.svg') }}{% endif %}
            {% if collector.forward|default(false) %}{{ include('@WebProfiler/Icon/forward.svg') }}{% endif %}
            <span class=\"sf-toolbar-label\">{{ 'GET' != collector.method ? collector.method }} @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
            </div>

            {% if 'GET' != collector.method -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>{{ collector.method }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>{{ request_handler }}</span>
            </div>

            {% if collector.controller.class is defined -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Controller class</b>
                    <span>{{ collector.controller.class }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ collector.route|default('NONE') }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>
        </div>

        {% if redirect_handler is defined -%}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">{{ collector.redirect.status_code }}</span>
                        Redirect from
                    </b>
                    <span>
                        {{ redirect_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.redirect.token }) }}\">{{ collector.redirect.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}

        {% if forward_handler is defined %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        {{ forward_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.forward.token }) }}\">{{ collector.forward.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>
        {{ helper.set_handler(collector.controller) }}
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                {% if collector.requestquery.all is empty %}
                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>POST Parameters</h3>

                {% if collector.requestrequest.all is empty %}
                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"card\">
                        <pre class=\"break-long-words\">{{ collector.content }}</pre>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}

                <h3>Server Parameters</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestserver }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.requestcookies.all is empty and collector.responsecookies.all is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Response Cookies</h3>

                {% if collector.responsecookies.all is empty %}
                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responsecookies }, with_context = true) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        <a href=\"{{ path('_profiler', { token: child.token }) }}\">
                            {{ helper.set_handler(child.getcollector('request').controller) }}
                        </a>
                        <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% macro set_handler(controller, route, method) %}
    {% if controller.class is defined -%}
        {%- if method|default(false) %}<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">{{ method }}</span>{% endif -%}
        {%- set link = controller.file|file_link(controller.line) %}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% else %}<span>{% endif %}

            {%- if route|default(false) -%}
                @{{ route }}
            {%- else -%}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {%- endif -%}

        {%- if link %}</a>{% else %}</span>{% endif %}
    {%- else -%}
        <span>{{ route|default(controller) }}</span>
    {%- endif %}
{% endmacro %}
", "WebProfilerBundle:Collector:request.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/request.html.twig");
    }
}
