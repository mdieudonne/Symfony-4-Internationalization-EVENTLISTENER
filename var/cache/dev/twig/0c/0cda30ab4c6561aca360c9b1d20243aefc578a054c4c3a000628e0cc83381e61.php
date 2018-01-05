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
        $__internal_34c1417590c56cba46fd639fa9b346137099bd86756dd2200e233f2f0176f610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c1417590c56cba46fd639fa9b346137099bd86756dd2200e233f2f0176f610->enter($__internal_34c1417590c56cba46fd639fa9b346137099bd86756dd2200e233f2f0176f610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_e784351fa1b6577ae65e48020c2ccf0674851f9779911fd143314859f39977b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e784351fa1b6577ae65e48020c2ccf0674851f9779911fd143314859f39977b4->enter($__internal_e784351fa1b6577ae65e48020c2ccf0674851f9779911fd143314859f39977b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_34c1417590c56cba46fd639fa9b346137099bd86756dd2200e233f2f0176f610->leave($__internal_34c1417590c56cba46fd639fa9b346137099bd86756dd2200e233f2f0176f610_prof);

        
        $__internal_e784351fa1b6577ae65e48020c2ccf0674851f9779911fd143314859f39977b4->leave($__internal_e784351fa1b6577ae65e48020c2ccf0674851f9779911fd143314859f39977b4_prof);

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
