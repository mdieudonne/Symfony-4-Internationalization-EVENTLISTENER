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
        $__internal_be93f476636140d7d762231b047e1bccc5863e8c65945b6ad12cee3aaa162f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be93f476636140d7d762231b047e1bccc5863e8c65945b6ad12cee3aaa162f10->enter($__internal_be93f476636140d7d762231b047e1bccc5863e8c65945b6ad12cee3aaa162f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_aa6a7a8c8be22591658118ae1b79684ec34ed37d868e99edf7261c2e82c2893f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6a7a8c8be22591658118ae1b79684ec34ed37d868e99edf7261c2e82c2893f->enter($__internal_aa6a7a8c8be22591658118ae1b79684ec34ed37d868e99edf7261c2e82c2893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_be93f476636140d7d762231b047e1bccc5863e8c65945b6ad12cee3aaa162f10->leave($__internal_be93f476636140d7d762231b047e1bccc5863e8c65945b6ad12cee3aaa162f10_prof);

        
        $__internal_aa6a7a8c8be22591658118ae1b79684ec34ed37d868e99edf7261c2e82c2893f->leave($__internal_aa6a7a8c8be22591658118ae1b79684ec34ed37d868e99edf7261c2e82c2893f_prof);

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
