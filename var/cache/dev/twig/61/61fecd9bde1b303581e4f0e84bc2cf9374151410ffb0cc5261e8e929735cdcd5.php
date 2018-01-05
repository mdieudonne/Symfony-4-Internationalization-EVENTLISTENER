<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_233da29f9abe4d514f5ce42002a77f0e8097d3f910692f78653dbe329bb406d0 extends Twig_Template
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
        $__internal_0339890cddfab64ddd3a91a2102ad1c1b201bfcff869ea61295599b87a07a4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0339890cddfab64ddd3a91a2102ad1c1b201bfcff869ea61295599b87a07a4d6->enter($__internal_0339890cddfab64ddd3a91a2102ad1c1b201bfcff869ea61295599b87a07a4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_2d1ff6c0efd3d84b68d238b689542033b1cf72ce94cb9069d44519f1da22bebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1ff6c0efd3d84b68d238b689542033b1cf72ce94cb9069d44519f1da22bebc->enter($__internal_2d1ff6c0efd3d84b68d238b689542033b1cf72ce94cb9069d44519f1da22bebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_0339890cddfab64ddd3a91a2102ad1c1b201bfcff869ea61295599b87a07a4d6->leave($__internal_0339890cddfab64ddd3a91a2102ad1c1b201bfcff869ea61295599b87a07a4d6_prof);

        
        $__internal_2d1ff6c0efd3d84b68d238b689542033b1cf72ce94cb9069d44519f1da22bebc->leave($__internal_2d1ff6c0efd3d84b68d238b689542033b1cf72ce94cb9069d44519f1da22bebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
