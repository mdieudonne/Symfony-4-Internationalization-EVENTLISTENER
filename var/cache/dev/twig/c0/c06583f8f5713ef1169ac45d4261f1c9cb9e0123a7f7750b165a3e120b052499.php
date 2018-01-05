<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_553eba9307181160660f8e716b74501db8b5a580863367ae9a1895ab167ff902 extends Twig_Template
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
        $__internal_dfe3295c34682c8f26cfc47072d9ae6ff7d4389e48c4323afb76f4fb62e53855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe3295c34682c8f26cfc47072d9ae6ff7d4389e48c4323afb76f4fb62e53855->enter($__internal_dfe3295c34682c8f26cfc47072d9ae6ff7d4389e48c4323afb76f4fb62e53855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_205d931273d813dfe034b87b85d58c5bd67dfb4a140fa34eadf86f485b7d2ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205d931273d813dfe034b87b85d58c5bd67dfb4a140fa34eadf86f485b7d2ce8->enter($__internal_205d931273d813dfe034b87b85d58c5bd67dfb4a140fa34eadf86f485b7d2ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_dfe3295c34682c8f26cfc47072d9ae6ff7d4389e48c4323afb76f4fb62e53855->leave($__internal_dfe3295c34682c8f26cfc47072d9ae6ff7d4389e48c4323afb76f4fb62e53855_prof);

        
        $__internal_205d931273d813dfe034b87b85d58c5bd67dfb4a140fa34eadf86f485b7d2ce8->leave($__internal_205d931273d813dfe034b87b85d58c5bd67dfb4a140fa34eadf86f485b7d2ce8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
