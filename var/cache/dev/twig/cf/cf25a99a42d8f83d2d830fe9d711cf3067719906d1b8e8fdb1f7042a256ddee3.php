<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cd6547d01131bfc4bc35c6312194a8d5d3a64326cf09d9cd0da14acd892df305 extends Twig_Template
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
        $__internal_e02810a6df7294a6fe23ed878dc4f0f310ee8a54cbde3e0e18c18db11c1e14f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02810a6df7294a6fe23ed878dc4f0f310ee8a54cbde3e0e18c18db11c1e14f2->enter($__internal_e02810a6df7294a6fe23ed878dc4f0f310ee8a54cbde3e0e18c18db11c1e14f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_fbbb8cc23c6289276a7a56aed7ee9d85c0cb06f71d7f6cae5ef98b97446357e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbb8cc23c6289276a7a56aed7ee9d85c0cb06f71d7f6cae5ef98b97446357e3->enter($__internal_fbbb8cc23c6289276a7a56aed7ee9d85c0cb06f71d7f6cae5ef98b97446357e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e02810a6df7294a6fe23ed878dc4f0f310ee8a54cbde3e0e18c18db11c1e14f2->leave($__internal_e02810a6df7294a6fe23ed878dc4f0f310ee8a54cbde3e0e18c18db11c1e14f2_prof);

        
        $__internal_fbbb8cc23c6289276a7a56aed7ee9d85c0cb06f71d7f6cae5ef98b97446357e3->leave($__internal_fbbb8cc23c6289276a7a56aed7ee9d85c0cb06f71d7f6cae5ef98b97446357e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
