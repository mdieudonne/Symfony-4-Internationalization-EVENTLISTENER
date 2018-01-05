<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b3890f6fe2cd7cd4d63ae4049423c810fc4410e0f39b3db0d7f74af74a5b481b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6622b34f08c7ffa59c472369ce8df2d46a65bd1bd202f97c916412be43b3fa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6622b34f08c7ffa59c472369ce8df2d46a65bd1bd202f97c916412be43b3fa56->enter($__internal_6622b34f08c7ffa59c472369ce8df2d46a65bd1bd202f97c916412be43b3fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3dc8b7bc697c9d4e0c2024ddde57960106cdb908e6664a7ed035f0f7403ca81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc8b7bc697c9d4e0c2024ddde57960106cdb908e6664a7ed035f0f7403ca81b->enter($__internal_3dc8b7bc697c9d4e0c2024ddde57960106cdb908e6664a7ed035f0f7403ca81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6622b34f08c7ffa59c472369ce8df2d46a65bd1bd202f97c916412be43b3fa56->leave($__internal_6622b34f08c7ffa59c472369ce8df2d46a65bd1bd202f97c916412be43b3fa56_prof);

        
        $__internal_3dc8b7bc697c9d4e0c2024ddde57960106cdb908e6664a7ed035f0f7403ca81b->leave($__internal_3dc8b7bc697c9d4e0c2024ddde57960106cdb908e6664a7ed035f0f7403ca81b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d707f9180c06f80c044a0b8bdcc8a1b6303d4d5b2a61c406776216f4fd90e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d707f9180c06f80c044a0b8bdcc8a1b6303d4d5b2a61c406776216f4fd90e1b->enter($__internal_6d707f9180c06f80c044a0b8bdcc8a1b6303d4d5b2a61c406776216f4fd90e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd52425d7e9f5b0b450669553f7408c64acc8f1058d0951f40f18a3fafe84322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd52425d7e9f5b0b450669553f7408c64acc8f1058d0951f40f18a3fafe84322->enter($__internal_dd52425d7e9f5b0b450669553f7408c64acc8f1058d0951f40f18a3fafe84322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dd52425d7e9f5b0b450669553f7408c64acc8f1058d0951f40f18a3fafe84322->leave($__internal_dd52425d7e9f5b0b450669553f7408c64acc8f1058d0951f40f18a3fafe84322_prof);

        
        $__internal_6d707f9180c06f80c044a0b8bdcc8a1b6303d4d5b2a61c406776216f4fd90e1b->leave($__internal_6d707f9180c06f80c044a0b8bdcc8a1b6303d4d5b2a61c406776216f4fd90e1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
