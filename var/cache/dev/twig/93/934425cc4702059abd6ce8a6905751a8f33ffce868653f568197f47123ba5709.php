<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b3890f6fe2cd7cd4d63ae4049423c810fc4410e0f39b3db0d7f74af74a5b481b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_447a296d34ce3de67f004ac4ed3efe8395e21a519ca44b252115d8d9a7650617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447a296d34ce3de67f004ac4ed3efe8395e21a519ca44b252115d8d9a7650617->enter($__internal_447a296d34ce3de67f004ac4ed3efe8395e21a519ca44b252115d8d9a7650617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_94531bc70b20ca6275d3f99492342e24686c368e4c6186acb55b0e80367d887b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94531bc70b20ca6275d3f99492342e24686c368e4c6186acb55b0e80367d887b->enter($__internal_94531bc70b20ca6275d3f99492342e24686c368e4c6186acb55b0e80367d887b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_447a296d34ce3de67f004ac4ed3efe8395e21a519ca44b252115d8d9a7650617->leave($__internal_447a296d34ce3de67f004ac4ed3efe8395e21a519ca44b252115d8d9a7650617_prof);

        
        $__internal_94531bc70b20ca6275d3f99492342e24686c368e4c6186acb55b0e80367d887b->leave($__internal_94531bc70b20ca6275d3f99492342e24686c368e4c6186acb55b0e80367d887b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2af2be24c825115a7813700bd683b07425b593e9f168dd3f07b9ce28265b7d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af2be24c825115a7813700bd683b07425b593e9f168dd3f07b9ce28265b7d32->enter($__internal_2af2be24c825115a7813700bd683b07425b593e9f168dd3f07b9ce28265b7d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f45c53f24efb2314dd45d65fc0fe308ac85fd14db181995d9b29b4eec5fc7544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45c53f24efb2314dd45d65fc0fe308ac85fd14db181995d9b29b4eec5fc7544->enter($__internal_f45c53f24efb2314dd45d65fc0fe308ac85fd14db181995d9b29b4eec5fc7544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f45c53f24efb2314dd45d65fc0fe308ac85fd14db181995d9b29b4eec5fc7544->leave($__internal_f45c53f24efb2314dd45d65fc0fe308ac85fd14db181995d9b29b4eec5fc7544_prof);

        
        $__internal_2af2be24c825115a7813700bd683b07425b593e9f168dd3f07b9ce28265b7d32->leave($__internal_2af2be24c825115a7813700bd683b07425b593e9f168dd3f07b9ce28265b7d32_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
