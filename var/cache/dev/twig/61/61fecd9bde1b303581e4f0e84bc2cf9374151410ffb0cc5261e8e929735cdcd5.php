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
        $__internal_8f10f600991713649d5c3f1ec5f52b1e574478a08a63aecf586c6f07cb9de426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f10f600991713649d5c3f1ec5f52b1e574478a08a63aecf586c6f07cb9de426->enter($__internal_8f10f600991713649d5c3f1ec5f52b1e574478a08a63aecf586c6f07cb9de426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_057e7c3ea2ed5433bfd5454e0e8386ece4c1927fdf45930fc5773a19e6c7c058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057e7c3ea2ed5433bfd5454e0e8386ece4c1927fdf45930fc5773a19e6c7c058->enter($__internal_057e7c3ea2ed5433bfd5454e0e8386ece4c1927fdf45930fc5773a19e6c7c058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_8f10f600991713649d5c3f1ec5f52b1e574478a08a63aecf586c6f07cb9de426->leave($__internal_8f10f600991713649d5c3f1ec5f52b1e574478a08a63aecf586c6f07cb9de426_prof);

        
        $__internal_057e7c3ea2ed5433bfd5454e0e8386ece4c1927fdf45930fc5773a19e6c7c058->leave($__internal_057e7c3ea2ed5433bfd5454e0e8386ece4c1927fdf45930fc5773a19e6c7c058_prof);

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
