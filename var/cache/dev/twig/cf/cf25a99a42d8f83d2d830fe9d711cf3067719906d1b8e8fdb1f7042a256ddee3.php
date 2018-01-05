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
        $__internal_200dda549edcbd014719615d436af42dac707754c5729c3a5a5ba74459d6dbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200dda549edcbd014719615d436af42dac707754c5729c3a5a5ba74459d6dbd3->enter($__internal_200dda549edcbd014719615d436af42dac707754c5729c3a5a5ba74459d6dbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ab597068b1ecbc2a91119c5bbf06a1e809a50700a0c5cd9a8622b3337172da62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab597068b1ecbc2a91119c5bbf06a1e809a50700a0c5cd9a8622b3337172da62->enter($__internal_ab597068b1ecbc2a91119c5bbf06a1e809a50700a0c5cd9a8622b3337172da62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_200dda549edcbd014719615d436af42dac707754c5729c3a5a5ba74459d6dbd3->leave($__internal_200dda549edcbd014719615d436af42dac707754c5729c3a5a5ba74459d6dbd3_prof);

        
        $__internal_ab597068b1ecbc2a91119c5bbf06a1e809a50700a0c5cd9a8622b3337172da62->leave($__internal_ab597068b1ecbc2a91119c5bbf06a1e809a50700a0c5cd9a8622b3337172da62_prof);

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
