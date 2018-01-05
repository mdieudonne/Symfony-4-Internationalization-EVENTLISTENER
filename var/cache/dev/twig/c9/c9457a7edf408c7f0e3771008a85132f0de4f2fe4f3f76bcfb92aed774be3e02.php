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
        $__internal_48b4c3dd83075c50e122f08c2a103e126e8ce8f4765d4172ad75421326ca122c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b4c3dd83075c50e122f08c2a103e126e8ce8f4765d4172ad75421326ca122c->enter($__internal_48b4c3dd83075c50e122f08c2a103e126e8ce8f4765d4172ad75421326ca122c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_fa93410dbc472b4955c911265d8067fc36d24a6ad1dc8a3ec938fc38d3c4d27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa93410dbc472b4955c911265d8067fc36d24a6ad1dc8a3ec938fc38d3c4d27e->enter($__internal_fa93410dbc472b4955c911265d8067fc36d24a6ad1dc8a3ec938fc38d3c4d27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_48b4c3dd83075c50e122f08c2a103e126e8ce8f4765d4172ad75421326ca122c->leave($__internal_48b4c3dd83075c50e122f08c2a103e126e8ce8f4765d4172ad75421326ca122c_prof);

        
        $__internal_fa93410dbc472b4955c911265d8067fc36d24a6ad1dc8a3ec938fc38d3c4d27e->leave($__internal_fa93410dbc472b4955c911265d8067fc36d24a6ad1dc8a3ec938fc38d3c4d27e_prof);

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
