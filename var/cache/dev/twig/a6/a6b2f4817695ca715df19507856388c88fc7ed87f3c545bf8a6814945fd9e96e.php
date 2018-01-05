<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_957ab8cfbae58dc04666902bcc6faf86ada9aa136edf019e20662df028b5c55a extends Twig_Template
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
        $__internal_3a67db74a9107412898b416ed7d04a3b45e237e026d6f585ed195829a426507f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a67db74a9107412898b416ed7d04a3b45e237e026d6f585ed195829a426507f->enter($__internal_3a67db74a9107412898b416ed7d04a3b45e237e026d6f585ed195829a426507f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c25fd33839ee4d68cd815ab3e206ceab2bec475bfefb80aa0fafdeb0b7b28bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25fd33839ee4d68cd815ab3e206ceab2bec475bfefb80aa0fafdeb0b7b28bdb->enter($__internal_c25fd33839ee4d68cd815ab3e206ceab2bec475bfefb80aa0fafdeb0b7b28bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3a67db74a9107412898b416ed7d04a3b45e237e026d6f585ed195829a426507f->leave($__internal_3a67db74a9107412898b416ed7d04a3b45e237e026d6f585ed195829a426507f_prof);

        
        $__internal_c25fd33839ee4d68cd815ab3e206ceab2bec475bfefb80aa0fafdeb0b7b28bdb->leave($__internal_c25fd33839ee4d68cd815ab3e206ceab2bec475bfefb80aa0fafdeb0b7b28bdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
