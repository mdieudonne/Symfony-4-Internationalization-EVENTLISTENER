<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d6c75316196ee223c546074e420ad61a5ca5420eb65792370648f21c1a544e1f extends Twig_Template
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
        $__internal_3a84849637d636bd6ade7beaaf94ea1861bd801452286734e8caab2d59a881bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a84849637d636bd6ade7beaaf94ea1861bd801452286734e8caab2d59a881bd->enter($__internal_3a84849637d636bd6ade7beaaf94ea1861bd801452286734e8caab2d59a881bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_cd318a26bef8d3be97571476fd58a1f3afbd69c19e9e1fef2db78a11f324196f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd318a26bef8d3be97571476fd58a1f3afbd69c19e9e1fef2db78a11f324196f->enter($__internal_cd318a26bef8d3be97571476fd58a1f3afbd69c19e9e1fef2db78a11f324196f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3a84849637d636bd6ade7beaaf94ea1861bd801452286734e8caab2d59a881bd->leave($__internal_3a84849637d636bd6ade7beaaf94ea1861bd801452286734e8caab2d59a881bd_prof);

        
        $__internal_cd318a26bef8d3be97571476fd58a1f3afbd69c19e9e1fef2db78a11f324196f->leave($__internal_cd318a26bef8d3be97571476fd58a1f3afbd69c19e9e1fef2db78a11f324196f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
