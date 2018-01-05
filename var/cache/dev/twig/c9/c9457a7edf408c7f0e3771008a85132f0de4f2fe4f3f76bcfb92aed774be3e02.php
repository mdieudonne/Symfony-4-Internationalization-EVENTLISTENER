<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cb6b1b08154684c6fabaa4faeb4abe31787b41e07090a4a0883777936f7c8491 extends Twig_Template
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
        $__internal_6007d5956841e839f26ee15b6e2ae707bfa5e905c03cd9c432d10e5093288bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6007d5956841e839f26ee15b6e2ae707bfa5e905c03cd9c432d10e5093288bfa->enter($__internal_6007d5956841e839f26ee15b6e2ae707bfa5e905c03cd9c432d10e5093288bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9c527c0ad57f25c3eda167fa9f418894d3d86a3e8c3b7277ca33a02983b27af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c527c0ad57f25c3eda167fa9f418894d3d86a3e8c3b7277ca33a02983b27af2->enter($__internal_9c527c0ad57f25c3eda167fa9f418894d3d86a3e8c3b7277ca33a02983b27af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6007d5956841e839f26ee15b6e2ae707bfa5e905c03cd9c432d10e5093288bfa->leave($__internal_6007d5956841e839f26ee15b6e2ae707bfa5e905c03cd9c432d10e5093288bfa_prof);

        
        $__internal_9c527c0ad57f25c3eda167fa9f418894d3d86a3e8c3b7277ca33a02983b27af2->leave($__internal_9c527c0ad57f25c3eda167fa9f418894d3d86a3e8c3b7277ca33a02983b27af2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
