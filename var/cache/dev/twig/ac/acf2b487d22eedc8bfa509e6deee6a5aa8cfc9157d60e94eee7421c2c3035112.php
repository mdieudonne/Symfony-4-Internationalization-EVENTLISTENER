<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_97ea16a66b957ea8c6572ea73521232c5b7f89f113fc86790f60b672a065ca38 extends Twig_Template
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
        $__internal_a98ca55a40a4db3284373b17cae37d291e1809365f26e21dcb238e5f2c03d87f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98ca55a40a4db3284373b17cae37d291e1809365f26e21dcb238e5f2c03d87f->enter($__internal_a98ca55a40a4db3284373b17cae37d291e1809365f26e21dcb238e5f2c03d87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b25640e0ce08b9ca329a50fc829e1ed0a5de21e866609d0b3ca05383820e942c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25640e0ce08b9ca329a50fc829e1ed0a5de21e866609d0b3ca05383820e942c->enter($__internal_b25640e0ce08b9ca329a50fc829e1ed0a5de21e866609d0b3ca05383820e942c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a98ca55a40a4db3284373b17cae37d291e1809365f26e21dcb238e5f2c03d87f->leave($__internal_a98ca55a40a4db3284373b17cae37d291e1809365f26e21dcb238e5f2c03d87f_prof);

        
        $__internal_b25640e0ce08b9ca329a50fc829e1ed0a5de21e866609d0b3ca05383820e942c->leave($__internal_b25640e0ce08b9ca329a50fc829e1ed0a5de21e866609d0b3ca05383820e942c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
