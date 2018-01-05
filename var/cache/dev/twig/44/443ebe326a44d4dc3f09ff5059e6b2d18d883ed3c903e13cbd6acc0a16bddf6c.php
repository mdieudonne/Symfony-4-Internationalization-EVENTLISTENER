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
        $__internal_ac2dc9b7ceb6d63f0c591deeec342db3b60e07364aa456dc3a99b680660d8341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2dc9b7ceb6d63f0c591deeec342db3b60e07364aa456dc3a99b680660d8341->enter($__internal_ac2dc9b7ceb6d63f0c591deeec342db3b60e07364aa456dc3a99b680660d8341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_14d588d88347f71f60cb7b5c082aa93f20e9f2cc291aff9e6a95bfbe29f936fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d588d88347f71f60cb7b5c082aa93f20e9f2cc291aff9e6a95bfbe29f936fe->enter($__internal_14d588d88347f71f60cb7b5c082aa93f20e9f2cc291aff9e6a95bfbe29f936fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac2dc9b7ceb6d63f0c591deeec342db3b60e07364aa456dc3a99b680660d8341->leave($__internal_ac2dc9b7ceb6d63f0c591deeec342db3b60e07364aa456dc3a99b680660d8341_prof);

        
        $__internal_14d588d88347f71f60cb7b5c082aa93f20e9f2cc291aff9e6a95bfbe29f936fe->leave($__internal_14d588d88347f71f60cb7b5c082aa93f20e9f2cc291aff9e6a95bfbe29f936fe_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b2ae2e7bc2bc4a8a4118c2219b4cc811b6e817f5f6f3bf7791bc856542aa2baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ae2e7bc2bc4a8a4118c2219b4cc811b6e817f5f6f3bf7791bc856542aa2baf->enter($__internal_b2ae2e7bc2bc4a8a4118c2219b4cc811b6e817f5f6f3bf7791bc856542aa2baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7e147558cfef0c402d755ecd0a68b742ba040b0687f9ddf9e1539cde14688d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e147558cfef0c402d755ecd0a68b742ba040b0687f9ddf9e1539cde14688d34->enter($__internal_7e147558cfef0c402d755ecd0a68b742ba040b0687f9ddf9e1539cde14688d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7e147558cfef0c402d755ecd0a68b742ba040b0687f9ddf9e1539cde14688d34->leave($__internal_7e147558cfef0c402d755ecd0a68b742ba040b0687f9ddf9e1539cde14688d34_prof);

        
        $__internal_b2ae2e7bc2bc4a8a4118c2219b4cc811b6e817f5f6f3bf7791bc856542aa2baf->leave($__internal_b2ae2e7bc2bc4a8a4118c2219b4cc811b6e817f5f6f3bf7791bc856542aa2baf_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0959d47dc8eabe9780a0e02fe726907f7992c056c4fadca3ac762239de8fb851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0959d47dc8eabe9780a0e02fe726907f7992c056c4fadca3ac762239de8fb851->enter($__internal_0959d47dc8eabe9780a0e02fe726907f7992c056c4fadca3ac762239de8fb851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16b0d4020933abad246ea1b3516f097d8ba9f0a342b1e569243e4390334144c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b0d4020933abad246ea1b3516f097d8ba9f0a342b1e569243e4390334144c7->enter($__internal_16b0d4020933abad246ea1b3516f097d8ba9f0a342b1e569243e4390334144c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_16b0d4020933abad246ea1b3516f097d8ba9f0a342b1e569243e4390334144c7->leave($__internal_16b0d4020933abad246ea1b3516f097d8ba9f0a342b1e569243e4390334144c7_prof);

        
        $__internal_0959d47dc8eabe9780a0e02fe726907f7992c056c4fadca3ac762239de8fb851->leave($__internal_0959d47dc8eabe9780a0e02fe726907f7992c056c4fadca3ac762239de8fb851_prof);

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
