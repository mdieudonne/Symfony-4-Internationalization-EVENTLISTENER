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
        $__internal_ed1cf3b95617955cd730bcf0298f2330111a4f7d024a6a37fac7d4f3d8944af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1cf3b95617955cd730bcf0298f2330111a4f7d024a6a37fac7d4f3d8944af5->enter($__internal_ed1cf3b95617955cd730bcf0298f2330111a4f7d024a6a37fac7d4f3d8944af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d6da5841d82ed04dc3278788b6ae1f82db4a251f12e8fcdfd0b7c4c70e2c27f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6da5841d82ed04dc3278788b6ae1f82db4a251f12e8fcdfd0b7c4c70e2c27f6->enter($__internal_d6da5841d82ed04dc3278788b6ae1f82db4a251f12e8fcdfd0b7c4c70e2c27f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_ed1cf3b95617955cd730bcf0298f2330111a4f7d024a6a37fac7d4f3d8944af5->leave($__internal_ed1cf3b95617955cd730bcf0298f2330111a4f7d024a6a37fac7d4f3d8944af5_prof);

        
        $__internal_d6da5841d82ed04dc3278788b6ae1f82db4a251f12e8fcdfd0b7c4c70e2c27f6->leave($__internal_d6da5841d82ed04dc3278788b6ae1f82db4a251f12e8fcdfd0b7c4c70e2c27f6_prof);

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
