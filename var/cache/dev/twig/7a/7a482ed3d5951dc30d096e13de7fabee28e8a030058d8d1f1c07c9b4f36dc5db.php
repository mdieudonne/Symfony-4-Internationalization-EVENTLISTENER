<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_15219b03ec4e8c593b99cfb75799470764941df42940936a3eca75819cecbe69 extends Twig_Template
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
        $__internal_301c9ce4e139aa83a9bc78ce9328362aae1c3dd27ab89d091279004dfc7988dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301c9ce4e139aa83a9bc78ce9328362aae1c3dd27ab89d091279004dfc7988dc->enter($__internal_301c9ce4e139aa83a9bc78ce9328362aae1c3dd27ab89d091279004dfc7988dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_4b60d969b8a0774cab629d7c6bc1e8470e20d99384bb83bf4b8a7c3b21f04058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b60d969b8a0774cab629d7c6bc1e8470e20d99384bb83bf4b8a7c3b21f04058->enter($__internal_4b60d969b8a0774cab629d7c6bc1e8470e20d99384bb83bf4b8a7c3b21f04058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_301c9ce4e139aa83a9bc78ce9328362aae1c3dd27ab89d091279004dfc7988dc->leave($__internal_301c9ce4e139aa83a9bc78ce9328362aae1c3dd27ab89d091279004dfc7988dc_prof);

        
        $__internal_4b60d969b8a0774cab629d7c6bc1e8470e20d99384bb83bf4b8a7c3b21f04058->leave($__internal_4b60d969b8a0774cab629d7c6bc1e8470e20d99384bb83bf4b8a7c3b21f04058_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
