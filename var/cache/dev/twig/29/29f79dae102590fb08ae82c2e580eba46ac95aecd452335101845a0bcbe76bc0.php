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
        $__internal_bc339fd28fbb93fac09d3b2cdffb8fdc744648204e664d28ffa7eb441b93d929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc339fd28fbb93fac09d3b2cdffb8fdc744648204e664d28ffa7eb441b93d929->enter($__internal_bc339fd28fbb93fac09d3b2cdffb8fdc744648204e664d28ffa7eb441b93d929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_92cceb928890db7dabdc424bae468382246ff2a395a987c4d593ba42d4af9feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cceb928890db7dabdc424bae468382246ff2a395a987c4d593ba42d4af9feb->enter($__internal_92cceb928890db7dabdc424bae468382246ff2a395a987c4d593ba42d4af9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc339fd28fbb93fac09d3b2cdffb8fdc744648204e664d28ffa7eb441b93d929->leave($__internal_bc339fd28fbb93fac09d3b2cdffb8fdc744648204e664d28ffa7eb441b93d929_prof);

        
        $__internal_92cceb928890db7dabdc424bae468382246ff2a395a987c4d593ba42d4af9feb->leave($__internal_92cceb928890db7dabdc424bae468382246ff2a395a987c4d593ba42d4af9feb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c367c305a3d9f796e32dc8f749a365f3e492ca1b59450f75c3ddf9dd5b3e7b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c367c305a3d9f796e32dc8f749a365f3e492ca1b59450f75c3ddf9dd5b3e7b16->enter($__internal_c367c305a3d9f796e32dc8f749a365f3e492ca1b59450f75c3ddf9dd5b3e7b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0422a3847eb1e64c3cca4f0da2d387bc29630086ff2118ec5bdcd8768944b828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0422a3847eb1e64c3cca4f0da2d387bc29630086ff2118ec5bdcd8768944b828->enter($__internal_0422a3847eb1e64c3cca4f0da2d387bc29630086ff2118ec5bdcd8768944b828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0422a3847eb1e64c3cca4f0da2d387bc29630086ff2118ec5bdcd8768944b828->leave($__internal_0422a3847eb1e64c3cca4f0da2d387bc29630086ff2118ec5bdcd8768944b828_prof);

        
        $__internal_c367c305a3d9f796e32dc8f749a365f3e492ca1b59450f75c3ddf9dd5b3e7b16->leave($__internal_c367c305a3d9f796e32dc8f749a365f3e492ca1b59450f75c3ddf9dd5b3e7b16_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a0a5972fb5c10417c6717f18bd19b37e73a99c748ffdf174f4287d7d8d57d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0a5972fb5c10417c6717f18bd19b37e73a99c748ffdf174f4287d7d8d57d79->enter($__internal_7a0a5972fb5c10417c6717f18bd19b37e73a99c748ffdf174f4287d7d8d57d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a8c34b24c9ae7f9eab73f9015503d8a7744ba480f432bee3e64916bb98b257a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8c34b24c9ae7f9eab73f9015503d8a7744ba480f432bee3e64916bb98b257a->enter($__internal_0a8c34b24c9ae7f9eab73f9015503d8a7744ba480f432bee3e64916bb98b257a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a8c34b24c9ae7f9eab73f9015503d8a7744ba480f432bee3e64916bb98b257a->leave($__internal_0a8c34b24c9ae7f9eab73f9015503d8a7744ba480f432bee3e64916bb98b257a_prof);

        
        $__internal_7a0a5972fb5c10417c6717f18bd19b37e73a99c748ffdf174f4287d7d8d57d79->leave($__internal_7a0a5972fb5c10417c6717f18bd19b37e73a99c748ffdf174f4287d7d8d57d79_prof);

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
