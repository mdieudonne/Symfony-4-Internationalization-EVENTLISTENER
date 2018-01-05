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
        $__internal_a784b257406962cb98f315a6ae97665e606dedc171441d20a5f3e1a3e8a699b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a784b257406962cb98f315a6ae97665e606dedc171441d20a5f3e1a3e8a699b9->enter($__internal_a784b257406962cb98f315a6ae97665e606dedc171441d20a5f3e1a3e8a699b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a950a9d418d35b0c9968573eeecf1373a1117a5e14a400f50ae6989f9b1a1dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a950a9d418d35b0c9968573eeecf1373a1117a5e14a400f50ae6989f9b1a1dc0->enter($__internal_a950a9d418d35b0c9968573eeecf1373a1117a5e14a400f50ae6989f9b1a1dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a784b257406962cb98f315a6ae97665e606dedc171441d20a5f3e1a3e8a699b9->leave($__internal_a784b257406962cb98f315a6ae97665e606dedc171441d20a5f3e1a3e8a699b9_prof);

        
        $__internal_a950a9d418d35b0c9968573eeecf1373a1117a5e14a400f50ae6989f9b1a1dc0->leave($__internal_a950a9d418d35b0c9968573eeecf1373a1117a5e14a400f50ae6989f9b1a1dc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ed07ca1525063db650261f1a897183f1170670548945c43e6973951ce030498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed07ca1525063db650261f1a897183f1170670548945c43e6973951ce030498->enter($__internal_2ed07ca1525063db650261f1a897183f1170670548945c43e6973951ce030498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_244ed578385ba97351353100876b7c04215cce02c65ba859eedf1512fc829602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244ed578385ba97351353100876b7c04215cce02c65ba859eedf1512fc829602->enter($__internal_244ed578385ba97351353100876b7c04215cce02c65ba859eedf1512fc829602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_244ed578385ba97351353100876b7c04215cce02c65ba859eedf1512fc829602->leave($__internal_244ed578385ba97351353100876b7c04215cce02c65ba859eedf1512fc829602_prof);

        
        $__internal_2ed07ca1525063db650261f1a897183f1170670548945c43e6973951ce030498->leave($__internal_2ed07ca1525063db650261f1a897183f1170670548945c43e6973951ce030498_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7045ee669c0b54702861b4a7f591a9424d537692e06bf3834f2143c8310eead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7045ee669c0b54702861b4a7f591a9424d537692e06bf3834f2143c8310eead->enter($__internal_b7045ee669c0b54702861b4a7f591a9424d537692e06bf3834f2143c8310eead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b338e19deeab3ea6cf18a83d61b01eee944409ea87a5cee78a9b483b031c1a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b338e19deeab3ea6cf18a83d61b01eee944409ea87a5cee78a9b483b031c1a86->enter($__internal_b338e19deeab3ea6cf18a83d61b01eee944409ea87a5cee78a9b483b031c1a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b338e19deeab3ea6cf18a83d61b01eee944409ea87a5cee78a9b483b031c1a86->leave($__internal_b338e19deeab3ea6cf18a83d61b01eee944409ea87a5cee78a9b483b031c1a86_prof);

        
        $__internal_b7045ee669c0b54702861b4a7f591a9424d537692e06bf3834f2143c8310eead->leave($__internal_b7045ee669c0b54702861b4a7f591a9424d537692e06bf3834f2143c8310eead_prof);

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
