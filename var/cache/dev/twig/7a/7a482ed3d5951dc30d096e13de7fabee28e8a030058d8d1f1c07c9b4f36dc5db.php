<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_15219b03ec4e8c593b99cfb75799470764941df42940936a3eca75819cecbe69 extends Twig_Template
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
        $__internal_e21de9671ce2d9931b240b3331f1fac9f5b9b1ba39a44a1817772d65d3bdf399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21de9671ce2d9931b240b3331f1fac9f5b9b1ba39a44a1817772d65d3bdf399->enter($__internal_e21de9671ce2d9931b240b3331f1fac9f5b9b1ba39a44a1817772d65d3bdf399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e9449d6c820e213fbf3e607e9fc5ed25dad53d576ec8e9fa970eeaf849f6c8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9449d6c820e213fbf3e607e9fc5ed25dad53d576ec8e9fa970eeaf849f6c8d0->enter($__internal_e9449d6c820e213fbf3e607e9fc5ed25dad53d576ec8e9fa970eeaf849f6c8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e21de9671ce2d9931b240b3331f1fac9f5b9b1ba39a44a1817772d65d3bdf399->leave($__internal_e21de9671ce2d9931b240b3331f1fac9f5b9b1ba39a44a1817772d65d3bdf399_prof);

        
        $__internal_e9449d6c820e213fbf3e607e9fc5ed25dad53d576ec8e9fa970eeaf849f6c8d0->leave($__internal_e9449d6c820e213fbf3e607e9fc5ed25dad53d576ec8e9fa970eeaf849f6c8d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
