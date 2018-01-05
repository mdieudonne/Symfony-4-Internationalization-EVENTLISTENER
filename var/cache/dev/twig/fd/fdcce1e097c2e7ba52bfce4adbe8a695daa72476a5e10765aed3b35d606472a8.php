<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9d6eb99012713b4d4d8f932cea46ea41464ba23d0082e23e789d26b2cbbe64aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdd11e9f7d1e6300350f0abe1d43efde991477164d3f51bb5d9733c4568ccb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd11e9f7d1e6300350f0abe1d43efde991477164d3f51bb5d9733c4568ccb24->enter($__internal_bdd11e9f7d1e6300350f0abe1d43efde991477164d3f51bb5d9733c4568ccb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3a76cef49c8adcdc07da951c348f18cae6ba605b963f09aa9dbd989c82acf956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a76cef49c8adcdc07da951c348f18cae6ba605b963f09aa9dbd989c82acf956->enter($__internal_3a76cef49c8adcdc07da951c348f18cae6ba605b963f09aa9dbd989c82acf956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd11e9f7d1e6300350f0abe1d43efde991477164d3f51bb5d9733c4568ccb24->leave($__internal_bdd11e9f7d1e6300350f0abe1d43efde991477164d3f51bb5d9733c4568ccb24_prof);

        
        $__internal_3a76cef49c8adcdc07da951c348f18cae6ba605b963f09aa9dbd989c82acf956->leave($__internal_3a76cef49c8adcdc07da951c348f18cae6ba605b963f09aa9dbd989c82acf956_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07389fc6ba1020b3389ee31663187b7a77fdf93ac84ca8b2fb14cb0d87247ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07389fc6ba1020b3389ee31663187b7a77fdf93ac84ca8b2fb14cb0d87247ca9->enter($__internal_07389fc6ba1020b3389ee31663187b7a77fdf93ac84ca8b2fb14cb0d87247ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0c39d0a86525e50d7f1f413d0fc09594991f81f58b2d94dc2dd5551dc700b3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c39d0a86525e50d7f1f413d0fc09594991f81f58b2d94dc2dd5551dc700b3e1->enter($__internal_0c39d0a86525e50d7f1f413d0fc09594991f81f58b2d94dc2dd5551dc700b3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0c39d0a86525e50d7f1f413d0fc09594991f81f58b2d94dc2dd5551dc700b3e1->leave($__internal_0c39d0a86525e50d7f1f413d0fc09594991f81f58b2d94dc2dd5551dc700b3e1_prof);

        
        $__internal_07389fc6ba1020b3389ee31663187b7a77fdf93ac84ca8b2fb14cb0d87247ca9->leave($__internal_07389fc6ba1020b3389ee31663187b7a77fdf93ac84ca8b2fb14cb0d87247ca9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
