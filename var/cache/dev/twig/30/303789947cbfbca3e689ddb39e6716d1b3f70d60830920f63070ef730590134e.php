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
        $__internal_2c15c390a209e259ed1202ac23ba459cd89188edf1975c29040868a3ffc10041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c15c390a209e259ed1202ac23ba459cd89188edf1975c29040868a3ffc10041->enter($__internal_2c15c390a209e259ed1202ac23ba459cd89188edf1975c29040868a3ffc10041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_dd6f3faa0ae3a82018e2a34eec9b9d11d3e1b2b240921e6192da90465baf378c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6f3faa0ae3a82018e2a34eec9b9d11d3e1b2b240921e6192da90465baf378c->enter($__internal_dd6f3faa0ae3a82018e2a34eec9b9d11d3e1b2b240921e6192da90465baf378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2c15c390a209e259ed1202ac23ba459cd89188edf1975c29040868a3ffc10041->leave($__internal_2c15c390a209e259ed1202ac23ba459cd89188edf1975c29040868a3ffc10041_prof);

        
        $__internal_dd6f3faa0ae3a82018e2a34eec9b9d11d3e1b2b240921e6192da90465baf378c->leave($__internal_dd6f3faa0ae3a82018e2a34eec9b9d11d3e1b2b240921e6192da90465baf378c_prof);

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
