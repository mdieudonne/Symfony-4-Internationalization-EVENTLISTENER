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
        $__internal_ce7314087231f5a42cc9f9191a56df1ce58f7a2ad90ef7f395b5d00781b5301a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7314087231f5a42cc9f9191a56df1ce58f7a2ad90ef7f395b5d00781b5301a->enter($__internal_ce7314087231f5a42cc9f9191a56df1ce58f7a2ad90ef7f395b5d00781b5301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e572d231b4ed6856e881ec933a1c23e68d6f3b7da46b8f1f2388f47178a8e4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e572d231b4ed6856e881ec933a1c23e68d6f3b7da46b8f1f2388f47178a8e4a9->enter($__internal_e572d231b4ed6856e881ec933a1c23e68d6f3b7da46b8f1f2388f47178a8e4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ce7314087231f5a42cc9f9191a56df1ce58f7a2ad90ef7f395b5d00781b5301a->leave($__internal_ce7314087231f5a42cc9f9191a56df1ce58f7a2ad90ef7f395b5d00781b5301a_prof);

        
        $__internal_e572d231b4ed6856e881ec933a1c23e68d6f3b7da46b8f1f2388f47178a8e4a9->leave($__internal_e572d231b4ed6856e881ec933a1c23e68d6f3b7da46b8f1f2388f47178a8e4a9_prof);

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
