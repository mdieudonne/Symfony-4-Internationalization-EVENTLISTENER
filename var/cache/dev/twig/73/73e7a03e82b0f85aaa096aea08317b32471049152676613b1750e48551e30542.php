<?php

/* index.html.twig */
class __TwigTemplate_50703ed769fd010e5e376cb3f6eaf01cfc2161edbcc7e5f62ed2820051070049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67ff2223bf85116f5ad19f8d50575fdebf6f29ff40e6f04eb13488a7c9e7f342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ff2223bf85116f5ad19f8d50575fdebf6f29ff40e6f04eb13488a7c9e7f342->enter($__internal_67ff2223bf85116f5ad19f8d50575fdebf6f29ff40e6f04eb13488a7c9e7f342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_96aa00bf873b382a030868f72518c905b2f8518fe87482f30c044895de3b10f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96aa00bf873b382a030868f72518c905b2f8518fe87482f30c044895de3b10f3->enter($__internal_96aa00bf873b382a030868f72518c905b2f8518fe87482f30c044895de3b10f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ff2223bf85116f5ad19f8d50575fdebf6f29ff40e6f04eb13488a7c9e7f342->leave($__internal_67ff2223bf85116f5ad19f8d50575fdebf6f29ff40e6f04eb13488a7c9e7f342_prof);

        
        $__internal_96aa00bf873b382a030868f72518c905b2f8518fe87482f30c044895de3b10f3->leave($__internal_96aa00bf873b382a030868f72518c905b2f8518fe87482f30c044895de3b10f3_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}

", "index.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/templates/index.html.twig");
    }
}
