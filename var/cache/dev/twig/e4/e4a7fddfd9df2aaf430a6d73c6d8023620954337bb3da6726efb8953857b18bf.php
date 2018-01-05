<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1c518266f6e23eaf3741debdbf1c035fd880730a5e12543819033014250cc892 extends Twig_Template
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
        $__internal_cd12cc978fd2a26eddc0f765c2859d8fca29370e50f6ed4d8b626877b8af8f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd12cc978fd2a26eddc0f765c2859d8fca29370e50f6ed4d8b626877b8af8f5a->enter($__internal_cd12cc978fd2a26eddc0f765c2859d8fca29370e50f6ed4d8b626877b8af8f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e7b5593e947c609ec3b2c928d496fda19e40ff7be93d9075c268081dd5947e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b5593e947c609ec3b2c928d496fda19e40ff7be93d9075c268081dd5947e6d->enter($__internal_e7b5593e947c609ec3b2c928d496fda19e40ff7be93d9075c268081dd5947e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_cd12cc978fd2a26eddc0f765c2859d8fca29370e50f6ed4d8b626877b8af8f5a->leave($__internal_cd12cc978fd2a26eddc0f765c2859d8fca29370e50f6ed4d8b626877b8af8f5a_prof);

        
        $__internal_e7b5593e947c609ec3b2c928d496fda19e40ff7be93d9075c268081dd5947e6d->leave($__internal_e7b5593e947c609ec3b2c928d496fda19e40ff7be93d9075c268081dd5947e6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
