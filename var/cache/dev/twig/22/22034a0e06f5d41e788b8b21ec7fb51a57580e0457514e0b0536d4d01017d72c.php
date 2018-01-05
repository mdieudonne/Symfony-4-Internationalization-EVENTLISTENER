<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_94a67e0a3e5bb0a739876a506923b15f58cd529558c3638b96ba8bea64491029 extends Twig_Template
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
        $__internal_943428f7ce9dceb3a95ce6481f0e8016f23f3380f14977e3d3f2e144ee9dad9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943428f7ce9dceb3a95ce6481f0e8016f23f3380f14977e3d3f2e144ee9dad9d->enter($__internal_943428f7ce9dceb3a95ce6481f0e8016f23f3380f14977e3d3f2e144ee9dad9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0ad7ea583973f7490b8d854ed60294cb88053b0b62d2f469162cbf20df501241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad7ea583973f7490b8d854ed60294cb88053b0b62d2f469162cbf20df501241->enter($__internal_0ad7ea583973f7490b8d854ed60294cb88053b0b62d2f469162cbf20df501241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_943428f7ce9dceb3a95ce6481f0e8016f23f3380f14977e3d3f2e144ee9dad9d->leave($__internal_943428f7ce9dceb3a95ce6481f0e8016f23f3380f14977e3d3f2e144ee9dad9d_prof);

        
        $__internal_0ad7ea583973f7490b8d854ed60294cb88053b0b62d2f469162cbf20df501241->leave($__internal_0ad7ea583973f7490b8d854ed60294cb88053b0b62d2f469162cbf20df501241_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
