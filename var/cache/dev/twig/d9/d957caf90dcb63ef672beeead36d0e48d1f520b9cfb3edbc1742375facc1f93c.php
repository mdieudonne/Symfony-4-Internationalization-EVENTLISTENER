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
        $__internal_1e530da9fb232d73f94f41a8568c5133cb0bf8be781a28c37212c8d76fe8d1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e530da9fb232d73f94f41a8568c5133cb0bf8be781a28c37212c8d76fe8d1a9->enter($__internal_1e530da9fb232d73f94f41a8568c5133cb0bf8be781a28c37212c8d76fe8d1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4c89d54cd8169390668b6175d09c5942f77d42af8e3c9662373ade739bd06e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c89d54cd8169390668b6175d09c5942f77d42af8e3c9662373ade739bd06e41->enter($__internal_4c89d54cd8169390668b6175d09c5942f77d42af8e3c9662373ade739bd06e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1e530da9fb232d73f94f41a8568c5133cb0bf8be781a28c37212c8d76fe8d1a9->leave($__internal_1e530da9fb232d73f94f41a8568c5133cb0bf8be781a28c37212c8d76fe8d1a9_prof);

        
        $__internal_4c89d54cd8169390668b6175d09c5942f77d42af8e3c9662373ade739bd06e41->leave($__internal_4c89d54cd8169390668b6175d09c5942f77d42af8e3c9662373ade739bd06e41_prof);

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
