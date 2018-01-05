<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_423c3a8987e2c468488fa98b2fddbe3a5e8e1d6b9c537ab4fdf042337cff450f extends Twig_Template
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
        $__internal_5ff6ba8a337b8d7131d80c548c88aeaeb90a832bbb02867d7509c2949ffc1652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff6ba8a337b8d7131d80c548c88aeaeb90a832bbb02867d7509c2949ffc1652->enter($__internal_5ff6ba8a337b8d7131d80c548c88aeaeb90a832bbb02867d7509c2949ffc1652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9794fb172c824bd8d1e37f5f3ef9c96011c4c5a7645add9a26b0570972bb20d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9794fb172c824bd8d1e37f5f3ef9c96011c4c5a7645add9a26b0570972bb20d8->enter($__internal_9794fb172c824bd8d1e37f5f3ef9c96011c4c5a7645add9a26b0570972bb20d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5ff6ba8a337b8d7131d80c548c88aeaeb90a832bbb02867d7509c2949ffc1652->leave($__internal_5ff6ba8a337b8d7131d80c548c88aeaeb90a832bbb02867d7509c2949ffc1652_prof);

        
        $__internal_9794fb172c824bd8d1e37f5f3ef9c96011c4c5a7645add9a26b0570972bb20d8->leave($__internal_9794fb172c824bd8d1e37f5f3ef9c96011c4c5a7645add9a26b0570972bb20d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
