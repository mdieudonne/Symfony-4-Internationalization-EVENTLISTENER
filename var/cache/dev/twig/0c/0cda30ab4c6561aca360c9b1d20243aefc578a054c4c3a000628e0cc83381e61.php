<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1362ef5fa9d65cc1c60a3bafb8d2635e9e523cc4c31e0c82d466fd94072c4cbb extends Twig_Template
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
        $__internal_2ad0b9336db91416a059e166b5d50c91c745a0cad7aa3873de652d997883452a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad0b9336db91416a059e166b5d50c91c745a0cad7aa3873de652d997883452a->enter($__internal_2ad0b9336db91416a059e166b5d50c91c745a0cad7aa3873de652d997883452a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_34276186482ae52e5b335e7f85be52aa69a4243d6a8b158db913c2e073ba5895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34276186482ae52e5b335e7f85be52aa69a4243d6a8b158db913c2e073ba5895->enter($__internal_34276186482ae52e5b335e7f85be52aa69a4243d6a8b158db913c2e073ba5895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2ad0b9336db91416a059e166b5d50c91c745a0cad7aa3873de652d997883452a->leave($__internal_2ad0b9336db91416a059e166b5d50c91c745a0cad7aa3873de652d997883452a_prof);

        
        $__internal_34276186482ae52e5b335e7f85be52aa69a4243d6a8b158db913c2e073ba5895->leave($__internal_34276186482ae52e5b335e7f85be52aa69a4243d6a8b158db913c2e073ba5895_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
