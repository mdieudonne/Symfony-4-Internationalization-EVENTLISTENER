<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_41c9ea4ca3b0017c3e2c1b9dff92a726d7af04528993c4aab0a25842566dbace extends Twig_Template
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
        $__internal_b0d48e3b2d6e371165e4d00b4f2d8887780433bb212ca200943b5463c4b225ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d48e3b2d6e371165e4d00b4f2d8887780433bb212ca200943b5463c4b225ee->enter($__internal_b0d48e3b2d6e371165e4d00b4f2d8887780433bb212ca200943b5463c4b225ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_e2ebec5d17fed6d68b03ca8dc0c808675ef266f5bf3f6e13622375575f678c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ebec5d17fed6d68b03ca8dc0c808675ef266f5bf3f6e13622375575f678c78->enter($__internal_e2ebec5d17fed6d68b03ca8dc0c808675ef266f5bf3f6e13622375575f678c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b0d48e3b2d6e371165e4d00b4f2d8887780433bb212ca200943b5463c4b225ee->leave($__internal_b0d48e3b2d6e371165e4d00b4f2d8887780433bb212ca200943b5463c4b225ee_prof);

        
        $__internal_e2ebec5d17fed6d68b03ca8dc0c808675ef266f5bf3f6e13622375575f678c78->leave($__internal_e2ebec5d17fed6d68b03ca8dc0c808675ef266f5bf3f6e13622375575f678c78_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
