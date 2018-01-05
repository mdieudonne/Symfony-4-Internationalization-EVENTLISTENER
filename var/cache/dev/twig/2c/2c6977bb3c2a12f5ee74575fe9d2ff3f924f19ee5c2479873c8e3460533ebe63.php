<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_12d0ccb85d2ae5c61d5835c22a055153b10137b0a2b70e358064d5c83e0fc1d6 extends Twig_Template
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
        $__internal_54f0b14d996347617cbce2d56759ed43b3574e983475314d9b15cd64bf081e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f0b14d996347617cbce2d56759ed43b3574e983475314d9b15cd64bf081e34->enter($__internal_54f0b14d996347617cbce2d56759ed43b3574e983475314d9b15cd64bf081e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3b008fe825138b5a3483b9a5f0c95409217d4df39f45eefd884e4c69150b788a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b008fe825138b5a3483b9a5f0c95409217d4df39f45eefd884e4c69150b788a->enter($__internal_3b008fe825138b5a3483b9a5f0c95409217d4df39f45eefd884e4c69150b788a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_54f0b14d996347617cbce2d56759ed43b3574e983475314d9b15cd64bf081e34->leave($__internal_54f0b14d996347617cbce2d56759ed43b3574e983475314d9b15cd64bf081e34_prof);

        
        $__internal_3b008fe825138b5a3483b9a5f0c95409217d4df39f45eefd884e4c69150b788a->leave($__internal_3b008fe825138b5a3483b9a5f0c95409217d4df39f45eefd884e4c69150b788a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
