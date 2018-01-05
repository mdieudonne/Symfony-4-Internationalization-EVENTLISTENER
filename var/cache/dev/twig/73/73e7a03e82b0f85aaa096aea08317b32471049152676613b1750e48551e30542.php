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
        $__internal_a2b5a506e4860a5c2744ac5f7d40a750592adec7901971161e63aa0fbbd71340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b5a506e4860a5c2744ac5f7d40a750592adec7901971161e63aa0fbbd71340->enter($__internal_a2b5a506e4860a5c2744ac5f7d40a750592adec7901971161e63aa0fbbd71340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_4b1c5e91c05152c30a7a6afffa124ecdc98cd3fdc74d4a28e45d1968ba5fc910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1c5e91c05152c30a7a6afffa124ecdc98cd3fdc74d4a28e45d1968ba5fc910->enter($__internal_4b1c5e91c05152c30a7a6afffa124ecdc98cd3fdc74d4a28e45d1968ba5fc910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b5a506e4860a5c2744ac5f7d40a750592adec7901971161e63aa0fbbd71340->leave($__internal_a2b5a506e4860a5c2744ac5f7d40a750592adec7901971161e63aa0fbbd71340_prof);

        
        $__internal_4b1c5e91c05152c30a7a6afffa124ecdc98cd3fdc74d4a28e45d1968ba5fc910->leave($__internal_4b1c5e91c05152c30a7a6afffa124ecdc98cd3fdc74d4a28e45d1968ba5fc910_prof);

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
