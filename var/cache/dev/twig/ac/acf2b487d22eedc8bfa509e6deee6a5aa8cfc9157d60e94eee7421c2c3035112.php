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
        $__internal_d78f7078d64bd629f1fcb3c371f71b781888d0ab5e3ae6610dddd796d8c1b43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78f7078d64bd629f1fcb3c371f71b781888d0ab5e3ae6610dddd796d8c1b43b->enter($__internal_d78f7078d64bd629f1fcb3c371f71b781888d0ab5e3ae6610dddd796d8c1b43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_2eef7c9156a1d4b9c08927d2578b07ead315b14d754e64c92be40837bbcc19ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eef7c9156a1d4b9c08927d2578b07ead315b14d754e64c92be40837bbcc19ec->enter($__internal_2eef7c9156a1d4b9c08927d2578b07ead315b14d754e64c92be40837bbcc19ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_d78f7078d64bd629f1fcb3c371f71b781888d0ab5e3ae6610dddd796d8c1b43b->leave($__internal_d78f7078d64bd629f1fcb3c371f71b781888d0ab5e3ae6610dddd796d8c1b43b_prof);

        
        $__internal_2eef7c9156a1d4b9c08927d2578b07ead315b14d754e64c92be40837bbcc19ec->leave($__internal_2eef7c9156a1d4b9c08927d2578b07ead315b14d754e64c92be40837bbcc19ec_prof);

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
