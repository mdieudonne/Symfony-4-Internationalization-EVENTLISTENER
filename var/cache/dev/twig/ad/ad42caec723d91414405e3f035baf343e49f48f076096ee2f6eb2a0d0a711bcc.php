<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a7d629e6fd55973282d2a872863ea269c89f5f2ba8f74ab9326ccca764645b36 extends Twig_Template
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
        $__internal_b01daa32376232e8e13435d4f10e5870099df53141c86219a5663d9e4b0085a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01daa32376232e8e13435d4f10e5870099df53141c86219a5663d9e4b0085a5->enter($__internal_b01daa32376232e8e13435d4f10e5870099df53141c86219a5663d9e4b0085a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_43f8095861ed52f90cc4484f28bd75402691a223f31ccd6f01a4055a76d9c027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f8095861ed52f90cc4484f28bd75402691a223f31ccd6f01a4055a76d9c027->enter($__internal_43f8095861ed52f90cc4484f28bd75402691a223f31ccd6f01a4055a76d9c027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b01daa32376232e8e13435d4f10e5870099df53141c86219a5663d9e4b0085a5->leave($__internal_b01daa32376232e8e13435d4f10e5870099df53141c86219a5663d9e4b0085a5_prof);

        
        $__internal_43f8095861ed52f90cc4484f28bd75402691a223f31ccd6f01a4055a76d9c027->leave($__internal_43f8095861ed52f90cc4484f28bd75402691a223f31ccd6f01a4055a76d9c027_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
