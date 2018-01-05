<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2722c31e4443b0e4e5f1f4aa687381a42967bc0e5d3c3e4fd97e4916a6335f60 extends Twig_Template
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
        $__internal_06ace16ad95d375f8eeaf30b3a128a78c370cc35b2a912540c664b30bcd5cebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ace16ad95d375f8eeaf30b3a128a78c370cc35b2a912540c664b30bcd5cebf->enter($__internal_06ace16ad95d375f8eeaf30b3a128a78c370cc35b2a912540c664b30bcd5cebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_be46cf5fc73313dab1430136f7be2134f3db0b8ba8727b22b1b5095f572a7349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be46cf5fc73313dab1430136f7be2134f3db0b8ba8727b22b1b5095f572a7349->enter($__internal_be46cf5fc73313dab1430136f7be2134f3db0b8ba8727b22b1b5095f572a7349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_06ace16ad95d375f8eeaf30b3a128a78c370cc35b2a912540c664b30bcd5cebf->leave($__internal_06ace16ad95d375f8eeaf30b3a128a78c370cc35b2a912540c664b30bcd5cebf_prof);

        
        $__internal_be46cf5fc73313dab1430136f7be2134f3db0b8ba8727b22b1b5095f572a7349->leave($__internal_be46cf5fc73313dab1430136f7be2134f3db0b8ba8727b22b1b5095f572a7349_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
