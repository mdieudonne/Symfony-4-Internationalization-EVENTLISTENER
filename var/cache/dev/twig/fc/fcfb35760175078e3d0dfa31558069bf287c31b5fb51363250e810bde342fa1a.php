<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6fc1159b072731d573e5066f2442045d5f86b6cf9f0ccaab11e45c9af006d7c8 extends Twig_Template
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
        $__internal_570cc5c321473590f18f334650a43afb209e9c3176de50d440980b905f3e00b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570cc5c321473590f18f334650a43afb209e9c3176de50d440980b905f3e00b8->enter($__internal_570cc5c321473590f18f334650a43afb209e9c3176de50d440980b905f3e00b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_014191e8aef629631892db4cd0f4763513275947d6329a5a16e1f4f54023e570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014191e8aef629631892db4cd0f4763513275947d6329a5a16e1f4f54023e570->enter($__internal_014191e8aef629631892db4cd0f4763513275947d6329a5a16e1f4f54023e570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_570cc5c321473590f18f334650a43afb209e9c3176de50d440980b905f3e00b8->leave($__internal_570cc5c321473590f18f334650a43afb209e9c3176de50d440980b905f3e00b8_prof);

        
        $__internal_014191e8aef629631892db4cd0f4763513275947d6329a5a16e1f4f54023e570->leave($__internal_014191e8aef629631892db4cd0f4763513275947d6329a5a16e1f4f54023e570_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
