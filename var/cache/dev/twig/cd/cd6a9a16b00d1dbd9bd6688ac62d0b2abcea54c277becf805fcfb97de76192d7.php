<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1739dd20252780a3d3f67fda3702de6f2605f6531d91d14a11ea0c7275e736e4 extends Twig_Template
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
        $__internal_11cf487c17c27721354d99c1037511b388b38c3d8a7181d0b3c3555d77f19036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cf487c17c27721354d99c1037511b388b38c3d8a7181d0b3c3555d77f19036->enter($__internal_11cf487c17c27721354d99c1037511b388b38c3d8a7181d0b3c3555d77f19036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_043d4bf76915432872a78bddfec2fbe1becfeb47ba2814afc97733b852f69851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043d4bf76915432872a78bddfec2fbe1becfeb47ba2814afc97733b852f69851->enter($__internal_043d4bf76915432872a78bddfec2fbe1becfeb47ba2814afc97733b852f69851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_11cf487c17c27721354d99c1037511b388b38c3d8a7181d0b3c3555d77f19036->leave($__internal_11cf487c17c27721354d99c1037511b388b38c3d8a7181d0b3c3555d77f19036_prof);

        
        $__internal_043d4bf76915432872a78bddfec2fbe1becfeb47ba2814afc97733b852f69851->leave($__internal_043d4bf76915432872a78bddfec2fbe1becfeb47ba2814afc97733b852f69851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
