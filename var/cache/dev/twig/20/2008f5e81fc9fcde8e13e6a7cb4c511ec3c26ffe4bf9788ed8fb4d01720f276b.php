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
        $__internal_777caed52adba7be23f615ebee780bd401d4b63222aedf8669d0f44c5bdbb6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777caed52adba7be23f615ebee780bd401d4b63222aedf8669d0f44c5bdbb6b3->enter($__internal_777caed52adba7be23f615ebee780bd401d4b63222aedf8669d0f44c5bdbb6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_54aee1c89847968aafa3281f6ffd25622f5ec7096d738aadaa7d7e790d026770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54aee1c89847968aafa3281f6ffd25622f5ec7096d738aadaa7d7e790d026770->enter($__internal_54aee1c89847968aafa3281f6ffd25622f5ec7096d738aadaa7d7e790d026770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_777caed52adba7be23f615ebee780bd401d4b63222aedf8669d0f44c5bdbb6b3->leave($__internal_777caed52adba7be23f615ebee780bd401d4b63222aedf8669d0f44c5bdbb6b3_prof);

        
        $__internal_54aee1c89847968aafa3281f6ffd25622f5ec7096d738aadaa7d7e790d026770->leave($__internal_54aee1c89847968aafa3281f6ffd25622f5ec7096d738aadaa7d7e790d026770_prof);

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
