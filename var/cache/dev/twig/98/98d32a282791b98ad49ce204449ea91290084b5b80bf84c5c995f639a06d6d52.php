<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_004a9df3b51bbd729e201262289011307c30d73af9df67f78579d0325c1c2af4 extends Twig_Template
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
        $__internal_80ae43194578281c2f7a6d37f837a4424dae8b5583b20f6871e3a44a3e4518d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ae43194578281c2f7a6d37f837a4424dae8b5583b20f6871e3a44a3e4518d5->enter($__internal_80ae43194578281c2f7a6d37f837a4424dae8b5583b20f6871e3a44a3e4518d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_f8ade1a0c006486bb7db318fbab2b8d1a846a7009d891c3375251a4096da15f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ade1a0c006486bb7db318fbab2b8d1a846a7009d891c3375251a4096da15f3->enter($__internal_f8ade1a0c006486bb7db318fbab2b8d1a846a7009d891c3375251a4096da15f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_80ae43194578281c2f7a6d37f837a4424dae8b5583b20f6871e3a44a3e4518d5->leave($__internal_80ae43194578281c2f7a6d37f837a4424dae8b5583b20f6871e3a44a3e4518d5_prof);

        
        $__internal_f8ade1a0c006486bb7db318fbab2b8d1a846a7009d891c3375251a4096da15f3->leave($__internal_f8ade1a0c006486bb7db318fbab2b8d1a846a7009d891c3375251a4096da15f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
