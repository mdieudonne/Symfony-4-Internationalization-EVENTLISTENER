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
        $__internal_c15b6efcd981a49fcde54b9bc8789fc73443335a25751b5ade408fb48b4ab477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15b6efcd981a49fcde54b9bc8789fc73443335a25751b5ade408fb48b4ab477->enter($__internal_c15b6efcd981a49fcde54b9bc8789fc73443335a25751b5ade408fb48b4ab477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5e8c4144cdd33481deca9a9de664113f118be7bb5d9476a553ff809ef904bcfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8c4144cdd33481deca9a9de664113f118be7bb5d9476a553ff809ef904bcfc->enter($__internal_5e8c4144cdd33481deca9a9de664113f118be7bb5d9476a553ff809ef904bcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15b6efcd981a49fcde54b9bc8789fc73443335a25751b5ade408fb48b4ab477->leave($__internal_c15b6efcd981a49fcde54b9bc8789fc73443335a25751b5ade408fb48b4ab477_prof);

        
        $__internal_5e8c4144cdd33481deca9a9de664113f118be7bb5d9476a553ff809ef904bcfc->leave($__internal_5e8c4144cdd33481deca9a9de664113f118be7bb5d9476a553ff809ef904bcfc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2795b00414677adcb00b3e6bf6c6e9b901742f54352feef822c498f5f66af041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2795b00414677adcb00b3e6bf6c6e9b901742f54352feef822c498f5f66af041->enter($__internal_2795b00414677adcb00b3e6bf6c6e9b901742f54352feef822c498f5f66af041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c54297e7af54020eaeb8e170fd8ffd84079d9d307ea3b89e8c24753d2c610779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54297e7af54020eaeb8e170fd8ffd84079d9d307ea3b89e8c24753d2c610779->enter($__internal_c54297e7af54020eaeb8e170fd8ffd84079d9d307ea3b89e8c24753d2c610779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c54297e7af54020eaeb8e170fd8ffd84079d9d307ea3b89e8c24753d2c610779->leave($__internal_c54297e7af54020eaeb8e170fd8ffd84079d9d307ea3b89e8c24753d2c610779_prof);

        
        $__internal_2795b00414677adcb00b3e6bf6c6e9b901742f54352feef822c498f5f66af041->leave($__internal_2795b00414677adcb00b3e6bf6c6e9b901742f54352feef822c498f5f66af041_prof);

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
