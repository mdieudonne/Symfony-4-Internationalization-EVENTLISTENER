<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4fdfa091ea9fb133594a4779c802a7c79310e8d7db0126b066273182fe992b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_16e584f128cefef4f1f49d22b990016c86c999f99e3b174bc4c3e7e6494f2e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e584f128cefef4f1f49d22b990016c86c999f99e3b174bc4c3e7e6494f2e93->enter($__internal_16e584f128cefef4f1f49d22b990016c86c999f99e3b174bc4c3e7e6494f2e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_aef34d7e6aaed93d42630151f44e04a216d0484d0e221de608ba430dd77f8ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef34d7e6aaed93d42630151f44e04a216d0484d0e221de608ba430dd77f8ce0->enter($__internal_aef34d7e6aaed93d42630151f44e04a216d0484d0e221de608ba430dd77f8ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16e584f128cefef4f1f49d22b990016c86c999f99e3b174bc4c3e7e6494f2e93->leave($__internal_16e584f128cefef4f1f49d22b990016c86c999f99e3b174bc4c3e7e6494f2e93_prof);

        
        $__internal_aef34d7e6aaed93d42630151f44e04a216d0484d0e221de608ba430dd77f8ce0->leave($__internal_aef34d7e6aaed93d42630151f44e04a216d0484d0e221de608ba430dd77f8ce0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_144a982762a0602e4d076a79823978663120f9c5ed610471a247778a448866b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144a982762a0602e4d076a79823978663120f9c5ed610471a247778a448866b4->enter($__internal_144a982762a0602e4d076a79823978663120f9c5ed610471a247778a448866b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_662e0d54a19aa8eda2ff5edace4d0854b8d5af56abb199816c8339609f842975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662e0d54a19aa8eda2ff5edace4d0854b8d5af56abb199816c8339609f842975->enter($__internal_662e0d54a19aa8eda2ff5edace4d0854b8d5af56abb199816c8339609f842975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_662e0d54a19aa8eda2ff5edace4d0854b8d5af56abb199816c8339609f842975->leave($__internal_662e0d54a19aa8eda2ff5edace4d0854b8d5af56abb199816c8339609f842975_prof);

        
        $__internal_144a982762a0602e4d076a79823978663120f9c5ed610471a247778a448866b4->leave($__internal_144a982762a0602e4d076a79823978663120f9c5ed610471a247778a448866b4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe095c7f8e7608a7194fb98c930ec06d4e506ff54aabde3dfac60f46612d8400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe095c7f8e7608a7194fb98c930ec06d4e506ff54aabde3dfac60f46612d8400->enter($__internal_fe095c7f8e7608a7194fb98c930ec06d4e506ff54aabde3dfac60f46612d8400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d873d9563bedaad3c63fbd455ff720a9f33966c362c590c47c12e55c69200f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d873d9563bedaad3c63fbd455ff720a9f33966c362c590c47c12e55c69200f0->enter($__internal_9d873d9563bedaad3c63fbd455ff720a9f33966c362c590c47c12e55c69200f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9d873d9563bedaad3c63fbd455ff720a9f33966c362c590c47c12e55c69200f0->leave($__internal_9d873d9563bedaad3c63fbd455ff720a9f33966c362c590c47c12e55c69200f0_prof);

        
        $__internal_fe095c7f8e7608a7194fb98c930ec06d4e506ff54aabde3dfac60f46612d8400->leave($__internal_fe095c7f8e7608a7194fb98c930ec06d4e506ff54aabde3dfac60f46612d8400_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f59609db3c0080ae1c4b8490f83893f1311347e434fe98444d7779cfedfcb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f59609db3c0080ae1c4b8490f83893f1311347e434fe98444d7779cfedfcb2d->enter($__internal_8f59609db3c0080ae1c4b8490f83893f1311347e434fe98444d7779cfedfcb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4ccd2f8018673bc1dbb0c3bb550bc96c8674570b4182a9698cf6520d6eaaa87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ccd2f8018673bc1dbb0c3bb550bc96c8674570b4182a9698cf6520d6eaaa87->enter($__internal_c4ccd2f8018673bc1dbb0c3bb550bc96c8674570b4182a9698cf6520d6eaaa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c4ccd2f8018673bc1dbb0c3bb550bc96c8674570b4182a9698cf6520d6eaaa87->leave($__internal_c4ccd2f8018673bc1dbb0c3bb550bc96c8674570b4182a9698cf6520d6eaaa87_prof);

        
        $__internal_8f59609db3c0080ae1c4b8490f83893f1311347e434fe98444d7779cfedfcb2d->leave($__internal_8f59609db3c0080ae1c4b8490f83893f1311347e434fe98444d7779cfedfcb2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
