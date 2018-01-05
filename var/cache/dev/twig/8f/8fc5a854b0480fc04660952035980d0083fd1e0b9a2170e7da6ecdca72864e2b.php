<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_370b1b70cb47ad2516e43df14a1de1f374b0106a2a26ca1328ff3de200dab8a1 extends Twig_Template
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
        $__internal_71f48b20c45a525e7904ca38dba9fce31cf10ff71abf036d5cb4ca6dc761b386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f48b20c45a525e7904ca38dba9fce31cf10ff71abf036d5cb4ca6dc761b386->enter($__internal_71f48b20c45a525e7904ca38dba9fce31cf10ff71abf036d5cb4ca6dc761b386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7b4586197db128a6dceb4fc1a9092fc9cc120fde9bdd965f6f65309b908e4398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4586197db128a6dceb4fc1a9092fc9cc120fde9bdd965f6f65309b908e4398->enter($__internal_7b4586197db128a6dceb4fc1a9092fc9cc120fde9bdd965f6f65309b908e4398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_71f48b20c45a525e7904ca38dba9fce31cf10ff71abf036d5cb4ca6dc761b386->leave($__internal_71f48b20c45a525e7904ca38dba9fce31cf10ff71abf036d5cb4ca6dc761b386_prof);

        
        $__internal_7b4586197db128a6dceb4fc1a9092fc9cc120fde9bdd965f6f65309b908e4398->leave($__internal_7b4586197db128a6dceb4fc1a9092fc9cc120fde9bdd965f6f65309b908e4398_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
