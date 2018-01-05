<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_18a607bb11f6447941d4d2ae6208deb079980c6f81d4928a301f68c45c35be0f extends Twig_Template
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
        $__internal_fece1e9b04e1fb92ca84845d54241e3ffd9a5bc04a5bd826514377c223daf155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fece1e9b04e1fb92ca84845d54241e3ffd9a5bc04a5bd826514377c223daf155->enter($__internal_fece1e9b04e1fb92ca84845d54241e3ffd9a5bc04a5bd826514377c223daf155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_713ebb5af59bfcac6df1d6616221d2f6d84ed0567be6b2f60909d98529adf30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713ebb5af59bfcac6df1d6616221d2f6d84ed0567be6b2f60909d98529adf30b->enter($__internal_713ebb5af59bfcac6df1d6616221d2f6d84ed0567be6b2f60909d98529adf30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fece1e9b04e1fb92ca84845d54241e3ffd9a5bc04a5bd826514377c223daf155->leave($__internal_fece1e9b04e1fb92ca84845d54241e3ffd9a5bc04a5bd826514377c223daf155_prof);

        
        $__internal_713ebb5af59bfcac6df1d6616221d2f6d84ed0567be6b2f60909d98529adf30b->leave($__internal_713ebb5af59bfcac6df1d6616221d2f6d84ed0567be6b2f60909d98529adf30b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
