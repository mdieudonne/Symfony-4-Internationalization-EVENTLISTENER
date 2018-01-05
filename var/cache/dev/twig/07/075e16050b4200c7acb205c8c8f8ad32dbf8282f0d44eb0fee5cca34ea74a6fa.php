<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2722c31e4443b0e4e5f1f4aa687381a42967bc0e5d3c3e4fd97e4916a6335f60 extends Twig_Template
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
        $__internal_ffb972203bab13973b16168387ddce0512da11554e74be2ca18276ea5e217acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb972203bab13973b16168387ddce0512da11554e74be2ca18276ea5e217acb->enter($__internal_ffb972203bab13973b16168387ddce0512da11554e74be2ca18276ea5e217acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b754c4ce7c283e6111c9f4ae9e69f3d4c045db4b4ed0ed6ffa759ac333ca2b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b754c4ce7c283e6111c9f4ae9e69f3d4c045db4b4ed0ed6ffa759ac333ca2b50->enter($__internal_b754c4ce7c283e6111c9f4ae9e69f3d4c045db4b4ed0ed6ffa759ac333ca2b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ffb972203bab13973b16168387ddce0512da11554e74be2ca18276ea5e217acb->leave($__internal_ffb972203bab13973b16168387ddce0512da11554e74be2ca18276ea5e217acb_prof);

        
        $__internal_b754c4ce7c283e6111c9f4ae9e69f3d4c045db4b4ed0ed6ffa759ac333ca2b50->leave($__internal_b754c4ce7c283e6111c9f4ae9e69f3d4c045db4b4ed0ed6ffa759ac333ca2b50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
