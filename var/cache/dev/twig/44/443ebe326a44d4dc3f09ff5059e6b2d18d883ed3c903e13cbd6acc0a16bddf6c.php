<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_949f29174517e8cfa84012e9ecc1f8a8ef7ca85646bec5a436622ac390234f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eff43234a815b16d2530e78a84e99dc365b694c8f9ca501c4aae358f090fea24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff43234a815b16d2530e78a84e99dc365b694c8f9ca501c4aae358f090fea24->enter($__internal_eff43234a815b16d2530e78a84e99dc365b694c8f9ca501c4aae358f090fea24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_6f6cf4320ed8aa4857865646bd6abafe3754cfac84d8cf0663f23f38c81fe91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6cf4320ed8aa4857865646bd6abafe3754cfac84d8cf0663f23f38c81fe91a->enter($__internal_6f6cf4320ed8aa4857865646bd6abafe3754cfac84d8cf0663f23f38c81fe91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eff43234a815b16d2530e78a84e99dc365b694c8f9ca501c4aae358f090fea24->leave($__internal_eff43234a815b16d2530e78a84e99dc365b694c8f9ca501c4aae358f090fea24_prof);

        
        $__internal_6f6cf4320ed8aa4857865646bd6abafe3754cfac84d8cf0663f23f38c81fe91a->leave($__internal_6f6cf4320ed8aa4857865646bd6abafe3754cfac84d8cf0663f23f38c81fe91a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7b5ed7ef22a731847108df567d7a1738db82964927e4c3f41144b716a0b2cead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5ed7ef22a731847108df567d7a1738db82964927e4c3f41144b716a0b2cead->enter($__internal_7b5ed7ef22a731847108df567d7a1738db82964927e4c3f41144b716a0b2cead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f76f478ed40580dcb0956eab7abf413bfa5156adadb881f2f000a91d2729ce53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76f478ed40580dcb0956eab7abf413bfa5156adadb881f2f000a91d2729ce53->enter($__internal_f76f478ed40580dcb0956eab7abf413bfa5156adadb881f2f000a91d2729ce53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f76f478ed40580dcb0956eab7abf413bfa5156adadb881f2f000a91d2729ce53->leave($__internal_f76f478ed40580dcb0956eab7abf413bfa5156adadb881f2f000a91d2729ce53_prof);

        
        $__internal_7b5ed7ef22a731847108df567d7a1738db82964927e4c3f41144b716a0b2cead->leave($__internal_7b5ed7ef22a731847108df567d7a1738db82964927e4c3f41144b716a0b2cead_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bbee1726d84d5dcc58888784ada3ccc77a2eee666e7a38de7a9c06bd5e09bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbee1726d84d5dcc58888784ada3ccc77a2eee666e7a38de7a9c06bd5e09bac->enter($__internal_2bbee1726d84d5dcc58888784ada3ccc77a2eee666e7a38de7a9c06bd5e09bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fed223b322c19e3dba33070d22a00b726b84b99e743854e37df037391ebe26c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed223b322c19e3dba33070d22a00b726b84b99e743854e37df037391ebe26c2->enter($__internal_fed223b322c19e3dba33070d22a00b726b84b99e743854e37df037391ebe26c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fed223b322c19e3dba33070d22a00b726b84b99e743854e37df037391ebe26c2->leave($__internal_fed223b322c19e3dba33070d22a00b726b84b99e743854e37df037391ebe26c2_prof);

        
        $__internal_2bbee1726d84d5dcc58888784ada3ccc77a2eee666e7a38de7a9c06bd5e09bac->leave($__internal_2bbee1726d84d5dcc58888784ada3ccc77a2eee666e7a38de7a9c06bd5e09bac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
