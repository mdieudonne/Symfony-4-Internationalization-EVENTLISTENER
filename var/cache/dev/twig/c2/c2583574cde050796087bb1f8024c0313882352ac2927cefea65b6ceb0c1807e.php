<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d6c75316196ee223c546074e420ad61a5ca5420eb65792370648f21c1a544e1f extends Twig_Template
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
        $__internal_3217579fa6f79dac38946d6531581376e9d47fa33b72fa9d0e947ccd84867101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3217579fa6f79dac38946d6531581376e9d47fa33b72fa9d0e947ccd84867101->enter($__internal_3217579fa6f79dac38946d6531581376e9d47fa33b72fa9d0e947ccd84867101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c20819b7f731aa50a96fd9c5675d282b5ee4a479b60a7697e7c167f25560d0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20819b7f731aa50a96fd9c5675d282b5ee4a479b60a7697e7c167f25560d0e3->enter($__internal_c20819b7f731aa50a96fd9c5675d282b5ee4a479b60a7697e7c167f25560d0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3217579fa6f79dac38946d6531581376e9d47fa33b72fa9d0e947ccd84867101->leave($__internal_3217579fa6f79dac38946d6531581376e9d47fa33b72fa9d0e947ccd84867101_prof);

        
        $__internal_c20819b7f731aa50a96fd9c5675d282b5ee4a479b60a7697e7c167f25560d0e3->leave($__internal_c20819b7f731aa50a96fd9c5675d282b5ee4a479b60a7697e7c167f25560d0e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
