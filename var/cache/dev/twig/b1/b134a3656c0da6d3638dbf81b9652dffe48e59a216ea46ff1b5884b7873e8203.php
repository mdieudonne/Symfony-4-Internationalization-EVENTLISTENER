<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3b02ff96ae90a464adc0280a3f75b288faeff85716cc43df36f20b270ac06c0c extends Twig_Template
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
        $__internal_ffae2fc490a01e581ab195d625d29b1201189644cb32dec7c8a0288802991f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffae2fc490a01e581ab195d625d29b1201189644cb32dec7c8a0288802991f89->enter($__internal_ffae2fc490a01e581ab195d625d29b1201189644cb32dec7c8a0288802991f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8ebca6fbed51cc16890792e15b97020c7cf00f3e2a5a2c7134ea3b8337e45c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebca6fbed51cc16890792e15b97020c7cf00f3e2a5a2c7134ea3b8337e45c2f->enter($__internal_8ebca6fbed51cc16890792e15b97020c7cf00f3e2a5a2c7134ea3b8337e45c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ffae2fc490a01e581ab195d625d29b1201189644cb32dec7c8a0288802991f89->leave($__internal_ffae2fc490a01e581ab195d625d29b1201189644cb32dec7c8a0288802991f89_prof);

        
        $__internal_8ebca6fbed51cc16890792e15b97020c7cf00f3e2a5a2c7134ea3b8337e45c2f->leave($__internal_8ebca6fbed51cc16890792e15b97020c7cf00f3e2a5a2c7134ea3b8337e45c2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
