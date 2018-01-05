<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c5bb91f2dd4d6e6ab326e702f41cf4129c35ced173469cad5c280e50ac7c5576 extends Twig_Template
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
        $__internal_09f3ab88ddb288514dddbefaa554b5baa69a1ffff7a53906763fa0e22fb47b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f3ab88ddb288514dddbefaa554b5baa69a1ffff7a53906763fa0e22fb47b3d->enter($__internal_09f3ab88ddb288514dddbefaa554b5baa69a1ffff7a53906763fa0e22fb47b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b4f1aa4632aaac7b59aace9fb7899101a9c9bb465ccfc0dea1a28619063f709b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f1aa4632aaac7b59aace9fb7899101a9c9bb465ccfc0dea1a28619063f709b->enter($__internal_b4f1aa4632aaac7b59aace9fb7899101a9c9bb465ccfc0dea1a28619063f709b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_09f3ab88ddb288514dddbefaa554b5baa69a1ffff7a53906763fa0e22fb47b3d->leave($__internal_09f3ab88ddb288514dddbefaa554b5baa69a1ffff7a53906763fa0e22fb47b3d_prof);

        
        $__internal_b4f1aa4632aaac7b59aace9fb7899101a9c9bb465ccfc0dea1a28619063f709b->leave($__internal_b4f1aa4632aaac7b59aace9fb7899101a9c9bb465ccfc0dea1a28619063f709b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
