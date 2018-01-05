<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e93b0cc36fc9ab59b443436d48078f2b36d4487e33513021787a70043cf4143d extends Twig_Template
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
        $__internal_07fdf47d11e844649fb7d2bd72d098ccfb7eed4e3838d54569517f9dfad66c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fdf47d11e844649fb7d2bd72d098ccfb7eed4e3838d54569517f9dfad66c97->enter($__internal_07fdf47d11e844649fb7d2bd72d098ccfb7eed4e3838d54569517f9dfad66c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_759d5064d61f28f2bd73f961bdc33dbbec3a566e49c828a16bfffb33824ec47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759d5064d61f28f2bd73f961bdc33dbbec3a566e49c828a16bfffb33824ec47a->enter($__internal_759d5064d61f28f2bd73f961bdc33dbbec3a566e49c828a16bfffb33824ec47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_07fdf47d11e844649fb7d2bd72d098ccfb7eed4e3838d54569517f9dfad66c97->leave($__internal_07fdf47d11e844649fb7d2bd72d098ccfb7eed4e3838d54569517f9dfad66c97_prof);

        
        $__internal_759d5064d61f28f2bd73f961bdc33dbbec3a566e49c828a16bfffb33824ec47a->leave($__internal_759d5064d61f28f2bd73f961bdc33dbbec3a566e49c828a16bfffb33824ec47a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
