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
        $__internal_4ff9189419b9924b8d62a10891e14af6d67b0396169df4296e05467960dc3cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff9189419b9924b8d62a10891e14af6d67b0396169df4296e05467960dc3cf9->enter($__internal_4ff9189419b9924b8d62a10891e14af6d67b0396169df4296e05467960dc3cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ec664900275b04459c30219af181dcdafba53c86a980eb9d417d5e514679fa81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec664900275b04459c30219af181dcdafba53c86a980eb9d417d5e514679fa81->enter($__internal_ec664900275b04459c30219af181dcdafba53c86a980eb9d417d5e514679fa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_4ff9189419b9924b8d62a10891e14af6d67b0396169df4296e05467960dc3cf9->leave($__internal_4ff9189419b9924b8d62a10891e14af6d67b0396169df4296e05467960dc3cf9_prof);

        
        $__internal_ec664900275b04459c30219af181dcdafba53c86a980eb9d417d5e514679fa81->leave($__internal_ec664900275b04459c30219af181dcdafba53c86a980eb9d417d5e514679fa81_prof);

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
