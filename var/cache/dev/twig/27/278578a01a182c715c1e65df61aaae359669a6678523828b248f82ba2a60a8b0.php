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
        $__internal_0e781e47d0469990fdb391e1de2e0e1a1983eeb4d6d8f54df3fc4945b3afb12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e781e47d0469990fdb391e1de2e0e1a1983eeb4d6d8f54df3fc4945b3afb12e->enter($__internal_0e781e47d0469990fdb391e1de2e0e1a1983eeb4d6d8f54df3fc4945b3afb12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_edda2774a9f1518352a5f5f89f04a541a8b635d7275071506673a13bc9213b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edda2774a9f1518352a5f5f89f04a541a8b635d7275071506673a13bc9213b41->enter($__internal_edda2774a9f1518352a5f5f89f04a541a8b635d7275071506673a13bc9213b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0e781e47d0469990fdb391e1de2e0e1a1983eeb4d6d8f54df3fc4945b3afb12e->leave($__internal_0e781e47d0469990fdb391e1de2e0e1a1983eeb4d6d8f54df3fc4945b3afb12e_prof);

        
        $__internal_edda2774a9f1518352a5f5f89f04a541a8b635d7275071506673a13bc9213b41->leave($__internal_edda2774a9f1518352a5f5f89f04a541a8b635d7275071506673a13bc9213b41_prof);

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
