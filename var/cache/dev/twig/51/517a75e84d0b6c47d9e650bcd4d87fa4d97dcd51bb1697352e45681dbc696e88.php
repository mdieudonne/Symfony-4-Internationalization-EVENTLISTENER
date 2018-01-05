<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_632cb0703a3da8d8ecc03c782fba6b8e57cd1fd2eb1d07c8a7f39b02bc14c086 extends Twig_Template
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
        $__internal_65fbcab625689f5fb0e9eeaf596504eb919499dd1ffc242703cb16a03b74e80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fbcab625689f5fb0e9eeaf596504eb919499dd1ffc242703cb16a03b74e80c->enter($__internal_65fbcab625689f5fb0e9eeaf596504eb919499dd1ffc242703cb16a03b74e80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4305ca1019f7f1ba7e5f383e3016b80d9d16dfe8553b5318c64a98adefc4c58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4305ca1019f7f1ba7e5f383e3016b80d9d16dfe8553b5318c64a98adefc4c58c->enter($__internal_4305ca1019f7f1ba7e5f383e3016b80d9d16dfe8553b5318c64a98adefc4c58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_65fbcab625689f5fb0e9eeaf596504eb919499dd1ffc242703cb16a03b74e80c->leave($__internal_65fbcab625689f5fb0e9eeaf596504eb919499dd1ffc242703cb16a03b74e80c_prof);

        
        $__internal_4305ca1019f7f1ba7e5f383e3016b80d9d16dfe8553b5318c64a98adefc4c58c->leave($__internal_4305ca1019f7f1ba7e5f383e3016b80d9d16dfe8553b5318c64a98adefc4c58c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
