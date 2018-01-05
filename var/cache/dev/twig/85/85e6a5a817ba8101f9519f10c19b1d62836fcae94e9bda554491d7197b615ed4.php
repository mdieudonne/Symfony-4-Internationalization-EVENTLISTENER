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
        $__internal_62d2dc9992135d83f1b938d15bb3e4ddfbff8d3f288e688547148096812faa3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d2dc9992135d83f1b938d15bb3e4ddfbff8d3f288e688547148096812faa3c->enter($__internal_62d2dc9992135d83f1b938d15bb3e4ddfbff8d3f288e688547148096812faa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6d67eddf5a8abaa4b46b0b8b3afe8e719e992be7009669914d32e2bed2ce7582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d67eddf5a8abaa4b46b0b8b3afe8e719e992be7009669914d32e2bed2ce7582->enter($__internal_6d67eddf5a8abaa4b46b0b8b3afe8e719e992be7009669914d32e2bed2ce7582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_62d2dc9992135d83f1b938d15bb3e4ddfbff8d3f288e688547148096812faa3c->leave($__internal_62d2dc9992135d83f1b938d15bb3e4ddfbff8d3f288e688547148096812faa3c_prof);

        
        $__internal_6d67eddf5a8abaa4b46b0b8b3afe8e719e992be7009669914d32e2bed2ce7582->leave($__internal_6d67eddf5a8abaa4b46b0b8b3afe8e719e992be7009669914d32e2bed2ce7582_prof);

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
