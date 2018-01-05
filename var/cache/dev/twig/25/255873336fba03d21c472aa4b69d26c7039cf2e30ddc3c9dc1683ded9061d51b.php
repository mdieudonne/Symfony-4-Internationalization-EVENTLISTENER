<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_13a4de81b027cbb2ee15897c8e5abc7f11e8a822d3983943f77897dd53d6be45 extends Twig_Template
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
        $__internal_5508637fa9eb98da1958f82684230881aeb05f3f44416143af768f729461cd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5508637fa9eb98da1958f82684230881aeb05f3f44416143af768f729461cd81->enter($__internal_5508637fa9eb98da1958f82684230881aeb05f3f44416143af768f729461cd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0c6cd84981051470a2adfa1690088daa3ea7c860919755b6d50db6be5d64ea74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6cd84981051470a2adfa1690088daa3ea7c860919755b6d50db6be5d64ea74->enter($__internal_0c6cd84981051470a2adfa1690088daa3ea7c860919755b6d50db6be5d64ea74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5508637fa9eb98da1958f82684230881aeb05f3f44416143af768f729461cd81->leave($__internal_5508637fa9eb98da1958f82684230881aeb05f3f44416143af768f729461cd81_prof);

        
        $__internal_0c6cd84981051470a2adfa1690088daa3ea7c860919755b6d50db6be5d64ea74->leave($__internal_0c6cd84981051470a2adfa1690088daa3ea7c860919755b6d50db6be5d64ea74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
