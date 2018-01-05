<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f59af876867151cddc379380c3c9e0258f56c4fdd8cb67db472e30c70e63dd07 extends Twig_Template
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
        $__internal_dd368228dbca6ee00b62d321685fb9820552ef8b43edab3c982a59bbacb5ba54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd368228dbca6ee00b62d321685fb9820552ef8b43edab3c982a59bbacb5ba54->enter($__internal_dd368228dbca6ee00b62d321685fb9820552ef8b43edab3c982a59bbacb5ba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_cdaea4e6f10d7226c93df4610b739f522c8b86b8dffda1bdfb572b9e313c09a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdaea4e6f10d7226c93df4610b739f522c8b86b8dffda1bdfb572b9e313c09a9->enter($__internal_cdaea4e6f10d7226c93df4610b739f522c8b86b8dffda1bdfb572b9e313c09a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dd368228dbca6ee00b62d321685fb9820552ef8b43edab3c982a59bbacb5ba54->leave($__internal_dd368228dbca6ee00b62d321685fb9820552ef8b43edab3c982a59bbacb5ba54_prof);

        
        $__internal_cdaea4e6f10d7226c93df4610b739f522c8b86b8dffda1bdfb572b9e313c09a9->leave($__internal_cdaea4e6f10d7226c93df4610b739f522c8b86b8dffda1bdfb572b9e313c09a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
