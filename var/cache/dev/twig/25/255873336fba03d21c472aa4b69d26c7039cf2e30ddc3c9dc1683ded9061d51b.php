<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_13a4de81b027cbb2ee15897c8e5abc7f11e8a822d3983943f77897dd53d6be45 extends Twig_Template
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
        $__internal_fdc77d86f9e1274ce7501a3b05b8dc630f38a504074c8fbe714f8c07207fa99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc77d86f9e1274ce7501a3b05b8dc630f38a504074c8fbe714f8c07207fa99e->enter($__internal_fdc77d86f9e1274ce7501a3b05b8dc630f38a504074c8fbe714f8c07207fa99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3a5dd4f83c798cb563133032d9a5fadefa366574962b87650f7f8ed0a8a163fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5dd4f83c798cb563133032d9a5fadefa366574962b87650f7f8ed0a8a163fb->enter($__internal_3a5dd4f83c798cb563133032d9a5fadefa366574962b87650f7f8ed0a8a163fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fdc77d86f9e1274ce7501a3b05b8dc630f38a504074c8fbe714f8c07207fa99e->leave($__internal_fdc77d86f9e1274ce7501a3b05b8dc630f38a504074c8fbe714f8c07207fa99e_prof);

        
        $__internal_3a5dd4f83c798cb563133032d9a5fadefa366574962b87650f7f8ed0a8a163fb->leave($__internal_3a5dd4f83c798cb563133032d9a5fadefa366574962b87650f7f8ed0a8a163fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
