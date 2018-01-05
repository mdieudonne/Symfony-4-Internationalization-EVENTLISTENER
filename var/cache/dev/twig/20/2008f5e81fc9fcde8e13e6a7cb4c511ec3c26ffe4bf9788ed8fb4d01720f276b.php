<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_f314bf23ae19849e83de5ceba686dbb46eb161c324fbcb50ebd54887c3d6bf8a extends Twig_Template
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
        $__internal_a027efb0c0aa65988b9f99ec6c6788853d513c75445b2c415c03b2b24240847a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a027efb0c0aa65988b9f99ec6c6788853d513c75445b2c415c03b2b24240847a->enter($__internal_a027efb0c0aa65988b9f99ec6c6788853d513c75445b2c415c03b2b24240847a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_6ee0fd44634593e4f7456f8fcce5c6ab571193776a7afa3346c36816ff05fb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee0fd44634593e4f7456f8fcce5c6ab571193776a7afa3346c36816ff05fb60->enter($__internal_6ee0fd44634593e4f7456f8fcce5c6ab571193776a7afa3346c36816ff05fb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_a027efb0c0aa65988b9f99ec6c6788853d513c75445b2c415c03b2b24240847a->leave($__internal_a027efb0c0aa65988b9f99ec6c6788853d513c75445b2c415c03b2b24240847a_prof);

        
        $__internal_6ee0fd44634593e4f7456f8fcce5c6ab571193776a7afa3346c36816ff05fb60->leave($__internal_6ee0fd44634593e4f7456f8fcce5c6ab571193776a7afa3346c36816ff05fb60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
