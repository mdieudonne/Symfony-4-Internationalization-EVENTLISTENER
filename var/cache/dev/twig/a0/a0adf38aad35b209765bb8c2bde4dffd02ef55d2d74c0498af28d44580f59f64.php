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
        $__internal_9d50344622761bda598a4187d246fb4ab59b6157bad8c5eae0da4afa059bde8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d50344622761bda598a4187d246fb4ab59b6157bad8c5eae0da4afa059bde8b->enter($__internal_9d50344622761bda598a4187d246fb4ab59b6157bad8c5eae0da4afa059bde8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_83c095bcab882617ec16f1e1523f69aba0bdc6c86c4c3f6527d763ac826d02e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c095bcab882617ec16f1e1523f69aba0bdc6c86c4c3f6527d763ac826d02e7->enter($__internal_83c095bcab882617ec16f1e1523f69aba0bdc6c86c4c3f6527d763ac826d02e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9d50344622761bda598a4187d246fb4ab59b6157bad8c5eae0da4afa059bde8b->leave($__internal_9d50344622761bda598a4187d246fb4ab59b6157bad8c5eae0da4afa059bde8b_prof);

        
        $__internal_83c095bcab882617ec16f1e1523f69aba0bdc6c86c4c3f6527d763ac826d02e7->leave($__internal_83c095bcab882617ec16f1e1523f69aba0bdc6c86c4c3f6527d763ac826d02e7_prof);

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
