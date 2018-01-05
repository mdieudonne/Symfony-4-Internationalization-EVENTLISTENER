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
        $__internal_c8d1efaebb8c36e7b1c53931b80fdbe4e93d7d3cd35a45e6c56fcf5def90db43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d1efaebb8c36e7b1c53931b80fdbe4e93d7d3cd35a45e6c56fcf5def90db43->enter($__internal_c8d1efaebb8c36e7b1c53931b80fdbe4e93d7d3cd35a45e6c56fcf5def90db43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4cbe5497ea13fe28860cae99ee7a0394800501a4f4310c2d48f75aa072c09405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbe5497ea13fe28860cae99ee7a0394800501a4f4310c2d48f75aa072c09405->enter($__internal_4cbe5497ea13fe28860cae99ee7a0394800501a4f4310c2d48f75aa072c09405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d1efaebb8c36e7b1c53931b80fdbe4e93d7d3cd35a45e6c56fcf5def90db43->leave($__internal_c8d1efaebb8c36e7b1c53931b80fdbe4e93d7d3cd35a45e6c56fcf5def90db43_prof);

        
        $__internal_4cbe5497ea13fe28860cae99ee7a0394800501a4f4310c2d48f75aa072c09405->leave($__internal_4cbe5497ea13fe28860cae99ee7a0394800501a4f4310c2d48f75aa072c09405_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0071bc1677a39de23853442d0d25414e8b8366c42a56711a2e7c6f56e4a21250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0071bc1677a39de23853442d0d25414e8b8366c42a56711a2e7c6f56e4a21250->enter($__internal_0071bc1677a39de23853442d0d25414e8b8366c42a56711a2e7c6f56e4a21250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37c4879d30d3eb0bdc42f73e84beb89234ae76e9879165e98d4603191723fdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c4879d30d3eb0bdc42f73e84beb89234ae76e9879165e98d4603191723fdcf->enter($__internal_37c4879d30d3eb0bdc42f73e84beb89234ae76e9879165e98d4603191723fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_37c4879d30d3eb0bdc42f73e84beb89234ae76e9879165e98d4603191723fdcf->leave($__internal_37c4879d30d3eb0bdc42f73e84beb89234ae76e9879165e98d4603191723fdcf_prof);

        
        $__internal_0071bc1677a39de23853442d0d25414e8b8366c42a56711a2e7c6f56e4a21250->leave($__internal_0071bc1677a39de23853442d0d25414e8b8366c42a56711a2e7c6f56e4a21250_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_800b7627cbabebdac2bebd104327d656c64d54abc8cac88aae03fb0c1345410e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800b7627cbabebdac2bebd104327d656c64d54abc8cac88aae03fb0c1345410e->enter($__internal_800b7627cbabebdac2bebd104327d656c64d54abc8cac88aae03fb0c1345410e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cde545f2d533462ce4aa601bbefcc5d972cca9f2cbcea5d052954ba1c694674a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde545f2d533462ce4aa601bbefcc5d972cca9f2cbcea5d052954ba1c694674a->enter($__internal_cde545f2d533462ce4aa601bbefcc5d972cca9f2cbcea5d052954ba1c694674a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cde545f2d533462ce4aa601bbefcc5d972cca9f2cbcea5d052954ba1c694674a->leave($__internal_cde545f2d533462ce4aa601bbefcc5d972cca9f2cbcea5d052954ba1c694674a_prof);

        
        $__internal_800b7627cbabebdac2bebd104327d656c64d54abc8cac88aae03fb0c1345410e->leave($__internal_800b7627cbabebdac2bebd104327d656c64d54abc8cac88aae03fb0c1345410e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcb6e7361abf1933959c34042a7044a0261146700d5ccfbfd0a39a4ddb2382cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb6e7361abf1933959c34042a7044a0261146700d5ccfbfd0a39a4ddb2382cf->enter($__internal_dcb6e7361abf1933959c34042a7044a0261146700d5ccfbfd0a39a4ddb2382cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25a4e8d7d568fef498a4c2b2e1f45a4f188ac3cdab16c5ce58b9de23cdf22a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a4e8d7d568fef498a4c2b2e1f45a4f188ac3cdab16c5ce58b9de23cdf22a2f->enter($__internal_25a4e8d7d568fef498a4c2b2e1f45a4f188ac3cdab16c5ce58b9de23cdf22a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_25a4e8d7d568fef498a4c2b2e1f45a4f188ac3cdab16c5ce58b9de23cdf22a2f->leave($__internal_25a4e8d7d568fef498a4c2b2e1f45a4f188ac3cdab16c5ce58b9de23cdf22a2f_prof);

        
        $__internal_dcb6e7361abf1933959c34042a7044a0261146700d5ccfbfd0a39a4ddb2382cf->leave($__internal_dcb6e7361abf1933959c34042a7044a0261146700d5ccfbfd0a39a4ddb2382cf_prof);

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
