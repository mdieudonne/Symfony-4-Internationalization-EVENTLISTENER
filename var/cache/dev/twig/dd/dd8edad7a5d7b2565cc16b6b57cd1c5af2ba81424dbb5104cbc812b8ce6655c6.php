<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8d528417f55606de24370fb4087982e5b7d3dd4b1b480865136248e47b758ec2 extends Twig_Template
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
        $__internal_b9fe02d082a2cf379950a8278005a0101c052149c4bd21302154124a2c8c9a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fe02d082a2cf379950a8278005a0101c052149c4bd21302154124a2c8c9a03->enter($__internal_b9fe02d082a2cf379950a8278005a0101c052149c4bd21302154124a2c8c9a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_065136448c1e41c0db7a9b30d79dfb18ec1be3d0dde65ec10220ed08d6f02d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065136448c1e41c0db7a9b30d79dfb18ec1be3d0dde65ec10220ed08d6f02d95->enter($__internal_065136448c1e41c0db7a9b30d79dfb18ec1be3d0dde65ec10220ed08d6f02d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_b9fe02d082a2cf379950a8278005a0101c052149c4bd21302154124a2c8c9a03->leave($__internal_b9fe02d082a2cf379950a8278005a0101c052149c4bd21302154124a2c8c9a03_prof);

        
        $__internal_065136448c1e41c0db7a9b30d79dfb18ec1be3d0dde65ec10220ed08d6f02d95->leave($__internal_065136448c1e41c0db7a9b30d79dfb18ec1be3d0dde65ec10220ed08d6f02d95_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
