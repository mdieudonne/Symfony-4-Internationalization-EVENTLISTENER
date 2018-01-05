<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_1e80abf2fff9834505dd3320aa962bc18c7d12bab9068d2ccee80656983665c7 extends Twig_Template
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
        $__internal_9bb7ab401f9fc1cd71b3a3c06196714fc540b7f5a0da83773d68202d0e6c2059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb7ab401f9fc1cd71b3a3c06196714fc540b7f5a0da83773d68202d0e6c2059->enter($__internal_9bb7ab401f9fc1cd71b3a3c06196714fc540b7f5a0da83773d68202d0e6c2059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8776d74355c55868a6740d58f63747bdc8fbafb19d1941e7c4a2201e6afa1b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8776d74355c55868a6740d58f63747bdc8fbafb19d1941e7c4a2201e6afa1b17->enter($__internal_8776d74355c55868a6740d58f63747bdc8fbafb19d1941e7c4a2201e6afa1b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_9bb7ab401f9fc1cd71b3a3c06196714fc540b7f5a0da83773d68202d0e6c2059->leave($__internal_9bb7ab401f9fc1cd71b3a3c06196714fc540b7f5a0da83773d68202d0e6c2059_prof);

        
        $__internal_8776d74355c55868a6740d58f63747bdc8fbafb19d1941e7c4a2201e6afa1b17->leave($__internal_8776d74355c55868a6740d58f63747bdc8fbafb19d1941e7c4a2201e6afa1b17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
