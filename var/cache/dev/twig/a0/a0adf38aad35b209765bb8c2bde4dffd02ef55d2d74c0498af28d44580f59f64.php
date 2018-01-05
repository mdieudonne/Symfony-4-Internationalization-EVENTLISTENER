<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a8a091b59de1986d174c615720beb49ffbc84e185a513fcbaf08ad7174478d1d extends Twig_Template
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
        $__internal_676946a9786a6576d044dd4836df36efad8f7f1a1696f706832465d5016be4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676946a9786a6576d044dd4836df36efad8f7f1a1696f706832465d5016be4d5->enter($__internal_676946a9786a6576d044dd4836df36efad8f7f1a1696f706832465d5016be4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6362923a3d9448ce30789c4aac2e7fbc93bbaaecf758f6286d8f0d326b344a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6362923a3d9448ce30789c4aac2e7fbc93bbaaecf758f6286d8f0d326b344a45->enter($__internal_6362923a3d9448ce30789c4aac2e7fbc93bbaaecf758f6286d8f0d326b344a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_676946a9786a6576d044dd4836df36efad8f7f1a1696f706832465d5016be4d5->leave($__internal_676946a9786a6576d044dd4836df36efad8f7f1a1696f706832465d5016be4d5_prof);

        
        $__internal_6362923a3d9448ce30789c4aac2e7fbc93bbaaecf758f6286d8f0d326b344a45->leave($__internal_6362923a3d9448ce30789c4aac2e7fbc93bbaaecf758f6286d8f0d326b344a45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
