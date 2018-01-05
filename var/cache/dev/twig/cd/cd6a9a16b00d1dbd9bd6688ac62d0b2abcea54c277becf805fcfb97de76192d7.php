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
        $__internal_72343ed71c6bf613de500bc5b2e44635161957ed1eeaafd2b5d8dde013696747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72343ed71c6bf613de500bc5b2e44635161957ed1eeaafd2b5d8dde013696747->enter($__internal_72343ed71c6bf613de500bc5b2e44635161957ed1eeaafd2b5d8dde013696747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bf4137ced353020756ccd853ca9dbd54da7a250b0f5ffa3caa95e205c72bb50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4137ced353020756ccd853ca9dbd54da7a250b0f5ffa3caa95e205c72bb50f->enter($__internal_bf4137ced353020756ccd853ca9dbd54da7a250b0f5ffa3caa95e205c72bb50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_72343ed71c6bf613de500bc5b2e44635161957ed1eeaafd2b5d8dde013696747->leave($__internal_72343ed71c6bf613de500bc5b2e44635161957ed1eeaafd2b5d8dde013696747_prof);

        
        $__internal_bf4137ced353020756ccd853ca9dbd54da7a250b0f5ffa3caa95e205c72bb50f->leave($__internal_bf4137ced353020756ccd853ca9dbd54da7a250b0f5ffa3caa95e205c72bb50f_prof);

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
