<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4eb64ea77f9d3a64766e972e754858252a815092c32617db8b6b69e6a8bffbaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d548af7d8913fc535a4d3f028a4717d26a6c5b138a3c37cbba4cdffc45de3960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d548af7d8913fc535a4d3f028a4717d26a6c5b138a3c37cbba4cdffc45de3960->enter($__internal_d548af7d8913fc535a4d3f028a4717d26a6c5b138a3c37cbba4cdffc45de3960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_27098ed0b3c6d69d9a70a0f8ab42a57c48d1b7033aa279b923d26bdc6a70a127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27098ed0b3c6d69d9a70a0f8ab42a57c48d1b7033aa279b923d26bdc6a70a127->enter($__internal_27098ed0b3c6d69d9a70a0f8ab42a57c48d1b7033aa279b923d26bdc6a70a127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d548af7d8913fc535a4d3f028a4717d26a6c5b138a3c37cbba4cdffc45de3960->leave($__internal_d548af7d8913fc535a4d3f028a4717d26a6c5b138a3c37cbba4cdffc45de3960_prof);

        
        $__internal_27098ed0b3c6d69d9a70a0f8ab42a57c48d1b7033aa279b923d26bdc6a70a127->leave($__internal_27098ed0b3c6d69d9a70a0f8ab42a57c48d1b7033aa279b923d26bdc6a70a127_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10442a003cb1290e6c0ee5561bd3febff355110ba704782571512fecb0a4d52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10442a003cb1290e6c0ee5561bd3febff355110ba704782571512fecb0a4d52f->enter($__internal_10442a003cb1290e6c0ee5561bd3febff355110ba704782571512fecb0a4d52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_27807ef5bb93de13127f69c3b18c91bb713bd354a004462b92a64fa6d9dc7754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27807ef5bb93de13127f69c3b18c91bb713bd354a004462b92a64fa6d9dc7754->enter($__internal_27807ef5bb93de13127f69c3b18c91bb713bd354a004462b92a64fa6d9dc7754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_27807ef5bb93de13127f69c3b18c91bb713bd354a004462b92a64fa6d9dc7754->leave($__internal_27807ef5bb93de13127f69c3b18c91bb713bd354a004462b92a64fa6d9dc7754_prof);

        
        $__internal_10442a003cb1290e6c0ee5561bd3febff355110ba704782571512fecb0a4d52f->leave($__internal_10442a003cb1290e6c0ee5561bd3febff355110ba704782571512fecb0a4d52f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_778ccb13e105896682cfecb4fdd00c16260e47a575f123adc465d3b4baaa1b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778ccb13e105896682cfecb4fdd00c16260e47a575f123adc465d3b4baaa1b7b->enter($__internal_778ccb13e105896682cfecb4fdd00c16260e47a575f123adc465d3b4baaa1b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3aa2ec5460dc7590dde18c88e1c9d253dca53293f99923195b7dab722b2c679b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa2ec5460dc7590dde18c88e1c9d253dca53293f99923195b7dab722b2c679b->enter($__internal_3aa2ec5460dc7590dde18c88e1c9d253dca53293f99923195b7dab722b2c679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3aa2ec5460dc7590dde18c88e1c9d253dca53293f99923195b7dab722b2c679b->leave($__internal_3aa2ec5460dc7590dde18c88e1c9d253dca53293f99923195b7dab722b2c679b_prof);

        
        $__internal_778ccb13e105896682cfecb4fdd00c16260e47a575f123adc465d3b4baaa1b7b->leave($__internal_778ccb13e105896682cfecb4fdd00c16260e47a575f123adc465d3b4baaa1b7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e861033e9de3dbbd5dda75e75e35fc272dbbcc94447b70c00b7c6493426bb182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e861033e9de3dbbd5dda75e75e35fc272dbbcc94447b70c00b7c6493426bb182->enter($__internal_e861033e9de3dbbd5dda75e75e35fc272dbbcc94447b70c00b7c6493426bb182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1483c7f7a2d6e5f0dd212d5099b3d3554298f5676bcc1271d8ae6c9a651474da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1483c7f7a2d6e5f0dd212d5099b3d3554298f5676bcc1271d8ae6c9a651474da->enter($__internal_1483c7f7a2d6e5f0dd212d5099b3d3554298f5676bcc1271d8ae6c9a651474da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1483c7f7a2d6e5f0dd212d5099b3d3554298f5676bcc1271d8ae6c9a651474da->leave($__internal_1483c7f7a2d6e5f0dd212d5099b3d3554298f5676bcc1271d8ae6c9a651474da_prof);

        
        $__internal_e861033e9de3dbbd5dda75e75e35fc272dbbcc94447b70c00b7c6493426bb182->leave($__internal_e861033e9de3dbbd5dda75e75e35fc272dbbcc94447b70c00b7c6493426bb182_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
