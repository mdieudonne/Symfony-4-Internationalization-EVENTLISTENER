<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_18a607bb11f6447941d4d2ae6208deb079980c6f81d4928a301f68c45c35be0f extends Twig_Template
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
        $__internal_65c46f95f30af89fa4dda353ce9e76b702e9dad36111b9b9b27040ea9a1551c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c46f95f30af89fa4dda353ce9e76b702e9dad36111b9b9b27040ea9a1551c4->enter($__internal_65c46f95f30af89fa4dda353ce9e76b702e9dad36111b9b9b27040ea9a1551c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6642dda4c821f3bde3c5a0b09fb0a5c5d5c292a7b9bc4b2a8030765e5bde31a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6642dda4c821f3bde3c5a0b09fb0a5c5d5c292a7b9bc4b2a8030765e5bde31a3->enter($__internal_6642dda4c821f3bde3c5a0b09fb0a5c5d5c292a7b9bc4b2a8030765e5bde31a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_65c46f95f30af89fa4dda353ce9e76b702e9dad36111b9b9b27040ea9a1551c4->leave($__internal_65c46f95f30af89fa4dda353ce9e76b702e9dad36111b9b9b27040ea9a1551c4_prof);

        
        $__internal_6642dda4c821f3bde3c5a0b09fb0a5c5d5c292a7b9bc4b2a8030765e5bde31a3->leave($__internal_6642dda4c821f3bde3c5a0b09fb0a5c5d5c292a7b9bc4b2a8030765e5bde31a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
