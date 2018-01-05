<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_704bef2099c9f8adbe93b8e80ec916aa146d8b683be21ecc1e8d429c8c80fa71 extends Twig_Template
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
        $__internal_c9fbc55bf24e02a2641a5bf376d3ca9e9af0c0aba0c34fe64dfa7080fc3036dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fbc55bf24e02a2641a5bf376d3ca9e9af0c0aba0c34fe64dfa7080fc3036dc->enter($__internal_c9fbc55bf24e02a2641a5bf376d3ca9e9af0c0aba0c34fe64dfa7080fc3036dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_53b85c68a39ab2657dcf9a6a89639e3d91e568c79bc653745b0fc17329dfaa03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b85c68a39ab2657dcf9a6a89639e3d91e568c79bc653745b0fc17329dfaa03->enter($__internal_53b85c68a39ab2657dcf9a6a89639e3d91e568c79bc653745b0fc17329dfaa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c9fbc55bf24e02a2641a5bf376d3ca9e9af0c0aba0c34fe64dfa7080fc3036dc->leave($__internal_c9fbc55bf24e02a2641a5bf376d3ca9e9af0c0aba0c34fe64dfa7080fc3036dc_prof);

        
        $__internal_53b85c68a39ab2657dcf9a6a89639e3d91e568c79bc653745b0fc17329dfaa03->leave($__internal_53b85c68a39ab2657dcf9a6a89639e3d91e568c79bc653745b0fc17329dfaa03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
