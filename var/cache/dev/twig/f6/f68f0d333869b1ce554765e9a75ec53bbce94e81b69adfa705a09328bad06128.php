<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_704bef2099c9f8adbe93b8e80ec916aa146d8b683be21ecc1e8d429c8c80fa71 extends Twig_Template
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
        $__internal_b00c6e9a6d35f3ee0260e1c268e3f06a1d3684f99d2c3dfc3d0bd2dd68fc22c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00c6e9a6d35f3ee0260e1c268e3f06a1d3684f99d2c3dfc3d0bd2dd68fc22c6->enter($__internal_b00c6e9a6d35f3ee0260e1c268e3f06a1d3684f99d2c3dfc3d0bd2dd68fc22c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6f82dcd0ad0ba37656f1558f5506b1393f04c684c094d9b44f5050b575ec4320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f82dcd0ad0ba37656f1558f5506b1393f04c684c094d9b44f5050b575ec4320->enter($__internal_6f82dcd0ad0ba37656f1558f5506b1393f04c684c094d9b44f5050b575ec4320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b00c6e9a6d35f3ee0260e1c268e3f06a1d3684f99d2c3dfc3d0bd2dd68fc22c6->leave($__internal_b00c6e9a6d35f3ee0260e1c268e3f06a1d3684f99d2c3dfc3d0bd2dd68fc22c6_prof);

        
        $__internal_6f82dcd0ad0ba37656f1558f5506b1393f04c684c094d9b44f5050b575ec4320->leave($__internal_6f82dcd0ad0ba37656f1558f5506b1393f04c684c094d9b44f5050b575ec4320_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
