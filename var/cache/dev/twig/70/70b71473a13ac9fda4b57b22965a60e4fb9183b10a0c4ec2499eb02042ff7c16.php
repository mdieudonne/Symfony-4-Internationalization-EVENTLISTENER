<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9fb6aabddd799c6b6badd25b931fabc32d0e32fd55cf5c5232d9640f2ac845fd extends Twig_Template
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
        $__internal_9e06fb790be780c48b701a47850db1d5d0dc2dc786a55725639f925ca9cdb699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e06fb790be780c48b701a47850db1d5d0dc2dc786a55725639f925ca9cdb699->enter($__internal_9e06fb790be780c48b701a47850db1d5d0dc2dc786a55725639f925ca9cdb699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0b5dbeae12abac951fd762e5f89ed98f897740256c96edb6c4fc8eedc696d20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5dbeae12abac951fd762e5f89ed98f897740256c96edb6c4fc8eedc696d20d->enter($__internal_0b5dbeae12abac951fd762e5f89ed98f897740256c96edb6c4fc8eedc696d20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_9e06fb790be780c48b701a47850db1d5d0dc2dc786a55725639f925ca9cdb699->leave($__internal_9e06fb790be780c48b701a47850db1d5d0dc2dc786a55725639f925ca9cdb699_prof);

        
        $__internal_0b5dbeae12abac951fd762e5f89ed98f897740256c96edb6c4fc8eedc696d20d->leave($__internal_0b5dbeae12abac951fd762e5f89ed98f897740256c96edb6c4fc8eedc696d20d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
