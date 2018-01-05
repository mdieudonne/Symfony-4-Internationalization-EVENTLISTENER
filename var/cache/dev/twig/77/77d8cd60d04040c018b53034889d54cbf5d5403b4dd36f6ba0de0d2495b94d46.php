<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ef06ff33866e0862aa19e0c64ac15c030824eb82d8ef5327273e15358033d888 extends Twig_Template
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
        $__internal_faf459ea9d3658cc092272f5cda3ae2cb16b3430c5d39cc2adf13b7cdf5a6b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf459ea9d3658cc092272f5cda3ae2cb16b3430c5d39cc2adf13b7cdf5a6b8e->enter($__internal_faf459ea9d3658cc092272f5cda3ae2cb16b3430c5d39cc2adf13b7cdf5a6b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4f66e4941b5c2060bf42e45723df0efd653e4a39e1ac363086f3e199e0f8b9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f66e4941b5c2060bf42e45723df0efd653e4a39e1ac363086f3e199e0f8b9ac->enter($__internal_4f66e4941b5c2060bf42e45723df0efd653e4a39e1ac363086f3e199e0f8b9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_faf459ea9d3658cc092272f5cda3ae2cb16b3430c5d39cc2adf13b7cdf5a6b8e->leave($__internal_faf459ea9d3658cc092272f5cda3ae2cb16b3430c5d39cc2adf13b7cdf5a6b8e_prof);

        
        $__internal_4f66e4941b5c2060bf42e45723df0efd653e4a39e1ac363086f3e199e0f8b9ac->leave($__internal_4f66e4941b5c2060bf42e45723df0efd653e4a39e1ac363086f3e199e0f8b9ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
