<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9aeba33e9fb21af6adbaa718a95b44599437238fb6d375056a078ada2b1a81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4e1eb40cf447179a46e609cccb689178c59555f15d0ca77cc920857026f977ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1eb40cf447179a46e609cccb689178c59555f15d0ca77cc920857026f977ae->enter($__internal_4e1eb40cf447179a46e609cccb689178c59555f15d0ca77cc920857026f977ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4868efaf360d803bb4cc8ca233963ea1db340791df27d7840c682386ded2d2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4868efaf360d803bb4cc8ca233963ea1db340791df27d7840c682386ded2d2e4->enter($__internal_4868efaf360d803bb4cc8ca233963ea1db340791df27d7840c682386ded2d2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e1eb40cf447179a46e609cccb689178c59555f15d0ca77cc920857026f977ae->leave($__internal_4e1eb40cf447179a46e609cccb689178c59555f15d0ca77cc920857026f977ae_prof);

        
        $__internal_4868efaf360d803bb4cc8ca233963ea1db340791df27d7840c682386ded2d2e4->leave($__internal_4868efaf360d803bb4cc8ca233963ea1db340791df27d7840c682386ded2d2e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6523a44c6fa3d64a913f6afafeab2ec80bfbda4133015fab07b90bae398601d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6523a44c6fa3d64a913f6afafeab2ec80bfbda4133015fab07b90bae398601d->enter($__internal_a6523a44c6fa3d64a913f6afafeab2ec80bfbda4133015fab07b90bae398601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4998426fbd9508734b8e036c9a97191712ba3f2e6babe1accc1d224a6a8bf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4998426fbd9508734b8e036c9a97191712ba3f2e6babe1accc1d224a6a8bf5d->enter($__internal_c4998426fbd9508734b8e036c9a97191712ba3f2e6babe1accc1d224a6a8bf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c4998426fbd9508734b8e036c9a97191712ba3f2e6babe1accc1d224a6a8bf5d->leave($__internal_c4998426fbd9508734b8e036c9a97191712ba3f2e6babe1accc1d224a6a8bf5d_prof);

        
        $__internal_a6523a44c6fa3d64a913f6afafeab2ec80bfbda4133015fab07b90bae398601d->leave($__internal_a6523a44c6fa3d64a913f6afafeab2ec80bfbda4133015fab07b90bae398601d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_affb4b2a4d51780f91e6c889c0251221420ae3559eae8e17f4e6a3f7a6cbd601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affb4b2a4d51780f91e6c889c0251221420ae3559eae8e17f4e6a3f7a6cbd601->enter($__internal_affb4b2a4d51780f91e6c889c0251221420ae3559eae8e17f4e6a3f7a6cbd601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95c9c77a2f82751284dcb5b81eff92c6c041c59dc3f2c700d2e85a3c455e7878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c9c77a2f82751284dcb5b81eff92c6c041c59dc3f2c700d2e85a3c455e7878->enter($__internal_95c9c77a2f82751284dcb5b81eff92c6c041c59dc3f2c700d2e85a3c455e7878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_95c9c77a2f82751284dcb5b81eff92c6c041c59dc3f2c700d2e85a3c455e7878->leave($__internal_95c9c77a2f82751284dcb5b81eff92c6c041c59dc3f2c700d2e85a3c455e7878_prof);

        
        $__internal_affb4b2a4d51780f91e6c889c0251221420ae3559eae8e17f4e6a3f7a6cbd601->leave($__internal_affb4b2a4d51780f91e6c889c0251221420ae3559eae8e17f4e6a3f7a6cbd601_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_49e1e1ada16368decaf7be65f1f491d6b31ac24f0c45b2a7c2786a85c09c00f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e1e1ada16368decaf7be65f1f491d6b31ac24f0c45b2a7c2786a85c09c00f3->enter($__internal_49e1e1ada16368decaf7be65f1f491d6b31ac24f0c45b2a7c2786a85c09c00f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_330fd883ff4805b947bb9f559f97ad7cde5364c6d2695a1326f1c22ded75c86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330fd883ff4805b947bb9f559f97ad7cde5364c6d2695a1326f1c22ded75c86e->enter($__internal_330fd883ff4805b947bb9f559f97ad7cde5364c6d2695a1326f1c22ded75c86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_330fd883ff4805b947bb9f559f97ad7cde5364c6d2695a1326f1c22ded75c86e->leave($__internal_330fd883ff4805b947bb9f559f97ad7cde5364c6d2695a1326f1c22ded75c86e_prof);

        
        $__internal_49e1e1ada16368decaf7be65f1f491d6b31ac24f0c45b2a7c2786a85c09c00f3->leave($__internal_49e1e1ada16368decaf7be65f1f491d6b31ac24f0c45b2a7c2786a85c09c00f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
