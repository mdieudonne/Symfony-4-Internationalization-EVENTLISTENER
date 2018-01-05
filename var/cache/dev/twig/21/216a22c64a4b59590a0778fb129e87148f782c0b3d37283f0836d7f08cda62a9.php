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
        $__internal_7a1594ecdd40a0d38735515650bfab9d5502eaecec85e8a1f209ee4524ff73a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1594ecdd40a0d38735515650bfab9d5502eaecec85e8a1f209ee4524ff73a3->enter($__internal_7a1594ecdd40a0d38735515650bfab9d5502eaecec85e8a1f209ee4524ff73a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b7e7696db4c6f0d7cb0fc4d798efc45276565e0c013fcf213953e739dcdcc431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e7696db4c6f0d7cb0fc4d798efc45276565e0c013fcf213953e739dcdcc431->enter($__internal_b7e7696db4c6f0d7cb0fc4d798efc45276565e0c013fcf213953e739dcdcc431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7a1594ecdd40a0d38735515650bfab9d5502eaecec85e8a1f209ee4524ff73a3->leave($__internal_7a1594ecdd40a0d38735515650bfab9d5502eaecec85e8a1f209ee4524ff73a3_prof);

        
        $__internal_b7e7696db4c6f0d7cb0fc4d798efc45276565e0c013fcf213953e739dcdcc431->leave($__internal_b7e7696db4c6f0d7cb0fc4d798efc45276565e0c013fcf213953e739dcdcc431_prof);

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
