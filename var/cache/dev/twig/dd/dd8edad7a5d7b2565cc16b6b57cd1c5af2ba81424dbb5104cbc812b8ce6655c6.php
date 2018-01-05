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
        $__internal_80dfe6e236c3be7a0eb82b27e754cc0b4cc0984ff903a61346f0f762cb3f3b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80dfe6e236c3be7a0eb82b27e754cc0b4cc0984ff903a61346f0f762cb3f3b98->enter($__internal_80dfe6e236c3be7a0eb82b27e754cc0b4cc0984ff903a61346f0f762cb3f3b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_6da3a49aef44412591a7b25cd3da8ad97377442747e1f005e6afd2fb9a557014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da3a49aef44412591a7b25cd3da8ad97377442747e1f005e6afd2fb9a557014->enter($__internal_6da3a49aef44412591a7b25cd3da8ad97377442747e1f005e6afd2fb9a557014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_80dfe6e236c3be7a0eb82b27e754cc0b4cc0984ff903a61346f0f762cb3f3b98->leave($__internal_80dfe6e236c3be7a0eb82b27e754cc0b4cc0984ff903a61346f0f762cb3f3b98_prof);

        
        $__internal_6da3a49aef44412591a7b25cd3da8ad97377442747e1f005e6afd2fb9a557014->leave($__internal_6da3a49aef44412591a7b25cd3da8ad97377442747e1f005e6afd2fb9a557014_prof);

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
