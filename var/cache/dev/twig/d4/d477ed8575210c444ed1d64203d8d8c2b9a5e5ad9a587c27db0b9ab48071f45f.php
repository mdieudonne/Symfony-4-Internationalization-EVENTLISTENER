<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f39734932829ea31064d3be3a5641661c1ca07f927fc7c8c6782bfd74bbdfa19 extends Twig_Template
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
        $__internal_ce08980b5266d3cefe5851fa96c5b4d594c3c4408f02225ba14612a509b33b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce08980b5266d3cefe5851fa96c5b4d594c3c4408f02225ba14612a509b33b3f->enter($__internal_ce08980b5266d3cefe5851fa96c5b4d594c3c4408f02225ba14612a509b33b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_232256bb540199f7f3b4c91c6aec84fcf83721e08f776b245f3bef780cc5b5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232256bb540199f7f3b4c91c6aec84fcf83721e08f776b245f3bef780cc5b5b9->enter($__internal_232256bb540199f7f3b4c91c6aec84fcf83721e08f776b245f3bef780cc5b5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ce08980b5266d3cefe5851fa96c5b4d594c3c4408f02225ba14612a509b33b3f->leave($__internal_ce08980b5266d3cefe5851fa96c5b4d594c3c4408f02225ba14612a509b33b3f_prof);

        
        $__internal_232256bb540199f7f3b4c91c6aec84fcf83721e08f776b245f3bef780cc5b5b9->leave($__internal_232256bb540199f7f3b4c91c6aec84fcf83721e08f776b245f3bef780cc5b5b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
