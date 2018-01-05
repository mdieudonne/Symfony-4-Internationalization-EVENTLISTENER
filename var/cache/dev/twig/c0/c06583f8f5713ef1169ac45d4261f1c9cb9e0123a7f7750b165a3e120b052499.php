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
        $__internal_96c6af3001319f5701c13a2e26064b1edb530d32860ff4f2168f6e37eeabd20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c6af3001319f5701c13a2e26064b1edb530d32860ff4f2168f6e37eeabd20c->enter($__internal_96c6af3001319f5701c13a2e26064b1edb530d32860ff4f2168f6e37eeabd20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_676810712d68b2cefabde04090de0f13a86ae97b79caf5e1206c0d9539299579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676810712d68b2cefabde04090de0f13a86ae97b79caf5e1206c0d9539299579->enter($__internal_676810712d68b2cefabde04090de0f13a86ae97b79caf5e1206c0d9539299579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_96c6af3001319f5701c13a2e26064b1edb530d32860ff4f2168f6e37eeabd20c->leave($__internal_96c6af3001319f5701c13a2e26064b1edb530d32860ff4f2168f6e37eeabd20c_prof);

        
        $__internal_676810712d68b2cefabde04090de0f13a86ae97b79caf5e1206c0d9539299579->leave($__internal_676810712d68b2cefabde04090de0f13a86ae97b79caf5e1206c0d9539299579_prof);

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
