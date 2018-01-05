<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9dedff5283a9daa2726f9caa722f1092d4b8054589d10a7ae07a96cd8ba85e3e extends Twig_Template
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
        $__internal_f06ede4e895a508e8cab4693d80547295340bbc590ba1544b3bda203408627ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06ede4e895a508e8cab4693d80547295340bbc590ba1544b3bda203408627ba->enter($__internal_f06ede4e895a508e8cab4693d80547295340bbc590ba1544b3bda203408627ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a2758a587178fdaa77bab687839524e96c08a57a77dbb55fe5a406e2d98a5858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2758a587178fdaa77bab687839524e96c08a57a77dbb55fe5a406e2d98a5858->enter($__internal_a2758a587178fdaa77bab687839524e96c08a57a77dbb55fe5a406e2d98a5858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f06ede4e895a508e8cab4693d80547295340bbc590ba1544b3bda203408627ba->leave($__internal_f06ede4e895a508e8cab4693d80547295340bbc590ba1544b3bda203408627ba_prof);

        
        $__internal_a2758a587178fdaa77bab687839524e96c08a57a77dbb55fe5a406e2d98a5858->leave($__internal_a2758a587178fdaa77bab687839524e96c08a57a77dbb55fe5a406e2d98a5858_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
