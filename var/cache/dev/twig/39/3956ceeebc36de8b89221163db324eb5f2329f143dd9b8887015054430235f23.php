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
        $__internal_4f6715a3fa169114475c57265169cf1b78bb881a448c5265eeea447485facc65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6715a3fa169114475c57265169cf1b78bb881a448c5265eeea447485facc65->enter($__internal_4f6715a3fa169114475c57265169cf1b78bb881a448c5265eeea447485facc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6fcab2d7f08c4367d993aa9b20d35f1f1f9d1d5ceddab0e30cb988a63a2482b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcab2d7f08c4367d993aa9b20d35f1f1f9d1d5ceddab0e30cb988a63a2482b9->enter($__internal_6fcab2d7f08c4367d993aa9b20d35f1f1f9d1d5ceddab0e30cb988a63a2482b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6715a3fa169114475c57265169cf1b78bb881a448c5265eeea447485facc65->leave($__internal_4f6715a3fa169114475c57265169cf1b78bb881a448c5265eeea447485facc65_prof);

        
        $__internal_6fcab2d7f08c4367d993aa9b20d35f1f1f9d1d5ceddab0e30cb988a63a2482b9->leave($__internal_6fcab2d7f08c4367d993aa9b20d35f1f1f9d1d5ceddab0e30cb988a63a2482b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_27f15eae2ac1975ad67cc0d3cddbbe1fe4348096c8f2b8fcf8ee07d4701501db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f15eae2ac1975ad67cc0d3cddbbe1fe4348096c8f2b8fcf8ee07d4701501db->enter($__internal_27f15eae2ac1975ad67cc0d3cddbbe1fe4348096c8f2b8fcf8ee07d4701501db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b55e856146ae527fe9de3ac987a7f6f3f8d2a716f759e3902c8278e6fa8774fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55e856146ae527fe9de3ac987a7f6f3f8d2a716f759e3902c8278e6fa8774fd->enter($__internal_b55e856146ae527fe9de3ac987a7f6f3f8d2a716f759e3902c8278e6fa8774fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b55e856146ae527fe9de3ac987a7f6f3f8d2a716f759e3902c8278e6fa8774fd->leave($__internal_b55e856146ae527fe9de3ac987a7f6f3f8d2a716f759e3902c8278e6fa8774fd_prof);

        
        $__internal_27f15eae2ac1975ad67cc0d3cddbbe1fe4348096c8f2b8fcf8ee07d4701501db->leave($__internal_27f15eae2ac1975ad67cc0d3cddbbe1fe4348096c8f2b8fcf8ee07d4701501db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cadba297d49eac53f1e129265ec89349a56b992c7798d8f8c47575d8c20fb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cadba297d49eac53f1e129265ec89349a56b992c7798d8f8c47575d8c20fb9e->enter($__internal_1cadba297d49eac53f1e129265ec89349a56b992c7798d8f8c47575d8c20fb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e7f4b44d4dd06edf7822d0420870f08882941ff3d0f7186352253142a90ec7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7f4b44d4dd06edf7822d0420870f08882941ff3d0f7186352253142a90ec7b->enter($__internal_9e7f4b44d4dd06edf7822d0420870f08882941ff3d0f7186352253142a90ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e7f4b44d4dd06edf7822d0420870f08882941ff3d0f7186352253142a90ec7b->leave($__internal_9e7f4b44d4dd06edf7822d0420870f08882941ff3d0f7186352253142a90ec7b_prof);

        
        $__internal_1cadba297d49eac53f1e129265ec89349a56b992c7798d8f8c47575d8c20fb9e->leave($__internal_1cadba297d49eac53f1e129265ec89349a56b992c7798d8f8c47575d8c20fb9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2593baf328f900ec2da5dd2eeb09ba271d2f6e11a48eefd830256af208ba28ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2593baf328f900ec2da5dd2eeb09ba271d2f6e11a48eefd830256af208ba28ba->enter($__internal_2593baf328f900ec2da5dd2eeb09ba271d2f6e11a48eefd830256af208ba28ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f784a5b240525e689c6a6722f33bcbeede2ca25d2059fc988804149f809298f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f784a5b240525e689c6a6722f33bcbeede2ca25d2059fc988804149f809298f->enter($__internal_2f784a5b240525e689c6a6722f33bcbeede2ca25d2059fc988804149f809298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2f784a5b240525e689c6a6722f33bcbeede2ca25d2059fc988804149f809298f->leave($__internal_2f784a5b240525e689c6a6722f33bcbeede2ca25d2059fc988804149f809298f_prof);

        
        $__internal_2593baf328f900ec2da5dd2eeb09ba271d2f6e11a48eefd830256af208ba28ba->leave($__internal_2593baf328f900ec2da5dd2eeb09ba271d2f6e11a48eefd830256af208ba28ba_prof);

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
