<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c0cea9b2128eb9dc290d703b95c08d7a6f70b5568cc8d7e4d5adcb22d368f342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9151f191e834bf62c1d6ca83d42edfb1a8c5a5a1b0041b065abf89bf2bee05f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9151f191e834bf62c1d6ca83d42edfb1a8c5a5a1b0041b065abf89bf2bee05f0->enter($__internal_9151f191e834bf62c1d6ca83d42edfb1a8c5a5a1b0041b065abf89bf2bee05f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_fe61d341f4bf62cfc8e61e94bea86b27af9abe65bb62b253a2fb03717b86bc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe61d341f4bf62cfc8e61e94bea86b27af9abe65bb62b253a2fb03717b86bc1c->enter($__internal_fe61d341f4bf62cfc8e61e94bea86b27af9abe65bb62b253a2fb03717b86bc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9151f191e834bf62c1d6ca83d42edfb1a8c5a5a1b0041b065abf89bf2bee05f0->leave($__internal_9151f191e834bf62c1d6ca83d42edfb1a8c5a5a1b0041b065abf89bf2bee05f0_prof);

        
        $__internal_fe61d341f4bf62cfc8e61e94bea86b27af9abe65bb62b253a2fb03717b86bc1c->leave($__internal_fe61d341f4bf62cfc8e61e94bea86b27af9abe65bb62b253a2fb03717b86bc1c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
