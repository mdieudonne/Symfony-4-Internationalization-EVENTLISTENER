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
        $__internal_907639f76b74aae48eef43573ca7e16866aed575cf533b2fc3fe61d111767b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907639f76b74aae48eef43573ca7e16866aed575cf533b2fc3fe61d111767b99->enter($__internal_907639f76b74aae48eef43573ca7e16866aed575cf533b2fc3fe61d111767b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_049b84053d52b9df5cedca5b71444442f7495a6d73072301fb7fac59bbfd005b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049b84053d52b9df5cedca5b71444442f7495a6d73072301fb7fac59bbfd005b->enter($__internal_049b84053d52b9df5cedca5b71444442f7495a6d73072301fb7fac59bbfd005b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_907639f76b74aae48eef43573ca7e16866aed575cf533b2fc3fe61d111767b99->leave($__internal_907639f76b74aae48eef43573ca7e16866aed575cf533b2fc3fe61d111767b99_prof);

        
        $__internal_049b84053d52b9df5cedca5b71444442f7495a6d73072301fb7fac59bbfd005b->leave($__internal_049b84053d52b9df5cedca5b71444442f7495a6d73072301fb7fac59bbfd005b_prof);

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
