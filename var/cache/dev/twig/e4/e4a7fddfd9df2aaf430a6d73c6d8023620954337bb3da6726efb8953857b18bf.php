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
        $__internal_b199a2ff0f285a5efaff5bfb7e1aa61533d5246a17768b90892fa5190cb2c752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b199a2ff0f285a5efaff5bfb7e1aa61533d5246a17768b90892fa5190cb2c752->enter($__internal_b199a2ff0f285a5efaff5bfb7e1aa61533d5246a17768b90892fa5190cb2c752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bb956bff6bb7c12e2b4a6db9aeafe8879b33ab99702b2f17cbff80898d4d26db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb956bff6bb7c12e2b4a6db9aeafe8879b33ab99702b2f17cbff80898d4d26db->enter($__internal_bb956bff6bb7c12e2b4a6db9aeafe8879b33ab99702b2f17cbff80898d4d26db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_b199a2ff0f285a5efaff5bfb7e1aa61533d5246a17768b90892fa5190cb2c752->leave($__internal_b199a2ff0f285a5efaff5bfb7e1aa61533d5246a17768b90892fa5190cb2c752_prof);

        
        $__internal_bb956bff6bb7c12e2b4a6db9aeafe8879b33ab99702b2f17cbff80898d4d26db->leave($__internal_bb956bff6bb7c12e2b4a6db9aeafe8879b33ab99702b2f17cbff80898d4d26db_prof);

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
