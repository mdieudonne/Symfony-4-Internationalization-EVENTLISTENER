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
        $__internal_b213b5240fe4bc5ab72df1f96580cc5e2138de99e9cd871d9461fcb3ae967a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b213b5240fe4bc5ab72df1f96580cc5e2138de99e9cd871d9461fcb3ae967a91->enter($__internal_b213b5240fe4bc5ab72df1f96580cc5e2138de99e9cd871d9461fcb3ae967a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a24cb4316ff976cb2c5471fc8295577b4c68694e5a668a34fce378440a4569ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24cb4316ff976cb2c5471fc8295577b4c68694e5a668a34fce378440a4569ea->enter($__internal_a24cb4316ff976cb2c5471fc8295577b4c68694e5a668a34fce378440a4569ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b213b5240fe4bc5ab72df1f96580cc5e2138de99e9cd871d9461fcb3ae967a91->leave($__internal_b213b5240fe4bc5ab72df1f96580cc5e2138de99e9cd871d9461fcb3ae967a91_prof);

        
        $__internal_a24cb4316ff976cb2c5471fc8295577b4c68694e5a668a34fce378440a4569ea->leave($__internal_a24cb4316ff976cb2c5471fc8295577b4c68694e5a668a34fce378440a4569ea_prof);

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
