<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_49785d6adf4c4b2ad268e8dcb66ad71bffe857ba6178b4a75f4783113c7f3074 extends Twig_Template
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
        $__internal_b2719db4261929282ed70b7b658d0d02fc9fae12765ac1e9290a0898aeff8ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2719db4261929282ed70b7b658d0d02fc9fae12765ac1e9290a0898aeff8ee9->enter($__internal_b2719db4261929282ed70b7b658d0d02fc9fae12765ac1e9290a0898aeff8ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ddfc365732d17c4325f1698eb6c0ece46181951f2791c39fe9d0859c0aec3115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfc365732d17c4325f1698eb6c0ece46181951f2791c39fe9d0859c0aec3115->enter($__internal_ddfc365732d17c4325f1698eb6c0ece46181951f2791c39fe9d0859c0aec3115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b2719db4261929282ed70b7b658d0d02fc9fae12765ac1e9290a0898aeff8ee9->leave($__internal_b2719db4261929282ed70b7b658d0d02fc9fae12765ac1e9290a0898aeff8ee9_prof);

        
        $__internal_ddfc365732d17c4325f1698eb6c0ece46181951f2791c39fe9d0859c0aec3115->leave($__internal_ddfc365732d17c4325f1698eb6c0ece46181951f2791c39fe9d0859c0aec3115_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
