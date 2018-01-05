<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_a57c97180adcf21cb9f65dde957ca9c33d5b418fb0c30d91a5e99cf8abb4f29c extends Twig_Template
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
        $__internal_4066d1b8598b307bfd9ed7c6ca51f925ed6b1084603984b3f93443d4824007a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4066d1b8598b307bfd9ed7c6ca51f925ed6b1084603984b3f93443d4824007a2->enter($__internal_4066d1b8598b307bfd9ed7c6ca51f925ed6b1084603984b3f93443d4824007a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_75f5632947661d2aef50c8e64c6affdfee8b359c8347ecd55f4edea0a92fbfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f5632947661d2aef50c8e64c6affdfee8b359c8347ecd55f4edea0a92fbfec->enter($__internal_75f5632947661d2aef50c8e64c6affdfee8b359c8347ecd55f4edea0a92fbfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_4066d1b8598b307bfd9ed7c6ca51f925ed6b1084603984b3f93443d4824007a2->leave($__internal_4066d1b8598b307bfd9ed7c6ca51f925ed6b1084603984b3f93443d4824007a2_prof);

        
        $__internal_75f5632947661d2aef50c8e64c6affdfee8b359c8347ecd55f4edea0a92fbfec->leave($__internal_75f5632947661d2aef50c8e64c6affdfee8b359c8347ecd55f4edea0a92fbfec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
