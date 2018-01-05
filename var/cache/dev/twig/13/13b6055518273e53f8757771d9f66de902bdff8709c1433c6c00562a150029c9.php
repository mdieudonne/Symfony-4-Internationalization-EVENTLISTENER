<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_fcaa46e1d35efeb0f05894f651903be5f89e62e3ec6a76d427f80f0fe214153c extends Twig_Template
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
        $__internal_dd3862be46a0e53e37676d9505d325a263bf819b4b239556696514b96069be63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3862be46a0e53e37676d9505d325a263bf819b4b239556696514b96069be63->enter($__internal_dd3862be46a0e53e37676d9505d325a263bf819b4b239556696514b96069be63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_234c898440b245595a21bcfb3489ec275ffc070c088a7ad62db1f0fd5e021495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234c898440b245595a21bcfb3489ec275ffc070c088a7ad62db1f0fd5e021495->enter($__internal_234c898440b245595a21bcfb3489ec275ffc070c088a7ad62db1f0fd5e021495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dd3862be46a0e53e37676d9505d325a263bf819b4b239556696514b96069be63->leave($__internal_dd3862be46a0e53e37676d9505d325a263bf819b4b239556696514b96069be63_prof);

        
        $__internal_234c898440b245595a21bcfb3489ec275ffc070c088a7ad62db1f0fd5e021495->leave($__internal_234c898440b245595a21bcfb3489ec275ffc070c088a7ad62db1f0fd5e021495_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
