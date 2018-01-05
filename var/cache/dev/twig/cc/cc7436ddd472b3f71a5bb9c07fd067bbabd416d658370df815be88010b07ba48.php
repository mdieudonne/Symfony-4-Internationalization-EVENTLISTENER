<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b5968cf0e381cb2c080ff1031f3ac6424a062da57e2ac32b608bcac902e022d0 extends Twig_Template
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
        $__internal_de2f1a41dceb6659b76db27695790c6563688a2736f3ac83a746a533b5ad400c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2f1a41dceb6659b76db27695790c6563688a2736f3ac83a746a533b5ad400c->enter($__internal_de2f1a41dceb6659b76db27695790c6563688a2736f3ac83a746a533b5ad400c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_98ae5af3dd52b4f46b2cf49c644766bd7762497f65aa994de00079eec37cb11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ae5af3dd52b4f46b2cf49c644766bd7762497f65aa994de00079eec37cb11d->enter($__internal_98ae5af3dd52b4f46b2cf49c644766bd7762497f65aa994de00079eec37cb11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_de2f1a41dceb6659b76db27695790c6563688a2736f3ac83a746a533b5ad400c->leave($__internal_de2f1a41dceb6659b76db27695790c6563688a2736f3ac83a746a533b5ad400c_prof);

        
        $__internal_98ae5af3dd52b4f46b2cf49c644766bd7762497f65aa994de00079eec37cb11d->leave($__internal_98ae5af3dd52b4f46b2cf49c644766bd7762497f65aa994de00079eec37cb11d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
