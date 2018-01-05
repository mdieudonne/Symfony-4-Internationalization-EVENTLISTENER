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
        $__internal_5c3ea1651ba4e6cf372857987cd6934b7db7d90498665c64cf1f045316f400e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3ea1651ba4e6cf372857987cd6934b7db7d90498665c64cf1f045316f400e8->enter($__internal_5c3ea1651ba4e6cf372857987cd6934b7db7d90498665c64cf1f045316f400e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_544986efb9648703a1027341a7e5ce7dcc80b75da33c1331ebf121576d227d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544986efb9648703a1027341a7e5ce7dcc80b75da33c1331ebf121576d227d4d->enter($__internal_544986efb9648703a1027341a7e5ce7dcc80b75da33c1331ebf121576d227d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_5c3ea1651ba4e6cf372857987cd6934b7db7d90498665c64cf1f045316f400e8->leave($__internal_5c3ea1651ba4e6cf372857987cd6934b7db7d90498665c64cf1f045316f400e8_prof);

        
        $__internal_544986efb9648703a1027341a7e5ce7dcc80b75da33c1331ebf121576d227d4d->leave($__internal_544986efb9648703a1027341a7e5ce7dcc80b75da33c1331ebf121576d227d4d_prof);

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
