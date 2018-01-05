<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_9ebd5d388edc2e0d3295ea4bf3a3997eb2056c7f49aee70229862ee76d16822c extends Twig_Template
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
        $__internal_979388cda56cba7f01b099610bcf61718b2fd1a9eb033ea40925e2941e4866cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979388cda56cba7f01b099610bcf61718b2fd1a9eb033ea40925e2941e4866cf->enter($__internal_979388cda56cba7f01b099610bcf61718b2fd1a9eb033ea40925e2941e4866cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_82ae4a1ec504886bf49221fceff02df4ab186dc195a423c0e98fa044f5aeb7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ae4a1ec504886bf49221fceff02df4ab186dc195a423c0e98fa044f5aeb7b1->enter($__internal_82ae4a1ec504886bf49221fceff02df4ab186dc195a423c0e98fa044f5aeb7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_979388cda56cba7f01b099610bcf61718b2fd1a9eb033ea40925e2941e4866cf->leave($__internal_979388cda56cba7f01b099610bcf61718b2fd1a9eb033ea40925e2941e4866cf_prof);

        
        $__internal_82ae4a1ec504886bf49221fceff02df4ab186dc195a423c0e98fa044f5aeb7b1->leave($__internal_82ae4a1ec504886bf49221fceff02df4ab186dc195a423c0e98fa044f5aeb7b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
