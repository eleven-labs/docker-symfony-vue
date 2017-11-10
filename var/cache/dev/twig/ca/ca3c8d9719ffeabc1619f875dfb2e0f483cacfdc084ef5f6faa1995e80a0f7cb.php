<?php

/* WebProfilerBundle:Collector:config.html.twig */
class __TwigTemplate_470b8635af60ef9cdb815523ff23fb3248d4ab4dba1eccd03ae8d28423ab7cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:config.html.twig", 1);
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
        $__internal_d98b046f429b26585b63cf573d7c0e745674c1e70a41bfaedf54b54ebab1310f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98b046f429b26585b63cf573d7c0e745674c1e70a41bfaedf54b54ebab1310f->enter($__internal_d98b046f429b26585b63cf573d7c0e745674c1e70a41bfaedf54b54ebab1310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:config.html.twig"));

        $__internal_eb17dd4454453f165d7d0e4a7d4f93198e61013c78ba75f57b0e2554240477dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb17dd4454453f165d7d0e4a7d4f93198e61013c78ba75f57b0e2554240477dd->enter($__internal_eb17dd4454453f165d7d0e4a7d4f93198e61013c78ba75f57b0e2554240477dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d98b046f429b26585b63cf573d7c0e745674c1e70a41bfaedf54b54ebab1310f->leave($__internal_d98b046f429b26585b63cf573d7c0e745674c1e70a41bfaedf54b54ebab1310f_prof);

        
        $__internal_eb17dd4454453f165d7d0e4a7d4f93198e61013c78ba75f57b0e2554240477dd->leave($__internal_eb17dd4454453f165d7d0e4a7d4f93198e61013c78ba75f57b0e2554240477dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6eeb3835b8acdedcf035511bee9b67f04e404bf4a0665ca0820895e10a61a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6eeb3835b8acdedcf035511bee9b67f04e404bf4a0665ca0820895e10a61a8e->enter($__internal_c6eeb3835b8acdedcf035511bee9b67f04e404bf4a0665ca0820895e10a61a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_df13eccaa6afcf0817e09c03ad0863e0d24599c827bb302d7d05467a42d16b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df13eccaa6afcf0817e09c03ad0863e0d24599c827bb302d7d05467a42d16b23->enter($__internal_df13eccaa6afcf0817e09c03ad0863e0d24599c827bb302d7d05467a42d16b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (("unknown" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "symfonyState", array()))) {
            // line 5
            echo "        ";
            $context["block_status"] = "";
            // line 6
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "    ";
        } elseif (("eol" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "symfonyState", array()))) {
            // line 8
            echo "        ";
            $context["block_status"] = "red";
            // line 9
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "    ";
        } elseif (("eom" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "symfonyState", array()))) {
            // line 11
            echo "        ";
            $context["block_status"] = "yellow";
            // line 12
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "    ";
        } elseif (("dev" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "symfonyState", array()))) {
            // line 14
            echo "        ";
            $context["block_status"] = "yellow";
            // line 15
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["block_status"] = "";
            // line 18
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        ob_start();
        // line 22
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "applicationname", array())) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 23, $this->getSourceContext()); })()), "applicationname", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->getSourceContext()); })()), "applicationversion", array()), "html", null, true);
            echo "</span>
        ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 25
($context["collector"] ?? null), "symfonyState", array(), "any", true, true)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">
                ";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
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
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "applicationname", array())) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "applicationname", array()), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "applicationversion", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 45
        if ((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 45, $this->getSourceContext()); })())) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 46, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "token", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 48, $this->getSourceContext()); })()), "token", array()), "html", null, true);
            echo "
                    ";
        }
        // line 50
        echo "                </span>
            </div>

            ";
        // line 53
        if ( !("n/a" === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 53, $this->getSourceContext()); })()), "appname", array()))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "appname", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if ( !("n/a" === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 60, $this->getSourceContext()); })()), "env", array()))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 63, $this->getSourceContext()); })()), "env", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 66
        echo "
            ";
        // line 67
        if ( !("n/a" === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 67, $this->getSourceContext()); })()), "debug", array()))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "debug", array())) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
        // line 78
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 78, $this->getSourceContext()); })()), "phpversionextra", array())) {
            echo " title=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 78, $this->getSourceContext()); })()), "phpversion", array()) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 78, $this->getSourceContext()); })()), "phpversionextra", array())), "html", null, true);
            echo "\"";
        }
        echo ">
                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 79, $this->getSourceContext()); })()), "phpversion", array()), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 86, $this->getSourceContext()); })()), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 87, $this->getSourceContext()); })()), "hasapcu", array())) ? ("green") : ("red"));
        echo "\">APCu</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 88
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 88, $this->getSourceContext()); })()), "haszendopcache", array())) ? ("green") : ("red"));
        echo "\">OPcache</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 93, $this->getSourceContext()); })()), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 98
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "symfonyversion", array(), "any", true, true)) {
            // line 99
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        ";
            // line 102
            if (("Silex" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 102, $this->getSourceContext()); })()), "applicationname", array()))) {
                // line 103
                echo "                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        ";
            } else {
                // line 107
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 107, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony ";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 108, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
                echo " Docs
                            </a>
                        ";
            }
            // line 111
            echo "                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
        }
        // line 122
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 124
        echo "
    ";
        // line 125
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => (isset($context["block_status"]) || array_key_exists("block_status", $context) ? $context["block_status"] : (function () { throw new Twig_Error_Runtime('Variable "block_status" does not exist.', 125, $this->getSourceContext()); })()), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . (isset($context["symfony_version_status"]) || array_key_exists("symfony_version_status", $context) ? $context["symfony_version_status"] : (function () { throw new Twig_Error_Runtime('Variable "symfony_version_status" does not exist.', 125, $this->getSourceContext()); })())) . "\"")));
        echo "
";
        
        $__internal_df13eccaa6afcf0817e09c03ad0863e0d24599c827bb302d7d05467a42d16b23->leave($__internal_df13eccaa6afcf0817e09c03ad0863e0d24599c827bb302d7d05467a42d16b23_prof);

        
        $__internal_c6eeb3835b8acdedcf035511bee9b67f04e404bf4a0665ca0820895e10a61a8e->leave($__internal_c6eeb3835b8acdedcf035511bee9b67f04e404bf4a0665ca0820895e10a61a8e_prof);

    }

    // line 128
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49374a4734b7c58c556e368d865611765ddead9b5580811525d71603c9d2e6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49374a4734b7c58c556e368d865611765ddead9b5580811525d71603c9d2e6d9->enter($__internal_49374a4734b7c58c556e368d865611765ddead9b5580811525d71603c9d2e6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c583c6190189d6f1e478b56d8219c9d5d2098fd322a5dd6e65b8e2f34adbf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c583c6190189d6f1e478b56d8219c9d5d2098fd322a5dd6e65b8e2f34adbf83->enter($__internal_5c583c6190189d6f1e478b56d8219c9d5d2098fd322a5dd6e65b8e2f34adbf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 129
        echo "    <span class=\"label label-status-";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 129, $this->getSourceContext()); })()), "symfonyState", array()) == "eol")) ? ("red") : (((twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 129, $this->getSourceContext()); })()), "symfonyState", array()), array(0 => "eom", 1 => "dev"))) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 130
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_5c583c6190189d6f1e478b56d8219c9d5d2098fd322a5dd6e65b8e2f34adbf83->leave($__internal_5c583c6190189d6f1e478b56d8219c9d5d2098fd322a5dd6e65b8e2f34adbf83_prof);

        
        $__internal_49374a4734b7c58c556e368d865611765ddead9b5580811525d71603c9d2e6d9->leave($__internal_49374a4734b7c58c556e368d865611765ddead9b5580811525d71603c9d2e6d9_prof);

    }

    // line 135
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79fd4c46ad1827882a4e95ed81e64155d77ada396f9201460dac5183677bfa6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79fd4c46ad1827882a4e95ed81e64155d77ada396f9201460dac5183677bfa6d->enter($__internal_79fd4c46ad1827882a4e95ed81e64155d77ada396f9201460dac5183677bfa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d80e4d190c84ca589d9701dd540851f26db156340d27d9022b08d32fac24fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d80e4d190c84ca589d9701dd540851f26db156340d27d9022b08d32fac24fa4->enter($__internal_7d80e4d190c84ca589d9701dd540851f26db156340d27d9022b08d32fac24fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 136
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 136, $this->getSourceContext()); })()), "applicationname", array())) {
            // line 137
            echo "        ";
            // line 138
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 142, $this->getSourceContext()); })()), "applicationname", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 147, $this->getSourceContext()); })()), "applicationversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 153, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
            echo "</a>
        </p>
    ";
        } else {
            // line 156
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 160, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>

            ";
            // line 164
            if (("n/a" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 164, $this->getSourceContext()); })()), "appname", array()))) {
                // line 165
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 166, $this->getSourceContext()); })()), "appname", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>
            ";
            }
            // line 170
            echo "
            ";
            // line 171
            if (("n/a" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 171, $this->getSourceContext()); })()), "env", array()))) {
                // line 172
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 173, $this->getSourceContext()); })()), "env", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>
            ";
            }
            // line 177
            echo "
            ";
            // line 178
            if (("n/a" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 178, $this->getSourceContext()); })()), "debug", array()))) {
                // line 179
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 180
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 180, $this->getSourceContext()); })()), "debug", array())) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>
            ";
            }
            // line 184
            echo "        </div>

        ";
            // line 186
            $context["symfony_status"] = array("dev" => "Unstable Version", "stable" => "Stable Version", "eom" => "Maintenance Ended", "eol" => "Version Expired");
            // line 187
            echo "        ";
            $context["symfony_status_class"] = array("dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error");
            // line 188
            echo "        <table>
            <thead class=\"small\">
                <tr>
                    <th>Symfony Status</th>
                    <th>Bugs ";
            // line 192
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 192, $this->getSourceContext()); })()), "symfonystate", array()), array(0 => "eom", 1 => "eol"))) ? ("were") : ("are"));
            echo " fixed until</th>
                    <th>Security issues ";
            // line 193
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 193, $this->getSourceContext()); })()), "symfonystate", array()) == "eol")) ? ("were") : ("are"));
            echo " fixed until</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"font-normal\">
                        <span class=\"label status-";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["symfony_status_class"]) || array_key_exists("symfony_status_class", $context) ? $context["symfony_status_class"] : (function () { throw new Twig_Error_Runtime('Variable "symfony_status_class" does not exist.', 200, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 200, $this->getSourceContext()); })()), "symfonystate", array()), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["symfony_status"]) || array_key_exists("symfony_status", $context) ? $context["symfony_status"] : (function () { throw new Twig_Error_Runtime('Variable "symfony_status" does not exist.', 200, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 200, $this->getSourceContext()); })()), "symfonystate", array()), array(), "array")), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"font-normal\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 202, $this->getSourceContext()); })()), "symfonyeom", array()), "html", null, true);
            echo "</td>
                    <td class=\"font-normal\">";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 203, $this->getSourceContext()); })()), "symfonyeol", array()), "html", null, true);
            echo "</td>
                    <td class=\"font-normal\">
                        <a href=\"https://symfony.com/roadmap?version=";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 205, $this->getSourceContext()); })()), "symfonyminorversion", array()), "html", null, true);
            echo "#checker\">View roadmap</a>
                    </td>
                </tr>
            </tbody>
        </table>
    ";
        }
        // line 211
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 216, $this->getSourceContext()); })()), "phpversion", array()), "html", null, true);
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 216, $this->getSourceContext()); })()), "phpversionextra", array())) {
            echo " <span class=\"unit\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 216, $this->getSourceContext()); })()), "phpversionextra", array()), "html", null, true);
            echo "</span>";
        }
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 221, $this->getSourceContext()); })()), "phparchitecture", array()), "html", null, true);
        echo " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 226, $this->getSourceContext()); })()), "phpintllocale", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 231, $this->getSourceContext()); })()), "phptimezone", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 238
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 238, $this->getSourceContext()); })()), "haszendopcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 243
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 243, $this->getSourceContext()); })()), "hasapcu", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APCu</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 248
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 248, $this->getSourceContext()); })()), "hasxdebug", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 257
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 257, $this->getSourceContext()); })()), "bundles", array())) {
            // line 258
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 258, $this->getSourceContext()); })()), "bundles", array())), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 267, $this->getSourceContext()); })()), "bundles", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 268
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 269
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 270
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 270, $this->getSourceContext()); })()), "bundles", array()), $context["name"], array(), "array")));
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_7d80e4d190c84ca589d9701dd540851f26db156340d27d9022b08d32fac24fa4->leave($__internal_7d80e4d190c84ca589d9701dd540851f26db156340d27d9022b08d32fac24fa4_prof);

        
        $__internal_79fd4c46ad1827882a4e95ed81e64155d77ada396f9201460dac5183677bfa6d->leave($__internal_79fd4c46ad1827882a4e95ed81e64155d77ada396f9201460dac5183677bfa6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 273,  621 => 270,  617 => 269,  614 => 268,  610 => 267,  597 => 258,  595 => 257,  589 => 254,  580 => 248,  572 => 243,  564 => 238,  554 => 231,  546 => 226,  538 => 221,  525 => 216,  518 => 211,  509 => 205,  504 => 203,  500 => 202,  493 => 200,  483 => 193,  479 => 192,  473 => 188,  470 => 187,  468 => 186,  464 => 184,  457 => 180,  454 => 179,  452 => 178,  449 => 177,  442 => 173,  439 => 172,  437 => 171,  434 => 170,  427 => 166,  424 => 165,  422 => 164,  415 => 160,  409 => 156,  403 => 153,  394 => 147,  386 => 142,  380 => 138,  378 => 137,  375 => 136,  366 => 135,  352 => 130,  347 => 129,  338 => 128,  326 => 125,  323 => 124,  319 => 122,  306 => 111,  300 => 108,  295 => 107,  289 => 103,  287 => 102,  282 => 99,  280 => 98,  272 => 93,  264 => 88,  260 => 87,  256 => 86,  247 => 80,  243 => 79,  235 => 78,  228 => 73,  220 => 70,  216 => 68,  214 => 67,  211 => 66,  205 => 63,  201 => 61,  199 => 60,  196 => 59,  190 => 56,  186 => 54,  184 => 53,  179 => 50,  173 => 48,  165 => 46,  163 => 45,  157 => 41,  151 => 38,  147 => 37,  144 => 36,  142 => 35,  139 => 34,  137 => 33,  134 => 32,  131 => 31,  126 => 29,  121 => 27,  118 => 26,  116 => 25,  112 => 24,  107 => 23,  104 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if 'unknown' == collector.symfonyState %}
        {% set block_status = '' %}
        {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
    {% elseif 'eol' == collector.symfonyState %}
        {% set block_status = 'red' %}
        {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
    {% elseif 'eom' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
    {% elseif 'dev' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
    {% else %}
        {% set block_status = '' %}
        {% set symfony_version_status = '' %}
    {% endif %}

    {% set icon %}
        {% if collector.applicationname %}
            <span class=\"sf-toolbar-label\">{{ collector.applicationname }}</span>
            <span class=\"sf-toolbar-value\">{{ collector.applicationversion }}</span>
        {% elseif collector.symfonyState is defined %}
            <span class=\"sf-toolbar-label\">
                {{ include('@WebProfiler/Icon/symfony.svg') }}
            </span>
            <span class=\"sf-toolbar-value\">{{ collector.symfonyversion }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            {% if collector.applicationname %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ collector.applicationname }}</b>
                    <span>{{ collector.applicationversion }}</span>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>

            {% if 'n/a' is not same as(collector.appname) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>{{ collector.appname }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.env) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>{{ collector.env }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.debug) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                </div>
            {% endif %}
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span{% if collector.phpversionextra %} title=\"{{ collector.phpversion ~ collector.phpversionextra }}\"{% endif %}>
                    {{ collector.phpversion }}
                    &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasapcu ? 'green' : 'red' }}\">APCu</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.haszendopcache ? 'green' : 'red' }}\">OPcache</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            {% if collector.symfonyversion is defined %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        {% if 'Silex' == collector.applicationname %}
                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        {% else %}
                            <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
                                Read Symfony {{ collector.symfonyversion }} Docs
                            </a>
                        {% endif %}
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right', block_attrs: 'title=\"' ~ symfony_version_status ~ '\"' }) }}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/config.svg') }}</span>
        <strong>Configuration</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.applicationname %}
        {# this application is not the Symfony framework #}
        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationname }}</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationversion }}</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony {{ collector.symfonyversion }}</a>
        </p>
    {% else %}
        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.symfonyversion }}</span>
                <span class=\"label\">Symfony version</span>
            </div>

            {% if 'n/a' != collector.appname %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.appname }}</span>
                    <span class=\"label\">Application name</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.env %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.env }}</span>
                    <span class=\"label\">Environment</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.debug %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                    <span class=\"label\">Debug</span>
                </div>
            {% endif %}
        </div>

        {% set symfony_status = { dev: 'Unstable Version', stable: 'Stable Version', eom: 'Maintenance Ended', eol: 'Version Expired' } %}
        {% set symfony_status_class = { dev: 'warning', stable: 'success', eom: 'warning', eol: 'error' } %}
        <table>
            <thead class=\"small\">
                <tr>
                    <th>Symfony Status</th>
                    <th>Bugs {{ collector.symfonystate in ['eom', 'eol'] ? 'were' : 'are' }} fixed until</th>
                    <th>Security issues {{ collector.symfonystate == 'eol' ? 'were' : 'are' }} fixed until</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"font-normal\">
                        <span class=\"label status-{{ symfony_status_class[collector.symfonystate] }}\">{{ symfony_status[collector.symfonystate]|upper }}</span>
                    </td>
                    <td class=\"font-normal\">{{ collector.symfonyeom }}</td>
                    <td class=\"font-normal\">{{ collector.symfonyeol }}</td>
                    <td class=\"font-normal\">
                        <a href=\"https://symfony.com/roadmap?version={{ collector.symfonyminorversion }}#checker\">View roadmap</a>
                    </td>
                </tr>
            </tbody>
        </table>
    {% endif %}

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpversion }}{% if collector.phpversionextra %} <span class=\"unit\">{{ collector.phpversionextra }}</span>{% endif %}</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phparchitecture }} <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpintllocale }}</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phptimezone }}</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasapcu ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">APCu</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <p>
        <a href=\"{{ path('_profiler_phpinfo') }}\">View full PHP configuration</a>
    </p>

    {% if collector.bundles %}
        <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.bundles|keys|sort %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">{{ name }}</th>
                    <td class=\"font-normal\">{{ profiler_dump(collector.bundles[name]) }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:config.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/config.html.twig");
    }
}
