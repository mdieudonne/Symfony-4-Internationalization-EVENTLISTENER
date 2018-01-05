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
        $__internal_9637c1a36f4cea165befb3b20d7064530b86138a0946c9581192284ade0f0353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9637c1a36f4cea165befb3b20d7064530b86138a0946c9581192284ade0f0353->enter($__internal_9637c1a36f4cea165befb3b20d7064530b86138a0946c9581192284ade0f0353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_aca66035ef431ddb5fca1cedfe38aad395804d5ff3e150b3a23e99617483ae32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca66035ef431ddb5fca1cedfe38aad395804d5ff3e150b3a23e99617483ae32->enter($__internal_aca66035ef431ddb5fca1cedfe38aad395804d5ff3e150b3a23e99617483ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_9637c1a36f4cea165befb3b20d7064530b86138a0946c9581192284ade0f0353->leave($__internal_9637c1a36f4cea165befb3b20d7064530b86138a0946c9581192284ade0f0353_prof);

        
        $__internal_aca66035ef431ddb5fca1cedfe38aad395804d5ff3e150b3a23e99617483ae32->leave($__internal_aca66035ef431ddb5fca1cedfe38aad395804d5ff3e150b3a23e99617483ae32_prof);

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
