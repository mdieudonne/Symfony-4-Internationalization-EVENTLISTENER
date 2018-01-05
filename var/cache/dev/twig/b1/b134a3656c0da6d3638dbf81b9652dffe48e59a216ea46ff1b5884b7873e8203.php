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
        $__internal_a28243f84f0a0c4d19740036b65e496e707565ffc244d1fb64b9b4399a5f75cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28243f84f0a0c4d19740036b65e496e707565ffc244d1fb64b9b4399a5f75cd->enter($__internal_a28243f84f0a0c4d19740036b65e496e707565ffc244d1fb64b9b4399a5f75cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_51bed91311f578339510f4d5d5f3420078edeff282233c34e1a48b24031d0408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bed91311f578339510f4d5d5f3420078edeff282233c34e1a48b24031d0408->enter($__internal_51bed91311f578339510f4d5d5f3420078edeff282233c34e1a48b24031d0408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a28243f84f0a0c4d19740036b65e496e707565ffc244d1fb64b9b4399a5f75cd->leave($__internal_a28243f84f0a0c4d19740036b65e496e707565ffc244d1fb64b9b4399a5f75cd_prof);

        
        $__internal_51bed91311f578339510f4d5d5f3420078edeff282233c34e1a48b24031d0408->leave($__internal_51bed91311f578339510f4d5d5f3420078edeff282233c34e1a48b24031d0408_prof);

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
