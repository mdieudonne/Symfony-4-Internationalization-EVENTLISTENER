<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_9ebd5d388edc2e0d3295ea4bf3a3997eb2056c7f49aee70229862ee76d16822c extends Twig_Template
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
        $__internal_93d04527d0cd67d2675772b35f21d7cb8466238de0d6587db8cc468bb7ad50ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d04527d0cd67d2675772b35f21d7cb8466238de0d6587db8cc468bb7ad50ab->enter($__internal_93d04527d0cd67d2675772b35f21d7cb8466238de0d6587db8cc468bb7ad50ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ecc71eead999dde650fda1acdb87c04d64acaa7e792589d413b06e24b98e3933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc71eead999dde650fda1acdb87c04d64acaa7e792589d413b06e24b98e3933->enter($__internal_ecc71eead999dde650fda1acdb87c04d64acaa7e792589d413b06e24b98e3933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_93d04527d0cd67d2675772b35f21d7cb8466238de0d6587db8cc468bb7ad50ab->leave($__internal_93d04527d0cd67d2675772b35f21d7cb8466238de0d6587db8cc468bb7ad50ab_prof);

        
        $__internal_ecc71eead999dde650fda1acdb87c04d64acaa7e792589d413b06e24b98e3933->leave($__internal_ecc71eead999dde650fda1acdb87c04d64acaa7e792589d413b06e24b98e3933_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
