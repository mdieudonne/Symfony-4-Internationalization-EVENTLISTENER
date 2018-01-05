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
        $__internal_58a27761a194566ec74eb2c214c652a23ca6fc84e99a71b66c17e4a88ef69db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a27761a194566ec74eb2c214c652a23ca6fc84e99a71b66c17e4a88ef69db4->enter($__internal_58a27761a194566ec74eb2c214c652a23ca6fc84e99a71b66c17e4a88ef69db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0bc212991b14a234caa1391406c1c87a3888718785a621f92043ddd7c1e73538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc212991b14a234caa1391406c1c87a3888718785a621f92043ddd7c1e73538->enter($__internal_0bc212991b14a234caa1391406c1c87a3888718785a621f92043ddd7c1e73538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_58a27761a194566ec74eb2c214c652a23ca6fc84e99a71b66c17e4a88ef69db4->leave($__internal_58a27761a194566ec74eb2c214c652a23ca6fc84e99a71b66c17e4a88ef69db4_prof);

        
        $__internal_0bc212991b14a234caa1391406c1c87a3888718785a621f92043ddd7c1e73538->leave($__internal_0bc212991b14a234caa1391406c1c87a3888718785a621f92043ddd7c1e73538_prof);

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
