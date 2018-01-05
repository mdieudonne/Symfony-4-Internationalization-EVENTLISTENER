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
        $__internal_637051f54e880ec1b7a0a5556eed23acd5327024de2b9548d06b27d982c2ac12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637051f54e880ec1b7a0a5556eed23acd5327024de2b9548d06b27d982c2ac12->enter($__internal_637051f54e880ec1b7a0a5556eed23acd5327024de2b9548d06b27d982c2ac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7d2e2456c8f2ab2fc353179ea20d5bdc8756bb995c349371436a6b87c2735e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2e2456c8f2ab2fc353179ea20d5bdc8756bb995c349371436a6b87c2735e8f->enter($__internal_7d2e2456c8f2ab2fc353179ea20d5bdc8756bb995c349371436a6b87c2735e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_637051f54e880ec1b7a0a5556eed23acd5327024de2b9548d06b27d982c2ac12->leave($__internal_637051f54e880ec1b7a0a5556eed23acd5327024de2b9548d06b27d982c2ac12_prof);

        
        $__internal_7d2e2456c8f2ab2fc353179ea20d5bdc8756bb995c349371436a6b87c2735e8f->leave($__internal_7d2e2456c8f2ab2fc353179ea20d5bdc8756bb995c349371436a6b87c2735e8f_prof);

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
