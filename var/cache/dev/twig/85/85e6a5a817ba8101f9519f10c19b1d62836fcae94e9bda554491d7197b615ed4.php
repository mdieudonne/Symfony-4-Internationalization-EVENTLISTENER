<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d0a1d714d1a7971b5e684060cc57249c1933883ef8b5171af65f8550df7599e2 extends Twig_Template
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
        $__internal_0714ca86f967a4f34d493194118949368a6ef30d7518048f117d571d33409a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0714ca86f967a4f34d493194118949368a6ef30d7518048f117d571d33409a8b->enter($__internal_0714ca86f967a4f34d493194118949368a6ef30d7518048f117d571d33409a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2751011c2684b7a69234e8473225118eb529a8935d080b0bb74af1b0b1a8332a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2751011c2684b7a69234e8473225118eb529a8935d080b0bb74af1b0b1a8332a->enter($__internal_2751011c2684b7a69234e8473225118eb529a8935d080b0bb74af1b0b1a8332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0714ca86f967a4f34d493194118949368a6ef30d7518048f117d571d33409a8b->leave($__internal_0714ca86f967a4f34d493194118949368a6ef30d7518048f117d571d33409a8b_prof);

        
        $__internal_2751011c2684b7a69234e8473225118eb529a8935d080b0bb74af1b0b1a8332a->leave($__internal_2751011c2684b7a69234e8473225118eb529a8935d080b0bb74af1b0b1a8332a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
