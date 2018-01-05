<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e229a5bf4d564dc9b2c99e17024cc520a8ade7fc1bbbeca61e4745a04fa9cb4e extends Twig_Template
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
        $__internal_4552bb34f58b552692e6946a3d29a5eb55d8199e4a7f8a00bb2b964b11d3a9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4552bb34f58b552692e6946a3d29a5eb55d8199e4a7f8a00bb2b964b11d3a9da->enter($__internal_4552bb34f58b552692e6946a3d29a5eb55d8199e4a7f8a00bb2b964b11d3a9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1ecaf3de4ace500fe4afc13cb24e1c1f441a34ecfcd6b725f5c7b916fa16e85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecaf3de4ace500fe4afc13cb24e1c1f441a34ecfcd6b725f5c7b916fa16e85a->enter($__internal_1ecaf3de4ace500fe4afc13cb24e1c1f441a34ecfcd6b725f5c7b916fa16e85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4552bb34f58b552692e6946a3d29a5eb55d8199e4a7f8a00bb2b964b11d3a9da->leave($__internal_4552bb34f58b552692e6946a3d29a5eb55d8199e4a7f8a00bb2b964b11d3a9da_prof);

        
        $__internal_1ecaf3de4ace500fe4afc13cb24e1c1f441a34ecfcd6b725f5c7b916fa16e85a->leave($__internal_1ecaf3de4ace500fe4afc13cb24e1c1f441a34ecfcd6b725f5c7b916fa16e85a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
