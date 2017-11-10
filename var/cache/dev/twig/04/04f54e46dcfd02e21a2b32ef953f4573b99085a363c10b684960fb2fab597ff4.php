<?php

/* WebProfilerBundle:Profiler:profiler.css.twig */
class __TwigTemplate_fc335bfc77f2b391a9857641ab6d811d2bcfb14127e5b32027876b8ceeff649b extends Twig_Template
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
        $__internal_9b089898b2920e914f586027f2152271dca9eeb04a4eb1dd070e43d507337e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b089898b2920e914f586027f2152271dca9eeb04a4eb1dd070e43d507337e5a->enter($__internal_9b089898b2920e914f586027f2152271dca9eeb04a4eb1dd070e43d507337e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:profiler.css.twig"));

        $__internal_0f523f911ce1274c7972c086ed7b7d6d7800f2a380d9240cbbd05720d1f35802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f523f911ce1274c7972c086ed7b7d6d7800f2a380d9240cbbd05720d1f35802->enter($__internal_0f523f911ce1274c7972c086ed7b7d6d7800f2a380d9240cbbd05720d1f35802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:profiler.css.twig"));

        // line 3
        $context["mixins"] = array("break_long_words" => "-ms-word-break: break-all; word-break: break-all; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto;", "monospace_font" => "font-family: monospace; font-size: 13px; font-size-adjust: 0.5;", "sans_serif_font" => "font-family: Helvetica, Arial, sans-serif;", "subtle_border_and_shadow" => "background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);");
        // line 9
        echo "
";
        // line 11
        $context["colors"] = array("success" => "#4F805D", "warning" => "#A46A1F", "error" => "#B0413E");
        // line 12
        echo "
";
        // line 16
        echo "html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

";
        // line 20
        echo "html, body  {
    height: 100%;
    width: 100%;
}
body {
    background-color: #F9F9F9;
    color: #222;
    display: flex;
    flex-direction: column;
    ";
        // line 29
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 29, $this->getSourceContext()); })()), "sans_serif_font", array());
        echo "
    font-size: 14px;
    line-height: 1.4;
}

h2, h3, h4 {
    font-weight: 500;
    margin: 1.5em 0 .5em;
}
h2 + h3,
h3 + h4 {
    margin-top: 1em;
}
h2 {
    font-size: 24px;
}
h3 {
    font-size: 21px;
}
h4 {
    font-size: 18px;
}
h2 span, h3 span, h4 span,
h2 small, h3 small, h4 small {
    color: #999;
}

li {
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 1em;
}

a {
    color: #218BC3;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
a.link-inverse {
    text-decoration: underline;
}
a.link-inverse:hover {
    text-decoration: none;
}
a:active,
a:hover {
    outline: 0;
}
h2 a,
h3 a,
h4 a {
    text-decoration: underline;
}
h2 a:hover,
h3 a:hover,
h4 a:hover {
    text-decoration: none;
}

abbr {
    border-bottom: 1px dotted #444;
    cursor: help;
}

code, pre {
    ";
        // line 99
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 99, $this->getSourceContext()); })()), "monospace_font", array());
        echo "
}

";
        // line 104
        echo "button {
    ";
        // line 105
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 105, $this->getSourceContext()); })()), "sans_serif_font", array());
        echo "
}
.btn {
    background: #777;
    border-radius: 2px;
    border: 0;
    color: #F5F5F5;
    display: inline-block;
    padding: .5em .75em;
}
.btn:hover {
    cursor: pointer;
    opacity: 0.8;
    text-decoration: none;
}
.btn-sm {
    font-size: 12px;
}
.btn-sm svg {
    height: 16px;
    width: 16px;
    vertical-align: middle;
}
.btn-link {
    border-color: transparent;
    color: #218BC3;
    text-decoration: none;
    background-color: transparent;
    outline: none;
    border: 0;
    padding: 0;
    cursor: pointer;
}
.btn-link:hover {
    text-decoration: underline;
}
";
        // line 143
        echo "table, tr, th, td {
    background: #FFF;
    border-collapse: collapse;
    line-height: 1.5;
    vertical-align: top;
}
table {
    ";
        // line 150
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 150, $this->getSourceContext()); })()), "subtle_border_and_shadow", array());
        echo ";
    margin: 1em 0;
    width: 100%;
}

table th, table td {
    padding: 8px 10px;
}

table th {
    font-weight: bold;
    text-align: left;
}
table thead th {
    background-color: #E0E0E0;
}
table thead th.key {
    width: 19%;
}
table thead.small th {
    font-size: 12px;
    padding: 4px 10px;
}

table tbody th,
table tbody td {
    ";
        // line 176
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 176, $this->getSourceContext()); })()), "monospace_font", array());
        echo "
    border: 1px solid #E0E0E0;
    border-width: 1px 0;
}

table tbody td {
    ";
        // line 182
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 182, $this->getSourceContext()); })()), "break_long_words", array());
        echo "
}

table tbody div {
    margin: .25em 0;
}
table tbody ul {
    margin: 0;
    padding: 0 0 0 1em;
}

";
        // line 195
        echo ".block {
    display: block;
}
.full-width {
    width: 100%;
}
.hidden {
    display: none;
}
.nowrap {
    white-space: pre;
}
.prewrap {
    white-space: pre-wrap;
}
.newline {
    display: block;
}
.break-long-words {
    ";
        // line 214
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 214, $this->getSourceContext()); })()), "break_long_words", array());
        echo "
}
.text-small {
    font-size: 12px !important;
}
.text-muted {
    color: #999;
}
.text-bold {
    font-weight: bold;
}
.text-right {
    text-align: right;
}
.text-center {
    text-align: center;
}
.font-normal {
    ";
        // line 232
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 232, $this->getSourceContext()); })()), "sans_serif_font", array());
        echo "
    font-size: 14px;
}
.help {
    color: #999;
    font-size: 14px;
    margin-bottom: .5em;
}
.empty {
    border: 4px dashed #E0E0E0;
    color: #999;
    margin: 1em 0;
    padding: .5em 2em;
}

.label {
    background-color: #666;
    color: #FAFAFA;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    padding: 3px 7px;
    white-space: nowrap;
}
.label.same-width {
    min-width: 70px;
    text-align: center;
}
.label.status-success { background: ";
        // line 260
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 260, $this->getSourceContext()); })()), "success", array());
        echo "; color: #FFF; }
.label.status-warning { background: ";
        // line 261
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 261, $this->getSourceContext()); })()), "warning", array());
        echo "; color: #FFF; }
.label.status-error   { background: ";
        // line 262
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 262, $this->getSourceContext()); })()), "error", array());
        echo "; color: #FFF; }

";
        // line 266
        echo ".metrics {
    margin: 1em 0 0;
    overflow: auto;
}
.metrics .metric {
    float: left;
    margin: 0 1em 1em 0;
}

.metric {
    ";
        // line 276
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 276, $this->getSourceContext()); })()), "subtle_border_and_shadow", array());
        echo ";
    min-width: 100px;
    min-height: 70px;
}
.metric .value {
    display: block;
    font-size: 28px;
    padding: 8px 15px 4px;
    text-align: center;
}
.metric .value svg {
    margin: 5px 0 -5px;
}
.metric .unit {
    color: #999;
    font-size: 18px;
    margin-left: -4px;
}
.metric .label {
    background: #E0E0E0;
    color: #222;
    display: block;
    font-size: 12px;
    padding: 5px;
    text-align: center;
}

.metrics-horizontal .metric {
    min-height: 0;
    min-width: 0;
}
.metrics-horizontal .metric .value,
.metrics-horizontal .metric .label {
    display: inline;
    padding: 2px 6px;
}
.metrics-horizontal .metric .label {
    display: inline-block;
    padding: 6px;
}
.metrics-horizontal .metric .value {
    font-size: 16px;
}
.metrics-horizontal .metric .value svg {
    max-height: 14px;
    line-height: 10px;
    margin: 0;
    padding-left: 4px;
    vertical-align: middle;
}

.metric-divider {
    float: left;
    margin: 0 1em;
    min-height: 1px; ";
        // line 331
        echo "}

";
        // line 335
        echo ".card {
    ";
        // line 336
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 336, $this->getSourceContext()); })()), "subtle_border_and_shadow", array());
        echo ";
    margin: 1em 0;
    padding: 10px;
}
.card-block + .card-block {
    border-top: 1px solid #E0E0E0;
    padding-top: 10px;
}
.card *:first-child,
.card-block *:first-child {
    margin-top: 0;
}
.card .label {
    background-color: #EEE;
    color: #222;
}

";
        // line 355
        echo ".status-success {
    background: rgba(94, 151, 110, 0.3);
}
.status-warning {
    background: rgba(240, 181, 24, 0.3);
}
.status-error {
    background: rgba(176, 65, 62, 0.2);
}
.status-success td,
.status-warning td,
.status-error td {
    background: transparent;
}
tr.status-error td,
tr.status-warning td {
    border-bottom: 1px solid #FAFAFA;
    border-top: 1px solid #FAFAFA;
}

.status-warning .colored {
    color: ";
        // line 376
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 376, $this->getSourceContext()); })()), "warning", array());
        echo ";
}
.status-error .colored  {
    color: ";
        // line 379
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 379, $this->getSourceContext()); })()), "error", array());
        echo ";
}

";
        // line 384
        echo ".highlight pre {
    margin: 0;
    white-space: pre-wrap;
}

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
        // line 401
        echo ".sf-icon {
    vertical-align: middle;
    background-repeat: no-repeat;
    background-size: contain;
    width: 16px;
    height: 16px;
    display: inline-block;
}
.sf-icon svg {
    width: 16px;
    height: 16px;
}
.sf-icon.sf-medium,
.sf-icon.sf-medium svg {
    width: 24px;
    height: 24px;
}
.sf-icon.sf-large,
.sf-icon.sf-large svg {
    width: 32px;
    height: 32px;
}


";
        // line 427
        echo ".container {
    max-width: 1300px;
    padding-right: 15px;
}
#header {
    flex: 0 0 auto;
}
#header .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
#summary {
    flex: 0 0 auto;
}
#content {
    height: 100%;
}
#main {
    display: flex;
    flex-direction: row;
    min-height: 100%;
}
#sidebar {
    flex: 0 0 220px;
}
#collector-wrapper {
    flex: 0 1 100%;
    min-width: 0;
}
#collector-content {
    margin: 0 0 30px 0;
    padding: 14px 0 14px 20px;
}

#main h2:first-of-type {
    margin-top: 0;
}

";
        // line 468
        echo "#header {
    background-color: #222;
    overflow: hidden;
}
#header h1 {
    color: #FFF;
    flex: 1;
    font-weight: normal;
    font-size: 21px;
    margin: 0;
    padding: 10px 10px 8px;
}
#header h1 span {
    color: #CCC;
}
#header h1 svg {
    height: 40px;
    width: 40px;
    margin-top: -4px;
    vertical-align: middle;
}
#header h1 svg path,
#header h1 svg .sf-svg-path {
    fill: #FFF;
}
#header .search {
    padding-top: 11px;
}
#header .search input {
    border: 1px solid #DDD;
    margin-right: 4px;
    padding: 7px 8px;
    width: 200px;
}

";
        // line 505
        echo "#summary .status {
    background: #E0E0E0;
    border: solid rgba(0, 0, 0, 0.1);
    border-width: 2px 0;
    padding: 10px;
}
#summary h2,
#summary h2 a {
    color: #222;
    font-size: 21px;
    margin: 0;
    text-decoration: none;
}
#summary h2 a:hover {
    text-decoration: underline;
}

#summary .status-success { background: ";
        // line 522
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 522, $this->getSourceContext()); })()), "success", array());
        echo "; }
#summary .status-warning { background: ";
        // line 523
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 523, $this->getSourceContext()); })()), "warning", array());
        echo "; }
#summary .status-error   { background: ";
        // line 524
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 524, $this->getSourceContext()); })()), "error", array());
        echo ";   }

#summary .status-success h2,
#summary .status-success a,
#summary .status-warning h2,
#summary .status-warning a,
#summary .status-error h2,
#summary .status-error a {
    color: #FFF;
}

#summary dl.metadata,
#summary dl.metadata a {
    margin: 5px 0 0;
    color: rgba(255, 255, 255, 0.75);
}
#summary dl.metadata dt,
#summary dl.metadata dd {
    display: inline-block;
    font-size: 13px;
}
#summary dl.metadata dt {
    font-weight: bold;
}
#summary dl.metadata dt:after {
    content: ':';
}
#summary dl.metadata dd {
    margin: 0 1.5em 0 0;
}

#summary dl.metadata .label {
    background: rgba(255, 255, 255, 0.2);
}

";
        // line 561
        echo "#sidebar {
    background: #444;
    color: #CCC;
    padding-bottom: 30px;
    position: relative;
    width: 220px;
    z-index: 9999;
}
#sidebar .module {
    padding: 10px;
    width: 220px;
}

";
        // line 576
        echo "#sidebar #sidebar-shortcuts {
    background: #333;
    width: 220px;
}
#sidebar #sidebar-shortcuts .shortcuts {
    position: relative;
    padding: 16px 10px;
}
#sidebar-shortcuts .icon {
    display: block;
    float: left;
    width: 50px;
    margin: 2px 0 0 -10px;
    text-align: center;
}
#sidebar #sidebar-shortcuts .btn {
    color: #F5F5F5;
}
#sidebar #sidebar-shortcuts .btn + .btn {
    margin-left: 5px;
}
#sidebar #sidebar-shortcuts .btn {
    padding: .5em;
}

";
        // line 603
        echo "#sidebar-search .form-group:first-of-type {
    padding-top: 20px;
}
#sidebar-search .form-group {
    clear: both;
    overflow: hidden;
    padding-bottom: 10px;
}
#sidebar-search .form-group label {
    float: left;
    font-size: 13px;
    line-height: 24px;
    width: 60px;
}
#sidebar-search .form-group input,
#sidebar-search .form-group select {
    float: left;
    font-size: 13px;
    padding: 3px 6px;
}
#sidebar-search .form-group input {
    background: #CCC;
    border: 1px solid #999;
    color: #222;
    width: 120px;
}
#sidebar-search .form-group select {
    color: #222;
}
#sidebar-search .form-group .btn {
    float: right;
    margin-right: 10px;
}

";
        // line 639
        echo "#menu-profiler {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
#menu-profiler li {
    position: relative;
    margin-bottom: 0;
}
#menu-profiler li a {
    border: solid transparent;
    border-width: 2px 0;
    color: #CCC;
    display: block;
}
#menu-profiler li a:hover {
    text-decoration: none;
}
#menu-profiler li a .label {
    background: transparent;
    color: #EEE;
    display: block;
    padding: 8px 10px 8px 50px;
    overflow: hidden;
    white-space: nowrap;
}
#menu-profiler li a .label .icon {
    display: block;
    position: absolute;
    left: 0;
    top: 8px;
    width: 50px;
    text-align: center;
}
#menu-profiler .label .icon img,
#menu-profiler .label .icon svg {
    height: 24px;
    max-width: 24px;
}
#menu-profiler li a .label .icon svg path,
#menu-profiler li a .label .icon svg .sf-svg-path {
    fill: #DDD;
}
#menu-profiler li a .label strong {
    font-size: 16px;
    font-weight: normal;
}
#menu-profiler li a .label.disabled {
    opacity: .25;
}
#menu-profiler li a:hover .label.disabled,
#menu-profiler li.selected a .label.disabled {
    opacity: 1;
}

#menu-profiler li.selected a,
#menu-profiler:hover li.selected a:hover,
#menu-profiler li a:hover {
    background: #666;
    border: solid #555;
    border-width: 2px 0;
}
#menu-profiler li.selected a .label,
#menu-profiler li a:hover .label {
    color: #FFF;
}
#menu-profiler li.selected a .icon svg path,
#menu-profiler li.selected a .icon svg .sf-svg-path,
#menu-profiler li a:hover .icon svg path,
#menu-profiler li a:hover .icon svg .sf-svg-path {
    fill: #FFF;
}

#menu-profiler li a .count {
    background-color: #666;
    color: #FFF;
    display: inline-block;
    font-weight: bold;
    min-width: 10px;
    padding: 2px 6px;
    position: absolute;
    right: 10px;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
}
#menu-profiler li a span.count span {
    font-size: 12px;

}
#menu-profiler li a span.count span + span::before {
    content: \" / \";
    color: #AAA;
}

#menu-profiler .label-status-warning .count {
    background: ";
        // line 735
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 735, $this->getSourceContext()); })()), "warning", array());
        echo ";
}
#menu-profiler .label-status-error .count {
    background: ";
        // line 738
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 738, $this->getSourceContext()); })()), "error", array());
        echo ";
}

";
        // line 743
        echo "#timeline-control {
    background: #FFF;
    margin: 1em 0;
    padding: 10px;
}
#timeline-control label {
    font-weight: bold;
    margin-right: 1em;
}
#timeline-control input {
    font-size: 16px;
    padding: 4px;
    text-align: right;
    width: 40px;
}
#timeline-control .help {
    margin-left: 1em;
}

.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left: solid 14px;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #DDD;
    background: #FFF;
    margin: .5em 0;
}
.sf-profiler-timeline + p.help {
    margin-top: 0;
}

";
        // line 781
        echo ".tab-navigation {
    margin: 0 0 1em 0;
    padding: 0;
}
.tab-navigation li {
    background: #FFF;
    border: 1px solid #DDD;
    color: #444;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    margin: 0 0 0 -1px;
    padding: .5em .75em;
    z-index: 1;
}
.tab-navigation li:hover {
    background: #EEE;
}
.tab-navigation li .badge {
    background-color: #F5F5F5;
    color: #777;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin-left: 8px;
    min-width: 10px;
    padding: 1px 6px;
    text-align: center;
    white-space: nowrap;
}
.tab-navigation li:hover .badge {
    background: #FAFAFA;
    color: #777;
}
.tab-navigation li.disabled {
    background: #F5F5F5;
    color: #999;
}
.tab-navigation li.active {
    background: #666;
    border-color: #666;
    color: #FAFAFA;
    z-index: 1100;
}
.tab-navigation li.active .badge {
    background-color: #444;
    color: #FFF;
}
.tab-content > *:first-child {
    margin-top: 0;
}
.tab-navigation li .badge.status-warning { background: ";
        // line 832
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 832, $this->getSourceContext()); })()), "warning", array());
        echo "; color: #FFF; }
.tab-navigation li .badge.status-error { background: ";
        // line 833
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 833, $this->getSourceContext()); })()), "error", array());
        echo "; color: #FFF; }

.sf-tabs .tab:not(:first-child) { display: none; }

";
        // line 839
        echo ".sf-toggle-content {
    -moz-transition: display .25s ease;
    -webkit-transition: display .25s ease;
    transition: display .25s ease;
}
.sf-toggle-content.sf-toggle-hidden {
    display: none;
}
.sf-toggle-content.sf-toggle-visible {
    display: block;
}

";
        // line 853
        echo "#twig-dump pre {
    font-size: 12px;
    line-height: 1.7;
}
#twig-dump span {
    border-radius: 2px;
    padding: 1px 2px;
}
#twig-dump .status-error   { background: transparent; color: #B0413E; }
#twig-dump .status-warning { background: rgba(240, 181, 24, 0.3);     }
#twig-dump .status-success { background: rgba(100, 189, 99, 0.2);     }

";
        // line 867
        echo "table.logs .metadata {
    display: block;
    font-size: 12px;
}

";
        // line 874
        echo ".sql-runnable {
    background: #F5F5F5;
    margin: .5em 0;
    padding: 1em;
}
.queries-table pre {
    ";
        // line 880
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 880, $this->getSourceContext()); })()), "break_long_words", array());
        echo "
    margin: 0;
    white-space: pre-wrap;
}

";
        // line 887
        echo "#collector-content .sf-dump {
    margin-bottom: 2em;
}
#collector-content pre.sf-dump,
#collector-content .sf-dump code,
#collector-content .sf-dump samp {
    ";
        // line 893
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 893, $this->getSourceContext()); })()), "monospace_font", array());
        echo "
}
#collector-content .sf-dump a {
    cursor: pointer;
}
#collector-content .sf-dump pre.sf-dump,
#collector-content .sf-dump .trace {
    border: 1px solid #DDD;
    background: #FFF;
    padding: 10px;
    margin: 0.5em 0;
}

#collector-content pre.sf-dump,
#collector-content .sf-dump-default {
    color: #CC7832;
    background: none;
}
#collector-content .sf-dump-str { color: #629755; }
#collector-content .sf-dump-private,
#collector-content .sf-dump-protected,
#collector-content .sf-dump-public { color: #262626; }
#collector-content .sf-dump-note { color: #6897BB; }
#collector-content .sf-dump-key { color: #789339; }
#collector-content .sf-dump-ref { color: #6E6E6E; }
#collector-content .sf-dump-ellipsis { color: #CC7832; max-width: 100em; }
#collector-content .sf-dump-ellipsis-path { max-width: 5em; }

#collector-content .sf-dump {
    margin: 0;
    padding: 0;
    line-height: 1.4;
}

#collector-content .dump-inline .sf-dump {
    display: inline;
    white-space: normal;
    font-size: inherit;
    line-height: inherit;
}
#collector-content .dump-inline .sf-dump:after {
    display: none;
}

#collector-content .sf-dump .trace {
    font-size: 12px;
}
#collector-content .sf-dump .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .sf-dump .trace li.selected {
    background: rgba(255, 255, 153, 0.5);
}

";
        // line 950
        echo "#search-results td {
    ";
        // line 951
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mixins"]) || array_key_exists("mixins", $context) ? $context["mixins"] : (function () { throw new Twig_Error_Runtime('Variable "mixins" does not exist.', 951, $this->getSourceContext()); })()), "sans_serif_font", array());
        echo "
    vertical-align: middle;
}

#search-results .sf-search {
    visibility: hidden;
    margin-left: 2px;
}
#search-results tr:hover .sf-search {
    visibility: visible;
}

";
        // line 965
        echo "
.visible-small {
    display: none;
}
.hidden-small {
    display: inherit;
}

@media (max-width: 768px) {
    #sidebar {
        flex-basis: 50px;
        overflow-x: hidden;
        transition: flex-basis 200ms ease-out;
    }
    #sidebar:hover, #sidebar.expanded {
        flex-basis: 220px;
    }

    #sidebar-search {
        display: none;
    }
    #sidebar:hover #sidebar-search.sf-toggle-visible, #sidebar.expanded #sidebar-search.sf-toggle-visible {
        display: block;
    }

    #sidebar .module {
        display: none;
    }
    #sidebar:hover .module, #sidebar.expanded .module {
        display: block;
    }

    #sidebar:not(:hover):not(.expanded) .label .count {
        border-radius: 50%;
        border: 1px solid #eee;
        height: 8px;
        min-width: 0;
        padding: 0;
        right: 4px;
        text-indent: -9999px;
        top: 50%;
        width: 8px;
    }

    .visible-small {
        display: inherit;
    }
    .hidden-small {
        display: none;
    }

    .btn-sm svg {
        margin-left: 2px;
    }
}
";
        
        $__internal_9b089898b2920e914f586027f2152271dca9eeb04a4eb1dd070e43d507337e5a->leave($__internal_9b089898b2920e914f586027f2152271dca9eeb04a4eb1dd070e43d507337e5a_prof);

        
        $__internal_0f523f911ce1274c7972c086ed7b7d6d7800f2a380d9240cbbd05720d1f35802->leave($__internal_0f523f911ce1274c7972c086ed7b7d6d7800f2a380d9240cbbd05720d1f35802_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:profiler.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1060 => 965,  1045 => 951,  1042 => 950,  984 => 893,  976 => 887,  968 => 880,  960 => 874,  953 => 867,  939 => 853,  925 => 839,  918 => 833,  914 => 832,  861 => 781,  823 => 743,  817 => 738,  811 => 735,  713 => 639,  677 => 603,  650 => 576,  635 => 561,  597 => 524,  593 => 523,  589 => 522,  570 => 505,  533 => 468,  492 => 427,  466 => 401,  449 => 384,  443 => 379,  437 => 376,  414 => 355,  394 => 336,  391 => 335,  387 => 331,  330 => 276,  318 => 266,  313 => 262,  309 => 261,  305 => 260,  274 => 232,  253 => 214,  232 => 195,  218 => 182,  209 => 176,  180 => 150,  171 => 143,  132 => 105,  129 => 104,  123 => 99,  50 => 29,  39 => 20,  35 => 16,  32 => 12,  30 => 11,  27 => 9,  25 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Mixins
   ========================================================================= #}
{% set mixins = {
    'break_long_words': '-ms-word-break: break-all; word-break: break-all; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto;',
    'monospace_font': 'font-family: monospace; font-size: 13px; font-size-adjust: 0.5;',
    'sans_serif_font': 'font-family: Helvetica, Arial, sans-serif;',
    'subtle_border_and_shadow': 'background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);'
} %}

{# when updating any of these colors, do the same in toolbar.css.twig #}
{% set colors = { 'success': '#4F805D', 'warning': '#A46A1F', 'error': '#B0413E' } %}

{# Normalization
   (normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css)
   ========================================================================= #}
html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

{# Basic styles
   ========================================================================= #}
html, body  {
    height: 100%;
    width: 100%;
}
body {
    background-color: #F9F9F9;
    color: #222;
    display: flex;
    flex-direction: column;
    {{ mixins.sans_serif_font|raw }}
    font-size: 14px;
    line-height: 1.4;
}

h2, h3, h4 {
    font-weight: 500;
    margin: 1.5em 0 .5em;
}
h2 + h3,
h3 + h4 {
    margin-top: 1em;
}
h2 {
    font-size: 24px;
}
h3 {
    font-size: 21px;
}
h4 {
    font-size: 18px;
}
h2 span, h3 span, h4 span,
h2 small, h3 small, h4 small {
    color: #999;
}

li {
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 1em;
}

a {
    color: #218BC3;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
a.link-inverse {
    text-decoration: underline;
}
a.link-inverse:hover {
    text-decoration: none;
}
a:active,
a:hover {
    outline: 0;
}
h2 a,
h3 a,
h4 a {
    text-decoration: underline;
}
h2 a:hover,
h3 a:hover,
h4 a:hover {
    text-decoration: none;
}

abbr {
    border-bottom: 1px dotted #444;
    cursor: help;
}

code, pre {
    {{ mixins.monospace_font|raw }}
}

{# Buttons
   ------------------------------------------------------------------------- #}
button {
    {{ mixins.sans_serif_font|raw }}
}
.btn {
    background: #777;
    border-radius: 2px;
    border: 0;
    color: #F5F5F5;
    display: inline-block;
    padding: .5em .75em;
}
.btn:hover {
    cursor: pointer;
    opacity: 0.8;
    text-decoration: none;
}
.btn-sm {
    font-size: 12px;
}
.btn-sm svg {
    height: 16px;
    width: 16px;
    vertical-align: middle;
}
.btn-link {
    border-color: transparent;
    color: #218BC3;
    text-decoration: none;
    background-color: transparent;
    outline: none;
    border: 0;
    padding: 0;
    cursor: pointer;
}
.btn-link:hover {
    text-decoration: underline;
}
{# Tables
   ------------------------------------------------------------------------- #}
table, tr, th, td {
    background: #FFF;
    border-collapse: collapse;
    line-height: 1.5;
    vertical-align: top;
}
table {
    {{ mixins.subtle_border_and_shadow|raw }};
    margin: 1em 0;
    width: 100%;
}

table th, table td {
    padding: 8px 10px;
}

table th {
    font-weight: bold;
    text-align: left;
}
table thead th {
    background-color: #E0E0E0;
}
table thead th.key {
    width: 19%;
}
table thead.small th {
    font-size: 12px;
    padding: 4px 10px;
}

table tbody th,
table tbody td {
    {{ mixins.monospace_font|raw }}
    border: 1px solid #E0E0E0;
    border-width: 1px 0;
}

table tbody td {
    {{ mixins.break_long_words|raw }}
}

table tbody div {
    margin: .25em 0;
}
table tbody ul {
    margin: 0;
    padding: 0 0 0 1em;
}

{# Utility classes
   ========================================================================= #}
.block {
    display: block;
}
.full-width {
    width: 100%;
}
.hidden {
    display: none;
}
.nowrap {
    white-space: pre;
}
.prewrap {
    white-space: pre-wrap;
}
.newline {
    display: block;
}
.break-long-words {
    {{ mixins.break_long_words|raw }}
}
.text-small {
    font-size: 12px !important;
}
.text-muted {
    color: #999;
}
.text-bold {
    font-weight: bold;
}
.text-right {
    text-align: right;
}
.text-center {
    text-align: center;
}
.font-normal {
    {{ mixins.sans_serif_font|raw }}
    font-size: 14px;
}
.help {
    color: #999;
    font-size: 14px;
    margin-bottom: .5em;
}
.empty {
    border: 4px dashed #E0E0E0;
    color: #999;
    margin: 1em 0;
    padding: .5em 2em;
}

.label {
    background-color: #666;
    color: #FAFAFA;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    padding: 3px 7px;
    white-space: nowrap;
}
.label.same-width {
    min-width: 70px;
    text-align: center;
}
.label.status-success { background: {{ colors.success|raw }}; color: #FFF; }
.label.status-warning { background: {{ colors.warning|raw }}; color: #FFF; }
.label.status-error   { background: {{ colors.error|raw }}; color: #FFF; }

{# Metrics
   ------------------------------------------------------------------------- #}
.metrics {
    margin: 1em 0 0;
    overflow: auto;
}
.metrics .metric {
    float: left;
    margin: 0 1em 1em 0;
}

.metric {
    {{ mixins.subtle_border_and_shadow|raw }};
    min-width: 100px;
    min-height: 70px;
}
.metric .value {
    display: block;
    font-size: 28px;
    padding: 8px 15px 4px;
    text-align: center;
}
.metric .value svg {
    margin: 5px 0 -5px;
}
.metric .unit {
    color: #999;
    font-size: 18px;
    margin-left: -4px;
}
.metric .label {
    background: #E0E0E0;
    color: #222;
    display: block;
    font-size: 12px;
    padding: 5px;
    text-align: center;
}

.metrics-horizontal .metric {
    min-height: 0;
    min-width: 0;
}
.metrics-horizontal .metric .value,
.metrics-horizontal .metric .label {
    display: inline;
    padding: 2px 6px;
}
.metrics-horizontal .metric .label {
    display: inline-block;
    padding: 6px;
}
.metrics-horizontal .metric .value {
    font-size: 16px;
}
.metrics-horizontal .metric .value svg {
    max-height: 14px;
    line-height: 10px;
    margin: 0;
    padding-left: 4px;
    vertical-align: middle;
}

.metric-divider {
    float: left;
    margin: 0 1em;
    min-height: 1px; {# required to apply 'margin' to an empty 'div' #}
}

{# Cards
   ------------------------------------------------------------------------- #}
.card {
    {{ mixins.subtle_border_and_shadow|raw }};
    margin: 1em 0;
    padding: 10px;
}
.card-block + .card-block {
    border-top: 1px solid #E0E0E0;
    padding-top: 10px;
}
.card *:first-child,
.card-block *:first-child {
    margin-top: 0;
}
.card .label {
    background-color: #EEE;
    color: #222;
}

{# Status
   ------------------------------------------------------------------------- #}
.status-success {
    background: rgba(94, 151, 110, 0.3);
}
.status-warning {
    background: rgba(240, 181, 24, 0.3);
}
.status-error {
    background: rgba(176, 65, 62, 0.2);
}
.status-success td,
.status-warning td,
.status-error td {
    background: transparent;
}
tr.status-error td,
tr.status-warning td {
    border-bottom: 1px solid #FAFAFA;
    border-top: 1px solid #FAFAFA;
}

.status-warning .colored {
    color: {{ colors.warning|raw }};
}
.status-error .colored  {
    color: {{ colors.error|raw }};
}

{# Syntax highlighting
   ========================================================================= #}
.highlight pre {
    margin: 0;
    white-space: pre-wrap;
}

.highlight .keyword   { color: #8959A8; font-weight: bold; }
.highlight .word      { color: #222222; }
.highlight .variable  { color: #916319; }
.highlight .symbol    { color: #222222; }
.highlight .comment   { color: #999999; }
.highlight .backtick  { color: #718C00; }
.highlight .string    { color: #718C00; }
.highlight .number    { color: #F5871F; font-weight: bold; }
.highlight .error     { color: #C82829; }

{# Icons
   ========================================================================= #}
.sf-icon {
    vertical-align: middle;
    background-repeat: no-repeat;
    background-size: contain;
    width: 16px;
    height: 16px;
    display: inline-block;
}
.sf-icon svg {
    width: 16px;
    height: 16px;
}
.sf-icon.sf-medium,
.sf-icon.sf-medium svg {
    width: 24px;
    height: 24px;
}
.sf-icon.sf-large,
.sf-icon.sf-large svg {
    width: 32px;
    height: 32px;
}


{# Layout
   ========================================================================= #}
.container {
    max-width: 1300px;
    padding-right: 15px;
}
#header {
    flex: 0 0 auto;
}
#header .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
#summary {
    flex: 0 0 auto;
}
#content {
    height: 100%;
}
#main {
    display: flex;
    flex-direction: row;
    min-height: 100%;
}
#sidebar {
    flex: 0 0 220px;
}
#collector-wrapper {
    flex: 0 1 100%;
    min-width: 0;
}
#collector-content {
    margin: 0 0 30px 0;
    padding: 14px 0 14px 20px;
}

#main h2:first-of-type {
    margin-top: 0;
}

{# Header
   ========================================================================= #}
#header {
    background-color: #222;
    overflow: hidden;
}
#header h1 {
    color: #FFF;
    flex: 1;
    font-weight: normal;
    font-size: 21px;
    margin: 0;
    padding: 10px 10px 8px;
}
#header h1 span {
    color: #CCC;
}
#header h1 svg {
    height: 40px;
    width: 40px;
    margin-top: -4px;
    vertical-align: middle;
}
#header h1 svg path,
#header h1 svg .sf-svg-path {
    fill: #FFF;
}
#header .search {
    padding-top: 11px;
}
#header .search input {
    border: 1px solid #DDD;
    margin-right: 4px;
    padding: 7px 8px;
    width: 200px;
}

{# Summary
   ========================================================================= #}
#summary .status {
    background: #E0E0E0;
    border: solid rgba(0, 0, 0, 0.1);
    border-width: 2px 0;
    padding: 10px;
}
#summary h2,
#summary h2 a {
    color: #222;
    font-size: 21px;
    margin: 0;
    text-decoration: none;
}
#summary h2 a:hover {
    text-decoration: underline;
}

#summary .status-success { background: {{ colors.success|raw }}; }
#summary .status-warning { background: {{ colors.warning|raw }}; }
#summary .status-error   { background: {{ colors.error|raw }};   }

#summary .status-success h2,
#summary .status-success a,
#summary .status-warning h2,
#summary .status-warning a,
#summary .status-error h2,
#summary .status-error a {
    color: #FFF;
}

#summary dl.metadata,
#summary dl.metadata a {
    margin: 5px 0 0;
    color: rgba(255, 255, 255, 0.75);
}
#summary dl.metadata dt,
#summary dl.metadata dd {
    display: inline-block;
    font-size: 13px;
}
#summary dl.metadata dt {
    font-weight: bold;
}
#summary dl.metadata dt:after {
    content: ':';
}
#summary dl.metadata dd {
    margin: 0 1.5em 0 0;
}

#summary dl.metadata .label {
    background: rgba(255, 255, 255, 0.2);
}

{# Sidebar
   ========================================================================= #}
#sidebar {
    background: #444;
    color: #CCC;
    padding-bottom: 30px;
    position: relative;
    width: 220px;
    z-index: 9999;
}
#sidebar .module {
    padding: 10px;
    width: 220px;
}

{# Sidebar Shortcuts
   ------------------------------------------------------------------------- #}
#sidebar #sidebar-shortcuts {
    background: #333;
    width: 220px;
}
#sidebar #sidebar-shortcuts .shortcuts {
    position: relative;
    padding: 16px 10px;
}
#sidebar-shortcuts .icon {
    display: block;
    float: left;
    width: 50px;
    margin: 2px 0 0 -10px;
    text-align: center;
}
#sidebar #sidebar-shortcuts .btn {
    color: #F5F5F5;
}
#sidebar #sidebar-shortcuts .btn + .btn {
    margin-left: 5px;
}
#sidebar #sidebar-shortcuts .btn {
    padding: .5em;
}

{# Sidebar Search
   ------------------------------------------------------------------------- #}
#sidebar-search .form-group:first-of-type {
    padding-top: 20px;
}
#sidebar-search .form-group {
    clear: both;
    overflow: hidden;
    padding-bottom: 10px;
}
#sidebar-search .form-group label {
    float: left;
    font-size: 13px;
    line-height: 24px;
    width: 60px;
}
#sidebar-search .form-group input,
#sidebar-search .form-group select {
    float: left;
    font-size: 13px;
    padding: 3px 6px;
}
#sidebar-search .form-group input {
    background: #CCC;
    border: 1px solid #999;
    color: #222;
    width: 120px;
}
#sidebar-search .form-group select {
    color: #222;
}
#sidebar-search .form-group .btn {
    float: right;
    margin-right: 10px;
}

{# Sidebar Menu
   ------------------------------------------------------------------------- #}
#menu-profiler {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
#menu-profiler li {
    position: relative;
    margin-bottom: 0;
}
#menu-profiler li a {
    border: solid transparent;
    border-width: 2px 0;
    color: #CCC;
    display: block;
}
#menu-profiler li a:hover {
    text-decoration: none;
}
#menu-profiler li a .label {
    background: transparent;
    color: #EEE;
    display: block;
    padding: 8px 10px 8px 50px;
    overflow: hidden;
    white-space: nowrap;
}
#menu-profiler li a .label .icon {
    display: block;
    position: absolute;
    left: 0;
    top: 8px;
    width: 50px;
    text-align: center;
}
#menu-profiler .label .icon img,
#menu-profiler .label .icon svg {
    height: 24px;
    max-width: 24px;
}
#menu-profiler li a .label .icon svg path,
#menu-profiler li a .label .icon svg .sf-svg-path {
    fill: #DDD;
}
#menu-profiler li a .label strong {
    font-size: 16px;
    font-weight: normal;
}
#menu-profiler li a .label.disabled {
    opacity: .25;
}
#menu-profiler li a:hover .label.disabled,
#menu-profiler li.selected a .label.disabled {
    opacity: 1;
}

#menu-profiler li.selected a,
#menu-profiler:hover li.selected a:hover,
#menu-profiler li a:hover {
    background: #666;
    border: solid #555;
    border-width: 2px 0;
}
#menu-profiler li.selected a .label,
#menu-profiler li a:hover .label {
    color: #FFF;
}
#menu-profiler li.selected a .icon svg path,
#menu-profiler li.selected a .icon svg .sf-svg-path,
#menu-profiler li a:hover .icon svg path,
#menu-profiler li a:hover .icon svg .sf-svg-path {
    fill: #FFF;
}

#menu-profiler li a .count {
    background-color: #666;
    color: #FFF;
    display: inline-block;
    font-weight: bold;
    min-width: 10px;
    padding: 2px 6px;
    position: absolute;
    right: 10px;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
}
#menu-profiler li a span.count span {
    font-size: 12px;

}
#menu-profiler li a span.count span + span::before {
    content: \" / \";
    color: #AAA;
}

#menu-profiler .label-status-warning .count {
    background: {{ colors.warning|raw }};
}
#menu-profiler .label-status-error .count {
    background: {{ colors.error|raw }};
}

{# Timeline panel
   ========================================================================= #}
#timeline-control {
    background: #FFF;
    margin: 1em 0;
    padding: 10px;
}
#timeline-control label {
    font-weight: bold;
    margin-right: 1em;
}
#timeline-control input {
    font-size: 16px;
    padding: 4px;
    text-align: right;
    width: 40px;
}
#timeline-control .help {
    margin-left: 1em;
}

.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left: solid 14px;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #DDD;
    background: #FFF;
    margin: .5em 0;
}
.sf-profiler-timeline + p.help {
    margin-top: 0;
}

{# Tabbed navigation
   ========================================================================= #}
.tab-navigation {
    margin: 0 0 1em 0;
    padding: 0;
}
.tab-navigation li {
    background: #FFF;
    border: 1px solid #DDD;
    color: #444;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    margin: 0 0 0 -1px;
    padding: .5em .75em;
    z-index: 1;
}
.tab-navigation li:hover {
    background: #EEE;
}
.tab-navigation li .badge {
    background-color: #F5F5F5;
    color: #777;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin-left: 8px;
    min-width: 10px;
    padding: 1px 6px;
    text-align: center;
    white-space: nowrap;
}
.tab-navigation li:hover .badge {
    background: #FAFAFA;
    color: #777;
}
.tab-navigation li.disabled {
    background: #F5F5F5;
    color: #999;
}
.tab-navigation li.active {
    background: #666;
    border-color: #666;
    color: #FAFAFA;
    z-index: 1100;
}
.tab-navigation li.active .badge {
    background-color: #444;
    color: #FFF;
}
.tab-content > *:first-child {
    margin-top: 0;
}
.tab-navigation li .badge.status-warning { background: {{ colors.warning|raw }}; color: #FFF; }
.tab-navigation li .badge.status-error { background: {{ colors.error|raw }}; color: #FFF; }

.sf-tabs .tab:not(:first-child) { display: none; }

{# Toggles
   ========================================================================= #}
.sf-toggle-content {
    -moz-transition: display .25s ease;
    -webkit-transition: display .25s ease;
    transition: display .25s ease;
}
.sf-toggle-content.sf-toggle-hidden {
    display: none;
}
.sf-toggle-content.sf-toggle-visible {
    display: block;
}

{# Twig panel
   ========================================================================= #}
#twig-dump pre {
    font-size: 12px;
    line-height: 1.7;
}
#twig-dump span {
    border-radius: 2px;
    padding: 1px 2px;
}
#twig-dump .status-error   { background: transparent; color: #B0413E; }
#twig-dump .status-warning { background: rgba(240, 181, 24, 0.3);     }
#twig-dump .status-success { background: rgba(100, 189, 99, 0.2);     }

{# Logger panel
   ========================================================================= #}
table.logs .metadata {
    display: block;
    font-size: 12px;
}

{# Doctrine panel
   ========================================================================= #}
.sql-runnable {
    background: #F5F5F5;
    margin: .5em 0;
    padding: 1em;
}
.queries-table pre {
    {{ mixins.break_long_words|raw }}
    margin: 0;
    white-space: pre-wrap;
}

{# Dump panel
   ========================================================================= #}
#collector-content .sf-dump {
    margin-bottom: 2em;
}
#collector-content pre.sf-dump,
#collector-content .sf-dump code,
#collector-content .sf-dump samp {
    {{ mixins.monospace_font|raw }}
}
#collector-content .sf-dump a {
    cursor: pointer;
}
#collector-content .sf-dump pre.sf-dump,
#collector-content .sf-dump .trace {
    border: 1px solid #DDD;
    background: #FFF;
    padding: 10px;
    margin: 0.5em 0;
}

#collector-content pre.sf-dump,
#collector-content .sf-dump-default {
    color: #CC7832;
    background: none;
}
#collector-content .sf-dump-str { color: #629755; }
#collector-content .sf-dump-private,
#collector-content .sf-dump-protected,
#collector-content .sf-dump-public { color: #262626; }
#collector-content .sf-dump-note { color: #6897BB; }
#collector-content .sf-dump-key { color: #789339; }
#collector-content .sf-dump-ref { color: #6E6E6E; }
#collector-content .sf-dump-ellipsis { color: #CC7832; max-width: 100em; }
#collector-content .sf-dump-ellipsis-path { max-width: 5em; }

#collector-content .sf-dump {
    margin: 0;
    padding: 0;
    line-height: 1.4;
}

#collector-content .dump-inline .sf-dump {
    display: inline;
    white-space: normal;
    font-size: inherit;
    line-height: inherit;
}
#collector-content .dump-inline .sf-dump:after {
    display: none;
}

#collector-content .sf-dump .trace {
    font-size: 12px;
}
#collector-content .sf-dump .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .sf-dump .trace li.selected {
    background: rgba(255, 255, 153, 0.5);
}

{# Search Results page
   ========================================================================= #}
#search-results td {
    {{ mixins.sans_serif_font|raw }}
    vertical-align: middle;
}

#search-results .sf-search {
    visibility: hidden;
    margin-left: 2px;
}
#search-results tr:hover .sf-search {
    visibility: visible;
}

{# Small screens
   ========================================================================= #}

.visible-small {
    display: none;
}
.hidden-small {
    display: inherit;
}

@media (max-width: 768px) {
    #sidebar {
        flex-basis: 50px;
        overflow-x: hidden;
        transition: flex-basis 200ms ease-out;
    }
    #sidebar:hover, #sidebar.expanded {
        flex-basis: 220px;
    }

    #sidebar-search {
        display: none;
    }
    #sidebar:hover #sidebar-search.sf-toggle-visible, #sidebar.expanded #sidebar-search.sf-toggle-visible {
        display: block;
    }

    #sidebar .module {
        display: none;
    }
    #sidebar:hover .module, #sidebar.expanded .module {
        display: block;
    }

    #sidebar:not(:hover):not(.expanded) .label .count {
        border-radius: 50%;
        border: 1px solid #eee;
        height: 8px;
        min-width: 0;
        padding: 0;
        right: 4px;
        text-indent: -9999px;
        top: 50%;
        width: 8px;
    }

    .visible-small {
        display: inherit;
    }
    .hidden-small {
        display: none;
    }

    .btn-sm svg {
        margin-left: 2px;
    }
}
", "WebProfilerBundle:Profiler:profiler.css.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/profiler.css.twig");
    }
}
