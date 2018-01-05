<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_60e5c2b9601db10ad4cf496bd938589aeea366fd01afd2a18593b6a6f3e8e09a extends Twig_Template
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
        $__internal_ae07c35dcd6a728ec674bc895019b6fe789996596b20e5dee72cff193a04f846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae07c35dcd6a728ec674bc895019b6fe789996596b20e5dee72cff193a04f846->enter($__internal_ae07c35dcd6a728ec674bc895019b6fe789996596b20e5dee72cff193a04f846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_39d8c21b7ad05f8e87249618c2492fd629458302f3f922d01ec08c92453f3b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d8c21b7ad05f8e87249618c2492fd629458302f3f922d01ec08c92453f3b59->enter($__internal_39d8c21b7ad05f8e87249618c2492fd629458302f3f922d01ec08c92453f3b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_ae07c35dcd6a728ec674bc895019b6fe789996596b20e5dee72cff193a04f846->leave($__internal_ae07c35dcd6a728ec674bc895019b6fe789996596b20e5dee72cff193a04f846_prof);

        
        $__internal_39d8c21b7ad05f8e87249618c2492fd629458302f3f922d01ec08c92453f3b59->leave($__internal_39d8c21b7ad05f8e87249618c2492fd629458302f3f922d01ec08c92453f3b59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
