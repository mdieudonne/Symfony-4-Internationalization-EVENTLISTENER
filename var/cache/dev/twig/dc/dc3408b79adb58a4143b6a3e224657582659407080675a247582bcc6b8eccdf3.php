<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_72647006d10a937c57322b506b560dc309c569552273346139029d5d519f1ec8 extends Twig_Template
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
        $__internal_eb647cd9b36d82ef784fb5cb3ba65cd282c6d14d3ea96f7e26269fc040e0c2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb647cd9b36d82ef784fb5cb3ba65cd282c6d14d3ea96f7e26269fc040e0c2cc->enter($__internal_eb647cd9b36d82ef784fb5cb3ba65cd282c6d14d3ea96f7e26269fc040e0c2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d063fce078e4f112e767480d63b2da04d128f94cbecb9ece129becca176f7e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d063fce078e4f112e767480d63b2da04d128f94cbecb9ece129becca176f7e7d->enter($__internal_d063fce078e4f112e767480d63b2da04d128f94cbecb9ece129becca176f7e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_eb647cd9b36d82ef784fb5cb3ba65cd282c6d14d3ea96f7e26269fc040e0c2cc->leave($__internal_eb647cd9b36d82ef784fb5cb3ba65cd282c6d14d3ea96f7e26269fc040e0c2cc_prof);

        
        $__internal_d063fce078e4f112e767480d63b2da04d128f94cbecb9ece129becca176f7e7d->leave($__internal_d063fce078e4f112e767480d63b2da04d128f94cbecb9ece129becca176f7e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
