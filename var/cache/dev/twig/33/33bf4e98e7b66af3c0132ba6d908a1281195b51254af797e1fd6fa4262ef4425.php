<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3ea3bdeda8fed563f45c97d9dbca29daa4eb16df1216b318b1440041d2802441 extends Twig_Template
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
        $__internal_d603fe513d500dbe2250147228f5ac270a7842deb6fe33d1c6a2de28677e13c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d603fe513d500dbe2250147228f5ac270a7842deb6fe33d1c6a2de28677e13c1->enter($__internal_d603fe513d500dbe2250147228f5ac270a7842deb6fe33d1c6a2de28677e13c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_f47f6b4b0c61311abab0b1add1ec9b5aa3575c45c91dc8ed740e888f679514ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47f6b4b0c61311abab0b1add1ec9b5aa3575c45c91dc8ed740e888f679514ba->enter($__internal_f47f6b4b0c61311abab0b1add1ec9b5aa3575c45c91dc8ed740e888f679514ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_d603fe513d500dbe2250147228f5ac270a7842deb6fe33d1c6a2de28677e13c1->leave($__internal_d603fe513d500dbe2250147228f5ac270a7842deb6fe33d1c6a2de28677e13c1_prof);

        
        $__internal_f47f6b4b0c61311abab0b1add1ec9b5aa3575c45c91dc8ed740e888f679514ba->leave($__internal_f47f6b4b0c61311abab0b1add1ec9b5aa3575c45c91dc8ed740e888f679514ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
