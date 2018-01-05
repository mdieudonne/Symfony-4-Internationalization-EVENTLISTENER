<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a87494fd5cf3819db32b938d7e6eb1fb115dc16a4974fb202b7ab3034190f73b extends Twig_Template
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
        $__internal_c9d239abf045ecbf2ac1fa0b836ee7564563dbc24885caa1f8bc5a972eee8024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d239abf045ecbf2ac1fa0b836ee7564563dbc24885caa1f8bc5a972eee8024->enter($__internal_c9d239abf045ecbf2ac1fa0b836ee7564563dbc24885caa1f8bc5a972eee8024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ad9e73bae314049f256f32c6e5cba26ff7398388d2e4e7e8daae5662d4e79cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9e73bae314049f256f32c6e5cba26ff7398388d2e4e7e8daae5662d4e79cf3->enter($__internal_ad9e73bae314049f256f32c6e5cba26ff7398388d2e4e7e8daae5662d4e79cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c9d239abf045ecbf2ac1fa0b836ee7564563dbc24885caa1f8bc5a972eee8024->leave($__internal_c9d239abf045ecbf2ac1fa0b836ee7564563dbc24885caa1f8bc5a972eee8024_prof);

        
        $__internal_ad9e73bae314049f256f32c6e5cba26ff7398388d2e4e7e8daae5662d4e79cf3->leave($__internal_ad9e73bae314049f256f32c6e5cba26ff7398388d2e4e7e8daae5662d4e79cf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
