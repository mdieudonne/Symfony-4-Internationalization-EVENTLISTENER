<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2cf2a43befcec55f1313d2d9fb87a556f1c2e3d1f582726ae8c48344ddc3e336 extends Twig_Template
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
        $__internal_95e945bdcdfa6e2f3233ecb688dca4624cd1d42921e167b7f7a8c391e0cae3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e945bdcdfa6e2f3233ecb688dca4624cd1d42921e167b7f7a8c391e0cae3ea->enter($__internal_95e945bdcdfa6e2f3233ecb688dca4624cd1d42921e167b7f7a8c391e0cae3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a0f7a1296689bf620343180241e1e9dce24ab64a622d6f8f452b3707a1ec5193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f7a1296689bf620343180241e1e9dce24ab64a622d6f8f452b3707a1ec5193->enter($__internal_a0f7a1296689bf620343180241e1e9dce24ab64a622d6f8f452b3707a1ec5193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_95e945bdcdfa6e2f3233ecb688dca4624cd1d42921e167b7f7a8c391e0cae3ea->leave($__internal_95e945bdcdfa6e2f3233ecb688dca4624cd1d42921e167b7f7a8c391e0cae3ea_prof);

        
        $__internal_a0f7a1296689bf620343180241e1e9dce24ab64a622d6f8f452b3707a1ec5193->leave($__internal_a0f7a1296689bf620343180241e1e9dce24ab64a622d6f8f452b3707a1ec5193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
