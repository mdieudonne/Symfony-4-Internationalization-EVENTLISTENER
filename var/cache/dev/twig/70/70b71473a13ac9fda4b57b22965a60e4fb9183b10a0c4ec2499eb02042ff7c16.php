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
        $__internal_03c7d2da6c4704af1750eb8f02eee9bfe5ddd53c4118b082f0713ebe63dc35fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c7d2da6c4704af1750eb8f02eee9bfe5ddd53c4118b082f0713ebe63dc35fa->enter($__internal_03c7d2da6c4704af1750eb8f02eee9bfe5ddd53c4118b082f0713ebe63dc35fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cc111567e1a5e698972fdc6ce762d8fdae6c4b85c856ad0acd9f43ba1ce2dd00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc111567e1a5e698972fdc6ce762d8fdae6c4b85c856ad0acd9f43ba1ce2dd00->enter($__internal_cc111567e1a5e698972fdc6ce762d8fdae6c4b85c856ad0acd9f43ba1ce2dd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_03c7d2da6c4704af1750eb8f02eee9bfe5ddd53c4118b082f0713ebe63dc35fa->leave($__internal_03c7d2da6c4704af1750eb8f02eee9bfe5ddd53c4118b082f0713ebe63dc35fa_prof);

        
        $__internal_cc111567e1a5e698972fdc6ce762d8fdae6c4b85c856ad0acd9f43ba1ce2dd00->leave($__internal_cc111567e1a5e698972fdc6ce762d8fdae6c4b85c856ad0acd9f43ba1ce2dd00_prof);

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
