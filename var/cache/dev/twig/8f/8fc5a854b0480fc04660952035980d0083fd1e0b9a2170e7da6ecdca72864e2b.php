<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_370b1b70cb47ad2516e43df14a1de1f374b0106a2a26ca1328ff3de200dab8a1 extends Twig_Template
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
        $__internal_0bad16c2eaaddda24d96f5e6df03f3d9905b7a3b74fd1e3fe078c597038780b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bad16c2eaaddda24d96f5e6df03f3d9905b7a3b74fd1e3fe078c597038780b6->enter($__internal_0bad16c2eaaddda24d96f5e6df03f3d9905b7a3b74fd1e3fe078c597038780b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ac46acda970e705190963aab48742cbcf879915b92af88626766da36b72921e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac46acda970e705190963aab48742cbcf879915b92af88626766da36b72921e3->enter($__internal_ac46acda970e705190963aab48742cbcf879915b92af88626766da36b72921e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0bad16c2eaaddda24d96f5e6df03f3d9905b7a3b74fd1e3fe078c597038780b6->leave($__internal_0bad16c2eaaddda24d96f5e6df03f3d9905b7a3b74fd1e3fe078c597038780b6_prof);

        
        $__internal_ac46acda970e705190963aab48742cbcf879915b92af88626766da36b72921e3->leave($__internal_ac46acda970e705190963aab48742cbcf879915b92af88626766da36b72921e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
