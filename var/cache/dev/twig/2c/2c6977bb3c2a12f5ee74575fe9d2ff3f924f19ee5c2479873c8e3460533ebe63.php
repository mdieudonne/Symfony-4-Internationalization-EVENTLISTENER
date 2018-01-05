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
        $__internal_70dc434d93a365e6715b073b32ab3c5d9580ec927d6f8a55bfd066ee967caf0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70dc434d93a365e6715b073b32ab3c5d9580ec927d6f8a55bfd066ee967caf0b->enter($__internal_70dc434d93a365e6715b073b32ab3c5d9580ec927d6f8a55bfd066ee967caf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_617372b59152aee5780b156a02b29d83f0a92f883feb4b49d9bdb01cc4438170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617372b59152aee5780b156a02b29d83f0a92f883feb4b49d9bdb01cc4438170->enter($__internal_617372b59152aee5780b156a02b29d83f0a92f883feb4b49d9bdb01cc4438170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_70dc434d93a365e6715b073b32ab3c5d9580ec927d6f8a55bfd066ee967caf0b->leave($__internal_70dc434d93a365e6715b073b32ab3c5d9580ec927d6f8a55bfd066ee967caf0b_prof);

        
        $__internal_617372b59152aee5780b156a02b29d83f0a92f883feb4b49d9bdb01cc4438170->leave($__internal_617372b59152aee5780b156a02b29d83f0a92f883feb4b49d9bdb01cc4438170_prof);

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
