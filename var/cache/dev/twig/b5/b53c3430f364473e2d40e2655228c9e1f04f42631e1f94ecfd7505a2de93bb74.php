<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_eda2f97f9a2a3f0c3343c061de69b588a26c38796f6bc266568a2b6abc55f788 extends Twig_Template
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
        $__internal_211e77056a6d50e531e55426a13919f23c36aa78d592b11b452d789bda722a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211e77056a6d50e531e55426a13919f23c36aa78d592b11b452d789bda722a11->enter($__internal_211e77056a6d50e531e55426a13919f23c36aa78d592b11b452d789bda722a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a8374fda80b7d7371fdad9b7abff038e42f579b1890fb60f39f3a38b8ac61b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8374fda80b7d7371fdad9b7abff038e42f579b1890fb60f39f3a38b8ac61b39->enter($__internal_a8374fda80b7d7371fdad9b7abff038e42f579b1890fb60f39f3a38b8ac61b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_211e77056a6d50e531e55426a13919f23c36aa78d592b11b452d789bda722a11->leave($__internal_211e77056a6d50e531e55426a13919f23c36aa78d592b11b452d789bda722a11_prof);

        
        $__internal_a8374fda80b7d7371fdad9b7abff038e42f579b1890fb60f39f3a38b8ac61b39->leave($__internal_a8374fda80b7d7371fdad9b7abff038e42f579b1890fb60f39f3a38b8ac61b39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
