<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a87494fd5cf3819db32b938d7e6eb1fb115dc16a4974fb202b7ab3034190f73b extends Twig_Template
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
        $__internal_4936f64e0b1a67da1b740a105c560efe575b7aaa1aae2cd153703b8ab9bccdd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4936f64e0b1a67da1b740a105c560efe575b7aaa1aae2cd153703b8ab9bccdd2->enter($__internal_4936f64e0b1a67da1b740a105c560efe575b7aaa1aae2cd153703b8ab9bccdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_629b156cbfb7e7cb10a1c0826dbe53520b4c0e7d70c5f3e6490d7eda3f0ee609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629b156cbfb7e7cb10a1c0826dbe53520b4c0e7d70c5f3e6490d7eda3f0ee609->enter($__internal_629b156cbfb7e7cb10a1c0826dbe53520b4c0e7d70c5f3e6490d7eda3f0ee609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4936f64e0b1a67da1b740a105c560efe575b7aaa1aae2cd153703b8ab9bccdd2->leave($__internal_4936f64e0b1a67da1b740a105c560efe575b7aaa1aae2cd153703b8ab9bccdd2_prof);

        
        $__internal_629b156cbfb7e7cb10a1c0826dbe53520b4c0e7d70c5f3e6490d7eda3f0ee609->leave($__internal_629b156cbfb7e7cb10a1c0826dbe53520b4c0e7d70c5f3e6490d7eda3f0ee609_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
