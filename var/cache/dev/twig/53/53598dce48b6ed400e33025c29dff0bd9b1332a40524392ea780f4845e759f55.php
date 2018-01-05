<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_eb84f844ec1c930769fc5d788bfdfb9ad5f289dcf05956dab41f777dfe5210ca extends Twig_Template
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
        $__internal_aef0407913cdd272e1465d4233e37215b3cc521fa09e39d76acb314c24a681d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef0407913cdd272e1465d4233e37215b3cc521fa09e39d76acb314c24a681d8->enter($__internal_aef0407913cdd272e1465d4233e37215b3cc521fa09e39d76acb314c24a681d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_d40553e2abb8e6a4e9271f0ba3274a24a82b6e99355d92f2a4e99297b0933f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40553e2abb8e6a4e9271f0ba3274a24a82b6e99355d92f2a4e99297b0933f01->enter($__internal_d40553e2abb8e6a4e9271f0ba3274a24a82b6e99355d92f2a4e99297b0933f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_aef0407913cdd272e1465d4233e37215b3cc521fa09e39d76acb314c24a681d8->leave($__internal_aef0407913cdd272e1465d4233e37215b3cc521fa09e39d76acb314c24a681d8_prof);

        
        $__internal_d40553e2abb8e6a4e9271f0ba3274a24a82b6e99355d92f2a4e99297b0933f01->leave($__internal_d40553e2abb8e6a4e9271f0ba3274a24a82b6e99355d92f2a4e99297b0933f01_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
