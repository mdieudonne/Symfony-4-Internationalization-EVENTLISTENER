<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ec7e911326f850a04df104e7eee11e7e7a60aa4f81a6740ae96e1ac9313363ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cd0f72dec766e36b2a059daada6ccb79c365b0063e740858cf11127ab8d6802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd0f72dec766e36b2a059daada6ccb79c365b0063e740858cf11127ab8d6802->enter($__internal_7cd0f72dec766e36b2a059daada6ccb79c365b0063e740858cf11127ab8d6802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_43b7b4edcb42bc9350e288899d92d608c3c9f86df10514cb66faf0a47699e36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b7b4edcb42bc9350e288899d92d608c3c9f86df10514cb66faf0a47699e36f->enter($__internal_43b7b4edcb42bc9350e288899d92d608c3c9f86df10514cb66faf0a47699e36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cd0f72dec766e36b2a059daada6ccb79c365b0063e740858cf11127ab8d6802->leave($__internal_7cd0f72dec766e36b2a059daada6ccb79c365b0063e740858cf11127ab8d6802_prof);

        
        $__internal_43b7b4edcb42bc9350e288899d92d608c3c9f86df10514cb66faf0a47699e36f->leave($__internal_43b7b4edcb42bc9350e288899d92d608c3c9f86df10514cb66faf0a47699e36f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23d682528af3db9f84a7b67b86321068d848c84e0e9dfa8ce6ed616c92cb70eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d682528af3db9f84a7b67b86321068d848c84e0e9dfa8ce6ed616c92cb70eb->enter($__internal_23d682528af3db9f84a7b67b86321068d848c84e0e9dfa8ce6ed616c92cb70eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c4ba1052b0f171633132bc109d2c42ec9e82ba403b57f2617da16ae9c5719ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4ba1052b0f171633132bc109d2c42ec9e82ba403b57f2617da16ae9c5719ae->enter($__internal_4c4ba1052b0f171633132bc109d2c42ec9e82ba403b57f2617da16ae9c5719ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4c4ba1052b0f171633132bc109d2c42ec9e82ba403b57f2617da16ae9c5719ae->leave($__internal_4c4ba1052b0f171633132bc109d2c42ec9e82ba403b57f2617da16ae9c5719ae_prof);

        
        $__internal_23d682528af3db9f84a7b67b86321068d848c84e0e9dfa8ce6ed616c92cb70eb->leave($__internal_23d682528af3db9f84a7b67b86321068d848c84e0e9dfa8ce6ed616c92cb70eb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a05bd6fb5f9827a8997f56a5ed6c5f7c61b44953e246b20df30ac532731ccac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a05bd6fb5f9827a8997f56a5ed6c5f7c61b44953e246b20df30ac532731ccac->enter($__internal_7a05bd6fb5f9827a8997f56a5ed6c5f7c61b44953e246b20df30ac532731ccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db839a76c0db826b2db9f046a1b8f6d14ebf5e9ead114ecb96d2c894ebb586c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db839a76c0db826b2db9f046a1b8f6d14ebf5e9ead114ecb96d2c894ebb586c5->enter($__internal_db839a76c0db826b2db9f046a1b8f6d14ebf5e9ead114ecb96d2c894ebb586c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_db839a76c0db826b2db9f046a1b8f6d14ebf5e9ead114ecb96d2c894ebb586c5->leave($__internal_db839a76c0db826b2db9f046a1b8f6d14ebf5e9ead114ecb96d2c894ebb586c5_prof);

        
        $__internal_7a05bd6fb5f9827a8997f56a5ed6c5f7c61b44953e246b20df30ac532731ccac->leave($__internal_7a05bd6fb5f9827a8997f56a5ed6c5f7c61b44953e246b20df30ac532731ccac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
