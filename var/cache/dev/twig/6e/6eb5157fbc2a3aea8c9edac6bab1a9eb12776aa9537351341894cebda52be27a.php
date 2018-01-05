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
        $__internal_de4273f60cfb902097eacd3f11806508229a212418659dd92f5fdfe0cb444c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4273f60cfb902097eacd3f11806508229a212418659dd92f5fdfe0cb444c65->enter($__internal_de4273f60cfb902097eacd3f11806508229a212418659dd92f5fdfe0cb444c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_71dc1e338c43697b6404524c915e58b64566ff9514631377a9a3078820867beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dc1e338c43697b6404524c915e58b64566ff9514631377a9a3078820867beb->enter($__internal_71dc1e338c43697b6404524c915e58b64566ff9514631377a9a3078820867beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_de4273f60cfb902097eacd3f11806508229a212418659dd92f5fdfe0cb444c65->leave($__internal_de4273f60cfb902097eacd3f11806508229a212418659dd92f5fdfe0cb444c65_prof);

        
        $__internal_71dc1e338c43697b6404524c915e58b64566ff9514631377a9a3078820867beb->leave($__internal_71dc1e338c43697b6404524c915e58b64566ff9514631377a9a3078820867beb_prof);

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
