<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_a7441b332797a7c9243153118fe53fcd75106ef1ed89f86811c29eba5c79e692 extends Twig_Template
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
        $__internal_f511a50217b2070b7746eb16227ad5d57530aa0ca056a0e0a7ea49f8d7bcb545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f511a50217b2070b7746eb16227ad5d57530aa0ca056a0e0a7ea49f8d7bcb545->enter($__internal_f511a50217b2070b7746eb16227ad5d57530aa0ca056a0e0a7ea49f8d7bcb545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_1e3b1cd7abc09802d67b431f912afeb75edee7d8493491a873ecfca34a28b678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3b1cd7abc09802d67b431f912afeb75edee7d8493491a873ecfca34a28b678->enter($__internal_1e3b1cd7abc09802d67b431f912afeb75edee7d8493491a873ecfca34a28b678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f511a50217b2070b7746eb16227ad5d57530aa0ca056a0e0a7ea49f8d7bcb545->leave($__internal_f511a50217b2070b7746eb16227ad5d57530aa0ca056a0e0a7ea49f8d7bcb545_prof);

        
        $__internal_1e3b1cd7abc09802d67b431f912afeb75edee7d8493491a873ecfca34a28b678->leave($__internal_1e3b1cd7abc09802d67b431f912afeb75edee7d8493491a873ecfca34a28b678_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
