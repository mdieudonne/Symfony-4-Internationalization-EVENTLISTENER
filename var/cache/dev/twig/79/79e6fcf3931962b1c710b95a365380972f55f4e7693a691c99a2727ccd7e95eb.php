<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_67e143d81ab111dc788547cc056f26803d8b285399c062b64be08b18c9dbb4c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bf668dc01f7920a55d7ccf4d8c1a14a4730376784fd328cb85160044d6cb3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf668dc01f7920a55d7ccf4d8c1a14a4730376784fd328cb85160044d6cb3a7->enter($__internal_6bf668dc01f7920a55d7ccf4d8c1a14a4730376784fd328cb85160044d6cb3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_8d665c24faba6c42f104648bc7c5c52cdf4739d434e59f24dada9b0c9f018392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d665c24faba6c42f104648bc7c5c52cdf4739d434e59f24dada9b0c9f018392->enter($__internal_8d665c24faba6c42f104648bc7c5c52cdf4739d434e59f24dada9b0c9f018392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf668dc01f7920a55d7ccf4d8c1a14a4730376784fd328cb85160044d6cb3a7->leave($__internal_6bf668dc01f7920a55d7ccf4d8c1a14a4730376784fd328cb85160044d6cb3a7_prof);

        
        $__internal_8d665c24faba6c42f104648bc7c5c52cdf4739d434e59f24dada9b0c9f018392->leave($__internal_8d665c24faba6c42f104648bc7c5c52cdf4739d434e59f24dada9b0c9f018392_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b899776d228f11084096f47a1190589ecacbc27106064fbf937e4b28a98c2f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b899776d228f11084096f47a1190589ecacbc27106064fbf937e4b28a98c2f94->enter($__internal_b899776d228f11084096f47a1190589ecacbc27106064fbf937e4b28a98c2f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_658a682386fd0c7a98a8795492ddfc60b722abcea282a64515c425c1a030ba25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658a682386fd0c7a98a8795492ddfc60b722abcea282a64515c425c1a030ba25->enter($__internal_658a682386fd0c7a98a8795492ddfc60b722abcea282a64515c425c1a030ba25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_658a682386fd0c7a98a8795492ddfc60b722abcea282a64515c425c1a030ba25->leave($__internal_658a682386fd0c7a98a8795492ddfc60b722abcea282a64515c425c1a030ba25_prof);

        
        $__internal_b899776d228f11084096f47a1190589ecacbc27106064fbf937e4b28a98c2f94->leave($__internal_b899776d228f11084096f47a1190589ecacbc27106064fbf937e4b28a98c2f94_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_602df037a290269dd87023dd1d73bb13b055a12b47c07ca2195f0bb96412b41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602df037a290269dd87023dd1d73bb13b055a12b47c07ca2195f0bb96412b41b->enter($__internal_602df037a290269dd87023dd1d73bb13b055a12b47c07ca2195f0bb96412b41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fd12966066abc8b1a64e50cc0d8c7ab485f12eaae2360dae96b0a6feb82e7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd12966066abc8b1a64e50cc0d8c7ab485f12eaae2360dae96b0a6feb82e7e0->enter($__internal_9fd12966066abc8b1a64e50cc0d8c7ab485f12eaae2360dae96b0a6feb82e7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9fd12966066abc8b1a64e50cc0d8c7ab485f12eaae2360dae96b0a6feb82e7e0->leave($__internal_9fd12966066abc8b1a64e50cc0d8c7ab485f12eaae2360dae96b0a6feb82e7e0_prof);

        
        $__internal_602df037a290269dd87023dd1d73bb13b055a12b47c07ca2195f0bb96412b41b->leave($__internal_602df037a290269dd87023dd1d73bb13b055a12b47c07ca2195f0bb96412b41b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
