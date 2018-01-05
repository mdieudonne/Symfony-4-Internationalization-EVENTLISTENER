<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9aeba33e9fb21af6adbaa718a95b44599437238fb6d375056a078ada2b1a81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80c8a7b5b63596130c01b6a03c619ed2a0234f0369e1f1029b7841f203a048eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c8a7b5b63596130c01b6a03c619ed2a0234f0369e1f1029b7841f203a048eb->enter($__internal_80c8a7b5b63596130c01b6a03c619ed2a0234f0369e1f1029b7841f203a048eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c89fbab32f2470c561c3e5b5bc1366d2bd814d53dbbd207c1f35ac1ab9a3f59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89fbab32f2470c561c3e5b5bc1366d2bd814d53dbbd207c1f35ac1ab9a3f59b->enter($__internal_c89fbab32f2470c561c3e5b5bc1366d2bd814d53dbbd207c1f35ac1ab9a3f59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80c8a7b5b63596130c01b6a03c619ed2a0234f0369e1f1029b7841f203a048eb->leave($__internal_80c8a7b5b63596130c01b6a03c619ed2a0234f0369e1f1029b7841f203a048eb_prof);

        
        $__internal_c89fbab32f2470c561c3e5b5bc1366d2bd814d53dbbd207c1f35ac1ab9a3f59b->leave($__internal_c89fbab32f2470c561c3e5b5bc1366d2bd814d53dbbd207c1f35ac1ab9a3f59b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d16586b85f8d484d19d05fa6a5935c838d986c922b8d4a7bb158a48e52b9ec84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16586b85f8d484d19d05fa6a5935c838d986c922b8d4a7bb158a48e52b9ec84->enter($__internal_d16586b85f8d484d19d05fa6a5935c838d986c922b8d4a7bb158a48e52b9ec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c04f11422c0a71ec04ed549fc3589aa1e36d19254e849612c2e5dba2d649b5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04f11422c0a71ec04ed549fc3589aa1e36d19254e849612c2e5dba2d649b5a0->enter($__internal_c04f11422c0a71ec04ed549fc3589aa1e36d19254e849612c2e5dba2d649b5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c04f11422c0a71ec04ed549fc3589aa1e36d19254e849612c2e5dba2d649b5a0->leave($__internal_c04f11422c0a71ec04ed549fc3589aa1e36d19254e849612c2e5dba2d649b5a0_prof);

        
        $__internal_d16586b85f8d484d19d05fa6a5935c838d986c922b8d4a7bb158a48e52b9ec84->leave($__internal_d16586b85f8d484d19d05fa6a5935c838d986c922b8d4a7bb158a48e52b9ec84_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_45a7fc1d0a4659eee480152f2c0ac45ee0b7ba3023743268995c6eb9ed703b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a7fc1d0a4659eee480152f2c0ac45ee0b7ba3023743268995c6eb9ed703b4c->enter($__internal_45a7fc1d0a4659eee480152f2c0ac45ee0b7ba3023743268995c6eb9ed703b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d11ef2e23927e92fefd5bff34c4ae4786af074ebdc16a6c60194f80e7bfac022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11ef2e23927e92fefd5bff34c4ae4786af074ebdc16a6c60194f80e7bfac022->enter($__internal_d11ef2e23927e92fefd5bff34c4ae4786af074ebdc16a6c60194f80e7bfac022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d11ef2e23927e92fefd5bff34c4ae4786af074ebdc16a6c60194f80e7bfac022->leave($__internal_d11ef2e23927e92fefd5bff34c4ae4786af074ebdc16a6c60194f80e7bfac022_prof);

        
        $__internal_45a7fc1d0a4659eee480152f2c0ac45ee0b7ba3023743268995c6eb9ed703b4c->leave($__internal_45a7fc1d0a4659eee480152f2c0ac45ee0b7ba3023743268995c6eb9ed703b4c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6514e10455a5c6569eae21262c9ca0555db488b9b1226a2f67b5e5044774b3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6514e10455a5c6569eae21262c9ca0555db488b9b1226a2f67b5e5044774b3b3->enter($__internal_6514e10455a5c6569eae21262c9ca0555db488b9b1226a2f67b5e5044774b3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7815e586da59ddd8c5ce57f74ca3b8f1b5df64852fa485d6bf651265f42eb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7815e586da59ddd8c5ce57f74ca3b8f1b5df64852fa485d6bf651265f42eb16->enter($__internal_b7815e586da59ddd8c5ce57f74ca3b8f1b5df64852fa485d6bf651265f42eb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b7815e586da59ddd8c5ce57f74ca3b8f1b5df64852fa485d6bf651265f42eb16->leave($__internal_b7815e586da59ddd8c5ce57f74ca3b8f1b5df64852fa485d6bf651265f42eb16_prof);

        
        $__internal_6514e10455a5c6569eae21262c9ca0555db488b9b1226a2f67b5e5044774b3b3->leave($__internal_6514e10455a5c6569eae21262c9ca0555db488b9b1226a2f67b5e5044774b3b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
